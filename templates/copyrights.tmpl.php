&copy;&nbsp; <span id="e2-blog-author"><?= @$content['blog']['author'] ?></span>, <?=$content['blog']['years-range']?> 
<?
  if (
    array_key_exists ('admin-hrefs', $content)
    and array_key_exists ('name-and-author', $content['admin-hrefs'])
    and !_AT ($content['admin-hrefs']['name-and-author'] )
  ) { 
?>
  <a href="<?= $content['admin-hrefs']['name-and-author'] ?>"><img src="<?= _IMGSRC ('edit-small.png') ?>" alt="�������" title="�������" /></a>
<? } ?>
