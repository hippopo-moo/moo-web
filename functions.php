<?php
//テーマのセットアップ
// titleタグをhead内に生成する
add_theme_support( 'title-tag' );
// HTML5でマークアップさせる
add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );
// Feedのリンクを自動で生成する
add_theme_support( 'automatic-feed-links' );
//アイキャッチ画像を使用する設定
add_theme_support( 'post-thumbnails' );
//カスタムメニュー
register_nav_menu( 'header-nav',	' ヘッダーナビ ' );
register_nav_menu( 'footer-nav',	' フッターナビ ' );
//typed.js
// function typed_scripts() {
// 	wp_enqueue_script( 'typed-script', get_template_directory_uri().'/js/typed.min.js' , array('jquery'), false,true;
// }
// add_action( 'wp_enqueue_scripts', 'typed_scripts' );
//カスタム投稿タイプ
add_action('init', 'register_post_type_and_taxonomy'); // // 最初にregister_post_type_and_taxonomy関数を実行
function register_post_type_and_taxonomy() {
	register_post_type( // カスタム投稿タイプを定義するための関数
		'blog', // カスタム投稿タイプ名
		array(
			'labels' => array(
				'name' => 'ブログ', //ダッシュボードに表示される名前
				'add_new_item' => 'ブログを新規追加', // 新規追加画面に表示される名前
				'edit_item' => 'ブログの編集', // 編集画面に表示される名前
			),
			'public' => true, // ダッシュボードに表示するか否か
			'hierarchical' => true, // 階層型にするか否か
			'has_archive' => true, // アーカイブ（一覧表示機能）を持つか否か
			'supports' => array( // カスタム投稿ページに表示される項目
				'title', // タイトル　＊＊＊カスタムフィールドだけにしたい場合は消しちゃう＊＊＊
				'editor', // 本文　＊＊＊カスタムフィールドだけにしたい場合は消しちゃう＊＊＊
				'custom-fields', // カスタムフィールド
				'thumbnail', // アイキャッチ画像　＊＊＊カスタムフィールドだけにしたい場合は消しちゃう＊＊＊
			),
			'menu_position' => 5, // ダッシュボードで投稿の下に表示
			'rewrite' => array('with_front' => false), // パーマリンクの編集（blogの前の階層URLを消して表示）
		)
	);
	/* カテゴリタクソノミー(カテゴリー分け)を使えるように設定する */
	register_taxonomy(
		'development', /* タクソノミーの名前 */
		'blog', /* 使用するカスタム投稿タイプ名 */
		array(
			'hierarchical' => true, /* trueだと親子関係が使用可能。falseで使用不可 */
			'update_count_callback' => '_update_post_term_count',
			'label' => 'カテゴリ',
			'labels' => array(
                'all_items' => 'カテゴリ一覧',  // 投稿画面の右カラムに表示されるテキスト（投稿で言うカテゴリー一覧）
                'add_new_item' => 'カテゴリの追加'  // 投稿画面の右カラムに表示されるカテゴリ追加リンク
            ),
			'singular_label' => 'オリジナルテーマ作成カテゴリー',
			'public' => true,
			'show_ui' => true
		)
	);
/* カスタムタクソノミー、タグを使えるようにする */
	register_taxonomy(
		'development-tag', /* タクソノミーの名前 */
		'blog', /* 使用するカスタム投稿タイプ名 */
		array(
			'hierarchical' => false,
			'update_count_callback' => '_update_post_term_count',
			'label' => 'タグ',
			'singular_label' => 'オリジナルテーマ作成タグ',
			'public' => true,
			'show_ui' => true
		)
	);
}
add_rewrite_rule('sample/cat/([^/]+)/?$', 'index.php?sample_cat=$matches[1]', 'top');
add_rewrite_rule('sample/tag/([^/]+)/?$', 'index.php?sample_tag=$matches[1]', 'top');
