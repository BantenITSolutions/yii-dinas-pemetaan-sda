<?php

/**
 * This is the model class for table "tbl_dbi".
 *
 * The followings are the available columns in table 'tbl_dbi':
 * @property integer $id_dbi
 * @property string $lat
 * @property string $lang
 * @property string $kode_proyek
 * @property string $id_nama_proyek
 * @property integer $id_koridor
 * @property integer $id_sumber_dana
 * @property integer $id_sektor
 * @property integer $tahun_mulai
 * @property integer $tahun_selesai
 * @property integer $id_kawasan
 * @property string $keterangan
 */
class DashboardDbiModel extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return DashboardDbiModel the static model class
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
			array('lat, lang, id_nama_proyek, id_koridor, id_sumber_dana, id_sektor, tahun_mulai, tahun_selesai, id_kawasan, keterangan', 'required'),
			array('id_koridor, id_sumber_dana, id_sektor, tahun_mulai, tahun_selesai, id_kawasan', 'numerical', 'integerOnly'=>true),
			array('lat, lang', 'length', 'max'=>50),
			array('id_nama_proyek', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_dbi, lat, lang, id_nama_proyek, id_koridor, id_sumber_dana, id_sektor, tahun_mulai, tahun_selesai, id_kawasan, keterangan', 'safe', 'on'=>'search'),
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
			'NamaProyek'=>array(self::BELONGS_TO,'NamaProyekModel','id_nama_proyek'),
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
			'id_dbi' => 'Id Dbi',
			'lat' => 'Lat',
			'lang' => 'Lang',
			'id_nama_proyek' => 'Nama Proyek',
			'id_koridor' => 'Koridor',
			'id_sumber_dana' => 'Sumber Dana',
			'id_sektor' => 'Sektor',
			'id_nilai_investasi' => 'Nilai Investasi',
			'id_pelaksana' => 'Pelaksana',
			'id_kategori' => 'Kategori',
			'tahun_mulai' => 'Tahun Mulai',
			'tahun_selesai' => 'Tahun Selesai',
			'id_kawasan' => 'Id Kawasan',
			'keterangan' => 'Keterangan',
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

		$criteria->compare('id_dbi',$this->id_dbi);
		$criteria->compare('lat',$this->lat,true);
		$criteria->compare('lang',$this->lang,true);
		$criteria->compare('id_nama_proyek',$this->id_nama_proyek,true);
		$criteria->compare('id_koridor',$this->id_koridor);
		$criteria->compare('id_sumber_dana',$this->id_sumber_dana);
		$criteria->compare('id_sektor',$this->id_sektor);
		$criteria->compare('tahun_mulai',$this->tahun_mulai);
		$criteria->compare('tahun_selesai',$this->tahun_selesai);
		$criteria->compare('id_kawasan',$this->id_kawasan);
		$criteria->compare('keterangan',$this->keterangan,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}