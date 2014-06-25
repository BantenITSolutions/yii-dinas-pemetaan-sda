<?php

/**
 * This is the model class for table "tbl_profil".
 *
 * The followings are the available columns in table 'tbl_profil':
 * @property integer $id_profil
 * @property string $judul
 * @property string $keterangan
 * @property string $icon
 * @property string $url_route
 * @property integer $widget_st
 */
class ProfilModel extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return ProfilModel the static model class
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
		return 'tbl_profil';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('judul, keterangan, icon, url_route, widget_st', 'required'),
			array('widget_st', 'numerical', 'integerOnly'=>true),
			array('judul', 'length', 'max'=>150),
			array('icon, url_route', 'length', 'max'=>50),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_profil, judul, keterangan, icon, url_route, widget_st', 'safe', 'on'=>'search'),
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
			'id_profil' => 'Id Profil',
			'judul' => 'Judul',
			'keterangan' => 'Keterangan',
			'icon' => 'Icon',
			'url_route' => 'Url Route',
			'widget_st' => 'Widget St',
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

		$criteria->compare('id_profil',$this->id_profil);
		$criteria->compare('judul',$this->judul,true);
		$criteria->compare('keterangan',$this->keterangan,true);
		$criteria->compare('icon',$this->icon,true);
		$criteria->compare('url_route',$this->url_route,true);
		$criteria->compare('widget_st',$this->widget_st);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}