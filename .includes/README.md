Includes all the functionality used to create structure, functionality and styling

##Directories
- components -> each file contains a function that returns html structure used to concatenate to the end of a region string
- fonts -> any hosted fonts will go here
- headers -> template structures and functionality for different types of headers (each contained within a directory) all scss will be compiled from here, so removal of unused header types per project is advised.
- images -> content images should be placed here. Begins with only a placeholder svg.
- js -> custom or framework-specific javascript files
- layouts -> template structures that pull strings initialized by director.php into container regions. Layouts are set on a per-page basis.
- libraries -> external js and css libraries
- sass -> source files compiled into the stylesheets directory.
- stylesheets -> sass compiles into here

---

###/.includes/director.php
- Initializes strings used within the layout files and includes all component functions as well as dynamically set variables

###/.includes/foot.php
- Included in the layout PHP file.
- Mostly static global footer information

###/.includes/globals.php
- All functions used within other functions

###/.includes/head.php
- Included in the layout PHP file.
- Adds meta information using directory_loc page/section specific variables.

###/.includes/scripts.php
- Adds correct js files to each page based on page variables

###/.includes/styles.php
- Adds correct css files to each page based on page variables

###/.includes/variables.php 
- Variables that the user sets manually for use throughout the application.