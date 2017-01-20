/*global module:false,require:false*/
module.exports = function( grunt ) {

    require( "load-grunt-tasks" )( grunt );

    // Set any local environment config
    var localConfig;
    try {
        localConfig = require( "./settings.env" );
    } catch( e ) {
        localConfig = {};
    }

    // Take options passed to grunt or fallback to local config or to a default of production
    var env = grunt.config( "env", grunt.option( "env" ) || localConfig.NODE_ENV || "production" );
    var is_dev = ( env === "development" );

    // Project configuration.
    grunt.initConfig( {
        pkg: grunt.file.readJSON( "package.json" ),

        _config: {
            dir: {
                templates: "tmpl/",
                output: "tmpl/dist/"
            }
        },

        browserSync: {
            dev: {
                bsFiles: {
                    src : "tmpl/*.php"
                },
                options: {
                    ghostMode: false,
                    proxy: "http://local.source",
                    watchTask: true
                }
            }
        },

        bsReload: {
            css: {
                reload: "<%= cssmin.css_main.dest %>"
            },
            js: {
                reload: "<%= _config.dir.output %>js/**/*"
            },
            all: {
                reload: true
            }
        },

        clean: {
            dist: [
                "<%= _config.dir.output %>css/**/*",
                "<%= _config.dir.output %>js/**/*"
            ]
        },

        concat: {
            js_initial: {
                src: [
                    "<%= grunticon.svg.files[0].dest %>grunticon.loader.js",
                    "<%= _config.dir.templates %>js/config.js",
                    "<%= _config.dir.templates %>js/utils.js",
                    "<%= _config.dir.templates %>js/typekit.js",
                    // initial.js needs to be last.
                    "<%= _config.dir.templates %>js/initial.js"
                ],
                dest: "<%= _config.dir.output %>js/initial.js"
            },
            js_main: {
                src: [
                    // jquery.min.js needs to be first
                    "<%= _config.dir.templates %>js/lib/jquery.min.js",
                    // Miscellaneous modules/libraries can be loaded here, in preferred order of execution
                    "<%= _config.dir.templates %>js/lib/transition-support.js",
                    "<%= _config.dir.templates %>js/lib/appendAround.js",
                    "<%= _config.dir.templates %>js/lib/ajaxsend.js",
                    "<%= _config.dir.templates %>js/lib/repo.js",
                    "<%= _config.dir.templates %>js/navigation.js",
                    "<%= _config.dir.templates %>js/search.js",
                    "<%= _config.dir.templates %>js/comments-disqus.js",
                    // source-misc.js is a scratch file for any miscellaneous JS that needs to be run on document.enhance
                    "<%= _config.dir.templates %>js/source-misc.js",
                    // source-init.js needs to be last.
                    "<%= _config.dir.templates %>js/source-init.js"
                ],
                dest: "<%= _config.dir.output %>js/main.js"
            },
            js_picturefill: {
                src: [
                    "<%= _config.dir.templates %>js/lib/picturefill.js"
                ],
                dest: "<%= _config.dir.output %>js/lib/picturefill.js"
            }
        },

        criticalcss: {
            article: {
                options:  {
                    outputfile : '<%= _config.dir.output %>css/critical-article.css',
                    filename : '<%= _config.dir.output %>css/main.css',
                    url : 'http://local.source/article.php?static=true'
                }
            },
            landing: {
                options:  {
                    outputfile : '<%= _config.dir.output %>css/critical-landing.css',
                    filename : '<%= _config.dir.output %>css/main.css',
                    url : 'http://local.source/landing-code.php?static=true'
                }
            }
        },

        cssmin: {
            crit_article: {
                src: [
                    "<%= criticalcss.article.options.outputfile %>"
                ],
                dest: "<%= criticalcss.article.options.outputfile %>"
            },
            crit_landing: {
                src: [
                    "<%= criticalcss.landing.options.outputfile %>"
                ],
                dest: "<%= criticalcss.landing.options.outputfile %>"
            },
            css_main: {
                src: [
                    "<%= Object.keys( sass.dist.files )[ 0 ] %>"
                ],
                dest: "<%= Object.keys( sass.dist.files )[ 0 ] %>"
            }
        },

        grunticon: {
            svg: {
                files: [{
                    cwd: "<%= _config.dir.templates %>svg/",
                    dest: "<%= _config.dir.output %>svg/",
                    expand: true,
                    src: [
                        "*.png",
                        "*.svg"
                    ]
                }],
                options: {
                    compressPNG: true,
                    cssprefix: ".icon-",
                    customselectors: {
                        "dots-footer": [ ".foot-source" ],
                        "dots-search": [ ".site-search" ]
                    },
                    enhanceSVG: true
                }
            }
        },

        sass: {
            options: {
                outputStyle: "nested",
                sourceMap: is_dev
            },
            dist: {
                files: {
                    "<%= _config.dir.output %>css/main.css": "<%= _config.dir.templates %>scss/source.scss"
                }
            }
        },

        uglify: {
            js_initial: {
                src: [
                    '<%= concat.js_initial.dest %>'
                ],
                dest: '<%= concat.js_initial.dest %>'
            },
            js_main: {
                src: [
                    '<%= concat.js_main.dest %>'
                ],
                dest: '<%= concat.js_main.dest %>'
            }
        },

        watch: {
            options: {
                // Required for browsersync
                spawn: false
            },
            svg: {
                files: [
                    "<%= _config.dir.templates %>svg/**/*"
                ],
                tasks: [ "grunticon", "sass", "cssmin", "concat", "uglify", "bsReload" ]
            },
            templates: {
                files: [
                    "Gruntfile.js",
                    "<%= _config.dir.templates %>**/*",
                ],
                tasks: [ "sass", "cssmin", "concat", "uglify", "bsReload" ]
            },
        }
    } );

    grunt.registerTask( "build", [
        "clean",
        "sass",
        "criticalcss",
        "cssmin",
        "concat",
        "uglify",
        "grunticon",
        "browserSync",
        "watch"
    ] );

    grunt.registerTask( "default", "build" );

};