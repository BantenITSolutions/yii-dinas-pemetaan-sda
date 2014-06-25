<?php
/* @var $this Cms_statistikController */
/* @var $data DetailStatistik */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_detail_statistik')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_detail_statistik), array('view', 'id'=>$data->id_detail_statistik)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_header_statistik')); ?>:</b>
	<?php echo CHtml::encode($data->id_header_statistik); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bulan')); ?>:</b>
	<?php echo CHtml::encode($data->bulan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pre_clearance')); ?>:</b>
	<?php echo CHtml::encode($data->pre_clearance); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('customs_clearance')); ?>:</b>
	<?php echo CHtml::encode($data->customs_clearance); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('posts_clearance')); ?>:</b>
	<?php echo CHtml::encode($data->posts_clearance); ?>
	<br />


</div>