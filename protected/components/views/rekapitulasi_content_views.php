 <div id="slidingtabs" class="clean_rounded clean_rounded-horizontal">
	<div class="st_tabs">
		<a href="#" class="st_prev">prev</a><a href="#" class="st_next">next</a>
		<div class="st_tabs_wrap">
			<ul class="st_tabs_ul">
				<?php foreach($dt as $dt_p): ?>
			     	<li><a href="#tab-<?php echo $dt_p['id_koridor']; ?>" rel="tab-<?php echo $dt_p['id_koridor']; ?>" class="st_tab"><?php echo $dt_p['koridor']; ?></a></li>
				<?php endforeach; ?>
			</ul>
		</div>
	</div>
	
	<div class="st_views">
   	<?php foreach($dt as $dt_p): ?>
   		<div class="tab-<?php echo $dt_p['id_koridor']; ?> st_view">
			<div class="st_view_inner">
				
				<?php 
          $rekap = Yii::app()->db->createCommand("select c.sektor,sum(b.nilai_investasi) as nilai from tbl_infrastruktur a left join tbl_nilai_investasi b on a.id_nilai_investasi=b.id_nilai_investasi left join tbl_sektor c on a.id_sektor=c.id_sektor where id_koridor='".$dt_p['id_koridor']."' group by c.id_sektor, c.sektor order by c.id_sektor")->query();

          $total = Yii::app()->db->createCommand("select b.sektor,count(a.id_infrastruktur) as jum from tbl_infrastruktur a left join tbl_sektor b on a.id_sektor=b.id_sektor where id_koridor='".$dt_p['id_koridor']."' group by b.id_sektor, b.sektor order by b.id_sektor")->query();

          $perpres = Yii::app()->db->createCommand("select c.sumber_dana,sum(b.nilai_investasi) as nilai from tbl_infrastruktur a left join tbl_nilai_investasi b on a.id_nilai_investasi=b.id_nilai_investasi left join tbl_sumber_dana c on a.id_sumber_dana=c.id_sumber_dana where id_koridor='".$dt_p['id_koridor']."' and id_kategori='1' group by c.sumber_dana")->query();

          $usulan = Yii::app()->db->createCommand("select c.sumber_dana,sum(b.nilai_investasi) as nilai from tbl_infrastruktur a left join tbl_nilai_investasi b on a.id_nilai_investasi=b.id_nilai_investasi left join tbl_sumber_dana c on a.id_sumber_dana=c.id_sumber_dana where id_koridor='".$dt_p['id_koridor']."' and id_kategori='2' group by c.sumber_dana")->query();
				?>
					<div id="ch_<?php echo $dt_p['id_koridor']; ?>"></div>
			        <script type="text/javascript">
			            var ch_<?php echo $dt_p['id_koridor']; ?> = new FusionCharts("Column3D", "ChartId", "680", "325", "0", "0");
						   ch_<?php echo $dt_p['id_koridor']; ?>.setJSONData( {
							  "chart": {
							    "caption": "Rekapitulasi Nilai Investasi - Koridor <?php echo $dt_p['koridor']; ?>",
							    "xaxisname": "Sektor",
							    "yaxisname": "Milyar",
							    "numbersuffix": " Milyar",
							    "showvalues": "0",
							    "decimals": "0",
							    "formatnumberscale": "0",
							    "palette": "4"
							  },
							  "data": [
							  <?php
								foreach($rekap as $d_rekap)
								{
									echo '{
								      "label": "'.$d_rekap['sektor'].'",
								      "value": "'.$d_rekap['nilai'].'",
								    },';
								}
							  ?>
							  ]
							} );		   
					   ch_<?php echo $dt_p['id_koridor']; ?>.render("ch_<?php echo $dt_p['id_koridor']; ?>");
					  </script>
					  <br>
					<div id="tot_<?php echo $dt_p['id_koridor']; ?>"></div>
			        <script type="text/javascript">
			            var tot_<?php echo $dt_p['id_koridor']; ?> = new FusionCharts("StackedBar3D", "ChartId", "680", "300", "0", "0");
						   tot_<?php echo $dt_p['id_koridor']; ?>.setJSONData( {
                  "chart": {
                    "caption": "Jumlah Proyek - Koridor <?php echo $dt_p['koridor']; ?>",
                    "showlabels": "1",
                    "showvalues": "0",
                    "showsum": "1",
                    "decimals": "0",
                    "useroundedges": "1",
                    "legendborderalpha": "0"
                  },
                  "categories": [
                    {
                      "category": [
                        {
                          "label": ""
                        },
                      ]
                    }
                  ],
                  "dataset": [
                  <?php
                    foreach($total as $d_total)
                    {
                      echo '{
                          "seriesname": "'.$d_total['sektor'].'",
                          "showvalues": "0",
                          "data": [
                            {
                              "value": "'.$d_total['jum'].'"
                            },
                          ]
                        },';
                    }
                  ?>
                  ]
                } );		   
					   tot_<?php echo $dt_p['id_koridor']; ?>.render("tot_<?php echo $dt_p['id_koridor']; ?>");
					  </script>
            <br>
          <div id="perpres_<?php echo $dt_p['id_koridor']; ?>"></div>
              <script type="text/javascript">
                  var perpres_<?php echo $dt_p['id_koridor']; ?> = new FusionCharts("Pie2D", "ChartId", "680", "300", "0", "0");
               perpres_<?php echo $dt_p['id_koridor']; ?>.setJSONData( {
                    "chart": {
                      "caption": "Klasifikasi Perpres Berdasarkan Pelaksana",
                      "showlabels": "0",
                      "showvalues": "1",
                      "showlegend": "1",
                      "showvalues": "1",
                       "numberScaleValue":'1,1000', 
                       "numberScaleUnit":' Milyar,Triliyun',
                      "legendposition": "RIGHT",
                      "chartrightmargin": "20",
                      "animation": "1"
                    },
                    "data": [
                    <?php
                      foreach($perpres as $d_perpres)
                      {
                        echo '{
                            "value": "'.$d_perpres['nilai'].'",
                            "label": "'.$d_perpres['sumber_dana'].'",
                          },';
                      }
                    ?>
                    ]
                } );       
             perpres_<?php echo $dt_p['id_koridor']; ?>.render("perpres_<?php echo $dt_p['id_koridor']; ?>");
            </script>
            <br>
          <div id="usulan_<?php echo $dt_p['id_koridor']; ?>"></div>
              <script type="text/javascript">
                  var usulan_<?php echo $dt_p['id_koridor']; ?> = new FusionCharts("Pie2D", "ChartId", "680", "300", "0", "0");
               usulan_<?php echo $dt_p['id_koridor']; ?>.setJSONData( {
                    "chart": {
                      "caption": "Klasifikasi Usulan Berdasarkan Pelaksana",
                      "showlabels": "0",
                      "showvalues": "1",
                      "showlegend": "1",
                      "showvalues": "1",
                       "numberScaleValue":'1,1000', 
                       "numberScaleUnit":' Milyar,Triliyun',
                      "legendposition": "RIGHT",
                      "chartrightmargin": "20",
                      "animation": "1"
                    },
                    "data": [
                    <?php
                      foreach($usulan as $d_usulan)
                      {
                        echo '{
                            "value": "'.$d_usulan['nilai'].'",
                            "label": "'.$d_usulan['sumber_dana'].'",
                          },';
                      }
                    ?>
                    ]
                } );       
             usulan_<?php echo $dt_p['id_koridor']; ?>.render("usulan_<?php echo $dt_p['id_koridor']; ?>");
            </script>
            <br>
			</div>
		</div>
	<?php endforeach; ?>
 	</div>
</div>