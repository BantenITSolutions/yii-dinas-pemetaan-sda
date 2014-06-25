<?php

class Dashboard_beritaController extends Controller
{
	public function init()
	{
		if (Yii::app()->user->isGuest || Yii::app()->user->status_user!="user_dashboard") 
		{
			$this->redirect(array("site/index"));
		}
		$this->widget('CekAkses',array("id_select"=>Yii::app()->controller->id));
	}
	
	public $layout='main_dashboard_cms';

	/**
	 * @return array action filters
	 */
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
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionIndex()
	{
		$model=new BeritaDashboardModel('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['BeritaDashboardModel']))
			$model->attributes=$_GET['BeritaDashboardModel'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return BeritaDashboardModel the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=BeritaDashboardModel::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param BeritaDashboardModel $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='berita-dashboard-model-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
