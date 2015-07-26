<?php get_header(); ?>

<?php if ( is_home() ): ?>
<div class="homeVisual"><span>石垣島でのんびりゆったりと。</span></div>
<?php endif ?>

<nav class="globalNavi">
    <ul>
        <li><a href="index.html">HOME</a></li>
        <li><a href="about.html">ホテル紹介</a></li>
        <li><a href="access.html">アクセス</a></li>
        <li><a href="contact.html">お問い合わせ</a></li>
    </ul>
</nav><!-- /.globalNavi -->

<div class="contentsWrap">
    <div class="mainContents">

        <div class="aboutBlock block">
            <div class="banners">
                <ul>
                    <li><a href="about.html"><img src="<?php echo get_template_directory_uri(); ?>/images/home/bnr_about.png" height="97" width="320" alt="ホテル紹介"></a></li>
                    <li><a href="access.html"><img src="<?php echo get_template_directory_uri(); ?>/images/home/bnr_access.png" height="97" width="320" alt="アクセス"></a></li>
                </ul>
            </div>
        </div><!-- /.aboutBlock -->

        <section class="newsBlock block">
            <h1 class="type-B"><span>新着情報</span></h1>
            <?php get_template_part('loop', 'main'); ?>
        </section><!-- /.newsBlock -->

    </div><!-- /.mainContents -->

    <aside class="subContents">

    <?php get_sidebar(); ?>

    </aside><!-- /.subContents -->
</div><!-- /.contentsWrap -->

<?php get_footer(); ?>
