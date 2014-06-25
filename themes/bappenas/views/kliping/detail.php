
<!DOCTYPE html>
<html>
  <head>
    <title>Detail Kliping - <?php echo $judul; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo Yii::app()->theme->baseUrl; ?>/bootstrap/css/bootstrap.css" rel="stylesheet" media="screen">
  </head>
  <body>
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="<?php echo Yii::app()->theme->baseUrl; ?>/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery.gdocsviewer.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function() {
        $('#embedURL').gdocsViewer({ width: 980, height: 600 });
      });
    </script>


    <div class="row-fluid">
      <div class="span12 alert alert-success">

        <h3><?php echo $judul; ?></h3>
        <h5>Posted on : <?php echo $tanggal; ?> | Edisi : <?php echo $bulan."/".$tahun; ?></h5>
        <h6><?php echo $keterangan; ?></h6>
        <div style="margin:0px auto; width:900px;">
          <a href="<?php echo Yii::app()->createAbsoluteUrl("/"); ?>/themes/<?php echo Yii::app()->theme->name; ?>/kliping_files/<?php echo $nama_file; ?>" id="embedURL"></a>
        </div>

    	</div>
    </div>
  </body>
</html>
