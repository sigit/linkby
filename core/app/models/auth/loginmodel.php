<?php

/**
 * loginModel
 * 
 * @package Linkby auth
 * @author Djalma Araújo
 * @copyright 2009
 * @version 0.1
 * @access public
 */
class loginModel extends Model
{

    /**
     * Private vars
     */
    private $query;
    private $result;
    private $return;
    private $table_client = TBL_CLIENT;
    private $table_user = TBL_USER;
    
    /**
     * loginModel::loginModel()
     * 
     * @return
     */
    function loginModel()
    {
        parent::Model();

    } // #END Constructor Class.


    /**
     * loginModel::authUser()
     * 
     * @param string $login
     * @param string $password
     * @return boolean
     */
    function authUser($login = null, $password = null)
    {
        $this->return = false;

        if ($login && $password) {

            $this->db->select(
				$this->table_client.'.id as client_id, 
				'.$this->table_client.'.status as client_status, 
				'.$this->table_user.'.status as user_status,
				'.$this->table_user.'.id as user_id, 
				'.$this->table_user.'.name as user_name,
				'.$this->table_user.'.type as user_type,'
			)
			->from($this->table_client)
			->join($this->table_user,$this->table_user.'.belongs_to = '.$this->table_client.'.id')
			->where(array(
						$this->table_user.'.username' => $login,
						$this->table_user.'.password' => md5($password)
						)
			);

            $this->query = $this->db->get();

            if ($this->query->num_rows() > 0) {

                $this->result = $this->query->row();

                $_SESSION[LBY_CLIENT_SESSION] = array(
                									'client_id' => $this->result->client_id,
													'user_id' => $this->result->user_id,
													'user_name' => $this->result->user_name,
													'user_type' => $this->result->user_type
													);

                $this->return = true;

            } else {

                $this->return = false;
            }

        } else {

            $this->return = false;
        }

        return $this->return;

    } // #END authUser() Function.

} // #END Class.

// #FILE models/auth/loginModel.php @ LBY
