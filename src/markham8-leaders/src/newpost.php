<?php
require('login.php');
?>

<html>
<head>
<title>8th Markham Leaders Area</title>
<style>
*{margin:0;padding:0}
html, body {height:100%;width:100%;overflow:hidden}
table {height:100%;width:100%;table-layout:static;border-collapse:collapse}
iframe {height:100%;width:100%}

.header {border-bottom:1px solid #000}
.content {height:100%}
</style>
</head>
<body>
<table>
  <tr><td class="header"><div>
  <h2>Create Post</h2>
  <h3>Instructions:</h3>
  Login with <strong>user:</strong>�8thleader � � �<strong>pass:�</strong>8thpsswd
  <ul>
	<li>DO NOT create new category or your post WILL NOT appear on the homepage</li>
	<li>Click publish when finished</li>
  </ul>
  </div></td></tr>
  <tr><td class="content">
      <iframe src="http://8thmarkham.com/wp-admin/post-new.php" frameborder="0"></iframe></td></tr>
</table>
</body>
</html>