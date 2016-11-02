<?php include ROOT . '/views/layouts/header.php'; ?>

<div id="templatemo_content_wrapper">

	<div id="templatemo_content">
    
    	<div class="post_section"><span class="bottom"></span>
        
          <h2><? echo $article['title'] ?></h2>

            <strong>Дата:</strong> <?php echo $article['is_date'] ?>
            
          <img src="<? echo Articles::getImage($article['id']); ?>" alt="image 1" width="400px" />
            
             <p><? echo $article['article'] ?></p>
             <div class="cleaner"></div>
            <div class="category">Категория: <a href="/category/<? echo $article['category_id'] ?>">
	            <?php 
	            	$categor = Category::getCategoryById($article['category_id']);
	            	$categName = $categor['name'];
	            	echo $categName;
	             ?>
            </a></div>
			<div class="cleaner"></div>
            
            <div class="comment_tab">
            	<? /*echo $countComments;*/ ?> Комментариев
            </div>
            
            <div id="comment_section">
                <ol class="comments first_level">
                        
                        <li>
                            <div class="comment_box commentbox1">
                                    
                                <div class="gravatar">
                                    <img src="/template/images/avator1.png" alt="author 1" />
                                </div>
                                
                                <div class="comment_text">
                                    <div class="comment_author">Гость<span class="date">24 August 2048</span><span class="time">12:12 pm</span></div>
                                    <p>Phasellus dictum ornare nulla ac laoreet. Phasellus mattis tellus eu risusLorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus dictum ornare nulla ac laoreet. Phasellus mattis tellus eu risus</p>
                                </div>
                                <div class="cleaner"></div>
                            </div>                          
                        </li>                        
              		</ol>
         		 </div>
                
                <div id="comment_form">
                    <h3>Оставить комментарий</h3>
                    
                    <form action="#" method="post">
                        <div class="form_row">
                            <label>Имя</label><br />
                            <input type="text" name="name" value="Гость" />
                        </div>
                        <div class="form_row">
                            <label>Email  ( не обязательно)</label><br />
                            <input type="text" name="name" />
                        </div>
                        <div class="form_row">
                            <label>Ваш комментарий</label><br />
                            <textarea  name="comment" rows="" cols=""></textarea>
                        </div>

                        <input type="submit" name="Submit" value="Отправить" class="submit_btn" />
                    </form>
                    
                </div>

        </div>
    
  	</div> <!-- end of content -->

<?php include ROOT . '/views/layouts/footer.php'; ?>