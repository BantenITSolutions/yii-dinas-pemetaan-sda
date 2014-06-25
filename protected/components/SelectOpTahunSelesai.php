<?php

Yii::import('zii.widgets.CMenu', true);

class SelectOpTahunSelesai extends CMenu
{
    public $id_select;
    public function init()
    {
        for ($i=1980;$i<=date("Y")+30;$i++)
        {
            if($i==$this->id_select)
            {
                echo "<option value='".$i."' selected>".$i."</option>";
            }
            else
            {
                echo "<option value='".$i."'>".$i."</option>";
            }
        }
        parent::init();
    }
}
