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
                    <li class="active">Удалить статью</li>
                </ol>
            </div>


            <h4>Удалить статью #<?php echo $id; ?></h4>


            <p>Вы действительно хотите удалить эту статью?</p>

            <form method="post">
                <input type="submit" name="submit" value="Удалить" />
            </form>

        </div>
    </div>
</body>
</html>