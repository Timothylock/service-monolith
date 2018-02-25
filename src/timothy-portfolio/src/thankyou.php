<?php header('X-Frame-Options: GOFORIT');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Thank You - Timothy Lock</title>
    <?php require 'assets/head.php'; ?>
</head>
<body>
<!-- Navbar -->
<?php require 'assets/navbar.php'; ?>

<!-- Content -->
<div class="container body-content">
	<div class="row top-buffer">
        <div class="col-md-12">
			<h1>Thank You!</h1>
			<img src="http://timothylock.ca/assets/images/thankyou.jpg" alt="thankyou" style="display: block; max-width: 80%; padding-top: 0px; margin-left: auto; margin-right: auto;z-index: 0;">
			<br>
			<p>Thank you so much for being part of my class! Are you up for a challenge? If so, check out some <a href="http://www.logicfusion.ca/courses/">other courses</a>. Hope to see you again soon! :)
			<br>
			<br>

			<h2>But I still have homework! Where did the homework uploader go?</h2>
			<p>Homework upload has been disabled. It is too late to submit homework. Do not email it to me either as it will not be marked.</p>
			<br>
		</div>
    </div>
</div>

<!-- Footer -->
<footer class="footer">
    <p class="text-muted pull-left" style="margin-top: 25px; margin-left: 25px;">Copyright © 2017 Timothy Lock</p>
    <p class="text-muted pull-right" style="margin-top: 25px; margin-right: 25px;">Designed by <a
                href="http://timothylock.ca">Timothy Lock</a></p>
</footer>

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