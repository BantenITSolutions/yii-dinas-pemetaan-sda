<?php
/* @var $this Cms_unit_kerjaController */
/* @var $data UnitKerjaModel */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_unit_kerja')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_unit_kerja), array('view', 'id'=>$data->id_unit_kerja)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('unit_kerja')); ?>:</b>
	<?php echo CHtml::encode($data->unit_kerja); ?>
	<br />


</div>