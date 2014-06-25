

<?php 
	$i=1;
	foreach($dt_berita as $dt_b): ?>
	<?php 
		$gambar="no_image.jpg";
		if($dt_b['gambar']!=""){$gambar=$dt_b['gambar'];}
		if($i>3)
		{
			echo '<div class="newsLast">';
		}
		else
		{
			echo '<div class="news">';
		}
	?>
	<?php
    	$cls = "";
    	$link = "berita/detail/".$dt_b->id_berita;
     	if($dt_b->jenis=="confidential" && Yii::app()->user->isGuest){$cls="boxlogin"; $link="site/login";}
     ?>

      <div class="newsInner">
        <img src='<?php echo Yii::app()->theme->baseUrl; ?>/berita/<?php echo $gambar; ?>' width="350" />
        <p class="titleNews"><?php echo $dt_b['judul']; ?></p>
        <p><?php echo substr(strip_tags($dt_b['isi']),0,230); ?></p>
        &rsaquo; <a href="<?php echo Yii::app()->baseUrl; ?>/<?php echo $link; ?>" class="<?php echo $cls; ?>">See Detail</a>
      </div>
    </div>
<?php $i++; endforeach; ?>

