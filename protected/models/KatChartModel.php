<?php

/**
 * This is the model class for table "tbl_kat_chart".
 *
 * The followings are the available columns in table 'tbl_kat_chart':
 * @property integer $id_kat_chart
 * @property string $kat_chart
 */
class KatChartModel extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return KatChartModel the static model class
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
		return 'tbl_kat_chart';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('kat_chart', 'required'),
			array('kat_chart', 'length', 'max'=>50),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_kat_chart, kat_chart', 'safe', 'on'=>'search'),
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
			'id_kat_chart' => 'Id Kat Chart',
			'kat_chart' => 'Kat Chart',
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

		$criteria->compare('id_kat_chart',$this->id_kat_chart);
		$criteria->compare('kat_chart',$this->kat_chart,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}