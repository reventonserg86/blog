<?php
	
	/**
 * Класс Category - модель для работы с категориями товаров
 */

	class Category
	{

    /**
     * Возвращает массив категорий для списка на сайте
     * @return array <p>Массив с категориями</p>
     */

    public static function getCategoriesList()
    {	

    	 // Соединение с БД
    	$db = Db::getConnection();

    	// Запрос к БД
    	$result = $db->query('SELECT id, name FROM category WHERE status = "1" ORDER BY sort_order, name ASC');

    	// Получение и возврат результатов
    	$i = 0;
    	$categoryList = array();
    	while ($row = $result->fetch()){
    		$categoryList[$i]['id'] = $row['id'];
    		$categoryList[$i]['name'] = $row['name'];
    		$i++;
    	}
    	return $categoryList;
    }


    /**
     * Возвращает категорию с указанным id
     * @param integer $id <p>id категории</p>
     * @return array <p>Массив с информацией о категории</p>
     */
    public static function getCategoryById($id)
    {

      // Соединение с БД
      $db = Db::getConnection();

      // Запрос к БД
      $sql = 'SELECT name FROM category WHERE id=:id';

      // Используется подготовленный запрос
      $result = $db->prepare($sql);
      $result->bindParam(':id', $id, PDO::PARAM_INT);

      // Указываем, что хотим получить данные в виде массива
      $result->setFetchMode(PDO::FETCH_ASSOC);

      // Выполняем запрос
      $result->execute();

      // Возвращаем данные
      return $result->fetch();
    }


    /**
     * Возвращает массив категорий для списка в админпанели <br/>
     * (при этом в результат попадают и включенные и выключенные категории)
     * @return array <p>Массив категорий</p>
     */

    public static function getCategoriesListAdmin()
    {

      //Соединение с БД
      $db = Db::getConnection();

      //Запрос к БД
      $result = $db->query('SELECT id, name, sort_order, status FROM category ORDER BY sort_order ASC');

      // Получение и возврат результатов
      $i = 0;
      $categoriesList = array();
      while($row = $result->fetch()){
        $categoriesList[$i]['id'] = $row['id'];
        $categoriesList[$i]['name'] = $row['name'];
        $categoriesList[$i]['sort_order'] = $row['sort_order'];
        $categoriesList[$i]['status'] = $row['status'];
        $i++;
      }
      return $categoriesList;
    }

    /**
     * Добавляет новую категорию
     */
    public static function createCategory($name, $sort_order, $status)
    {

      //Соединение с БД
      $db = DB::getConnection();

      //Текст запроса к БД
      $sql = 'INSERT INTO category (name, sort_order, status) VALUES (:name, :sort_order, :status)';

      // Получение и возврат результатов. Используется подготовленный запрос
      $result = $db->prepare($sql);
      $result->bindParam(':name', $name, PDO::PARAM_STR);
      $result->bindParam(':sort_order', $sort_order, PDO::PARAM_INT);
      $result->bindParam(':status', $status, PDO::PARAM_INT);
      return $result->execute();
    }

     
     /**
     * Редактирует категорию с заданным id
     **/ 
    public static function updateCategoryById($id, $name, $sort_order, $status)
    {

      //Соединение с БД
      $db = DB::getConnection();

      //Текст запроса к БД
      $sql = 'UPDATE category SET name=:name, sort_order=:sort_order, status=:status WHERE id=:id';

      // Получение и возврат результатов. Используется подготовленный запрос
      $result = $db->prepare($sql);
      $result->bindParam(':id', $id, PDO::PARAM_INT);
      $result->bindParam(':name', $name, PDO::PARAM_STR);
      $result->bindParam(':sort_order', $sort_order, PDO::PARAM_INT);
      $result->bindParam(':status', $status, PDO::PARAM_INT);
      return $result->execute();
    }


     /**
     * Удаляет категорию с заданным id
     **/
    public static function deleteCategoryById($id)
    {

      //Соединение с БД
      $db = DB::getConnection();

      //Текст запроса к БД
      $sql = 'DELETE FROM category WHERE id = :id';

      // Получение и возврат результатов. Используется подготовленный запрос
      $result = $db->prepare($sql);
      $result->bindParam(':id', $id, PDO::PARAM_INT);
      return $result->execute();
    }

    /**
     * Возвращает текстое пояснение статуса для категории :<br/>
     * <i>0 - Скрыта, 1 - Отображается</i>
     * @param integer $status <p>Статус</p>
     * @return string <p>Текстовое пояснение</p>
     */
    public static function getStatusText($status)
    {

      switch ($status) {
        case '1':
          return 'Отображается';
          break;
        
        case '0':
          return 'Скрыта';
          break;
      }
    }
	}
