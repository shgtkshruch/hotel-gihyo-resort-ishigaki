<section class="recentArchives">
    <h1 class="type-C">月別アーカイブ</h1>
    <ul class="archives">
    <?php
    wp_get_archives(array(
      'type' => 'monthly',
      'show_post_count' => true
    ));
    ?>
    </ul><!-- /.archives -->
</section><!-- /.recentArchives -->
