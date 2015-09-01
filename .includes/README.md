Includes all the pieces used to create the site.

##Directories
- components -> contains functions that print out html structure
- fonts -> font file directories
- images -> content images
- js -> javascript files
- layouts -> template structures that pull strings initialized by director.php into container elements
- libraries -> external js and css libraries
- sass -> source files
- snippets -> static html code pulled into other places
- stylesheets -> sass compiles into here

###/.includes/variables.php 
- Creates many page/section specific variables for use throughout the application.

###/.includes/footer.php
- Included in the layout PHP file.
- Mostly static global footer information

###/.includes/head.php
- Included in the layout PHP file.
- Adds meta information using directory_loc page/section specific variables.

###/.includes/nav_fxns.php
- Function to dynamically builds main navigation from the top level directories.
	- Dynamically pulls information from nav-contents.php located on the top level files
- Custom nav function dynamically builds navigation tree from a specified root directory.

###/.includes/director.php
- Initializes strings used within the layout files and includes all component functions 

###/.includes/scripts.php
- Adds correct js files to each page

###/.includes/styles.php
- Adds correct css files to each page

###/.includes/subnav.php
- Builds dynamic subnav based on folder structure