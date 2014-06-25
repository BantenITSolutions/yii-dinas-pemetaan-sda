<?php

class Dbi_oldController extends Controller
{

	public function actionIndex()
	{
		$model=new ProfilDashboardModel('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['ProfilDashboardModel']))
			$model->attributes=$_GET['ProfilDashboardModel'];

		$this->render('index',array(
			'model'=>$model,
			'model2'=>$model,
		));
	}

	public function actionAct()
	{
		Yii::app()->session['id_koridor']=$_POST['id_koridor'];
		Yii::app()->session['id_sumber_dana']=$_POST['id_sumber_dana'];
		Yii::app()->session['id_sektor']=$_POST['id_sektor'];
		Yii::app()->session['tahun_mulai']=$_POST['tahun_mulai'];
		Yii::app()->session['tahun_selesai']=$_POST['tahun_selesai'];
		Yii::app()->session['id_kawasan']=$_POST['id_kawasan'];
		Yii::app()->session['id_nama_proyek']=$_POST['id_nama_proyek'];
		Yii::app()->session['id_nilai_investasi']=$_POST['id_nilai_investasi'];
		Yii::app()->session['id_pelaksana']=$_POST['id_pelaksana'];
		Yii::app()->session['id_kategori']=$_POST['id_kategori'];
		$this->redirect('index');
	}
}