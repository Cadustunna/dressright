<?php

class AdminModel extends Model {

     private $auth;

     public function __construct($dbConnection, $auth)
     {
          parent::__construct($dbConnection);
          $this->auth = $auth;
     }

     public function index() 
     {
          if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['admin_Login'])) {
               $user = $this->auth->clean_data($_POST['usern']);
               $pwd = $this->auth->clean_data($_POST['pwd']);

               try {
                    $loginsql = "SELECT * FROM admin WHERE username=:user";
                    $loginstmt = $this->conn->prepare($loginsql);
                    $loginstmt->bindParam(':user', $user, PDO::PARAM_STR);
                    $loginstmt->execute();

                    $row = $loginstmt->fetch(PDO::FETCH_ASSOC);

                    if ($row) {
                         //verify password
                         // password_verify($pwd, $row['password']) 
                         if (sha1($pwd) === $row['password']) {
                              //sets session
                              $_SESSION['is_logged_in'] = true;
                              $_SESSION['user_data'] = [
                                   'id' => $row['id'],
                                   'username' => $row['username']
                              ];
                              
                              echo "Logged_in"; 
                              header('Location: index.php?controller=admin&action=dashboard');
                              exit();
                         } else {
                              echo "Invalid password.";
                              exit();
                         }
                    } else {
                         echo "Invalid username.";
                         header('Location: index.php?controller=admin&action=index');
                         exit();
               }
               } catch (PDOException $e) {
                    echo "Error: " . $e->getMessage();
               }
          }
     }

     public function dashboard()
     {
          return [];
     }

     public function countUsers()
     {
          //Fetch all users count
          $countUserSql = "SELECT COUNT(id) AS Total_Users FROM users";
          $countUserStmt = $this->conn->prepare($countUserSql);
          $countUserStmt->execute();

          $countUsers = $countUserStmt->fetch(PDO::FETCH_ASSOC);
          
          return $countUsers['Total_Users'] ?? 0;
     }

     public function profiles()
     {
          //Get records from db
          $profilesql = "SELECT * FROM users";
          $profilestmt = $this->conn->prepare($profilesql);
          $profilestmt->execute();

          $showUsers = $profilestmt->fetchAll(PDO::FETCH_ASSOC);

          return $showUsers;
     }

     public function edit_profile()
     {
          if (isset($_GET['id'])) {

               $edit_id = $_GET['id'];

               try{
                    $editIDsql = "SELECT * FROM users WHERE id = :id";
                    $editIDstmt = $this->conn->prepare($editIDsql);
                    $editIDstmt->bindParam('id', $edit_id, PDO::PARAM_INT);

                    $editIDstmt->execute();

                    $getUserById = $editIDstmt->fetch(PDO::FETCH_OBJ);

                    return $getUserById;

               } catch(PDOException $e) {
                    echo "Error: " . $e->getMessage();
               }
          }
     }

     public function update_profile()
     {
          if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['updateBtn'])) {
               $fname = $this->auth->clean_data($_POST['fname']);
               $email = $this->auth->clean_data($_POST['email']);
               $phone = $this->auth->clean_data($_POST['phone']);
               $occupation = $this->auth->clean_data($_POST['occupation']);
               $country = $this->auth->clean_data($_POST['country']);
               $id = $this->auth->clean_data($_POST['id']);

               try {
                    $updatesql = "UPDATE users SET fname=:fname, occupation=:occupatn, email=:em,
                                   phone=:ph, country=:country WHERE id=:id";
                    $updatestmt = $this->conn->prepare($updatesql);
                    $updatestmt->bindParam(':fname', $fname, PDO::PARAM_STR);               
                    $updatestmt->bindParam(':occupatn', $occupation, PDO::PARAM_STR);               
                    $updatestmt->bindParam(':em', $email, PDO::PARAM_STR);               
                    $updatestmt->bindParam(':ph', $phone, PDO::PARAM_STR);               
                    $updatestmt->bindParam(':country', $country, PDO::PARAM_STR);
                    $updatestmt->bindParam(':id', $id, PDO::PARAM_STR);
                    
                    $update_profile = $updatestmt->execute();

                    if ($update_profile){
                         Message::setMsg("Update profile successfully", 'success');
                         header('Location: index.php?controller=admin&action=profiles');
                         exit();
                    } else {
                         Message::setMsg("Update profile failed", 'danger');
                    }
               } catch (\PDOException $e) {
                    echo "Error:" . $e->getMessage();
               }
          }
     }

     public function delete_profile($id)
     {
          try{
               $deleteSql = "DELETE FROM users WHERE id=:id";
               $deleteStmt = $this->conn->prepare($deleteSql);
               $deleteStmt->bindParam('id', $id, PDO::PARAM_INT);

               $deleteUser = $deleteStmt->execute();

               if($deleteUser) {
                    Message::setMsg('User deleted succesfully!','success');
                    header('Location: index.php?controller=admin&action=profiles');
                    exit;
               } else{
                    Message::setMsg('User cannot be deleted', 'danger');
               }
          } catch(PDOException $e) {
               echo "Error: " .$e->getMessage(); 
          }
     }

     public function feedbacks()
     {
          try {
               $feedbackSql = "SELECT * FROM contact_us";
               $feedbackStmt = $this->conn->prepare($feedbackSql);
               $feedbackStmt->execute();

               $feedbackMsgs = $feedbackStmt->fetchAll(PDO::FETCH_ASSOC);
               
               return $feedbackMsgs;

          } catch(PDOException $e) {
               Message::setMsg($e->getMessage() , 'danger');
          }
     }

     public function countFeedbacks()
     {
          //Fetch all users count
          $countFeedbackSql = "SELECT COUNT(id) AS Total_Feedbacks FROM contact_us";
          $countFeedbackStmt = $this->conn->prepare($countFeedbackSql);
          $countFeedbackStmt->execute();

          $countFeedbacks = $countFeedbackStmt->fetch(PDO::FETCH_ASSOC);
          
          return $countFeedbacks['Total_Feedbacks'] ?? 0;
     }
}