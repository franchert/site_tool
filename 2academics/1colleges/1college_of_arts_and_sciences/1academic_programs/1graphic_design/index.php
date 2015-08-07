<?php 
include_once("../../../../../settings.php");
/*set these to true to add a custom stylesheet named the $page variable.css/js */
$styles = false;
$scripts = false;
$feed_search = true;
$layout = 'generic_inner';
$instafeed = false;
/*promo director initializes region variables and includes all the functions to create elements*/
include_once($_SERVER['DOCUMENT_ROOT'].$file_base."/.includes/promo-director.php");
/*define promos here*/
$p_content_header .="<div class='wrapper'><div class='column'><div class='feature'><img src='https://placehold.it/1500x600.png'/></div></div></div>";

$p_content .="<h3>Faculty and Resources</h3>".p_list(
	array(
		p_paragraph(),
		p_paragraph(),
	)
);
$p_content .="<h3>Awards and Recognition</h3>".p_list(
	array(
		p_paragraph(),
	)
);
$p_content .="<h3>Why Study at UNH?</h3>".p_list(
	array(
		p_paragraph(),
		p_paragraph(),
		p_paragraph(),
		p_paragraph(),
		p_paragraph(),
	)
);
$p_content .= p_promo(
	"promo light",
	"Program Faculty",
	P_list(
		array(
			p_profile(),
			p_profile(),
			p_profile()
		),
		"nodisc"
	)
);
$p_content .= p_promo(
	"promo light",
	"Program Support Staff",
	P_list(
		array(
			p_profile()
		),
		"nodisc"
	)
);

$p_promo_sidebar .="<section><h2>Find Us On</h2>".p_list(
	array(
		p_link(false,'#',"<span class='fa fa-facebook-square'></span>"),
		p_link(false,'#',"<span class='fa fa-instagram'></span>")
	),
	"social",
	""
)."</section>";
$p_promo_sidebar .= p_promo(
	"button light",
	"Apply Now",
	null,
	null,
	null,
	"#",
	"file"
);
$p_promo_sidebar .= p_promo(
	"button dark",
	"Contact Us",
	null,
	null,
	null,
	"#",
	"phone"
);
$p_promo_sidebar .= "<section><h2>Important Links</h2>".p_list(
	array(
		p_link(),
		p_link()
	),
	"important-links"
)."</section>";
$p_promo_sidebar .= "<section><h2>Related Programs</h2>".p_list(
	array(
		p_link(),
		p_link(),
		p_link()
	),
	"important-links"
)."</section>";
$p_promo_sidebar .= "<section><h2>Academic Catalog</h2>".p_list(
	array(
		"<h4>Program Description</h4>".p_list(array(p_link())),
		"<h4>Concentration</h4>".p_list(array(p_link())),
		"<h4>Minors</h4>".p_list(array(p_link(),p_link()))
	),
	"academic-catalog"
)."</section>";
$p_promo_sidebar .= "<section>".p_promo(
	"linkimg",
	"Learn About Our Lyme Campus",
	'',
	NULL,
	"https://placehold.it/400x300.png"
)."</section>";



include_once($_SERVER['DOCUMENT_ROOT'].$file_base."/.includes/head.php");
include_once($_SERVER['DOCUMENT_ROOT'].$file_base."/.includes/layouts/".$layout."/".$layout.".php");
?>