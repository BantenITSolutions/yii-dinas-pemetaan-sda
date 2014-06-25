
<!DOCTYPE html>
<html>
  <head>
    <title>Detail Dokumen - <?php echo $nama_dokumen; ?></title>
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

        <span class="pull-right"><a href="<?php echo Yii::app()->baseUrl; ?>/dokumen/download/<?php echo $id_dokumen; ?>" class="btn btn-danger">Download Dokumen</a></span>
        <h3><?php echo $nama_dokumen; ?></h3>
        <h6><?php echo $keterangan; ?></h6>
        <div style="margin:0px auto; width:900px;">
          <a href="<?php echo Yii::app()->createAbsoluteUrl("/"); ?>/themes/<?php echo Yii::app()->theme->name; ?>/dokumen_files/<?php echo $nama_file; ?>" id="embedURL"></a>
        </div>

    	</div>
    </div>
  </body>
</html>


