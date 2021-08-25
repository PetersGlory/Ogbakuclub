<?php
require_once './backend/config.php';
$message = '';

if(!empty($_GET["email"])) {
	$query = "UPDATE users set status = 'member' WHERE mail='" . $_GET["email"]. "'";
	$result = $conn->query($query);
		if(!empty($result)) {
			$message = "Your account is activated.";
            header("location:./index.html");
		} else {
			$message = "Problem in account activation.";
		}
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
  
  <html xmlns="http://www.w3.org/1999/xhtml">
  <head>
      <title>Email Confirmation | Ogbaku club</title>
      <!-- <link href="css/style.css" type="text/css" rel="stylesheet" /> -->
<style>
    #wrap .statusmsg{
    font-size: 12px; /* Set message font size  */
    padding: 3px; /* Some padding to make some more space for our text  */
    background: #EDEDED; /* Add a background color to our status message   */
    border: 1px solid #DFDFDF; /* Add a border arround our status message   */
}
</style>
  </head>
  <body>
      <!-- start header div --> 
      <div id="header">
          <h3>Email Confirmation...</h3>
      </div>
      <!-- end header div -->   
        
      <!-- start wrap div -->   
      <div id="wrap">
          <!-- start PHP code -->
          <?php
            
              echo $message;
                
          ?>
          <!-- stop PHP Code -->
    
            
      </div>
      <!-- end wrap div --> 
  </body>
  </html>