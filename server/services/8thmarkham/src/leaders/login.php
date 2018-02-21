<?php
//put sha1() encrypted password here - example is 'hello'
$password = '6fb733896f8c8079c26ac82fdaed8842c96e40e1';

session_start();
if (!isset($_SESSION['loggedIn'])) {
    $_SESSION['loggedIn'] = false;
}

if (isset($_POST['password'])) {
    if (sha1($_POST['password']) == $password) {
        $_SESSION['loggedIn'] = true;
    } else {
        die ('Incorrect password');
    }
} 

if (!$_SESSION['loggedIn']): ?>

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
.auto-style3 {
	border-left-width: 0px;
	border-right-width: 0px;
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
.auto-style17 {
	color: #FFFFFF;
}
.auto-style18 {
	text-decoration: none;
}
.auto-style19 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: medium;
}
</style>
</head>

<body>

<p><img alt="Logo" src="loginlogo.jpg" /></p>
<p class="auto-style7" style="width: 100%"><span class="auto-style11">|</span><br />
<span class="auto-style8">&nbsp;&nbsp;&nbsp;&nbsp; Leaders Area</span><br />
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
				Leaders Area
				<a class="auto-style18" href="http://8thmarkham.com/leaders">
				<span class="auto-style17">Home</span></a></td>
			</tr>
			</table>
		</td>
		<td align="top" class="auto-style12" style="width: 692px"><strong>
		Leaders Area Login</strong></td>
	</tr>
	<tr>
		<td style="width: 271px">&nbsp;</td>
		<td align="top" class="auto-style19" style="width: 692px">Please 
		authenticate to access restricted area:<form method="post">
      Password: <input type="password" name="password"> <br />
      <input type="submit" name="submit" value="Login">
    </form>
		</td>
	</tr>
</table>
<p>&nbsp;</p>

</body>

</html>

<?php
exit();
endif;
?>
