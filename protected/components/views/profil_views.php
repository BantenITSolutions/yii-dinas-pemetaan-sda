<?php foreach($dt_profil as $dt_p): ?>
	<a href="<?php echo Yii::app()->baseUrl; ?>/profil/detail/<?php echo $dt_p->id_profil; ?>" class="vtip profil" title="<?php echo $dt_p->judul; ?>"><div class="profil_<?php echo $dt_p->id_profil; ?>"><?php echo $dt_p->judul; ?></div></a>
<?php endforeach; ?>

