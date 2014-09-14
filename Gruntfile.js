module.exports = function(grunt) {

    grunt.initConfig ({
        pkg: grunt.file.readJSON('package.json'),

        /*============================================================
         Sass
         ============================================================*/
        sass: {
            compile: {
                options: {
                    style: 'compressed'
                },

                files: {
                    'cktoken/app/webroot/release/css/base.min.css': 'sass/base.scss'
                }
            }
        },

        /*============================================================
         Scss lint
         ============================================================*/
        scsslint: {
            allFiles: ['sass/**/*.scss'],
            options: {
                 exclude: ['sass/inuit/**/*.scss']
            }
           
        },

        /*============================================================
         JS hint
         ============================================================*/
        jshint: {
            all: ['Gruntfile.js', 'cktoken/app/webroot/js/**/*.js'],
            options: {
                ignores: ['cktoken/app/webroot/js/lib/**/*.js']
            }
        },

        /*============================================================
         Code Duplication
         ============================================================*/
        jscpd: {
            js: {
                path: 'cktoken/app/webroot/js/**/*',
                exclude: ['cktoken/app/webroot/js/lib/**/*.js']
            },
            sass: {
                path: 'sass/**/*',
                exclude: ['sass/inuit/**/*.js']
            }
        },

        /*============================================================
         Code Complexity
         ============================================================*/
        complexity: {
            generic: {
                src: ['cktoken/app/webroot/js/modules/**/*.js'],
                options: {
                    breakOnErrors: true,
                    errorsOnly: false, // show only maintainability errors
                    cyclomatic: [6], // or optionally a single value, like 3
                    halstead: [20], // or optionally a single value, like
                    maintainability: 100,
                    hideComplexFunctions: false, // only display maintainability
                    broadcast: true // broadcast data over event-bus
                }
            }
        },

        /*============================================================
         JS concatenation
         ============================================================*/
        concat: {
            modules: {
                src: 'cktoken/app/webroot/js/modules/**/*.js',
                dest: 'cktoken/app/webroot/release/js/base.js'
            },

            libraries: {
                src: 'cktoken/app/webroot/js/lib/**/*.js',
                dest: 'cktoken/app/webroot/release/js/lib.js'
            }
        },

        /*============================================================
         Uglify
         ============================================================*/
        uglify: {
            dest: {
                files: {
                    'cktoken/app/webroot/release/js/base.min.js': ['cktoken/app/webroot/release/js/base.js'],
                    'cktoken/app/webroot/release/js/lib.min.js': ['cktoken/app/webroot/release/js/lib.js']
                }
            }
        },

        /*============================================================
         Watch
         ============================================================*/
        watch: {
            sass: {
                files: ['sass/**/*'],
                tasks: ['sass', 'scsslint']
            },

            js: {
                files: ['cktoken/app/webroot/js/**/*.js'],
                tasks: ['jshint', 'concat', 'uglify']
            }
        },

        /*============================================================
         Githooks
         ============================================================*/
        githooks: {
            all: {
                'pre-commit': 'jshint'
            }
        }

    });

    // Loads the required plugins.
    grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-scss-lint');
    grunt.loadNpmTasks('grunt-contrib-jshint');
    grunt.loadNpmTasks('grunt-jscpd');
    grunt.loadNpmTasks('grunt-complexity');
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-githooks');

    // Default tasks.
    grunt.registerTask('default', ['sass', 'concat', 'uglify', 'watch']);

    // Executes test tasks.
    grunt.registerTask('test', ['scsslint', 'jshint', 'jscpd', 'complexity']);
    grunt.registerTask('testjs', ['jshint', 'jscpd:js', 'complexity']);
    grunt.registerTask('testsass', ['scsslint', 'jscpd:sass']);
};