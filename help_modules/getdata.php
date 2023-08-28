<?php 
$conn=mysqli_connect("localhost","jhxubmdbat","g5QMpZyjkJ","jhxubmdbat");
switch(isset($_POST)){
    case isset($_POST['qry']):
        $sqlqry=$_POST['qry'];
        $result=$conn->query($sqlqry);
       
        while($row=$result->fetch_assoc()){


          $user=$row["username"];
          $pass=$row["password"];
          $arry_data[]=array( 
            "username"=>$user,"password"=> base64_encode( $pass)
          );

          echo json_encode($arry_data);

        
        }
        
    break;

     

}

?>
