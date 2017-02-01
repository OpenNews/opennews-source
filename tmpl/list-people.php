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

<title>People — SOURCE</title>

<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<meta name="grunticon" content="/source/base/static/base/_v2/dist/svg/" />
<meta name="fullJS" content="/source/base/static/base/_v2/dist/js/main.js" />
<meta name="fullCSS" content="/source/base/static/base/_v2/dist/css/main.css" />

<script><?php include( $rootpath . "/source/base/static/base/_v2/dist/js/initial.js" ); ?></script>

<?php
if ( $_COOKIE[ "fullCSS" ] == "loaded" || $_GET[ "static" ] == "true" ) {
?>
<link href="/source/base/static/base/_v2/dist/css/main.css" rel="stylesheet" />
<?php
} else {
    if ( isset( $criticalcss ) ) {
?>
<style><?php include( $rootpath . "/source/base/static/base/_v2/dist/css/" . $criticalcss ); ?></style>
<?php
    } else {
?>
<link href="/source/base/static/base/_v2/dist/css/main.css" rel="stylesheet" />
<?php
    }
}
?>

<script>document.createElement( "picture" );</script>
<script src="/source/base/static/base/_v2/dist/js/lib/picturefill.js" async></script>

<noscript><link href="/source/base/static/base/_v2/dist/svg/icons.fallback.css" rel="stylesheet" /></noscript>

</head>

<body>

<div class="page">

    <?php
    include($rootpath . "/tmpl/inc/site-header.php");
    ?>

    <main>
        <div class="page-main">

            <div class="content-main">
                <h1 class="page-title-lead">People</h1>

                <div class="mod main-lead">
                    <p>The community of developers, designers, and data analysts doing journalism through code.</p>
                </div><!-- /end .mod.main-lead -->
    
                <div class="mod">
                    <h2 class="hed-label">Our Community</h2>

                    <ul class="list-promos">
        
                        <li class="src-promo">
                            <a href="/people/becca-aaronson/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Becca Aaronson">
                    
                                <h3 class="hed-promo">Becca Aaronson</h3>
                                <p class="has-icon icon-company">Texas Tribune</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/brian-abelson/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Brian Abelson">
                    
                                <h3 class="hed-promo">Brian Abelson</h3>
                                <p class="has-icon icon-company">OpenNews</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/spencer-ackerman/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Spencer  Ackerman">
                    
                                <h3 class="hed-promo">Spencer  Ackerman</h3>
                                <p class="has-icon icon-company">The Guardian</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/tara-adiseshan/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Tara Adiseshan">
                    
                                <h3 class="hed-promo">Tara Adiseshan</h3>
                                <p class="has-icon icon-company">OpenNews, The Coral Project</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/vladimir-agafonkin/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Vladimir Agafonkin">
                    
                                <h3 class="hed-promo">Vladimir Agafonkin</h3>
                                <p class="has-icon icon-company"></p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/kamil-ahsan/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Kamil Ahsan">
                    
                                <h3 class="hed-promo">Kamil Ahsan</h3>
                                <p class="has-icon icon-company"></p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/gregor-aisch/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Gregor Aisch">
                    
                                <h3 class="hed-promo">Gregor Aisch</h3>
                                <p class="has-icon icon-company"></p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/peter-aldhous/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Peter Aldhous">
                    
                                <h3 class="hed-promo">Peter Aldhous</h3>
                                <p class="has-icon icon-company">New Scientist</p>
                            </a>
                        </li><!-- /end .src-promo -->

                    </ul><!-- /end .list-promos -->

                    <div class="nav-pages">
                        <nav>
                            <a class="nav icon-prev" href="#">Previous page</a>

                            <ol>
                                <li><a href="#"><span class="a11y">Page</span> 1</a></li>
                                <li><a class="is-active" href="#"><span class="a11y">Page</span> 2</a></li>
                                <li><a href="#"><span class="a11y">Page</span> 3</a></li>
                                <li><a href="#"><span class="a11y">Page</span> 4</a></li>
                                <li><a href="#"><span class="a11y">Page</span> 5</a></li>
                                <li>…</li>
                                <li><a href="#"><span class="a11y">Page</span> 12</a></li>
                            </ol>

                            <a class="nav icon-next" href="#">Next page</a>
                        </nav>
                    </div>
                </div><!-- /end .mod -->
            </div>

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

            <?php include($rootpath . "/tmpl/inc/site-search.php"); ?>

        </div><!-- /end .page-main -->
    </main>

    <?php include($rootpath . "/tmpl/inc/site-footer.php"); ?>

</div><!-- /end .page -->

<!-- Anchors used by `aria-describedby` states -->
<div id="wayfinding" class="squelch">
    <span id="current-page">Current page</span>
</div>

</body>
</html>