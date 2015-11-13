<?php
/**
*	Function 
*
*	@param string  $arr = 
*	@param string  $width = 
*/
function p_table_mobile(
	$id,
	$head = null,
	$rows = null){

	$string = "";
	if ($head == null && $rows == null){
		$string .="
<div class='table-wrapper'>
	<table class='".$id."'>
		<thead>
			<tr>
				<th>Sample</th>
				<th>Header</th>
				<th>Check</th>
				<th>Row</th>
			</tr>
		</thead>
		<tbody>
			<tr class='odd'>
				<td data-label='Sample'>Sample</td>
				<td data-label='Header'>Body</td>
				<td data-label='Check'><span class='fa fa-check'></span></td>
				<td data-label='Row'><a href='sample.doc'>Row</a></td>
			</tr>
			<tr class='even'>
				<td data-label='Sample'>Sample</td>
				<td data-label='Header'>Body</td>
				<td data-label='Check'><span class='fa fa-check'></span></td>
				<td data-label='Row'><a href='#'>Row</a></td>
			</tr>
			<tr class='odd'>
				<td data-label='Sample'>Sample</td>
				<td data-label='Header'>Body</td>
				<td data-label='Check'></td>
				<td data-label='Row'><a href='sample.pdf'>Row</a></td>
			</tr>
			<tr class='even'>
				<td data-label='Sample'>Sample</td>
				<td data-label='Header'>Body</td>
				<td data-label='Check'><span class='fa fa-check'></span></td>
				<td data-label='Row'></td>
			</tr>
		</tbody>
	</table>
</div>
";
	}else{
		$string .="<div class='table-wrapper'><table class='".$id."'>";
		if($head != null){
			$string .="<thead><tr>";
			foreach($head as $k => $v){
				$string .= '<th>'.$v.'</th>';
			}
			$string .="</tr></thead>";
		}
		if($rows != null){
			$string .="<tbody>";
				foreach($rows as $key => $value){
					$string .='<tr class="odd">';
					foreach($value as $k => $v){
						$string .= '<td data-label="'.$head[$k].'">'.$v.'</td>';
					}
					$string .='</tr>';
				}
			$string .="</tbody>";
		}
		$string .="</table></div>";
	}
	return $string;
}
?>