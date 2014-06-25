 <div id="slidingtabs" class="clean_rounded clean_rounded-horizontal">
	<div class="st_tabs">
		<a href="#" class="st_prev">prev</a><a href="#" class="st_next">next</a>
		<div class="st_tabs_wrap">
			<ul class="st_tabs_ul">
				<?php foreach($dt_profil as $dt_p): ?>
			     	<li><a href="#tab-<?php echo $dt_p['id_profil']; ?>" rel="tab-<?php echo $dt_p['id_profil']; ?>" class="st_tab"><?php echo $dt_p['judul']; ?></a></li>
				<?php endforeach; ?>
			</ul>
		</div>
	</div>
	
	<div class="st_views">
   	<?php foreach($dt_profil as $dt_p): ?>
   		<div class="tab-<?php echo $dt_p['id_profil']; ?> st_view">
			<div class="st_view_inner">
				<p><?php echo $dt_p['keterangan']; ?></p>
			</div>
		</div>
	<?php endforeach; ?>
 	</div>
</div>