<?php
/**
 * ClientConn
 * 
 * @package Linkby auth 
 * @author Djalma Araújo
 * @copyright 2009
 * @version 0.1
 * @access public
 */
class ClientConn extends Model
{

    private $table_client = TBL_CLIENT;

    /**
     * ClientConn::ClientConn()
     * 
     * @return
     */
    function ClientConn()
    {
        parent::Model();

    } //End Constructor

    /**
     * ClientConn::connectClient()
     * 
     * @param mixed $client_id
     * @return
     */
    function connectClient($client_id)
    {

        $this->db->select('*')->from($this->table_client)->where(array('id' => $client_id));
        $query = $this->db->get();

        if ($query->num_rows() > 0) {

            $result = $query->row();

            $dsn = 'mysql://' . $result->db_user . ':' . $result->db_password . '@' . $result->
                db_host . '/' . $result->db_name .
                '?char_set=utf8&pconnect=true&dbcollat=utf8_general_ci&cache_on=true&cachedir=';

            $this->dbClient = $this->load->database($dsn, true);

            return $this->dbClient;

        } else {

            return false;

        }

    }

}

?>
