<?php

Yii::import('zii.widgets.CMenu', true);

class SelectOpNamaProyek extends CMenu
{
    public $id_select;
    public function init()
    {
        $items = NamaProyekModel::model()->findAll();

        foreach ($items as $item)
        {
            if($item->id_nama_proyek==$this->id_select)
            {
                echo "<option value='".$item->id_nama_proyek."' selected>".$item->nama_proyek."</option>";
            }
            else
            {
                echo "<option value='".$item->id_nama_proyek."'>".$item->nama_proyek."</option>";
            }
        }
        parent::init();
    }
}