

## Install notes

We are putting all the APWA-specific code into the `../sites/[apwa site folder name]` folder.
This includes a `modules` directory and a `themes` directory. 

To install:
`cd [path to drupal root]/sites`
`mv [apwa site folder name] [apwa site folder name]-old`
`git clone --recursive git@github.com:commonmedia/hamilton-apwa.git [apwa site folder name]` *(Note: the '--recursive' flag is needed because the hamilton branch of islandora_webform is included as a git submodule)*
`mv [apwa site folder name]-old/settings.php [apwa site folder name]/`
`mv [apwa site folder name]-old/files [apwa site folder name]/`

`drush en apwa_iw -y`
`drush fr apwa_iw -y`

To update apwa modules and theme from repo:
`cd [path to drupal root]/sites/[apwa site folder name]`
`git pull`
`drush updb -y`
`drush fr apwa_iw -y`

To push code back to hamilton-apwa repository, commit changes locally, then push.


