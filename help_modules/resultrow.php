<?php 
session_start();
header('Access-Control-Allow-Origin: *');


$conn=mysqli_connect("localhost","jhxubmdbat","g5QMpZyjkJ","jhxubmdbat");

switch(isset($_POST)){
    case isset($_POST['qry']):
        $sqlqry=$_POST['qry'];
        $result=mysqli_query($conn,$sqlqry);
        $rows="";
        if(isset($_POST["nonenumrow"])){
          if(!$conn->$sqlqry) {
              echo $conn->$sqlqry;
              
          } 
            
        echo $result;
        }else{
        $rows=mysqli_num_rows($result);
        }
         if(isset($_POST["login_id"])){
            while($row=$result->fetch_assoc()){
               $_SESSION["UP_ID"]= $row['id'];
               setcookie("Temp_ID",$row['id'], time() + (86400 * 30), "/");
                echo $row['id'];
            }
           

         }else{
            echo $rows;
         }
    break;

    case isset($_POST['regsub']):
        $sqlqry="select * from register where username='".$_POST["username"]."' and password='".$_POST["password"]."'";
        $result=mysqli_query($conn,$sqlqry);
        $rows=mysqli_num_rows($result);
        echo $rows;
    break;
    case   isset($_POST['job']): 
      
        
        $qry='insert into applyjobs(id,title,jobname,members,days,fromdate,todate,salary,address,mobile,alternativemobile,info,postid) '.'value('.$_POST['id'].',"'.$_POST['type'].'","'.$_POST["job"].'","'.$_POST["members"].'","'.$_POST["days"].'","'.$_POST["fromdate"].'","'.$_POST["todate"].'","'.$_POST["salary"].'","'.$_POST["address"].'","'.$_POST["mobile"].'","'.$_POST["alternativemobile"].'","'.$_POST["info"].'",'.$_POST["postid"].')';
              
               if(mysqli_query($conn,$qry)){
              echo "success";
                 }    
       
       
   break;


}


?>
