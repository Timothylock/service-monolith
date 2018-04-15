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
    <title>404 - Timothy Lock</title>
    <?php require 'assets/head.php'; ?>
</head>
<body>
<!-- Navbar -->
<?php require 'assets/navbar.php'; ?>

<!-- Content -->
<div class="container body-content">

<div class="row top-buffer">
    <h1>Oh No! My panda ate the page again</h1>
		<br>
		<img src="assets/images/404.jpg" alt="404 not found" style="display: block; max-width: 80%; padding-top: 20px; margin-left: auto; margin-right: auto;z-index: 0;">
		<br>
		<p>Something, somewhere must have gone horribly wrong. Please check the spelling of the URL that you are trying to reach. If the problem still exists, let me know!</p>
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
