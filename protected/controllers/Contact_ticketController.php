<?php

class Contact_ticketController extends Controller
{
	public $layout='sidebar_content';

	public function actionIndex()
	{
		$this->render('index');
	}

	public function actionAct()
	{
		if(isset($_POST['kode_gen']))
		{
			$kode_gen = $_POST['kode_gen'];

			$criteria = new CDbCriteria;
			$criteria->condition = "kode_gen = '".$kode_gen."' ";
			$model=ContactDashboardModel::model()->find($criteria);

			if(ContactDashboardModel::model()->count($criteria)>0)
			{
				$this->render('act',array(
					'model'=>$this->loadModel($kode_gen),
				));
			}
			else
			{
				Yii::app()->user->setFlash("result","Nomor Ticket yang anda masukkan tidak terdapat di dalam sistem.");
				$this->render('index');
			}
		}
	}
	public function loadModel($kode_gen)
	{
		$criteria = new CDbCriteria;
		$criteria->condition = "kode_gen = '".$kode_gen."' ";
		$model=ContactDashboardModel::model()->find($criteria);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}
}