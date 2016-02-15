<?php get_header(); ?>
<section class="container-fluid light-bg">
<div class="row padding-top">
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <article class="col-md-8 col-md-offset-2 col-xs-12">
      <h2>
        <a href="<?php the_permalink(); ?>">
          <?php the_title(); ?>
        </a>
        <p>
          <small class="by_post_txt">
            Por   <?php the_author_posts_link(); ?> / <?php echo get_the_category_list(', ', 'single' ); ?>
          </small>
        </p>
      </h2>
      <div class="">
        <?php the_content(); ?>
      </div>
      <div class="col-md-12 blog-separator"></div>
      <aside class="col-md-12">
        <?php comments_template(); ?> 
      </aside>      
    <?php endwhile; ?>
  </article>
<?php else :
  ?>
  <p>
    <?php _e( 'Sorry, no posts matched your criteria.' ); ?>
  </p>
<?php endif; ?>
</div>
</section>
<?php get_footer(); ?>