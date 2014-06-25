 <div class="cleaner_h10"></div>
 <div id="slidingtabs2" class="clean_rounded clean_rounded-horizontal">
	<div class="st_tabs">
		<a href="#" class="st_prev">prev</a><a href="#" class="st_next">next</a>
		<div class="st_tabs_wrap">
			<ul class="st_tabs_ul">
			     	<li><a href="#taba-semua" rel="taba-semua" class="st_tab">Semua Album</a></li>
				<?php foreach($dt_album as $dt_p): ?>
			     	<li><a href="#taba-<?php echo $dt_p['id_album']; ?>" rel="taba-<?php echo $dt_p['id_album']; ?>" class="st_tab"><?php echo $dt_p['album']; ?></a></li>
				<?php endforeach; ?>
			</ul>
		</div>
	</div>
	
	<div class="st_views">
   		<div class="taba-semua st_view">
			<div class="st_view_inner">

				<script type="text/javascript">
					$(document).ready(function()
					{
					  $("a#pagingGaleriAlbum").click(function(){
					    $('#container_galeri_semua').load('<?php echo Yii::app()->createAbsoluteUrl("/"); ?>/galeri/index/'+eval(($(this).html()-1)*7));
					  });
					});
				</script>
				<?php 
				if(count(GaleriModel::model()->findAll())>7){
					for($i=0;$i<=floor(count(GaleriModel::model()->findAll())/7);$i++){ 
				?>
			     	<a id="pagingGaleriAlbum" class="pagingpage"><?php echo $i+1; ?></a>
				<?php } } ?>

				<?php 
					if(count(GaleriModel::model()->findAll())>7){
				?>
			    <form style="float:left;">
					<select data-placeholder="Go to pages..." class="chzn-select-semua" style="width:100px;" tabindex="2" name="offset_id_galeri_semua" id="offset_id_galeri_semua" required>
						<option></option>
						<?php for($i=0;$i<=floor(count(GaleriModel::model()->findAll())/7);$i++){ ?>
					     	<option value="<?php echo $i*7; ?>">Pages <?php echo $i+1; ?></option>
						<?php } ?>
					</select>
					<script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/chosen.jquery.min.js" type="text/javascript"></script>
					<script type="text/javascript"> 
						$(".chzn-select-semua").chosen().change(function(){ 
							var offset_id_galeri_semua = $("#offset_id_galeri_semua").val(); 
							$('#container_galeri_semua').load('<?php echo Yii::app()->createAbsoluteUrl("/"); ?>/galeri/index/'+offset_id_galeri_semua);
						});
					</script>
				</form>
				<?php }  if(count(GaleriModel::model()->findAll())==0){ echo "<p>Belum ada data</p>";} ?>
				
			    <div class="cleaner_h20"></div>
				<div id="container_galeri_semua">
					<?php foreach($dt_galeri as $dt_g): ?>
				    <?php 
						$gambar="no_image.jpg";
						if($dt_g['gambar']!=""){$gambar=$dt_g['gambar'];}
					?>
						<div class="border-hidden-gallery">
							<a href="<?php echo Yii::app()->theme->baseUrl; ?>/galeri/<?php echo $gambar; ?>" rel="galeri">
								<img width="110" border="0" src="<?php echo Yii::app()->theme->baseUrl; ?>/galeri/<?php echo $gambar; ?>" />
							</a>
						</div>
				    <?php endforeach; ?> 
				</div>
			    <div class="cleaner_h20"></div>
			</div>
		</div>

		<?php foreach($dt_album as $dt_p): ?>
   		<div class="taba-<?php echo $dt_p['id_album']; ?> st_view">
			<div class="st_view_inner">
				<?php
			        $criteria = new CDbCriteria;
			        $criteria->condition = 'id_album = '.$dt_p['id_album'].' ';
			        $criteria->order = 'id_galeri DESC';
			        $criteria->limit = 7;
			        $criteria->offset = 0;
        			$dt_galeri = GaleriModel::model()->findAll($criteria);

			        $criteria2 = new CDbCriteria;
			        $criteria2->condition = 'id_album = '.$dt_p['id_album'].' ';
        			$dt_galeri_no_limit = GaleriModel::model()->findAll($criteria2);
				?>

				<script type="text/javascript">
					$(document).ready(function()
					{
					  $("a#pagingGaleri<?php echo $dt_p['id_album']; ?>").click(function(){
					    $('#container_galeri_<?php echo $dt_p['id_album']; ?>').load('<?php echo Yii::app()->createAbsoluteUrl("/"); ?>/galeri/album/album/<?php echo $dt_p['id_album']; ?>/offset/'+eval(($(this).html()-1)*7));
					  });
					});
				</script>
				<?php 
					if(count($dt_galeri_no_limit)>7){
						for($i=0;$i<=floor(count($dt_galeri)/7);$i++){ 
				?>
			     	<a id="pagingGaleri<?php echo $dt_p['id_album']; ?>" class="pagingpage"><?php echo $i+1; ?></a>
				<?php } } ?>

				<?php
					if(count($dt_galeri_no_limit)>7){
				?>
			    <form style="float:left;">
					<select data-placeholder="Go to pages..." class="chzn-select-semua-<?php echo $dt_p['id_album']; ?>" style="width:100px;" tabindex="2" name="offset_id_galeri_album_<?php echo $dt_p['id_album']; ?>" id="offset_id_galeri_album_<?php echo $dt_p['id_album']; ?>" required>
						<option></option>
						
						<?php for($i=0;$i<=floor(count(GaleriModel::model()->findAll(array("condition"=>'id_album = '.$dt_p['id_album'].'')))/7);$i++){ ?>
					     	<option value="<?php echo $i*7; ?>">Pages <?php echo $i+1; ?></option>
						<?php } ?>
					</select>
					<script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/chosen.jquery.min.js" type="text/javascript"></script>
					<script type="text/javascript"> 
						$(".chzn-select-semua-<?php echo $dt_p['id_album']; ?>").chosen().change(function(){ 
							var offset_id_galeri_album_<?php echo $dt_p['id_album']; ?> = $("#offset_id_galeri_album_<?php echo $dt_p['id_album']; ?>").val(); 
							$('#container_galeri_<?php echo $dt_p['id_album']; ?>').load('<?php echo Yii::app()->createAbsoluteUrl("/"); ?>/galeri/album/album/<?php echo $dt_p['id_album']; ?>/offset/'+offset_id_galeri_album_<?php echo $dt_p['id_album']; ?>);
						});
					</script>
				</form>
				<?php }  if(count($dt_galeri_no_limit)==0){ echo "<p>Belum ada data</p>";} ?>

				
			    <div class="cleaner_h20"></div>
				<div id="container_galeri_<?php echo $dt_p['id_album']; ?>">
					<?php foreach($dt_galeri as $dt_g): ?>
				    <?php 
						$gambar="no_image.jpg";
						if($dt_g['gambar']!=""){$gambar=$dt_g['gambar'];}
					?>
					<div class="border-hidden-gallery">
						<a href="<?php echo Yii::app()->theme->baseUrl; ?>/galeri/<?php echo $gambar; ?>" rel="galeri">
							<img width="110" border="0" src="<?php echo Yii::app()->theme->baseUrl; ?>/galeri/<?php echo $gambar; ?>" />
						</a>
					</div>
					<?php endforeach; ?>
				</div>
			    <div class="cleaner_h20"></div>
			</div>
		</div>
		<?php endforeach; ?>
   	
 	</div>
</div>


    

