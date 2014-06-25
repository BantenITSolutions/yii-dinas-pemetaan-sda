<?php

/**
 * This is the model class for table "tbl_galeri".
 *
 * The followings are the available columns in table 'tbl_galeri':
 * @property integer $id_galeri
 * @property string $judul
 * @property string $gambar
 */
class GaleriModel extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return GaleriModel the static model class
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
		return 'tbl_galeri';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('judul, gambar', 'required'),
			array('judul', 'length', 'max'=>150),
			array('gambar', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_galeri, judul, gambar', 'safe', 'on'=>'search'),
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
			'id_galeri' => 'Id Galeri',
			'judul' => 'Judul',
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

		$criteria->compare('id_galeri',$this->id_galeri);
		$criteria->compare('judul',$this->judul,true);
		$criteria->compare('gambar',$this->gambar,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}