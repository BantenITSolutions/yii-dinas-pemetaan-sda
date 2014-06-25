<?php

class Proyek_prioritasController extends Controller
{
	public function init()
	{
		if (Yii::app()->user->isGuest) 
		{
			$this->redirect(array("site/index"));
		}
	}

	public $layout='main_proyek_prioritas';

	public function actionExcel_private()
	{
		if (Yii::app()->user->isGuest) 
		{
			$this->redirect(array("site/index"));
		}
		else
		{
			$criteria=new CDbCriteria;
			$cari = "";
			$param_id = "";
			$dt = ProyekPrioritasDashboardModel::model()->findAll();
			foreach($dt as $d)
			{
				if(empty($param_id))
				{
					$param_id = $d->id_infrastruktur;
				}
				else
				{
					$param_id .= ",".$d->id_infrastruktur;
				}
			}
			if($param_id==""){$cari .= "";} else if(!empty($param_id) && $cari!==""){$cari .= "and id_infrastruktur IN (".$param_id.") ";}
			else if(!empty($param_id)){$cari .= "id_infrastruktur IN (".$param_id.") ";}

			$criteria->condition = $cari; 

			$model=new ProyekPrioritasModel($cari);

			$this->widget('ext.phpexcel.EExcelView', array(
		        'grid_mode'=>'export',
		        'title' => "Proyek Prioritas",
				'dataProvider'=>$model->search(),	
				'columns'=>array(
					   array(
				      'header'=>'No',
			          'name'=>'id_infrastruktur',
				      ),
			           array(
				      	'header'=>'Koridor',
			             'name'=>'id_koridor',
			             'value'=>'strip_tags($data->Koridor->koridor)',
			           ),
			           array(
				      	'header'=>'Sektor',
			             'name'=>'id_sektor',
			             'value'=>'strip_tags($data->Sektor->sektor)',
			           ),
			           array(
				      	'header'=>'Sumber Dana',
			             'name'=>'id_sumber_dana',
			             'value'=>'strip_tags($data->SumberDana->sumber_dana)',
			           ),
			           array(
				      	'header'=>'Nama Proyek',
			             'name'=>'nama_proyek',
			           ),
			           array(
				      	'header'=>'Nilai Investasi',
			             'name'=>'id_nilai_investasi',
			             'value'=>'strip_tags($data->NilaiInvestasi->nilai_investasi)',
			           ),
			           array(
				      	'header'=>'Mulai',
			             'name'=>'mulai',
			           ),
			           array(
				      	'header'=>'Selesai',
			             'name'=>'selesai',
			           ),
			           array(
				      	'header'=>'Gb',
			             'name'=>'gb',
			           ),
			           array(
				      	'header'=>'Provinsi',
			             'name'=>'provinsi',
			           ),
			           array(
				      	'header'=>'Status Selesai Proyek',
			             'name'=>'status_selesai_proyek',
			           ),
			           array(
				      	'header'=>'Pelaksana',
			             'name'=>'id_pelaksana',
			           ),
			           array(
				      	'header'=>'Status Proyek',
			             'name'=>'status_proyek',
			           ),
			           array(
				      	'header'=>'Kawasan',
			             'name'=>'id_kawasan',
			             'value'=>'strip_tags($data->Kawasan->kawasan)',
			           ),
			           array(
				      	'header'=>'Sumber Usulan',
			             'name'=>'sumber_usulan',
			           ),
			           array(
				      	'header'=>'Detail Surat / Usulan',
			             'name'=>'detail_surat_usulan',
			           ),
			           array(
				      	'header'=>'Perubahan Kepres Lama',
			             'name'=>'perubahan_kepres_lama',
			           ),
			           array(
				      	'header'=>'Kategori',
			             'name'=>'id_kategori',
			             'value'=>'strip_tags($data->Kategori->kategori)',
			           ),
			           array(
			             'name'=>'evaluasi_konsinyering_kp3ei',
			           ),
			           array(
			             'name'=>'alokasi_apbn_apbd_2012',
			           ),
			           array(
			             'name'=>'alasan_evaluasi',
			           ),
			           array(
			             'name'=>'nilai_strategis_proyek',
			           ),
			           array(
			             'name'=>'pagu_definitif_apbn_apbd_2011',
			           ),
			           array(
			             'name'=>'pagu_definitif_apbn_apbd_2012',
			           ),
			           array(
			             'name'=>'pagu_definitif_apbn_apbd_2013',
			           ),
			           array(
			             'name'=>'penyerapan_2013',
			           ),
			           array(
			             'name'=>'pagu_indikatif_apbn_2014',
			           ),
			           array(
			             'name'=>'pagu_definitif_apbn_2014',
			           ),
			           array(
			             'name'=>'alokasi_perencanaan_bumn_2011',
			           ),
			           array(
			             'name'=>'alokasi_perencanaan_bumn_2012',
			           ),
			           array(
			             'name'=>'alokasi_perencanaan_bumn_2013',
			           ),
			           array(
			             'name'=>'alokasi_perencanaan_bumn_2014',
			           ),
			           array(
			             'name'=>'perencanaan_alokasi_swasta_2011',
			           ),
			           array(
			             'name'=>'perencanaan_alokasi_swasta_2012',
			           ),
			           array(
			             'name'=>'perencanaan_alokasi_swasta_2013',
			           ),
			           array(
			             'name'=>'perencanaan_alokasi_swasta_2014',
			           ),
				),
			));
		}
	}

	public function actionClear_filter()
	{
		Yii::app()->session['id_koridor']="";
		Yii::app()->session['id_sektor']="";
		Yii::app()->session['nama_proyek'] = "";

		?><script type="text/javascript">window.top.location.href='<?php echo Yii::app()->baseUrl; ?>/proyek_prioritas';</script><?php
	}

	public function actionReset_columns()
	{
		$names = ProyekPrioritasModel::model()->getAttributes(); 
		foreach($names as $key => $value)
		{
			Yii::app()->session[$key."_dbi"] = TRUE;
		}
		?><script type="text/javascript">window.top.location.href='<?php echo Yii::app()->baseUrl; ?>/proyek_prioritas';</script><?php
	}
	
	public function actionDetail()
	{
		$this->render('detail');
	}
	
	public function actionColumns()
	{
		$model=new ProyekPrioritasModel;

		if(isset($_POST['ProyekPrioritasModel']))
		{
			$model->attributes=$_POST['ProyekPrioritasModel'];
			foreach($model->attributes as $key => $value)
			{
				Yii::app()->session[$key."_dbi"] = $value;
			}
				?><script type="text/javascript">window.top.location.href='<?php echo Yii::app()->baseUrl; ?>/proyek_prioritas';</script><?php
		}

		$this->render('coloumns',array(
			'model'=>$model,
		));
	}
	
	public function actionSet()
	{
		$get = explode("_",$_POST['set_param']);
		if($get[0]=="koridor"){Yii::app()->session['id_koridor']=$get[1];}
		else if($get[0]=="sektor"){Yii::app()->session['id_sektor']=$get[1];}
		else if($get[0]=="investasi"){Yii::app()->session['id_nilai_investasi']=$get[1];}
		else if($get[0]=="sumberdana"){Yii::app()->session['id_sumber_dana']=$get[1];}
		else if($get[0]=="kawasan"){Yii::app()->session['id_kawasan']=$get[1];}
		else if($get[0]=="pelaksana"){Yii::app()->session['id_pelaksana']=$get[1];}
		else if($get[0]=="kategori"){Yii::app()->session['id_kategori']=$get[1];}
	}
	
	public function actionSet_Field()
	{
		$get = explode("_",$_POST['set_param']);
		if($get[0]=="nama-proyek"){Yii::app()->session['nama_proyek']=$get[1];}
		else if($get[0]=="mulai"){Yii::app()->session['mulai']=$get[1];}
		else if($get[0]=="selesai"){Yii::app()->session['selesai']=$get[1];}
		else if($get[0]=="gb"){Yii::app()->session['gb']=$get[1];}
		else if($get[0]=="provinsi"){Yii::app()->session['provinsi']=$get[1];}
		else if($get[0]=="status-selesai-proyek"){Yii::app()->session['status_selesai_proyek']=$get[1];}
		else if($get[0]=="status-proyek"){Yii::app()->session['status_proyek']=$get[1];}
		else if($get[0]=="sumber-usulan"){Yii::app()->session['sumber_usulan']=$get[1];}
		else if($get[0]=="perubahan-kepres-lama"){Yii::app()->session['perubahan_kepres_lama']=$get[1];}
		else if($get[0]=="alokasi-apbn-apbd-2011"){Yii::app()->session['alokasi_apbn_apbd_2011']=$get[1];}
		else if($get[0]=="alokasi-apbn-apbd-2012"){Yii::app()->session['alokasi_apbn_apbd_2012']=$get[1];}
		else if($get[0]=="pagu-apbn-2013"){Yii::app()->session['pagu_apbn_2013']=$get[1];}
		else if($get[0]=="rkp-apbn-2014"){Yii::app()->session['rkp_apbn_2014']=$get[1];}
		else if($get[0]=="alokasi-bumn-2011"){Yii::app()->session['alokasi_bumn_2011']=$get[1];}
		else if($get[0]=="alokasi-bumn-2012	"){Yii::app()->session['alokasi_bumn_2012']=$get[1];}
		else if($get[0]=="alokasi-bumn-2013"){Yii::app()->session['alokasi_bumn_2013']=$get[1];}
		else if($get[0]=="alokasi-bumn-2014"){Yii::app()->session['alokasi_bumn_2014']=$get[1];}
		else if($get[0]=="alokasi-swasta-2011"){Yii::app()->session['alokasi_swasta_2011']=$get[1];}
		else if($get[0]=="alokasi-swasta-2012"){Yii::app()->session['alokasi_swasta_2012']=$get[1];}
		else if($get[0]=="alokasi-swasta-2013"){Yii::app()->session['alokasi_swasta_2013']=$get[1];}
		else if($get[0]=="alokasi-swasta-2014"){Yii::app()->session['alokasi_swasta_2014']=$get[1];}
	}
	
	public function actionSet_Resolusi()
	{
		Yii::app()->session['resolusi']=$_POST['set_resolusi'];
	}

	public function actionIndex()
	{
		if(empty(Yii::app()->session['resolusi'])){Yii::app()->session['resolusi']=1000;}
        $criteria = new CDbCriteria;
        
        $cari = "";
		
		if(empty(Yii::app()->session['nama_proyek'])){$cari .= "";} else if(!empty(Yii::app()->session['nama_proyek']) && $cari!==""){$cari .= "and nama_proyek like '%".Yii::app()->session['nama_proyek']."%'  ";}
		else if(!empty(Yii::app()->session['nama_proyek'])){$cari .= "nama_proyek like '%".Yii::app()->session['nama_proyek']."%' ";}
		
		if(empty(Yii::app()->session['mulai'])){$cari .= "";} else if(!empty(Yii::app()->session['mulai']) && $cari!==""){$cari .= "and mulai like '%".Yii::app()->session['mulai']."%'  ";}
		else if(!empty(Yii::app()->session['mulai'])){$cari .= "mulai like '%".Yii::app()->session['mulai']."%' ";}
		
		if(empty(Yii::app()->session['selesai'])){$cari .= "";} else if(!empty(Yii::app()->session['selesai']) && $cari!==""){$cari .= "and selesai like '%".Yii::app()->session['selesai']."%'  ";}
		else if(!empty(Yii::app()->session['selesai'])){$cari .= "selesai like '%".Yii::app()->session['selesai']."%' ";}
		
		if(empty(Yii::app()->session['gb'])){$cari .= "";} else if(!empty(Yii::app()->session['gb']) && $cari!==""){$cari .= "and gb like '%".Yii::app()->session['gb']."%'  ";}
		else if(!empty(Yii::app()->session['gb'])){$cari .= "gb like '%".Yii::app()->session['gb']."%' ";}
		
		if(empty(Yii::app()->session['provinsi'])){$cari .= "";} else if(!empty(Yii::app()->session['provinsi']) && $cari!==""){$cari .= "and provinsi like '%".Yii::app()->session['provinsi']."%'  ";}
		else if(!empty(Yii::app()->session['provinsi'])){$cari .= "provinsi like '%".Yii::app()->session['provinsi']."%' ";}
		
		if(empty(Yii::app()->session['status_selesai_proyek'])){$cari .= "";} else if(!empty(Yii::app()->session['status_selesai_proyek']) && $cari!==""){$cari .= "and status_selesai_proyek like '%".Yii::app()->session['status_selesai_proyek']."%'  ";}
		else if(!empty(Yii::app()->session['status_selesai_proyek'])){$cari .= "status_selesai_proyek like '%".Yii::app()->session['status_selesai_proyek']."%' ";}
		
		if(empty(Yii::app()->session['status_proyek'])){$cari .= "";} else if(!empty(Yii::app()->session['status_proyek']) && $cari!==""){$cari .= "and status_proyek like '%".Yii::app()->session['status_proyek']."%'  ";}
		else if(!empty(Yii::app()->session['status_proyek'])){$cari .= "status_proyek like '%".Yii::app()->session['status_proyek']."%' ";}
		
		if(empty(Yii::app()->session['sumber_usulan'])){$cari .= "";} else if(!empty(Yii::app()->session['sumber_usulan']) && $cari!==""){$cari .= "and sumber_usulan like '%".Yii::app()->session['sumber_usulan']."%'  ";}
		else if(!empty(Yii::app()->session['sumber_usulan'])){$cari .= "sumber_usulan like '%".Yii::app()->session['sumber_usulan']."%' ";}
		
		if(empty(Yii::app()->session['detail_surat_usulan'])){$cari .= "";} else if(!empty(Yii::app()->session['detail_surat_usulan']) && $cari!==""){$cari .= "and detail_surat_usulan like '%".Yii::app()->session['detail_surat_usulan']."%'  ";}
		else if(!empty(Yii::app()->session['detail_surat_usulan'])){$cari .= "detail_surat_usulan like '%".Yii::app()->session['detail_surat_usulan']."%' ";}
		
		if(empty(Yii::app()->session['perubahan_kepres_lama'])){$cari .= "";} else if(!empty(Yii::app()->session['perubahan_kepres_lama']) && $cari!==""){$cari .= "and perubahan_kepres_lama like '%".Yii::app()->session['perubahan_kepres_lama']."%'  ";}
		else if(!empty(Yii::app()->session['perubahan_kepres_lama'])){$cari .= "perubahan_kepres_lama like '%".Yii::app()->session['perubahan_kepres_lama']."%' ";}
		
		if(empty(Yii::app()->session['evaluasi_konsinyering_kp3ei'])){$cari .= "";} else if(!empty(Yii::app()->session['evaluasi_konsinyering_kp3ei']) && $cari!==""){$cari .= "and evaluasi_konsinyering_kp3ei like '%".Yii::app()->session['evaluasi_konsinyering_kp3ei']."%'  ";}
		else if(!empty(Yii::app()->session['evaluasi_konsinyering_kp3ei'])){$cari .= "evaluasi_konsinyering_kp3ei like '%".Yii::app()->session['evaluasi_konsinyering_kp3ei']."%' ";}
		
		if(empty(Yii::app()->session['alasan_evaluasi'])){$cari .= "";} else if(!empty(Yii::app()->session['alasan_evaluasi']) && $cari!==""){$cari .= "and alasan_evaluasi like '%".Yii::app()->session['alasan_evaluasi']."%'  ";}
		else if(!empty(Yii::app()->session['alasan_evaluasi'])){$cari .= "alasan_evaluasi like '%".Yii::app()->session['alasan_evaluasi']."%' ";}
		
		if(empty(Yii::app()->session['nilai_strategis_proyek'])){$cari .= "";} else if(!empty(Yii::app()->session['nilai_strategis_proyek']) && $cari!==""){$cari .= "and nilai_strategis_proyek like '%".Yii::app()->session['nilai_strategis_proyek']."%'  ";}
		else if(!empty(Yii::app()->session['nilai_strategis_proyek'])){$cari .= "nilai_strategis_proyek like '%".Yii::app()->session['nilai_strategis_proyek']."%' ";}
		
		if(empty(Yii::app()->session['pagu_definitif_apbn_apbd_2011'])){$cari .= "";} else if(!empty(Yii::app()->session['pagu_definitif_apbn_apbd_2011']) && $cari!==""){$cari .= "and pagu_definitif_apbn_apbd_2011 like '%".Yii::app()->session['pagu_definitif_apbn_apbd_2011']."%'  ";}
		else if(!empty(Yii::app()->session['pagu_definitif_apbn_apbd_2011'])){$cari .= "pagu_definitif_apbn_apbd_2011 like '%".Yii::app()->session['pagu_definitif_apbn_apbd_2011']."%' ";}
		
		if(empty(Yii::app()->session['pagu_definitif_apbn_apbd_2012'])){$cari .= "";} else if(!empty(Yii::app()->session['pagu_definitif_apbn_apbd_2012']) && $cari!==""){$cari .= "and pagu_definitif_apbn_apbd_2012 like '%".Yii::app()->session['pagu_definitif_apbn_apbd_2012']."%'  ";}
		else if(!empty(Yii::app()->session['pagu_definitif_apbn_apbd_2012'])){$cari .= "pagu_definitif_apbn_apbd_2012 like '%".Yii::app()->session['pagu_definitif_apbn_apbd_2012']."%' ";}
		
		if(empty(Yii::app()->session['pagu_definitif_apbn_apbd_2013'])){$cari .= "";} else if(!empty(Yii::app()->session['pagu_definitif_apbn_apbd_2013']) && $cari!==""){$cari .= "and pagu_definitif_apbn_apbd_2013 like '%".Yii::app()->session['pagu_definitif_apbn_apbd_2013']."%'  ";}
		else if(!empty(Yii::app()->session['pagu_definitif_apbn_apbd_2013'])){$cari .= "pagu_definitif_apbn_apbd_2013 like '%".Yii::app()->session['pagu_definitif_apbn_apbd_2013']."%' ";}
		
		if(empty(Yii::app()->session['penyerapan_2013'])){$cari .= "";} else if(!empty(Yii::app()->session['penyerapan_2013']) && $cari!==""){$cari .= "and penyerapan_2013 like '%".Yii::app()->session['penyerapan_2013']."%'  ";}
		else if(!empty(Yii::app()->session['penyerapan_2013'])){$cari .= "penyerapan_2013 like '%".Yii::app()->session['penyerapan_2013']."%' ";}
		
		if(empty(Yii::app()->session['pagu_indikatif_apbn_2014'])){$cari .= "";} else if(!empty(Yii::app()->session['pagu_indikatif_apbn_2014']) && $cari!==""){$cari .= "and pagu_indikatif_apbn_2014 like '%".Yii::app()->session['pagu_indikatif_apbn_2014']."%'  ";}
		else if(!empty(Yii::app()->session['pagu_indikatif_apbn_2014'])){$cari .= "pagu_indikatif_apbn_2014 like '%".Yii::app()->session['pagu_indikatif_apbn_2014']."%' ";}
		
		if(empty(Yii::app()->session['pagu_definitif_apbn_2014'])){$cari .= "";} else if(!empty(Yii::app()->session['pagu_definitif_apbn_2014']) && $cari!==""){$cari .= "and pagu_definitif_apbn_2014 like '%".Yii::app()->session['pagu_definitif_apbn_2014']."%'  ";}
		else if(!empty(Yii::app()->session['pagu_definitif_apbn_2014'])){$cari .= "pagu_definitif_apbn_2014 like '%".Yii::app()->session['pagu_definitif_apbn_2014']."%' ";}
		
		if(empty(Yii::app()->session['alokasi_perencanaan_bumn_2011'])){$cari .= "";} else if(!empty(Yii::app()->session['alokasi_perencanaan_bumn_2011']) && $cari!==""){$cari .= "and alokasi_perencanaan_bumn_2011 like '%".Yii::app()->session['alokasi_perencanaan_bumn_2011']."%'  ";}
		else if(!empty(Yii::app()->session['alokasi_perencanaan_bumn_2011'])){$cari .= "alokasi_perencanaan_bumn_2011 like '%".Yii::app()->session['alokasi_perencanaan_bumn_2011']."%' ";}
		
		if(empty(Yii::app()->session['alokasi_perencanaan_bumn_2012'])){$cari .= "";} else if(!empty(Yii::app()->session['alokasi_perencanaan_bumn_2012']) && $cari!==""){$cari .= "and alokasi_perencanaan_bumn_2012 like '%".Yii::app()->session['alokasi_perencanaan_bumn_2012']."%'  ";}
		else if(!empty(Yii::app()->session['alokasi_perencanaan_bumn_2012'])){$cari .= "alokasi_perencanaan_bumn_2012 like '%".Yii::app()->session['alokasi_perencanaan_bumn_2012']."%' ";}
		
		if(empty(Yii::app()->session['alokasi_perencanaan_bumn_2013'])){$cari .= "";} else if(!empty(Yii::app()->session['alokasi_perencanaan_bumn_2013']) && $cari!==""){$cari .= "and alokasi_perencanaan_bumn_2013 like '%".Yii::app()->session['alokasi_perencanaan_bumn_2013']."%'  ";}
		else if(!empty(Yii::app()->session['alokasi_perencanaan_bumn_2013'])){$cari .= "alokasi_perencanaan_bumn_2013 like '%".Yii::app()->session['alokasi_perencanaan_bumn_2013']."%' ";}
		
		if(empty(Yii::app()->session['alokasi_perencanaan_bumn_2014'])){$cari .= "";} else if(!empty(Yii::app()->session['alokasi_perencanaan_bumn_2014']) && $cari!==""){$cari .= "and alokasi_perencanaan_bumn_2014 like '%".Yii::app()->session['alokasi_perencanaan_bumn_2014']."%'  ";}
		else if(!empty(Yii::app()->session['alokasi_perencanaan_bumn_2014'])){$cari .= "alokasi_perencanaan_bumn_2014 like '%".Yii::app()->session['alokasi_perencanaan_bumn_2014']."%' ";}
		
		if(empty(Yii::app()->session['perencanaan_alokasi_swasta_2011'])){$cari .= "";} else if(!empty(Yii::app()->session['perencanaan_alokasi_swasta_2011']) && $cari!==""){$cari .= "and perencanaan_alokasi_swasta_2011 like '%".Yii::app()->session['perencanaan_alokasi_swasta_2011']."%'  ";}
		else if(!empty(Yii::app()->session['perencanaan_alokasi_swasta_2011'])){$cari .= "perencanaan_alokasi_swasta_2011 like '%".Yii::app()->session['perencanaan_alokasi_swasta_2011']."%' ";}
		
		if(empty(Yii::app()->session['perencanaan_alokasi_swasta_2012'])){$cari .= "";} else if(!empty(Yii::app()->session['perencanaan_alokasi_swasta_2012']) && $cari!==""){$cari .= "and perencanaan_alokasi_swasta_2012 like '%".Yii::app()->session['perencanaan_alokasi_swasta_2012']."%'  ";}
		else if(!empty(Yii::app()->session['perencanaan_alokasi_swasta_2012'])){$cari .= "perencanaan_alokasi_swasta_2012 like '%".Yii::app()->session['perencanaan_alokasi_swasta_2012']."%' ";}
		
		if(empty(Yii::app()->session['perencanaan_alokasi_swasta_2013'])){$cari .= "";} else if(!empty(Yii::app()->session['perencanaan_alokasi_swasta_2013']) && $cari!==""){$cari .= "and perencanaan_alokasi_swasta_2013 like '%".Yii::app()->session['perencanaan_alokasi_swasta_2013']."%'  ";}
		else if(!empty(Yii::app()->session['perencanaan_alokasi_swasta_2013'])){$cari .= "perencanaan_alokasi_swasta_2013 like '%".Yii::app()->session['perencanaan_alokasi_swasta_2013']."%' ";}
		
		if(empty(Yii::app()->session['perencanaan_alokasi_swasta_2014'])){$cari .= "";} else if(!empty(Yii::app()->session['perencanaan_alokasi_swasta_2014']) && $cari!==""){$cari .= "and perencanaan_alokasi_swasta_2014 like '%".Yii::app()->session['perencanaan_alokasi_swasta_2014']."%'  ";}
		else if(!empty(Yii::app()->session['perencanaan_alokasi_swasta_2014'])){$cari .= "perencanaan_alokasi_swasta_2014 like '%".Yii::app()->session['perencanaan_alokasi_swasta_2014']."%' ";}


		if(is_array(Yii::app()->session['id_koridor']))
		{
			$param_koridor = "";
			for($i=0;$i<count(Yii::app()->session['id_koridor']);$i++)
			{
				if(!empty($param_koridor))
				{
					$param_koridor = $param_koridor.','.Yii::app()->session['id_koridor'][$i];
				}
				else
				{
					$param_koridor = Yii::app()->session['id_koridor'][$i];
				}
			}

			if(Yii::app()->session['id_koridor']==""){$cari .= "";} else if(!empty(Yii::app()->session['id_koridor']) && $cari!==""){$cari .= "and id_koridor IN (".$param_koridor.") ";}
			else if(!empty(Yii::app()->session['id_koridor'])){$cari .= "id_koridor IN (".$param_koridor.") ";}
		}
		else
		{
			if(Yii::app()->session['id_koridor']==""){$cari .= "";} else if(!empty(Yii::app()->session['id_koridor']) && $cari!==""){$cari .= "and id_koridor = '".Yii::app()->session['id_koridor']."' ";}
			else if(!empty(Yii::app()->session['id_koridor'])){$cari .= "id_koridor = '".Yii::app()->session['id_koridor']."' ";}
		}

		if(is_array(Yii::app()->session['id_sektor']))
		{
			$param_sektor = "";
			for($i=0;$i<count(Yii::app()->session['id_sektor']);$i++)
			{
				if(!empty($param_sektor))
				{
					$param_sektor = $param_sektor.','.Yii::app()->session['id_sektor'][$i];
				}
				else
				{
					$param_sektor = Yii::app()->session['id_sektor'][$i];
				}
			}

			if(Yii::app()->session['id_sektor']==""){$cari .= "";} else if(!empty(Yii::app()->session['id_sektor']) && $cari!==""){$cari .= "and id_sektor IN (".$param_sektor.") ";}
			else if(!empty(Yii::app()->session['id_sektor'])){$cari .= "id_sektor IN (".$param_sektor.") ";}
		}
		else
		{
			if(Yii::app()->session['id_sektor']==""){$cari .= "";} else if(!empty(Yii::app()->session['id_sektor']) && $cari!==""){$cari .= "and id_sektor = '".Yii::app()->session['id_sektor']."' ";}
			else if(!empty(Yii::app()->session['id_sektor'])){$cari .= "id_sektor = '".Yii::app()->session['id_sektor']."' ";}
		}
		
		if(Yii::app()->session['id_sumber_dana']==""){$cari .= "";} else if(!empty(Yii::app()->session['id_sumber_dana']) && $cari!==""){$cari .= "and id_sumber_dana = '".Yii::app()->session['id_sumber_dana']."' ";}
		else if(!empty(Yii::app()->session['id_sumber_dana'])){$cari .= "id_sumber_dana = '".Yii::app()->session['id_sumber_dana']."' ";}
		
		if(Yii::app()->session['id_kawasan']==""){$cari .= "";} else if(!empty(Yii::app()->session['id_kawasan']) && $cari!==""){$cari .= "and id_kawasan = '".Yii::app()->session['id_kawasan']."' ";}
		else if(!empty(Yii::app()->session['id_kawasan'])){$cari .= "id_kawasan = '".Yii::app()->session['id_kawasan']."' ";}
		
		if(Yii::app()->session['id_nilai_investasi']==""){$cari .= "";} else if(!empty(Yii::app()->session['id_nilai_investasi']) && $cari!==""){$cari .= "and id_nilai_investasi = '".Yii::app()->session['id_nilai_investasi']."' ";}
		else if(!empty(Yii::app()->session['id_nilai_investasi'])){$cari .= "id_nilai_investasi = '".Yii::app()->session['id_nilai_investasi']."' ";}
		
		if(Yii::app()->session['id_pelaksana']=="semua"){$cari .= "";} else if(!empty(Yii::app()->session['id_pelaksana']) && $cari!==""){$cari .= "and id_pelaksana = '".Yii::app()->session['id_pelaksana']."' ";}
		else if(!empty(Yii::app()->session['id_pelaksana'])){$cari .= "id_pelaksana = '".Yii::app()->session['id_pelaksana']."' ";}
		
		if(Yii::app()->session['id_kategori']=="semua"){$cari .= "";} else if(!empty(Yii::app()->session['id_kategori']) && $cari!==""){$cari .= "and id_kategori = '".Yii::app()->session['id_kategori']."' ";}
		else if(!empty(Yii::app()->session['id_kategori'])){$cari .= "id_kategori = '".Yii::app()->session['id_kategori']."' ";}


		$param_id = "";
		$dt = ProyekPrioritasDashboardModel::model()->findAll();
		foreach($dt as $d)
		{
			if(empty($param_id))
			{
				$param_id = $d->id_infrastruktur;
			}
			else
			{
				$param_id .= ",".$d->id_infrastruktur;
			}
		}
		if($param_id==""){$cari .= "";} else if(!empty($param_id) && $cari!==""){$cari .= "and id_infrastruktur IN (".$param_id.") ";}
		else if(!empty($param_id)){$cari .= "id_infrastruktur IN (".$param_id.") ";}

		$criteria->condition = $cari;

        $dt = ProyekPrioritasModel::model()->findAll($criteria);

		$model=new ProyekPrioritasModel('search');
		$model->unsetAttributes();
		if(isset($_GET['ProyekPrioritasModel']))
			$model->attributes=$_GET['ProyekPrioritasModel'];

		$this->render('index',array(
			'model'=>$dt,
			'model2'=>$model,
		));
	}

	public function actionData()
	{
        $criteria = new CDbCriteria;
        
        $cari = "";
		
		if(empty(Yii::app()->session['nama_proyek'])){$cari .= "";} else if(!empty(Yii::app()->session['nama_proyek']) && $cari!==""){$cari .= "and nama_proyek like '%".Yii::app()->session['nama_proyek']."%'  ";}
		else if(!empty(Yii::app()->session['nama_proyek'])){$cari .= "nama_proyek like '%".Yii::app()->session['nama_proyek']."%' ";}
		
		if(empty(Yii::app()->session['mulai'])){$cari .= "";} else if(!empty(Yii::app()->session['mulai']) && $cari!==""){$cari .= "and mulai like '%".Yii::app()->session['mulai']."%'  ";}
		else if(!empty(Yii::app()->session['mulai'])){$cari .= "mulai like '%".Yii::app()->session['mulai']."%' ";}
		
		if(empty(Yii::app()->session['selesai'])){$cari .= "";} else if(!empty(Yii::app()->session['selesai']) && $cari!==""){$cari .= "and selesai like '%".Yii::app()->session['selesai']."%'  ";}
		else if(!empty(Yii::app()->session['selesai'])){$cari .= "selesai like '%".Yii::app()->session['selesai']."%' ";}
		
		if(empty(Yii::app()->session['gb'])){$cari .= "";} else if(!empty(Yii::app()->session['gb']) && $cari!==""){$cari .= "and gb like '%".Yii::app()->session['gb']."%'  ";}
		else if(!empty(Yii::app()->session['gb'])){$cari .= "gb like '%".Yii::app()->session['gb']."%' ";}
		
		if(empty(Yii::app()->session['provinsi'])){$cari .= "";} else if(!empty(Yii::app()->session['provinsi']) && $cari!==""){$cari .= "and provinsi like '%".Yii::app()->session['provinsi']."%'  ";}
		else if(!empty(Yii::app()->session['provinsi'])){$cari .= "provinsi like '%".Yii::app()->session['provinsi']."%' ";}
		
		if(empty(Yii::app()->session['status_selesai_proyek'])){$cari .= "";} else if(!empty(Yii::app()->session['status_selesai_proyek']) && $cari!==""){$cari .= "and status_selesai_proyek like '%".Yii::app()->session['status_selesai_proyek']."%'  ";}
		else if(!empty(Yii::app()->session['status_selesai_proyek'])){$cari .= "status_selesai_proyek like '%".Yii::app()->session['status_selesai_proyek']."%' ";}
		
		if(empty(Yii::app()->session['status_proyek'])){$cari .= "";} else if(!empty(Yii::app()->session['status_proyek']) && $cari!==""){$cari .= "and status_proyek like '%".Yii::app()->session['status_proyek']."%'  ";}
		else if(!empty(Yii::app()->session['status_proyek'])){$cari .= "status_proyek like '%".Yii::app()->session['status_proyek']."%' ";}
		
		if(empty(Yii::app()->session['sumber_usulan'])){$cari .= "";} else if(!empty(Yii::app()->session['sumber_usulan']) && $cari!==""){$cari .= "and sumber_usulan like '%".Yii::app()->session['sumber_usulan']."%'  ";}
		else if(!empty(Yii::app()->session['sumber_usulan'])){$cari .= "sumber_usulan like '%".Yii::app()->session['sumber_usulan']."%' ";}
		
		if(empty(Yii::app()->session['detail_surat_usulan'])){$cari .= "";} else if(!empty(Yii::app()->session['detail_surat_usulan']) && $cari!==""){$cari .= "and detail_surat_usulan like '%".Yii::app()->session['detail_surat_usulan']."%'  ";}
		else if(!empty(Yii::app()->session['detail_surat_usulan'])){$cari .= "detail_surat_usulan like '%".Yii::app()->session['detail_surat_usulan']."%' ";}
		
		if(empty(Yii::app()->session['perubahan_kepres_lama'])){$cari .= "";} else if(!empty(Yii::app()->session['perubahan_kepres_lama']) && $cari!==""){$cari .= "and perubahan_kepres_lama like '%".Yii::app()->session['perubahan_kepres_lama']."%'  ";}
		else if(!empty(Yii::app()->session['perubahan_kepres_lama'])){$cari .= "perubahan_kepres_lama like '%".Yii::app()->session['perubahan_kepres_lama']."%' ";}
		
		if(empty(Yii::app()->session['evaluasi_konsinyering_kp3ei'])){$cari .= "";} else if(!empty(Yii::app()->session['evaluasi_konsinyering_kp3ei']) && $cari!==""){$cari .= "and evaluasi_konsinyering_kp3ei like '%".Yii::app()->session['evaluasi_konsinyering_kp3ei']."%'  ";}
		else if(!empty(Yii::app()->session['evaluasi_konsinyering_kp3ei'])){$cari .= "evaluasi_konsinyering_kp3ei like '%".Yii::app()->session['evaluasi_konsinyering_kp3ei']."%' ";}
		
		if(empty(Yii::app()->session['alasan_evaluasi'])){$cari .= "";} else if(!empty(Yii::app()->session['alasan_evaluasi']) && $cari!==""){$cari .= "and alasan_evaluasi like '%".Yii::app()->session['alasan_evaluasi']."%'  ";}
		else if(!empty(Yii::app()->session['alasan_evaluasi'])){$cari .= "alasan_evaluasi like '%".Yii::app()->session['alasan_evaluasi']."%' ";}
		
		if(empty(Yii::app()->session['nilai_strategis_proyek'])){$cari .= "";} else if(!empty(Yii::app()->session['nilai_strategis_proyek']) && $cari!==""){$cari .= "and nilai_strategis_proyek like '%".Yii::app()->session['nilai_strategis_proyek']."%'  ";}
		else if(!empty(Yii::app()->session['nilai_strategis_proyek'])){$cari .= "nilai_strategis_proyek like '%".Yii::app()->session['nilai_strategis_proyek']."%' ";}
		
		if(empty(Yii::app()->session['pagu_definitif_apbn_apbd_2011'])){$cari .= "";} else if(!empty(Yii::app()->session['pagu_definitif_apbn_apbd_2011']) && $cari!==""){$cari .= "and pagu_definitif_apbn_apbd_2011 like '%".Yii::app()->session['pagu_definitif_apbn_apbd_2011']."%'  ";}
		else if(!empty(Yii::app()->session['pagu_definitif_apbn_apbd_2011'])){$cari .= "pagu_definitif_apbn_apbd_2011 like '%".Yii::app()->session['pagu_definitif_apbn_apbd_2011']."%' ";}
		
		if(empty(Yii::app()->session['pagu_definitif_apbn_apbd_2012'])){$cari .= "";} else if(!empty(Yii::app()->session['pagu_definitif_apbn_apbd_2012']) && $cari!==""){$cari .= "and pagu_definitif_apbn_apbd_2012 like '%".Yii::app()->session['pagu_definitif_apbn_apbd_2012']."%'  ";}
		else if(!empty(Yii::app()->session['pagu_definitif_apbn_apbd_2012'])){$cari .= "pagu_definitif_apbn_apbd_2012 like '%".Yii::app()->session['pagu_definitif_apbn_apbd_2012']."%' ";}
		
		if(empty(Yii::app()->session['pagu_definitif_apbn_apbd_2013'])){$cari .= "";} else if(!empty(Yii::app()->session['pagu_definitif_apbn_apbd_2013']) && $cari!==""){$cari .= "and pagu_definitif_apbn_apbd_2013 like '%".Yii::app()->session['pagu_definitif_apbn_apbd_2013']."%'  ";}
		else if(!empty(Yii::app()->session['pagu_definitif_apbn_apbd_2013'])){$cari .= "pagu_definitif_apbn_apbd_2013 like '%".Yii::app()->session['pagu_definitif_apbn_apbd_2013']."%' ";}
		
		if(empty(Yii::app()->session['penyerapan_2013'])){$cari .= "";} else if(!empty(Yii::app()->session['penyerapan_2013']) && $cari!==""){$cari .= "and penyerapan_2013 like '%".Yii::app()->session['penyerapan_2013']."%'  ";}
		else if(!empty(Yii::app()->session['penyerapan_2013'])){$cari .= "penyerapan_2013 like '%".Yii::app()->session['penyerapan_2013']."%' ";}
		
		if(empty(Yii::app()->session['pagu_indikatif_apbn_2014'])){$cari .= "";} else if(!empty(Yii::app()->session['pagu_indikatif_apbn_2014']) && $cari!==""){$cari .= "and pagu_indikatif_apbn_2014 like '%".Yii::app()->session['pagu_indikatif_apbn_2014']."%'  ";}
		else if(!empty(Yii::app()->session['pagu_indikatif_apbn_2014'])){$cari .= "pagu_indikatif_apbn_2014 like '%".Yii::app()->session['pagu_indikatif_apbn_2014']."%' ";}
		
		if(empty(Yii::app()->session['pagu_definitif_apbn_2014'])){$cari .= "";} else if(!empty(Yii::app()->session['pagu_definitif_apbn_2014']) && $cari!==""){$cari .= "and pagu_definitif_apbn_2014 like '%".Yii::app()->session['pagu_definitif_apbn_2014']."%'  ";}
		else if(!empty(Yii::app()->session['pagu_definitif_apbn_2014'])){$cari .= "pagu_definitif_apbn_2014 like '%".Yii::app()->session['pagu_definitif_apbn_2014']."%' ";}
		
		if(empty(Yii::app()->session['alokasi_perencanaan_bumn_2011'])){$cari .= "";} else if(!empty(Yii::app()->session['alokasi_perencanaan_bumn_2011']) && $cari!==""){$cari .= "and alokasi_perencanaan_bumn_2011 like '%".Yii::app()->session['alokasi_perencanaan_bumn_2011']."%'  ";}
		else if(!empty(Yii::app()->session['alokasi_perencanaan_bumn_2011'])){$cari .= "alokasi_perencanaan_bumn_2011 like '%".Yii::app()->session['alokasi_perencanaan_bumn_2011']."%' ";}
		
		if(empty(Yii::app()->session['alokasi_perencanaan_bumn_2012'])){$cari .= "";} else if(!empty(Yii::app()->session['alokasi_perencanaan_bumn_2012']) && $cari!==""){$cari .= "and alokasi_perencanaan_bumn_2012 like '%".Yii::app()->session['alokasi_perencanaan_bumn_2012']."%'  ";}
		else if(!empty(Yii::app()->session['alokasi_perencanaan_bumn_2012'])){$cari .= "alokasi_perencanaan_bumn_2012 like '%".Yii::app()->session['alokasi_perencanaan_bumn_2012']."%' ";}
		
		if(empty(Yii::app()->session['alokasi_perencanaan_bumn_2013'])){$cari .= "";} else if(!empty(Yii::app()->session['alokasi_perencanaan_bumn_2013']) && $cari!==""){$cari .= "and alokasi_perencanaan_bumn_2013 like '%".Yii::app()->session['alokasi_perencanaan_bumn_2013']."%'  ";}
		else if(!empty(Yii::app()->session['alokasi_perencanaan_bumn_2013'])){$cari .= "alokasi_perencanaan_bumn_2013 like '%".Yii::app()->session['alokasi_perencanaan_bumn_2013']."%' ";}
		
		if(empty(Yii::app()->session['alokasi_perencanaan_bumn_2014'])){$cari .= "";} else if(!empty(Yii::app()->session['alokasi_perencanaan_bumn_2014']) && $cari!==""){$cari .= "and alokasi_perencanaan_bumn_2014 like '%".Yii::app()->session['alokasi_perencanaan_bumn_2014']."%'  ";}
		else if(!empty(Yii::app()->session['alokasi_perencanaan_bumn_2014'])){$cari .= "alokasi_perencanaan_bumn_2014 like '%".Yii::app()->session['alokasi_perencanaan_bumn_2014']."%' ";}
		
		if(empty(Yii::app()->session['perencanaan_alokasi_swasta_2011'])){$cari .= "";} else if(!empty(Yii::app()->session['perencanaan_alokasi_swasta_2011']) && $cari!==""){$cari .= "and perencanaan_alokasi_swasta_2011 like '%".Yii::app()->session['perencanaan_alokasi_swasta_2011']."%'  ";}
		else if(!empty(Yii::app()->session['perencanaan_alokasi_swasta_2011'])){$cari .= "perencanaan_alokasi_swasta_2011 like '%".Yii::app()->session['perencanaan_alokasi_swasta_2011']."%' ";}
		
		if(empty(Yii::app()->session['perencanaan_alokasi_swasta_2012'])){$cari .= "";} else if(!empty(Yii::app()->session['perencanaan_alokasi_swasta_2012']) && $cari!==""){$cari .= "and perencanaan_alokasi_swasta_2012 like '%".Yii::app()->session['perencanaan_alokasi_swasta_2012']."%'  ";}
		else if(!empty(Yii::app()->session['perencanaan_alokasi_swasta_2012'])){$cari .= "perencanaan_alokasi_swasta_2012 like '%".Yii::app()->session['perencanaan_alokasi_swasta_2012']."%' ";}
		
		if(empty(Yii::app()->session['perencanaan_alokasi_swasta_2013'])){$cari .= "";} else if(!empty(Yii::app()->session['perencanaan_alokasi_swasta_2013']) && $cari!==""){$cari .= "and perencanaan_alokasi_swasta_2013 like '%".Yii::app()->session['perencanaan_alokasi_swasta_2013']."%'  ";}
		else if(!empty(Yii::app()->session['perencanaan_alokasi_swasta_2013'])){$cari .= "perencanaan_alokasi_swasta_2013 like '%".Yii::app()->session['perencanaan_alokasi_swasta_2013']."%' ";}
		
		if(empty(Yii::app()->session['perencanaan_alokasi_swasta_2014'])){$cari .= "";} else if(!empty(Yii::app()->session['perencanaan_alokasi_swasta_2014']) && $cari!==""){$cari .= "and perencanaan_alokasi_swasta_2014 like '%".Yii::app()->session['perencanaan_alokasi_swasta_2014']."%'  ";}
		else if(!empty(Yii::app()->session['perencanaan_alokasi_swasta_2014'])){$cari .= "perencanaan_alokasi_swasta_2014 like '%".Yii::app()->session['perencanaan_alokasi_swasta_2014']."%' ";}

		if(is_array(Yii::app()->session['id_koridor']))
		{
			$param_koridor = "";
			for($i=0;$i<count(Yii::app()->session['id_koridor']);$i++)
			{
				if(!empty($param_koridor))
				{
					$param_koridor = $param_koridor.','.Yii::app()->session['id_koridor'][$i];
				}
				else
				{
					$param_koridor = Yii::app()->session['id_koridor'][$i];
				}
			}

			if(Yii::app()->session['id_koridor']==""){$cari .= "";} else if(!empty(Yii::app()->session['id_koridor']) && $cari!==""){$cari .= "and id_koridor IN (".$param_koridor.") ";}
			else if(!empty(Yii::app()->session['id_koridor'])){$cari .= "id_koridor IN (".$param_koridor.") ";}
		}
		else
		{
			if(Yii::app()->session['id_koridor']==""){$cari .= "";} else if(!empty(Yii::app()->session['id_koridor']) && $cari!==""){$cari .= "and id_koridor = '".Yii::app()->session['id_koridor']."' ";}
			else if(!empty(Yii::app()->session['id_koridor'])){$cari .= "id_koridor = '".Yii::app()->session['id_koridor']."' ";}
		}

		if(is_array(Yii::app()->session['id_sektor']))
		{
			$param_sektor = "";
			for($i=0;$i<count(Yii::app()->session['id_sektor']);$i++)
			{
				if(!empty($param_sektor))
				{
					$param_sektor = $param_sektor.','.Yii::app()->session['id_sektor'][$i];
				}
				else
				{
					$param_sektor = Yii::app()->session['id_sektor'][$i];
				}
			}

			if(Yii::app()->session['id_sektor']==""){$cari .= "";} else if(!empty(Yii::app()->session['id_sektor']) && $cari!==""){$cari .= "and id_sektor IN (".$param_sektor.") ";}
			else if(!empty(Yii::app()->session['id_sektor'])){$cari .= "id_sektor IN (".$param_sektor.") ";}
		}
		else
		{
			if(Yii::app()->session['id_sektor']==""){$cari .= "";} else if(!empty(Yii::app()->session['id_sektor']) && $cari!==""){$cari .= "and id_sektor = '".Yii::app()->session['id_sektor']."' ";}
			else if(!empty(Yii::app()->session['id_sektor'])){$cari .= "id_sektor = '".Yii::app()->session['id_sektor']."' ";}
		}
		
		if(Yii::app()->session['id_sumber_dana']==""){$cari .= "";} else if(!empty(Yii::app()->session['id_sumber_dana']) && $cari!==""){$cari .= "and id_sumber_dana = '".Yii::app()->session['id_sumber_dana']."' ";}
		else if(!empty(Yii::app()->session['id_sumber_dana'])){$cari .= "id_sumber_dana = '".Yii::app()->session['id_sumber_dana']."' ";}
		
		if(Yii::app()->session['id_kawasan']==""){$cari .= "";} else if(!empty(Yii::app()->session['id_kawasan']) && $cari!==""){$cari .= "and id_kawasan = '".Yii::app()->session['id_kawasan']."' ";}
		else if(!empty(Yii::app()->session['id_kawasan'])){$cari .= "id_kawasan = '".Yii::app()->session['id_kawasan']."' ";}
		
		if(Yii::app()->session['id_nilai_investasi']==""){$cari .= "";} else if(!empty(Yii::app()->session['id_nilai_investasi']) && $cari!==""){$cari .= "and id_nilai_investasi = '".Yii::app()->session['id_nilai_investasi']."' ";}
		else if(!empty(Yii::app()->session['id_nilai_investasi'])){$cari .= "id_nilai_investasi = '".Yii::app()->session['id_nilai_investasi']."' ";}
		
		if(Yii::app()->session['id_pelaksana']=="semua"){$cari .= "";} else if(!empty(Yii::app()->session['id_pelaksana']) && $cari!==""){$cari .= "and id_pelaksana = '".Yii::app()->session['id_pelaksana']."' ";}
		else if(!empty(Yii::app()->session['id_pelaksana'])){$cari .= "id_pelaksana = '".Yii::app()->session['id_pelaksana']."' ";}
		
		if(Yii::app()->session['id_kategori']=="semua"){$cari .= "";} else if(!empty(Yii::app()->session['id_kategori']) && $cari!==""){$cari .= "and id_kategori = '".Yii::app()->session['id_kategori']."' ";}
		else if(!empty(Yii::app()->session['id_kategori'])){$cari .= "id_kategori = '".Yii::app()->session['id_kategori']."' ";}

		$param_id = "";
		$dt = ProyekPrioritasDashboardModel::model()->findAll();
		foreach($dt as $d)
		{
			if(empty($param_id))
			{
				$param_id = $d->id_infrastruktur;
			}
			else
			{
				$param_id .= ",".$d->id_infrastruktur;
			}
		}
		if($param_id==""){$cari .= "";} else if(!empty($param_id) && $cari!==""){$cari .= "and id_infrastruktur IN (".$param_id.") ";}
		else if(!empty($param_id)){$cari .= "id_infrastruktur IN (".$param_id.") ";}

		$criteria->condition = $cari; 

        $dt = ProyekPrioritasModel::model()->findAll($criteria);

		$model=new ProyekPrioritasModel('search');
		$model->unsetAttributes();  // clear any default values

		$this->render('iframe',array(
			'model'=>$dt,
			'model2'=>$model,
		));
	}

	public function actionAct()
	{
		if (isset($_POST["id_koridor"])) 
		{
			Yii::app()->session['id_koridor']=$_POST['id_koridor'];
		}
		if (isset($_POST["id_sektor"])) 
		{
			Yii::app()->session['id_sektor']=$_POST['id_sektor'];
		}
		Yii::app()->session['nama_proyek']=$_POST['nama_proyek'];
		$this->redirect('index');
	}
}