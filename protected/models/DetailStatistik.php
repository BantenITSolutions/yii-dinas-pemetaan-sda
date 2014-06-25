<?php

/**
 * This is the model class for table "tbl_detail_statistik".
 *
 * The followings are the available columns in table 'tbl_detail_statistik':
 * @property integer $id_detail_statistik
 * @property integer $id_header_statistik
 * @property string $bulan
 * @property double $pre_clearance
 * @property double $customs_clearance
 * @property double $posts_clearance
 */
class DetailStatistik extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return DetailStatistik the static model class
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
		return 'tbl_detail_statistik';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_header_statistik, bulan, pre_clearance, customs_clearance, posts_clearance', 'required'),
			array('id_header_statistik', 'numerical', 'integerOnly'=>true),
			array('pre_clearance, customs_clearance, posts_clearance', 'numerical'),
			array('bulan', 'length', 'max'=>20),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_detail_statistik, id_header_statistik, bulan, pre_clearance, customs_clearance, posts_clearance', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		return array(
			'HeaderStatistik'=>array(self::BELONGS_TO,'HeaderStatistik','id_header_statistik'),
			);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_detail_statistik' => 'Id Detail Statistik',
			'id_header_statistik' => 'Id Header Statistik',
			'bulan' => 'Bulan',
			'pre_clearance' => 'Pre Clearance',
			'customs_clearance' => 'Customs Clearance',
			'posts_clearance' => 'Posts Clearance',
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

		$criteria->compare('id_detail_statistik',$this->id_detail_statistik);
		$criteria->compare('id_header_statistik',$this->id_header_statistik);
		$criteria->compare('bulan',$this->bulan,true);
		$criteria->compare('pre_clearance',$this->pre_clearance);
		$criteria->compare('customs_clearance',$this->customs_clearance);
		$criteria->compare('posts_clearance',$this->posts_clearance);

		$criteria->order = 'id_detail_statistik ASC';

		$criteria->limit = '30';


		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
    		'pagination' => false
		));
	}

	public function cari($param)
	{
		$criteria=new CDbCriteria;

		$criteria->condition = "id_header_statistik = '".$param."' ";
		$criteria->order = 'id_detail_statistik ASC';

		$criteria->limit = '30';


		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
    		'pagination' => false
		));
	}
}