<script type="text/javascript">
	$(document).ready(function()
	{	
		$(".loadKoridor").click(function(){
			$('#koridor').load('<?php echo Yii::app()->baseUrl.'/cms_database_infrastruktur/koridor'; ?>');
		});
		$(".loadSumber").click(function(){
			$('#sumber').load('<?php echo Yii::app()->baseUrl.'/cms_database_infrastruktur/sumber'; ?>');
		});
		$(".loadSektor").click(function(){
			$('#sektor').load('<?php echo Yii::app()->baseUrl.'/cms_database_infrastruktur/sektor'; ?>');
		});
		$(".loadKawasan").click(function(){
			$('#kawasan').load('<?php echo Yii::app()->baseUrl.'/cms_database_infrastruktur/kawasan'; ?>');
		});
		$(".loadPelaksana").click(function(){
			$('#pelaksana').load('<?php echo Yii::app()->baseUrl.'/cms_database_infrastruktur/pelaksana'; ?>');
		});
		$(".loadNilaiInvestasi").click(function(){
			$('#nilai_investasi').load('<?php echo Yii::app()->baseUrl.'/cms_database_infrastruktur/nilai_investasi'; ?>');
		});
		$(".loadKategori").click(function(){
			$('#kategori').load('<?php echo Yii::app()->baseUrl.'/cms_database_infrastruktur/kategori'; ?>');
		});
	});

</script>
<style type="text/css">#teks-link{cursor: pointer;}</style>

<fieldset>
        <div class="widget first">
            <div class="head"><h5 class="iList">Input Data</h5></div>

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'agenda-dashboard-model-form',
	'enableAjaxValidation'=>false,
	'htmlOptions' => array('class'=>'mainForm',
        'enctype' => 'multipart/form-data',),
)); ?>

	
	<div class="rowElem nobg">
		<?php
			Yii::import('ext.gmap.*');
			$gMap = new EGMap();
			$gMap->setWidth(800);
			$gMap->setHeight(550);
			$gMap->zoom = 5;
			$mapTypeControlOptions = array(
			  'position' => EGMapControlPosition::RIGHT_TOP,
			  'style' => EGMap::MAPTYPECONTROL_STYLE_HORIZONTAL_BAR
			);
			 
			$gMap->mapTypeId = EGMap::TYPE_ROADMAP;
			$gMap->mapTypeControlOptions = $mapTypeControlOptions;
			 
			// Preparing InfoWindow with information about our marker.
			$info_window_a = new EGMapInfoWindow("<div class='gmaps-label' style='color: #000;'>Hi! I'm your marker!</div>");
			 
			// Setting up an icon for marker.
			$icon = new EGMapMarkerImage("http://google-maps-icons.googlecode.com/files/car.png");
			 
			$icon->setSize(32, 37);
			$icon->setAnchor(16, 16.5);
			$icon->setOrigin(0, 0);
			 
			// Saving coordinates after user dragged our marker.
			$dragevent = new EGMapEvent('dragend', "function (event) { $('#lat').val(event.latLng.lat());  $('#lang').val(event.latLng.lng());}", false, EGMapEvent::TYPE_EVENT_DEFAULT);
			 
			// If we have already created marker - show it
			if (!empty($model->lat) && !empty($model->lang)) {
			 
			    $marker = new EGMapMarker($model->lat, $model->lang, array('title' => Yii::t('catalog', "Marker"),
			            'icon'=>$icon, 'draggable'=>true), 'marker', array('dragevent'=>$dragevent));
			    $marker->addHtmlInfoWindow($info_window_a);
			    $gMap->addMarker($marker);
			    $gMap->setCenter($model->lat, $model->lang);
			    $gMap->zoom = 8;
			 
			// If we don't have marker in database - make sure user can create one
			} else {
				$gMap->setCenter(-1.537901,118.476563);
			    $gMap->addEvent(new EGMapEvent('click',
			            'function (event) {var marker = new google.maps.Marker({position: event.latLng, map: '.$gMap->getJsName().
			            ', draggable: true, icon: '.$icon->toJs().'}); '.$gMap->getJsName().
			            '.setCenter(event.latLng); var dragevent = '.$dragevent->toJs('marker').
			            '; $.ajax({'.
			              '"type":"POST",'.
			              '"url":"'.$this->createUrl('catalog/savecoords').'",'.
			              '"data":({"lat": event.latLng.lat(), "lng": event.latLng.lng()}),'.
			              '"cache":false,'.
			            '}); }', false, EGMapEvent::TYPE_EVENT_DEFAULT_ONCE));
			}
			$gMap->renderMap(array(), Yii::app()->language);
		?>
		<div class="fix"></div>
	</div>

	<div class="rowElem nobg">
		<label><?php echo $form->label($model,'lat'); ?></label>
		<div class="formRight">
			<?php echo $form->textField($model,'lat',array('size'=>60,'maxlength'=>150,'id'=>'lat')); ?>
			<?php echo $form->error($model,'lat'); ?>
		</div>
		<div class="fix"></div>
	</div>

	<div class="rowElem nobg">
		<label><?php echo $form->label($model,'lang'); ?></label>
		<div class="formRight">
			<?php echo $form->textField($model,'lang',array('size'=>60,'maxlength'=>150,'id'=>'lang')); ?>
			<?php echo $form->error($model,'lang'); ?>
		</div>
		<div class="fix"></div>
	</div>

	<div class="rowElem nobg">
		<label><?php echo $form->label($model,'id_koridor'); ?></label>
		<div class="formRight">
			<div id="koridor">
				<select data-placeholder="Pilih Koridor..." class="chzn-select" style="width:100%;" tabindex="2" name="InfrastrukturCmsModel[id_koridor]" id="id_koridor" required>
				<option></option>
					<?php
						$this->widget('SelectOpKoridor',array("id_select"=>$model->id_koridor));
					?>
				</select>
			</div>
			<p>
				<?php echo CHtml::link('Add New',Yii::app()->baseUrl.'/cms_koridor',array('class'=>'boxOver','id'=>'teks-link')); ?> | 
				<?php echo CHtml::link('Refresh','',array('class'=>'loadKoridor','id'=>'teks-link')); ?>
			</p>
		</div>
		<div class="fix"></div>
	</div>

	<div class="rowElem nobg">
		<label><?php echo $form->label($model,'id_sektor'); ?></label>
		<div class="formRight">
			<div id="sektor">
				<select data-placeholder="Pilih Sektor..." class="chzn-select" style="width:100%;" tabindex="2" name="InfrastrukturCmsModel[id_sektor]" id="id_sektor" required>
				<option></option>
					<?php
						$this->widget('SelectOpSektor',array("id_select"=>$model->id_sektor));
					?>
				</select>
			</div>
			<p>
				<?php echo CHtml::link('Add New',Yii::app()->baseUrl.'/cms_sektor',array('class'=>'boxOver','id'=>'teks-link')); ?> | 
				<?php echo CHtml::link('Refresh','',array('class'=>'loadSektor','id'=>'teks-link')); ?>
			</p>
		</div>
		<div class="fix"></div>
	</div>

	<div class="rowElem nobg">
		<label><?php echo $form->label($model,'id_nilai_investasi'); ?></label>
		<div class="formRight">
			<div id="nilai_investasi">
				<select data-placeholder="Pilih Nilai Investasi..." class="chzn-select" style="width:100%;" tabindex="2" name="InfrastrukturCmsModel[id_nilai_investasi]" id="id_nilai_investasi" required>
				<option></option>
					<?php
						$this->widget('SelectOpNilaiInvestasi',array("id_select"=>$model->id_nilai_investasi));
					?>
				</select>
			</div>
			<p>
				<?php echo CHtml::link('Add New',Yii::app()->baseUrl.'/cms_nilai_investasi',array('class'=>'boxOver','id'=>'teks-link')); ?> | 
				<?php echo CHtml::link('Refresh','',array('class'=>'loadNilaiInvestasi','id'=>'teks-link')); ?>
			</p>
		</div>
		<div class="fix"></div>
	</div>

	<div class="rowElem nobg">
		<label><?php echo $form->label($model,'id_sumber_dana'); ?></label>
		<div class="formRight">
			<div id="sumber">
				<select data-placeholder="Pilih Sumber Dana..." class="chzn-select" style="width:100%;" tabindex="2" name="InfrastrukturCmsModel[id_sumber_dana]" id="id_sumber_dana" required>
				<option></option>
					<?php
						$this->widget('SelectOpSumberDana',array("id_select"=>$model->id_sumber_dana));
					?>
				</select>
			</div>
			<p>
				<?php echo CHtml::link('Add New',Yii::app()->baseUrl.'/cms_sumber_dana',array('class'=>'boxOver','id'=>'teks-link')); ?> | 
				<?php echo CHtml::link('Refresh','',array('class'=>'loadSumber','id'=>'teks-link')); ?>
			</p>
		</div>
		<div class="fix"></div>
	</div>

	<div class="rowElem nobg">
		<label><?php echo $form->label($model,'mulai'); ?></label>
		<div class="formRight">
				<select data-placeholder="Pilih Tahun Mulai..." class="chzn-select" style="width:100%;" tabindex="2" name="InfrastrukturCmsModel[mulai]" id="mulai" required>
				<option></option>
				<?php
					$this->widget('SelectOpTahunMulai',array("id_select"=>$model->mulai));
				?>
			</select>
			<?php echo $form->error($model,'mulai'); ?>
		</div>
		<div class="fix"></div>
	</div>

	<div class="rowElem nobg">
		<label><?php echo $form->label($model,'selesai'); ?></label>
		<div class="formRight">
				<select data-placeholder="Pilih Tahun Selesai..." class="chzn-select" style="width:100%;" tabindex="2" name="InfrastrukturCmsModel[selesai]" id="selesai" required>
				<option></option>
				<?php
					$this->widget('SelectOpTahunSelesai',array("id_select"=>$model->selesai));
				?>
			</select>
			<?php echo $form->error($model,'selesai'); ?>
		</div>
		<div class="fix"></div>
	</div>

	<div class="rowElem nobg">
		<label><?php echo $form->label($model,'id_pelaksana'); ?></label>
		<div class="formRight">
			<div id="pelaksana">
				<select data-placeholder="Pilih Pelaksana..." class="chzn-select" style="width:100%;" tabindex="2" name="InfrastrukturCmsModel[id_pelaksana]" id="id_pelaksana" required>
				<option></option>
					<?php
						$this->widget('SelectOpPelaksana',array("id_select"=>$model->id_pelaksana));
					?>
				</select>
			</div>
			<p>
				<?php echo CHtml::link('Add New',Yii::app()->baseUrl.'/cms_pelaksana',array('class'=>'boxOver','id'=>'teks-link')); ?> | 
				<?php echo CHtml::link('Refresh','',array('class'=>'loadPelaksana','id'=>'teks-link')); ?>
			</p>
		</div>
		<div class="fix"></div>
	</div>

	<div class="rowElem nobg">
		<label><label for="DashboardDbiModel_id_kawasan">KPI</label></label>
		<div class="formRight">
			<div id="kawasan">
				<select data-placeholder="Pilih KPI..." class="chzn-select" style="width:100%;" tabindex="2" name="InfrastrukturCmsModel[id_kawasan]" id="id_kawasan" required>
				<option></option>
					<?php
						$this->widget('SelectOpKawasan',array("id_select"=>$model->id_kawasan));
					?>
				</select>
			</div>
			<p>
				<?php echo CHtml::link('Add New',Yii::app()->baseUrl.'/cms_kawasan',array('class'=>'boxOver','id'=>'teks-link')); ?> | 
				<?php echo CHtml::link('Refresh','',array('class'=>'loadKawasan','id'=>'teks-link')); ?>
			</p>
		</div>
		<div class="fix"></div>
	</div>

	<div class="rowElem nobg">
		<label><?php echo $form->label($model,'id_kategori'); ?></label>
		<div class="formRight">
			<div id="kategori">
				<select data-placeholder="Pilih Kategori..." class="chzn-select" style="width:100%;" tabindex="2" name="InfrastrukturCmsModel[id_kategori]" id="id_kategori" required>
				<option></option>
					<?php
						$this->widget('SelectOpKategori',array("id_select"=>$model->id_kategori));
					?>
				</select>
			</div>
			<p>
				<?php echo CHtml::link('Add New',Yii::app()->baseUrl.'/cms_kategori',array('class'=>'boxOver','id'=>'teks-link')); ?> | 
				<?php echo CHtml::link('Refresh','',array('class'=>'loadKategori','id'=>'teks-link')); ?>
			</p>
		</div>
		<div class="fix"></div>
	</div>

	<div class="rowElem nobg">
		<label><?php echo $form->label($model,'nama_proyek'); ?></label>
		<div class="formRight">
			<?php echo $form->textField($model,'nama_proyek',array('size'=>60,'maxlength'=>150,'id'=>'nama_proyek')); ?>
			<?php echo $form->error($model,'nama_proyek'); ?>
		</div>
		<div class="fix"></div>
	</div>

	<div class="rowElem nobg">
		<label><?php echo $form->label($model,'gb'); ?></label>
		<div class="formRight">
			<?php echo $form->textField($model,'gb',array('size'=>60,'maxlength'=>150,'id'=>'gb')); ?>
			<?php echo $form->error($model,'gb'); ?>
		</div>
		<div class="fix"></div>
	</div>

	<div class="rowElem nobg">
		<label><?php echo $form->label($model,'provinsi'); ?></label>
		<div class="formRight">
			<?php echo $form->textField($model,'provinsi',array('size'=>60,'maxlength'=>150,'id'=>'provinsi')); ?>
			<?php echo $form->error($model,'provinsi'); ?>
		</div>
		<div class="fix"></div>
	</div>

	<div class="rowElem nobg">
		<label><?php echo $form->label($model,'status_selesai_proyek'); ?></label>
		<div class="formRight">
			<?php echo $form->textField($model,'status_selesai_proyek',array('size'=>60,'maxlength'=>150,'id'=>'status_selesai_proyek')); ?>
			<?php echo $form->error($model,'status_selesai_proyek'); ?>
		</div>
		<div class="fix"></div>
	</div>

	<div class="rowElem nobg">
		<label><?php echo $form->label($model,'status_proyek'); ?></label>
		<div class="formRight">
			<?php echo $form->textField($model,'status_proyek',array('size'=>60,'maxlength'=>150,'id'=>'status_proyek')); ?>
			<?php echo $form->error($model,'status_proyek'); ?>
		</div>
		<div class="fix"></div>
	</div>

	<div class="rowElem nobg">
		<label><?php echo $form->label($model,'sumber_usulan'); ?></label>
		<div class="formRight">
			<?php echo $form->textField($model,'sumber_usulan',array('size'=>60,'maxlength'=>150,'id'=>'sumber_usulan')); ?>
			<?php echo $form->error($model,'sumber_usulan'); ?>
		</div>
		<div class="fix"></div>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'detail_surat_usulan'); ?>
		<?php echo $form->textArea($model,'detail_surat_usulan',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'detail_surat_usulan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'perubahan_kepres_lama'); ?>
		<?php echo $form->textArea($model,'perubahan_kepres_lama',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'perubahan_kepres_lama'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'evaluasi_konsinyering_kp3ei'); ?>
		<?php echo $form->textArea($model,'evaluasi_konsinyering_kp3ei',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'evaluasi_konsinyering_kp3ei'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'alasan_evaluasi'); ?>
		<?php echo $form->textArea($model,'alasan_evaluasi',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'alasan_evaluasi'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nilai_strategis_proyek'); ?>
		<?php echo $form->textArea($model,'nilai_strategis_proyek',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'nilai_strategis_proyek'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pagu_definitif_apbn_apbd_2011'); ?>
		<?php echo $form->textArea($model,'pagu_definitif_apbn_apbd_2011',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'pagu_definitif_apbn_apbd_2011'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pagu_definitif_apbn_apbd_2012'); ?>
		<?php echo $form->textArea($model,'pagu_definitif_apbn_apbd_2012',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'pagu_definitif_apbn_apbd_2012'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pagu_definitif_apbn_apbd_2013'); ?>
		<?php echo $form->textArea($model,'pagu_definitif_apbn_apbd_2013',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'pagu_definitif_apbn_apbd_2013'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'penyerapan_2013'); ?>
		<?php echo $form->textArea($model,'penyerapan_2013',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'penyerapan_2013'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pagu_indikatif_apbn_2014'); ?>
		<?php echo $form->textArea($model,'pagu_indikatif_apbn_2014',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'pagu_indikatif_apbn_2014'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pagu_definitif_apbn_2014'); ?>
		<?php echo $form->textArea($model,'pagu_definitif_apbn_2014',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'pagu_definitif_apbn_2014'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'alokasi_perencanaan_bumn_2011'); ?>
		<?php echo $form->textArea($model,'alokasi_perencanaan_bumn_2011',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'alokasi_perencanaan_bumn_2011'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'alokasi_perencanaan_bumn_2012'); ?>
		<?php echo $form->textArea($model,'alokasi_perencanaan_bumn_2012',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'alokasi_perencanaan_bumn_2012'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'alokasi_perencanaan_bumn_2013'); ?>
		<?php echo $form->textArea($model,'alokasi_perencanaan_bumn_2013',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'alokasi_perencanaan_bumn_2013'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'alokasi_perencanaan_bumn_2014'); ?>
		<?php echo $form->textArea($model,'alokasi_perencanaan_bumn_2014',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'alokasi_perencanaan_bumn_2014'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'perencanaan_alokasi_swasta_2011'); ?>
		<?php echo $form->textArea($model,'perencanaan_alokasi_swasta_2011',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'perencanaan_alokasi_swasta_2011'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'perencanaan_alokasi_swasta_2012'); ?>
		<?php echo $form->textArea($model,'perencanaan_alokasi_swasta_2012',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'perencanaan_alokasi_swasta_2012'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'perencanaan_alokasi_swasta_2013'); ?>
		<?php echo $form->textArea($model,'perencanaan_alokasi_swasta_2013',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'perencanaan_alokasi_swasta_2013'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'perencanaan_alokasi_swasta_2014'); ?>
		<?php echo $form->textArea($model,'perencanaan_alokasi_swasta_2014',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'perencanaan_alokasi_swasta_2014'); ?>
	</div>






		

	<div class="rowElem nobg">
		<label></label>
		<div class="formRight">
			<?php echo CHtml::submitButton('Save Data',array("class" => "greyishBtn submitForm")); ?>
		</div>
		<div class="fix"></div>
	</div>


	<script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/chosen.jquery.min.js" type="text/javascript"></script>
	<script type="text/javascript"> 
		$(".chzn-select").chosen();
	</script>
<?php $this->endWidget(); ?>

	</div>
</fieldset>