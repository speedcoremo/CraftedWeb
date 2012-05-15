<?php account::isNotLoggedIn(); ?>
<div class='box_two_title'>Character Teleport</div>
Choose the character & desired location you wish to teleport.
<?php 

$service = "teleport";

if($GLOBALS['service'][$service]['price']==0) 
      echo '<span class="attention">Teleportation is free of charge.</span>';
else
{ ?>
<span class="attention">Teleportation costs 
<?php 
echo $GLOBALS['service'][$service]['price'].' '.website::convertCurrency($GLOBALS['service'][$service]['currency']); ?></span>
<?php 
if($GLOBALS['service'][$service]['currency']=="vp")
	echo "<span class='currency'>Vote Points: ".account::loadVP($_SESSION['cw_user'])."</span>";
elseif($GLOBALS['service'][$service]['currency']=="dp")
	echo "<span class='currency'>".$GLOBALS['donation']['coins_name'].": ".account::loadDP($_SESSION['cw_user'])."</span>";
} ?>
<hr/>
<h3 id="choosechar">Choose Character</h3> 
<?php
connect::selectDB('webdb');
$result = mysql_query('SELECT char_db,name FROM realms ORDER BY id ASC');
while($row = mysql_fetch_assoc($result)) 
{
         $acct_id = account::getAccountID($_SESSION['cw_user']);
		 $realm = $row['name'];
		 $char_db = $row['char_db'];
		          	
		connect::selectDB($char_db);
		$result = mysql_query('SELECT name,guid,gender,class,race,level,online FROM characters WHERE account='.$acct_id);
		while($row = mysql_fetch_assoc($result)) {
	?>
    <div class='charBox' style="cursor:pointer;" id="<?php echo $row['guid'].'*'.$char_db; ?>"<?php if ($row['online'] != 1) { ?> 
    onclick="selectChar('<?php echo $row['guid'].'*'.$char_db; ?>',this)"<?php } ?>>
    <table>
	        <tr>
                <td>
                <?php if(!file_exists('styles/global/images/portraits/'.$row['gender'].'-'.$row['race'].'-'.$row['class'].'.gif'))
				       echo '<img src="styles/'.$GLOBALS['template']['path'].'/images/unknown.png" />';
					   else 
					   { ?>
                <img src="styles/global/images/portraits/
					<?php echo $row['gender'].'-'.$row['race'].'-'.$row['class']; ?>.gif" border="none">
                    <?php } ?>
                </td>
                
                <td><h3><?php echo $row['name']; ?></h3>
                    Level <?php echo $row['level']." ".character::getRace($row['race'])." ".character::getGender($row['gender']).
                    " ".character::getClass($row['class']); ?><br/>
                    Realm: <?php echo $realm; ?>
                    <?php if($row['online']==1)
                   echo "<br/><span class='red_text'>Please log out before trying to teleport.</span>";?>
                </td>
            </tr>                         
	</table>
</div>  
	<?php } ?>
<br/>&nbsp;
    <span id="teleport_to" style="display:none;">  
     
    </span>               
<?php
}
?>