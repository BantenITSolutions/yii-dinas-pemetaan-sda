<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title><?php echo CHtml::encode($this->pageTitle); ?></title>
<link href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.css" rel="stylesheet" type="text/css" />
<link href="<?php echo Yii::app()->request->baseUrl; ?>/css/menu.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/vtip.css" />
<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/colorbox/colorbox.css" />
<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/nivo/default.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/nivo/nivo-slider.css" type="text/css" media="screen" />

<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-ui.min.js" ></script>
<script language="javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/site.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/vtip.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/newsticker.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/colorbox/jquery.colorbox.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.slideViewerPro.1.5.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/assets/nivo/jquery.nivo.slider.js"></script>


<script type="text/javascript"> 

	$(document).ready(function(){


		$('#carousel_ul li:first').before($('#carousel_ul li:last')); 
           
        $('#right_scroll img').click(function(){
            var item_width = $('#carousel_ul li').outerWidth() + 10;
            var left_indent = parseInt($('#carousel_ul').css('left')) - item_width;
            $('#carousel_ul:not(:animated)').animate({'left' : left_indent},500,function(){    
                $('#carousel_ul li:last').after($('#carousel_ul li:first')); 
                $('#carousel_ul').css({'left' : '-210px'});
            }); 
        });

        $('#left_scroll img').click(function(){
            
            var item_width = $('#carousel_ul li').outerWidth() + 10;
            var left_indent = parseInt($('#carousel_ul').css('left')) + item_width;
            $('#carousel_ul:not(:animated)').animate({'left' : left_indent},500,function(){            
            $('#carousel_ul').css({'left' : '-210px'});
            });
            
        });
		

		$(".boxlogin").colorbox({rel:'group', iframe:true, width:"550", height:"350"});
		$(".boxcontact").colorbox({rel:'group', iframe:true, width:"550", height:"450"});
		$(".profil").colorbox({rel:'group', iframe:true, width:"750", height:"500"});
		$(".kliping").colorbox({rel:'group', iframe:true, width:"800", height:"500"});
		$(".boxberita").colorbox({rel:'group', iframe:true, width:"800", height:"500"});

		$('#slider2').tinycarousel({ display: 2 });
		$(".ticker").jCarouselLite({
			vertical: true,
			hoverPause:true,
			visible: 1,
			auto:3000,
			speed:2000,
			btnNext: ".next_item",
			btnPrev: ".prev_item"
		});
	});
	
	$(window).load(function() {
    	$('#slider').nivoSlider();
	});
	
	$(window).bind("load", function() {
		$("div#basic").slideViewerPro();
	});
</script> 
</head>

<body onLoad="goforit()">
<div id="long-line-top">
<div id="line-top">
<div id="left-line-top">
	Selamat datang pengunjung | <script src="js/clock.js" type="text/javascript"></script><span id="clock"></span></div>
<div id="right-line-top"><div class="cleaner_h5"></div><div class="cleaner_h3"></div>
<div id="w2b-searchbox">
	<form id="w2b-searchform" action="pencarian" method="POST">
	<input type="text" id="s" name="key" placeholder="Pencarian...."/>
	<input type="image" src="images/blank.gif" id="sbutton" />
	</form>
	</div>
</div>
</div>
</div>


<div id="header"> 
	<h1>TIM KERJA KONEKTIVITAS - KP3EI </h1>
	<h3>Locally Integrated – Globally Connected</h3>
</div>

<div id="menu-ribbon">
<div id="center-menu-ribbon">
<div id="MainMenu"><div id="Menu">
<div id='cssmenu'> 
	<ul> 
		<li><a href='index.html'><span>Beranda</span></a></li> 
		<li><a href='index.html'><span>Berita</span></a></li> 
		<li><a href='index.html'><span>Galeri</span></a></li> 
		<li><a href='index.html'><span>Agenda</span></a></li> 
		<li><a href='index.html'><span>Kliping</span></a></li> 
		<li><a href='index.html'><span>Database Infrastruktur</span></a></li> 
		<li class='has-sub'><a href='#'><span>Green MP3EI</span></a> 
			<ul> <li><a href='#'><span>Latar Belakang</span></a></li> 
				<li><a href='#'><span>Tujuan dan Perkembangan</span></a></li> 
				<li><a href='#'><span>Dokumen</span></a></li> 
			</ul> 
		</li> 
		<li class='has-sub'><a href='#'><span>Sislognas</span></a> 
			<ul> <li><a href='#'><span>Latar Belakang</span></a></li> 
				<li><a href='#'><span>Tujuan dan Perkembangan</span></a></li> 
				<li><a href='#'><span>Dokumen</span></a></li> 
			</ul> 
		</li> 
	</ul> 
</div> 

</div>
</div>
</div>

<div class="cleaner_h0"></div>
</div>
<div class="cleaner_h5"></div>


<div id="content">
<div class="slider-wrapper theme-default">
	<div id="slider" class="nivoSlider">
		<img src="img/banner01.jpg" data-thumb="img/banner01.jpg" alt="" title="This is an example of a caption" />
		<img src="img/banner02.jpg" data-thumb="img/banner02.jpg" alt="" title="This is an example of a caption" />
		<img src="img/banner03.jpg" data-thumb="img/banner03.jpg" alt="" title="This is an example of a caption" />
		<img src="img/banner01.jpg" data-thumb="img/banner01.jpg" alt="" title="This is an example of a caption" />
		<img src="img/banner02.jpg" data-thumb="img/banner02.jpg" alt="" title="This is an example of a caption" />
    </div>
</div>
<div style="width:100%; float:left; margin-bottom:10px;">
	<ul id="breadcrumb">
	    <li><a href="#" title="Home"><img src="images/home.png" alt="Home" class="home" /></a></li>
	    <li><a href="#" title="Sample page 1">Selamat Datang di Website Tim Kerja Konektivitas KP3EI</a></li>
	</ul>
</div>



<div id="content-center">
	<div id="bg-welcome">
		<img src="images/kepala-dinas.jpg" style="float:left; margin:10px; width:100px;" />
		<strong>Assalamualaikum Wr. Wb. </strong><br /><br />
		Selamat datang di Website Dinas Perhubungan, Komunikasi dan Informatika Kota Pekanbaru, Website ini dimaksudkan sebagai sarana publikasi untuk memberikan Informasi dan gambaran Dinas Perhubungan, Komunikasi dan Informatika Kota Pekanbaru dalam melaksanakan pelayanan perhubungan. Melalui keberadaan website ini kiranya masyarakat dapat mengetahui seluruh informasi tentang Kebijakan Pemerintah Kota Pekanbaru didalam pengelolaan sektor transportasi dan telekomunikasi di wilayah Kotamadya Pekanbaru.  <br /><br />
		Kritik dan saran terhadap kekurangan dan kesalahan yang ada sangat kami harapkan guna penyempurnaan Website ini dimasa datang. Semoga Website ini memberikan manfaat bagi kita semua.  <br /><br />
		Terima kasih. 
		 <br /><br />
		<strong>S. SAYUTI</strong><br />
		Kepala Dinas Perhubungan, Komunikasi dan Informatika Kota Pekanbaru
	</div>

	<div class="cleaner_h20"></div>
	<div id="title-news">BERITA TERBARU</div>
	<div class="cleaner_h20"></div>

	<div id='carousel_container'>
  <div id='left_scroll'><img src='images/left.png' /></div>
    <div id='carousel_inner'>
        <ul id='carousel_ul'>
            <li><a href='berita.html' class='boxberita'><img src='berita/1.jpg' width="210" height="110" /></a><div class="cleaner_h5"></div><h4>Rapat Pemutakhiran Data Penyusunan LPPD Tahun 2011</h4></li>
            <li><a href='berita.html' class='boxberita'><img src='berita/2.jpg' width="210" height="110" /></a><div class="cleaner_h5"></div><h4>Rapat Pemutakhiran Data Penyusunan LPPD Tahun 2011</h4></li>
            <li><a href='berita.html' class='boxberita'><img src='berita/3.jpg' width="210" height="110" /></a><div class="cleaner_h5"></div><h4>Rapat Pemutakhiran Data Penyusunan LPPD Tahun 2011</h4></li>
            <li><a href='berita.html' class='boxberita'><img src='berita/4.jpg' width="210" height="110" /></a><div class="cleaner_h5"></div><h4>Rapat Pemutakhiran Data Penyusunan LPPD Tahun 2011</h4></li>
            <li><a href='berita.html' class='boxberita'><img src='berita/1.jpg' width="210" height="110" /></a><div class="cleaner_h5"></div><h4>Rapat Pemutakhiran Data Penyusunan LPPD Tahun 2011</h4></li>
            <li><a href='berita.html' class='boxberita'><img src='berita/2.jpg' width="210" height="110" /></a><div class="cleaner_h5"></div><h4>Rapat Pemutakhiran Data Penyusunan LPPD Tahun 2011</h4></li>
            <li><a href='berita.html' class='boxberita'><img src='berita/3.jpg' width="210" height="110" /></a><div class="cleaner_h5"></div><h4>Rapat Pemutakhiran Data Penyusunan LPPD Tahun 2011</h4></li>
            <li><a href='berita.html' class='boxberita'><img src='berita/4.jpg' width="210" height="110" /></a><div class="cleaner_h5"></div><h4>Rapat Pemutakhiran Data Penyusunan LPPD Tahun 2011</h4></li>
        </ul>
    </div>
  <div id='right_scroll'><img src='images/right.png' /></div>
  </div>

	<div class="cleaner_h20"></div>
	<div id="title-news">GALERI KEGIATAN DINAS TERBARU</div>
	<div class="cleaner_h20"></div>

  <div id="basic" class="svwp">
	<ul>
		<li><img width="700" height="290" title="Meander - P.J. Onori"  src="img/banner01.jpg" /></li>
		<li><img width="700" height="290" alt="Meander - P.J. Onori"  src="img/banner02.jpg" /></li>
		<li><img width="700" height="290" alt="Meander - P.J. Onori"  src="img/banner03.jpg" /></li>
		<li><img width="700" height="290" alt="Meander - P.J. Onori"  src="img/banner01.jpg" /></li>
		<li><img width="700" height="290" alt="Meander - P.J. Onori"  src="img/banner02.jpg" /></li>
		<li><img width="700" height="290" alt="Meander - P.J. Onori"  src="img/banner03.jpg" /></li>
		<li><img width="700" height="290" alt="Meander - P.J. Onori"  src="img/banner01.jpg" /></li>
		<li><img width="700" height="290" alt="Meander - P.J. Onori"  src="img/banner02.jpg" /></li>
		<li><img width="700" height="290" alt="Meander - P.J. Onori"  src="img/banner03.jpg" /></li>
		<li><img width="700" height="290" alt="Meander - P.J. Onori"  src="img/banner01.jpg" /></li>
		<li><img width="700" height="290" alt="Meander - P.J. Onori"  src="img/banner02.jpg" /></li>
		<li><img width="700" height="290" alt="Meander - P.J. Onori"  src="img/banner03.jpg" /></li>
	</ul>
</div>

</div>
<div id="content-right">

	<div id="bg-sidebar">
		<div id="head-sidebar">PROFIL KP3EI</div>
		<div id="content-sidebar">
			<a href="profil.html" class="vtip profil" title="Ini menu tugas dan fungsi"><div class="profil_2">Tugas dan Fungsi</div></a>
			<a href="profil.html" class="vtip profil" title="Ini menu struktur organisasi"><div class="profil_3">Struktur Organisasi</div></a>
			<a href="profil.html" class="vtip profil" title="Ini menu tim kerja konektivitas"><div class="profil_4">Tim Kerja Konektivitas</div></a>
		</div>
	</div>

	<div class="cleaner_h20"></div>

	<div id="bg-sidebar">
		<div id="head-sidebar">KLIPING TERBARU</div>
		<div id="content-sidebar">
			<ul class="tick-ul">
				<div id="listticker"><li class="tick-li"><h4>25 Mei 2012 </h4><a href="kliping.html" class="vtip kliping" title="Ini keterangan kliping">Wirid Pengajian Bulanan di Lingkungan Pemkab Bengkalis</a></li>
				<div id="listticker"><li class="tick-li"><h4>27 Mei 2012 </h4><a href="kliping.html" class="vtip kliping" title="Ini keterangan kliping">Pembukaan Pelatihan Bagi Petugas Khatib se- Kabupaten Bengkalis Tahun 2012.</a></li>
				<div id="listticker"><li class="tick-li"><h4>23 Mei 2012 </h4><a href="kliping.html" class="vtip kliping" title="Ini keterangan kliping">Pembukaan Pelatihan Manajemen Masjid se-Kabupaten Bengkalis Tahun 2012</a></li>
				<div id="listticker"><li class="tick-li"><h4>23 Mei 2012 </h4><a href="kliping.html" class="vtip kliping" title="Ini keterangan kliping">Rapat Pemutakhiran Data Penyusunan LPPD Tahun 2011</a></li>
				<div id="listticker"><li class="tick-li"><h4>25 Mei 2012 </h4><a href="kliping.html" class="vtip kliping" title="Ini keterangan kliping">Wirid Pengajian Bulanan di Lingkungan Pemkab Bengkalis</a></li>
				<div id="listticker"><li class="tick-li"><h4>27 Mei 2012 </h4><a href="kliping.html" class="vtip kliping" title="Ini keterangan kliping">Pembukaan Pelatihan Bagi Petugas Khatib se- Kabupaten Bengkalis Tahun 2012.</a></li>
				<div id="listticker"><li class="tick-li"><h4>23 Mei 2012 </h4><a href="kliping.html" class="vtip kliping" title="Ini keterangan kliping">Pembukaan Pelatihan Manajemen Masjid se-Kabupaten Bengkalis Tahun 2012</a></li>
				<div id="listticker"><li class="tick-li"><h4>23 Mei 2012 </h4><a href="kliping.html" class="vtip kliping" title="Ini keterangan kliping">Rapat Pemutakhiran Data Penyusunan LPPD Tahun 2011</a></li>
			</ul>
		</div>
	</div>

	<div class="cleaner_h20"></div>

	<div id="bg-sidebar">
		<div id="head-sidebar">LINK TERKAIT</div>
		<div id="content-sidebar">
			<ul>
				<li><a href="http://www.presidenri.go.id/" target="_blank">Presiden RI</a></li>
				<li><a href="http://perpustakaan.bappenas.go.id/" target="_blank">Perpustakaan Bappenas</a></li>
				<li><a href="http://bsdm.bappenas.go.id/" target="_blank">Informasi Kepegawaian BAPPENAS</a></li>
				<li><a href="http://irtama.bappenas.go.id/" target="_blank">Inspektorat Utama</a></li>
				<li><a href="http://www.icctf.or.id/" target="_blank">ICCTF</a></li>
			</ul>
		</div>
	</div>
</div>






<div class="cleaner_h10"></div>	
</div>
<div id="footer-menu">
<div id="center-footer-menu">
<a href="">Beranda</a> | 
<a href="">Berita</a> | 
<a href="">Galeri</a> | 
<a href="">Agenda</a> | 
<a href="">Kliping</a> | 
<a href="">Log In</a> | 
<a href="">Contact Us</a> | 
<a href="">Profil</a> | 
<a href="">Tugas dan Fungsi</a> | 
<a href="">Struktur Organisasi</a> | 
<a href="">Tim Kerja Konektivitas</a> | 
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
			Telp/Fax – 021.31934251
		</div>
		<div id="footer-right">
			STATISTIK PENGUNJUNG
			<div class="cleaner_h5"></div>
			Browser : Chrome 27.0.1453.116
			<div class="cleaner_h5"></div>
			Sistem Operasi : Mac OS X
			<div class="cleaner_h5"></div>
			Dikunjungi sebanyak : 29494 kali
			<div class="cleaner_h5"></div>
			IP Address : 127.0.0.1
		</div>
	</div>
<div class="cleaner_h20"></div>
</div>
</body>
</html>
