


<?php get_header(); ?>

<?php 
if(have_posts()):
      while( have_posts()) : the_post(); ?>
      <h1><?php the_title(); ?></h1>
      <?php 
      if(has_post_thumbnail()){
            the_post_thumbnail('full');
      }
      ?>
      <div><?php the_content(); ?></div>
      <?php endwhile; 
      else: 
            echo '<p> No posts found</p> ';
      endif;
      ?>
      <?php get_footer(); ?>