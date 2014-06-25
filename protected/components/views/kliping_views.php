
<ul>
    <?php foreach($dt_kliping as $dt_k): ?>

	<div id="listticker">
	<li class="tick-li">
		<h4><?php echo $dt_k->tanggal; ?></h4>
		<a href="<?php echo Yii::app()->baseUrl; ?>/kliping/detail/<?php echo $dt_k->id_kliping; ?>" class="vtip kliping" title="<?php echo substr($dt_k->keterangan,0,100); ?>..."><?php echo $dt_k->judul; ?></a>
	</li>
    <?php endforeach; ?>
</ul>
