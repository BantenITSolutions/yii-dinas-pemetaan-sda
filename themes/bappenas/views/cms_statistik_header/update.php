<?php
/* @var $this Cms_statistik_headerController */
/* @var $model HeaderStatistik */

$this->breadcrumbs=array(
	'Header Statistiks'=>array('index'),
	$model->id_header_statistik=>array('view','id'=>$model->id_header_statistik),
	'Update',
);

$this->menu=array(
	array('label'=>'List HeaderStatistik', 'url'=>array('index')),
	array('label'=>'Create HeaderStatistik', 'url'=>array('create')),
	array('label'=>'View HeaderStatistik', 'url'=>array('view', 'id'=>$model->id_header_statistik)),
	array('label'=>'Manage HeaderStatistik', 'url'=>array('admin')),
);
?>


<h3>Update Jalur</h3>

<div class="span2"></div>
<div class="search-form span6">
<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
</div>
<div style="clear:both; width:100%;"></div>