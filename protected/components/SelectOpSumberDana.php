<?php

Yii::import('zii.widgets.CMenu', true);

class SelectOpSumberDana extends CMenu
{
    public $id_select;
    public function init()
    {
        $items = SumberDanaModel::model()->findAll();

        foreach ($items as $item)
        {
            if($item->id_sumber_dana==$this->id_select)
            {
                echo "<option value='".$item->id_sumber_dana."' selected>".$item->sumber_dana."</option>";
            }
            else
            {
                echo "<option value='".$item->id_sumber_dana."'>".$item->sumber_dana."</option>";
            }
        }
        parent::init();
    }
}