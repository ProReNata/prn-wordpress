# Install

Make sure to have Docker installed.

Make sure you have node.js.

Install grunt-cli run `npm install -g grunt-cli`, this might require sudo.

Run `npm install` to install dependencies.

Run `docker-compose up -d` to download and launch the MySQL and Wordpress Docker images.

Run `grunt` to start the file watcher and browser sync.

Follow the instructions in the Wordpress setup.

# Start dev env.

Run `docker-compose up -d` to launch the MySQL and Wordpress Docker images.

Run Grunt with `grunt` to start file watcher and browser sync.

# Close the dev env.

Shut down the docker images with `docker-compose down`


# ToDo
- [ ] Add modules as custom post type
- [ ] Modules overview page
- [ ] Modules single page
- [ ] Add ACF and hook everything into it
- [ ] Navigation
- [ ] Gutenberg
- [ ] Speed optimization
