# restful-codeigniter-implementation

#### Get Student details 

Get the details of the student 

GET http://localhost/restful-services-in-codeigniter/api/studentbyid

Argument(s) : student_id

Status : 200 OK

Response : 
[
    {
        "id": "3",
        "admission_no": "19080",
        "name": "allen",
        "address": "BTM Nager 2, Marathahalli, Bangalore",
        "contact_number": "9898745656"
    }
]

----------

#### Get all student details 

Get the details of the student 

GET http://localhost/restful-services-in-codeigniter/api/students

Argument(s) : 

Status : 200 OK

Response : 
[
    {
        "id": "3",
        "admission_no": "19080",
        "name": "allen",
        "address": "BTM Nager 2, Marathahalli, Bangalore",
        "contact_number": "9898745656"
    },
    {
        "id": "2",
        "admission_no": "19079",
        "name": "Ben",
        "address": "BTM Nager, Madiwala, Bangalore",
        "contact_number": "989741236"
    },
    
    ...
    
]


--------

#### Add a new student

API to add new student into the system. 

POST http://localhost/restful-services-in-codeigniter/api/addstudent

Argument(s) : student_id, name, address, contact_number

Status : 200 OK

Response : success

--------


#### Update student details 

Update various details of the student 

PUT http://localhost/restful-services-in-codeigniter/api/updatestudent

Argument(s) : student_id, name, address, contact_number

Status : 200 OK

Response : success

--------


#### Delete student 

Delete a student from the system. 

DELETE http://localhost/restful-services-in-codeigniter/api/deletestudent

Argument(s) : student_id 

Status : 200 OK

Response : success





