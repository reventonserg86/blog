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

		 	// Список категорий для левого меню
		 	$categories = Category::getCategoriesList();

		 	//Список рекомендованных заголовков статей
		 	$arcRecomendTitle = Articles::getArticlesRecomTitleList();

		 	//Подключаем вид страницы
		 	require_once (ROOT . '/views/site/index.php');
		 	return true;

		 }
	}
?>