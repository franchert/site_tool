<?php
$string = '<div class="wrapper program-search">
	<div class="column">
		<div id="search-container">
			<label for="searchterm">What do you want to study?</label>
			<input type="text" name="searchterm" id="searchterm" data-type="all" placeholder="Accounting, Communication, Engineering..."/>
			<span id="searchclear" class="search"><span class="fa fa-search"></span></span>
			<div id="results"></div>
		</div>';
$string .=p_dropdown(
	'dark',
	"Browse Our Programs",
	array(
		p_link(false,"#","Undergraduate Programs"),
		p_link(false,"#","Graduate Programs"),
		p_link(false,"#","Programs at Biltmore Park-Asheville"),
		p_link(false,"#","Online Programs"),
	)
);
$string .= p_dropdown(
	'light wide',
	"Explore Our Colleges",
	array(
		p_matrix("explore-colleges",
			array(
				p_promo("overlay","International Student Information","","/.includes/images/international-student-information.jpg","#",''),
				p_promo("overlay","Military and Veteran Resources","","/.includes/images/military-and-veteran-resources.jpg","#",''),
				p_promo("overlay","Non-Degree Seeking Students","","/.includes/images/non-degree-seeking-students.jpg",null,''),
				p_promo("overlay","International Student Information","","/.includes/images/international-student-information.jpg","#",''),
				p_promo("overlay","Military and Veteran Resources","","/.includes/images/military-and-veteran-resources.jpg","#",''),
				p_promo("overlay","Non-Degree Seeking Students","","/.includes/images/non-degree-seeking-students.jpg",null,''),
			)
		)
	)
);
$string .= '</div></div>';
return $string;
?>
