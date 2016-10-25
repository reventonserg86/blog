<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	   <div class="container">
        <div class="row">

            <br/>

            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="/admin">Админпанель</a></li>
                    <li><a href="/admin/article">Управление статьями</a></li>
                    <li class="active">Редактировать стфтью</li>
                </ol>
            </div>


            <h4>Редактировать статью #<?php echo $id; ?></h4>

            <br/>

            <div class="col-lg-4">
                <div class="login-form">
                    <form action="#" method="post" enctype="multipart/form-data">

                        <p>Заголовок статьи</p>
                        <input type="text" name="title" placeholder="" value="<?php echo $article['title']; ?>">

                        <p>Cтатья</p>
                        <textarea name="article"><?php echo $article['article']; ?></textarea>

                        <p>Категория</p>
                        <select name="category_id">
                            <?php if (is_array($categoriesList)): ?>
                                <?php foreach ($categoriesList as $category): ?>
                                    <option value="<?php echo $category['id']; ?>" 
                                        <?php if ($article['category_id'] == $category['id']) echo ' selected="selected"'; ?>>
                                        <?php echo $category['name']; ?>
                                    </option>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </select>
                        
                        <br/><br/>

                        <p>Изображение товара</p>
                        <img src="<?php echo Articles::getImage($article['id']); ?>" width="200" alt="" /><br/>
                        <input type="file" name="image" placeholder="" value="">

                        <p>Дата</p>
                        <input type="text" name="is_date" placeholder="" value="<?php echo $article['is_date']; ?>">

                        <p>Рекомендуемые</p>
                        <select name="is_recomended">
                            <option value="1" <?php if ($article['is_recomended'] == 1) echo ' selected="selected"'; ?>>Да</option>
                            <option value="0" <?php if ($article['is_recomended'] == 0) echo ' selected="selected"'; ?>>Нет</option>
                        </select>
                        
                        <br/><br/>

                        <p>Статус</p>
                        <select name="status">
                            <option value="1" <?php if ($article['status'] == 1) echo ' selected="selected"'; ?>>Отображается</option>
                            <option value="0" <?php if ($article['status'] == 0) echo ' selected="selected"'; ?>>Скрыт</option>
                        </select>
                        
                        <br/><br/>
                        
                        <input type="submit" name="submit" class="btn btn-default" value="Сохранить">
                        
                        <br/><br/>
                        
                    </form>
                </div>
            </div>

        </div>
    </div>
</body>
</html>