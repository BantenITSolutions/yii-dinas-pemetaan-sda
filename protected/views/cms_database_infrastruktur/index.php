<?php
/* @var $this Cms_database_infrastrukturController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Infrastruktur Cms Models',
);

$this->menu=array(
	array('label'=>'Create InfrastrukturCmsModel', 'url'=>array('create')),
	array('label'=>'Manage InfrastrukturCmsModel', 'url'=>array('admin')),
);
?>

<h1>Infrastruktur Cms Models</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
