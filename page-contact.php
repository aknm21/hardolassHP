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
						Contact
					</h1>
					<p class="ja">
						お問い合わせ
					</p>
				</div>
				<p>
					お電話、メールフォームでのお問い合わせを受け付けております。<br />
					お気軽にご相談ください。
				</p>
			</div>
    </div>

		<section class="section">
			<div class="container white">
				<div class="row card">
					<div class="col m4 s12">
						<p>
							株式会社ハドラス<br />
							〒135-0064　東京都江東区青海2-4-10<br />
							東京都立産業技術研究センター　製品開発支援ラボ 304
						</p>
					</div>
					<div class="col m4 s12">
						<p>
							電話でのお問い合わせ<br>
							<span class="cta-action-text">
								<i class="material-icons left">phone</i>03-6450-4176
							</span><br>
							<small>営業時間 9:00～18:00 平日</small>
						</p>
					</div>
					<div class="col m4 s12">
						<p>
							メールでのお問い合わせ<br>
							<a href="/contact/" class="">
								<i class="material-icons left">mail</i>info-hardolass@y-p.co.jp
							</a>
						</p>
					</div>
				</div>
			</div>
		</section>
		<section class="section">
			<div class="container">
				<div class="row">
					<div class="col s12 m4">
						<p class="caption">
							下記必要項目を入力の上、「入力内容を確認」ボタンをクリックして下さい。送信されました内容につきまして、後日担当者よりご連絡致します。
							お問い合わせされた方の個人情報は、当社プライバシーポリシーに基づき厳正に取り扱います。
						</p>
					</div>
					<div class="col s12 m8">
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
					</div>
				</div>
			</div>
		</section>

	</main><!-- #main -->

<?php
// get_sidebar();
get_footer();
