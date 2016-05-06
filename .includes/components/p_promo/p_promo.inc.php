<?php
/**
 *	Function to include a text and image intro promo
 *
 *	settings for the promo added:
 *
 *	$arr_1 = [
 *		"type"=>'overlay,panel,reveal,generic,card,button,media',
 *		"image_type"=>'image,url,item,"" ',
 *		"extra_class"=>'left,right,dark,light',
 *		"title"=>'Promo Title, or "" ',
 *		"item"=>'Any other element, some may not be styled',
 *		"text"=>'null for ipsum, actual text or "" for nothing (unless required)',
 *		"tag"=>'used for categories',
 *		"link"=>'URL',
 *		"link_title"=>'Title to be used for "read more"'
 *	]
*/
function p_promo($arr_1){

	global $set_tings;

	$type="generic";
	$image_type="image";
	$extra_class="";
	$text="";
	$title="Promo Title";
	$link="#";
	$item=null;
	$tag=null;
	$link_title=null;

	if(is_array($arr_1) && !is_null($arr_1)){
		foreach($arr_1 as $k => $v){
			${$k} = $v;
		}
	}

	$alt = (strip_tags($title) == '') ? "placeholder alt text" : strip_tags($title);

	if($image_type == "image"){
		$img = p_image("400","300");
	}else if($image_type == "url"){
		$img = "<img alt='".$alt."' src='".$item."'/>";
	}else if($image_type == "item"){
		$img = ($item === null) ? '':$item;
	}else{
		$img = '';
	}
	if(is_null($text)){
		$text = p_paragraph('1','short',true);
	}else if ($text != ''){
		$text = "<p>".$text."</p>";
	}
	if ($text == ''){
		$text='';
		$textreq = p_paragraph('1','short',true);
	}
	$textreq = $text;

	$string = "<div class='p-promo ".$type." ".$extra_class."'>";

		$string .= infoButton([
				'fields' => ['title'],
				'needs' => ['hover','focus, active'],
				'intro' => 'This promo...',
				'other' => 'Other info...'
			],'p_promo - '.$type
		);
		if(strrpos($type,"overlay") !== false){
			if(!is_null($link)){
				$string .="<a href='".$link."'>";
			}
			$string .= "<div class='item'>".$img."</div>";
			if(!is_null($tag)){
				$string .="<div class='tag'><h3>".$tag."</h3></div>";
			}
			$string .= "<div class='promo-container'>";
			$string .="<h2>".$title."</h2>";
			$string .= $textreq;
			$string .= "</div>";
			if(!is_null($link)){
				$string .="</a>";
			}
		}else if(strrpos($type,"panel") !== false){
			if(!is_null($link)){
				$string .= "<a href='".$link."'>";
			}
			$string .="<div class='item'>";
			if(!is_null($title)){
				$string .= "<h3>".$title."<span class='sub-text'>".$textreq."</span></h3>";
			}
			$string.=$img."</div>";
			if(!is_null($link)){
				$string .= "</a>";
			}
		}else if(strrpos($type,"reveal") !== false){
			$string .= "<div class='item'>".$img."</div>";
			$string .="<a href='".$link."'>";
			$string .="<h2>".$title."</h2>";
			if(is_null($link_title)){
				$string .= "<p>Read More</p>";
			}else if($link_title == ''){
				$string .='';
			}else{
				$string .= "<p>".$link_title."</p>";
			}
			$string .= "</a>";
		}else if(strrpos($type,"generic") !== false){
			$string .= "<div class='item'>".$img."</div>";
			$string .= "<div class='promo-container'>";
				$string .="<h2>".$title."</h2>";
				$string .= $textreq."";
				if(is_null($link_title)){
					$string .= "<a class='read-more' href='".$link."'>Read More</a>";
				}else if($link_title == ''){
					$string .="";
				}else{
					$string .= "<a class='read-more' href='".$link."'>".$link_title."</a>";
				}
			$string .= "</div>";
		}else if(strrpos($type,"card") !== false){
			if(!is_null($title)){
				$string .="<h4>".$title."</h4>";
			}
			if(strrpos($type,"light") === false){$string .="<hr>";}
			$string .= "<div class='item'>".$img."</div>";
			$string .= "<div class='promo-container'>";
			$string .= $text."";
			$string .= $item;
			$string .= "</div>";
			if(is_null($link_title) || $link_title == ''){
				$string .= "";
			}else{
				$string .= "<a href='".$link."'>".$link_title."</a>";
			}
		}else if(strrpos($type,"button") !== false){
			$string .="<a href='".$link."'>";
			if(!is_null($item)){
				$string .= $img;
			}
			$string .= "<div class='promo-container'>";
				if(is_null($link_title)){
					$string .= "<span class='fa fa-circle'></span>";
				}else if($link_title == ''){
					$string .='';
				}else{
					$string .= "<span class='fa fa-".$link_title."'></span>";
				}
				$string .="<p>".$title."</p>";
			$string .= "</div></a>";
		}else if(strrpos($type,"media") !== false){
			if($extra_class == ''){
				$extra_class = 'media-left';
			}
			$string .='
			<div>
				<div class="'.$extra_class.'">
					<a href="#">';
			$string .=p_image('64','64');
			$string .='</a>
				</div>
				<div class="media-body">
					<h4 class="media-heading">Media heading</h4>';
			$string .=p_paragraph();
			$string .='</div>
			</div>';
		}else{
			$string .= "<p style='color:#222;padding:20px;border:2px solid red;border-radius:5px;background:rgba(255,0,0,0.2);'>The &lsquo;".$type."&rsquo; promo type does not exist. Please try a different name.</p>";
		}
	$string .="</div>";
	return($string); 
}
?>