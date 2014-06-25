<?php

class Cms_userController extends Controller
{
	public function init()
	{
		if (Yii::app()->user->isGuest || Yii::app()->user->status_user!="user_cms") 
		{
			$this->redirect(array("site/index"));
		}
		$this->widget('CekAkses',array("id_select"=>Yii::app()->controller->id));
	}
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='main_dashboard';

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

	public function actionDeleteAll() {
        if (isset($_POST['id'])) {
            foreach ($_POST['id'] as $a => $val) {
                $this->loadModel($val)->delete();
            }
        }
        $this->redirect(array('index'));
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
				'actions'=>array('index','view','create','update','delete','deleteall'),
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
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new UserDashboardModel;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['UserDashboardModel']))
		{
			$model->attributes=$_POST['UserDashboardModel'];

			$arr = $_POST['access_menu_check'];
			$hit = count($arr);
			$simpan_access_menu = "";
			for($i=0;$i<$hit;$i++)
			{
				$simpan_access_menu .= $arr[$i].",";
			}
			$model->access_menu=$simpan_access_menu;
			$model->level = "admin";

			$acak=$model->generateSalt();
			$model->password=$model->hashPassword($_POST['UserDashboardModel']['password'],$acak);

			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('create',array(
			'model'	=> 	$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['UserDashboardModel']))
		{
			$model->attributes=$_POST['UserDashboardModel'];

			$arr = $_POST['access_menu_check'];
			$hit = count($arr);
			$simpan_access_menu = "";
			for($i=0;$i<$hit;$i++)
			{
				$simpan_access_menu .= $arr[$i].",";
			}
			$model->access_menu=$simpan_access_menu;

			if($model->id==Yii::app()->user->id)
			{
				Yii::app()->user->access_menu = $simpan_access_menu;
			}

			if(!empty($_POST['UserDashboardModel']['password']))
			{
				$acak=$model->generateSalt();
				$model->password=$model->hashPassword($_POST['UserDashboardModel']['password'],$acak);
			}
			$model->level = "admin";

			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('index'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$model=new UserDashboardModel('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['UserDashboardModel']))
			$model->attributes=$_GET['UserDashboardModel'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return UserDashboardModel the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=UserDashboardModel::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param UserDashboardModel $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='user-dashboard-model-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
