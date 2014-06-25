<?php

class Cms_statistik_database_infrastrukturController extends Controller
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

	public function actionIndex()
	{
		$this->render('index');
	}
}