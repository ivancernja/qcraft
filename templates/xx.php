
 <div class="row" style="margin-bottom: 20px;">
<?php while ( have_posts() ): the_post(); ?>
 <?php $count++; ?>
 <?php if($count % 2 == 0): ?>
    
   <?php endif ?>

<div class="col-xs-12 col-sm-6 col-md-6">
<a href="<?php the_permalink(); ?>" class="featured_yaht">
<div class="boat-type">
<div class="featured-yacht-thumbnail"><?php echo get_the_post_thumbnail() ?></div>
<div class="boat-overlay">
<div class="boat-overlay-text">
<div class="gt-site-content">   <?php // echo get_the_content() ?>
  <?php // the_post_thumbnail('yacht-thumbnail'); ?>
  </div>
<?php the_title(); ?>
</div>
</div>
</div></a></div>

 <?php  if($count % 2 == 0): ?>
 </div>
  <div class="row">
 <?php endif ?>
<?php endwhile; ?>
</div>


