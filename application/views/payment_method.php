<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <title>Metode Pembayaran</title>


    <link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/bootstrap/css/style.css'); ?>" rel="stylesheet">

</head>
<body style="margin-top: 60px; background: white;">
<!-- NAVBAR -->
<nav class="navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="<?php echo base_url('login'); ?>"><span class="glyphicon glyphicon-chevron-left"></span><span  id="registration">Metode Pembayaran</span></a>
        </div>
    </div><!--/.container -->
</nav>
<!-- NAVBAR -->
<div class="container">
    <div class="alert alert-warning" role="alert">
        <h6 class="text-center">Pembayaran harus ditransfer sebelum tanggal 14 September 2017 Pukul 10.00 WIB. Melewati batas pembayaran maka transaksi akan dibatalkan secara otomatis.</h6>
    </div>
</div>

<div class="col-lg-4 col-lg-offset-4 form-login">
    <div id="accordion" role="tablist" aria-multiselectable="true">
        <div class="card list-view-column">
            <div class="card-header" role="tab" id="bri">
                <h5 class="mb-0">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseBri" aria-expanded="true" aria-controls="collapseOne">
                        <div class="radio radio-primary">
                            <strong>Bank BRI</strong>
                        </div>
                    </a>
                </h5>
            </div>
            <div id="collapseBri" class="collapse" role="tabpanel" aria-labelledby="bri">
                <div class="card-block">
                    <div class="row" id="row-payment">
                        <div class="col-xs-8">
                            <div class="row">
                                <div class="col-xs-12">
                                    a/n <strong>Zainul Bahar, S.Kom </strong>
                                </div>
                                <div class="col-xs-12">
                                    No. Rek <strong>000982883877728</strong>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-4">
                            <div class="row">
                                <div class="col-xs-12"></div>
                                <div class="col-xs-12">
                                    <img id="img-payment" class="img-responsive center-block" src="<?php echo base_url('assets/images/bri.webp'); ?>" alt="product-img">
                                </div>
                                <div class="col-xs-12"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card list-view-column">
            <div class="card-header" role="tab" id="mandiri">
                <h5 class="mb-0">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseMandiri" aria-expanded="true" aria-controls="collapseOne">
                        <div class="radio radio-primary">
                            <strong>Bank Mandiri</strong>
                        </div>
                    </a>
                </h5>
            </div>
            <div id="collapseMandiri" class="collapse" role="tabpanel" aria-labelledby="mandiri">
                <div class="card-block">
                    <div class="row" id="row-payment">
                        <div class="col-xs-8">
                            <div class="row">
                                <div class="col-xs-12">
                                    a/n <strong>Zainul Bahar, S.Kom </strong>
                                </div>
                                <div class="col-xs-12">
                                    No. Rek <strong>000982883877728</strong>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-4">
                            <div class="row">
                                <div class="col-xs-12"></div>
                                <div class="col-xs-12">
                                    <img id="img-payment" class="img-responsive center-block" src="<?php echo base_url('assets/images/mandiri.webp'); ?>" alt="product-img">
                                </div>
                                <div class="col-xs-12"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card list-view-column">
            <div class="card-header" role="tab" id="bca">
                <h5 class="mb-0">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseBca" aria-expanded="true" aria-controls="collapseOne">
                        <div class="radio radio-primary">
                            <strong>Bank BCA</strong>
                        </div>
                    </a>
                </h5>
            </div>
            <div id="collapseBca" class="collapse" role="tabpanel" aria-labelledby="bca">
                <div class="card-block">
                    <div class="row" id="row-payment">
                        <div class="col-xs-8">
                            <div class="row">
                                <div class="col-xs-12">
                                    a/n <strong>Zainul Bahar, S.Kom </strong>
                                </div>
                                <div class="col-xs-12">
                                    No. Rek <strong>000982883877728</strong>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-4">
                            <div class="row">
                                <div class="col-xs-12"></div>
                                <div class="col-xs-12">
                                    <img id="img-payment" class="img-responsive center-block" src="<?php echo base_url('assets/images/bca.webp'); ?>" alt="product-img">
                                </div>
                                <div class="col-xs-12"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card list-view-column">
            <div class="card-header" role="tab" id="bni">
                <h5 class="mb-0">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseBni" aria-expanded="true" aria-controls="collapseOne">
                        <div class="radio radio-primary">
                            <strong>Bank BNI</strong>
                        </div>
                    </a>
                </h5>
            </div>
            <div id="collapseBni" class="collapse" role="tabpanel" aria-labelledby="bni">
                <div class="card-block">
                    <div class="row" id="row-payment">
                        <div class="col-xs-8">
                            <div class="row">
                                <div class="col-xs-12">
                                    a/n <strong>Zainul Bahar, S.Kom </strong>
                                </div>
                                <div class="col-xs-12">
                                    No. Rek <strong>000982883877728</strong>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-4">
                            <div class="row">
                                <div class="col-xs-12"></div>
                                <div class="col-xs-12">
                                    <img id="img-payment" class="img-responsive center-block" src="<?php echo base_url('assets/images/bni.webp'); ?>" alt="product-img">
                                </div>
                                <div class="col-xs-12"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12">
            <button class="btn btn-block btn-custom-green center-block">Selesai</button>
        </div>

    </div>
</div>


<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
</body>
</html>
