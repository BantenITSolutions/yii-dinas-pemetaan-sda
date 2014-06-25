
<!DOCTYPE html>
<html>
  <head>
    <title><?php echo $judul; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo Yii::app()->theme->baseUrl; ?>/bootstrap/css/bootstrap.css" rel="stylesheet" media="screen">
  </head>
  <body>
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="<?php echo Yii::app()->theme->baseUrl; ?>/bootstrap/js/bootstrap.min.js"></script>

<div class="alert alert-info">
	<?php
	$this->widget('zii.widgets.CBreadcrumbs', array(
	    'links'=>array(
	        'Profil',
	        $judul,
	    ),
	));
	?>
</div>

<div class="row-fluid">
  <div class="span12 alert alert-success">
    <h4><?php echo $judul; ?></h4>
    <?php echo $keterangan; ?>
  </div>
</div>

  </body>
</html>
