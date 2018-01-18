<?php

require(APPPATH.'/libraries/REST_Controller.php');
 
class Api extends REST_Controller{
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('student_model');
    }
    //API -  Fetch a Student 
    function StudentById_get(){

        $sid  = $this->get('sid');
        
        if(!$sid){
            $this->response("No sid specified", 400);
            exit;
        }

        $result = $this->student_model->getstudentbyid( $sid );
        if($result){
            $this->response($result, 200); 
            exit;
        } 
        else{
             $this->response("Invalid SID", 404);
            exit;
        }
    } 

    //API -  Fetch All Student
    function students_get(){

        $result = $this->student_model->getallstudents();
        if($result){
            $this->response($result, 200); 
        } 
        else{
            $this->response("No record found", 404);
        }
    }
     
    //API - create a new Student  in database.
    function addStudent_post(){

         $admission_no      = $this->post('admission_no');
         $name     = $this->post('name');
         $address    = $this->post('address');
         $contact_number  = $this->post('contact_number'); 
        
         if(!$name || !$admission_no || !$address || !$contact_number){
                $this->response("Enter complete Student information to save", 400);
         }else{
            $result = $this->student_model->add(array("name"=>$name, "admission_no"=>$admission_no, "address"=>$address, "contact_number"=>$contact_number));
            if($result === 0){
                $this->response("Student information coild not be saved. Try again.", 404);
            }else{
                $this->response("success", 200);             
            }
        }
    }

    
    //API - update a Student 
    function updateStudent_put(){
         
          $admission_no      = $this->put('admission_no');
         $name     = $this->put('name');
         $address    = $this->put('address');
         $contact_number  = $this->put('contact_number'); 
		 $id  = $this->put('id'); 
         
           if(!$name || !$admission_no || !$address || !$contact_number){
                $this->response("Enter complete Student information to save", 400);
         }else{
            $result = $this->student_model->update($id, array("name"=>$name, "admission_no"=>$admission_no, "address"=>$address, "contact_number"=>$contact_number));
            if($result === 0){
                $this->response("Student information could not be saved. Try again.", 404);
            }else{
                $this->response("success", 200);  
            }
        }
    }

    //API - delete a Student 
    function deleteStudent_delete()
    {
        $id  = $this->delete('id');

        if(!$id){
            $this->response("Parameter missing", 404);
        }
         
        if($this->student_model->delete($id))
        {
            $this->response("Success", 200);
        } 
        else
        {
            $this->response("Failed", 400);
        }
    }


}