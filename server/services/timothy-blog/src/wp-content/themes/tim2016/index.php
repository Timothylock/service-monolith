<!DOCTYPE html>
  <head>
    <meta charset="UTF-8">
    <title>How To Convert HTML Template to WordPress Theme - WPExplorer</title>
    <link rel="stylesheet" type="text/css" media="all" href="style.css"/>
    <link rel="stylesheet" type="text/css" href="http://timothylock.ca/assets/css/nav.css">
    <link rel="stylesheet" type="text/css" href="http://timothylock.ca/assets/css/body.css">
  </head>
  <body>
    <div id="wrap">
      <header class="header">
        <div style="padding:0px;margin-bottom:90px;">
    <ul class="topnav shadowHeader" id="myTopnav">
      <li><a class="title" href="index.php">Timothy Lock</a></li>
      <li class="right"><a ' ?>
<?php if($page == 4){
      echo 'class="active"';
} ?> <?php  echo 'href="connect.php">Connect</a></li>
      <li class="right"><a '?>
<?php if($page == 3){
      echo 'class="active"';
} ?> <?php  echo 'href="blog.php">Blog</a></li>
      <li class="right"><a '?>
<?php if($page == 2){
      echo 'class="active"';
} ?> <?php  echo 'href="portfolio.php">Portfolio</a></li>
      <li class="right"><a '?>
<?php if($page == 1){
      echo 'class="active"';
} ?> <?php  echo 'href="index.php">Home</a></li>
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
      </header><!-- .header -->
      <div class="content">
        <p>This is the main content area.</p>
      </div><!-- .content -->
      <div class="sidebar">
        <p>This is the side bar</p>
      </div><!-- .sidebar -->
      <footer class="footer">
        <p>And this is the footer.</p>
      </footer><!-- .footer -->
    </div><!-- #wrap -->
  </body>
</html>