<script type="text/javascript">
$(".boxlogin").colorbox({rel:'group', iframe:true, width:"600", height:"550"});
</script>
<?php if(count($dt)>0){ ?>
<div id="mainwrapper">
	<div id='carousel_container'>
		<?php if(count($dt)>3){ ?>
	  	<div id='left_scroll'><a href='javascript:slide("left");'><img src='<?php echo Yii::app()->theme->baseUrl; ?>/images/left.png' /></a></div>
	    	<div id='carousel_inner'>
				<ul id='carousel_ul'>
		<?php } else{ ?>
	    	<div id='carousel_inner'>
				<ul id='carousel_ul_no_slide'>
		<?php } ?>

				<?php foreach($dt as $dt_g): ?>
			    <?php 
					$gambar="no_image.jpg";
					if($dt_g['gambar']!=""){$gambar=$dt_g['gambar'];}
				?>
				<li>
						<?php
					    	$cls = "";
					    	$link = "dokumen/detail/".$dt_g->id_dokumen;
					     	if($dt_g->jenis=="confidential" && Yii::app()->user->isGuest){$cls="boxlogin"; $link="site/login";}
					     ?>
					     <div class="dokumen">
					      <div class="linkInner">
					        <img src='<?php echo Yii::app()->theme->baseUrl; ?>/dokumen_images/<?php echo $gambar; ?>' width="180" height="100" />
					        <div class="titleLink"><?php echo $dt_g['nama_dokumen']; ?></div>
					        <div class="cleaner_h5"></div>
					        <span class="contentLink"><?php echo strip_tags($dt_g['rangkuman']); ?></span>
					        <div class="cleaner_h5"></div>
					        &rsaquo; <a href="<?php echo Yii::app()->baseUrl; ?>/<?php echo $link; ?>" class="<?php echo $cls; ?>">See Detail</a>
					      </div>
					  	</div>
				</li>
				<?php endforeach; ?>
				</ul>
			</div>

		<?php if(count($dt)>3){ ?>
	  	<div id='right_scroll'><a href='javascript:slide("right");'><img src='<?php echo Yii::app()->theme->baseUrl; ?>//images/right.png' /></a></div>
	  	<input type='hidden' id='hidden_auto_slide_seconds' value=0 />
		<?php } ?>
  	</div>
</div>
<?php } else{ echo "<p>Belum ada data untuk kategori dokumen ini</p>";} ?>
