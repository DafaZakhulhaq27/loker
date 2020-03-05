 <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                
                <!-- End User profile text-->
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="nav-small-cap"><?php 
                            if ($this->session->userdata('level') == '2') {
                                echo "AKUN PERUSAHAAN";
                            } elseif ($this->session->userdata('level') == '1') {
                                echo "AKUN PELAMAR";
                            } elseif ($this->session->userdata('level') == '1') {
                                echo "ADMIN";
                            }

                         ?></li>

                         <?php if($this->session->userdata('level') == '2') { ?>
                            <li> <a class="waves-effect waves-dark" href="#" aria-expanded="false"><i
                                    class="mdi mdi-gauge"></i><span class="hide-menu">Dashboard </span></a>
                            </li>
                            <li> <a class="waves-effect waves-dark" href="#" aria-expanded="false"><i
                                    class="mdi mdi-file"></i><span class="hide-menu">Kelola Iklan</span></a>
                            </li>
                            <li> <a class="waves-effect waves-dark" href="#" aria-expanded="false"><i
                                    class="mdi mdi-brush"></i><span class="hide-menu">Edit Profil </span></a>
                            </li>
                            <li> <a class="waves-effect waves-dark" href="#" aria-expanded="false"><i
                                    class="mdi mdi-book-multiple"></i><span class="hide-menu">Job Applications </span></a>
                            </li>
                            <li> <a class="waves-effect waves-dark" href="#" aria-expanded="false"><i
                                    class="mdi mdi-arrange-send-backward"></i><span class="hide-menu">Job Invitation </span></a>
                            </li>
                            <li> <a class="waves-effect waves-dark" href="#" aria-expanded="false"><i class="ti-search"></i><span class="hide-menu">Cari Kandidat </span></a>
                            </li>
                        <?php } ?>    
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
            <!-- Bottom points-->
            <div class="sidebar-footer">
                <!-- item--><a href="<?php echo site_url('Auth/logout') ?>" class="link" data-toggle="tooltip" title="Logout"><i
                        class="mdi mdi-power"></i></a>
            </div>
            <!-- End Bottom points-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->