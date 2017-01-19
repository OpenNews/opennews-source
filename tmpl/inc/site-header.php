<?php
$is_active = ' aria-describedby="current-page" class="is-active"';
?>
    <header>
        <div class="site-header">

            <div class="header-main">
                <h1 class="site-logo">
                    <a href="/">
                        <img src="/svg/logo-source.svg" onerror="this.src='/dist/svg/png/logo-source.png'; return false" alt="Source" />
                    </a>
                </h1>

                <a class="header-toggle nav-toggle" href="#nav-primary">
                    <span class="icon icon-menu">Jump to site navigation</span>
                </a>

                <a class="header-toggle search-toggle" href="#search">
                    <span class="icon icon-search">Search this site</span>
                </a>
            </div><!-- /end .header-main -->

            <div class="site-nav" id="nav-primary">
                <ul class="site-nav-links">
                    <li><a href="#"<?php if ( $current_page == "articles" ) { echo $is_active; }?>>Articles</a></li>
                    <li><a href="#"<?php if ( $current_page == "guides" ) { echo $is_active; }?>>Guides</a></li>
                    <li><a href="#"<?php if ( $current_page == "community" ) { echo $is_active; }?>>Community</a></li>
                    <li><a href="#"<?php if ( $current_page == "jobs" ) { echo $is_active; }?>>Jobs</a></li>
                </ul><!-- /end .site-nav-links -->
            </div><!-- /end .site-nav -->

        </div><!-- /end .site-header -->
    </header>

    <hr />
