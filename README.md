# carletonian-wordpress

The Carletonian's Wordpress

### Setting up
It's Wordpress, so you'll need a LAMP stack server set up and have Apache pointing to this directory.

After you have that set up, you'll need to do the following:

1. Copy `.env.example` to `.env` and change values as needed
2. Install composer dependencies with `composer install`
3. Install node version `10.15.3` with `nvm`
4. Install grunt-cli globally with `npm install -g grunt-cli`
5. Run `npm install` to install node dependencies
6. Migrate mysql database from snapshot if necessary (If not, you'll need to run `wp db create` and Wordpress will start off with no content)

You'll then be able to navigate in your browser to `localhost` or wherever the server is running.

### General guidelines

Every time you modify a JS file, you'll need to run `grunt` to create the minified version.
The specific files that will be compiled are specified in the Gruntfile.

### Wait, this isn't all the documentation, is it??
Of course not. The architecture of [thecarletonian.com](thecarletonian.com) is explained in depth in `docs.md`.
