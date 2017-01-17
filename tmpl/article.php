<?php
$rootpath = $_SERVER['DOCUMENT_ROOT'];
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

<style><?php include( $rootpath . "/dist/css/main.css" ); ?></style>

<script><?php include($rootpath . "/dist/js/initial.js"); ?></script>

<script>document.createElement( "picture" );</script>
<script src="/dist/js/lib/picturefill.js" async></script>

<noscript><link href="/dist/svg/icons.fallback.css" rel="stylesheet" /></noscript>

</head>

<body class="tmpl-article">

<div class="page">

    <header>
        <div class="page-header">
            <h1 class="site-logo">
                <a href="/">
                    <img src="/svg/logo-source.svg" onerror="this.src='/dist/svg/png/logo-source.png'; return false" alt="Source" />
                </a>
            </h1>

            <div class="site-nav">
                <h2 class="a11y"><a href="#nav-primary">Explore this site</a></h2>

                <ul class="site-nav-links" id="nav-primary">
                    <li><a href="#" aria-describedby="current-page" class="is-active">Articles</a></li>
                    <li><a href="#">Guides</a></li>
                    <li><a href="#">Community</a></li>
                    <li><a href="#">Jobs</a></li>
                </ul><!-- /end .site-nav-links -->
            </div><!-- /end .site-nav -->

            <a class="search-toggle" href="#search">
                <span class="icon icon-search">Search this site</span>
            </a>
        </div><!-- /end .page-header -->
    </header>

    <hr />

    <main>
        <div class="page-main">
            <p>Project</p>

            <h1 class="article-title-lead">From the BBC News Labs: Datastringer</h1>

            <h2 class="article-subtitle-lead">Basile Simon walks through a project sparked at Hacks/Hackers London</h2>

            <p class="article-byline">By <a href="#">Basile Simon</a>, <a href="#">Tiff Fehr</a>, <a href="#">Erin Kissane</a>, and <a href="#">Alyson Hurt</a></p>

            <p class="article-date">Posted on: <time datetime="2015-09-15">20 September 2015</time></p>

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

                <h2>From Idea to Hacking</h2>

                <p>As always, I will try my best not to fall into PR, and instead, to offer my personal view on Datastringer’s creation process, as well as what we learnt by doing it. Do head to the repo and wiki for examples, snippets, and more code-related stuff.</p>

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
            </div><!-- /end .article.main -->

            <div class="article-credits">
                <h2>Credits</h2>

                <ul>
                    <li class="profile-person h-card">
                        <h3 class="profile-name">
                            <a href="#">
                                <img class="u-photo" src="/img/avatar.jpg" alt="" />
                                <cite class="p-name">Basile Simon</cite>
                            </a>
                        </h3>

                        <p class="profile-bio">Hacker-journalist @BBC<em>News</em>Labs. Data-journalist @airwars_. #ddj, linked-data, infosec, drones with @TBIJ, stuff PGP: http://t.co/P1GYMem22Y</p>

                        <ul>
                            <li><a class="p-org icon-company" href="#">BBC News</a></li>
                            <li><a class="icon-twitter-alt" href="#">@basilesimon</a></li>
                            <li><a class="u-url icon-link" href="#">Visit website</a></li>
                        </ul>
                    </li><!-- /end .profile-person -->
                    <li class="profile-person h-card">
                        <h3 class="profile-name">
                            <a href="#">
                                <img class="u-photo" src="/img/avatar.jpg" alt="" />
                                <cite class="p-name">Tiff Fehr</cite>
                            </a>
                        </h3>

                        <p class="profile-bio">The Inimitable Tiff ☔ Asst. editor, @nytinteractive/@nytimes. Seattle-raised. Owner of a Dragon &amp; a Behemoth (cats). Prolly following you via matryoshka Lists.</p>

                        <ul>
                            <li><a class="p-org icon-company" href="#">The New York Times</a></li>
                            <li><a class="icon-twitter-alt" href="#">@tiffehr</a></li>
                            <li><a class="u-url icon-link" href="#">Visit website</a></li>
                        </ul>
                    </li><!-- /end .profile-person -->
                </ul>
            </div><!-- /end .article-credits -->

            <div class="article-comments">
                <h2>Comments</h2>

                <!-- comments TK -->
            </div><!-- /end .article-comments -->

            <div class="article-related">
                <h2>Recently</h2>

                <ul class="list-promo">
                    <li class="src-promo">
                        <a href="#">
                            <img src="/img/fpo/article-teaser.jpg" alt="" /> How NPR Fact-Checks The Debate, Live
                        </a>
                    </li><!-- /end .src-promo -->
                    <li class="src-promo">
                        <a href="#">
                            <img src="/img/fpo/article-teaser.jpg" alt="" /> Event Round-Up, Oct 17
                        </a>
                    </li><!-- /end .src-promo -->
                    <li class="src-promo">
                        <a href="#">
                            <img src="/img/fpo/article-teaser.jpg" alt="" /> What I Learned from Researching Newsroom On-boarding and Off-Boarding Processes
                        </a>
                    </li><!-- /end .src-promo -->
                </ul><!-- /end .list-promo -->
            </div><!-- /end .article-related -->

            <div class="site-search" id="search">
                <div class="site-search-inner">
                    <div class="article-tease">
                        <p class="hed-search">From our Archives:</p>
                        <h2 class="hed-article-tease-search">
                            <a href="#">
                                <img class="thumb" src="/img/fpo/article-thumb.jpg" alt="" />
                                From the BBC News Labs: Datastringer
                            </a>
                        </h2>
                    </div>
                    <form class="form-search">
                        <label class="hed-search" for="text-search">Search SOURCE:</label>
                        <p class="fields-search">
                            <input class="text-search" id="text-search" type="search" value="" />
                            <input class="btn-search icon-search" type="submit" value="Search" />
                        </p><!-- /end .fields-search -->
                    </form><!-- /end .form-search -->
                </div>
            </div><!-- /end .site-search -->

        </div><!-- /end .page-main -->
    </main>

    <footer>
        <div class="page-footer">

            <div class="foot-source">
                <h2 class="foot-logo"><img src="/svg/logo-source.svg" onerror="this.src='/dist/svg/png/logo-source.png'; return false" alt="Source" /></h2>

                <div class="foot-content">
                    <p>Source is an OpenNews project designed to amplify the impact of journalism code and the community of developers, designers, journalists, and editors who make it.</p>

                    <p>Learn more <a href="#">about the project</a> or <a href="#">contribute your work</a>. <a href="#">Contact us</a>.</p>

                    <p><a href="https://creativecommons.org/licenses/by/3.0/">CC Attribution 3.0</a></p>
                </div><!-- /end .foot-content -->

                <h3>Connect</h3>
                <ul>
                    <li><a class="icon-rss" href="#">RSS</a></li>
                    <li><a class="icon-twitter" href="#">@source</a></li>
                    <li><a class="icon-email" href="#">Get our biweekly roundup email</a></li>
                </ul>
            </div><!-- /end .foot-source -->

            <div class="foot-opennews">
                <h2 class="foot-logo"><img src="/svg/logo-opennews.svg" onerror="this.src='/dist/svg/png/logo-opennews.png'; return false" alt="Source" /></h2>

                <p>A multi-year partnership between Mozilla and the Knight Foundation, Knight-Mozilla OpenNews is dedicated to creating an ecosystem to help strengthen and build community around journalism on the web. More at <a href="https://opennews.org">opennews.org</a>.</p>
            </div><!-- /end .foot-opennews -->

        </div><!-- /end .page-footer -->
    </footer>

</div><!-- /end .page -->

<!-- Anchors used by `aria-describedby` states -->
<div id="wayfinding" class="squelch">
  <span id="current-page">Current page</span>
</div>

</body>
</html>