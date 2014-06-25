<?php

/**
 * This is the model class for table "tbl_nama_proyek".
 *
 * The followings are the available columns in table 'tbl_nama_proyek':
 * @property integer $id_nama_proyek
 * @property string $koridor
 * @property string $nama_proyek
 */
class NamaProyekModel extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return NamaProyekModel the static model class
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
		return 'tbl_nama_proyek';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nama_proyek', 'required'),
			array('koridor', 'length', 'max'=>100),
			array('nama_proyek', 'length', 'max'=>150),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_nama_proyek, koridor, nama_proyek', 'safe', 'on'=>'search'),
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
			'id_nama_proyek' => 'Id Nama Proyek',
			'koridor' => 'Koridor',
			'nama_proyek' => 'Nama Proyek',
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

		$criteria->compare('id_nama_proyek',$this->id_nama_proyek);
		$criteria->compare('koridor',$this->koridor,true);
		$criteria->compare('nama_proyek',$this->nama_proyek,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}