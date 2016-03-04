<?php 
include_once($_SERVER['DOCUMENT_ROOT']."/.util/redirect_install.php");
/*set these to true to add a custom stylesheet named the $page variable.css/js */
$styles = false;
$scripts = false;
$layout = 'generic_inner';
$sitemap = true;
/*promo director initializes region variables and includes all the functions to create elements*/
include_once($docroot."/.includes/director.php");
/*define content here*/

$arr = json_decode(file_get_contents('../.util/.generate/sitemap.json'),True);
$l_content .= "<ol class='serialization vertical'>";
$l_content .= recurse($arr,'');
$l_content .= "<div id='output2' style='display:none;'></div>";

/*end define content*/
include_once($docroot."/.includes/layouts/".$layout."/".$layout.".php");
function recurse($arr,$str){
    foreach($arr[0] as $k => $v){
        $str .= "<li data-id='".$arr[0][$k]['id']."' data-name='".$arr[0][$k]['name']."'>".$arr[0][$k]['name']."<ol>";
        if(count($arr[0][$k]['children'][0]) > 0){
            $str .= recurse($arr[0][$k]['children'],'');
        }
        $str .="</ol></li>";
    }
    return $str;
}
?>
