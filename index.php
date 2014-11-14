<?php get_header(); ?>

<div class="row">
  <div class="large-12 columns">
    <div class="nav-bar right">
      <?php wp_nav_menu( array(
          'menu_class'  => 'button-group',
        
      ) ); ?>
   </div>

   <h1><?php bloginfo( 'name' ); ?></h1>
   <h1><small><?php bloginfo( 'description' ); ?></small></h1>
   <hr/>
 </div>
</div>

<div class="row">

  <div class="large-9 columns" role="content">

  <?php if ( have_posts() ) : ?>
  
    <?php while( have_posts() ) : the_post(); ?>

      <?php get_template_part( 'content' ); ?>

    <?php endwhile; ?>

  <?php endif; ?>

  </div>

<aside class="large-3 columns">

<?php get_sidebar(); ?>

</aside>

  </div>

</div>

<?php get_footer(); ?>