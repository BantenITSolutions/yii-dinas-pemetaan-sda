
<!DOCTYPE html>
<html>
  <head>
    <title>Reset Password</title>
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
      <?php echo $form->labelEx($model,'password', array("class" => "control-label")); ?>
      <div class="controls">
    <?php echo $form->textField($model,'password'); ?>
    <?php echo $form->hiddenField($model,'id_user'); ?>
    <?php echo $form->hiddenField($model,'reset_pass'); ?>
		<?php echo $form->error($model,'password'); ?>
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
        <?php echo CHtml::submitButton('Change Password',array("class" => "btn btn-inverse")); ?>
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


