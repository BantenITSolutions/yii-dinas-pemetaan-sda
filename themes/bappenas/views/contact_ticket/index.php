<div id="content">
	<div id="content-center">


		<div id="title-news">CONTACT TICKET</div>
			<div class="cleaner_h20"></div>
			<?php $form=$this->beginWidget('CActiveForm', array(
				'id'=>'agenda-dashboard-model-form',
		        'action' => Yii::app()->createUrl('/contact_ticket/act'),
				'enableAjaxValidation'=>false,
			)); ?>
			
				<div class="control-group">
			      <label for="kode_gen">Nomor Ticket<span class="required">*</span></label>      
			      	<div class="controls">
			        	<input type="text" name="kode_gen" id="kode_gen" style="width:300px; padding:5px;" placeholder="Masukkan nomor ticket contact"> 
			        	<input type="submit" value="CEK">
			    	</div>
			    </div>

  				<?php echo Yii::app()->user->getFlash('result'); ?>

				
			<?php $this->endWidget(); ?>
			<div class="cleaner_h20"></div>

	</div>