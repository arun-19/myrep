<html>
<?php 
include("style_cdn.php")
?>
<head>
<style media="screen">
    @import url('https://fonts.googleapis.com/css2?family=Rajdhani:wght@300&display=swap');
    
 
      *,
*:before,
*:after{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
#body{
    background:url("./src/image/backlogin.jpg")
}
.background{
    width: 430px;
    height: 520px;
    position: absolute;
    transform: translate(-50%,-50%);
    left: 50%;
    top: 50%;
}
.background .shape{
    height: 200px;
    width: 200px;
    position: absolute;
    border-radius: 50%;
}


form{
    height: 520px;
    width: 400px;
    background-color: rgba(255,255,25,0);
    position: absolute;
    transform: translate(-50%,-50%);
    top: 50%;
    left: 50%;
    border-radius: 10px;
    backdrop-filter: blur(10px);
    border: 2px solid rgba(255,255,255,0.1);
    box-shadow: 0 0 40px rgba(8,7,16,0.6);
    padding: 50px 35px;
}
form *{
    font-family: 'Poppins',sans-serif;
    color: #ffffff;
    letter-spacing: 0.5px;
    outline: none;
    border: none;
}
form h3{
    font-size: 32px;
    font-weight: 500;
    line-height: 42px;
    text-align: center;
}

label{
    display: block;
    margin-top: 30px;
    font-size: 16px;
    font-weight: 500;
}
input{
    display: block;
    height: 50px;
    width: 100%;
    background-color: rgba(255,255,255,0.07);
    border-radius: 3px;
    padding: 0 10px;
    margin-top: 8px;
    font-size: 14px;
    font-weight: 300;
}
::placeholder{
    color: #e5e5e5;
}
button{
    margin-top: 50px;
    width: 100%;
    background-color: #ffffff;
    color: #080710;
    padding: 15px 0;
    font-size: 18px;
    font-weight: 600;
    border-radius: 5px;
    cursor: pointer;
}
.social{
  margin-top: 30px;
  display: flex;
}
.social div{
  background: red;
  width: 150px;
  border-radius: 3px;
  padding: 5px 10px 10px 5px;
  background-color: rgba(255,255,255,0.27);
  color: #eaf0fb;
  text-align: center;
}
.social div:hover{
  background-color: rgba(255,255,255,0.47);
}
.social .fb{
  margin-left: 25px;
}
.social i{
  margin-right: 4px;
}
#register{
    font-variant: small-caps;
    text-align: center;
    margin-top: 100px;
}

    </style>
    
<meta name="viewport" content="width=device-width, initial-scale=1.0">


<script>


function checkdetails(e){
  e.preventDefault();
   
        }

      
    $(document).ready(function(){

           const id=$("#username").val()+Date.now() 


       $("form").submit(function(event){
    
        event.preventDefault();
       var subdata={
        id:id,
        username:$("#username").val(),
        email: $("#email").val(),
        password:$("#password").val(),
        regsub:200        
    
    }

    if($("#username").val()!=""){
    $.ajax({url:"./help_modules/resultrow.php",method:"post",type:"post",data:{qry:"select * from register where username='"+$("#username").val()+"'"}, success:function(e){
      
      if(e>0){
        document.getElementById("identifier").style.color="orange";
        document.getElementById("identifier").innerText="Already have username ."; 
       
       
      }else{



        $.ajax({url:"./help_modules/resultrow.php",method:"post",type:"post",data:{nonenumrow:"true",qry:`insert into register(id,username,email,password) value('${id}','${$("#username").val()}','${$("#email").val()}','${$("#password").val()}')`},beforeSend: function() {
        
         swal({
            title: "register",
            text: "please wait....",
           showConfirmButton: false,
           showConfirmButton: false,
            buttons: false,
             closeOnClickOutside: false,
             hideOnOverlayClick: false,
hideOnContentClick: false,
closeClick: false,
helpers: {
    overlay: { closeClick: false } 
}
        });
    },
    success:function(e){
           console.log(e);
          if(e>0){
              document.getElementById("identifier").style.color="green";
              document.getElementById("identifier").innerText="☺️ Registerd successfully ☺️ .";     
              
      
      
              setTimeout(() => {
                localStorage.setItem('Temp_ID',id);
                      window.location.href="profileselection.php"
                    }, 1000); 

                  }
                  
                  }
                })
              






     
      }


    }})

    
}




     

      
      
            })
       

    });
    </script>
</head>
<body id="body">
    <div class="container">

<form id="form" class="form" method="POST">
    <header id="header" class="text-center">
<h1 class=" control-label">Register</h1>
</header>
<label class="control-label">username</label>  
<div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
    <input type="text"   placeholder="username" class="form-control"    id="username" name="username"/>
  </div>
 
  <label class="control-label">email</label> 
<div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
  <input type="email"  placeholder="email" class="form-control"   id="email"  name="email"/>
  </div>


  <label class="control-label">password</label>
<div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
    <input required  placeholder="paswsord" class="form-control" id="password"  name="password" type="text"/>
  </div>


<p  id="identifier"></p>
<div>
<div class="input-group" id="subbtn-div">

<input type="submit" style="background-color:green; color: white;" name="regsub" class="form-control"  id="subbtn"   value="register"/>
</div>
<a href="login.php">Already have a Account ?</a>
</div>
</form>
    </div>
</body>
</html>