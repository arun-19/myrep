<?php 

require_once "commonall.php";?>
<html>
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script>
function deletefun(e){
   
       
        swal({
    title: "Delete!",text:"are you sure ?",
                            type: "error",
                            icon:"data:image/jpeg;base64,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",
                            confirmButtonClass: "btn-danger",
                            confirmButtonText: "Yes!",
                            showCancelButton: true,allowOutsideClick: "false" ,
                    buttons: {
                    cancel: true,
                    confirm: {
                        text: "Delete",
                        confirmButtonColor: "#DD6B55",
                        
                        value: "isConfirm",
 
                        visible: true,
                    },},
                  html:"<h1>dsfdfdg</h1>"
      
              }        ).then(function(isConfirm){
          if(isConfirm){
            $.ajax({url:"./help_modules/resultrow.php",method:"post",type:"post",data:{qry:"Delete from applyjobs where postid="+e,nonenumrow:"true"},success:function (d){

          if(d==1){
            swal({
  title: 'Delete',
  icon:"success",
  text: 'Deleted successfuly.',
  timer: 1000
})
$("#box").load(location.href + " #box");
          }
          
            }})

          }
        })

       }
    



function edit(){
  swal({
  title: 'Edit',
  icon:"error",
  text: 'Sorry now you can`t edit your profile till verified your profile',
  
}) 
    
}
        </script>
      <style>
#jobwrapper{
  box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.2), 0 10px 10px 0 rgba(0, 0, 0, 0.19);
  display: inline-grid;
  grid-template-columns: auto auto ;
 
  padding: 10px;
padding: 4px;
border-radius: 5px;
  margin-top: 10px;
}

.img{
    position: relative;
    z-index: -5;
    
}
#pfid{
    display: flex;
    flex-direction: row;
    column-gap: 50px;
    align-items: center;
    justify-content: center;
   

}

#box {
  display: inline-grid;
  grid-template-rows: repeat(auto-fit, minmax(186px, 1fr));
  grid-template-columns: auto auto auto auto;

 justify-content: center;
flex-wrap: wrap;
 align-items: center;
  padding: 10px;
  
}





#edit{
   
    background-color: rgba(20, 1, 90, 0.100);
    cursor: pointer;
    padding: 5px;
    
     
    
}
#applyjobs{
    font-size: 20px;
margin: 8px;
}

@media screen and(max-width:600px) {
  #jobwrapper{
    
  }
  
}
        </style>
        <?php include "navbar.php" ?>
    </head>


    <body>
        
        <?php 
     
        require_once "mysqlconfig.php";
        require_once "style_cdn.php";
if(session_status()==PHP_SESSION_NONE){
    session_start();
    }

        $sqlqry="select * from profile where id='".$_SESSION["UP_ID"]."'";

        $result=$conn->query($sqlqry);
       

        while($row=$result->fetch_assoc()){

        
        ?>
<div id="pfid" class=" text-center">
    <div id="userimg" class="img">
 
       
<img class="rounded-circle" src="<?php echo $row['profile'] ?>" alt="img" width="150px" height="150px"  />
 
</div>
    <div class="content">
      <strong>User Id :</strong>   <p >  <?php echo $row['id'] ?> </p>
      <strong>Address :</strong>    <p> <?php echo $row['address'] ?> </p>
       <strong>Mobile  : </strong> <p> <?php echo $row['mobile'] ?> </p>
        <strong>Edication:</strong><p> <?php echo $row['edication'] ?> </p>
        <strong>gender  :</strong> <p>  <?php if( $row['mf']=='m'){ echo "male" ;}else{echo "female";} ?> </p>
  <?php if( $row['status']=='n'){ echo " <strong class='text-danger'> <i class='fa-solid fa-circle-exclamation'></i> Verifed pending </strong>" ;}else{echo "<strong class='text-success'><i class='fa-solid fa-check'></i> Verifed </strong>";} ?>

    </div>


</div>


<?php }?>     
<?php include_once "./help_modules/commonmodal.php"; ?>   
<div>
<i  id="edit" onclick="edit()" class="fa-solid fas fa-edit">edit</i>
    <div class="navtabsheade ">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link active m-2 cursor-pointer" >Post </a>
                <li>
        </ul>
    </div>
    <div id="box" class=" m-2">
   

<?php
      $sqlqry="select aj.postid,aj.id,aj.jobname,aj.members,aj.fromdate,aj.todate,aj.info,jt.title FROM applyjobs aj,jobtitle jt WHERE jt.pk=aj.title and  aj.id=".$_COOKIE["Temp_ID"];

$result=$conn->query($sqlqry);

$numberofrow=mysqli_num_rows($result);
if($numberofrow>0){
while($row=$result->fetch_assoc()){


?>

  <div id="jobwrapper" >
 
    
      <div class="card-body  p-0">
      
    
      <div class="card-text ml-3"><?php echo $row['title'] ?></div>
       

        <div class="row relative" id="contentjob">
  
          <div class="col-md-3 z-6">
          <img src="./sources/job.jpg"  width="90" height="150"  alt="...">
          </div>
        <div class="ml-4 col-md-6 p-0">
        
        <p class="card-text">discription:<?php echo $row['jobname'] ?></p>
        <p class="card-text">Total Members: <?php echo $row['members'] ?></p>
        <p class="card-text p-0">from:<?php echo $row['fromdate'] ?> to:<?php echo $row['todate']  ?>  </p> 
          
    </div>  
    <div class="col-md-2 absolute z-1">
    <?php echo  '  <button class=" btn-danger p-1  fa fa-trash" onclick="deletefun('. $row["postid"] .')"  type="button"  />' ?>
       
    </div>
       
      
    </div>
    </div>
  </div>
  


<?php }}else{?>

    <a id="applyjobs"  href="applyjobs.php"><i class="fa fa-paper-plane"></i> </a>  <p>Post Emty</p> 

    <?php }?>


</div>
 

    

</body>
</html>