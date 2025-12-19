<!-- section for login page starts -->
<div class="container-fluid min-vh-100 d-flex align-items-center justify-content-center">
     <div class="row justify-content-center w-100 mb-5 mt-5">
          <div class="col-md-4">
               <div class="card shadow-sm">
                    <div class="card-header text-center">
                         <h1 class="heading-title mt-2">LOGIN</h1>
                    </div>
                    <div class="card-body">
                         <form action="" method="post">
                              <div class="mb-3">
                                   <label for="email" class="form-label">Email:</label>
                                   <input type="email" class="form-control" placeholder="Enter email" name="email" required>
                              </div>
                              <div class="mb-3">
                                   <label for="pwd" class="form-label">Password:</label>
                                   <input type="password" class="form-control" placeholder="Enter password" name="pswd" required>
                              </div>
                              <div class="form-check mb-3">
                                   <input class="form-check-input" type="checkbox" name="remember" id="remember">
                                   <label class="form-check-label" for="remember"> Remember me</label>
                              </div>
                              <div class="d-flex justify-content-between">
                                   <input type="submit" class="btn btn-primary" name="submitLogin" value="Submit">
                                   <a href="index.php?controller=home&action=index" class="btn btn-danger">Cancel</a>
                              </div>
                         </form>
                    </div>
               </div>
          </div>
     </div>
</div>
<!-- section for login page ends -->
