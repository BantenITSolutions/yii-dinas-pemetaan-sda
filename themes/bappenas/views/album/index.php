<div id="content-center">

	<div id="title-gallery">ALBUM GALERI</div>

	<?php $this->widget('zii.widgets.CListView', array(
		'dataProvider'=>$dataProvider,
		'itemView'=>'_view',
		'template'=>"{items}\n{pager}",
	)); ?>

</div>