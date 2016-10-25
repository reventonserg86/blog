<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Eclipse by Free Css Templates</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="/template/css/default.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="logo">
	<h1><a href="#">Eclipse</a></h1>
	<h2><a href="http://www.freecsstemplates.org/">By Free CSS Templates</a></h2>
</div>
<div id="menu">
	<ul>
		<li class="active first"><a href="/ " title="">Главная</a></li>
		<li><a href="/blog/" title="">Блог</a></li>
		<li><a href="/port/" title="">Портфолио</a></li>
		<li><a href="/cont/" title="">Контакты</a></li>	</ul>
</div>
<!-- end #menu -->
<div id="page">
	<div id="content">
		<div id="welcome" class="post">
			<div class="title">
				<h2><?php echo $article['title']; ?></h2>
			</div>
			<h3 class="date"><?php echo $article['is_date']; ?></h3>
			<div class="meta">
				<p>Posted by Jane Anderson under <a href="#">Uncategorized</a>, <a href="#">Daily Journal</a><br />
					<a href="#">Trackback URI</a> | <a href="#">No Comments</a> | <a href="#">Permalink</a></p>
			</div>
			<div class="story"> <img src="<?php echo Articles::getImage($article['id']); ?>" alt="" width="112" height="112" class="left" />
				<p><? echo $article['article']; ?></p>
			</div>
		</div>
	</div>
	<!-- end #content -->
	<div id="sidebar">
		<div class="boxed">
			<div class="title">
				<h2>Категории</h2>
			</div>
			<div class="content">
				<ul class="list1">
					<?php foreach($categories as $categoryItem): ?>
						<li><a href="/category/<?php echo $categoryItem['id']; ?>">
							<?php echo $categoryItem['name']; ?>
						</a>
					<?php endforeach; ?>
				</ul>
			</div>
		</div>
	</div>
	<!-- end #sidebar -->
	<div id="extra" style="clear: both;">&nbsp;</div>
</div>
<!-- end #page -->
<div id="footer">
	<p id="legal">Copyright &copy; 2007 Eclipse. All Rights Reserved. Designed by <a href="http://www.freecsstemplates.org/">Free CSS Templates</a>.</p>
	<p id="links"><a href="#">Privacy Policy</a> | <a href="#">Terms of Use</a></p>
</div>
</body>
</html>
