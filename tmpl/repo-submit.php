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

<title>Submit your code — SOURCE</title>

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
                <h1 class="page-title-lead">Submit Repo</h1>

                <div class="mod main-lead">
                    <p>Give us your codes. Give us them.</p>
                </div><!-- /end .mod.main-lead -->

                <div class="mod">
                    <h2 class="hed-label">What is the deal dot html</h2>

                    <form>
                        <fieldset>
                            <legend>Who are you?</legend>
                            <p>Name <input type="text" /></p>

                            <p>Email <input type="text" /></p>
                        </fieldset>

                        <fieldset>
                            <legend>What is it?</legend>

                            <p><input type="text" /> is <input type="text" /> that <input type="text" />.</p>
                        </fieldset>

                        <fieldset>
                            <legend>Who made it?</legend>

                            <p><input type="text" /></p>
                        </fieldset>

                        <fieldset>
                            <legend>How easy is it to use?</legend>

                            <ul class="form-chooser">
                                <li>
                                    <label for="difficulty-1">Super easy</label>
                                    <input name="repo-difficulty" id="difficulty-1" value="difficulty-1" type="radio" />
                                </li>
                                <li>
                                    <label for="difficulty-2">Pretty easy</label>
                                    <input name="repo-difficulty" id="difficulty-2" value="difficulty-2" type="radio" />
                                </li>
                                <li>
                                    <label for="difficulty-3">A little tricky</label>
                                    <input name="repo-difficulty" id="difficulty-3" value="difficulty-3" type="radio" />
                                </li>
                                <li>
                                    <label for="difficulty-4">Kinda hard</label>
                                    <input name="repo-difficulty" id="difficulty-4" value="difficulty-4" type="radio" />
                                </li>
                            </ul>
                        </fieldset>

                        <fieldset>
                            <legend>Any prerequisites?</legend>

                            <p><input type="text" /></p>
                        </fieldset>

                        <fieldset>
                            <legend>“It will make our lives better by…”</legend>

                            <p>
                                <textarea name="repo-desc" cols="30" rows="10"></textarea>
                            </p>
                        </fieldset>

                    </form>

                </div><!-- /end .mod -->
            </div><!-- /end .group.p-more -->

            <div class="content-aside">
                <div class="mod aside-lead">
                    <h2 class="hed-label">Recently Added</h2>

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
                </div><!-- /end .mod.aside-lead -->
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