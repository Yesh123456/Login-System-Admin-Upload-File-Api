<?php
class Csv extends CI_Controller
{
    public $data;
    public function __construct()
    {
        parent::__construct();
        $this->load->model('csv_model');
    }
    function index()
    {   
        $this->load->view('uploadCsvFile');
        
    }
    function uploadData()
    {
        
            $count=0;
            
            $fp = fopen($_FILES['userfile']['tmp_name'],'r') or die("<h2>Go back & Plz Select file</h2> ");
            while($csv_line = fgetcsv($fp,1024))
            {
                // $count++;
                // if($count == 1)
                // {
                //     continue;
                // }//keep this if condition if you want to remove the first row
                for($i = 0, $j = count($csv_line); $i < $j; $i++)
                {
                    $insert_csv = array();
                    $insert_csv['email'] = $csv_line[0];//remove if you want to have primary key,
                    $insert_csv['phone_number'] = $csv_line[1];
                    $insert_csv['username'] = $csv_line[2];

                }
                $i++;
                $data = array(
                    'email' => $insert_csv['email'] ,
                    'phone_number' => $insert_csv['phone_number'],
                    'username' => $insert_csv['username']
                   );

                // $this->csv_model->uploadData($data);
                if(!$this->csv_model->uploadData($data))
                {
                    $mess = $this->session->set_flashdata('warning', 'Duplicates found');
                }
                else
                {
                    $mess = $this->session->set_flashdata('success', 'Duplicates not found');
                }

            }
        
            fclose($fp) or die("cant");
            $mess = $this->session->set_flashdata('success', 'File Uploaded');
            $this->load->view('uploadCsvFile',$mess);
       }
}
