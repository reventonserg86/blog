<?php

/**
 * Контроллер ServicesController
 **/

	class ServicesController
	{


     /**
     * Action для страницы услуги
     */
     public function actionIndex()
     {

     	// Список категорий для левого меню
     	$categories = Category::getCategoriesList();

     	//Список рекомендованных статей
        $recomendArticles = Articles::getArticlesRecomList();

     	// Подключаем вид
        require_once(ROOT . '/views/services/services.html');
        return true;
     }
	}