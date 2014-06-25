<?php

Yii::import('zii.widgets.CMenu', true);

class CheckKategori extends CMenu
{
    public $id_select=array();
    public function init()
    {
        if(!empty(Yii::app()->session['id_kategori']))
        {
            $criteria = new CDbCriteria;
            $criteria->order = "id_kategori ASC";
            $criteria->condition = "id_kategori IN (".Yii::app()->session['id_kategori'].") ";
            $items = KategoriModel::model()->findAll($criteria);
            foreach ($items as $item)
            {
                echo "<li><input type='checkbox' name='id_kategori[]' value='".$item->id_kategori."' id='kategori_".$item->id_kategori."' checked> <label for='kategori_".$item->id_kategori."' >".$item->kategori."</label></li>";
            }

            $criteria2 = new CDbCriteria;
            $criteria2->order = "id_kategori ASC";
            $criteria2->condition = "id_kategori NOT IN (".Yii::app()->session['id_kategori'].") ";
            $items2 = KategoriModel::model()->findAll($criteria2);
            foreach ($items2 as $item)
            {
                echo "<li><input type='checkbox' name='id_kategori[]' value='".$item->id_kategori."' id='kategori_".$item->id_kategori."'> <label for='kategori_".$item->id_kategori."'>".$item->kategori."</label></li>";
            }
        }
        else
        {
            $criteria = new CDbCriteria;
            $criteria->order = "id_kategori ASC";
            $items = KategoriModel::model()->findAll($criteria);
            foreach ($items as $item)
            {
                echo "<li><input type='checkbox' name='id_kategori[]' value='".$item->id_kategori."' id='kategori_".$item->id_kategori."'> <label for='kategori_".$item->id_kategori."' >".$item->kategori."</label></li>";
            }
        }
        parent::init();
    }
}