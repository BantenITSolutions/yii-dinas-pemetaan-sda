<?php

/**
 * This is the model class for table "tbl_green".
 *
 * The followings are the available columns in table 'tbl_green':
 * @property integer $id_green
 * @property string $judul
 * @property string $isi
 * @property string $tipe
 */
class GreenModel extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return GreenModel the static model class
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
		return 'tbl_green';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('isi, tipe', 'required'),
			array('judul', 'length', 'max'=>150),
			array('tipe', 'length', 'max'=>30),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_green, judul, isi, tipe', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		return array('FrontMenu'=>array(self::BELONGS_TO,'DashboardFrontMenuModel','id_menu'));
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_green' => 'Id Green',
			'isi' => 'Isi',
			'tipe' => 'Tipe',
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

		$criteria->compare('id_green',$this->id_green);
		$criteria->compare('judul',$this->judul,true);
		$criteria->compare('isi',$this->isi,true);
		$criteria->compare('tipe',$this->tipe,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}