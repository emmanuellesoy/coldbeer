<?php get_header(); ?>
<header class="page-header page-header-blog text-center">
  <h1>El blog de Ellysium</h1>
  <section>
    <?php get_search_form(); ?>
  </section>
</header>

<section class="container light-bg">
  <div
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <article class="row">
      <h2>
        <a href="<?php the_permalink(); ?>">
          <?php the_title(); ?>
        </a>
      </h2>
      <div class="">
        <?php the_excerpt(); ?>
      </div>
      <aside class="">
        <?php echo get_the_category_list(', ', 'single' ); ?>
      </aside>
      <!-- <p>
        <a href="<?php the_permalink(); ?>"><span class="label label-primary">Leer m&aacute;s</span></a>
      </p> -->
    <?php endwhile; ?>
  </article>
<?php else :
  ?>
  <p>
    <?php _e( 'Sorry, no posts matched your criteria.' ); ?>
  </p>
<?php endif; ?>
</section>
<?php get_footer(); ?>
