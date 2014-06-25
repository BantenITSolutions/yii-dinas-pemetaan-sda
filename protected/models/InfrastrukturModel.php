<?php

/**
 * This is the model class for table "tbl_infrastruktur".
 *
 * The followings are the available columns in table 'tbl_infrastruktur':
 * @property integer $id_infrastruktur
 * @property integer $id_koridor
 * @property integer $id_sektor
 * @property integer $id_sumber_dana
 * @property string $nama_proyek
 * @property integer $id_nilai_investasi
 * @property string $mulai
 * @property string $selesai
 * @property string $gb
 * @property string $provinsi
 * @property string $status_selesai_proyek
 * @property integer $id_pelaksana
 * @property string $status_proyek
 * @property integer $id_kawasan
 * @property string $sumber_usulan
 * @property string $perubahan_kepres_lama
 * @property string $kategori
 * @property string $alokasi_apbn_apbd_2011
 * @property string $alokasi_apbn_apbd_2012
 * @property string $pagu_apbn_2013
 * @property string $rkp_apbn_2014
 * @property string $alokasi_bumn_2011
 * @property string $alokasi_bumn_2012
 * @property string $alokasi_bumn_2013
 * @property string $alokasi_bumn_2014
 * @property string $alokasi_swasta_2011
 * @property string $alokasi_swasta_2012
 * @property string $alokasi_swasta_2013
 * @property string $alokasi_swasta_2014
 */
class InfrastrukturModel extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return InfrastrukturModel the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_infrastruktur';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_koridor, id_sektor, id_sumber_dana, nama_proyek, id_nilai_investasi, mulai, selesai, gb, provinsi, status_selesai_proyek, id_pelaksana, status_proyek, id_kawasan, sumber_usulan, detail_surat_usulan, perubahan_kepres_lama, id_kategori, evaluasi_konsinyering_kp3ei, alasan_evaluasi, nilai_strategis_proyek, pagu_definitif_apbn_apbd_2011, pagu_definitif_apbn_apbd_2012, pagu_definitif_apbn_apbd_2013, penyerapan_2013, pagu_indikatif_apbn_2014, pagu_definitif_apbn_2014, alokasi_perencanaan_bumn_2011, alokasi_perencanaan_bumn_2012, alokasi_perencanaan_bumn_2013, alokasi_perencanaan_bumn_2014, perencanaan_alokasi_swasta_2011, perencanaan_alokasi_swasta_2012, perencanaan_alokasi_swasta_2013, perencanaan_alokasi_swasta_2014', 'required'),
			array('id_koridor, id_sektor, id_sumber_dana, id_nilai_investasi, id_pelaksana, id_kawasan, id_kategori', 'numerical', 'integerOnly'=>true),
			array('lat, lang', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_infrastruktur, id_koridor, id_sektor, id_sumber_dana, nama_proyek, id_nilai_investasi, mulai, selesai, gb, provinsi, status_selesai_proyek, id_pelaksana, status_proyek, id_kawasan, sumber_usulan, detail_surat_usulan, perubahan_kepres_lama, id_kategori, evaluasi_konsinyering_kp3ei, alasan_evaluasi, nilai_strategis_proyek, pagu_definitif_apbn_apbd_2011, pagu_definitif_apbn_apbd_2012, pagu_definitif_apbn_apbd_2013, penyerapan_2013, pagu_indikatif_apbn_2014, pagu_definitif_apbn_2014, alokasi_perencanaan_bumn_2011, alokasi_perencanaan_bumn_2012, alokasi_perencanaan_bumn_2013, alokasi_perencanaan_bumn_2014, perencanaan_alokasi_swasta_2011, perencanaan_alokasi_swasta_2012, perencanaan_alokasi_swasta_2013, perencanaan_alokasi_swasta_2014, lat, lang', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		return array(
			'Koridor'=>array(self::BELONGS_TO,'KoridorModel','id_koridor'),
			'Sektor'=>array(self::BELONGS_TO,'SektorModel','id_sektor'),
			'NilaiInvestasi'=>array(self::BELONGS_TO,'NilaiInvestasiModel','id_nilai_investasi'),
			'SumberDana'=>array(self::BELONGS_TO,'SumberDanaModel','id_sumber_dana'),
			'Pelaksana'=>array(self::BELONGS_TO,'PelaksanaModel','id_pelaksana'),
			'Kawasan'=>array(self::BELONGS_TO,'KawasanModel','id_kawasan'),
			'Kategori'=>array(self::BELONGS_TO,'KategoriModel','id_kategori'),
			);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_infrastruktur' => 'Id Infrastruktur',
			'id_koridor' => 'Koridor',
			'id_sektor' => 'Sektor',
			'id_sumber_dana' => 'Sumber Dana',
			'nama_proyek' => 'Nama Proyek',
			'id_nilai_investasi' => 'Nilai Investasi',
			'mulai' => 'Mulai',
			'selesai' => 'Selesai',
			'gb' => 'Gb',
			'provinsi' => 'Provinsi',
			'status_selesai_proyek' => 'Status Selesai Proyek',
			'id_pelaksana' => 'Pelaksana',
			'status_proyek' => 'Status Proyek',
			'id_kawasan' => 'Kawasan',
			'sumber_usulan' => 'Sumber Usulan',
			'detail_surat_usulan' => 'Detail Surat Usulan',
			'perubahan_kepres_lama' => 'Perubahan Kepres Lama',
			'id_kategori' => 'Kategori',
			'evaluasi_konsinyering_kp3ei' => 'Evaluasi Konsinyering Kp3ei',
			'alasan_evaluasi' => 'Alasan Evaluasi',
			'nilai_strategis_proyek' => 'Nilai Strategis Proyek',
			'pagu_definitif_apbn_apbd_2011' => 'Pagu Definitif Apbn Apbd 2011',
			'pagu_definitif_apbn_apbd_2012' => 'Pagu Definitif Apbn Apbd 2012',
			'pagu_definitif_apbn_apbd_2013' => 'Pagu Definitif Apbn Apbd 2013',
			'penyerapan_2013' => 'Penyerapan 2013',
			'pagu_indikatif_apbn_2014' => 'Pagu Indikatif Apbn 2014',
			'pagu_definitif_apbn_2014' => 'Pagu Definitif Apbn 2014',
			'alokasi_perencanaan_bumn_2011' => 'Alokasi Perencanaan Bumn 2011',
			'alokasi_perencanaan_bumn_2012' => 'Alokasi Perencanaan Bumn 2012',
			'alokasi_perencanaan_bumn_2013' => 'Alokasi Perencanaan Bumn 2013',
			'alokasi_perencanaan_bumn_2014' => 'Alokasi Perencanaan Bumn 2014',
			'perencanaan_alokasi_swasta_2011' => 'Perencanaan Alokasi Swasta 2011',
			'perencanaan_alokasi_swasta_2012' => 'Perencanaan Alokasi Swasta 2012',
			'perencanaan_alokasi_swasta_2013' => 'Perencanaan Alokasi Swasta 2013',
			'perencanaan_alokasi_swasta_2014' => 'Perencanaan Alokasi Swasta 2014',
			'lat' => 'Lat',
			'lang' => 'Lang',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

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

		$criteria->condition = $cari; 

		$limit_page = 10;
		if(Yii::app()->user->isGuest)
		{
			$limit_page = 20;
		}

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
            'pagination' => array('pageSize' => $limit_page)
		));
	}

	public function peta()
	{
		$criteria=new CDbCriteria;
        
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

		$criteria->condition = $cari;

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}