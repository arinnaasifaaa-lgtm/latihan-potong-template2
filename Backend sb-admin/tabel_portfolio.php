<!-- inui adalah langkah ketiga stlh dr file action_insert_portfolio.php, yaitu menampilkan data dr database ke tabel_portfolio.php -->
<!-- disini adalah langkah utk menampilkan data dr database ke tampilan versi web -->
<!-- pertama2 panggil koneksi database dgn include "connection.php" -->

<?php
include "connection.php";

// kedua, buat perintah mysqli_query utk menampilkan data ke database tk menampilkan data ke tabel_portfolio.php
$select_portfolio = mysqli_query($koneksi, "SELECT * FROM portfolio ORDER BY id_portfolio DESC");
// ketiga buat perulangan di dalam <tbody> di bawah ini

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
<!-- keempat, tambahkan tombol Tambah utk mengerahkan ke file form_portfolio.php -->
 <a href ="form_portfolio.php" class="btn btn-info mb-2">ADD</a>
                    <!-- content start -->

             <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Portfolio</th>
                        <th scope="col">Image</th>
                        <th scope="col">Link</th>
                        <th scope="col">Description</th>
                        <th scope="col">Type</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead> 
                <tbody> 
                    <!-- perulangan -->
                    <?php
                    // mysqli_fetch_object menggunakan <?php $tampil->nama;
                    // mysqli_fetch_array menggunakan <?php $tampil['nama']
                    while($tampil =mysqli_fetch_object ($select_portfolio)):
                    ?>   
                    <tr> 
                        <th scope="row"><?php echo 
                        $tampil->judul_portfolio; ?></th>

                        <td>
                            <img src="foto/<?php echo $tampil->img; ?>" alt="" width="300">
                        <td>
                        <td><?php echo $tampil->link; ?></td>
                        <td><?php echo $tampil->deskripsi; ?></td>
                        <td><?php echo $tampil->jenis; ?></td>

                        <td>
                            <!-- step two: -->
                            <!-- DELETE_PROFILE.php?
                            membutuhkan id_profile yg didapatkan dari
                            $tampil->id_profile di atas --> 
                            <!-- step three: --> 
                            <!-- onclick="return comfirm ('confirm to delete')" adalah
                            utk konfirmasi hapus ketika click tombol DELETE --> 
                            <!-- step four: create delete_profile.php --> 
                            <!-- step five: let's go to file delete_profile.php --> 
                            <a href="delete_portfolio.php?id_portfolio=<?php echo 
                            $tampil->id_portfolio;?>" class="btn btn-danger"
                            onclick="return confirm ('Confirm to delete?')">DELETE</a>

                            <!-- dari sini kita kemudian bikin file update_form_profile.php -->
                            <!-- di file tsb, kita copy data file form_profile dan di paste di
                            file "update_form_profile.php-->
                            <!-- dari sini skrng kita ke file update_form_profile.php-->
                            <a href="update_form_portfolio.php?id_portfolio=<?php echo $tampil->id_portfolio;?>"
                            class="btn btn-success" >Update</a> 
                        </td>
                    </tr>
   <?php endwhile; ?>
                 </tbody> 
              </table>
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