# Install

Make sure to have Docker installed.

Make sure you have node.js.

Install grunt-cli run `npm install -g grunt-cli`, this might require sudo.

Run `npm install` to install dependencies.

Run `docker-compose up -d` to download and launch the MySQL and Wordpress Docker images.

Run `grunt` to start the file watcher and browser sync.

Follow the instructions in the Wordpress setup.

Install the PRO-version of [Advanced Custom Fields PRO](https://github.com/wp-premium/advanced-custom-fields-pro). License key can be found in 1Password and should be inserted under _Egna fält > Uppdateringar_ in the admin panel.

# Start dev env.

Run `docker-compose up -d` to launch the MySQL and Wordpress Docker images.

Run Grunt with `grunt` to start file watcher and browser sync.

# Close the dev env.

Shut down the docker images with `docker-compose down`


# ToDo
- [ ] Modules overview page
- [ ] Modules single page
- [ ] Speed optimization
- [ ] Include ACF into theme. [Read more here.](https://www.advancedcustomfields.com/resources/including-acf-within-a-plugin-or-theme/)
- [ ] Book a demo functions - connect to Trello (ask Jens how)
- [ ] Nav on small pages
- [ ] Snapp nav on scroll
- [ ] 404-page
