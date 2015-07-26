<section class="recentCategories">
      <h1 class="type-C">カテゴリー一覧</h1>
      <ul class="categories">
      <?php
      wp_list_categories(array(
        'title_li' => '',
        'show_count' => true
      ));
      ?>
      </ul>
</section><!-- /.recentCategories -->
