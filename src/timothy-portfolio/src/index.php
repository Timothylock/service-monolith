<?php
function getAge($then)
{
    $d1 = new DateTime(date("Y-m-d"));
    $d2 = new DateTime($then);

    $diff = $d2->diff($d1);

    return $diff->y;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Welcome - Timothy Lock</title>
    <?php require 'assets/head.php'; ?>
</head>
<body>
<!-- Navbar -->
<?php require 'assets/navbar.php'; ?>

<!-- Content -->
<div class="container body-content">
    <div class="row top-buffer">
        <div class="col-md-12">
            <h1>Home</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <h2>Who are you?</h2>
            <p>I am enrolled in the Computer Science program at the <a href="https://www.utoronto.ca/">University of Toronto</a>. I am currently working as an associate engineer at
                        <a href="https://www.wattpad.com/timmy">Wattpad</a>! I'm also a programming / robotics instructor at
                        <a href="https://www.logicfusion.ca/">LogicFusion</a>.
            <br><br>
            <p>I have been a part of <a href="http://www.utat.ca">University of Toronto Aerospace Team</a> and recently as a division lead for over <?php echo getAge('2015-05-16'); ?> years! I have worked on many
                quirky hardware projects including a <a href="http://timothylock.ca/portfolio.php">pancake printer</a> and a <a href="http://timothylock.ca/portfolio.php">WiiU controlled drone</a>! I also play guitar and love climbing.</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <h2>Code examples or it didn't happen</h2>
            <p>You can see examples of my code on my <a href="portfolio.php">portfolio page</a> as well as my <a
                        href="https://github.com/Timothylock">GitHub</a>.</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <h2>Cool stuff, but I still need your resume</h2>
            <p><a href="timothy_lock_resume.pdf">Of course</a>!</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <h2>Wow! You got me excited. How can I connect with you?</h2>
            <p> <script type="text/javascript">document.write('<' + 'a' + ' ' + 'h' + 'r' + 'e' + 'f' + '=' + "'" + 'm' + 'a' + 'i' + 'l' + 't' + 'o' + ':' + 'm' + 'e' + '@' + 't' + 'i' + 'm' + 'o' + 't' + 'h' + 'y' + 'l' + 'o' + 'c' + 'k' + '.' + 'c' + 'a' + "'" + '>' + 'm' + 'e' + '@' + 't' + 'i' + 'm' + 'o' + 't' + 'h' + 'y' + 'l' + 'o' + 'c' + 'k' + '.' + 'c' + 'a' + '<' + '/' + 'a' + '>');</script></p>
            <p><a href="https://blog.timothylock.ca">Blog</a></p>
            <p><a href="https://linkedin.ca/timothylock">Linkedin</a></p>
            <p><a href="https://instagram.com/itstimofee">Instagram</a></p>
        </div>
    </div>
</div>

<!-- Footer -->
<footer class="footer">
    <p class="text-muted pull-left" style="margin-top: 25px; margin-left: 25px;">Copyright © <?php echo (date("Y")) ?> Timothy Lock</p>
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
