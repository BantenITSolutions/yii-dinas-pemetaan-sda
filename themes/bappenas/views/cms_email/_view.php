<?php
/* @var $this Cms_emailController */
/* @var $data Email */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_email')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_email), array('view', 'id'=>$data->id_email)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />


</div>