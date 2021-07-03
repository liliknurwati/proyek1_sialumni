<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Hasil Survei SI ALumni JTI</title>
        <link href="css/hasilSurvei.css" rel="stylesheet" />
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
            <?php
                            include "koneksi.php";
                            $id = $_GET['id'];
                            $query = mysqli_query($conn,"SELECT a.*, j.*, t.* FROM jawaban j JOIN alumni a ON j.idAl = a.idAlumni JOIN t_pertanyaan t ON j.idPert = t.id WHERE j.idAl = '$id' AND j.idPert = 1 ORDER BY j.idPert");
                            ?>

                            <?php if(mysqli_num_rows($query)>0){ ?>
                                    <?php
                                        $no = 1;
                                        while($data = mysqli_fetch_array($query)){
                                    ?>
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Hasil Survei <?php echo $data['nama_al']; ?></h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Hasil Survei <?php echo $data['nama_al']; ?></li>
                        </ol>
                        
                    </div>
                    <?php $no++; } ?>
                                <?php } ?>
                        <div class="container">
                        <table class="table">
                        <thead class="table-dark">
                            <tr>
                                <th width = 5%>No. </th>
                                <th width = 55%>Pertanyaan</th>
                                <th width = 20%>Jawaban</th>
                                
                            </tr>
                        </thead>
                        <?php
                            include "koneksi.php";
                            $id = $_GET['id'];
                            $query = mysqli_query($conn,"SELECT a.*, j.*, t.* FROM jawaban j JOIN alumni a ON j.idAl = a.idAlumni JOIN t_pertanyaan t ON j.idPert = t.id WHERE j.idAl = '$id' ORDER BY j.idPert");
                            ?>

                            <?php if(mysqli_num_rows($query)>0){ ?>
                                    <?php
                                        $no = 1;
                                        while($data = mysqli_fetch_array($query)){
                                    ?>
                        <tbody>
                            <tr>
                                <td width = 5%><?php echo $no ?></td>
                                <td width = 55%><?php echo $data['pertanyaan']; ?></td>
                                <td width = 20%><?php echo $data['jawaban']; ?></td>
                                
                            </tr>
                            <?php $no++; } ?>
                                <?php } ?>
                        </tbody>
                        </table>
                        </div>
                    
                </main>
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