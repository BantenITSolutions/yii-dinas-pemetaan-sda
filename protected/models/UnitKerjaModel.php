<?php

/**
 * This is the model class for table "tbl_unit_kerja".
 *
 * The followings are the available columns in table 'tbl_unit_kerja':
 * @property integer $id_unit_kerja
 * @property string $unit_kerja
 */
class UnitKerjaModel extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return UnitKerjaModel the static model class
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
		return 'tbl_unit_kerja';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('unit_kerja', 'required'),
			array('unit_kerja', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_unit_kerja, unit_kerja', 'safe', 'on'=>'search'),
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
			'id_unit_kerja' => 'Id Unit Kerja',
			'unit_kerja' => 'Unit Kerja',
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

		$criteria->compare('id_unit_kerja',$this->id_unit_kerja);
		$criteria->compare('unit_kerja',$this->unit_kerja,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}