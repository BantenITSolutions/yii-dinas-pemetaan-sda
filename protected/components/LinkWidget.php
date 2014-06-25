<?php

class LinkWidget extends CWidget {

    public function run() {

        $dt_link = LinkModel::model()->findAll();

        $this->render('link_views', array(
            'dt_link'=>$dt_link   
        ));
    }
}