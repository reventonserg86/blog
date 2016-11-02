<?php
	
	/**
  * Класс Portfolio - модель для работы с проектами
  */
	class Portfolio
	{

		/**
    * Возвращает массив проектов
    **/
		public static function getProjectList()
		{

      // Соединение с БД
      $db = Db::getConnection();

      $sql = 'SELECT * FROM project ORDER BY id DESC';

      $result = $db->query($sql);
     
      // Получение и возврат результато
      $i = 0;
      $projectList = array();
      while($row = $result->fetch()){
          $projectList[$i]['id'] = $row['id'];
          $projectList[$i]['name'] = $row['name'];
          $projectList[$i]['description'] = $row['description'];
          $i++;
      }
      return $projectList;
		}

		 /**
     * Возвращает путь к изображению
     * @param integer $id
     * @return string <p>Путь к изображению</p>
     */
     public static function getImageForProject($id)
     {

     		// Название изображения-пустышки
        $noImage = 'no-image.jpg';

        // Путь к папке с изображениями
        $path = '/uploads/projects/';

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