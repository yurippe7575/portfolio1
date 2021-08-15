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
 * @link https://ja.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define( 'DB_NAME', 'portfolio' );

/** MySQL データベースのユーザー名 */
define( 'DB_USER', 'root' );

/** MySQL データベースのパスワード */
define( 'DB_PASSWORD', 'root' );

/** MySQL のホスト名 */
define( 'DB_HOST', 'localhost' );

/** データベースのテーブルを作成する際のデータベースの文字セット */
define( 'DB_CHARSET', 'utf8mb4' );

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define( 'DB_COLLATE', '' );

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'F>Y(S6Lvn7dcayA4.y <#bX5s8vu=b,/3kQp9)u+aVI:JX%NeA:0+CBjxyb#rvq!' );
define( 'SECURE_AUTH_KEY',  'M,LLyZY= 3jrNZ;5~}<vAcMpTa[)_F2jF<S#A6oDevKp1Dxp>B@zWYy&d}itC@fp' );
define( 'LOGGED_IN_KEY',    'QgwT6h-e:z3OlXD6>%6kn;!fs4`OKL>N=aF)f^_9,jajsPk9P8NLuJXM1:s`JGm*' );
define( 'NONCE_KEY',        'nt#qTu(MWx}97@svMSh.7C}KJ3l9a]7k%5=}i#=r=bte@ZKO?]YPvt%-j!c`wIQ}' );
define( 'AUTH_SALT',        ')#45-4tgG7aRh.L2a9nJW1Qq,n,MMH5Lu>&#PEbD5_Xrox$b^q{|hxwBP0YjDG-a' );
define( 'SECURE_AUTH_SALT', 'w}d^*_}HcRER>}Mb5u.&kr!wtvqftw5]{)}R@W7JnWL|vK5c:BTJ)qv79A/f=c| ' );
define( 'LOGGED_IN_SALT',   'i$[gNc`mM~xQEcK~26NP_DmrJGMf#)qp%4V/B!+G#F+c6V:|(2 MJ@Ar5}rL%cY:' );
define( 'NONCE_SALT',       'x~!=sc$PTLR#MTr$4XN!3n8`yJ8|AM2:4z/ 8/VN:^Bf_>a`rkj*}/MHH4)<g$>N' );

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数についてはドキュメンテーションをご覧ください。
 *
 * @link https://ja.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* カスタム値は、この行と「編集が必要なのはここまでです」の行の間に追加してください。 */



/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
