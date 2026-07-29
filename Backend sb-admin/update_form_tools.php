<?php
include "connection.php";

$id_tools = $_GET['id_tools'];

$select_id = mysqli_query($koneksi, "SELECT*FROM tools WHERE id_tools='$id_tools'");

$tools = mysqli_fetch_object($select_id);
?>

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
                        <h1 class="h3 mb-0 text-gray-800">Tools</h1>
                       <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
                    </div>

                    <!-- content start -->

                     <form action="action_update_tools.php" method="post">
                        <div class="mb-3">
                            <label for="nama" class="form-label"> Name
                            </label>
                            <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $tools->nama ?>">
                        </div>
                        <div class="mb-3">
                            <label for="icon" class="form-label"> Icon
                            </label>
                            <input type="text" class="form-control" id="nama" name="icon" value="<?php echo $tools->icon ?>">
                        </div>
                        
                        <!-- Menyimpan ID familiar agar ikut terkirim saat tombol Update diklik -->
                        <input type="hidden" value="<?php echo $tools->id_tools?>" name="id_tools">
                         <!-- type="hidden" Membuat input yang tidak terlihat oleh pengguna-->

                       <button type="submit" name="submit" class="btn btn-primary">Submit</button>
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