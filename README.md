//MySQL Commands::
  //creating Database:
    create database registration;

  //creating table for users:
    create table users (id INT(11) PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(255), password VARCHAR(255), type VARCHAR(15));
  
  //creating table for messages:
     create table notes (id INT(11) PRIMARY KEY AUTO_INCREMENT, texts VARCHAR(10000));

  //add an 'admin' as first user
     register through the page and type is student by default.
     to update his/her status to that of a professor:
   
     UPDATE users SET type='prof' WHERE id='1';
                                            
  //add a class representative
     register through the page and type is student by default.
     to update his/her status to that of a class representative:
   
     UPDATE users SET type='classrep' WHERE id='2';
    
    
   
   
