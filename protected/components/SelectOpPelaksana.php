<?php

Yii::import('zii.widgets.CMenu', true);

class SelectOpPelaksana extends CMenu
{
    public $id_select;
    public function init()
    {
        $items = PelaksanaModel::model()->findAll();

        foreach ($items as $item)
        {
            if($item->id_pelaksana==$this->id_select)
            {
                echo "<option value='".$item->id_pelaksana."' selected>".$item->pelaksana."</option>";
            }
            else
            {
                echo "<option value='".$item->id_pelaksana."'>".$item->pelaksana."</option>";
            }
        }
        parent::init();
    }
}