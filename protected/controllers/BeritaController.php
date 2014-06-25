<?php

class BeritaController extends Controller
{

	public $layout='sidebar_content';

	public function actionDetail()
	{
        $criteria = new CDbCriteria;
        $criteria->condition = 'id_berita = '.Yii::app()->getRequest()->getQuery('id').'';
        $dt = BeritaModel::model()->findAll($criteria);
        $cek = BeritaModel::model()->find($criteria);

        if($cek->jenis=="public")
        {
	        foreach ($dt as $dt_v) 
	        {
	        	$set_data['judul'] = $dt_v['judul'];
	        	$set_data['isi'] = $dt_v['isi'];
	        	$set_data['tanggal'] = $dt_v['tanggal'];
	        	$set_data['gambar'] = $dt_v['gambar'];
	        }
			$this->render('detail',$set_data);
        }
        else if($cek->jenis=="confidential" && Yii::app()->user->isGuest)
        {
        	$this->redirect(Yii::app()->baseUrl);
        }
        else
        {
			$url = "dashboard_".Yii::app()->controller->id;
			$this->widget('CekAkses',array("id_select"=>$url));

	        foreach ($dt as $dt_v) 
	        {
	        	$set_data['judul'] = $dt_v['judul'];
	        	$set_data['isi'] = $dt_v['isi'];
	        	$set_data['tanggal'] = $dt_v['tanggal'];
	        	$set_data['gambar'] = $dt_v['gambar'];
	        }
			$this->render('detail',$set_data);
        }
	}

	public function actionIndex()
	{
		$criteria=new CDbCriteria();
		if(Yii::app()->user->isGuest)
        {
        	$criteria->condition = "jenis = 'public'";
		}
        $criteria->order = 'id_berita DESC';

		$dataProvider=new CActiveDataProvider('BeritaModel', array(
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