<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title><?php echo CHtml::encode($this->pageTitle); ?></title>
<link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/infrastruktur.css" rel="stylesheet" type="text/css" />
<?php Yii::app()->clientScript->registerCoreScript('jquery'); ?>
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/colorbox/jquery.colorbox.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/colorbox/colorbox.css" />
<script type="text/javascript">
$(document).ready(function(){
	$(".boxHover").colorbox({rel:'group', iframe:true, width:"800", height:"500"});
});
</script>
<style type="text/css">
.boxHover{
	padding: 5px;
	background-color: #ccc;
	margin: 5px;
	clear: both;
}
.boxHover2{
	padding: 5px;
	background-color: #ccc;
	margin: 5px;
	clear: both;
}
a {
	text-decoration: none;
	color: #333;
}
a:hover{
	text-decoration: underline;
	color: #000;
}
</style>

</head>
<?php echo $content; ?>
</html>
