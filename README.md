# Site Creation Tool

##Framework

Dynamic front-end site prototype following some of the principles of [Atomic Design][http://bradfrost.com/blog/post/atomic-web-design/]. Product starts out-of-the-box as a clickable prototype of a blank higher education website. 

Each index file pulls in a specified 'layout' file, which represents the front-end code. The layout file then pulls in the header and footer. The header pulls in stylesheets and script files.

It also pulls in a 'director' file, which represents the dynamic and back-end components. The director file pulls in components functions, which are organized into groups within the components directory. It also pulls in global functions (which are functions that don't directly impact content but used many places), as well as a variables file, which contains variables filled out by the user, such as Front-end Framework, CMS and header types.

---

##TODO:

- Figure out a way to not need numbering on directories for ordering purposes within subnav/main nav
- Print Stylesheets

---

##Specifics:
- Functions are called within each index. Each function builds upon a string representing a specific region within the specified layout. 
- Main navigation is built from the numbered directories on the root. (skips directories beginning with a . or a 0)
- Dynamic navigation (main/mini/subnav) skips all "dot" directories.
- .sitemap directory creates a full nested sitemap.

###/settings.php
- Generic pages start with the settings.php file on the root. This file gives info on the base paths needed to access needed files.

###/install.php
- The first line of every index file pulls in a utility file called "redirect_install", which checks to see if the settings.php file exists on the root. Since we're not including settings.php in the repository, it copies the default settings to the root, effectively 'installing' the tool. This could be expanded in the future to include other tasks.