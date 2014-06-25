<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title><?php echo CHtml::encode($this->pageTitle); ?></title>
<?php
	$con = Yii::app()->controller->id;
	if($con!="site" && $con!="rekapitulasi"  ){ Yii::app()->clientScript->registerCoreScript('jquery'); }
	else { echo '<script type="text/javascript" src="'.Yii::app()->theme->baseUrl.'/js/jquery.min.js"></script>'; } 
?>

<?php Yii::app()->clientScript->registerCoreScript('jquery.ui'); ?>
<?php Yii::app()->clientScript->registerCssFile(Yii::app()->clientScript->getCoreScriptUrl().'/jui/css/base/jquery-ui.css'); ?>
<link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/vtip.css" />
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/ddsmoothmenu.css" />
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/jquery.fancybox-1.3.4.css" />

<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/vtip.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery.jcarousel.min.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/skrip.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery.fancybox-1.3.4.pack.js"></script>
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/colorbox/jquery.colorbox.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jqueryslidemenu.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery-easing.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/FusionCharts.js"></script>

<link href='<?php echo Yii::app()->theme->baseUrl; ?>/css/fullcalendar.css' rel='stylesheet' />
<script src='<?php echo Yii::app()->theme->baseUrl; ?>/js/fullcalendar.min.js'></script>

<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/tab-slider.css" />
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/chosen.css" />
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/colorbox/colorbox.css" />

<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery.sliding-tabs.js"></script>

<script type="text/javascript"> 

	$(document).ready(function(){

		$('#lofslidecontent45').lofJSidernews( { 
			interval:4000,
			easing:'easeInOutQuad',
			duration:1000,
			auto:true 
		});	

		//tab profil
		$("#slidingtabs").slidingTabs({ 
			tabActive:1, 
			responsive:true, 
			touchSupport:true, 
			tabsAlignment:"align_top", 
			autoHeight:true, 
			autoHeightSpeed:300, 
			textConversion:"pb", 
			contentEasing:"easeInOutQuart", 
			orientation:"horizontal"
		});

		//tab galery
		$("#slidingtabs2").slidingTabs({ 
			tabActive:1, 
			responsive:true, 
			touchSupport:true, 
			tabsAlignment:"align_top", 
			autoHeight:true, 
			autoHeightSpeed:300, 
			textConversion:"pb", 
			contentEasing:"easeInOutQuart", 
			orientation:"horizontal"
		});

		//tab dokumen
		$("#slidingtabs3").slidingTabs({ 
			tabActive:1, 
			responsive:true, 
			touchSupport:true, 
			tabsAlignment:"align_top", 
			autoHeight:true, 
			autoHeightSpeed:300, 
			textConversion:"pb", 
			contentEasing:"easeInOutQuart", 
			orientation:"horizontal"
		});

		//tab chart
		$("#slidingtabs4").slidingTabs({ 
			tabActive:1, 
			responsive:true, 
			touchSupport:true, 
			tabsAlignment:"align_top", 
			autoHeight:true, 
			autoHeightSpeed:300, 
			textConversion:"pb", 
			contentEasing:"easeInOutQuart", 
			orientation:"horizontal"
		});

		//agenda
		$('#calendar').fullCalendar({
            events: "<?php echo Yii::app()->baseUrl; ?>/agenda/rest",
            header: {
                left: 'prev,next today',
                center: 'title',
                right: ''
            },
            eventRender: function (event, element) {
                element.attr('href', 'javascript:void(0);');
                element.attr('onclick', 'javascript:openModal("' + event.title + '","' + event.tempat + '","' + event.penanggung_jawab + '","' + event.jam_mulai + '","' + event.jam_selesai + '","' + event.tanggal + '","' + event.keterangan + '","' + event.jumlah_peserta + '","' + event.unit_kerja + '","' + event.email + '","' + event.no_telp + '","' + event.jam + '","' + event.durasi + '","' + event.nama_file + '");');
            }

        })

		//fancybox
		$("a[rel=galeri]").fancybox({
			'transitionIn'		: 'fade',
			'transitionOut'		: 'fade',
			'overlayColor'		: '#000',
			'overlayOpacity'	: 0.9				
		});
		
		//colorbox
		$(".boxlogin").colorbox({rel:'group', iframe:true, width:"600", height:"550"});
		$(".boxcontact").colorbox({rel:'group', iframe:true, width:"600", height:"650"});
		$("#boxlogin").colorbox({rel:'group', iframe:true, width:"600", height:"650"});

		//slider dokumen
        $('#carousel_ul li:first').before($('#carousel_ul li:last')); 
		//slider chart
        $('#carousel_ul2 li:first').before($('#carousel_ul2 li:last')); 
		//slider dokumen sidebar
        $('#carousel_ul4 li:first').before($('#carousel_ul4 li:last')); 
		//slider chart sidebar
        $('#carousel_ul5 li:first').before($('#carousel_ul5 li:last')); 


	});    
	
	//slider dokumen
    function slide(where){

        var item_width = $('#carousel_ul li').outerWidth() + 10;
        if(where == 'left'){
            var left_indent = parseInt($('#carousel_ul').css('left')) + item_width;
        }else{
            var left_indent = parseInt($('#carousel_ul').css('left')) - item_width;
        
        }
        $('#carousel_ul:not(:animated)').animate({'left' : left_indent},500,function(){    
            if(where == 'left'){
                $('#carousel_ul li:first').before($('#carousel_ul li:last'));
            }else{
                $('#carousel_ul li:last').after($('#carousel_ul li:first')); 
            }
            $('#carousel_ul').css({'left' : '-215px'});
        });    
	}
	
	//slider chart
    function slide2(where){

        var item_width = $('#carousel_ul2 li').outerWidth() + 10;
        if(where == 'left'){
            var left_indent = parseInt($('#carousel_ul2').css('left')) + item_width;
        }else{
            var left_indent = parseInt($('#carousel_ul2').css('left')) - item_width;
        
        }
        $('#carousel_ul2:not(:animated)').animate({'left' : left_indent},500,function(){    
            if(where == 'left'){
                $('#carousel_ul2 li:first').before($('#carousel_ul2 li:last'));
            }else{
                $('#carousel_ul2 li:last').after($('#carousel_ul2 li:first')); 
            }
            $('#carousel_ul2').css({'left' : '-465px'});
        });    
	}
	
	//slider link
    function slide3(where){

        var item_width = $('#carousel_ul3 li').outerWidth() + 10;
        if(where == 'left'){
            var left_indent = parseInt($('#carousel_ul3').css('left')) + item_width;
        }else{
            var left_indent = parseInt($('#carousel_ul3').css('left')) - item_width;
        
        }
        $('#carousel_ul3:not(:animated)').animate({'left' : left_indent},500,function(){    
            if(where == 'left'){
                $('#carousel_ul3 li:first').before($('#carousel_ul3 li:last'));
            }else{
                $('#carousel_ul3 li:last').after($('#carousel_ul3 li:first')); 
            }
            $('#carousel_ul3').css({'left' : '-165px'});
        });    
	}
	
	//slider dokumen sidebar
    function slide4(where){

        var item_width = $('#carousel_ul4 li').outerWidth() + 10;
        if(where == 'left'){
            var left_indent = parseInt($('#carousel_ul4').css('left')) + item_width;
        }else{
            var left_indent = parseInt($('#carousel_ul4').css('left')) - item_width;
        
        }
        $('#carousel_ul4:not(:animated)').animate({'left' : left_indent},500,function(){    
            if(where == 'left'){
                $('#carousel_ul4 li:first').before($('#carousel_ul4 li:last'));
            }else{
                $('#carousel_ul4 li:last').after($('#carousel_ul4 li:first')); 
            }
            $('#carousel_ul4').css({'left' : '-210px'});
        });    
	}
	
	//slider chart sidebar
    function slide5(where){

        var item_width = $('#carousel_ul5 li').outerWidth() + 10;
        if(where == 'left'){
            var left_indent = parseInt($('#carousel_ul5').css('left')) + item_width;
        }else{
            var left_indent = parseInt($('#carousel_ul5').css('left')) - item_width;
        
        }
        $('#carousel_ul5:not(:animated)').animate({'left' : left_indent},500,function(){    
            if(where == 'left'){
                $('#carousel_ul5 li:first').before($('#carousel_ul5 li:last'));
            }else{
                $('#carousel_ul5 li:last').after($('#carousel_ul5 li:first')); 
            }
            $('#carousel_ul5').css({'left' : '-210px'});
        });    
	}
 

    function openModal(title, tempat, penanggung_jawab, start, end, tanggal, keterangan, jumlah_peserta, unit_kerja, email, no_telp, jam, durasi, nama_file) {
    	var url_download = '<?php echo Yii::app()->baseUrl; ?>/agenda_files/'+nama_file;

        $("#eventInfo").html("<p>Posted on : "+tanggal+" </p><p>Start : "+start+"</p><p>End : "+end+"</p><p>Tempat : "+tempat+"</p><p>Jumlah Peserta : "+jumlah_peserta+"</p><p>Penanggung Jawab : "+penanggung_jawab+"</p><p>Email Penanggung Jawab : "+email+"</p><p>No Telp Penanggung Jawab : "+no_telp+"</p><p>Jam : "+jam+"</p>");

    	if(nama_file=="")
    	{
    		url_download = "#";
    	}
    	else
    	{
        	$("#eventLink").attr('href', url_download);
    	}

        $("#eventContent").dialog({ modal: true,
        	width: 800,
        	height: 450,
        	show: {
		        effect: "clip",
		        duration: 600
		      },
		      hide: {
		        effect: "clip",
		        duration: 600
		      }, 
		    title: title });
    }

</script> 
</head>

<body onLoad="goforit()">
<div id="long-line-top">
<div id="line-top">
<div id="left-line-top">
	<?php 
	if(Yii::app()->user->isGuest)
	{
		 echo "Selamat datang pengunjung | ";
	} 
	else 
	{ 
		 echo "Selamat datang <b>".Yii::app()->user->nama_lengkap."</b> | ";
	} 
?>
	<script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/clock.js" type="text/javascript"></script>
	<span id="clock"></span>
</div>
<div id="right-line-top"><div class="cleaner_h5"></div><div class="cleaner_h3"></div>

<?php 
	$img_contact = CHtml::image(''.Yii::app()->theme->baseUrl.'/images/phone-icon.png','contact us',array('width'=>'15','height'=>'15') );
	$img_login = CHtml::image(''.Yii::app()->theme->baseUrl.'/images/login-icon.png','log in',array('width'=>'15','height'=>'15') );
?>


<div id="img-menu"><?php echo CHtml::link($img_contact, Yii::app()->baseUrl.'/contact/index', array("class" => "boxcontact")); ?>Contact Us</div>
	
	<div id="img-menu">
<?php 
	if(Yii::app()->user->isGuest)
	{
		 echo CHtml::link($img_login, Yii::app()->baseUrl.'/site/login', array("class" => "boxlogin"));
		 echo "Log In";
	} 
	else 
	{ 
		if(Yii::app()->user->status_user=="user_cms")
		{
			echo CHtml::link($img_login, Yii::app()->baseUrl.'/cms');
			echo "CMS Panel";
		}
		else if(Yii::app()->user->status_user=="user_dashboard")
		{
			echo CHtml::link($img_login, Yii::app()->baseUrl.'/dashboard');
			echo "Dashboard";
		}
	} 
?>
</div>
<?php 
	if(!Yii::app()->user->isGuest)
	{
		 $this->widget('LinkInternalWidget');
	} 
?>

<div id="w2b-searchbox">
	<form id="w2b-searchform" action="pencarian" method="POST">
	<input type="text" id="s" name="key" placeholder="Pencarian...."/>
	<input type="image" src="<?php echo Yii::app()->theme->baseUrl; ?>/images/blank.gif" id="sbutton" />
	</form>
	</div>
</div>
</div>
</div>


<div id="header"> 
	<h1><?php echo CHtml::encode(Yii::app()->name); ?></h1>
	<h3><?php echo Yii::app()->params->siteQuotes; ?></h3>
</div>

<div id="menu-ribbon">
<div id="center-menu-ribbon">
<div id="MainMenu"><div id="Menu">
<div id='cssmenu'> 
<div id="myslidemenu" class="jqueryslidemenu">
	<?php
		$this->widget('ActiveMenu');
	?>
</div> 
</div> 

</div>
</div>
</div>

<div class="cleaner_h0"></div>
</div>
<div class="cleaner_h5"></div>

<div id="out-content">
	<?php echo $content; ?>
</div>


<div id="footer-menu">
<div id="center-footer-menu">
	<?php
		$this->widget('FooterMenu');
	?>
</div>
</div>

<div id="footer">
<div class="cleaner_h20"></div>
	<div id="footer-inner">
		<div id="footer-left">
			TIM KERJA KONEKTIVITAS - KP3EI
			<div class="cleaner_h5"></div>
			Sekretariat Tim Kerja Konektivitas Badan Perencanaan Pembangunan Nasional
			<div class="cleaner_h0"></div>
			Gedung Madiun Lt. 3, Jalan Taman Suropati No. 2
			<div class="cleaner_h0"></div>
			Jakarta Pusat 10310
			<div class="cleaner_h5"></div>
			Telp/Fax - 021.31934251
		</div>
		<div id="footer-right">
			STATISTIK PENGUNJUNG
			<?php Yii::app()->counter->refresh(); ?>
			<div class="cleaner_h0"></div>
			Online User : <?php echo Yii::app()->counter->getOnline(); ?>
			<div class="cleaner_h0"></div>
			Visit Today : <?php echo Yii::app()->counter->getToday(); ?>
			<div class="cleaner_h0"></div>
			Yesterday : <?php echo Yii::app()->counter->getYesterday(); ?>
			<div class="cleaner_h0"></div>
			Total Visitor : <?php echo Yii::app()->counter->getTotal(); ?>
			<div class="cleaner_h0"></div>
		</div>
	</div>
<div class="cleaner_h20"></div>
</div>
</body>
</html>
