module.exports = (grunt) ->

	grunt.loadNpmTasks 'grunt-contrib-watch'
	grunt.loadNpmTasks 'grunt-phpunit'

	# Package Data
	pkg = grunt.file.readJSON 'package.json'

	# Project configuration.
	grunt.initConfig

		pkg: pkg

		phpunit:
			classes:
				dir: 'test/'
			options:
				bin: 'vendor/bin/phpunit'
				colors: 'always'

		watch:
			php:
				files: [
					'lib/*.php'
					'lib/**/*.ts'
					'test/*.php'
				]
				tasks: [
					'phpunit'
				]
				options:
					interrupt: on

	grunt.registerTask 'default', [
		'phpunit'
	]
