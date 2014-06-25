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
	'htmlOptions' => array('class'=>'mainForm'),
)); ?>

	<div class="rowElem nobg">
		<label><?php echo $form->label($model,'judul'); ?></label>
		<div class="formRight">
			<?php echo $form->textField($model,'judul',array('size'=>60,'maxlength'=>150)); ?>
			<?php echo $form->error($model,'judul'); ?>
		</div>
		<div class="fix"></div>
	</div>

	<div class="rowElem nobg">
		<label><?php echo $form->label($model,'widget_st'); ?></label>
		<div class="formRight">
			<?php echo $form->textField($model,'widget_st',array('size'=>50,'maxlength'=>50)); ?>
			<?php echo $form->error($model,'widget_st'); ?>
		</div>
		<div class="fix"></div>
	</div>

	<div class="rowElem nobg">
		<label><?php echo $form->label($model,'url_route'); ?></label>
		<div class="formRight">
			<?php echo $form->textField($model,'url_route',array('size'=>50,'maxlength'=>50)); ?>
			<?php echo $form->error($model,'url_route'); ?>
		</div>
		<div class="fix"></div>
	</div>

	<div class="rowElem nobg">
		<label><?php echo $form->label($model,'keterangan'); ?></label>
		<div class="formRight">
			<?php $this->widget('ext.redactorjs.ERedactorWidget',array(
			    'model'=>$model,
			    'attribute'=>"keterangan",
			    'options'=>array(
			        'fileUpload'=>Yii::app()->createUrl('post/fileUpload',array(
			            'attr'=>"keterangan"
			        )),
			        'fileUploadErrorCallback'=>new CJavaScriptExpression(
			            'function(obj,json) { alert(json.error); }'
			        ),
			        'imageUpload'=>Yii::app()->createUrl('post/imageUpload',array(
			            'attr'=>"keterangan"
			        )),
			        'imageGetJson'=>Yii::app()->createUrl('post/imageList',array(
			            'attr'=>"keterangan"
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
		<label></label>
		<div class="formRight">
			<?php echo CHtml::submitButton('Save Data',array("class" => "greyishBtn submitForm")); ?>
		</div>
		<div class="fix"></div>
	</div>


<?php $this->endWidget(); ?>

	</div>
</fieldset>