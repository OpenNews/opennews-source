<?php
$rootpath = $_SERVER['DOCUMENT_ROOT'];
$criticalcss = "critical-content.css";
$current_page = "community";
?>
<!DOCTYPE html>
<!--[if IE]><![endif]-->
<!--[if lte IE 9]>  <html class="ie oldie" lang="en"> <![endif]-->
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

<body>

<div class="page">

    <?php
    include($rootpath . "/inc/site-header.php");
    ?>

    <main>
        <div class="page-main">

            <div class="content-main">

                <a class="hed-label" href="#">People</a>

                <div class="profile profile-lead h-card">
                    <h1 class="page-title-lead">
                        <img class="profile-photo u-photo" src="/img/avatar.jpg" alt="" />
                        <span class="p-name">Latoya Peterson</span>
                    </h1>

                    <h2 class="page-title-sub"><a class="p-org has-icon icon-company" href="#">ESPN</a></h2>

                    <div class="mod main-lead profile-bio">
                        <p>I'd rather be a cyborg than a goddess. (But why choose?) Always: @Racialicious. Latest: Deputy Editor, Digital Innovation for @ESPN 's @TheUndefeated.</p>

                        <p><a class="link-cta" href="#">Submit profile updates or corrections</a></p>
                    </div><!-- /end .mod.main-lead.profile-bio -->

                    <ul class="profile-links">
                        <li><a class="has-icon icon-github" href="#">GitHub</a></li>
                        <li><a class="has-icon icon-twitter-alt" href="https://twitter.com/LatoyaPeterson">@LatoyaPeterson</a></li>
                        <li><a class="has-icon icon-link u-url" href="http://latoyapeterson.com ">Visit website</a></li>
                    </ul>
                </div><!-- /end .profile-person -->

                <div class="mod">
                    <h2 class="hed-label">Latoya’s work on Source</h2>

                    <h3 class="hed-sub">Code</h3>

                    <ol class="list">
                        <li>
                            <a class="has-icon icon-code" href="#">Lunchbox</a>
                        </li>
                    </ol>

                    <h3 class="hed-sub">Projects</h3>

                    <ol class="list">
                        <li>
                            <a class="has-icon icon-doc" href="#">Mapping Inspiration: A Q&amp;A with Latoya Peterson</a>
                        </li>
                        <li>
                            <a class="has-icon icon-doc" href="#">SRCCON: How Not to Skew Data with Statistics</a>
                        </li>
                        <li>
                            <a class="has-icon icon-doc" href="#">Meet KeyBlur and America’s Slow Lane</a>
                        </li>
                    </ol>

                    <h3 class="hed-sub">Articles by Latoya</h3>

                    <ol class="list-articles">
                        <li>
                            <a href="#">
                                <img src="/img/fpo/article-teaser.jpg" alt="" />
                                <h3 class="hed-article-title">Just One Thing: A Year in Review, Part 2</h3>
                                <h4 class="hed-article-subhed">Appreciation of usefulness and bar-raising at the end of a long, complicated year</h4>

                                <div class="summary">
                                    <p>As we did last year, we’ve asked a couple of dozen people from all around the news-nerd community to tell us about one thing—article, feature, app, tool, or something else entirely—that they loved in 2015. This week, we’re publishing their responses, from interactives to project management software.</p>
                                </div><!-- /end .summary -->
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="/img/fpo/article-teaser.jpg" alt="" />
                                <h3 class="hed-article-title">Mapping Inspiration: A Q&amp;A with Latoya Peterson</h3>
                                <h4 class="hed-article-subhed">How Peterson works with Fusion’s interactive team to make beautiful things happen</h4>
                                <div class="summary">
                                    <p>Latoya Peterson creates all kinds of groundbreaking digital work with Fusion (including an incredible documentary series, Girl Gamers, which just launched). We spoke with Peterson about her Mental Map project, an interactive series that traces and celebrates creative roots. The first, released this spring, featured artist and illustrator Carl Jones. The next one, with Alexis Ohanian of Reddit, launched today. <span class="link-cta">Read more</span></p>
                                </div>
                            </a>
                        </li>
                    </ol>
                </div><!-- /end .mod -->
            </div><!-- /end .content-aside -->

            <div class="content-aside">
                <div class="mod">
                    <h2 class="hed-label">New Source Job Listings</h2>

                    <ol class="list-recently">
                        <li class="item-recent">
                            <h3 class="hed-aside"><a href="#">Principal Software Engineer</a></h3>

                            <p><a class="has-icon icon-company" href="#">BBC News</a></p>
                            </ul>
                        </li><!-- /end .item-recent -->
                        <li class="item-recent">
                            <h3 class="hed-aside"><a href="#">Newsroom Developer</a></h3>

                            <p><a class="has-icon icon-company" href="#">The Financial Times</a></p>
                        </li><!-- /end .item-recent -->
                    </ol><!-- /end .list-recently -->

                    <p><a class="link-cta" href="#">See all jobs</a></p>
                </div><!-- /end .mod -->

                <div class="mod">
                    <h2 class="hed-label">Recently Added Code Repos</h2>

                    <ol class="list-recently">
                        <li class="item-recent">
                            <h3 class="hed-aside"><a href="#">Stat Index</a></h3>

                            <ul>
                                <li><a class="has-icon icon-profile" href="#">Tiff Fehr</a></li>
                                <li><a class="has-icon icon-company" href="#">The New York Times</a></li>
                            </ul>
                        </li><!-- /end .item-recent -->
                        <li class="item-recent">
                            <h3 class="hed-aside"><a href="#">Narrative Charts</a></h3>

                            <ul>
                                <li><a class="has-icon icon-profile" href="#">Simon Elvery</a></li>
                                <li><a class="has-icon icon-company" href="#">Australian Broadcasting Corporation</a></li>
                            </ul>
                        </li><!-- /end .item-recent -->
                        <li class="item-recent">
                            <h3 class="hed-aside"><a href="#">Elex</a></h3>

                            <ul>
                                <li><a class="has-icon icon-profile" href="#">Simon Elvery</a></li>
                                <li><a class="has-icon icon-company" href="#">Australian Broadcasting Corporation</a></li>
                            </ul>
                        </li><!-- /end .item-recent -->
                    </ol><!-- /end .list-recently -->

                    <p><a class="link-cta" href="#">See all repos</a></p>
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