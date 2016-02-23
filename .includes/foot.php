	<a class="back-to-top" href="#top">Back to Top</a>
</div> <!-- end l-page div -->
<footer>
	<script>
		<?php echo $set_tings['script_var'] ?>
	</script>
	<div class="column">
		<div class="footer">
			<?php echo p_matrix(
				3,
				array(
					p_promo('promo','','contact','Contact Us',
						p_list(
							array(
								'<p><span class="fa fa-map-marker"></span>2443 Lynn Rd, Suite 108</p>',
								'<p class="city">Raleigh, NC 27612</p>',
								'<p><span class="fa fa-phone"></span><a href="tel:919-848-2018">919.848.2018</a></p>',
								'<p><span class="fa fa-envelope"></span><a href="mailto:info@visionpointmarketing.com">info@visionpointmarketing.com</a></p>'
							)
						),''
					),
					p_promo('promo','','social','Follow Us',
						p_list(
							array(
								p_link("#",'<span class="fa fa-facebook"></span>Facebook'),
								p_link("#",'<span class="fa fa-instagram"></span>Instagram'),
								p_link("#",'<span class="fa fa-youtube"></span>Youtube'),
								p_link("#",'<span class="fa fa-twitter"></span>Twitter'),
								p_link("#",'<span class="fa fa-flickr"></span>Flickr'),
								p_link("#",'<span class="fa fa-apple"></span>Apple')
							)
						),''
					),
					p_promo('promo','','links-resources','Links &amp; Resources',
						p_list(
							array(
								p_link("#",'Emergency Procedures'),
								p_link("#",'Employment'),
								p_link("#",'Network &amp; Systems Status'),
								p_link("#",'Online Privacy Statement'),
								p_link("#",'Top Searches/Most-Visited Pages')
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