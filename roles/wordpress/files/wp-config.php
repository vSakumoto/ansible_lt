<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * MySQL 設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link http://wpdocs.sourceforge.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.sourceforge.jp/Codex:%E8%AB%87%E8%A9%B1%E5%AE%A4 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define('DB_NAME', 'wordpress');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'wordpress');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', 'password');

/** MySQL のホスト名 */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         ']~l/YG0-2&t=,{BSz.T$f-!>Df-=9.pJe!<~]>Lgs5<{r1u$d=UNq/m&OMP<K65n');
define('SECURE_AUTH_KEY',  '(d.Fnb|`4E8BuOO>+2ug_|k5<S,iu70B-p+.|uS:/utT][c) >i$|6H.hy|@zMY>');
define('LOGGED_IN_KEY',    '9hzN0,Bd6H5{7lw{|_S`=+fsL&8;wBsCeF7vcm^*tBZE)uM Od%:pIzgA+=Vw|Fb');
define('NONCE_KEY',        ')u#GtJ8s3/eqOvtd0$9l?/.!A6AbRq*/6:7%X,aml)ZB,,zA8+qD<!0-A8Q}q@DS');
define('AUTH_SALT',        'M}cUAV#AD(Eo|b5wo{t0erjV`2+8+3YGmkky7a_8dN>GI{%k.0J7{cnMmn$ia!-V');
define('SECURE_AUTH_SALT', ':JJ-,H94k)ZUGQimisv]gkU401|*eeI#KweGpW?cmn9>Y15>K8MYOqYTKI4tpXmX');
define('LOGGED_IN_SALT',   'FGU;AY1a&??J1LnV|fVt2YF^XlnZB>O_06b+}e&T<Gkm|.gnm)Od=nwcCquu{+w2');
define('NONCE_SALT',       'yWV!BIrG3L_,FJq>{FjC|?_Z|FIR3YHn|=VB#K!oDq^w*$[^d=LZUq9]&U86B{En');

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix  = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数については Codex をご覧ください。
 *
 * @link http://wpdocs.osdn.jp/WordPress%E3%81%A7%E3%81%AE%E3%83%87%E3%83%90%E3%83%83%E3%82%B0
 */
define('WP_DEBUG', false);

/* 編集が必要なのはここまでです ! WordPress でブログをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
  define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
