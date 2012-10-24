<? _X ('header-pre') ?>
<header>
	<? _T ('author-menu') ?>
	<h1 class="blogname"><?= _A ('<a href="'. $content['blog']['href']. '"><span id="e2-blog-title">'. $content['blog']['title']. '</span></a>') ?><sup><a class="rss" href="<?=@$content['blog']['rss-href']?>">ÐÑÑ</a></sup></h1>
	<div id="e2-blog-description" class="description">
		<?= $content['blog']['description'] ?>	
	</div>
</header>
<? _X ('header-post') ?>