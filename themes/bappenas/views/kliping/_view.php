<div id="news-list">
	<h4>Posted on : <?php echo $data->tanggal; ?></h4>
	<h4>Kliping Edisi : <?php echo $data->bulan.'/'.$data->tahun; ?></h4>
	<h1><?php echo CHtml::link(CHtml::encode($data->judul), Yii::app()->baseUrl.'/kliping/detail/'.$data->id_kliping, array("class"=>"kliping","target"=>"_blank")); ?></h1>
	<?php echo strip_tags(substr($data->keterangan,0,350)); ?>...
	<div class="cleaner_h0"></div>
	
	<?php echo CHtml::link(CHtml::encode("View File"), Yii::app()->baseUrl.'/kliping/detail/'.$data->id_kliping, array("class"=>"index-button","target"=>"_blank")); ?>
	<?php echo CHtml::link(CHtml::encode("Download File"), Yii::app()->baseUrl.'/kliping/download/'.$data->id_kliping, array("class"=>"index-button boxcontact")); ?>

	<div class="cleaner_h0"></div>
</div>
