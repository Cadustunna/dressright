<?php

class Admin extends Controller {
     protected function index()
     {
          $auth = new Auth;
          $dbConnection = $auth->conn;

          $viewModel = new AdminModel($dbConnection, $auth);
          $this->returnView($viewModel->index(), true);
     }

     protected function dashboard()
     {
          if (!isset($_SESSION['is_logged_in'])) {
               header('Location: index.php?controller=admin&action=index'); 
               exit;
           }

          $auth = new Auth;
          $dbConnection = $auth->conn;

          $viewModel = new AdminModel($dbConnection, $auth);
          $countUsers = $viewModel->countUsers();
          $feedbackmsgs = $viewModel->countFeedbacks();
          $this->returnView([
               'countUsers'=> $countUsers,
               'countFeedbacks' => $feedbackmsgs
          ], true);
     }

     protected function profiles()
     {
          if (!isset($_SESSION['is_logged_in'])) {
               header('Location: index.php?controller=admin&action=index'); 
               exit;
           }

          $auth = new Auth;
          $dbConnection = $auth->conn;

          $viewModel = new AdminModel($dbConnection, $auth);
          $users = $viewModel->profiles();
          $this->returnView(['showUsers' => $users], true);
     }

     protected function edit_profile()
     {
          if (!isset($_SESSION['is_logged_in'])) {
               header('Location: index.php?controller=admin&action=index'); 
               exit;
           }

          $auth = new Auth;
          $dbConnection = $auth->conn;

          $viewModel = new AdminModel($dbConnection, $auth);
          
          // Fetch user profile
          $edit_profile = $viewModel->edit_profile();

          if (!$edit_profile) {
               echo "<p>User not found.</p>";
               return;
          }

          if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['updateBtn'])) {
               $update_profile = $viewModel->update_profile();

               if ($update_profile) {
                    $edit_profile = $viewModel->edit_profile();
               }
          }

          $this->returnView([
               'getUserById' => $edit_profile
          ], true);
     }

     protected function delete_profile()
     {
          $editid = $_GET['id'];

          $auth = new Auth;
          $dbConnection = $auth->conn;

          $viewModel = new AdminModel($dbConnection, $auth);
          $this->returnView($viewModel->delete_profile($editid), true);
     }

     protected function logout()
     {
          if (isset($_SESSION['is_logged_in'])) {
               session_unset();  
               session_destroy(); 
          }
       
          header('Location: index.php?controller=admin&action=index'); 
          exit;

          // Expire session cookie
          if (isset($_COOKIE[$_SESSION['is_logged_in']])) {
               setcookie($_SESSION['is_logged_in'], '', time() - 42000, '/');
          }

          header('Location: index.php?controller=admin&action=index'); 
          exit;
     }
     protected function feedbacks()
     {
          $auth = new Auth;
          $dbConnection = $auth->conn;

          $viewModel = new AdminModel($dbConnection, $auth);
          $contactmsg = $viewModel->feedbacks();
          $this->returnView([
               'feedbackMsgs' => $contactmsg
          ], true);
     }
}