<?php

/**
 * This is the model class for table "tbl_konektivitas".
 *
 * The followings are the available columns in table 'tbl_konektivitas':
 * @property integer $id_konektivitas
 * @property integer $id_menu
 * @property integer $id_menu_admin
 * @property string $judul
 * @property string $isi
 * @property string $nama_file
 * @property string $gambar
 */
class KonektivitasModel extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return KonektivitasModel the static model class
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
		return 'tbl_konektivitas';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_menu, id_menu_admin, isi, nama_file', 'required'),
			array('id_menu, id_menu_admin', 'numerical', 'integerOnly'=>true),
			array('nama_file', 'length', 'max'=>50),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_konektivitas, id_menu, id_menu_admin, isi, nama_file', 'safe', 'on'=>'search'),
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
			'id_konektivitas' => 'Id Konektivitas',
			'id_menu' => 'Id Menu',
			'id_menu_admin' => 'Id Menu Admin',
			'isi' => 'Isi',
			'nama_file' => 'Nama File',
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

		$criteria->compare('id_konektivitas',$this->id_konektivitas);
		$criteria->compare('id_menu',$this->id_menu);
		$criteria->compare('id_menu_admin',$this->id_menu_admin);
		$criteria->compare('isi',$this->isi,true);
		$criteria->compare('nama_file',$this->nama_file,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}