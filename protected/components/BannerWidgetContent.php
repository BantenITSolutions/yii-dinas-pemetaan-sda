<?php

class BannerWidgetContent extends CWidget {

    public function run() 
    {
        $dt_banner = BannerModel::model()->findAll();

        $this->render('banner_content_views', array(
            'dt_banner'=>$dt_banner   
        ));
    }
}