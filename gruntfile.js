module.exports = function (grunt) {
  grunt.initConfig({
    cwebp: {
      static: {
        files: [{
          expand: true,
          cwd: 'src/', 
          src: ['images/*.{png,jpg,gif}'],
          dest: 'images/'
        }]
      },
      dynamic: {
        options: {
          q: 50
        },
        files: [{
          expand: true,
          cwd: 'src/', 
          src: ['images/*.{png,jpg,gif}'],
          dest: 'images/'
        }]
      }
    }
  });

  grunt.loadNpmTasks('grunt-cwebp');

  // register task
  grunt.registerTask('default', 'cwebp');

};