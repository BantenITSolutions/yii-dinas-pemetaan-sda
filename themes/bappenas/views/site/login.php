
<!DOCTYPE html>
<html>
  <head>
    <title>Log In</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo Yii::app()->theme->baseUrl; ?>/bootstrap/css/bootstrap.css" rel="stylesheet" media="screen">
  </head>
  <body>
    <?php Yii::app()->clientScript->registerCoreScript('jquery'); ?>
    <script src="<?php echo Yii::app()->theme->baseUrl; ?>/bootstrap/js/bootstrap.min.js"></script>


<div class="row-fluid">
  <div class="span12 alert alert-success">

    <h3>Log In</h3>

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'login-form',
	'enableAjaxValidation'=>false,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
	'htmlOptions' => array("class"=>"form-horizontal"),
)); ?>


  <?php echo $form->errorSummary($model); ?>
  <?php echo Yii::app()->user->getFlash('contact'); ?>


    <div class="control-group">
      <?php echo $form->labelEx($model,'username', array("class" => "control-label")); ?>
      <div class="controls">
		<?php echo $form->textField($model,'username'); ?>
		<?php echo $form->error($model,'username'); ?>
      </div>
    </div>

    <div class="control-group">
      <?php echo $form->labelEx($model,'password', array("class" => "control-label")); ?>
      <div class="controls">
    <?php echo $form->passwordField($model,'password'); ?>
    <?php echo $form->error($model,'password'); ?>
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
      </div>
    </div>
  <?php endif; ?>

    <div class="control-group">
      <div class="controls">
        <?php echo CHtml::submitButton('Log In',array("class" => "btn btn-inverse")); ?>
        <?php echo CHtml::resetButton('Reset',array("class" => "btn btn-info")); ?>
      </div>
    </div>

    <div class="control-group">
      <div class="controls">
        <?php echo CHtml::link("Forget Password", Yii::app()->baseUrl.'/site/reset', array("class" => "btn btn-success")); ?>
      </div>
    </div>

<?php $this->endWidget(); ?>

	</div>
</div>
  </body>
</html>


