<?php

class ProfilController extends Controller
{
	public function actionDetail()
	{
        $criteria = new CDbCriteria;
        $criteria->condition = 'id_profil = '.Yii::app()->getRequest()->getQuery('id').'';
        $dt = ProfilModel::model()->findAll($criteria);

        foreach ($dt as $dt_v) 
        {
        	$set_data['judul'] = $dt_v['judul'];
        	$set_data['keterangan'] = $dt_v['keterangan'];
        }
		$this->renderPartial('detail',$set_data);
	}

	public function actionIndex()
	{
		$this->render('index');
	}

	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
}