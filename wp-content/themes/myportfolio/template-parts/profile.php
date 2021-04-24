<div class="profile-text-content">
  <div class="profile-text-titlewrapper">
    <h3 class="profile-text-title"><?php the_title(); ?></h3>
    <div class="profile-text-titleborder"></div>
  </div>
  <div class="profile-datalist">
    <dl>
      <dt><?php echo get_field('period1'); ?></dt>
      <dd><p><?php echo get_field('event1'); ?></p></dd>
    </dl>
    <dl>
      <dt><?php echo get_field('period2'); ?></dt>
      <dd><p><?php echo get_field('event2'); ?></p></dd>
    </dl>
    <dl>
      <dt><?php echo get_field('period3'); ?></dt>
      <dd><p><?php echo get_field('event3'); ?></p></dd>
    </dl>
    <dl>
      <dt><?php echo get_field('period4'); ?></dt>
      <dd><p><?php echo get_field('event4'); ?></p></dd>
    </dl>
  </div>
  <div class="profile-text-comment">
    <p><?php the_content(); ?></p>
  </div>

</div>
