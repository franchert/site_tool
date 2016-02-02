<?php 

/* region classes for each framework option*/
if($fe_framework == 'custom'){
	$fe_l_page = ' l-page';
	$fe_l_featured_header = ' l-featured-header';
	$fe_l_promo_sidebar = ' l-promo-sidebar';
	$fe_l_nav_sidebar = ' l-nav-sidebar';
	$fe_l_content = ' l-content';
	$fe_l_content_wrapper = ' l-content-wrapper';
	$fe_l_content_header = ' l-content-header';
	$fe_l_content_featured = ' l-content-featured';
	$fe_l_content_center = ' l-content-center';
	$fe_l_content_footer = ' l-content-footer';
}
if($fe_framework == 'bootstrap'){
	$fe_l_page = '';
	$fe_l_featured_header = ' col-md-12';
	$fe_l_promo_sidebar = ' col-md-3';
	$fe_l_nav_sidebar = ' col-md-3';
	$fe_l_content = ' col-md-12';
	$fe_l_content_wrapper = ' col-md-9';
	$fe_l_content_header = ' col-md-12';
	$fe_l_content_featured = ' col-md-9';
	$fe_l_content_center = ' col-md-12';
	$fe_l_content_footer = ' col-md-12';
}
	include_once($_SERVER['DOCUMENT_ROOT'].$file_base."/.includes/head.php");
	$page_h1 = $page_title;
	/*prepend to regions*/
	$p_content_header = breadcrumb() . $p_content_header;
	$subnav_dropdowns = true;
	$p_content_header = "\n\t<div class='".$fe_wrapper."'>\n\t\t<div class='".$fe_container."'><h1>".$page_h1."</h1></div>\n\t</div>\n\t". $p_content_header;
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
		$p_nav_sidebar = p_subnav(substr($temp_path,1),null,true,false,$subnav_dropdowns) . $p_nav_sidebar;
	}else{
		$p_nav_sidebar = p_subnav(null,null,true,false,$subnav_dropdowns) . $p_nav_sidebar;
	}
?>
</header>
<div class="<?php echo $fe_region.$fe_l_page; ?><?php if(isset($demo) && $demo == true){ echo " demo"; }?>">
	<?php if($p_featured_header != ''){
		echo '<div class="'.$fe_l_featured_header.$fe_region.'">'.$p_featured_header.'</div>';
	} ?>
	<?php if($p_content_header != ''){
		echo '<div class="'.$fe_l_content_header.$fe_region.'">'.$p_content_header.'</div>';
	} ?>
	<div class="<?php echo $fe_region.$fe_l_content_center; ?>">
		<div class="<?php echo $fe_container; ?>">
			<div class="<?php echo $fe_region; ?><?php echo $fe_l_nav_sidebar; ?>">
				<?php echo $p_nav_sidebar; ?>
			</div>
			<?php if($p_content_featured != ''){
				echo '<div class="'.$fe_l_content_featured.$fe_region.'">'.$p_content_featured.'</div>';
			} ?>
			<div class="<?php echo $fe_l_content_wrapper; ?><?php if($p_promo_sidebar == ''){ echo " full-width";}?>">
				<div class="<?php echo $fe_region; ?><?php echo $fe_l_content; ?>">
					<?php echo $p_content; ?>
				</div>
				<?php if($p_promo_sidebar != ''){ ?>
				<div class="<?php echo $fe_region; ?><?php echo $fe_l_promo_sidebar; ?>">
					<?php echo $p_promo_sidebar; ?>
				</div>
				<?php } ?>
			</div>
		</div>
	</div>
	<?php if($p_content_footer != ''){ ?>
	<div class="<?php echo $fe_region.$fe_l_content_footer; ?>">
		<?php echo $p_content_footer; ?>
	</div>
	<?php } ?>
<?php 
	include_once($_SERVER['DOCUMENT_ROOT'].$file_base."/.includes/footer.php");
?>