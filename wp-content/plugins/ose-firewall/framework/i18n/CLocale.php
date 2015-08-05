<?php
/**
 * @version     2.0 +
 * @package       Open Source Excellence Security Suite
 * @subpackage    Centrora Security Firewall
 * @subpackage    Open Source Excellence WordPress Firewall
 * @author        Open Source Excellence {@link http://www.opensource-excellence.com}
 * @author        Created on 01-Jun-2013
 * @license GNU/GPL http://www.gnu.org/copyleft/gpl.html
 *
 *
 *  This program is free software: you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation, either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  This program is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  You should have received a copy of the GNU General Public License
 *  along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *  @Copyright Copyright (C) 2008 - 2012- ... Open Source Excellence
 */
if (!defined('OSE_FRAMEWORK') && !defined('OSE_ADMINPATH') && !defined('_JEXEC'))
{
	die('Direct Access Not Allowed');
}

/**
 * CLocale class file.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @link http://www.yiiframework.com/
 * @copyright Copyright &copy; 2008-2011 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

/**
 * CLocale represents the data relevant to a locale.
 *
 * The data includes the number formatting information and date formatting information.
 *
 * @property string $id The locale ID (in canonical form).
 * @property CNumberFormatter $numberFormatter The number formatter for this locale.
 * @property CDateFormatter $dateFormatter The date formatter for this locale.
 * @property string $decimalFormat The decimal format.
 * @property string $currencyFormat The currency format.
 * @property string $percentFormat The percent format.
 * @property string $scientificFormat The scientific format.
 * @property array $monthNames Month names indexed by month values (1-12).
 * @property array $weekDayNames The weekday names indexed by weekday values (0-6, 0 means Sunday, 1 Monday, etc.).
 * @property string $aMName The AM name.
 * @property string $pMName The PM name.
 * @property string $dateFormat Date format.
 * @property string $timeFormat Date format.
 * @property string $dateTimeFormat Datetime format, i.e., the order of date and time.
 * @property string $orientation The character orientation, which is either 'ltr' (left-to-right) or 'rtl' (right-to-left).
 * @property array $pluralRules Plural forms expressions.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @package system.i18n
 * @since 1.0
 */
class CLocale extends CComponent
{
	/**
	 * @var string the directory that contains the locale data. If this property is not set,
	 * the locale data will be loaded from 'framework/i18n/data'.
	 * @since 1.1.0
	 */
	public static $dataPath;

	private $_id;
	private $_data;
	private $_dateFormatter;
	private $_numberFormatter;

	/**
	 * Returns the instance of the specified locale.
	 * Since the constructor of CLocale is protected, you can only use
	 * this method to obtain an instance of the specified locale.
	 * @param string $id the locale ID (e.g. en_US)
	 * @return CLocale the locale instance
	 */
	public static function getInstance($id)
	{
		static $locales=array();
		if(isset($locales[$id]))
			return $locales[$id];
		else
			return $locales[$id]=new CLocale($id);
	}

	/**
	 * @return array IDs of the locales which the framework can recognize
	 */
	public static function getLocaleIDs()
	{
		static $locales;
		if($locales===null)
		{
			$locales=array();
			$dataPath=self::$dataPath===null ? dirname(__FILE__).DIRECTORY_SEPARATOR.'data' : self::$dataPath;
			$folder=@opendir($dataPath);
			while(($file=@readdir($folder))!==false)
			{
				$fullPath=$dataPath.DIRECTORY_SEPARATOR.$file;
				if(substr($file,-4)==='.php' && is_file($fullPath))
					$locales[]=substr($file,0,-4);
			}
			closedir($folder);
			sort($locales);
		}
		return $locales;
	}

	/**
	 * Constructor.
	 * Since the constructor is protected, please use {@link getInstance}
	 * to obtain an instance of the specified locale.
	 * @param string $id the locale ID (e.g. en_US)
	 */
	protected function __construct($id)
	{
		$this->_id=self::getCanonicalID($id);
		$dataPath=self::$dataPath===null ? dirname(__FILE__).DIRECTORY_SEPARATOR.'data' : self::$dataPath;
		$dataFile=$dataPath.DIRECTORY_SEPARATOR.$this->_id.'.php';
		if(is_file($dataFile))
			$this->_data=require($dataFile);
		else
			throw new CException(Yii::t('yii','Unrecognized locale "{locale}".',array('{locale}'=>$id)));
	}

	/**
	 * Converts a locale ID to its canonical form.
	 * In canonical form, a locale ID consists of only underscores and lower-case letters.
	 * @param string $id the locale ID to be converted
	 * @return string the locale ID in canonical form
	 */
	public static function getCanonicalID($id)
	{
		return strtolower(str_replace('-','_',$id));
	}

	/**
	 * @return string the locale ID (in canonical form)
	 */
	public function getId()
	{
		return $this->_id;
	}

	/**
	 * @return CNumberFormatter the number formatter for this locale
	 */
	public function getNumberFormatter()
	{
		if($this->_numberFormatter===null)
			$this->_numberFormatter=new CNumberFormatter($this);
		return $this->_numberFormatter;
	}

	/**
	 * @return CDateFormatter the date formatter for this locale
	 */
	public function getDateFormatter()
	{
		if($this->_dateFormatter===null)
			$this->_dateFormatter=new CDateFormatter($this);
		return $this->_dateFormatter;
	}

	/**
	 * @param string $currency 3-letter ISO 4217 code. For example, the code "USD" represents the US Dollar and "EUR" represents the Euro currency.
	 * @return string the localized currency symbol. Null if the symbol does not exist.
	 */
	public function getCurrencySymbol($currency)
	{
		return isset($this->_data['currencySymbols'][$currency]) ? $this->_data['currencySymbols'][$currency] : null;
	}

	/**
	 * @param string $name symbol name
	 * @return string symbol
	 */
	public function getNumberSymbol($name)
	{
		return isset($this->_data['numberSymbols'][$name]) ? $this->_data['numberSymbols'][$name] : null;
	}

	/**
	 * @return string the decimal format
	 */
	public function getDecimalFormat()
	{
		return $this->_data['decimalFormat'];
	}

	/**
	 * @return string the currency format
	 */
	public function getCurrencyFormat()
	{
		return $this->_data['currencyFormat'];
	}

	/**
	 * @return string the percent format
	 */
	public function getPercentFormat()
	{
		return $this->_data['percentFormat'];
	}

	/**
	 * @return string the scientific format
	 */
	public function getScientificFormat()
	{
		return $this->_data['scientificFormat'];
	}

	/**
	 * @param integer $month month (1-12)
	 * @param string $width month name width. It can be 'wide', 'abbreviated' or 'narrow'.
	 * @param boolean $standAlone whether the month name should be returned in stand-alone format
	 * @return string the month name
	 */
	public function getMonthName($month,$width='wide',$standAlone=false)
	{
		if($standAlone)
			return isset($this->_data['monthNamesSA'][$width][$month]) ? $this->_data['monthNamesSA'][$width][$month] : $this->_data['monthNames'][$width][$month];
		else
			return isset($this->_data['monthNames'][$width][$month]) ? $this->_data['monthNames'][$width][$month] : $this->_data['monthNamesSA'][$width][$month];
	}

	/**
	 * Returns the month names in the specified width.
	 * @param string $width month name width. It can be 'wide', 'abbreviated' or 'narrow'.
	 * @param boolean $standAlone whether the month names should be returned in stand-alone format
	 * @return array month names indexed by month values (1-12)
	 */
	public function getMonthNames($width='wide',$standAlone=false)
	{
		if($standAlone)
			return isset($this->_data['monthNamesSA'][$width]) ? $this->_data['monthNamesSA'][$width] : $this->_data['monthNames'][$width];
		else
			return isset($this->_data['monthNames'][$width]) ? $this->_data['monthNames'][$width] : $this->_data['monthNamesSA'][