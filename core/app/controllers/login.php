<?php
/**
 * Login
 * 
 * @package Linkby auth
 * @author Djalma Araújo
 * @copyright 2009
 * @version 0.1
 * @access public
 */
class Login extends MY_Controller
{

    /**
     * Private vars
     */

    private $login;
    private $password;
    private $form_cache_retyping;

    /**
     * Login::Login()
     * 
     * @return
     */
    function Login()
    {

        parent::MY_Controller();

    } // #END Constructor Class.


    /**
     * Login::Index()
     * 
     * @return
     */
    function Index()
    {
    	
        //Load librarie,models,helpers
        $this->load->library(array('input')); //Lad the input library for forms
        $this->load->model(array('auth/loginmodel')); //Load the login model

        //Get FORM data Login Information
        $this->login = $this->input->post('login', true); //passing TRUE prevets XSS
        $this->password = $this->input->post('password', true); //passing TRUE prevets XSS

        if ($this->loginmodel->authUser($this->login, $this->password)) {

            $this->form_cache_retyping = array('login' => $this->login);
            //save forms elements for good acessiblity re-typing

            $this->session->set_userdata($this->form_cache_retyping); //Saves the session

            redirect('/welcome/'); //Back to home for new login.

        } else {

            redirect('/welcome/'); //Redirects user to he's page.

        }

    } // #END Index() Function.

}

// #FILE controllers/login.php @ LBY
