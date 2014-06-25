<?php

class ProfilWidget extends CWidget {

    public function run() {

		$criteria = new CDbCriteria();
		$criteria->order = 'id_profil ASC';
        $dt_profil = ProfilModel::model()->findAll($criteria);

        $this->render('profil_content_views', array(
            'dt_profil'=>$dt_profil   
        ));
    }
}