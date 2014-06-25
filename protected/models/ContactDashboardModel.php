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
 * @property string $tanggal
 * @property string $ip_address
 */
class ContactDashboardModel extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return ContactDashboardModel the static model class
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
			array('nama, email, alamat, pesan, tanggal, ip_address, stts', 'required'),
			array('nama, email, stts', 'length', 'max'=>100),
			array('tanggal, ip_address', 'length', 'max'=>50),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_hubungi, nama, email, kode_gen, pesan, tanggal, ip_address', 'safe', 'on'=>'search'),
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
			'pesan' => 'Pesan',
			'tanggal' => 'Tanggal',
			'ip_address' => 'Ip Address',
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
		$criteria->compare('kode_gen',$this->kode_gen,true);
		$criteria->compare('nama',$this->nama,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('alamat',$this->alamat,true);
		$criteria->compare('pesan',$this->pesan,true);
		$criteria->compare('tanggal',$this->tanggal,true);
		$criteria->compare('ip_address',$this->ip_address,true);
		$criteria->compare('stts',$this->stts,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}