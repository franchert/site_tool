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

$p_one .="<script src='https://cdn.rawgit.com/google/code-prettify/master/loader/run_prettify.js'></script>";
$p_one .="<div class='wrapper'><div class='column'>";
$p_one .="<h2>Welcome to <span style='color:blue;text-shadow:2px 2px 0px rgba(255,0,0,1);width:auto;float:none;display:inline-block;'>Build-O-Tron</span></h2>";
$p_one .="<p>Build-O-Tron has been developed to use as a front-end framework specific to VisionPoint Marketing website designs. It uses specific components based on typical higher education use cases to put together a prototype front-end for provided designs.</p>";
$p_one .="<div style='width:300px;padding-right:20px;'>".p_promo("button","image","light","Examples Page",null,null,null,"/0examples")."</div>";
$p_one .="<p>The link to the left is an example of a default implementation of a button promo, and takes you to the examples section, showing off other examples of components included in this system.</p>";
$p_one .="</div></div>";
$p_one .="<hr>";
$p_one .="<div class='wrapper'><div class='column'>";
$p_one .="<p>This page also includes front-end guidelines used on all VisionPoint projects. These guidelines should be followed for all front-end projects, and should be followed for all Drupal and WordPress back-end projects as closely as the chosen CMS allows.</p>";
$p_one .="<h2>Markup</h2>";
$p_one .="<h3>Doctype</h3>";
$p_one .="<p>the HTML5 doctype will be used unless a separate doctype declaration is required</p>";
$p_one .="<pre class='prettyprint'>&lt;!DOCTYPE html&gt;</pre>";
$p_one .="</div></div>";

include_once($_SERVER['DOCUMENT_ROOT'].$file_base."/.includes/layouts/".$layout."/".$layout.".php");
?>