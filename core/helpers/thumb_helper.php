<?

/**
 * Retorna o arquivo com _thumb no final
 *
 * @param string $file
 * @return string
 */
function thumb($file = '')
{
	if (!empty($file)):
		$temp_file = explode('.',$file);
		return 	$temp_file[0].'_thumb.'.$temp_file[1];
	endif;
}
?>