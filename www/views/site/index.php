<?php include ROOT . '/views/layouts/header.php'; ?>


  <div id="templatemo_main_wrapper">
    <div id="templatemo_content_wrapper">
    	<div id="templatemo_content">
      <?php foreach($articlesList as $article): ?>
       	<div class="post_section">
          <span class="bottom"></span>        
        	<span class="comment"><a href="#"><? /**echo Articles::getCountComments();**/ ?></a></span>
            <h2><a href="/article/<?php echo $article['id'] ;?>"><?php echo $article['title'] ?></a></h2>
             	<strong>Дата:</strong> <?php echo $article['is_date'] ?>
                <a href="#"><img src="<? echo Articles::getImage($article['id']); ?>" alt="image 1" width="400px" /></a>
                  <p><?php echo $article['short_content'] ?></p>
                <div class="cleaner"></div>
              <div class="category"></div> <div class="button float_r"><a href="/article/<?php echo $article['id'] ;?>" class="more">Читать полностью</a></div>
			     <div class="cleaner"></div>
        </div>
        <div class="cleaner_h40"><!-- a spacing between 2 posts --></div>
      <?php endforeach; ?>
  </div>

<?php include ROOT . '/views/layouts/footer.php'; ?>
