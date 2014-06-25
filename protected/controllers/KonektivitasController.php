<?php

class KonektivitasController extends Controller
{

	public $layout='sidebar_content';

	public function actionDetail()
	{
        $criteria = new CDbCriteria;
        $criteria->condition = 'id_konektivitas = '.Yii::app()->getRequest()->getQuery('id').'';
        $dt = KonektivitasModel::model()->findAll($criteria);

        foreach ($dt as $dt_v) 
        {
        	$set_data['judul'] = $dt_v['judul'];
        	$set_data['isi'] = $dt_v['isi'];
        	$set_data['gambar'] = $dt_v['gambar'];
        	$set_data['nama_file'] = $dt_v['nama_file'];
        }
		$this->render('detail',$set_data);
	}

	public function actionKonten()
	{
		$criteria=new CDbCriteria();
        $criteria->condition = 'id_menu = '.Yii::app()->getRequest()->getQuery('id').'';
		$criteria=new CDbCriteria($criteria);

		$dataProvider=new CActiveDataProvider('KonektivitasModel', array(
			'pagination'=>array(
				'pageSize'=>Yii::app()->params['postLimitSmall'],
			),
			'criteria'=>$criteria,
		));

		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
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