# carletonian-wordpress

The Carletonian's Wordpress

### Setting up
It's Wordpress, so you'll need a LAMP stack server set up and have Apache pointing to this directory.

After you have that set up, you'll need to do the following:

1. Copy `.env.example` to `.env` and change values as needed
2. Install composer dependencies with `composer install`
3. Migrate mysql database from snapshot if necessary (If not, you'll need to run `wp db create` and Wordpress will start off with no content)

You'll then be able to navigate in your browser to `localhost` or wherever the server is running.

### Wait, this isn't all the documentation, is it??
Of course not. The architecture of [thecarletonian.com](https://thecarletonian.com) is explained in depth in `docs.md`.
