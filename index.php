<?php get_header();?>

	<main>
		<section id="about" class="container">
			<h2 class="heading">ABOUT ME</h2>
			<div class="about-items d-flex justify-content-between align-items-start flex-wrap">
				<img src="<?php bloginfo('template_directory');?>/images/about.png" alt="">
				<article>
					<p>
					こんにちは！私は3歳と2歳の子供をお母さんをしているMOOです。
					過去にシステム開発会社でSEをしていた経験と子育てで培われた要望の読み取り能力を武器にWEB制作のお仕事をしています。
					<br>
					<br>
					ホームページを作ってみたいけど、何をどう伝えればいいの？という企業様や個人事業主さま、ざっくりとしたご要望からでもしっかりと形にしてまいりますので、まずはお気軽にご相談くださいませ。
					</p>
				</article>
			</div>
		</section><!--ABOUTここまで-->
		<section id="skills" class="container">
			<h2 class="heading">SKILLS</h2>
			<div class="skill-boxes d-flex flex-wrap justify-content-between">

				<div class="skill-box">
					<h3 class="skill-title">Wordpress</h3>
					<div class="skill-image">
						<img src="<?php bloginfo('template_directory');?>/images/wordpress-icon.png" alt="">
					</div>
					<div class="skill-description">
						<!-- <p>サイト構築からテーマ作成、カスタマイズなど幅広く対応</p> -->
					</div>
				</div>
				<div class="skill-box">
					<h3 class="skill-title">php</h3>
					<div class="skill-image">
						<img src="<?php bloginfo('template_directory');?>/images/php.png" alt="">
					</div>
					<div class="skill-description">
						<!-- <p>skill-description.skill-description.skill-description.skill-description.skill-description.skill-description.</p> -->
					</div>
				</div>
				<div class="skill-box">
					<h3 class="skill-title">HTML</h3>
					<div class="skill-image">
						<img src="<?php bloginfo('template_directory');?>/images/html-5.png" alt="">
					</div>
					<div class="skill-description">
						<!-- <p>skill-description.skill-description.skill-description.skill-description.skill-description.skill-description.</p> -->
					</div>
				</div>
				<div class="skill-box">
					<h3 class="skill-title">CSS</h3>
					<div class="skill-image">
						<img src="<?php bloginfo('template_directory');?>/images/css-3.png" alt="">
					</div>
					<div class="skill-description">
						<!-- <p>skill-description.skill-description.skill-description.skill-description.skill-description.skill-description.</p> -->
					</div>
				</div>
				<div class="skill-box">
					<h3 class="skill-title">Bootstrap</h3>
					<div class="skill-image">
						<img src="<?php bloginfo('template_directory');?>/images/bootstrap.png" alt="">
					</div>
					<div class="skill-description">
						<!-- <p>skill-description.skill-description.skill-description.skill-description.skill-description.skill-description.</p> -->
					</div>
				</div>
				<div class="skill-box">
					<h3 class="skill-title">JavaScript</h3>
					<div class="skill-image">
						<img src="<?php bloginfo('template_directory');?>/images/javascript.png" alt="">
					</div>
					<div class="skill-description">
						<!-- <p>skill-description.skill-description.skill-description.skill-description.skill-description.skill-description.</p> -->
					</div>
				</div>

				<div class="skill-box">
					<h3 class="skill-title">Sass</h3>
					<div class="skill-image">
						<img src="<?php bloginfo('template_directory');?>/images/sass.png" alt="">
					</div>
					<div class="skill-description">
						<!-- <p>skill-description.skill-description.skill-description.skill-description.skill-description.skill-description.</p> -->
					</div>
				</div>
				<div class="skill-box">
					<h3 class="skill-title">Git</h3>
					<div class="skill-image">
						<img src="<?php bloginfo('template_directory');?>/images/git-icon.png" alt="">
					</div>
					<div class="skill-description">
						<!-- <p>skill-description.skill-description.skill-description.skill-description.skill-description.skill-description.</p> -->
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
						<img src="<?php bloginfo('template_directory');?>/images/screencapture-pc-cafe.png" alt="work1">
					</div>
					<div class="work-description">
						<p>架空カフェのホームページです。ヘッダーはクロスフェード。レスポンシブに対応。</p>
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
				<!-- <div class="work-box">
					<h3 class="work-title">work1</h3>
					<div class="work-image">
						<img src="https://placehold.jp/300x400.png" alt="">
					</div>
					<div class="work-description">
						<p>work-description.work-description.work-description.work-description.work-description.work-description.work-description.work-description.work-description.work-description.work-description.</p>
					</div>
				</div> -->
			</div>
		</section><!-- WORKsここまで -->
		<section id="service" class="container">
			<h2 class="heading">SERVICE</h2>
			<div class="service-items d-flex justify-content-between flex-wrap">
				<div class="service-item d-flex justify-content-between flex-wrap">
					<div class="service-image">
						<img src="<?php echo get_template_directory_uri(); ?>/images/service1.png" alt="service1"/>
					</div>
					<div class="service-description">
						<ul>
							<li>トップページ＋下層4ページ</li>
							<li>GoogleAnalytics設置</li>
							<li>簡易お問い合わせフォーム設置</li>
						</ul>
					</div>
				</div>
				<div class="service-item d-flex justify-content-between flex-wrap">
					<div class="service-image">
						<img src="<?php echo get_template_directory_uri(); ?>/images/no-image.png" alt="no-img"/>
					</div>
					<div class="service-description">
						<ul>
							<li></li>
							<li></li>
							<li></li>
						</ul>
					</div>
				</div>
			</div>
		</section>
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