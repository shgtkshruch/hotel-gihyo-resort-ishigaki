<?php
/**
 * アイキャッチ画像を使用可能にする
 */
add_theme_support('post-thumbnails');

/**
 * カスタムメニュー機能を使用可能にする
 */
add_theme_support('menus');

/**
 * RSSフィードを使用可能にする
 */
add_theme_support('automatic-feed-links');

// RSSに配信する文字数を設定
add_filter('excerpt_mblength', 'my_excerpt_mblength');
function my_excerpt_mblength($length) {
  return 100; // 抜粋に出力する文字数
}

// RSSに「続きを読む」リンクを追加
add_filter('excerpt_more', 'my_excerpt_more');
function my_excerpt_more($more) {
  return '...<a href="' . get_permalink($post->ID) . '">続きを読む→</a>';
}

// コメント欄の入力項目を削除
add_filter('comment_form_default_fields', 'my_comment_form_default_fields');
function my_comment_form_default_fields($args) {
  $args['author'] = '';
  $args['email'] = '';
  $args['url'] = '';
  return $args;
}
