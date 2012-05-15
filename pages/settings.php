<?php account::isNotLoggedIn(); 
if (isset($_POST['save'])) {
	account::changeEmail($_POST['email'],$_POST['current_pass']);
}
?>
<div class='box_two_title'>Change Email</div>
<form action="?p=settings" method="post">
<table width="70%">
       <tr>
           <td>Email adress:</td> 
           <td><input type="text" name="email" value="<?php echo account::getEmail($_SESSION['cw_user']); ?>"></td>
       </tr>
       <tr>
           <td></td> 
           <td><hr/></td>
       </tr>
       <tr>
           <td>Enter your current password:</td> 
           <td><input type="password" name="current_pass"></td>
       </tr>
       
       <tr>
           <td></td> 
           <td><input type="submit" value="Save" name="save"></td>
       </tr>
</table>
</form>