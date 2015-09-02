		<div class="mobi-toggle-container">
			<div class="utility">
				<div class="column">
					<div class="search">
						<form action="/.search-results" _lpchecked="1">
							<input type="hidden" name="cx" value="007701188165887638683:9z5n0yvnab4">
							<input type="hidden" name="cof" value="FORID:11">
							<input type="hidden" name="ie" value="UTF-8">
							<label style="display: none;" for="as_q">search the site</label>
							<input aria-label="search new haven website" id="as_q" class="search-newhaven" type="text" name="as_q" placeholder="Search The Site...">
							<button id="site_search_button" type="submit" name="sa" value="" aria-label="submit site search">Go</button>
						</form>
						<button class="search-toggle" aria-label="site search toggle"><span class="fa fa-search"></span></button>
					</div>
					<?php echo(p_dropdown('gateway-menu mobile','Gateway Menu',p_list(
						array(
							p_link("#",'Future Students'),
							p_link("#",'Current Students'),
							p_link("#",'Parents'),
							p_link("#",'Veterans'),
							p_link("#",'Alumni'),
							p_link("#",'Faculty &amp; Staff'),
							p_link("#",'Visitors'),
						)
					))); ?>
					<?php echo(p_dropdown('utility-menu mobile','Utility Menu',p_list(
						array(
							p_link("#",'Apply'),
							p_link("#",'Online Learning'),
							p_link("#",'Directory'),
							p_link("#",'Inside'),
						)
					))); ?>
				</div>
			</div>
			<div class='main-nav-container wrapper'>
				<?php echo(p_main_nav()); ?>
			</div>
		</div>
		<div class="site-logo-wrapper">
			<div class='column'>
				<?php if($page == 'home'){echo "<h1>";} ?><a class="site-logo" href="/"><img src="<?php echo $site_logo; ?>" alt='Site Logo'></a><?php if($page == 'home'){echo "</h1>";} ?>
			</div>
		</div>
		<div class="mobi-toggle-wrapper"><div class="toggle"><div class="toggle-element"></div></div></div>