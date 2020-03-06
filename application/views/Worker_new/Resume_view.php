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
                        <h3 class="text-themecolor">Resume</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                            <li class="breadcrumb-item active">Resume</li>
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
                    <div class="col-lg-12">
                        <div class="card card-outline-info">
                            <div class="card-header">
                                <h4 class="mb-0 text-white">Resume Anda</h4>
                            </div>
                            <div class="card-body">
                                <form action="#" class="form-horizontal form-bordered">
                                    <div class="form-body">
                                        <div class="form-group row">
                                            <label class="control-label text-right col-md-3">Judul Resume</label>
                                            <div class="col-md-9">
                                                <input type="text" placeholder="Contoh: Web Progammer" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label text-right col-md-3">Ringkasan Profile</label>
                                            <div class="col-md-9">
                                                <small class="form-control-feedback"> Promosikan diri anda dengan singkat jelas dan padat. Untuk menjaga privasi anda jangan menampilkan info sensitif seperti no hp/telp, alamat email pada bidang ini. </small>
                                                <textarea rows="6"  type="text" class="form-control"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label text-right col-md-3">Gender</label>
                                            <div class="col-md-9">
                                                <select class="form-control custom-select">
                                                    <option value="">Laki-laki</option>
                                                    <option value="">Wanita</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label text-right col-md-3">Tahun Kelahiran</label>
                                            <div class="col-md-9">
                                                <select class="select2 form-control custom-select">
                                                    <option value=""></option>
                                                        <?php  
                                                            for($i = 1970 ; $i < 2030 ; $i++){
                                                                echo '<option value="'.$i.'">'.$i.'</option>' ;                                            
                                                            }
                                                        ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label text-right col-md-3">Status Pernikahan</label>
                                            <div class="col-md-9">
                                                <select class="form-control custom-select">
                                                    <option value="Belum Menikah">Belum Menikah</option>
                                                    <option value="Menikah">Menikah</option>
                                                    <option value="Cerai">Cerai</option>
                                                </select>
                                            </div>
                                        </div>
                                        <!-- provinsi kab dll -->
                                        <div class="form-group row">
                                            <label class="control-label text-right col-md-3">Alamat</label>
                                            <div class="col-md-9">
                                                <textarea rows="6"  type="text" class="form-control"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label text-right col-md-3">Pendidikan Terakhir</label>
                                            <div class="col-md-9">
                                                <select class="form-control custom-select">
                                                    <option value="SMA / SMK / STM">SMA / SMK / STM</option>
                                                    <option value="Diploma / D1 / D2 / D3">Diploma / D1 / D2 / D3</option>
                                                    <option value="S1">S1 </option>
                                                    <option value="S2">S2 </option>
                                                    <option value="S3">S3 </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label text-right col-md-3">Riwayat Pendidikan</label>
                                            <div class="col-md-9">
                                                <textarea rows="6"  type="text" class="form-control"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label text-right col-md-3">Keahlian</label>
                                            <div class="col-md-9">
                                                <textarea rows="6"  type="text" class="form-control"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label text-right col-md-3">Lama Bekerja</label>
                                            <div class="col-md-9">
                                                <select class="select2 form-control custom-select">
                                                    <option value=""></option>
                                                    <option value=" < 1 Tahun"> < 1 Tahun</option>
                                                    <option value=" 1 - 2 Tahun"> 1 - 2 Tahun</option>
                                                    <option value=" 2 - 5 Tahun"> 2 - 5 Tahun</option>
                                                    <option value=" 5 - 10 Tahun"> 5 - 10 Tahun</option>
                                                    <option value=" > 10 Tahun"> > 10 Tahun</option>
                                                    <option value="Fresh Graduate">Fresh Graduate</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label text-right col-md-3">Pengalaman Bekerja</label>
                                            <div class="col-md-9">
                                                <textarea rows="6"  type="text" class="form-control"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row last">
                                            <label class="control-label text-right col-md-3">Country</label>
                                            <div class="col-md-9">
                                                <select class="form-control">
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-actions">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="offset-sm-3 col-md-9">
                                                        <button type="submit" class="btn btn-success"> <i
                                                                class="fa fa-check"></i> Submit</button>
                                                        <button type="button" class="btn btn-inverse">Cancel</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
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
 