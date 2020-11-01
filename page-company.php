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
						Company
					</h1>
					<p class="ja">
						会社情報
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

		<section class="section">
			<div class="container">
				<div class="row">
					<div class="col s6 offset-s3 m6 center">
						<img class="responsive-img" src="<?php echo get_template_directory_uri(); ?>/img/overview.jpg">
					</div>
					<div class="col s12 m6">
						<table>
							<tr>
								<th>商号</th>
								<td>株式会社ハドラス</td>
							</tr>
							<tr>
								<th>設立</th>
								<td>平成29年10月17日</td>
							</tr>
							<tr>
								<th>所在地</th>
								<td>
									【東京研究所】<br />
									〒135-0064　東京都江東区青海2-4-10<br />
									東京都立産業技術研究センター　製品開発支援ラボ304<br />
									【松飛台サテライトオフィス】<br />
									〒270-2214　千葉県松戸市松飛台322-1
								</td>
							</tr>
							<tr>
								<th>事業内容</th>
								<td>ガラスコーティング剤の製造、研究開発及び販売</td>
							</tr>
							<tr>
								<th>代表者</th>
								<td>代表取締役社長　山本　英明</td>
							</tr>
							<tr>
								<th>資本金</th>
								<td>5,000万円</td>
							</tr>
							<tr>
								<th>関連会社</th>
								<td>ヤマモトホールディングス株式会社</td>
							</tr>
						</table>
					</div>
				</div>
			</div>
		</section>

		<section class="section">
			<div class="container">
				<div class="row">
					<div class="col s12 center">
						<div class="heading-variant">
						<h4 class="la">
							Access
						</h4>
						<p class="ja">
							アクセスマップ
						</p>
					</div>
					<div class="col s12 m6 center">
						<h5>東京研究所</h5>
						<div class="video-container">
							<iframe
							src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10738.9323487393!2d139.7715949698046!3d35.620785106898595!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xfebdef72252cd025!2z5p2x5Lqs6YO956uL55Sj5qWt5oqA6KGT56CU56m244K744Oz44K_44O8!5e0!3m2!1sja!2sjp!4v1604041188045!5m2!1sja!2sjp"
							title="東京都産業技術研究センター"
							aria-label="東京都産業技術研究センター"
							aria-hidden="false"
							width="600"
							height="600"
							frameBorder="0"
							allowFullScreen
							></iframe>
						</div>
					</div>
					<div class="col s12 m6">
						<h5>松飛台サテライトオフィス</h5>
						<div class="video-container">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d809.173737525828!2d139.96569858810983!3d35.78286899875461!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601883c7cbeab117%3A0xbb375fe443b6a653!2z44CSMjcwLTIyMTQg5Y2D6JGJ55yM5p2-5oi45biC5p2-6aOb5Y-w77yT77yS77yT!5e0!3m2!1sja!2sjp!4v1604245182220!5m2!1sja!2sjp" width="600" height="600" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
						</div>

					</div>
				</div>
			</div>
		</section>

	</main><!-- #main -->

<?php
// get_sidebar();
get_footer();
