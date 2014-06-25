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
		<label><?php echo $form->label($model,'id_parent'); ?></label>
		<div class="formRight">
			<select name="id_parent">
				<option value="0">-Select parent menu-</option>
			<?php
			$this->widget('SelectOpMenuFront',array("id_select"=>$model->id_parent));
		?></select>
		</div>
		<div class="fix"></div>
	</div>

	<div class="rowElem nobg">
		<label><?php echo $form->label($model,'menu'); ?></label>
		<div class="formRight">
			<?php echo $form->textField($model,'menu',array('size'=>50,'maxlength'=>50)); ?>
			<?php echo $form->error($model,'menu'); ?>
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
		<label><?php echo $form->label($model,'posisi'); ?></label>
		<div class="formRight">
        	<?php echo $form->dropDownList($model,'posisi',array("header"=>"Header","sidebar"=>"Sidebar"),array('empty'=>'--- Pilih Posisi Menu ---')); ?>
			<?php echo $form->error($model,'posisi'); ?>
		</div>
		<div class="fix"></div>
	</div>

	<div class="rowElem nobg">
		<label><?php echo $form->label($model,'content'); ?></label>
		<div class="formRight">
			<?php $this->widget('ext.redactorjs.ERedactorWidget',array(
			    'model'=>$model,
			    'attribute'=>"content",
			    'options'=>array(
			        'fileUpload'=>Yii::app()->createUrl('post/fileUpload',array(
			            'attr'=>"content"
			        )),
			        'fileUploadErrorCallback'=>new CJavaScriptExpression(
			            'function(obj,json) { alert(json.error); }'
			        ),
			        'imageUpload'=>Yii::app()->createUrl('post/imageUpload',array(
			            'attr'=>"content"
			        )),
			        'imageGetJson'=>Yii::app()->createUrl('post/imageList',array(
			            'attr'=>"content"
			        )),
			        'imageUploadErrorCallback'=>new CJavaScriptExpression(
			            'function(obj,json) { alert(json.error); }'
			        ),
			    ),
			)); ?>
			<?php echo $form->error($model,'content'); ?>
		</div>
		<div class="fix"></div>
	</div>	

	<div class="rowElem nobg">
		<label></label>
		<div class="formRight">
			<?php echo CHtml::submitButton('Add Data',array("class" => "greyishBtn submitForm")); ?>
		</div>
		<div class="fix"></div>
	</div>


<?php $this->endWidget(); ?>

	</div>
</fieldset>