<?php
	$cls = "";
	$link = "berita/detail/".$data->id_berita;
 	if($data->jenis=="confidential" && Yii::app()->user->isGuest){$cls="boxlogin"; $link="site/login";}
 ?>
<div id="news-list">
		<h4>Posted on : <?php echo $data->tanggal; ?></h4>
		<h1><?php echo CHtml::link(CHtml::encode($data->judul), Yii::app()->baseUrl.'/'.$link, array("class"=>$cls)); ?></h1>
		<?php 
			$gambar="no_image.jpg";
			if($data->gambar!=""){$gambar=$data->gambar;}
		?>
		<img src='<?php echo Yii::app()->theme->baseUrl; ?>/berita/<?php echo $gambar; ?>' width="250" height="180" /></a>
		<?php echo substr(strip_tags($data->isi),0,300); ?>
		<div class="cleaner_h5"></div>
</div>
