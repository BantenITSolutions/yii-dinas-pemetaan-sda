<?php

class Cms_database_infrastrukturController extends Controller
{
	public function init()
	{
		if (Yii::app()->user->isGuest || Yii::app()->user->status_user!="user_cms") 
		{
			$this->redirect(array("site/index"));
		}
		$this->widget('CekAkses',array("id_select"=>Yii::app()->controller->id));
	}
	
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
				'actions'=>array('index','view','create','update','delete','koridor','sumber','sektor','kawasan','nama_proyek','pelaksana','nilai_investasi','kategori','deleteall'),
				'users'=>array('*'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	public function actionKoridor()
	{
		$this->renderPartial('_koridor');
	}
	public function actionSumber()
	{
		$this->renderPartial('_sumber');
	}
	public function actionSektor()
	{
		$this->renderPartial('_sektor');
	}
	public function actionKawasan()
	{
		$this->renderPartial('_kawasan');
	}
	public function actionPelaksana()
	{
		$this->renderPartial('_pelaksana');
	}
	public function actionNilai_Investasi()
	{
		$this->renderPartial('_nilai_investasi');
	}
	public function actionKategori()
	{
		$this->renderPartial('_kategori');
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
		$model=new InfrastrukturCmsModel;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['InfrastrukturCmsModel']))
		{
			$model->attributes=$_POST['InfrastrukturCmsModel'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id_infrastruktur));
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

		if(isset($_POST['InfrastrukturCmsModel']))
		{
			$model->attributes=$_POST['InfrastrukturCmsModel'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id_infrastruktur));
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
	 * Manages all models.
	 */
	public function actionIndex()
	{
        $criteria = new CDbCriteria;
        
        $cari = "";
		
		if(empty($this->nama_proyek)){$cari .= "";} else if(!empty($this->nama_proyek) && $cari!==""){$cari .= "and nama_proyek like '%".$this->nama_proyek."%'  ";}
		else if(!empty($this->nama_proyek)){$cari .= "nama_proyek like '%".$this->nama_proyek."%' ";}

		
		if(is_array(Yii::app()->session['id_koridor']))
		{
			$param_koridor = "";
			for($i=0;$i<count(Yii::app()->session['id_koridor']);$i++)
			{
				if(!empty($param_koridor))
				{
					$param_koridor = $param_koridor.','.Yii::app()->session['id_koridor'][$i];
				}
				else
				{
					$param_koridor = Yii::app()->session['id_koridor'][$i];
				}
			}

			if(Yii::app()->session['id_koridor']==""){$cari .= "";} else if(!empty(Yii::app()->session['id_koridor']) && $cari!==""){$cari .= "and id_koridor IN (".$param_koridor.") ";}
			else if(!empty(Yii::app()->session['id_koridor'])){$cari .= "id_koridor IN (".$param_koridor.") ";}
		}
		else
		{
			if(Yii::app()->session['id_koridor']==""){$cari .= "";} else if(!empty(Yii::app()->session['id_koridor']) && $cari!==""){$cari .= "and id_koridor = '".Yii::app()->session['id_koridor']."' ";}
			else if(!empty(Yii::app()->session['id_koridor'])){$cari .= "id_koridor = '".Yii::app()->session['id_koridor']."' ";}
		}

		if(is_array(Yii::app()->session['id_sektor']))
		{
			$param_sektor = "";
			for($i=0;$i<count(Yii::app()->session['id_sektor']);$i++)
			{
				if(!empty($param_sektor))
				{
					$param_sektor = $param_sektor.','.Yii::app()->session['id_sektor'][$i];
				}
				else
				{
					$param_sektor = Yii::app()->session['id_sektor'][$i];
				}
			}

			if(Yii::app()->session['id_sektor']==""){$cari .= "";} else if(!empty(Yii::app()->session['id_sektor']) && $cari!==""){$cari .= "and id_sektor IN (".$param_sektor.") ";}
			else if(!empty(Yii::app()->session['id_sektor'])){$cari .= "id_sektor IN (".$param_sektor.") ";}
		}
		else
		{
			if(Yii::app()->session['id_sektor']==""){$cari .= "";} else if(!empty(Yii::app()->session['id_sektor']) && $cari!==""){$cari .= "and id_sektor = '".Yii::app()->session['id_sektor']."' ";}
			else if(!empty(Yii::app()->session['id_sektor'])){$cari .= "id_sektor = '".Yii::app()->session['id_sektor']."' ";}
		}
		
		if(Yii::app()->session['id_sumber_dana']==""){$cari .= "";} else if(!empty(Yii::app()->session['id_sumber_dana']) && $cari!==""){$cari .= "and id_sumber_dana = '".Yii::app()->session['id_sumber_dana']."' ";}
		else if(!empty(Yii::app()->session['id_sumber_dana'])){$cari .= "id_sumber_dana = '".Yii::app()->session['id_sumber_dana']."' ";}
		
		if(Yii::app()->session['id_kawasan']==""){$cari .= "";} else if(!empty(Yii::app()->session['id_kawasan']) && $cari!==""){$cari .= "and id_kawasan = '".Yii::app()->session['id_kawasan']."' ";}
		else if(!empty(Yii::app()->session['id_kawasan'])){$cari .= "id_kawasan = '".Yii::app()->session['id_kawasan']."' ";}
		
		if(Yii::app()->session['id_nilai_investasi']==""){$cari .= "";} else if(!empty(Yii::app()->session['id_nilai_investasi']) && $cari!==""){$cari .= "and id_nilai_investasi = '".Yii::app()->session['id_nilai_investasi']."' ";}
		else if(!empty(Yii::app()->session['id_nilai_investasi'])){$cari .= "id_nilai_investasi = '".Yii::app()->session['id_nilai_investasi']."' ";}

		$criteria->condition = $cari;

		$model=new InfrastrukturCmsModel('search');
		$model->unsetAttributes();
		if(isset($_GET['InfrastrukturCmsModel']))
			$model->attributes=$_GET['InfrastrukturCmsModel'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return InfrastrukturCmsModel the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=InfrastrukturCmsModel::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param InfrastrukturCmsModel $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='infrastruktur-cms-model-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
