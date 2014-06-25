<div class="post">
	<div class="content">
		<?php
			$this->beginWidget('CMarkdown', array('purifyOutput'=>true));
			echo $data->keterangan;
			$this->endWidget();
		?>
	</div>
</div>
