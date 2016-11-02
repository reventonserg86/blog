   	<div id="templatemo_sidebar_one">
    
    	<h4>Категории</h4>
        <ul class="templatemo_list">
        	<?php foreach($categories as $categoryItem): ?>
            <li><a href="/category/<?php echo $categoryItem['id']; ?>">
              <?php echo $categoryItem['name']; ?>
            </a>
          <?php endforeach; ?>
        </ul>
        
        <div class="cleaner_h40"></div>
        
        <h4>Архив</h4>
        <ul class="templatemo_list">
        	<li><a href="#">November 2048</a></li>
            <li><a href="#">October 2048</a></li>
            <li><a href="#">September 2048</a></li>
            <li><a href="#">August 2048</a></li>
            <li><a href="#">July 2048</a></li>
            <li><a href="#">June 2048</a></li>
            <li><a href="#">May 2048</a></li>
            <li><a href="#">April 2048</a></li>
            <li><a href="#">March 2048</a></li>
        </ul>
        
        <div class="cleaner_h40"></div>
        
        <h4>Недавние статьи</h4>
		<div class="recent_comment_box">
      <? foreach($recomendArticles as $item): ?>
        <a href="/article/<?php echo $article['id'] ;?>"><? echo $item['title']; ?></a>
        <p><? echo $item['short_content']; ?></p>
      <? endforeach; ?>
    </div>
   </div>
    
    <div id="templatemo_sidebar_two">
    	
        <div class="banner_250x200">
    		<a href="" target="_parent"><img src="/template/images/250.jpg" alt="templates" width="250px" /></a>
        </div>
        
        <div class="banner_125x125">
        	<a href="" target="_parent"><img src="/template/images/123.jpg" alt="web 1" width="125px" height="125px" /></a>
            <a href="" target="_parent"><img src="/template/images/234.jpg" alt="web 2" width="125px" height="125px"/></a>
    		<a href="" target="_parent"><img src="/template/images/456.jpg" alt="templates 2" width="125px" height="125px"/></a>
    		<a href="" target="_parent"><img src="/template/images/567.jpg" alt="templates 1" width="125px" height="125px"/></a>
        </div>
       
        <div class="cleaner_h40"></div>
        
        <div class="sidebar_two_box">
        
            <h4>Полезные ресурсы</h4>
            <ul class="templatemo_list">
                <li><a href="http://secure.php.net" target="_parent">Документация PHP</a></li>
                <li><a href="http://habrahabr.ru" target="_parent">Хабрахабр</a></li>
                <li><a href="http://git-scm.com" target="_parent">Git</a></li>
                <li><a href="http://htmlbook.ru/" target="_parent">Рукаводство по HTML</a></li>
                <li><a href="https://www.codecademy.com" target="_parent">Академия программирования</a></li>
                <li><a href="https://webref.ru">Обучение по front-end</a></li>
                <li><a href="http://jquery-docs.ru/">Русская документация jQuery</a></li>
                <li><a href="http://www.freelance.com/">Сайт для фрилансеров</a></li>
            </ul>
    	</div>
        
    </div>

	<div class="cleaner"></div>
</div> <!-- end of content wrapper -->
<div id="templatemo_footer_wrapper">
	<div id="templatemo_footer">
    
		Copyright © 2048 <a href="#">Your Company Name</a> | 
        <a href="http://bayguzin.ru/" target="_parent">Website Templates</a> by <a href="http://bayguzin.ru/" target="_parent">Free CSS Templates</a>
        
    </div> <!-- end of templatemo_copyright -->
</div> <!-- end of copyright wrapper -->

</body>
</html>