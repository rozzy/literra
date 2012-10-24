<? _X ('footer-pre') ?>
<footer>
	<hr/>
	<div class="copyright">
		<? if (!$content['sign-in']['done?'] and !$content['sign-in']['necessary?']) { ?>
		<a id="e2-visual-login" href="<?= $content['hrefs']['sign-in'] ?>"><img src="<?= _IMGSRC ('login.png') ?>" class="icon" alt="¬ход под паролем" width="16" height="16" /></a>
		<? } ?>
		<? _T ('copyrights') ?>
		<div class="authors">
			<? _T ('engine-info') ?>, дизайн &mdash; <a href="http://nikitin.cc/e2_literra">Literra</a>.
		</div>
	</div>
	<div class="searchform">
		<? _T_FOR ('form-search') ?>
	</div>
</footer>
<? _X ('footer-post') ?>