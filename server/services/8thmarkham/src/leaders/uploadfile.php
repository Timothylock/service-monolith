<?php
require('login.php');
?>


<?php
if (isset($_GET['delete'])) {
	$fullpath = getcwd() . "/files/" . $_GET['delete'];

	chmod($fullpath, 0777);

    if (!unlink($fullpath)){
		echo '<script language="javascript">';
		echo 'alert("Could not delete ';
		echo $fullpath;
		echo '. Please contact the server administrator")';
		echo '</script>'; 
		print_r(error_get_last());
	}else{
	  	echo '<script language="javascript">';
		echo 'alert("';
		echo $_GET['delete'];
		echo ' deleted!")';
		echo '</script>'; 
	}
    
	echo '<meta http-equiv="refresh" content="0; url=uploadfile.php" />';
} else if (isset($_GET['rename'])) {
	if (!(isset($_GET['rename_to'])) && ((isset($_GET['rename_to']) && $_GET['rename_to'] == ""))) {
		echo '<script language="javascript">';
		echo 'alert("Could not rename ';
		echo $fullpath;
		echo '. Please enter a valid name to rename to")';
		echo '</script>'; 
		print_r(error_get_last());
	}

	$fullpath = getcwd() . "/files/" . $_GET['rename'];
	$fullnewpath = getcwd() . "/files/" . $_GET['rename_to'];

	chmod($fullpath, 0777);

    if (!rename($fullpath, $fullnewpath)){
		echo '<script language="javascript">';
		echo 'alert("Could not rename ';
		echo $fullpath;
		echo '. Please contact the server administrator")';
		echo '</script>'; 
		print_r(error_get_last());
	}else{
	  	echo '<script language="javascript">';
		echo 'alert("';
		echo $_GET['rename'];
		echo ' renamed to ';
		echo $_GET['rename_to'];
		echo '!")';
		echo '</script>'; 
	}
    
	echo '<meta http-equiv="refresh" content="0; url=uploadfile.php" />';
}
?>

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Leaders Area</title>
<style type="text/css">
.auto-style1 {
	font-family: Arial, Helvetica, sans-serif;
	text-align: center;
	color: #FFFFFF;
	border-bottom-style: solid;
	border-bottom-width: 1px;
	background-color: #002F64;
}
.auto-style2 {
	font-family: Arial, Helvetica, sans-serif;
	color: #FFFFFF;
	border-left-style: solid;
	border-left-width: 1px;
	border-right-style: solid;
	border-right-width: 1px;
	border-bottom-style: solid;
	border-bottom-width: 1px;
	background-color: #999999;
}
.auto-style3 {
	border-left-width: 0px;
	border-right-width: 0px;
}
.auto-style4 {
	font-family: Arial, Helvetica, sans-serif;
	color: #FFFFFF;
	border-left-style: solid;
	border-left-width: 1px;
	border-right-style: solid;
	border-right-width: 1px;
	background-color: #999999;
}
.auto-style6 {
	font-family: Arial, Helvetica, sans-serif;
	color: #FFFFFF;
	border-left-style: solid;
	border-left-width: 1px;
	border-right-style: solid;
	border-right-width: 1px;
	border-top-style: solid;
	border-top-width: 1px;
	background-color: #999999;
}
.auto-style7 {
	background-color: #003979;
}
.auto-style8 {
	font-size: large;
	font-family: Arial, Helvetica, sans-serif;
	color: #FFFFFF;
}
.auto-style11 {
	font-size: xx-small;
	color: #003979;
}
.auto-style12 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: x-large;
}
.auto-style13 {
	font-size: medium;
}
.auto-style14 {
	font-size: large;
	color: #FFFFFF;
	background-color: #999999;
}
.auto-style15 {
	font-size: medium;
	letter-spacing: normal;
}
.auto-style16 {
	font-family: Arial, Helvetica, sans-serif;
	color: #FFFFFF;
	border-left-style: solid;
	border-left-width: 1px;
	border-right-style: solid;
	border-right-width: 1px;
	border-bottom-style: solid;
	border-bottom-width: 1px;
	background-color: #FFFFFF;
}
.auto-style17 {
	color: #FFFFFF;
}
.auto-style18 {
	text-decoration: none;
}
table {
	margin-left: auto;
    margin-right: auto;
    font-family: arial, sans-serif;
    border-collapse: collapse;
    
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>

<script>
/* Script written by Adam Khoury @ DevelopPHP.com */
/* Video Tutorial: http://www.youtube.com/watch?v=EraNFJiY0Eg */
function _(el){
	return document.getElementById(el);
}
function uploadFile(){
	var file = _("file1").files[0];
	// alert(file.name+" | "+file.size+" | "+file.type);
	var formdata = new FormData();
	formdata.append("file1", file);
	var ajax = new XMLHttpRequest();
	ajax.upload.addEventListener("progress", progressHandler, false);
	ajax.addEventListener("load", completeHandler, false);
	ajax.addEventListener("error", errorHandler, false);
	ajax.addEventListener("abort", abortHandler, false);
	ajax.open("POST", "file_upload_parser.php");
	ajax.send(formdata);
}
function progressHandler(event){
	_("loaded_n_total").innerHTML = "Uploaded "+event.loaded+" bytes of "+event.total;
	var percent = (event.loaded / event.total) * 100;
	_("progressBar").value = Math.round(percent);
	_("status").innerHTML = Math.round(percent)+"% uploaded... please wait";
}
function completeHandler(event){
	_("status").innerHTML = event.target.responseText;
	_("progressBar").value = 0;
}
function errorHandler(event){
	_("status").innerHTML = "Upload Failed";
}
function abortHandler(event){
	_("status").innerHTML = "Upload Aborted";
}


function delete_item(name) {
    var result = confirm("Are you sure you want to delete " + name + "?");
	if (result) {
	    window.location.replace("uploadfile.php?delete=" + name);
	}
}

function rename_item(name) {
    var newname = prompt("What do you want to rename " + name + " to?", name);
	var result = confirm("Are you sure you want to rename " + name + " to " + newname + "? Please check the file extension to make sure it did not change unless you wanted it to!");
	if (result) {
	    window.location.replace("uploadfile.php?rename=" + name + "&rename_to=" + newname);
	}
}
</script>
</head>

<body>

<p><img alt="Logo" src="loginlogo.jpg" /></p>
<p class="auto-style7" style="width: 100%"><span class="auto-style11">|</span><br />
<span class="auto-style8">&nbsp;&nbsp;&nbsp;&nbsp; Leaders Area - Upload File</span><br />
<span class="auto-style11">|</span></p>
<table style="width: 100%">
	<tr>
		<td style="width: 271px">
		<table class="auto-style3" style="width: 100%">
			<tr>
				<td class="auto-style1"><strong><span class="auto-style7">
				Operations</span></strong></td>
			</tr>
			<tr>
				<td class="auto-style6">
				<a class="auto-style18" href="index.php">
				<span class="auto-style17">Home</span></a></td>
			</tr>
			<tr>
				<td class="auto-style4">
				<a class="auto-style18" href="newpost.php">
				<span class="auto-style17">New Post (Bulletin)</span></a></td>
			</tr>
			<tr>
				<td class="auto-style2">
				<a class="auto-style18" href="uploadfile.php">
				<span class="auto-style17">Upload File / Memo</span></a></td>
			</tr>
			<tr>
				<td class="auto-style2">
				<a class="auto-style18" href="logout.php">
				<span class="auto-style17">Logout</span></a></td>
			</tr>
			<tr>
				<td class="auto-style16">&nbsp; &nbsp;</td>
			</tr>
		</table>
		</td>
		<td align="top" class="auto-style12" style="width: 692px"><strong>
		Upload File / Memo<br />
		<br />
		</strong><span class="auto-style13">Browse for your file and click upload.<br />
		<br />
		<form id="upload_form" enctype="multipart/form-data" method="post">
		  <input type="file" name="file1" id="file1"><br>
		  <input type="button" value="Upload File" onclick="uploadFile()">
		  <progress id="progressBar" value="0" max="100" style="width:300px;"></progress>
		  <h3 id="status"></h3>
		  <p id="loaded_n_total"></p>
		</form>
		<td align="top" class="auto-style12" style="width: 692px"><strong>
		Existing Files<br />
		<table>
			<tr>
				<th>Filename</th>
				<th>Actions</th>
			</tr>
			<?php
			$ignore= array("index.php", ".style.css", ".sorttable.js", ".images"); 	
			if ($handle = opendir('./files/')) {

			    while (false !== ($entry = readdir($handle))) {

			        if ($entry != "." && $entry != ".." && in_array($entry ,$ignore)=== false) {

			            echo "<tr><td><a href='files/$entry'>$entry</a></td>";
			            echo "<td><button type='button' onclick='rename_item(\"";
						echo $entry;
						echo "\")' id='";
						echo $entry;
						echo "'>Rename</button><button style='background-color: LightCoral; 'type='button' onclick='delete_item(\"";
			            echo $entry;
			            echo "\")' id='";
			            echo $entry;
						echo "'>Delete</button></td></tr>\n";
			        }
			    }

			    closedir($handle);
			}

			?>
		</table>
		
		</td>
	</tr>
</table>
<p>&nbsp;</p>

</body>

</html>
