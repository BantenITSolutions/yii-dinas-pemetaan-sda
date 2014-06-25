<?php

/**
 * This is the model class for table "tbl_dbi".
 *
 * The followings are the available columns in table 'tbl_dbi':
 * @property integer $id_dbi
 * @property string $lat
 * @property string $lang
 * @property string $kode_proyek
 * @property string $nama_proyek
 * @property integer $id_koridor
 * @property integer $id_sumber_dana
 * @property integer $id_sektor
 * @property integer $tahun_mulai
 * @property integer $tahun_selesai
 * @property integer $id_kawasan
 * @property string $keterangan
 */
class DbiModel extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return DbiModel the static model class
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
		return 'tbl_dbi';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_koridor, id_sektor, id_sumber_dana, nama_proyek, id_nilai_investasi, mulai, selesai, gb, provinsi, status_selesai_proyek, id_pelaksana, status_proyek, id_kawasan, sumber_usulan, perubahan_kepres_lama, kategori, alokasi_apbn_apbd_2011, alokasi_apbn_apbd_2012, pagu_apbn_2013, rkp_apbn_2014, alokasi_bumn_2011, alokasi_bumn_2012, alokasi_bumn_2013, alokasi_bumn_2014, alokasi_swasta_2011, alokasi_swasta_2012, alokasi_swasta_2013, alokasi_swasta_2014, lat, lang, id_kategori, id_pelaksana', 'required'),
			array('id_koridor, id_sektor, id_sumber_dana, id_nilai_investasi, id_pelaksana, id_kawasan', 'numerical', 'integerOnly'=>true),
			array('nama_proyek, mulai, selesai, gb, provinsi, status_selesai_proyek, status_proyek, sumber_usulan, perubahan_kepres_lama, kategori, alokasi_apbn_apbd_2011, alokasi_apbn_apbd_2012, pagu_apbn_2013, rkp_apbn_2014, alokasi_bumn_2011, alokasi_bumn_2012, alokasi_bumn_2013, alokasi_bumn_2014, alokasi_swasta_2011, alokasi_swasta_2012, alokasi_swasta_2013, alokasi_swasta_2014', 'length', 'max'=>180),
			array('lat, lang', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_infrastruktur, id_koridor, id_sektor, id_sumber_dana, nama_proyek, id_nilai_investasi, mulai, selesai, gb, provinsi, status_selesai_proyek, id_pelaksana, status_proyek, id_kawasan, sumber_usulan, perubahan_kepres_lama, kategori, alokasi_apbn_apbd_2011, alokasi_apbn_apbd_2012, pagu_apbn_2013, rkp_apbn_2014, alokasi_bumn_2011, alokasi_bumn_2012, alokasi_bumn_2013, alokasi_bumn_2014, alokasi_swasta_2011, alokasi_swasta_2012, alokasi_swasta_2013, alokasi_swasta_2014, lat, lang, id_kategori, id_pelaksana', 'safe', 'on'=>'search'),
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
			'perubahan_kepres_lama' => 'Perubahan Kepres Lama',
			'kategori' => 'Kategori',
			'id_kategori' => 'Id Kategori',
			'id_pelaksana' => 'Id Pelaksana',
			'alokasi_apbn_apbd_2011' => 'Alokasi Apbn Apbd 2011',
			'alokasi_apbn_apbd_2012' => 'Alokasi Apbn Apbd 2012',
			'pagu_apbn_2013' => 'Pagu Apbn 2013',
			'rkp_apbn_2014' => 'Rkp Apbn 2014',
			'alokasi_bumn_2011' => 'Alokasi Bumn 2011',
			'alokasi_bumn_2012' => 'Alokasi Bumn 2012',
			'alokasi_bumn_2013' => 'Alokasi Bumn 2013',
			'alokasi_bumn_2014' => 'Alokasi Bumn 2014',
			'alokasi_swasta_2011' => 'Alokasi Swasta 2011',
			'alokasi_swasta_2012' => 'Alokasi Swasta 2012',
			'alokasi_swasta_2013' => 'Alokasi Swasta 2013',
			'alokasi_swasta_2014' => 'Alokasi Swasta 2014',
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

       	$criteria->with=array('Koridor','SumberDana','NilaiInvestasi','Kawasan','Sektor');
		$criteria->compare('id_dbi',$this->id_dbi);
		$criteria->compare('lat',$this->lat,true);
		$criteria->compare('lang',$this->lang,true);
		$criteria->compare('Koridor.id_koridor',$this->id_koridor,true);
		$criteria->compare('SumberDana.id_sumber_dana',$this->id_sumber_dana,true);
		$criteria->compare('Sektor.id_sektor',$this->id_sektor,true);
		$criteria->compare('tahun_mulai',$this->tahun_mulai);
		$criteria->compare('tahun_selesai',$this->tahun_selesai);
		$criteria->compare('Kawasan.id_kawasan',$this->id_kawasan,true);
		$criteria->compare('NilaiInvestasi.id_nilai_investasi',$this->id_nilai_investasi,true);
		$criteria->compare('Kategori.id_kategori',$this->id_kategori,true);
		$criteria->compare('Pelaksana.id_pelaksana',$this->id_pelaksana,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	public function peta()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;
        
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

		if(Yii::app()->session['id_koridor']=="semua"){$cari .= "";} else if(!empty(Yii::app()->session['id_koridor'])){$cari .= "id_koridor = '".Yii::app()->session['id_koridor']."' ";}
		
		if(Yii::app()->session['id_sumber_dana']=="semua"){$cari .= "";} else if(!empty(Yii::app()->session['id_sumber_dana']) && $cari!==""){$cari .= "and id_sumber_dana = '".Yii::app()->session['id_sumber_dana']."' ";}
		else if(!empty(Yii::app()->session['id_sumber_dana'])){$cari .= "id_sumber_dana = '".Yii::app()->session['id_sumber_dana']."' ";}
		
		if(Yii::app()->session['id_sektor']=="semua"){$cari .= "";} else if(!empty(Yii::app()->session['id_sektor']) && $cari!==""){$cari .= "and id_sektor = '".Yii::app()->session['id_sektor']."' ";}
		else if(!empty(Yii::app()->session['id_sektor'])){$cari .= "id_sektor = '".Yii::app()->session['id_sektor']."' ";}
		
		if(Yii::app()->session['tahun_mulai']=="semua"){$cari .= "";} else if(!empty(Yii::app()->session['tahun_mulai']) && $cari!==""){$cari .= "and tahun_mulai = '".Yii::app()->session['tahun_mulai']."' ";}
		else if(!empty(Yii::app()->session['tahun_mulai'])){$cari .= "tahun_mulai = '".Yii::app()->session['tahun_mulai']."' ";}
		
		if(Yii::app()->session['tahun_selesai']=="semua"){$cari .= "";} else if(!empty(Yii::app()->session['tahun_selesai']) && $cari!==""){$cari .= "and tahun_selesai = '".Yii::app()->session['tahun_selesai']."' ";}
		else if(!empty(Yii::app()->session['tahun_selesai'])){$cari .= "tahun_selesai = '".Yii::app()->session['tahun_selesai']."' ";}
		
		if(Yii::app()->session['id_kawasan']=="semua"){$cari .= "";} else if(!empty(Yii::app()->session['id_kawasan']) && $cari!==""){$cari .= "and id_kawasan = '".Yii::app()->session['id_kawasan']."' ";}
		else if(!empty(Yii::app()->session['id_kawasan'])){$cari .= "id_kawasan = '".Yii::app()->session['id_kawasan']."' ";}
		
		if(Yii::app()->session['id_nama_proyek']=="semua"){$cari .= "";} else if(!empty(Yii::app()->session['id_nama_proyek']) && $cari!==""){$cari .= "and id_nama_proyek = '".Yii::app()->session['id_nama_proyek']."' ";}
		else if(!empty(Yii::app()->session['id_nama_proyek'])){$cari .= "id_nama_proyek = '".Yii::app()->session['id_nama_proyek']."' ";}
		
		if(Yii::app()->session['id_nilai_investasi']=="semua"){$cari .= "";} else if(!empty(Yii::app()->session['id_nilai_investasi']) && $cari!==""){$cari .= "and id_nilai_investasi = '".Yii::app()->session['id_nilai_investasi']."' ";}
		else if(!empty(Yii::app()->session['id_nilai_investasi'])){$cari .= "id_nilai_investasi = '".Yii::app()->session['id_nilai_investasi']."' ";}
		
		if(Yii::app()->session['id_pelaksana']=="semua"){$cari .= "";} else if(!empty(Yii::app()->session['id_pelaksana']) && $cari!==""){$cari .= "and id_pelaksana = '".Yii::app()->session['id_pelaksana']."' ";}
		else if(!empty(Yii::app()->session['id_pelaksana'])){$cari .= "id_pelaksana = '".Yii::app()->session['id_pelaksana']."' ";}
		
		if(Yii::app()->session['id_kategori']=="semua"){$cari .= "";} else if(!empty(Yii::app()->session['id_kategori']) && $cari!==""){$cari .= "and id_kategori = '".Yii::app()->session['id_kategori']."' ";}
		else if(!empty(Yii::app()->session['id_kategori'])){$cari .= "id_kategori = '".Yii::app()->session['id_kategori']."' ";}

		$criteria->compare('keterangan',$this->keterangan,true);
		$criteria->condition = $cari; 

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

}