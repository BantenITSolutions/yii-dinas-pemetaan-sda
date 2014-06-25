<?php

Yii::import('zii.widgets.CMenu', true);

class FooterMenu extends CMenu
{
    public function init()
    {
        $criteria = new CDbCriteria;
        $criteria->condition = "id_parent = '0' and posisi='header' ";
        $items = MenuModel::model()->findAll($criteria);

        foreach ($items as $item)
        {
            $this->items[] = array('label'=>$item->menu, 'url'=>Yii::app()->baseUrl.'/'.$item->url_route);
        }
        parent::init();
    }
}