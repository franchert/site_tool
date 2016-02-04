</div> <!-- end l-page div -->
<footer>
	<script>
		<?php echo $script_var ?>
	</script>
	<div class="column">
		<div class="footer">
			<?php echo p_matrix(
				3,
				array(
					p_promo('promo','comp','contact','Contact Us',
						p_list(
							array(
								'<p><span class="fa fa-map-marker"></span>2443 Lynn Rd, Suite 108</p>',
								'<p class="city">Raleigh, NC 27612</p>',
								'<p><span class="fa fa-phone"></span><a href="tel:919-848-2018">919.848.2018</a></p>',
								'<p><span class="fa fa-envelope"></span><a href="mailto:info@visionpointmarketing.com">info@visionpointmarketing.com</a></p>'
							)
						),''
					),
					p_promo('promo','comp','social','Follow Us',
						p_list(
							array(
								'<a href="#"><span class="fa fa-facebook"></span>Facebook</a>',
								'<a href="#"><span class="fa fa-instagram"></span>Instagram</a>',
								'<a href="#"><span class="fa fa-youtube"></span>Youtube</a>',
								'<a href="#"><span class="fa fa-twitter"></span>Twitter</a>',
								'<a href="#"><span class="fa fa-flickr"></span>Flickr</a>',
								'<a href="#"><span class="fa fa-apple"></span>Apple</a>'
							)
						),''
					),
					p_promo('promo','comp','links-resources','Links &amp; Resources',
						p_list(
							array(
								'<a href="#">Emergency Procedures</a>',
								'<a href="#">Employment</a>',
								'<a href="#">Network &amp; Systems Status</a>',
								'<a href="#">Online Privacy Statement</a>',
								'<a href="#">Top Searches/Most-Visited Pages</a>'
							)
						),''
					),
				)
			)?>
		</div>
	</div>
</footer>
</body>
</html>