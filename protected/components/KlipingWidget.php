<?php

class KlipingWidget extends CWidget {

    public function run() {

        $dt_kliping = KlipingModel::model()->findAll();

        $this->render('kliping_views', array(
            'dt_kliping'=>$dt_kliping   
        ));
    }
}