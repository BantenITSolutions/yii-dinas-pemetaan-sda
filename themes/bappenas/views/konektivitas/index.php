<div id="content">
	<div id="content-center">

		<?php $this->widget('zii.widgets.CListView', array(
			'dataProvider'=>$dataProvider,
			'itemView'=>'_view',
			'template'=>"{items}\n{pager}",
		)); ?>

	</div>