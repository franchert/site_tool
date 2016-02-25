```
version 0.6
date: 
link: 
```
notes:
-Global variables now stored in an array rather than individually
-Publishing more robust, now generates zipped folder with all pertinant info.
-Generation more robust, now takes first json feed in the folder to build sitemap out of, rather than specifically named one.
-Usage now searches for ALL user defined functions and filters out the non p_ prefixed functions. 
-Additional components from most recent projects
-Renaming of files for consistency
-Accessibility-focused additions

```
version 0.5
date: 1-27-2016
link: https://github.com/franchert/site_tool/tree/2d19f2040b63705c86e2fff24dd864c6e3ee5499
```
notes:
-Removed all client-specific fonts and replaced with google fonts
-Added and updated several utilities to automatically generate folder structure, beginnings of publishing to a static file, server variables printouts, installation
-updated styling and variable condensation within components
-updated documentation

```
version 0.4
date: 1-20-2016
link: https://github.com/franchert/site_tool/tree/0e5b66f075acfbed8dd8ff1682da5198bfc0e2d3
```
notes:
-Removed all site-specific pages. Added exec.php to generate a sitemap based on a sitemap.json file and index.default.php.
-Added this changelog file.
-added $file_base variable to fix a few issues with apache default setup
-Updated rendered html with newlines and tabs
-Added grid component to experiments, calendar component to experiments
-Added default htaccess and settings files and gitignored the actual files
-Updated formatting of functions for consistency
-Docuementation updates
-Added a CMS variable to create menus with CMS limitations in mind
-Added a getting started guide on the homepage

```
version: 0.3
date: 10-9-2015
link: https://github.com/franchert/site_tool/tree/35f29c5f904aa75120872c81906b3bc4ebd60a81
```
notes:
-Standardized a few mixins.
-Gave subnav an option to toggle or remain static.
-Front-end framework option builds in bootstrap and moves original to "custom" front-end.
-Styles separated into separate files for bootstrap and custom.

```
version: 0.2
date: 9-3-2015
link: https://github.com/franchert/site_tool/tree/7a8b9d0dc7d16b9fd846d301936ae6a7b474c2b3
```
notes:
-updated and renamed promo types, some back-end process files
-Header abstracted out and interchangable headers included.
-Example pages included.
-Client-specific elements removed.
-Navigation cleaned up and made more flexible.
-Folder naming, added a 0 option that removes it from main navigation but still allows for subnav.
-Updates to documentation.
```
version: 0.1
date: 8-17-2015
```
link: https://github.com/franchert/site_tool/tree/3b0d7d3c10320de49f87b805da6b7f5912161094
notes: 
-initial development of the PHP tool after usage on GRU/Western/UNH
