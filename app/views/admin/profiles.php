
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-5 align-self-center">
                        <h3 class="text-themecolor">Profiles</h3>
                    </div>
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                        <table class="table table-striped table-hovered table-bordered">
                            <thead class="text-uppercase text-center">
                                <th>S/N</th>
                                <th>Image</th>
                                <th>FullName</th>
                                <th>occupation</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Country</th>
                                <th>Action</th>
                            </thead>
                            <?php if (!empty($showUsers)) : ?>
                                <?php $i = 0;?>
                            <?php foreach ($showUsers as $rows) :?>
                                <?php $i++;?>
                            <tbody class="text-capitalize text-center">
                                <td><?= $i; ?></td>
                                <td><img src="<?='/dressright/public/assets/images/'. htmlspecialchars($rows['image']);?>" 
                                alt="pic" class="rounded-circle" style="height:3rem; width:3rem;"></td>
                                <td><?=htmlspecialchars($rows['fname']); ?></td>
                                <td><?=htmlspecialchars($rows['occupation']); ?></td>
                                <td><?=htmlspecialchars($rows['email']); ?></td>
                                <td><?=htmlspecialchars($rows['phone']); ?></td>
                                <td><?=htmlspecialchars($rows['country']); ?></td>
                                <td>
                                    <!-- Add edit/delete buttons starts -->
                                    <a href="index.php?controller=admin&action=edit_profile&id=<?= $rows['id'];?>" 
                                    class="btn btn-primary"><i class="fa fa-edit"></i></a>
                                    <a href="index.php?controller=admin&action=delete_profile&id=
                                    <?= $rows['id'];?>" class="btn btn-danger del-btn"> <i class="fa fa-trash"></i></a>
                                    <!-- Add edit/delete buttons ends -->
                                </td>
                            </tbody>
                            <?php endforeach; ?>
                            <?php endif; ?>
                        </table>
                        </div>
                    </div>
                </div>
                </div>
                <!-- Row -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->