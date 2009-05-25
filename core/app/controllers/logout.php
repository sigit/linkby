<?php
class Logout extends Controller
{
	
	function Logout()
	{
		
		parent::Controller();
		
		if (isset($_SESSION[LBY_CLIENT_SESSION])) {
			
			unset($_SESSION[LBY_CLIENT_SESSION]);
			
			redirect('');
			
		} else {
			
			redirect('');
			
		}
		
	}
	
}