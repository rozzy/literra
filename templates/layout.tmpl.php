<? _T ('header') ?>

<? _T_FOR ('message') ?>

<? if (array_key_exists ('superheading', $content) or array_key_exists ('heading', $content)): ?>
<section class="tag-heading">
	<? if (array_key_exists ('superheading', $content)): ?>
	<div class="sup-heading"><?= $content['superheading'] ?></div>
	<? endif ?>
		
	<? if (array_key_exists ('heading', $content)): ?>
	<h2><?= $content['heading'] ?>
	<? if (array_key_exists ('related-edit-href', $content)): ?>
	<a href="<?= $content['related-edit-href'] ?>"><img src="<?= _IMGSRC ('edit.png') ?>" align="bottom" alt="<?= $content['related-edit-title'] ?>" title="<?= $content['related-edit-title'] ?>" /></a>
	<? endif ?>
	<? if (array_key_exists ('related-rss-href', $content)): ?>
	<sup><a class="rss" href="<?=$content['related-rss-href']?>">РСС</a></sup>
	<? endif ?></h2>
	
	<? endif ?>
	<? if (array_key_exists ('search-related-tag', $content)) { ?> 
	<p class="tags"><small>см. также тег <a href="<?=$content['search-related-tag']['href']?>"><?=$content['search-related-tag']['name']?></a>.</small></p>
	<? } ?>
</section>
<? endif ?>

<? _T_FOR ('tag') ?>
<? _T_FOR ('error-404-description') ?>

<? _T_FOR ('year-months') ?>
<? _T_FOR ('month-days') ?>

<? if (@$content['pages']['timeline?']) _T ('pages-later') ?>

<section class="mainsection">

<? _T ('content') ?>

</section>

<? if (@$content['pages']['timeline?']) _T ('pages-earlier') ?>
<? _T ('footer') ?>
