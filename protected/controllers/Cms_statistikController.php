<?php

class Cms_statistikController extends Controller
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
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new DetailStatistik;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['DetailStatistik']))
		{
			$model->attributes=$_POST['DetailStatistik'];
			if($model->save())
				$this->redirect(array('index','id'=>$model->id_detail_statistik));
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
	public function actionUpdate()
	{
		/*$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['DetailStatistik']))
		{
			$model->attributes=$_POST['DetailStatistik'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id_detail_statistik));
		}

		$this->render('update',array(
			'model'=>$model,
		));*/

		if(Yii::app()->request->isAjaxRequest)
	    {
	    	Yii::import('editable.EditableSaver');
	        $es=new EditableSaver('DetailStatistik');
	        $es->update();
	    }
	    else
	        throw new CHttpException(400,'Invalid request. Please do not repeat this request again.');
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

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new DetailStatistik('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['DetailStatistik']))
			$model->attributes=$_GET['DetailStatistik'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return DetailStatistik the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=DetailStatistik::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param DetailStatistik $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='detail-statistik-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
