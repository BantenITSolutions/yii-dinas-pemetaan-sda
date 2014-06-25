<?php

Yii::import('zii.widgets.CMenu', array(
    'id'=>'menu',
    'htmlOptions'=>array('class'=>'menu'),
));

class DashboardMenu extends CMenu
{
   public function init()
    {
        echo $this->menu_rek(0,$h="");
        parent::init();
    }

    public function menu_rek($parent=0,$hasil)
    {
        if(Yii::app()->user->status_user=="user_cms")
        {
            $stack = array();
            $count = explode(",",Yii::app()->user->access_menu);
            for($i=0;$i<count($count);$i++)
            {
                array_push($stack, intval($count[$i]));
            }

            $icon = array("dash","files","graphs","forms","login","typo","tables","cal","gallery","widgets","files","errors","pic","contacts");

            $spn_akhir='</span>'; $spn_awal='<span>';
            $criteria = new CDbCriteria;
            $criteria->condition = 'id_parent = '.$parent.' ';
            $criteria->addInCondition("id_menu_admin", $stack);
            $items = DashboardMenuModel::model()->findAll($criteria);

            if($parent!=0 && DashboardMenuModel::model()->count($criteria)>0){$hasil .= "<ul class='sub'>";}//sub
            else if($parent==0 && DashboardMenuModel::model()->count($criteria)>0){$hasil .= "<ul id='menu'>";}//main

            $no = 0;
            foreach ($items as $item)
            {
                $exp = '';
                $mark ='';
                $criteria2 = new CDbCriteria;
                $criteria2->condition = 'id_parent = '.$item->id_menu_admin.' ';
                $criteria2->addInCondition("id_menu_admin", $stack);
                if($parent==0 && DashboardMenuModel::model()->count($criteria2)>0){$exp = 'exp'; $spn_akhir='</span>'; $spn_awal='<span>'; $mark="<span class='numberLeft'>".DashboardMenuModel::model()->count($criteria2)."</span>";}//main
                if(DashboardMenuModel::model()->count($criteria2)>0){$exp = 'exp'; $spn_akhir='</span>'; $spn_awal='<span>'; $mark="<span class='numberLeft'>".DashboardMenuModel::model()->count($criteria2)."</span>";}//main
                $hasil .= "<li class='".$icon[$no]."'><a href='".Yii::app()->baseUrl."/cms/route/".$item->id_menu_admin."' class='".$exp."'>".$spn_awal." ".$item->menu." ".$mark." ".$spn_akhir."</a>";
                $hasil = $this->menu_rek($item->id_menu_admin,$hasil);
                $hasil .= "</li>";
                $no++;
                if($no==14){$no=0;}
            }
            if(DashboardMenuModel::model()->count($criteria)>0)
            {
                $hasil .= "</ul>";
            }
        }
        else if(Yii::app()->user->status_user=="user_dashboard")
        {
            $stack = array();
            $count = explode(",",Yii::app()->user->access_menu);
            for($i=0;$i<count($count);$i++)
            {
                array_push($stack, intval($count[$i]));
            }

            $spn_akhir='</span>'; $spn_awal='<span>';
            $criteria = new CDbCriteria;
            $criteria->addInCondition("id_menu_dashboard", $stack);
            $items = MenuDashboardModel::model()->findAll($criteria);

            $icon = array("dash","files","graphs","forms","login","typo","tables","cal","gallery","widgets","files","errors","pic","contacts");
            
            $hasil .= "<ul id='menu'>"; 
            $no = 0;
            foreach ($items as $item)
            {
                $exp = '';
                $criteria2 = new CDbCriteria;
                $criteria2->addInCondition("id_menu_dashboard", $stack);

                $spn_akhir='</span>'; 
                $spn_awal='<span>'; 

                $hasil .= "<li class='".$icon[$no]."'><a href='".Yii::app()->baseUrl."/dashboard/route/".$item->id_menu_dashboard."'>".$spn_awal." ".$item->menu." ".$spn_akhir."</a>";
                $hasil .= "</li>";

                $no++;
            }

            $hasil .= "</ul>";
        }
        
        return $hasil;
    }
}