<?php

	return array(

		'article/([0-9]+)' => 'article/view/$1', //actionView in ArticleController
		'blog' => 'blog/index', //actionIndex in BlogController
		'category/([0-9]+)' => 'blog/category/$1', // actionCategory в BlogController

		//управление статьями
		'admin/article/update/([0-9]+)' => 'adminArticle/update/$1',
		'admin/article/create' => 'adminArticle/create',
		'admin/article/delete/([0-9]+)' => 'adminArticle/delete/$1',
		'admin/article' => 'adminArticle/index',
		
		//управление категориями
		'admin/category/update/([0-9]+)' => 'adminCategory/update/$1',
		'admin/category/create' => 'adminCategory/create',
		'admin/category/delete/([0-9]+)' => 'adminCategory/delete/$1',
		'admin/category' => 'adminCategory/index',

		// Админпанель:
		'admin' => 'admin/index',

		// Главная страница
    	'index.php' => 'site/index', // actionIndex в SiteController
    	'' => 'site/index', // actionIndex в SiteController
	);