<?php
/* @var $this Cms_dashboard_menuController */
/* @var $data MenuDashboardModel */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_menu_dashboard')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_menu_dashboard), array('view', 'id'=>$data->id_menu_dashboard)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('menu')); ?>:</b>
	<?php echo CHtml::encode($data->menu); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('url_route')); ?>:</b>
	<?php echo CHtml::encode($data->url_route); ?>
	<br />


</div>