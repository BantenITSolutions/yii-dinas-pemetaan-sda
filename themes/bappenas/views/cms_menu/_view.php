<?php
/* @var $this Dashboard_menuController */
/* @var $data DashboardMenuModel */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_menu_admin')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_menu_admin), array('view', 'id'=>$data->id_menu_admin)); ?>
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


</div>