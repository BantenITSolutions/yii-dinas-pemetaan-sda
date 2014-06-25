<style type="text/css">
body{
	font-size: 12px;
	font-family: Arial;
	margin: 10px;
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
table{
	font-size: 12px;
	padding: 20px;
}.grid-view-loading
{
	background:url(loading.gif) no-repeat;
}

.grid-view
{
	padding: 15px 0;
}

.grid-view table.items
{
	background: white;
	border-collapse: collapse;
	width: 100%;
	border: 1px #D0E3EF solid;
}

.grid-view table.items th, .grid-view table.items td
{
	font-size: 0.9em;
	border: 1px white solid;
	padding: 5px;
}

.grid-view table.items th
{
	color: #000;
	background: #eee;
	padding: 5px;
	text-align: center;
}

.grid-view table.items th a
{
	color: #000;
	font-weight: bold;
	text-decoration: none;
}

.grid-view table.items th a:hover
{
	color: #000;
}

.grid-view table.items th a.asc
{
	background:url(up.gif) right center no-repeat;
	padding-right: 10px;
}

.grid-view table.items th a.desc
{
	background:url(down.gif) right center no-repeat;
	padding-right: 10px;
}

.grid-view table.items tr.even
{
	background: #F8F8F8;
}

.grid-view table.items tr.odd
{
	background: #E5F1F4;
}

.grid-view table.items tr.selected
{
	background: #BCE774;
}

.grid-view table.items tr:hover.selected
{
	background: #CCFF66;
}

.grid-view table.items tbody tr:hover
{
	background: #ECFBD4;
}

.grid-view .link-column img
{
	border: 0;
}

.grid-view .button-column
{
	text-align: center;
	width: 60px;
}

.grid-view .button-column img
{
	border: 0;
}

.grid-view .checkbox-column
{
	width: 15px;
}

.grid-view .summary
{
	margin: 0 0 5px 0;
	text-align: right;
}

.grid-view .pager
{
	margin: 5px 0 0 0;
	text-align: right;
}

.grid-view .empty
{
	font-style: italic;
}

.grid-view .filters input,
.grid-view .filters select
{
	width: 100%;
	border: 1px solid #ccc;
}
</style>
<?php $st = new DetailStatistik(); ?>
<?php $header_attr = $st->attributeLabels(); ?>

<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/FusionCharts.js"></script>
<ul>
<?php foreach($dt_header as $dt_g): ?>
					
	<li>
		<div class="title"><h3><a href="<?php echo Yii::app()->baseUrl; ?>/cms_statistik/export/<?php echo $dt_g['id_header_statistik']; ?>">Export Datagrid to Excell</a></h3></div>
		<?php

		    $this->widget('zii.widgets.grid.CGridView', array(
				'id'=>'dashboard-menu-model-grid',
				'dataProvider'=>$model->cari(Yii::app()->getRequest()->getQuery('id')),
    			'enableSorting' => false,
				'columns'=>array(
					'HeaderStatistik.jalur',
					'HeaderStatistik.tampil',
					'bulan',
			        'pre_clearance',
			        'customs_clearance',
			        'posts_clearance',
				),
			)); 
    	?>
		<div class="title"><h3><a href="<?php echo Yii::app()->baseUrl; ?>/cms_statistik/chart"><< Kembali</a></h3></div>
		<div class="title"><h2>Statistik Dwelling Time <?php echo $dt_g['jalur']; ?></h2></div>
		<div class="chart" id="container_<?php echo $dt_g['id_header_statistik']; ?>"></div>
		<div class="chart" id="line_<?php echo $dt_g['id_header_statistik']; ?>"></div>
	</li>
	<script type="text/javascript">
    var charts_<?php echo $dt_g['id_header_statistik']; ?> = new FusionCharts("StackedColumn3D", "ChartId", "780", "650", "0", "0");
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
		    $criteria->condition = 'id_header_statistik = '.$dt_g['id_header_statistik'].'';
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
		    $criteria->condition = 'id_header_statistik = '.$dt_g['id_header_statistik'].'';
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


   var line_<?php echo $dt_g['id_header_statistik']; ?> = new FusionCharts("Line", "ChartId", "780", "650", "0", "0");
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