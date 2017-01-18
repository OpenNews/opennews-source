<?php
$is_active = ' aria-describedby="current-page" class="is-active"';
?>
    <header>
        <div class="site-header">
            <h1 class="site-logo">
                <a href="/">
                    <img src="/svg/logo-source.svg" onerror="this.src='/dist/svg/png/logo-source.png'; return false" alt="Source" />
                </a>
            </h1>

            <div class="site-nav">
                <h2 class="a11y"><a href="#nav-primary">Explore this site</a></h2>

                <ul class="site-nav-links" id="nav-primary">
                    <li><a href="#"<?php if ( $current_page == "articles" ) { echo $is_active; }?>>Articles</a></li>
                    <li><a href="#"<?php if ( $current_page == "guides" ) { echo $is_active; }?>>Guides</a></li>
                    <li><a href="#"<?php if ( $current_page == "community" ) { echo $is_active; }?>>Community</a></li>
                    <li><a href="#"<?php if ( $current_page == "jobs" ) { echo $is_active; }?>>Jobs</a></li>
                </ul><!-- /end .site-nav-links -->
            </div><!-- /end .site-nav -->

            <a class="search-toggle" href="#search">
                <span class="icon icon-search">Search this site</span>
            </a>
        </div><!-- /end .site-header -->
    </header>

    <hr />
