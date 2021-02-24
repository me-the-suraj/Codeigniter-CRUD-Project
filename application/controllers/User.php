<?php 

class User extends CI_controller{


    function __construct(){
        
        parent::__construct();

    }

    
    // index() method will run bydefault when application runs
    function index(){

        
        $users = $this->User_model->all();

        $data = array();
        $data['users'] = $users;

        $this->load->view('list', $data);
    }

    // create() method will run when u request to create new record
    function create(){

        // Form field validation 
       $this->form_validation->set_rules('user_name','Name','required');
       $this->form_validation->set_rules('user_email','Email','required[valid_email]');

       if($this->form_validation->run() == false){
        // IF Form field Validation fails...
        $this->load->view('create');

       }else{

        //Save data to database

        $formArray = array();

        //Captured Data from FORM
        $formArray['user_name'] = $this->input->post('user_name');
        $formArray['user_email'] = $this->input->post('user_email');
        $formArray['created_at'] = date('Y-m-d');

        //Data sending to "User_model's CREATE method" for inserting data into Database
        $this->User_model->create($formArray);        

        // It will display successful message and redirect to the target page
        $this->session->set_flashdata('success', 'Record Added Successfully !!!');
        redirect(base_url().'user/index');

       }
    }


    function edit($user_id){

        //------------Fetching Existing Values 
        $user = $this->User_model->getUser($user_id);
        $data = array();
        //$data["Array name which we can use for further process"]
        $data['user'] = $user;
        //$this->load->view('edit', $data);




         //------------Update new data on Existing Values 
        // Form field validation 
       $this->form_validation->set_rules('user_name','Name','required');
       $this->form_validation->set_rules('user_email','Email','required[valid_email]');

       if($this->form_validation->run() == false){

        // IF Form field Validation fails...
        $this->load->view('edit', $data);

       }else{

        //Update user record
        $formArray = array();

        //Captured Data from FORM
        $formArray['user_name'] = $this->input->post('user_name');
        $formArray['user_email'] = $this->input->post('user_email');

        $this->User_model->updateUser($user_id, $formArray);  

        // It will display successful message and redirect to the target page
        $this->session->set_flashdata('success', 'Record Updated Successfully !!!');
        redirect(base_url().'user/');


       }


        
    }


    function delete($user_id){

        if(!empty($this->User_model->getUser($user_id))){

            $this->User_model->deleteUser($user_id);       
        $this->session->set_flashdata('success', 'Record Deleted Successfully !!!');
        redirect(base_url().'user/');

        }else{

            $this->session->set_flashdata('failure', 'Record NOT found !!!');
            redirect(base_url().'user/');
    
        }
       

       

        
    }
}

?>