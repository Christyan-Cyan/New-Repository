<!doctype html>
<html lang="en">


<!-- Mirrored from mobilekit.bragherstudio.com/view7/page-blank.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 03 Oct 2020 00:57:38 GMT -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="theme-color" content="#000000">
    <title>PASAR MAPAN II</title>
    <meta name="description" content="Mobilekit HTML Mobile UI Kit">
    <meta name="keywords" content="bootstrap 4, mobile template, cordova, phonegap, mobile, html" />
    <link rel="icon" type="image/png" href="assets/img/favicon.png" sizes="32x32">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/icon/192x192.png">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="manifest" href="__manifest.json">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

</head>

<body>

    <!-- loader -->
        <div id="loader">
            <div class="spinner-border text-primary" role="status"></div>
        </div>
    <!-- * loader -->

    <!-- App Header -->
        <div class="appHeader bg-danger text-light">
            <div class="left">
                <a href="page-blank.php">
                    <i class="material-icons" onclick="history.back();" >arrow_back</i>
                </a>
            </div>
                
            <div class="pageTitle">LAPORAN PENJUALAN</div>
            <div class="right"></div>
        </div>
    <!-- * App Header -->

    <!-- App Capsule -->
        <div id="appCapsule">

            <!-- Date -->
                <div class="section full mt-4 ml-2">
                    <div class="col -12" >
                        <input type="date">
                        <button type="button" class="btn btn-danger">Tampilkan</button>
                    </div>
                </div>        
            <!-- *Date -->
                    
            <!-- Table -->
                <div class="section full mt-4 mb-2">
                    <div class="wide-block p-0">
                        <div class="table-responsive">
                            <table class="table table-Stripped">

                                <!-- Head Table -->
                                    <thead align="center">
                                        <tr>
                                            <th scope="col" class="col-1">No.</th>
                                            <th scope="col" class="col-3">Tanggal</th>
                                            <th scope="col" class="col-2">Bill</th>
                                            <th scope="col" class="col-2">Total</th>
                                            <th scope="col" class="col-1"></th>
                                        
                                        </tr>
                                    </thead>
                                <!-- *Head Table -->

                                <!-- Body Table -->
                                    <tbody align="center">
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Dicky</td>
                                            <td>Otto</td>
                                            <td>@mdo</td>
                                            <td>
                                                <button type="button" class="btn btn-secondary btn-danger btn-sm" data-toggle="modal" data-target="#DialogBasic">Cetak</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>Jacob</td>
                                            <td>Thornton</td>
                                            <td>@fat</td>
                                            <td>
                                                <button type="button" class="btn btn-secondary btn-danger btn-sm" data-toggle="modal" data-target="#DialogBasic">Cetak</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>Larry</td>
                                            <td>the Bird</td>
                                            <td>@twitter</td>
                                            <td>
                                                <button type="button" class="btn btn-secondary btn-danger btn-sm" data-toggle="modal" data-target="#DialogBasic">Cetak</button>
                                            </td>
                                        </tr>
                                    </tbody>
                                <!-- *Body Table -->
                                
                            </table>
                        </div>
                    </div>
                </div>
            <!-- *Table -->

            <!-- Pop UP -->
                <div class="modal fade dialogbox" id="DialogBasic" data-backdrop="static" tabindex="-1" role="dialog">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Confirm</h5>
                            </div>
                            <div class="modal-body">
                                Cetak Laporan Harian ?
                            </div>
                            <div class="modal-footer">
                                <div class="btn-inline">
                                    <a href="#" class="btn btn-text-secondary" data-dismiss="modal">CLOSE</a>
                                    <a href="#" class="btn btn-text-primary" data-dismiss="modal">OK</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <!-- * Pop UP -->

        </div>
    <!-- * App Capsule -->


    <!-- ///////////// Js Files ////////////////////  -->
    <!-- Jquery -->
    <script src="assets/js/lib/jquery-3.4.1.min.js"></script>
    <!-- Bootstrap-->
    <script src="assets/js/lib/popper.min.js"></script>
    <script src="assets/js/lib/bootstrap.min.js"></script>
    <!-- Ionicons -->
    <script type="module" src="../../unpkg.com/ionicons%405.0.0/dist/ionicons/ionicons.js"></script>
    <!-- Owl Carousel -->
    <script src="assets/js/plugins/owl-carousel/owl.carousel.min.js"></script>
    <!-- jQuery Circle Progress -->
    <script src="assets/js/plugins/jquery-circle-progress/circle-progress.min.js"></script>
    <!-- Base Js File -->
    <script src="assets/js/base.js"></script>


</body>


<!-- Mirrored from mobilekit.bragherstudio.com/view7/page-blank.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 03 Oct 2020 00:57:38 GMT -->
</html>