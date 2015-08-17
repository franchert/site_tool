# Site Creation Tool

##Framework

Dynamic front-end site prototype following the principles of [Atomic Design][http://bradfrost.com/blog/post/atomic-web-design/]. Product starts out-of-the-box as a clickable prototype of a typical higher education website. 

'''

##TODO:

- Remove client-specific logos/text
- Change color scheme to grayscale
- Add additional components to examples pages (dropdown, matrix, module, table, colorbox, event, news, factoid, profile, subsection, spotlight)
- Style sitemap page
- Clean complex functions (subnav, main nav, promo)
- Figure out a way to not need numbering on directories for ordering purposes within subnav/main nav

'''

##Specifics:
- Functions are called within each index. Each function builds upon a string representing a specific region within the specified layout. 
- Main navigation is built from the numbered folders on the root. (skips 0 examples folder)
- Dynamic navigation (main/mini/subnav) skips all "dot" directories.
- .sitemap directory creates a full nested sitemap.

###/settings.php
- Generic pages start with the settings.php file on the root. This file gives info on the base paths needed to access needed files.

###/.includes/directory_loc.php 
- Creates many page/section specific variables for use throughout the application.

###/.includes/promo-director.php
- Initializes strings used within the layout files and includes all component functions 

###/.includes/head.php
- Included in the layout PHP file.
- Adds meta information using directory_loc page/section specific variables.

###/.includes/footer.php
- Included in the layout PHP file.
- Mostly static global footer information

###/.includes/main_nav.php
- Dynamically builds main navigation from the top level directories.
- Dynamically pulls information from nav-contents.php located on the top level files

###/.includes/mini_nav.php
- Dynamically builds navigation tree from a specified root directory.

###/.includes/scripts.php
- Adds correct js files to each page

###/.includes/styles.php
- Adds correct css files to each page

###/.includes/subnav.php
- Builds dynamic subnav based on folder structure