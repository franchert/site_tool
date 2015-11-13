<?php
/**
*	Function 
*
*	@param string  $arr = 
*	@param string  $width = 
*/
function p_table(
	$id,
	$thead=false,
	$rows = null){

	$string = "";
	if ($rows == null){
		$string .="
<div>
	<table class='".$id."'>
		<tbody>
			<tr>
				<th>Sample</th>
				<th>Header</th>
				<th><span class='fa fa-check'></span></th>
				<th>Row</th>
			</tr>
			<tr class='odd'>
				<td>Sample</td>
				<td>Body</td>
				<td><span class='fa fa-check'></span></td>
				<td><a href='sample.doc'>Row</a></td>
			</tr>
			<tr class='even'>
				<td>Sample</td>
				<td>Body</td>
				<td><span class='fa fa-check'></span></td>
				<td><a href='#'>Row</a></td>
			</tr>
			<tr class='odd'>
				<td>Sample</td>
				<td>Body</td>
				<td><span class='fa fa-check'></span></td>
				<td><a href='sample.pdf'>Row</a></td>
			</tr>
			<tr class='even'>
				<td>Sample</td>
				<td>Body</td>
				<td><span class='fa fa-check'></span></td>
				<td></td>
			</tr>
		</tbody>
	</table>
</div>
		";
	}else{
		$string .="<div class='".$id."'>";
		$string .="<table>";
		if($thead){
			$string .="<thead>";
		}
		if($thead){
			$string .="</thead>";
		}
		$string .="<tbody>";
		foreach($rows as $k => $v){
			$string .="<tr>";
			$string .="<td>".$k."</td>";
			$string .="<td>".$v."</td>";
			$string .="</tr>";
		}
		$string .="</tbody>";
		$string .="</table>";
		$string .="</div>";
	}
	return $string;
}
?>