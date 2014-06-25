<?php

Yii::import('zii.widgets.CMenu', true);

class SelectOpUnitKerja extends CMenu
{
    public $id_select;
    public function init()
    {
        $items = UnitKerjaModel::model()->findAll();

        foreach ($items as $item)
        {
            if($item->id_unit_kerja==$this->id_select)
            {
                echo "<option value='".$item->id_unit_kerja."' selected>".$item->unit_kerja."</option>";
            }
            else
            {
                echo "<option value='".$item->id_unit_kerja."'>".$item->unit_kerja."</option>";
            }
        }
        parent::init();
    }
}