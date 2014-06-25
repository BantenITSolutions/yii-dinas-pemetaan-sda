<?php

class SislognasController extends Controller
{

	public $layout='sidebar_content';
	
	public function actionDokumen()
	{
        $criteria = new CDbCriteria;
        $criteria->condition = 'tipe = "dokumen"';
        $dt = SislognasModel::model()->findAll($criteria);

        foreach ($dt as $dt_v) 
        {
        	$set_data['judul'] = $dt_v['judul'];
        	$set_data['isi'] = $dt_v['isi'];
        }

		$this->render('dokumen',$set_data);
	}

	public function actionIndex()
	{
		$criteria=new CDbCriteria();

		$dataProvider=new CActiveDataProvider('SislognasModel', array(
			'pagination'=>array(
				'pageSize'=>Yii::app()->params['postLimitSmall'],
			),
			'criteria'=>$criteria,
		));

		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	public function actionLatarbelakang()
	{
        $criteria = new CDbCriteria;
        $criteria->condition = 'tipe = "latarbelakang"';
        $dt = SislognasModel::model()->findAll($criteria);

        foreach ($dt as $dt_v) 
        {
        	$set_data['judul'] = $dt_v['judul'];
        	$set_data['isi'] = $dt_v['isi'];
        }

		$this->render('latarbelakang',$set_data);
	}

	public function actionTujuan()
	{
        $criteria = new CDbCriteria;
        $criteria->condition = 'tipe = "tujuan"';
        $dt = SislognasModel::model()->findAll($criteria);

        foreach ($dt as $dt_v) 
        {
        	$set_data['judul'] = $dt_v['judul'];
        	$set_data['isi'] = $dt_v['isi'];
        }

		$this->render('tujuan',$set_data);
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