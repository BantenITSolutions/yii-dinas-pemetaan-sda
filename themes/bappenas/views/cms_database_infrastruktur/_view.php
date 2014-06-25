<?php
/* @var $this Dashboard_database_infrastrukturController */
/* @var $data DashboardDbiModel */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_dbi')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_dbi), array('view', 'id'=>$data->id_dbi)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lat')); ?>:</b>
	<?php echo CHtml::encode($data->lat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lang')); ?>:</b>
	<?php echo CHtml::encode($data->lang); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kode_proyek')); ?>:</b>
	<?php echo CHtml::encode($data->kode_proyek); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama_proyek')); ?>:</b>
	<?php echo CHtml::encode($data->nama_proyek); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_koridor')); ?>:</b>
	<?php echo CHtml::encode($data->id_koridor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_sumber_dana')); ?>:</b>
	<?php echo CHtml::encode($data->id_sumber_dana); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('id_sektor')); ?>:</b>
	<?php echo CHtml::encode($data->id_sektor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tahun_mulai')); ?>:</b>
	<?php echo CHtml::encode($data->tahun_mulai); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tahun_selesai')); ?>:</b>
	<?php echo CHtml::encode($data->tahun_selesai); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_kawasan')); ?>:</b>
	<?php echo CHtml::encode($data->id_kawasan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('keterangan')); ?>:</b>
	<?php echo CHtml::encode($data->keterangan); ?>
	<br />

	*/ ?>

</div>