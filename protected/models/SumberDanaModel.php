<?php

/**
 * This is the model class for table "tbl_sumber_dana".
 *
 * The followings are the available columns in table 'tbl_sumber_dana':
 * @property integer $id_sumber_dana
 * @property string $sumber_dana
 */
class SumberDanaModel extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return SumberDanaModel the static model class
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
		return 'tbl_sumber_dana';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('sumber_dana', 'required'),
			array('sumber_dana', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_sumber_dana, sumber_dana', 'safe', 'on'=>'search'),
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
			'id_sumber_dana' => 'Id Sumber Dana',
			'sumber_dana' => 'Sumber Dana',
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

		$criteria->compare('id_sumber_dana',$this->id_sumber_dana);
		$criteria->compare('sumber_dana',$this->sumber_dana,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}