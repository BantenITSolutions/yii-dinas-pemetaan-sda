<?php

Yii::import('zii.widgets.CMenu', true);

class LegendaSektor extends CMenu
{
    public function init()
    {

        $criteria = new CDbCriteria;
        $criteria->order = "id_sektor ASC";
        $items = SektorModel::model()->findAll($criteria);
        foreach ($items as $item)
        {
            echo "<li><img src='".Yii::app()->theme->baseUrl."/icon/".$item->id_sektor.".png'> ".$item->sektor."</li>";
        }  
    }
}