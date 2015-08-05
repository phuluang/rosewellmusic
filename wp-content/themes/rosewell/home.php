<?php 
echo do_shortcode('[metaslider id=36]'); 
?>
<?php
        $currentlang = get_bloginfo('language');
        if($currentlang=="th"):?>
<div class="welcome-wrap content-section-wrap row">
  <div class="col-sm-6">
    <div class="section-header">
      <h3>
        เกี่ยวกับ <br />
        สถาบันดนตรีโรสเวล มิวสิคเฮ้าส์
      </h3>
    </div>
    <p>
      เป็นสถาบันที่สร้างบ้านเปิดเป็นโรงเรียนดนตรี ให้บริการ การสอนดนตรีในรูปแบบการสอนที่เป็นกันเอง และ อบอุ่น นำมาด้วยการสอนที่ทันสมัย เราเป็นสถาบันดนตรีแห่งแรกที่เปิดบริการ การสอนด้วย<strong>สองภาษา</strong> ที่นักเรียนสามารถเลือกเรียนได้ ไม่ว่าจะเป็นการสอนในรูปแบบการพูด การเขียนภาษาอังกฤษ หรือ การสอนด้วยภาษาเอกนั้นก็คือ ภาษาไทย นอกเหนือไปกว่านั้น...
      <a href="<?php bloginfo('url'); ?>/?p=345">Continued</a>
    </p>
  </div>
  <div class="col-sm-6">
    <div class="welcome-img">
      <a href="<?php bloginfo('url'); ?>/who-are-we/"><img src="<?php bloginfo('template_directory'); ?>/assets/img/banner2.jpg" alt="banner" width="700" height="261" class="alignnone size-full wp-image-8" /></a>
    </div>
  </div>
</div>
<div class="row content-section-wrap">
  <div class="col-sm-12">
    <div class="section-border"></div>
  </div>
  <?php /*
  <div class="col-sm-6 col-sm-push-6">
    <div class="row">
      <div class="col-sm-12">
        <div class="section-header">
          <h3>
            ข่าวและกิจกรรม
          </h3>
          <p>
            Our activity
          </p>
        </div>
      </div>
    </div>

    <?php if (!have_posts()) : ?>
      <div class="alert alert-warning">
        <?php _e('Sorry, no results were found.', 'roots'); ?>
      </div>
      <?php get_search_form(); ?>
    <?php endif; ?>

    <div class="row news-row">
      <?php query_posts('cat=7&posts_per_page=2'); ?>
      <?php while (have_posts()) : the_post(); ?>
        <div class="col-sm-6">
          <?php get_template_part('templates/content', get_post_format()); ?>
        </div>
      <?php endwhile; ?>
    </div>
</div>
*/ ?>
<div class="col-sm-12">
  <div class="row time-table">
    <div class="col-sm-6">
      <div class="row">
        <div class="col-sm-12">
          <div class="section-header">
            <h3>
              เวลาเปิดทำการ
            </h3>
            <p>
              Super fun times!!
            </p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-12">
          <div class="panel panel-default">
            <table class="table">
              <thead>
                <tr>
                  <th>วัน</th>
                  <th>เวลา</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>จันทร์</td>
                  <td>10:00 น. - 21:00 น.</td>
                </tr>
                <tr>
                  <td>อังคาร</td>
                  <td>10:00 น. - 21:00 น.</td>
                </tr>
                <tr>
                  <td>พุธ</td>
                  <td>10:00 น. - 21:00 น.</td>
                </tr>
                <tr>
                  <td>พฤหัส</td>
                  <td>10:00 น. - 21:00 น.</td>
                </tr>
                <tr>
                  <td>ศุกร์</td>
                  <td>10:00 น. - 21:00 น.</td>
                </tr>
                <tr>
                  <td>เสาร์</td>
                  <td>10:00 น. - 21:00 น.</td>
                </tr>
                <tr>
                  <td>อาทิตย์</td>
                  <td>10:00 น. - 21:00 น.</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-6">
      <div class="row">
        <div class="col-sm-12">
          <div class="section-header">
            <h3>
              หลักสูตรที่เปิดสอน
            </h3>
            <p>
              What do you want to play?
            </p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-12">
          <div class="panel panel-default">
            <table class="table">
              <tbody>
                <tr>
                  <td>เปียโน</td>
                  <td>แซ็กโซโฟน</td>
                </tr>
                <tr>
                  <td>ไวโอลิน</td>
                  <td>กีตาร์</td>
                </tr>
                <tr>
                  <td>ทรัมเป็ต</td>
                  <td>อูคูเลเล่</td>
                </tr>
                <tr>
                  <td>เบส</td>
                  <td>ขับร้อง</td>
                </tr>
                <tr>
                  <td>ดับเบิลเบส</td>
                  <td>ทฤษฎีดนตรี</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php /*
  <div class="row open-courses">    
  </div>
  */ ?>
</div>
</div>


         <?php else: ?>


<div class="welcome-wrap content-section-wrap row">
  <div class="col-sm-6">
    <div class="section-header">
      <h3>
        About<br />
        ROSEWELL
      </h3>
    </div>
    <p>
      <strong>Rosewell Music House</strong> is the first <strong>bilingual music school</strong> in Thailand, which aim to provide an innovative dimension of musical education both in Practical and Theory of music to International standard level...
      <a href="<?php bloginfo('url'); ?>/who-are-we/">Continued</a>
    </p>
  </div>
  <div class="col-sm-6">
    <div class="welcome-img">
      <a href="<?php bloginfo('url'); ?>/who-are-we/"><img src="<?php bloginfo('template_directory'); ?>/assets/img/banner2.jpg" alt="banner" width="700" height="261" class="alignnone size-full wp-image-8" /></a>
    </div>
  </div>
</div>
<div class="row content-section-wrap">
  <div class="col-sm-12">
    <div class="section-border"></div>
  </div>
  <?php /*
  <div class="col-sm-6 col-sm-push-6">
    <div class="row">
      <div class="col-sm-12">
        <div class="section-header">
          <h3>
            News &amp; Events
          </h3>
          <p>
            Our activity
          </p>
        </div>
      </div>
    </div>

    <?php if (!have_posts()) : ?>
      <div class="alert alert-warning">
        <?php _e('Sorry, no results were found.', 'roots'); ?>
      </div>
      <?php get_search_form(); ?>
    <?php endif; ?>

    <div class="row news-row">
      <?php query_posts('cat=7&posts_per_page=2'); ?>
      <?php while (have_posts()) : the_post(); ?>
        <div class="col-sm-6">
          <?php get_template_part('templates/content', get_post_format()); ?>
        </div>
      <?php endwhile; ?>
    </div>
</div>
*/ ?>
<div class="col-sm-12">
  <div class="row time-table">
    <div class="col-sm-6">
      <div class="row">
        <div class="col-sm-12">
          <div class="section-header">
            <h3>
              School Open Times
            </h3>
            <p>
              Super fun times!!
            </p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-12">
          <div class="panel panel-default">
            <table class="table">
              <thead>
                <tr>
                  <th>Day</th>
                  <th>Time</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Monday</td>
                  <td>10 AM - 9 PM</td>
                </tr>
                <tr>
                  <td>Tuesday</td>
                  <td>10 AM - 9 PM</td>
                </tr>
                <tr>
                  <td>Wednesday</td>
                  <td>10 AM - 9 PM</td>
                </tr>
                <tr>
                  <td>Thursday</td>
                  <td>10 AM - 9 PM</td>
                </tr>
                <tr>
                  <td>Friday</td>
                  <td>10 AM - 9 PM</td>
                </tr>
                <tr>
                  <td>Saturday</td>
                  <td>10 AM - 9 PM</td>
                </tr>
                <tr>
                  <td>Sunday</td>
                  <td>10 AM - 9 PM</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-6">
      <div class="row">
        <div class="col-sm-12">
          <div class="section-header">
            <h3>
              Available Courses
            </h3>
            <p>
              What do you want to play?
            </p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-12">
          <div class="panel panel-default">
            <table class="table">
              <tbody>
                <tr>
                  <td>Piano</td>
                  <td>Saxophone</td>
                </tr>
                <tr>
                  <td>Violin</td>
                  <td>Guitar</td>
                </tr>
                <tr>
                  <td>Trumpet</td>
                  <td>Ukulele</td>
                </tr>
                <tr>
                  <td>Bass</td>
                  <td>Voice</td>
                </tr>
                <tr>
                  <td>Double Bass</td>
                  <td>Music Theory</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php /*
  <div class="row open-courses">
  */ ?>
  </div>
</div>
</div>
<?php endif; ?>
