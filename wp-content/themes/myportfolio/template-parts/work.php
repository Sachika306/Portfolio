<figure>
  <div class="figimage-wrapper">
    <a href="<?php echo get_permalink(); ?>" data-size="960x720">
      <img class="work-item" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
    </a>
  </div>
    <br>
  <div class="figcaption-wrapper">
    <figcaption>
      <p class="work-item-title"><a href="<?php echo get_permalink(); ?>"><?php echo the_title(); ?></a></p>
		<p>概要：<?php echo get_field('summary'); ?></p>
		<p>環境など：<?php echo get_field('material'); ?></p>
		<p>制作期間：<?php echo get_field('workperiod'); ?></p>
    </figcaption>
  </div>
</figure>
