        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- dashboard -->
                <div class="row page-titles">
                    <div class="col-md-5 col-12 align-self-center">
                        <h3 class="text-themecolor">Dashboard</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </div>
                    <div class="col-md-7 col-12 align-self-center d-none d-md-block">
                        <div class="d-flex mt-2 justify-content-end">
                            <div class="d-flex mr-3 ml-2">
                                
                            </div>
                            <div class="d-flex mr-3 ml-2">
                                
                            </div>
                            <div class="">
                                
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->

                <!-- content -->
                 <!-- Row -->
               <div class="row">
                <!-- Column -->
                    <div class="col-lg-4 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex flex-row">
                                    <div class="ml-2 align-self-center">
                                        <h3 class="mb-0 font-weight-light"><a href="#">WELCOME</a></h3>
                                        <h5 class="text-muted mb-0"><?php echo $this->session->userdata('name') ?></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                </div>
                <!-- Row -->
               <div class="row">
                    <!-- Column -->
                    <div class="col-lg-4 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex flex-row">
                                    <div
                                        class="round round-lg text-white d-inline-block text-center rounded-circle bg-info">
                                        <i class="fas fa-envelope"></i>
                                    </div>
                                    <div class="ml-2 align-self-center">
                                        <h4 class="mb-0 font-weight-light">Verifikasi Email</h4>
                                        <h6 class="text-muted mb-0"><span class="badge badge-success px-2 py-1">Terverifikasi <i class="fas fa-check"></i></span></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-lg-4 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex flex-row">
                                    <div
                                        class="round round-lg text-white d-inline-block text-center rounded-circle bg-warning">
                                        <i class="fas fa-user"></i></div>
                                    <div class="ml-2 align-self-center">
                                        <h3 class="mb-0 font-weight-light"><a href="#">Profil</a></h3>
                                        <h5 class="text-muted mb-0"><span class="badge badge-danger px-2 py-1">Belum Lengkap</span></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-4 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex flex-row">
                                    <div
                                        class="round round-lg text-white d-inline-block text-center rounded-circle bg-primary">
                                        <i class="fab fa-wpforms"></i></div>
                                    <div class="ml-2 align-self-center">
                                        <h3 class="mb-0 font-weight-light"><a href="#">Resume</a></h3>
                                        <?php if ($this->session->userdata('status_resume') == '1') { ?>
                                            <h5 class="text-muted mb-0"><span class="badge badge-success px-2 py-1">Sudah Buat <i class="fas fa-check"></i></span></h5>
                                        <?php } else {?>
                                            <h5 class="text-muted mb-0"><span class="badge badge-danger px-2 py-1">Belum Buat</span></h5>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
                <!-- Row -->

                   <!-- Row -->
                <div class="row">
                    <div class="col-lg-9">
                        <div class="card">
                            <div class="card-body">
                                    <div class="table-responsive mt-3">
                                        <table class="table stylish-table mb-0 color-table">
                                            <thead>
                                                <tr>
                                                    <th>Judul Resume</th>
                                                    <th>Tanggal Dibuat</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><h7><a href="#"><?php echo $resume->name_resume; ?></a></h7></td>
                                                    <td><?php 
                                                        $date=date_create($resume->date_created);
                                                        echo date_format($date,"d M Y");
                                                     ?></td>
                                                    <td>
                                                        <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                                                      <button type="button" class="btn btn-info"><i class="far fa-edit"></i></button>
                                                      <button type="button" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                                                      <a type="button" href="<?php echo base_url() ; ?>Worker_new/Resume/resume_download" class="btn btn-dark"><i class="fas fa-download"></i></a>
                                                    </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                            </div>
                        </div>
                    </div>
                   <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex flex-row">
                                    <div
                                        class="round round-lg text-white d-inline-block text-center rounded-circle bg-danger">
                                       <i class="fas fa-briefcase"></i></div>
                                    <div class="ml-2 align-self-center">
                                        <h3 class="mb-0 font-weight-light"><a href="#">2</a></h3>
                                        <h5 class="text-muted mb-0">Job Invitation</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Row -->

                <!-- ============================================================== -->
                <!-- End PAge Content -->


                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
               
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div> 
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
 