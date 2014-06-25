<?php

class GaleriWidgetContent extends CWidget {

    public $id_param="";
    public function run() 
    {
        $criteria = new CDbCriteria;
        $criteria->order = 'id_galeri DESC';
        $criteria->limit = 7;
        $criteria->offset = 0;

        $dt_album = AlbumModel::model()->findAll();
        $dt_galeri = GaleriModel::model()->findAll($criteria);

        $this->render('galeri_content_views', array(
            'dt_galeri'=>$dt_galeri,
            'dt_album'=>$dt_album,
        ));
    }
}