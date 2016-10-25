<?php

		/**
 * Контроллер AdminArticleController
 * Управление статьями в админпанели
 */
		class AdminArticleController
		{

			/**
     	* Action для страницы "Управление статьями"
     	*/
     	public function actionIndex()
     	{

     		//Получаем список статтей
     		$articlesList = Articles::getArticlesList();

     		//Подключаем вид
     		require_once (ROOT . '/views/admin_article/index.php');
     		return true;
     	}

     	/**
     	* Action для страницы "Добавление статьи"
     	*/
     	public function actionCreate()
     	{

     		// Получаем список категорий для выпадающего списка
        $categoriesList = Category::getCategoriesListAdmin();

        // Обработка формы
        if(isset($_POST['submit'])){
        	// Если форма отправлена
          // Получаем данные из формы
          $options['title'] = $_POST['title'];
          $options['category_id'] = $_POST['category_id'];
          $options['article'] = $_POST['article'];
          $options['status'] = $_POST['status'];
          $options['is_date'] = $_POST['is_date'];
          $options['is_recomended'] = $_POST['is_recomended'];

          // Флаг ошибок в форме
          $errors = false;

          // При необходимости можно валидировать значения нужным образом
            if (!isset($options['title']) || empty($options['title'])) {
                $errors[] = 'Заполните поля';
            }

            if ($errors == false) {
                // Если ошибок нет
                // Добавляем новый товар
                $id = Articles::createArticle($options);

                // Если запись добавлена
                if ($id) {
                    // Проверим, загружалось ли через форму изображение
                    if (is_uploaded_file($_FILES["image"]["tmp_name"])) {
                        // Если загружалось, переместим его в нужную папке, дадим новое имя
                        move_uploaded_file($_FILES["image"]["tmp_name"], $_SERVER['DOCUMENT_ROOT'] . "/uploads/images/{$id}.jpg");
                    }
                };

                // Перенаправляем пользователя на страницу управлениями товарами
                header("Location: /admin/article");
            }
        }

        // Подключаем вид
        require_once(ROOT . '/views/admin_article/create.php');
        return true;
     	}


     	/**
     	* Action для страницы "Редактирование статьи"
     	*/
     	public function actionUpdate($id)
     	{


     		// Получаем список категорий для выпадающего списка
        $categoriesList = Category::getCategoriesListAdmin();


     		// Получаем список категорий для выпадающего списка
        $article = Articles::getArticleById($id);

        // Обработка формы
        if(isset($_POST['submit'])){
        	// Если форма отправлена
          // Получаем данные из формы
          $options['title'] = $_POST['title'];
          $options['category_id'] = $_POST['category_id'];
          $options['article'] = $_POST['article'];
          $options['status'] = $_POST['status'];
          $options['is_date'] = $_POST['is_date'];
          $options['is_recomended'] = $_POST['is_recomended'];

         	// Сохраняем изменения
          if (Articles::updateArticle($id, $options)) {

          	    // Если запись сохранена
                // Проверим, загружалось ли через форму изображение
                    if (is_uploaded_file($_FILES["image"]["tmp_name"])) {
                        // Если загружалось, переместим его в нужную папке, дадим новое имя
                        move_uploaded_file($_FILES["image"]["tmp_name"], $_SERVER['DOCUMENT_ROOT'] . "/uploads/images/{$id}.jpg");
                }
            }

            // Перенаправляем пользователя на страницу управлениями товарами
            header("Location: /admin/article");
        }

        // Подключаем вид
        require_once(ROOT . '/views/admin_article/update.php');
        return true;

     	}


     	/**
     	* Action для страницы "Удаление статьи"
     	*/
     	public function actionDelete($id)
 			{

 			// Обработка формы
 			if (isset($_POST['submit'])){
 				// Если форма отправлена
        // Удаляем категорию
 				Articles::deleteArticleById($id);

 				// Перенаправляем пользователя на страницу управлениями товарами
      	header("Location: /admin/article");
      }

      // Подключаем вид
      require_once (ROOT . '/views/admin_article/delete.php');
      return true;
 			}
		}