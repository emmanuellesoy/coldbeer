<?php /* Template Name: General Page */ ?>

<?php get_header(); ?>
<?php 
$title = get_the_title($post); 
    $parent_title = get_the_title($post->post_parent);
?>
<header class="page-header text-center">
  <h1><?php echo $parent_title ?></h1>
</header>

<div class="container light-bg">
  <div class="col-md-12 general-content">
    <?php $content = apply_filters('the_content', $post->post_content); ?>
    <?php echo $content; ?>
  </div>
</div>
<?php get_footer(); ?>

