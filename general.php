<?php /* Template Name: General Page */ ?>

<?php get_header(); ?>
<?php 
$title = get_the_title($post); 
    $parent_title = get_the_title($post->post_parent);
?>
<!--- adfasdfasdfas -->
<?php if (has_post_thumbnail( $post->ID ) ): ?>
  <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
  <header class="page-header-custome text-center" style="background-image: url('<?php echo $image[0]; ?>')">
<?php endif; ?>
<!--- adfasdfasdfas -->
  <h1><?php echo $parent_title ?></h1>
</header>

<div class="container light-bg">
  <div class="col-md-8 center-block general-content">
    <?php $content = apply_filters('the_content', $post->post_content); ?>
    <?php echo $content; ?>
  </div>
</div>
<!--
<div class="col-md-12">
  <div class="col-md-6 text-center">
    <img class="alignnone size-full wp-image-1848" src="http://ellysium.emmanuellelaguna.com/wp-content/uploads/2016/02/foto-hideki.png" alt="foto-hideki" width="230" height="230" />
    <p>Hideki Arao</p>
    <p>CEO y Co-Fundador</p>
  </div>
  <div class="col-md-6 text-center">
    <img class="alignnone size-full wp-image-1848" src="http://ellysium.emmanuellelaguna.com/wp-content/uploads/2016/02/foto-hideki.png" alt="foto-hideki" width="230" height="230" />
    <p>Diego Peláez</p>
    <p>Co-Fundador</p>
  </div>
</div> -->
<?php get_footer(); ?>

