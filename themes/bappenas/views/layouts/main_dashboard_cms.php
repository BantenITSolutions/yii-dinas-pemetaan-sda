<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<title><?php echo CHtml::encode($this->pageTitle); ?></title>
<?php Yii::app()->clientScript->registerCoreScript('jquery'); ?>
<?php Yii::app()->clientScript->registerCoreScript('jquery.ui'); ?>
<link href="<?php echo Yii::app()->theme->baseUrl; ?>/admin/css/main.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/colorbox/colorbox.css" />
<link href='http://fonts.googleapis.com/css?family=Cuprum' rel='stylesheet' type='text/css' />
<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/admin/js/plugins/ui/jquery.collapsible.min.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/admin/js/custom.js"></script>
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/colorbox/jquery.colorbox.js"></script>

<script type="text/javascript"> 

    $(document).ready(function(){
        $(".boxOver").colorbox({rel:'group', iframe:true, width:"600", height:"90%"});
    });

</script> 


</head>

<body>
<!-- Top navigation bar -->
<div id="topNav">
    <div class="fixed">
        <div class="wrapper">
            <div class="welcome"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/admin/images/userPic.png" alt="" /><span>Welcome, <?php echo Yii::app()->user->nama_lengkap; ?></span></div>
            <div class="userNav">
                <ul>
                    <li><a href="<?php echo Yii::app()->baseUrl; ?>/dashboard" title=""><img src="<?php echo Yii::app()->theme->baseUrl; ?>/admin/images/icons/topnav/settings.png" alt="" /><span>Dashboard Front</span></a></li>
                    <li><a href="<?php echo Yii::app()->baseUrl; ?>/site" title=""><img src="<?php echo Yii::app()->theme->baseUrl; ?>/admin/images/icons/topnav/settings.png" alt="" /><span>Front Page</span></a></li>
                    <li><a href="<?php echo Yii::app()->baseUrl; ?>/dashboard_profile" title=""><img src="<?php echo Yii::app()->theme->baseUrl; ?>/admin/images/icons/topnav/profile.png" alt="" /><span>User Profile</span></a></li>
                    <li><a href="<?php echo Yii::app()->baseUrl; ?>/site/logout" title=""><img src="<?php echo Yii::app()->theme->baseUrl; ?>/admin/images/icons/topnav/logout.png" alt="" /><span>Logout</span></a></li>
                </ul>
            </div>
            <div class="fix"></div>
        </div>
    </div>
</div>

<!-- Header -->
<div id="header" class="wrapper">
    <div class="logo"><a href="/" title=""><h1>DASHBOARD - TIM KERJA KONEKTIVITAS - KP3EI</h1></a><p></p><h3>Locally Integrated - Globally Connected</h3></div>
    </div>
    <div class="fix"></div>
</div>

<!-- Main wrapper -->
<div class="wrapper">

	<!-- Left navigation -->
    <div class="leftNav">
    	<?php
			$this->widget('DashboardMenu',array("id" => "menu",
                'linkLabelWrapper' => 'span'));
		?>


    </div>

	<!-- Content -->
    <div class="content">
    	<?php echo $content; ?>
        
    </div>
    <div class="fix"></div>
</div>

<!-- Footer -->
<div id="footer">
	<div class="wrapper">
    	<span>Tim Kerja Konektivitas - KP3EI. Badan Perencanaan Pembangunan Nasional</span>
    </div>
</div>

</body>
</html>
