<?php 
if(session_status()==PHP_SESSION_NONE){
session_start();
}
?>
<?php
if(!$_SESSION["UP_ID"]){
  session_destroy();
}

$uid=$_SESSION["UP_ID"];
if(!$uid){
	header("location:login.php");

}
switch(isset( $_POST)){
 case isset($_POST["logout"]):
    session_destroy();
   
  break;
}

?>