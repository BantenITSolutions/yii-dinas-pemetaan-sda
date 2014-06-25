
<div id="title-news">Database Infrastruktur</div>
<div id="content-center-single">

	<?php
	Yii::import('ext.gmap.*');
	 
	$gMap = new EGMap();
	$gMap->zoom = 5;
	$gMap->setWidth("960");
	$gMap->setHeight(600);
	$mapTypeControlOptions = array(
	  'position'=> EGMapControlPosition::LEFT_BOTTOM,
	  'style'=>EGMap::MAPTYPECONTROL_STYLE_DROPDOWN_MENU
	);
	 
	$gMap->mapTypeControlOptions= $mapTypeControlOptions;
	 
	$gMap->setCenter(-1.537901,118.476563);

	if(Yii::app()->session['id_nama_proyek']!="" ||
		Yii::app()->session['id_koridor']!="" ||
		Yii::app()->session['id_sumber_dana']!="" ||
		Yii::app()->session['id_sektor']!="" ||
		Yii::app()->session['id_nilai_investasi']!="" ||
		Yii::app()->session['id_pelaksana']!="" ||
		Yii::app()->session['id_kategori']!="" ||
		Yii::app()->session['tahun_mulai']!="" ||
		Yii::app()->session['tahun_selesai']!="" ||
		Yii::app()->session['id_kawasan']!="")
	{
		foreach($model as $md)
		{
			$icon = new EGMapMarkerImage(Yii::app()->theme->baseUrl.'/icon/'.$md->Sektor->id_sektor.'.png');
	 
			$icon->setSize(32, 37);
			$icon->setAnchor(16, 16.5);
			$icon->setOrigin(0, 0);

			$marker = new EGMapMarker($md['lat'],$md['lang'], array('title' => $md->NamaProyek->nama_proyek,'icon'=>$icon));
			$info_window = new EGMapInfoWindow('<div><b>'.$md->NamaProyek->nama_proyek.'</b>'.$md['keterangan'].'</div>');
			$marker->addHtmlInfoWindow($info_window);
			$gMap->addMarker($marker);
		}
	}
	else if(Yii::app()->session['id_nama_proyek']=="semua" ||
		Yii::app()->session['id_koridor']=="semua" ||
		Yii::app()->session['id_sumber_dana']=="semua" ||
		Yii::app()->session['id_sektor']=="semua" ||
		Yii::app()->session['id_nilai_investasi']=="semua" ||
		Yii::app()->session['id_pelaksana']=="semua" ||
		Yii::app()->session['id_kategori']=="semua" ||
		Yii::app()->session['tahun_mulai']=="semua" ||
		Yii::app()->session['tahun_selesai']=="semua" ||
		Yii::app()->session['id_kawasan']=="semua")
	{
		foreach($model as $md)
		{
			$icon = new EGMapMarkerImage(Yii::app()->theme->baseUrl.'/icon/'.$md->Sektor->id_sektor.'.png');
	 
			$icon->setSize(32, 37);
			$icon->setAnchor(16, 16.5);
			$icon->setOrigin(0, 0);

			$marker = new EGMapMarker($md['lat'],$md['lang'], array('title' => $md->NamaProyek->nama_proyek,'icon'=>$icon));
			$info_window = new EGMapInfoWindow('<div><b>'.$md->NamaProyek->nama_proyek.'</b>'.$md['keterangan'].'</div>');
			$marker->addHtmlInfoWindow($info_window);
			$gMap->addMarker($marker);
		}
	}

	 

	$gMap->renderMap();
	?>

</div>

	<?php $form=$this->beginWidget('CActiveForm', array(
		'id'=>'agenda-dashboard-model-form',
        'action' => Yii::app()->createUrl('/dbi_old/act'),
		'enableAjaxValidation'=>false,
		'htmlOptions' => array('class'=>'mainForm',
	        'enctype' => 'multipart/form-data',),
	)); ?>

	<div class="rowElem nobg">
		<label>Koridor</label>
		<div class="formRight">
			<div id="koridor">
				<select data-placeholder="Pilih Koridor..." class="chzn-select" style="width:100%;" tabindex="2" name="id_koridor" id="id_koridor">
				<option></option>
				<?php 
				if(Yii::app()->session['id_koridor']=="semua"){echo '<option value="semua" selected>-- Semua --</option>';}
				else echo '<option value="semua">-- Semua --</option>';
				?>
					
					<?php
						$this->widget('SelectOpKoridor',array("id_select"=>Yii::app()->session['id_koridor']));
					?>
				</select>
			</div>
		</div>
		<div class="fix"></div>
	</div>

	<div class="rowElem nobg">
		<label>Sektor</label>
		<div class="formRight">
			<div id="sektor">
				<select data-placeholder="Pilih Sektor..." class="chzn-select" style="width:100%;" tabindex="2" name="id_sektor" id="id_sektor">
				<option></option>
				<?php 
				if(Yii::app()->session['id_sektor']=="semua"){echo '<option value="semua" selected>-- Semua --</option>';}
				else echo '<option value="semua">-- Semua --</option>';
				?>
					<?php
						$this->widget('SelectOpSektor',array("id_select"=>Yii::app()->session['id_sektor']));
					?>
				</select>
			</div>
		</div>
		<div class="fix"></div>
	</div>

	<div class="rowElem nobg">
		<label>Nama Proyek</label>
		<div class="formRight">
			<div id="sektor">
				<select data-placeholder="Pilih Nama proyek..." class="chzn-select" style="width:100%;" tabindex="2" name="id_nama_proyek" id="id_nama_proyek">
				<option></option>
				<?php 
				if(Yii::app()->session['id_nama_proyek']=="semua"){echo '<option value="semua" selected>-- Semua --</option>';}
				else echo '<option value="semua">-- Semua --</option>';
				?>
					<?php
						$this->widget('SelectOpNamaProyek',array("id_select"=>Yii::app()->session['id_nama_proyek']));
					?>
				</select>
			</div>
		</div>
		<div class="fix"></div>
	</div>

	<div class="rowElem nobg">
		<label>Nilai Investasi (Miliar Rp)</label>
		<div class="formRight">
			<div id="sektor">
				<select data-placeholder="Pilih Nilai Investasi..." class="chzn-select" style="width:100%;" tabindex="2" name="id_nilai_investasi" id="id_nilai_investasi">
				<option></option>
				<?php 
				if(Yii::app()->session['id_nilai_investasi']=="semua"){echo '<option value="semua" selected>-- Semua --</option>';}
				else echo '<option value="semua">-- Semua --</option>';
				?>
					<?php
						$this->widget('SelectOpNilaiInvestasi',array("id_select"=>Yii::app()->session['id_nilai_investasi']));
					?>
				</select>
			</div>
		</div>
		<div class="fix"></div>
	</div>

	<div class="rowElem nobg">
		<label>Sumber Dana</label>
		<div class="formRight">
			<div id="sumber">
				<select data-placeholder="Pilih Sumber Dana..." class="chzn-select" style="width:100%;" tabindex="2" name="id_sumber_dana" id="id_sumber_dana">
				<option></option>
				<?php 
				if(Yii::app()->session['id_sumber_dana']=="semua"){echo '<option value="semua" selected>-- Semua --</option>';}
				else echo '<option value="semua">-- Semua --</option>';
				?>
					<?php
						$this->widget('SelectOpSumberDana',array("id_select"=>Yii::app()->session['id_sumber_dana']));
					?>
				</select>
			</div>
		</div>
		<div class="fix"></div>
	</div>

	<div class="rowElem nobg">
		<label>Periode Mulai</label>
		<div class="formRight">
				<select data-placeholder="Pilih Tahun Mulai..." class="chzn-select" style="width:100%;" tabindex="2" name="tahun_mulai" id="tahun_mulai">
				<option></option>
				<?php 
				if(Yii::app()->session['tahun_mulai']=="semua"){echo '<option value="semua" selected>-- Semua --</option>';}
				else echo '<option value="semua">-- Semua --</option>';
				?>
				<?php
					$this->widget('SelectOpTahunMulai',array("id_select"=>Yii::app()->session['tahun_mulai']));
				?>
			</select>
		</div>
		<div class="fix"></div>
	</div>

	<div class="rowElem nobg">
		<label>Periode Selesai</label>
		<div class="formRight">
				<select data-placeholder="Pilih Tahun Selesai..." class="chzn-select" style="width:100%;" tabindex="2" name="tahun_selesai" id="tahun_selesai">
				<option></option>
				<?php 
				if(Yii::app()->session['tahun_selesai']=="semua"){echo '<option value="semua" selected>-- Semua --</option>';}
				else echo '<option value="semua">-- Semua --</option>';
				?>
				<?php
					$this->widget('SelectOpTahunSelesai',array("id_select"=>Yii::app()->session['tahun_selesai']));
				?>
			</select>
		</div>
		<div class="fix"></div>
	</div>

	<div class="rowElem nobg">
		<label>Pelaksana</label>
		<div class="formRight">
			<div id="sektor">
				<select data-placeholder="Pilih Pelaksana..." class="chzn-select" style="width:100%;" tabindex="2" name="id_pelaksana" id="id_pelaksana">
				<option></option>
				<?php 
				if(Yii::app()->session['id_pelaksana']=="semua"){echo '<option value="semua" selected>-- Semua --</option>';}
				else echo '<option value="semua">-- Semua --</option>';
				?>
					<?php
						$this->widget('SelectOpPelaksana',array("id_select"=>Yii::app()->session['id_pelaksana']));
					?>
				</select>
			</div>
		</div>
		<div class="fix"></div>
	</div>

	<div class="rowElem nobg">
		<label>KPI</label>
		<div class="formRight">
			<div id="kawasan">
				<select data-placeholder="Pilih KPI..." class="chzn-select" style="width:100%;" tabindex="2" name="id_kawasan" id="id_kawasan">
				<option></option>
				<?php 
				if(Yii::app()->session['id_kawasan']=="semua"){echo '<option value="semua" selected>-- Semua --</option>';}
				else echo '<option value="semua">-- Semua --</option>';
				?>
					<?php
						$this->widget('SelectOpKawasan',array("id_select"=>Yii::app()->session['id_kawasan']));
					?>
				</select>
			</div>
		</div>
		<div class="fix"></div>
	</div>

	<div class="rowElem nobg">
		<label>Kategori</label>
		<div class="formRight">
			<div id="sektor">
				<select data-placeholder="Pilih Kategori..." class="chzn-select" style="width:100%;" tabindex="2" name="id_kategori" id="id_kategori">
				<option></option>
				<?php 
				if(Yii::app()->session['id_kategori']=="semua"){echo '<option value="semua" selected>-- Semua --</option>';}
				else echo '<option value="semua">-- Semua --</option>';
				?>
					<?php
						$this->widget('SelectOpKategori',array("id_select"=>Yii::app()->session['id_kategori']));
					?>
				</select>
			</div>
		</div>
		<div class="fix"></div>
	</div>

	<div class="rowElem nobg">
		<label></label>
		<div class="formRight">
			<?php echo CHtml::submitButton('Pencarian Data',array("class" => "greyishBtn submitForm")); ?>
		</div>
		<div class="fix"></div>
	</div>

	<script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/chosen.jquery.min.js" type="text/javascript"></script>
	<script type="text/javascript"> 
		$(".chzn-select").chosen();
	</script>
<?php $this->endWidget(); ?>

<?php 
if(Yii::app()->session['id_nama_proyek']!="" ||
		Yii::app()->session['id_koridor']!="" ||
		Yii::app()->session['id_sumber_dana']!="" ||
		Yii::app()->session['id_sektor']!="" ||
		Yii::app()->session['id_nilai_investasi']!="" ||
		Yii::app()->session['id_pelaksana']!="" ||
		Yii::app()->session['id_kategori']!="" ||
		Yii::app()->session['tahun_mulai']!="" ||
		Yii::app()->session['tahun_selesai']!="" ||
		Yii::app()->session['id_kawasan']!="")
	{
		$this->widget('zii.widgets.grid.CGridView', array(
			'id'=>'berita-dashboard-model-grid',
			'dataProvider'=>$model2->peta(),
			'columns'=>array(
			     array(
			      'header'=>'no',
			      'type'=>'raw',
			      'value'=>'$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize + $row+1'
			      ),
				'Koridor.koridor',
				'Sektor.sektor',
				'NamaProyek.nama_proyek',
				'NilaiInvestasi.nilai_investasi',
				'SumberDana.sumber_dana',
				'tahun_mulai',
				'tahun_selesai',
		           array(
		             'name'=>'KPI',
		             'value'=>'strip_tags($data->Kawasan->kawasan)'
		           ),
		           array(
		             'name'=>'keterangan',
		             'value'=>'strip_tags($data->keterangan)'
		           ),
			),
		));
	} ?>

<div class="cleaner_h40"></div>
