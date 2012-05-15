<p id="steps">Introduction &raquo; Step 1 &raquo; Step 2 &raquo; <b>Step 3</b> &raquo; Step 4 &raquo; Step 5 &raquo; Finished<p>
<hr/>
<p>
	Now is the time to actually create something. The script will now: 
    <ul>
    	<li>Create the Website Database if it does not exist</li>
        <li>Create all tables in the Website Database</li>
        <li>Insert default data into the Website Database</li>
        <li>Write the configuration file</li>
    </ul>
    
    To prevent any database errors, please make sure that the MySQL user your specified has access to the following commands:
    <ul>
    	<li>INSERT</li>
        <li>INSERT IGNORE</li>
        <li>UPDATE</li>
        <li>ALTER</li>
        <li>DELETE</li>
        <li>DROP</li>
        <li>CREATE</li>
    </ul>
    You may remove some of these after the installation proccess has finished as they are not needed when running the CMS.
</p>
<p>
	<br/>
	<input type="submit" value="Start the proccess!" onclick="step3()">
</p>