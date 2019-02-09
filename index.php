<?php get_header();?>

	<main>
		<section id="skills" class="container">
			<h2 class="heading">SKILLS</h2>
			<div class="skill-boxes d-flex flex-wrap justify-content-between">

				<div class="skill-box">
					<h3 class="skill-title">Wordpress</h3>
					<div class="skill-image">
						<img src="https://placehold.jp/150x150.png" alt="">
					</div>
					<div class="skill-description">
						<p>skill-description.skill-description.skill-description.skill-description.skill-description.skill-description.</p>
					</div>
				</div>
				<div class="skill-box">
					<h3 class="skill-title">HTML/CSS</h3>
					<div class="skill-image">
						<img src="https://placehold.jp/150x150.png" alt="">
					</div>
					<div class="skill-description">
						<p>skill-description.skill-description.skill-description.skill-description.skill-description.skill-description.</p>
					</div>
				</div>
				<div class="skill-box">
					<h3 class="skill-title">JavaScript</h3>
					<div class="skill-image">
						<img src="https://placehold.jp/150x150.png" alt="">
					</div>
					<div class="skill-description">
						<p>skill-description.skill-description.skill-description.skill-description.skill-description.skill-description.</p>
					</div>
				</div>
				<div class="skill-box">
					<h3 class="skill-title">php</h3>
					<div class="skill-image">
						<img src="https://placehold.jp/150x150.png" alt="">
					</div>
					<div class="skill-description">
						<p>skill-description.skill-description.skill-description.skill-description.skill-description.skill-description.</p>
					</div>
				</div>
				<div class="skill-box">
					<h3 class="skill-title">Sass</h3>
					<div class="skill-image">
						<img src="https://placehold.jp/150x150.png" alt="">
					</div>
					<div class="skill-description">
						<p>skill-description.skill-description.skill-description.skill-description.skill-description.skill-description.</p>
					</div>
				</div>
				<div class="skill-box">
					<h3 class="skill-title">Git</h3>
					<div class="skill-image">
						<img src="https://placehold.jp/150x150.png" alt="">
					</div>
					<div class="skill-description">
						<p>skill-description.skill-description.skill-description.skill-description.skill-description.skill-description.</p>
					</div>
				</div>
			</div>
		</section><!--SKILLsここまで -->
		<section id="works" class="container">
			<h2 class="heading">WORKS</h2>
			<div class="work-boxes d-flex flex-wrap justify-content-between">
				<div class="work-box">
					<h3 class="work-title">work1</h3>
					<div class="work-image">
						<img src="https://placehold.jp/300x400.png" alt="">
					</div>
					<div class="work-description">
						<p>work-description.work-description.work-description.work-description.work-description.work-description.work-description.work-description.work-description.work-description.work-description.</p>
					</div>
				</div>
				<div class="work-box">
					<h3 class="work-title">work1</h3>
					<div class="work-image">
						<img src="https://placehold.jp/300x400.png" alt="">
					</div>
					<div class="work-description">
						<p>work-description.work-description.work-description.work-description.work-description.work-description.work-description.work-description.work-description.work-description.work-description.</p>
					</div>
				</div>
				<div class="work-box">
					<h3 class="work-title">work1</h3>
					<div class="work-image">
						<img src="https://placehold.jp/300x400.png" alt="">
					</div>
					<div class="work-description">
						<p>work-description.work-description.work-description.work-description.work-description.work-description.work-description.work-description.work-description.work-description.work-description.</p>
					</div>
				</div>
			</div>
		</section><!-- WORKsここまで -->
		<section id="about" class="container">
			<h2 class="heading">ABOUT</h2>
			<img src="https://placehold.jp/200x200.png" alt="">
			<article>
				<p>
				about me.about me.about me.about me.about me.about me.about me.about me.about me.about me.about me.about me.about me.about me.about me.about me.about me.about me.about me.about me.about me.about me.about me.about me.about me.about me.about me.about me.about me.about me.about me.about me.about me.about me.about me.about me.about me.about me.about me.about me.about me.about me.about me.about me.about me.about me.about me.about me.about me.about me.about me.about me.about me.about me.about me.about me.about me.about me.about me.about me.about me.about me.about me.
				</p>
				<p>
				about me.about me.about me.about me.about me.about me.about me.about me.about me.about me.about me.about me.about me.about me.about me.about me.about me.about me.about me.about me.about me.about me.about me.about me.about me.about me.about me.about me.about me.about me.about me.about me.about me.about me.about me.about me.about me.about me.
				</p>
			</article>
		</section><!--ABOUTここまで-->>
		<section id="blog" class="container">
			<h2 class="heading">BLOG</h2>
			<?php
			$args = array(
			'post_type' => 'blog', /* カスタム投稿名が「blog」の場合 */
			'posts_per_page' => 3, /* 表示する数 */
			); ?>

			<?php $my_query = new WP_Query( $args ); ?>
			<ul>
				<?php while ( $my_query->have_posts() ) : $my_query->the_post(); ?>
				<article <?php post_class( 'kiji-list' ); ?>>
					<a href="<?php the_permalink(); ?>">
					<?php var_dump(the_permalink()); ?>
					<!--画像を追加-->
					<?php if( has_post_thumbnail() ): ?>
						<?php the_post_thumbnail('medium'); ?>
					<?php else: ?>
						<img src="<?php echo get_template_directory_uri(); ?>/images/no-image.png" alt="no-img"/>
					<?php endif; ?>
					<div class="text">
						<!--タイトル-->
						<h2><?php the_title(); ?></h2>
						<!--投稿日を表示-->
						<span class="kiji-date">
						<i class="fas fa-pencil-alt"></i>
						<time datetime="<?php echo get_the_date( 'Y-m-d' ); ?>">
							<?php echo get_the_date(); ?>
						</time>
						</span>
						<!--カテゴリ-->
						<?php if (!is_category()): ?>
						<?php if( has_category() ): ?>
						<span class="cat-data">
							<?php $postcat=get_the_category(); echo $postcat[0]->name; ?>
						</span>
						<?php endif; ?>
						<?php endif; ?>
						<!--抜粋-->
						<?php the_excerpt(); ?>
					</div>
					</a>
				</article>
				<?php endwhile; ?><!--ループ終了-->

			<?php wp_reset_postdata(); ?>
		</section><!--BLOGここまで-->
		<section id="contact" class="container">
			<h2 class="heading">CONTACT</h2>
			<?php echo do_shortcode('[contact-form-7 id="2196" title="コンタクトフォーム 1"]'); ?>
		</section>

	</main>

<?php get_footer(); ?>