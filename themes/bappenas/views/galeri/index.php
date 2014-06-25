<?php if(count($dt)>0){ ?>
	<script type="text/javascript">
		$("a[rel=galeri]").fancybox({
			'transitionIn'		: 'fade',
			'transitionOut'		: 'fade',
			'overlayColor'		: '#000',
			'overlayOpacity'	: 0.9				
		});
	</script>
    <?php foreach($dt as $dt_g): ?>
	    <?php 
			$gambar="no_image.jpg";
			if($dt_g['gambar']!=""){$gambar=$dt_g['gambar'];}
		?>

		<div class="border-hidden-gallery">
			<a href="<?php echo Yii::app()->theme->baseUrl; ?>/galeri/<?php echo $gambar; ?>" rel="galeri" class="vtip" title="<?php echo $dt_g['judul']; ?>">
				<img width="110" border="0" src="<?php echo Yii::app()->theme->baseUrl; ?>/galeri/<?php echo $gambar; ?>" />
			</a>
		</div>
	<?php endforeach; ?>

<?php } else{ echo "<p>Belum ada data untuk album ini ini</p>";} ?>
