<?php 
/* add the following to director.php
if ($layout == "generic_inner"){
	$p_featured_header = "";
	$p_content_header = "";
	$p_nav_sidebar = "";
	$p_content = "";
	$p_content_featured = "";
	$p_promo_sidebar = "";
	$p_content_footer = "";
}
*/
	include_once($_SERVER['DOCUMENT_ROOT'].$file_base."/.includes/head.php");
	$page_h1 = $page_title;
	$p_content_header = breadcrumb() . $p_content_header;
	$p_content_header = "<div class='wrapper'><div class='column'><h1>".$page_h1."</h1></div></div>". $p_content_header;
	//$p_nav_sidebar = "<section><h3>Share This</h3><script type='text/javascript' src='//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-4f3d4dbf27ddf45d' async='async'></script><div class='addthis_sharing_toolbox'></div></section>" . $p_nav_sidebar;
	if(isset($mini) && $mini == true){
		$i = -1;
		$temp_path = "/";
		foreach($segments as $segment){
			$i++;
			if($i < $depth+1 && $i != 0){
				$temp_path .= $segment."/";
			}
		}
		if(isset($depth)){
			$section_title = str_replace("And","&amp;",str_replace(" * ","-",ucwords(str_replace("-"," * ",str_replace("_"," ",substr($segments[$depth],1))))));
		}
		//strip trailing slash
		$temp_path = substr($temp_path,-1);
		//adjust for mini-site depth
		$starting += $depth-1;
		$p_nav_sidebar = p_subnav(substr($temp_path,1),null,true,false,false) . $p_nav_sidebar;
	}else{
		$p_nav_sidebar = p_subnav(null,null,true,false,false) . $p_nav_sidebar;
	}
?>
</header>
<div class="wrapper clearfix">
<div class="l-page l-region<?php if(isset($demo) && $demo == true){ echo " demo"; }?>">
	<?php if($p_featured_header != ''){
		echo '<div class="l-featured-header l-region">'.$p_featured_header.'</div>';
	} ?>
	<div class="wrapper clearfix">
		<?php if($p_content_header != ''){
			echo '<div class="l-content-header l-region">'.$p_content_header.'</div>';
		} ?>
		<div class="column">
			<div class="l-content-center l-region">
				<div class="l-nav-sidebar l-region">
					<?php echo $p_nav_sidebar; ?>
				</div>
				<?php if($p_content_featured != ''){
					echo '<div class="l-content-featured l-region">'.$p_content_featured.'</div>';
				} ?>
				<div class="l-content-wrapper<?php if($p_promo_sidebar == ''){ echo " full-width";}?>">
					<div class="l-content l-region">
						<?php echo $p_content; ?>
					</div>
					<?php if($p_promo_sidebar != ''){ ?>
					<div class="l-promo-sidebar l-region">
						<?php echo $p_promo_sidebar; ?>
					</div>
					<?php } ?>
				</div>
			</div>
		</div>
		<?php if($p_content_footer != ''){ ?>
		<div class="l-content-footer l-region">
			<?php echo $p_content_footer; ?>
		</div>
		<?php } ?>
	</div>
<!-- l-page div closed in footer.php -->
<?php 
	include_once($_SERVER['DOCUMENT_ROOT'].$file_base."/.includes/footer.php");
?>