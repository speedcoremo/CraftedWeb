<p id="steps">Introduction &raquo; Step 1 &raquo; Step 2 &raquo; Step 3 &raquo; <b>Step 4</b> &raquo; Step 5 &raquo; Finished<p>
<hr/>
<p>
	After scanning your updates folder, we found the following database updates: 
    <ul>
    	<?php
			$files = scandir('sql/updates/');
			foreach($files as $value) {
				if(substr($value,-3,3)=='sql')
				{
					echo '<a href="#">'.$value.'</a><br/>';	
					$found = true;
				}
			}
		?>
    </ul>
    <?php
	if(!isset($found))
				echo '<code>No updates was found in your /updates folder. <a href="?st=5">Click here to continue</a></code>';
	?>
    <i>* Tip: Clock on them to get additional information about them.</i>
</p>
<p>
Click the button below to apply all of these updates. If you do not wish to have these updates, just click <a href="?st=5">here</a>. You can install them anytime you want manually by exporting them into your database with any database software of your choise. (HeidiSQL, SQLyog, etc)
</p>
<p>
	<br/>
	<input type="submit" value="Apply all database updates" onclick="step4()">
</p>