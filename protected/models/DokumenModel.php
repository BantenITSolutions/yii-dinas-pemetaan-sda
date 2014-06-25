<?php

/**
 * This is the model class for table "tbl_dokumen".
 *
 * The followings are the available columns in table 'tbl_dokumen':
 * @property integer $id_dokumen
 * @property integer $id_kat_dokumen
 * @property string $nama_dokumen
 * @property string $gambar
 * @property string $keterangan
 * @property string $nama_file
 */
class DokumenModel extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return DokumenModel the static model class
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
		return 'tbl_dokumen';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_kat_dokumen, nama_dokumen, gambar, keterangan, nama_file', 'required'),
			array('id_kat_dokumen', 'numerical', 'integerOnly'=>true),
			array('nama_dokumen', 'length', 'max'=>150),
			array('gambar, nama_file', 'length', 'max'=>50),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_dokumen, id_kat_dokumen, nama_dokumen, gambar, keterangan, nama_file', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_dokumen' => 'Id Dokumen',
			'id_kat_dokumen' => 'Id Kat Dokumen',
			'nama_dokumen' => 'Nama Dokumen',
			'gambar' => 'Gambar',
			'keterangan' => 'Keterangan',
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

		$criteria->compare('id_dokumen',$this->id_dokumen);
		$criteria->compare('id_kat_dokumen',$this->id_kat_dokumen);
		$criteria->compare('nama_dokumen',$this->nama_dokumen,true);
		$criteria->compare('gambar',$this->gambar,true);
		$criteria->compare('keterangan',$this->keterangan,true);
		$criteria->compare('nama_file',$this->nama_file,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}