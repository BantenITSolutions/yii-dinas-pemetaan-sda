<?php
/* @var $this Cms_database_infrastrukturController */
/* @var $model InfrastrukturCmsModel */

$this->breadcrumbs=array(
	'Infrastruktur Cms Models'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List InfrastrukturCmsModel', 'url'=>array('index')),
	array('label'=>'Manage InfrastrukturCmsModel', 'url'=>array('admin')),
);
?>

<h1>Create InfrastrukturCmsModel</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>