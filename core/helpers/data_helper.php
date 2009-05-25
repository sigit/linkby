<?
function format_date($date,$type = "date", $separator = ".") {
		
	$format_date = explode(" ", $date );
	
	if ( $type == "date" ) 
	{
		
		$br_date = explode( "-" , $format_date[0] );
		return $br_date[2] . $separator . $br_date[1] . $separator . $br_date[0];
		
	}
	elseif ($type == "datetime")
	{
		
		return format_date($date,"date",".") . ' às ' . $format_date[1];
		
		
	}
	
	
}//End of format_da
?>