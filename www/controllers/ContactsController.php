<?php

/**
 * Контроллер ContactsController
 **/

	class ContactsController
	{

		/**
    * Action для страницы "Контакты"
    */
    public function actionIndex()
    {

    	// Список категорий для левого меню
     	$categories = Category::getCategoriesList();

    	//Список рекомендованных статей
      $recomendArticles = Articles::getArticlesRecomList();

    	// Подключаем вид
      require_once(ROOT . '/views/contacts/contacts.html');
      return true;
    }
	}