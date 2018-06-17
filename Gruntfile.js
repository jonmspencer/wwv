// Change paths based on project.
module.exports = function(grunt) {

  // Project configuration.
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),

    // UGLIFY
    uglify: {
      options: {
        banner: '/*! <%= pkg.name %> <%= grunt.template.today("yyyy-mm-dd") %> */\n'
      },
      build: {
        src: [
          'wp-content/themes/bad/assets/scripts/src/vendor/**/*.js',
          'wp-content/themes/bad/assets/scripts/src/*.js',
        ], // input array

        dest: 'wp-content/themes/bad/assets/scripts/build.min.js' //'build/<%= pkg.name %>.min.js'
      }
    },
    // SASS
    sass: {
      dist: {
        options: {
          style: 'compressed'
        },
        files: {
          'wp-content/themes/bad/style.css': 'wp-content/themes/bad/style.scss'
        }
      }
    },
    // WATCH
    watch: {
      options: {
        livereload: true,
      },
      js: {
        files: ['wp-content/themes/bad/assets/scripts/src/**/*.js'],
        tasks: ['uglify'],
      },
      sass: {
        options: {
          livereload: false
        },
        files: ['wp-content/themes/bad/**/*.scss'],
        tasks: ['sass'],
      },
      css: {
        files: ['wp-content/themes/bad/style.css'],
        tasks: []
      }
    }
  });

  // Load the plugins.
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-sass');
  grunt.loadNpmTasks('grunt-contrib-watch');

  // Default task(s).
  grunt.registerTask('default', ['sass','uglify','watch']);

};
