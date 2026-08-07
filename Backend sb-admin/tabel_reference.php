<?php
include "connection.php";

$select_reference = mysqli_query($koneksi, "SELECT*FROM reference ORDER BY id_reference DESC");
?>

<?php include "header.php" ?>
<?php
session_start();

if (!isset($_SESSION['status']) || $_SESSION['status'] != "login") {
    header("Location: login.php?pesan=belum_login");
    exit();
}
?>

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
                        <h1 class="h3 mb-0 text-gray-800">Reference</h1>
                       <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
                    </div>
<!-- keempat, tambahkan tombol Tambah utk mengerahkan ke file form_profile.php -->
<a href ="form_reference.php" class="btn btn-info mb-2">ADD</a> 
                    <!-- content start -->

             <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Designation</th>
                        <th scope="col">Company</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Email</th>  
                      
                        <th scope="col">Action</th>
                    </tr>
                </thead> 
                <tbody> 
                    <!-- perulangan -->
                    <?php
                    // mysqli_fetch_object menggunakan <?php $tampil->nama;
                    // mysqli_fetch_array menggunakan <?php $tampil['nama']
                    while($tampil =mysqli_fetch_object ($select_reference)):
                    ?>   
                    <tr> 
                        <th scope="row"><?php echo 
                        $tampil->nama; ?></th>
                        <td><?php echo $tampil->jabatan; ?></td>
                        <td><?php echo $tampil->perusahaan; ?></td>
                        <td><?php echo $tampil->phone; ?></td>
                        <td><?php echo $tampil->email; ?></td>

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
                            <a href="delete_reference.php?id_reference=<?php echo 
                            $tampil->id_reference;?>" class="btn btn-danger"
                            onclick="return confirm ('Confirm to delete?')">DELETE</a>


                            <!-- dari sini kita kemudian bikin file update_form_profile.php -->
                            <!-- di file tsb, kita copy data file form_profile dan di paste di
                            file "update_form_profile.php-->
                            <!-- dari sini skrng kita ke file update_form_profile.php-->
                            <a href="update_form_reference.php?id_reference=<?php echo $tampil->id_reference;?>"
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