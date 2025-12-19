<?php

class HomeModel extends Model 
{
     private $auth;

     public function __construct($dbConnection, $auth){
          parent::__construct($dbConnection);
          $this->auth = $auth;
     }

     public function index()
     {
          return [];
     }

     public function about()
     {
          return [];
     }

     public function clothings()
     {
          return [];
     }

     public function contact()
     {
          if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submitBtn'])){
               if($_POST['name'] == "" || $_POST['email'] == "" || $_POST['subject']
               == "" || $_POST['message'] == "") {
                    Message::setMsg("Please input required fields", 'danger');
                    exit();
               }

               $name = $this->auth->clean_data($_POST['name']);
               $email = $this->auth->clean_data($_POST['email']);
               $phone = $this->auth->clean_data($_POST['phone']);
               $subject = $this->auth->clean_data($_POST['subject']);
               $message = $this->auth->clean_data($_POST['message']);

               try {
                    $contactSql = "INSERT INTO contact_us (name, email, phone, subject, message)
                                   VALUES (:name, :email, :phone, :subject, :message)";
                    $contactStmt = $this->conn->prepare($contactSql);
                    $contactStmt->bindParam(':name', $name, PDO::PARAM_STR);          
                    $contactStmt->bindParam(':email', $email, PDO::PARAM_STR);          
                    $contactStmt->bindParam(':phone', $phone, PDO::PARAM_STR);          
                    $contactStmt->bindParam(':subject', $subject, PDO::PARAM_STR);          
                    $contactStmt->bindParam(':message', $message, PDO::PARAM_STR);
                    
                    $contactmsg = $contactStmt->execute();

                    if($contactmsg)
                    {
                         Message::setMsg('Message sent successfully!', 'success');
                         header('Location: index.php?controller=home&action=contact');
                    } else {
                         Message::setMsg('Message failed!, please try again!', 'danger');
                         exit;
                    }
               } catch (Exception $e) {
                    Message::setMsg($e->getMessage(), 'danger');
               }

          } 
     }

     public function gallery()
     {
          return [];
     }

     public function single()
     {
          return [];
     }
}