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
                <a href="cart.php">
                    <i class="material-icons" onclick="history.back();" >arrow_back</i>
                </a>
            </div>
                
                
            <div class="pageTitle">DETAIL BILL</div>
            <div class="right"></div>
        </div>
    <!-- * App Header -->

    <!-- Extra Header -->
        <div class="extraHeader">
            <ul class="nav nav-tabs style1" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#Tagihan" role="tab">
                        Tagihan
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#Pembayaran" role="tab">
                        Pembayaran
                    </a>
                </li>
            </ul>
        </div>
    <!-- *Extra Header -->

    <!-- App Capsule -->
        <div id="appCapsule" class="extra-header-active">
            <div class="tab-content mt-1">

                <!-- Tab Tagihan -->
                    <div class="tab-pane fade show active" id="Tagihan" role="tabpanel">
                        <div class="section full mt-1">
                            <div class="section-title">Tagihan</div>
                            <div class="wide-block pt-2 pb-2">

                                <div class="card">
                                    <ul class="listview flush transparent simple-listview">
                                        <li>Items <span class="text-muted">$ 54.20</span></li>
                                        <li>Shipping <span class="text-muted">$ 2.90</span></li>
                                        <li>Tax (10%)<span class="text-muted">$ 5.70</span></li>
                                        <li>Total<span class="text-primary font-weight-bold">$ 62.80</span></li>
                                    </ul>
                                </div>
                            
                            </div>                                                                                                              
                        </div>

                        <div class="table-responsive">
                            <table class="table table-striped">
                                <tr>                                    
                                    <td class="col-1">                                        
                                        <button type="button" class="btn btn-secondary mt-2 btn-block" data-toggle="modal" data-target="#actionSheetForm1">Void</button>                                            
                                    </td>

                                    <td class="col-9"></td>

                                    <td class="col-2">
                                        <a href="page-paylater.php" type="button" class="btn btn-danger mt-2 btn-block">Pay Later</a>
                                    </td>                                    
                                    <div class="modal fade action-sheet" id="actionSheetForm1" tabindex="-1" role="dialog">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Masukkan Alasan</h5>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="action-sheet-content">
                                                        <form>
                                                            <div class="form-group basic">
                                                                <div class="input-wrapper">
                                                                    <label class="label" for="name3">Alasan :</label>
                                                                    <input type="text" class="form-control" id="name3"
                                                                        placeholder="Tulis disini ....">
                                                                    <i class="clear-input">
                                                                        <ion-icon name="close-circle"></ion-icon>
                                                                    </i>
                                                                </div>
                                                            </div>                                                            
                                                            <div class="form-group basic">
                                                                <button type="button" class="btn btn-primary btn-block btn-lg"
                                                                    data-dismiss="modal">Confirm</buttom>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </tr>
                            </table>
                        </div> 

                        <!-- Discount Action Sheet -->
                            <div class="section">
                                <a href="#" class="btn btn-sm btn-text-secondary btn-block" data-toggle="modal"
                                    data-target="#actionSheetDiscount">
                                    <ion-icon name="qr-code-outline"></ion-icon>
                                    Have a discount code?
                                </a>
                            </div>

                            <div class="modal fade action-sheet" id="actionSheetDiscount" tabindex="-1" role="dialog">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Enter Discount Code</h5>
                                        </div>
                                        <div class="modal-body">
                                            <div class="action-sheet-content">
                                                <form>
                                                    <div class="form-group basic">
                                                        <div class="input-wrapper">
                                                            <label class="label" for="discount1">Discount Code</label>
                                                            <input type="text" class="form-control" id="discount1"
                                                                placeholder="Enter your discount code">
                                                            <i class="clear-input">
                                                                <ion-icon name="close-circle"></ion-icon>
                                                            </i>
                                                        </div>
                                                    </div>

                                                    <div class="form-group basic">
                                                        <button type="button" class="btn btn-primary btn-block" data-dismiss="modal">Apply
                                                            Discount</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <!-- * Discount Action Sheet -->

                    </div>
                <!-- * Tab Tagihan -->

                <!-- Tab Pembayaran -->
                    <div class="tab-pane fade" id="Pembayaran" role="tabpanel">

                        <div class="section full mt-1">
                            <div class="section-title">Pembayaran</div>
                            <div class="wide-block pt-2 pb-2">

                            </div>
                        </div>        
                        
                        <!-- Button -->
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <tr>
                                        <td class="col-8">
                                            <button type="button" class="btn btn-danger mt-2 btn-block" data-toggle="modal" data-target="#ModalBasic">Pilih Pembayaran</button>
                                        </td>
                                        <td class="col-4">                                        
                                            <button type="button" class="btn btn-secondary mt-2 btn-block" data-toggle="modal" data-target="#actionSheetForm">Cash</button>                                            
                                        </td>
                                        <div class="modal fade action-sheet" id="actionSheetForm" tabindex="-1" role="dialog">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Pembayaran Cash</h5>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="action-sheet-content">
                                                            <form>
                                                                <div class="form-group basic">
                                                                    <div class="input-wrapper">
                                                                        <label class="label" for="name3">Masukkan Nominal</label>
                                                                        <input type="text" class="form-control" id="name3"
                                                                            placeholder="Rp xxx.xxx.xxx">
                                                                        <i class="clear-input">
                                                                            <ion-icon name="close-circle"></ion-icon>
                                                                        </i>
                                                                    </div>
                                                                </div>                                                            
                                                                <div class="form-group basic">
                                                                    <button type="button" class="btn btn-secondary btn-block btn-lg"
                                                                        data-dismiss="modal">Confirm</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </tr>

                                </table>
                            </div> 
                        <!-- *Button  -->
                                  

                        <!-- Modal Pembayaran -->
                            <div class="modal fade modalbox" id="ModalBasic" data-backdrop="static" tabindex="-1" role="dialog">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Jenis Pembayaran</h5>
                                            <a href="javascript:;" data-dismiss="modal">Close</a>
                                        </div>

                                        <div class="modal-body">
                                            <p>
                                                Masukkan Nominal :
                                            </p>

                                            <!-- Table pembayaran -->
                                                <div class="table-responsive">
                                                    <table class="table table-striped">                                            
                                                        <tr>
                                                            <td class="col-2">
                                                                <div class="form-group">
                                                                    <input class="custom-select custom-select-sm mb-1 mt-1 ml-2 mr-1 " name="bayar" type="price" placeholder="Rp xxx.xxx.xxx"> 
                                                                </div>
                                                            </td>
                                                            <td class="col-3">
                                                                <select name="jenis_pembayaran" class="custom-select custom-select-sm mb-1 mt-1 ml-1">
                                                                    <option value=""></option>
                                                                    <option value="cash">Cash</option>
                                                                    <option value="grab">Grab Pay</option>
                                                                    <option value="ovo">Ovo</option>
                                                                    <option value="gopay">Go-pay</option>
                                                                    <option value="gobiz">Go Biz</option>
                                                                    <option value="bca">BCA</option>
                                                                    <option value="mandiri">Mandiri</option>
                                                                    <option value="bri">BRI</option>
                                                                    <option value="bca">BCA</option>
                                                                    <option value="dana">Dana</option>
                                                                    <option value="shopee">Shopee pay</option>
                                                                </select>                                                                                    
                                                            </td>                                                            
                                                            <td>
                                                                <button type="submit" class="btn btn-success mt-1" name="confirm_pembayaran">Confirm</button>
                                                            </td>
                                                        </tr>                                                    
                                                    </table>
                                                </div>
                                            <!-- *Table pembayaran -->

                                            <div class="section-title">Hasil :</div>
                                            
                                        </div>
                                    </div>
                                </div>

                            </div>
                        <!-- * Modal Pembayaran -->

                    <div class="tab-pane fade show active" id="Tagihan" role="tabpanel">

                        <div class="section full mt-1">
                            <div class="section-title">Transaksi Akhir</div>
                            <div class="wide-block pt-2 pb-2"></div>
                        </div>

                    </div>

                    <div class="appBottomMenu">
                        <form action="detail-bill.html" method="post" target="_blank">
                            
                            <div class="section mb-2">
                                <button type="submit" class="btn btn-success btn-block btn-lg">BAYAR</button>
                            </div>
                        </form>
                    </div>
                <!-- * Tab Pembayaran -->

            </div>
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