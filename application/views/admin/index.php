

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                   

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                        <!--<a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i-->
                        <!--        class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>-->
                    </div>
<?php foreach($row as $r)
// print_r($r);
?>
                    <!-- Content Row -->
                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                               Total Enquery</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $r->rowNumber;?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <!--<div class="col-xl-3 col-md-6 mb-4">-->
                        <!--    <div class="card border-left-success shadow h-100 py-2">-->
                        <!--        <div class="card-body">-->
                        <!--            <div class="row no-gutters align-items-center">-->
                        <!--                <div class="col mr-2">-->
                        <!--                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">-->
                        <!--                        Order Amount</div>-->
                        <!--                    <div class="h5 mb-0 font-weight-bold text-gray-800">Rs. <?php //echo $r->total;?></div>-->
                        <!--                </div>-->
                                        <!--<div class="col-auto">-->
                                        <!--    <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>-->
                                        <!--</div>-->
                        <!--            </div>-->
                        <!--        </div>-->
                        <!--    </div>-->
                        <!--</div>-->

                        

                </div>
                <!-- /.container-fluid -->

            </div>
           

        </div>
  

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">��</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

  