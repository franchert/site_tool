<?php
function breadcrumb($column=true){
	global $segments;
	global $crumb;
	if($column){
		$string = '<div class="wrapper clearfix"><div class="column">';
	}else{
		$string = '<div class="wrapper clearfix">';
	}
	$string .= '<div id="breadcrumb" class="row">';
	$string .= '<ul>';
	$i = -1;
	$count = count($segments);
	foreach($segments as $segment){
		if ($i !=-1){
			$crumb .=$segment."/";
		}
	        $segment = 
				str_replace(" * ","-",
				str_replace("To ","to ",
				str_replace("Of ","of ",
				str_replace("The ","the ",
				str_replace("And ","&amp; ",
				ucwords(
					str_replace("-"," * ",
					str_replace("_"," ",substr($segment,1)
				))))))));
		//$segment = str_replace(" * ","-",ucwords(str_replace("-"," * ",str_replace("_"," ",$segment))));
		if ($i ==-1){
			$segment = "<span class='fa fa-home'></span>";
			$crumb .= "/";
		}
		$i++;
		$string .= '<li>';
		if($count == $i+1){
			$string .= $segment;
		}else{
			$string .='<a href="'.$crumb.'">'.$segment.'</a>';
		}
		$string .='</li>';
	}
	$string .= '</ul></div></div>';
	if($column){
		$string .="</div>";
	}
	return $string;
}
?>