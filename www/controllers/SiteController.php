<?php
	
	/**
 * Контроллер CartController
 */

	class SiteController
	{

		 /**
     * Action для главной страницы
     */
		 public function actionIndex()
		 {

		 	// Список категорий для меню
		 	$categories = Category::getCategoriesList();

		 	//Список последних статей
		 	$articlesList = Articles::getLatestArticles();

		 	//Список рекомендованных статей
		 	$recomendArticles = Articles::getArticlesRecomList();

		 	//Подключаем вид страницы
		 	require_once (ROOT . '/views/site/index.php');
		 	return true;

		 }
	}
?>