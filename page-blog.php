<?php
/**
 * Template Name: Blog Page
 *
 * @package Sandbox
 *
 */

get_header();
?>

<div class="sandbox-blog-page-wrapper">
	<main id="primary" class="site-main">
		<div class="sandbox-blog-main-container">

    <h1><?php the_title(); ?></h1>

    <div><?php the_content(); ?>  </div>

<?php



  $sbox_blog_args = array(
      'post_type'   		=> 'post',
          'order'           => 'DESC',
          'posts_per_page'  => '-1'
          );

      $sbox_blog = new WP_Query( $sbox_blog_args );

      if ( $sbox_blog->have_posts() ) {

        while ( $sbox_blog->have_posts() ) :

          $sbox_blog->the_post(); ?>

    <div class="sandbox-blog-post-card">


      <div class="sandbox-blog-list-image-wrapper">
        <a href="<?php the_permalink(); ?>">
        <?php the_post_thumbnail();  ?>
        </a>
      </div>

      <h2><a href="<?php the_permalink(); ?>">  <?php the_title(); ?></a> </h2>

      <p class="sandbox-blog-list-pub-date"><?php echo get_the_date(); ?></p>


      <?php the_excerpt(); ?>

    </div>

  <?php endwhile; ?>


<?php } else { ?>
  <div>
    <h3>No posts found</h3>
  </div>
<?php } ?>


			


		</div>

	</main><!-- #main -->

<?php get_sidebar(); ?>

</div>

<?php get_footer(); ?>
