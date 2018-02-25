<?php
function getAge() {
    $date = strtotime("June 11, 2016 2:00 PM");
	$remaining = $date - time();
}
?>
<!DOCTYPE html>
<!-- You are entering dangerous territory of complete messiness.
Here Be dragons! 
You've been warned
-->
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Welcome - Timothy Lock</title>
<!-- Common Head code -->
<?php include 'assets/head.php';?>
</head>

<body>
<div id="wrapper">
	<!-- Navigation -->
	<div style="padding:0px;margin-bottom:90px;">
		<ul class="topnav shadowHeader" id="myTopnav">
			<li><a class="title" href="http://timothylock.ca/">Timothy Lock</a></li>
		</ul>
</div>

	<!-- Main Body -->
	<div id="content">
		<h1>I'll Be Back Soon!</h1>
		<br>

		<h2>WHAT?</h2>
		<p>My site is currently undergoing a redesign to make it more clean and modern than before. This required me to shut down the entire site until transitions are complete. If you need to contact me, you can shoot me an <script type="text/javascript">document.write('<'+'a'+' '+'h'+'r'+'e'+'f'+'='+"'"+'m'+'a'+'i'+'l'+'t'+'o'+':'+'t'+'i'+'m'+'o'+'t'+'h'+'y'+'@'+'t'+'i'+'m'+'o'+'t'+'h'+'y'+'l'+'o'+'c'+'k'+'.'+'c'+'a'+"'"+'>'+'e'+'m'+'a'+'i'+'l'+'<'+'/'+'a'+'>');</script> (<script type="text/javascript">document.write('t'+'i'+'m'+'o'+'t'+'h'+'y'+'@'+'t'+'i'+'m'+'o'+'t'+'h'+'y'+'l'+'o'+'c'+'k'+'.'+'c'+'a');</script>)</p>
		<br>

		<h2>I miss you! When will you be back??</h2>
		<p><?php $date = strtotime("August 11, 2016 2:00 PM");
$remaining = $date - time(); $days_remaining = floor($remaining / 86400);
$hours_remaining = floor(($remaining % 86400) / 3600);
echo "I plan to bring the site back up in $days_remaining days and $hours_remaining hours";?></p>
		<br>

	</div>

	<!-- Footer -->
	<?php include 'assets/footer.php';?>
</div>
</body>

</html>