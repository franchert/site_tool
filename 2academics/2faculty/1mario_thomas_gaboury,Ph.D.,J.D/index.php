<?php 
include_once("../../../settings.php");
/*set these to true to add a custom stylesheet named the $page variable.css/js */
$styles = false;
$scripts = false;
$feed_search = true;
$layout = 'bio';
$instafeed = false;
/*promo director initializes region variables and includes all the functions to create elements*/
include_once($_SERVER['DOCUMENT_ROOT'].$file_base."/.includes/promo-director.php");
/*define promos here*/
	$page_h1 = $page_title;
	$p_content_header .= "<div class='wrapper'><div class='column'><h1>".$page_h1."</h1></div></div>";
	$p_content_header .= breadcrumb();
	$p_nav_sidebar .=  "<img src='https://placehold.it/167x200.png'/>";
	$p_nav_sidebar .= "<div class='container'><h5>Associate Professor Interim</h5>";
	$p_nav_sidebar .= "<h5>Co-Director of Criminal Justice Ph.D. Program</h5>";
	$p_nav_sidebar .= p_table(
		'bio-table',
		array(
			'College' => "<a href='#'>Henry C. Lee College of Criminal Justice &amp; Forensic Sciences</a>",
			'Department' => "<a href='#'>Criminal Justice</a>",
			'Phone' => "203-479-4509",
			'Email' => "<a href='mailto:MGaboury@newhaven.edu'>MGaboury@newhaven.edu</a>",
			'Office' => "South Campus Hall 313"
		),
		false,
		false
	);
	$p_nav_sidebar .= "</div>";
	$p_nav_sidebar .= "<h3>Share This</h3><script type='text/javascript' src='//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-4f3d4dbf27ddf45d' async='async'></script><div class='addthis_sharing_toolbox'></div>";
	$p_content .="<section class='collapsable'><h2>About</h2>".p_imgcaption('right','150','150').p_paragraph()."</section>";
	$p_content .="<section class='collapsable'><h2>Education</h2>".p_list(array(
			"J.D., Georgetown University Law Center, 1987",
			"Ph.D., Pennsylvania State University, 1983",
			"M.A., University of Maryland, 1980",
			"B.A., University of Connecticut, 1978"
		),
	'carot')."</section>";
	$p_content .="<section class='collapsable'><h2>Recently Published Books and Articles</h2>".p_paragraph('3')."</section>";
	$p_content .="<section class='collapsable'><h2>Courses Taught</h2>".p_matrix(
	"",
	array(p_list(array(
			"<strong>CJ 100</strong> Introduction to Criminal Justice",
			"<strong>CJ 217</strong> Criminal Procedure I",
			"<strong>CJ 218</strong> Criminal Procedure II and Evidence",
			"<strong>CJ 221</strong> Juvenile Justice System",
			"<strong>CJ 606</strong> Domestic and Sexual Violence",
			"<strong>CJ 617</strong> Advanced Victimology",
		),
	'carot'),
	p_list(array(
			"<strong>CJ 251</strong> Quantitative Applications in Criminal Justice",
			"<strong>CJ 411</strong> Victimology",
			"<strong>CJ 413</strong> Victim Law and Services Administration",
			"<strong>CJ 450/670</strong> Oskar Schindler Humanities Course",
			"<strong>CJ 618</strong> Crime Victims' Rights and Services",
			"<strong>INIV 450/670</strong> Oskar Schindler Humanities Course",
		),
	'carot'))
	)."</section>";
$p_promo_sidebar .="<section><h2>Find Me On</h2>".p_list(
	array(
		p_link(false,'#',"<span class='fa fa-facebook-square'></span>"),
		p_link(false,'#',"<span class='fa fa-instagram'></span>")
	),
	"social",
	""
)."</section>";
$p_promo_sidebar .= "<section><h2>Important Links</h2>".p_list(
	array(
		p_link(),
		p_link(),
		p_link(),
		p_link()
	),
	"important-links nodisc"
	)."</section>";
$p_promo_sidebar .= "<section><h2>From the Blog</h2>".p_list(
	array(
		p_promo("textlink","Sub Title / H4 Header",p_paragraph('1',true,false),NULL,NULL,"#",'Read More'),
		p_promo("textlink","Sub Title / H4 Header",p_paragraph('1',true,false),NULL,NULL,"#",'Read More'),
		p_promo("textlink","Sub Title / H4 Header",p_paragraph('1',true,false),NULL,NULL,"#",'Read More'),
	),
	"blog-listing nodisc"
)."</section>";
$p_promo_sidebar .= "<section><h2>News</h2>".p_list(
	array(
		p_promo("imgtitle","Nearly 100 Students Inducted into society for experiential education","experiential education",NULL,"https://placehold.it/100x100.png","#"),
		p_promo("imgtitle","Jeknavorian chosen for distinguished service award in art education","experiential education",NULL,"https://placehold.it/100x100.png","#"),
		p_promo("imgtitle","Painter speaks at Lyme Academy College of Fine Arts commencement","experiential education",NULL,"https://placehold.it/100x100.png",NULL),
	),
	"news-listing nodisc"
);
include_once($_SERVER['DOCUMENT_ROOT'].$file_base."/.includes/head.php");
include_once($_SERVER['DOCUMENT_ROOT'].$file_base."/.includes/layouts/".$layout."/".$layout.".php");
?>