<?php
/* @var $this Cms_database_infrastrukturController */
/* @var $model InfrastrukturCmsModel */

$this->breadcrumbs=array(
	'Infrastruktur Cms Models'=>array('index'),
	$model->id_infrastruktur=>array('view','id'=>$model->id_infrastruktur),
	'Update',
);

$this->menu=array(
	array('label'=>'List InfrastrukturCmsModel', 'url'=>array('index')),
	array('label'=>'Create InfrastrukturCmsModel', 'url'=>array('create')),
	array('label'=>'View InfrastrukturCmsModel', 'url'=>array('view', 'id'=>$model->id_infrastruktur)),
	array('label'=>'Manage InfrastrukturCmsModel', 'url'=>array('admin')),
);
?>

<h1>Update InfrastrukturCmsModel <?php echo $model->id_infrastruktur; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>