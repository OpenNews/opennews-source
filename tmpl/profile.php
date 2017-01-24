<?php
$rootpath = $_SERVER['DOCUMENT_ROOT'];
$criticalcss = "critical-content.css";
$current_page = "community";
?>
<!DOCTYPE html>
<!--[if IE]><![endif]-->
<!--[if lt IE 9]>  <html class="ie oldie" lang="en"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<head>
<meta charset="utf-8" />

<title>Latoya Peterson’s profile — SOURCE</title>

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

<body class="tmpl-landing">

<div class="page">

    <?php
    include($rootpath . "/inc/site-header.php");
    ?>

    <main>
        <div class="page-main">

            <div class="content-main">

                <p class="hed-label">People</p>

                <div class="profile-person-lead h-card">

                    <h1 class="page-title-lead">
                        <img class="profile-photo u-photo" src="/img/avatar.jpg" alt="" />
                        <span class="p-name">Latoya Peterson</span>
                    </h1>

                    <h2 class="page-title-sub"><a class="p-org icon-company" href="#">ESPN</a></h2>

                    <div class="mod main-lead">
                        <p>I'd rather be a cyborg than a goddess. (But why choose?) Always: @Racialicious. Latest: Deputy Editor, Digital Innovation for @ESPN 's @TheUndefeated.</p>

                        <p><a class="link-cta" href="#">Submit profile updates or corrections</a></p>
                    </div><!-- /end .mod.main-lead -->

                    <ul class="mod profile-links">
                        <li></li>
                        <li><a class="icon-github" href="#">GitHub</a></li>
                        <li><a class="icon-twitter-alt" href="https://twitter.com/LatoyaPeterson">@LatoyaPeterson</a></li>
                        <li><a class="u-url icon-link" href="http://latoyapeterson.com ">Visit website</a></li>
                    </ul>
                </div><!-- /end .profile-person -->

                <div class="mod">
                    <h2 class="hed-label">Latoya’s work on Source</h2>
                </div><!-- /end .mod -->
            </div><!-- /end .content-aside -->

            <div class="content-aside">
                <div class="mod">
                    <h2 class="hed-label">Recently Added Code Repos</h2>

                    <ol class="list-recently">
                        <li class="item-recent">
                            <h3 class="hed-recent"><a href="#">Stat Index</a></h3>

                            <ul>
                                <li><a class="has-icon icon-profile" href="#">Tiff Fehr</a></li>
                                <li><a class="has-icon icon-company" href="#">The New York Times</a></li>
                            </ul>
                        </li><!-- /end .item-recent -->
                        <li class="item-recent">
                            <h3 class="hed-recent"><a href="#">Narrative Charts</a></h3>

                            <ul>
                                <li><a class="has-icon icon-profile" href="#">Simon Elvery</a></li>
                                <li><a class="has-icon icon-company" href="#">Australian Broadcasting Corporation</a></li>
                            </ul>
                        </li><!-- /end .item-recent -->
                        <li class="item-recent">
                            <h3 class="hed-recent"><a href="#">Elex</a></h3>

                            <ul>
                                <li><a class="has-icon icon-profile" href="#">Simon Elvery</a></li>
                                <li><a class="has-icon icon-company" href="#">Australian Broadcasting Corporation</a></li>
                            </ul>
                        </li><!-- /end .item-recent -->
                        <li class="item-recent">
                            <h3 class="hed-recent"><a href="#">Stat Index</a></h3>

                            <ul>
                                <li><a class="has-icon icon-profile" href="#">Tiff Fehr</a></li>
                                <li><a class="has-icon icon-company" href="#">The New York Times</a></li>
                            </ul>
                        </li><!-- /end .item-recent -->
                        <li class="item-recent">
                            <h3 class="hed-recent"><a href="#">Narrative Charts</a></h3>

                            <ul>
                                <li><a class="has-icon icon-profile" href="#">Simon Elvery</a></li>
                                <li><a class="has-icon icon-company" href="#">Australian Broadcasting Corporation</a></li>
                            </ul>
                        </li><!-- /end .item-recent -->
                        <li class="item-recent">
                            <h3 class="hed-recent"><a href="#">Elex</a></h3>

                            <ul>
                                <li><a class="has-icon icon-profile" href="#">Simon Elvery</a></li>
                                <li><a class="has-icon icon-company" href="#">Australian Broadcasting Corporation</a></li>
                            </ul>
                        </li><!-- /end .item-recent -->
                    </ol><!-- /end .list-recently -->
                </div><!-- /end .mod -->
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