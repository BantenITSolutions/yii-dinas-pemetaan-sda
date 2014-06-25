<?php

class KlipingController extends Controller
{

	public $layout='sidebar_content';
	
	public function actionDetail()
	{
		$this->layout="single_pdf";
        $criteria = new CDbCriteria;
        $criteria->condition = 'id_kliping = '.Yii::app()->getRequest()->getQuery('id').'';
        $dt = KlipingModel::model()->findAll($criteria);

        foreach ($dt as $dt_v) 
        {
        	$set_data['judul'] = $dt_v['judul'];
        	$set_data['tanggal'] = $dt_v['tanggal'];
        	$set_data['keterangan'] = $dt_v['keterangan'];
        	$set_data['bulan'] = $dt_v['bulan'];
        	$set_data['tahun'] = $dt_v['tahun'];
        	$set_data['nama_file'] = $dt_v['nama_file'];
        }
		$this->render('detail',$set_data);
	}

	public function actionIndex()
	{
		$cari = "";
		if(!empty(Yii::app()->session['bulan_kliping'])){$cari .= "bulan = '".Yii::app()->session['bulan_kliping']."' ";}
		
		if(!empty(Yii::app()->session['tahun_kliping']) && $cari!==""){$cari .= "and tahun = '".Yii::app()->session['tahun_kliping']."' ";}
		else if(!empty(Yii::app()->session['tahun_kliping'])){$cari .= "tahun = '".Yii::app()->session['tahun_kliping']."' ";}

		$criteria=new CDbCriteria();
		$criteria->condition = $cari;

		$dataProvider=new CActiveDataProvider('KlipingModel', array(
			'pagination'=>array(
				'pageSize'=>Yii::app()->params['postLimitSmall']
			),
			'criteria'=>$criteria,
		));

		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	public function actionAct()
	{
		Yii::app()->session['bulan_kliping']=$_POST['bulan'];
		Yii::app()->session['tahun_kliping']=$_POST['tahun'];
		$this->redirect('index');
	}

	public function actionDownload()
	{
		$model=new DownloadKlipingForm;
		$model->id_kliping = Yii::app()->getRequest()->getQuery('id');
		$id = Yii::app()->getRequest()->getQuery('id');
		if(isset($_POST['DownloadKlipingForm']))
		{
			$model->attributes=$_POST['DownloadKlipingForm'];
			if($model->validate())
			{
				$in=new DownloadKlipingModel;
				$in->attributes=$_POST['DownloadKlipingForm'];
				if($in->save())
				{
					$material = KlipingModel::model()->findByPk($id);
			        $src = Yii::app()->createAbsoluteUrl("/").'/themes/'.Yii::app()->theme->name.'/kliping_files/'.$material->nama_file;

			        $filecontent=file_get_contents($src);
					header("Content-Type: text/plain");
					header("Content-disposition: attachment; filename=$material->nama_file");
					header("Pragma: no-cache");
					echo $filecontent;
					exit;

					Yii::app()->user->setFlash('contact',"Terima kasih telah mengunduh kliping ini.");
					$this->refresh();
				}
				
			}
		}
		$this->renderPartial('download',array('model'=>$model), false, true);

	}

	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}
}