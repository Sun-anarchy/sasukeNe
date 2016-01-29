<?php get_header('register'); ?>


<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<?php
			// Post thumbnail.
			twentyfifteen_post_thumbnail();
			?>

			<header class="entry-header">
				<h1 class="entry-title">地図上の地点登録について</h1>
			</header><!-- .entry-header -->
			<div class="entry-content">
				<p>
					さすけね事前登録を行っておくと電話番号を掛けるだけで登録された地点に積雪があることを知らせることができます。
					地図上のポイントをクリックすることで赤いマーカーが立ちます。 <br />
					<img src="<?php bloginfo('stylesheet_directory');?>/images/registerhelp/img1.png" /><br/><br/>
					マーカーはご自宅の前の道路に立ててください。さすけねは除雪要請の為に利用する予定ですので、道路にマーカーを置いておくと効果的です。
					個人情報を保護するため、個人の家を登録する位置には立てないでください。<br/>
					<img src="<?php bloginfo('stylesheet_directory');?>/images/registerhelp/img2.png" /><br/><br/>

					一度置いたマーカーはドラッグすることで変更できます。<br/>
					<img src="<?php bloginfo('stylesheet_directory');?>/images/registerhelp/img3.png" />
				</p>

<?php get_footer(); ?>
