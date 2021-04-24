<?php get_header();

  while(have_posts()) {
    the_post();

?>

<section class="page-section post-section">
  <div class="inner">

    <div class="content-wrapper">

    <?php get_template_part('template-parts/backtohome'); ?>

      <div class="page-textbox-description">

        <h1><?php the_title(); ?></h1>

        <?php if (get_field('summary') !== null) : ?>
          <p style="font-size: 14px;"><?php echo get_field('summary'); ?>
          <?php get_field('workperiod') !== null  ? print '（制作期間：'.get_field('workperiod').'）' : 0 ; ?></p>
        <?php endif ?>
        <hr>

        <?php if (get_the_post_thumbnail_url() !== null) : ?>
          <div class="thumbnail-image">
              <img src="<?php the_post_thumbnail_url(); ?>" alt="">
          </div>
        <?php endif ?>

        <?php the_content(); ?>
		
      </div>

      
    </div>

  </div>

</section>

<?php }
get_footer();
?>
