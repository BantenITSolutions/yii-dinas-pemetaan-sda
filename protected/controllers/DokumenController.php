<?php

class DokumenController extends Controller
{
	public $layout='single_pdf';

	public function actionIndex()
	{
		$param = Yii::app()->getRequest()->getQuery('id');
		if(empty($param)){$param=0;}
        $criteria = new CDbCriteria;
        $criteria->condition = 'id_kat_dokumen = '.$param.'';
        $criteria->order = 'id_dokumen DESC';
        if(Yii::app()->user->isGuest)
        {
            $criteria->condition = "jenis='public'";
        }
		$dt = DokumenModel::model()->findAll($criteria);

		$this->renderPartial('index',array("dt"=>$dt));
	}

	public function actionDetail()
	{
		$param = Yii::app()->getRequest()->getQuery('id');
        if(empty($param)){return false;}
        $criteria = new CDbCriteria;
        $criteria->condition = 'id_dokumen = '.Yii::app()->getRequest()->getQuery('id').'';
        $dt = DokumenModel::model()->findAll($criteria);
        $cek = DokumenModel::model()->find($criteria);

        if($cek->jenis=="public")
        {
	        foreach ($dt as $dt_v) 
	        {
	        	$set_data['nama_dokumen'] = $dt_v['nama_dokumen'];
	        	$set_data['keterangan'] = $dt_v['keterangan'];
	        	$set_data['nama_file'] = $dt_v['nama_file'];
	        	$set_data['id_dokumen'] = $dt_v['id_dokumen'];
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
	        	$set_data['nama_dokumen'] = $dt_v['nama_dokumen'];
	        	$set_data['keterangan'] = $dt_v['keterangan'];
	        	$set_data['nama_file'] = $dt_v['nama_file'];
	        	$set_data['id_dokumen'] = $dt_v['id_dokumen'];
	        }
			$this->render('detail',$set_data);
        }
	}

	public function actionDownload($id)
    {
        $material = DokumenModel::model()->findByPk($id);
        $src = Yii::app()->createAbsoluteUrl("/").'/themes/'.Yii::app()->theme->name.'/dokumen_files/'.$material->nama_file;

        $filecontent=file_get_contents($src);
		header("Content-Type: text/plain");
		header("Content-disposition: attachment; filename=$material->nama_file");
		header("Pragma: no-cache");
		echo $filecontent;
		exit;
        
    }
}