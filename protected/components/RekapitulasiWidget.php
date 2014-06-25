<?php

class RekapitulasiWidget extends CWidget {

    public function run() {

		$criteria = new CDbCriteria();
		$criteria->order = 'urutan ASC';
        $dt = KoridorModel::model()->findAll($criteria);

        $this->render('rekapitulasi_content_views', array(
            'dt'=>$dt   
        ));
    }
}