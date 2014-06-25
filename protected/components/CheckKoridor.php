<?php

Yii::import('zii.widgets.CMenu', true);

class CheckKoridor extends CMenu
{
    public $id_select=array();
    public function init()
    {
        if(!empty(Yii::app()->session['id_koridor']))
        {
            $param_koridor = "";
            if(is_array(Yii::app()->session['id_koridor']))
            {
                for($i=0;$i<count(Yii::app()->session['id_koridor']);$i++)
                {
                    if(!empty($param_koridor))
                    {
                        $param_koridor = $param_koridor.','.Yii::app()->session['id_koridor'][$i];
                    }
                    else
                    {
                        $param_koridor = Yii::app()->session['id_koridor'][$i];
                    }
                }
            }
            else
            {
                $param_koridor = Yii::app()->session['id_koridor'];
            }

            $criteria = new CDbCriteria;
            $criteria->order = "id_koridor ASC";
            $criteria->condition = "id_koridor IN (".$param_koridor.") ";
            $items = KoridorModel::model()->findAll($criteria);
            foreach ($items as $item)
            {
                echo "<li><input type='checkbox' name='id_koridor[]' value='".$item->id_koridor."' id='koridor_".$item->id_koridor."' checked> <label for='koridor_".$item->id_koridor."' >".$item->koridor."</label></li>";
            }

            $criteria2 = new CDbCriteria;
            $criteria2->order = "id_koridor ASC";
            $criteria2->condition = "id_koridor NOT IN (".$param_koridor.") ";
            $items2 = KoridorModel::model()->findAll($criteria2);
            foreach ($items2 as $item)
            {
                echo "<li><input type='checkbox' name='id_koridor[]' value='".$item->id_koridor."' id='koridor_".$item->id_koridor."'> <label for='koridor_".$item->id_koridor."'>".$item->koridor."</label></li>";
            }
        }
        else
        {
            $criteria = new CDbCriteria;
            $criteria->order = "id_koridor ASC";
            $items = KoridorModel::model()->findAll($criteria);
            foreach ($items as $item)
            {
                echo "<li><input type='checkbox' name='id_koridor[]' value='".$item->id_koridor."' id='koridor_".$item->id_koridor."'> <label for='koridor_".$item->id_koridor."' >".$item->koridor."</label></li>";
            }
        }
        parent::init();
    }
}