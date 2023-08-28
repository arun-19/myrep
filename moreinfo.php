<!DOCTYPE HTML>
<html>
<head>
<script>



</script>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
<div class="container text-center">

<?php 

if(isset( $_GET)){
    
    
     
     require_once "mysqlconfig.php";

     $sqlqry="select  pf.mf, aj.salary, pf.profile,rg.username,aj.days,aj.address,aj.alternativemobile,pf.mobile from profile pf,register rg,applyjobs aj where pf.id=".$_GET['userid']." && rg.id=".$_GET['userid']." && aj.postid=".$_GET["postid"];
     $result=$conn->query($sqlqry);

     $numberofrow=mysqli_num_rows($result);
     if($numberofrow>0){
     while($row=$result->fetch_assoc()){
    ?>
    
<div>
    <h3>Job Information</h3>
    <p>Total Working days: <?php echo $row["days"] ?></p>

     <p>Address: <?php echo $row["address"] ?></p>

     <p>alternativemobile: <?php echo $row["alternativemobile"] ?></p>
     <p>salary: <?php echo number_format( $row["salary"])."Rs" ?></p>
     
</div>

<h4>Requester Profile<h4>
   <div>
    <img class="rounded-circle" src="<?php echo $row["profile"] ?>  " width="80" height="80"  alt="profile logo"/>
   
</div>
<p>name:<?php echo $row['username'] ?></p>   

<p>mobile:<?php echo $row['mobile'] ?></p>
<p>Gender: <?php if( $row['mf']=='m'){echo "male";}else{echo "female";} ?> </p>


    <?php 
          
}
}

}
?>
    
</div>

</body>
</html>