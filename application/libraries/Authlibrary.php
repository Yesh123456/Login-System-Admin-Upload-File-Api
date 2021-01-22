
<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * Description of AuthLibrary
 *
 * @author https://www.roytuts.com
 */
class AuthLibrary 
{

    private $ci;
    private $msg;

    function __construct() {
        $this->ci = & get_instance();
        $this->ci->load->model('users_model');
    }

    // function display_msg() {
    //     return $this->msg;
    // }

    /**
     * Login user on the site. Return TRUE if login is successful
     * (user exists and activated, password is correct), otherwise FALSE.
     *
     * @param   string  (username)
     * @param   string  (password)
     */
    function login($username, $password) {
        if ((strlen($username) > 0) && (strlen($password) > 0)) {
            
            $user = $this->ci->users_model->login($username, $password);
            
            if ($user) {
                $new = array('user_name' => $user[0]->username);
                $this->ci->session->set_userdata($new);
                return TRUE;
            } else {
                // $this->ci->session->flashdata('error_msg','Incorrect username or password');
                return FALSE;
            }
        }
        
    }

    /**
     * Logout user from the site
     *
     * @return  void
     */
    function logout() {
        $this->ci->session->set_userdata(array('user_name' => ''));
        //$this->ci->session->unset_userdata('user_name');
        //$this->ci->session->unset_userdata('last_login');
        $this->ci->session->sess_destroy();
    }

    /**
     * Check if user logged in. Also test if user is activated or not.
     *
     * @param   bool
     * @return  bool
     */
    function is_logged_in() {
        if($this->ci->session->userdata('user_name') && ($this->ci->session->userdata('user_name') !== NULL || $this->ci->session->userdata('user_name') !== '')) {
            return TRUE;
        }
        
        return FALSE;
    }
}

    /**
     * Get error message.
     * Can be invoked after any failed operation such as login.
     *
     * @return  string
 
    */
    // function get_error_message() {
    //     return $this->msg;
    // }

/* End of file authlibrary.php */
