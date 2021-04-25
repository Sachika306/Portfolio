<?php get_header();

?>

<section class="page-section post-section">
  <div class="inner">

    <div class="content-wrapper">
      <?php get_template_part('template-parts/backtohome'); ?>

      <div class="page-textbox-description">
        <ul>
          <?php 
          while (have_posts()) { 
          the_post(); ?>
            <li><a href="<?php echo get_the_permalink(); ?>"><?php the_title(); ?></a>（<?php echo get_the_date(); ?>）</li>
          <?php } ?>
        </ul>
        <div class="pagination">
          <?php echo paginate_links(); ?>
        </div>
      </div>
    </div>

  </div>

</section>

<?php 
get_footer();
?>
