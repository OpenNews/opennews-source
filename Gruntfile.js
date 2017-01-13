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
    var dev = ( env === "development" );

    // Project configuration.
    grunt.initConfig({
        pkg: grunt.file.readJSON( "package.json" ),

        config: {
            dir: {
                templates: "tmpl/",
                output: "tmpl/dist/"
            }
        },

        clean: {
            dist: [
                "<%= config.dir.output %>**/*"
            ]
        },

        concat: {
            js_initial: {
                src: [
                    "<%= grunticon.svg.files[0].dest %>grunticon.loader.js",
                    "<%= config.dir.templates %>js/config.js",
                    "<%= config.dir.templates %>js/utils.js",
                    // initial.js needs to be last.
                    "<%= config.dir.templates %>js/initial.js"
                ],
                dest: "<%= config.dir.output %>js/initial.js"
            },
            js_main: {
                src: [
                    "<%= config.dir.templates %>js/lib/shoestring.js",
                    "<%= config.dir.templates %>js/lib/$.js",
                    "<%= config.dir.templates %>js/lib/transition-support.js",
                    "<%= config.dir.templates %>js/lib/appendAround.js",
                    "<%= config.dir.templates %>js/lib/collapsible.js",
                    "<%= config.dir.templates %>js/lib/collapsible.externaltoggle.js",
                    "<%= config.dir.templates %>js/navigation.js",
                    // source-init.js needs to be last.
                    "<%= config.dir.templates %>js/source-init.js"
                ],
                dest: "<%= config.dir.output %>js/main.js"
            },
            js_picturefill: {
                src: [
                    "<%= config.dir.templates %>js/lib/picturefill.js"
                ],
                dest: "<%= config.dir.output %>js/lib/picturefill.js"
            }
        },

        cssmin: {
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
                    cwd: "<%= config.dir.templates %>svg/",
                    dest: "<%= config.dir.output %>svg/",
                    expand: true,
                    src: [
                        "*.png",
                        "*.svg"
                    ]
                }],
                options: {
                    compressPNG: true,
                    cssprefix: ".icon-",
                    customselectors: {},
                    enhanceSVG:    true
                }
            }
        },

        sass: {
            options: {
                outputStyle: "nested",
                sourceMap: dev
            },
            dist: {
                files: {
                    "<%= config.dir.output %>css/main.css": "<%= config.dir.templates %>scss/source.scss"
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
    });

    grunt.registerTask( "build", [
        "clean",
        "sass",
        "cssmin",
        "concat",
        "uglify",
        "grunticon"
    ] );

    grunt.registerTask( "default", "build" );

};