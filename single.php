<?php get_header(); ?>

<!--<header class="page-header page-header-blog text-center">

  <h1>El blog de Ellysium</h1>

  <section>

    <?php get_search_form(); ?>

  </section>

</header>
-->


<section class="container-fluid light-bg">
<div class="row padding-top">
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <article class="col-md-8 col-md-offset-2 col-xs-12">

      <h2>

        <a href="<?php the_permalink(); ?>">

          <?php the_title(); ?>

        </a>

        <p>

          <small>

            <?php the_author_posts_link(); ?> / <?php echo get_the_category_list(', ', 'single' ); ?>

          </small>

        </p>

      </h2>

      <div class="">

        <?php the_content(); ?>

      </div>

    <?php endwhile; ?>

  </article>

<?php else :

  ?>

  <p>

    <?php _e( 'Sorry, no posts matched your criteria.' ); ?>

  </p>

<?php endif; ?>

<aside class="">

  <?php comments_template(); ?> 

</aside>
</div>
</section>

<?php get_footer(); ?>

