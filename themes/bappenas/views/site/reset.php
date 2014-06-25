
<!DOCTYPE html>
<html>
  <head>
    <title>Forget Password</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo Yii::app()->theme->baseUrl; ?>/bootstrap/css/bootstrap.css" rel="stylesheet" media="screen">
  </head>
  <body>
    <?php Yii::app()->clientScript->registerCoreScript('jquery'); ?>
    <script src="<?php echo Yii::app()->theme->baseUrl; ?>/bootstrap/js/bootstrap.min.js"></script>


<div class="row-fluid">
  <div class="span12 alert alert-success">

    <h3>Reset Password</h3>

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'reset-form',
	'enableAjaxValidation'=>false,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
	'htmlOptions' => array("class"=>"form-horizontal"),
)); ?>


  <?php echo $form->errorSummary($model); ?>
  <?php echo Yii::app()->user->getFlash('result'); ?>


    <div class="control-group">
      <?php echo $form->labelEx($model,'email', array("class" => "control-label")); ?>
      <div class="controls">
		<?php echo $form->textField($model,'email'); ?>
		<?php echo $form->error($model,'email'); ?>
      </div>
    </div>

    <div class="control-group">
      <?php echo $form->labelEx($model,'hak_akses', array("class" => "control-label")); ?>
      <div class="controls">
        <?php echo $form->dropDownList($model,'hak_akses',array("user_dashboard"=>"User Dashboard","user_cms"=>"User CMS"),array('empty'=>'--- Pilih Hak Akses ---')); ?>
      </div>
    </div>

    <?php if(CCaptcha::checkRequirements()): ?>
    <div class="control-group">
      <?php echo $form->labelEx($model,'verifyCode', array("class" => "control-label")); ?>
      <div class="controls">
        <div style="background-color:#fff; width:230px; margin-bottom:5px;">
        <?php $this->widget('CCaptcha'); ?>
        </div>
        <?php echo $form->textField($model,'verifyCode'); ?>
      <?php echo $form->error($model,'verifyCode'); ?>
      </div>
    </div>
  <?php endif; ?>

    <div class="control-group">
      <div class="controls">
        <?php echo CHtml::submitButton('Send Reset Code',array("class" => "btn btn-inverse")); ?>
      </div>
    </div>

    <div class="control-group">
      <div class="controls">
        <?php echo CHtml::link("Login Page", Yii::app()->baseUrl.'/site/login', array("class" => "btn btn-success")); ?>
      </div>
    </div>

<?php $this->endWidget(); ?>

	</div>
</div>
  </body>
</html>


