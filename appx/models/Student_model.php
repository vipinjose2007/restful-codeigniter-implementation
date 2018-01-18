<?php
  class Student_model extends CI_Model {
       
      public function __construct(){
          
        $this->load->database();
        
      }
      
      //API call - get a Student record by Id
      public function getstudentbyid($sid){  

           $this->db->select('id, admission_no, name, address, contact_number');
           $this->db->from('student-details');
           $this->db->where('admission_no',$sid);
           $query = $this->db->get();
           
           if($query->num_rows() == 1)
           {
               return $query->result_array();
           }
           else
           {
             return 0;
          }
      }

    //API call - get Student record
    public function getallstudents(){   
        $this->db->select('id, admission_no, name, address, contact_number');
           $this->db->from('student-details');
        $this->db->order_by("id", "desc"); 
        $query = $this->db->get();
        if($query->num_rows() > 0){
          return $query->result_array();
        }else{
          return 0;
        }
    }
   
   //API call - delete a Student record
    public function delete($id){
       $this->db->where('id', $id);
       if($this->db->delete('student-details')){
          return true;
        }else{
          return false;
        }
   }
   
   //API call - add new Student record
    public function add($data){
        if($this->db->insert('student-details', $data)){
           return true;
        }else{
           return false;
        }
    }
    
    //API call - update a Student record
    public function update($id, $data){
       $this->db->where('id', $id);
       if($this->db->update('student-details', $data)){
          return true;
        }else{
          return false;
        }
    }
}