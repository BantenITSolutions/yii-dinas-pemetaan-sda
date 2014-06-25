<script type="text/javascript">
function cek(param)
{
	$.ajax({
	    type: 'post',
	    url: '<?php echo Yii::app()->baseUrl; ?>/dbi/set/',
	    data: 'set_param='+param,
		    success: function(response) {
		    }
	});
}
</script>

<div class="title"><h5>Manage Database Infrastruktur</h5></div>

    <div class="widget first">
        <div class="head"><h5 class="iCreate">Welcome, <?php echo Yii::app()->user->nama_lengkap; ?></h5></div>
            <div class="body">
				<?php echo CHtml::link('Add New Data',Yii::app()->baseUrl.'/cms_database_infrastruktur/create/',array('class'=>'btn14')); ?>
				<?php echo CHtml::link('View Map',Yii::app()->baseUrl.'/dbi/',array('class'=>'btn14','target'=>'_blank')); ?>

				<?php
				$this->beginWidget('CActiveForm', array(
			        'id' => 'contact-dashboard-model-form',
			        'action' => array('cms_database_infrastruktur/deleteall'),
			        'enableAjaxValidation' => true,
			    )); 
			    $this->widget('zii.widgets.grid.CGridView', array(
					'id'=>'sislognas-dashboard-model-grid',
					'filter' => $model,
					'dataProvider'=>$model->search(),
        			'selectableRows' => 2,
					'columns'=>array(
			            array(
			                'class' => 'CCheckBoxColumn',
			                'id' => 'id',
			            ),
					     array(
					      'header'=>'No',
					      'type'=>'raw',
					      'value'=>'$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize + $row+1'
					      ),
				           array(
					      	'header'=>'Koridor',
				             'name'=>'id_koridor',
				             'value'=>'strip_tags($data->Koridor->koridor)',
				             'filter'=>CHtml::dropDownList(
									'InfrastrukturCmsModel[id_koridor]',Yii::app()->session['id_koridor'],array(''=>'Semua') + CHtml::listData(KoridorModel::model()->findAll(),'id_koridor','koridor'),array(
									'onchange' => "cek('koridor_'+this.value)",
									)
								)
				           ),
				           array(
					      	'header'=>'Sektor',
				             'name'=>'id_sektor',
				             'value'=>'strip_tags($data->Sektor->sektor)',
				             'filter'=>CHtml::dropDownList(
									'InfrastrukturCmsModel[id_sektor]',Yii::app()->session['id_sektor'],array(''=>'Semua') + CHtml::listData(SektorModel::model()->findAll(),'id_sektor','sektor'),array(
									'onchange' => "cek('sektor_'+this.value)",
									)
								)
				           ),
				           'nama_proyek',
				           array(
					      	'header'=>'Nilai Investasi',
				             'name'=>'id_nilai_investasi',
				             'value'=>'strip_tags($data->NilaiInvestasi->nilai_investasi)',
				             'filter'=>CHtml::dropDownList(
									'InfrastrukturCmsModel[id_nilai_investasi]',Yii::app()->session['id_nilai_investasi'],array(''=>'Semua') + CHtml::listData(NilaiInvestasiModel::model()->findAll(),'id_nilai_investasi','nilai_investasi'),array(
									'onchange' => "cek('investasi_'+this.value)",
									)
								)
				           ),
				           array(
					      	'header'=>'Sumber Dana',
				             'name'=>'id_sumber_dana',
				             'value'=>'strip_tags($data->SumberDana->sumber_dana)',
				             'filter'=>CHtml::dropDownList(
									'InfrastrukturCmsModel[id_sumber_dana]',Yii::app()->session['id_sumber_dana'],array(''=>'Semua') + CHtml::listData(SumberDanaModel::model()->findAll(),'id_sumber_dana','sumber_dana'),array(
									'onchange' => "cek('sumberdana_'+this.value)",
									)
								)
				           ),
				           array(
					      	'header'=>'Kawasan',
				             'name'=>'id_kawasan',
				             'value'=>'strip_tags($data->Kawasan->kawasan)',
				             'filter'=>CHtml::dropDownList(
									'InfrastrukturCmsModel[id_kawasan]',Yii::app()->session['id_kawasan'],array(''=>'Semua') + CHtml::listData(KawasanModel::model()->findAll(),'id_kawasan','kawasan'),array(
									'onchange' => "cek('kawasan_'+this.value)",
									)
								)
				           ),
						array(
							'class'=>'CButtonColumn',
						),
					),
				));
					echo CHtml::submitButton('Delete', array('class' => 'button'));
    				$this->endWidget(); ?>
			</div>
		</div>

