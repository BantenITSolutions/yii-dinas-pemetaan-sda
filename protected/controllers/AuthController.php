<?php

class AuthController extends Controller
{

	public function actionIndex()
	{
        $criteria = new CDbCriteria;
        $criteria->condition = 'url_route = "'.Yii::app()->getRequest()->getQuery('id').'"';
        $dt = DashboardMenuModel::model()->find($criteria);
        echo $id_menu_admin = $dt->id_menu_admin;

        $criteria2 = new CDbCriteria;
        $criteria2->condition = 'id = "'.Yii::app()->user->id.'" and access_menu IN ('.$id_menu_admin.')';
        $dt2 = UserDashboardModel::model()->find($criteria2);
        if(count($dt2)>0)
        {
        	echo "boleh";
        }
        //Yii::app()->user->access_menu;
	}
}