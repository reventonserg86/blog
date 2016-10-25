<?php

/**
 * Контроллер ArticleController
 **/

	class ArticleController
	{


     /**
     * Action для страницы просмотра статей
     */
     public function actionView($articleId)
     {

     		// Список категорий для левого меню
     		$categories = Category::getCategoriesList();

     		// Выводим статью
     		$article = Articles::getArticleById($articleId);

     		// Подключаем вид
        require_once(ROOT . '/views/blog/view.php');
        return true;
     }
	}