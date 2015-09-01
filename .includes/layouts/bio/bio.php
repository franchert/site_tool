<?php 
/* add the following to director.php
	if ($layout == "bio"){
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
?>
</header>
<div class="wrapper clearfix">
<div class="l-page">
	<?php if($p_featured_header != ''){
		echo '<div class="l-featured-header l-region">'.$p_featured_header.'</div>';
	} ?>
	<div class="wrapper clearfix">
		<?php if($p_content_header != ''){
			echo '<div class="l-content-header l-region">'.$p_content_header.'</div>';
		} ?>
		<div class="l-content-center l-region-container column">
			<div class="l-nav-sidebar l-region">
				<?php echo $p_nav_sidebar; ?>
			</div>
			<?php if($p_content_featured != ''){
				echo '<div class="l-content-featured l-region">'.$p_content_featured.'</div>';
			} ?>
			<div class="l-content-wrapper l-region">
				<div class="l-content l-region">
					<?php echo $p_content; ?>
				</div>
				<div class="l-promo-sidebar l-region">
					<?php echo $p_promo_sidebar; ?>
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