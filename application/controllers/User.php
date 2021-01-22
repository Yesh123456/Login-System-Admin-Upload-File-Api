    <?php
    defined('BASEPATH') OR exit('No direct script access allowed');
     
    class User extends CI_Controller 
    {
     
        private $exp_time = 60 * 5; 
        function __construct(){
            parent::__construct();
            $this->load->library('authlibrary');
            $this->load->library('form_validation');
        }
        

        public function index(){
            
            $is_logged_in= $this->authlibrary->is_logged_in();
     
            //restrict users to go back to login if session has been set

            if(!$is_logged_in){
                redirect('user/login');
            }
            else{
                $this->load->view('home');
            }
        }
     
        public function login()
        {
            //load session library
            // username:admin password:12345

            if($this->input->post('login'))
            {
                if(get_cookie('remember'))
                {
                    $username = get_cookie('username');
                    $password = get_cookie('password');
                    
                    if ($this->authlibrary->login($username, $password)) {
                    
                    // $this->session->set_flashdata('success_msg', 'Login Successfull');                  
                    redirect('/');
                     } 
                     else {
                        
                        $this->session->set_flashdata('error_msg', 'Check Your Password');
                     }
                    
                }
                else{
                        
                    $this->form_validation->set_rules('username', 'Username', 'trim|required|max_length[20]|xss_clean');
                    $this->form_validation->set_rules('password', 'Password', 'trim|required|max_length[50]|xss_clean');
                
                    if ($this->form_validation->run()) 
                    {
                        $username = $this->input->post('username');
                        $password = $this->input->post('password');
                        $remember = $this->input->post('remember');

                        if($remember) {
                            set_cookie("username", $username, $this->exp_time);
                            set_cookie("password", $password, $this->exp_time);
                            set_cookie("remember", $remember, $this->exp_time);
                        } else {
                            delete_cookie("username");
                            delete_cookie("password");
                            delete_cookie("remember");
                        }
                        
                        if ($this->authlibrary->login($username, $password)) {                 
                            redirect('/');
                        } 
                        else 
                        {    
                            $this->session->set_flashdata('error_msg', 'Check Username or Password');
                        }
                     }
                }

            }

            $this->load->view('login'); 

        }

         function logout() {
            if ($this->authlibrary->is_logged_in()) 
            {
                $this->authlibrary->logout();           
            // $this->session->set_flashdata('login', 'You have been successfully logged out');
            // $this->session->keep_flashdata('login');
             }
            redirect('/');
        }
    }
