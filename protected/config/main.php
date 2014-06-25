<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
Yii::setPathOfAlias('editable', dirname(__FILE__).'/../extensions/x-editable');
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'TIM KERJA KONEKTIVITAS - KP3EI ',

	// preloading 'log' component
	'preload'=>array('log'),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
		'editable.*' //easy include of editable classes
	),

	'modules'=>array(
		// uncomment the following to enable the Gii tool
		
		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'dua_rasa',
			// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('127.0.0.1','::1','192.168.34.*'),
			//generator paths
			'generatorPaths' => array(
	          'bootstrap.gii'
	       	),
		),
		
	),

	// application components
	'components'=>array(
		'counter' => array(
            'class' => 'ext.usercounter.UserCounter',
        ),
		'user'=>array(
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
		),
		//load yii bootstrap
		'bootstrap' => array(
		    'class' => 'ext.bootstrap.components.Bootstrap',
		    'responsiveCss' => true,
		),
		// uncomment the following to enable URLs in path-format
		
		'urlManager'=>array(
			'urlFormat'=>'path',
			'showScriptName'=>false,
			'rules'=>array(
				'<controller:\w+>/<id:\d+>'=>'<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
		      	//'<judul>'=>'site/<judul>',
			),
		),
		'editable' => array(
            'class'     => 'editable.EditableConfig',
            'form'      => 'jqueryui',        //form style: 'bootstrap', 'jqueryui', 'plain' 
            'mode'      => 'popup',            //mode: 'popup' or 'inline'  
            'defaults'  => array(              //default settings for all editable elements
               'emptytext' => 'Click to edit'
            )
        ),   
		
		/*
		'db'=>array(
			'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
		),
		*/
		// uncomment the following to use a MySQL database
		
		'db'=>array(
			'connectionString' => 'pgsql:host=127.0.0.1;port=5432;dbname=duarasa_bappenas',
			'username' => 'duarasa_gede',
			'password' => 'lumbung32',
			'charset' => 'utf8',
		),
		
		'errorHandler'=>array(
			// use 'site/error' action to display errors
			'errorAction'=>'site/error',
		),
		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
				// uncomment the following to show log messages on web pages
				/*
				array(
					'class'=>'CWebLogRoute',
				),
				*/
			),
		),
		'simpleImage' => array (
        	'class' => 'ext.SimpleImage.CSimpleImage',
   		),
	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		// this is used in contact page
		'adminEmail'=>'dev@dua-rasa.com',
		'siteTitle'=>'TIM KERJA KONEKTIVITAS - KP3EI',
		'siteQuotes'=>'Locally Integrated - Globally Connected',
		'postLimitSmall'=>'5',
		'postLimitMedium'=>'10',
		'postLimitLarge'=>'15',
	),

	//theme
	'theme' => 'bappenas',
);