<?php
$submitted = false;
if (!empty($_POST["message"])) {
    $submitted = true;
    if (!empty($_POST["fullname"]) && !empty($_POST["email"]) && !empty($_POST["message"])) {
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

        $msg = "Bericht van:" . $_POST["fullname"] . "<br>";
        $msg .= "Email:" . $_POST["email"] . "<br><br>";
        $msg .= "Bericht:<br>" . $_POST["message"];

        mail("info@designosource.be", "Nieuwe bericht", $msg, $headers);

        $success = true;
    } else {
        $success = false;
    }
}
?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Designosource 7.0 :: Contact</title>

    <link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <meta name="viewport" content="width=device-width">
    <meta property="og:url" content="https://designosource.be">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Designosource 7.0">
    <meta property="og:description"
          content="Designosource is een creative solution agency, waar een team van ambitieuze Thomas More studenten aan het roer staat. Als toptalent van Interactive Multimedia Design, is niets te vergezocht voor ons. Barstensvol jong talent en jong geweld, bieden wij standaard out-of-the-box denken aan, en volgen dat op met strakke resultaten.">
    <meta property="og:image" content="https://designosource.be/assets/images/og/logo.png">

    <meta name="description"
          content="Designosource is een creative solution agency, waar een team van ambitieuze Thomas More studenten aan het roer staat. Als toptalent van Interactive Multimedia Design, is niets te vergezocht voor ons. Barstensvol jong talent en jong geweld, bieden wij standaard out-of-the-box denken aan, en volgen dat op met strakke resultaten.">
    <meta name="keywords" content="Designosource,Designosource 7,creative angency,webdesig,design">
    <meta name="author" content="Designosource">
    <meta name="subject" content="Designosource 7">
    <meta name="copyright" content="Designosource 7">
    <meta name="revised" content="Sunday, Novembeter 23th, 2017, 13:14 pm">
    <meta name="designer" content="Designosource">
    <meta name="reply-to" content="info@designosource.com">
    <meta name="owner" content="Designosource">
    <meta name="url" content="http://www.designosource.be">
    <meta name="identifier-URL" content="http://www.designosource.be">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@designosource">
    <meta name="twitter:creator" content="@designosource">
    <meta name="twitter:title" content="Designosource">
    <meta name="twitter:description"
          content="Designosource is een creative solution agency, waar een team van ambitieuze Thomas More studenten aan het roer staat. Als toptalent van Interactive Multimedia Design, is niets te vergezocht voor ons. Barstensvol jong talent en jong geweld, bieden wij standaard out-of-the-box denken aan, en volgen dat op met strakke resultaten.">
    <meta name="twitter:image" content="https://designosource.be/assets/images/og/logo.png">
    <script src="assets/js/jquery-3.2.1.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="https://use.fontawesome.com/cee955a829.js"></script>
    <link rel="stylesheet" href="assets/css/reset.css">
    <link rel="stylesheet" href="assets/css/grid12.css">
    <link rel="stylesheet" href="assets/css/main.css">
</head>

<body>
<nav>
    <div class="container">
        <div class="nav-mobile-icon">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>
        <ul class="nav-left">
            <li class="logo">
                <a href="index.php"><img src="assets/images/logo.svg" alt="logo_designosource">
                    <span>DESIGNOSOURCE</span></a>
            </li>
        </ul>
        <ul class="nav-right">
            <li><a href="projects.php">PROJECTS</a></li>
            <li><a href="about.php">ABOUT</a></li>
            <li><a href="contact.php">CONTACT</a></li>
        </ul>
    </div>
</nav>
<div class="content">
    <div class="container">
        <h1 class="title"><span class="accent">SHOOT</span> US A MESSAGE</h1>
        <?php
        if ($submitted) {
            if ($success) {
                ?>
                <div class="success">
                    Bedankt voor uw bericht.
                </div>
                <?php
            } else {
                ?>
                <div class="error">
                    Vul alle velden in a.u.b.
                </div>
                <?php
            }
        }
        ?>
        <form action="contact.php" method="POST">
            <div class="form-group">
                <label for="fullname">Full name</label>
                <input type="text" id="fullname" name="fullname" required="required">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required="required">
            </div>
            <div class="form-group">
                <label for="message">Message</label>
                <textarea name="message" id="message" required="required"></textarea>
            </div>
            <button type="submit" class="button button--red"><span>send</span> <img src="assets/images/arrow-white.png"
                                                                                    alt="arrow"></button>
        </form>
    </div>
</div>
<div class="footer">
    <div class="footer container">
        <div class="row footer-row">
            <div class="social col-xs-12">
                <img class="wave-footer" src="assets/images/wave-footer.png" alt="divider_footer">

                <p>FOLLOW US!</p>
                <ul class="social-list">
                    <li class="social-item"><a href="http://twitter.com/designosource" target="_blank"><i
                                    class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li class="social-item"><a href="https://www.facebook.com/Designosource/" target="_blank"><i
                                    class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li class="social-item"><a href="https://www.linkedin.com/company/2965064/" target="_blank"><i
                                    class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                    <li class="social-item"><a href="https://www.instagram.com/designosource/" target="_blank"><i
                                    class="fa fa-instagram" aria-hidden="true"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="row footer-row">
            <div class="copyright col-xs-12">
                <p class="copyright-designosource">&#169; 2017 - DESIGNOSOURCE</p>
                <div class="thomasmore">
                    <a class="tm-logo" href="https://www.thomasmore.be"></a>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
