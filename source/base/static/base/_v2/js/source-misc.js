/*

Miscellaneous scripts/inits for Source

*/
(function( $ ) {

    "use strict";

    $( document ).on( "enhance", function() {
        var $repo_link = $( ".link-code-repo" );

        var parseRepoLink = function( link ) {
            var sourceData = false,
                githubValues = link.split( "github.com/" )[ 1 ].split( "/" ),
                branchCheck = link.split( "tree/" )[ 1 ];

            if ( githubValues.length === 2 ) {
                var user = githubValues[ 0 ],
                    repo = githubValues[ 1 ],
                    branchName = ( branchCheck ) ? branchCheck : "master";

                sourceData = {
                    githubUser: user,
                    githubRepo: repo,
                    githubMasterBranch: branchName
                };

                return sourceData;
            }
        };

        if ( $repo_link.length ) {

            var data = parseRepoLink( $repo_link.attr( "href" ) );

            if ( data ) {
                var $container = $repo_link.parents( "div" ).first();

                $container.append( '<div class="browse-repo-external"><h2 class="hed-label">Browse Repo</h2></div>' )

                $( ".browse-repo-external" ).repo( {
                    user: data.githubUser,
                    name: data.githubRepo,
                    branch: data.githubMasterBranch
                } );
            }
        }
    } );

}( jQuery ));