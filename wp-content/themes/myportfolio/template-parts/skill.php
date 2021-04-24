<div class="skills-item">
    <div class="skills-item-background">
      <div class="item-icon">
        <i class="fa <?php echo get_field('fontawesome'); ?>" aria-hidden="true"></i>
      </div>
    </div>
  <div class="item-body">
    <div class="item-title">
      <h3><?php echo the_title(); ?></h3>
    </div>
    <div class="item-text">
      <div class="item-text-paragraphs">
        <?php the_content(); ?>
      </div>
    </div>
  </div>
</div>
