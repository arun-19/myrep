
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php 
    require_once "style_cdn.php";
    ?>
    <script>

$(document).ready(function(){



$('form').submit(async function(e){

e.preventDefault();
const  profile=$('#profile')[0].files[0];
const  adhar=$('#adhar')[0].files[0];

const address=$('#address').val();
const mobile=$('#mobile').val();
const  edication=$('#edication').val();
const mf=$('#mf').val();
const  job=$('#job').val();


const profilereader=new FileReader();



profilereader.readAsDataURL(profile);

const profiepromise=new Promise(function(resolve,reject){

   profilereader.onloadend=async function(event){
   await  resolve( event.target.result )

}
profilereader.error=async function(e){
    reject(e)

}

})


 const profilebase64=await profiepromise.then(data=>data)

 //adhar file

 const adharreader=new FileReader();



adharreader.readAsDataURL(profile);

const adharpromise=new Promise(function(resolve,reject){

    adharreader.onloadend=async function(event){
   await  resolve( event.target.result )

}
adharreader.error=async function(e){
    reject(e)

}

})
const id=localStorage.getItem('Temp_ID');

const adharbase64=await adharpromise.then(data=>data)

  if($('#profile')[0].files[0].size > 2097152 || $('#adhar')[0].files[0].size > 2097152){
       alert("File is too big! please upload below 2mb.");
      
    }else{
 
if(localStorage.getItem('Temp_ID')){
    $.ajax({url:"./help_modules/resultrow.php",method:"post",type:"post",data:{nonenumrow:"true",qry:`insert into profile(id,profile,profilename,address,mobile,edication,mf,adhar,adharname,job,status) VALUES('${id}','${profilebase64}','${profile.name}','${address}','${mobile}','${edication}','${mf}','${adharbase64}','${adhar.name}','${job}','${'n'}')`,},beforeSend: function() {
        
         swal({
            title: "profile register",
            text: "sending......",
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
    },success:function(e){
      
        if(e>0){
                window.location.href="login.php";
   
            }

        }
        
        
    })


}else{
    $("#form").html("please don't remove id if wait for we will fix soon ");

}


}



})

})
        </script>
     
</head>
<body>
<div class="container">

<form id="form" method="POST" class="form"  enctype="multipart/form-data">
<div class="text-center">
    <h2><i class="fa fa-user" aria-hidden="true"></i>Profile </h2>
</div>             

<label>profile</label>
        <input class="form-control" accept="image/png" type="file" required name="profile" id="profile">
        
        <label class="form-label">address</label>
        <input class="form-control" type="text" name="address" required id="address" required>

        <label>mobile number</label>
        <input class="form-control" type="number" required name="mobile" id="mobile" required>

        <label>Edication</label>
        <input class="form-control" type="text" required name="edication" id="edication" required>
        <label>Job</label>
        <input class="form-control" type="text" required name="job" id="job" required>
        <label>matiral</label>
       <select class="form-control" name="matiral" id="mf">
            <option value="m">male</option>
            <option value="f">female</option>
        </select>
        <label>upload adhar </label>
      <input class="form-control" accept="image/png" type="file" id="adhar" required name="adhar card"/>

        <input class="form-control btn btn-success mt-2" type="submit" id="submitpro" name="submit" value="Verify">
    </form>
</div>

</body>


</html>

