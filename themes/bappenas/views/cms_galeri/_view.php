
    <li style="float:left; padding:10px;"><a href="#" title="" rel="prettyPhoto"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/galeri/<?php echo $data->gambar; ?>" width="140" alt="" /></a>
        <div class="actions" style="background-color:#333; padding:2px; text-align:center;">
            <a href="<?php echo Yii::app()->baseUrl; ?>/cms_galeri/update/<?php echo $data->id_galeri; ?>" title="Edit"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/edit.png" alt="" /></a>
            <a href="<?php echo Yii::app()->baseUrl; ?>/cms_galeri/delete/<?php echo $data->id_galeri; ?>" title="Hapus" onclick="return confirm('are you sure'); "><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/delete.png" alt="" /></a>
        </div>
    </li>
