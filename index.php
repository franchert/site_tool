<?php 
include_once($_SERVER['DOCUMENT_ROOT']."/.util/redirect_install.php");
/*set these to true to add a custom stylesheet named the $page variable.css/js */
$styles = false;
$scripts = true;
$layout = 'one-column';
$owl = true;
/*promo director initializes region variables and includes all the functions to create elements*/
include_once($docroot."/.includes/director.php");
/*define content here*/
$l_one_col .="<div class='wrapper'><div class='column'>";
$l_one_col .="<h2>Welcome to <span style='font-family:&#39;Comic Sans MS&#39;, cursive;color:blue;text-shadow:2px 2px 0px rgba(255,0,0,1),4px 4px 0px rgba(0,255,0,1);width:auto;float:none;display:inline-block;'>Build-O-Tron</span></h2>";
$l_one_col .="<p>Build-O-Tron has been developed to use as a framework for developing front-end websites specific to VisionPoint Marketing design components. It uses specific components based on typical higher education use cases to put together a prototype front-end for provided designs.</p>";
$l_one_col .="<div style='width:300px;padding-right:20px;'>".p_promo("button","image","light","Examples Section",null,null,null,"/0examples",'cube')."</div>";
$l_one_col .="<p>The link to the left is an example of a default implementation of a button promo, and takes you to the examples section, showing off other examples of components included in this system.</p>";
$l_one_col .="<p>Examples of the code used to create these components can be found in the index.php files in each directory.</p>";
$l_one_col .="<h3>Getting Started</h3>";
$l_one_col .="<div style='float:right;width:300px;padding-left:20px;'>".p_promo("button","image","light","the Utility Section",null,null,null,"/.util","dashboard")."</div>";
$l_one_col .="<p>The first step is to create a directory structure building our sitemap. This can be done manually, but it is strongly recommended to automatically generate directories defined in the json file within this directory. Once the file is updated to match the sitemap for this project, the generator can be found in the utility section to the right.</p>";
$l_one_col .="<p>Each page consists of a folder with an index.php file located inside. Each index.php file pulls in sitewide variables, sets page specific variables and builds a string to display within regions on a layout defined by these variables. Each file has three major sections:</p><ol style='list-style:decimal;margin-left:30px;'><li>Set Variables</li><li>Initialize and build strings</li><li>Print out strings within defined layout</li></ol>";
$l_one_col .="<p>Initializing and printing the strings are done through includes files, but the variables containing these strings need to be built manually to show the content for each specific page</p>";
$l_one_col .="<h3>Creating a new page</h3>";
$l_one_col .="<p>The first step to creating a new page is to create the directory where the page will live. Each directory name has the first character reserved for menu position and inclusion. This character is required, as it is stripped out when building the H1 and menu naming.</p>";
$l_one_col .="<p>The best way to create the content of the new page is to create a new index.php file within the new directory and copy and paste the code from an existing index.php file into the newly created file. After this is done, all code between the last two includes (layout and director) can be deleted. The first line of code containing a relative reference to the settings.php file for the project may also need updated, depending on the depth difference between the copied and new files.</p>";
$l_one_col .="<h3>Per-page variables</h3>";
$l_one_col .="<p>The biggest change influencing the creation of the page will be to the layout variable. Each layout has separate string variables per region. The naming convention of these can be found in the director.php file (see the region string variable initialization section).</p>";
$l_one_col .="<p>If the existing layouts do not fit the proposed design and a reusable pattern can be derived from the design, new layouts should be created. New layouts require the following:</p>";
$l_one_col .="<ol style='list-style:decimal;margin-left:30px;'>";
$l_one_col .="<li><h4>Layout-specific directory created within .includes/layouts</h4><p>This includes duplication of the files within the directory and any customization to set the functionality specific to the new layout.</p></li>";
$l_one_col .="<li><h4>Initialization of the region variables within .includes/director.php</h4><p>Each region string variable needs to be initialized. See other layouts for an example to copy.</p></li>";
$l_one_col .="<li><h4>Javascript & SCSS files within the layout directory</h4><p>The scss is automatically compiled with the rest into the screen.css file.</p></li>";
$l_one_col .="</ol>";
$l_one_col .="<h3>Filling out the Page Content</h3>";
$l_one_col .="<p>Each index.php file will have a section to 'define promos'. Within this section, component functions should be called to concatenate with the region variable to be printed in the DOM string. for example:</p>";
$l_one_col .="<code>\$l_one_col .= p_link();</code>";
$l_one_col .="<p>The region variable \$l_one_col belongs to the one-column layout. The p_link() function adds a dummy link with a lorem ipsum title to the end of the current region string:</p>";
$l_one_col .="<code>&lt;a href='#'&gt;lorem ipsum&lt;/a&gt;</code>";
$l_one_col .="<p>This p_link() function can further be customized with attributes. The first attribute changes the href, the second attribute changes the text, and the third attribute (if it's set) adds a class:";
$l_one_col .="<code>\$l_one_col .= p_link('http://www.example.com','New Title','button');</code>";
$l_one_col .="<p>Now we have a more specific example:</p>";
$l_one_col .="<code>&lt;a class='button' href='http://www.example.com'&gt;New Title&lt;/a&gt;</code>";
$l_one_col .="<h3>Where the magic happens</h3>";
$l_one_col .="<blockquote>But that's the same amount of typing, how is this saving us time?</blockquote>";
$l_one_col .="<p>In that particular instance (the link component), one single link won't save us any time at all. The real time savings comes from combining these smaller components into larger ones. Here's an example:</p>";
$l_one_col .="<code>\$l_one_col .= p_slider_owl('example');</code>";
$l_one_col .="<p>Our 'example' (added as the slider id) slider here uses multiple 'slide' components with a 'promo' component in each. This 'promo' is built up of a 'paragraph' component and a 'link' component (as well as some static content). This function gives us the following:</p>";
$l_one_col .= p_slider_owl('example');
$l_one_col .="<p>This also gives us a way to standardize the components we use in each design while having the flexibility in design to customize to our needs.</p>";
$l_one_col .="<h3>Publishing</h3>";
$l_one_col .="<p>Once everything is filled out, going to /.util/.publish will take the dynamic PHP you've created and print out some static HTML in a client-specific directory as well as an includes directory with css/js and any libraries/fonts required. I hope to eventually change all the URLs in this static version to exclude the number positioning.</p>";
$l_one_col .="<p>We're currently updating guidelines for VisionPoint Front-End development, but the draft can be found <a href='http://visionpointmarketing.github.io'>here</a></p>";
$l_one_col .="</div></div>";
/*end define content*/
include_once($docroot."/.includes/layouts/".$layout."/".$layout.".php");
?>