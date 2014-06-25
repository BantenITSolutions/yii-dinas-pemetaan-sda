
<ul>
    <?php foreach($dt_proyek as $dt_k): ?>
    <?php
    	$cls = "";
    	$link = "proyek_prioritas/detail/".$dt_k->id_proyek_prioritas;
     	if($dt_k->jenis=="confidential" && Yii::app()->user->isGuest){$cls="boxlogin"; $link="site/login";}
     ?>
	<li>
		<a href="<?php echo Yii::app()->baseUrl."/".$link; ?>" class="<?php echo $cls; ?>"><?php echo $dt_k->judul; ?></a>
	</li>
    <?php endforeach; ?>
</ul>
