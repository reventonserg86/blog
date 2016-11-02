<?php

/**
 * Контроллер PortfolioController
 **/

	class PortfolioController
	{

		/**
    * Action для страницы "Портфолио"
    */
    public function actionIndex()
    {

    	// Список категорий для левого меню
     	$categories = Category::getCategoriesList();

    	//Список рекомендованных статей
      $recomendArticles = Articles::getArticlesRecomList();

    	// Список проектов
    	$projectsList = Portfolio::getProjectList();

    	// Подключаем вид
      require_once(ROOT . '/views/portfolio/index.php');
      return true;
    }
	}