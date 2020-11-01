<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Hardolass
 */

get_header();
?>

	<main id="primary" class="site-main">

		<div class="video-container">
      <video autoplay loop muted id="video-bg">
        <source src="<?php echo get_template_directory_uri(); ?>/videos/main--darken.mp4" type="video/mp4">
			</video>
			<div class="video-container_text text-primary text-sm-center">
				<section class="container">
					<p class="video-container_hero-text">
						ガラスコーティングで、<br/>
						<strong>
							常識を塗り替える。
						</strong>
					</p>
					<p>
						きめ細かな対応力と、充実の開発環境で
						お客様の課題にきめ細かくこたえるガラスコーティング剤メーカー。
					</p>
					<a href="/contact/" class="btn btn-secondary">
						ガラスコーティング剤について問い合わせる
					</a>
				</section>
			</div>
		</div>

		<section class="section">
			<div class="container">
				<div class="row">
					<div class="col s6 offset-s3 m6 center">
						<img class="responsive-img" src="<?php echo get_template_directory_uri(); ?>/img/img_hardolass_case-1.png">
					</div>
					<div class="col s12 m6">
						<div class="heading-variant">
							<h4 class="la">
								Who We Are
							</h4>
							<p class="ja">
								私たちについて
							</p>
						</div>
						<p class="start-paragraph-text">
							「ハドラス」は、国産・高純度を特徴としたガラスコーティング剤メーカーです。
						</p>
						<p class="start-paragraph-text">
							ガラスコーティング剤を専業に、技術革新を重ね、培った独自技術を強みとして、「輸送機器」「建築」「スポーツ用品」などのあらゆる生活・産業シーンで新たな価値創造に挑戦しています。
						</p>
						<!-- <ul style="margin-bottom: 16px;padding-left: 16px;color:rgba(255, 255, 255, .8);">
							<li style="margin: 14px 0;padding: 0;list-style: initial;font-size:14px;">Customised APK file</li>
							<li style="margin: 14px 0;padding: 0;list-style: initial;font-size:14px;">Request a new APK whenever a new version of Kiosk Browser is released</li>
							<li style="margin: 14px 0;padding: 0;list-style: initial;font-size:14px;">Fully compatible with our remote management service</li>
							<li style="margin: 14px 0;padding: 0;list-style: initial;font-size:14px;">Embed licence keys or remote registration keys</li>
							<li style="margin: 14px 0;padding: 0;list-style: initial;font-size:14px;">Embed a local start page for advanced onboarding procedures</li>
						</ul> -->
						<p>
							<!-- <a href="/products/" class="btn-flat btn-outline" style="padding-left: 20px;">製品情報を見る</a> -->
							<a href="/company/" class="btn-flat btn-outline">会社情報を見る</a>
						</p>
					</div>
				</div>
			</div>
		</section>

		<section class="section grey darken-4 white-text">
			<div class="container">
				<div class="row center">
					<div class="col s12">
						<div class="heading-variant">
							<h4 class="la">
								Our Products
							</h4>
							<p class="ja">
								私たちの製品
							</p>
						</div>
						<ul>
							<li class="chip red white-text">防傷性・防汚性が大きく向上</li>
							<li class="chip red white-text">幅広い素材にコーティング可</li>
							<li class="chip red white-text">最長5年間効果が持続</li>
							<li class="chip red white-text">少量で広範囲に塗布可能</li>
						</ul>
						<p class="start-paragraph-text">
							有機溶剤を含まない全く新しい成分。日本で開発された完全無機質ガラスコーティングです。<br />
							ガラスコーティング剤は多くのメーカーから様々な商品が発売されていますが、その性能はまちまちで、耐久性や防汚性能などが低い商品も多々あります。
						</p>
						<p class="start-paragraph-text">
							弊社は、研究開発を積み重ね、防汚性能と耐久性が非常に高い画期的なガラスコーティング剤を完成させました。<br />
							それが「HARDOLASS（ハドラス）」です。<br />
							用途無限大の「HARDOLASS（ハドラス）」は自動車、バイク、携帯電話、スマートフォン、時計、フィギュア、家具、など様々な素材にガラスコーティングが可能です。
						</p>
						<p>
							<a href="/products/" class="btn-flat btn-outline-dark" style="padding-left: 20px;">製品情報を見る</a>
						</p>
					</div>
				</div>
			</div>
		</section>

		<section class="section white">
			<div class="container">
				<div class="heading-variant center">
					<h5 class="la">
						Market
					</h5>
					<p class="ja">
						業界別アプリケーション
					</p>
				</div>
				<?php
					$loop = new WP_Query( array(
							'post_type' => 'market',
							'posts_per_page' => 3
						)
					);
					?>

					<?php if ( $loop->have_posts() ) : ?>
						<div class="row">
							<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
								<div class="col s6 m4">
									<div class="card">
										<div class="card-image">
											<img src="<?php the_post_thumbnail_url("medium"); ?>">
											<span class="card-img-filter"></span>
											<span class="card-title"><?php the_title(); ?></span>
										</div>
										<div class="card-content">
											<p><?php the_excerpt(); ?></p>
										</div>
										<div class="card-action">
											<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
										</div>
									</div>
								</div>
							<?php endwhile; wp_reset_query(); ?>
						</div>
					<?php else : ?>
						<p>Nothing</p>
					<?php endif; ?>
				</ul>
				<a href="/market/" class="btn-flat btn-outline">
					その他の業界を見る<i class="material-icons right">keyboard_arrow_right</i>
				</a>
			</div>
		</section>

		<section>
			<div class="section white">
				<div class="container center">
					<div class="heading-variant">
						<h5 class="la">
							Customers
						</h5>
						<p class="ja">
							お客様例
						</p>
					</div>
				</div>
			</div>
			<div class="section white">
				<div class="container-fluid">
					<div class="siema">
					<?php
						$list = [
							"customers_ksei.png",
							"customers_mitsubishiele.png",
							"customers_nikigolf.png",
							"customers_tokyomonorail.png",
							"customers_tsuruya.png"
						];
						foreach ($list as $item) {
							?><div class=""><img src="<?php echo get_template_directory_uri(); ?>/img/<?php echo $item; ?>" alt="" width="240" class="responsive-img" /></div><?php
						}
					?>
					</div>
				</div>
			</div>
		</section>

		<div class="section white">
			<div class="container">
				<div class="heading-variant">
					<h5 class="la">
						News
					</h5>
					<p class="ja">
						新着情報
					</p>
				</div>
				<?php
					$loop = new WP_Query( array(
							'post_type' => 'news',
							'posts_per_page' => 5
						)
					);
				?>

				<?php if ( $loop->have_posts() ) : ?>
					<div class="collection">
						<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
							<!-- <div class="collection-item"> -->
								<a href="<?php the_permalink(); ?>" class="collection-item"><?php the_title(); ?><small><?php the_time('F jS, Y'); ?></small><span class="postmetadata">Posted in <?php the_category(', '); ?></span></a>
							<!-- </div> -->
						<?php endwhile; wp_reset_query(); ?>
					</div>
				<?php else : ?>
					<p>Nothing</p>
				<?php endif; ?>
				<a href="/news/" class="btn-flat btn-outline">
					過去の記事を読む<i class="material-icons right">keyboard_arrow_right</i>
				</a>
			</div>
		</div>

		<?php
		while ( have_posts() ) :
			the_post();
			?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<header class="entry-header">
				<?php

    if ( 'post' === get_post_type() ) :
					?>
					<div class="entry-meta">
						<?php
						hardolass_posted_on();
						hardolass_posted_by();
						?>
					</div><!-- .entry-meta -->
				<?php endif; ?>
			</header><!-- .entry-header -->
		
			<?php hardolass_post_thumbnail(); ?>
		
			<div class="entry-content">
				<?php
				the_content(
					sprintf(
						wp_kses(
							/* translators: %s: Name of current post. Only visible to screen readers */
							__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'hardolass' ),
							array(
								'span' => array(
									'class' => array(),
								),
							)
						),
						wp_kses_post( get_the_title() )
					)
				);
		
				wp_link_pages(
					array(
						'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'hardolass' ),
						'after'  => '</div>',
					)
				);
				?>
			</div><!-- .entry-content -->
		
		</article><!-- #post-<?php the_ID(); ?> -->
		
		<?php
		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php
// get_sidebar();
get_footer();
