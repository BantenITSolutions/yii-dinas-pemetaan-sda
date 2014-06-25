<?php
/* @var $this Dashboard_userController */
/* @var $model UserDashboardModel */

$this->breadcrumbs=array(
	'User Dashboard Models'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List UserDashboardModel', 'url'=>array('index')),
	array('label'=>'Create UserDashboardModel', 'url'=>array('create')),
	array('label'=>'Update UserDashboardModel', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete UserDashboardModel', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage UserDashboardModel', 'url'=>array('admin')),
);
?>

<div class="title"><h5>Manage User</h5></div>

    <div class="widget first">
        <div class="head"><h5 class="iCreate">Welcome, <?php echo Yii::app()->user->nama_lengkap; ?></h5></div>
            <div class="body">

			<?php $this->widget('zii.widgets.CDetailView', array(
				'data'=>$model,
				'attributes'=>array(
					'id',
					'username',
					'password',
					'nama',
					'email',
					'access_menu',
					'level',
				),
			)); ?>
		</div>
	</div>
