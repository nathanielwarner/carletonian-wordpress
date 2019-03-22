module.exports = function(grunt) {
    grunt.initConfig({
        uglify: {
            options: {
                mangle: false
            },
            my_target: {
                files: {
                    'wp-content/themes/mission-news-carletonian/js/build/production.min.js': ['wp-content/themes/mission-news-carletonian/js/build/production.js']
                }
            }
        }
    });

    grunt.loadNpmTasks('grunt-contrib-uglify');

    grunt.registerTask('default', ['uglify']);
};
