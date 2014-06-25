<?php

class Dashboard_agendaController extends Controller
{
	public function init()
	{
		if (Yii::app()->user->isGuest || Yii::app()->user->status_user!="user_dashboard") 
		{
			$this->redirect(array("site/index"));
		}
		$this->widget('CekAkses',array("id_select"=>Yii::app()->controller->id));
	}
	
	public $layout='main_dashboard_cms';

	public function actionIndex()
	{
		$this->render('index');
	}

	public function actionRest()
	{
		$criteria = new CDbCriteria;
		$criteria->select = "*";
		$criteria->alias = "t1";
		if(Yii::app()->user->isGuest)
		{
			$criteria->condition = "jenis = 'public'";
		}
		else
		{
			if(Yii::app()->controller->id!="dashboard_agenda")
			{
				$url = "dashboard_".Yii::app()->controller->id;
				$this->widget('CekAkses',array("id_select"=>$url));
			}
		}
        $db = AgendaModel::model()->findAll($criteria);

        header('Content-type: text/json');
		header('Content-type: application/json');
        //echo str_replace("\r\n","",CJSON::encode($db));

        echo "[";
        $j=0;
        foreach($db as $d)
        {
        	$output = str_replace(array("\r\n", "\r"), "\n", $d->keterangan);
			$lines = explode("\n", $d->keterangan);
			$new_lines = array();

			foreach ($lines as $i => $line) {
			    if(!empty($line))
			        $new_lines[] = trim($line);
			}

        	if($j>0)
        	{
        	echo ',{"id_agenda":"'.$d->id_agenda.'","title":"'.$d->title.'","start":"'.$d->start.'","end":"'.$d->end.'","url":"'.$d->url.'","tanggal":"'.$d->tanggal.'","tempat":"'.$d->TempatAgenda->tempat.'","keterangan":"'.strip_tags(implode($new_lines)).'","jumlah_peserta":"'.$d->jumlah_peserta.'","penanggung_jawab":"'.$d->penanggung_jawab.'","email":"'.$d->email_penanggung_jawab.'","no_telp":"'.$d->no_telp_penanggung_jawab.'","jam":"'.$d->jam.'","durasi":"'.$d->durasi.'","nama_file":"'.$d->nama_file.'","jam_mulai":"'.$d->start.'","jam_selesai":"'.$d->end.'"}';
        	}
        	else
        	{
        		echo '{"id_agenda":"'.$d->id_agenda.'","title":"'.$d->title.'","start":"'.$d->start.'","end":"'.$d->end.'","url":"'.$d->url.'","tanggal":"'.$d->tanggal.'","tempat":"'.$d->TempatAgenda->tempat.'","keterangan":"'.strip_tags(implode($new_lines)).'","jumlah_peserta":"'.$d->jumlah_peserta.'","penanggung_jawab":"'.$d->penanggung_jawab.'","email":"'.$d->email_penanggung_jawab.'","no_telp":"'.$d->no_telp_penanggung_jawab.'","jam":"'.$d->jam.'","durasi":"'.$d->durasi.'","nama_file":"'.$d->nama_file.'","jam_mulai":"'.$d->start.'","jam_selesai":"'.$d->end.'"}';
        	}
        	$j++;
        }
        echo "]";

  		Yii::app()->end();
	}
}