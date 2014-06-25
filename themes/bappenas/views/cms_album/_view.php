<?php
/* @var $this Dashboard_albumController */
/* @var $data AlbumDashboardModel */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_album')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_album), array('view', 'id'=>$data->id_album)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('album')); ?>:</b>
	<?php echo CHtml::encode($data->album); ?>
	<br />


</div>