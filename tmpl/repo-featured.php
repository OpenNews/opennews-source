<?php
$rootpath = $_SERVER['DOCUMENT_ROOT'];
$criticalcss = "critical-landing.css";
$current_page = "community";
?>
<!DOCTYPE html>
<!--[if IE]><![endif]-->
<!--[if lt IE 9]>  <html class="ie oldie" lang="en"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<head>
<meta charset="utf-8" />

<title>Elex, a repo on SOURCE</title>

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
                <p class="hed-label">Featured Code</p>

                <h1 class="page-title-lead">Elex</h1>

                <div class="mod main-lead">
                    <p>Elex is a command-line tool that gets election results from the Associated Press Election API v2.0. It was made by Jeremy Bowers and David Eads at the New York Times and NPR.</p>

                    <p>It can make your life better by taking care of results-reporting plumbing and letting you compete on the interesting stuff. Elex is pretty easy to use as long as you have access to AP results.</p>
                </div><!-- /end .mod.main-lead -->

                <ul class="mod repo-meta">
                    <li>
                        <a href="#">Code repo</a>
                    </li>
                    <li>
                        <a href="#">Demo</a>
                    </li>
                    <li>
                        <span>Last push: <time datetime="2015-12-05">5 December 2015</time></span>
                    </li>
                </ul><!-- /end .mod.repo-meta -->

                <div class="mod">
                    <h2 class="hed-label">Featured Repos</h2>

                    <ul class="list-promos">
                        <li class="src-promo">
                            <a href="#">
                                <img src="/img/fpo/article-teaser.jpg" alt="" />
                                <h3 class="hed-promo">agate</h3>
                            </a>
                            <ul class="list-tags-short">
                                <li><a class="tag" href="#">data analysis</a></li>
                            </ul><!-- /end .list-tags-short -->
                        </li><!-- /end .src-promo -->
                        <li class="src-promo">
                            <a href="#">
                                <img src="/img/default@1x.png" srcset="/img/default@2x.png 2x" alt="" />
                                <h3 class="hed-promo">Aufbau</h3>
                            </a>

                            <ul class="list-tags-short">
                                <li><a class="tag" href="#">timelines</a></li>
                                <li><a class="tag" href="#">javascript</a></li>
                            </ul><!-- /end .list-tags-short -->
                        </li><!-- /end .src-promo -->
                        <li class="src-promo">
                            <a href="#">
                                <img src="/img/fpo/article-teaser.jpg" alt="" />
                                <h3 class="hed-promo">Tik Tok</h3>
                            </a>

                            <ul class="list-tags-short">
                                <li><a class="tag" href="#">django</a></li>
                                <li><a class="tag" href="#">javascript</a></li>
                                <li><a class="tag" href="#">svg</a></li>
                                <li><a class="tag" href="#">teens</a></li>
                            </ul><!-- /end .list-tags-short -->
                        </li><!-- /end .src-promo -->
                    </ul><!-- /end .list-promos -->

                    <p class="cta-primary"><a class="link-cta" href="#">See more</a></p>
                </div><!-- /end .mod -->

                <div class="mod">
                    <h2 class="hed-label">Explore All Code</h2>

                    <ul class="list-topics">
                        <li class="topic">
                            <h3 class="hed-topic">Culture</h3>
                            <ul class="list-compact">
                                <li><a href="#">bunch of</a>,</li>
                                <li><a href="#">comma-separated</a>,</li>
                                <li><a href="#">repos</a>,</li>
                                <li><a href="#">code links here</a>,</li>
                                <li><a href="#">bunch of</a>,</li>
                                <li><a href="#">comma-separate</a></li>
                            </ul>
                        </li><!-- /end .topic -->
                        <li class="topic">
                            <h3 class="hed-topic">Data Viz</h3>
                            <ul class="list-compact">
                                <li><a href="#">bunch of</a>,</li>
                                <li><a href="#">comma-separated</a>,</li>
                                <li><a href="#">repos</a>,</li>
                                <li><a href="#">code links here</a></li>
                            </ul><!-- /end .list-compact -->
                        </li><!-- /end .topic -->
                        <li class="topic">
                            <h3 class="hed-topic">Mapping</h3>
                            <ul class="list-compact">
                                <li><a href="#">bunch of</a>,</li>
                                <li><a href="#">comma-separated</a>,</li>
                                <li><a href="#">repos</a>,</li>
                                <li><a href="#">code links here</a>,</li>
                                <li><a href="#">bunch of</a>,</li>
                                <li><a href="#">comma-separate</a></li>
                            </ul><!-- /end .list-compact -->
                        </li><!-- /end .topic -->
                        <li class="topic">
                            <h3 class="hed-topic">Mapping</h3>
                            <ul class="list-compact">
                                <li><a href="#">bunch of</a>,</li>
                                <li><a href="#">comma-separated</a>,</li>
                                <li><a href="#">repos</a>,</li>
                                <li><a href="#">code links here</a>,</li>
                                <li><a href="#">bunch of</a>,</li>
                                <li><a href="#">comma-separate</a></li>
                            </ul><!-- /end .list-compact -->
                        </li><!-- /end .topic -->
                        <li class="topic">
                            <h3 class="hed-topic">Mobile</h3>
                            <ul class="list-compact">
                                <li><a href="#">bunch of</a>,</li>
                                <li><a href="#">comma-separated</a>,</li>
                                <li><a href="#">repos</a>,</li>
                                <li><a href="#">code links here</a></li>
                            </ul><!-- /end .list-compact -->
                        </li><!-- /end .topic -->
                        <li class="topic">
                            <h3 class="hed-topic">Scraping</h3>
                            <ul class="list-compact">
                                <li><a href="#">bunch of</a>,</li>
                                <li><a href="#">comma-separated</a>,</li>
                                <li><a href="#">repos</a>,</li>
                                <li><a href="#">code links here</a>,</li>
                                <li><a href="#">bunch of</a>,</li>
                                <li><a href="#">comma-separate</a></li>
                            </ul><!-- /end .list-compact -->
                        </li><!-- /end .topic -->
                        <li class="topic">
                            <h3 class="hed-topic">Culture</h3>
                            <ul class="list-compact">
                                <li><a href="#">bunch of</a>,</li>
                                <li><a href="#">comma-separated</a>,</li>
                                <li><a href="#">repos</a>,</li>
                                <li><a href="#">code links here</a>,</li>
                                <li><a href="#">bunch of</a>,</li>
                                <li><a href="#">comma-separate</a></li>
                            </ul>
                        </li><!-- /end .topic -->
                        <li class="topic">
                            <h3 class="hed-topic">Data Viz</h3>
                            <ul class="list-compact">
                                <li><a href="#">bunch of</a>,</li>
                                <li><a href="#">comma-separated</a>,</li>
                                <li><a href="#">repos</a>,</li>
                                <li><a href="#">code links here</a></li>
                            </ul><!-- /end .list-compact -->
                        </li><!-- /end .topic -->
                        <li class="topic">
                            <h3 class="hed-topic">Mapping</h3>
                            <ul class="list-compact">
                                <li><a href="#">bunch of</a>,</li>
                                <li><a href="#">comma-separated</a>,</li>
                                <li><a href="#">repos</a>,</li>
                                <li><a href="#">code links here</a>,</li>
                                <li><a href="#">bunch of</a>,</li>
                                <li><a href="#">comma-separate</a></li>
                            </ul><!-- /end .list-compact -->
                        </li><!-- /end .topic -->
                        <li class="topic">
                            <h3 class="hed-topic">Mapping</h3>
                            <ul class="list-compact">
                                <li><a href="#">bunch of</a>,</li>
                                <li><a href="#">comma-separated</a>,</li>
                                <li><a href="#">repos</a>,</li>
                                <li><a href="#">code links here</a>,</li>
                                <li><a href="#">bunch of</a>,</li>
                                <li><a href="#">comma-separate</a></li>
                            </ul><!-- /end .list-compact -->
                        </li><!-- /end .topic -->
                        <li class="topic">
                            <h3 class="hed-topic">Mobile</h3>
                            <ul class="list-compact">
                                <li><a href="#">bunch of</a>,</li>
                                <li><a href="#">comma-separated</a>,</li>
                                <li><a href="#">repos</a>,</li>
                                <li><a href="#">code links here</a></li>
                            </ul><!-- /end .list-compact -->
                        </li><!-- /end .topic -->
                    </ul><!-- /end .list-topics -->
                </div><!-- /end .mod -->
            </div><!-- /end .group.p-more -->

            <div class="content-aside">
                <div class="mod aside-lead">
                    <h2 class="hed-label">Filed Under</h2>

                    <ul class="list-tags">
                        <li><a class="tag" href="#">javascript</a></li>
                        <li><a class="tag" href="#">data</a></li>
                        <li><a class="tag" href="#">onboarding</a></li>
                        <li><a class="tag" href="#">work</a></li>
                        <li><a class="tag" href="#">survey</a></li>
                        <li><a class="tag" href="#">hashtags</a></li>
                        <li><a class="tag" href="#">teens</a></li>
                    </ul><!-- /end .list-tags -->

                </div><!-- /end .mod.aside-lead -->

                <div class="mod">
                    <h2 class="hed-label">Newest Repos</h2>

                    <ol class="list-recently">
                        <li class="item-recent">
                            <h3 class="hed-recent"><a href="#">Stat Index</a></h3>

                            <ul>
                                <li><a class="icon-profile" href="#">Tiff Fehr</a></li>
                                <li><a class="icon-company" href="#">The New York Times</a></li>
                            </ul>
                        </li><!-- /end .item-recent -->
                        <li class="item-recent">
                            <h3 class="hed-recent"><a href="#">Narrative Charts</a></h3>

                            <ul>
                                <li><a class="icon-profile" href="#">Simon Elvery</a></li>
                                <li><a class="icon-company" href="#">Australian Broadcasting Corporation</a></li>
                            </ul>
                        </li><!-- /end .item-recent -->
                        <li class="item-recent">
                            <h3 class="hed-recent"><a href="#">Elex</a></h3>

                            <ul>
                                <li><a class="icon-profile" href="#">Simon Elvery</a></li>
                                <li><a class="icon-company" href="#">Australian Broadcasting Corporation</a></li>
                            </ul>
                        </li><!-- /end .item-recent -->
                        <li class="item-recent">
                            <h3 class="hed-recent"><a href="#">Stat Index</a></h3>

                            <ul>
                                <li><a class="icon-profile" href="#">Tiff Fehr</a></li>
                                <li><a class="icon-company" href="#">The New York Times</a></li>
                            </ul>
                        </li><!-- /end .item-recent -->
                        <li class="item-recent">
                            <h3 class="hed-recent"><a href="#">Narrative Charts</a></h3>

                            <ul>
                                <li><a class="icon-profile" href="#">Simon Elvery</a></li>
                                <li><a class="icon-company" href="#">Australian Broadcasting Corporation</a></li>
                            </ul>
                        </li><!-- /end .item-recent -->
                        <li class="item-recent">
                            <h3 class="hed-recent"><a href="#">Elex</a></h3>

                            <ul>
                                <li><a class="icon-profile" href="#">Simon Elvery</a></li>
                                <li><a class="icon-company" href="#">Australian Broadcasting Corporation</a></li>
                            </ul>
                        </li><!-- /end .item-recent -->
                    </ol><!-- /end .list-recently -->

                    <p><a class="link-cta" href="#">See all repos</a></p>
                </div>
            </div><!-- /end .group-alt.p-less -->

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