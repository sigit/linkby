<?php

class Welcome extends MY_Controller {

	function Welcome()
	{
		parent::MY_Controller();	
	}
	
	function index()
	{
		if (!empty($this->dbClient)) {
			
			$query = $this->db->get_where('client',array('id' => $_SESSION[LBY_CLIENT_SESSION]['client_id']));
			$clientInfo = $query->row();
						
		}
		
		$params = array(
						'title_page' => LBY_NAME, 
						'db' => $this->db,
						'clientInfo' => (empty($this->dbClient)) ? '' : $clientInfo
						);
		$this->load->view('welcome_message', $params);
	}
}

/* End of file welcome.php */
/* Location: ./system/application/controllers/welcome.php */
