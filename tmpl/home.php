<?php
$rootpath = $_SERVER['DOCUMENT_ROOT'];
$criticalcss = "critical-home.css";
?>
<!DOCTYPE html>
<!--[if IE]><![endif]-->
<!--[if lt IE 9]>  <html class="ie oldie" lang="en"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<head>
<meta charset="utf-8" />

<title>Welcome to SOURCE</title>

<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<meta name="grunticon" content="/dist/svg/" />
<meta name="fullJS" content="/dist/js/main.js" />
<meta name="fullCSS" content="/dist/css/main.css" />

<script><?php include( $rootpath . "/dist/js/initial.js" ); ?></script>

<?php
if ( $_COOKIE[ "fullCSS" ] == "loaded" || $_GET[ "static" ] == "true" ) {
?>
<link href="/dist/css/main.css" rel="stylesheet" />
<?php
} else {
    if ( isset( $criticalcss ) ) {
?>
<style><?php include( $rootpath . "/dist/css/" . $criticalcss ); ?></style>
<?php
    } else {
?>
<link href="/dist/css/main.css" rel="stylesheet" />
<?php
    }
}
?>

<script>document.createElement( "picture" );</script>
<script src="/dist/js/lib/picturefill.js" async></script>

<noscript><link href="/dist/svg/icons.fallback.css" rel="stylesheet" /></noscript>

</head>

<body class="tmpl-home">

<div class="page">

    <?php
    include($rootpath . "/inc/site-header.php");
    ?>

    <main>
        <div class="page-main">

            <div class="promo-lead">
                <a class="promo-pic" href="#">
                    <img src="/img/fpo/promo-lead.jpg" alt="" />
                </a>
                <div class="promo-main">
                    <p class="hed-label">The Latest</p>

                    <h1 class="hed-promo-lead"><a href="#">What I Learned from Researching Newsroom On-boarding and Off-Boarding Processes</a></h1>

                    <h2 class="hed-promo-subhead">A survey of 221 newsrooms showed me that there’s lots of work to do. <a class="link-cta" href="#">Read more</a></h2>

                    <p class="promo-byline">
                        By <a href="#">Sandhya Kambhampati</a>, <a href="#">Daisy Contreras</a>, <a href="#">Grace Donnelly</a>, <a href="#">Lorraine Forte</a>, <a href="#">Alex Fryer</a>, <a href="#">Jonathan Gibby</a>, <a href="#">Max Herman</a>, <a href="#">Alex Hernandez</a>, <a href="#">Emily Jan</a>, <a href="#">Matt Kiefer</a>, <a href="#">Ryan Nagle</a>, <a href="#">Jonah Newman</a>, <a href="#">Stacey Rupolo</a>, <a href="#">Libby Sander</a>, <a href="#">Adam Schweigert</a>, <a href="#">Julia Smith</a>, <a href="#">Susan Smith Richardson</a>
                    </p>
                </div><!-- /end .promo-main -->
            </div><!-- /end .promo-lead -->

            <div class="promo-src-about icon-dots-white">
                <p>Source amplifies the impact of journalism code and the community of developers, designers, journalists, and editors who make it.</p>

                <p><a href="#">Learn more about us</a>, and <a href="#">contribute your work</a>.</p>
            </div><!-- /end .promo-src-about -->

            <ul class="list-promos">
                <li class="src-promo">
                    <a href="#">
                        <img src="/img/fpo/article-teaser.jpg" alt="" />
                        <h3 class="hed-promo">How NPR Fact-Checks The Debate, Live</h3>
                    </a>
                </li><!-- /end .src-promo -->
                <li class="src-promo">
                    <a href="#">
                        <img src="/img/fpo/article-teaser.jpg" alt="" />
                        <h3 class="hed-promo">Event Round-Up, Oct 17</h3>
                    </a>
                </li><!-- /end .src-promo -->
                <li class="src-promo">
                    <a href="#">
                        <img src="/img/fpo/article-teaser.jpg" alt="" />
                        <span class="label-promo">Source Guides:</span>
                        <h3 class="hed-promo">What I Learned from Researching Newsroom On-boarding and Off-Boarding Processes</h3>
                    </a>
                </li><!-- /end .src-promo -->
                <li class="src-promo">
                    <a href="#">
                        <img src="/img/fpo/article-teaser.jpg" alt="" />
                        <h3 class="hed-promo">How NPR Fact-Checks The Debate, Live</h3>
                    </a>
                </li><!-- /end .src-promo -->
                <li class="src-promo">
                    <a href="#">
                        <img src="/img/fpo/article-teaser.jpg" alt="" />
                        <h3 class="hed-promo">Event Round-Up, Oct 17</h3>
                    </a>
                </li><!-- /end .src-promo -->
                <li class="src-promo">
                    <a href="#">
                        <img src="/img/fpo/article-teaser.jpg" alt="" />
                        <span class="label-promo">Source Jobs:</span>
                        <h3 class="hed-promo">What I Learned from Researching Newsroom On-boarding and Off-Boarding Processes</h3>
                    </a>
                </li><!-- /end .src-promo -->
                <li class="src-promo">
                    <a href="#">
                        <img src="/img/fpo/article-teaser.jpg" alt="" />
                        <h3 class="hed-promo">How NPR Fact-Checks The Debate, Live</h3>
                    </a>
                </li><!-- /end .src-promo -->
                <li class="src-promo">
                    <a href="#">
                        <img src="/img/fpo/article-teaser.jpg" alt="" />
                        <h3 class="hed-promo">Event Round-Up, Oct 17</h3>
                    </a>
                </li><!-- /end .src-promo -->
                <li class="src-promo">
                    <a href="#">
                        <img src="/img/fpo/article-teaser.jpg" alt="" />
                        <h3 class="hed-promo">What I Learned from Researching Newsroom On-boarding and Off-Boarding Processes</h3>
                    </a>
                </li><!-- /end .src-promo -->
                <li class="src-promo">
                    <a href="#">
                        <img src="/img/fpo/article-teaser.jpg" alt="" />
                        <h3 class="hed-promo">How NPR Fact-Checks The Debate, Live</h3>
                    </a>
                </li><!-- /end .src-promo -->
                <li class="src-promo">
                    <a href="#">
                        <img src="/img/fpo/article-teaser.jpg" alt="" />
                        <h3 class="hed-promo">Event Round-Up, Oct 17</h3>
                    </a>
                </li><!-- /end .src-promo -->
            </ul><!-- /end .list-promos -->

            <?php include($rootpath . "/inc/site-search.php"); ?>

        </div><!-- /end .page-main -->
    </main>

    <?php include($rootpath . "/inc/site-footer.php"); ?>

</div><!-- /end .page -->

<!-- Anchors used by `aria-describedby` states -->
<div id="wayfinding" class="squelch">
    <span id="current-page">Current page</span>
</div>

</body>
</html>