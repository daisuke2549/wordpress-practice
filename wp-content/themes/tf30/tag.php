<!DOCTYPE html>
<html lang="ja" prefix="og: http://ogp.me/ns#">

<head>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="format-detection" content="telephone=no">

	<title>カテゴリー名</title>
	<meta name="description" content="">

	<meta property="og:title" content="カテゴリー名">
	<meta property="og:type" content="website">
	<meta property="og:url" content="https://example.com/category/a/">
	<meta property="og:image" content="https://example.com/category/a/img/ogp.png">
	<meta property="og:site_name" content="カテゴリー名">
	<meta property="og:description" content="">
	<meta name="twitter:card" content="summary_large_image">

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css?ver=5.8.2">
	<link rel="stylesheet" href="/css/style.css">

	<link rel="icon" href="./img/icon-home.png">

</head>

<body>

<?php get_header(); ?>


	<!-- content -->
	<div id="content">
		<div class="inner">

			<!-- primary -->
			<main id="primary">

				<!-- breadcrumb -->
				<div class="breadcrumb">
					<span property="itemListElement" typeof="ListItem">
						<a property="item" typeof="WebPage" href="/" class="home"><span property="name">ホーム</span></a>
						<meta property="position" content="1">
					</span>
					<i class="fas fa-angle-right"></i>
					<span class="current-item">タグ名</span>
				</div><!-- /breadcrumb -->


                    <!-- breadcrumb -->
                    <div class="breadcrumb">
                    <?php bcn_display(); //BreadcrumbNavXTのパンくずを表示するための記述 ?>
                    </div><!-- /breadcrumb -->

                    <div class="archive-head m_description">
                    <div class="archive-lead">ARCHIVE</div>
                    <h1 class="archive-title m_category"><?php single_tag_title(); //一覧ページ名を表示 ?></h1><!-- /archive-title -->
                    <div class="archive-description">
                    <p><?php tag_description();?></p>
                    </div>
                    </div>


                <?php
//記事があればentriesブロック以下を表示
if (have_posts() ) :
?>
<!-- entries -->
<div class="entries m_horizontal">
<?php
//記事数ぶんループ
while ( have_posts() ) :
the_post();
?>

<!-- entry-item -->
<a href="<?php the_permalink(); //記事のリンクを表示 ?>" class="entry-item">
<!-- entry-item-img -->
<div class="entry-item-img">
<?php
if (has_post_thumbnail() ) {
// アイキャッチ画像が設定されてれば大サイズで表示
the_post_thumbnail('large');
} else {
// なければnoimage画像をデフォルトで表示
echo '<img src="' . esc_url(get_template_directory_uri()) . '/img/noimg.png" alt="">';
}
?>
</div><!-- /entry-item-img -->

<!-- entry-item-body -->
<div class="entry-item-body">
<div class="entry-item-meta">
<?php
// カテゴリー１つ目の名前を表示
$category = get_the_category();
if ($category[0] ) {
echo '<div class="entry-item-tag">' . $category[0]->cat_name . '</div><!-- /entry-item-tag -->';
}
?>
<!-- 公開日時を動的に表示する -->
<time class="entry-item-published" datetime="<?php the_time('c'); ?>"><?php the_time('Y/n/j'); ?></time><!-- /entry-item-published -->
</div><!-- /entry-item-meta -->
<h2 class="entry-item-title"><?php the_title(); //タイトルを表示 ?></h2><!-- /entry-item-title -->
<div class="entry-item-excerpt">
<?php the_excerpt(); //抜粋を表示 ?>
</div><!-- /entry-item-excerpt -->
</div><!-- /entry-item-body -->
</a><!-- /entry-item -->
<?php
endwhile;
?>

</div><!-- /entries -->
<?php endif; ?>

<?php if (paginate_links() ) : //ページが1ページ以上あれば以下を表示 ?>
<!-- pagenation -->
<div class="pagenation">
<?php
echo
paginate_links(
array(
'end_size' => 0,
'mid_size' => 1,
'prev_next' => true,
'prev_text' => '<i class="fas fa-angle-left"></i>',
'next_text' => '<i class="fas fa-angle-right"></i>',
)
);
?>
</div><!-- /pagenation -->
<?php endif; ?>

			
<?php get_sidebar(); ?>


		</div><!-- /inner -->
	</div><!-- /content -->

	

	<!-- footer-sns -->
	<div class="footer-sns">
		<div class="inner">
			<div class="footer-sns-head">この記事をシェアする</div><!-- /footer-sns-head -->

			<nav class="footer-sns-buttons">
				<ul>
					<li><a class="m_twitter" href="https://twitter.com/share?url=https://example.com/category/a/&text=カテゴリー名"
							rel="nofollow" target="_blank"><img src="img/icon-twitter.png" alt=""></a></li>
					<li><a class="m_facebook" href="https://www.facebook.com/share.php?u=https://example.com/category/a/"
							rel="nofollow" target="_blank"><img src="img/icon-facebook.png" alt=""></a></li>
					<li><a class="m_hatena"
							href="https://b.hatena.ne.jp/add?mode=confirm&url=https://example.com/category/a/&title=カテゴリー名"
							rel="nofollow" target="_blank"><img src="img/icon-hatena.png" alt=""></a></li>
					<li><a class="m_line" href="https://social-plugins.line.me/lineit/share?url=https://example.com/category/a/"
							rel="nofollow" target="_blank"><img src="img/icon-line.png" alt=""></a></li>
					<li><a class="m_pocket" href="https://getpocket.com/edit?url=https://example.com/category/a/" rel="nofollow"
							target="_blank"><img src="img/icon-pocket.png" alt=""></a></li>
				</ul>
			</nav><!-- /footer-sns-buttons -->

		</div><!-- /inner -->
	</div><!-- /footer-sns -->
    <?php get_footer(); ?>f="#"><i class="fas fa-chevron-up"></i></a>

	<div class="floating">
		<a href="#"><i class="fas fa-chevron-up"></i></a>
	</div>

	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script src="js/script.js"></script>

</body>

</html>