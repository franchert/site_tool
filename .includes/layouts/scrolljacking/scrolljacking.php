<?php 
	include_once($docroot."/.includes/head.php");
	echo "</div></div></header>"; //div closes head and wrapper
	$scrolljack=true;
?>
<div class="l-page" id="main-content" tabindex="-1">
	<?php if(isset($nav) && $nav == true){ ?>
	<div id="nav">
		<ul>
			<?php for($i = 0; $i <10; $i++){
				if(${"sect$i"} == ''){
					continue;
				}else{
				?>
			<li class="sect<?php echo $i;?>"><a href="#sect<?php echo $i; ?>"
				<?php if($i === 0){echo ' class="active"';} ?>
			></a></li>
			<?php }
			} 
			?>
		</ul>
	</div>
	<?php } ?>
	<div class="section-wrapper" id="content">
		<?php 
		for($i = 0; $i <10; $i++){
			if(${"sect$i"} == ''){
				continue;
			}else{
			?>
		<div id="<?php echo "sect$i"; ?>" data-hash="<?php echo "sect$i"; ?>" class="section">
			<?php echo ${"sect$i"}; ?>
		</div>
			<?php }
		} 
		?>
	</div>
<!-- l-page div closed in foot.php -->
<?php
include_once($docroot."/.includes/foot.php");
?>