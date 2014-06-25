
<div id="isi_chart">
	<?php if(count($model)>0){ ?>
	<div id="mainwrapper">
		<div id='carousel_container5'>
			<?php if(count($model)>1){ ?>
		  	<div id='left_scroll'><a href='javascript:slide5("left");'><img src='<?php echo Yii::app()->theme->baseUrl; ?>/images/left.png' /></a></div>
		    	<div id='carousel_inner5'>
					<ul id='carousel_ul5'>
			<?php } else{ ?>
		    	<div id='carousel_inner5'>
					<ul id='carousel_ul5_no_slide'>
			<?php } ?>
		
					<?php foreach($model as $dt_g): ?>
					
					<li>
						<div id="line_<?php echo $dt_g['id_header_statistik']; ?>"></div>
	  					<?php
	  						if(Yii::app()->user->isGuest)
	  						{
	  							echo "<div class='cleaner_h5'></div><a href='".Yii::app()->baseUrl."/site/login' class='boxlogin'>Silahkan Log In Untuk Mengakses Detail Statistik</a>";
	  						}
	  						else
	  						{
	  							if(Yii::app()->user->status_user=="user_cms")
	  							{
	  								echo "<div class='cleaner_h5'></div><a href='".Yii::app()->baseUrl."/cms_statistik'>Detail Statistik</a>";
	  							}
	  							else if(Yii::app()->user->status_user=="user_dashboard")
	  							{
	  								echo "<div class='cleaner_h5'></div><a href='".Yii::app()->baseUrl."/dashboard_statistik'>Detail Statistik</a>";
	  							}
	  						}
	  					?>
					</li>
			        <script type="text/javascript">
			            var line_<?php echo $dt_g['id_header_statistik']; ?> = new FusionCharts("Line", "ChartId", "170", "170", "0", "0");
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
				</div>
			<?php if(count($model)>1){ ?>
		  	<div id='right_scroll'><a href='javascript:slide5("right");'><img src='<?php echo Yii::app()->theme->baseUrl; ?>//images/right.png' /></a></div>
		  	<input type='hidden' id='hidden_auto_slide_seconds' value=0 />
			<?php } ?>
	  	</div>
	</div>
	<?php } else{ echo "<p>Belum ada data untuk menu chart</p>";} ?>
</div>
<div class="cleaner_h10"></div>



    

