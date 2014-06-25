<div class="border-hidden-album">
		<a href="<?php echo Yii::app()->baseUrl.'/galeri/index/'.$data->id_album; ?>" class="vtip" title="<?php echo $data->album; ?>">
			<img src='<?php echo Yii::app()->theme->baseUrl; ?>/images/album-icon.png' width="120" height="120" />
		</a>
		<?php echo $data->album; ?>
</div>

