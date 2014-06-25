<?php

class ProyekPrioritasWidget extends CWidget {

    public function run() 
    {
		$criteria = new CDbCriteria();
		$criteria->limit = 5;
		$criteria->order = 'id_proyek_prioritas DESC';
        $dt_berita = ProyekPrioritasModel::model()->findAll($criteria);

        $dt_proyek = ProyekPrioritasModel::model()->findAll($criteria);

        $this->render('proyek_prioritas_views', array(
            'dt_proyek'=>$dt_proyek   
        ));
    }
}