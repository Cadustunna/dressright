<?php

class UserModel extends Model
{
     private $auth;

     public function __construct($dbConnection, $auth) 
     {
          parent::__construct($dbConnection);
          $this->auth = $auth;
     }
     public function register()
     {
          if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['image'])) {
               // Check if required fields are empty
               if (empty($_POST['fname']) || empty($_POST['occupation']) || empty($_POST['email']) || 
                    empty($_POST['phone']) || empty($_POST['country']) || empty($_POST['pswd']) || 
                    empty($_POST['cpswd'])) {
                    echo "Please fill all required fields";
                    exit();
               }

               // Check if passwords match
               if ($_POST['pswd'] !== $_POST['cpswd']) {
                    Message::setMsg('Passwords do not match.', 'danger');
                    header("Location: index.php?controller=users&action=register");
                    exit();
               }

               // Sanitize input data
               $fname = $this->auth->clean_data($_POST['fname']);
               $occupation = $this->auth->clean_data($_POST['occupation']);
               $email = $this->auth->clean_data($_POST['email']);
               $phone = $this->auth->clean_data($_POST['phone']);
               $country = $this->auth->clean_data($_POST['country']);
               $pswd = $this->auth->clean_data($_POST['pswd']);

               // Validate file type
               $allowedTypes = ['image/jpeg', 'image/png', 'image/gif'];
               if (!in_array($_FILES['image']['type'], $allowedTypes)) {
                    echo "Invalid file type. Only JPG, PNG, and GIF allowed.";
                    exit();
               }

               // Define upload directory and ensure it exists
               $uploadDir = $_SERVER['DOCUMENT_ROOT'] . '/dressright/public/assets/images/';
               if (!is_dir($uploadDir)) {
                    mkdir($uploadDir, 0775, true);
               }

               // Process file upload
               $filename = basename($_FILES['image']['name']);
               $imgPath = $uploadDir . $filename;

               if ($_FILES['image']['error'] !== UPLOAD_ERR_OK) {
                    echo "File upload error: " . $_FILES['image']['error'];
                    exit();
               }

               if (!move_uploaded_file($_FILES['image']['tmp_name'], $imgPath)) {
                    echo "File upload failed.";
                    exit();
               }

               echo "File uploaded successfully.";

               // Check if email already exists
               $isEmail = "SELECT COUNT(*) FROM users WHERE email=:email";
               $isEmailStmt = $this->conn->prepare($isEmail);
               $isEmailStmt->bindParam(':email', $email, PDO::PARAM_STR);
               $isEmailStmt->execute();
               $isEmailExist = $isEmailStmt->fetchColumn();

               if ($isEmailExist) {
                    echo "Email already exists. Please try a different email.";
                    exit();
               }

               // Hash the password
               $hashpwd = password_hash($pswd, PASSWORD_BCRYPT);

               // Insert into database
               try {
                    $sql = "INSERT INTO users (fname, occupation, email, phone, country, image, password) 
                              VALUES(:fname, :occupatn, :email, :phone, :country, :img, :pswd)";
                    $stmt = $this->conn->prepare($sql);
                    $stmt->bindParam(':fname', $fname, PDO::PARAM_STR);
                    $stmt->bindParam(':occupatn', $occupation, PDO::PARAM_STR);
                    $stmt->bindParam(':email', $email, PDO::PARAM_STR);
                    $stmt->bindParam(':phone', $phone, PDO::PARAM_STR);
                    $stmt->bindParam(':country', $country, PDO::PARAM_STR);
                    $stmt->bindParam(':img', $filename, PDO::PARAM_STR); // Save filename only, not full path
                    $stmt->bindParam(':pswd', $hashpwd, PDO::PARAM_STR);
                    $insertStmt = $stmt->execute();

                    if ($insertStmt) {
                         echo "Insert successfully!";
                         header('Location: index.php?controller=home&action=index');
                         exit();
                    }
               } catch (PDOException $e) {
                    echo "Error: " . $e->getMessage();
               }
          }
     }

     public function login()
     {
          return [];
     }
}