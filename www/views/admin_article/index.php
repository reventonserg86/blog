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
                    <li class="active">Управление статьями</li>
                </ol>
            </div>

            <a href="/admin/article/create" class="btn btn-default back"><i class="fa fa-plus"></i> Добавить статью</a>
            
            <h4>Список статтей</h4>

            <br/>

            <table class="table-bordered table-striped table">
                <tr>
                    <th>ID статьи</th>
                    <th>Заголовок</th>
                    <th>Дата публикации</th>
                    <th></th>
                    <th></th>
                </tr>
                <?php foreach ($articlesList as $article): ?>
                    <tr>
                        <td><?php echo $article['id']; ?></td>
                        <td><?php echo $article['title']; ?></td>
                        <td><?php echo $article['is_date']; ?></td> 
                        <td><a href="/admin/article/update/<?php echo $article['id']; ?>" title="Редактировать"><i class="fa fa-pencil-square-o"></i>Редактировать</a></td>
                        <td><a href="/admin/article/delete/<?php echo $article['id']; ?>" title="Удалить"><i class="fa fa-times"></i>Удалить</a></td>
                    </tr>
                <?php endforeach; ?>
            </table>

        </div>
    </div>
</body>
</html>