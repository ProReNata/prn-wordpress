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

# Deploy to staging

To push to staging you have to create a `.ftpauth` file in the project root folder with the FTP credentials to the staging server.

```(json)
{
    "webStaging":{
        "username":"username",
        "password":"password"
    }
}
```

Then just run `grunt staging` to build and upload to staging.

The production website is updated by deploying the staging website via the Siteground control panel.

# Other Grunt tasks

`grunt build` builds a production version into the build folder

`grunt zip` builds and compresses a zip that can be uploaded via the Wordpress admin interface.

# WP Plugins we use
- Advanced Custom Fields PRO
- Contact Form 7
- Smush (Image optimization)
- Safe SVG


# ToDo
- [ ] Include ACF into theme. [Read more here.](https://www.advancedcustomfields.com/resources/including-acf-within-a-plugin-or-theme/)
- [ ] Add color schemes for duo-tones. Duo-primary, duo-secondary, duo-grey, mix, warning, danger, info, success.
- [ ] Add CE-logo
