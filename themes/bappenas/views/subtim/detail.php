<div id="content">
  <div id="content-center">

    <div id="title-news"><?php echo $judul; ?></div>

    <?php 
      $gbr="no_image.jpg";
      if($gambar!=""){$gbr=$gambar;}
    ?>
    <img src='<?php echo Yii::app()->theme->baseUrl; ?>/subtim/<?php echo $gbr; ?>' width="250" height="180" style="float:left; padding:10px;" /></a>
    <?php echo $isi; ?>
    <div class="alert alert-info">
        <?php if($nama_file!=""){ echo CHtml::link(CHtml::encode("Download File"), Yii::app()->theme->baseUrl.'/subtim_files/'.$nama_file);} ?>
    </div>

  </div>
