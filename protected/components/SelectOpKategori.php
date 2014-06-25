<?php

Yii::import('zii.widgets.CMenu', true);

class SelectOpKategori extends CMenu
{
    public $id_select;
    public function init()
    {
        $items = KategoriModel::model()->findAll();

        foreach ($items as $item)
        {
            if($item->id_kategori==$this->id_select)
            {
                echo "<option value='".$item->id_kategori."' selected>".$item->kategori."</option>";
            }
            else
            {
                echo "<option value='".$item->id_kategori."'>".$item->kategori."</option>";
            }
        }
        parent::init();
    }
}