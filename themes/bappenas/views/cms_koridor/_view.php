<?php
/* @var $this Dashboard_koridorController */
/* @var $data KoridorModel */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_koridor')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_koridor), array('view', 'id'=>$data->id_koridor)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('koridor')); ?>:</b>
	<?php echo CHtml::encode($data->koridor); ?>
	<br />


</div>