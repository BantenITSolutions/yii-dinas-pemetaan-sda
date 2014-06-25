<div id="news-list">
		<h4>Posted on : <?php echo $data->tanggal; ?></h4>
		<h1><?php echo CHtml::link(CHtml::encode($data->Infrastruktur->nama_proyek), Yii::app()->baseUrl.'/'.$link); ?></h1>
		<?php echo $keterangan; ?>
		<div class="cleaner_h5"></div>
</div>
