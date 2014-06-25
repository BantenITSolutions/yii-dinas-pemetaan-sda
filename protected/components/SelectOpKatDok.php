<?php

Yii::import('zii.widgets.CMenu', true);

class SelectOpKatDok extends CMenu
{
    public $id_select;
    public function init()
    {
        $items = KatDokumenModel::model()->findAll();

        foreach ($items as $item)
        {
            if($item->id_kat_dokumen==$this->id_select)
            {
                echo "<option value='".$item->id_kat_dokumen."' selected>".$item->kat_dokumen."</option>";
            }
            else
            {
                echo "<option value='".$item->id_kat_dokumen."'>".$item->kat_dokumen."</option>";
            }
        }
        parent::init();
    }
}