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
		<label><?php echo $form->label($model,'id_menu'); ?></label>
		<div class="formRight">
			<select name="id_menu">
				<option value="0">-Select menu-</option>
			<?php
			$this->widget('SelectOpGreen',array("id_select"=>$model->id_menu,"id_parent"=>7));
			?>	</select>
		</div>
		<div class="fix"></div>
	</div>

	<div class="rowElem nobg">
		<label><?php echo $form->label($model,'isi'); ?></label>
		<div class="formRight">
			<?php $this->widget('ext.redactorjs.ERedactorWidget',array(
			    'model'=>$model,
			    'attribute'=>"isi",
			    'options'=>array(
			        'fileUpload'=>Yii::app()->createUrl('post/fileUpload',array(
			            'attr'=>"isi"
			        )),
			        'fileUploadErrorCallback'=>new CJavaScriptExpression(
			            'function(obj,json) { alert(json.error); }'
			        ),
			        'imageUpload'=>Yii::app()->createUrl('post/imageUpload',array(
			            'attr'=>"isi"
			        )),
			        'imageGetJson'=>Yii::app()->createUrl('post/imageList',array(
			            'attr'=>"isi"
			        )),
			        'imageUploadErrorCallback'=>new CJavaScriptExpression(
			            'function(obj,json) { alert(json.error); }'
			        ),
			    ),
			)); ?>
			<?php echo $form->error($model,'isi'); ?>
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