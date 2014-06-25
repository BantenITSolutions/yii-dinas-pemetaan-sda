<?php

/**
 * This is the model class for table "tbl_chart_detail".
 *
 * The followings are the available columns in table 'tbl_chart_detail':
 * @property integer $id_chart_detail
 * @property integer $id_chart_header
 * @property string $item_option
 * @property string $nilai
 */
class ChartDetailModel extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return ChartDetailModel the static model class
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
		return 'tbl_chart_detail';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_chart_header, item_option, nilai', 'required'),
			array('id_chart_header', 'numerical', 'integerOnly'=>true),
			array('item_option', 'length', 'max'=>100),
			array('nilai', 'length', 'max'=>10),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_chart_detail, id_chart_header, item_option, nilai', 'safe', 'on'=>'search'),
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
			'id_chart_detail' => 'Id Chart Detail',
			'id_chart_header' => 'Id Chart Header',
			'item_option' => 'Item Option',
			'nilai' => 'Nilai',
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

		$criteria->compare('id_chart_detail',$this->id_chart_detail);
		$criteria->compare('id_chart_header',$this->id_chart_header);
		$criteria->compare('item_option',$this->item_option,true);
		$criteria->compare('nilai',$this->nilai,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}