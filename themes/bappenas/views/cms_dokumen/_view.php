<?php
/* @var $this Dashboard_dokumenController */
/* @var $data DokumenDashboardModel */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_dokumen')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_dokumen), array('view', 'id'=>$data->id_dokumen)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_kat_dokumen')); ?>:</b>
	<?php echo CHtml::encode($data->id_kat_dokumen); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama_dokumen')); ?>:</b>
	<?php echo CHtml::encode($data->nama_dokumen); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('gambar')); ?>:</b>
	<?php echo CHtml::encode($data->gambar); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kat_dokumen')); ?>:</b>
	<?php echo CHtml::encode($data->KategoriDokumen->kat_dokumen); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('keterangan')); ?>:</b>
	<?php echo CHtml::encode($data->keterangan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama_file')); ?>:</b>
	<?php echo CHtml::encode($data->nama_file); ?>
	<br />


</div>