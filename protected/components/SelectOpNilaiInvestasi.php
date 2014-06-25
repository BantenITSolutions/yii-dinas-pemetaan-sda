<?php

Yii::import('zii.widgets.CMenu', true);

class SelectOpNilaiInvestasi extends CMenu
{
    public $id_select;
    public function init()
    {
        $items = NilaiInvestasiModel::model()->findAll();

        foreach ($items as $item)
        {
            if($item->id_nilai_investasi==$this->id_select)
            {
                echo "<option value='".$item->id_nilai_investasi."' selected>".$item->nilai_investasi."</option>";
            }
            else
            {
                echo "<option value='".$item->id_nilai_investasi."'>".$item->nilai_investasi."</option>";
            }
        }
        parent::init();
    }
}