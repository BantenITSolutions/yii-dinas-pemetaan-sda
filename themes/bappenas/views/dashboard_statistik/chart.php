<style type="text/css">
body{
	font-size: 12px;
	font-family: Arial;
	margin: 0px;
	padding: 0px;
}
ul{
	margin: 0px;
	padding: 0px;
	list-style: none;
}
ul li{
	padding: 0px;
	margin: 0px;
	clear: both;
}
.chart{
	float: left;
	padding: 10px;
}
.title{
	width: 95%;
	padding: 10px;
	float: none;
	text-align: center;
}
.title h3 a{
	text-decoration: none;
	color: #666;
}
.title h3 a:hover{
	text-decoration: underline;
	color: #000;
}
</style>
<?php $st = new DetailStatistik(); ?>
<?php $header_attr = $st->attributeLabels(); ?>

<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/FusionCharts.js"></script>
<ul>
<?php foreach($dt_header as $dt_g): ?>
					
	<li>
		<div class="title"><h3><a href="<?php echo Yii::app()->baseUrl; ?>/dashboard_statistik/detail/<?php echo $dt_g['id_header_statistik']; ?>">Statistik Dwelling Time <?php echo $dt_g['jalur']; ?></a></h3></div>
		<div class="chart" id="container_<?php echo $dt_g['id_header_statistik']; ?>"></div>
		<div class="chart" id="line_<?php echo $dt_g['id_header_statistik']; ?>"></div>
	</li>
	<script type="text/javascript">
    var charts_<?php echo $dt_g['id_header_statistik']; ?> = new FusionCharts("StackedColumn3D", "ChartId", "400", "325", "0", "0");
		   charts_<?php echo $dt_g['id_header_statistik']; ?>.setJSONData( { 
              "chart": 
              { 
                    "caption" : "<?php echo $dt_g['jalur']; ?>" , 
				    "basefontcolor": "000",
				    "pieyscale": "70",
				    "pieslicedepth": "30",
        			"exportenabled": "1",
			        "exportatclient": "0",
			        "exporthandler": "fcExporter1",
              },

			  "categories": 
			  [
			    {
			      "category": [
			        <?php
			        $criteria = new CDbCriteria;
							        $criteria->condition = "id_header_statistik = '".$dt_g['id_header_statistik']."' ";
			        $criteria->order = "id_detail_statistik ASC";
					$dt_det = DetailStatistik::model()->findAll($criteria);
					foreach($dt_det as $dt_detail):
		            ?>
		                { "label" : "<?php echo $dt_detail['bulan']; ?>"},
		            <?php endforeach; ?>
			      ]
			    }
			  ],

              "dataset": [
    {
      "seriesname": "<?php echo $header_attr['pre_clearance']; ?>",
      "data": 
      [
  		<?php
		    $criteria = new CDbCriteria;
							        $criteria->condition = "id_header_statistik = '".$dt_g['id_header_statistik']."' ";
			$criteria->order = "id_detail_statistik ASC";
			$dt_det = DetailStatistik::model()->findAll($criteria);
			foreach($dt_det as $dt_detail):
		    ?>
		        { "value" : "<?php echo $dt_detail['pre_clearance']; ?>"},
	    <?php endforeach; ?>
      ]
    },
    {
      "seriesname": "<?php echo $header_attr['customs_clearance']; ?>",
      "data": 
      [
  		<?php
		    $criteria = new CDbCriteria;
							        $criteria->condition = "id_header_statistik = '".$dt_g['id_header_statistik']."' ";
			$criteria->order = "id_detail_statistik ASC";
			$dt_det = DetailStatistik::model()->findAll($criteria);
			foreach($dt_det as $dt_detail):
		    ?>
		        { "value" : "<?php echo $dt_detail['customs_clearance']; ?>"},
	    <?php endforeach; ?>
      ]
    },
    {
      "seriesname": "<?php echo $header_attr['posts_clearance']; ?>",
      "data": 
      [
  		<?php
		    $criteria = new CDbCriteria;
							        $criteria->condition = "id_header_statistik = '".$dt_g['id_header_statistik']."' ";
			$criteria->order = "id_detail_statistik ASC";
			$dt_det = DetailStatistik::model()->findAll($criteria);
			foreach($dt_det as $dt_detail):
		    ?>
		        { "value" : "<?php echo $dt_detail['posts_clearance']; ?>"},
	    <?php endforeach; ?>
      ]
    }
  ]

      } );		   
   charts_<?php echo $dt_g['id_header_statistik']; ?>.render("container_<?php echo $dt_g['id_header_statistik']; ?>");


   var line_<?php echo $dt_g['id_header_statistik']; ?> = new FusionCharts("Line", "ChartId", "375", "325", "0", "0");
	   line_<?php echo $dt_g['id_header_statistik']; ?>.setJSONData( { 
          "chart": 
          { 
                "caption" : "<?php echo $dt_g['jalur']; ?>" , 
			    "basefontcolor": "000",
			    "pieyscale": "70",
			    "pieslicedepth": "30",
    			"exportenabled": "1",
		        "exportatclient": "0",
		        "exporthandler": "fcExporter1",
          },

          "data" : 
          [ 
          	<?php
		        $criteria = new CDbCriteria;
							        $criteria->condition = "id_header_statistik = '".$dt_g['id_header_statistik']."' ";
				$criteria->order = "id_detail_statistik ASC";
				$dt_det = DetailStatistik::model()->findAll($criteria);
				foreach($dt_det as $dt_detail):
					$jum = $dt_detail['posts_clearance']+$dt_detail['customs_clearance']+$dt_detail['pre_clearance'];
            ?>
                { "label" : "<?php echo $dt_detail['bulan']; ?>", "value" : "<?php echo $jum; ?>"},
            <?php endforeach; ?>
          ],

  } );		   
   line_<?php echo $dt_g['id_header_statistik']; ?>.render("line_<?php echo $dt_g['id_header_statistik']; ?>");
  </script>
<?php endforeach; ?>
</ul>