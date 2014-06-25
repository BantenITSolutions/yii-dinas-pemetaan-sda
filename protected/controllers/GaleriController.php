<?php

class GaleriController extends Controller
{
	public function actionIndex()
	{
		$offset = Yii::app()->getRequest()->getQuery('id');
		if(empty($offset)){$offset=0;}
        $criteria = new CDbCriteria;

        $criteria->offset = $offset;
        $criteria->limit = 7;
        $criteria->order = 'id_galeri DESC';
		$dt = GaleriModel::model()->findAll($criteria);

		$this->renderPartial('index',array("dt"=>$dt));
	}

	public function actionAlbum()
	{
		$uri = Yii::app()->getRequest()->getQuery('id');
		if(empty($_GET)){return false;}

        $criteria = new CDbCriteria;
        $criteria->condition = 'id_album = '.strip_tags($_GET['album']).'';
        $criteria->offset = strip_tags($_GET['offset']);
        $criteria->limit = 7;
        $criteria->order = 'id_galeri DESC';
		$dt = GaleriModel::model()->findAll($criteria);

		$this->renderPartial('index',array("dt"=>$dt));
	}
}