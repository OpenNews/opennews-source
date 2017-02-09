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
                output: "source/base/static/base/_v2/dist/"
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
                    ui: {
                        port: 8081
                    },
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
                "source/base/static/base/_v2/img/**/*",
                "<%= _config.dir.output %>js/**/*"
            ]
        },

        copy: {
            images: {
                files: [
                    {
                        expand: true,
                        cwd: '<%= _config.dir.templates %>/img/',
                        src: [
                            '**'
                        ],
                        dest: 'source/base/static/base/_v2/img/'
                    },
                ],
            }
        },


        concat: {
            js_initial: {
                src: [
                    "<%= grunticon.svg.files[0].dest %>grunticon.loader.js",
                    "<%= _config.dir.templates %>js/config.js",
                    "<%= _config.dir.templates %>js/utils.js",
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
                    "<%= _config.dir.templates %>js/typekit.js",
                    "<%= _config.dir.templates %>js/lib/appendAround.js",
                    "<%= _config.dir.templates %>js/lib/ajaxsend.js",
                    "<%= _config.dir.templates %>js/lib/collapsible.js",
                    "<%= _config.dir.templates %>js/lib/collapsible.externaltoggle.js",
                    "<%= _config.dir.templates %>js/lib/repo.js",
                    "<%= _config.dir.templates %>js/navigation.js",
                    "<%= _config.dir.templates %>js/search.js",
                    "<%= _config.dir.templates %>js/comments-disqus.js",
                    "<%= _config.dir.templates %>js/count-disqus.js",
                    "<%= _config.dir.templates %>js/tweet-embed.js",
                    "<%= _config.dir.templates %>js/form-phrase.js",
                    "<%= _config.dir.templates %>js/listfilter-load.js",
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
                    url : 'http://local.source/tmpl/article.php?static=true'
                }
            },
            content: {
                options:  {
                    outputfile : '<%= _config.dir.output %>css/critical-content.css',
                    filename : '<%= _config.dir.output %>css/main.css',
                    url : 'http://local.source/tmpl/landing-code.php?static=true'
                }
            },
            home: {
                options:  {
                    outputfile : '<%= _config.dir.output %>css/critical-home.css',
                    filename : '<%= _config.dir.output %>css/main.css',
                    url : 'http://local.source/tmpl/home.php?static=true'
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
            crit_content: {
                src: [
                    "<%= criticalcss.content.options.outputfile %>"
                ],
                dest: "<%= criticalcss.content.options.outputfile %>"
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
                        "dots-corner-red-topright": [ ".page-main" ],
                        "dots-corner-red-topleft": [ ".tmpl-article .page-main" ],
                        "dots-footer": [ ".foot-source" ],
                        "dots-search": [ ".site-search" ]
                    },
                    enhanceSVG: true
                }
            }
        },

        postcss: {
            options: {
                map: is_dev,
                processors: [
                    require( "autoprefixer" )({
                        browsers: [
                            "Android 2.3",
                            "Chrome >= 20",
                            "Firefox >= 24",
                            "Explorer >= 10",
                            "iOS >= 6",
                            "Opera >= 12",
                            "Safari >= 6"
                        ]
                    })
                ]
            },
            dist: {
                src: "<%= Object.keys( sass.dist.files )[ 0 ] %>"
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
                tasks: [ "grunticon", "sass", "postcss", "cssmin", "concat", "uglify", "bsReload" ]
            },
            templates: {
                files: [
                    "Gruntfile.js",
                    "<%= _config.dir.templates %>**/*",
                ],
                tasks: [ "sass", "postcss", "cssmin", "concat", "uglify", "copy", "bsReload" ]
            },
        }
    } );

    grunt.registerTask( "build", [
        //"clean",
        "sass",
        "postcss",
        //"criticalcss",
        "cssmin",
        "concat",
        "uglify",
        "copy",
        "grunticon",
        "browserSync",
        "watch"
    ] );

    grunt.registerTask( "default", "build" );

};