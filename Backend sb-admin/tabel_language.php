<!-- ini adalah langkah ketiga setelah membuat form_language.php, yaitu membuat action_insert_language.php
untuk menyimpan data dari form_language.php ke database -->
<!-- disini adalah langkah utk menampilkan data dr database ke tabel_language.php -->
 <?php
include "connection.php";

$select_language = mysqli_query($koneksi, "SELECT * FROM language");

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
                        <h1 class="h3 mb-0 text-gray-800">Language</h1>
                       <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
                    </div>
<!-- keempat, tambahkan tombol Tambah utk mengerahkan ke file form_language.php -->
 <a href ="form_language.php" class="btn btn-info mb-2">ADD</a>
                    <!-- content start -->
             <!-- Membuat tabel untuk menampilkan data language -->
             <table class="table table-striped">
                <thead>
                    <tr>
                         <!-- Kolom untuk menampilkan nama bahasa -->
                        <th scope="col">Language</th>
                        <th scope="col">Flag</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead> 
                <tbody> 
                    <!-- perulangan -->
                    <?php
                    // mysqli_fetch_object menggunakan <?php $tampil->nama;
                    // mysqli_fetch_array menggunakan <?php $tampil['nama']
                    // Melakukan perulangan untuk menampilkan setiap data language dari database
                    while($tampil =mysqli_fetch_object ($select_language)):
                    ?>   
                    <tr> 
                        <!-- Menampilkan data bahasa dari database pada kolom pertama tabel -->
                        <th scope="row"><?php echo 
                        $tampil->bahasa; ?></th>

                        <td>
                            <!-- Menampilkan gambar bendera berdasarkan nama file yang diambil dari database -->
                            <img src="fotobende/<?php echo $tampil->flag; ?>" alt="" width="100">
                        </td>
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
                            <a href="delete_language.php?id_language=<?php echo 
                            $tampil->id_language;?>" class="btn btn-danger"
                            onclick="return confirm ('Confirm to delete?')">DELETE</a>

                            <!-- dari sini kita kemudian bikin file update_form_profile.php -->
                            <!-- di file tsb, kita copy data file form_profile dan di paste di
                            file "update_form_profile.php-->
                            <!-- dari sini skrng kita ke file update_form_profile.php-->
                            <a href="update_form_language.php?id_language=<?php echo $tampil->id_language;?>"
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