<div id="news-list">
		<h4>Posted on : <?php echo $data->tanggal; ?> | Start from : <?php echo $data->tanggal_mulai; ?> - Until : <?php echo $data->tanggal_selesai; ?></h4>
		<h1><?php echo CHtml::link(CHtml::encode($data->judul), Yii::app()->baseUrl.'/agenda/detail/'.$data->id_agenda, array("class"=>"agenda")); ?></h1>
		
		<?php echo substr($data->isi,0,350); ?>...
		<div class="cleaner_h5"></div>
</div>
