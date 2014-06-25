<?php

/**
 * This is the model class for table "tbl_agenda".
 *
 * The followings are the available columns in table 'tbl_agenda':
 * @property integer $id_agenda
 * @property string $title
 * @property string $tanggal
 * @property string $start
 * @property string $end
 * @property integer $id_tempat
 * @property string $url
 * @property string $jenis
 * @property string $keterangan
 * @property integer $jumlah_peserta
 * @property string $penanggung_jawab
 * @property integer $id_unit_kerja
 * @property string $email_penanggung_jawab
 * @property string $no_telp_penanggung_jawab
 * @property string $jam
 * @property string $durasi
 * @property string $nama_file
 */
class AgendaModel extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return AgendaModel the static model class
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
		return 'tbl_agenda';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('title, tanggal, start, end, id_tempat, keterangan, jumlah_peserta, penanggung_jawab, id_unit_kerja, email_penanggung_jawab, no_telp_penanggung_jawab, jam, durasi, nama_file', 'required'),
			array('id_tempat, jumlah_peserta, id_unit_kerja', 'numerical', 'integerOnly'=>true),
			array('title', 'length', 'max'=>150),
			array('tanggal, start, end, no_telp_penanggung_jawab, nama_file', 'length', 'max'=>50),
			array('url, penanggung_jawab, email_penanggung_jawab', 'length', 'max'=>100),
			array('jenis, jam', 'length', 'max'=>30),
			array('durasi', 'length', 'max'=>20),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_agenda, title, tanggal, start, end, id_tempat, url, jenis, keterangan, jumlah_peserta, penanggung_jawab, id_unit_kerja, email_penanggung_jawab, no_telp_penanggung_jawab, jam, durasi, nama_file', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array('UnitKerja'=>array(self::BELONGS_TO,'UnitKerjaModel','id_unit_kerja'),
			'TempatAgenda'=>array(self::BELONGS_TO,'TempatAgendaModel','id_tempat'),
			);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_agenda' => 'Id Agenda',
			'title' => 'Title',
			'tanggal' => 'Tanggal',
			'start' => 'Start',
			'end' => 'End',
			'id_tempat' => 'Id Tempat',
			'url' => 'Url',
			'jenis' => 'Jenis',
			'keterangan' => 'Keterangan',
			'jumlah_peserta' => 'Jumlah Peserta',
			'penanggung_jawab' => 'Penanggung Jawab',
			'id_unit_kerja' => 'Id Unit Kerja',
			'email_penanggung_jawab' => 'Email Penanggung Jawab',
			'no_telp_penanggung_jawab' => 'No Telp Penanggung Jawab',
			'jam' => 'Jam',
			'durasi' => 'Durasi',
			'nama_file' => 'Nama File',
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

		$criteria->compare('id_agenda',$this->id_agenda);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('tanggal',$this->tanggal,true);
		$criteria->compare('start',$this->start,true);
		$criteria->compare('end',$this->end,true);
		$criteria->compare('id_tempat',$this->id_tempat);
		$criteria->compare('url',$this->url,true);
		$criteria->compare('jenis',$this->jenis,true);
		$criteria->compare('keterangan',$this->keterangan,true);
		$criteria->compare('jumlah_peserta',$this->jumlah_peserta);
		$criteria->compare('penanggung_jawab',$this->penanggung_jawab,true);
		$criteria->compare('id_unit_kerja',$this->id_unit_kerja);
		$criteria->compare('email_penanggung_jawab',$this->email_penanggung_jawab,true);
		$criteria->compare('no_telp_penanggung_jawab',$this->no_telp_penanggung_jawab,true);
		$criteria->compare('jam',$this->jam,true);
		$criteria->compare('durasi',$this->durasi,true);
		$criteria->compare('nama_file',$this->nama_file,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}