<div class='box_two_title'>Login</div>
Please log in to view this page. <hr/>
<?php
if(isset($_POST['x_login']))
	account::logIn($_POST['x_username'],$_POST['x_password'],$_POST['x_redirect'],$_POST['x_remember']);
?>
<form action="?p=login" method="post">
<table>
       <tr>
           <td>Username:</td>
           <td><input type="text" name="x_username"></td>
       </tr>
       <tr>
           <td>Password:</td>
           <td><input type="password" name="x_password"></td>
       </tr>
       <tr>
           <td></td>
           <td><input type="checkbox" name="x_remember"> Remember Me</td>
       </tr>
       <tr>
           <td><input type="hidden" value="<?php echo $_GET['r']; ?>" name="x_redirect"></td>
           <td><input type="submit" value="Log In" name="x_login"></td>
       </tr>
</table>
</form>