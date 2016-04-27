<?php 
include_once($_SERVER['DOCUMENT_ROOT']."/.util/redirect_install.php");
/*set these to true to add a custom stylesheet named the $page variable.css/js */
$styles = false;
$scripts = true;
$template = 'scrolljacking';
	$nav = true;
	$folding = true;
/*promo director initializes region variables and includes all the functions to create elements*/
include_once($docroot."/.includes/director.php");
	$s0_name = "custom_section_0_name";
	$s1_name = "custom_section_1_name";
	$s2_name = "custom_section_2_name";
	$s3_name = "custom_section_3_name";
/*define content here*/
//$sect1 .="<div class='wrapper'><div class='column'>";
$sect0 .="<h2>Welcome to <span style='font-family:&#39;Comic Sans MS&#39;, cursive;color:blue;text-shadow:2px 2px 0px rgba(255,0,0,1),4px 4px 0px rgba(0,255,0,1);width:auto;float:none;display:inline-block;'>Build-O-Tron</span></h2>";
$sect0 .="<p>Build-O-Tron has been developed to use as a framework for developing front-end websites specific to VisionPoint Marketing design components. It uses specific components based on typical higher education use cases to put together a prototype front-end for provided designs.</p>";
$sect0 .="<div style='width:300px;padding-right:20px;'>".p_promo("button","image","light","Examples Section",null,null,null,"/0examples",'cube')."</div>";
$sect0 .="<p>The link to the left is an example of a default implementation of a button promo, and takes you to the examples section, showing off other examples of components included in this system.</p>";
$sect0 .="<p>Examples of the code used to create these components can be found in the index.php files in each directory.</p>";
$sect0 .="<h3>Getting Started</h3>";
$sect0 .="<div style='float:right;width:300px;padding-left:20px;'>".p_promo("button","image","light","the Utility Section",null,null,null,"/.util","dashboard")."</div>";
$sect0 .="<p>The first step is to creat a sitemap. The utility section to the right contains a link to a drag-and-drop sitemap builder. Once the sitemap is created and saved through this, a directory structure can be created through the generate button on the sitemap page. This builds the necessary files to display each page within the site.</p>";
$sect0 .="<p>Each page consists of a folder with an index.php file located inside. Each index.php file pulls in sitewide variables, sets page specific variables and builds a string to display within regions on a template defined by these variables. Each file has three major sections:</p><ol style='list-style:decimal;margin-left:30px;'><li>Set Variables</li><li>Initialize and build strings</li><li>Print out strings within defined template</li></ol>";
$sect0 .="<p>Initializing and printing the strings are done through includes files, but the variables containing these strings need to be built manually to show the content for each specific page</p>";

$sect1 .="<h2>Creating a new page</h2>";
$sect1 .="<p>The first step to creating a new page is to create the directory where the page will live. Each directory name has the first character reserved for menu position and inclusion. This character is required, as it is stripped out when building the H1 and menu naming.</p>";
$sect1 .="<p>The best way to create the content of the new page is to create a new index.php file within the new directory and copy and paste the code from an existing index.php file into the newly created file. After this is done, all code between the last two includes (template and director) can be deleted. The first line of code containing a relative reference to the settings.php file for the project may also need updated, depending on the depth difference between the copied and new files.</p>";
$sect1 .="<h3>Per-page variables</h3>";
$sect1 .="<p>The biggest change influencing the creation of the page will be to the template variable. Each template has separate string variables per region. The naming convention of these can be found in the director.php file (see the region string variable initialization section).</p>";
$sect1 .="<p>If the existing templates do not fit the proposed design and a reusable pattern can be derived from the design, new templates should be created. New templates require the following:</p>";
$sect1 .="<ol style='list-style:decimal;margin-left:30px;'>";
$sect1 .="<li><h4>template-specific directory created within .includes/templates</h4><p>This includes duplication of the files within the directory and any customization to set the functionality specific to the new template.</p></li>";
$sect1 .="<li><h4>Initialization of the region variables within .includes/director.php</h4><p>Each region string variable needs to be initialized. See other templates for an example to copy.</p></li>";
$sect1 .="<li><h4>Javascript & SCSS files within the template directory</h4><p>The scss is automatically compiled with the rest into the screen.css file.</p></li>";
$sect1 .="</ol>";

$sect2 .="<h2>Filling out the Page Content</h2>";
$sect2 .="<p>Each index.php file will have a section to 'define promos'. Within this section, component functions should be called to concatenate with the region variable to be printed in the DOM string. for example:</p>";
$sect2 .="<code>\$l_one_col .= p_link();</code>";
$sect2 .="<p>The region variable \$l_one_col belongs to the one-column template. The p_link() function adds a dummy link with a lorem ipsum title to the end of the current region string:</p>";
$sect2 .="<code>&lt;a href='#'&gt;lorem ipsum&lt;/a&gt;</code>";
$sect2 .="<p>This p_link() function can further be customized with attributes. The first attribute changes the href, the second attribute changes the text, and the third attribute (if it's set) adds a class:";
$sect2 .="<code>\$l_one_col .= p_link('http://www.example.com','New Title','button');</code>";
$sect2 .="<p>Now we have a more specific example:</p>";
$sect2 .="<code>&lt;a class='button' href='http://www.example.com'&gt;New Title&lt;/a&gt;</code>";

$sect3 .="<h2>Where the magic happens</h2>";
$sect3 .="<blockquote>But that's the same amount of typing, how is this saving us time?</blockquote>";
$sect3 .="<p>In that particular instance (the link component), one single link won't save us any time at all. The real time savings comes from combining these smaller components into larger ones. Here's an example:</p>";
$sect3 .="<code>\$l_one_col .= p_slider_owl('example');</code>";
$sect3 .="<p>Our 'example' (added as the slider id) slider here uses multiple 'slide' components with a 'promo' component in each. This 'promo' is built up of a 'paragraph' component and a 'link' component (as well as some static content). This function gives us the following:</p>";
$sect3 .= "<div style='width:50%;float:none;margin:auto;'>".p_slider_owl('example')."</div>";

$sect4 .="<h2>Standardization</h2>";
$sect4 .="<p>This also gives us a way to standardize the components we use in each design while having the flexibility in design to customize to our needs.</p>";
$sect4 .="<h3>Publishing</h3>";
$sect4 .="<p>Once everything is filled out, going to /.util/.publish will take the dynamic PHP you've created and print out some static HTML in a client-specific directory as well as an includes directory with css/js and any libraries/fonts required. I hope to eventually change all the URLs in this static version to exclude the number positioning.</p>";
$sect4 .="<p>We're currently updating guidelines for VisionPoint Front-End development, but the draft can be found <a href='http://visionpointmarketing.github.io'>here</a></p>";
//$sect5 .="</div></div>";
/*end define content*/
include_once($docroot."/.includes/templates/".$template."/".$template.".php");
?>