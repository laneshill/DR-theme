<?php
/**
 * @package WordPress
 * @subpackage Custom Theme
 */
  /*
Template Name: Blog
*/
get_header(); ?>
</head>
<body id="blog-eatit" class="<?php if(function_exists('body_class')) body_class();  ?>">
<div id="page" class="page">
<div id="pagewidth" class="section narrowcolumn index block">
//  <?php include (TEMPLATEPATH . '/includes/header.php');?>
  <div id="content" class="block">
//    <?php include (TEMPLATEPATH . '/includes/post/beforepost.php');?>    
  </div>
<div class="entry block" > 
 <?php $blog_query = new WP_Query('posts_per_page=20&category=news&orderby=date&order=DEC'); ?>
 <?php if (have_posts()) : ?>
    <?php while ($blog_query->have_posts()) : $blog_query->the_post(); ?>
    <div <?php post_class() ?> id="post-<?php the_ID(); ?>">
//      <?php include (TEMPLATEPATH . '/includes/post/postheader.php');?>
      <div class="entry section">
        <?php the_content('Read the rest of this entry &raquo;'); ?>
      </div>
      <div class="postfooter section">
//        <?php include (TEMPLATEPATH . '/includes/post/postbyline.php');?>
//        <?php include (TEMPLATEPATH . '/includes/post/postmeta.php');?>
      </div>
//      <?php include (TEMPLATEPATH . '/includes/post/postedit.php');?>
    </div>
    <?php endwhile; ?>
//   <?php include (TEMPLATEPATH . '/includes/post/postnav.php');?>
    <?php else : ?>
//   <?php include (TEMPLATEPATH . '/includes/post/post404.php');?>
    <?php endif; ?>
</div>
 <?php get_sidebar('main'); ?>
</div>
<?php get_footer(); ?>
