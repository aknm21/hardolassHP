<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Hardolass
 */

?>

  <section class="section grey lighten-3">
    <div class="container">
      <div class="row">
        <div class="col s12 center cta-copy">
          「HardoLass」ガラスコーティング剤について<br />
          お気軽にお問い合わせください
        </div>
        <div class="col m5 s12">
          <p>
            電話でのお問い合わせ<br />
            <span class="cta-action-text">
              <i class="material-icons left">phone</i>03-6450-4176
            </span><br />
            <small>営業時間 9:00～18:00 平日</small>
          </p>
        </div>
        <div class="col m7 s12">
          <p>
            メールでのお問い合わせ<br />
            <a href="/contact/" class="cta-action-text">
              <i class="material-icons left">mail</i>info-hardolass@y-p.co.jp
            </a>
          </p>
        </div>
      </div>
    </div>
  </section>

	<!-- Footer -->
  <footer class="page-footer">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">株式会社ハドラス</h5>
          <p class="grey-text text-lighten-4">
            〒135-0064　東京都江東区青海2-4-10
            <br />
            東京都立産業技術研究センター　製品開発支援ラボ 304
            <br />
            TEL:03-6450-4176　FAX:03-6450-4186
          </p>
        </div>
        <div class="col l3 s12">
          <ul>
            <li><a href="/" class="grey-text text-lighten-3">Home</a></li>
            <li>
              <a href="/products/" class="grey-text text-lighten-3">製品情報</a>
              <ul>
                <li><a href="/products/hardolass/" class="grey-text text-lighten-3">ハドラス</a></li>
                <li><a href="/products/dr-hardolass/" class="grey-text text-lighten-3">Dr.ハドラス</a></li>
              </ul>
            </li>
            <li>
              <a href="/market/" class="grey-text text-lighten-3">業界別アプリケーション</a>
              <ul>
                <li><a href="/market/transportation/" class="grey-text text-lighten-3">自動車・輸送用機器</a></li>
                <li><a href="/market/mobile/" class="grey-text text-lighten-3">携帯電話</a></li>
                <li><a href="/market/solar-panel/" class="grey-text text-lighten-3">ソーラーパネル</a></li>
                <li><a href="/market/watches-glasses/" class="grey-text text-lighten-3">時計・メガネ</a></li>
                <li><a href="/market/jewelry/" class="grey-text text-lighten-3">宝石・貴金属</a></li>
                <li><a href="/market/hobby/" class="grey-text text-lighten-3">ホビー</a></li>
                <li><a href="/market/construction-housing/" class="grey-text text-lighten-3">建設・住宅</a></li>
              </ul>
            </li>
          </ul>
        </div>
        <div class="col l3 s12">
          <ul>
            <li>
              <a href="/company/" class="grey-text text-lighten-3">会社情報</a>
              <ul>
                <li><a href="/company/mission/" class="grey-text text-lighten-3">ミッション</a></li>
                <li><a href="/company/profile/" class="grey-text text-lighten-3">会社概要</a></li>
                <li><a href="/company/events/" class="grey-text text-lighten-3">イベント情報</a></li>
                <li><a href="/company/honor/" class="grey-text text-lighten-3">受賞歴</a></li>
                <!-- <li><a href="/company/link/" class="grey-text text-lighten-3">関連リンク</a></li> -->
              </ul>
            </li>
            <li><a href="/news/" class="grey-text text-lighten-3">NEWS</a></li>
            <li><a href="/contact/" class="grey-text text-lighten-3">お問い合わせ</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
      © HardoLass Co., Ltd. 2016-2020. All rights reserved
      <a class="grey-text text-lighten-4 right" href="/privacy/">プライバシーポリシー</a>
      </div>
    </div>
  </footer>
<!-- Footer -->	<!-- Footer #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

<div class="fixed-action-btn">
  <a class="waves-effect waves-light btn-large">
    <i class="material-icons left">forum</i>
    お問い合わせはこちら
  </a>
  <!-- <a class="btn-floating btn-large red">
    お問い合わせはこちら
    <i class="large material-icons">mode_edit</i>
  </a> -->
  <!-- <ul>
    <li><a class="btn-floating red"><i class="material-icons">insert_chart</i></a></li>
    <li><a class="btn-floating yellow darken-1"><i class="material-icons">format_quote</i></a></li>
    <li><a class="btn-floating green"><i class="material-icons">publish</i></a></li>
    <li><a class="btn-floating blue"><i class="material-icons">attach_file</i></a></li>
  </ul> -->
</div>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    var sidenavElems = document.querySelectorAll('.sidenav');
    var sidenavInstances = M.Sidenav.init(sidenavElems, {});
    
    var dropdownTrigger = document.querySelectorAll(".dropdown-trigger");
    var dropdownInstances = M.Dropdown.init(dropdownTrigger, {hover: true, coverTrigger: false});

    var fabElems = document.querySelectorAll('.fixed-action-btn');
    var fabInstances = M.FloatingActionButton.init(fabElems, {});

    var parallaxElems = document.querySelectorAll('.parallax');
    var parallaxInstances = M.Parallax.init(parallaxElems, {});

    var siemaExists = document.querySelector('.siema') !== null;
    if(siemaExists) {
      // Top Page Customer List
      var mySiema = new Siema({
        selector: '.siema',
        duration: 2500,
        easing: 'linear',
        perPage: 4,
        startIndex: 0,
        draggable: false,
        multipleDrag: false,
        threshold: 20,
        loop: true,
      });
      setInterval(() => mySiema.next(), 2500)
    }

    var header = document.querySelector('#header'),
        headerHeight = header.offsetHeight,
        startPos = 0;

    function setNavClass() {
      var value = document.documentElement.scrollTop || document.body.scrollTop;
      if ( value > startPos && value > headerHeight ) {
        header.classList.add("is-down");
      } else {
        header.classList.remove("is-down");
      }
      if ( value < 120 ) {
        header.classList.add("is-top");
      } else {
        header.classList.remove("is-top");
      }
      startPos = value;
    }

    window.addEventListener('load', setNavClass);
    window.addEventListener('scroll', setNavClass);
  });
</script>

</body>
</html>
