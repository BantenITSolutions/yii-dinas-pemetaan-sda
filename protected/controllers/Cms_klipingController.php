<?php

class Cms_klipingController extends Controller
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
		$model=new KlipingDashboardModel;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['KlipingDashboardModel']))
		{
			$file = CUploadedFile::getInstance($model, 'nama_file');

			$model->attributes=$_POST['KlipingDashboardModel'];
			$model->tanggal = gmdate("d-M-Y H:i:s",time()+3600*7);
			$model->bulan = $_POST['bulan'];
			$model->tahun = $_POST['tahun'];


            if(!empty($file))
            {
            	$model->nama_file = uniqid(rand(),true).'.'.$file->getExtensionName();
            }

			if($model->save())
			{
                if(!empty($file))
                {
					$path_file = Yii::getPathOfAlias('webroot').'/themes/bappenas/kliping_files/'.$model->nama_file;
	                $file->saveAs($path_file);
                }

				$this->redirect(array('view','id'=>$model->id_kliping));
			}
		}

		$this->render('create',array(
			'model'=>$model,
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

		if(isset($_POST['KlipingDashboardModel']))
		{
			$file = CUploadedFile::getInstance($model, 'nama_file');

			$model->attributes=$_POST['KlipingDashboardModel'];
			$model->bulan = $_POST['bulan'];
			$model->tahun = $_POST['tahun'];

            if(!empty($file))
            {
            	$model->nama_file = uniqid(rand(),true).'.'.$file->getExtensionName();
            }

			if($model->save())
			{
                if(!empty($file))
                {
					$path_file = Yii::getPathOfAlias('webroot').'/themes/bappenas/kliping_files/'.$model->nama_file;
	                $file->saveAs($path_file);
                }

				$this->redirect(array('view','id'=>$model->id_kliping));
			}
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
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$model=new KlipingDashboardModel('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['KlipingDashboardModel']))
			$model->attributes=$_GET['KlipingDashboardModel'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return KlipingDashboardModel the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=KlipingDashboardModel::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param KlipingDashboardModel $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='kliping-dashboard-model-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
