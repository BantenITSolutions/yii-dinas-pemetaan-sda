<?php

/**
 * This is the model class for table "tbl_galeri".
 *
 * The followings are the available columns in table 'tbl_galeri':
 * @property integer $id_galeri
 * @property integer $id_album
 * @property string $judul
 * @property string $gambar
 */
class GaleriDashboardModel extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return GaleriDashboardModel the static model class
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
		return 'tbl_galeri';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_album, judul', 'required'),
			array('id_album', 'numerical', 'integerOnly'=>true),
			array('judul', 'length', 'max'=>150),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_galeri, id_album, judul, gambar', 'safe', 'on'=>'search'),
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
		return array(
			'Album'=>array(self::BELONGS_TO,'AlbumDashboardModel','id_album'),
			);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_galeri' => 'Id Galeri',
			'id_album' => 'Id Album',
			'judul' => 'Judul',
			'gambar' => 'Gambar',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search($id)
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id_album',$id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}