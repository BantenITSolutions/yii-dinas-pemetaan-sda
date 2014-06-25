 <div class="title"><h5>View Dokumen</h5></div>
 <div class="widget first">
    <div class="head"><h5 class="iCreate"><?php echo $model->nama_dokumen; ?></h5></div>
        <div class="body">
            
            <script src="http://code.jquery.com/jquery.js"></script>
		    <script src="<?php echo Yii::app()->theme->baseUrl; ?>/bootstrap/js/bootstrap.min.js"></script>
		    <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery.gdocsviewer.min.js"></script>
		    <script type="text/javascript">
		      $(document).ready(function() {
		        $('#embedURL').gdocsViewer({ width: "100%", height: 600 });
		      });
		    </script>


		    <div class="row-fluid">
		      <div class="span12 alert alert-success">

		        <span><a href="<?php echo Yii::app()->baseUrl; ?>/dokumen/download/<?php echo $model->id_dokumen; ?>" class="greyishBtn submitForm">Download Dokumen</a></span>
		        <h6><?php echo $model->keterangan; ?></h6>
		          <a href="<?php echo Yii::app()->createAbsoluteUrl("/"); ?>/themes/<?php echo Yii::app()->theme->name; ?>/dokumen_files/<?php echo $model->nama_file; ?>" id="embedURL"></a>
		        </div>

		    	</div>
		    </div>
        </div>
    </div>
</div>
