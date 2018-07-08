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
<?php //require 'assets/navbar.php'; ?>
<!-- temporarily disabled -->

<!-- Content -->
<div class="container body-content">
    <div class="row">
        <div class="col-md-12">
            <h1>Timothy Lock</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <h2>Who are you?</h2>
            <p>I am enrolled in the Computer Science program at the <a href="https://www.utoronto.ca/">University of Toronto</a>. </p>
            <p>I am currently working as an associate engineer at <a href="https://www.wattpad.com/timmy">Wattpad</a></p>
            <p>I am also a programming / robotics instructor at <a href="https://www.logicfusion.ca/">LogicFusion</a>.</p>
            <p>I have been a part of <a href="http://www.utat.ca">University of Toronto Aerospace Team</a> and recently as a division lead for over <?php echo getAge('2015-05-16'); ?> years.</p>
            <p>I have worked on many quirky hardware projects including a <a href="http://timothylock.ca/portfolio.php">pancake printer</a> and a <a href="http://timothylock.ca/portfolio.php">WiiU controlled drone</a>.</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <h2>Examples or it didn't happen</h2>
            <p>I write <a href="https://github.com/Timothylock">code</a> and some <a href="https://twitter.com/timothyklock">idiotic comments</a> about things I see.</p>
            <p>I sometimes write <a href="https://blog.timothylock.cs">longer idiotic comments</a> too.</p>
            <p>I made some cool <a href="portfolio.php">projects</a> as well.</p>
            <p>I have a <a href="timothy_lock_resume.pdf">résumé</a> if you're into that sort of thing.</p>
        </div>
    </div>
</div>

<!-- Footer -->
<?php require 'assets/footer.php'; ?>
</body>
</html>
