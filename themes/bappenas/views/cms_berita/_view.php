<?php
/* @var $this Dashboard_beritaController */
/* @var $data BeritaDashboardModel */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_berita')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_berita), array('view', 'id'=>$data->id_berita)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('judul')); ?>:</b>
	<?php echo CHtml::encode($data->judul); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tanggal')); ?>:</b>
	<?php echo CHtml::encode($data->tanggal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('isi')); ?>:</b>
	<?php echo CHtml::encode($data->isi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('gambar')); ?>:</b>
	<?php echo CHtml::encode($data->gambar); ?>
	<br />


</div>