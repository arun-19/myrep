<style>
    #requestwrapper{
       
        cursor: pointer;
        text-align: center;
        border-radius: 2px;
        margin-top: 5px;
        padding: 5px;
        box-shadow: 0 1px 8px 0 rgba(0, 0, 0, 0.2), 0 1px 20px 0 rgba(0, 0, 0, 0.19);
    }
  
    #wrappertowhole{
        align-items: center;
    }
    </style>
    <head>
    <?php

  
include  'navbar.php'

?> 
        <script>
            function message(e){
                $("#"+e).fadeToggle();
                $.ajax({url:"./help_modules/resultrow.php",method:"post",type:"post",data:{qry:"UPDATE `requestjob` set view=1 WHERE pk="+e}})
               


            }
            </script>

    <h4>Notification Center</h4>
    </head>

<div class="container" id="wrappertowhole" >
     <p>Recivied message</p>

<?php require_once "mysqlconfig.php";?>
    <?php
    $sqlnotify="select jt.title Requestedjobtitle,rj.pk rpk,rj.postid,rj.requestid,rj.mobile whatsapp,rj.resid,pf.profile,pf.job,rg.username,pf.address,rj.message from requestjob rj,applyjobs aj,jobtitle jt,profile pf,register rg where rj.requestid=".$_COOKIE["Temp_ID"]." && rj.postid=aj.postid && jt.pk=aj.title && pf.id=rj.resid && rg.id=pf.id";
    
  
    $result=$conn->query($sqlnotify);
    
    
    while($rows=$result->fetch_assoc()){
    
    ?>
<?php      echo "  <div class='row p-2' id='requestwrapper'  onclick='message(" .$rows["rpk"].")'>" ?>
      <div class="col-md-6 text-center">
        <b>your Requested Job</b>
        <p><?php echo $rows["Requestedjobtitle"] ?>  </p>
      </div>

      <div class="col-md-6 text-center">
      <img class="rounded-circle" src=" <?php echo $rows['profile'] ?>" width="50px" height="50px" />
      <p class="p-0 m-0">name:<?php echo  $rows["username"]?>  </p> 
      <p>Job Status:<?php echo $rows["job"] ;?></p>
      
    
    </div>
   
    <div>
    <?php 
   echo  "<div id='".$rows["rpk"]."' class='collapse row'>"
    ?>
  

    <div class="row"><p>whatsapp:<i class="fa fa-whatsapp text-success" aria-hidden="true"></i>  <a class="text-success" href=""><?php echo $rows["whatsapp"];?></a> </p></div>
    <div class="row"><p>address:<?php echo $rows["address"];?></p></div>
    
    
    <div class="rowr"><b>message</b></div>
    <div class="row"><p><?php echo $rows["message"];?></p></div>

</div>
</div>
      </div>
      


    <?php }?>
 
    
</div>
