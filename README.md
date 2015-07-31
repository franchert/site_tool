Available Functions:


p_accordion($id,$arr = null)

	$id		adds an ID to the accordion wrapper
	$arr	requires an array with indices [t] and [b], t being the tab title, and b being the tab body.

breadcrumb($column=true)

	$column	true if confined to the center column, false if it can expand to the full width of the page.

p_carousel($id,$arr = null,$bS='479,1',$bM='768,2',$bL='1199,3',$width = 200,$height = 200)

	$id		adds a class to the carousel wrapper
	$arr	one-dimensional, each item in the array makes up a slide. Pairs well with the N-slide functions
	$bS		small breakpoint (479) in pixels under which N (1) item is shown at any one time.
	$bM		medium breakpoint (768)
	$bL		large breakpoint (1199)
	$width	used for placeholder image size only
	$height	used for placeholder image size only

p_colorbox($selector)
NOT TESTED
	$selector	adds js inline to create a colorbox for the selected item. 

p_dropdown($type="dark",$text="lorem ipsum",$arr=null)

	$type	adds a class to the dropdown, I've used "dark" and "light" for styling
	$text 	title
	$arr 	array of list items included in the dropdown

p_event($title="Event Title Here",$link="#",$month=null,$day=null,)

	$title 	title
	$link 	where the event links to
	$month	month, null if default of today
	$day	day, null if default of today

p_factoid($number="42",$title="lorem ipsums")

	$number	factoid
	$title 	describes factoid

p_link($button=false,$link="#",$text="lorem ipsum")

	$button 	when true adds button class to the <a>
	$link 		links to
	$text 		link text

p_list($class,$arr,$title = '')

	$class		if "ordered", creates OL
	$arr 		items in each li
	$title 		adds an h2 at the beginning as a title to the list

p_matrix($id,$arr,$width=null,$title = null,$offset=0,$morelink='')

	$id 		
	$arr 		
	$width 		
	$title 		
	$offset 	
	$morelink	

p_module($id,$title,$image='https://placehold.it/1200x800.jpg',$item=null,$links=null,$full=false)

	$id 		
	$title 		
	$image 		
	$item 		
	$links 		
	$full 		

p_slider($id,$arr = null,$type="generic",$width = 300,$height = 200)

	$id		adds a class to the slider wrapper
	$arr	one-dimensional, each item in the array makes up a slide. Pairs well with the N-slide functions
	$type 	style adds a class to the owl-carousel div
	$width	used for placeholder image size only
	$height	used for placeholder image size only