<?php

/**
 * This is the model class for table "tbl_hubungi".
 *
 * The followings are the available columns in table 'tbl_hubungi':
 * @property integer $id_hubungi
 * @property string $nama
 * @property string $email
 * @property string $alamat
 * @property string $pesan
 */
class ContactModel extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return ContactModel the static model class
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
		return 'tbl_hubungi';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nama, email, alamat, pesan', 'required'),
			array('nama, email', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_hubungi, nama, email, alamat, pesan', 'safe', 'on'=>'search'),
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
			'id_hubungi' => 'Id Hubungi',
			'nama' => 'Nama',
			'email' => 'Email',
			'alamat' => 'Alamat',
			'pesan' => 'Pesan / Pertanyaan',
			'stts' => 'Status',
			'kode_gen' => 'Nomor Ticket',
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

		$criteria->compare('id_hubungi',$this->id_hubungi);
		$criteria->compare('nama',$this->nama,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('alamat',$this->alamat,true);
		$criteria->compare('pesan',$this->pesan,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}