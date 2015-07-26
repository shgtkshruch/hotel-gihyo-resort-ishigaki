<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、MySQL、テーブル接頭辞、秘密鍵、言語、ABSPATH の設定を含みます。
 * より詳しい情報は {@link http://wpdocs.sourceforge.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86
 * wp-config.php の編集} を参照してください。MySQL の設定情報はホスティング先より入手できます。
 *
 * このファイルはインストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さず、このファイルを "wp-config.php" という名前でコピーして直接編集し値を
 * 入力してもかまいません。
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.sourceforge.jp/Codex:%E8%AB%87%E8%A9%B1%E5%AE%A4 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
if ( isset($_SERVER["CLEARDB_DATABASE_URL"]) ) {

  $url = parse_url(getenv("CLEARDB_DATABASE_URL"));

  /** WordPress のためのデータベース名 */
  define('DB_NAME', substr($url["path"], 1));

  /** MySQL データベースのユーザー名 */
  define('DB_USER', $url["user"]);

  /** MySQL データベースのパスワード */
  define('DB_PASSWORD', $url["pass"]);

  /** MySQL のホスト名 */
  define('DB_HOST', $url["host"]);

} else {

  /** WordPress のためのデータベース名 */
  define('DB_NAME', 'wordpress');

  /** MySQL データベースのユーザー名 */
  define('DB_USER', 'wordpress');

  /** MySQL データベースのパスワード */
  define('DB_PASSWORD', 'secret');

  /** MySQL のホスト名 */
  define('DB_HOST', 'localhost');
}

/** データベースのテーブルを作成する際のデータベースの文字セット */
define('DB_CHARSET', 'utf8');

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define('DB_COLLATE', '');

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */

define('AUTH_KEY',         'Ej[#Q+*z;ik=A CQZxSk+1<u+SCwY-Ks>cg1E7/%DXs?|BN#y_[n/#4f0rC[UK+$');
define('SECURE_AUTH_KEY',  'C2Fv<%K5yF$OV-1{@7%ZY1Xgz$P&<%^%4-d|%w,Q3K+sE*|RkA<Nc_2SO.b|8BS2');
define('LOGGED_IN_KEY',    'I*xjO/?1:f,wm 3%vmoRx4Q4|z64|OEZ^}jPAtVN!V801E$CN>Ah3scvHw[c^Q{W');
define('NONCE_KEY',        'b+[q=|&2W/ylsk!Lh:W|qlTWLW}ay`1hYJbv4}mhvE>s[]d9C|V{ y[_~HI0:Q+N');
define('AUTH_SALT',        '3R-0d||#r/O%l2t+T$@76_RPddY?Lc}@*n) W0pXtJ-MZTac$_Z,EB,P1{_}7hqW');
define('SECURE_AUTH_SALT', 'zH-W-Db^]+(M]?,IQ-DyFM=CL!e5 $Ts2YMU*$Be-qrgp^VyvblXOmN.Yd!-hBPB');
define('LOGGED_IN_SALT',   'shlX=mafw~yTPu1j[_G|MM #d+|J9-m#Kn*9DOXwxh:^S5DP=-n<|zt%Z?3,EY;x');
define('NONCE_SALT',       '~B[BW2+{5_]Kq]ZCXw+j)ppoxXqLSFTX3w;1E|RK.hz2%Uw6URrpu?+l8dmK~(X<');

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix  = 'wp_';

/**
 * ローカル言語 - このパッケージでは初期値として 'ja' (日本語 UTF-8) が設定されています。
 *
 * WordPress のローカル言語を設定します。設定した言語に対応する MO ファイルが
 * wp-content/languages にインストールされている必要があります。たとえば de_DE.mo を
 * wp-content/languages にインストールし WPLANG を 'de_DE' に設定すると、ドイツ語がサポートされます。
 */
define('WPLANG', 'ja');

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 */
define('WP_DEBUG', false);

/* 編集が必要なのはここまでです ! WordPress でブログをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
