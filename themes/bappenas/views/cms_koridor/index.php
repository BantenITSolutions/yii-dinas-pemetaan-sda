<?php
/* @var $this Dashboard_koridorController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Koridor Models',
);

$this->menu=array(
	array('label'=>'Create KoridorModel', 'url'=>array('create')),
	array('label'=>'Manage KoridorModel', 'url'=>array('admin')),
);
?>

<h1>Koridor Models</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
