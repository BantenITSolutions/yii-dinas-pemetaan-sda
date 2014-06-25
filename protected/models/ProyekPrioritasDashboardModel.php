<?php

/**
 * This is the model class for table "tbl_proyek_prioritas".
 *
 * The followings are the available columns in table 'tbl_proyek_prioritas':
 * @property integer $id_proyek_prioritas
 * @property string $isi
 * @property string $tanggal
 * @property integer $id_infrastruktur
 */
class ProyekPrioritasDashboardModel extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return ProyekPrioritasDashboardModel the static model class
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
		return 'tbl_proyek_prioritas';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('isi, tanggal, id_infrastruktur', 'required'),
			array('id_infrastruktur', 'numerical', 'integerOnly'=>true),
			array('tanggal', 'length', 'max'=>50),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_proyek_prioritas, isi, tanggal, id_infrastruktur', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		return array(
			'Infrastruktur'=>array(self::BELONGS_TO,'InfrastrukturModel','id_infrastruktur'),
			);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_proyek_prioritas' => 'Id Proyek Prioritas',
			'isi' => 'Isi',
			'tanggal' => 'Tanggal',
			'id_infrastruktur' => 'Judul',
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

		$criteria->compare('id_proyek_prioritas',$this->id_proyek_prioritas);
		$criteria->compare('isi',$this->isi,true);
		$criteria->compare('tanggal',$this->tanggal,true);
		$criteria->compare('id_infrastruktur',$this->id_infrastruktur);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}