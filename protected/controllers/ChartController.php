<?php

class ChartController extends Controller
{
	public function actionIndex()
	{
		$param = Yii::app()->getRequest()->getQuery('id');
		if(empty($param)){$param=0;}
        $criteria = new CDbCriteria;
        $criteria->condition = 'id_kat_chart = '.$param.'';
        $criteria->order = 'id_chart_header DESC';
		$dt = ChartHeaderModel::model()->findAll($criteria);

		$this->renderPartial('index',array("dt"=>$dt));
	}
}