<? _JS ('scaleimage') ?>

<? foreach ($content['notes'] as $note): ?>
<? _X ('note-pre') ?>
<article>
	<h3 class="article-name"><?= _A ('<a href="'. $note['href']. '">'. $note['title']. '</a>') ?></h3>
	<div class="article-menu">
		<? if (array_key_exists ('favourite-toggle-href', $note)): ?>
		<a href="<?= $note['favourite-toggle-href'] ?>" class="e2-favourite-toggle">
		<img src="<?= _IMGSRC ('star-'. ($note['favourite?']? 'set' : 'unset') .'.png') ?>" alt="Избранное" title="Избранное"
		/></a>
		
		<? else: ?>
		<? if (@$note['favourite?']) { ?><img src="<?= _IMGSRC ('star.gif') ?>" alt="Избранное" /><? } ?> 
		<? endif ?>
		
		<? if (@$note['published?']): ?>
		
		<? if (array_key_exists ('edit-href', $note)): ?>
		<a href="<?= $note['edit-href'] ?>"><img src="<?= _IMGSRC ('edit.png') ?>" alt="Править" title="Править" /></a>
		<? endif ?>
		
		<? if (array_key_exists ('delete-href', $note)): ?>
		<a href="<?= $note['delete-href'] ?>"><img src="<?= _IMGSRC ('remove.png') ?>" alt="Удалить" title="Удалить" /></a>
		<? endif ?>
		
		<? endif ?>
	</div>
	<div class="article-date" title="<?=(@$note['published?'] ? _DT ('j {month-g} Y, H:i, {zone}', @$note['time']) : 'Черновик создан:'._DT ('j {month-g} Y, H:i, {zone}', @$note['time']).', изменён: '._DT ('j {month-g} Y, H:i, {zone}', @$note['last-modified']))?>">
		<? if (@$note['published?']) { ?>
			<?= _AGO ($note['time']) ?>
		<? } else { ?>
			<?=_DT ('j {month-g} Y, H:i', @$note['time'])?>…
		<? } ?>
	</div>
	<p class="article-message">
		<div class="text <?= $note['published?']? 'published' : 'draft' ?> <?= $note['visible?']? 'visible' : 'hidden' ?>">
		<?=@$note['text']?>
		</div>
	</p>
	
	<? if (array_key_exists ('tags', $note)): ?>
	<div class="article-tags">
		<?
		$tags = array ();
		foreach ($note['tags'] as $tag) {
		  if ($tag['current?']) {
		    $tags[] = '<span class="e2-marked">'. $tag['name'] .'</span>';
		  } else {
		    $tags[] = '<a href="'. $tag['href'] .'">'. $tag['name'] .'</a>';
		  }
		}
		echo implode (' &nbsp; ', $tags)
		
		?>
	</div>
	<? endif; ?>
	
	<? if ($note['comments-link?']): ?>
	<div class="article-comments">
	<? if ($note['comments-count']) { ?>
	<a href="<?= $note['href'] ?>"><?= _NUM ($note['comments-count'] .' комментари(й,я,ев)') ?></a><? if ($note['new-comments-count'] == 1 and $note['comments-count'] == 1) { ?>
	, новый
	<? } elseif ($note['new-comments-count'] == $note['comments-count']) { ?>
	, новые
	<? } elseif ($note['new-comments-count']) { ?>
	<span class="admin-links">, включая <a href="<?=$note['href']?>#new"><?= _NUM ($note['new-comments-count'] .' новы(й,х,х)') ?></a></span>
	<? } ?>
	<? } else { ?>
		<a href="<?= $note['href'] ?>">Комментариев нет</a>
	<? } ?>
	</div>
	<? endif ?>
	
	<? if (!@$note['published?']): ?>
	<div class="toolbar">
	  <? if (array_key_exists ('edit-href', $note)) { ?>
	    <a href="<?= @$note['edit-href'] ?>"><button type="button" class="button">
	      <img src="<?= _IMGSRC ('edit.png') ?>" alt="" width="16" height="16" />Править
	    </button></a>
	  <? } ?>
	  <div class="toolbar-end"></div>
	</div>
	<? endif ?>
	
</article>
<? _X ('note-post') ?>
<? endforeach ?>
