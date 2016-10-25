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
		<li class="active first"><a href=" " title="">Главная</a></li>
		<li><a href="/blog/" title="">Блог</a></li>
		<li><a href="#" title="">Портфолио</a></li>
		<li><a href="#" title="">Контакты</a></li>
	</ul>
</div>
<!-- end #menu -->
<div id="page">
	<div id="content">
		<div id="welcome" class="post">
			<div class="title">
				<?php foreach($arcRecomendTitle as $atitle): ?>
						<a href="<?php echo $atitle['id']; ?>">
							<?php echo $atitle['title'] ?>
						</a><br/>
					<?php endforeach; ?>
			</div>
		</div>
	</div>
	<!-- end #content -->
	<div id="sidebar">
		<div id="login" class="boxed">
			<div class="title">
				<h2>Client Account</h2>
			</div>
			<div class="content">
				<form id="form1" method="post" action="#">
					<fieldset>
					<legend>Sign-In</legend>
					<label for="inputtext1">Client ID:</label>
					<input id="inputtext1" type="text" name="inputtext1" value="" />
					<label for="inputtext2">Password:</label>
					<input id="inputtext2" type="password" name="inputtext2" value="" />
					<input id="inputsubmit1" type="submit" name="inputsubmit1" value="Sign In" />
					<p><a href="#">Forgot your password?</a></p>
					</fieldset>
				</form>
			</div>
		</div>
		<!-- end #login -->
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
