<?php 

require_once "commonall.php";?>
<?php require "style_cdn.php" ?>
<header>
<?php include "navbar.php" ?>

<script>
  function feedback(){
    const feed=$("#feedback").val();
    if(feed!=""){
    $.ajax({url:"./help_modules/resultrow.php",method:"post",type:"post",data:{qry:"insert into feedback(feedback,id) values('"+feed+"',"+localStorage.getItem("Temp_ID")+");"}})
   
    $("#feedback").val(null);
  }
 
  }
  </script>
</header>
<style>
    .about-section {
  padding: 50px;
  text-align: center;
  background-color: #474e5d;
  color: white;
}
    </style>
<div class="about-section">
  <h1>Create By N.Arun</h1>
  <p> Edication: B.Tech </p>
  <p>  Sethu Institute of Technology, Pulloor, Kariapatti – 626 115, Virudhunagar District, Tamilnadu, INDIA. </p>
<div><i class="fa fa-envelope" aria-hidden="true"></i> lingaminfomail@gmail.com</div>
<div class="mt-2"><i class="fa fa-phone " aria-hidden="true"></i>91+ 9843565941</div>
<div id="feed" class="form-group">
<label class="form-label"  for="feedback">Feedback</label>
    <textarea class="form-control" id="feedback" name="feedback" placeholder="Send your feedback...." style="height:200px"></textarea>
<button class="btn btn-primary m-2" onclick="feedback()" class="form-control">Send</button>
</div>
  </div>

</div>