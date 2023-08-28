<?php 

require_once "commonall.php";?>
<?php require "style_cdn.php" ?>
<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
<script>

function opennav(){
 $("#navbar20").fadeToggle();
}
  function profile(){
    window.location.href="profile.php";
  }
  
function exit(){

  $.ajax({url:"commonall.php",method:"post",type:"post",data:{logout:true},success:function(e){
window.location.reload();
  }})
  
}

  </script>
  <style>
 



  #profile{

    cursor: pointer;
    
  }
  .navbar{
    box-shadow: 0 2px 4px 0 rgba(0,0,0,.2);
    background-color: rgba(0,0,0,.01);
  }
  #linkid  li {
    padding-left: 30px;
  }
  #linkid  li a{
    color: white;
    text-decoration: none;
    
  }
  #navbar20{
    max-height: max-content;
  }
  #linkid li a.active{
    position: relative;
    bottom: 0;
    left: 0;
   
    content: " ";
    border-bottom: 5px solid #5BC0EB;

  }
  


  #notification{
   cursor:pointer;
    position: relative;
    z-index: -1;
    width: 10px;
    height: 10px;
  }
#notifycircle{
  background-color: red;
  cursor:pointer;
  position: absolute;
  display:block;
  color: white;
  border-top-right-radius: 30%;
  border-top-left-radius: 30%;
  border-bottom-right-radius: 30%;
    z-index: 10;
    
  
    height: max-content;
  top: 0;
  left: 0;
  border-bottom-left-radius: 0px;
  transform: translate(50%,-50%);
  padding-left: 3px;
  padding-top:-10px ;
  padding-right: 3px;
padding-bottom: 0px;
  
}
#notifywrapper{
 cursor: pointer;
}
  #navwhole{
      background-color: #0047AB;
  }
  </style>
       
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

 <nav class="navbar p-1   sticky-top navbar-expand-lg " id="navwhole" >
   
    <button id="navbaricon" class="navbar-toggler " onclick="opennav()" type="button"  aria-controls="navbar20" aria-expanded="true" aria-label="Toggle navigation">
    <i class="fa fa-bars" aria-hidden="true"></i>
  </button>
      <div class="collapse navbar-collapse" id="navbar20">
        <ul id="linkid" class=" navbar-nav mr-auto">
          <?php $page= substr( $_SERVER["SCRIPT_NAME"] ,strpos($_SERVER["SCRIPT_NAME"],"/")+1) ;?>
          <li class="nav-item "> <a class="  <?php echo  $page=="first_php/index.php"||$page=="index.php"?  "active": "" ?> "  href="index.php"> <i class="fa fa-id-badge" ></i> Job</a> </li>
          
          <li class="nav-item "> <a class="  <?php echo $page=="first_php/applyjobs.php"||$page=="applyjobs.php"?  "active": "" ?>"   href="applyjobs.php"><i class="fa fa-sticky-note" aria-hidden="true"></i>Apply</a> </li>
          <li class="nav-item "> <a class=" <?php echo $page=="first_php/about.php"||$page=="about.php"?  "active": "" ?> " href="about.php"><i class="fa-solid fa-info"></i>About</a> </li>
       
        </ul>

        <ul class= "text-center navbar-nav ml-auto">
        
        


        <div id="profile" onclick="profile()">
        <?php  require_once "mysqlconfig.php"; 
          require "userpic.php";
          ?>
        </div>
            
          <li  class="nav-item mx-1"> <a id="notifywrapper" href="notification.php"  class="text-white nav-link" >
            <div id="notification"  >
            
          
            <?php    
            $sqlqry="select * from  requestjob  where requestid=".$_COOKIE["Temp_ID"]." && view=0";
            $result=mysqli_query($conn,$sqlqry); 
            $totalnotify=mysqli_num_rows($result);
            ?>  
            <?php if( $totalnotify>0){?>
            <span id="notifycircle"><?php echo $totalnotify;?> </span>
          <?php } ?>
          <i  class="fa-solid fa-bell relative"> </i>
         
            </div>
            </a> </li>
          <li class="nav-item mx-1"> <a class="text-white nav-link" href="register.php">
          <i class="fa-solid fa-registered"></i>
            </a> </li>
          <li onclick="exit()" class="nav-item  mx-1"> <a class="text-white nav-link" href="#">
          <i  class="fa-solid fa-right-from-bracket"></i>
            </a> </li>
        </ul>
      </div>
      
   
</nav>

    
 
