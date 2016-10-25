<?php

/**
 * Контроллер BlogController
 **/

	class BlogController
	{
		 /**
     * Action для страницы "Blog"
     */
     public function actionIndex()
     {

     		// Список категорий для левого меню
     		$categories = Category::getCategoriesList();

     		// Список заголовков статей
     		$listArticleTitle = Articles::getArticleTitleList();

     		// Подключаем вид
        require_once(ROOT . '/views/blog/index.php');
        return true;
     }

    /**
     * Action для страницы "Категория cтатей"
     */
     public function actionCategory($categoryId)
     {

     		// Список категорий для левого меню
     		$categories = Category::getCategoriesList();

     		// Список статей в категории
     		$categoryArticles = Articles::getArticlesListByCategory($categoryId);

     		// Подключаем вид
        require_once(ROOT . '/views/blog/category.php');
        return true;
     }
	}