<?php
	
	 /**
    * Класс Articles - модель для работы со статьями
    */
		class Articles
		{
			/**
      * Возвращает массив последних заголовков рукомендованных статей для списка на сайте
      **/

			public static function getArticlesRecomTitleList()
			{

				// Соединение с БД
    		$db = Db::getConnection();

    		// Запрос к БД
    		$result = $db -> query('SELECT id, title FROM articles WHERE is_recomended = "1"  ORDER BY is_date DESC');

    		// Получение и возврат результатов
    		$i = 0;
    		$recomArticlesTitleList = array();
    		while($row = $result->fetch()){
    			$recomArticlesTitleList[$i]['id'] = $row['id'];
    			$recomArticlesTitleList[$i]['title'] = $row['title'];
    			$i++;
    		}
    		return $recomArticlesTitleList;
			}

     /**
     * Возвращает массив последних заголовков статей для списка на сайте
     **/
     	public static function getArticleTitleList()
     	{
     		
				// Соединение с БД
    		$db = Db::getConnection();

    		// Запрос к БД
    		$result = $db -> query('SELECT id, title FROM articles WHERE status = "1"  ORDER BY is_date DESC');

    		// Получение и возврат результатов
    		$i = 0;
    		$articlesTitleList = array();
    		while($row = $result->fetch()) {
    			$articlesTitleList[$i]['id'] = $row['id'];
    			$articlesTitleList[$i]['title'] = $row['title'];
    			$i++;
    		}
    		return $articlesTitleList;
     	}

     	/**
     * Возвращает список заголовков статтей в категории
     **/
     	public function getArticlesListByCategory($categoryId)
     	{

				// Соединение с БД
    		$db = Db::getConnection();

    		// Текст запроса к БД
    		$sql = 'SELECT id, title FROM articles WHERE status = 1 AND category_id = :category_id ORDER BY is_date DESC';

    		// Используется подготовленный запрос
    		$result = $db->prepare($sql);
    		$result->bindParam(':category_id', $categoryId, PDO::PARAM_INT);

    		// Выполнение коменды
        $result->execute();

        // Получение и возврат результатов
        $i = 0;
        $articles = array();
        while($row = $result->fetch()) {
        	$articles[$i]['id'] = $row['id'];
        	$articles[$i]['title'] = $row['title'];
        	$i++;
        }
        return $articles;
     	}

     /**
     * Возвращает статтью с указанным id
     **/
     public static function getArticleById($id)
     {

     		// Соединение с БД
    		$db = Db::getConnection();

    		// Текст запроса к БД
    		$sql = 'SELECT * FROM articles WHERE id = :id';

    		// Используется подготовленный запрос
    		$result = $db->prepare($sql);
    		$result->bindParam(':id', $id, PDO::PARAM_INT);

    		// Указываем, что хотим получить данные в виде массива
    		$result->setFetchMode(PDO::FETCH_ASSOC);

    		// Выполнение коменды
    		$result->execute();

    		// Получение и возврат результатов
    		return $result->fetch();
     }


     /**
     * Возвращает массив статтей
     **/
     public static function getArticlesList()
     {

        // Соединение с БД
        $db = Db::getConnection();

        // Получение и возврат результатов
        $result = $db->query('SELECT id, title, is_date FROM articles ORDER BY id ASC');
        $articlesList = array();
        $i = 0;
        while($row = $result->fetch()){
          $articlesList[$i]['id'] = $row['id'];
          $articlesList[$i]['title'] = $row['title'];
          $articlesList[$i]['is_date'] = $row['is_date'];
          $i++;
        }     
        return $articlesList;
     }     


    /**
    *Удаляет статью с указанным id
    **/
    public static function deleteArticleById($id)
    {

      //Соединение с БД
      $db = Db::getConnection();

      //Текст запроса к БД
      $sql = 'DELETE FROM articles WHERE id = :id';

      // Получение и возврат результатов. Используется подготовленный запрос
      $result = $db->prepare($sql);
      $result->bindParam(':id', $id, PDO::PARAM_INT);
      return $result->execute();
    }


    /**
    *Удаляет статью с указанным id
    **/
    public static function createArticle($options)
    {

      //Соединение с БД
      $db = Db::getConnection();

      //Текст запроса к БД
      $sql = 'INSERT INTO articles '
                . '(title, category_id, article, status, is_date, is_recomended) '
                . 'VALUES '
                . '(:title, :category_id, :article, :status, :is_date, :is_recomended)';

      // Получение и возврат результатов. Используется подготовленный запрос
      $result = $db->prepare($sql);
      $result->bindParam(':title', $options['title'], PDO::PARAM_STR);
      $result->bindParam(':category_id', $options['category_id'], PDO::PARAM_INT);
      $result->bindParam(':article', $options['article'], PDO::PARAM_STR);
      $result->bindParam(':status', $options['status'], PDO::PARAM_INT);
      $result->bindParam(':is_date', $options['is_date'], PDO::PARAM_INT);
      $result->bindParam(':is_recomended', $options['is_recomended'], PDO::PARAM_INT);
      if($result->execute()){
        // Если запрос выполенен успешно, возвращаем id добавленной записи
        return $db->lastInsertId();
      }
      return 0;
    }


    /**
     * Action для страницы "Редактировать статью"
     */
    public static function updateArticle($id, $options)
    {

      //Соединение с БД
      $db = Db::getConnection();

      // Текст запроса к БД
        $sql = 'UPDATE articles
            SET 
                title = :title, 
                category_id = :category_id, 
                article = :article, 
                status = :status
                is_date = :is_date,
                is_recomended = :is_recomended
            WHERE id = :id';

      // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam('id', $options['id'], PDO::PARAM_INT);
        $result->bindParam(':title', $options['title'], PDO::PARAM_STR);
        $result->bindParam(':category_id', $options['category_id'], PDO::PARAM_INT);
        $result->bindParam(':article', $options['article'], PDO::PARAM_STR);
        $result->bindParam(':status', $options['status'], PDO::PARAM_INT);
        $result->bindParam(':is_date', $options['is_date'], PDO::PARAM_INT);
        $result->bindParam(':is_recomended', $options['is_recomended'], PDO::PARAM_INT);
        return $result->execute();
    }


     /**
     * Возвращает путь к изображению
     * @param integer $id
     * @return string <p>Путь к изображению</p>
     */
     public static function getImage($id)
     {

     		// Название изображения-пустышки
        $noImage = 'no-image.jpg';

        // Путь к папке с изображениями
        $path = '/uploads/images/';

        // Путь к изображению
        $pathToImage = $path . $id . '.jpg';

        if(file_exists($_SERVER['DOCUMENT_ROOT'] . $pathToImage)){
        	// Если изображение для статьи существует
          // Возвращаем путь изображения
        	return $pathToImage;
        }
        // Возвращаем путь изображения-пустышки
        return $path . $noImage;
     }
		}
