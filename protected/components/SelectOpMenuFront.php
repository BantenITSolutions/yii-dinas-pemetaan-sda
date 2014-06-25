<?php

Yii::import('zii.widgets.CMenu', true);

class SelectOpMenuFront extends CMenu
{
    public $id_select;
    public function init()
    {
        echo $this->menu_rek(0,$h="");
        parent::init();
    }

    public function menu_rek($parent=0,$hasil)
    {
        $criteria = new CDbCriteria;
        $criteria->condition = 'id_parent = '.$parent.' ';
        $items = MenuModel::model()->findAll($criteria);

        foreach ($items as $item)
        {
            $mark = "";
        
            $criteria2 = new CDbCriteria;
            $criteria2->condition = 'id_parent = '.$item->id_menu.' ';
            $items = MenuModel::model()->findAll($criteria2);

            
            if($item->id_parent==0)
            {
                $mark='';
            }
            else if(MenuModel::model()->count($criteria2)>0 || $item->id_parent!=0)
            {
                $mark = "--";
            }
            if($item->id_menu==$this->id_select)
            {
                $hasil .= "<option value='".$item->id_menu."' selected>".$mark." ".$item->menu;
                $hasil = $this->menu_rek($item->id_menu,$hasil);
                $hasil .= "</option>";
            }
            else
            {

                $hasil .= "<option value='".$item->id_menu."'>".$mark." ".$item->menu;
                $hasil = $this->menu_rek($item->id_menu,$hasil);
                $hasil .= "</option>";
            }
        }

        return $hasil;
    }
}