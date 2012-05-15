<p id="steps">Introduction &raquo; Step 1 &raquo; <b>Step 2</b> &raquo; Step 3 &raquo; Step 4 &raquo; Step 5 &raquo; Finished<p>
<hr/>
<p>Now we need to test if we can write the configuration file & read the SQL file. Before we test this, make sure that:
	<ul>
    	<li>The CHMOD is set to 777 on both <i>'includes/configuration.php'</i> AND <i>'install/sql/CraftedWeb_Base.sql'</i> (You <b>must</b> change this back to 644 after the installation proccess has finished!)</li>
        <li>The file exists (We are not creating a new file, we're just writing onto a blank one. If the file (includes/configuration.php) does not exist, create it. You can use notepad or any other similar software, just remember to save it as <i>configuration.php</i>, NOT .TXT!</li>
    </ul>
</p>
<p>
	<br/>
	<input type="submit" value="Test if file is writeable" onclick="step2()">
</p>