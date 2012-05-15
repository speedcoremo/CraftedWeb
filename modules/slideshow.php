<?php 
if ($GLOBALS['enableSlideShow']==TRUE && !isset($_COOKIE['hideslider']) && $_GET['p']=='home') { ?>
<div class="main_view">
    <div class="window">
        <div class="image_reel">
        		<?php website::getSlideShowImages(); ?>
        </div>
    </div>
    <div class="paging">
        <?php website::getSlideShowImageNumbers(); ?>
    </div>
</div>
<?php } ?>