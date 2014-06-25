<?php

class ChartWidgetContent extends CWidget {

    public function run() 
    {
        $criteria=new CDbCriteria();
        $criteria->condition = "tampil='Ya'";
        $criteria->order = 'id_header_statistik ASC';
        $model = HeaderStatistik::model()->findAll($criteria);

        $this->render('kat_chart_content_views',array(
            'model'=>$model,
        ));
    }
}