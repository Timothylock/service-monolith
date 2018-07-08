<?php
function getAge($then)
{
    $diff = (int)date('Y') - (int)$then;
    return $diff;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Portfolio - Timothy Lock</title>
    <?php require 'assets/head.php'; ?>
</head>
<body>
<!-- Navbar -->
<?php require 'assets/navbar.php'; ?>

<!-- Content -->
<div class="container body-content">

<div class="row top-buffer">
    <div class="col-lg-12">
        <h1 class="page-header">Portfolio
            <br></h1>
        <h2>Click on a project to be taken to its page!</h2>
    </div>
</div>
<!-- /.row -->

<!-- Projects Row -->
<div class="row">
    <div class="col-md-4 portfolio-item">
        <a href="https://github.com/Timothylock/Tim-Pi-Home-Monitoring">
            <img class="img-responsive" src="https://github.com/Timothylock/Tim-Pi-Home-Monitoring/raw/master/www/assets/img/screenshot.jpg" alt="">
        </a>
        <h3>
            <a href="https://github.com/Timothylock/Tim-Pi-Home-Monitoring">Pi Home Automation</a>
        </h3>
        <p>A DIY home monitoring system made of the Raspberry Pi. It currently has the ability to control lights, outlets, and blinds. <a href="https://homemonitordemo.timothylock.ca">Demo (user: testuser, pass: testpassword)</a></p>
    </div>
    <div class="col-md-4 portfolio-item">
        <a href="http://computerswithtim.ml/">
            <img class="img-responsive" src="assets/images/porfolioPic/computerswithtim.png" alt="">
        </a>
        <h3>
            <a href="http://computerswithtim.ml/">Tims Class Site</a>
        </h3>
        <p>A website made in Go for Tim's classes that he teaches. Includes an automarker for Python that provides instant insightful feedback..</p>
    </div>
    <div class="col-md-4 portfolio-item">
        <a href="https://devpost.com/software/forget-the-forgetting">
            <img class="img-responsive" src="https://challengepost-s3-challengepost.netdna-ssl.com/photos/production/software_photos/000/302/440/datas/gallery.jpg" alt="">
        </a>
        <h3>
            <a href="https://devpost.com/software/forget-the-forgetting">Forgetting the Forgetting</a>
        </h3>
        <p>A hackathon project at KentHacks 2015. Using computer vision, it will notify you if you are leaving the house without a certain object.</p>
    </div>
</div>
<!-- /.row -->

<!-- Projects Row -->
<div class="row">
    <div class="col-md-4 portfolio-item">
        <a href="#">
            <img class="img-responsive" src="assets/images/porfolioPic/8thmarkham.png" alt="">
        </a>
        <h3>
            <a href="#">8th Markham Website</a>
        </h3>
        <p>A site designed and hosted for the 8th Markham Scouts Group. Uses Wordpress for scout leaders to post to the site.</p>
    </div>
    <div class="col-md-4 portfolio-item">
        <a href="https://devpost.com/software/printcakes-pancake-printer">
            <img class="img-responsive" src="assets/images/porfolioPic/printcakes.jpg" alt="">
        </a>
        <h3>
            <a href="https://devpost.com/software/printcakes-pancake-printer">PrintCakes</a>
        </h3>
        <p>A Hackathon project at MHacks 2015. After drawing an image on the computer, the printer will print and cook your pancake. Why? Why not?</p>
    </div>
    <div class="col-md-4 portfolio-item">
        <a href="https://uoftextbookexchange.timothylock.ca">
            <img class="img-responsive" src="assets/images/porfolioPic/uoftextbook.png" alt="">
        </a>
        <h3>
            <a href="https://uoftextbookexchange.timothylock.ca">UofTextbook</a>
        </h3>
        <p>A site that was made in a web programming course. Supports logins, posting, accepting, comments, emailing, signup, etc. <a href="https://uoftextbookexchange.timothylock.ca">Demo (user: testuser, pass: testpassword)</a> Admin: user1@example.com Pass: password</p>
    </div>
</div>

<hr>

<!-- Footer -->
<?php require 'assets/footer.php'; ?>

<!-- oMG itz G00gle Tr@ckingggg -->
<script>
    (function (i, s, o, g, r, a, m) {
        i["GoogleAnalyticsObject"] = r;
        i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
        a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, "script", "https://www.google-analytics.com/analytics.js", "ga");

    ga("create", "UA-82271632-1", "auto");
    ga("send", "pageview");

</script>

</body>
</html>
