<?php

class BeritaSidebarContent extends CWidget {

    public function run() 
    {
		$criteria = new CDbCriteria();
		$criteria->limit = 1;
		$criteria->order = 'id_berita DESC';
        if(Yii::app()->user->isGuest)
        {
            $criteria->condition = "jenis='public'";
        }
        $dt_berita = BeritaModel::model()->findAll($criteria);

        $this->render('berita_sidebar_content_views', array(
            'dt_berita'=>$dt_berita   
        ));
    }
}