
<?php
$conn=mysqli_connect("localhost","jhxubmdbat","g5QMpZyjkJ","jhxubmdbat");



switch(isset($_POST)){
    case isset($_POST['fileqry']):
        $sqlqry=$_POST['fileqry'];
        $result=mysqli_query($conn,$sqlqry);
      if($result){
        echo true;
      }
      break;
     

    
}

if($conn->connect_error){
    die("connection error");
}




if(isset( $_POST["regsub"])){    
    $qry="insert into register(id,username,email,password) value('".$_POST["id"]."','".$_POST["username"]."' ,'".$_POST["email"]."','".$_POST["password"] ."')";
if(mysqli_query($conn,$qry)){
        echo "sucess";
    }

}







$conn->close();

?>
