<?php ?>
	<a class="back-to-top" href="#top">Back to Top</a>
</div> <!-- end l-page div -->
<footer>
	<?php include_once( $docroot."/.includes/scripts.php"); ?>
	<script>
		<?php echo $set_tings['script_var'] ?>
	</script>
	<div class="column">
		<div class="footer">
			<?php echo p_matrix(
				3,
				array(
					p_promo(array(
						"type"=>'card',
						"image_type"=>'',
						"extra_class"=>'contact',
						"title"=>'Contact Us',
						"text"=> '',
						"item"=>p_list(
							array(
								'<p><span class="fa fa-map-marker"></span>2443 Lynn Rd, Suite 108</p>',
								'<p class="city">Raleigh, NC 27612</p>',
								'<p><span class="fa fa-phone"></span><a href="tel:919-848-2018">919.848.2018</a></p>',
								'<p><span class="fa fa-envelope"></span><a href="mailto:info@visionpointmarketing.com">info@visionpointmarketing.com</a></p>'
							)
						)
					)
					),
					p_promo(array(
						"type"=>'card',
						"image_type"=>'',
						"extra_class"=>'social',
						"text"=> '',
						"title"=>'Follow Us',
						"item"=>p_list(
							array(
								p_link("#",'<span class="fa fa-facebook"></span>Facebook'),
								p_link("#",'<span class="fa fa-instagram"></span>Instagram'),
								p_link("#",'<span class="fa fa-youtube"></span>Youtube'),
								p_link("#",'<span class="fa fa-twitter"></span>Twitter'),
								p_link("#",'<span class="fa fa-flickr"></span>Flickr'),
								p_link("#",'<span class="fa fa-apple"></span>Apple')
							)
						)
					)
					),
					p_promo(array(
						"type"=>'card',
						"image_type"=>'',
						"extra_class"=>'links-resources',
						"title"=>'Links &amp; Resources',
						"text"=> '',
						"item"=>p_list(
								array(
									p_link("#",'Emergency Procedures'),
									p_link("#",'Employment'),
									p_link("#",'Network &amp; Systems Status'),
									p_link("#",'Online Privacy Statement'),
									p_link("#",'Top Searches/Most-Visited Pages')
								)
							)
						)
					)
				)
			)
			?>
		</div>
		<?php if(isset($demo) && $demo == true){ ?>
			<button class='demo-toggle'>Demo</button>
		<?php } ?>
	</div>
</footer>
</body>
</html>