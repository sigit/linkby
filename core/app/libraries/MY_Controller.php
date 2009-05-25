<?php
//$_SESSION[LBY_CLIENT_SESSION] = 1;
class MY_Controller extends Controller
{
	function MY_Controller()
	{
		parent::Controller();
		
		if (isset($_SESSION[LBY_CLIENT_SESSION]) && (is_numeric($_SESSION[LBY_CLIENT_SESSION]['client_id']))){
		
			$client_id = $_SESSION[LBY_CLIENT_SESSION]['client_id'];
					
			//Load the connection database client model
			$this->load->model('auth/ClientConn');
			$this->dbClient = $this->ClientConn->connectClient($client_id); 
			
		}
		
	}//End Function
	
}
?>
