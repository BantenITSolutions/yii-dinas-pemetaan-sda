<?php

class DbiController extends Controller
{

	public $layout='main_bootstrap';

	public function init()
	{
		//Yii::app()->getComponent("bootstrap");
	}
	
	public function actionDetail()
	{
		$this->render('detail');
	}
	
	public function actionSet()
	{
		$get = explode("_",$_POST['set_param']);
		if($get[0]=="koridor"){Yii::app()->session['id_koridor']=$get[1];}
		else if($get[0]=="sektor"){Yii::app()->session['id_sektor']=$get[1];}
		else if($get[0]=="investasi"){Yii::app()->session['id_nilai_investasi']=$get[1];}
		else if($get[0]=="sumberdana"){Yii::app()->session['id_sumber_dana']=$get[1];}
		else if($get[0]=="kawasan"){Yii::app()->session['id_kawasan']=$get[1];}
	}

	public function actionIndex()
	{
        $criteria = new CDbCriteria;
        
        $cari = "";
        
        /*if(!empty(Yii::app()->session['id_koridor']) 
        	|| !empty(Yii::app()->session['id_sumber_dana'])
        	&& !empty(Yii::app()->session['id_sektor'])
        	&& !empty(Yii::app()->session['tahun_mulai'])
        	&& !empty(Yii::app()->session['tahun_selesai'])
        	&& !empty(Yii::app()->session['id_kawasan'])
        	&& !empty(Yii::app()->session['id_nama_proyek'])
        	&& !empty(Yii::app()->session['id_nilai_investasi'])
        	&& !empty(Yii::app()->session['id_pelaksana'])
        	&& !empty(Yii::app()->session['id_kategori'])){$id_koridor = "id_koridor = '".Yii::app()->session['id_koridor']."' ";}*/

		if(Yii::app()->session['id_koridor']=="semua"){$cari .= "";} else if(!empty(Yii::app()->session['id_koridor'])){$cari .= "id_koridor IN (".Yii::app()->session['id_koridor'].") ";}
		
		if(Yii::app()->session['id_sektor']=="semua"){$cari .= "";} else if(!empty(Yii::app()->session['id_sektor']) && $cari!==""){$cari .= "and id_sektor IN (".Yii::app()->session['id_sektor'].") ";}
		else if(!empty(Yii::app()->session['id_sektor'])){$cari .= "id_sektor IN (".Yii::app()->session['id_sektor'].") ";}
		
		if(Yii::app()->session['id_nilai_investasi']=="semua"){$cari .= "";} else if(!empty(Yii::app()->session['id_nilai_investasi']) && $cari!==""){$cari .= "and id_nilai_investasi IN (".Yii::app()->session['id_nilai_investasi'].") ";}
		else if(!empty(Yii::app()->session['id_nilai_investasi'])){$cari .= "id_nilai_investasi IN (".Yii::app()->session['id_nilai_investasi'].") ";}
		
		if(Yii::app()->session['id_sumber_dana']=="semua"){$cari .= "";} else if(!empty(Yii::app()->session['id_sumber_dana']) && $cari!==""){$cari .= "and id_sumber_dana IN (".Yii::app()->session['id_sumber_dana'].") ";}
		else if(!empty(Yii::app()->session['id_sumber_dana'])){$cari .= "id_sumber_dana IN (".Yii::app()->session['id_sumber_dana'].") ";}
		
		if(Yii::app()->session['id_kawasan']=="semua"){$cari .= "";} else if(!empty(Yii::app()->session['id_kawasan']) && $cari!==""){$cari .= "and id_kawasan IN (".Yii::app()->session['id_kawasan'].") ";}
		else if(!empty(Yii::app()->session['id_kawasan'])){$cari .= "id_kawasan IN (".Yii::app()->session['id_kawasan'].") ";}

		$criteria->condition = $cari;

        $dt = DbiModel::model()->findAll($criteria);

		$model=new DbiModel('search');
		$model->unsetAttributes();
		if(isset($_GET['DbiModel']))
			$model->attributes=$_GET['DbiModel'];

		$this->render('index',array(
			'model'=>$dt,
			'model2'=>$model,
		));
	}

	public function actionData()
	{
        $criteria = new CDbCriteria;
        
        $cari = "";
        
        /*if(!empty(Yii::app()->session['id_koridor']) 
        	|| !empty(Yii::app()->session['id_sumber_dana'])
        	&& !empty(Yii::app()->session['id_sektor'])
        	&& !empty(Yii::app()->session['tahun_mulai'])
        	&& !empty(Yii::app()->session['tahun_selesai'])
        	&& !empty(Yii::app()->session['id_kawasan'])
        	&& !empty(Yii::app()->session['id_nama_proyek'])
        	&& !empty(Yii::app()->session['id_nilai_investasi'])
        	&& !empty(Yii::app()->session['id_pelaksana'])
        	&& !empty(Yii::app()->session['id_kategori'])){$id_koridor = "id_koridor = '".Yii::app()->session['id_koridor']."' ";}*/

		if(Yii::app()->session['id_koridor']=="semua"){$cari .= "";} else if(!empty(Yii::app()->session['id_koridor'])){$cari .= "id_koridor IN (".Yii::app()->session['id_koridor'].") ";}
		
		if(Yii::app()->session['id_sektor']=="semua"){$cari .= "";} else if(!empty(Yii::app()->session['id_sektor']) && $cari!==""){$cari .= "and id_sektor IN (".Yii::app()->session['id_sektor'].") ";}
		else if(!empty(Yii::app()->session['id_sektor'])){$cari .= "id_sektor IN (".Yii::app()->session['id_sektor'].") ";}
		
		if(Yii::app()->session['id_nilai_investasi']=="semua"){$cari .= "";} else if(!empty(Yii::app()->session['id_nilai_investasi']) && $cari!==""){$cari .= "and id_nilai_investasi IN (".Yii::app()->session['id_nilai_investasi'].") ";}
		else if(!empty(Yii::app()->session['id_nilai_investasi'])){$cari .= "id_nilai_investasi IN (".Yii::app()->session['id_nilai_investasi'].") ";}
		
		if(Yii::app()->session['id_sumber_dana']=="semua"){$cari .= "";} else if(!empty(Yii::app()->session['id_sumber_dana']) && $cari!==""){$cari .= "and id_sumber_dana IN (".Yii::app()->session['id_sumber_dana'].") ";}
		else if(!empty(Yii::app()->session['id_sumber_dana'])){$cari .= "id_sumber_dana IN (".Yii::app()->session['id_sumber_dana'].") ";}
		
		if(Yii::app()->session['id_kawasan']=="semua"){$cari .= "";} else if(!empty(Yii::app()->session['id_kawasan']) && $cari!==""){$cari .= "and id_kawasan IN (".Yii::app()->session['id_kawasan'].") ";}
		else if(!empty(Yii::app()->session['id_kawasan'])){$cari .= "id_kawasan IN (".Yii::app()->session['id_kawasan'].") ";}

		$criteria->condition = $cari; 

        $dt = DbiModel::model()->findAll($criteria);

		$model=new DbiModel('search');
		$model->unsetAttributes();  // clear any default values

		$this->render('iframe',array(
			'model'=>$dt,
			'model2'=>$model,
		));
	}

	public function actionAct()
	{
		$id_koridor = "";
		if(!empty($_POST['id_koridor']))
		{
			for($i=0;$i<count($_POST['id_koridor']);$i++)
			{
				if($id_koridor==""){ $id_koridor .= $_POST['id_koridor'][$i]; }
				else { $id_koridor .= ",".$_POST['id_koridor'][$i]; }
			}
			Yii::app()->session['id_koridor']=$id_koridor;
		}
		else
		{
			Yii::app()->session['id_koridor']="";
		}
		
		$id_sektor = "";
		if(!empty($_POST['id_sektor']))
		{
			for($i=0;$i<count($_POST['id_sektor']);$i++)
			{
				if($id_sektor==""){ $id_sektor .= $_POST['id_sektor'][$i]; }
				else { $id_sektor .= ",".$_POST['id_sektor'][$i]; }
			}
			Yii::app()->session['id_sektor']=$id_sektor;
		}
		else
		{
			Yii::app()->session['id_sektor']="";
		}
		
		$id_kategori = "";
		if(!empty($_POST['id_kategori']))
		{
			for($i=0;$i<count($_POST['id_kategori']);$i++)
			{
				if($id_kategori==""){ $id_kategori .= $_POST['id_kategori'][$i]; }
				else { $id_kategori .= ",".$_POST['id_kategori'][$i]; }
			}
			Yii::app()->session['id_kategori']=$id_kategori;
		}
		else
		{
			Yii::app()->session['id_kategori']="";
		}

		$this->redirect('index');
	}
}