<?php

/**
 * This is the model class for table "tbl_pelaksana".
 *
 * The followings are the available columns in table 'tbl_pelaksana':
 * @property integer $id_pelaksana
 * @property string $pelaksana
 */
class PelaksanaModel extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return PelaksanaModel the static model class
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
		return 'tbl_pelaksana';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('pelaksana', 'required'),
			array('pelaksana', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_pelaksana, pelaksana', 'safe', 'on'=>'search'),
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
			'id_pelaksana' => 'Id Pelaksana',
			'pelaksana' => 'Pelaksana',
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

		$criteria->compare('id_pelaksana',$this->id_pelaksana);
		$criteria->compare('pelaksana',$this->pelaksana,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}