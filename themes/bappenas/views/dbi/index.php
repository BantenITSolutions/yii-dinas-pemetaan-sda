<script type="text/javascript">
  $(window).load(function() { $("#loading").fadeOut("slow"); })
</script>
<div id="loading"></div>
<div style="width:100%; margin:0px auto; padding:0px;">
	<div style="width:23%; margin:0px auto; padding:1%; float:left;">
		<h2>FILTER DATA</h2>
	<?php $form=$this->beginWidget('CActiveForm', array(
		'id'=>'agenda-dashboard-model-form',
        'action' => Yii::app()->createUrl('/dbi/act'),
		'enableAjaxValidation'=>false,
		'htmlOptions' => array('class'=>'mainForm',
	        'enctype' => 'multipart/form-data',),
	)); ?>

	<div class="rowElem nobg">
		<label><h3>Nama Proyek</h3></label>
		<div class="formRight">
			<div id="koridor">
				<input type="text" class="input-teks" name="nama_proyek" value="<?php echo Yii::app()->session['nama_proyek']; ?>" placeholder="Ketikkan nama proyek,,,">
			</div>
		</div>
		<div class="fix"></div>
	</div>

	<div class="rowElem nobg">
		<label><h3>Koridor</h3></label>
		<div class="formRight">
			<div id="koridor">
				<?php
					$this->widget('CheckKoridor',array("id_select"=>Yii::app()->session['id_sektor']));
				?>
			</div>
		</div>
		<div class="fix"></div>
	</div>

	<div class="rowElem nobg">
		<label><h3>Sektor</h3></label>
		<div class="formRight">
			<div id="sektor">
				<?php
					$this->widget('CheckSektor',array("id_select"=>Yii::app()->session['id_sektor']));
				?>
			</div>
		</div>
		<div class="fix"></div>
	</div>

	<div class="rowElem nobg">
		<label></label>
		<div class="formRight">
			<?php echo CHtml::submitButton('PENCARIAN DATA',array("class" => "greyishBtn submitForm")); ?>
			<?php echo CHtml::link("Clear Filter", Yii::app()->baseUrl.'/dbi/clear_filter', array("class" => "boxHover2")); ?>
		</div>
		<div class="fix"></div>
	</div>

<?php $this->endWidget(); ?>
	<h2>LEGENDA</h2>
		<div id="legenda">
			<ul>
				<?php
					$this->widget('LegendaSektor');
				?>
			</ul>
		</div>
	</div>
	<div style="width:75%; margin:0px auto; padding:0px; float:right; background-color:#fff;">
	
	<iframe id="iframe" src="<?php echo Yii::app()->baseUrl; ?>/dbi/data"  width="100%" height="550px" marginheight="0" frameborder="0"  onLoad="autoResize('iframe')";></iframe>

	<div style="overflow:scroll; width:98%; padding-left:2%; padding-bottom:10px;">
<h2><?php echo CHtml::link('DATABASE INFRASTRUKTUR',array("/site")); ?></h2>
<script type="text/javascript">
function cek(param)
{
	$.ajax({
	    type: 'post',
	    url: '<?php echo Yii::app()->baseUrl; ?>/dbi/set/',
	    data: 'set_param='+param,
		    success: function(response) {
		    }
	});
	var iframe = document.getElementById('iframe');
	iframe.src = iframe.src;
}
function cek_field(param)
{
	$.ajax({
	    type: 'post',
	    url: '<?php echo Yii::app()->baseUrl; ?>/dbi/set_field/',
	    data: 'set_param='+param,
		    success: function(response) {
		    }
		});
	var iframe = document.getElementById('iframe');
	iframe.src = iframe.src;
	
}
function autoResize(id){
    var newheight;
    var newwidth;

    if(document.getElementById){
        newheight=document.getElementById(id).contentWindow.document .body.scrollHeight;
        newwidth=document.getElementById(id).contentWindow.document .body.scrollWidth;
    }

    document.getElementById(id).height= (550) + "px";
    document.getElementById(id).width= (newwidth) + "px";
}
$(document).ready(function() {
  	$.ajax({
	    type: 'post',
	    url: '<?php echo Yii::app()->baseUrl; ?>/dbi/set_resolusi/',
	    data: 'set_resolusi='+$(window).height(),
		    success: function(response) {
		    }
	});
});
</script>
<style type="text/css">
.CGridViewContainerLoggedId { overflow: scroll-x; }
.CGridViewContainerNotLoggedId {overflow: scroll-x; }
</style>

<?php 
if(Yii::app()->user->isGuest)
{
	echo '<div class="cleaner_h10"></div>';
	echo CHtml::link("Download Excel Data", Yii::app()->baseUrl.'/dbi/excel_public', array("class" => "boxHover2"));
	echo '<div class="cleaner_h30"></div>';
	echo '<div class="CGridViewContainerNotLoggedId">';
	$this->widget('zii.widgets.grid.CGridView', array(
			'id'=>'berita-dashboard-model-grid',
			'filter' => $model2,
			'dataProvider'=>$model2->search(),
    		'template'=>'{pager}<br /><br>{items}<br><br>{pager}<br>{summary}',
    		'pager' => array('cssFile' => Yii::app()->theme->baseUrl.'/css/gridView.css'),

			'columns'=>array(
			     array(
			      'header'=>'No',
			      'type'=>'raw',
			      'value'=>'$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize + $row+1'
			      ),
		           array(
			      	'header'=>'Nama Proyek',
		             'name'=>'nama_proyek',
		             'filter'=>CHtml::textField('InfrastrukturModel[nama_proyek]',Yii::app()->session['nama_proyek'],array("onKeydown"=>"Javascript: if (event.keyCode==13) cek_field('nama-proyek_'+this.value);"))
		           ),
		           array(
			      	'header'=>'Nilai Investasi',
		             'name'=>'id_nilai_investasi',
		             'value'=>'strip_tags($data->NilaiInvestasi->nilai_investasi)',
		             'filter'=>CHtml::dropDownList(
							'InfrastrukturModel[id_nilai_investasi]',Yii::app()->session['id_nilai_investasi'],array(''=>'Semua') + CHtml::listData(NilaiInvestasiModel::model()->findAll(),'id_nilai_investasi','nilai_investasi'),array(
							'onchange' => "cek('investasi_'+this.value)",
							)
						)
		           ),
		           array(
			      	'header'=>'Sumber Dana',
		             'name'=>'id_sumber_dana',
		             'value'=>'strip_tags($data->SumberDana->sumber_dana)',
		             'filter'=>CHtml::dropDownList(
							'InfrastrukturModel[id_sumber_dana]',Yii::app()->session['id_sumber_dana'],array(''=>'Semua') + CHtml::listData(SumberDanaModel::model()->findAll(),'id_sumber_dana','sumber_dana'),array(
							'onchange' => "cek('sumberdana_'+this.value)",
							)
						)
		           ),
		           array(
			      	'header'=>'Mulai',
		             'name'=>'mulai',
		             'filter'=>CHtml::textField('InfrastrukturModel[mulai]',Yii::app()->session['mulai'],array("onKeydown"=>"Javascript: if (event.keyCode==13) cek_field('mulai_'+this.value);"))
		           ),
		           array(
			      	'header'=>'Selesai',
		             'name'=>'selesai',
		             'filter'=>CHtml::textField('InfrastrukturModel[selesai]',Yii::app()->session['selesai'],array("onKeydown"=>"Javascript: if (event.keyCode==13) cek_field('selesai_'+this.value);"))
		           ),
		           array(
			      	'header'=>'Kawasan',
		             'name'=>'id_kawasan',
		             'value'=>'strip_tags($data->Kawasan->kawasan)',
		             'filter'=>CHtml::dropDownList(
							'InfrastrukturModel[id_kawasan]',Yii::app()->session['id_kawasan'],array(''=>'Semua') + CHtml::listData(KawasanModel::model()->findAll(),'id_kawasan','kawasan'),array(
							'onchange' => "cek('kawasan_'+this.value)",
							)
						)
		           ),
			),
		));
	echo '</div>';
}
else
{
	echo '<div class="cleaner_h10"></div>';
	echo CHtml::link("Select columns to show", Yii::app()->baseUrl.'/dbi/columns', array("class" => "boxHover"));
	echo CHtml::link("Reset to Defaults", Yii::app()->baseUrl.'/dbi/reset_columns', array("class" => "boxHover2"));
	echo CHtml::link("Download Excel Data", Yii::app()->baseUrl.'/dbi/excel_private', array("class" => "boxHover2"));
	echo '<div class="cleaner_h30"></div>';
	echo '<div class="CGridViewContainerLoggedId">';
	$this->widget('zii.widgets.grid.CGridView', array(
			'id'=>'berita-dashboard-model-grid',
			'filter' => $model2,
			'dataProvider'=>$model2->search(),
    		'template'=>'{pager}<br /><br>{items}<br><br>{pager}<br>{summary}',
    		'pager' => array('cssFile' => Yii::app()->theme->baseUrl.'/css/gridView.css'),
			'columns'=>array(
			     array(
			      'header'=>'No',
			      'type'=>'raw',
			      'value'=>'$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize + $row+1'
			      ),
		           array(
		           	'visible' => Yii::app()->session['id_koridor_dbi'],
			      	'header'=>'Koridor',
		             'name'=>'id_koridor',
		             'value'=>'strip_tags($data->Koridor->koridor)',
		             'filter'=>CHtml::dropDownList(
							'InfrastrukturModel[id_koridor]',Yii::app()->session['id_koridor'],array(''=>'Semua') + CHtml::listData(KoridorModel::model()->findAll(),'id_koridor','koridor'),array(
							'onchange' => "cek('koridor_'+this.value)",
							)
						)
		           ),
		           array(
		           	'visible' => Yii::app()->session['id_sektor_dbi'],
			      	'header'=>'Sektor',
		             'name'=>'id_sektor',
		             'value'=>'strip_tags($data->Sektor->sektor)',
		             'filter'=>CHtml::dropDownList(
							'InfrastrukturModel[id_sektor]',Yii::app()->session['id_sektor'],array(''=>'Semua') + CHtml::listData(SektorModel::model()->findAll(),'id_sektor','sektor'),array(
							'onchange' => "cek('sektor_'+this.value)",
							)
						)
		           ),
		           array(
		           	'visible' => Yii::app()->session['id_sumber_dana_dbi'],
			      	'header'=>'Sumber Dana',
		             'name'=>'id_sumber_dana',
		             'value'=>'strip_tags($data->SumberDana->sumber_dana)',
		             'filter'=>CHtml::dropDownList(
							'InfrastrukturModel[id_sumber_dana]',Yii::app()->session['id_sumber_dana'],array(''=>'Semua') + CHtml::listData(SumberDanaModel::model()->findAll(),'id_sumber_dana','sumber_dana'),array(
							'onchange' => "cek('sumberdana_'+this.value)",
							)
						)
		           ),
		           array(
		           	'visible' => Yii::app()->session['nama_proyek_dbi'],
			      	'header'=>'Nama Proyek',
		             'name'=>'nama_proyek',
		             'filter'=>CHtml::textField('InfrastrukturModel[nama_proyek]',Yii::app()->session['nama_proyek'],array("onKeydown"=>"Javascript: if (event.keyCode==13) cek_field('nama-proyek_'+this.value);"))
		           ),
		           array(
		           	'visible' => Yii::app()->session['id_nilai_investasi_dbi'],
			      	'header'=>'Nilai Investasi',
		             'name'=>'id_nilai_investasi',
		             'value'=>'strip_tags($data->NilaiInvestasi->nilai_investasi)',
		             'filter'=>CHtml::dropDownList(
							'InfrastrukturModel[id_nilai_investasi]',Yii::app()->session['id_nilai_investasi'],array(''=>'Semua') + CHtml::listData(NilaiInvestasiModel::model()->findAll(),'id_nilai_investasi','nilai_investasi'),array(
							'onchange' => "cek('investasi_'+this.value)",
							)
						)
		           ),
		           array(
		           	'visible' => Yii::app()->session['mulai_dbi'],
			      	'header'=>'Mulai',
		             'name'=>'mulai',
		             'filter'=>CHtml::textField('InfrastrukturModel[mulai]',Yii::app()->session['mulai'],array("onKeydown"=>"Javascript: if (event.keyCode==13) cek_field('mulai_'+this.value);"))
		           ),
		           array(
		           	'visible' => Yii::app()->session['selesai_dbi'],
			      	'header'=>'Selesai',
		             'name'=>'selesai',
		             'filter'=>CHtml::textField('InfrastrukturModel[selesai]',Yii::app()->session['selesai'],array("onKeydown"=>"Javascript: if (event.keyCode==13) cek_field('selesai_'+this.value);"))
		           ),
		           array(
		           	'visible' => Yii::app()->session['gb_dbi'],
			      	'header'=>'Gb',
		             'name'=>'gb',
		             'filter'=>CHtml::textField('InfrastrukturModel[gb]',Yii::app()->session['gb'],array("onKeydown"=>"Javascript: if (event.keyCode==13) cek_field('gb_'+this.value);"))
		           ),
		           array(
		           	'visible' => Yii::app()->session['provinsi_dbi'],
			      	'header'=>'Provinsi',
		             'name'=>'provinsi',
		             'filter'=>CHtml::textField('InfrastrukturModel[provinsi]',Yii::app()->session['provinsi'],array("onKeydown"=>"Javascript: if (event.keyCode==13) cek_field('provinsi_'+this.value);"))
		           ),
		           array(
		           	'visible' => Yii::app()->session['status_selesai_proyek_dbi'],
			      	'header'=>'Status Selesai Proyek',
		             'name'=>'status_selesai_proyek',
		             'filter'=>CHtml::textField('InfrastrukturModel[status_selesai_proyek]',Yii::app()->session['status_selesai_proyek'],array("onKeydown"=>"Javascript: if (event.keyCode==13) cek_field('status-selesai-proyek_'+this.value);"))
		           ),
		           array(
		           	'visible' => Yii::app()->session['id_pelaksana_dbi'],
			      	'header'=>'Pelaksana',
		             'name'=>'id_pelaksana',
		             'value'=>'strip_tags($data->Pelaksana->pelaksana)',
		             'filter'=>CHtml::dropDownList(
							'InfrastrukturModel[id_pelaksana]',Yii::app()->session['id_pelaksana'],array(''=>'Semua') + CHtml::listData(PelaksanaModel::model()->findAll(),'id_pelaksana','pelaksana'),array(
							'onchange' => "cek('pelaksana_'+this.value)",
							)
						)
		           ),
		           array(
		           	'visible' => Yii::app()->session['status_proyek_dbi'],
			      	'header'=>'Status Proyek',
		             'name'=>'status_proyek',
		             'filter'=>CHtml::textField('InfrastrukturModel[status_proyek]',Yii::app()->session['status_proyek'],array("onKeydown"=>"Javascript: if (event.keyCode==13) cek_field('status-proyek_'+this.value);"))
		           ),
		           array(
		           	'visible' => Yii::app()->session['id_kawasan_dbi'],
			      	'header'=>'Kawasan',
		             'name'=>'id_kawasan',
		             'value'=>'strip_tags($data->Kawasan->kawasan)',
		             'filter'=>CHtml::dropDownList(
							'InfrastrukturModel[id_kawasan]',Yii::app()->session['id_kawasan'],array(''=>'Semua') + CHtml::listData(KawasanModel::model()->findAll(),'id_kawasan','kawasan'),array(
							'onchange' => "cek('kawasan_'+this.value)",
							)
						)
		           ),
		           array(
		           	'visible' => Yii::app()->session['sumber_usulan_dbi'],
			      	'header'=>'Sumber Usulan',
		             'name'=>'sumber_usulan',
		             'filter'=>CHtml::textField('InfrastrukturModel[sumber_usulan]',Yii::app()->session['sumber_usulan'],array("onKeydown"=>"Javascript: if (event.keyCode==13) cek_field('sumber-usulan_'+this.value);"))
		           ),
		           array(
		           	'visible' => Yii::app()->session['detail_surat_dbi'],
			      	'header'=>'Detail Surat / Usulan',
		             'name'=>'detail_surat_usulan',
		             'filter'=>CHtml::textField('InfrastrukturModel[detail_surat_usulan]',Yii::app()->session['detail_surat_usulan'],array("onKeydown"=>"Javascript: if (event.keyCode==13) cek_field('detail-surat_'+this.value);"))
		           ),
		           array(
		           	'visible' => Yii::app()->session['perubahan_kepres_lama_dbi'],
			      	'header'=>'Perubahan Kepres Lama',
		             'name'=>'perubahan_kepres_lama',
		             'filter'=>CHtml::textField('InfrastrukturModel[perubahan_kepres_lama]',Yii::app()->session['perubahan_kepres_lama'],array("onKeydown"=>"Javascript: if (event.keyCode==13) cek_field('perubahan-kepres-lama_'+this.value);"))
		           ),
		           array(
		           	'visible' => Yii::app()->session['id_kategori_dbi'],
			      	'header'=>'Kategori',
		             'name'=>'id_kategori',
		             'value'=>'strip_tags($data->Kategori->kategori)',
		             'filter'=>CHtml::dropDownList(
							'InfrastrukturModel[id_kategori]',Yii::app()->session['id_kategori'],array(''=>'Semua') + CHtml::listData(KategoriModel::model()->findAll(),'id_kategori','kategori'),array(
							'onchange' => "cek('kategori_'+this.value)",
							)
						)
		           ),
		           array(
		           	'visible' => Yii::app()->session['evaluasi_konsinyering_kp3ei_dbi'],
		             'name'=>'evaluasi_konsinyering_kp3ei',
		             'filter'=>CHtml::textField('InfrastrukturModel[evaluasi_konsinyering_kp3ei]',Yii::app()->session['evaluasi_konsinyering_kp3ei'],array("onKeydown"=>"Javascript: if (event.keyCode==13) cek_field('alokasi-apbn-apbd-2011_'+this.value);"))
		           ),
		           array(
		           	'visible' => Yii::app()->session['alokasi_apbn_apbd_2012_dbi'],
		             'name'=>'alokasi_apbn_apbd_2012',
		             'filter'=>CHtml::textField('InfrastrukturModel[alokasi_apbn_apbd_2012]',Yii::app()->session['alokasi_apbn_apbd_2012'],array("onKeydown"=>"Javascript: if (event.keyCode==13) cek_field('evaluasi-konsinyering-kp3ei_'+this.value);"))
		           ),
		           array(
		           	'visible' => Yii::app()->session['alasan_evaluasi_dbi'],
		             'name'=>'alasan_evaluasi',
		             'filter'=>CHtml::textField('InfrastrukturModel[alasan_evaluasi]',Yii::app()->session['alasan_evaluasi'],array("onKeydown"=>"Javascript: if (event.keyCode==13) cek_field('alasan-evaluasi_'+this.value);"))
		           ),
		           array(
		           	'visible' => Yii::app()->session['nilai_strategis_proyek_dbi'],
		             'name'=>'nilai_strategis_proyek',
		             'filter'=>CHtml::textField('InfrastrukturModel[nilai_strategis_proyek]',Yii::app()->session['nilai_strategis_proyek'],array("onKeydown"=>"Javascript: if (event.keyCode==13) cek_field('nilai-strategis-proyek_'+this.value);"))
		           ),
		           array(
		           	'visible' => Yii::app()->session['pagu_definitif_apbn_apbd_2011_dbi'],
		             'name'=>'pagu_definitif_apbn_apbd_2011',
		             'filter'=>CHtml::textField('InfrastrukturModel[pagu_definitif_apbn_apbd_2011]',Yii::app()->session['pagu_definitif_apbn_apbd_2011'],array("onKeydown"=>"Javascript: if (event.keyCode==13) cek_field('pagu-definitif-apbn-apbd-2011_'+this.value);"))
		           ),
		           array(
		           	'visible' => Yii::app()->session['pagu_definitif_apbn_apbd_2012_dbi'],
		             'name'=>'pagu_definitif_apbn_apbd_2012',
		             'filter'=>CHtml::textField('InfrastrukturModel[pagu_definitif_apbn_apbd_2012]',Yii::app()->session['pagu_definitif_apbn_apbd_2012'],array("onKeydown"=>"Javascript: if (event.keyCode==13) cek_field('pagu-definitif-apbn-apbd-2012_'+this.value);"))
		           ),
		           array(
		           	'visible' => Yii::app()->session['pagu_definitif_apbn_apbd_2013_dbi'],
		             'name'=>'pagu_definitif_apbn_apbd_2013',
		             'filter'=>CHtml::textField('InfrastrukturModel[pagu_definitif_apbn_apbd_2013]',Yii::app()->session['pagu_definitif_apbn_apbd_2013'],array("onKeydown"=>"Javascript: if (event.keyCode==13) cek_field('pagu-definitif-apbn-apbd-2013_'+this.value);"))
		           ),
		           array(
		           	'visible' => Yii::app()->session['penyerapan_2013_dbi'],
		             'name'=>'penyerapan_2013',
		             'filter'=>CHtml::textField('InfrastrukturModel[penyerapan_2013]',Yii::app()->session['penyerapan_2013'],array("onKeydown"=>"Javascript: if (event.keyCode==13) cek_field('penyerapan-2013_'+this.value);"))
		           ),
		           array(
		           	'visible' => Yii::app()->session['pagu_indikatif_apbn_2014_dbi'],
		             'name'=>'pagu_indikatif_apbn_2014',
		             'filter'=>CHtml::textField('InfrastrukturModel[pagu_indikatif_apbn_2014]',Yii::app()->session['pagu_indikatif_apbn_2014'],array("onKeydown"=>"Javascript: if (event.keyCode==13) cek_field('pagu-indikatif-apbn-2014_'+this.value);"))
		           ),
		           array(
		           	'visible' => Yii::app()->session['pagu_definitif_apbn_2014_dbi'],
		             'name'=>'pagu_definitif_apbn_2014',
		             'filter'=>CHtml::textField('InfrastrukturModel[pagu_definitif_apbn_2014]',Yii::app()->session['pagu_definitif_apbn_2014'],array("onKeydown"=>"Javascript: if (event.keyCode==13) cek_field('pagu-definitif-apbn-2014_'+this.value);"))
		           ),
		           array(
		           	'visible' => Yii::app()->session['alokasi_perencanaan_bumn_2011_dbi'],
		             'name'=>'alokasi_perencanaan_bumn_2011',
		             'filter'=>CHtml::textField('InfrastrukturModel[alokasi_perencanaan_bumn_2011]',Yii::app()->session['alokasi_perencanaan_bumn_2011'],array("onKeydown"=>"Javascript: if (event.keyCode==13) cek_field('alokasi-perencanaan-bumn-2011_'+this.value);"))
		           ),
		           array(
		           	'visible' => Yii::app()->session['alokasi_perencanaan_bumn_2012_dbi'],
		             'name'=>'alokasi_perencanaan_bumn_2012',
		             'filter'=>CHtml::textField('InfrastrukturModel[alokasi_perencanaan_bumn_2012]',Yii::app()->session['alokasi_perencanaan_bumn_2012'],array("onKeydown"=>"Javascript: if (event.keyCode==13) cek_field('alokasi-perencanaan-bumn-2012_'+this.value);"))
		           ),
		           array(
		           	'visible' => Yii::app()->session['alokasi_perencanaan_bumn_2013_dbi'],
		             'name'=>'alokasi_perencanaan_bumn_2013',
		             'filter'=>CHtml::textField('InfrastrukturModel[alokasi_perencanaan_bumn_2013]',Yii::app()->session['alokasi_perencanaan_bumn_2013'],array("onKeydown"=>"Javascript: if (event.keyCode==13) cek_field('alokasi-perencanaan-bumn-2013_'+this.value);"))
		           ),
		           array(
		           	'visible' => Yii::app()->session['alokasi_perencanaan_bumn_2014_dbi'],
		             'name'=>'alokasi_perencanaan_bumn_2014',
		             'filter'=>CHtml::textField('InfrastrukturModel[alokasi_perencanaan_bumn_2014]',Yii::app()->session['alokasi_perencanaan_bumn_2014'],array("onKeydown"=>"Javascript: if (event.keyCode==13) cek_field('alokasi-perencanaan-bumn-2014_'+this.value);"))
		           ),
		           array(
		           	'visible' => Yii::app()->session['perencanaan_alokasi_swasta_2011_dbi'],
		             'name'=>'perencanaan_alokasi_swasta_2011',
		             'filter'=>CHtml::textField('InfrastrukturModel[perencanaan_alokasi_swasta_2011]',Yii::app()->session['perencanaan_alokasi_swasta_2011'],array("onKeydown"=>"Javascript: if (event.keyCode==13) cek_field('perencanaan-alokasi-swasta-2011_'+this.value);"))
		           ),
		           array(
		           	'visible' => Yii::app()->session['perencanaan_alokasi_swasta_2012_dbi'],
		             'name'=>'perencanaan_alokasi_swasta_2012',
		             'filter'=>CHtml::textField('InfrastrukturModel[perencanaan_alokasi_swasta_2012]',Yii::app()->session['perencanaan_alokasi_swasta_2012'],array("onKeydown"=>"Javascript: if (event.keyCode==13) cek_field('perencanaan-alokasi-swasta-2012_'+this.value);"))
		           ),
		           array(
		           	'visible' => Yii::app()->session['perencanaan_alokasi_swasta_2013_dbi'],
		             'name'=>'perencanaan_alokasi_swasta_2013',
		             'filter'=>CHtml::textField('InfrastrukturModel[perencanaan_alokasi_swasta_2013]',Yii::app()->session['perencanaan_alokasi_swasta_2013'],array("onKeydown"=>"Javascript: if (event.keyCode==13) cek_field('perencanaan-alokasi-swasta-2013_'+this.value);"))
		           ),
		           array(
		           	'visible' => Yii::app()->session['perencanaan_alokasi_swasta_2014_dbi'],
		             'name'=>'perencanaan_alokasi_swasta_2014',
		             'filter'=>CHtml::textField('InfrastrukturModel[perencanaan_alokasi_swasta_2014]',Yii::app()->session['perencanaan_alokasi_swasta_2014'],array("onKeydown"=>"Javascript: if (event.keyCode==13) cek_field('perencanaan-alokasi-swasta-2014_'+this.value);"))
		           ),
			),
		));
	echo '</div>';
	
	}
	 ?>

<!-- end panel content -->
</div>
	</div>
</div>
