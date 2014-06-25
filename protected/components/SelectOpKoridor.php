<?php

Yii::import('zii.widgets.CMenu', true);

class SelectOpKoridor extends CMenu
{
    public $id_select;
    public function init()
    {
        $items = KoridorModel::model()->findAll();
        foreach ($items as $item)
        {
            if($item->id_koridor==$this->id_select)
            {
                echo "<option value='".$item->id_koridor."' selected>".$item->koridor."</option>";
            }
            else
            {
                echo "<option value='".$item->id_koridor."'>".$item->koridor."</option>";
            }
        }
        parent::init();
    }
}