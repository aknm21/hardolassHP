<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Hardolass
 */

?>
<!doctype html>
<html lang="ja">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@800&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="wrapper" class="">
	
	<div id="header" class="navbar-fixed">
		<nav>
			<div class="nav-wrapper">
				<?php
					$logoTag = '<img src="' . get_template_directory_uri() . '/img/hardolass-logo_RGB.svg" alt="" width="180" />';

					if ( is_front_page() && is_home() ) :
						?>
						<h1 class="brand-logo"><?php echo $logoTag; ?></h1>
						<?php
					else :
						?>
						<p class="brand-logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php echo $logoTag; ?></a></p>
						<?php
					endif;
				?>

				<a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">notes</i></a>
				<ul class="right hide-on-med-and-down">
					<li><a href="/products/" class="dropdown-trigger" data-target="dropdown1">製品情報<i class="material-icons right">keyboard_arrow_down</i></a></li>
					<li><a href="/market/" class="dropdown-trigger" data-target="dropdown2">業界別アプリケーション<i class="material-icons right">keyboard_arrow_down</i></a></li>
					<li><a href="/company/" class="dropdown-trigger" data-target="dropdown3">会社情報<i class="material-icons right">keyboard_arrow_down</i></a></li>
					<li><a href="/contact/" class="waves-effect waves-light btn btn-secondary">お問い合わせ</a></li>
				</ul>
			</div>
		</nav>
	</div>

	<!-- Dropdown Structure -->
	<ul id="dropdown1" class="dropdown-content">
		<li><a href="/products/hardolass/">ハドラス</a></li>
		<li><a href="/products/dr-hardolass/">Dr.ハドラス</a></li>
	</ul>
	<ul id="dropdown2" class="dropdown-content">
		<li><a href="/market/transportation/">自動車・輸送用機器</a></li>
		<li><a href="/market/mobile/">携帯電話</a></li>
		<li><a href="/market/solar-panel/">ソーラーパネル</a></li>
		<li><a href="/market/watches-glasses/">時計・メガネ</a></li>
		<li><a href="/market/jewelry/">宝石・貴金属</a></li>
		<li><a href="/market/hobby/">ホビー</a></li>
		<li><a href="/market/construction-housing/">建設・住宅</a></li>
	</ul>
	<ul id="dropdown3" class="dropdown-content">
		<li><a href="/company/mission/">ミッション</a></li>
		<li><a href="/company/profile/">会社概要</a></li>
		<li><a href="/company/events/">イベント情報</a></li>
		<li><a href="/company/honor/">受賞歴</a></li>
		<!-- <li><a href="/company/link/">関連リンク</a></li> -->
	</ul>

  <ul class="sidenav" id="mobile-demo">
		<li><a href="/">Home</a></li>
		<li>
			<a href="/products/">製品情報</a>
			<ul>
				<li><a href="/products/hardolass/">ハドラス</a></li>
				<li><a href="/products/dr-hardolass/">Dr.ハドラス</a></li>
			</ul>
		</li>
		<li>
			<a href="/market/">業界別アプリケーション</a>
			<ul>
				<li><a href="/market/transportation/">自動車・輸送用機器</a></li>
				<li><a href="/market/mobile/">携帯電話</a></li>
				<li><a href="/market/solar-panel/">ソーラーパネル</a></li>
				<li><a href="/market/watches-glasses/">時計・メガネ</a></li>
				<li><a href="/market/jewelry/">宝石・貴金属</a></li>
				<li><a href="/market/hobby/">ホビー</a></li>
				<li><a href="/market/construction-housing/">建設・住宅</a></li>
			</ul>
		</li>
		<li>
			<a href="/company/">会社情報</a>
			<ul>
				<li><a href="/company/mission/">ミッション</a></li>
				<li><a href="/company/profile/">会社概要</a></li>
				<li><a href="/company/events/">イベント情報</a></li>
				<li><a href="/company/honor/">受賞歴</a></li>
				<!-- <li><a href="/company/link/">関連リンク</a></li> -->
			</ul>
		</li>
		<li><a href="/news/">NEWS</a></li>
		<li><a href="/contact/">お問い合わせ</a></li>
  </ul>

	<header id="masthead" class="site-header">
				<!-- <form class="form-inline mt-2 mt-md-0">
					<input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
					<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
				</form> -->
				<!-- <a class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</a>
			</div>
		</nav> -->

	<!-- <nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'hardolass' ); ?></button>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
		</nav> --><!-- #site-navigation -->
	</header><!-- #masthead -->
