<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Edit Data Admin SI ALumni JTI</title>
        <link href="css/grafik.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="index.html">ADMIN SI ALUMNI</a>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
                    </div>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ml-auto ml-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        
                        <a class="dropdown-item" href="index.html">Logout</a>
                    </div>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                        <a class="nav-link" href="dashboard_admin.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <a class="nav-link" href="alumni_page.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-database"></i></div>
                               Data Alumni
                            </a>
                            <a class="nav-link" href="hasilSurvei_page.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-poll-h"></i></div>
                                Hasil Survei
                            </a>
                            
                            <a class="nav-link" href="admin_page.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-users-cog"></i></div>
                                Data Admin
                            </a>
                            <a class="nav-link" href="review_page.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Review Alumni
                            </a>
                        </div>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Edit Data Alumni</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Edit Data Alumni</li>
                        </ol>
                    </div>
                </main>
                <div class="container">
                <?php
                    include "koneksi.php";
                    $id = $_GET['id'];
                    $query_mysql = mysqli_query($conn, "SELECT * FROM alumni WHERE idAlumni='$id'");
                    while($data = mysqli_fetch_array($query_mysql)){
                    ?>
                    <form action="">
                        <fieldset disabled>
                        <div class="mb-3">
                        <table boder="none" cellpadding="10">
                        <tr>
                                <td><label  class="form-label">Username</label></td>
                                <td><input type="text" id="disabledTextInput" class="form-control" placeholder="<?php echo $data["username_al"]; ?>"style="width:250px;"></td>
                                <td><label  class="form-label">Password</label></td>
                                <td><input type="text"  id="disabledTextInput" class="form-control" placeholder="<?php echo $data["password_al"]; ?> "style="width:250px;"></td>
                            </tr>
                            <tr>
                                <td><label  class="form-label">Nama</label></td>
                                <td><input type="text"  id="disabledTextInput" class="form-control" placeholder="<?php echo $data["nama_al"]; ?>  "style="width:250px;"></td>
                                <td><label  class="form-label">NIK</label></td>
                                <td><input type="text" id="disabledTextInput" class="form-control" placeholder="<?php echo $data["nik_al"]; ?> "style="width:250px;"></td>
                            </tr>
                            <tr>
                                <td><label class="form-label">Tempat Lahir</label></td>
                                <td><input type="text" id="disabledTextInput" class="form-control" placeholder="<?php echo $data["tempat_lahir"]; ?> "style="width:250px;"></td>
                                <td><label class="form-label">Tanggal Lahir</label></td>
                                <td><input type="text" id="disabledTextInput" class="form-control" placeholder="<?php echo $data["tgl_lahir"]; ?>  "style="width:250px;"></td>
                            </tr>
                            <tr>
                                <td><label class="form-label">Agama</label></td>
                                <td><input type="text" id="disabledTextInput" class="form-control" placeholder="<?php echo $data["agama"]; ?>  "style="width:250px;"></td>
                                <td><label class="form-label">No Handphone</label></td>
                                <td><input type="text"id="disabledTextInput" class="form-control" placeholder="<?php echo $data["no_hp"]; ?>   "style="width:250px;"></td>
                            </tr>
                            <tr>
                                <td><label class="form-label">Prodi</label></td>
                                <td><input type="text"  id="disabledTextInput" class="form-control" placeholder="<?php echo $data["prodi"]; ?> "style="width:250px;"></td>
                                <td><label class="form-label">Tahun Lulus</label></td>
                                <td><input type="text" id="disabledTextInput" class="form-control" placeholder="<?php echo $data["tahun_lulus"]; ?> "style="width:250px;"></td>
                            </tr>
                            <tr>
                                <td><label class="form-label">Alamat</label></td>
                                <td><input type="text" id="disabledTextInput" class="form-control" placeholder="<?php echo $data["alamat"]; ?>  "style="width:250px;"></td>
                                <td><label class="form-label">Jenis Kelamin</label></td>
                                <td><input type="text" id="disabledTextInput" class="form-control" placeholder="<?php echo $data["jk"]; ?>  "style="width:250px;"></td>
                            </tr>
                            <tr>
                                <td><label class="form-label">Profesi</label></td>
                                <td><input type="text" id="disabledTextInput" class="form-control" placeholder="<?php echo $data["profesi"]; ?> "style="width:250px;"></td>
                                </tr>
                        </table>
                    </fieldset>
                    </form>
                    <?php } ?>
                    </div>
                    <?php
                    include "koneksi.php";
                    $id = $_GET['id'];
                    $query_mysql = mysqli_query($conn, "SELECT * FROM alumni WHERE idAlumni='$id'");
                    while($data = mysqli_fetch_array($query_mysql)){
                    ?>
                <form action="update_alumni.php" method="POST">
                <div class="container" style=" box-shadow: 1px 1px 1px 1px;">
                    <div class="text-center">
                        <br/>
                        <h4>EDIT DATA ALUMNI</h4>
                        <br/>
                    </div>
                    <table boder="none" cellpadding="10">
                            <tr>
                                <td><label  class="form-label">Username</label></td>
                                <td><input type="text" class="form-control" name= "username" value="<?php echo $data["username_al"]; ?>"style="width:250px;"></td>
                                <td><label  class="form-label">Password</label></td>
                                <td><input type="text" class="form-control" name= "pass" value="<?php echo $data["password_al"]; ?>  "style="width:250px;"></td>
                            </tr>
                            <tr>
                                <td><label  class="form-label">Nama</label></td>
                                <td><input type="text"   class="form-control" name= "name" value="<?php echo $data["nama_al"]; ?> "style="width:250px;"></td>
                                <td><label  class="form-label">NIK</label></td>
                                <td><input type="text" class="form-control" name= "nik" value="<?php echo $data["nik_al"]; ?> "style="width:250px;"></td>
                            </tr>
                            <tr>
                                <td><label class="form-label">Tempat Lahir</label></td>
                                <td><input type="text" class="form-control" name= "tempatlahir" value="<?php echo $data["tempat_lahir"]; ?> "style="width:250px;"></td>
                                <td><label class="form-label">Tanggal Lahir</label></td>
                                <td><input type="text" class="form-control" name= "tanggallahir" value="<?php echo $data["tgl_lahir"]; ?>  "style="width:250px;"></td>
                            </tr>
                            <tr>
                                <td><label class="form-label">Agama</label></td>
                                <td><input type="text"  class="form-control" name= "agama" value="<?php echo $data["agama"]; ?> "style="width:250px;"></td>
                                <td><label class="form-label">No Handphone</label></td>
                                <td><input type="text"   class="form-control" name= "nohp" value="<?php echo $data["no_hp"]; ?>"style="width:250px;"></td>
                            </tr>
                            <tr>
                                <td><label class="form-label">Prodi</label></td>
                                <td><input type="text" class="form-control" name= "prodi" value="<?php echo $data["prodi"]; ?> "style="width:250px;"></td>
                                <td><label class="form-label">Tahun Lulus</label></td>
                                <td><input type="text" class="form-control" name= "tahunlulus" value="<?php echo $data["tahun_lulus"]; ?> "style="width:250px;"></td>
                            </tr>
                            <tr>
                                <td><label class="form-label">Alamat</label></td>
                                <td><input type="text"  class="form-control" name= "alamat" value="<?php echo $data["alamat"]; ?>  "style="width:250px;"></td>
                                <td><label class="form-label">Jenis Kelamin</label></td>
                                <td><input type="text" class="form-control" name= "jk" value="<?php echo $data["jk"]; ?>  "style="width:250px;"></td>
                            </tr>
                            <tr>
                                <td><label class="form-label">Profesi</label></td>
                                <td><input type="text" class="form-control" name= "profesi" value="<?php echo $data["profesi"]; ?> "style="width:250px;"></td>
                                </tr>
                            <tr>
                            <tr><td><input type="hidden" name="id" value="<?php echo $data['idAlumni'] ?>"></td></tr>
                            <tr>
                            <td>
                            <button type="submit" class="btn btn-primary">Edit Data</button>
                            </td>
                            </tr>
                        </table>

                    </div>
                </form>
                <?php } ?>


                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2020</div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/datatables-demo.js"></script>
    </body>
</html>
