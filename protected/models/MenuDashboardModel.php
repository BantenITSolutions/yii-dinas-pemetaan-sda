<?php

/**
 * This is the model class for table "tbl_menu_dashboard".
 *
 * The followings are the available columns in table 'tbl_menu_dashboard':
 * @property integer $id_menu_dashboard
 * @property string $menu
 * @property string $url_route
 */
class MenuDashboardModel extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return MenuDashboardModel the static model class
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
		return 'tbl_menu_dashboard';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('menu, url_route', 'required'),
			array('menu', 'length', 'max'=>50),
			array('url_route', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_menu_dashboard, menu, url_route', 'safe', 'on'=>'search'),
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
			'id_menu_dashboard' => 'Id Menu Dashboard',
			'menu' => 'Menu',
			'url_route' => 'Url Route',
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

		$criteria->compare('id_menu_dashboard',$this->id_menu_dashboard);
		$criteria->compare('menu',$this->menu,true);
		$criteria->compare('url_route',$this->url_route,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}