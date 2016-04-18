		<div class="mobi-toggle-wrapper"><div tabindex='0' class="toggle"><div class="toggle-element"></div></div></div>

		<div class="mobi-toggle-container">
			<div class="utility">
				<div class="<?php echo $fe_container ?>">
					<?php if($page == 'home')	{echo "<h1>";} ?><a class="site-logo" href="/"><img src="<?php echo $site_logo; ?>" alt='Site Logo'></a><?php if($page == 'home'){echo "</h1>";} ?>
					<div class="row">
						<div class="search">
							<form action="/.search-results" _lpchecked="1">
								<input type="hidden" name="cx" value="007701188165887638683:9z5n0yvnab4">
								<input type="hidden" name="cof" value="FORID:11">
								<input type="hidden" name="ie" value="UTF-8">
								<label style="display: none;" for="as_q">Search</label>
								<input aria-label="search" id="as_q" class="search" type="text" name="as_q" placeholder="Search">
								<button id="site_search_button" type="submit" name="sa" value="" aria-label="submit site search"><span class="fa fa-search"></button>
							</form>
							<button class="search-toggle" aria-label="site search toggle"><span class="fa fa-search"></span></button>
						</div>
						<?php echo(p_dropdown('utility-menu mobile','Utility Menu',p_list(
							array(
								p_link("#",'University Home'),
								p_link("#",'Contact Us'),
								p_link("#",'Directory'),
							)
						))); ?>
					</div>
					<div class="row">
						<?php echo(p_dropdown('gateway-menu mobile','Utility Menu',p_list(
							array(
								p_link("#",'Current Students'),
								p_link("#",'Newly Accepted Students'),
								p_link("#",'Alumni'),
								p_link("#",'Faculty'),
							)
						))); ?>
					</div>
				</div>
			</div>
			<div class='main-nav-container wrapper'>
				<div class="column">


					<?php 
						echo(p_main_nav($cms)); 
					?>
				</div>
			</div>
		</div>
