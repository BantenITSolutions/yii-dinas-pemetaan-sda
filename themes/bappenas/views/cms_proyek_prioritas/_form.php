<?php
/* @var $this Dashboard_proyek_prioritasController */
/* @var $model ProyekPrioritasDashboardModel */
/* @var $form CActiveForm */
?>
<style type="text/css">
.selectbox{
	width: 100%;
}
</style>
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
		<label><?php echo $form->label($model,'id_infrastruktur'); ?></label>
		<div class="formRight">
			<?php echo CHtml::dropDownList(
					'ProyekPrioritasDashboardModel[id_infrastruktur]',$model->id_infrastruktur,array(''=>'Semua') + CHtml::listData(InfrastrukturModel::model()->findAll(),'id_infrastruktur','nama_proyek'),array(
							'class' => "chzn-select selectbox", 'width'=>"200px", "tabindex"=>"2"
							));
			 ?>
			<?php echo $form->error($model,'id_infrastruktur'); ?>
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
		<label></label>
		<div class="formRight">
			<?php echo CHtml::submitButton('Add Data',array("class" => "greyishBtn submitForm")); ?>
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