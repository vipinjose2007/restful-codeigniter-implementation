# restful-codeigniter-implementation

# Testing web service using Postman Chrome extension
Open Google Chrome browser. Click Window menu in top menu and click Extensions. Click on the link Get more Extensions in bottom. In Search bar on left side enter postman and click search. In available extensions search results click on Postman and click Add to Chrome. After installation click on Launch button. Let us test web service.

# Testing get Student Data by Student_id method
Open postman and add following URL in address bar. Select GET from methods drop down.

http://localhost/restful-services-in-codeigniter/index.php/api/studentbyid

Next an SID is added as a parameter. Click on Params button. In Key textbox enter sid and in values textbox enter 19078.
Click on Send button and on success, result is sent back to browser.

# Testing Get All Students method

To get all Student records, you need to call sudents method, notice we are not using _get with this method call. In postman add the URL below in address bar.  As there are no parameters; so click on Send button. Request is sent to server, in response all student records are returned as a JSON a object

http://localhost/restful-codeigniter/index.php/api/students

# Testing add a new Student using API method

In Postman select POST from HTTP methods drop down. Add following URL in address bar.

http://localhost/restful-codeigniter/index.php/api/addstudent

Adding a student using POST method, parameters are sent as part of body. Click on Body tab below address bar and select x-www-form-urlencoded radio button.

There are text boxes for keys and values. Add all parameters for the new student. Key is the name of column and value contains the data to be saved. After adding data, Click Send button. If insertion is successful a success message is returned.

# Testing  update student method

To update record of an existing student updatestudent method is called using PUT HTTP method. Select PUT from HTTP methods drop down and add this URL in address bar.

http://localhost/restful-codeigniter/index.php/api/updatestudent

. Click on body tag and select x-www-form-urlencoded radio button. See existing student record at id =1.

In Postman add new student record in key value boxes under body tag. Add id key with value 1. After adding student information click Send button. You can see success message and updated information.

# Testing delete a student method

To delete a student from database using API deletestudent method is used.  Open postman and add following URL in 

http://localhost/restful-codeigniter/index.php/api/deletestudent

From drop down select delete method.
Suppose you want to delete a student record with  id =3 from database. So in key value boxes add id as key and 3 as value. Click on Send button. Success message is returned from server after deletion of book.





