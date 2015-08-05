<?php get_template_part('templates/page', 'header'); ?>

<div class="row">
<?php query_posts('cat=9&posts_per_page=100'); ?>
<?php while (have_posts()) : the_post(); ?>
  <div class="col-md-3 col-sm-4 col-xs-6 teachers-item">
    <article <?php post_class(); ?>>
      <div class="view">
        <a href="<?php the_permalink(); ?>">
        <?php if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
        the_post_thumbnail();
        }
        ?>
        </a>
        <div class="mask">
          <a href="<?php the_permalink(); ?>">
            <div class="teacher-title">
            <h2 class="entry-title"><?php the_title(); ?></h2>
            <!-- div class="entry-summary">
              <?php the_excerpt(); ?>
            </div -->
            </div>
          </a>
        </div>
        <!-- a href="<?php the_permalink(); ?>">
        <div class="mask">
          <h2 class="entry-title"><?php the_title(); ?></h2>
          <div class="entry-summary">
            <?php the_excerpt(); ?>
          </div >
          <a href="<?php the_permalink(); ?>" class="btn btn-default">Readmore</a>
        </div>
        </a -->
      </div>
    </article>
  </div>
<?php endwhile; ?>
</div>
