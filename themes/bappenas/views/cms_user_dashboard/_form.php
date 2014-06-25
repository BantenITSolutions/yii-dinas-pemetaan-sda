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
		<label><?php echo $form->label($model,'username'); ?></label>
		<div class="formRight">
			<?php echo $form->textField($model,'username',array('size'=>60,'maxlength'=>150)); ?>
			<?php echo $form->error($model,'username'); ?>
		</div>
		<div class="fix"></div>
	</div>

	<div class="rowElem nobg">
		<label><?php echo $form->label($model,'password'); ?></label>
		<div class="formRight">
			<?php $model->password = ""; ?>
			<?php echo $form->textField($model,'password',array('size'=>50,'maxlength'=>50)); ?>
			<?php echo $form->error($model,'password'); ?>
		</div>
		<div class="fix"></div>
	</div>

	<div class="rowElem nobg">
		<label><?php echo $form->label($model,'nama'); ?></label>
		<div class="formRight">
			<?php echo $form->textField($model,'nama',array('size'=>50,'maxlength'=>50)); ?>
			<?php echo $form->error($model,'password'); ?>
		</div>
		<div class="fix"></div>
	</div>

	<div class="rowElem nobg">
		<label><?php echo $form->label($model,'email'); ?></label>
		<div class="formRight">
			<?php $model->reset_pass = md5(uniqid()); ?>
			<?php echo $form->textField($model,'email',array('size'=>50,'maxlength'=>50)); ?>
			<?php echo $form->hiddenField($model,'reset_pass'); ?>
			<?php echo $form->error($model,'email'); ?>
		</div>
		<div class="fix"></div>
	</div>

	<div class="rowElem nobg">
		<?php
        $stack = array();
        $count = explode(",",$model->access_menu);
        for($i=0;$i<count($count);$i++)
        {
            array_push($stack, $count[$i]);
        }

		$dataProvider = new CActiveDataProvider('MenuDashboardModel');
		$iterator = new CDataProviderIterator($dataProvider);
		$i=0;
		foreach($iterator as $category) 
		{
			if($stack[$i]==$category->id_menu_dashboard)
			{
				echo '<label style="padding:0px; margin:0px; width:90%; float:right;" for="chk-'.$i.'">'.$category->menu.'</label>';
			   	echo '<input type="checkbox" id="chk-'.$i.'" name="access_menu_check[]" value="'.$category->id_menu_dashboard.'" checked> ';
				echo '<div class="fix"></div>';	
			}
			else
			{
				echo '<label style="padding:0px; margin:0px; width:90%; float:right;"" for="chk-'.$i.'">'.$category->menu.'</label>';
			   	echo '<input type="checkbox" id="chk-'.$i.'" value="'.$category->id_menu_dashboard.'" name="access_menu_check[]"> ';
				echo '<div class="fix"></div>';	
				array_splice($stack, $i, 0, '-');
			}
			$i++;
		}
	?>
	<label class="checkbox">
		<input type=radio id=pilih name="pilih" onClick='for (i=0;i<<?php echo $i; ?>;i++){document.getElementById("chk-"+i).checked=true;}'> Check All
	</label>
	<label class="checkbox">
		<input type=radio id=nopilih name="pilih" onClick='for (i=0;i<<?php echo $i; ?>;i++){document.getElementById("chk-"+i).checked=false;}'> Uncheck All
	</label>

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