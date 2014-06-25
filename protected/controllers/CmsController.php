<?php

class CmsController extends Controller
{
	public function init()
	{
		if (Yii::app()->user->isGuest || Yii::app()->user->status_user!="user_cms") 
		{
			$this->redirect(array("site/index"));
		}
	}

	public $layout='main_dashboard';

	public function actionIndex()
	{
		$this->render('index');
	}

	public function actionRoute()
	{
        $criteria = new CDbCriteria;
        $criteria->condition = 'id_menu_admin = '.Yii::app()->getRequest()->getQuery('id').'';
        $dt = DashboardMenuModel::model()->findAll($criteria);

        foreach ($dt as $dt_v) 
        {
        	$this->redirect(Yii::app()->baseUrl."/".$dt_v['url_route']);
        }
	}

	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
}