module.exports = function(grunt) {

  // Project configuration.
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    browserSync: {
      dev: {
        bsFiles: {
          src : [
            'build/*.css',
            'build/*.php'
          ]
        },
        options: {
          watchTask: true,
          proxy: "localhost:8409",
          port: 8888,
          ui: {
            port: 8889
          }
        }
      }
    },
    clean: {
      php: ['build/*.php'],
      assets: ['build/assets/'],
      all: ['build/*'],
      dist: ['prn-wp-theme/']
    },
    compress: {
      main: {
        options: {
          archive: 'upload.zip'
        },
        files: [
          {src: ['prn-wp-theme/**'], dest: '/'}
        ]
      }
    },
    copy: {
      php: {
        files: [
          {expand: true, cwd: 'src/', src: ['**/*.php'], dest: 'build/'},
        ]
      },
      assets: {
        files: [
          {expand: true, cwd: 'src/assets/', src: ['**/*.*'], dest: 'build/assets/'},
        ]
      },
      dist: {
        files: [
          {expand: true, cwd: 'build/', src: ['**/*.*'], dest: 'prn-wp-theme/'},
        ]
      }
    },
    ftp_push: {
      staging: {
        options: {
          authKey: "webStaging",
      	  host: "prorenata.se",
      	  dest: "/staging3.prorenata.se/public_html/wp-content/themes/",
          port: 21,
          incrementalUpdates: true
        },
        files: [
          {
            expand: true,
            cwd: 'build',
            src: ['**/*'],
            dest: 'prn-wp-theme/' }
        ]
      }
    },
    less: {
      development: {
        options: {
          paths: ['src']
        },
        files: {
          'build/style.css': 'src/style.less'
        }
      },
      production: {
        options: {
          paths: ['src'],
          plugins: [
            new (require('less-plugin-autoprefix'))({browsers: ["last 2 versions"]}),
            new (require('less-plugin-clean-css'))({})
          ],
          /*
          modifyVars: {
            imgPath: '"http://mycdn.com/path/to/images"',
            bgColor: 'red'
          }
          */
        },
        files: {
          'build/style.css': 'src/style.less'
        }
      }
    },
    purgecss: {
      production: {
        options: {
          content: ['build/**/*.php', 'build/**/*.js']
        },
        files: {
          'build/style.css': ['build/style.css']
        }
      }
    },
    uglify: {
      production: {
        files: {
          'build/scripts.min.js': ['node_modules/slick-carousel/slick/slick.js', 'src/scripts.js']
        }
      }
    },
    watch: {
      js: {
        files: ['src/**/*.js'],
        tasks: ['uglify'],
        options: {
          spawn: false,
        },
      },
      less: {
        files: ['src/**/*.less'],
        tasks: ['less:development'],
        options: {
          spawn: false,
        },
      },
      php: {
        files: ['src/**/*.php'],
        tasks: ['clean:php', 'copy:php'],
        options: {
          spawn: false,
        },
      },
      assets: {
        files: ['src/assets/**/*.*'],
        tasks: ['clean:assets', 'copy:assets'],
        options: {
          spawn: false,
        },
      }
    },
  });

  // Load the plugin that provides the "uglify" task.
  grunt.loadNpmTasks('grunt-browser-sync');
  grunt.loadNpmTasks('grunt-contrib-clean');
  grunt.loadNpmTasks('grunt-contrib-compress');
  grunt.loadNpmTasks('grunt-contrib-copy');
  grunt.loadNpmTasks('grunt-contrib-less');
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-ftp-push');
  grunt.loadNpmTasks('grunt-purgecss');

  // Default task - makes a clean build, starts browerSync and watches.
  grunt.registerTask('default', ['clean:all', 'browserSync', 'copy:php','copy:assets', 'uglify', 'less:development', 'watch']);
  // Build task - builds a production version of the theme
  grunt.registerTask('build', ['clean:all', 'copy:php', 'copy:assets', 'uglify', 'less:production', 'purgecss:production']);
  // Zip task - makes a clean build, copy to temp folder, compress and remove temp folder.
  grunt.registerTask('zip', ['clean:all', 'copy:php', 'copy:assets', 'uglify', 'less:production', 'purgecss:production', 'copy:dist', 'compress' , 'clean:dist']);
  // Staging task - makes a clean build and uploads to staging server.
  grunt.registerTask('staging', ['clean:all', 'copy:php', 'copy:assets', 'uglify', 'less:production', 'purgecss:production', 'ftp_push:staging'])

};
