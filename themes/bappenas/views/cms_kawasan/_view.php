<?php
/* @var $this Dashboard_koridorController */
/* @var $data KoridorModel */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_kawasan')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_kawasan), array('view', 'id'=>$data->id_kawasan)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kawasan')); ?>:</b>
	<?php echo CHtml::encode($data->kawasan); ?>
	<br />


</div>