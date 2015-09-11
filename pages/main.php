<?php


/*
 * @script author: zura kiziria. no framework
 * @murk up, design: oto kiziria
 * @script lang: php5
 * @create date: 2015.07
 * @for company: binuli @website: binuli.ge
 */

?>

<div class ="Mainpage">
    <div class="hello_world">
    <?php echo lText('Hello World'); ?>
    </div>
    <?php 
    if (isset($_SESSION['mail'])){
        ?>
    <div class='user_mail'><?php echo $_SESSION['mail']; ?></div>
        <?php
    }
    ?>
    
    <ul class="pgwSlider">
    <li><img src="http://static.pgwjs.com/img/pg/slider/paris.jpg" alt="Paris, France" data-description="Eiffel Tower and Champ de Mars"></li>
    <li><img src="http://static.pgwjs.com/img/pg/slider/new-york.jpg" alt="Montréal, QC, Canada" data-large-src="http://static.pgwjs.com/img/pg/slider/shanghai.jpg"></li>
    <li>
        <img src="http://static.pgwjs.com/img/pg/slider/new-york.jpg">
        <span>Shanghai, China</span>
    </li>
    <li>
        <a href="http://www.nyc.gov" target="_blank">
            <img src="http://static.pgwjs.com/img/pg/slider/new-york.jpg">
	    <span>New York, NY, USA</span>
        </a>
    </li>
</ul>
    <script>
$(document).ready(function() {
    $('.pgwSlider').pgwSlider({
        maxHeight : 500
    });

});
</script>
    <div class="clear"></div>
    
    
    
    
    <div class="mainleft">
        <div class="maininfo">
        <div class="infolist">
            <img src="http://binuli.ge/img/hban1.jpg" alt="img" class="img-circle" />
            
                                   <h2> Heading </h2>
<p>
Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. 
Vestibulum id ligula porta felis euismod semper. Fusce dapibus, 
tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.
</p>
            
            </div>
         <div class="infolist">  
                <img src="http://binuli.ge/img/hban1.jpg" alt="img" class="img-circle" />
                
                                       <h2> Heading </h2>
<p>
Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. 
Vestibulum id ligula porta felis euismod semper. Fusce dapibus, 
tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.
</p>
                
             </div>
                 <div class="infolist">  
                        <img src="http://binuli.ge/img/hban1.jpg" alt="img" class="img-circle" />
                        
                       <h2> Heading </h2>
<p>
Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. 
Vestibulum id ligula porta felis euismod semper. Fusce dapibus, 
tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.
</p>
             </div>
            <div class="clear"></div>
            </div>
        </div>
        <div class="mainright">
            <div class="fb-page" data-href="https://www.facebook.com/pages/%E1%83%91%E1%83%98%E1%83%9C%E1%83%A3%E1%83%9A%E1%83%98-Binuli/247948751969662?fref=ts" data-width="282" data-height="500px" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/pages/%E1%83%91%E1%83%98%E1%83%9C%E1%83%A3%E1%83%9A%E1%83%98-Binuli/247948751969662?fref=ts"><a href="https://www.facebook.com/pages/%E1%83%91%E1%83%98%E1%83%9C%E1%83%A3%E1%83%9A%E1%83%98-Binuli/247948751969662?fref=ts">ბინული / Binuli</a></blockquote></div></div>
            </div>
    
    <div class="clear"></div>
    
    
    
</div>

