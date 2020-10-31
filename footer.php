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
                <li><a href="/company/link/" class="grey-text text-lighten-3">関連リンク</a></li>
              </ul>
            </li>
            <li><a href="/news/" class="grey-text text-lighten-3">NEWS</a></li>
            <li><a href="/contact/" class="grey-text text-lighten-3">問い合わせ</a></li>
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

<script>
  document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.sidenav');
    var instances = M.Sidenav.init(elems, {});
    
    var dropdownTrigger = document.querySelectorAll(".dropdown-trigger");
    var dropdownInstances = M.Dropdown.init(dropdownTrigger, {hover: true, coverTrigger: false});
  });
</script>

</body>
</html>
