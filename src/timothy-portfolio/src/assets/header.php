<?php
echo'<div style="padding:0px;margin-bottom:90px;">
		<ul class="topnav shadowHeader" id="myTopnav">
			<li><a class="title" href="http://timothylock.ca/">Timothy Lock</a></li>
			<li class="right"><a ' ?>
<?php echo '
			<li class="right"><a href="http://blog.timothylock.ca/">Blog</a></li>
			<li class="right"><a '?>
<?php if($page == 2){
			echo 'class="active"';
} ?> <?php 	echo 'href="http://timothylock.ca/portfolio.php">Portfolio</a></li>
			<li class="right"><a '?>
<?php if($page == 1){
			echo 'class="active"';
} ?> <?php 	echo 'href="http://timothylock.ca/index.php">Home</a></li>
			<li class="icon">
				<a href="javascript:void(0);" style="font-size:15px;" onclick="myFunction()">☰</a>
			</li>
		</ul>
	</div>
	<script>
	function myFunction() {
	    var x = document.getElementById("myTopnav");
	    if (x.className === "topnav shadowHeader") {
	        x.className += " responsive";
	    } else {
	        x.className = "topnav shadowHeader";
	    }
	}
	</script>
'
?>
