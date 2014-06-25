<?php

Yii::import('zii.widgets.CMenu', true);

class SelectOpSektor extends CMenu
{
    public $id_select;
    public function init()
    {
        $items = SektorModel::model()->findAll();

        foreach ($items as $item)
        {
            if($item->id_sektor==$this->id_select)
            {
                echo "<option value='".$item->id_sektor."' selected>".$item->sektor."</option>";
            }
            else
            {
                echo "<option value='".$item->id_sektor."'>".$item->sektor."</option>";
            }
        }
        parent::init();
    }
}