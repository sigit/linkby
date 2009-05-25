<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


/**
 * CodeIgniter
 *
 * An open source application development framework for PHP 4.3.2 or newer
 *
 * @package		CodeIgniter
 * @author		ExpressionEngine Dev Team
 * @copyright	Copyright (c) 2008, EllisLab, Inc.
 * @license		http://codeigniter.com/user_guide/license.html
 * @link		http://codeigniter.com
 * @since		Version 1.0
 * @filesource
 */

// ------------------------------------------------------------------------

/**
 * CodeIgniter Alert Messages Helpers
 *
 * @package		CodeIgniter
 * @subpackage	Helpers
 * @category	Helpers
 * @author		Djalma Araújo
 * @link		http://www.djalmaaraujo.com.br/codeigniter/helpers/alertmsg_helper.phps
 */

// ------------------------------------------------------------------------

/**
 * SET
 *
 * Set a message into a SESSION of the ci.
 * 
 *
 * @access	public
 * @param	string 
 * @param	string
 * @param	mixed
 * @return	mixed	depends on what the array contains
 */	
if ( ! function_exists('alertSetMsg'))
{
	function alertSetMsg($msg_string,$type = 'error')
	{
		
		$CI =& get_instance();
		$CI->load->library('session');
		
		$array_message = array(
								'msg' => $msg_string,
								'type' => "$type"
								);

		$CI->session->set_userdata('ci_alertmsg',$array_message);
		$CI->session->userdata('ci_alertmsg');
			
	}	
}

// ------------------------------------------------------------------------

/**
 * Output the message
 *
 * @access	public
 * @param	array
 * @return	mixed	depends on what the array contains
 */	
if ( ! function_exists('alertShowMsg'))
{
	function alertShowMsg()
	{
		$CI =& get_instance();
		$CI->load->library('session');
		$alertMsg = $CI->session->userdata('ci_alertmsg');

		if ( $alertMsg['msg'] != "" )
		{
			
			switch ($alertMsg['type']){
				
				case 'error':
					
					$classType = 'ci-alertMsg-error';
					
				break;
				
				case 'message':
				
					$classType = 'ci-alertMsg-message';
						
				break;
				
			}
			
			echo '<div class="'.$classType.'">' . $alertMsg['msg'] . '</div>'; 
			$CI->session->unset_userdata('ci_alertmsg');
			
		}
	}	
}


/* End of file alertmsg_helper.php */
/* Location: ./system/helpers/alertmsg_helper.php */