<div id="content">
	<div id="content-center">


		<div id="title-news">CONTACT TICKET</div>
			<div class="cleaner_h20"></div>
			<?php $this->widget('zii.widgets.CDetailView', array(
				'data'=>$model,
				'attributes'=>array(
					'kode_gen',
					'nama',
					'email',
					'alamat',
					'pesan',
					'tanggal',
					'ip_address',
					'stts',
				),
			)); ?>
			<div class="cleaner_h20"></div>

	</div>