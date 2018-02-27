<?php

if(isset($_POST['submit'])) {
	$target = "uploads/"; //make sure to create a folder named 'uploads' and put it in the same directory that upload.php (this script) is in
	$file_name = $_FILES['file']['name'];
	$tmp_dir = $_FILES['file']['tmp_name'];

						if(!preg_match('/(ppt?x)$/i', $file_name) //set permissible file types
										  )
							{
								echo "sorry that file type is not allowed";
							} else {
						move_uploaded_file($tmp_dir, $target . $file_name);
						echo "The file was uploaded successfully<br><br>";
					}

}

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Upload Your File</title>
</head>

<body>
<div id="container">
	<form enctype="multipart/form-data" action="" method="post">
        <label for="file">Choose a file to upload:</label>
        <input id="file" type="file" name="file" /><br />
        <input type="submit" value="upload file" name="submit" />

	</form>
</div>
</body>
</html>