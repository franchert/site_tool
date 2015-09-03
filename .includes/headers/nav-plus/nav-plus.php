<nav class='gateway-menu' role='navigation'>
	<?php echo p_list(
		array(
			p_link("#",'Future Students'),
			p_link("#",'Current Students'),
			p_link("#",'Parents'),
			p_link("#",'Veterans'),
			p_link("#",'Alumni'),
			p_link("#",'Faculty &amp; Staff'),
			p_link("#",'Visitors'),
			"<li class='more hidden' data-width='80'><a href='#''>More Gateways</a><ul></ul></li>"
		),
		"gateway",
		"id"
	) ?>
</nav>
<nav class='utility-menu' role='navigation'>
	<?php echo p_list(
		array(
			p_link("#",'Apply'),
			p_link("#",'Online Learning'),
			p_link("#",'Directory'),
			p_link("#",'Inside'),
			"<li class='more hidden' data-width='80'><a href='#''>More Utilities</a><ul></ul></li>"
		),
		"utility",
		"id"
	) ?>
</nav>
<div class='main-nav-container wrapper'>
	<?php echo(p_main_nav()); ?>
</div>