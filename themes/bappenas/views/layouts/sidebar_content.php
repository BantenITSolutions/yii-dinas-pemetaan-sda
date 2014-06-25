<?php $this->beginContent('/layouts/main'); ?>

<?php echo $content; ?>

	<!-- sidebar kiri -->
	<div id="content-right">

		<div id="bg-sidebar">
			<div id="head-sidebar">MENU LAINNYA</div>
			<div id="content-sidebar">
				<?php $this->widget('SidebarMenu'); ?>
			</div>
		</div>

		<div class="cleaner_h20"></div>

		<div id="bg-sidebar">
			<div id="head-sidebar">BERITA TERBARU</div>
			<div id="content-sidebar">
				<?php $this->widget('BeritaSidebarContent'); ?>
				<div class="cleaner_h10"></div>
			</div>
		</div>

		<div class="cleaner_h20"></div>

		<div id="bg-sidebar">
			<div id="head-sidebar">DOKUMEN</div>
			<div id="content-sidebar">
				<?php $this->widget('DokumenSidebarContent'); ?>
			</div>
		</div>

		<div class="cleaner_h20"></div>

		<div id="bg-sidebar">
			<div id="head-sidebar">CHART</div>
			<div id="content-sidebar">
				<?php $this->widget('ChartSidebarContent'); ?>
			</div>
		</div>

	</div>
</div>
<div class="cleaner_h10"></div>
<?php $this->endContent(); ?>