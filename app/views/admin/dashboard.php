


            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h3 class="text-themecolor">Dashboard</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </div>
                    
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Sales Chart and browser state-->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-3">
                        <div class="card shadow-sm">
                            <div class="card-body ">
                                <div class="d-flex flex-column align-items-center text-center">
                                    <div class="btn btn-primary btn-circle text-light">
                                        <i class="fa fa-users"></i>
                                    </div>
                                    <span>
                                        <h3>Total Users</h3>
                                    </span>
                                    <?php if(!empty($countUsers)) :?>
                                    <p><?= $countUsers?></p>
                                    <?php endif;?>
                                </div>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <div class="col-lg-3">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <div class="d-flex flex-column align-items-center text-center">
                                    <div class="btn btn-primary btn-circle text-light">
                                        <i class="fa fa-bolt"></i>
                                    </div>
                                    <span>
                                        <h3>Total Products</h3>
                                    </span>
                                    <p>10</p>
                                </div>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <div class="col-lg-3">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <div class="d-flex flex-column align-items-center text-center">
                                    <div class="btn btn-primary btn-circle text-light">
                                        <i class="fa fa-bank"></i>
                                    </div>
                                    <span>
                                        <h3>Total Sales</h3>
                                    </span>
                                    <p>270</p>
                                </div>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <div class="col-lg-3">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <div class="d-flex flex-column align-items-center text-center">
                                    <div class="btn btn-primary btn-circle text-light">
                                        <i class="fa fa-ambulance"></i>
                                    </div>
                                    <span>
                                        <h3>Total Feedback</h3>
                                    </span>
                                    <?php if(!empty($countFeedbacks)) :?>
                                    <p><?= $countFeedbacks?></p>
                                    <?php endif;?>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            