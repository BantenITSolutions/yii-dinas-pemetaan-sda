<?php

class SiteController extends Controller
{

	public $layout='main';

	/**
	 * Declares class-based actions.
	 */
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

	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{
		$criteria=new CDbCriteria();

		$dataProvider=new CActiveDataProvider('KlipingModel', array(
			'pagination'=>array(
				'pageSize'=>5,
			),
			'criteria'=>$criteria,
		));

		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	public function actionRoute()
	{
        $criteria = new CDbCriteria;
        $criteria->condition = 'id_menu = '.Yii::app()->getRequest()->getQuery('id').'';
        $dt = MenuModel::model()->findAll($criteria);

        foreach ($dt as $dt_v) 
        {
        	if(substr($dt_v['url_route'],0,7)=="http://")
        	{
        		$this->redirect($dt_v['url_route']);
        	}
        	else if($dt_v['url_route']=="green")
        	{
        		$this->redirect(Yii::app()->baseUrl."/green/konten/".$dt_v['id_menu']);
        	}
        	else if($dt_v['url_route']=="subtim")
        	{
        		$this->redirect(Yii::app()->baseUrl."/subtim/konten/".$dt_v['id_menu']);
        	}
        	else if($dt_v['url_route']=="konektivitas")
        	{
        		$this->redirect(Yii::app()->baseUrl."/konektivitas/konten/".$dt_v['id_menu']);
        	}
        	else if($dt_v['url_route']!="")
        	{
        		$this->redirect(Yii::app()->baseUrl."/".$dt_v['url_route']);
        	}
        }
	}

	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
		if($error=Yii::app()->errorHandler->error)
		{
			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
		}
	}

	/**
	 * Displays the contact page
	 */
	public function actionContact()
	{
		$model=new ContactForm;
		if(isset($_POST['ContactForm']))
		{
			$model->attributes=$_POST['ContactForm'];
			if($model->validate())
			{
				$name='=?UTF-8?B?'.base64_encode($model->name).'?=';
				$subject='=?UTF-8?B?'.base64_encode($model->subject).'?=';
				$headers="From: $name <{$model->email}>\r\n".
					"Reply-To: {$model->email}\r\n".
					"MIME-Version: 1.0\r\n".
					"Content-type: text/plain; charset=UTF-8";

				mail(Yii::app()->params['adminEmail'],$subject,$model->body,$headers);
				Yii::app()->user->setFlash('contact','Thank you for contacting us. We will respond to you as soon as possible.');
				$this->refresh();
			}
		}
		$this->render('contact',array('model'=>$model));
	}

	/**
	 * Displays the login page
	 */
	public function actionLogin()
	{

		$model=new LoginForm;

		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}

		// collect user input data
		if(isset($_POST['LoginForm']))
		{
			$model->attributes=$_POST['LoginForm'];
			// validate user input and redirect to the previous page if valid
			if($model->validate() && $model->login())
			{
				?><script type="text/javascript">window.top.location.href='<?php echo Yii::app()->baseUrl.'/'.Yii::app()->user->route_admin; ?>';</script><?php
			}
		}
		// display the login form
		$this->renderPartial('login',array('model'=>$model),false,true);
	}

	public function actionReset()
	{
		$model=new ResetForm;

		if(isset($_POST['ResetForm']))
		{
			$model->attributes=$_POST['ResetForm'];

			if($model->validate())
			{
				$criteria = new CDbCriteria();
				$criteria->condition = "email='".$_POST['ResetForm']['email']."'";
				if($_POST['ResetForm']['hak_akses']=="user_cms")
				{
		        	$dt = UserDashboardModel::model()->find($criteria);
				}
				else
				{
		        	$dt = DashboardUserModel::model()->find($criteria);
				}

		        if(count($dt)>0)
		        {
					$model_up=$this->loadModel($dt->id,$_POST['ResetForm']['hak_akses']);

					$model_up->reset_pass=rand(0, 32767).time();
					if($model_up->save())
					{
						if($_POST['ResetForm']['hak_akses']=="user_cms")
						{
							$name='=?UTF-8?B?'.base64_encode(Yii::app()->name).'?=';
							$subject='=?UTF-8?B?'.base64_encode("Reset Password | ".CHtml::encode(Yii::app()->name)).'?=';
							$headers="From: ".Yii::app()->params['adminEmail']." <{No-Reply TIM KERJA KONEKTIVITAS - KP3EI}>\r\n".
								"Reply-To: {Yii::app()->params['adminEmail']}\r\n".
								"MIME-Version: 1.0\r\n".
								"Content-type: text/html; charset=UTF-8";

							$body = "Kunjungi link berikut untuk melakukan perubahan password, <a href='".Yii::app()->createAbsoluteUrl('site/reset_userc/'.$model_up->reset_pass)."'>".Yii::app()->createAbsoluteUrl('site/reset_userc/'.$model_up->reset_pass)."</a>";

							mail($dt->email,$subject,$body,$headers);
						}
						else
						{
							$name='=?UTF-8?B?'.base64_encode(Yii::app()->name).'?=';
							$subject='=?UTF-8?B?'.base64_encode("Reset Password | ".CHtml::encode(Yii::app()->name)).'?=';
							$headers="From: ".Yii::app()->params['adminEmail']." <{No-Reply TIM KERJA KONEKTIVITAS - KP3EI}>\r\n".
								"Reply-To: {Yii::app()->params['adminEmail']}\r\n".
								"MIME-Version: 1.0\r\n".
								"Content-type: text/html; charset=UTF-8";

							$body = "Kunjungi link berikut untuk melakukan perubahan password, <a href='".Yii::app()->createAbsoluteUrl('site/reset_userc/'.$model_up->reset_pass)."'>".Yii::app()->createAbsoluteUrl('site/reset_userc/'.$model_up->reset_pass)."</a>";

							mail($dt->email,$subject,$body,$headers);
						}
		        		Yii::app()->user->setFlash("result","Kode untuk melakukan perubahan password telah kami kirimkan via email.");
					}
		        }
		        else
		        {
		        	Yii::app()->user->setFlash("result","Email yang anda masukkan tidak terdapat di database kami.");
		        }
		        $this->redirect("reset");
			}
		}

		$this->renderPartial('reset',array('model'=>$model),false,true);
	}

	public function actionReset_Userc()
	{
        $criteria = new CDbCriteria;
        $criteria->condition = "reset_pass = '".Yii::app()->getRequest()->getQuery('id')."'";
        $dt = UserDashboardModel::model()->find($criteria);

		$model=new NewPassForm;
        
        if(count($dt)>0)
        {
        	if(isset($_POST['NewPassForm']))
			{
				$model->attributes=$_POST['NewPassForm'];
				$model->id_user = $dt->id;
				$model->reset_pass = Yii::app()->getRequest()->getQuery('id');

	        	if($model->validate())
				{
					$model_up=$this->loadModel($dt->id,"user_cms");

					$model_up->password=$this->hashPassword($_POST['NewPassForm']['password']);
					if($model_up->save())
					{
		        		Yii::app()->user->setFlash("contact","Password berhasil diubah.");
		        		$this->redirect(Yii::app()->baseUrl."/site/login");
					}
				}
			}
			$this->renderPartial('new_pass',array('model'=>$model),false,true);

        }
        else
        {
			echo "Link is invalid.";
        }
	}

	public function actionReset_Userd()
	{
        $criteria = new CDbCriteria;
        $criteria->condition = "reset_pass = '".Yii::app()->getRequest()->getQuery('id')."'";
        $dt = DashboardUserModel::model()->find($criteria);

		$model=new NewPassForm;
        
        if(count($dt)>0)
        {
        	if(isset($_POST['NewPassForm']))
			{
				$model->attributes=$_POST['NewPassForm'];
				$model->id_user = $dt->id;
				$model->reset_pass = Yii::app()->getRequest()->getQuery('id');

	        	if($model->validate())
				{
					$model_up=$this->loadModel($dt->id,"user_cms");

					$model_up->password=$this->hashPassword($_POST['NewPassForm']['password']);
					if($model_up->save())
					{
		        		Yii::app()->user->setFlash("contact","Password berhasil diubah.");
		        		$this->redirect(Yii::app()->baseUrl."/site/login");
					}
				}
			}
			$this->renderPartial('new_pass',array('model'=>$model),false,true);

        }
        else
        {
			echo "Link is invalid.";
        }
	}

	private function loadModel($id,$st)
	{
		if($st=="user_cms")
		{
        	$model = UserDashboardModel::model()->findByPk($id);
		}
		else
		{
        	$model = DashboardUserModel::model()->findByPk($id);
		}

		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}



	public function hashPassword($password)
	{
		return crypt($password, $this->generateSalt());
	}

	public function generateSalt($cost=10)
	{
		if(!is_numeric($cost)||$cost<4||$cost>31){
			throw new CException(Yii::t('Cost parameter must be between 4 and 31.'));
		}
		// Get some pseudo-random data from mt_rand().
		$rand='';
		for($i=0;$i<8;++$i)
			$rand.=pack('S',mt_rand(0,0xffff));
		// Add the microtime for a little more entropy.
		$rand.=microtime();
		// Mix the bits cryptographically.
		$rand=sha1($rand,true);
		// Form the prefix that specifies hash algorithm type and cost parameter.
		$salt='$2a$'.str_pad((int)$cost,2,'0',STR_PAD_RIGHT).'$';
		// Append the random salt string in the required base64 format.
		$salt.=strtr(substr(base64_encode($rand),0,22),array('+'=>'.'));
		return $salt;
	}

	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);
	}
}