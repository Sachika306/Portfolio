<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 */

get_header();
?>


			  <section class="intro-section" id="">
						<div class="intro-wrapper">
							<h2 class="intro-title openSans"><?php echo get_bloginfo(); ?></h2>
							<p class="intro-subtitle openSans"><?php echo get_bloginfo ( 'description' ); ?></p>
						</div>
			  </section>

			  <section class="about-section" id="intro">
			    <div class="inner">
			      <div class="title-wrapper">
			        <h2 class="title">ABOUT</h2>
			      </div>
			      <div class="subtitle-wrapper">
			        <p class="subtitle">自己紹介</p>
			      </div>

			      <div class="about-content">
			        <div class="about-image-wrapper">
			          <img class="about-image" src="<?php echo get_avatar_url(1, array('size' => 200)); ?>" alt="">
			        </div>
			        <div class="about-text-wrapper">
								<?php echo wpautop(get_the_author_meta('user_description', 1)); ?>
			        </div>
			      </div>
			    </div>
			  </section>


			  <section class="works-section section" id="works">
			    <div class="inner">
			      <div class="title-wrapper">
			        <h2 class="title">WORKS</h2>
			      </div>
			      <div class="subtitle-wrapper">
			        <p class="subtitle">Web制作と開発の記録です。</p>
			      </div>
			      <div class="my-gallery">
							<?php
								$works = new WP_Query (array(
									'post_type' => 'work'
								));

								while($works->have_posts()) {
									$works->the_post();
									get_template_part('template-parts/work');
								}
								?>
			      </div>
			    </div>
			  </section>

			  <section class="profile-section section" id="profile">
			    <div class="inner">
			      <div class="title-wrapper">
			        <h2 class="title">PROFILE</h2>
			      </div>
			      <div class="subtitle-wrapper">
			        <p class="subtitle">経歴について</p>
			      </div>

			      <div class="profile-wrapper">

			        <div class="profile-text">
						<?php
							$works = new WP_Query (array(
								'post_type' => 'profile'
							));

							while($works->have_posts()) {
								$works->the_post();
								get_template_part('template-parts/profile');
							}
							?>
			        </div>
			      </div>
			    </div>
			  </section>

			  <section class="skills-section section" id="skill">
			    <div class="inner">
			      <div class="title-wrapper">
			        <h2 class="title">SKILLS</h2>
			      </div>
			      <div class="subtitle-wrapper">
			        <p class="subtitle">学習した言語やその他のスキルについてです。</p>
			      </div>

			      <div class="skills-list-wrapper">
					<?php
						$works = new WP_Query (array(
							'post_type' => 'skill'
						));

						while($works->have_posts()) {
							$works->the_post();
							get_template_part('template-parts/skill');
						}
						?>
			        </div> 
			      </div> 
			  </section>

			  <section　class="section" id="blog">
					<div class="blog-section" style="">
				    <a href="#blog"></a>
						<div class="inner">
						<div class="title-wrapper">
							<h2 class="title">BLOG</h2>
						</div>
						<div class="subtitle-wrapper">
						<p class="subtitle">日々勉強したことなどの記録です</p>
						</div>
						<div class="blog-wrapper">
								<ul class="blog-posts">
									<?php $posts = new WP_Query(array(
										'posts_per_page' => 5
									));
										while ($posts->have_posts()) { 
										$posts->the_post(); ?>
										<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>（<?php echo get_the_date(); ?>）</li>
									<?php } ?>
								</ul>
								<p class="link_to_archive"><a href="<?php get_home_url(); ?>?author=1">記事一覧へ</a></p>
						</div>

						</div>
					</div>
			  </section>

			  <!-- <section　class="section" id="contact">
					<div class="contact-section" style="">
				    <a href="#contact"></a>
						<div class="inner">
							<div class="title-wrapper">
								<h2 class="title">CONTACT</h2>
							</div>
							<div class="subtitle-wrapper">
							<p class="subtitle">お問い合わせ・SNS</p>
							</div>
							<div class="email-wrapper">
								<div class="circle-email circle active1">
									<a href="mailto:sachikababa306@gmail.com" target="_blank">
										<i class="fa fa-envelope fa-3x" aria-hidden="true"></i>
									</a>
								</div>
								<div class="email">
									<p><a href="mailto:" target="_blank" style="text-decoration:none;"></a></p>
								</div>
							</div>
							<div class="contactbutton-list-wrapper">
								<?php
									// $works = new WP_Query (array(
									//	'post_type' => 'contact'
									// ));

									// while($works->have_posts()) {
									// 	$works->the_post();
									// 	get_template_part('template-parts/button');
									// }
									?>
							</div>
						</div>
					</div> 
			  </section> -->

<?php
get_footer();
