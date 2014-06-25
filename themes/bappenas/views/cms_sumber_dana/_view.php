<?php
/* @var $this Dashboard_koridorController */
/* @var $data KoridorModel */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_sumber_dana')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_sumber_dana), array('view', 'id'=>$data->id_sumber_dana)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sumber_dana')); ?>:</b>
	<?php echo CHtml::encode($data->sumber_dana); ?>
	<br />


</div>