<?php
/* @var $this Cms_tempat_agendaController */
/* @var $data TempatAgendaModel */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_tempat')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_tempat), array('view', 'id'=>$data->id_tempat)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tempat')); ?>:</b>
	<?php echo CHtml::encode($data->tempat); ?>
	<br />


</div>