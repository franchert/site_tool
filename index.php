<?php 
include_once("./settings.php");
/*set these to true to add a custom stylesheet named the $page variable.css/js */
$styles = false;
$scripts = true;
$feed_search = true;
$layout = 'one-column';
$instafeed = true;
/*promo director initializes region variables and includes all the functions to create elements*/
include_once($_SERVER['DOCUMENT_ROOT'].$file_base."/.includes/director.php");

$p_one .="<div class='wrapper'><div class='column'>";
$p_one .="<h2>Welcome to <span style='color:blue;text-shadow:2px 2px 0px rgba(255,0,0,1),4px 4px 0px rgba(0,255,0,1);width:auto;float:none;display:inline-block;'>Build-O-Tron</span></h2>";
$p_one .="<p>Build-O-Tron has been developed to use as a front-end framework specific to VisionPoint Marketing website designs. It uses specific components based on typical higher education use cases to put together a prototype front-end for provided designs.</p>";
$p_one .="<div style='width:300px;padding-right:20px;'>".p_promo("button","image","light","Examples Page",null,null,null,"/0examples")."</div>";
$p_one .="<p>The link to the left is an example of a default implementation of a button promo, and takes you to the examples section, showing off other examples of components included in this system.</p>";
$p_one .="<p>Examples of the code used to create these components and how the system works can be found in the README.md files in each directory.</p>";
$p_one .="<h2>Getting Started</h2>";
$p_one .="<p>The file structure that this system uses replicates the sitemap created in the information architecture phase of the project. Creating a new directory will place it within the directory structure in alphabetical order. Creating an index.php file inside of that directory will display the contents of that file when accessing it via the web.</p>";
$p_one .="<p>Each index.php file pulls in sitewide variables, sets page specific variables and builds a string to display within regions on a layout defined by these variables. Each file has three major sections:</p><ol style='margin-bottom:30px;list-style:decimal;margin-left:30px;'><li>Set Variables</li><li>Initialize and build strings</li><li>Print out strings within defined layout</li></ol>";
$p_one .="<p>Initializing and printing the strings are done through includes files, but the variables and strings need to be built manually to show the content for each specific page</p>";
$p_one .="</div></div>";

$p_one .="<hr>";
$p_one .="<p>Front-End guidelines can be found <a href='visionpointmarketing.github.io'>here</a></p>";
include_once($_SERVER['DOCUMENT_ROOT'].$file_base."/.includes/layouts/".$layout."/".$layout.".php");
?>