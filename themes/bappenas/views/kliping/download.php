
<!DOCTYPE html>
<html>
  <head>
    <title>Download Kliping</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo Yii::app()->theme->baseUrl; ?>/bootstrap/css/bootstrap.css" rel="stylesheet" media="screen">
  </head>
  <body>
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="<?php echo Yii::app()->theme->baseUrl; ?>/bootstrap/js/bootstrap.min.js"></script>

<div class="row-fluid">
  <div class="span12 alert alert-success">

    <h3>Download Kliping</h3>

<?php $form=$this->beginWidget('CActiveForm', array(
    'htmlOptions' => array("class"=>"form-horizontal"))); ?>

  <?php echo $form->errorSummary($model); ?>
  <?php echo Yii::app()->user->getFlash('contact'); ?>


    <div class="control-group">
      <?php echo $form->labelEx($model,'nama', array("class" => "control-label")); ?>
      <div class="controls">
        <?php echo $form->textField($model,'nama'); ?>
      </div>
    </div>

    <div class="control-group">
      <?php echo $form->labelEx($model,'email', array("class" => "control-label")); ?>
      <div class="controls">
        <?php echo $form->textField($model,'email'); ?>
        <?php echo $form->hiddenField($model,'id_kliping'); ?>
      </div>
    </div>

    <div class="control-group">
      <?php echo $form->labelEx($model,'pekerjaan', array("class" => "control-label")); ?>
      <div class="controls">
        <?php echo $form->textField($model,'pekerjaan'); ?>
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
        <?php echo CHtml::submitButton('Kirim Data',array("class" => "btn btn-inverse")); ?>
      </div>
    </div>

<?php $this->endWidget(); ?>
      </div>
    </div>

  </body>
</html>
