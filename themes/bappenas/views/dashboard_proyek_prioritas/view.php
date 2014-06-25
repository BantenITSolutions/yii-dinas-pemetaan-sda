 <div class="title"><h5>View Proyek Prioritas</h5></div>
 <div class="widget first">
    <div class="head"><h5 class="iCreate"><?php echo $model->judul; ?></h5></div>
        <div class="body">
            <p>Posted on : <?php echo $model->tanggal; ?></p>
		    <?php 
		      $gbr="no_image.jpg";
		      if($model->gambar!=""){$gbr=$model->gambar;}
		    ?>
		    <img src='<?php echo Yii::app()->theme->baseUrl; ?>/proyek_prioritas/<?php echo $gbr; ?>' width="250" height="180" style="float:left; padding:10px;" /></a>
		    <?php echo $model->isi; ?>
        </div>
    </div>
</div>
