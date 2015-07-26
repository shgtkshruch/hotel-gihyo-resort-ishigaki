jQuery ($) ->
  # フッターのページに戻るボタン
  $('#js-pagetop').on 'click': ->
    $('html,body').animate scrollTop: 0
