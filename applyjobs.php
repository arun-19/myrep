<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

  		<?php include "style_cdn.php";

include "commonall.php";
include "mysqlconfig.php";
    ?> 
    
    <?php include "navbar.php" ?>
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Rajdhani:wght@300&display=swap');
      .container{
        max-width: 50%;
        min-height: 100vh;
        padding: 5px;
          

      }
    
      </style>


<script>
  $(document).ready(function(){


$("#job").submit(function(e){
  
  e.preventDefault();
  const formdata=$('#job').serialize();
  const date1=new Date( $("#fromdate").val());
  const date2=new Date($("#todate").val());

  const timediffern=Math.abs(date2-date1);
  const day=Math.ceil(timediffern/(1000*60*60*24));
  
   
  swal({
    title: "Are you sure!",
                            type: "error",
                            confirmButtonClass: "btn-danger",
                            confirmButtonText: "Yes!",
                            showCancelButton: true,allowOutsideClick: "false" ,
                    buttons: {
                    cancel: true,
                    confirm: {
                        text: "Request now",
 
                        value: "isConfirm",
 
                        visible: true,
                    },},
                  html:"<h1>dsfdfdg</h1>"
      
              }        ).then(function(isConfirm){
          if(isConfirm){
          requestGranted();

          }
        })
        const postid=Math.random()*1500+100*1008+10000*90;

        function requestGranted(){
          $.ajax({url:"./help_modules/resultrow.php",method:"post",type:"post",data:formdata+"&id="+localStorage.getItem("Temp_ID")+"&days="+day+"&postid="+postid}).then((e)=>{
              console.log(e)
  if(e=="success"){
    swal({
            title: "Request Job",
            text: "Request job Post successfuly.",
            icon: "success",
            button: "Ok",
            timer: 3000
        }).then(()=>{
          window.location.reload(true);
        })
          }

        })
        }


      })
});

</script>

</head>
<body>
 
<div class="container">

	<form id="job" class="form  xs-12 md-12 ">

  <div class=" form-group">
    <label for="exampleInputEmail1">Job Type</label>
   <select name="type" id="type" class="form-control">
    <option value="null">select require job type</option>
    <?php
      $sqlqry="select * from jobtitle";

        $result=$conn->query($sqlqry);
       

        while($row=$result->fetch_assoc()){

        
        ?>
        <option value="<?php echo $row['pk']; ?>" >  <?php echo $row['title']; ?> </option>
    
      <?php } ?>

   </select> 
  </div>


  <div class=" form-group">
    <label for="exampleInputEmail1">Job Name or Discription</label>
    <input type="text" id="name"  name="job" class="form-control"  aria-describedby="emailHelp" placeholder="Job">
    
  </div>
<div class="form-group">
    <label for="exampleInputPassword1">Total Member</label>
    <input id="totalmember"  type="text" name="members" class="form-control" id="exampleInputPassword1" placeholder="total member">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">From Date</label>
    <input id="fromdate" type="date" name="fromdate"   id="exampleInputPassword1" placeholder="work day">
 
  <label for="exampleInputPassword1">To Date</label>
    <input id="todate" type="date" name="todate"   id="exampleInputPassword1" placeholder="work day">

  </div>



<div class="form-group">
    <label for="exampleInputPassword1">Salary </label>
    <input id="salary" type="text" name="salary"  class="form-control" id="exampleInputPassword1" placeholder="Salary">

  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Job Address</label>
    <input id="address" type="text" name="address" class="form-control" id="exampleInputPassword1" placeholder="address">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Mobile number</label>
    <input id="mobile" type="text" name="mobile" class="form-control" id="exampleInputPassword1" placeholder="mobile">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Alteranative number</label>
    <input id="mobile2"  type="text" name="alternativemobile" class="form-control" id="exampleInputPassword1" placeholder="mobile">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">work information</label>
    <textarea id="ifo"  class="form-control" name="info" rows="5" cols="50" id="exampleInputPassword1" placeholder="enter information....." ></textarea>
  </div>
 

  <div class="text-end mt-2">  <button type="submit" id="submit" class="btn btn-success">Submit</button></div>
</form>
</div>

</body>
</html>