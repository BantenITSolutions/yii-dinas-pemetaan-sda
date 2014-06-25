<?php

Yii::import('zii.widgets.CMenu', true);

class SelectOpKawasan extends CMenu
{
    public $id_select;
    public function init()
    {
        $items = KawasanModel::model()->findAll();

        foreach ($items as $item)
        {
            if($item->id_kawasan==$this->id_select)
            {
                echo "<option value='".$item->id_kawasan."' selected>".$item->kawasan."</option>";
            }
            else
            {
                echo "<option value='".$item->id_kawasan."'>".$item->kawasan."</option>";
            }
        }
        parent::init();
    }
}