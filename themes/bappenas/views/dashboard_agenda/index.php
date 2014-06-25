<link href='<?php echo Yii::app()->theme->baseUrl; ?>/css/fullcalendar.css' rel='stylesheet' />
<script src='<?php echo Yii::app()->theme->baseUrl; ?>/js/fullcalendar.min.js'></script>

<script type="text/javascript"> 

	$(document).ready(function(){
		//agenda
		$('#calendar').fullCalendar({
            events: "<?php echo Yii::app()->baseUrl; ?>/dashboard_agenda/rest",
            header: {
                left: 'prev,next today',
                center: 'title',
                right: ''
            },
            eventRender: function (event, element) {
                element.attr('href', 'javascript:void(0);');
                element.attr('onclick', 'javascript:openModal("' + event.title + '","' + event.tempat + '","' + event.penanggung_jawab + '","' + event.jam_mulai + '","' + event.jam_selesai + '","' + event.tanggal + '","' + event.keterangan + '","' + event.jumlah_peserta + '","' + event.unit_kerja + '","' + event.email + '","' + event.no_telp + '","' + event.jam + '","' + event.durasi + '","' + event.nama_file + '");');
            }

        });

	});    


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

 <div class="title"><h5>View Agenda</h5></div>
 <div class="widget first">
    <div class="head"><h5 class="iCreate">Welcome, <?php echo Yii::app()->user->nama_lengkap; ?></h5></div>
        <div class="body">
            <div id="calendar"></div>
        
		   <div id="calendar"></div>
        
            <div id="eventContent" title="Event Details" style="position: relative;
            top: 0;
            left: 0;
            padding: 15px;
            z-index: 8888;
            outline: none;
            display: none;">
                <div id="eventInfo"></div>
                <p><strong><a id="eventLink" target="_blank">Download Files</a></strong></p>
            </div>
        </div>
    </div>
</div>

	