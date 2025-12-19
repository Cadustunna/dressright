

<!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer"> © 2021 Adminwrap by <a href="#">wrappixel.com</a> </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="/dressright/public/assets/admin/assets/node_modules/jquery/jquery.min.js"></script>
    <!-- Bootstrap popper Core JavaScript -->
    <script src="/dressright/public/assets/admin/assets/node_modules/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="/dressright/public/assets/admin/assets/js/perfect-scrollbar.jquery.min.js"></script>
    <!--Wave Effects -->
    <script src="/dressright/public/assets/admin/assets/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="/dressright/public/assets/admin/assets/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="/dressright/public/assets/admin/assets/js/custom.min.js"></script>
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
    <!--morris JavaScript -->
    <script src="/dressright/public/assets/admin/assets/node_modules/raphael/raphael-min.js"></script>
    <script src="/dressright/public/assets/admin/assets/node_modules/morrisjs/morris.min.js"></script>
    <!--c3 JavaScript -->
    <script src="/dressright/public/assets/admin/assets/node_modules/d3/d3.min.js"></script>
    <script src="/dressright/public/assets/admin/assets/node_modules/c3-master/c3.min.js"></script>
    <!-- Chart JS -->
    <script src="/dressright/public/assets/admin/assets/js/dashboard1.js"></script>
</body>

</html>




<script>
    $(document).ready(function(){
        $('.del-btn').click(function(e){
            e.preventDefault();
            var del = $(this).attr("href");
            
            if(confirm("Are you sure you want to delete this user?")) {
                window.location.href = del;
            }
        });
    });
</script>