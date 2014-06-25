<?php
/* @var $this Dashboard_koridorController */
/* @var $data KoridorModel */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_sektor')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_sektor), array('view', 'id'=>$data->id_sektor)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sektor')); ?>:</b>
	<?php echo CHtml::encode($data->sektor); ?>
	<br />


</div>