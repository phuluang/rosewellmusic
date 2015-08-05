<?php
        $currentlang = get_bloginfo('language');
        if($currentlang=="th"):?>

<footer class="content-info" role="contentinfo">
	<div class="container">
		<div class="footer-info row">
			<div class="col-sm-3">
				<p>
					<strong>สถาบันดนตรีโรสเวล</strong><br />
					130/5 แยก 6-9 ถนนลาดพร้าว 41<br />
					แขวงจันทรเกษม เขตจตุจักร <br />
					กรุงเทพ 10900<br />
					โทร. 02-930-4545, 085-1000-987
				</p>
			</div>	
			<div class="col-sm-3 follow-us-wrap">
				<p>
					<strong>ติดตามเรา</strong>
				</p>
				<div class="clearfix">
					<a href="https://www.facebook.com/rosewellmusic" alt="Go to fanpage" title="Our Fanpage" class="facebook-icon">
					</a>
					<a href="http://instagram.com/rosewellmusic/" alt="Go to Instagram" title="Our Instagram" class="instagram-icon">
					</a>
					<a href="https://goo.gl/GoYcNd" alt="Go to Our Channel" title="Our Channel" class="youtube-icon">
					</a>
				</div>
			</div>
			<div class="col-sm-5 col-sm-push-1">
				<p class="certified-info">
					รับรองมาตราฐานการสอนและสอบโดย <br /><strong>The Associated Board of The Royal Schools of Music (ABRSM)</strong>
				</p>
			</div>
		</div>
	</div>
	<div class="copyright">
  		<div class="container">
  			<div class="row">
  				<div class="col-md-9 col-md-push-3 clearfix">
	    			<?php dynamic_sidebar('sidebar-footer'); ?>
	    		</div>
	    		<div class="col-md-3 col-md-pull-9 clearfix">
	    			<p>&copy; Copyright <?php echo date('Y'); ?> Rosewell</p>
	    		</div>
    		</div>
  		</div>
	</div>
</footer>


<?php else: ?>       


<footer class="content-info" role="contentinfo">
	<div class="container">
		<div class="footer-info row">
			<div class="col-sm-3">
				<p>
					<strong>Rosewell Music School</strong><br />
					130/5 (6-9) Ladprao 41 Rd.<br />
					Chatrakaserm Chatuchak <br />
					Bangkok 10900<br />
					Tel: 02-930-4545, 085-1000-987
				</p>
			</div>	
			<div class="col-sm-3 follow-us-wrap">
				<p>
					<strong>Follow us</strong>
				</p>
				<div class="clearfix">
					<a href="https://www.facebook.com/rosewellmusic" alt="Go to fanpage" title="Our Fanpage" class="facebook-icon">
					</a>
					<a href="http://instagram.com/rosewellmusic/" alt="Go to Instagram" title="Our Instagram" class="instagram-icon">
					</a>
					<a href="https://goo.gl/GoYcNd" alt="Go to Our Channel" title="Our Channel" class="youtube-icon">
					</a>
				</div>
			</div>
			<div class="col-sm-5 col-sm-push-1">
				<p class="certified-info">
					Certified teaching and course syllabus represented by <strong>The Associated Board of The Royal Schools of Music (ABRSM)</strong>
				</p>
			</div>
		</div>
	</div>
	<div class="copyright">
  		<div class="container">
  			<div class="row">
  				<div class="col-md-9 col-md-push-3 clearfix">
	    			<?php dynamic_sidebar('sidebar-footer'); ?>
	    		</div>
	    		<div class="col-md-3 col-md-pull-9 clearfix">
	    			<p>&copy; Copyright <?php echo date('Y'); ?> Rosewell</p>
	    		</div>
    		</div>
  		</div>
	</div>
</footer>
<?php endif; ?>
<?php wp_footer(); ?>
