<?php
// Usage: <img src="placeholder-svg.php?wh=400x400&fill=bada55&color=000000&font=Georgia&size=20" />
$wh = explode('x', $_GET['wh']);
$wh[0] = (int)$wh[0];
$wh[1] = (int)$wh[1];
$fill = isset($_GET['fill']) ? $_GET['fill']: '666666';
$color = isset($_GET['color']) ? $_GET['color']: 'FFFFFF';
$size = isset($_GET['size']) ? (int)$_GET['size']: 60;
$fontfamily = isset($_GET['font']) ? $_GET['font']: 'Arial';
$ph_text = isset($_GET['txt']) ? $_GET['txt']: 'ph_default_text';
header('Content-Type: image/svg+xml');
?>
<svg height="<?php echo $wh[1] ?>" width="<?php echo $wh[0] ?>" viewBox="0 0 <?php echo $wh[0] ?> <?php echo $wh[1] ?>" xmlns="http://www.w3.org/2000/svg">
	<g>
		<title>placeholder</title>
		<rect id="svg_1" height="<?php echo $wh[1] ?>" width="<?php echo $wh[0] ?>" y="0" x="0" fill="#<?php echo $fill ?>"/>
		<text x="50%" y="50%" text-anchor="middle" alignment-baseline="middle" font-size="<?php echo $size ?>" dominant-baseline="middle" font-family="<?php echo $fontfamily ?>" fill="#<?php echo $color ?>">
			<?php 
				if($ph_text == 'ph_default_text'){
					echo $wh[0] ?>x<?php echo $wh[1];
				}
				else{
					echo $ph_text;
				}
			?>
		</text>
		<?php 
			if($ph_text != 'ph_default_text'){
		?>
		<text x="<?php echo $wh[0] - 10 ?>" y="<?php echo $wh[1] - 15 ?>" text-anchor="end" alignment-baseline="bottom" font-size="<?php echo $size/2 ?>" dominant-baseline="middle" font-family="<?php echo $fontfamily ?>" fill="#<?php echo $color ?>">
			<?php echo $wh[0] ?>x<?php echo $wh[1]; ?>
		</text>
		<?php
			}
		?>
	</g>
</svg>