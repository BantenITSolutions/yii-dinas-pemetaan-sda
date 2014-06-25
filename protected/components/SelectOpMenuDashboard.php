<?php

Yii::import('zii.widgets.CMenu', true);

class SelectOpMenuDashboard extends CMenu
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
        $items = DashboardMenuModel::model()->findAll($criteria);

        foreach ($items as $item)
        {
            $mark = "";
        
            $criteria2 = new CDbCriteria;
            $criteria2->condition = 'id_parent = '.$item->id_menu_admin.' ';
            $items = DashboardMenuModel::model()->findAll($criteria2);

            
            if($item->id_parent==0)
            {
                $mark='';
            }
            else if(DashboardMenuModel::model()->count($criteria2)>0 || $item->id_parent!=0)
            {
                $mark = "--";
            }
            if($item->id_menu_admin==$this->id_select)
            {
                $hasil .= "<option value='".$item->id_menu_admin."' selected>".$mark." ".$item->menu;
                $hasil = $this->menu_rek($item->id_menu_admin,$hasil);
                $hasil .= "</option>";
            }
            else
            {

                $hasil .= "<option value='".$item->id_menu_admin."'>".$mark." ".$item->menu;
                $hasil = $this->menu_rek($item->id_menu_admin,$hasil);
                $hasil .= "</option>";
            }
        }

        return $hasil;
    }
}