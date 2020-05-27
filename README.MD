# Intro

This is a boilerplate for creating Wordpress themes with Timber and Tailwind CSS

# Timber Setup

In order Timber to work, it has to be installed via Composer.

The project contains a `composer.json` file, so you only have to run `composer install` and the `php` part is good to go.

# TailwindCSS Setup

First you have to install the dependencies.

`npm install`

After that whenever you want to deploy the latest `style.css` file, you'd have to run build the project.

`npm run build`

You can tweak the config in the `postcss.config.js` and `tailwind.config.js`
