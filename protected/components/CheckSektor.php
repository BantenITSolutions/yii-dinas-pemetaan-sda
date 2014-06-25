<?php

Yii::import('zii.widgets.CMenu', true);

class CheckSektor extends CMenu
{
    public $id_select=array();
    public function init()
    {
        if(!empty(Yii::app()->session['id_sektor']))
        {
            $param_sektor = "";
            if(is_array(Yii::app()->session['id_sektor']))
            {
                for($i=0;$i<count(Yii::app()->session['id_sektor']);$i++)
                {
                    if(!empty($param_sektor))
                    {
                        $param_sektor = $param_sektor.','.Yii::app()->session['id_sektor'][$i];
                    }
                    else
                    {
                        $param_sektor = Yii::app()->session['id_sektor'][$i];
                    }
                }
            }
            else
            {
                $param_sektor = Yii::app()->session['id_sektor'];
            }

            $criteria = new CDbCriteria;
            $criteria->order = "id_sektor ASC";
            $criteria->condition = "id_sektor IN (".$param_sektor.") ";
            $items = SektorModel::model()->findAll($criteria);
            foreach ($items as $item)
            {
                echo "<li><input type='checkbox' name='id_sektor[]' value='".$item->id_sektor."' id='sektor_".$item->id_sektor."' checked> <label for='sektor_".$item->id_sektor."' >".$item->sektor."</label></li>";
            }

            $criteria2 = new CDbCriteria;
            $criteria2->order = "id_sektor ASC";
            $criteria2->condition = "id_sektor NOT IN (".$param_sektor.") ";
            $items2 = SektorModel::model()->findAll($criteria2);
            foreach ($items2 as $item)
            {
                echo "<li><input type='checkbox' name='id_sektor[]' value='".$item->id_sektor."' id='sektor_".$item->id_sektor."'> <label for='sektor_".$item->id_sektor."'>".$item->sektor."</label></li>";
            }
        }
        else
        {
            $criteria = new CDbCriteria;
            $criteria->order = "id_sektor ASC";
            $items = SektorModel::model()->findAll($criteria);
            foreach ($items as $item)
            {
                echo "<li><input type='checkbox' name='id_sektor[]' value='".$item->id_sektor."' id='sektor_".$item->id_sektor."'> <label for='sektor_".$item->id_sektor."' >".$item->sektor."</label></li>";
            }
        }
    }
}