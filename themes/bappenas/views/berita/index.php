<div id="content">
	<div id="content-center">

		<div id="title-news">BERITA TERBARU</div>

		<?php $this->widget('zii.widgets.CListView', array(
			'dataProvider'=>$dataProvider,
			'itemView'=>'_view',
			'template'=>"{items}\n{pager}",
		)); ?>

	</div>