module.exports = function(grunt) {
    grunt.initConfig({
        uglify: {
            my_target: {
                files: {
                    'wp-content/themes/mission-news-carletonian/js/build/production.min.js': ['wp-content/themes/mission-news-carletonian/js/build/production.js']
                }
            }
        }
    });

    grunt.loadNpmTasks('grunt-contrib-uglify');
};
