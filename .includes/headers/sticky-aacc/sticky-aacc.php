		<div class="mobi-toggle-container">
			<div class="utility">
				<div class="<?php echo $fe_container ?>">
					<div class="search">
						<form action="/.search-results" _lpchecked="1">
							<input type="hidden" name="cx" value="007701188165887638683:9z5n0yvnab4">
							<input type="hidden" name="cof" value="FORID:11">
							<input type="hidden" name="ie" value="UTF-8">
							<label style="display: none;" for="as_q">Search</label>
							<input aria-label="search anne arundel website" id="as_q" class="search-aacc" type="text" name="as_q" placeholder="Search">
							<button id="site_search_button" type="submit" name="sa" value="" aria-label="submit site search"><span class="fa fa-search"></button>
						</form>
						<button class="search-toggle" aria-label="site search toggle"><span class="fa fa-search"></span></button>
					</div>
					<?php echo(p_dropdown('gateway-menu mobile','Info For:',p_list(
						array(
							p_link("#",'Students'),
							p_link("#",'Military & Veterans'),
							p_link("#",'Alumni'),
							p_link("#",'Employers & Businesses'),
							p_link("#",'The Community'),
						)
					))); ?>
					<?php echo(p_dropdown('utility-menu mobile','Utility Menu',p_list(
						array(
							p_link("#",'<strong>GIVE TO US</strong>'),
							p_link("#",'Calendar'),
							p_link("#",'Library'),
							p_link("#",'Bookstore'),
							p_link("#",'Directory'),
							p_link("#",'MySchool'),
						)
					))); ?>
				</div>
			</div>
			<div class='main-nav-container wrapper'>
				<div class="column">

					<?php if($page == 'home')	{echo "<h1>";} ?><a class="site-logo" href="/"><img src="<?php echo $site_logo; ?>" alt='Site Logo'></a><?php if($page == 'home'){echo "</h1>";} ?>

					<?php 
						if($cms == 't4'){
							echo(p_main_nav_t4()); 
						}else{
							echo(p_main_nav()); 
						}
					?>
				</div>
			</div>
		</div>
		<div class="mobi-toggle-wrapper"><div class="toggle"><div class="toggle-element"></div></div></div>