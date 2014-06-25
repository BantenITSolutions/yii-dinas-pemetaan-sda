<?php
/* @var $this Dashboard_agendaController */
/* @var $model AgendaDashboardModel */
/* @var $form CActiveForm */
?>

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
		<label><?php echo $form->label($model,'id_kat_dokumen'); ?></label>
		<div class="formRight">
			<select name="id_kat_dokumen">
				<option value="0">-Select kategori dokumen-</option>
			<?php
			$this->widget('SelectOpKatDok',array("id_select"=>$model->id_kat_dokumen));
			?>	</select>
		</div>
		<div class="fix"></div>
	</div>

	<div class="rowElem nobg">
		<label><?php echo $form->label($model,'nama_dokumen'); ?></label>
		<div class="formRight">
			<?php echo $form->textField($model,'nama_dokumen',array('size'=>60,'maxlength'=>150)); ?>
			<?php echo $form->error($model,'nama_dokumen'); ?>
		</div>
		<div class="fix"></div>
	</div>

	<div class="rowElem nobg">
		<label><?php echo $form->label($model,'jenis'); ?></label>
		<div class="formRight">
			<?php 
			$jekel=array(
			    array('id'=>'confidential','ket'=>'Confidential'),
			    array('id'=>'public','ket'=>'Public'),
			);
			echo $form->dropDownList($model,'jenis',CHtml::listData($jekel, 'id', 'ket'));?>
			<?php echo $form->error($model,'jenis'); ?>
		</div>
		<div class="fix"></div>
	</div>

	<div class="rowElem nobg">
		<label><?php echo $form->label($model,'rangkuman'); ?></label>
		<div class="formRight">
			<?php $this->widget('ext.redactorjs.ERedactorWidget',array(
			    'model'=>$model,
			    'attribute'=>"rangkuman",
			    'options'=>array(
			        'fileUpload'=>Yii::app()->createUrl('post/fileUpload',array(
			            'attr'=>"rangkuman"
			        )),
			        'fileUploadErrorCallback'=>new CJavaScriptExpression(
			            'function(obj,json) { alert(json.error); }'
			        ),
			        'imageUpload'=>Yii::app()->createUrl('post/imageUpload',array(
			            'attr'=>"rangkuman"
			        )),
			        'imageGetJson'=>Yii::app()->createUrl('post/imageList',array(
			            'attr'=>"rangkuman"
			        )),
			        'imageUploadErrorCallback'=>new CJavaScriptExpression(
			            'function(obj,json) { alert(json.error); }'
			        ),
			    ),
			)); ?>
			<?php $model->keterangan = "-"; ?>
			<?php echo $form->hiddenField($model,'keterangan'); ?>
			<?php echo $form->error($model,'rangkuman'); ?>
		</div>
		<div class="fix"></div>
	</div>	

	<div class="rowElem nobg">
		<label><?php echo $form->label($model,'gambar'); ?></label>
		<div class="formRight">
			<?php echo $form->fileField($model,'gambar',array('size'=>50,'maxlength'=>50)); ?>
			<?php echo $form->error($model,'gambar'); ?>
		</div>
		<div class="fix"></div>
	</div>

	<div class="rowElem nobg">
		<label><?php echo $form->label($model,'nama_file'); ?></label>
		<div class="formRight">
			<?php echo $form->fileField($model,'nama_file',array('size'=>50,'maxlength'=>50)); ?>
			<?php echo $form->error($model,'nama_file'); ?>
		</div>
		<div class="fix"></div>
	</div>

	<div class="rowElem nobg">
		<label></label>
		<div class="formRight">
			<?php echo CHtml::submitButton('Save Data',array("class" => "greyishBtn submitForm")); ?>
		</div>
		<div class="fix"></div>
	</div>


<?php $this->endWidget(); ?>

	</div>
</fieldset>