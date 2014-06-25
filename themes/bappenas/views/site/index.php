<div id="content">
	<?php 
		$dt_banner = BannerModel::model()->findAll();
		$arr = array();
		foreach($dt_banner as $dt_b)
    	{
        	array_push($arr,array('image'=>Yii::app()->theme->baseUrl.'/img/'.$dt_b->gambar,'alt'=>'tes','url'=>''));
    	}
		$this->widget('ext.coinSlider.CoinSliderWidget', array(
		    'items' => $arr,
		    )
		);

		
	?>
</div>
	<div class="cleaner_h10"></div>
<div id="content">
	<div id="content-center">
		<?php
			$this->widget('ProfilWidget');
		?>
	</div>

	<div id="content-right">
		<div id="bg-sidebar">
			<div id="head-sidebar">MENU LAINNYA</div>
			<div id="content-sidebar">
				<?php $this->widget('SidebarMenu'); ?>
			</div>
		</div>
	</div>
	<div class="cleaner_h20"></div>	
</div>


<div id="content">
	<div id="title-news-main">BERITA TERBARU</div>
		<?php $this->widget('BeritaWidgetContent'); ?>
	<div class="cleaner_h10"></div>	
</div>
		<div class="cleaner_h30"></div>	

<div id="content">
	<div id="half-left-content">
		<div id="title-document">DOKUMEN</div>
			<?php $this->widget('DokumenWidgetContent'); ?>
		<div class="cleaner_h10"></div>	
	</div>
	<div id="half-right-content">
		<div id="title-chart">STATISTIK</div>
			<?php $this->widget('ChartWidgetContent'); ?>
		<div class="cleaner_h10"></div>	
	</div>
</div>
		<div class="cleaner_h10"></div>	

<div id="content">
	<div id="title-gallery">GALERI KEGIATAN</div>
	<?php $this->widget('GaleriWidgetContent',array("id_param"=>0)); ?>
	<div class="cleaner_h10"></div>	
</div>
	<div class="cleaner_h10"></div>	

<div id="content">
	<div id="title-link">LINK TERKAIT</div>
	<div class="cleaner_h10"></div>	
	<?php $this->widget('LinkWidget'); ?>
	<div class="cleaner_h0"></div>	
</div>
	<div class="cleaner_h30"></div>	