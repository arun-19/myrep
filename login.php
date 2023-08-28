


<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    
    
<?php
 
include("style_cdn.php");

?>



<script>

    $(document).ready(function(){
        const getid=localStorage.getItem("Temp_ID")
        if (getid) {
        $.ajax({url:"./help_modules/getdata.php",method:"post",type:"post",data:{qry:"select * from register where user='"+getid+"'"}, success:function(e){
       const data= JSON.parse(e)
        document.getElementById("username").value=data.map(data=>data.username);
        document.getElementById("password").value=data.map(data=>atob(data.password))
          
        }}) 
    }


        $("form").submit(function(e){
            e.preventDefault();
           
         
        const username=$("#username").val();
        const password=$("#password").val()
       
 if($("#username").val()!="" || $("#password").val()!=""){   
    $.ajax({url:"./help_modules/resultrow.php",method:"post",type:"post",data:{qry:"select * from register where username='"+username+"' and  password='"+password+"'",login_id:'-'+new Date()}, success:function(e){
            if(e==0){
            document.getElementById("identifier").style.color="red";
        document.getElementById("identifier").innerText="🧾enter valid account details.";
            }else{
                document.getElementById("identifier").style.color="green";
        document.getElementById("identifier").innerText="✅Login verified."; 
      //  document.cookie="Temp_ID="+localStorage.getItem("Temp_ID");
        localStorage.setItem("Temp_ID",e);
        window.location.href="index.php" 
        
      
     
            }
        
        }})
    }
})
        
    })
    </script>
</head>















<body>
<div class="container">
<body id="body">
    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    <form id=form>
        <h3 class="text-white">Login</h3>

        <label for="username">Username</label>
        <input type="text" placeholder="User Name" id="username">

        <label for="password">Password</label>
        <input type="password" placeholder="Password" id="password">

        
<p style="text-color:red;" id="identifier"></p>
<a id="register" href="register.php"> Register Now</a>
<button type="submit" class="form-control" style=" color: black;">Login </button>


       
    </form>
    
</body>




</html>