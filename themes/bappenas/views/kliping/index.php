<div id="content">
	<div id="content-center">


		<div id="title-news">KLIPING</div>
			<div class="cleaner_h20"></div>
			<?php $form=$this->beginWidget('CActiveForm', array(
				'id'=>'agenda-dashboard-model-form',
		        'action' => Yii::app()->createUrl('/kliping/act'),
				'enableAjaxValidation'=>false,
				'htmlOptions' => array('class'=>'mainForm',
			        'enctype' => 'multipart/form-data',),
			)); ?>
			
				<select data-placeholder="Pilih Bulan..." class="chzn-select" style="width:30%; float:left;" tabindex="2" name="bulan" id="bulan" required>
				<option></option>
					<?php
						$this->widget('SelectOpBulan',array("id_select"=>Yii::app()->session['bulan_kliping']));
					?>
				</select>
			
				<select data-placeholder="Pilih tahun..." class="chzn-select" style="width:30%; float:left;" tabindex="2" name="tahun" id="tahun" required>
				<option></option>
					<?php
						$this->widget('SelectOpTahun',array("id_select"=>Yii::app()->session['tahun_kliping']));
					?>
				</select>

				<?php echo CHtml::submitButton('Pencarian Data',array("class" => "greyishBtn submitForm")); ?>

				<script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/chosen.jquery.min.js" type="text/javascript"></script>
				<script type="text/javascript"> 
					$(".chzn-select").chosen();
				</script>
			<?php $this->endWidget(); ?>
			<div class="cleaner_h20"></div>

			<?php $this->widget('zii.widgets.CListView', array(
				'dataProvider'=>$dataProvider,
				'itemView'=>'_view',
				'template'=>"{items}\n{pager}",
			)); ?>

	</div>