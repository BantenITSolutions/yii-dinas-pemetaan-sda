
<div id="content-center">

		<div id="title-news"><?php echo $data->FrontMenu->menu; ?></div>
		
	    <?php echo $data->isi; ?>
	    
	    <div class="alert alert-info">
	        <?php if($data->nama_file!=""){ echo CHtml::link(CHtml::encode("Download File"), Yii::app()->theme->baseUrl.'/green_files/'.$data->nama_file);} ?>
	    </div>
		<div class="cleaner_h40"></div>
</div>
