
<?php 

require_once "commonall.php"; ?>



<!DOCTYPE html>

<html>

<head>

<link rel="stylesheet" type="text/css" href="./src/css/Home.css"/>
	<title>
		arun
	</title>
	
	
	<?php  
/*	if($_FILES['file']){
	$conn=mysqli_connect("localhost","root","","MyDatabase");
$filedata=base64_encode( file_get_contents($_FILES['file']['tmp_name']));
	$sqlqry="insert into profile(img) VALUES(' $filedata')";
	$result=mysqli_query($conn,$sqlqry);

	}

*/
	if( !$_SERVER['REQUEST_URI']=='/first-php/' || !$_SERVER['REQUEST_URI']=='/'){
		ECHO $_SERVER['REQUEST_URI'];
		require 'navbar.php';
	};


	
	?>
	<script>

		
		</script>
</head>

<body>


<div class="container" id="home_controler">
	<form onsubmit="sub()" action="summa.php" method="post" enctype="multipart/form-data">
	<input type="file"  name="file" id="file"/>
	<input type="submit"/>
	</form>
	<section class="profile">
		<div class="NameTag">
			<h2>Arun N</h2>
			<p>Software Developer</p>
		</div>
		<div class="Pictag">
				<img class="img-rounded" width="150" height="150" src="./src/image/register.png"/>

			</div>
	</section>

	<section class="secondsection">
		<div class="box-main">
			<div class="secondHalf">
				<h1 class="text-big" id="program">
					C Programming
				</h1>
				<p class="text-small">
					C is a procedural programming language.
					It was initially developed by Dennis
					Ritchie as a system programming
					language to write operating system.
					The main features of C language include
					low-level access to memory, simple set
					of keywords, and clean style, these
					features make C language suitable for
					system programming like operating system
					or compiler development.
				</p>


			</div>
		</div>
	</section>

	<section class="section">
		<div class="paras">
			<h1 class="sectionTag text-big">Java</h1>

			<p class="sectionSubTag text-small">
				Java has been one of the most
				popular programming language
				for many years. Java is Object
				Oriented. However it is not
				considered as pure object oriented
				as it provides support for primitive
				data types (like int, char, etc) The
				Java codes are first compiled into byte
				code (machine independent code). Then
				the byte code is run on Java Virtual
				Machine (JVM) regardless of the
				underlying architecture.
			</p>


		</div>

		<div class="thumbnail">
			<img src="img.png" alt="laptop image">
		</div>
	</section>

	<footer class="background">
		<p class="text-footer">
			Copyright ©-All rights are reserved
		</p>


	</footer>
</body>

</html>
