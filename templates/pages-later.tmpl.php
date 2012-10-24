<? if ($content['pages']['later-href'] and $content['pages']['later-title']): ?>
<section class="pages down">
	<span class="keyboard-shortcut"><?= _SHORTCUT ('navigation-later') ?></span><a href="<?= $content['pages']['later-href'] ?>"><?= $content['pages']['later-title'] ?></a>
</section>
<? endif ?>