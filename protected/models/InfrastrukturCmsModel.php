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
 * @property integer $id_kategori
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
 * @property string $lat
 * @property string $lang
 */
class InfrastrukturCmsModel extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return InfrastrukturCmsModel the static model class
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
			array('id_koridor, id_sektor', 'required'),
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
			'id_koridor' => 'Id Koridor',
			'id_sektor' => 'Id Sektor',
			'id_sumber_dana' => 'Id Sumber Dana',
			'nama_proyek' => 'Nama Proyek',
			'id_nilai_investasi' => 'Id Nilai Investasi',
			'mulai' => 'Mulai',
			'selesai' => 'Selesai',
			'gb' => 'Gb',
			'provinsi' => 'Provinsi',
			'status_selesai_proyek' => 'Status Selesai Proyek',
			'id_pelaksana' => 'Id Pelaksana',
			'status_proyek' => 'Status Proyek',
			'id_kawasan' => 'Id Kawasan',
			'sumber_usulan' => 'Sumber Usulan',
			'detail_surat_usulan' => 'Detail Surat Usulan',
			'perubahan_kepres_lama' => 'Perubahan Kepres Lama',
			'id_kategori' => 'Id Kategori',
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
		$criteria=new CDbCriteria;

		$cari = "";
		
		if(empty($this->nama_proyek)){$cari .= "";} else if(!empty($this->nama_proyek) && $cari!==""){$cari .= "and nama_proyek like '%".$this->nama_proyek."%'  ";}
		else if(!empty($this->nama_proyek)){$cari .= "nama_proyek like '%".$this->nama_proyek."%' ";}

		
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

		$criteria->condition = $cari; 

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
