<?php

/**
 * This is the model class for table "tbl_link".
 *
 * The followings are the available columns in table 'tbl_link':
 * @property integer $id_link
 * @property string $judul
 * @property string $url_link
 */
class LinkDashboardModel extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return LinkDashboardModel the static model class
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
		return 'tbl_link';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('judul, url_link', 'required'),
			array('judul, url_link', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_link, judul, url_link', 'safe', 'on'=>'search'),
            array('gambar', 'file',
                    'allowEmpty' => true,
                    'types' => 'jpg,jpeg,gif',
                 ),
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
			'id_link' => 'Id Link',
			'judul' => 'Judul',
			'url_link' => 'Url Link',
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

		$criteria->compare('id_link',$this->id_link);
		$criteria->compare('judul',$this->judul,true);
		$criteria->compare('url_link',$this->url_link,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}