<div class="container">
    <div class="row">
        <div class="col-md-5 align-self-center">
                        <h3 class="text-themecolor text-capitalize">customer's feedback</h3>
        </div>
        <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                        <table class="table table-striped table-hovered table-bordered">
                            <thead class="text-uppercase text-center">
                                <th>S/N</th>
                                <th>FullName</th>
                                <th>Email</th>
                                <th>Subject</th>
                                <th>Message</th>
                                <th style="width: 8rem;">Action</th>
                            </thead>
                            <?php if (!empty($feedbackMsgs)) : ?>
                                <?php $i = 0;?>
                            <?php foreach ($feedbackMsgs as $rows) : ?>
                                <?php $i++;?>
                            <tbody class="text-capitalize text-center">
                                <td><?= $i; ?></td>
                                <td><?=htmlspecialchars($rows['name']); ?></td>
                                <td><?=htmlspecialchars($rows['email']); ?></td>
                                <td><?=htmlspecialchars($rows['subject']); ?></td>
                                <td><?=htmlspecialchars($rows['message']); ?></td>
                                <td>
                                    <!-- Add edit/delete buttons starts -->
                                    <a href="index.php?controller=admin&action=sentReply&id=<?= $rows['id']; ?>" 
                                    class="btn btn-primary"><i class="fa fa-edit"></i></a>
                                    <a href="index.php?controller=admin&action=delete_feedback&id=
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