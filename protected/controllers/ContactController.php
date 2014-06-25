<?php

class ContactController extends Controller
{
	public function actionIndex()
	{
		$model=new ContactForm;
		if(isset($_POST['ContactForm']))
		{
			$model->attributes=$_POST['ContactForm'];
			if($model->validate())
			{
				$in=new ContactModel;
				$in->attributes=$_POST['ContactForm'];
				$in->tanggal=gmdate("d-M-Y H:i:s", time()+3600*7);
				$in->ip_address=$_SERVER['REMOTE_ADDR'];
				$in->kode_gen = time().rand(10,100);
				$in->stts = "Sudah Diterima";
				if($in->save())
				{

					$dt_email = Email::model()->findAll();

					foreach($dt_email as $d_e)
					{
						$name='=?UTF-8?B?'.base64_encode($model->nama).'?=';
						$subject='=?UTF-8?B?'.base64_encode("Contact Us - Konektivitas KP3EI").'?=';
						$headers="From: $name <{$model->email}>\r\n".
							"Reply-To: {$model->email}\r\n".
							"MIME-Version: 1.0\r\n".
							"Content-type: text/plain; charset=UTF-8";

						mail($d_e->email,$subject,$model->pesan,$headers);
					}

					$pesan = "Terima kasih telah mengirimkan pesan kepada kami. Nomor tiket anda : ".$in->kode_gen.". Untuk melihat status dari pesan anda, silahkan kunjungi link berikut : <a href='".Yii::app()->baseUrl."/ticket_contact' target='_blank'>Ticket Contact</a>";

					$name='=?UTF-8?B?'.base64_encode("No Reply Konektivitas KP3EI").'?=';
					$email = "noreply@konektivitas.dua-rasa.com";
					$subject='=?UTF-8?B?'.base64_encode("Contact Us - Konektivitas KP3EI").'?=';
					$headers="From: $name <{$email}>\r\n".
						"Reply-To: {$email}\r\n".
						"MIME-Version: 1.0\r\n".
						"Content-type: text/plain; charset=UTF-8";

					mail($model->email,$subject,$pesan,$headers);

					Yii::app()->user->setFlash('contact',"Terima kasih telah mengirimkan pesan. Pesan anda akan segera kami moderisasi.");
					$this->refresh();
				}
				
			}	
		}
		$this->renderPartial('index',array('model'=>$model), false, true);

	}

	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}

	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
}