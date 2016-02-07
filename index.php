<?php get_header(); ?>
<header class="page-header page-header-blog text-center">
  <h1>El blog de Ellysium</h1>
  <section>
    <?php get_search_form(); ?>
  </section>
</header>

<section id="blog-container" class="container-fluid">
  <div class="col-md-12">
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <article class="col-md-8 col-md-offset-2 col-xs-12">
      <h2 class="col-md-8">
        <a href="<?php the_permalink(); ?>">
          <?php the_title(); ?>
        </a>
      </h2>
      <div class="col-md-12">
        <?php the_excerpt(); ?>
      </div>
      <aside class="col-md-12">
        Categoría: <?php echo get_the_category_list(', ', 'single' ); ?>
      </aside>
      <div class="col-md-12">
        <a href="<?php the_permalink(); ?>" class="btn btn-info btn-lg">Leer más</a>
        <div class="col-md-12 blog-separator"></div>        
      </di>      
      <!-- <p>
        <a href="<?php the_permalink(); ?>"><span class="label label-primary">Leer m&aacute;s</span></a>
      </p> -->
    </article>
  <?php endwhile; ?>
<?php else :
  ?>
  <p>
    <?php _e( 'Sorry, no posts matched your criteria.' ); ?>
  </p>
<?php endif; ?>
  </div>
</section>
<?php get_footer(); ?>
