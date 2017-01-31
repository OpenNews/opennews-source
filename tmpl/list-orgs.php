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

<title>Organizations — SOURCE</title>

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
                <h1 class="page-title-lead">Organizations</h1>

                <div class="mod main-lead">
                    <p>Where our community works.</p>
                </div><!-- /end .mod.main-lead -->
                
                <div class="mod">
                    <ul>
                        <li class="profile">
                            <h3 class="profile-name">
                                <a href="/organizations/al-jazeera-america/">
                                    Al Jazeera America
                                </a>
                            </h3>
                            
                            <ul class="profile-links">
                                <li class="has-icon icon-location">New York, NY</li>
                                <li><a class="icon-twitter-alt" href="https://twitter.com/ajam">@ajam</a></li>
                                <li><a class="icon-github" href="https://github.com/ajam">ajam</a></li>
                            </ul>
                        </li><!-- /end .profile-person -->
                        <li class="profile">
                            <h3 class="profile-name">
                                <a href="/organizations/al-jazeera-english/">
                                    <cite class="p-name">Al Jazeera English</cite>
                                </a>
                            </h3>
                            
                            <ul class="profile-links">
                                
                                <li><a class="icon-twitter-alt" href="https://twitter.com/ajenglish">@ajenglish</a></li>
                                
                            </ul>
                        </li><!-- /end .profile-person -->
                        <li class="profile">
                            <h3 class="profile-name">
                                <a href="/organizations/american-city-business-journals/">
                                    <cite class="p-name">American City Business Journals</cite>
                                </a>
                            </h3>
                            
                            <ul class="profile-links">
                                <li class="has-icon icon-location">Charlotte, NC</li>
                                <li><a class="icon-twitter-alt" href="https://twitter.com/bizjournals">@bizjournals</a></li>
                                
                            </ul>
                        </li><!-- /end .profile-person -->
                        <li class="profile">
                            <h3 class="profile-name">
                                <a href="/organizations/american-public-media/">
                                    <cite class="p-name">American Public Media</cite>
                                </a>
                            </h3>
                            
                            <ul class="profile-links">
                                
                                
                                
                            </ul>
                        </li><!-- /end .profile-person -->
                        <li class="profile">
                            <h3 class="profile-name">
                                <a href="/organizations/associated-press/">
                                    <cite class="p-name">Associated Press</cite>
                                </a>
                            </h3>
                            
                            <ul class="profile-links">
                                <li class="has-icon icon-location">New York, NY</li>
                                <li><a class="icon-twitter-alt" href="https://twitter.com/AP">@AP</a></li>
                                
                            </ul>
                        </li><!-- /end .profile-person -->
                        <li class="profile">
                            <h3 class="profile-name">
                                <a href="/organizations/atlantic-media/">
                                    <cite class="p-name">Atlantic Media</cite>
                                </a>
                            </h3>
                            
                            <ul class="profile-links">
                                <li class="has-icon icon-location">Washington, DC</li>
                                <li><a class="icon-twitter-alt" href="https://twitter.com/AtlanticMedia">@AtlanticMedia</a></li>
                                
                            </ul>
                        </li><!-- /end .profile-person -->
                        <li class="profile">
                            <h3 class="profile-name">
                                <a href="/organizations/austin-american-statesman/">
                                    <cite class="p-name">Austin American-Statesman</cite>
                                </a>
                            </h3>
                            
                            <ul class="profile-links">
                                <li class="has-icon icon-location">Austin, TX</li>
                                <li><a class="icon-twitter-alt" href="https://twitter.com/statesman">@statesman</a></li>
                                <li><a class="icon-github" href="https://github.com/statesman">statesman</a></li>
                            </ul>
                        </li><!-- /end .profile-person -->
                        <li class="profile">
                            <h3 class="profile-name">
                                <a href="/organizations/australian-broadcasting-corporation/">
                                    <cite class="p-name">Australian Broadcasting Corporation</cite>
                                </a>
                            </h3>
                            
                            <ul class="profile-links">
                                
                                
                                
                            </ul>
                        </li><!-- /end .profile-person -->
                        <li class="profile">
                            <h3 class="profile-name">
                                <a href="/organizations/bbc-news/">
                                    <cite class="p-name">BBC News</cite>
                                </a>
                            </h3>
                            
                            <ul class="profile-links">
                                <li class="has-icon icon-location">London, United Kingdom</li>
                                <li><a class="icon-twitter-alt" href="https://twitter.com/BBCNews">@BBCNews</a></li>
                                <li><a class="icon-github" href="https://github.com/BBC-News">BBC-News</a></li>
                            </ul>
                        </li><!-- /end .profile-person -->
                        <li class="profile">
                            <h3 class="profile-name">
                                <a href="/organizations/bbc-news-labs/">
                                    <cite class="p-name">BBC News Labs</cite>
                                </a>
                            </h3>
                            
                            <ul class="profile-links">
                                
                                <li><a class="icon-twitter-alt" href="https://twitter.com/BBC_News_Labs">@BBC_News_Labs</a></li>
                                <li><a class="icon-github" href="https://github.com/BBC-News-Labs">BBC-News-Labs</a></li>
                            </ul>
                        </li><!-- /end .profile-person -->
                        <li class="profile">
                            <h3 class="profile-name">
                                <a href="/organizations/berkeley-graduate-school-journalism/">
                                    <cite class="p-name">Berkeley Graduate School of Journalism</cite>
                                </a>
                            </h3>
                            
                            <ul class="profile-links">
                                <li class="has-icon icon-location">Berkeley, CA</li>
                                <li><a class="icon-twitter-alt" href="https://twitter.com/ucbsoj">@ucbsoj</a></li>
                                
                            </ul>
                        </li><!-- /end .profile-person -->
                        <li class="profile">
                            <h3 class="profile-name">
                                <a href="/organizations/bloomberg-news/">
                                    <cite class="p-name">Bloomberg</cite>
                                </a>
                            </h3>
                            
                            <ul class="profile-links">
                                <li class="has-icon icon-location">New York, NY</li>
                                <li><a class="icon-twitter-alt" href="https://twitter.com/BloombergNews">@BloombergNews</a></li>
                                
                            </ul>
                        </li><!-- /end .profile-person -->
                        <li class="profile">
                            <h3 class="profile-name">
                                <a href="/organizations/bocoup/">
                                    <cite class="p-name">Bocoup</cite>
                                </a>
                            </h3>
                            
                            <ul class="profile-links">
                                <li class="has-icon icon-location">Boston, MA</li>
                                <li><a class="icon-twitter-alt" href="https://twitter.com/bocoup">@bocoup</a></li>
                                <li><a class="icon-github" href="https://github.com/bocoup">bocoup</a></li>
                            </ul>
                        </li><!-- /end .profile-person -->
                        <li class="profile">
                            <h3 class="profile-name">
                                <a href="/organizations/boston-globe/">
                                    <cite class="p-name">Boston Globe Media</cite>
                                </a>
                            </h3>
                            
                            <ul class="profile-links">
                                <li class="has-icon icon-location">Boston, MA</li>
                                <li><a class="icon-twitter-alt" href="https://twitter.com/BostonGlobeWork">@BostonGlobeWork</a></li>
                                
                            </ul>
                        </li><!-- /end .profile-person -->
                        <li class="profile">
                            <h3 class="profile-name">
                                <a href="/organizations/brasil-247/">
                                    <cite class="p-name">Brasil 247</cite>
                                </a>
                            </h3>
                            
                            <ul class="profile-links">
                                <li class="has-icon icon-location">Sao Paulo, Brazil</li>
                                <li><a class="icon-twitter-alt" href="https://twitter.com/brasil247">@brasil247</a></li>
                                
                            </ul>
                        </li><!-- /end .profile-person -->
                        <li class="profile">
                            <h3 class="profile-name">
                                <a href="/organizations/broadcasting-board-governors/">
                                    <cite class="p-name">Broadcasting Board of Governors</cite>
                                </a>
                            </h3>
                            
                            <ul class="profile-links">
                                
                                <li><a class="icon-twitter-alt" href="https://twitter.com/BBGinnovate">@BBGinnovate</a></li>
                                <li><a class="icon-github" href="https://github.com/BBGInnovate">BBGInnovate</a></li>
                            </ul>
                        </li><!-- /end .profile-person -->
                        <li class="profile">
                            <h3 class="profile-name">
                                <a href="/organizations/buzzfeed/">
                                    <cite class="p-name">BuzzFeed</cite>
                                </a>
                            </h3>
                            
                            <ul class="profile-links">
                                <li class="has-icon icon-location">New York, NY</li>
                                <li><a class="icon-twitter-alt" href="https://twitter.com/buzzfeed">@buzzfeed</a></li>
                                <li><a class="icon-github" href="https://github.com/BuzzFeedNews">BuzzFeedNews</a></li>
                            </ul>
                        </li><!-- /end .profile-person -->
                        <li class="profile">
                            <h3 class="profile-name">
                                <a href="/organizations/california-civic-data-coalition/">
                                    <cite class="p-name">California Civic Data Coalition</cite>
                                </a>
                            </h3>
                            
                            <ul class="profile-links">
                                <li class="has-icon icon-location">California</li>
                                <li><a class="icon-twitter-alt" href="https://twitter.com/cacivicdata">@cacivicdata</a></li>
                                <li><a class="icon-github" href="https://github.com/california-civic-data-coalition">california-civic-data-coalition</a></li>
                            </ul>
                        </li><!-- /end .profile-person -->
                        <li class="profile">
                            <h3 class="profile-name">
                                <a href="/organizations/census-reporter/">
                                    <cite class="p-name">Census Reporter</cite>
                                </a>
                            </h3>
                            
                            <ul class="profile-links">
                                
                                <li><a class="icon-twitter-alt" href="https://twitter.com/CensusReporter">@CensusReporter</a></li>
                                <li><a class="icon-github" href="https://github.com/CensusReporter">CensusReporter</a></li>
                            </ul>
                        </li><!-- /end .profile-person -->
                        <li class="profile">
                            <h3 class="profile-name">
                                <a href="/organizations/center-public-integrity/">
                                    <cite class="p-name">Center for Public Integrity</cite>
                                </a>
                            </h3>
                            
                            <ul class="profile-links">
                                <li class="has-icon icon-location">Washington, DC</li>
                                <li><a class="icon-twitter-alt" href="https://twitter.com/Publici">@Publici</a></li>
                                <li><a class="icon-github" href="https://github.com/PublicI">PublicI</a></li>
                            </ul>
                        </li><!-- /end .profile-person -->
                        <li class="profile">
                            <h3 class="profile-name">
                                <a href="/organizations/chalkbeat/">
                                    <cite class="p-name">Chalkbeat</cite>
                                </a>
                            </h3>
                            
                            <ul class="profile-links">
                                <li class="has-icon icon-location">New York, NY</li>
                                <li><a class="icon-twitter-alt" href="https://twitter.com/Chalkbeat">@Chalkbeat</a></li>
                                <li><a class="icon-github" href="https://github.com/Chalkbeat">Chalkbeat</a></li>
                            </ul>
                        </li><!-- /end .profile-person -->
                        <li class="profile">
                            <h3 class="profile-name">
                                <a href="/organizations/chicago-magazine/">
                                    <cite class="p-name">Chicago Magazine</cite>
                                </a>
                            </h3>
                            
                            <ul class="profile-links">
                                
                                
                                
                            </ul>
                        </li><!-- /end .profile-person -->
                        <li class="profile">
                            <h3 class="profile-name">
                                <a href="/organizations/city-bureau/">
                                    <cite class="p-name">City Bureau</cite>
                                </a>
                            </h3>
                            
                            <ul class="profile-links">
                                
                                
                                
                            </ul>
                        </li><!-- /end .profile-person -->
                        <li class="profile">
                            <h3 class="profile-name">
                                <a href="/organizations/civica-digital/">
                                    <cite class="p-name">Civica Digital</cite>
                                </a>
                            </h3>
                            
                            <ul class="profile-links">
                                
                                
                                
                            </ul>
                        </li><!-- /end .profile-person -->
                        <li class="profile">
                            <h3 class="profile-name">
                                <a href="/organizations/cmci-cu-boulder/">
                                    <cite class="p-name">CMCI, CU Boulder</cite>
                                </a>
                            </h3>
                            
                            <ul class="profile-links">
                                <li class="has-icon icon-location">Boulder, CO</li>
                                
                                
                            </ul>
                        </li><!-- /end .profile-person -->
                        <li class="profile">
                            <h3 class="profile-name">
                                <a href="/organizations/cnbc-digital/">
                                    <cite class="p-name">CNBC Digital</cite>
                                </a>
                            </h3>
                            
                            <ul class="profile-links">
                                
                                <li><a class="icon-twitter-alt" href="https://twitter.com/cnbc">@cnbc</a></li>
                                
                            </ul>
                        </li><!-- /end .profile-person -->
                        <li class="profile">
                            <h3 class="profile-name">
                                <a href="/organizations/code-america/">
                                    <cite class="p-name">Code for America</cite>
                                </a>
                            </h3>
                            
                            <ul class="profile-links">
                                <li class="has-icon icon-location">San Francisco, California</li>
                                <li><a class="icon-twitter-alt" href="https://twitter.com/codeforamerica">@codeforamerica</a></li>
                                <li><a class="icon-github" href="https://github.com/codeforamerica">codeforamerica</a></li>
                            </ul>
                        </li><!-- /end .profile-person -->
                        <li class="profile">
                            <h3 class="profile-name">
                                <a href="/organizations/columbia-university-graduate-school-journalism/">
                                    <cite class="p-name">Columbia University Graduate School of Journalism</cite>
                                </a>
                            </h3>
                            
                            <ul class="profile-links">
                                <li class="has-icon icon-location">New York, NY</li>
                                <li><a class="icon-twitter-alt" href="https://twitter.com/columbiajourn">@columbiajourn</a></li>
                                
                            </ul>
                        </li><!-- /end .profile-person -->
                        <li class="profile">
                            <h3 class="profile-name">
                                <a href="/organizations/correctv/">
                                    <cite class="p-name">Correct!v</cite>
                                </a>
                            </h3>
                            
                            <ul class="profile-links">
                                <li class="has-icon icon-location">Essen, Germany</li>
                                <li><a class="icon-twitter-alt" href="https://twitter.com/correctiv_org">@correctiv_org</a></li>
                                
                            </ul>
                        </li><!-- /end .profile-person -->
                        <li class="profile">
                            <h3 class="profile-name">
                                <a href="/organizations/cuny-graduate-school-journalism/">
                                    <cite class="p-name">CUNY Graduate School of Journalism</cite>
                                </a>
                            </h3>
                            
                            <ul class="profile-links">
                                <li class="has-icon icon-location">New York, NY</li>
                                <li><a class="icon-twitter-alt" href="https://twitter.com/cunyjschool">@cunyjschool</a></li>
                                <li><a class="icon-github" href="https://github.com/cunyjschool">cunyjschool</a></li>
                            </ul>
                        </li><!-- /end .profile-person -->
                        <li class="profile">
                            <h3 class="profile-name">
                                <a href="/organizations/daily-herald/">
                                    <cite class="p-name">Daily Herald</cite>
                                </a>
                            </h3>
                            
                            <ul class="profile-links">
                                <li class="has-icon icon-location">Arlington Heights, IL</li>
                                <li><a class="icon-twitter-alt" href="https://twitter.com/dailyherald">@dailyherald</a></li>
                                
                            </ul>
                        </li><!-- /end .profile-person -->
                        <li class="profile">
                            <h3 class="profile-name">
                                <a href="/organizations/daily-kos/">
                                    <cite class="p-name">Daily Kos</cite>
                                </a>
                            </h3>
                            
                            <ul class="profile-links">
                                <li class="has-icon icon-location">Oakland, CA</li>
                                <li><a class="icon-twitter-alt" href="https://twitter.com/dailykos">@dailykos</a></li>
                                
                            </ul>
                        </li><!-- /end .profile-person -->
                        <li class="profile">
                            <h3 class="profile-name">
                                <a href="/organizations/datamade/">
                                    <cite class="p-name">DataMade</cite>
                                </a>
                            </h3>
                            
                            <ul class="profile-links">
                                
                                <li><a class="icon-twitter-alt" href="https://twitter.com/datamadeco">@datamadeco</a></li>
                                <li><a class="icon-github" href="https://github.com/datamade">datamade</a></li>
                            </ul>
                        </li><!-- /end .profile-person -->
                        <li class="profile">
                            <h3 class="profile-name">
                                <a href="/organizations/denver-post/">
                                    <cite class="p-name">Denver Post</cite>
                                </a>
                            </h3>
                            
                            <ul class="profile-links">
                                
                                
                                
                            </ul>
                        </li><!-- /end .profile-person -->
                        <li class="profile">
                            <h3 class="profile-name">
                                <a href="/organizations/digital-first-media/">
                                    <cite class="p-name">Digital First Media</cite>
                                </a>
                            </h3>
                            
                            <ul class="profile-links">
                                <li class="has-icon icon-location">New York, NY</li>
                                <li><a class="icon-twitter-alt" href="https://twitter.com/digitalfirst">@digitalfirst</a></li>
                                <li><a class="icon-github" href="https://github.com/dfmdata">dfmdata</a></li>
                            </ul>
                        </li><!-- /end .profile-person -->
                        <li class="profile">
                            <h3 class="profile-name">
                                <a href="/organizations/dnainfo/">
                                    <cite class="p-name">DNAinfo</cite>
                                </a>
                            </h3>
                            
                            <ul class="profile-links">
                                
                                
                                
                            </ul>
                        </li><!-- /end .profile-person -->
                        <li class="profile">
                            <h3 class="profile-name">
                                <a href="/organizations/documentcloud/">
                                    <cite class="p-name">DocumentCloud</cite>
                                </a>
                            </h3>
                            
                            <ul class="profile-links">
                                <li class="has-icon icon-location">Columbia, Missouri</li>
                                <li><a class="icon-twitter-alt" href="https://twitter.com/documentcloud">@documentcloud</a></li>
                                <li><a class="icon-github" href="https://github.com/documentcloud">documentcloud</a></li>
                            </ul>
                        </li><!-- /end .profile-person -->
                        <li class="profile">
                            <h3 class="profile-name">
                                <a href="/organizations/dow-jones-media/">
                                    <cite class="p-name">Dow Jones Media</cite>
                                </a>
                            </h3>
                            
                            <ul class="profile-links">
                                
                                
                                <li><a class="icon-github" href="https://github.com/dowjones">dowjones</a></li>
                            </ul>
                        </li><!-- /end .profile-person -->
                        <li class="profile">
                            <h3 class="profile-name">
                                <a href="/organizations/el-faro/">
                                    <cite class="p-name">El Faro</cite>
                                </a>
                            </h3>
                            
                            <ul class="profile-links">
                                <li class="has-icon icon-location">San Salvador, El Salvador</li>
                                <li><a class="icon-twitter-alt" href="https://twitter.com/_ElFaro_">@_ElFaro_</a></li>
                                
                            </ul>
                        </li><!-- /end .profile-person -->
                        <li class="profile">
                            <h3 class="profile-name">
                                <a href="/organizations/emerald-media-group/">
                                    <cite class="p-name">Emerald Media Group</cite>
                                </a>
                            </h3>
                            
                            <ul class="profile-links">
                                <li class="has-icon icon-location">Eugene, OR</li>
                                <li><a class="icon-twitter-alt" href="https://twitter.com/dailyemerald">@dailyemerald</a></li>
                                <li><a class="icon-github" href="https://github.com/dailyemerald">dailyemerald</a></li>
                            </ul>
                        </li><!-- /end .profile-person -->
                        <li class="profile">
                            <h3 class="profile-name">
                                <a href="/organizations/enigmaio/">
                                    <cite class="p-name">Enigma</cite>
                                </a>
                            </h3>
                            
                            <ul class="profile-links">
                                
                                <li><a class="icon-twitter-alt" href="https://twitter.com/enigma_io ">@enigma_io </a></li>
                                <li><a class="icon-github" href="https://github.com/enigma-io">enigma-io</a></li>
                            </ul>
                        </li><!-- /end .profile-person -->
                        <li class="profile">
                            <h3 class="profile-name">
                                <a href="/organizations/everyblock/">
                                    <cite class="p-name">EveryBlock</cite>
                                </a>
                            </h3>
                            
                            <ul class="profile-links">
                                
                                <li><a class="icon-twitter-alt" href="https://twitter.com/everyblock">@everyblock</a></li>
                                
                            </ul>
                        </li><!-- /end .profile-person -->
                        <li class="profile">
                            <h3 class="profile-name">
                                <a href="/organizations/538/">
                                    <cite class="p-name">FiveThirtyEight</cite>
                                </a>
                            </h3>
                            
                            <ul class="profile-links">
                                
                                <li><a class="icon-twitter-alt" href="https://twitter.com/fivethirtyeight">@fivethirtyeight</a></li>
                                
                            </ul>
                        </li><!-- /end .profile-person -->
                        <li class="profile">
                            <h3 class="profile-name">
                                <a href="/organizations/flipboard/">
                                    <cite class="p-name">Flipboard</cite>
                                </a>
                            </h3>
                            
                            <ul class="profile-links">
                                <li class="has-icon icon-location">Palo Alto, CA</li>
                                <li><a class="icon-twitter-alt" href="https://twitter.com/flipboard">@flipboard</a></li>
                                <li><a class="icon-github" href="https://github.com/flipboard">flipboard</a></li>
                            </ul>
                        </li><!-- /end .profile-person -->
                        <li class="profile">
                            <h3 class="profile-name">
                                <a href="/organizations/foreign-policy/">
                                    <cite class="p-name">Foreign Policy</cite>
                                </a>
                            </h3>
                            
                            <ul class="profile-links">
                                <li class="has-icon icon-location">Washington, DC</li>
                                <li><a class="icon-twitter-alt" href="https://twitter.com/ForeignPolicy">@ForeignPolicy</a></li>
                                <li><a class="icon-github" href="https://github.com/ForeignPolicy">ForeignPolicy</a></li>
                            </ul>
                        </li><!-- /end .profile-person -->
                        <li class="profile">
                            <h3 class="profile-name">
                                <a href="/organizations/freedom-press-foundation/">
                                    <cite class="p-name">Freedom of the Press Foundation</cite>
                                </a>
                            </h3>
                            
                            <ul class="profile-links">
                                <li class="has-icon icon-location">San Francisco, CA</li>
                                <li><a class="icon-twitter-alt" href="https://twitter.com/FreedomofPress">@FreedomofPress</a></li>
                                <li><a class="icon-github" href="https://github.com/freedomofpress">freedomofpress</a></li>
                            </ul>
                        </li><!-- /end .profile-person -->
                        <li class="profile">
                            <h3 class="profile-name">
                                <a href="/organizations/frontline/">
                                    <cite class="p-name">Frontline</cite>
                                </a>
                            </h3>
                            
                            <ul class="profile-links">
                                <li class="has-icon icon-location">Boston, MA</li>
                                <li><a class="icon-twitter-alt" href="https://twitter.com/frontlinepbs">@frontlinepbs</a></li>
                                <li><a class="icon-github" href="https://github.com/frontlinepbs">frontlinepbs</a></li>
                            </ul>
                        </li><!-- /end .profile-person -->
                        <li class="profile">
                            <h3 class="profile-name">
                                <a href="/organizations/frontline-clubfrontline-freelance-register/">
                                    <cite class="p-name">Frontline Club/Frontline Freelance Register</cite>
                                </a>
                            </h3>
                            
                            <ul class="profile-links">
                                
                                
                                
                            </ul>
                        </li><!-- /end .profile-person -->
                        <li class="profile">
                            <h3 class="profile-name">
                                <a href="/organizations/fusion/">
                                    <cite class="p-name">Fusion</cite>
                                </a>
                            </h3>
                            
                            <ul class="profile-links">
                                <li class="has-icon icon-location">Miami, Florida</li>
                                <li><a class="icon-twitter-alt" href="https://twitter.com/ThisIsFusion">@ThisIsFusion</a></li>
                                
                            </ul>
                        </li><!-- /end .profile-person -->
                        <li class="profile">
                            <h3 class="profile-name">
                                <a href="/organizations/gannett-digital/">
                                    <cite class="p-name">Gannett Digital</cite>
                                </a>
                            </h3>
                            
                            <ul class="profile-links">
                                <li class="has-icon icon-location">McLean, VA</li>
                                <li><a class="icon-twitter-alt" href="https://twitter.com/Gannett">@Gannett</a></li>
                                
                            </ul>
                        </li><!-- /end .profile-person -->
                        <li class="profile">
                            <h3 class="profile-name">
                                <a href="/organizations/global-editors-network/">
                                    <cite class="p-name">Global Editors Network</cite>
                                </a>
                            </h3>
                            
                            <ul class="profile-links">
                                <li class="has-icon icon-location">Paris, France</li>
                                <li><a class="icon-twitter-alt" href="https://twitter.com/EditorsNet">@EditorsNet</a></li>
                                
                            </ul>
                        </li><!-- /end .profile-person -->
                        <li class="profile">
                            <h3 class="profile-name">
                                <a href="/organizations/govtrack/">
                                    <cite class="p-name">GovTrack</cite>
                                </a>
                            </h3>
                            
                            <ul class="profile-links">
                                
                                
                                
                            </ul>
                        </li><!-- /end .profile-person -->
                        <li class="profile">
                            <h3 class="profile-name">
                                <a href="/organizations/guardian-mobile-innovation-lab/">
                                    <cite class="p-name">Guardian Mobile Innovation Lab</cite>
                                </a>
                            </h3>
                            
                            <ul class="profile-links">
                                
                                <li><a class="icon-twitter-alt" href="https://twitter.com/gdnmobilelab">@gdnmobilelab</a></li>
                                
                            </ul>
                        </li><!-- /end .profile-person -->
                        <li class="profile">
                            <h3 class="profile-name">
                                <a href="/organizations/hackshackers/">
                                    <cite class="p-name">Hacks/Hackers</cite>
                                </a>
                            </h3>
                            
                            <ul class="profile-links">
                                
                                <li><a class="icon-twitter-alt" href="https://twitter.com/hackshackers">@hackshackers</a></li>
                                <li><a class="icon-github" href="https://github.com/hackshackers">hackshackers</a></li>
                            </ul>
                        </li><!-- /end .profile-person -->
                        <li class="profile">
                            <h3 class="profile-name">
                                <a href="/organizations/hartford-courant/">
                                    <cite class="p-name">Hartford Courant</cite>
                                </a>
                            </h3>
                            
                            <ul class="profile-links">
                                
                                
                                
                            </ul>
                        </li><!-- /end .profile-person -->
                        <li class="profile">
                            <h3 class="profile-name">
                                <a href="/organizations/harvard-business-review/">
                                    <cite class="p-name">Harvard Business Review</cite>
                                </a>
                            </h3>
                            
                            <ul class="profile-links">
                                
                                <li><a class="icon-twitter-alt" href="https://twitter.com/HarvardBiz">@HarvardBiz</a></li>
                                
                            </ul>
                        </li><!-- /end .profile-person -->
                        <li class="profile">
                            <h3 class="profile-name">
                                <a href="/organizations/hindustan-times/">
                                    <cite class="p-name">Hindustan Times</cite>
                                </a>
                            </h3>
                            
                            <ul class="profile-links">
                                
                                
                                
                            </ul>
                        </li><!-- /end .profile-person -->
                        <li class="profile">
                            <h3 class="profile-name">
                                <a href="/organizations/hot-type-consulting/">
                                    <cite class="p-name">Hot Type Consulting</cite>
                                </a>
                            </h3>
                            
                            <ul class="profile-links">
                                
                                <li><a class="icon-twitter-alt" href="https://twitter.com/HotTypeLLC">@HotTypeLLC</a></li>
                                
                            </ul>
                        </li><!-- /end .profile-person -->
                        <li class="profile">
                            <h3 class="profile-name">
                                <a href="/organizations/houston-chronicle/">
                                    <cite class="p-name">Houston Chronicle</cite>
                                </a>
                            </h3>
                            
                            <ul class="profile-links">
                                
                                
                                
                            </ul>
                        </li><!-- /end .profile-person -->
                        <li class="profile">
                            <h3 class="profile-name">
                                <a href="/organizations/hoy-chicago/">
                                    <cite class="p-name">Hoy Chicago</cite>
                                </a>
                            </h3>
                            
                            <ul class="profile-links">
                                
                                <li><a class="icon-twitter-alt" href="https://twitter.com/vivelohoy">@vivelohoy</a></li>
                                
                            </ul>
                        </li><!-- /end .profile-person -->
                        <li class="profile">
                            <h3 class="profile-name">
                                <a href="/organizations/ieee-spectrum/">
                                    <cite class="p-name">IEEE Spectrum</cite>
                                </a>
                            </h3>
                            
                            <ul class="profile-links">
                                
                                <li><a class="icon-twitter-alt" href="https://twitter.com/IEEESpectrum">@IEEESpectrum</a></li>
                                
                            </ul>
                        </li><!-- /end .profile-person -->
                        <li class="profile">
                            <h3 class="profile-name">
                                <a href="/organizations/indiaspend/">
                                    <cite class="p-name">IndiaSpend</cite>
                                </a>
                            </h3>
                            
                            <ul class="profile-links">
                                
                                
                                
                            </ul>
                        </li><!-- /end .profile-person -->
                        <li class="profile">
                            <h3 class="profile-name">
                                <a href="/organizations/INN/">
                                    <cite class="p-name">INN</cite>
                                </a>
                            </h3>
                            
                            <ul class="profile-links">
                                <li class="has-icon icon-location">Los Angeles, CA</li>
                                <li><a class="icon-twitter-alt" href="https://twitter.com/inn">@inn</a></li>
                                <li><a class="icon-github" href="https://github.com/INN">INN</a></li>
                            </ul>
                        </li><!-- /end .profile-person -->
                        <li class="profile">
                            <h3 class="profile-name">
                                <a href="/organizations/international-business-times/">
                                    <cite class="p-name">International Business Times</cite>
                                </a>
                            </h3>
                            
                            <ul class="profile-links">
                                
                                
                                
                            </ul>
                        </li><!-- /end .profile-person -->
                        <li class="profile">
                            <h3 class="profile-name">
                                <a href="/organizations/international-center-journalists/">
                                    <cite class="p-name">International Center for Journalists</cite>
                                </a>
                            </h3>
                            
                            <ul class="profile-links">
                                <li class="has-icon icon-location">WASHINGTON, District of Columbia</li>
                                <li><a class="icon-twitter-alt" href="https://twitter.com/icfj">@icfj</a></li>
                                
                            </ul>
                        </li><!-- /end .profile-person -->
                        <li class="profile">
                            <h3 class="profile-name">
                                <a href="/organizations/internews-kenya/">
                                    <cite class="p-name">Internews in Kenya</cite>
                                </a>
                            </h3>
                            
                            <ul class="profile-links">
                                
                                <li><a class="icon-twitter-alt" href="https://twitter.com/InternewsKE">@InternewsKE</a></li>
                                
                            </ul>
                        </li><!-- /end .profile-person -->
                        <li class="profile">
                            <h3 class="profile-name">
                                <a href="/organizations/irish-times/">
                                    <cite class="p-name">Irish Times</cite>
                                </a>
                            </h3>
                            
                            <ul class="profile-links">
                                
                                
                                
                            </ul>
                        </li><!-- /end .profile-person -->
                        <li class="profile">
                            <h3 class="profile-name">
                                <a href="/organizations/knight-lab/">
                                    <cite class="p-name">Knight Lab</cite>
                                </a>
                            </h3>
                            
                            <ul class="profile-links">
                                <li class="has-icon icon-location">Evanston, IL, USA</li>
                                <li><a class="icon-twitter-alt" href="https://twitter.com/knightlab">@knightlab</a></li>
                                
                            </ul>
                        </li><!-- /end .profile-person -->
                        <li class="profile">
                            <h3 class="profile-name">
                                <a href="/organizations/kpcc/">
                                    <cite class="p-name">KPCC</cite>
                                </a>
                            </h3>
                            
                            <ul class="profile-links">
                                <li class="has-icon icon-location">Pasadena, CA</li>
                                <li><a class="icon-twitter-alt" href="https://twitter.com/kpcc">@kpcc</a></li>
                                
                            </ul>
                        </li><!-- /end .profile-person -->
                        <li class="profile">
                            <h3 class="profile-name">
                                <a href="/organizations/la-nacion/">
                                    <cite class="p-name">La Nación</cite>
                                </a>
                            </h3>
                            
                            <ul class="profile-links">
                                
                                <li><a class="icon-twitter-alt" href="https://twitter.com/LNdata">@LNdata</a></li>
                                
                            </ul>
                        </li><!-- /end .profile-person -->
                        <li class="profile">
                            <h3 class="profile-name">
                                <a href="/organizations/marketplace/">
                                    <cite class="p-name">Marketplace</cite>
                                </a>
                            </h3>
                            
                            <ul class="profile-links">
                                <li class="has-icon icon-location">Los Angeles, CA</li>
                                <li><a class="icon-twitter-alt" href="https://twitter.com/Marketplace">@Marketplace</a></li>
                                
                            </ul>
                        </li><!-- /end .profile-person -->
                        <li class="profile">
                            <h3 class="profile-name">
                                <a href="/organizations/marketwatch/">
                                    <cite class="p-name">MarketWatch</cite>
                                </a>
                            </h3>
                            
                            <ul class="profile-links">
                                
                                <li><a class="icon-twitter-alt" href="https://twitter.com/marketwatch">@marketwatch</a></li>
                                
                            </ul>
                        </li><!-- /end .profile-person -->
                        <li class="profile">
                            <h3 class="profile-name">
                                <a href="/organizations/mashable/">
                                    <cite class="p-name">Mashable</cite>
                                </a>
                            </h3>
                            
                            <ul class="profile-links">
                                
                                
                                
                            </ul>
                        </li><!-- /end .profile-person -->
                        <li class="profile">
                            <h3 class="profile-name">
                                <a href="/organizations/matter/">
                                    <cite class="p-name">Matter</cite>
                                </a>
                            </h3>
                            
                            <ul class="profile-links">
                                
                                <li><a class="icon-twitter-alt" href="https://twitter.com/readmatter">@readmatter</a></li>
                                
                            </ul>
                        </li><!-- /end .profile-person -->
                        <li class="profile">
                            <h3 class="profile-name">
                                <a href="/organizations/mcclatchydc/">
                                    <cite class="p-name">McClatchyDC</cite>
                                </a>
                            </h3>
                            
                            <ul class="profile-links">
                                <li class="has-icon icon-location">Washington, D.C.</li>
                                <li><a class="icon-twitter-alt" href="https://twitter.com/McClatchyDC">@McClatchyDC</a></li>
                                <li><a class="icon-github" href="https://github.com/mcclatchy">mcclatchy</a></li>
                            </ul>
                        </li><!-- /end .profile-person -->
                        <li class="profile">
                            <h3 class="profile-name">
                                <a href="/organizations/media-helping-media/">
                                    <cite class="p-name">Media Helping Media</cite>
                                </a>
                            </h3>
                            
                            <ul class="profile-links">
                                <li class="has-icon icon-location">United Kingdom</li>
                                <li><a class="icon-twitter-alt" href="https://twitter.com/helpingmedia">@helpingmedia</a></li>
                                
                            </ul>
                        </li><!-- /end .profile-person -->
                        <li class="profile">
                            <h3 class="profile-name">
                                <a href="/organizations/miami-herald/">
                                    <cite class="p-name">Miami Herald</cite>
                                </a>
                            </h3>
                            
                            <ul class="profile-links">
                                
                                <li><a class="icon-twitter-alt" href="https://twitter.com/miamiherald">@miamiherald</a></li>
                                <li><a class="icon-github" href="https://github.com/miamiherald">miamiherald</a></li>
                            </ul>
                        </li><!-- /end .profile-person -->
                        <li class="profile">
                            <h3 class="profile-name">
                                <a href="/organizations/milwaukee-journal-sentinel/">
                                    <cite class="p-name">Milwaukee Journal Sentinel</cite>
                                </a>
                            </h3>
                            
                            <ul class="profile-links">
                                
                                <li><a class="icon-twitter-alt" href="https://twitter.com/journalsentinel">@journalsentinel</a></li>
                                <li><a class="icon-github" href="https://github.com/datahub">datahub</a></li>
                            </ul>
                        </li><!-- /end .profile-person -->
                        <li class="profile">
                            <h3 class="profile-name">
                                <a href="/organizations/minnpost/">
                                    <cite class="p-name">MinnPost</cite>
                                </a>
                            </h3>
                            
                            <ul class="profile-links">
                                <li class="has-icon icon-location">Minneapolis, MN</li>
                                <li><a class="icon-twitter-alt" href="https://twitter.com/MinnPost">@MinnPost</a></li>
                                <li><a class="icon-github" href="https://github.com/MinnPost">MinnPost</a></li>
                            </ul>
                        </li><!-- /end .profile-person -->
                        <li class="profile">
                            <h3 class="profile-name">
                                <a href="/organizations/mit-center-civic-media/">
                                    <cite class="p-name">MIT Center for Civic Media</cite>
                                </a>
                            </h3>
                            
                            <ul class="profile-links">
                                <li class="has-icon icon-location">Cambridge, MA</li>
                                <li><a class="icon-twitter-alt" href="https://twitter.com/civicMIT">@civicMIT</a></li>
                                <li><a class="icon-github" href="https://github.com/c4fcm">c4fcm</a></li>
                            </ul>
                        </li><!-- /end .profile-person -->
                        <li class="profile">
                            <h3 class="profile-name">
                                <a href="/organizations/mlive/">
                                    <cite class="p-name">MLive</cite>
                                </a>
                            </h3>
                            
                            <ul class="profile-links">
                                
                                
                                
                            </ul>
                        </li><!-- /end .profile-person -->
                        <li class="profile">
                            <h3 class="profile-name">
                                <a href="/organizations/mother-jones/">
                                    <cite class="p-name">Mother Jones</cite>
                                </a>
                            </h3>
                            
                            <ul class="profile-links">
                                <li class="has-icon icon-location">San Francisco, CA</li>
                                <li><a class="icon-twitter-alt" href="https://twitter.com/motherjones">@motherjones</a></li>
                                <li><a class="icon-github" href="https://github.com/motherjones">motherjones</a></li>
                            </ul>
                        </li><!-- /end .profile-person -->
                        <li class="profile">
                            <h3 class="profile-name">
                                <a href="/organizations/national-geographic/">
                                    <cite class="p-name">National Geographic</cite>
                                </a>
                            </h3>
                            
                            <ul class="profile-links">
                                <li class="has-icon icon-location">Washington, DC</li>
                                <li><a class="icon-twitter-alt" href="https://twitter.com/NatGeo">@NatGeo</a></li>
                                
                            </ul>
                        </li><!-- /end .profile-person -->
                        <li class="profile">
                            <h3 class="profile-name">
                                <a href="/organizations/nbc-news/">
                                    <cite class="p-name">NBC News</cite>
                                </a>
                            </h3>
                            
                            <ul class="profile-links">
                                
                                
                                
                            </ul>
                        </li><!-- /end .profile-person -->
                        <li class="profile">
                            <h3 class="profile-name">
                                <a href="/organizations/nepali-times/">
                                    <cite class="p-name">Nepali Times</cite>
                                </a>
                            </h3>
                            
                            <ul class="profile-links">
                                <li class="has-icon icon-location">Patan Dhoka, Nepal</li>
                                <li><a class="icon-twitter-alt" href="https://twitter.com/nepalitimes">@nepalitimes</a></li>
                                
                            </ul>
                        </li><!-- /end .profile-person -->
                        <li class="profile">
                            <h3 class="profile-name">
                                <a href="/organizations/neue-zuercher-zeitung/">
                                    <cite class="p-name">Neue Zuercher Zeitung</cite>
                                </a>
                            </h3>
                            
                            <ul class="profile-links">
                                <li class="has-icon icon-location">Zürich, ZH</li>
                                <li><a class="icon-twitter-alt" href="https://twitter.com/NZZ">@NZZ</a></li>
                                <li><a class="icon-github" href="https://github.com/nzzdev">nzzdev</a></li>
                            </ul>
                        </li><!-- /end .profile-person -->
                        <li class="profile">
                            <h3 class="profile-name">
                                <a href="/organizations/new-mexico-depth/">
                                    <cite class="p-name">New Mexico In Depth</cite>
                                </a>
                            </h3>
                            
                            <ul class="profile-links">
                                
                                
                                
                            </ul>
                        </li><!-- /end .profile-person -->
                        <li class="profile">
                            <h3 class="profile-name">
                                <a href="/organizations/new-scientist/">
                                    <cite class="p-name">New Scientist</cite>
                                </a>
                            </h3>
                            
                            <ul class="profile-links">
                                <li class="has-icon icon-location">London, United Kingdom</li>
                                <li><a class="icon-twitter-alt" href="https://twitter.com/newscientist">@newscientist</a></li>
                                <li><a class="icon-github" href="https://github.com/newscientistapps">newscientistapps</a></li>
                            </ul>
                        </li><!-- /end .profile-person -->
                        <li class="profile">
                            <h3 class="profile-name">
                                <a href="/organizations/newsweek/">
                                    <cite class="p-name">Newsweek</cite>
                                </a>
                            </h3>
                            
                            <ul class="profile-links">
                                
                                <li><a class="icon-twitter-alt" href="https://twitter.com/newsweek">@newsweek</a></li>
                                <li><a class="icon-github" href="https://github.com/newsweek">newsweek</a></li>
                            </ul>
                        </li><!-- /end .profile-person -->
                        <li class="profile">
                            <h3 class="profile-name">
                                <a href="/organizations/new-yorker/">
                                    <cite class="p-name">New Yorker</cite>
                                </a>
                            </h3>
                            
                            <ul class="profile-links">
                                <li class="has-icon icon-location">New York, NY</li>
                                <li><a class="icon-twitter-alt" href="https://twitter.com/newyorker">@newyorker</a></li>
                                <li><a class="icon-github" href="https://github.com/newyorker">newyorker</a></li>
                            </ul>
                        </li><!-- /end .profile-person -->
                        <li class="profile">
                            <h3 class="profile-name">
                                <a href="/organizations/new-york/">
                                    <cite class="p-name">New York magazine</cite>
                                </a>
                            </h3>
                            
                            <ul class="profile-links">
                                <li class="has-icon icon-location">New York, NY</li>
                                <li><a class="icon-twitter-alt" href="https://twitter.com/nymag">@nymag</a></li>
                                
                            </ul>
                        </li><!-- /end .profile-person -->
                        <li class="profile">
                            <h3 class="profile-name">
                                <a href="/organizations/nieman-lab/">
                                    <cite class="p-name">Nieman Lab</cite>
                                </a>
                            </h3>
                            
                            <ul class="profile-links">
                                
                                
                                
                            </ul>
                        </li><!-- /end .profile-person -->
                        <li class="profile">
                            <h3 class="profile-name">
                                <a href="/organizations/njcom/">
                                    <cite class="p-name">NJ.com</cite>
                                </a>
                            </h3>
                            
                            <ul class="profile-links">
                                <li class="has-icon icon-location">Morristown, NJ</li>
                                <li><a class="icon-twitter-alt" href="https://twitter.com/njdotcom">@njdotcom</a></li>
                                
                            </ul>
                        </li><!-- /end .profile-person -->
                        <li class="profile">
                            <h3 class="profile-name">
                                <a href="/organizations/npr/">
                                    <cite class="p-name">NPR</cite>
                                </a>
                            </h3>
                            
                            <ul class="profile-links">
                                <li class="has-icon icon-location">Washington, DC</li>
                                <li><a class="icon-twitter-alt" href="https://twitter.com/nprviz">@nprviz</a></li>
                                <li><a class="icon-github" href="https://github.com/nprapps">nprapps</a></li>
                            </ul>
                        </li><!-- /end .profile-person -->
                        <li class="profile">
                            <h3 class="profile-name">
                                <a href="/organizations/ocupop/">
                                    <cite class="p-name">Ocupop</cite>
                                </a>
                            </h3>
                            
                            <ul class="profile-links">
                                <li class="has-icon icon-location">Honolulu, HI</li>
                                <li><a class="icon-twitter-alt" href="https://twitter.com/ocupop">@ocupop</a></li>
                                <li><a class="icon-github" href="https://github.com/ocupop">ocupop</a></li>
                            </ul>
                        </li><!-- /end .profile-person -->
                        <li class="profile">
                            <h3 class="profile-name">
                                <a href="/organizations/open-data-institute/">
                                    <cite class="p-name">Open Data Institute</cite>
                                </a>
                            </h3>
                            
                            <ul class="profile-links">
                                
                                <li><a class="icon-twitter-alt" href="https://twitter.com/UKODI">@UKODI</a></li>
                                
                            </ul>
                        </li><!-- /end .profile-person -->
                        <li class="profile">
                            <h3 class="profile-name">
                                <a href="/organizations/openelections/">
                                    <cite class="p-name">OpenElections</cite>
                                </a>
                            </h3>
                            
                            <ul class="profile-links">
                                
                                <li><a class="icon-twitter-alt" href="https://twitter.com/openelex">@openelex</a></li>
                                <li><a class="icon-github" href="https://github.com/openelections">openelections</a></li>
                            </ul>
                        </li><!-- /end .profile-person -->
                        <li class="profile">
                            <h3 class="profile-name">
                                <a href="/organizations/opennews/">
                                    <cite class="p-name">OpenNews</cite>
                                </a>
                            </h3>
                            
                            <ul class="profile-links">
                                
                                <li><a class="icon-twitter-alt" href="https://twitter.com/opennews">@opennews</a></li>
                                
                            </ul>
                        </li><!-- /end .profile-person -->
                        <li class="profile">
                            <h3 class="profile-name">
                                <a href="/organizations/orlando-sentinel/">
                                    <cite class="p-name">Orlando Sentinel</cite>
                                </a>
                            </h3>
                            
                            <ul class="profile-links">
                                
                                
                                
                            </ul>
                        </li><!-- /end .profile-person -->
                        <li class="profile">
                            <h3 class="profile-name">
                                <a href="/organizations/palm-beach-post/">
                                    <cite class="p-name">Palm Beach Post</cite>
                                </a>
                            </h3>
                            
                            <ul class="profile-links">
                                <li class="has-icon icon-location">West Palm Beach, Florida</li>
                                <li><a class="icon-twitter-alt" href="https://twitter.com/pbpost">@pbpost</a></li>
                                
                            </ul>
                        </li><!-- /end .profile-person -->
                        <li class="profile">
                            <h3 class="profile-name">
                                <a href="/organizations/pbs-newshour/">
                                    <cite class="p-name">PBS NewsHour</cite>
                                </a>
                            </h3>
                            
                            <ul class="profile-links">
                                <li class="has-icon icon-location">Arlington, Virginia</li>
                                <li><a class="icon-twitter-alt" href="https://twitter.com/newshour">@newshour</a></li>
                                <li><a class="icon-github" href="https://github.com/newshour">newshour</a></li>
                            </ul>
                        </li><!-- /end .profile-person -->
                        <li class="profile">
                            <h3 class="profile-name">
                                <a href="/organizations/periscopic/">
                                    <cite class="p-name">Periscopic</cite>
                                </a>
                            </h3>
                            
                            <ul class="profile-links">
                                
                                <li><a class="icon-twitter-alt" href="https://twitter.com/periscopic">@periscopic</a></li>
                                <li><a class="icon-github" href="https://github.com/periscopic">periscopic</a></li>
                            </ul>
                        </li><!-- /end .profile-person -->
                        <li class="profile">
                            <h3 class="profile-name">
                                <a href="/organizations/phillycom/">
                                    <cite class="p-name">Philly.com</cite>
                                </a>
                            </h3>
                            
                            <ul class="profile-links">
                                <li class="has-icon icon-location">Philadelphia, PA</li>
                                <li><a class="icon-twitter-alt" href="https://twitter.com/phillydotcom">@phillydotcom</a></li>
                                <li><a class="icon-github" href="https://github.com/phillymedia">phillymedia</a></li>
                            </ul>
                        </li><!-- /end .profile-person -->
                        <li class="profile">
                            <h3 class="profile-name">
                                <a href="/organizations/phnom-penh-post/">
                                    <cite class="p-name">Phnom Penh Post</cite>
                                </a>
                            </h3>
                            
                            <ul class="profile-links">
                                
                                
                                
                            </ul>
                        </li><!-- /end .profile-person -->
                        <li class="profile">
                            <h3 class="profile-name">
                                <a href="/organizations/pitchfork/">
                                    <cite class="p-name">Pitchfork</cite>
                                </a>
                            </h3>
                            
                            <ul class="profile-links">
                                <li class="has-icon icon-location">Chicago, IL</li>
                                <li><a class="icon-twitter-alt" href="https://twitter.com/pitchfork">@pitchfork</a></li>
                                <li><a class="icon-github" href="https://github.com/pitchfork">pitchfork</a></li>
                            </ul>
                        </li><!-- /end .profile-person -->
                        <li class="profile">
                            <h3 class="profile-name">
                                <a href="/organizations/poderopedia/">
                                    <cite class="p-name">Poderopedia</cite>
                                </a>
                            </h3>
                            
                            <ul class="profile-links">
                                
                                <li><a class="icon-twitter-alt" href="https://twitter.com/poderopedia">@poderopedia</a></li>
                                <li><a class="icon-github" href="https://github.com/poderopedia">poderopedia</a></li>
                            </ul>
                        </li><!-- /end .profile-person -->
                        <li class="profile">
                            <h3 class="profile-name">
                                <a href="/organizations/policymic/">
                                    <cite class="p-name">PolicyMic</cite>
                                </a>
                            </h3>
                            
                            <ul class="profile-links">
                                <li class="has-icon icon-location">New York, NY</li>
                                <li><a class="icon-twitter-alt" href="https://twitter.com/policymic">@policymic</a></li>
                                
                            </ul>
                        </li><!-- /end .profile-person -->
                        <li class="profile">
                            <h3 class="profile-name">
                                <a href="/organizations/politifact/">
                                    <cite class="p-name">PolitiFact</cite>
                                </a>
                            </h3>
                            
                            <ul class="profile-links">
                                <li class="has-icon icon-location">Tampa, FL</li>
                                <li><a class="icon-twitter-alt" href="https://twitter.com/PolitiFact">@PolitiFact</a></li>
                                
                            </ul>
                        </li><!-- /end .profile-person -->
                        <li class="profile">
                            <h3 class="profile-name">
                                <a href="/organizations/pov/">
                                    <cite class="p-name">POV</cite>
                                </a>
                            </h3>
                            
                            <ul class="profile-links">
                                <li class="has-icon icon-location">Brooklyn, NY</li>
                                <li><a class="icon-twitter-alt" href="https://twitter.com/povdocs">@povdocs</a></li>
                                <li><a class="icon-github" href="https://github.com/povdocs">povdocs</a></li>
                            </ul>
                        </li><!-- /end .profile-person -->
                        <li class="profile">
                            <h3 class="profile-name">
                                <a href="/organizations/propublica/">
                                    <cite class="p-name">ProPublica</cite>
                                </a>
                            </h3>
                            
                            <ul class="profile-links">
                                <li class="has-icon icon-location">New York, NY</li>
                                <li><a class="icon-twitter-alt" href="https://twitter.com/propubnerds">@propubnerds</a></li>
                                <li><a class="icon-github" href="https://github.com/propublica">propublica</a></li>
                            </ul>
                        </li><!-- /end .profile-person -->
                        <li class="profile">
                            <h3 class="profile-name">
                                <a href="/organizations/providence-journal/">
                                    <cite class="p-name">Providence Journal</cite>
                                </a>
                            </h3>
                            
                            <ul class="profile-links">
                                <li class="has-icon icon-location">Providence, RI</li>
                                
                                
                            </ul>
                        </li><!-- /end .profile-person -->
                        <li class="profile">
                            <h3 class="profile-name">
                                <a href="/organizations/public-source/">
                                    <cite class="p-name">PublicSource</cite>
                                </a>
                            </h3>
                            
                            <ul class="profile-links">
                                <li class="has-icon icon-location">Pittsburgh, PA</li>
                                <li><a class="icon-twitter-alt" href="https://twitter.com/publicsourcepa">@publicsourcepa</a></li>
                                
                            </ul>
                        </li><!-- /end .profile-person -->
                        <li class="profile">
                            <h3 class="profile-name">
                                <a href="/organizations/quartz/">
                                    <cite class="p-name">Quartz</cite>
                                </a>
                            </h3>
                            
                            <ul class="profile-links">
                                <li class="has-icon icon-location">New York, New York</li>
                                <li><a class="icon-twitter-alt" href="https://twitter.com/qz">@qz</a></li>
                                <li><a class="icon-github" href="https://github.com/Quartz">Quartz</a></li>
                            </ul>
                        </li><!-- /end .profile-person -->
                        <li class="profile">
                            <h3 class="profile-name">
                                <a href="/organizations/radio-free-europeradio-liberty/">
                                    <cite class="p-name">Radio Free Europe/Radio Liberty</cite>
                                </a>
                            </h3>
                            
                            <ul class="profile-links">
                                <li class="has-icon icon-location">Prague, Czech Republic</li>
                                <li><a class="icon-twitter-alt" href="https://twitter.com/RFERL">@RFERL</a></li>
                                
                            </ul>
                        </li><!-- /end .profile-person -->
                        <li class="profile">
                            <h3 class="profile-name">
                                <a href="/organizations/reportedly/">
                                    <cite class="p-name">reported.ly</cite>
                                </a>
                            </h3>
                            
                            <ul class="profile-links">
                                
                                <li><a class="icon-twitter-alt" href="https://twitter.com/reportedly">@reportedly</a></li>
                                
                            </ul>
                        </li><!-- /end .profile-person -->
                        <li class="profile">
                            <h3 class="profile-name">
                                <a href="/organizations/reuters/">
                                    <cite class="p-name">Reuters</cite>
                                </a>
                            </h3>
                            
                            <ul class="profile-links">
                                <li class="has-icon icon-location">New York, NY</li>
                                <li><a class="icon-twitter-alt" href="https://twitter.com/ReutersGraphics">@ReutersGraphics</a></li>
                                
                            </ul>
                        </li><!-- /end .profile-person -->
                        <li class="profile">
                            <h3 class="profile-name">
                                <a href="/organizations/reveal/">
                                    <cite class="p-name">Reveal</cite>
                                </a>
                            </h3>
                            
                            <ul class="profile-links">
                                <li class="has-icon icon-location">Berkeley, CA</li>
                                <li><a class="icon-twitter-alt" href="https://twitter.com/reveal">@reveal</a></li>
                                
                            </ul>
                        </li><!-- /end .profile-person -->
                        <li class="profile">
                            <h3 class="profile-name">
                                <a href="/organizations/san-antonio-express-news/">
                                    <cite class="p-name">San Antonio Express-News</cite>
                                </a>
                            </h3>
                            
                            <ul class="profile-links">
                                <li class="has-icon icon-location">San Antonio, Texas, USA</li>
                                <li><a class="icon-twitter-alt" href="https://twitter.com/mySA">@mySA</a></li>
                                
                            </ul>
                        </li><!-- /end .profile-person -->
                        <li class="profile">
                            <h3 class="profile-name">
                                <a href="/organizations/san-francisco-chronicle/">
                                    <cite class="p-name">San Francisco Chronicle</cite>
                                </a>
                            </h3>
                            
                            <ul class="profile-links">
                                <li class="has-icon icon-location">San Francisco, CA</li>
                                <li><a class="icon-twitter-alt" href="https://twitter.com/sfchronicle">@sfchronicle</a></li>
                                <li><a class="icon-github" href="https://github.com/sfchronicle">sfchronicle</a></li>
                            </ul>
                        </li><!-- /end .profile-person -->
                        <li class="profile">
                            <h3 class="profile-name">
                                <a href="/organizations/serious-eats/">
                                    <cite class="p-name">Serious Eats</cite>
                                </a>
                            </h3>
                            
                            <ul class="profile-links">
                                
                                <li><a class="icon-twitter-alt" href="https://twitter.com/seriouseats">@seriouseats</a></li>
                                
                            </ul>
                        </li><!-- /end .profile-person -->
                        <li class="profile">
                            <h3 class="profile-name">
                                <a href="/organizations/skift/">
                                    <cite class="p-name">Skift</cite>
                                </a>
                            </h3>
                            
                            <ul class="profile-links">
                                <li class="has-icon icon-location">New York, NY</li>
                                <li><a class="icon-twitter-alt" href="https://twitter.com/skift">@skift</a></li>
                                <li><a class="icon-github" href="https://github.com/skift">skift</a></li>
                            </ul>
                        </li><!-- /end .profile-person -->
                        <li class="profile">
                            <h3 class="profile-name">
                                <a href="/organizations/slate/">
                                    <cite class="p-name">Slate</cite>
                                </a>
                            </h3>
                            
                            <ul class="profile-links">
                                <li class="has-icon icon-location">Washington, DC</li>
                                <li><a class="icon-twitter-alt" href="https://twitter.com/Slate">@Slate</a></li>
                                <li><a class="icon-github" href="https://github.com/slategroup">slategroup</a></li>
                            </ul>
                        </li><!-- /end .profile-person -->
                        <li class="profile">
                            <h3 class="profile-name">
                                <a href="/organizations/sourcefabric/">
                                    <cite class="p-name">Sourcefabric</cite>
                                </a>
                            </h3>
                            
                            <ul class="profile-links">
                                <li class="has-icon icon-location">Praha, Czech Republic</li>
                                <li><a class="icon-twitter-alt" href="https://twitter.com/sourcefabric">@sourcefabric</a></li>
                                <li><a class="icon-github" href="https://github.com/sourcefabric">sourcefabric</a></li>
                            </ul>
                        </li><!-- /end .profile-person -->
                        <li class="profile">
                            <h3 class="profile-name">
                                <a href="/organizations/southern-california-public-radio/">
                                    <cite class="p-name">Southern California Public Radio</cite>
                                </a>
                            </h3>
                            
                            <ul class="profile-links">
                                <li class="has-icon icon-location">Pasadena, CA</li>
                                <li><a class="icon-twitter-alt" href="https://twitter.com/kpcc">@kpcc</a></li>
                                <li><a class="icon-github" href="https://github.com/SCPR">SCPR</a></li>
                            </ul>
                        </li><!-- /end .profile-person -->
                        <li class="profile">
                            <h3 class="profile-name">
                                <a href="/organizations/star-tribune/">
                                    <cite class="p-name">Star Tribune</cite>
                                </a>
                            </h3>
                            
                            <ul class="profile-links">
                                <li class="has-icon icon-location">Minneapolis, Minnesota</li>
                                <li><a class="icon-twitter-alt" href="https://twitter.com/StarTribune">@StarTribune</a></li>
                                
                            </ul>
                        </li><!-- /end .profile-person -->
                        <li class="profile">
                            <h3 class="profile-name">
                                <a href="/organizations/st-cloud-times/">
                                    <cite class="p-name">St. Cloud Times</cite>
                                </a>
                            </h3>
                            
                            <ul class="profile-links">
                                <li class="has-icon icon-location">St. Cloud, MN</li>
                                <li><a class="icon-twitter-alt" href="https://twitter.com/sctimes">@sctimes</a></li>
                                
                            </ul>
                        </li><!-- /end .profile-person -->
                        <li class="profile">
                            <h3 class="profile-name">
                                <a href="/organizations/st-louis-public-radio/">
                                    <cite class="p-name">St. Louis Public Radio</cite>
                                </a>
                            </h3>
                            
                            <ul class="profile-links">
                                <li class="has-icon icon-location">St. Louis, MO</li>
                                <li><a class="icon-twitter-alt" href="https://twitter.com/stlpublicradio">@stlpublicradio</a></li>
                                
                            </ul>
                        </li><!-- /end .profile-person -->
                        <li class="profile">
                            <h3 class="profile-name">
                                <a href="/organizations/sun-sentinel/">
                                    <cite class="p-name">Sun Sentinel</cite>
                                </a>
                            </h3>
                            
                            <ul class="profile-links">
                                <li class="has-icon icon-location">Fort Lauderdale, Florida</li>
                                <li><a class="icon-twitter-alt" href="https://twitter.com/sunsentinel">@sunsentinel</a></li>
                                
                            </ul>
                        </li><!-- /end .profile-person -->
                        <li class="profile">
                            <h3 class="profile-name">
                                <a href="/organizations/tabula/">
                                    <cite class="p-name">Tabula</cite>
                                </a>
                            </h3>
                            
                            <ul class="profile-links">
                                
                                <li><a class="icon-twitter-alt" href="https://twitter.com/TabulaPDF">@TabulaPDF</a></li>
                                <li><a class="icon-github" href="https://github.com/tabul">tabul</a></li>
                            </ul>
                        </li><!-- /end .profile-person -->
                        <li class="profile">
                            <h3 class="profile-name">
                                <a href="/organizations/tageswoche/">
                                    <cite class="p-name">TagesWoche</cite>
                                </a>
                            </h3>
                            
                            <ul class="profile-links">
                                <li class="has-icon icon-location">Basel, Switzerland</li>
                                <li><a class="icon-twitter-alt" href="https://twitter.com/tageswoche">@tageswoche</a></li>
                                
                            </ul>
                        </li><!-- /end .profile-person -->
                        <li class="profile">
                            <h3 class="profile-name">
                                <a href="/organizations/tampa-bay-times/">
                                    <cite class="p-name">Tampa Bay Times</cite>
                                </a>
                            </h3>
                            
                            <ul class="profile-links">
                                <li class="has-icon icon-location">Tampa, FL</li>
                                <li><a class="icon-twitter-alt" href="https://twitter.com/TB_Times">@TB_Times</a></li>
                                
                            </ul>
                        </li><!-- /end .profile-person -->
                        <li class="profile">
                            <h3 class="profile-name">
                                <a href="/organizations/texas-tribune/">
                                    <cite class="p-name">Texas Tribune</cite>
                                </a>
                            </h3>
                            
                            <ul class="profile-links">
                                <li class="has-icon icon-location">Austin, TX</li>
                                <li><a class="icon-twitter-alt" href="https://twitter.com/newsapps">@newsapps</a></li>
                                <li><a class="icon-github" href="https://github.com/texastribune">texastribune</a></li>
                            </ul>
                        </li><!-- /end .profile-person -->
                        <li class="profile">
                            <h3 class="profile-name">
                                <a href="/organizations/baltimore-sun/">
                                    <cite class="p-name">The Baltimore Sun</cite>
                                </a>
                            </h3>
                            
                            <ul class="profile-links">
                                <li class="has-icon icon-location">Baltimore, MD</li>
                                <li><a class="icon-twitter-alt" href="https://twitter.com/baltimoresun">@baltimoresun</a></li>
                                <li><a class="icon-github" href="https://github.com/baltimore-sun-data">baltimore-sun-data</a></li>
                            </ul>
                        </li><!-- /end .profile-person -->
                        <li class="profile">
                            <h3 class="profile-name">
                                <a href="/organizations/bay-citizen/">
                                    <cite class="p-name">The Bay Citizen</cite>
                                </a>
                            </h3>
                            
                            <ul class="profile-links">
                                
                                
                                
                            </ul>
                        </li><!-- /end .profile-person -->
                        <li class="profile">
                            <h3 class="profile-name">
                                <a href="/organizations/cambodia-daily/">
                                    <cite class="p-name">The Cambodia Daily</cite>
                                </a>
                            </h3>
                            
                            <ul class="profile-links">
                                
                                <li><a class="icon-twitter-alt" href="https://twitter.com/cambodiadaily">@cambodiadaily</a></li>
                                
                            </ul>
                        </li><!-- /end .profile-person -->
                        <li class="profile">
                            <h3 class="profile-name">
                                <a href="/organizations/chicago-reporter/">
                                    <cite class="p-name">The Chicago Reporter</cite>
                                </a>
                            </h3>
                            
                            <ul class="profile-links">
                                <li class="has-icon icon-location">Chicago, IL</li>
                                <li><a class="icon-twitter-alt" href="https://twitter.com/chicagoreporter">@chicagoreporter</a></li>
                                
                            </ul>
                        </li><!-- /end .profile-person -->
                        <li class="profile">
                            <h3 class="profile-name">
                                <a href="/organizations/chicago-tribune/">
                                    <cite class="p-name">The Chicago Tribune</cite>
                                </a>
                            </h3>
                            
                            <ul class="profile-links">
                                <li class="has-icon icon-location">Chicago, IL</li>
                                <li><a class="icon-twitter-alt" href="https://twitter.com/chitribgraphics">@chitribgraphics</a></li>
                                <li><a class="icon-github" href="https://github.com/newsapps">newsapps</a></li>
                            </ul>
                        </li><!-- /end .profile-person -->
                        <li class="profile">
                            <h3 class="profile-name">
                                <a href="/organizations/chronicle-higher-education/">
                                    <cite class="p-name">The Chronicle of Higher Education</cite>
                                </a>
                            </h3>
                            
                            <ul class="profile-links">
                                <li class="has-icon icon-location">Washington, DC</li>
                                <li><a class="icon-twitter-alt" href="https://twitter.com/chronicle">@chronicle</a></li>
                                <li><a class="icon-github" href="https://github.com/chrondata">chrondata</a></li>
                            </ul>
                        </li><!-- /end .profile-person -->
                        <li class="profile">
                            <h3 class="profile-name">
                                <a href="/organizations/coral-project/">
                                    <cite class="p-name">The Coral Project</cite>
                                </a>
                            </h3>
                            
                            <ul class="profile-links">
                                
                                
                                <li><a class="icon-github" href="https://github.com/coralproject">coralproject</a></li>
                            </ul>
                        </li><!-- /end .profile-person -->
                        <li class="profile">
                            <h3 class="profile-name">
                                <a href="/organizations/daily-emerald/">
                                    <cite class="p-name">The Daily Emerald</cite>
                                </a>
                            </h3>
                            
                            <ul class="profile-links">
                                <li class="has-icon icon-location">Eugene, Oregon</li>
                                <li><a class="icon-twitter-alt" href="https://twitter.com/DailyEmerald">@DailyEmerald</a></li>
                                <li><a class="icon-github" href="https://github.com/dailyemerald">dailyemerald</a></li>
                            </ul>
                        </li><!-- /end .profile-person -->
                        <li class="profile">
                            <h3 class="profile-name">
                                <a href="/organizations/dallas-morning-news/">
                                    <cite class="p-name">The Dallas Morning News</cite>
                                </a>
                            </h3>
                            
                            <ul class="profile-links">
                                <li class="has-icon icon-location">Dallas, Texas</li>
                                <li><a class="icon-twitter-alt" href="https://twitter.com/dallasnews">@dallasnews</a></li>
                                
                            </ul>
                        </li><!-- /end .profile-person -->
                        <li class="profile">
                            <h3 class="profile-name">
                                <a href="/organizations/durham-herald-sun/">
                                    <cite class="p-name">The Durham Herald-Sun</cite>
                                </a>
                            </h3>
                            
                            <ul class="profile-links">
                                
                                
                                
                            </ul>
                        </li><!-- /end .profile-person -->
                        <li class="profile">
                            <h3 class="profile-name">
                                <a href="/organizations/economist/">
                                    <cite class="p-name">The Economist</cite>
                                </a>
                            </h3>
                            
                            <ul class="profile-links">
                                
                                
                                
                            </ul>
                        </li><!-- /end .profile-person -->
                        <li class="profile">
                            <h3 class="profile-name">
                                <a href="/organizations/financial-times/">
                                    <cite class="p-name">The Financial Times</cite>
                                </a>
                            </h3>
                            
                            <ul class="profile-links">
                                <li class="has-icon icon-location">London, United Kingdom</li>
                                <li><a class="icon-twitter-alt" href="https://twitter.com/ft">@ft</a></li>
                                <li><a class="icon-github" href="https://github.com/ft-interactive">ft-interactive</a></li>
                            </ul>
                        </li><!-- /end .profile-person -->
                        <li class="profile">
                            <h3 class="profile-name">
                                <a href="/organizations/globe-and-mail/">
                                    <cite class="p-name">The Globe and Mail</cite>
                                </a>
                            </h3>
                            
                            <ul class="profile-links">
                                <li class="has-icon icon-location">Toronto, Ontario</li>
                                <li><a class="icon-twitter-alt" href="https://twitter.com/globeandmail">@globeandmail</a></li>
                                <li><a class="icon-github" href="https://github.com/globeandmail">globeandmail</a></li>
                            </ul>
                        </li><!-- /end .profile-person -->
                        <li class="profile">
                            <h3 class="profile-name">
                                <a href="/organizations/guardian/">
                                    <cite class="p-name">The Guardian</cite>
                                </a>
                            </h3>
                            
                            <ul class="profile-links">
                                <li class="has-icon icon-location">London and New York, United Kingdom</li>
                                <li><a class="icon-twitter-alt" href="https://twitter.com/guardian">@guardian</a></li>
                                <li><a class="icon-github" href="https://github.com/guardian">guardian</a></li>
                            </ul>
                        </li><!-- /end .profile-person -->
                        <li class="profile">
                            <h3 class="profile-name">
                                <a href="/organizations/huffington-post/">
                                    <cite class="p-name">The Huffington Post</cite>
                                </a>
                            </h3>
                            
                            <ul class="profile-links">
                                <li class="has-icon icon-location">New York, NY</li>
                                <li><a class="icon-twitter-alt" href="https://twitter.com/HuffPostData">@HuffPostData</a></li>
                                <li><a class="icon-github" href="https://github.com/huffpostdata">huffpostdata</a></li>
                            </ul>
                        </li><!-- /end .profile-person -->
                        <li class="profile">
                            <h3 class="profile-name">
                                <a href="/organizations/journal-newslohudcom/">
                                    <cite class="p-name">The Journal News/LoHud.com</cite>
                                </a>
                            </h3>
                            
                            <ul class="profile-links">
                                <li class="has-icon icon-location">White Plains, NY</li>
                                <li><a class="icon-twitter-alt" href="https://twitter.com/lohud">@lohud</a></li>
                                
                            </ul>
                        </li><!-- /end .profile-person -->
                        <li class="profile">
                            <h3 class="profile-name">
                                <a href="/organizations/knight-foundation/">
                                    <cite class="p-name">The Knight Foundation</cite>
                                </a>
                            </h3>
                            
                            <ul class="profile-links">
                                <li class="has-icon icon-location">Miami, FL</li>
                                <li><a class="icon-twitter-alt" href="https://twitter.com/knightfdn">@knightfdn</a></li>
                                
                            </ul>
                        </li><!-- /end .profile-person -->
                        <li class="profile">
                            <h3 class="profile-name">
                                <a href="/organizations/the-lens/">
                                    <cite class="p-name">The Lens</cite>
                                </a>
                            </h3>
                            
                            <ul class="profile-links">
                                
                                <li><a class="icon-twitter-alt" href="https://twitter.com/thelensnola">@thelensnola</a></li>
                                
                            </ul>
                        </li><!-- /end .profile-person -->
                        <li class="profile">
                            <h3 class="profile-name">
                                <a href="/organizations/los-angeles-times/">
                                    <cite class="p-name">The Los Angeles Times</cite>
                                </a>
                            </h3>
                            
                            <ul class="profile-links">
                                <li class="has-icon icon-location">Los Angeles, CA</li>
                                <li><a class="icon-twitter-alt" href="https://twitter.com/LATdatadesk">@LATdatadesk</a></li>
                                <li><a class="icon-github" href="https://github.com/datadesk">datadesk</a></li>
                            </ul>
                        </li><!-- /end .profile-person -->
                        <li class="profile">
                            <h3 class="profile-name">
                                <a href="/organizations/marshall-project/">
                                    <cite class="p-name">The Marshall Project</cite>
                                </a>
                            </h3>
                            
                            <ul class="profile-links">
                                <li class="has-icon icon-location">New York, NY</li>
                                <li><a class="icon-twitter-alt" href="https://twitter.com/MarshallProj">@MarshallProj</a></li>
                                <li><a class="icon-github" href="https://github.com/themarshallproject">themarshallproject</a></li>
                            </ul>
                        </li><!-- /end .profile-person -->
                        <li class="profile">
                            <h3 class="profile-name">
                                <a href="/organizations/news-journal/">
                                    <cite class="p-name">The News Journal</cite>
                                </a>
                            </h3>
                            
                            <ul class="profile-links">
                                <li class="has-icon icon-location">New Castle, Delaware</li>
                                <li><a class="icon-twitter-alt" href="https://twitter.com/delawareonline">@delawareonline</a></li>
                                <li><a class="icon-github" href="https://github.com/rlong">rlong</a></li>
                            </ul>
                        </li><!-- /end .profile-person -->
                        <li class="profile">
                            <h3 class="profile-name">
                                <a href="/organizations/new-york-times/">
                                    <cite class="p-name">The New York Times</cite>
                                </a>
                            </h3>
                            
                            <ul class="profile-links">
                                <li class="has-icon icon-location">New York, NY</li>
                                <li><a class="icon-twitter-alt" href="https://twitter.com/nytimes">@nytimes</a></li>
                                <li><a class="icon-github" href="https://github.com/nytimes">nytimes</a></li>
                            </ul>
                        </li><!-- /end .profile-person -->
                        <li class="profile">
                            <h3 class="profile-name">
                                <a href="/organizations/next-great-media-organization/">
                                    <cite class="p-name">The Next Great Media Organization</cite>
                                </a>
                            </h3>
                            
                            <ul class="profile-links">
                                
                                
                                
                            </ul>
                        </li><!-- /end .profile-person -->
                        <li class="profile">
                            <h3 class="profile-name">
                                <a href="/organizations/oregonian/">
                                    <cite class="p-name">The Oregonian</cite>
                                </a>
                            </h3>
                            
                            <ul class="profile-links">
                                
                                <li><a class="icon-twitter-alt" href="https://twitter.com/oregonian">@oregonian</a></li>
                                <li><a class="icon-github" href="https://github.com/oregonian">oregonian</a></li>
                            </ul>
                        </li><!-- /end .profile-person -->
                        <li class="profile">
                            <h3 class="profile-name">
                                <a href="/organizations/pew-research-center/">
                                    <cite class="p-name">The Pew Research Center</cite>
                                </a>
                            </h3>
                            
                            <ul class="profile-links">
                                <li class="has-icon icon-location">Washington, DC</li>
                                <li><a class="icon-twitter-alt" href="https://twitter.com/pewresearch">@pewresearch</a></li>
                                <li><a class="icon-github" href="https://github.com/pewresearch">pewresearch</a></li>
                            </ul>
                        </li><!-- /end .profile-person -->
                        <li class="profile">
                            <h3 class="profile-name">
                                <a href="/organizations/pittsburgh-post-gazette/">
                                    <cite class="p-name">The Pittsburgh Post-Gazette</cite>
                                </a>
                            </h3>
                            
                            <ul class="profile-links">
                                <li class="has-icon icon-location">Pittsburgh, Pennsylvania</li>
                                <li><a class="icon-twitter-alt" href="https://twitter.com/mjrochester">@mjrochester</a></li>
                                
                            </ul>
                        </li><!-- /end .profile-person -->
                        <li class="profile">
                            <h3 class="profile-name">
                                <a href="/organizations/post-and-courier/">
                                    <cite class="p-name">The Post and Courier</cite>
                                </a>
                            </h3>
                            
                            <ul class="profile-links">
                                
                                
                                
                            </ul>
                        </li><!-- /end .profile-person -->
                        <li class="profile">
                            <h3 class="profile-name">
                                <a href="/organizations/register-guard/">
                                    <cite class="p-name">The Register-Guard</cite>
                                </a>
                            </h3>
                            
                            <ul class="profile-links">
                                <li class="has-icon icon-location">Eugene, Ore.</li>
                                <li><a class="icon-twitter-alt" href="https://twitter.com/registerguard">@registerguard</a></li>
                                <li><a class="icon-github" href="https://github.com/registerguard">registerguard</a></li>
                            </ul>
                        </li><!-- /end .profile-person -->
                        <li class="profile">
                            <h3 class="profile-name">
                                <a href="/organizations/seattle-times/">
                                    <cite class="p-name">The Seattle Times</cite>
                                </a>
                            </h3>
                            
                            <ul class="profile-links">
                                <li class="has-icon icon-location">Seattle, WA</li>
                                
                                
                            </ul>
                        </li><!-- /end .profile-person -->
                        <li class="profile">
                            <h3 class="profile-name">
                                <a href="/organizations/spokesman-review/">
                                    <cite class="p-name">The Spokesman-Review</cite>
                                </a>
                            </h3>
                            
                            <ul class="profile-links">
                                <li class="has-icon icon-location">Spokane, WA</li>
                                <li><a class="icon-twitter-alt" href="https://twitter.com/SpokesmanReview">@SpokesmanReview</a></li>
                                <li><a class="icon-github" href="https://github.com/SpokesmanReview">SpokesmanReview</a></li>
                            </ul>
                        </li><!-- /end .profile-person -->
                        <li class="profile">
                            <h3 class="profile-name">
                                <a href="/organizations/sunlight-foundation/">
                                    <cite class="p-name">The Sunlight Foundation</cite>
                                </a>
                            </h3>
                            
                            <ul class="profile-links">
                                <li class="has-icon icon-location">Washington, DC</li>
                                <li><a class="icon-twitter-alt" href="https://twitter.com/sunfoundation">@sunfoundation</a></li>
                                <li><a class="icon-github" href="https://github.com/sunlightlabs">sunlightlabs</a></li>
                            </ul>
                        </li><!-- /end .profile-person -->
                        <li class="profile">
                            <h3 class="profile-name">
                                <a href="/organizations/times-london/">
                                    <cite class="p-name">The Times and Sunday Times</cite>
                                </a>
                            </h3>
                            
                            <ul class="profile-links">
                                <li class="has-icon icon-location">London, United Kingdom, United Kingdom</li>
                                <li><a class="icon-twitter-alt" href="https://twitter.com/timesdevelops">@timesdevelops</a></li>
                                <li><a class="icon-github" href="https://github.com/times">times</a></li>
                            </ul>
                        </li><!-- /end .profile-person -->
                        <li class="profile">
                            <h3 class="profile-name">
                                <a href="/organizations/trace/">
                                    <cite class="p-name">The Trace</cite>
                                </a>
                            </h3>
                            
                            <ul class="profile-links">
                                
                                
                                
                            </ul>
                        </li><!-- /end .profile-person -->
                        <li class="profile">
                            <h3 class="profile-name">
                                <a href="/organizations/verge/">
                                    <cite class="p-name">The Verge</cite>
                                </a>
                            </h3>
                            
                            <ul class="profile-links">
                                <li class="has-icon icon-location">New York, NY</li>
                                <li><a class="icon-twitter-alt" href="https://twitter.com/verge">@verge</a></li>
                                
                            </ul>
                        </li><!-- /end .profile-person -->
                        <li class="profile">
                            <h3 class="profile-name">
                                <a href="/organizations/wall-street-journal/">
                                    <cite class="p-name">The Wall Street Journal</cite>
                                </a>
                            </h3>
                            
                            <ul class="profile-links">
                                <li class="has-icon icon-location">New York, NY</li>
                                <li><a class="icon-twitter-alt" href="https://twitter.com/WSJ">@WSJ</a></li>
                                
                            </ul>
                        </li><!-- /end .profile-person -->
                        <li class="profile">
                            <h3 class="profile-name">
                                <a href="/organizations/washington-post/">
                                    <cite class="p-name">The Washington Post</cite>
                                </a>
                            </h3>
                            
                            <ul class="profile-links">
                                <li class="has-icon icon-location">Washington, DC, USA</li>
                                <li><a class="icon-twitter-alt" href="https://twitter.com/PostGraphics">@PostGraphics</a></li>
                                <li><a class="icon-github" href="https://github.com/washingtonpost">washingtonpost</a></li>
                            </ul>
                        </li><!-- /end .profile-person -->
                        <li class="profile">
                            <h3 class="profile-name">
                                <a href="/organizations/washington-times/">
                                    <cite class="p-name">The Washington Times</cite>
                                </a>
                            </h3>
                            
                            <ul class="profile-links">
                                <li class="has-icon icon-location">Washington, DC</li>
                                <li><a class="icon-twitter-alt" href="https://twitter.com/washtimes">@washtimes</a></li>
                                
                            </ul>
                        </li><!-- /end .profile-person -->
                        <li class="profile">
                            <h3 class="profile-name">
                                <a href="/organizations/thought-catalog/">
                                    <cite class="p-name">Thought Catalog</cite>
                                </a>
                            </h3>
                            
                            <ul class="profile-links">
                                <li class="has-icon icon-location">Brooklyn, NY</li>
                                <li><a class="icon-twitter-alt" href="https://twitter.com/thoughtcatalog">@thoughtcatalog</a></li>
                                <li><a class="icon-github" href="https://github.com/thoughtis">thoughtis</a></li>
                            </ul>
                        </li><!-- /end .profile-person -->
                        <li class="profile">
                            <h3 class="profile-name">
                                <a href="/organizations/time/">
                                    <cite class="p-name">Time </cite>
                                </a>
                            </h3>
                            
                            <ul class="profile-links">
                                <li class="has-icon icon-location">Washington, DC</li>
                                <li><a class="icon-twitter-alt" href="https://twitter.com/TIME">@TIME</a></li>
                                <li><a class="icon-github" href="https://github.com/TimeMagazine">TimeMagazine</a></li>
                            </ul>
                        </li><!-- /end .profile-person -->
                        <li class="profile">
                            <h3 class="profile-name">
                                <a href="/organizations/twitter/">
                                    <cite class="p-name">Twitter</cite>
                                </a>
                            </h3>
                            
                            <ul class="profile-links">
                                <li class="has-icon icon-location">San Francisco, CA</li>
                                <li><a class="icon-twitter-alt" href="https://twitter.com/twitter">@twitter</a></li>
                                <li><a class="icon-github" href="https://github.com/twitter">twitter</a></li>
                            </ul>
                        </li><!-- /end .profile-person -->
                        <li class="profile">
                            <h3 class="profile-name">
                                <a href="/organizations/usa-today/">
                                    <cite class="p-name">USA Today</cite>
                                </a>
                            </h3>
                            
                            <ul class="profile-links">
                                <li class="has-icon icon-location">McLean, VA</li>
                                <li><a class="icon-twitter-alt" href="https://twitter.com/usatoday">@usatoday</a></li>
                                
                            </ul>
                        </li><!-- /end .profile-person -->
                        <li class="profile">
                            <h3 class="profile-name">
                                <a href="/organizations/ushahidi/">
                                    <cite class="p-name">Ushahidi</cite>
                                </a>
                            </h3>
                            
                            <ul class="profile-links">
                                
                                <li><a class="icon-twitter-alt" href="https://twitter.com/ushahidi">@ushahidi</a></li>
                                
                            </ul>
                        </li><!-- /end .profile-person -->
                        <li class="profile">
                            <h3 class="profile-name">
                                <a href="/organizations/us-news-world-report/">
                                    <cite class="p-name">U.S. News &amp; World Report</cite>
                                </a>
                            </h3>
                            
                            <ul class="profile-links">
                                
                                <li><a class="icon-twitter-alt" href="https://twitter.com/usnews">@usnews</a></li>
                                
                            </ul>
                        </li><!-- /end .profile-person -->
                        <li class="profile">
                            <h3 class="profile-name">
                                <a href="/organizations/vermont-public-radio/">
                                    <cite class="p-name">Vermont Public Radio</cite>
                                </a>
                            </h3>
                            
                            <ul class="profile-links">
                                
                                
                                
                            </ul>
                        </li><!-- /end .profile-person -->
                        <li class="profile">
                            <h3 class="profile-name">
                                <a href="/organizations/vizzuality/">
                                    <cite class="p-name">Vizzuality</cite>
                                </a>
                            </h3>
                            
                            <ul class="profile-links">
                                <li class="has-icon icon-location">Madrid, Spain</li>
                                <li><a class="icon-twitter-alt" href="https://twitter.com/vizzuality">@vizzuality</a></li>
                                <li><a class="icon-github" href="https://github.com/vizzuality">vizzuality</a></li>
                            </ul>
                        </li><!-- /end .profile-person -->
                        <li class="profile">
                            <h3 class="profile-name">
                                <a href="/organizations/vox-media/">
                                    <cite class="p-name">Vox Media</cite>
                                </a>
                            </h3>
                            
                            <ul class="profile-links">
                                <li class="has-icon icon-location">Washington, DC</li>
                                <li><a class="icon-twitter-alt" href="https://twitter.com/voxproduct">@voxproduct</a></li>
                                <li><a class="icon-github" href="https://github.com/voxmedia">voxmedia</a></li>
                            </ul>
                        </li><!-- /end .profile-person -->
                        <li class="profile">
                            <h3 class="profile-name">
                                <a href="/organizations/wbez/">
                                    <cite class="p-name">WBEZ</cite>
                                </a>
                            </h3>
                            
                            <ul class="profile-links">
                                <li class="has-icon icon-location">Chicago, IL</li>
                                <li><a class="icon-twitter-alt" href="https://twitter.com/wbez">@wbez</a></li>
                                
                            </ul>
                        </li><!-- /end .profile-person -->
                        <li class="profile">
                            <h3 class="profile-name">
                                <a href="/organizations/wbur/">
                                    <cite class="p-name">WBUR</cite>
                                </a>
                            </h3>
                            
                            <ul class="profile-links">
                                
                                <li><a class="icon-twitter-alt" href="https://twitter.com/wbur">@wbur</a></li>
                                <li><a class="icon-github" href="https://github.com/wbur">wbur</a></li>
                            </ul>
                        </li><!-- /end .profile-person -->
                        <li class="profile">
                            <h3 class="profile-name">
                                <a href="/organizations/wfmu/">
                                    <cite class="p-name">WFMU</cite>
                                </a>
                            </h3>
                            
                            <ul class="profile-links">
                                <li class="has-icon icon-location">Jersey City, NJ</li>
                                <li><a class="icon-twitter-alt" href="https://twitter.com/WFMU">@WFMU</a></li>
                                
                            </ul>
                        </li><!-- /end .profile-person -->
                        <li class="profile">
                            <h3 class="profile-name">
                                <a href="/organizations/wired/">
                                    <cite class="p-name">Wired</cite>
                                </a>
                            </h3>
                            
                            <ul class="profile-links">
                                
                                <li><a class="icon-twitter-alt" href="https://twitter.com/WIRED">@WIRED</a></li>
                                
                            </ul>
                        </li><!-- /end .profile-person -->
                        <li class="profile">
                            <h3 class="profile-name">
                                <a href="/organizations/wnyc/">
                                    <cite class="p-name">WNYC</cite>
                                </a>
                            </h3>
                            
                            <ul class="profile-links">
                                <li class="has-icon icon-location">New York, NY</li>
                                <li><a class="icon-twitter-alt" href="https://twitter.com/wnyc">@wnyc</a></li>
                                <li><a class="icon-github" href="https://github.com/wnyc">wnyc</a></li>
                            </ul>
                        </li><!-- /end .profile-person -->
                        <li class="profile">
                            <h3 class="profile-name">
                                <a href="/organizations/wral/">
                                    <cite class="p-name">WRAL</cite>
                                </a>
                            </h3>
                            
                            <ul class="profile-links">
                                <li class="has-icon icon-location">Raleigh, NC</li>
                                <li><a class="icon-twitter-alt" href="https://twitter.com/WRAL">@WRAL</a></li>
                                
                            </ul>
                        </li><!-- /end .profile-person -->
                        <li class="profile">
                            <h3 class="profile-name">
                                <a href="/organizations/yemen-times/">
                                    <cite class="p-name">Yemen Times</cite>
                                </a>
                            </h3>
                            
                            <ul class="profile-links">
                                <li class="has-icon icon-location">Sana'a , Republic of Yemen</li>
                                <li><a class="icon-twitter-alt" href="https://twitter.com/theyementimes">@theyementimes</a></li>
                                
                            </ul>
                        </li><!-- /end .profile-person -->
                        <li class="profile">
                            <h3 class="profile-name">
                                <a href="/organizations/youth-radio/">
                                    <cite class="p-name">Youth Radio</cite>
                                </a>
                            </h3>
                            
                            <ul class="profile-links">
                                <li class="has-icon icon-location">Oakland, CA</li>
                                <li><a class="icon-twitter-alt" href="https://twitter.com/youthradio">@youthradio</a></li>
                                
                            </ul>
                        </li><!-- /end .profile-person -->
                        <li class="profile">
                            <h3 class="profile-name">
                                <a href="/organizations/zeit-online/">
                                    <cite class="p-name">Zeit Online</cite>
                                </a>
                            </h3>
                            
                            <ul class="profile-links">
                                
                                
                                
                            </ul>
                        </li><!-- /end .profile-person -->
                    </ul>
                </div><!-- /end .mod -->
            </div><!-- /end .content-main -->

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