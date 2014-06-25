<style type="text/css">
#coloumns{
	padding: 30px;
}
.row{
	padding: 4px;
	width: 230px;
	float: left;
}
</style>
<div id="coloumns">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'agenda-dashboard-model-form',
	'enableAjaxValidation'=>false,
	'htmlOptions' => array('class'=>'mainForm',
        'enctype' => 'multipart/form-data',),
)); ?>

	<div class="row">
		<?php
			$cek_id_koridor = false;
			if(Yii::app()->session['id_koridor_dbi']==1){$cek_id_koridor = true;}
		?>
		<?php echo $form->labelEx($model,'id_koridor'); ?>
		<?php echo $form->checkBox($model,'id_koridor',array('rows'=>6, 'cols'=>50, 'checked' => $cek_id_koridor, 'id'=>'chk-0')); ?>
		<?php echo $form->error($model,'id_koridor'); ?>
	</div>

	<div class="row">
		<?php
			$cek_id_sektor = false;
			if(Yii::app()->session['id_sektor_dbi']==1){$cek_id_sektor = true;}
		?>
		<?php echo $form->labelEx($model,'id_sektor'); ?>
		<?php echo $form->checkBox($model,'id_sektor',array('rows'=>6, 'cols'=>50, 'checked' => $cek_id_sektor, 'id'=>'chk-1')); ?>
		<?php echo $form->error($model,'id_sektor'); ?>
	</div>

	<div class="row">
		<?php
			$cek_id_nilai_investasi = false;
			if(Yii::app()->session['id_nilai_investasi_dbi']==1){$cek_id_nilai_investasi = true;}
		?>
		<?php echo $form->labelEx($model,'id_nilai_investasi'); ?>
		<?php echo $form->checkBox($model,'id_nilai_investasi',array('rows'=>6, 'cols'=>50, 'checked' => $cek_id_nilai_investasi, 'id'=>'chk-2')); ?>
		<?php echo $form->error($model,'id_nilai_investasi'); ?>
	</div>

	<div class="row">
		<?php
			$cek_id_sumber_dana = false;
			if(Yii::app()->session['id_sumber_dana_dbi']==1){$cek_id_sumber_dana = true;}
		?>
		<?php echo $form->labelEx($model,'id_sumber_dana'); ?>
		<?php echo $form->checkBox($model,'id_sumber_dana',array('rows'=>6, 'cols'=>50, 'checked' => $cek_id_sumber_dana, 'id'=>'chk-3')); ?>
		<?php echo $form->error($model,'id_sumber_dana'); ?>
	</div>

	<div class="row">
		<?php
			$cek_mulai = false;
			if(Yii::app()->session['mulai_dbi']==1){$cek_mulai = true;}
		?>
		<?php echo $form->labelEx($model,'mulai'); ?>
		<?php echo $form->checkBox($model,'mulai',array('rows'=>6, 'cols'=>50, 'checked' => $cek_mulai, 'id'=>'chk-4')); ?>
		<?php echo $form->error($model,'mulai'); ?>
	</div>

	<div class="row">
		<?php
			$cek_selesai = false;
			if(Yii::app()->session['selesai_dbi']==1){$cek_selesai = true;}
		?>
		<?php echo $form->labelEx($model,'selesai'); ?>
		<?php echo $form->checkBox($model,'selesai',array('rows'=>6, 'cols'=>50, 'checked' => $cek_selesai, 'id'=>'chk-5')); ?>
		<?php echo $form->error($model,'selesai'); ?>
	</div>

	<div class="row">
		<?php
			$cek_id_pelaksana = false;
			if(Yii::app()->session['id_pelaksana_dbi']==1){$cek_id_pelaksana = true;}
		?>
		<?php echo $form->labelEx($model,'id_pelaksana'); ?>
		<?php echo $form->checkBox($model,'id_pelaksana',array('rows'=>6, 'cols'=>50, 'checked' => $cek_id_pelaksana, 'id'=>'chk-6')); ?>
		<?php echo $form->error($model,'id_pelaksana'); ?>
	</div>

	<div class="row">
		<?php
			$cek_id_kawasan = false;
			if(Yii::app()->session['id_kawasan_dbi']==1){$cek_id_kawasan = true;}
		?>
		<?php echo $form->labelEx($model,'id_kawasan'); ?>
		<?php echo $form->checkBox($model,'id_kawasan',array('rows'=>6, 'cols'=>50, 'checked' => $cek_id_kawasan, 'id'=>'chk-7')); ?>
		<?php echo $form->error($model,'id_kawasan'); ?>
	</div>

	<div class="row">
		<?php
			$cek_id_kategori = false;
			if(Yii::app()->session['id_kategori_dbi']==1){$cek_id_kategori = true;}
		?>
		<?php echo $form->labelEx($model,'id_kategori'); ?>
		<?php echo $form->checkBox($model,'id_kategori',array('rows'=>6, 'cols'=>50, 'checked' => $cek_id_kategori, 'id'=>'chk-8')); ?>
		<?php echo $form->error($model,'id_kategori'); ?>
	</div>

	<div class="row">
		<?php
			$cek_nama_proyek = false;
			if(Yii::app()->session['nama_proyek_dbi']==1){$cek_nama_proyek = true;}
		?>
		<?php echo $form->labelEx($model,'nama_proyek'); ?>
		<?php echo $form->checkBox($model,'nama_proyek',array('rows'=>6, 'cols'=>50, 'checked' => $cek_nama_proyek, 'id'=>'chk-9')); ?>
		<?php echo $form->error($model,'nama_proyek'); ?>
	</div>

	<div class="row">
		<?php
			$cek_gb = false;
			if(Yii::app()->session['gb_dbi']==1){$cek_gb = true;}
		?>
		<?php echo $form->labelEx($model,'gb'); ?>
		<?php echo $form->checkBox($model,'gb',array('rows'=>6, 'cols'=>50, 'checked' => $cek_gb, 'id'=>'chk-10')); ?>
		<?php echo $form->error($model,'gb'); ?>
	</div>

	<div class="row">
		<?php
			$cek_provinsi = false;
			if(Yii::app()->session['provinsi_dbi']==1){$cek_provinsi = true;}
		?>
		<?php echo $form->labelEx($model,'provinsi'); ?>
		<?php echo $form->checkBox($model,'provinsi',array('rows'=>6, 'cols'=>50, 'checked' => $cek_provinsi, 'id'=>'chk-11')); ?>
		<?php echo $form->error($model,'provinsi'); ?>
	</div>

	<div class="row">
		<?php
			$cek_status_proyek = false;
			if(Yii::app()->session['status_proyek_dbi']==1){$cek_status_proyek = true;}
		?>
		<?php echo $form->labelEx($model,'status_proyek'); ?>
		<?php echo $form->checkBox($model,'status_proyek',array('rows'=>6, 'cols'=>50, 'checked' => $cek_status_proyek, 'id'=>'chk-12')); ?>
		<?php echo $form->error($model,'status_proyek'); ?>
	</div>

	<div class="row">
		<?php
			$cek_sumber_usulan = false;
			if(Yii::app()->session['sumber_usulan_dbi']==1){$cek_sumber_usulan = true;}
		?>
		<?php echo $form->label($model,'sumber_usulan'); ?>
		<?php echo $form->checkBox($model,'sumber_usulan',array('size'=>60,'maxlength'=>150,'id'=>'sumber_usulan', 'checked' => $cek_sumber_usulan, 'id'=>'chk-13')); ?>
		<?php echo $form->error($model,'sumber_usulan'); ?>
	</div>

	<div class="row">
		<?php
			$cek_detail_surat_usulan = false;
			if(Yii::app()->session['detail_surat_usulan_dbi']==1){$cek_detail_surat_usulan = true;}
		?>
		<?php echo $form->labelEx($model,'detail_surat_usulan'); ?>
		<?php echo $form->checkBox($model,'detail_surat_usulan',array('rows'=>6, 'cols'=>50, 'checked' => $cek_detail_surat_usulan, 'id'=>'chk-14')); ?>
		<?php echo $form->error($model,'detail_surat_usulan'); ?>
	</div>

	<div class="row">
		<?php
			$cek_perubahan_kepres_lama = false;
			if(Yii::app()->session['perubahan_kepres_lama_dbi']==1){$cek_perubahan_kepres_lama = true;}
		?>
		<?php echo $form->labelEx($model,'perubahan_kepres_lama'); ?>
		<?php echo $form->checkBox($model,'perubahan_kepres_lama',array('rows'=>6, 'cols'=>50, 'checked' => $cek_perubahan_kepres_lama, 'id'=>'chk-15')); ?>
		<?php echo $form->error($model,'perubahan_kepres_lama'); ?>
	</div>

	<div class="row">
		<?php
			$cek_evaluasi_konsinyering_kp3ei = false;
			if(Yii::app()->session['evaluasi_konsinyering_kp3ei_dbi']==1){$cek_evaluasi_konsinyering_kp3ei = true;}
		?>
		<?php echo $form->labelEx($model,'evaluasi_konsinyering_kp3ei'); ?>
		<?php echo $form->checkBox($model,'evaluasi_konsinyering_kp3ei',array('rows'=>6, 'cols'=>50, 'checked' => $cek_evaluasi_konsinyering_kp3ei, 'id'=>'chk-16')); ?>
		<?php echo $form->error($model,'evaluasi_konsinyering_kp3ei'); ?>
	</div>

	<div class="row">
		<?php
			$cek_alasan_evaluasi = false;
			if(Yii::app()->session['alasan_evaluasi_dbi']==1){$cek_alasan_evaluasi = true;}
		?>
		<?php echo $form->labelEx($model,'alasan_evaluasi'); ?>
		<?php echo $form->checkBox($model,'alasan_evaluasi',array('rows'=>6, 'cols'=>50, 'checked' => $cek_alasan_evaluasi, 'id'=>'chk-17')); ?>
		<?php echo $form->error($model,'alasan_evaluasi'); ?>
	</div>

	<div class="row">
		<?php
			$cek_nilai_strategis_proyek = false;
			if(Yii::app()->session['nilai_strategis_proyek_dbi']==1){$cek_nilai_strategis_proyek = true;}
		?>
		<?php echo $form->labelEx($model,'nilai_strategis_proyek'); ?>
		<?php echo $form->checkBox($model,'nilai_strategis_proyek',array('rows'=>6, 'cols'=>50, 'checked' => $cek_nilai_strategis_proyek, 'id'=>'chk-18')); ?>
		<?php echo $form->error($model,'nilai_strategis_proyek'); ?>
	</div>

	<div class="row">
		<?php
			$cek_pagu_definitif_apbn_apbd_2011 = false;
			if(Yii::app()->session['pagu_definitif_apbn_apbd_2011_dbi']==1){$cek_pagu_definitif_apbn_apbd_2011 = true;}
		?>
		<?php echo $form->labelEx($model,'pagu_definitif_apbn_apbd_2011'); ?>
		<?php echo $form->checkBox($model,'pagu_definitif_apbn_apbd_2011',array('rows'=>6, 'cols'=>50, 'checked' => $cek_pagu_definitif_apbn_apbd_2011, 'id'=>'chk-19')); ?>
		<?php echo $form->error($model,'pagu_definitif_apbn_apbd_2011'); ?>
	</div>

	<div class="row">
		<?php
			$cek_pagu_definitif_apbn_apbd_2012 = false;
			if(Yii::app()->session['pagu_definitif_apbn_apbd_2012_dbi']==1){$cek_pagu_definitif_apbn_apbd_2012 = true;}
		?>
		<?php echo $form->labelEx($model,'pagu_definitif_apbn_apbd_2012'); ?>
		<?php echo $form->checkBox($model,'pagu_definitif_apbn_apbd_2012',array('rows'=>6, 'cols'=>50, 'checked' => $cek_pagu_definitif_apbn_apbd_2012, 'id'=>'chk-20')); ?>
		<?php echo $form->error($model,'pagu_definitif_apbn_apbd_2012'); ?>
	</div>

	<div class="row">
		<?php
			$cek_pagu_definitif_apbn_apbd_2013 = false;
			if(Yii::app()->session['pagu_definitif_apbn_apbd_2013_dbi']==1){$cek_pagu_definitif_apbn_apbd_2013 = true;}
		?>
		<?php echo $form->labelEx($model,'pagu_definitif_apbn_apbd_2013'); ?>
		<?php echo $form->checkBox($model,'pagu_definitif_apbn_apbd_2013',array('rows'=>6, 'cols'=>50, 'checked' => $cek_pagu_definitif_apbn_apbd_2013, 'id'=>'chk-21')); ?>
		<?php echo $form->error($model,'pagu_definitif_apbn_apbd_2013'); ?>
	</div>

	<div class="row">
		<?php
			$cek_penyerapan_2013 = false;
			if(Yii::app()->session['penyerapan_2013_dbi']==1){$cek_penyerapan_2013 = true;}
		?>
		<?php echo $form->labelEx($model,'penyerapan_2013'); ?>
		<?php echo $form->checkBox($model,'penyerapan_2013',array('rows'=>6, 'cols'=>50, 'checked' => $cek_penyerapan_2013, 'id'=>'chk-22')); ?>
		<?php echo $form->error($model,'penyerapan_2013'); ?>
	</div>

	<div class="row">
		<?php
			$cek_pagu_indikatif_apbn_2014 = false;
			if(Yii::app()->session['pagu_indikatif_apbn_2014_dbi']==1){$cek_pagu_indikatif_apbn_2014 = true;}
		?>
		<?php echo $form->labelEx($model,'pagu_indikatif_apbn_2014'); ?>
		<?php echo $form->checkBox($model,'pagu_indikatif_apbn_2014',array('rows'=>6, 'cols'=>50, 'checked' => $cek_pagu_indikatif_apbn_2014, 'id'=>'chk-23')); ?>
		<?php echo $form->error($model,'pagu_indikatif_apbn_2014'); ?>
	</div>

	<div class="row">
		<?php
			$cek_pagu_definitif_apbn_2014 = false;
			if(Yii::app()->session['pagu_definitif_apbn_2014_dbi']==1){$cek_pagu_definitif_apbn_2014 = true;}
		?>
		<?php echo $form->labelEx($model,'pagu_definitif_apbn_2014'); ?>
		<?php echo $form->checkBox($model,'pagu_definitif_apbn_2014',array('rows'=>6, 'cols'=>50, 'checked' => $cek_pagu_definitif_apbn_2014, 'id'=>'chk-24')); ?>
		<?php echo $form->error($model,'pagu_definitif_apbn_2014'); ?>
	</div>

	<div class="row">
		<?php
			$cek_alokasi_perencanaan_bumn_2011 = false;
			if(Yii::app()->session['alokasi_perencanaan_bumn_2011_dbi']==1){$cek_alokasi_perencanaan_bumn_2011 = true;}
		?>
		<?php echo $form->labelEx($model,'alokasi_perencanaan_bumn_2011'); ?>
		<?php echo $form->checkBox($model,'alokasi_perencanaan_bumn_2011',array('rows'=>6, 'cols'=>50, 'checked' => $cek_alokasi_perencanaan_bumn_2011, 'id'=>'chk-25')); ?>
		<?php echo $form->error($model,'alokasi_perencanaan_bumn_2011'); ?>
	</div>

	<div class="row">
		<?php
			$cek_alokasi_perencanaan_bumn_2012 = false;
			if(Yii::app()->session['alokasi_perencanaan_bumn_2012_dbi']==1){$cek_alokasi_perencanaan_bumn_2012 = true;}
		?>
		<?php echo $form->labelEx($model,'alokasi_perencanaan_bumn_2012'); ?>
		<?php echo $form->checkBox($model,'alokasi_perencanaan_bumn_2012',array('rows'=>6, 'cols'=>50, 'checked' => $cek_alokasi_perencanaan_bumn_2012, 'id'=>'chk-26')); ?>
		<?php echo $form->error($model,'alokasi_perencanaan_bumn_2012'); ?>
	</div>

	<div class="row">
		<?php
			$cek_alokasi_perencanaan_bumn_2013 = false;
			if(Yii::app()->session['alokasi_perencanaan_bumn_2013_dbi']==1){$cek_alokasi_perencanaan_bumn_2013 = true;}
		?>
		<?php echo $form->labelEx($model,'alokasi_perencanaan_bumn_2013'); ?>
		<?php echo $form->checkBox($model,'alokasi_perencanaan_bumn_2013',array('rows'=>6, 'cols'=>50, 'checked' => $cek_alokasi_perencanaan_bumn_2013, 'id'=>'chk-27')); ?>
		<?php echo $form->error($model,'alokasi_perencanaan_bumn_2013'); ?>
	</div>

	<div class="row">
		<?php
			$cek_alokasi_perencanaan_bumn_2014 = false;
			if(Yii::app()->session['alokasi_perencanaan_bumn_2014_dbi']==1){$cek_alokasi_perencanaan_bumn_2014 = true;}
		?>
		<?php echo $form->labelEx($model,'alokasi_perencanaan_bumn_2014'); ?>
		<?php echo $form->checkBox($model,'alokasi_perencanaan_bumn_2014',array('rows'=>6, 'cols'=>50, 'checked' => $cek_alokasi_perencanaan_bumn_2014, 'id'=>'chk-28')); ?>
		<?php echo $form->error($model,'alokasi_perencanaan_bumn_2014'); ?>
	</div>

	<div class="row">
		<?php
			$cek_perencanaan_alokasi_swasta_2011 = false;
			if(Yii::app()->session['perencanaan_alokasi_swasta_2011_dbi']==1){$cek_perencanaan_alokasi_swasta_2011 = true;}
		?>
		<?php echo $form->labelEx($model,'perencanaan_alokasi_swasta_2011'); ?>
		<?php echo $form->checkBox($model,'perencanaan_alokasi_swasta_2011',array('rows'=>6, 'cols'=>50, 'checked' => $cek_perencanaan_alokasi_swasta_2011, 'id'=>'chk-29')); ?>
		<?php echo $form->error($model,'perencanaan_alokasi_swasta_2011'); ?>
	</div>

	<div class="row">
		<?php
			$cek_perencanaan_alokasi_swasta_2012 = false;
			if(Yii::app()->session['perencanaan_alokasi_swasta_2012_dbi']==1){$cek_perencanaan_alokasi_swasta_2012 = true;}
		?>
		<?php echo $form->labelEx($model,'perencanaan_alokasi_swasta_2012'); ?>
		<?php echo $form->checkBox($model,'perencanaan_alokasi_swasta_2012',array('rows'=>6, 'cols'=>50, 'checked' => $cek_perencanaan_alokasi_swasta_2012, 'id'=>'chk-30')); ?>
		<?php echo $form->error($model,'perencanaan_alokasi_swasta_2012'); ?>
	</div>

	<div class="row">
		<?php
			$cek_perencanaan_alokasi_swasta_2013 = false;
			if(Yii::app()->session['perencanaan_alokasi_swasta_2013_dbi']==1){$cek_perencanaan_alokasi_swasta_2013 = true;}
		?>
		<?php echo $form->labelEx($model,'perencanaan_alokasi_swasta_2013'); ?>
		<?php echo $form->checkBox($model,'perencanaan_alokasi_swasta_2013',array('rows'=>6, 'cols'=>50, 'checked' => $cek_perencanaan_alokasi_swasta_2013, 'id'=>'chk-31')); ?>
		<?php echo $form->error($model,'perencanaan_alokasi_swasta_2013'); ?>
	</div>

	<div class="row">
		<?php
			$cek_perencanaan_alokasi_swasta_2014 = false;
			if(Yii::app()->session['perencanaan_alokasi_swasta_2014_dbi']==1){$cek_perencanaan_alokasi_swasta_2014 = true;}
		?>
		<?php echo $form->labelEx($model,'perencanaan_alokasi_swasta_2014'); ?>
		<?php echo $form->checkBox($model,'perencanaan_alokasi_swasta_2014',array('rows'=>6, 'cols'=>50, 'checked' => $cek_perencanaan_alokasi_swasta_2014, 'id'=>'chk-32')); ?>
		<?php echo $form->error($model,'perencanaan_alokasi_swasta_2014'); ?>
	</div>

	<div class="rowElem nobg">
		<label></label>
		<div class="formRight">
			<?php echo CHtml::submitButton('Filter Columns',array("class" => "greyishBtn submitForm")); ?>
			<label class="checkbox">
				<input type=radio id=pilih name="pilih" onClick='for (i=0;i<33;i++){document.getElementById("chk-"+i).checked=true;}'> Check All
			</label>
			<label class="checkbox">
				<input type=radio id=nopilih name="pilih" onClick='for (i=0;i<33;i++){document.getElementById("chk-"+i).checked=false;}'> Uncheck All
			</label>
		</div>
		<div class="fix"></div>
	</div>
<?php $this->endWidget(); ?>
</div>