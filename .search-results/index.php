<?php 
include_once("../settings.php");
/*set these to true to add a custom stylesheet named the $page variable.css/js */
$styles = false;
$scripts = false;
$feed_search = true;
$layout = 'one-column';
$instafeed = false;
/*promo director initializes region variables and includes all the functions to create elements*/
include_once("../.includes/director.php");
/*define promos here*/

$p_one .= breadcrumb();
$page_h1 = $page_title;
$p_one .="<div class='wrapper'><div class='column'><h1>".$page_h1."</h1></div></div>";

$p_one .="<script>
  (function() {
    var cx = '".$google_CSE_cx."';
    var gcse = document.createElement('script');
    gcse.type = 'text/javascript';
    gcse.async = true;
    gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') +
        '//cse.google.com/cse.js?cx=' + cx;
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(gcse, s);
  })();
</script>
<gcse:searchresults-only></gcse:searchresults-only>";

include_once($docroot."/.includes/head.php");
include_once($docroot."/.includes/layouts/".$layout."/".$layout.".php");
?>