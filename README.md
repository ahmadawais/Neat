Neat
===

Neat is a starter theme built by Ahmad Awais [http://AhmadAwais.com/about/]


Branch: TitanFramework
------

This branch uses Titan Framework [http://www.titanframework.net/] basic configurations.


What's New
---
- `functions.php` includes `admin-init.php` at  the top [Line 18-27]
- `admin-init.php` in `assets/admin/` folder is responsible for all admin relevant code
- `admin-init.php` includes four files which are defined below
- `titan-framework-checker.php` is included in `admin-init.php` present insdie `/assets/admin/titanframework/`; It adds Titan Framework as a plugin

Create and Set Options
---
- `adminpanel-options-init.php` is included in `admin-init.php` present insdie `/assets/admin/titanframework/`; It creates Admin panel options
- `metabox-options-init.php` is included in `admin-init.php` present insdie `/assets/admin/titanframework/`; It creates metabox options
- `customizer-options-init.php` is included in `admin-init.php` present insdie `/assets/admin/titanframework/`; It creates customizer options

Get option values
---
- Go to Add New Page and add a page with Template called `Titan Framework` which is explained below
- `aa_titanframework.php` is a custom page template where we get values and output them for `admin panels` and `metboxes`
- `header.php` is where we have added `customizer` relevant options in the `style` tag



Neat Theme Stuff
================

Features
--------

- Saas
- Gulp
- Bower
- Lean PHP files with next to no syntax
- Custom architecture design
- Theme zip file build with Gulp

Getting and Installing the Theme
--------


1. Grab a copy of this theme or Clone this theme, E.g. go to the themes folder then run ` git clone https://github.com/ahmadawais/neat.git`

2. You need Node.js & Sass installed if you haven't installed it, go ahead and install it first. Once you have Node, Sass and the theme installed, the next step is simple enough.

3. Install Dependencies — Open a command prompt/terminal and navigate to your theme's root directory and run this command: `npm install` - This installs all the necessary Gulp plugins to help with task automation such as Sass compiling and browser-sync! You'll need to run this step on each of your projects, going forward.

4. Set your project configuration in gulpfile.js!! Be sure to go into gulpfile.js and setup the project configuration variables. This is important for using Browser-Sync with your project. Make sure in gulpfile.js that you set the project variable to the appropriate name for your project URL. Default is "yourlocal.dev"


4. Install Bower - In the command prompt/terminal run this command: `npm install -g bower`. This installs Bower (the -g flag installs globally, not just in the current directory, super friends). Your only need to do this step once.


5. Run `gulp` command in the root folder of your theme and it will start generating CSS from Sass and everything else

6. Run `gulp images` to optimize images and only place the images in `assets/img/raw/` folder, they'll moved to `assets/img/` once optimized

7. To build an installable zip file of your theme, use command `gulp build` and your project.zip file will be created as well as a `buildTheme` folder, where you can see what was zipped.

License
--------
Neat was released under GPL v2.