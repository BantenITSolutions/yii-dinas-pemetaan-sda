<div id="isi_chart">
	<?php if(count($dt)>0){ ?>
	<div id="mainwrapper">
		<div id='carousel_container2'>
			<?php if(count($dt)>1){ ?>
		  	<div id='left_scroll'><a href='javascript:slide2("left");'><img src='<?php echo Yii::app()->theme->baseUrl; ?>/images/left.png' /></a></div>
		    	<div id='carousel_inner2'>
					<ul id='carousel_ul2'>
			<?php } else{ ?>
		    	<div id='carousel_inner2'>
					<ul id='carousel_ul2_no_slide'>
			<?php } ?>
		
					<?php foreach($dt as $dt_g): ?>
					
					<li>
						<div id="container_<?php echo $dt_g['id_chart_header']; ?>"></div>
					</li>
			        <script type="text/javascript">
			            var charts_<?php echo $dt_g['id_chart_header']; ?> = new FusionCharts("Pie3D", "ChartId", "425", "307", "0", "0");
			      		   charts_<?php echo $dt_g['id_chart_header']; ?>.setJSONData( { 
			                      "chart": 
			                      { 
			                            "caption" : "<?php echo $dt_g['judul']; ?>" , 
									    "basefontcolor": "000",
									    "pieyscale": "70",
									    "pieslicedepth": "30",
			                      },

			                      "data" : 
			                      [ 
			                      	<?php
								        $criteria = new CDbCriteria;
								        $criteria->condition = 'id_chart_header = '.$dt_g['id_chart_header'].'';
										$dt_det = ChartDetailModel::model()->findAll($criteria);
										foreach($dt_det as $dt_detail):
						            ?>
						                { "label" : "<?php echo $dt_detail['item_option']; ?>", "value" : "<?php echo $dt_detail['nilai']; ?>"},
						            <?php endforeach; ?>
			                      ],

			              } );		   
					   charts_<?php echo $dt_g['id_chart_header']; ?>.render("container_<?php echo $dt_g['id_chart_header']; ?>");
					  </script>
					<?php endforeach; ?>
					</ul>
				</div>
			<?php if(count($dt)>1){ ?>
		  	<div id='right_scroll'><a href='javascript:slide2("right");'><img src='<?php echo Yii::app()->theme->baseUrl; ?>//images/right.png' /></a></div>
		  	<input type='hidden' id='hidden_auto_slide_seconds' value=0 />
			<?php } ?>
	  	</div>
	</div>
	<?php } else{ echo "<p>Belum ada data untuk menu chart</p>";} ?>
</div>
<div class="cleaner_h10"></div>