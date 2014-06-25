<div>
	<div id='carousel_container'>
	  	<div id='left_scroll_link'><a href='javascript:slide3("left");'><img src='<?php echo Yii::app()->theme->baseUrl; ?>/images/left-link.png' /></a></div>
	    	<div id='carousel_inner3'>
				<ul id='carousel_ul3'>

				<?php foreach($dt_link as $dt_l): ?>
			    <?php 
					$gambar="no_image.jpg";
					if($dt_l['gambar']!=""){$gambar=$dt_l['gambar'];}
				?>
					<li>
						<div class="border-hidden-link">
							<a href="<?php echo $dt_l->url_link; ?>" target="_blank" class="vtip" title="<?php echo $dt_l->judul; ?>">
								<img width="120" height="120" border="0" title="<?php echo $dt_l['judul']; ?>" src="<?php echo Yii::app()->theme->baseUrl; ?>/link/<?php echo $gambar; ?>" />
							</a>
						</div>
					</li>
			    <?php endforeach; ?>
				</ul>
			</div>
	  	<div id='right_scroll_link'><a href='javascript:slide3("right");'><img src='<?php echo Yii::app()->theme->baseUrl; ?>//images/right-link.png' /></a></div>
	  	<input type='hidden' id='hidden_auto_slide_seconds' value=0 />
  	</div>
</div>
    