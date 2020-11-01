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

		<div class="parallax-container">
			<div class="parallax"><img src="<?php echo get_template_directory_uri(); ?>/img/D85_3223.jpg"></div>
			<div class="container white-text">
				<div class="heading-variant">
					<h1 class="la">
						Mission
					</h1>
					<p class="ja">
						企業理念
					</p>
				</div>
				<p>
					ガラスコーティング剤を専業に、技術革新を重ね、培った独自技術を強みとして、「輸送機器」「建築」「スポーツ用品」などのあらゆる生活・産業シーンで新たな価値創造に挑戦しています。
				</p>
			</div>
    </div>

		<section class="section">
			<div class="container">
				<div class="row card">
					<div class="col s12">
						<p class="video-container_hero-text">
							ガラスコーティングで、<br>
							<strong>
								常識を塗り替える。
							</strong>
						</p>
					</div>
				</div>
			</div>
		</section>

	</main><!-- #main -->

<?php
// get_sidebar();
get_footer();
