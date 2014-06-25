<?php

class LinkInternalWidget extends CWidget {

    public function run() 
    {
        $dt = LinkInternal::model()->findAll();

        foreach($dt as $d)
        {
            echo '<div id="img-menu">';
	        $img_link_intern = CHtml::image(''.Yii::app()->theme->baseUrl.'/images/other-link.png','Link Internal', array('width'=>'15','height'=>'15') );
	        echo CHtml::link($img_link_intern, $d->url_link, array("target" => "_blank"));
	        echo $d->judul_link;
            echo '</div>';
        }

    }
}