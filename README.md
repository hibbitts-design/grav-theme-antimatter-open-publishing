# Antimatter Open Publishing Inherited Theme

![ Antimatter Open Publishing](screenshot.jpg)

Antimatter Open Publishing is a customized version of the default [Grav](http://getgrav.org) theme. In addition for built-in support for the Git Sync Plugin, a ['Chromeless' mode](http://demo.hibbittsdesign.org/grav-skeleton-open-publishing-chromeless-site/) (shown above) is available to better embed Grav content into other systems.

## Manual Installation

To install this theme, just download the zip version of this repository and unzip it under `/your/site/grav/user/themes`. Then, rename the folder to `antimatter-open-pub`.

You should now have all the theme files under

    /your/site/grav/user/themes/antimatter-open-pub

## Manual Update

Manually updating Antimatter Open Publishing is pretty simple. Here is what you will need to do to get this done:

* Delete the `your/site/user/themes/antimatter-open-pub` directory.
* Download the new version of the Antimatter Open Publishing theme.
* Unzip the zip file in `your/site/user/themes` and rename the resulting folder to `antimatter-open-pub`.
* Clear the Grav cache. The simplest way to do this is by going to the root Grav directory in terminal and typing `bin/grav clear-cache`.

> Note: Any changes you have made to any of the files listed under this directory will also be removed and replaced by the new set. Any files located elsewhere (for example a YAML settings file placed in `user/config/themes`) will remain intact.

## Standard Antimatter Features

* Lightweight and minimal for optimal performance
* Fully responsive with off-page mobile navigation
* SCSS based CSS source files for easy customization
* Built-in support for on-page navigation
* Multiple page template types
* Fontawesome icon support

## Additional Open Publishing Features

* 'Chromeless' page display (i.e. only display page content)
* Integrated support for Git Sync (i.e. view/edit pages in GitHub)
* Markdown sidebar
* Featured posts (i.e. sticky posts)
* Custom menu items
* Option to toggle page summaries (i.e. summaries are not displayed with page content)
* Creative Commons license

### Supported Page Templates

* Default view template
* Blog view template
* Error view template
* Blog item view template
* Modular view templates:
  * Features Modular view template
  * Showcase Modular view template
  * Text Modular view template
* SnipCart view template

### Menu Features

##### Dropdown Menu

You can enable **dropdown menu** support by enabling it in the `antimatter.yaml` configuration file. As per usual, copy this file to your `user/config/themes/` folder (create if required) and edit there.

```
dropdown:
  enabled: true
```

This will ensure that sub-pages show up as sub-menus in the navigation.

##### Menu Text & Icons

Each page shows up in the menu using the title by default, however you can set what displays in the menu directly by setting an explicit `menu:` option in the page header:

```
menu: My Menu
```

You can also provide an icon to show up in front of the menu item by providing an `icon:` option.  You need to use name of the FontAwesome icon without the `fa-` prefix.  Check out the full [list of current FontAwesome 4.2 icons](http://fortawesome.github.io/Font-Awesome/icons/):

```
icon: bar-chart-o
```

### Blog Features

##### Daring Fireball Link Pages

Antimatter Open Publishing supports the ability for a page to have a `link:` header option.  This will then in turn create a **link page** where the title of the page will actually be linked to the link provided and a prefexid double angle `>>` will link to the page itself.  Simply provide the link in the page header:

```
link: http://getgrav.org/blog
```

### Page Header Options
All pages support the following additional options:
```
hide_git_sync_repo_link: true  # hide Git Sync link for this page
git_sync_repo_link: https://github.com/hibbitts-design/grav-skeleton-course-hub/tree/master/pages/01.home   # to override the automatically calculated GitHub URL
```

# Setup

🚨Before setting up Git Sync, please make sure to remove the `ReadMe.md` file in your Grav site `user` folder (if one exists). This will prevent a possible sync issue when creating a default `ReadMe.md` file in your new Git repository.🚨

If you want to set Antimatter Open Publishing as the default theme, you can do so by following these steps:

* Navigate to `/your/site/grav/user/config`.
* Open the **system.yaml** file.
* Change the `theme:` setting to `theme: antimatter-open-pub`.
* Save your changes.
* Clear the Grav cache. The simplest way to do this is by going to the root Grav directory in Terminal and typing `bin/grav clear-cache`.

Once this is done, you should be able to see the new theme on the frontend. Keep in mind any customizations made to the previous theme will not be reflected as all of the theme and templating information is now being pulled from the **antimatter open pub** folder.
