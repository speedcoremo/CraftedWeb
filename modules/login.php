<?php if (!isset($_SESSION['cw_user'])) { 
 	  if (isset($_POST['login'])) 
	  	account::logIn($_POST['login_username'],$_POST['login_password'],$_SERVER['REQUEST_URI'],$_POST['login_remember']);
?>
     <div class="box_one">
	 <div class="box_one_title">Account Management</div> 
     <form action="<?php echo $_SERVER['REQUEST_URI']; ?>" method="post">
     <fieldset style="border: none; margin: 0; padding: 0;">
         <input type="text" placeholder="Username" name="login_username" class="login_input" /><br/>
         <input type="password" placeholder="Password..." name="login_password" class="login_input" style="margin-top: -1px;" /><br/>
         <input type="submit" value="Log In" name="login" style="margin-top: 4px;" /> 
         <input type="checkbox" name="login_remember" checked="checked"/> Remember me
     </fieldset>    
     </form> <br/>
     <table width="100%">
            <tr>
                <td><a href="?p=register">Create an account</a></td>
                <td align="right"><a href="?p=forgotpw">Forgot your Password?</a></td>
            </tr>
     </table>
     </div>
<?php } ?>
