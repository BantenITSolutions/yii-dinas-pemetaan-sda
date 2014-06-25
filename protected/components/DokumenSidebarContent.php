<?php

class DokumenSidebarContent extends CWidget {

    public function run() 
    {
        $criteria = new CDbCriteria;
        $criteria->order = 'id_dokumen DESC';
        if(Yii::app()->user->isGuest)
        {
            $criteria->condition = "jenis='public'";
        }

        $dt_kat = KatDokumenModel::model()->findAll();
        $dt_dokumen = DokumenModel::model()->findAll($criteria);

        $this->render('kat_dokumen_sidebar_views', array(
            'dt_kat'=>$dt_kat,
            'dt_dokumen'=>$dt_dokumen,
        ));
    }
}