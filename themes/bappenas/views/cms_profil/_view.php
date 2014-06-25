<?php
/* @var $this Dashboard_profilController */
/* @var $data ProfilDashboardModel */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_profil')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_profil), array('view', 'id'=>$data->id_profil)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('judul')); ?>:</b>
	<?php echo CHtml::encode($data->judul); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('keterangan')); ?>:</b>
	<?php echo CHtml::encode($data->keterangan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('icon')); ?>:</b>
	<?php echo CHtml::encode($data->icon); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('url_route')); ?>:</b>
	<?php echo CHtml::encode($data->url_route); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('widget_st')); ?>:</b>
	<?php echo CHtml::encode($data->widget_st); ?>
	<br />


</div>