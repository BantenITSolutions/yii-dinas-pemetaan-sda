<?php
/* @var $this Dashboard_front_page_menuController */
/* @var $data DashboardFrontMenuModel */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_menu')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_menu), array('view', 'id'=>$data->id_menu)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_parent')); ?>:</b>
	<?php echo CHtml::encode($data->id_parent); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('menu')); ?>:</b>
	<?php echo CHtml::encode($data->menu); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('url_route')); ?>:</b>
	<?php echo CHtml::encode($data->url_route); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('content')); ?>:</b>
	<?php echo CHtml::encode($data->content); ?>
	<br />


</div>