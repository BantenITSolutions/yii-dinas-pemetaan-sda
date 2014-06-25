<?php

class BeritaWidgetContent extends CWidget {

    public function run() 
    {
		$criteria = new CDbCriteria();
		$criteria->limit = 4;
        if(Yii::app()->user->isGuest)
        {
            $criteria->condition = "jenis='public'";
        }
		$criteria->order = 'id_berita DESC';
        $dt_berita = BeritaModel::model()->findAll($criteria);

        $this->render('berita_content_views', array(
            'dt_berita'=>$dt_berita   
        ));
    }
}