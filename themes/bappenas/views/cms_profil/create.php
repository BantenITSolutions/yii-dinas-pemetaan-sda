<?php
/* @var $this Dashboard_profilController */
/* @var $model ProfilDashboardModel */

$this->breadcrumbs=array(
	'Profil Dashboard Models'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ProfilDashboardModel', 'url'=>array('index')),
	array('label'=>'Manage ProfilDashboardModel', 'url'=>array('admin')),
);
?>

<div class="title"><h5>Manage Profil</h5></div>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>