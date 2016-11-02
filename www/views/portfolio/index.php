<?php include ROOT . '/views/layouts/header.php'; ?>

<script type="text/javascript" src="/template/js/jquery.min.js"></script>
<script type="text/javascript" src="/template/js/piroBox.1_2.js"></script>
<script type="text/javascript">
$(document).ready(function() {
	$().piroBox({
			my_speed: 600, //animation speed
			bg_alpha: 0.5, //background opacity
			radius: 4, //caption rounded corner
			scrollImage : false, // true == image follows the page, false == image remains in the same open position
			pirobox_next : 'piro_next', // Nav buttons -> piro_next == inside piroBox , piro_next_out == outside piroBox
			pirobox_prev : 'piro_prev',// Nav buttons -> piro_prev == inside piroBox , piro_prev_out == outside piroBox
			close_all : '.piro_close',// add class .piro_overlay(with comma)if you want overlay click close piroBox
			slideShow : 'slideshow', // just delete slideshow between '' if you don't want it.
			slideSpeed : 4 //slideshow duration in seconds(3 to 6 Recommended)
	});
});
</script>

<div id="templatemo_content_wrapper">

	<div id="templatemo_content">
    
        <h2>Галлерея</h2>
        <div id="gallery">
            <ul>
            	<? foreach($projectsList as $project): ?>
                <li>
                	<div class="left">
                    	<a href="<? echo Portfolio::getImageForProject($project['id']); ?>" class="pirobox" title="Интернет-магазин электроники"><img src="<? echo Portfolio::getImageForProject($project['id']); ?>" alt="1" /></a>
                    </div>
                    <div class="right">
                        <h5><? echo $project['name']; ?></h5>
                        <p><? echo $project['description']; ?></p>
                        <div class="button"><a href="#">Посетить сайт</a></div>
                    </div>
                    <div class="cleaner"></div>
                </li>
              <? endforeach; ?>
            </ul>
        
        </div>
        <div class="cleaner"></div>
    
  	</div> <!-- end of content -->


<?php include ROOT . '/views/layouts/footer.php'; ?>