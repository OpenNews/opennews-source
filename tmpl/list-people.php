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
        
                        <li class="src-promo">
                            <a href="/people/emily-alpert-reyes/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Emily Alpert Reyes">
                    
                                <h3 class="hed-promo">Emily Alpert Reyes</h3>
                                <p class="has-icon icon-company">The Los Angeles Times</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/emma-alterman/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Emma Alterman">
                    
                                <h3 class="hed-promo">Emma Alterman</h3>
                                <p class="has-icon icon-company">Periscopic</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/chris-amico/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Chris Amico">
                    
                                <h3 class="hed-promo">Chris Amico</h3>
                                <p class="has-icon icon-company"></p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/dana-amihere/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Dana  Amihere">
                    
                                <h3 class="hed-promo">Dana  Amihere</h3>
                                <p class="has-icon icon-company">The Dallas Morning News</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/luciano-amor/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Luciano Amor">
                    
                                <h3 class="hed-promo">Luciano Amor</h3>
                                <p class="has-icon icon-company"></p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/matt-andrews/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Matt Andrews">
                    
                                <h3 class="hed-promo">Matt Andrews</h3>
                                <p class="has-icon icon-company">The Guardian</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/paul-antonson/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Paul Antonson">
                    
                                <h3 class="hed-promo">Paul Antonson</h3>
                                <p class="has-icon icon-company">The Wall Street Journal</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/douglas-arellanes/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Douglas Arellanes">
                    
                                <h3 class="hed-promo">Douglas Arellanes</h3>
                                <p class="has-icon icon-company">Sourcefabric</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/manuel-aristaran/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Manuel Aristarán">
                    
                                <h3 class="hed-promo">Manuel Aristarán</h3>
                                <p class="has-icon icon-company">La Nación, OpenNews</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/agustin-armendariz/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Agustin Armendariz">
                    
                                <h3 class="hed-promo">Agustin Armendariz</h3>
                                <p class="has-icon icon-company">Reveal</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/gavin-aronsen/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Gavin Aronsen">
                    
                                <h3 class="hed-promo">Gavin Aronsen</h3>
                                <p class="has-icon icon-company">Mother Jones</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/ryan-asher/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Ryan Asher">
                    
                                <h3 class="hed-promo">Ryan Asher</h3>
                                <p class="has-icon icon-company">The Chicago Tribune</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/jeremy-ashkenas/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Jeremy Ashkenas">
                    
                                <h3 class="hed-promo">Jeremy Ashkenas</h3>
                                <p class="has-icon icon-company">DocumentCloud, The New York Times</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/carla-astudillo/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Carla Astudillo">
                    
                                <h3 class="hed-promo">Carla Astudillo</h3>
                                <p class="has-icon icon-company">International Business Times</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/zeynep-heyzen-ates/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Zeynep Heyzen Ateş">
                    
                                <h3 class="hed-promo">Zeynep Heyzen Ateş</h3>
                                <p class="has-icon icon-company"></p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/aliza-aufrichtig/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Aliza Aufrichtig">
                    
                                <h3 class="hed-promo">Aliza Aufrichtig</h3>
                                <p class="has-icon icon-company">The Guardian</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/timna-axel/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Timna Axel">
                    
                                <h3 class="hed-promo">Timna Axel</h3>
                                <p class="has-icon icon-company">City Bureau</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/niran-babalola/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Niran Babalola">
                    
                                <h3 class="hed-promo">Niran Babalola</h3>
                                <p class="has-icon icon-company"></p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/daniel-bachhuber/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Daniel Bachhuber">
                    
                                <h3 class="hed-promo">Daniel Bachhuber</h3>
                                <p class="has-icon icon-company">Fusion</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/sam-bailey/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Sam Bailey">
                    
                                <h3 class="hed-promo">Sam Bailey</h3>
                                <p class="has-icon icon-company">Frontline</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/caryn-baird/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Caryn Baird">
                    
                                <h3 class="hed-promo">Caryn Baird</h3>
                                <p class="has-icon icon-company">Tampa Bay Times</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/james-ball/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="James Ball">
                    
                                <h3 class="hed-promo">James Ball</h3>
                                <p class="has-icon icon-company">The Guardian</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/timothy-c-barmann/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Timothy C. Barmann">
                    
                                <h3 class="hed-promo">Timothy C. Barmann</h3>
                                <p class="has-icon icon-company">Providence Journal</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/chris-barr/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Chris Barr">
                    
                                <h3 class="hed-promo">Chris Barr</h3>
                                <p class="has-icon icon-company"></p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/sandra-barron/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Sandra Barrón">
                    
                                <h3 class="hed-promo">Sandra Barrón</h3>
                                <p class="has-icon icon-company">Civica Digital</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/jason-bartz/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Jason Bartz">
                    
                                <h3 class="hed-promo">Jason Bartz</h3>
                                <p class="has-icon icon-company">The Washington Post</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/kathryn-beaty/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Kathryn Beaty">
                    
                                <h3 class="hed-promo">Kathryn Beaty</h3>
                                <p class="has-icon icon-company">Texas Tribune</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/ana-asnes-becker/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Ana Asnes Becker">
                    
                                <h3 class="hed-promo">Ana Asnes Becker</h3>
                                <p class="has-icon icon-company">The Wall Street Journal</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/michael-behr/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Michael Behr">
                    
                                <h3 class="hed-promo">Michael Behr</h3>
                                <p class="has-icon icon-company">The New York Times</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/christina-bell/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Christina Bell">
                    
                                <h3 class="hed-promo">Christina Bell</h3>
                                <p class="has-icon icon-company">City Bureau</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/gonzalo-bellver/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Gonzalo Bellver">
                    
                                <h3 class="hed-promo">Gonzalo Bellver</h3>
                                <p class="has-icon icon-company"></p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/nicolas-belmonte/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Nicolas Belmonte">
                    
                                <h3 class="hed-promo">Nicolas Belmonte</h3>
                                <p class="has-icon icon-company">Twitter</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/ruthie-bendor/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Ruthie  BenDor">
                    
                                <h3 class="hed-promo">Ruthie  BenDor</h3>
                                <p class="has-icon icon-company">Code for America</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/lauren-benichou/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Lauren Benichou">
                    
                                <h3 class="hed-promo">Lauren Benichou</h3>
                                <p class="has-icon icon-company"></p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/lo-benichou/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Lo Benichou">
                    
                                <h3 class="hed-promo">Lo Benichou</h3>
                                <p class="has-icon icon-company"></p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/scott-benish/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Scott Benish">
                    
                                <h3 class="hed-promo">Scott Benish</h3>
                                <p class="has-icon icon-company">Periscopic</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/alison-benjamin/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Alison Benjamin">
                    
                                <h3 class="hed-promo">Alison Benjamin</h3>
                                <p class="has-icon icon-company">Frontline Club/Frontline Freelance Register</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/ken-bensinger/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Ken Bensinger">
                    
                                <h3 class="hed-promo">Ken Bensinger</h3>
                                <p class="has-icon icon-company">BuzzFeed</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/kyle-bentle/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="kyle bentle">
                    
                                <h3 class="hed-promo">kyle bentle</h3>
                                <p class="has-icon icon-company">The Chicago Tribune</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/joshua-benton/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Joshua Benton">
                    
                                <h3 class="hed-promo">Joshua Benton</h3>
                                <p class="has-icon icon-company">Nieman Lab</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/jeffrey-benzing/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Jeffrey Benzing">
                    
                                <h3 class="hed-promo">Jeffrey Benzing</h3>
                                <p class="has-icon icon-company">PublicSource</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/ryan-berg/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Ryan Berg">
                    
                                <h3 class="hed-promo">Ryan Berg</h3>
                                <p class="has-icon icon-company"></p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/ryan-berg-1/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Ryan Berg">
                    
                                <h3 class="hed-promo">Ryan Berg</h3>
                                <p class="has-icon icon-company">American City Business Journals</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/jonathon-berlin/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Jonathon Berlin">
                    
                                <h3 class="hed-promo">Jonathon Berlin</h3>
                                <p class="has-icon icon-company">The Chicago Tribune</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/cristian-bertelegni/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Cristian Bertelegni">
                    
                                <h3 class="hed-promo">Cristian Bertelegni</h3>
                                <p class="has-icon icon-company">La Nación</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/gurman-bhatia/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Gurman Bhatia">
                    
                                <h3 class="hed-promo">Gurman Bhatia</h3>
                                <p class="has-icon icon-company">Palm Beach Post</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/frank-bi/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Frank Bi">
                    
                                <h3 class="hed-promo">Frank Bi</h3>
                                <p class="has-icon icon-company">PBS NewsHour</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/jake-bialer/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Jake Bialer">
                    
                                <h3 class="hed-promo">Jake Bialer</h3>
                                <p class="has-icon icon-company"></p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/heather-billings/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Heather Billings">
                    
                                <h3 class="hed-promo">Heather Billings</h3>
                                <p class="has-icon icon-company"></p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/rachel-binx/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Rachel Binx">
                    
                                <h3 class="hed-promo">Rachel Binx</h3>
                                <p class="has-icon icon-company"></p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/wolfgang-blau/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Wolfgang Blau">
                    
                                <h3 class="hed-promo">Wolfgang Blau</h3>
                                <p class="has-icon icon-company">The Guardian</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/mariano-blejman/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Mariano Blejman">
                    
                                <h3 class="hed-promo">Mariano Blejman</h3>
                                <p class="has-icon icon-company">Hacks/Hackers</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/matthew-bloch/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Matthew  Bloch">
                    
                                <h3 class="hed-promo">Matthew  Bloch</h3>
                                <p class="has-icon icon-company">The New York Times</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/david-blooman/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="David Blooman">
                    
                                <h3 class="hed-promo">David Blooman</h3>
                                <p class="has-icon icon-company"></p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/christopher-blum/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Christopher Blum">
                    
                                <h3 class="hed-promo">Christopher Blum</h3>
                                <p class="has-icon icon-company"></p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/scott-blumenthal/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Scott Blumenthal">
                    
                                <h3 class="hed-promo">Scott Blumenthal</h3>
                                <p class="has-icon icon-company">The New York Times</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/mark-boas/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Mark Boas">
                    
                                <h3 class="hed-promo">Mark Boas</h3>
                                <p class="has-icon icon-company">Al Jazeera English, OpenNews</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/h-charley-bodkin/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="H. Charley Bodkin">
                    
                                <h3 class="hed-promo">H. Charley Bodkin</h3>
                                <p class="has-icon icon-company">The Los Angeles Times</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/jay-boice/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Jay Boice">
                    
                                <h3 class="hed-promo">Jay Boice</h3>
                                <p class="has-icon icon-company"></p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/hamish-boland-rudder/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Hamish Boland-Rudder">
                    
                                <h3 class="hed-promo">Hamish Boland-Rudder</h3>
                                <p class="has-icon icon-company">International Consortium for Investigative Journalists</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/liam-bolton/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Liam Bolton">
                    
                                <h3 class="hed-promo">Liam Bolton</h3>
                                <p class="has-icon icon-company">BBC News Labs</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/alex-bordens/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Alex Bordens">
                    
                                <h3 class="hed-promo">Alex Bordens</h3>
                                <p class="has-icon icon-company"></p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/julian-borger/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Julian Borger">
                    
                                <h3 class="hed-promo">Julian Borger</h3>
                                <p class="has-icon icon-company">The Guardian</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/kim-bost/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Kim Bost">
                    
                                <h3 class="hed-promo">Kim Bost</h3>
                                <p class="has-icon icon-company">The New York Times</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/mike-bostock/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Mike Bostock">
                    
                                <h3 class="hed-promo">Mike Bostock</h3>
                                <p class="has-icon icon-company">The New York Times</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/becky-bowers/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Becky Bowers">
                    
                                <h3 class="hed-promo">Becky Bowers</h3>
                                <p class="has-icon icon-company">The Wall Street Journal</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/jeremy-bowers/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Jeremy Bowers">
                    
                                <h3 class="hed-promo">Jeremy Bowers</h3>
                                <p class="has-icon icon-company">The New York Times</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/brian-boyer/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Brian Boyer">
                    
                                <h3 class="hed-promo">Brian Boyer</h3>
                                <p class="has-icon icon-company">NPR</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/andy-boyle/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Andy Boyle">
                    
                                <h3 class="hed-promo">Andy Boyle</h3>
                                <p class="has-icon icon-company"></p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/gina-boysun/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Gina Boysun">
                    
                                <h3 class="hed-promo">Gina Boysun</h3>
                                <p class="has-icon icon-company">The Spokesman-Review</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/scott-bradley/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Scott  Bradley">
                    
                                <h3 class="hed-promo">Scott  Bradley</h3>
                                <p class="has-icon icon-company">Knight Lab</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/john-branch/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="John Branch">
                    
                                <h3 class="hed-promo">John Branch</h3>
                                <p class="has-icon icon-company">The New York Times</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/ben-breedlove/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Ben Breedlove">
                    
                                <h3 class="hed-promo">Ben Breedlove</h3>
                                <p class="has-icon icon-company">Mother Jones</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/jason-breslow/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Jason Breslow">
                    
                                <h3 class="hed-promo">Jason Breslow</h3>
                                <p class="has-icon icon-company">Frontline</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/alex-breuer/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Alex Breuer">
                    
                                <h3 class="hed-promo">Alex Breuer</h3>
                                <p class="has-icon icon-company">The Guardian</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/jack-brighton/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Jack Brighton">
                    
                                <h3 class="hed-promo">Jack Brighton</h3>
                                <p class="has-icon icon-company">INN</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/amyjo-brown/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="AmyJo Brown">
                    
                                <h3 class="hed-promo">AmyJo Brown</h3>
                                <p class="has-icon icon-company"></p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/mandy-brown/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Mandy Brown">
                    
                                <h3 class="hed-promo">Mandy Brown</h3>
                                <p class="has-icon icon-company">Vox Media</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/trei-brundrett/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Trei Brundrett">
                    
                                <h3 class="hed-promo">Trei Brundrett</h3>
                                <p class="has-icon icon-company">The Verge, Vox Media</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/james-buckhouse/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="James Buckhouse">
                    
                                <h3 class="hed-promo">James Buckhouse</h3>
                                <p class="has-icon icon-company"></p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/kim-bui/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Kim Bui">
                    
                                <h3 class="hed-promo">Kim Bui</h3>
                                <p class="has-icon icon-company">KPCC</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/martin-burch/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Martin Burch">
                    
                                <h3 class="hed-promo">Martin Burch</h3>
                                <p class="has-icon icon-company">The Wall Street Journal</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/john-burn-murdoch/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="John Burn-Murdoch">
                    
                                <h3 class="hed-promo">John Burn-Murdoch</h3>
                                <p class="has-icon icon-company">The Financial Times, The Guardian</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/ingrid-burrington/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Ingrid Burrington">
                    
                                <h3 class="hed-promo">Ingrid Burrington</h3>
                                <p class="has-icon icon-company"></p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/peggy-bustamante/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Peggy Bustamante">
                    
                                <h3 class="hed-promo">Peggy Bustamante</h3>
                                <p class="has-icon icon-company"></p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/aaron-bycoffe/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Aaron Bycoffe">
                    
                                <h3 class="hed-promo">Aaron Bycoffe</h3>
                                <p class="has-icon icon-company"></p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/mar-cabra/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Mar Cabra">
                    
                                <h3 class="hed-promo">Mar Cabra</h3>
                                <p class="has-icon icon-company">International Consortium for Investigative Journalists</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/feilding-cage/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Feilding Cage">
                    
                                <h3 class="hed-promo">Feilding Cage</h3>
                                <p class="has-icon icon-company">The Guardian</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/lyre-calliope/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Lyre Calliope">
                    
                                <h3 class="hed-promo">Lyre Calliope</h3>
                                <p class="has-icon icon-company"></p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/darla-cameron/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Darla Cameron">
                    
                                <h3 class="hed-promo">Darla Cameron</h3>
                                <p class="has-icon icon-company">Tampa Bay Times</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/ronald-campbell/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Ronald  Campbell">
                    
                                <h3 class="hed-promo">Ronald  Campbell</h3>
                                <p class="has-icon icon-company"></p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/chris-canipe/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Chris Canipe">
                    
                                <h3 class="hed-promo">Chris Canipe</h3>
                                <p class="has-icon icon-company">The Wall Street Journal</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/kathy-carbone/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Kathy Carbone">
                    
                                <h3 class="hed-promo">Kathy Carbone</h3>
                                <p class="has-icon icon-company"></p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/tom-carden/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Tom Carden">
                    
                                <h3 class="hed-promo">Tom Carden</h3>
                                <p class="has-icon icon-company"></p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/tom-cardoso/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Tom Cardoso">
                    
                                <h3 class="hed-promo">Tom Cardoso</h3>
                                <p class="has-icon icon-company">The Globe and Mail</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/emma-carew-grovum/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Emma  Carew Grovum">
                    
                                <h3 class="hed-promo">Emma  Carew Grovum</h3>
                                <p class="has-icon icon-company"></p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/audrey-carlsen/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Audrey Carlsen">
                    
                                <h3 class="hed-promo">Audrey Carlsen</h3>
                                <p class="has-icon icon-company">The Seattle Times</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/evan-carmi/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Evan Carmi">
                    
                                <h3 class="hed-promo">Evan Carmi</h3>
                                <p class="has-icon icon-company">The New York Times</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/katie-carnie/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Katie Carnie">
                    
                                <h3 class="hed-promo">Katie Carnie</h3>
                                <p class="has-icon icon-company"></p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/ian-carrico/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Ian Carrico">
                    
                                <h3 class="hed-promo">Ian Carrico</h3>
                                <p class="has-icon icon-company">Vox Media</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/matt-carroll/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Matt Carroll">
                    
                                <h3 class="hed-promo">Matt Carroll</h3>
                                <p class="has-icon icon-company">MIT Center for Civic Media</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/shan-carter/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Shan Carter">
                    
                                <h3 class="hed-promo">Shan Carter</h3>
                                <p class="has-icon icon-company">The New York Times</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/matthew-caruana-galizia/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Matthew Caruana Galizia">
                    
                                <h3 class="hed-promo">Matthew Caruana Galizia</h3>
                                <p class="has-icon icon-company">International Consortium for Investigative Journalists</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/rigoberto-carvajal/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Rigoberto Carvajal">
                    
                                <h3 class="hed-promo">Rigoberto Carvajal</h3>
                                <p class="has-icon icon-company">International Consortium for Investigative Journalists</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/matt-chadburn/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Matt Chadburn">
                    
                                <h3 class="hed-promo">Matt Chadburn</h3>
                                <p class="has-icon icon-company">The Guardian</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/julia-chan/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Julia Chan">
                    
                                <h3 class="hed-promo">Julia Chan</h3>
                                <p class="has-icon icon-company">Reveal</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/ben-chartoff/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Ben Chartoff">
                    
                                <h3 class="hed-promo">Ben Chartoff</h3>
                                <p class="has-icon icon-company">OpenNews</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/greg-chen/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Greg Chen">
                    
                                <h3 class="hed-promo">Greg Chen</h3>
                                <p class="has-icon icon-company">The Guardian</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/sarah-childress/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Sarah Childress">
                    
                                <h3 class="hed-promo">Sarah Childress</h3>
                                <p class="has-icon icon-company">Frontline</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/dan-chilton/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Dan Chilton">
                    
                                <h3 class="hed-promo">Dan Chilton</h3>
                                <p class="has-icon icon-company">Vox Media</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/teresa-chin/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Teresa Chin">
                    
                                <h3 class="hed-promo">Teresa Chin</h3>
                                <p class="has-icon icon-company"></p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/brian-chirls/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Brian Chirls">
                    
                                <h3 class="hed-promo">Brian Chirls</h3>
                                <p class="has-icon icon-company">POV</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/emily-chow/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Emily Chow">
                    
                                <h3 class="hed-promo">Emily Chow</h3>
                                <p class="has-icon icon-company">The Washington Post</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/russell-chun/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Russell Chun">
                    
                                <h3 class="hed-promo">Russell Chun</h3>
                                <p class="has-icon icon-company"></p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/dino-citraro/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Dino Citraro">
                    
                                <h3 class="hed-promo">Dino Citraro</h3>
                                <p class="has-icon icon-company"></p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/maegan-clawges/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Maegan  Clawges">
                    
                                <h3 class="hed-promo">Maegan  Clawges</h3>
                                <p class="has-icon icon-company">San Francisco Chronicle</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/samuel-clay/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Samuel Clay">
                    
                                <h3 class="hed-promo">Samuel Clay</h3>
                                <p class="has-icon icon-company">DocumentCloud</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/john-cleveley/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="John Cleveley">
                    
                                <h3 class="hed-promo">John Cleveley</h3>
                                <p class="has-icon icon-company"></p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/florencia-coelho/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Florencia Coelho">
                    
                                <h3 class="hed-promo">Florencia Coelho</h3>
                                <p class="has-icon icon-company">La Nación</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/andrew-cohen/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Andrew Cohen">
                    
                                <h3 class="hed-promo">Andrew Cohen</h3>
                                <p class="has-icon icon-company">The Marshall Project</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/dvera-cohn/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="D'Vera Cohn">
                    
                                <h3 class="hed-promo">D’Vera Cohn</h3>
                                <p class="has-icon icon-company"></p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/jarrard-cole/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Jarrard Cole">
                    
                                <h3 class="hed-promo">Jarrard Cole</h3>
                                <p class="has-icon icon-company">The Wall Street Journal</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/teju-cole/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Teju Cole">
                    
                                <h3 class="hed-promo">Teju Cole</h3>
                                <p class="has-icon icon-company"></p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/iain-collins/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Iain Collins">
                    
                                <h3 class="hed-promo">Iain Collins</h3>
                                <p class="has-icon icon-company">BBC News</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/eva-constantaras/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Eva Constantaras">
                    
                                <h3 class="hed-promo">Eva Constantaras</h3>
                                <p class="has-icon icon-company">Internews in Kenya</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/steve-contorno/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Steve Contorno">
                    
                                <h3 class="hed-promo">Steve Contorno</h3>
                                <p class="has-icon icon-company">Tampa Bay Times</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/lindsey-cook/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Lindsey  Cook">
                    
                                <h3 class="hed-promo">Lindsey  Cook</h3>
                                <p class="has-icon icon-company">U.S. News &amp; World Report</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/alastair-coote/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Alastair Coote">
                    
                                <h3 class="hed-promo">Alastair Coote</h3>
                                <p class="has-icon icon-company">The New York Times</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/michael-corey/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Michael Corey">
                    
                                <h3 class="hed-promo">Michael Corey</h3>
                                <p class="has-icon icon-company">Reveal</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/jonathan-corum/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Jonathan Corum">
                    
                                <h3 class="hed-promo">Jonathan Corum</h3>
                                <p class="has-icon icon-company">The New York Times</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/chris-courtney/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Chris Courtney">
                    
                                <h3 class="hed-promo">Chris Courtney</h3>
                                <p class="has-icon icon-company"></p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/amanda-cox/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Amanda Cox">
                    
                                <h3 class="hed-promo">Amanda Cox</h3>
                                <p class="has-icon icon-company"></p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/daniel-craigmile/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Daniel Craigmile">
                    
                                <h3 class="hed-promo">Daniel Craigmile</h3>
                                <p class="has-icon icon-company">Texas Tribune</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/gabriel-dance/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Gabriel Dance">
                    
                                <h3 class="hed-promo">Gabriel Dance</h3>
                                <p class="has-icon icon-company">The Marshall Project</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/ahn-dang/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Ahn Dang">
                    
                                <h3 class="hed-promo">Ahn Dang</h3>
                                <p class="has-icon icon-company">The New York Times</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/alastair-dant/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Alastair Dant">
                    
                                <h3 class="hed-promo">Alastair Dant</h3>
                                <p class="has-icon icon-company">The New York Times</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/liz-danzico/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Liz Danzico">
                    
                                <h3 class="hed-promo">Liz Danzico</h3>
                                <p class="has-icon icon-company"></p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/carl-davaz/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Carl Davaz">
                    
                                <h3 class="hed-promo">Carl Davaz</h3>
                                <p class="has-icon icon-company">The Register-Guard</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/carl-davaz-1/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Carl Davaz">
                    
                                <h3 class="hed-promo">Carl Davaz</h3>
                                <p class="has-icon icon-company"></p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/jon-davenport/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Jon Davenport">
                    
                                <h3 class="hed-promo">Jon Davenport</h3>
                                <p class="has-icon icon-company">The Chronicle of Higher Education</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/chase-davis/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Chase Davis">
                    
                                <h3 class="hed-promo">Chase Davis</h3>
                                <p class="has-icon icon-company">Hot Type Consulting, Reveal</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/kenan-davis/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Kenan Davis">
                    
                                <h3 class="hed-promo">Kenan Davis</h3>
                                <p class="has-icon icon-company">The Guardian</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/leslye-davis/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Leslye Davis">
                    
                                <h3 class="hed-promo">Leslye Davis</h3>
                                <p class="has-icon icon-company">The New York Times</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/anthony-de-barros/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Anthony DeBarros">
                    
                                <h3 class="hed-promo">Anthony DeBarros</h3>
                                <p class="has-icon icon-company">DocumentCloud, Gannett Digital</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/danny-debelius/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Danny DeBelius">
                    
                                <h3 class="hed-promo">Danny DeBelius</h3>
                                <p class="has-icon icon-company"></p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/stijn-debrouwere/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Stijn Debrouwere">
                    
                                <h3 class="hed-promo">Stijn Debrouwere</h3>
                                <p class="has-icon icon-company">OpenNews</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/ian-dees/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Ian Dees">
                    
                                <h3 class="hed-promo">Ian Dees</h3>
                                <p class="has-icon icon-company">Census Reporter</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/gaston-de-la-llana/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Gastón de la Llana">
                    
                                <h3 class="hed-promo">Gastón de la Llana</h3>
                                <p class="has-icon icon-company">La Nación</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/matthew-delambo/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Matthew DeLambo">
                    
                                <h3 class="hed-promo">Matthew DeLambo</h3>
                                <p class="has-icon icon-company">The New York Times</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/anjanette-delgado/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Anjanette Delgado">
                    
                                <h3 class="hed-promo">Anjanette Delgado</h3>
                                <p class="has-icon icon-company">The Journal News/LoHud.com</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/cathy-deng/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Cathy Deng">
                    
                                <h3 class="hed-promo">Cathy Deng</h3>
                                <p class="has-icon icon-company">DataMade</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/adam-deprince/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Adam DePrince">
                    
                                <h3 class="hed-promo">Adam DePrince</h3>
                                <p class="has-icon icon-company">WNYC</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/nick-desantis/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Nick DeSantis">
                    
                                <h3 class="hed-promo">Nick DeSantis</h3>
                                <p class="has-icon icon-company">The Chronicle of Higher Education</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/mike-dewar/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Mike Dewar">
                    
                                <h3 class="hed-promo">Mike Dewar</h3>
                                <p class="has-icon icon-company">The New York Times</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/burton-dewilde/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Burton DeWilde">
                    
                                <h3 class="hed-promo">Burton DeWilde</h3>
                                <p class="has-icon icon-company"></p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/nicholas-diakopoulos/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Nicholas Diakopoulos">
                    
                                <h3 class="hed-promo">Nicholas Diakopoulos</h3>
                                <p class="has-icon icon-company">University of Maryland - Computational Journalism Lab</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/jeremy-scott-diamond/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Jeremy Scott Diamond">
                    
                                <h3 class="hed-promo">Jeremy Scott Diamond</h3>
                                <p class="has-icon icon-company">Bloomberg</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/emilia-diaz-struck/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Emilia Díaz-Struck">
                    
                                <h3 class="hed-promo">Emilia Díaz-Struck</h3>
                                <p class="has-icon icon-company">International Consortium for Investigative Journalists</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/jan-diehm/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Jan Diehm">
                    
                                <h3 class="hed-promo">Jan Diehm</h3>
                                <p class="has-icon icon-company">The Guardian</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/renee-diresta/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Renee DiResta">
                    
                                <h3 class="hed-promo">Renee DiResta</h3>
                                <p class="has-icon icon-company"></p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/billy-disney/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Billy Disney">
                    
                                <h3 class="hed-promo">Billy Disney</h3>
                                <p class="has-icon icon-company">The Verge</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/cecilia-dobbs/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Cecilia Dobbs">
                    
                                <h3 class="hed-promo">Cecilia Dobbs</h3>
                                <p class="has-icon icon-company">The Guardian</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/james-dolan/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="James Dolan">
                    
                                <h3 class="hed-promo">James Dolan</h3>
                                <p class="has-icon icon-company"></p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/noe-dominguez/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Noé Dominguez">
                    
                                <h3 class="hed-promo">Noé Dominguez</h3>
                                <p class="has-icon icon-company">Civica Digital</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/michael-donohoe/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Michael Donohoe">
                    
                                <h3 class="hed-promo">Michael Donohoe</h3>
                                <p class="has-icon icon-company">New Yorker</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/ian-doremus/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Ian Doremus">
                    
                                <h3 class="hed-promo">Ian Doremus</h3>
                                <p class="has-icon icon-company">The Register-Guard</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/megan-douglass/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Megan Douglass">
                    
                                <h3 class="hed-promo">Megan Douglass</h3>
                                <p class="has-icon icon-company">The Wall Street Journal</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/kat-downs/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Kat Downs">
                    
                                <h3 class="hed-promo">Kat Downs</h3>
                                <p class="has-icon icon-company">The Washington Post</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/will-drabold/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Will Drabold">
                    
                                <h3 class="hed-promo">Will Drabold</h3>
                                <p class="has-icon icon-company"></p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/daniel-drepper/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Daniel Drepper">
                    
                                <h3 class="hed-promo">Daniel Drepper</h3>
                                <p class="has-icon icon-company">Correct!v</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/steve-duenes/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Steve Duenes">
                    
                                <h3 class="hed-promo">Steve Duenes</h3>
                                <p class="has-icon icon-company">The New York Times</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/tyler-dukes/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Tyler Dukes">
                    
                                <h3 class="hed-promo">Tyler Dukes</h3>
                                <p class="has-icon icon-company">WRAL</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/schuyler-duveen/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Schuyler Duveen">
                    
                                <h3 class="hed-promo">Schuyler Duveen</h3>
                                <p class="has-icon icon-company"></p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/david-eads/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="David Eads">
                    
                                <h3 class="hed-promo">David Eads</h3>
                                <p class="has-icon icon-company"></p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/joel-eastwood/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Joel Eastwood">
                    
                                <h3 class="hed-promo">Joel Eastwood</h3>
                                <p class="has-icon icon-company">The Wall Street Journal</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/source-ebooks/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Source ebooks">
                    
                                <h3 class="hed-promo">Source ebooks</h3>
                                <p class="has-icon icon-company"></p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/carolyn-edds/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Carolyn Edds">
                    
                                <h3 class="hed-promo">Carolyn Edds</h3>
                                <p class="has-icon icon-company">Tampa Bay Times</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/derek-eder/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Derek Eder">
                    
                                <h3 class="hed-promo">Derek Eder</h3>
                                <p class="has-icon icon-company"></p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/adam-eisenberg/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Adam Eisenberg">
                    
                                <h3 class="hed-promo">Adam Eisenberg</h3>
                                <p class="has-icon icon-company">Sun Sentinel</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/juan-elosua/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Juan Elosua">
                    
                                <h3 class="hed-promo">Juan Elosua</h3>
                                <p class="has-icon icon-company">La Nación, OpenNews</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/simon-elvery/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Simon Elvery">
                    
                                <h3 class="hed-promo">Simon Elvery</h3>
                                <p class="has-icon icon-company">Australian Broadcasting Corporation</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/adeshina-emmanuel/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Adeshina Emmanuel">
                    
                                <h3 class="hed-promo">Adeshina Emmanuel</h3>
                                <p class="has-icon icon-company"></p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/abe-epton/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Abe Epton">
                    
                                <h3 class="hed-promo">Abe Epton</h3>
                                <p class="has-icon icon-company">The Chicago Tribune</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/tyson-evans/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Tyson Evans">
                    
                                <h3 class="hed-promo">Tyson Evans</h3>
                                <p class="has-icon icon-company">The New York Times</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/kaitlen-exum/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Kaitlen Exum">
                    
                                <h3 class="hed-promo">Kaitlen Exum</h3>
                                <p class="has-icon icon-company"></p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/hannah-fairfield/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Hannah Fairfield">
                    
                                <h3 class="hed-promo">Hannah Fairfield</h3>
                                <p class="has-icon icon-company">The New York Times</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/justin-falcone/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Justin Falcone">
                    
                                <h3 class="hed-promo">Justin Falcone</h3>
                                <p class="has-icon icon-company">Ocupop</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/gustavo-faleiros/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Gustavo Faleiros">
                    
                                <h3 class="hed-promo">Gustavo Faleiros</h3>
                                <p class="has-icon icon-company"></p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/madeline-farbman/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Madeline Farbman">
                    
                                <h3 class="hed-promo">Madeline Farbman</h3>
                                <p class="has-icon icon-company">The Wall Street Journal</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/kathryn-faulkner/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Kathryn Faulkner">
                    
                                <h3 class="hed-promo">Kathryn Faulkner</h3>
                                <p class="has-icon icon-company">The New York Times</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/tiff-fehr/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Tiff Fehr">
                    
                                <h3 class="hed-promo">Tiff Fehr</h3>
                                <p class="has-icon icon-company"></p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/maite-fernandez/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Maite Fernandez">
                    
                                <h3 class="hed-promo">Maite Fernandez</h3>
                                <p class="has-icon icon-company">International Center for Journalists</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/miguel-fiandor/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Miguel Fiandor">
                    
                                <h3 class="hed-promo">Miguel Fiandor</h3>
                                <p class="has-icon icon-company">International Consortium for Investigative Journalists</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/tyler-fisher/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Tyler Fisher">
                    
                                <h3 class="hed-promo">Tyler Fisher</h3>
                                <p class="has-icon icon-company">Knight Lab, NPR</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/jos-flores/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Jos Flores">
                    
                                <h3 class="hed-promo">Jos Flores</h3>
                                <p class="has-icon icon-company"></p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/gabriel-florit/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Gabriel Florit">
                    
                                <h3 class="hed-promo">Gabriel Florit</h3>
                                <p class="has-icon icon-company"></p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/joe-flowers/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Joe Flowers">
                    
                                <h3 class="hed-promo">Joe Flowers</h3>
                                <p class="has-icon icon-company">Broadcasting Board of Governors</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/mark-follman/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Mark Follman">
                    
                                <h3 class="hed-promo">Mark Follman</h3>
                                <p class="has-icon icon-company">Mother Jones</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/stephanie-foo/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Stephanie Foo">
                    
                                <h3 class="hed-promo">Stephanie Foo</h3>
                                <p class="has-icon icon-company"></p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/filipe-fortes/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Filipe Fortes">
                    
                                <h3 class="hed-promo">Filipe Fortes</h3>
                                <p class="has-icon icon-company">Flipboard</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/geoff-foster/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Geoff Foster">
                    
                                <h3 class="hed-promo">Geoff Foster</h3>
                                <p class="has-icon icon-company">The Wall Street Journal</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/ej-fox/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="EJ Fox">
                    
                                <h3 class="hed-promo">EJ Fox</h3>
                                <p class="has-icon icon-company">Vocativ</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/zoe-fraade-blanar/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Zoe Fraade-Blanar">
                    
                                <h3 class="hed-promo">Zoe Fraade-Blanar</h3>
                                <p class="has-icon icon-company"></p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/destin-frasier/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Destin Frasier">
                    
                                <h3 class="hed-promo">Destin Frasier</h3>
                                <p class="has-icon icon-company">USA Today</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/matt-frehner/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Matt Frehner">
                    
                                <h3 class="hed-promo">Matt Frehner</h3>
                                <p class="has-icon icon-company">The Globe and Mail</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/ruth-fremson/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Ruth Fremson">
                    
                                <h3 class="hed-promo">Ruth Fremson</h3>
                                <p class="has-icon icon-company">The New York Times</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/jane-friedhoff/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Jane Friedhoff">
                    
                                <h3 class="hed-promo">Jane Friedhoff</h3>
                                <p class="has-icon icon-company">The New York Times</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/dov-friedman/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Dov Friedman">
                    
                                <h3 class="hed-promo">Dov Friedman</h3>
                                <p class="has-icon icon-company">The Wall Street Journal</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/martin-frobisher/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Martin Frobisher">
                    
                                <h3 class="hed-promo">Martin Frobisher</h3>
                                <p class="has-icon icon-company">Tampa Bay Times</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/sarah-frostenson/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Sarah Frostenson">
                    
                                <h3 class="hed-promo">Sarah Frostenson</h3>
                                <p class="has-icon icon-company">Vox Media</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/hilary-fung/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Hilary Fung">
                    
                                <h3 class="hed-promo">Hilary Fung</h3>
                                <p class="has-icon icon-company">The Huffington Post</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/ian-gardner/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Ian Gardner">
                    
                                <h3 class="hed-promo">Ian Gardner</h3>
                                <p class="has-icon icon-company">The New York Times</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/jessica-garrison/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Jessica Garrison">
                    
                                <h3 class="hed-promo">Jessica Garrison</h3>
                                <p class="has-icon icon-company">BuzzFeed</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/megan-garvey/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Megan Garvey">
                    
                                <h3 class="hed-promo">Megan Garvey</h3>
                                <p class="has-icon icon-company">The Los Angeles Times</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/dan-gayle/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Dan Gayle">
                    
                                <h3 class="hed-promo">Dan Gayle</h3>
                                <p class="has-icon icon-company">The Spokesman-Review</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/rob-gebeloff/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Robert Gebeloff">
                    
                                <h3 class="hed-promo">Robert Gebeloff</h3>
                                <p class="has-icon icon-company">The New York Times</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/phil-geib/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Phil Geib">
                    
                                <h3 class="hed-promo">Phil Geib</h3>
                                <p class="has-icon icon-company">The Chicago Tribune</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/clement-geiger/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Clément Geiger">
                    
                                <h3 class="hed-promo">Clément Geiger</h3>
                                <p class="has-icon icon-company"></p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/joe-germuska/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Joe Germuska">
                    
                                <h3 class="hed-promo">Joe Germuska</h3>
                                <p class="has-icon icon-company">Census Reporter</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/jeremy-gilbert/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Jeremy Gilbert">
                    
                                <h3 class="hed-promo">Jeremy Gilbert</h3>
                                <p class="has-icon icon-company"></p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/cole-gillespie/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Cole Gillespie">
                    
                                <h3 class="hed-promo">Cole Gillespie</h3>
                                <p class="has-icon icon-company">OpenNews</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/mary-ann-giordano/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Mary Ann Giordano">
                    
                                <h3 class="hed-promo">Mary Ann Giordano</h3>
                                <p class="has-icon icon-company">The New York Times</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/ariana-giorgi/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Ariana Giorgi">
                    
                                <h3 class="hed-promo">Ariana Giorgi</h3>
                                <p class="has-icon icon-company">The Dallas Morning News</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/tom-giratikanon/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Tom Giratikanon">
                    
                                <h3 class="hed-promo">Tom Giratikanon</h3>
                                <p class="has-icon icon-company">The New York Times</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/sarah-glen/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Sarah Glen">
                    
                                <h3 class="hed-promo">Sarah Glen</h3>
                                <p class="has-icon icon-company">Chalkbeat</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/cole-goins/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Cole Goins">
                    
                                <h3 class="hed-promo">Cole Goins</h3>
                                <p class="has-icon icon-company">Reveal</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/tim-golden/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Tim Golden">
                    
                                <h3 class="hed-promo">Tim Golden</h3>
                                <p class="has-icon icon-company"></p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/russell-goldenberg/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Russell Goldenberg">
                    
                                <h3 class="hed-promo">Russell Goldenberg</h3>
                                <p class="has-icon icon-company">Boston Globe Media</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/dana-goldstein/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Dana Goldstein">
                    
                                <h3 class="hed-promo">Dana Goldstein</h3>
                                <p class="has-icon icon-company">The Marshall Project</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/xaquin-gonzalez-veira/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Xaquín  González Veira">
                    
                                <h3 class="hed-promo">Xaquín  González Veira</h3>
                                <p class="has-icon icon-company">The New York Times</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/michael-grant/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Michael  Grant">
                    
                                <h3 class="hed-promo">Michael  Grant</h3>
                                <p class="has-icon icon-company">San Francisco Chronicle</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/alex-graul/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Alex Graul">
                    
                                <h3 class="hed-promo">Alex Graul</h3>
                                <p class="has-icon icon-company">The Guardian</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/forest-gregg/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Forest Gregg">
                    
                                <h3 class="hed-promo">Forest Gregg</h3>
                                <p class="has-icon icon-company"></p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/ryann-grochowski-jones/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Ryann Grochowski Jones">
                    
                                <h3 class="hed-promo">Ryann Grochowski Jones</h3>
                                <p class="has-icon icon-company">ProPublica</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/lena-groeger/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Lena Groeger">
                    
                                <h3 class="hed-promo">Lena Groeger</h3>
                                <p class="has-icon icon-company">ProPublica</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/christopher-groskopf/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Christopher Groskopf">
                    
                                <h3 class="hed-promo">Christopher Groskopf</h3>
                                <p class="has-icon icon-company">NPR</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/evan-grothjan/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Evan  Grothjan">
                    
                                <h3 class="hed-promo">Evan  Grothjan</h3>
                                <p class="has-icon icon-company">The New York Times</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/chris-hagan/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Chris Hagan">
                    
                                <h3 class="hed-promo">Chris Hagan</h3>
                                <p class="has-icon icon-company"></p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/jessica-hamel/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Jessica Hamel">
                    
                                <h3 class="hed-promo">Jessica Hamel</h3>
                                <p class="has-icon icon-company"></p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/markus-hametner/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Markus Hametner">
                    
                                <h3 class="hed-promo">Markus Hametner</h3>
                                <p class="has-icon icon-company">Der Standard</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/brian-hamman/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Brian Hamman">
                    
                                <h3 class="hed-promo">Brian Hamman</h3>
                                <p class="has-icon icon-company">The New York Times</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/matt-hampel/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Matt Hampel">
                    
                                <h3 class="hed-promo">Matt Hampel</h3>
                                <p class="has-icon icon-company">NPR</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/ted-han/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Ted Han">
                    
                                <h3 class="hed-promo">Ted Han</h3>
                                <p class="has-icon icon-company">DocumentCloud</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/john-hancock/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="John Hancock">
                    
                                <h3 class="hed-promo">John Hancock</h3>
                                <p class="has-icon icon-company">The Dallas Morning News</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/nikole-hannah-jones/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Nikole  Hannah-Jones">
                    
                                <h3 class="hed-promo">Nikole  Hannah-Jones</h3>
                                <p class="has-icon icon-company">ProPublica</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/nik-hanselmann/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Nik Hanselmann">
                    
                                <h3 class="hed-promo">Nik Hanselmann</h3>
                                <p class="has-icon icon-company">The New York Times</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/jacob-harris/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Jacob Harris">
                    
                                <h3 class="hed-promo">Jacob Harris</h3>
                                <p class="has-icon icon-company">The New York Times</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/richard-harris/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Rich Harris">
                    
                                <h3 class="hed-promo">Rich Harris</h3>
                                <p class="has-icon icon-company">The Guardian</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/sydette-harry/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Sydette Harry">
                    
                                <h3 class="hed-promo">Sydette Harry</h3>
                                <p class="has-icon icon-company">The Coral Project</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/benjamin-hasson/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Benjamin Hasson">
                    
                                <h3 class="hed-promo">Benjamin Hasson</h3>
                                <p class="has-icon icon-company">Texas Tribune</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/joshua-hatch/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Joshua Hatch">
                    
                                <h3 class="hed-promo">Joshua Hatch</h3>
                                <p class="has-icon icon-company">The Chronicle of Higher Education</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/john-heasly/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="John Heasly">
                    
                                <h3 class="hed-promo">John Heasly</h3>
                                <p class="has-icon icon-company">The Register-Guard</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/sarah-henderson/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Sarah Henderson">
                    
                                <h3 class="hed-promo">Sarah Henderson</h3>
                                <p class="has-icon icon-company">The Chronicle of Higher Education</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/ck-hickey/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="C.K. Hickey">
                    
                                <h3 class="hed-promo">C.K. Hickey</h3>
                                <p class="has-icon icon-company"></p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/amanda-hickman/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Amanda  Hickman">
                    
                                <h3 class="hed-promo">Amanda  Hickman</h3>
                                <p class="has-icon icon-company">DocumentCloud</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/bill-higgins/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Bill Higgins">
                    
                                <h3 class="hed-promo">Bill Higgins</h3>
                                <p class="has-icon icon-company">Tampa Bay Times</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/parker-higgins/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Parker Higgins">
                    
                                <h3 class="hed-promo">Parker Higgins</h3>
                                <p class="has-icon icon-company"></p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/andrew-hill/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Andrew Hill">
                    
                                <h3 class="hed-promo">Andrew Hill</h3>
                                <p class="has-icon icon-company">Vizzuality</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/dan-hill/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Dan Hill">
                    
                                <h3 class="hed-promo">Dan Hill</h3>
                                <p class="has-icon icon-company"></p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/kaeti-hinck/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Kaeti Hinck">
                    
                                <h3 class="hed-promo">Kaeti Hinck</h3>
                                <p class="has-icon icon-company">The Washington Post</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/geoff-hing/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Geoff Hing">
                    
                                <h3 class="hed-promo">Geoff Hing</h3>
                                <p class="has-icon icon-company">OpenElections, The Chicago Tribune</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/erik-hinton/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Erik Hinton">
                    
                                <h3 class="hed-promo">Erik Hinton</h3>
                                <p class="has-icon icon-company">The Wall Street Journal</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/laura-holder/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Laura Holder">
                    
                                <h3 class="hed-promo">Laura Holder</h3>
                                <p class="has-icon icon-company">The Wall Street Journal</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/darryl-holliday/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Darryl Holliday">
                    
                                <h3 class="hed-promo">Darryl Holliday</h3>
                                <p class="has-icon icon-company">City Bureau</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/eric-holmberg/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Eric Holmberg">
                    
                                <h3 class="hed-promo">Eric Holmberg</h3>
                                <p class="has-icon icon-company">PublicSource</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/harlo-holmes/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Harlo Holmes">
                    
                                <h3 class="hed-promo">Harlo Holmes</h3>
                                <p class="has-icon icon-company">OpenNews</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/adrian-holovaty/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Adrian Holovaty">
                    
                                <h3 class="hed-promo">Adrian Holovaty</h3>
                                <p class="has-icon icon-company">EveryBlock</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/sabrina-howells/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Sabrina Howells">
                    
                                <h3 class="hed-promo">Sabrina Howells</h3>
                                <p class="has-icon icon-company">Bloomberg</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/rostislav-hristov/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Rostislav Hristov">
                    
                                <h3 class="hed-promo">Rostislav Hristov</h3>
                                <p class="has-icon icon-company"></p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/jon-huang/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Jon Huang">
                    
                                <h3 class="hed-promo">Jon Huang</h3>
                                <p class="has-icon icon-company">The New York Times</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/nicola-hughes/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Nicola Hughes">
                    
                                <h3 class="hed-promo">Nicola Hughes</h3>
                                <p class="has-icon icon-company">OpenNews, The Guardian</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/john-heasly-1/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Micky Hulse">
                    
                                <h3 class="hed-promo">Micky Hulse</h3>
                                <p class="has-icon icon-company">The Register-Guard</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/connie-humburg/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Connie  Humburg">
                    
                                <h3 class="hed-promo">Connie  Humburg</h3>
                                <p class="has-icon icon-company">Tampa Bay Times</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/chaclyn-hunt/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Chaclyn Hunt">
                    
                                <h3 class="hed-promo">Chaclyn Hunt</h3>
                                <p class="has-icon icon-company"></p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/alyson-hurt/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Alyson Hurt">
                    
                                <h3 class="hed-promo">Alyson Hurt</h3>
                                <p class="has-icon icon-company">NPR</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/nausheen-husain/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Nausheen Husain">
                    
                                <h3 class="hed-promo">Nausheen Husain</h3>
                                <p class="has-icon icon-company">The Chicago Tribune</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/sha-hwang/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Sha Hwang">
                    
                                <h3 class="hed-promo">Sha Hwang</h3>
                                <p class="has-icon icon-company"></p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/adam-hyland/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Adam Hyland">
                    
                                <h3 class="hed-promo">Adam Hyland</h3>
                                <p class="has-icon icon-company">Bocoup</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/nikolas-iubel/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Nikolas Iubel">
                    
                                <h3 class="hed-promo">Nikolas Iubel</h3>
                                <p class="has-icon icon-company"></p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/brian-jacobs/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Brian Jacobs">
                    
                                <h3 class="hed-promo">Brian Jacobs</h3>
                                <p class="has-icon icon-company">National Geographic, OpenNews</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/katie-jansen/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Katie Jansen">
                    
                                <h3 class="hed-promo">Katie Jansen</h3>
                                <p class="has-icon icon-company">The Durham Herald-Sun</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/waldo-jaquith/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Waldo Jaquith">
                    
                                <h3 class="hed-promo">Waldo Jaquith</h3>
                                <p class="has-icon icon-company"></p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/petr-jasek/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Petr Jašek">
                    
                                <h3 class="hed-promo">Petr Jašek</h3>
                                <p class="has-icon icon-company">Sourcefabric</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/hannah-jeffrey/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Hannah  Jeffrey">
                    
                                <h3 class="hed-promo">Hannah  Jeffrey</h3>
                                <p class="has-icon icon-company">Tampa Bay Times</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/taige-jensen/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Taige  Jensen">
                    
                                <h3 class="hed-promo">Taige  Jensen</h3>
                                <p class="has-icon icon-company">The New York Times</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/simon-jockers/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Simon Jockers">
                    
                                <h3 class="hed-promo">Simon Jockers</h3>
                                <p class="has-icon icon-company">Correct!v</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/brett-johnson/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Brett Johnson">
                    
                                <h3 class="hed-promo">Brett Johnson</h3>
                                <p class="has-icon icon-company">Periscopic</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/douglas-johnson/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Douglas Johnson">
                    
                                <h3 class="hed-promo">Douglas Johnson</h3>
                                <p class="has-icon icon-company">Thought Catalog</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/mark-j-rochester/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Mark J. Rochester">
                    
                                <h3 class="hed-promo">Mark J. Rochester</h3>
                                <p class="has-icon icon-company">The Pittsburgh Post-Gazette</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/laura-june/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Laura June">
                    
                                <h3 class="hed-promo">Laura June</h3>
                                <p class="has-icon icon-company">The Verge, Vox Media</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/andreikallaur/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Andrei Kallaur">
                    
                                <h3 class="hed-promo">Andrei Kallaur</h3>
                                <p class="has-icon icon-company">The New York Times</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/roman-kalyakin/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Roman Kalyakin">
                    
                                <h3 class="hed-promo">Roman Kalyakin</h3>
                                <p class="has-icon icon-company"></p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/sandhya-kambhampati/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Sandhya Kambhampati">
                    
                                <h3 class="hed-promo">Sandhya Kambhampati</h3>
                                <p class="has-icon icon-company">The Chronicle of Higher Education</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/wayne-kamidoi/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Wayne Kamidoi">
                    
                                <h3 class="hed-promo">Wayne Kamidoi</h3>
                                <p class="has-icon icon-company">The New York Times</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/alexandra-kanik/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Alexandra Kanik">
                    
                                <h3 class="hed-promo">Alexandra Kanik</h3>
                                <p class="has-icon icon-company">PublicSource</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/joanna-s-kao/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Joanna S. Kao">
                    
                                <h3 class="hed-promo">Joanna S. Kao</h3>
                                <p class="has-icon icon-company">Al Jazeera America</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/josh-katz/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Josh  Katz">
                    
                                <h3 class="hed-promo">Josh  Katz</h3>
                                <p class="has-icon icon-company">The New York Times</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/luke-kavanagh/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Luke Kavanagh">
                    
                                <h3 class="hed-promo">Luke Kavanagh</h3>
                                <p class="has-icon icon-company">The Financial Times</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/darius-kazemi/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Darius Kazemi">
                    
                                <h3 class="hed-promo">Darius Kazemi</h3>
                                <p class="has-icon icon-company"></p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/john-keefe/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="John Keefe">
                    
                                <h3 class="hed-promo">John Keefe</h3>
                                <p class="has-icon icon-company">Census Reporter, WNYC</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/jonathan-keegan/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Jonathan Keegan">
                    
                                <h3 class="hed-promo">Jonathan Keegan</h3>
                                <p class="has-icon icon-company">The Wall Street Journal</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/danielle-keeton-olsen/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Danielle Keeton-Olsen">
                    
                                <h3 class="hed-promo">Danielle Keeton-Olsen</h3>
                                <p class="has-icon icon-company"></p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/ben-keith/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Ben Keith">
                    
                                <h3 class="hed-promo">Ben Keith</h3>
                                <p class="has-icon icon-company">INN</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/bill-keller/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Bill Keller">
                    
                                <h3 class="hed-promo">Bill Keller</h3>
                                <p class="has-icon icon-company">The Marshall Project</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/chris-keller/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Chris Keller">
                    
                                <h3 class="hed-promo">Chris Keller</h3>
                                <p class="has-icon icon-company">Southern California Public Radio</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/michael-keller/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Michael Keller">
                    
                                <h3 class="hed-promo">Michael Keller</h3>
                                <p class="has-icon icon-company">Al Jazeera America</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/scott-kellum/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Scott  Kellum">
                    
                                <h3 class="hed-promo">Scott  Kellum</h3>
                                <p class="has-icon icon-company">The Verge, Vox Media</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/stacey-kennelly/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Stacey Kennelly">
                    
                                <h3 class="hed-promo">Stacey Kennelly</h3>
                                <p class="has-icon icon-company"></p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/roger-kenny/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Roger Kenny">
                    
                                <h3 class="hed-promo">Roger Kenny</h3>
                                <p class="has-icon icon-company">The Wall Street Journal</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/lakshmi-ketineni/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Lakshmi Ketineni">
                    
                                <h3 class="hed-promo">Lakshmi Ketineni</h3>
                                <p class="has-icon icon-company">The Wall Street Journal</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/natasha-khan/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Natasha Khan">
                    
                                <h3 class="hed-promo">Natasha Khan</h3>
                                <p class="has-icon icon-company">PublicSource</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/christy-khoshaba/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Christy Khoshaba">
                    
                                <h3 class="hed-promo">Christy Khoshaba</h3>
                                <p class="has-icon icon-company"></p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/clinton-king/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Clinton King">
                    
                                <h3 class="hed-promo">Clinton King</h3>
                                <p class="has-icon icon-company">NPR</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/kathleen-kingsbury/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Kathleen Kingsbury">
                    
                                <h3 class="hed-promo">Kathleen Kingsbury</h3>
                                <p class="has-icon icon-company">Boston Globe Media</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/erin-kissane/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Erin Kissane">
                    
                                <h3 class="hed-promo">Erin Kissane</h3>
                                <p class="has-icon icon-company">OpenNews</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/krista-kjellman-schmidt/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Krista Kjellman Schmidt">
                    
                                <h3 class="hed-promo">Krista Kjellman Schmidt</h3>
                                <p class="has-icon icon-company">ProPublica</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/magdalena-klein/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Magdalena Klein">
                    
                                <h3 class="hed-promo">Magdalena Klein</h3>
                                <p class="has-icon icon-company">Sourcefabric</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/matthew-klein/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Matthew Klein">
                    
                                <h3 class="hed-promo">Matthew Klein</h3>
                                <p class="has-icon icon-company">Bloomberg</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/scott-klein/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Scott Klein">
                    
                                <h3 class="hed-promo">Scott Klein</h3>
                                <p class="has-icon icon-company">DocumentCloud, ProPublica</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/sarah-kliff/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Sarah Kliff">
                    
                                <h3 class="hed-promo">Sarah Kliff</h3>
                                <p class="has-icon icon-company">Vox Media</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/mario-klingemann/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Mario Klingemann">
                    
                                <h3 class="hed-promo">Mario Klingemann</h3>
                                <p class="has-icon icon-company"></p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/joseph-kokenge/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Joseph Kokenge">
                    
                                <h3 class="hed-promo">Joseph Kokenge</h3>
                                <p class="has-icon icon-company">San Antonio Express-News</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/tom-kompare/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Tom Kompare">
                    
                                <h3 class="hed-promo">Tom Kompare</h3>
                                <p class="has-icon icon-company"></p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/eitan-konigsburg/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Eitan Konigsburg">
                    
                                <h3 class="hed-promo">Eitan Konigsburg</h3>
                                <p class="has-icon icon-company">The New York Times</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/ben-koski/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Ben Koski">
                    
                                <h3 class="hed-promo">Ben Koski</h3>
                                <p class="has-icon icon-company">The New York Times</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/mitchell-kotler/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Mitchell Kotler">
                    
                                <h3 class="hed-promo">Mitchell Kotler</h3>
                                <p class="has-icon icon-company"></p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/jeff-kramer/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Jeff Kramer">
                    
                                <h3 class="hed-promo">Jeff Kramer</h3>
                                <p class="has-icon icon-company">Vox Media</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/melody-kramer/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Melody Kramer">
                    
                                <h3 class="hed-promo">Melody Kramer</h3>
                                <p class="has-icon icon-company"></p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/sebastian-kraus/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Sebastian Kraus">
                    
                                <h3 class="hed-promo">Sebastian Kraus</h3>
                                <p class="has-icon icon-company"></p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/amanda-krauss/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Amanda Krauss">
                    
                                <h3 class="hed-promo">Amanda Krauss</h3>
                                <p class="has-icon icon-company">Texas Tribune</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/nicholas-krusick/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Nicholas Krusick">
                    
                                <h3 class="hed-promo">Nicholas Krusick</h3>
                                <p class="has-icon icon-company"></p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/andrew-kueneman/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Andrew Kueneman">
                    
                                <h3 class="hed-promo">Andrew Kueneman</h3>
                                <p class="has-icon icon-company">The New York Times</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/yana-kunichoff/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Yana Kunichoff">
                    
                                <h3 class="hed-promo">Yana Kunichoff</h3>
                                <p class="has-icon icon-company">The Chicago Reporter</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/livia-labate/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Livia Labate">
                    
                                <h3 class="hed-promo">Livia Labate</h3>
                                <p class="has-icon icon-company">NPR, OpenNews</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/jennifer-lafleur/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Jennifer LaFleur">
                    
                                <h3 class="hed-promo">Jennifer LaFleur</h3>
                                <p class="has-icon icon-company">ProPublica</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/michael-laforgia/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Michael Laforgia">
                    
                                <h3 class="hed-promo">Michael Laforgia</h3>
                                <p class="has-icon icon-company">Tampa Bay Times</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/rebecca-lai/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Rebecca Lai">
                    
                                <h3 class="hed-promo">Rebecca Lai</h3>
                                <p class="has-icon icon-company"></p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/lance-lambert/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Lance Lambert">
                    
                                <h3 class="hed-promo">Lance Lambert</h3>
                                <p class="has-icon icon-company">The Chronicle of Higher Education</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/michael-lansu/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Michael Lansu">
                    
                                <h3 class="hed-promo">Michael Lansu</h3>
                                <p class="has-icon icon-company"></p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/valerie-lapinski/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Valerie Lapinski">
                    
                                <h3 class="hed-promo">Valerie Lapinski</h3>
                                <p class="has-icon icon-company">The Guardian</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/jeff-larson/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Jeff Larson">
                    
                                <h3 class="hed-promo">Jeff Larson</h3>
                                <p class="has-icon icon-company">ProPublica</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/nathaniel-lash/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Nathaniel Lash">
                    
                                <h3 class="hed-promo">Nathaniel Lash</h3>
                                <p class="has-icon icon-company">Tampa Bay Times</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/greg-lavallee/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Greg Lavallee">
                    
                                <h3 class="hed-promo">Greg Lavallee</h3>
                                <p class="has-icon icon-company">Slate</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/lauren-leatherby/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Lauren Leatherby">
                    
                                <h3 class="hed-promo">Lauren Leatherby</h3>
                                <p class="has-icon icon-company">The Guardian</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/jaeah-lee/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Jaeah Lee">
                    
                                <h3 class="hed-promo">Jaeah Lee</h3>
                                <p class="has-icon icon-company">Mother Jones</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/tom-lee/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Tom Lee">
                    
                                <h3 class="hed-promo">Tom Lee</h3>
                                <p class="has-icon icon-company">The Sunlight Foundation</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/tracie-lee/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Tracie Lee">
                    
                                <h3 class="hed-promo">Tracie Lee</h3>
                                <p class="has-icon icon-company">Serious Eats</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/david-leonard/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="David Leonard">
                    
                                <h3 class="hed-promo">David Leonard</h3>
                                <p class="has-icon icon-company"></p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/yvonne-leow/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Yvonne Leow">
                    
                                <h3 class="hed-promo">Yvonne Leow</h3>
                                <p class="has-icon icon-company"></p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/tim-leslie/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Tim Leslie">
                    
                                <h3 class="hed-promo">Tim Leslie</h3>
                                <p class="has-icon icon-company"></p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/becky-lettenberger/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Becky Lettenberger">
                    
                                <h3 class="hed-promo">Becky Lettenberger</h3>
                                <p class="has-icon icon-company">NPR</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/thomas-levine/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Thomas Levine">
                    
                                <h3 class="hed-promo">Thomas Levine</h3>
                                <p class="has-icon icon-company"></p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/robert-libetti/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Robert Libetti">
                    
                                <h3 class="hed-promo">Robert Libetti</h3>
                                <p class="has-icon icon-company"></p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/greg-linch/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Greg Linch">
                    
                                <h3 class="hed-promo">Greg Linch</h3>
                                <p class="has-icon icon-company">McClatchyDC</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/wes-lindamood/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Wes Lindamood">
                    
                                <h3 class="hed-promo">Wes Lindamood</h3>
                                <p class="has-icon icon-company">NPR</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/friedrich-lindenberg/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Friedrich Lindenberg">
                    
                                <h3 class="hed-promo">Friedrich Lindenberg</h3>
                                <p class="has-icon icon-company">OpenNews</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/jen-linder/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Jen Linder">
                    
                                <h3 class="hed-promo">Jen Linder</h3>
                                <p class="has-icon icon-company"></p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/daniel-lindsley/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Daniel Lindsley">
                    
                                <h3 class="hed-promo">Daniel Lindsley</h3>
                                <p class="has-icon icon-company"></p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/sara-lipka/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Sara Lipka">
                    
                                <h3 class="hed-promo">Sara Lipka</h3>
                                <p class="has-icon icon-company">The Chronicle of Higher Education</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/alexis-lloyd/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Alexis Lloyd">
                    
                                <h3 class="hed-promo">Alexis Lloyd</h3>
                                <p class="has-icon icon-company">The New York Times</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/callum-locke/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Callum Locke">
                    
                                <h3 class="hed-promo">Callum Locke</h3>
                                <p class="has-icon icon-company">The Financial Times</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/jessica-lord/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Jessica Lord">
                    
                                <h3 class="hed-promo">Jessica Lord</h3>
                                <p class="has-icon icon-company">Code for America</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/pablo-loscri/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Pablo Loscri">
                    
                                <h3 class="hed-promo">Pablo Loscri</h3>
                                <p class="has-icon icon-company">La Nación</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/andrew-loswosky/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Andrew Loswosky">
                    
                                <h3 class="hed-promo">Andrew Loswosky</h3>
                                <p class="has-icon icon-company"></p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/gabriel-luethje/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Gabriel Luethje">
                    
                                <h3 class="hed-promo">Gabriel Luethje</h3>
                                <p class="has-icon icon-company"></p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/jessia-ma/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Jessia Ma">
                    
                                <h3 class="hed-promo">Jessia Ma</h3>
                                <p class="has-icon icon-company">The Wall Street Journal</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/louise-ma/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Louise Ma">
                    
                                <h3 class="hed-promo">Louise Ma</h3>
                                <p class="has-icon icon-company">The New York Times, WNYC</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/yolanda-ma/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Yolanda Ma">
                    
                                <h3 class="hed-promo">Yolanda Ma</h3>
                                <p class="has-icon icon-company"></p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/ewan-macaskill/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Ewan MacAskill">
                    
                                <h3 class="hed-promo">Ewan MacAskill</h3>
                                <p class="has-icon icon-company">The Guardian</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/tyler-machado/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Tyler Machado">
                    
                                <h3 class="hed-promo">Tyler Machado</h3>
                                <p class="has-icon icon-company">Harvard Business Review</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/mike-maciag/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Mike Maciag">
                    
                                <h3 class="hed-promo">Mike Maciag</h3>
                                <p class="has-icon icon-company"></p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/tom-macwright/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Tom MacWright">
                    
                                <h3 class="hed-promo">Tom MacWright</h3>
                                <p class="has-icon icon-company"></p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/jacqui-maher/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Jacqui Maher">
                    
                                <h3 class="hed-promo">Jacqui Maher</h3>
                                <p class="has-icon icon-company">The New York Times</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/denise-malan/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Denise Malan">
                    
                                <h3 class="hed-promo">Denise Malan</h3>
                                <p class="has-icon icon-company">INN</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/sam-manchester/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Sam  Manchester">
                    
                                <h3 class="hed-promo">Sam  Manchester</h3>
                                <p class="has-icon icon-company">The New York Times</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/joey-marburger/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Joey Marburger">
                    
                                <h3 class="hed-promo">Joey Marburger</h3>
                                <p class="has-icon icon-company">The Washington Post</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/ryan-mark/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Ryan Mark">
                    
                                <h3 class="hed-promo">Ryan Mark</h3>
                                <p class="has-icon icon-company"></p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/adam-martin/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Adam Martin">
                    
                                <h3 class="hed-promo">Adam Martin</h3>
                                <p class="has-icon icon-company">Broadcasting Board of Governors</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/ebony-martin/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Ebony Martin">
                    
                                <h3 class="hed-promo">Ebony Martin</h3>
                                <p class="has-icon icon-company"></p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/john-martin/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="John  Martin">
                    
                                <h3 class="hed-promo">John  Martin</h3>
                                <p class="has-icon icon-company">Tampa Bay Times</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/sara-j-martinez/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Sara J. Martinez">
                    
                                <h3 class="hed-promo">Sara J. Martinez</h3>
                                <p class="has-icon icon-company">Slate</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/carlos-martinez-de-la-serna/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Carlos Martínez de la Serna">
                    
                                <h3 class="hed-promo">Carlos Martínez de la Serna</h3>
                                <p class="has-icon icon-company">Vizzuality</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/ryan-marx/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Ryan Marx">
                    
                                <h3 class="hed-promo">Ryan Marx</h3>
                                <p class="has-icon icon-company">The Chicago Tribune</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/andrew-mason/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Andrew Mason">
                    
                                <h3 class="hed-promo">Andrew Mason</h3>
                                <p class="has-icon icon-company">The Guardian</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/j-nathan-matias/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="J. Nathan Matias">
                    
                                <h3 class="hed-promo">J. Nathan Matias</h3>
                                <p class="has-icon icon-company">MIT Center for Civic Media</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/allison-mccartney/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Allison McCartney">
                    
                                <h3 class="hed-promo">Allison McCartney</h3>
                                <p class="has-icon icon-company">Reveal</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/megan-mccloskey/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Megan McCloskey">
                    
                                <h3 class="hed-promo">Megan McCloskey</h3>
                                <p class="has-icon icon-company"></p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/jon-mcclure/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Jon McClure">
                    
                                <h3 class="hed-promo">Jon McClure</h3>
                                <p class="has-icon icon-company">The Dallas Morning News</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/jolie-mccullough/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Jolie McCullough">
                    
                                <h3 class="hed-promo">Jolie McCullough</h3>
                                <p class="has-icon icon-company">Texas Tribune</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/sean-mcdade/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Sean McDade">
                    
                                <h3 class="hed-promo">Sean McDade</h3>
                                <p class="has-icon icon-company"></p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/colleen-mcenaney/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Colleen  McEnaney">
                    
                                <h3 class="hed-promo">Colleen  McEnaney</h3>
                                <p class="has-icon icon-company">The New York Times</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/kathleen-mcgrory/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Kathleen  McGrory">
                    
                                <h3 class="hed-promo">Kathleen  McGrory</h3>
                                <p class="has-icon icon-company">Tampa Bay Times</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/alan-mclean/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Alan McLean">
                    
                                <h3 class="hed-promo">Alan McLean</h3>
                                <p class="has-icon icon-company">The New York Times</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/tracey-mcmanus/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Tracey  McManus">
                    
                                <h3 class="hed-promo">Tracey  McManus</h3>
                                <p class="has-icon icon-company">Tampa Bay Times</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/claire-mcneill/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Claire McNeill">
                    
                                <h3 class="hed-promo">Claire McNeill</h3>
                                <p class="has-icon icon-company">Tampa Bay Times</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/matthew-mcvickar/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Matthew McVickar">
                    
                                <h3 class="hed-promo">Matthew McVickar</h3>
                                <p class="has-icon icon-company">Ocupop</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/tom-meagher/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Tom Meagher">
                    
                                <h3 class="hed-promo">Tom Meagher</h3>
                                <p class="has-icon icon-company">The Marshall Project</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/yelena-mejova/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Yelena Mejova">
                    
                                <h3 class="hed-promo">Yelena Mejova</h3>
                                <p class="has-icon icon-company"></p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/christian-melendez/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Christian Melendez">
                    
                                <h3 class="hed-promo">Christian Melendez</h3>
                                <p class="has-icon icon-company">American City Business Journals</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/steven-melendez/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Steven Melendez">
                    
                                <h3 class="hed-promo">Steven Melendez</h3>
                                <p class="has-icon icon-company">WNYC</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/ted-mellnik/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Ted Mellnik">
                    
                                <h3 class="hed-promo">Ted Mellnik</h3>
                                <p class="has-icon icon-company">The Washington Post</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/pablo-mercado/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Pablo Mercado">
                    
                                <h3 class="hed-promo">Pablo Mercado</h3>
                                <p class="has-icon icon-company">Vox Media</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/jeremy-b-merrill/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Jeremy B. Merrill">
                    
                                <h3 class="hed-promo">Jeremy B. Merrill</h3>
                                <p class="has-icon icon-company">ProPublica</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/andrew-metcalf/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Andrew Metcalf">
                    
                                <h3 class="hed-promo">Andrew Metcalf</h3>
                                <p class="has-icon icon-company"></p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/robinson-meyer/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Robinson Meyer">
                    
                                <h3 class="hed-promo">Robinson Meyer</h3>
                                <p class="has-icon icon-company">Atlantic Media</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/mike-migurski/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Mike Migurski">
                    
                                <h3 class="hed-promo">Mike Migurski</h3>
                                <p class="has-icon icon-company"></p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/lily-mihalik/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Lily Mihalik">
                    
                                <h3 class="hed-promo">Lily Mihalik</h3>
                                <p class="has-icon icon-company">The Los Angeles Times</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/michelle-minkoff/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Michelle Minkoff">
                    
                                <h3 class="hed-promo">Michelle Minkoff</h3>
                                <p class="has-icon icon-company">Associated Press</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/kerry-mitchell/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Kerry Mitchell">
                    
                                <h3 class="hed-promo">Kerry Mitchell</h3>
                                <p class="has-icon icon-company">The Chronicle of Higher Education</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/glenn-mohre/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Glenn Mohre">
                    
                                <h3 class="hed-promo">Glenn Mohre</h3>
                                <p class="has-icon icon-company"></p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/rebekah-monson/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Rebekah Monson">
                    
                                <h3 class="hed-promo">Rebekah Monson</h3>
                                <p class="has-icon icon-company"></p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/wilberto-morales/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Wilberto Morales">
                    
                                <h3 class="hed-promo">Wilberto Morales</h3>
                                <p class="has-icon icon-company"></p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/miguel-moran/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Miguel Morán">
                    
                                <h3 class="hed-promo">Miguel Morán</h3>
                                <p class="has-icon icon-company">Civica Digital</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/laura-morel/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Laura Morel">
                    
                                <h3 class="hed-promo">Laura Morel</h3>
                                <p class="has-icon icon-company">Tampa Bay Times</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/adele-morgan/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Adele Morgan">
                    
                                <h3 class="hed-promo">Adele Morgan</h3>
                                <p class="has-icon icon-company">The Wall Street Journal</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/renda-morton/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Renda Morton">
                    
                                <h3 class="hed-promo">Renda Morton</h3>
                                <p class="has-icon icon-company">The New York Times</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/jerry-mosemak/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Jerry Mosemak">
                    
                                <h3 class="hed-promo">Jerry Mosemak</h3>
                                <p class="has-icon icon-company">USA Today</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/aurelia-moser/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Aurelia Moser">
                    
                                <h3 class="hed-promo">Aurelia Moser</h3>
                                <p class="has-icon icon-company">OpenNews</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/sarah-moughty/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Sarah Moughty">
                    
                                <h3 class="hed-promo">Sarah Moughty</h3>
                                <p class="has-icon icon-company">Frontline</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/miranda-mulligan/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Miranda Mulligan">
                    
                                <h3 class="hed-promo">Miranda Mulligan</h3>
                                <p class="has-icon icon-company">Knight Lab</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/ryan-d-murphy/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Ryan D. Murphy">
                    
                                <h3 class="hed-promo">Ryan D. Murphy</h3>
                                <p class="has-icon icon-company">Texas Tribune</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/eli-j-murray/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Eli J. Murray">
                    
                                <h3 class="hed-promo">Eli J. Murray</h3>
                                <p class="has-icon icon-company"></p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/maryanne-murray/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Maryanne Murray">
                    
                                <h3 class="hed-promo">Maryanne Murray</h3>
                                <p class="has-icon icon-company">Reuters</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/scott-murray/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Scott Murray">
                    
                                <h3 class="hed-promo">Scott Murray</h3>
                                <p class="has-icon icon-company"></p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/lindsay-muscato/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Lindsay Muscato">
                    
                                <h3 class="hed-promo">Lindsay Muscato</h3>
                                <p class="has-icon icon-company"></p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/ben-myers/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Ben Myers">
                    
                                <h3 class="hed-promo">Ben Myers</h3>
                                <p class="has-icon icon-company">The Chronicle of Higher Education</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/jacky-myint/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Jacky Myint">
                    
                                <h3 class="hed-promo">Jacky Myint</h3>
                                <p class="has-icon icon-company">The New York Times</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/irakli-nadareishvili/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Irakli Nadareishvili">
                    
                                <h3 class="hed-promo">Irakli Nadareishvili</h3>
                                <p class="has-icon icon-company"></p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/ryan-nagle/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Ryan Nagle">
                    
                                <h3 class="hed-promo">Ryan Nagle</h3>
                                <p class="has-icon icon-company">INN</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/elaina-natario/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Elaina Natario">
                    
                                <h3 class="hed-promo">Elaina Natario</h3>
                                <p class="has-icon icon-company">Boston Globe Media</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/tom-nehil/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Tom Nehil">
                    
                                <h3 class="hed-promo">Tom Nehil</h3>
                                <p class="has-icon icon-company">MinnPost</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/john-nelson/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="John Nelson">
                    
                                <h3 class="hed-promo">John Nelson</h3>
                                <p class="has-icon icon-company"></p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/shazna-nessa/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Shazna Nessa">
                    
                                <h3 class="hed-promo">Shazna Nessa</h3>
                                <p class="has-icon icon-company"></p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/josh-neufeld/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Josh Neufeld">
                    
                                <h3 class="hed-promo">Josh Neufeld</h3>
                                <p class="has-icon icon-company"></p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/caroline-nevitt/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Caroline Nevitt">
                    
                                <h3 class="hed-promo">Caroline Nevitt</h3>
                                <p class="has-icon icon-company">The Financial Times</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/alex-newman/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Alex Newman">
                    
                                <h3 class="hed-promo">Alex Newman</h3>
                                <p class="has-icon icon-company">Al Jazeera America</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/dan-nguyen/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Dan Nguyen">
                    
                                <h3 class="hed-promo">Dan Nguyen</h3>
                                <p class="has-icon icon-company">ProPublica</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/hoa-nguyen/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Hoa Nguyen">
                    
                                <h3 class="hed-promo">Hoa Nguyen</h3>
                                <p class="has-icon icon-company">The Journal News/LoHud.com</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/michael-nieling/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Michael  Nieling">
                    
                                <h3 class="hed-promo">Michael  Nieling</h3>
                                <p class="has-icon icon-company">Ocupop</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/joanna-nikas/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Joanna Nikas">
                    
                                <h3 class="hed-promo">Joanna Nikas</h3>
                                <p class="has-icon icon-company">The New York Times</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/cory-obrien/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Cory O'Brien">
                    
                                <h3 class="hed-promo">Cory O’Brien</h3>
                                <p class="has-icon icon-company"></p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/soo-oh/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Soo Oh">
                    
                                <h3 class="hed-promo">Soo Oh</h3>
                                <p class="has-icon icon-company"></p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/brian-oleary/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Brian O'Leary">
                    
                                <h3 class="hed-promo">Brian O’Leary</h3>
                                <p class="has-icon icon-company">The Chronicle of Higher Education</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/daniel-x-oneil/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Daniel X.  O'Neil">
                    
                                <h3 class="hed-promo">Daniel X.  O’Neil</h3>
                                <p class="has-icon icon-company"></p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/claire-oneill/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Claire O'Neill">
                    
                                <h3 class="hed-promo">Claire O’Neill</h3>
                                <p class="has-icon icon-company">NPR</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/corey-oordt/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Corey Oordt">
                    
                                <h3 class="hed-promo">Corey Oordt</h3>
                                <p class="has-icon icon-company"></p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/jason-ormand/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Jason Ormand">
                    
                                <h3 class="hed-promo">Jason Ormand</h3>
                                <p class="has-icon icon-company">Vox Media</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/john-c-osborn/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="John C. Osborn">
                    
                                <h3 class="hed-promo">John C. Osborn</h3>
                                <p class="has-icon icon-company"></p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/paul-overberg/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Paul Overberg">
                    
                                <h3 class="hed-promo">Paul Overberg</h3>
                                <p class="has-icon icon-company">USA Today</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/erika-owens/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Erika Owens">
                    
                                <h3 class="hed-promo">Erika Owens</h3>
                                <p class="has-icon icon-company">OpenNews</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/troy-oxford/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Troy Oxford">
                    
                                <h3 class="hed-promo">Troy Oxford</h3>
                                <p class="has-icon icon-company">The Dallas Morning News</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/alan-palazzolo/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Alan Palazzolo">
                    
                                <h3 class="hed-promo">Alan Palazzolo</h3>
                                <p class="has-icon icon-company">MinnPost</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/haeyoun-park/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Haeyoun Park">
                    
                                <h3 class="hed-promo">Haeyoun Park</h3>
                                <p class="has-icon icon-company">The New York Times</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/katie-park/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Katie Park">
                    
                                <h3 class="hed-promo">Katie Park</h3>
                                <p class="has-icon icon-company">The Washington Post</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/alicia-parlapiano/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Alicia Parlapiano">
                    
                                <h3 class="hed-promo">Alicia Parlapiano</h3>
                                <p class="has-icon icon-company">The New York Times</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/yuliya-parshina-kottas/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Yuliya  Parshina-Kottas">
                    
                                <h3 class="hed-promo">Yuliya  Parshina-Kottas</h3>
                                <p class="has-icon icon-company">The New York Times</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/miguel-paz/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Miguel Paz">
                    
                                <h3 class="hed-promo">Miguel Paz</h3>
                                <p class="has-icon icon-company"></p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/nicole-perlroth/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Nicole Perlroth">
                    
                                <h3 class="hed-promo">Nicole Perlroth</h3>
                                <p class="has-icon icon-company">The New York Times</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/anthony-pesce/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Anthony Pesce">
                    
                                <h3 class="hed-promo">Anthony Pesce</h3>
                                <p class="has-icon icon-company">The Los Angeles Times</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/latoya-peterson/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Latoya Peterson">
                    
                                <h3 class="hed-promo">Latoya Peterson</h3>
                                <p class="has-icon icon-company">Al Jazeera America</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/andrew-phelps/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Andrew Phelps">
                    
                                <h3 class="hed-promo">Andrew Phelps</h3>
                                <p class="has-icon icon-company">The New York Times</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/evelyn-xiaoqing-pi/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Evelyn Xiaoqing Pi">
                    
                                <h3 class="hed-promo">Evelyn Xiaoqing Pi</h3>
                                <p class="has-icon icon-company"></p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/michael-piccorossi/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Michael Piccorossi">
                    
                                <h3 class="hed-promo">Michael Piccorossi</h3>
                                <p class="has-icon icon-company">The Pew Research Center</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/rhyne-piggott/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Rhyne Piggott">
                    
                                <h3 class="hed-promo">Rhyne Piggott</h3>
                                <p class="has-icon icon-company">Al Jazeera America</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/aron-pilhofer/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Aron Pilhofer">
                    
                                <h3 class="hed-promo">Aron Pilhofer</h3>
                                <p class="has-icon icon-company">DocumentCloud, Hacks/Hackers, The New York Times</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/ben-pilkerton/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Ben Pilkerton">
                    
                                <h3 class="hed-promo">Ben Pilkerton</h3>
                                <p class="has-icon icon-company">The Chronicle of Higher Education</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/andrew-pinzler/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Andrew Pinzler">
                    
                                <h3 class="hed-promo">Andrew Pinzler</h3>
                                <p class="has-icon icon-company">NBC News</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/ryan-pitts/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Ryan Pitts">
                    
                                <h3 class="hed-promo">Ryan Pitts</h3>
                                <p class="has-icon icon-company">Census Reporter, OpenNews</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/adam-playford/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Adam Playford">
                    
                                <h3 class="hed-promo">Adam Playford</h3>
                                <p class="has-icon icon-company">Tampa Bay Times</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/cezary-podkul/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Cezary Podkul">
                    
                                <h3 class="hed-promo">Cezary Podkul</h3>
                                <p class="has-icon icon-company">Reuters</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/nadja-popovich/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Nadja Popovich">
                    
                                <h3 class="hed-promo">Nadja Popovich</h3>
                                <p class="has-icon icon-company">The Guardian</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/kenton-powell/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Kenton  Powell">
                    
                                <h3 class="hed-promo">Kenton  Powell</h3>
                                <p class="has-icon icon-company">The Guardian</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/victor-powell/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Victor Powell">
                    
                                <h3 class="hed-promo">Victor Powell</h3>
                                <p class="has-icon icon-company"></p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/daniel-pritchett/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Daniel Pritchett">
                    
                                <h3 class="hed-promo">Daniel Pritchett</h3>
                                <p class="has-icon icon-company">The New York Times</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/hong-qu/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Hong Qu">
                    
                                <h3 class="hed-promo">Hong Qu</h3>
                                <p class="has-icon icon-company">Fusion</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/lauren-rabaino/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Lauren Rabaino">
                    
                                <h3 class="hed-promo">Lauren Rabaino</h3>
                                <p class="has-icon icon-company">Vox Media</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/zara-rahman/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Zara  Rahman">
                    
                                <h3 class="hed-promo">Zara  Rahman</h3>
                                <p class="has-icon icon-company"></p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/tasneem-raja/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Tasneem Raja">
                    
                                <h3 class="hed-promo">Tasneem Raja</h3>
                                <p class="has-icon icon-company">Mother Jones</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/pratheek-rebala/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Pratheek Rebala">
                    
                                <h3 class="hed-promo">Pratheek Rebala</h3>
                                <p class="has-icon icon-company">Time </p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/kim-rees/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Kim Rees">
                    
                                <h3 class="hed-promo">Kim Rees</h3>
                                <p class="has-icon icon-company"></p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/justin-reese/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Justin Reese">
                    
                                <h3 class="hed-promo">Justin Reese</h3>
                                <p class="has-icon icon-company">DocumentCloud</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/reed-reibstein/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Reed Reibstein">
                    
                                <h3 class="hed-promo">Reed Reibstein</h3>
                                <p class="has-icon icon-company">American City Business Journals</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/erik-reyna/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Erik Reyna">
                    
                                <h3 class="hed-promo">Erik Reyna</h3>
                                <p class="has-icon icon-company"></p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/nissa-rhee/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Nissa Rhee">
                    
                                <h3 class="hed-promo">Nissa Rhee</h3>
                                <p class="has-icon icon-company"></p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/gerald-rich-1/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Gerald Rich">
                    
                                <h3 class="hed-promo">Gerald Rich</h3>
                                <p class="has-icon icon-company">Vocativ</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/gerald-rich/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Gerald Rich">
                    
                                <h3 class="hed-promo">Gerald Rich</h3>
                                <p class="has-icon icon-company"></p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/ndrew-/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Ændrew Rininsland">
                    
                                <h3 class="hed-promo">Ændrew Rininsland</h3>
                                <p class="has-icon icon-company">The Times and Sunday Times</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/miguel-rios/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Miguel Rios">
                    
                                <h3 class="hed-promo">Miguel Rios</h3>
                                <p class="has-icon icon-company"></p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/graham-roberts/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Graham Roberts">
                    
                                <h3 class="hed-promo">Graham Roberts</h3>
                                <p class="has-icon icon-company">The New York Times</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/garrett-robinson/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Garrett Robinson">
                    
                                <h3 class="hed-promo">Garrett Robinson</h3>
                                <p class="has-icon icon-company">Freedom of the Press Foundation</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/bill-rockwood/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Bill Rockwood">
                    
                                <h3 class="hed-promo">Bill Rockwood</h3>
                                <p class="has-icon icon-company">Frontline</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/gabriela-rodriguez/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Gabriela Rodriguez">
                    
                                <h3 class="hed-promo">Gabriela Rodriguez</h3>
                                <p class="has-icon icon-company">OpenNews</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/simon-rogers/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Simon Rogers">
                    
                                <h3 class="hed-promo">Simon Rogers</h3>
                                <p class="has-icon icon-company">Twitter</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/holman-romero/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Holman Romero">
                    
                                <h3 class="hed-promo">Holman Romero</h3>
                                <p class="has-icon icon-company">Sourcefabric</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/irene-ros/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Irene Ros">
                    
                                <h3 class="hed-promo">Irene Ros</h3>
                                <p class="has-icon icon-company">Bocoup</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/luke-rosiak/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Luke Rosiak">
                    
                                <h3 class="hed-promo">Luke Rosiak</h3>
                                <p class="has-icon icon-company">The Washington Times</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/andy-rossback/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Andy Rossback">
                    
                                <h3 class="hed-promo">Andy Rossback</h3>
                                <p class="has-icon icon-company">The Marshall Project</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/kori-rumore/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Kori Rumore">
                    
                                <h3 class="hed-promo">Kori Rumore</h3>
                                <p class="has-icon icon-company">The Chicago Tribune</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/bob-sacha/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Bob Sacha">
                    
                                <h3 class="hed-promo">Bob Sacha</h3>
                                <p class="has-icon icon-company"></p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/eric-sagara/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Eric Sagara">
                    
                                <h3 class="hed-promo">Eric Sagara</h3>
                                <p class="has-icon icon-company">Reveal</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/craig-saila/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Craig Saila">
                    
                                <h3 class="hed-promo">Craig Saila</h3>
                                <p class="has-icon icon-company">The Globe and Mail</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/sarah-sampsel/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Sarah Sampsel">
                    
                                <h3 class="hed-promo">Sarah Sampsel</h3>
                                <p class="has-icon icon-company">The Washington Post</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/zachary-t-sampson/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Zachary T. Sampson">
                    
                                <h3 class="hed-promo">Zachary T. Sampson</h3>
                                <p class="has-icon icon-company">Tampa Bay Times</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/linda-sandvik/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Linda Sandvik">
                    
                                <h3 class="hed-promo">Linda Sandvik</h3>
                                <p class="has-icon icon-company">OpenNews, The Guardian</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/jason-santa-maria/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Jason Santa Maria">
                    
                                <h3 class="hed-promo">Jason Santa Maria</h3>
                                <p class="has-icon icon-company">Vox Media</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/mariana-santos/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Mariana Santos">
                    
                                <h3 class="hed-promo">Mariana Santos</h3>
                                <p class="has-icon icon-company">The Guardian</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/carmen-sarlo/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Carmen Sarlo">
                    
                                <h3 class="hed-promo">Carmen Sarlo</h3>
                                <p class="has-icon icon-company">Vox Media</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/jim-schachter/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Jim Schachter">
                    
                                <h3 class="hed-promo">Jim Schachter</h3>
                                <p class="has-icon icon-company">The Los Angeles Times, The New York Times, WNYC</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/conor-schaefer/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Conor Schaefer">
                    
                                <h3 class="hed-promo">Conor Schaefer</h3>
                                <p class="has-icon icon-company">Freedom of the Press Foundation</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/rachel-schallom/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Rachel Schallom">
                    
                                <h3 class="hed-promo">Rachel Schallom</h3>
                                <p class="has-icon icon-company">Sun Sentinel</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/kevin-schaul/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Kevin Schaul">
                    
                                <h3 class="hed-promo">Kevin Schaul</h3>
                                <p class="has-icon icon-company">The Seattle Times</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/andrei-scheinkman/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Andrei Scheinkman">
                    
                                <h3 class="hed-promo">Andrei Scheinkman</h3>
                                <p class="has-icon icon-company">FiveThirtyEight</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/brittany-schell/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Brittany Schell">
                    
                                <h3 class="hed-promo">Brittany Schell</h3>
                                <p class="has-icon icon-company"></p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/doug-schepers/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Doug Schepers">
                    
                                <h3 class="hed-promo">Doug Schepers</h3>
                                <p class="has-icon icon-company"></p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/kelsey-scherer/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Kelsey Scherer">
                    
                                <h3 class="hed-promo">Kelsey Scherer</h3>
                                <p class="has-icon icon-company">Vox Media</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/sara-schnadt/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Sara Schnadt">
                    
                                <h3 class="hed-promo">Sara Schnadt</h3>
                                <p class="has-icon icon-company">Census Reporter</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/mark-schoofs/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Mark Schoofs">
                    
                                <h3 class="hed-promo">Mark Schoofs</h3>
                                <p class="has-icon icon-company">BuzzFeed</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/dan-schultz/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Dan  Schultz">
                    
                                <h3 class="hed-promo">Dan  Schultz</h3>
                                <p class="has-icon icon-company">Boston Globe Media, OpenNews</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/adam-schweigert/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Adam Schweigert">
                    
                                <h3 class="hed-promo">Adam Schweigert</h3>
                                <p class="has-icon icon-company">INN</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/ken-schwencke/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Ken Schwencke">
                    
                                <h3 class="hed-promo">Ken Schwencke</h3>
                                <p class="has-icon icon-company"></p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/theo-schwinke/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Theo Schwinke">
                    
                                <h3 class="hed-promo">Theo Schwinke</h3>
                                <p class="has-icon icon-company">Sourcefabric</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/dalit-shalom/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Dalit Shalom">
                    
                                <h3 class="hed-promo">Dalit Shalom</h3>
                                <p class="has-icon icon-company"></p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/scott-shane/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Scott Shane">
                    
                                <h3 class="hed-promo">Scott Shane</h3>
                                <p class="has-icon icon-company">The New York Times</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/yian-shang/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Yian Shang">
                    
                                <h3 class="hed-promo">Yian Shang</h3>
                                <p class="has-icon icon-company">Vox Media</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/remy-sharp/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Remy Sharp">
                    
                                <h3 class="hed-promo">Remy Sharp</h3>
                                <p class="has-icon icon-company"></p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/al-shaw/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Al Shaw">
                    
                                <h3 class="hed-promo">Al Shaw</h3>
                                <p class="has-icon icon-company">ProPublica</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/martin-shelton/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Martin Shelton">
                    
                                <h3 class="hed-promo">Martin Shelton</h3>
                                <p class="has-icon icon-company">The Coral Project, The New York Times</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/shane-shifflett/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Shane Shifflett">
                    
                                <h3 class="hed-promo">Shane Shifflett</h3>
                                <p class="has-icon icon-company">The Huffington Post</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/joe-shoulak/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Joe Shoulak">
                    
                                <h3 class="hed-promo">Joe Shoulak</h3>
                                <p class="has-icon icon-company">The Wall Street Journal</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/tim-showers/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Tim Showers">
                    
                                <h3 class="hed-promo">Tim Showers</h3>
                                <p class="has-icon icon-company">Foreign Policy</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/jason-sigal/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Jason Sigal">
                    
                                <h3 class="hed-promo">Jason Sigal</h3>
                                <p class="has-icon icon-company"></p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/robert-simmon/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Robert Simmon">
                    
                                <h3 class="hed-promo">Robert Simmon</h3>
                                <p class="has-icon icon-company"></p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/basile-simon/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Basile Simon">
                    
                                <h3 class="hed-promo">Basile Simon</h3>
                                <p class="has-icon icon-company">BBC News</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/sara-simon/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Sara Simon">
                    
                                <h3 class="hed-promo">Sara Simon</h3>
                                <p class="has-icon icon-company">Vermont Public Radio</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/jeremy-singer-vine/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Jeremy Singer-Vine">
                    
                                <h3 class="hed-promo">Jeremy Singer-Vine</h3>
                                <p class="has-icon icon-company">BuzzFeed, The Wall Street Journal</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/dan-sinker/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Dan Sinker">
                    
                                <h3 class="hed-promo">Dan Sinker</h3>
                                <p class="has-icon icon-company">OpenNews</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/cj-sinner/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="CJ Sinner">
                    
                                <h3 class="hed-promo">CJ Sinner</h3>
                                <p class="has-icon icon-company">Star Tribune</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/david-sleight/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="David Sleight">
                    
                                <h3 class="hed-promo">David Sleight</h3>
                                <p class="has-icon icon-company">ProPublica</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/sarah-slobin/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Sarah Slobin">
                    
                                <h3 class="hed-promo">Sarah Slobin</h3>
                                <p class="has-icon icon-company"></p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/paul-smalera/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Paul Smalera">
                    
                                <h3 class="hed-promo">Paul Smalera</h3>
                                <p class="has-icon icon-company"></p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/scott-smallwood/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Scott Smallwood">
                    
                                <h3 class="hed-promo">Scott Smallwood</h3>
                                <p class="has-icon icon-company">The Chronicle of Higher Education</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/julia-smith/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Julia Smith">
                    
                                <h3 class="hed-promo">Julia Smith</h3>
                                <p class="has-icon icon-company">INN, OpenNews, Reveal</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/jessica-soberman/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Jessica Soberman">
                    
                                <h3 class="hed-promo">Jessica Soberman</h3>
                                <p class="has-icon icon-company"></p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/elisabeth-soep/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Elisabeth  Soep">
                    
                                <h3 class="hed-promo">Elisabeth  Soep</h3>
                                <p class="has-icon icon-company">Youth Radio</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/ben-solomon/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Ben Solomon">
                    
                                <h3 class="hed-promo">Ben Solomon</h3>
                                <p class="has-icon icon-company">The New York Times</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/daniel-solomon/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Daniel  Solomon">
                    
                                <h3 class="hed-promo">Daniel  Solomon</h3>
                                <p class="has-icon icon-company"></p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/josh-solomon/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Josh Solomon">
                    
                                <h3 class="hed-promo">Josh Solomon</h3>
                                <p class="has-icon icon-company">Tampa Bay Times</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/jonathan-soma/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Jonathan Soma">
                    
                                <h3 class="hed-promo">Jonathan Soma</h3>
                                <p class="has-icon icon-company"></p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/chris-sopher/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Chris Sopher">
                    
                                <h3 class="hed-promo">Chris Sopher</h3>
                                <p class="has-icon icon-company"></p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/alex-spangher/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Alex Spangher">
                    
                                <h3 class="hed-promo">Alex Spangher</h3>
                                <p class="has-icon icon-company">The New York Times</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/catherine-spangler/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Catherine Spangler">
                    
                                <h3 class="hed-promo">Catherine Spangler</h3>
                                <p class="has-icon icon-company">The New York Times</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/ruth-spencer/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Ruth Spencer">
                    
                                <h3 class="hed-promo">Ruth Spencer</h3>
                                <p class="has-icon icon-company">The Guardian</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/ben-spraggon/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Ben Spraggon">
                    
                                <h3 class="hed-promo">Ben Spraggon</h3>
                                <p class="has-icon icon-company"></p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/martin-stabe/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Martin Stabe">
                    
                                <h3 class="hed-promo">Martin Stabe</h3>
                                <p class="has-icon icon-company">The Financial Times</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/zach-stafford/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Zach  Stafford">
                    
                                <h3 class="hed-promo">Zach  Stafford</h3>
                                <p class="has-icon icon-company">The Guardian</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/courtney-stanton/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Courtney Stanton">
                    
                                <h3 class="hed-promo">Courtney Stanton</h3>
                                <p class="has-icon icon-company"></p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/dave-stanton/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Dave  Stanton">
                    
                                <h3 class="hed-promo">Dave  Stanton</h3>
                                <p class="has-icon icon-company"></p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/kio-stark/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Kio Stark">
                    
                                <h3 class="hed-promo">Kio Stark</h3>
                                <p class="has-icon icon-company">OpenNews, WNYC</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/jennifer-stark/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Jennifer A.  Stark">
                    
                                <h3 class="hed-promo">Jennifer A.  Stark</h3>
                                <p class="has-icon icon-company">The Washington Post</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/matt-stiles/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Matt Stiles">
                    
                                <h3 class="hed-promo">Matt Stiles</h3>
                                <p class="has-icon icon-company"></p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/halle-stockton/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Halle Stockton">
                    
                                <h3 class="hed-promo">Halle Stockton</h3>
                                <p class="has-icon icon-company">PublicSource</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/zara-stone/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Zara Stone">
                    
                                <h3 class="hed-promo">Zara Stone</h3>
                                <p class="has-icon icon-company"></p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/lisa-strausfeld/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Lisa Strausfeld">
                    
                                <h3 class="hed-promo">Lisa Strausfeld</h3>
                                <p class="has-icon icon-company">Bloomberg</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/jonathan-stray/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Jonathan Stray">
                    
                                <h3 class="hed-promo">Jonathan Stray</h3>
                                <p class="has-icon icon-company">Columbia University Graduate School of Journalism</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/michael-strickland/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Michael Strickland">
                    
                                <h3 class="hed-promo">Michael Strickland</h3>
                                <p class="has-icon icon-company">The New York Times</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/mike-sufal/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Mike Sudal">
                    
                                <h3 class="hed-promo">Mike Sudal</h3>
                                <p class="has-icon icon-company">The Wall Street Journal</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/kavya-sukumar/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Kavya Sukumar">
                    
                                <h3 class="hed-promo">Kavya Sukumar</h3>
                                <p class="has-icon icon-company">Palm Beach Post</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/dan-sullivan/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Dan Sullivan">
                    
                                <h3 class="hed-promo">Dan Sullivan</h3>
                                <p class="has-icon icon-company">Tampa Bay Times</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/ed-summers/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Ed Summers">
                    
                                <h3 class="hed-promo">Ed Summers</h3>
                                <p class="has-icon icon-company"></p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/albert-sun/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Albert Sun">
                    
                                <h3 class="hed-promo">Albert Sun</h3>
                                <p class="has-icon icon-company">The New York Times</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/samantha-sunne/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Samantha  Sunne">
                    
                                <h3 class="hed-promo">Samantha  Sunne</h3>
                                <p class="has-icon icon-company"></p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/jack-suntrup/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Jack Suntrup">
                    
                                <h3 class="hed-promo">Jack Suntrup</h3>
                                <p class="has-icon icon-company">Tampa Bay Times</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/beckie-supiano/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Beckie Supiano">
                    
                                <h3 class="hed-promo">Beckie Supiano</h3>
                                <p class="has-icon icon-company">The Chronicle of Higher Education</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/travis-swicegood/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Travis Swicegood">
                    
                                <h3 class="hed-promo">Travis Swicegood</h3>
                                <p class="has-icon icon-company"></p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/earl-swigert/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Earl Swigert">
                    
                                <h3 class="hed-promo">Earl Swigert</h3>
                                <p class="has-icon icon-company"></p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/charlie-szymanski/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Charlie Szymanski">
                    
                                <h3 class="hed-promo">Charlie Szymanski</h3>
                                <p class="has-icon icon-company">Reuters</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/martin-szyszlican/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Martín Szyszlican">
                    
                                <h3 class="hed-promo">Martín Szyszlican</h3>
                                <p class="has-icon icon-company"></p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/kendall-taggart/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Kendall Taggart">
                    
                                <h3 class="hed-promo">Kendall Taggart</h3>
                                <p class="has-icon icon-company">BuzzFeed</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/allen-tan/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Allen Tan">
                    
                                <h3 class="hed-promo">Allen Tan</h3>
                                <p class="has-icon icon-company">The New York Times</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/shelly-tan/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Shelly Tan">
                    
                                <h3 class="hed-promo">Shelly Tan</h3>
                                <p class="has-icon icon-company"></p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/ying-quan-tan/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Ying Quan Tan">
                    
                                <h3 class="hed-promo">Ying Quan Tan</h3>
                                <p class="has-icon icon-company"></p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/rumsey-taylor/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Rumsey Taylor">
                    
                                <h3 class="hed-promo">Rumsey Taylor</h3>
                                <p class="has-icon icon-company">The New York Times</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/scott-taylor/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Scott  Taylor">
                    
                                <h3 class="hed-promo">Scott  Taylor</h3>
                                <p class="has-icon icon-company">The New York Times</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/john-templon/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="John Templon">
                    
                                <h3 class="hed-promo">John Templon</h3>
                                <p class="has-icon icon-company">BuzzFeed</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/kai-teoh/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Kai Teoh">
                    
                                <h3 class="hed-promo">Kai Teoh</h3>
                                <p class="has-icon icon-company">St. Cloud Times</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/adam-thomas/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Adam Thomas">
                    
                                <h3 class="hed-promo">Adam Thomas</h3>
                                <p class="has-icon icon-company"></p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/andy-thomason/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Andy Thomason">
                    
                                <h3 class="hed-promo">Andy Thomason</h3>
                                <p class="has-icon icon-company">The Chronicle of Higher Education</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/juan-thomassie/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Juan Thomassie">
                    
                                <h3 class="hed-promo">Juan Thomassie</h3>
                                <p class="has-icon icon-company">USA Today</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/cheryl-w-thompson/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Cheryl W. Thompson">
                    
                                <h3 class="hed-promo">Cheryl W. Thompson</h3>
                                <p class="has-icon icon-company"></p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/stuart-thompson/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Stuart A. Thompson">
                    
                                <h3 class="hed-promo">Stuart A. Thompson</h3>
                                <p class="has-icon icon-company">The Wall Street Journal</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/jer-thorp/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Jer Thorp">
                    
                                <h3 class="hed-promo">Jer Thorp</h3>
                                <p class="has-icon icon-company"></p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/simon-thulbourn/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Simon Thulbourn">
                    
                                <h3 class="hed-promo">Simon Thulbourn</h3>
                                <p class="has-icon icon-company">BBC News</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/mike-tigas/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Mike Tigas">
                    
                                <h3 class="hed-promo">Mike Tigas</h3>
                                <p class="has-icon icon-company">OpenNews</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/trevor-timm/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Trevor Timm">
                    
                                <h3 class="hed-promo">Trevor Timm</h3>
                                <p class="has-icon icon-company">Freedom of the Press Foundation</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/ginnie-titterton/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Ginnie Titterton">
                    
                                <h3 class="hed-promo">Ginnie Titterton</h3>
                                <p class="has-icon icon-company">The Chronicle of Higher Education</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/andy-tow/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Andy Tow">
                    
                                <h3 class="hed-promo">Andy Tow</h3>
                                <p class="has-icon icon-company"></p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/andrew-tran/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Andrew Tran">
                    
                                <h3 class="hed-promo">Andrew Tran</h3>
                                <p class="has-icon icon-company">Boston Globe Media</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/mariana-trigo-viera/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Mariana Trigo Viera">
                    
                                <h3 class="hed-promo">Mariana Trigo Viera</h3>
                                <p class="has-icon icon-company">La Nación</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/francis-tseng/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Francis Tseng">
                    
                                <h3 class="hed-promo">Francis Tseng</h3>
                                <p class="has-icon icon-company">OpenNews, The Coral Project</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/serdar-tumgoren/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Serdar Tumgoren">
                    
                                <h3 class="hed-promo">Serdar Tumgoren</h3>
                                <p class="has-icon icon-company">The Washington Post</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/eric-ulken/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Eric Ulken">
                    
                                <h3 class="hed-promo">Eric Ulken</h3>
                                <p class="has-icon icon-company">Philly.com</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/marcos-vanetta/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Marcos Vanetta">
                    
                                <h3 class="hed-promo">Marcos Vanetta</h3>
                                <p class="has-icon icon-company">OpenNews</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/lisa-van-gelder/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Lisa van Gelder">
                    
                                <h3 class="hed-promo">Lisa van Gelder</h3>
                                <p class="has-icon icon-company"></p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/emma-van-sant/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Emma Van Sant">
                    
                                <h3 class="hed-promo">Emma Van Sant</h3>
                                <p class="has-icon icon-company">Sourcefabric</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/kathryn-varn/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Kathryn  Varn">
                    
                                <h3 class="hed-promo">Kathryn  Varn</h3>
                                <p class="has-icon icon-company">Tampa Bay Times</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/juan-velasco/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Juan Velasco">
                    
                                <h3 class="hed-promo">Juan Velasco</h3>
                                <p class="has-icon icon-company"></p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/noah-veltman/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Noah Veltman">
                    
                                <h3 class="hed-promo">Noah Veltman</h3>
                                <p class="has-icon icon-company">OpenNews, WNYC</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/lucio-villa/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Lucio Villa">
                    
                                <h3 class="hed-promo">Lucio Villa</h3>
                                <p class="has-icon icon-company">The Chicago Reporter</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/seth-vincent/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Seth Vincent">
                    
                                <h3 class="hed-promo">Seth Vincent</h3>
                                <p class="has-icon icon-company"></p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/kawandeep-virdee/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Kawandeep Virdee">
                    
                                <h3 class="hed-promo">Kawandeep Virdee</h3>
                                <p class="has-icon icon-company"></p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/andrew-vitvitsky/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Andrew Vitvitsky">
                    
                                <h3 class="hed-promo">Andrew Vitvitsky</h3>
                                <p class="has-icon icon-company"></p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/lam-vo/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Lam Vo">
                    
                                <h3 class="hed-promo">Lam Vo</h3>
                                <p class="has-icon icon-company">Al Jazeera America</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/ivar-vong/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Ivar  Vong">
                    
                                <h3 class="hed-promo">Ivar  Vong</h3>
                                <p class="has-icon icon-company">The Daily Emerald, The Marshall Project</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/petr-vostrel/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Petr Vostřel">
                    
                                <h3 class="hed-promo">Petr Vostřel</h3>
                                <p class="has-icon icon-company"></p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/evan-wagstaff/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Evan Wagstaff">
                    
                                <h3 class="hed-promo">Evan Wagstaff</h3>
                                <p class="has-icon icon-company">The Los Angeles Times</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/matt-waite/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Matt Waite">
                    
                                <h3 class="hed-promo">Matt Waite</h3>
                                <p class="has-icon icon-company"></p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/sharon-walsh/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Sharon Walsh">
                    
                                <h3 class="hed-promo">Sharon Walsh</h3>
                                <p class="has-icon icon-company">PublicSource</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/joe-ward/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Joe Ward">
                    
                                <h3 class="hed-promo">Joe Ward</h3>
                                <p class="has-icon icon-company">The New York Times</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/derek-watkins/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Derek Watkins">
                    
                                <h3 class="hed-promo">Derek Watkins</h3>
                                <p class="has-icon icon-company">The New York Times</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/charlie-weaver/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Charlie Weaver">
                    
                                <h3 class="hed-promo">Charlie Weaver</h3>
                                <p class="has-icon icon-company">Emerald Media Group</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/charlie-weaver-1/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Charlie Weaver">
                    
                                <h3 class="hed-promo">Charlie Weaver</h3>
                                <p class="has-icon icon-company"></p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/maryjo-webster/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="MaryJo Webster">
                    
                                <h3 class="hed-promo">MaryJo Webster</h3>
                                <p class="has-icon icon-company">Star Tribune</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/stefan-wehrmeyer/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Stefan Wehrmeyer">
                    
                                <h3 class="hed-promo">Stefan Wehrmeyer</h3>
                                <p class="has-icon icon-company">Correct!v</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/sisi-wei/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Sisi Wei">
                    
                                <h3 class="hed-promo">Sisi Wei</h3>
                                <p class="has-icon icon-company">ProPublica, The Washington Post</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/ben-welsh/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Ben Welsh">
                    
                                <h3 class="hed-promo">Ben Welsh</h3>
                                <p class="has-icon icon-company">The Los Angeles Times</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/evan-wexler/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Evan Wexler">
                    
                                <h3 class="hed-promo">Evan Wexler</h3>
                                <p class="has-icon icon-company">Frontline</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/gus-wezerek/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Gus Wezerek">
                    
                                <h3 class="hed-promo">Gus Wezerek</h3>
                                <p class="has-icon icon-company"></p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/jeremy-white/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Jeremy White">
                    
                                <h3 class="hed-promo">Jeremy White</h3>
                                <p class="has-icon icon-company">The New York Times</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/jon-white/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Jon White">
                    
                                <h3 class="hed-promo">Jon White</h3>
                                <p class="has-icon icon-company">Southern California Public Radio</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/thomas-wilburn/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Thomas Wilburn">
                    
                                <h3 class="hed-promo">Thomas Wilburn</h3>
                                <p class="has-icon icon-company">The Seattle Times</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/aaron-williams/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Aaron Williams">
                    
                                <h3 class="hed-promo">Aaron Williams</h3>
                                <p class="has-icon icon-company">San Francisco Chronicle</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/araby-williams/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Araby Williams">
                    
                                <h3 class="hed-promo">Araby Williams</h3>
                                <p class="has-icon icon-company">The Wall Street Journal</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/ashley-williams/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Ashley Williams">
                    
                                <h3 class="hed-promo">Ashley Williams</h3>
                                <p class="has-icon icon-company"></p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/josh-williams/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Josh Williams">
                    
                                <h3 class="hed-promo">Josh Williams</h3>
                                <p class="has-icon icon-company">The New York Times</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/brian-williamson/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Brian Williamson">
                    
                                <h3 class="hed-promo">Brian Williamson</h3>
                                <p class="has-icon icon-company">Broadcasting Board of Governors</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/derek-willis/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Derek Willis">
                    
                                <h3 class="hed-promo">Derek Willis</h3>
                                <p class="has-icon icon-company">The New York Times</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/chris-wilson/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Chris Wilson">
                    
                                <h3 class="hed-promo">Chris Wilson</h3>
                                <p class="has-icon icon-company">Time </p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/andrew-winder/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Andrew Winder">
                    
                                <h3 class="hed-promo">Andrew Winder</h3>
                                <p class="has-icon icon-company"></p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/benoit-wirz/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Benoit Wirz">
                    
                                <h3 class="hed-promo">Benoit Wirz</h3>
                                <p class="has-icon icon-company">The Knight Foundation</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/zach-wise/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Zach Wise">
                    
                                <h3 class="hed-promo">Zach Wise</h3>
                                <p class="has-icon icon-company">Knight Lab, The New York Times</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/julia-wolfe/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Julia Wolfe">
                    
                                <h3 class="hed-promo">Julia Wolfe</h3>
                                <p class="has-icon icon-company">The Globe and Mail</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/michael-workman/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Michael Workman">
                    
                                <h3 class="hed-promo">Michael Workman</h3>
                                <p class="has-icon icon-company">Boston Globe Media</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/ashley-wu/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Ashley Wu">
                    
                                <h3 class="hed-promo">Ashley Wu</h3>
                                <p class="has-icon icon-company">Knight Lab</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/chrys-wu/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Chrys Wu">
                    
                                <h3 class="hed-promo">Chrys Wu</h3>
                                <p class="has-icon icon-company">The New York Times</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/sheng-wu/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Sheng Wu">
                    
                                <h3 class="hed-promo">Sheng Wu</h3>
                                <p class="has-icon icon-company"></p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/jue-yang/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Jue Yang">
                    
                                <h3 class="hed-promo">Jue Yang</h3>
                                <p class="has-icon icon-company">CUNY Graduate School of Journalism</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/david-yanofsky/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="David Yanofsky">
                    
                                <h3 class="hed-promo">David Yanofsky</h3>
                                <p class="has-icon icon-company">Quartz</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/jenny-ye/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Jenny Ye">
                    
                                <h3 class="hed-promo">Jenny Ye</h3>
                                <p class="has-icon icon-company">WNYC</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/david-yee/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="David Yee">
                    
                                <h3 class="hed-promo">David Yee</h3>
                                <p class="has-icon icon-company">Vox Media</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/dylan-yep/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Dylan Yep">
                    
                                <h3 class="hed-promo">Dylan Yep</h3>
                                <p class="has-icon icon-company"></p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/chad-yoder/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Chad Yoder">
                    
                                <h3 class="hed-promo">Chad Yoder</h3>
                                <p class="has-icon icon-company">The Chicago Tribune</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/dan-zajdband/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Dan Zajdband">
                    
                                <h3 class="hed-promo">Dan Zajdband</h3>
                                <p class="has-icon icon-company"></p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/amanda-zamora/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Amanda Zamora">
                    
                                <h3 class="hed-promo">Amanda Zamora</h3>
                                <p class="has-icon icon-company">ProPublica</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/maria-ines-zamudio/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Maria Ines Zamudio">
                    
                                <h3 class="hed-promo">Maria Ines Zamudio</h3>
                                <p class="has-icon icon-company">The Chicago Reporter</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/javier-zarracina/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Javier Zarracina">
                    
                                <h3 class="hed-promo">Javier Zarracina</h3>
                                <p class="has-icon icon-company">Vox Media</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/eric-zassenhaus/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Eric Zassenhaus">
                    
                                <h3 class="hed-promo">Eric Zassenhaus</h3>
                                <p class="has-icon icon-company">Southern California Public Radio</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/alexandra-zayas/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Alexandra Zayas">
                    
                                <h3 class="hed-promo">Alexandra Zayas</h3>
                                <p class="has-icon icon-company">Tampa Bay Times</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/christine-zhang/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Christine Zhang">
                    
                                <h3 class="hed-promo">Christine Zhang</h3>
                                <p class="has-icon icon-company">The Los Angeles Times</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/eli-zhang/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Eli Zhang">
                    
                                <h3 class="hed-promo">Eli Zhang</h3>
                                <p class="has-icon icon-company">Tampa Bay Times</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/elena-zheleva/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Elena Zheleva">
                    
                                <h3 class="hed-promo">Elena Zheleva</h3>
                                <p class="has-icon icon-company">Vox Media</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/youyou-zhou/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Youyou Zhou">
                    
                                <h3 class="hed-promo">Youyou Zhou</h3>
                                <p class="has-icon icon-company"></p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/katie-zhu/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Katie Zhu">
                    
                                <h3 class="hed-promo">Katie Zhu</h3>
                                <p class="has-icon icon-company">Knight Lab</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                        <li class="src-promo">
                            <a href="/people/chris-zubak-skees/">
                    
                                <img src="/tmpl/img/default%401x.png" srcset="/tmpl/img/default@2x.png 2x" alt="Chris Zubak-Skees">
                    
                                <h3 class="hed-promo">Chris Zubak-Skees</h3>
                                <p class="has-icon icon-company">Center for Public Integrity</p>
                            </a>
                        </li><!-- /end .src-promo -->
        
                    </ul><!-- /end .list-promos -->
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