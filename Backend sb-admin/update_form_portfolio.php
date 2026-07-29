<!-- kita dari tabel_portfolio.php klik tombol update, maka akan diarahkan ke file update_form_portfolio.php -->
<!-- di file update_form_portfolio.php ini, kita akan menampilkan data yg mau di update dari database ke form update_form_portfolio.php -->
<!-- langkah pertama, kita panggil koneksi database dgn include "connection.php" -->
<!-- selanjutnya copy data dr file tabel_portfolio.php ke file update_form_portfolio.php -->

<?php
include "connection.php";

// menyimpan sementara id_portfolio dr tombol update tabel_portfolio.php ke variabel $id_portfolio
// menyimoan sementara id_portfolio dr tombol update tabel_portfolio.php utk di eksekusi ke bawah ini
// $_GET['id_portfolio'] utk menerima data yg dikirim dr tombol update di tabel_portfolio.php
$id_portfolio = $_GET['id_portfolio'];

// menampilkan data  portfolio yg didapat atau dikirim dr tombol update  tabel_portfolio.php diatas
$select_portfolio = mysqli_query($koneksi, "SELECT * FROM portfolio WHERE id_portfolio='$id_portfolio'");

// ini fungsi utk menampilkan isi tabel menggunakan mysqli_fetch_object() yg nantinya akan ditampilkan di form update_form_portfolio.php
// slnjtnya menuju form bawah dg menggunakan value utk inputan setiap data yg mau di update, misal judul_portfolio, img, link, deskripsi, jenis
$portfolio = mysqli_fetch_object($select_portfolio);

// di bawah ini adalah isi asli dr form update_form_portfolio.php 
?>
 

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
                        <h1 class="h3 mb-0 text-gray-800">Portfolio</h1>
                       <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
                    </div>

                    <!-- content start -->

                     <form action="action_update_portfolio.php" method="post"
                     enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="judul" class="form-label"> Portfolio
                            </label>
                            <input type="text" class="form-control" id="judul" name="judul_portfolio" 
                            value="<?php echo $portfolio->judul_portfolio; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="img" class="form-label"> Image
                            </label>
                            <input type="file" class="form-control" id="img" name="img" 
                            value="<?php echo $portfolio->img; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="link" class="form-label"> Link
                            </label>
                            <input type="text" class="form-control" id="link" name="link" 
                            value="<?php echo $portfolio->link; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="deskripsi" class="form-label"> Description
                            </label>
                            <textarea name="deskripsi" id="deskripsi" cols="30" class="form-control" rows="10"><?php echo $portfolio->deskripsi; ?></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="jenis" class="form-label"> Type
                            </label>
                            <input type="text" class="form-control" id="jenis" name="jenis"
                            value="<?php echo $portfolio->jenis; ?>">
                        </div>

                        <!-- Menyimpan ID familiar agar ikut terkirim saat tombol Update diklik -->
                          <!-- type="hidden" Membuat input yang tidak terlihat oleh pengguna-->
                        <input type="hidden" name="id_portfolio" value="<?php echo $portfolio->id_portfolio; ?>">

                       <button type="submit"  class="btn btn-primary">Submit</button>
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