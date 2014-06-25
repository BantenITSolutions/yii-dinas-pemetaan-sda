<?php

Yii::import('zii.widgets.CMenu', true);

class CekAkses extends CMenu
{
    public $id_select;
    public function init()
    {
        if(Yii::app()->user->status_user=="user_cms")
        {
            $criteria = new CDbCriteria;
            $criteria->condition = "url_route = '".$this->id_select."'";
            $dt = DashboardMenuModel::model()->find($criteria);
            $id_menu_admin = $dt->id_menu_admin;

            $criteria2 = new CDbCriteria;
            $criteria2->condition = "id = '".Yii::app()->user->id."'";
            $dt2 = UserDashboardModel::model()->find($criteria2);
            $access_menu = explode(",",$dt2->access_menu);

            $arr = array();
            for($i=0;$i<count($access_menu);$i++)
            {
                array_push($arr,$access_menu[$i]);
            }
            
            if(!in_array($id_menu_admin, $arr))
            {
                ?><script type="text/javascript">window.location.href='<?php echo Yii::app()->baseUrl; ?>';</script><?php
            }
        }
        else if(Yii::app()->user->status_user=="user_dashboard")
        {
            $criteria = new CDbCriteria;
            $criteria->condition = "url_route = '".$this->id_select."'";
            $dt = MenuDashboardModel::model()->find($criteria);
            $id_menu_dashboard = $dt->id_menu_dashboard;

            $criteria2 = new CDbCriteria;
            $criteria2->condition = "id = '".Yii::app()->user->id."'";
            $dt2 = DashboardUserModel::model()->find($criteria2);
            $access_menu = explode(",",$dt2->access_menu);

            $arr = array();
            for($i=0;$i<count($access_menu);$i++)
            {
                array_push($arr,$access_menu[$i]);
            }
            
            if(!in_array($id_menu_dashboard, $arr))
            {
                ?><script type="text/javascript">window.location.href='<?php echo Yii::app()->baseUrl; ?>';</script><?php
            }
        }
        parent::init();
    }
}