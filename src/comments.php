<section class="comments">
<?php
comment_form(array(
  'title_reply' => 'コメント投稿フォーム',
  'comment_notes_after' => ''
));
if ( have_comments() ) :
?>
    <p><?php comments_number('コメントはありません。', 'コメントが１件あります。', 'コメントが%件あります。'); ?></p>
    <ol class="commentlist">
        <?php wp_list_comments(array( 'avatar_size' => '50' )); ?>
    </ol>
<?php
  paginate_comments_links(array(
    'prev_text' => '←前のコメントページ',
    'prev_next' => '次のコメントページ→'
  ));
endif;
?>
</section><!-- /.comments -->
