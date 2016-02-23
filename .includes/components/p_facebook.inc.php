<?php
/**
 	NOT READY, still in development
 *	Adds Custom Facebook feed to site
 */
use Facebook\FacebookRequest;
function p_facebook($app_id,$app_secret,$url,$album,$limit){
	require_once($docroot.'/.includes/libraries/facebook-php-sdk-v4-5.0.0/src/Facebook/autoload.php');

	global $set_tings;
	$set_tings['script_var'] .= "
function fbFeed(){
	$('.fb-feed .item').each(function(){
		var temp = $(this).find('.img-wrap img').height();
		if ($(this).find('.img-wrap img').width() > temp){
			$(this).find('.img-wrap img').css('height','100%'');
		}else{
			temp = $(this).find('.img-wrap img').width();
			$(this).find('.img-wrap img').css('width','100%');
		}
	});
}";
/*
	$album = '86348506359';
	$app_id = '573341462823400';
	$app_secret = 'a0bc94a2cb83a1fc1c195856e520481a';
	$url = 'coa1.vpmdev.com';//make sure this matches the app details
	$limit = 4;
*/
	$token = 'https://graph.facebook.com/oauth/access_token?client_id='.$app_id.'&client_secret='.$app_secret.'&grant_type=client_credentials&redirect_uri=http%3a%2f%2f'.$url;//generate an access token using the app secret and app id
		$ch = curl_init(); 
		curl_setopt($ch, CURLOPT_URL, $token); 
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
		$output = curl_exec($ch); 
		curl_close($ch);

	$request = "https://graph.facebook.com/".$album."/albums?fields=photos&limit=".$limit."&".$output;//get a json feed of all the photos in a specific album (86348506359)
		$ch = curl_init(); 
		curl_setopt($ch, CURLOPT_URL, $request); 
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
		$feed = curl_exec($ch); 
		curl_close($ch);

	$data = json_decode($feed,true);//decode the feed into a readable form
	$i = -1;//set sentinel
	$string = "<div class='fb-feed'>";
	foreach($data['data'][0]['photos']['data'] as $v){//foreach image
		if (++$i == $limit) break;//check for limit
		$photoid = $v['id'];//get the id
		
		$getphoto = "https://graph.facebook.com/".$photoid."?fields=images,link&".$output;//pull the image based on id
			$ch = curl_init(); 
			curl_setopt($ch, CURLOPT_URL, $getphoto);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			$photo_item = curl_exec($ch);
			curl_close($ch);

		$photo_url = json_decode($photo_item,true);//get array returned in a readable form
		if(!array_key_exists('name',$v)){
			$title = 'placeholder';
		}else if($v['name'] == ''){
			$title = 'placeholder';
		}else{
			$title = $v['name'];
		}
		$string .= "<div class='item'><div class='imgcontainer'><img src='".($photo_url['images'][0]['source'])."' /></div><p>".$title."</p><a target='_blank' class='read-more' href='".$photo_url['link']."'>Read More</a></div>";//print our html
	}
	$string .= "</div>";
	return $string;
}
/*function for js

*/

?>