<?php

/**
 * This is the model class for table "tbl_subtim".
 *
 * The followings are the available columns in table 'tbl_subtim':
 * @property integer $id_subtim
 * @property integer $id_menu
 * @property integer $id_menu_admin
 * @property string $judul
 * @property string $isi
 * @property string $nama_file
 * @property string $gambar
 */
class SubtimDashboardModel extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return SubtimDashboardModel the static model class
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
		return 'tbl_subtim';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_menu, isi', 'required'),
			array('id_menu', 'numerical', 'integerOnly'=>true),
            array('nama_file', 'file',
                    'allowEmpty' => true,
                    'types' => 'pdf,ppt,pptx,xls,xlsx',
                 ),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_subtim, id_menu, isi, nama_file, gambar', 'safe', 'on'=>'search'),
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
			'id_subtim' => 'Id Subtim',
			'id_menu' => 'Id Menu',
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

		$criteria->compare('id_subtim',$this->id_subtim);
		$criteria->compare('id_menu',$this->id_menu);
		$criteria->compare('isi',$this->isi,true);
		$criteria->compare('nama_file',$this->nama_file,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}