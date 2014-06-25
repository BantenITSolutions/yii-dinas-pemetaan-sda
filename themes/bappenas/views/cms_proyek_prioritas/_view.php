<?php
/* @var $this Dashboard_proyek_prioritasController */
/* @var $data ProyekPrioritasDashboardModel */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_proyek_prioritas')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_proyek_prioritas), array('view', 'id'=>$data->id_proyek_prioritas)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('judul')); ?>:</b>
	<?php echo CHtml::encode($data->judul); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('gambar')); ?>:</b>
	<?php echo CHtml::encode($data->gambar); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('isi')); ?>:</b>
	<?php echo CHtml::encode($data->isi); ?>
	<br />


</div>