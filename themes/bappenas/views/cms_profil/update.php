<?php
/* @var $this Dashboard_profilController */
/* @var $model ProfilDashboardModel */

$this->breadcrumbs=array(
	'Profil Dashboard Models'=>array('index'),
	$model->id_profil=>array('view','id'=>$model->id_profil),
	'Update',
);

$this->menu=array(
	array('label'=>'List ProfilDashboardModel', 'url'=>array('index')),
	array('label'=>'Create ProfilDashboardModel', 'url'=>array('create')),
	array('label'=>'View ProfilDashboardModel', 'url'=>array('view', 'id'=>$model->id_profil)),
	array('label'=>'Manage ProfilDashboardModel', 'url'=>array('admin')),
);
?>
<div class="title"><h5>Manage Profil</h5></div>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>