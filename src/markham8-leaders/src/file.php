
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
    
	//echo '<meta http-equiv="refresh" content="0; url=file.php" />';
}
?>

<!DOCTYPE html>
<html>
<head>
<style>
body {

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
</head>
<body>


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

	            echo "<tr><td><a href='$entry'>$entry</a></td>";
	            echo "<td><button type='button' onclick='delete_item(\"";
	            echo $entry;
	            echo "\")' id='";
	            echo $entry;
				echo "'>Delete</button></td></tr>\n";
				echo "<tr><td><a href='$entry'>$entry</a></td>";
	            echo "<td><button type='button' onclick='rename_item(\"";
	            echo $entry;
	            echo "\")' id='";
	            echo $entry;
	            echo "'>Rename</button></td></tr>\n";
	        }
	    }

	    closedir($handle);
	}

	?>
</table>

<script>
function delete_item(name) {
    var result = confirm("Are you sure you want to delete " + name + "?");
	if (result) {
	    window.location.replace("file.php?delete=" + name);
	}
}

function rename_item(name) {
    var newname = prompt("What do you want to rename " + name + " to?");
	var result = confirm("Are you sure you want to rename " + name + " to " + newname + "?");
	if (result) {
	    window.location.replace("file.php?rename=" + name + "&rename_to=" + newname);
	}
}
</script>

</body>
</html>