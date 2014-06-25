<div class="title"><h5>View Email</h5></div>

<fieldset>
    <div class="widget first">
        <div class="head"><h5 class="iList">View Data</h5></div>

		<?php $this->widget('zii.widgets.CDetailView', array(
			'data'=>$model,
			'attributes'=>array(
				'id_email',
				'email',
			),
		)); ?>
	</div>
</fieldset>


