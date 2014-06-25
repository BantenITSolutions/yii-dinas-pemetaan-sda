<div id="content">
  <div id="content-center">

    <div id="title-news"><?php echo $judul; ?></div>
    <p>Posted on : <?php echo $tanggal; ?></p>
    <?php 
      $gbr="no_image.jpg";
      if($gambar!=""){$gbr=$gambar;}
    ?>
    <img src='<?php echo Yii::app()->theme->baseUrl; ?>/berita/<?php echo $gbr; ?>' width="250" height="180" style="float:left; padding:10px;" /></a>
    <?php echo $isi; ?>

  </div>

