<?php

class Cms_galeriController extends Controller
{
	public function init()
	{
		if (Yii::app()->user->isGuest || Yii::app()->user->status_user!="user_cms") 
		{
			$this->redirect(array("site/index"));
		}
		//$this->widget('CekAkses',array("id_select"=>Yii::app()->controller->id));
	}
	
	public $layout='main_dashboard';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
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
		$model=new GaleriDashboardModel;
		$model->id_album=Yii::app()->getRequest()->getQuery('id');
		$this->performAjaxValidation($model);

		if(isset($_POST['GaleriDashboardModel']))
		{
            $model->attributes=$_POST['GaleriDashboardModel'];
            $images = CUploadedFile::getInstancesByName('gambar');
            
            if(isset($images) && count($images)> 0) 
            {
                foreach ($images as $image=>$pic) 
                {
                    if ($pic->saveAs(Yii::getPathOfAlias('webroot').'/themes/bappenas/galeri/temp/'.$pic->name,0777))     
                    {    
                    	$nama = uniqid(rand(),true).'.'.$pic->getExtensionName();
                    	$path = Yii::getPathOfAlias('webroot').'/themes/bappenas/galeri/temp/'.$pic->name;

						$img = Yii::app()->simpleImage->load($path);
						$img->resizeToWidth(640);
						$img->save(Yii::getPathOfAlias('webroot').'/themes/bappenas/galeri/'.$nama);

						unlink($path);

                        $model->setIsNewRecord(true);
                        $model->id_galeri = null;
                        $model->gambar = $nama;
                        $model->id_album = $model->id_album;
                        $model->save();
                    }                
                }
				$this->redirect(array('index','id'=>$model->id_album));
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

		if(isset($_POST['GaleriDashboardModel']))
		{
			$gambar_upload = CUploadedFile::getInstance($model, 'gambar');
			if(!empty($gambar_upload))
			{
				$model->attributes=$_POST['GaleriDashboardModel'];
	            $model->gambar = uniqid(rand(),true).'.'.$gambar_upload->getExtensionName();
				if($model->save())
				{
					$path = Yii::getPathOfAlias('webroot').'/themes/bappenas/galeri/temp/'.$model->gambar;
	                $gambar_upload->saveAs($path);

					$img = Yii::app()->simpleImage->load($path);
					$img->resizeToWidth(300);
					$img->save(Yii::getPathOfAlias('webroot').'/themes/bappenas/galeri/'.$model->gambar);

					unlink($path);

					$this->redirect(array('index','id'=>$model->id_album));
				}
			}
			else
			{
				$model->attributes=$_POST['GaleriDashboardModel'];
				if($model->save())
				{
					$this->redirect(array('index','id'=>$model->id_album));
				}
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
		?>
			<script type="text/javascript">window.history.go(-1)</script>
		<?php
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex($id)
	{
		$criteria = new CDbCriteria();
		$criteria->condition = "id_album = '".$id."' ";

		$dataProvider=new CActiveDataProvider('GaleriDashboardModel',array('criteria'=>$criteria,
    'pagination'=>array(
        'pageSize'=>10,
    ),));
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return GaleriDashboardModel the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=GaleriDashboardModel::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param GaleriDashboardModel $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='galeri-dashboard-model-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
