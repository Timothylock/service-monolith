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
            <p>I am a <?php echo getAge('1996-05-16'); ?> year old software developer currently enrolled in the Computer Science program at the <a
                        href="https://www.utoronto.ca/">University of Toronto</a>. I took up a passion in
                computers/electronics for over <?php echo getAge('2006-05-16'); ?> years and programming/IoT for
                over <?php echo getAge('2010-05-16'); ?> years.</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <h2>Having job experience is important. Do you have any?</h2>
            <p>I am currently working as an associate engineer at <a href="https://www.wattpad.com/timmy">Wattpad</a>! I'm
                also a programming / robotics instructor at <a href="https://www.logicfusion.ca/">LogicFusion</a>.</p>
            <br>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <h2>What do you do outside of school or work?</h2>
            <p>I have been a part of <a href="http://www.utat.ca">University of Toronto Aerospace Team</a> as subdivison lead as well as a division lead for over <?php echo getAge('2015-05-16'); ?> years! I also work on many
                quirky hardware projects including a <a href="http://timothylock.ca/portfolio.php">pancake printer</a> and a <a
                        href="http://timothylock.ca/portfolio.php">WiiU controlled drone</a>! You can follow my
                adventures on my
                <a href="https://blog.timothylock.ca">blog</a>. </p>
            <p>I also play guitar, biking, as well as climbing!</p>
            <br>
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
            <p>Of course! <a href="timothy_lock_resume.pdf"> Here it is</a>.</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <h2>Wow! You got me excited. How can I contact you?</h2>
            <p>You can shoot me an
                <script type="text/javascript">document.write('<' + 'a' + ' ' + 'h' + 'r' + 'e' + 'f' + '=' + "'" + 'm' + 'a' + 'i' + 'l' + 't' + 'o' + ':' + 'm' + 'e' + '@' + 't' + 'i' + 'm' + 'o' + 't' + 'h' + 'y' + 'l' + 'o' + 'c' + 'k' + '.' + 'c' + 'a' + "'" + '>' + 'e' + 'm' + 'a' + 'i' + 'l' + '<' + '/' + 'a' + '>');</script>
                (<script type="text/javascript">document.write('m' + 'e' + '@' + 't' + 'i' + 'm' + 'o' + 't' + 'h' + 'y' + 'l' + 'o' + 'c' + 'k' + '.' + 'c' + 'a');</script>).
            </p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <h2>Great, great. Now the most important question of all - tabs or spaces?</h2>
            <p>Tabs! (but I don't believe in liking just one type... so spaces are cool too - i guess)</p>
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
