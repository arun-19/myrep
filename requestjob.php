
<!DOCTYPE html>
<html>
<?php     require_once "mysqlconfig.php";

require_once "style_cdn.php";
?>
<?php 
?>
   <head>
      <title>Request</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <script>
     function requestfun(e){
        const conversation=$("#coversation").val();
       
        const mobile=$("#mobile").val();
        $.ajax({url:"./help_modules/resultrow.php",type:"post",method:"post",data:{nonenumrow:true,qry:"insert into requestjob(`postid`, `requestid`, `message`, `mobile`,`resid`,`view`) VALUES("+e.postid+","+<?php  echo $_GET["requestpostid"];?>+",'"+conversation+"',"+mobile+","+localStorage.getItem("Temp_ID")+",0"+")"},beforeSend:function(){
            $(".card").text("load..........")
        },success:function(eresut){
          
         if(eresut=="1"){
            $(".card").html("Succesfuly Request send✅")
         }
        },error: function (request, error) {
            
        console.log(error);
     
    }
            
            
        })

     }
       

        </script>
   </head>
	
   <body>
      
   <div class="card p-0">
<?php
      $sqlqry="select jt.title,rg.username,pf.id,pf.mobile FROM applyjobs aj,jobtitle jt,register rg,profile pf WHERE jt.pk=aj.title and aj.postid=".$_GET["postid"]." and rg.id=".$_COOKIE["Temp_ID"]." and pf.id=".$_COOKIE["Temp_ID"];

      $result=$conn->query($sqlqry);

      $numberofrow=mysqli_num_rows($result);
      if($numberofrow>0){
      while($row=$result->fetch_assoc()){
     ?>
       <div class="card-header">
        <p> <?php echo $row["title"]; ?> </p>
        <div class="form-group p-0">
       <label>Name</label>
        <input type="text" id="name" class="form-control" name="name" value="<?php echo $row["username"]; ?>"/>
        </div>
        <div class="form-group p-0">
       <label>Mobile Number</label>
        <input type="text" class="form-control" id="mobile" name="mobile" value="<?php echo $row["mobile"]; ?>"/>
        </div>
        <div class="form-group p-0">
       <label>Write your conversation</label>
       <textarea id="coversation"  class="form-control" name="info" rows="6" cols="40" id="exampleInputPassword1" placeholder="enter information....." ></textarea>
        
       <?php echo  '  <input  onclick="requestfun({funtype:`requestjob`,postid:'. $_GET["postid"] .'})"  type="button" value="Request" class="btn btn-primary" />' ?>
      </div>
        
        <div class="form-group">
       
        </div>
        
       <div>
<?php }}?>

      </div>
   </body>
   
</html>