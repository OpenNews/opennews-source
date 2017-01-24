<?php
$rootpath = $_SERVER['DOCUMENT_ROOT'];
$criticalcss = "critical-article.css";
$current_page = "articles";
?>
<!DOCTYPE html>
<!--[if IE]><![endif]-->
<!--[if lt IE 9]>  <html class="ie oldie" lang="en"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<head>
<meta charset="utf-8" />

<title>From the BBC News Labs: Datastringer — SOURCE</title>

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

<script>
// If there are Disqus-specific variables to be included, uncomment this block and add them below.
/*
var disqus_config = function () {
    this.page.url = PAGE_URL;
    this.page.identifier = PAGE_IDENTIFIER; identifier variable
};
*/
</script>

</head>

<body class="tmpl-article">

<div class="page">

    <?php
    include($rootpath . "/inc/site-header.php");
    ?>

    <main>
        <div class="page-main">
            <div class="article-matter-front">
                <p class="hed-label">Project<span class="a11y">:</span></p>

                <h1 class="page-title-lead">From the BBC News Labs: Datastringer</h1>

                <h2 class="article-subtitle-lead">Basile Simon walks through a project sparked at Hacks/Hackers London</h2>

                <ul class="list-tags">
                    <li><a class="tag" href="#">javascript</a></li>
                    <li><a class="tag" href="#">data</a></li>
                    <li><a class="tag" href="#">onboarding</a></li>
                    <li><a class="tag" href="#">work</a></li>
                    <li><a class="tag" href="#">survey</a></li>
                    <li><a class="tag" href="#">hashtags</a></li>
                    <li><a class="tag" href="#">teens</a></li>
                </ul><!-- /end .list-tags -->

                <div class="article-meta">
                    <p class="article-byline">By <a href="#">Basile Simon</a>, <a href="#">Tiff Fehr</a>, <a href="#">Erin Kissane</a>, and <a href="#">Alyson Hurt</a></p>

                    <p class="article-date">Posted on: <time datetime="2015-09-15">20 September 2015</time></p>
                </div><!-- /end .article-meta -->
            </div><!-- /end .article-matter-front -->

            <hr />

            <div class="figure figure-article-lead">
                <figure>
                    <img src="/img/fpo/article-lead.jpg" alt="" />
                    <figcaption>
                        <p>Our printed ballot guide for voters to take to the polls—a product of the testing described in this article.</p>
                    </figcaption>
                </figure>
            </div><!-- /end .figure.figure-article-minor -->

            <div class="article-main">
                <p>Journalists always relied on sources to do their job. Sources very often provide journalists with stories, as well as quotes and interviews. Big agencies like <a href="#">Reuters</a> and <a href="#">AP</a> do that too: they are fed wire reports from local journalists on the ground, everywhere on the globe. These people are called stringers.</p>

                <p>Picture yourself as a local journalist. You love local police stories, there’s always something to write about, and your audience cares a lot about them. You get these stories by calling your sources in the force in the morning, and by receiving press releases every once in a while. How fantastic would it be if you could have a little piece of software you could tell what you’re looking for, then let it do the leg-work and alert you when it finds something worth your attention?</p>

                <p>That’s what <a href="#">Datastringer</a> aims to do. It was built to be as simple as possible, and very much journalism-oriented. The idea is not new in itself, it’s basically a monitoring tool. However, Datastringer wants to:</p>

                <ul>
                    <li>Simplify the process of monitoring streaming pure-data sources,</li>
                    <li>Give you the freedom to use all of JavaScript and Node’s power to mash up several datasets at once,</li>
                    <li>Provide a ready-to-use environment to help you define your alert parameters, as well as encourage you to perform basic data-analysis operations on the monitored datasets before setting the alerts.</li>
                </ul>

                <p>As always, I will try my best not to fall into PR, and instead, to offer my personal view on Datastringer’s creation process, as well as what we learnt by doing it. Do head to the repo and wiki for examples, snippets, and more code-related stuff.</p>

                <blockquote>
                    <p>Developing with the app is like developing with any of NPR Visuals’ applications – you run the Flask app locally, and it offers easy Fabric commands to bake the app into static HTML. The difference is the deployment process runs Node scripts that package the app into an Electron app and then create ready-to-use installers for Windows and Mac OS X.</p>
                    <p>…</p>
                    <p>Configurable copyright options add an additional layer of complexity to the app, but it is a necessary step. <a href="https://source.opennews.org/en-US/articles/introducing-lunchbox/">Waterbug</a>’s main purpose is to properly give credit to photographers while not wasting characters on that attribution (this is especially useful on Twitter as images take up 23 of the the 140 character limit).</p>
                </blockquote>

                <p>That’s what <a href="#">Datastringer</a> aims to do. It was built to be as simple as possible, and very much journalism-oriented. The idea is not new in itself, it’s basically a monitoring tool. However, Datastringer wants to:</p>

                <p>As always, I will try my best not to fall into PR, and instead, to offer my personal view on Datastringer’s creation process, as well as what we learnt by doing it. Do head to the repo and wiki for examples, snippets, and more code-related stuff.</p>

                <h2>From Idea to Hacking</h2>

                <h3>This is an example of a subhed. Subheds are good!</h3>

                <p>As always, I will try my best not to fall into PR, and instead, to offer my personal view on Datastringer’s creation process, as well as what we learnt by doing it. Do head to the repo and wiki for examples, snippets, and more code-related stuff.</p>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam, quaerat neque magni natus sunt autem animi soluta labore ipsa nulla quod nam itaque fugit eum delectus tenetur esse vitae fugiat.</p>

                <ol>
                    <li>Simplify the process of monitoring streaming pure-data sources,</li>
                    <li>Give you the freedom to use all of JavaScript and Node’s power to mash up several datasets at once,
                        <ol>
                            <li>oh look</li>
                            <li>this list</li>
                            <li>it is nested</li>
                        </ol>
                    </li>
                    <li>Provide a ready-to-use environment to help you define your alert parameters, as well as encourage you to perform basic data-analysis operations on the monitored datasets before setting the alerts.</li>
                </ol>

                <p>About the way it works, you’ve got to think of it this way: <code>datastringer.js</code> is a sort of black box which uses user-input values, parameters, and functions, stored in <code>use_cases.json</code>. Let’s have a look at this file’s structure:</p>

                <pre><code>javascript
  [{
    "stringer": "local-police-stringer.js",
    "parameters": ["metropolitan", "00AGGU"]
  }, {
    "stringer": "crime-stringer.js",
    "parameters": ["51.52863195218981", "-0.12342453002929688", "6", "10"]
  }]</code></pre>

                <p>The day before August 16, e.g. one day before the Knight-Mozilla Fellowship deadline, and three days before our presentation to the News Labs, Clément came to London for a final sprint. We worked all day on the project and on our caffeine-per-gram-of-blood level. Until this key moment when, while writing the documentation, I asked Clément for help.</p>

                <div class="figure figure-article-minor">
                    <figure>
                        <img src="/img/fpo/article-inset.jpg" alt="" />
                        <figcaption>
                            <p>Clément drawing explanations on the windows.</p>
                        </figcaption>
                    </figure>
                </div><!-- /end .figure.figure-article-minor -->

                <p>“Can you explain to me how the interaction between sources and outputs (the program’s core) works? I’m not sure to get it,” I said.
                “Sure, that’s easy, look.” Clément started drawing on the large windows, explaining out loud the inner interactions.
                When he was finished, I was panicking. “I don’t understand anymore.”</p>

                <p>What followed was a long discussion during which he tried to explain this stuff to me, and during which I felt more and more uncomfortable. What was an output really doing? Why couldn’t we unite them in a single file? If I can’t understand it, how can I expect my fellow journos to use it and make it their own?</p>

                <h2>Future: Testing and Improvements</h2>

                <p>The project is still in its early stages. I very much intend to improve it, and I am amazed by the reaction it received, both on Hacker News and on GitHub. People are offering help and expressing interest, and that’s really heart-warming.</p>

                <p>However, managing all these individual efforts will require time and a long-term-ish vision of Datastringer. A road-map needs to be drafted to remind everyone at every stage of the philosophy we should abide by, and to give as much visibility as we can to people interested in adopting the product.</p>

                <div class="figure figure-article-full">
                    <figure>
                        <img src="/img/fpo/article-full.jpg" alt="" />
                        <figcaption>
                            <p>Our printed ballot guide for voters to take to the polls—a product of the testing described in this article.</p>
                        </figcaption>
                    </figure>
                </div><!-- /end .figure.figure-article-full -->

                <p>Another comment we received during launch was striking: even though the project aims to be as simple to use as possible and even announces that “it’s fine” if you don’t know how to code, the installation process takes place on GitHub, and involve cloning a repo and running npm. That appeared common sense and second nature to me, but… it’s not. How many journos have git installed on their machine and use the command line? I would guess not that many.</p>

                <p>We lost track of our audience here, and that definitely will be in our roadmap as something we need to improve. A graphical interface or a service are possibilities we will be exploring.</p>

                <p>My main focus for the weeks to come will be to field-test the project and to make the software more accessible for the audience. I am very much looking forward to our 1.0 release, that I will consider ready when anyone can install Datastringer on his machine and get up and running without coding.</p>

                <ul class="links-article-social">
                    <li><a class="icon icon-comments" href="#disqus_thread">Comments</a></li>
                    <li><a class="icon icon-twitter" href="#">Share on Twitter</a></li>
                    <li><a class="icon icon-facebook" href="#">Share on Facebook</a></li>
                </ul><!-- /end .links-article-social -->
            </div><!-- /end .article.main -->

            <div class="article-links-relevant">
                <h2 class="hed-sub">People</h2>

                <ul>
                    <li><a href="#">Clément Geiger</a></li>
                    <li><a href="#">Basile Simon-MuchLongername</a></li>
                </ul>

                <h2 class="hed-sub">Organizations</h2>

                <ul>
                    <li><a href="#">NJ.com</a></li>
                    <li><a href="#">ProPublica</a></li>
                    <li><a href="#">The Chicago Tribune</a></li>
                    <li><a href="#">The Washington Post</a></li>
                    <li><a href="#">WNYC</a></li>
                </ul>
            </div><!-- /end .article-links-relevant -->

            <div class="article-matter-back">
                <div class="mod article-credits">
                    <h2 class="hed-label">Credits</h2>

                    <ul>
                        <li class="profile-person h-card">
                            <h3 class="profile-name">
                                <a href="#">
                                    <img class="profile-photo u-photo" src="/img/avatar.jpg" alt="" />
                                    <cite class="p-name">Basile Simon</cite>
                                </a>
                            </h3>

                            <p class="profile-bio">Hacker-journalist @BBC<em>News</em>Labs. Data-journalist @airwars_. #ddj, linked-data, infosec, drones with @TBIJ, stuff PGP: http://t.co/P1GYMem22Y</p>

                            <ul class="profile-links">
                                <li class="link-main"><a class="p-org icon-company" href="#">BBC News</a></li>
                                <li><a class="icon-twitter-alt" href="#">@basilesimon</a></li>
                                <li><a class="u-url icon-link" href="#">Visit website</a></li>
                            </ul>
                        </li><!-- /end .profile-person -->
                        <li class="profile-person h-card">
                            <h3 class="profile-name">
                                <a href="#">
                                    <img class="profile-photo u-photo" src="/img/avatar.jpg" alt="" />
                                    <cite class="p-name">Tiff Fehr</cite>
                                </a>
                            </h3>

                            <p class="profile-bio">The Inimitable Tiff ☔ Asst. editor, @nytinteractive/@nytimes. Seattle-raised. Owner of a Dragon &amp; a Behemoth (cats). Prolly following you via matryoshka Lists.</p>

                            <ul class="profile-links">
                                <li class="link-main"><a class="p-org icon-company" href="#">The New York Times</a></li>
                                <li><a class="icon-twitter-alt" href="#">@tiffehr</a></li>
                                <li><a class="u-url icon-link" href="#">Visit website</a></li>
                            </ul>
                        </li><!-- /end .profile-person -->
                    </ul>
                </div><!-- /end .article-credits -->

                <div class="mod article-comments" id="article-comments" data-title="Comments">
                    <div id="disqus_thread"></div>
                </div><!-- /end .article-comments -->

                <div class="mod article-related">
                    <h2 class="hed-label">Recently</h2>

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
                                <h3 class="hed-promo">What I Learned from Researching Newsroom On-boarding and Off-Boarding Processes</h3>
                            </a>
                        </li><!-- /end .src-promo -->
                    </ul><!-- /end .list-promos -->
                </div><!-- /end .article-related -->
            </div><!-- /end .article-matter-back -->

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