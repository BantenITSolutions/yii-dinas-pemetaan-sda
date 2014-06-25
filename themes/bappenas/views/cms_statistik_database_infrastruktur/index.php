<div class="title"><h5>Manage Statistik Database Infrastruktur</h5></div>

    <div class="widget first">
        <div class="head"><h5 class="iCreate">Welcome, <?php echo Yii::app()->user->nama_lengkap; ?></h5></div>
            <div class="body">

				<script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/highcharts.js"></script>
				<div id="isi_chart">
									<script type="text/javascript">
										$(function () {
				        $('#container').highcharts({
				            chart: {
				                type: 'bar'
				            },
				            title: {
				                text: 'Statistik Pelaksana Proyek Infrastruktur'
				            },
				            xAxis: {
				                categories: ['Pelabuhan', 'Bandara', 'Kereta Api', 'Jalan', 'Energi', 'ICT', 'SDA'],
				                title: {
				                    text: null
				                }
				            },
				            yAxis: {
				                min: 0,
				                title: {
				                    text: 'Population (millions)',
				                    align: 'high'
				                },
				                labels: {
				                    overflow: 'justify'
				                }
				            },
				            plotOptions: {
				                bar: {
				                    dataLabels: {
				                        enabled: true
				                    }
				                }
				            },
				            legend: {
				                layout: 'vertical',
				                align: 'right',
				                verticalAlign: 'top',
				                x: -40,
				                y: 100,
				                floating: true,
				                borderWidth: 1,
				                backgroundColor: '#FFFFFF',
				                shadow: true
				            },
				            credits: {
				                enabled: false
				            },
				            series: [{
				                name: 'Pemerintah',
				                data: [1431, 0, 0, 6275, 70, 82, 6133]
				            }, {
				                name: 'Swasta',
				                data: [0,0,0,0,6897,0,0]
				            }, {
				                name: 'BUMN',
				                data: [838,3956,0,0,14426,300,0]
				            }, {
				                name: 'Campuran',
				                data: [36,12000,12100,23592,0,0,0]
				            }]
				        });
				    });
									</script>
							<div id="container" style="min-width: 310px; height: 700px; margin: 0 auto"></div>
								
				</div>

			</div>
		</div>