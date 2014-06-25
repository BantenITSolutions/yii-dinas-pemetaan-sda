<?php

Yii::import('zii.widgets.CMenu', true);

class SelectOpTempat extends CMenu
{
    public $id_select;
    public function init()
    {
        $items = TempatAgendaModel::model()->findAll();

        foreach ($items as $item)
        {
            if($item->id_tempat==$this->id_select)
            {
                echo "<option value='".$item->id_tempat."' selected>".$item->tempat."</option>";
            }
            else
            {
                echo "<option value='".$item->id_tempat."'>".$item->tempat."</option>";
            }
        }
        parent::init();
    }
}