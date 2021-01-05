<!DOCTYPE html>
<html lang="ja" style="margin-top:0 !important" >

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
  <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@300&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP&display=swap" rel="stylesheet">
  


  
  <!-- jQuery本体 -->

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

  <!-- jQuery本体 -->


  <title><?php bloginfo( 'name' ); ?></title>


  
  <script>
document.addEventListener( 'wpcf7mailsent', function( event ) {
    location = 'https://example.com/contact-thanks/';
}, false );
</script>


<!-- contact form 7のサンクスページ用 -->

<?php if( is_page('contact') ) { ?>
<script>
  document.addEventListener( 'wpcf7mailsent', function( event ) {
    location = 'http://test.kanzaki-net.work/antoine-kanzaki.sakura.ne.jp/thanks-page';
  }, false );
</script>
<?php } ?>

<!-- contact form 7のサンクスページ用 -->








<!-- お約束のとこのスライド用 -->

<link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
<script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>

<script type="text/javascript">
        $(document).ready(function(){
            $('.slider').bxSlider({
                auto: true,
                pause: 5000,
            });
        });
</script>

<!-- お約束のとこのスライド用 -->


<!-- スクロールjs -->


<script src="<?php echo get_template_directory_uri(); ?>/jquery.scrollify.js"></script>



<!-- スクロールjs -->




<!-- ボタンスクロールjs -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
  
<script src="<?php echo get_template_directory_uri(); ?>/sectionScroller.min.js"></script>

<!-- ボタンスクロールjs -->



<!-- headerのボタンを押したときに指定要素までスクロールして進むボタン作るためのコード -->

<script>
if (!("scrollBehavior" in document.documentElement.style)) {
    import("scroll-behavior-polyfill");
}
</script>

<!-- headerのボタンを押したときに指定要素までスクロールして進むボタン作るためのコード -->








<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

    <header>

      <div class="header-bottom-set">
        <a class="bottom-section-button js-scrollify-move" href="<?php echo home_url(); ?>#section1">
          <div class="bottom-section-name">コンセプト</div>
          <div class="bottom-name-sub">consept</div>
        </a>
        <div class="header-border"></div>
        <a class="bottom-section-button promiseroop js-scrollify-move" href="<?php echo home_url(); ?>#section4">
          <div class="bottom-section-name">お約束</div>
          <div class="bottom-name-sub">promise</div>
        </a>
          <div class="header-border"></div>

        <div class="drop-menu-set">
          <a class="bottom-section-button companyroop js-scrollify-move" href="<?php echo home_url(); ?>#section5">
            <div class="bottom-section-name drop-menu-1">会社概要<span>▾<span></div>
            <div class="bottom-name-sub">overview</div>
          </a>
            <ul>
              <li><a href="<?php echo home_url(); ?>#section5" class="messageroop js-scrollify-move">代表<br class="dropdown-indent">メッセージ</a></li>
              <li><a href="<?php echo home_url(); ?>#section6" class="repprofileroop js-scrollify-move">代表<br class="dropdown-indent">プロフィール</a></li>
              <li><a href="<?php echo home_url(); ?>#section7" class="exeprofileroop js-scrollify-move">役員<br class="dropdown-indent">プロフィール</a></li>
              <li><a href="<?php echo home_url(); ?>#section13" class="fireinforoop js-scrollify-move">会社情報</a></li>
            </ul>
        </div>

          <a class="bottom-section-button for-extra-smartphone-menu companyroop js-scrollify-move" href="<?php echo home_url(); ?>#section5">
            <div class="bottom-section-name drop-menu-1">会社概要</div>
            <div class="bottom-name-sub">overview</div>
          </a>


        <div class="header-border"></div>
        <a class="bottom-section-button" href="<?php echo home_url(); ?>/contact">
          <div class="bottom-section-name">お問い合わせ</div>
          <div class="bottom-name-sub">contact</div>
        </a>
        <div class="header-border"></div>
        <a class="bottom-section-button" href="<?php echo home_url(); ?>/privacy-policy">
          <div class="bottom-section-name">プライバシーポリシー</div>
          <div class="bottom-name-sub">privacy policy</div>
        </a>

      </div>
    </header>


  







<?php if(have_posts()): ?>
 <?php while(have_posts()): the_post(); ?>
 <?php the_title(); ?>
 <?php the_content(); ?>

 <?php endwhile; ?>
 <?php else: ?>


 <?php endif; ?>


 <?php get_footer(); ?>