<?php 
include_once($_SERVER['DOCUMENT_ROOT']."/.util/redirect_install.php");
/*set these to true to add a custom stylesheet named the $page variable.css/js */
$styles = false;
$scripts = false;
$layout = 'one-column';
$sitemap = true;
/*promo director initializes region variables and includes all the functions to create elements*/
include_once($docroot."/.includes/director.php");
/*define content here*/

$arr = json_decode(file_get_contents('../.generate/sitemap.json'),True);
$l_one_col .="<div class='wrapper'><div class='column'>";
$l_one_col .="<h1>".$page_title."</h1>";
$l_one_col .= "<button class='add'><span class='fa fa-plus'></span>Add a new item</button>";
$l_one_col .= "<button class='save'><span class='fa fa-save'></span>Save this Sitemap</button>";
$l_one_col .= "<div id='serialization'><ol class='serialization vertical'>";
$l_one_col .= recurse($arr,'');
$l_one_col .= "<div id='output2' style=''></div></div></div></div>";
$l_one_col .= "<a href='/.util' style='position:fixed;top:120px;right:20px;background:#333;color:white;padding:13px 0px;width:50px;height:50px;border-radius:50%;text-decoration:none;text-align:center;line-height:25px;'>Util</a>";

/*end define content*/
include_once($docroot."/.includes/layouts/".$layout."/".$layout.".php");
function recurse($arr,$str){
    foreach($arr[0] as $k => $v){
        $str .= "<li data-id='".$arr[0][$k]['id']."' data-menupos='".$k."' data-title='".$arr[0][$k]['title']."'><span class='fa fa-bars'></span><input class='title' value='".$arr[0][$k]['title']."'></input><span tabindex='0' class='fa fa-close'></span><ol>";
        if(count($arr[0][$k]['children'][0]) > 0){
            $str .= recurse($arr[0][$k]['children'],'');
        }
        $str .="</ol></li>";
    }
    return $str;
}
?>
