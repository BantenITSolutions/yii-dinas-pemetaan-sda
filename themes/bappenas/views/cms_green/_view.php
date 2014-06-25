<?php
/* @var $this Dashboard_greenController */
/* @var $data GreenDashboardModel */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_green')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_green), array('view', 'id'=>$data->id_green)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('judul')); ?>:</b>
	<?php echo CHtml::encode($data->judul); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('isi')); ?>:</b>
	<?php echo CHtml::encode($data->isi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipe')); ?>:</b>
	<?php echo CHtml::encode($data->tipe); ?>
	<br />


</div>