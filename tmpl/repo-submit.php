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

<body>

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

                    <p class="msg-error">Oh no! There were a few errors with your submission. Mind double-checking the form, and filling out all the required fields?</p>

                    <form class="form-submit" action="/submit/" method="/post/">
                        <fieldset>
                            <legend>Who are you?</legend>
                            <p>
                                <label for="repo-submitter-name">Name:</label>
                                <input type="text" required class="field-text" id="repo-submitter-name" />
                            </p>
                            <p>
                                <label for="repo-submitter-email">Email:</label>
                                <input type="email" required class="field-text" id="repo-submitter-email" />
                            </p>
                        </fieldset>

                        <fieldset>
                            <legend>What is it?</legend>

                            <p class="msg-error">Please complete the required fields.</p>

                            <div class="form-phrase">
                                <span class="cue squelch" role="presentation">“I’m submitting</span>
                                <p>
                                    <label for="repo-name">Name of your app/tool:</label>
                                    <input type="text" required class="field-text" value="" id="repo-name" />
                                </p>
                                <span class="cue squelch" role="presentation">, which is a</span>
                                <p>
                                    <label for="repo-type">What your app/tool is:</label>
                                    <input type="text" required class="field-text msg-error" value="" id="repo-type" />
                                </p>
                                <span class="cue squelch" role="presentation">that allows users to</span>
                                <p>
                                    <label for="repo-purpose">What your app/tool does, and for whom:</label>
                                    <input type="text" required class="field-text" value="" id="repo-purpose" />
                                </p>
                                <span class="cue squelch" role="presentation">.”</span>
                             </div>
                        </fieldset>

                        <fieldset>
                            <legend>Who made it?</legend>

                            <p class="form-phrase">
                                <label for="repo-credits">The person(s) who created this:</label>
                                <input type="text" required class="field-text" id="repo-credits" />
                            </p>
                        </fieldset>

                        <fieldset>
                            <legend>How easy is it to use?</legend>

                            <p class="msg-error">Please choose a difficulty setting.</p>

                            <ul class="form-chooser choose-repo-difficulty">
                                <li>
                                    <input name="repo-difficulty" id="repo-difficulty-1" value="repo-difficulty-1" type="radio" />
                                    <label for="repo-difficulty-1" required class="icon-difficulty-1">Super easy</label>
                                </li>
                                <li>
                                    <input name="repo-difficulty" id="repo-difficulty-2" value="repo-difficulty-2" type="radio" />
                                    <label for="repo-difficulty-2" required class="icon-difficulty-2">Pretty easy</label>
                                </li>
                                <li>
                                    <input name="repo-difficulty" id="repo-difficulty-3" value="repo-difficulty-3" type="radio" />
                                    <label for="repo-difficulty-3" required class="icon-difficulty-3">A little tricky</label>
                                </li>
                                <li>
                                    <input name="repo-difficulty" id="repo-difficulty-4" value="repo-difficulty-4" type="radio" />
                                    <label for="repo-difficulty-4" required class="icon-difficulty-4">Kinda hard</label>
                                </li>
                            </ul>
                        </fieldset>

                        <fieldset>
                            <legend>Any prerequisites?</legend>

                            <p class="form-phrase">
                                <label for="repo-prerequisites">Do we need to install anything beforehand?</label>
                                <input type="text" required class="field-text" id="repo-prerequisites" />
                            </p>
                        </fieldset>

                        <fieldset>
                            <legend>“It will make our lives better by…”</legend>

                            <p class="form-phrase">
                                <label for="repo-description">Tell us what your app or tool does.</label>
                                <textarea required name="repo-desc" cols="30" rows="10" id="repo-description"></textarea>
                            </p>
                        </fieldset>

                        <p><input type="submit" value="Submit your repo" /></p>

                    </form>

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