<?php

class RekapitulasiController extends Controller
{
	public $layout='sidebar_content';

	public function actionIndex()
	{
		$this->render('index');
	}
}