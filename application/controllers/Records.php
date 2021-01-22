<?php
class Records extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('display');
	}

	function random() 
    {
        $this->load->model('crud');
        $data = $this->crud->generate();
        $data1 = $this->session->set_flashdata('warning1',$data);
        $this->load->view('display',$data1);

    }

    function sending_model()
    {
        

        $this->load->model('sending_model');
        $data = $this->sending_model->send();
        $data = "$data Email Sent Successfully";
        $data1 = $this->session->set_flashdata('success1',$data);
        
        $this->load->view('display',$data1);

    }
}