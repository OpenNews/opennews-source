<?php
$rootpath = $_SERVER['DOCUMENT_ROOT'];
?>
<!DOCTYPE html>
<!--[if IE]><![endif]-->
<!--[if lt IE 9]>  <html class="ie oldie" lang="en"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<head>
<meta charset="utf-8" />

<title>SOURCE — 2017 Redesign</title>

<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<script>
window.SRC = {};
window.SRC.config = {};
SRC.config.typekit = "jyd1gcb";
<?php include( $rootpath . "/js/typekit.js" ); ?>
</script>

<style>
body {
    background: #232C50;
    color: #FFF;
    font: normal 100%/1.5 Arial, Helvetica, sans-serif;
    font-size: calc( 14px + ( 16 - 14 ) * ( ( 100vw - 300px ) / ( 1400 - 300 ) ) );
    margin: 1em;
    margin: 5vw;
}
.wf-active body {
    font-family: "sofia-pro", sans-serif;
}
body a {
    color: inherit;
}
.page {
    margin: 0 auto;
    max-width: 40em;
    text-align: center;
}
h1 {
    margin: 0 0 5vw;
}
ul,
li,
li a {
    display: flex;
}
ul {
    list-style: none;
    padding-left: 0;
    flex-direction: column;
    flex-wrap: wrap;
}
li,
li a {
    flex: 1 auto;
}
@media (min-width: 30em) {
    ul {
        flex-direction: row;
        flex-wrap: wrap;
    }
    li a {
        flex: 1;
    }
    li {
        box-sizing: border-box;
        flex: 0 1 50%;
    }
}
li {
    padding: 1px;
    height: 15em;
}
li a {
    align-items: center;
    background: rgba( 0, 0, 0, 0.2 ) url( "svg/dots-footer.svg" ) no-repeat;
    background-position: left 100% top 20em;
    font-weight: bold;
    justify-content: center;
    transition: background-color 0.6s, background-position 0.6s;
    text-decoration: none;
}
li a:hover,
li a:focus {
    background-color: rgba( 0, 0, 0, 0.6 );
    background-position: right 100% top 10em;
}
</style>

</head>
<body>

<div class="page">
    <h1>Source 2017 Redesign</h1>

    <ul>
        <li><a href="article.php">Article</a></li>
        <li><a href="landing-code.php">Landing (Code)</a></li>
        <li><a href="repo-featured.php">Featured Repo</a></li>
        <li><a href="repo-submit.php">Submit Repo</a></li>
    </ul>
</div>

</body>
</html>