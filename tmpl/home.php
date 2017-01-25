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

            <div class="content-main">

                <div class="promo-lead">
                    
                </div>

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
                            <span class="label-promo">In Source Guides</span>
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
                            <span class="label-promo">In Source Jobs</span>
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
                    <li class="src-promo">
                        <a href="#">
                            <img src="/img/fpo/article-teaser.jpg" alt="" />
                            <h3 class="hed-promo">What I Learned from Researching Newsroom On-boarding and Off-Boarding Processes</h3>
                        </a>
                    </li><!-- /end .src-promo -->
                </ul><!-- /end .list-promos -->

            </div><!-- /end .content-aside -->

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