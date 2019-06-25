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
      all: ['build/*']
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
    watch: {
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
  grunt.loadNpmTasks('grunt-contrib-copy');
  grunt.loadNpmTasks('grunt-contrib-less');
  grunt.loadNpmTasks('grunt-contrib-watch');

  // Default task(s).
  grunt.registerTask('default', ['clean:all', 'browserSync', 'copy', 'less:development', 'watch']);
  grunt.registerTask('production', ['clean:all', 'copy', 'less:production']);
  grunt.registerTask('clearBuild', ['clean:all']);

};
