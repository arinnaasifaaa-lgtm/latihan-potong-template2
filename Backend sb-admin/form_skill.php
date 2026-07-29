
<!-- ini adalah langkah pertama setelah memotong template index.php
yaitu membuat form_profile.php -->
<!-- di tengah2 halaman ini selanjutnya dibuat action_insert_profile.php
dari action="action_insert_profile.php" method="post"-->
<!-- next kita ke file action_insert_profile.php --> 
<!-- LANJUTKAN utk membuat file berikutnya yaitu form_job.php, 
form_language.php, form_portfolio, form_skill.php, form_education.php
form_reference.php, dengan cara berulang yang sama--> 
<?php include "header.php" ?>

<body id="page-top">


    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php include "sidebar.php" ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php include "topbar.php" ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Skill</h1>
                       <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
                    </div>

                    <!-- content start -->
                     <!-- form action adalah tujuan pengiriman data dari sebuah form. ketika pengguna
                    mengisi form lalu menekan tombol Submit, browser akan mengirim semua
                    data ke file yang ditulis di dalam atribut action. -->
                     <form action="action_insert_skill.php" method="post"
                     enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="nama_skill" class="form-label"> Keahlian
                            </label>
                            <input type="text" class="form-control" id="nama_skill" name="nama_skill">
                        </div>
                        
                       <button type="submit"  class="btn btn-primary">Submit</button>
                        <button type="reset" class="btn btn-secondary ms-2">Reset</button>
                     </form>
                    <!-- content end -->

                    </div>
                    <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <?php include "footer.php" ?>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <?php include "bottom.php" ?>