<?php
/* @var $this Dashboard_front_page_menuController */
/* @var $model DashboardFrontMenuModel */

$this->breadcrumbs=array(
	'Dashboard Front Menu Models'=>array('index'),
	$model->id_menu,
);

$this->menu=array(
	array('label'=>'List DashboardFrontMenuModel', 'url'=>array('index')),
	array('label'=>'Create DashboardFrontMenuModel', 'url'=>array('create')),
	array('label'=>'Update DashboardFrontMenuModel', 'url'=>array('update', 'id'=>$model->id_menu)),
	array('label'=>'Delete DashboardFrontMenuModel', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_menu),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage DashboardFrontMenuModel', 'url'=>array('admin')),
);
?>


<div class="title"><h5>Manage Front Menu</h5></div>

    <div class="widget first">
        <div class="head"><h5 class="iCreate">Welcome, <?php echo Yii::app()->user->nama_lengkap; ?></h5></div>
            <div class="body">

			<?php $this->widget('zii.widgets.CDetailView', array(
				'data'=>$model,
				'attributes'=>array(
					'id_menu',
					'id_parent',
					'menu',
					'url_route',
					array(
						'label'=>'Content',
						'type'=>'raw',
						'value'=>$model->content
						),
				),
			)); ?>
		</div>
	</div>
