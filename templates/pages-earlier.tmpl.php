<? if ($content['pages']['earlier-href'] and $content['pages']['earlier-title']): ?>
<section class="pages up">
	<span class="keyboard-shortcut"><?= _SHORTCUT ('navigation-earlier') ?></span><a href="<?= $content['pages']['earlier-href'] ?>"><?= $content['pages']['earlier-title'] ?></a>
</section>
<? endif ?>
