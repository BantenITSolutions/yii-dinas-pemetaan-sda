<style type="text/css">#teks-link{cursor: pointer;}</style>
<?php
if(Yii::app()->user->getFlash('result'))
$this->widget('application.extensions.PNotify.PNotify',array(
    'options'=>array(
        'title'=>'Sukses',
        'text'=>'Data berhasil disimpan.',
        'type'=>'notice',
        'closer'=>true,
        'hide'=>true))
);
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
		<label><?php echo $form->label($model,'judul'); ?></label>
		<div class="formRight">
			<?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>150)); ?>
			<?php echo $form->error($model,'title'); ?>
		</div>
		<div class="fix"></div>
	</div>

	<div class="rowElem nobg">
		<label><?php echo $form->label($model,'tgl_mulai'); ?></label>
		<div class="formRight">
			<?php echo $form->dateField($model,'start',array('size'=>50,'maxlength'=>50)); ?>
			<?php echo $form->error($model,'start'); ?>
		</div>
		<div class="fix"></div>
	</div>

	<div class="rowElem nobg">
		<label><?php echo $form->label($model,'tgl_selesai'); ?></label>
		<div class="formRight">
			<?php echo $form->dateField($model,'end',array('size'=>50,'maxlength'=>50)); ?>
			<?php echo $form->error($model,'end'); ?>
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
		<label><?php echo $form->label($model,'tempat'); ?></label>
		<div class="formRight">
			<div id="tempat_agenda">
				<select data-placeholder="Pilih Tempat..." class="chzn-select" style="width:100%;" tabindex="2" name="id_tempat" id="id_tempat">
				<option></option>
					<?php
						$this->widget('SelectOpTempat',array("id_select"=>$model->id_tempat));
					?>
				</select>
			</div>
			<p>
				<?php echo CHtml::link('Add New',Yii::app()->baseUrl.'/cms_tempat_agenda',array('class'=>'tempatAgenda','id'=>'teks-link')); ?>
			</p>
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
		<label><?php echo $form->label($model,'jumlah_peserta'); ?></label>
		<div class="formRight">
			<?php echo $form->textField($model,'jumlah_peserta',array('size'=>50,'maxlength'=>50)); ?>
			<?php echo $form->error($model,'jumlah_peserta'); ?>
		</div>
		<div class="fix"></div>
	</div>

	<div class="rowElem nobg">
		<label><?php echo $form->label($model,'penanggung_jawab'); ?></label>
		<div class="formRight">
			<?php echo $form->textField($model,'penanggung_jawab',array('size'=>50,'maxlength'=>50)); ?>
			<?php echo $form->error($model,'penanggung_jawab'); ?>
		</div>
		<div class="fix"></div>
	</div>

	<div class="rowElem nobg">
		<label><?php echo $form->label($model,'email_penanggung_jawab'); ?></label>
		<div class="formRight">
			<?php echo $form->textField($model,'email_penanggung_jawab',array('size'=>50,'maxlength'=>50)); ?>
			<?php echo $form->error($model,'email_penanggung_jawab'); ?>
		</div>
		<div class="fix"></div>
	</div>

	<div class="rowElem nobg">
		<label><?php echo $form->label($model,'no_telp_penanggung_jawab'); ?></label>
		<div class="formRight">
			<?php echo $form->textField($model,'no_telp_penanggung_jawab',array('size'=>50,'maxlength'=>50)); ?>
			<?php echo $form->error($model,'no_telp_penanggung_jawab'); ?>
		</div>
		<div class="fix"></div>
	</div>

	<div class="rowElem nobg">
		<label><?php echo $form->label($model,'jam'); ?></label>
		<div class="formRight">
			<?php echo $form->textField($model,'jam',array('size'=>50,'maxlength'=>50)); ?>
			<?php echo $form->error($model,'jam'); ?>
		</div>
		<div class="fix"></div>
	</div>

	<div class="rowElem nobg">
		<label><?php echo $form->label($model,'nama_file'); ?></label>
		<div class="formRight">
			<? $this->widget('ext.EAjaxUpload.EAjaxUpload',
			array(
			    'id'=>'uploadFile',
			    'config'=>array(
			           'action'=>Yii::app()->createUrl('cms_agenda/add_upload'),
			           'allowedExtensions'=>array("jpg","png","zip","pdf","doc","docx","xls","xlsx","ppt","pptx"),
			           'sizeLimit'=>15*1024*1024,// maximum file size in bytes
			           'onComplete'=>"js:function(id, fileName, responseJSON){ $('#AgendaDashboardModel_nama_file').val(responseJSON['filename']); }",
			           'messages'=>array(
			                             'typeError'=>"{file} has invalid extension. Only {extensions} are allowed.",
			                             'sizeError'=>"{file} is too large, maximum file size is {sizeLimit}.",
			                            'minSizeError'=>"{file} is too small, minimum file size is {minSizeLimit}.",
			                             'emptyError'=>"{file} is empty, please select files again without it.",
			                             'onLeave'=>"The files are being uploaded, if you leave now the upload will be cancelled."
			                            ),
			           'showMessage'=>"js:function(message){ alert(message); }"
			          )
			)); ?>
			<?php echo $form->textField($model,'nama_file',array('readonly'=>'true')); ?>
			<?php echo $form->error($model,'nama_file'); ?>
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