<?php

class Dashboard_profileController extends Controller
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

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index'),
				'users'=>array('*'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}
	
	public function actionIndex()
	{
		$model=$this->loadModel(Yii::app()->user->id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['DashboardUserModel']))
		{
			$model->attributes=$_POST['DashboardUserModel'];

			if(!empty($_POST['DashboardUserModel']['password']))
			{
				$acak=$model->generateSalt();
				$model->password=$model->hashPassword($_POST['DashboardUserModel']['password'],$acak);
			}
			if($model->save())
				$this->refresh();
		}

		$this->render('index',array(
			'model'=>$model,
		));
	}
	public function loadModel($id)
	{
		$model=DashboardUserModel::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param DashboardUserModel $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='dashboard-user-model-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}