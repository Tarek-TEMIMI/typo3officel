# TYPO3 Demo Project

This is the GIT repository for the official demo project of TYPO3. It contains
all source files to build the website for https://demo.typo3.org.

## About the Demo Project

The demo project is a fictitious informational website about apples. It acts as
a example website for people who never worked with TYPO3, and want to play around
with the TYPO3 Administration Interface (= TYPO3 Backend).

A special demo login allows creating custom one-time editors without any password.

As soon as one backend user signs in to the TYPO3 Backend, a counter is shown both on the website
and on the TYPO3 Backend that within 30 minutes, the TYPO3 installation will be re-set
to the current state.

## Local Development

Requirements:

* DDEV, see [Get Started with DDEV](https://www.ddev.com/get-started/)
* Composer >= 2.2
* PHP >= 7.4.1 <= 8.0.99

To set up the TYPO3 Demo Project for local development

1. Download code `git clone ssh://git@gitlab.typo3.org:2222/services/demo.typo3.org/site.git`
2. Install composer packages `ddev composer install`
3. Build the frontend `ddev composer frontend-builds`
4. Get database and fileadmin using `ddev pull dump` or download and import it manually:
   1. Download database/fileadmin: Go to the [Generic Packages](https://gitlab.typo3.org/services/demo.typo3.org/site/-/packages) section in Gitlab, select the "site"-Package and download the latest "demo-data.zip"
   2. Extract the downloaded file
   3. Copy the `fileadmin` folder to `<document root>web/fileadmin`
   4. Import database: `ddev import-db --src=/path/to/database/dump.sql.gz`
6. Update schema: `ddev typo3cms database:updateschema`
7. Create a backend user `ddev typo3cms backend:createadmin username password`
8. Start the project running `ddev start`

## License

All code is licensed under GPL2+. All content and graphical creations are licensed under
the Creative Commons license.

## Credits

The project was originally built by b13, and is maintained by the TYPO3 Demo Team.
