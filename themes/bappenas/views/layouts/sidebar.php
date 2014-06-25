<?php $this->beginContent('/layouts/main'); ?>

<?php echo $content; ?>

<!-- sidebar kiri -->
<div id="content-right">

	<div id="bg-sidebar">
		<div id="head-sidebar">PROFIL KP3EI</div>
		<div id="content-sidebar">
			<?php $this->widget('ProfilWidget'); ?>
		</div>
	</div>

	<div class="cleaner_h20"></div>

	<div id="bg-sidebar">
		<div id="head-sidebar">KLIPING TERBARU</div>
		<div id="content-sidebar">
			<?php $this->widget('KlipingWidget'); ?>
		</div>
	</div>

	<div class="cleaner_h20"></div>

	<div id="bg-sidebar">
		<div id="head-sidebar">LINK TERKAIT</div>
		<div id="content-sidebar">
			<?php $this->widget('LinkWidget'); ?>
		</div>
	</div>
</div>

<?php $this->endContent(); ?>