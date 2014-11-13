<?php get_header(); ?>

<div class="row">
  <div class="large-12 columns">
    <div class="nav-bar right">
     <ul class="button-group">
       <li><a href="#" class="button">Link 1</a></li>
       <li><a href="#" class="button">Link 2</a></li>
       <li><a href="#" class="button">Link 3</a></li>
       <li><a href="#" class="button">Link 4</a></li>
     </ul>
   </div>
   <h1>Blog <small>This is my blog. It's awesome.</small></h1>
   <hr/>
 </div>
</div>

<div class="row">

  <?php if ( have_posts() ) : ?>
  
    <?php while( have_posts() ) : the_post(); ?>

      <?php get_template_part( 'content' ); ?>

    <?php endwhile; ?>

  <?php endif; ?>

<?php get_sidebar(); ?>

</div>

<?php get_footer(); ?>