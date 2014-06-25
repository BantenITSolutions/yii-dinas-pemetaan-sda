<?php

class ProfilWidgetContent extends CWidget {

    public function run() 
    {
        $criteria = new CDbCriteria;
        $criteria->condition = 'widget_st = 0';

        $dt_profil = ProfilModel::model()->findAll($criteria);

        $this->render('profil_content_views', array(
            'dt_profil'=>$dt_profil   
        ));
    }
}