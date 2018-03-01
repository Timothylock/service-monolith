<?php
/*
* 	   Simple file Upload system with PHP.
* 	   Created By Tech Stream
* 	   Original Source at http://techstream.org/Web-Development/PHP/Single-File-Upload-With-PHP
*      This program is free software; you can redistribute it and/or modify
*      it under the terms of the GNU General Public License as published by
*      the Free Software Foundation; either version 2 of the License, or
*      (at your option) any later version.
*      
*      This program is distributed in the hope that it will be useful,
*      but WITHOUT ANY WARRANTY; without even the implied warranty of
*      MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
*      GNU General Public License for more details.
*     
*/
	if(isset($_FILES['image'])){
		$extensionNotAllowed = False;
		$sizeTooBig = False;
		$success = False;
		$file_name = $_FILES['image']['name'];
		$file_size =$_FILES['image']['size'];
		$file_tmp =$_FILES['image']['tmp_name'];
		$file_type=$_FILES['image']['type'];   
		$file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
		
		$extensions= array("jpeg","jpg","png","java","cpp","py","swf", "txt", "apk"); 		
		if(in_array($file_ext,$extensions)=== false){
			$extensionNotAllowed = True;
		}else{
			move_uploaded_file($file_tmp,"new/".$file_name);
			$success = True;
		}
	}
?>
<!-- Timothy Lock's Homework Site -->
<!-- Main site - www.timothylock.ca -->
<!DOCTYPE html>
<html>
<head>
  <Title>Tim's Homework Site</Title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<!-- Nav Bar -->
<ul>
  <menuItem><a class="active" href="index.php">Upload</a></menuItem>
  <menuItem><a href="software.php">Software</a></menuItem>
  <menuItem><a href="/notes">Notes/Homework</a></menuItem>
  <menuItem><a href="FLL.php">First Lego League Team</a></menuItem>
  <menuItem><a href="logicfusion.php">LogicFusion Login</a></menuItem>
</ul>

<!-- Main Page -->
<div style="padding: 20px;">
	<h1>Tim's Homework Uploader</h1>
	<h4>My email is timothy@logicfusion.ca if you have any problems or questions</h4>
	<br>
	<h3>You can upload your homework here. Make sure:</h3>
	<!--
	<div class="alert alert-info">
	  <strong>Friday C++ Class</strong> Due to the disruption that we had during class, We will have a 1:30hr class on November 4 from 6:00pm - 7:30pm to make up for the disruption. Additionally, your homework deadline is extended by 1 week.
	</div>-->
	<ol type="1">
	  <li>Your file is named as YourName_Course_HomeworkNumber (For example: Tim_java1_homework1.java or Tim_C++1_Homework2.cpp). <span style="color: #ff0000;"><strong>You will lose 20% of your marks if you do not name your file like this!</strong></span></li>
	  <li>If you are Java, you hand in your .java file - not .class file</li>
	  <li>If you are C++, you hand in your .cpp file - not .exe file</li>
	  <li>If you are Python, you hand in your .py file</li>
	  <li>If you are Animation, you hand in your .swf file - not .vgd file</li>
	</ol>
	<br>
	<br>

	<form action="" method="POST" enctype="multipart/form-data">
	<input type="file" name="image" />
	<input type="submit"/>
	</form>

	<br>

	<!-- Handle upload response -->
	<?php
		if($success){
			echo "<div class='alert alert-success'>
	    	<strong>Success -</strong> Your file has been uploaded successfully
	  		</div>";
		}
		if($extensionNotAllowed){
			if($file_ext == "exe"){
				echo "<div class='alert alert-danger'><strong>ERROR -</strong> You tried to upload a .exe file. Upload your .cpp file instead!</div>";
			}else if($file_ext == "vgd"){
				echo "<div class='alert alert-danger'><strong>ERROR -</strong> You tried to upload a .vgd file. Upload your .swf file instead! Remember to use export instead of save-as before uploading!</div>";
			}else if($file_ext == "class"){
				echo "<div class='alert alert-danger'><strong>ERROR -</strong> You tried to upload a .class file. Upload your .java instead!</div>";
			}else{
				echo "<div class='alert alert-danger'><strong>ERROR -</strong> Extension is not allowed</div>";
			}
			
		}
		
	?>
</div>
</body>
</html>