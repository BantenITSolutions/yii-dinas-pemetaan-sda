<?php

class Dashboard_statistikController extends Controller
{
	public function init()
	{
		if (Yii::app()->user->isGuest || Yii::app()->user->status_user!="user_dashboard") 
		{
			$this->redirect(array("site/index"));
		}
	}
	
	public $layout='main_dashboard_cms';

	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	public function actionExport($id)
	{
		$model=new DetailStatistik();

		$criteria=new CDbCriteria();
        $criteria->condition = "id_header_statistik = '".$id."' ";
        $m = HeaderStatistik::model()->find($criteria);

		$this->widget('ext.phpexcel.EExcelView', array(
	        'grid_mode'=>'export',
	        'title' => "Statistik Dwelling Time ".$m->jalur,
			'dataProvider'=>$model->cari(Yii::app()->getRequest()->getQuery('id')),	
			'columns' => array(
				'HeaderStatistik.jalur',
					'HeaderStatistik.tampil',
					'bulan',
			        'pre_clearance',
			        'customs_clearance',
			        'posts_clearance',
			),
		));
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view','create','update','delete','deleteall','chart','detail','export'),
				'users'=>array('*'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	public function actionDetail($id)
	{
		$model=new DetailStatistik('detail');

		$criteria = new CDbCriteria;
        $criteria->condition = "id_header_statistik = '".$id."' ";
        $dt_header = HeaderStatistik::model()->findAll($criteria);

        $this->renderPartial('detail', array(
            'dt_header'=>$dt_header,
			'model'=>$model,
        ));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$model=new DetailStatistik('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['DetailStatistik']))
			$model->attributes=$_GET['DetailStatistik'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	public function actionChart()
	{
		$criteria = new CDbCriteria;
        $criteria->order = 'id_header_statistik ASC';
        $dt_header = HeaderStatistik::model()->findAll($criteria);

        $this->renderPartial('chart', array(
            'dt_header'=>$dt_header,
        ));
	}
}