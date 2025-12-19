<?php

class Users extends Controller {
     protected function register() 
     {
          $auth = new Auth; // Instantiate the DB connection
          $dbConnection = $auth->conn; // Get the PDO connection

          $viewModel = new UserModel($dbConnection, $auth);
          $this->returnView($viewModel->register(), true);
     }

     protected function login() 
     {
          $auth = new Auth; // Instantiate the DB connection
          $dbConnection = $auth->conn; // Get the PDO connection

          $viewModel = new UserModel($dbConnection, $auth);
          $this->returnView($viewModel->login(), true);
     }
}