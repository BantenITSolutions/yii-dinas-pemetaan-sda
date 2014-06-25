<?php

Yii::import('zii.widgets.CMenu', true);

class ActiveMenu extends CMenu
{
    public function init()
    {
        echo $this->menu_rek(0,$h="");
        parent::init();
    }

    public function menu_rek($parent=0,$hasil)
    {
        $criteria = new CDbCriteria;
        $criteria->condition = "id_parent = ".$parent." and posisi='header' ";
        $items = MenuModel::model()->findAll($criteria);

        if(MenuModel::model()->count($criteria)>0){$hasil .= "<ul>";}

        foreach ($items as $item)
        {
            $mark = "";
        
            $criteria2 = new CDbCriteria;
            $criteria2->condition = 'id_parent = '.$item->id_menu.' ';
            $items = MenuModel::model()->findAll($criteria2);

            if(MenuModel::model()->count($criteria2)>0 && $item->id_parent==0)
            {
                $mark = CHtml::image(Yii::app()->theme->baseUrl.'/images/down.gif');
            }
            else if(MenuModel::model()->count($criteria2)>0 && $item->id_parent!=0)
            {
                $mark = CHtml::image(Yii::app()->theme->baseUrl.'/images/right.gif','',array('class'=>'arrow-right'));
            }

            if($item->id_menu==3 && Yii::app()->user->isGuest)
            {
                $hasil .= "<li><a class='boxlogin' href='".Yii::app()->baseUrl."/site/login'>".$item->menu." ".$mark."</a>";
            }
            else if($item->id_menu==6)
            {
                $hasil .= "<li><a href='".Yii::app()->baseUrl."/site/route/".$item->id_menu."' target='_blank'>".$item->menu." ".$mark."</a>";
            }
            else
            {
                $hasil .= "<li><a href='".Yii::app()->baseUrl."/site/route/".$item->id_menu."'>".$item->menu." ".$mark."</a>";
            }
            $hasil = $this->menu_rek($item->id_menu,$hasil);
            $hasil .= "</li>";
        }
        if(MenuModel::model()->count($criteria)>0)
        {
            $hasil .= "</ul>";
        }
        return $hasil;
    }
}