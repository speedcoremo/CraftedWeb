<?php

require('../ext_scripts_class_loader.php');

if(isset($_POST['element']) &&$_POST['element'] =='vote') 
{
   echo 'Vote Points: '.account::loadVP($_POST['account']);
}
#################
elseif(isset($_POST['element']) && $_POST['element']=='donate') 
{
   echo $GLOBALS['donation']['coins_name'].': '.account::loadDP($_POST['account']);
}
#################
if(isset($_POST['action']) && $_POST['action']=='removeComment') 
{
   connect::selectDB('webdb');
   mysql_query("DELETE FROM news_comments WHERE id='".(int)$_POST['id']."'");
}
#################
if(isset($_POST['getTos'])) 
{
   include("../../documents/termsofservice.php");
   echo $tos_message;
}
#################
if(isset($_POST['getRefundPolicy'])) 
{
   include("../../documents/refundpolicy.php");
   echo $rp_message;
}
#################
if(isset($_POST['serverStatus'])) 
{
   echo '<div class="box_one_title">Server status</div>';
		 $num = 0;
		 foreach ($GLOBALS['realms'] as $k => $v) {
			 if ($num != 0) { echo "<hr/>"; }
			   server::serverStatus($k);
			   $num++;
		   }
		   if ($num == 0) {
			 buildError("<b>No realms found: </b> Please setup your database and add your realm(s)!",NULL);  
			 echo "No realms found.";
		   }
		unset($num);
?>
<hr/>
<span id="realmlist">set realmlist <?php echo $GLOBALS['connection']['realmlist']; ?></span>
</div>
<?php   
}
#################
if(isset($_POST['convertDonationList']))
{
	for ($row = 0; $row < count($GLOBALS['donationList']); $row++)
		{
				$value = (int)$_POST['convertDonationList'];
				if($value == $GLOBALS['donationList'][$row][1])
				{
					echo $GLOBALS['donationList'][$row][2];
					exit();
				}
		}
}

?>