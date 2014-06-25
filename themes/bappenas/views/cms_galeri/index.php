<div class="title"><h5>Manage Galeri</h5></div>

    <div class="widget first">
        <div class="head"><h5 class="iCreate">Welcome, <?php echo Yii::app()->user->nama_lengkap; ?></h5></div>
            <div class="body">

				<?php echo CHtml::link('Add Data',Yii::app()->baseUrl.'/cms_galeri/create/'.Yii::app()->getRequest()->getQuery('id').' ',array('class'=>'btn14')); ?>
        		<ul>
					<?php $this->widget('zii.widgets.CListView', array(
						'dataProvider'=>$dataProvider,
						'itemView'=>'_view',
					)); ?>
				</ul>
				<div style="width:100%; height:10px; clear:both;"></div>
			</div>
		</div>
