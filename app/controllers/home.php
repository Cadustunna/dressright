<?php

class Home extends Controller
{
     protected function index()
     {
          $auth = new Auth; // Instantiate the DB connection
          $dbConnection = $auth->conn; // Get the PDO connection

          $viewModel = new HomeModel($dbConnection, $auth);
          $this->returnView($viewModel->index(), true);
     }

     protected function about()
     {
          $auth = new Auth; // Instantiate the DB connection
          $dbConnection = $auth->conn; // Get the PDO connection

          $viewModel = new HomeModel($dbConnection, $auth);
          $this->returnView($viewModel->about(), true);
     }

     protected function clothings()
     {
          $auth = new Auth; 
          $dbConnection = $auth->conn; 

          $viewModel = new HomeModel($dbConnection, $auth);
          $this->returnView($viewModel->clothings(), true);
     }

     protected function contact()
     {
          $auth = new Auth; 
          $dbConnection = $auth->conn;

          $viewModel = new HomeModel($dbConnection, $auth);
          $message = $viewModel->contact();
          $this->returnView([
               'contactmsg' => $message
          ], 
          true);
     }

     protected function gallery()
     {
          $auth = new Auth; 
          $dbConnection = $auth->conn; 

          $viewModel = new HomeModel($dbConnection, $auth);
          $this->returnView($viewModel->gallery(), true);
     }

     protected function single()
     {
          $auth = new Auth; 
          $dbConnection = $auth->conn; 

          $viewModel = new HomeModel($dbConnection, $auth);
          $this->returnView($viewModel->single(), true);
     }
}