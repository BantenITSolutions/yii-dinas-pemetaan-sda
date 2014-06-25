<?php
/* @var $this Cms_database_infrastrukturController */
/* @var $data InfrastrukturCmsModel */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_infrastruktur')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_infrastruktur), array('view', 'id'=>$data->id_infrastruktur)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_koridor')); ?>:</b>
	<?php echo CHtml::encode($data->id_koridor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_sektor')); ?>:</b>
	<?php echo CHtml::encode($data->id_sektor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_sumber_dana')); ?>:</b>
	<?php echo CHtml::encode($data->id_sumber_dana); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama_proyek')); ?>:</b>
	<?php echo CHtml::encode($data->nama_proyek); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_nilai_investasi')); ?>:</b>
	<?php echo CHtml::encode($data->id_nilai_investasi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mulai')); ?>:</b>
	<?php echo CHtml::encode($data->mulai); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('selesai')); ?>:</b>
	<?php echo CHtml::encode($data->selesai); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('gb')); ?>:</b>
	<?php echo CHtml::encode($data->gb); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('provinsi')); ?>:</b>
	<?php echo CHtml::encode($data->provinsi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status_selesai_proyek')); ?>:</b>
	<?php echo CHtml::encode($data->status_selesai_proyek); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_pelaksana')); ?>:</b>
	<?php echo CHtml::encode($data->id_pelaksana); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status_proyek')); ?>:</b>
	<?php echo CHtml::encode($data->status_proyek); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_kawasan')); ?>:</b>
	<?php echo CHtml::encode($data->id_kawasan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sumber_usulan')); ?>:</b>
	<?php echo CHtml::encode($data->sumber_usulan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('perubahan_kepres_lama')); ?>:</b>
	<?php echo CHtml::encode($data->perubahan_kepres_lama); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kategori')); ?>:</b>
	<?php echo CHtml::encode($data->kategori); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('alokasi_apbn_apbd_2011')); ?>:</b>
	<?php echo CHtml::encode($data->alokasi_apbn_apbd_2011); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('alokasi_apbn_apbd_2012')); ?>:</b>
	<?php echo CHtml::encode($data->alokasi_apbn_apbd_2012); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pagu_apbn_2013')); ?>:</b>
	<?php echo CHtml::encode($data->pagu_apbn_2013); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rkp_apbn_2014')); ?>:</b>
	<?php echo CHtml::encode($data->rkp_apbn_2014); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('alokasi_bumn_2011')); ?>:</b>
	<?php echo CHtml::encode($data->alokasi_bumn_2011); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('alokasi_bumn_2012')); ?>:</b>
	<?php echo CHtml::encode($data->alokasi_bumn_2012); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('alokasi_bumn_2013')); ?>:</b>
	<?php echo CHtml::encode($data->alokasi_bumn_2013); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('alokasi_bumn_2014')); ?>:</b>
	<?php echo CHtml::encode($data->alokasi_bumn_2014); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('alokasi_swasta_2011')); ?>:</b>
	<?php echo CHtml::encode($data->alokasi_swasta_2011); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('alokasi_swasta_2012')); ?>:</b>
	<?php echo CHtml::encode($data->alokasi_swasta_2012); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('alokasi_swasta_2013')); ?>:</b>
	<?php echo CHtml::encode($data->alokasi_swasta_2013); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('alokasi_swasta_2014')); ?>:</b>
	<?php echo CHtml::encode($data->alokasi_swasta_2014); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lat')); ?>:</b>
	<?php echo CHtml::encode($data->lat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lang')); ?>:</b>
	<?php echo CHtml::encode($data->lang); ?>
	<br />

	*/ ?>

</div>