<?php
/* @var $this Dashboard_menuController */
/* @var $model DashboardMenuModel */

$this->breadcrumbs=array(
	'Dashboard Menu Models'=>array('index'),
	$model->id_menu_admin,
);

$this->menu=array(
	array('label'=>'List DashboardMenuModel', 'url'=>array('index')),
	array('label'=>'Create DashboardMenuModel', 'url'=>array('create')),
	array('label'=>'Update DashboardMenuModel', 'url'=>array('update', 'id'=>$model->id_menu_admin)),
	array('label'=>'Delete DashboardMenuModel', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_menu_admin),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage DashboardMenuModel', 'url'=>array('admin')),
);
?>

<div class="title"><h5>Manage CMS Menu</h5></div>

    <div class="widget first">
        <div class="head"><h5 class="iCreate">Welcome, <?php echo Yii::app()->user->nama_lengkap; ?></h5></div>
            <div class="body">

			<?php $this->widget('zii.widgets.CDetailView', array(
				'data'=>$model,
				'attributes'=>array(
					'id_menu_admin',
					array(
						'label'=>'Parent Menu',
						'type'=>'raw',
						'value'=>$model->Menu->menu
						),
					'menu',
					'url_route',
				),
			)); ?>
		</div>
	</div>
