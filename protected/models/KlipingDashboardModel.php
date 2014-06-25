<?php

/**
 * This is the model class for table "tbl_kliping".
 *
 * The followings are the available columns in table 'tbl_kliping':
 * @property integer $id_kliping
 * @property string $judul
 * @property string $tanggal
 * @property string $keterangan
 * @property string $nama_file
 * @property string $bulan
 * @property integer $tahun
 */
class KlipingDashboardModel extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return KlipingDashboardModel the static model class
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
		return 'tbl_kliping';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('judul, keterangan, bulan, tahun', 'required'),
			array('tahun', 'numerical', 'integerOnly'=>true),
			array('judul', 'length', 'max'=>150),
			array('tanggal, nama_file', 'length', 'max'=>50),
			array('bulan', 'length', 'max'=>5),
            array('nama_file', 'file',
                    'allowEmpty' => true,
                    'types' => 'pdf,ppt,pptx,xls,xlsx',
                 ),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_kliping, judul, tanggal, keterangan, nama_file, bulan, tahun', 'safe', 'on'=>'search'),
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
			'id_kliping' => 'Id Kliping',
			'judul' => 'Judul',
			'tanggal' => 'Tanggal',
			'keterangan' => 'Keterangan',
			'nama_file' => 'Nama File',
			'bulan' => 'Bulan',
			'tahun' => 'Tahun',
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

		$criteria->compare('id_kliping',$this->id_kliping);
		$criteria->compare('judul',$this->judul,true);
		$criteria->compare('tanggal',$this->tanggal,true);
		$criteria->compare('keterangan',$this->keterangan,true);
		$criteria->compare('nama_file',$this->nama_file,true);
		$criteria->compare('bulan',$this->bulan,true);
		$criteria->compare('tahun',$this->tahun);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}