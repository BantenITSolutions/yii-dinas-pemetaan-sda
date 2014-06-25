<?php

/**
 * This is the model class for table "tbl_berita".
 *
 * The followings are the available columns in table 'tbl_berita':
 * @property integer $id_berita
 * @property string $judul
 * @property string $tanggal
 * @property string $isi
 * @property string $gambar
 */
class BeritaModel extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return BeritaModel the static model class
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
		return 'tbl_berita';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('judul, tanggal, isi, gambar', 'required'),
			array('judul', 'length', 'max'=>150),
			array('tanggal', 'length', 'max'=>50),
			array('gambar', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_berita, judul, tanggal, isi, gambar', 'safe', 'on'=>'search'),
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
			'id_berita' => 'Id Berita',
			'judul' => 'Judul',
			'tanggal' => 'Tanggal',
			'isi' => 'Isi',
			'gambar' => 'Gambar',
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

		$criteria->compare('id_berita',$this->id_berita);
		$criteria->compare('judul',$this->judul,true);
		$criteria->compare('tanggal',$this->tanggal,true);
		$criteria->compare('isi',$this->isi,true);
		$criteria->compare('gambar',$this->gambar,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}