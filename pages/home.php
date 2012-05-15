<?php
     website::getNews();
	 
	 if ($GLOBALS['enableSlideShow']==false && $GLOBALS['news']['enable']==false)  
	 {
		 buildError("<b>Configuration file error.</b>Neither the slideshow or the news are displayed, the homepage will be empty.");
		 echo "Seems like the homepage was empty!";
	 }
?>
