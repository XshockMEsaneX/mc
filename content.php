<article class="<?php post_class(); ?>">

  <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
  <h6>Written by <a href="<?php the_author_link(); ?>"><?php the_author(); ?></a> on <?php the_date() ?>.</h6>


    <?php echo apply_filters('the_content', $post->post_content); ?>
    <?php if ( has_post_thumbnail() ) : ?>
      <img src="http://placehold.it/400x240&text=[img]"/>
    <?php endif; ?>
    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
      <?php the_post_thumbnail(); ?>
    </a>
  </article>

  <hr/>
