<!DOCTYPE html>
<html lang="en">

<head>
    <title><?= $title ? $title : 'Judul Page' ?> | Eops</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <meta name="keywords" content="bootstrap, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive" />
    <meta name="author" content="Codedthemes" />
    <!-- Favicon icon -->
    <link rel="icon" href="<?= base_url() ?>assets/images/favicon.ico" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
    <!-- waves.css -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/pages/waves/css/waves.min.css" type="text/css" media="all">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/bootstrap/css/bootstrap.min.css">
    <!-- waves.css -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/pages/waves/css/waves.min.css" type="text/css" media="all">
    <!-- themify icon -->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/icon/themify-icons/themify-icons.css">
    <!-- font-awesome-n -->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/font-awesome-n.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/font-awesome.min.css">
    <!-- scrollbar.css -->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/jquery.mCustomScrollbar.css">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/mycss.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/daterangepicker.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/rowreorder/1.2.8/css/rowReorder.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.3.0/css/responsive.dataTables.min.css">
</head>

<body>
    <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="loader-track">
            <div class="preloader-wrapper">
                <div class="spinner-layer spinner-blue">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
                <div class="spinner-layer spinner-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>

                <div class="spinner-layer spinner-yellow">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>

                <div class="spinner-layer spinner-green">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pre-loader end -->
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">
            <?php $this->load->view('layout_admin/navbar') ?>

            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    <?php $this->load->view('layout_admin/sidebar') ?>

                    <!-- sweetalert -->
                    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash') ?>"></div>
                    <?php $this->load->view($content) ?>

                </div>
            </div>
        </div>
    </div>
    <!-- Required Jquery -->
    <script type="text/javascript" src="<?= base_url() ?>assets/js/jquery/jquery.min.js "></script>
    <script type="text/javascript" src="<?= base_url() ?>assets/js/jquery-ui/jquery-ui.min.js "></script>
    <script type="text/javascript" src="<?= base_url() ?>assets/js/popper.js/popper.min.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>assets/js/bootstrap/js/bootstrap.min.js "></script>
    <!-- waves js -->
    <script src="<?= base_url() ?>assets/pages/waves/js/waves.min.js"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="<?= base_url() ?>assets/js/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- slimscroll js -->
    <script src="<?= base_url() ?>assets/js/jquery.mCustomScrollbar.concat.min.js "></script>

    <!-- menu js -->
    <script src="<?= base_url() ?>assets/js/pcoded.min.js"></script>
    <script src="<?= base_url() ?>assets/js/vertical/vertical-layout.min.js "></script>

    <script type="text/javascript" src="<?= base_url() ?>assets/js/script.js "></script>

    <script src="<?= base_url() ?>assets/js/sweetalert2.all.min.js"></script>
    <script src="<?= base_url() ?>assets/js/bootstrap-datepicker.min.js"></script>
    <script src="<?= base_url() ?>assets/js/daterangepicker.js"></script>
    <script src="<?= base_url() ?>assets/js/dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/rowreorder/1.2.8/js/dataTables.rowReorder.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.3.0/js/dataTables.responsive.min.js"></script>
    <script src="<?= base_url() ?>assets/js/myScript.js"></script>

    <script>
        // $(".input-group.date").datepicker({autoclose: true, todayHighlight: true});
        $(".years").datepicker({
            format: "yyyy",
            viewMode: "years",
            minViewMode: "years",
            autoclose: true,
            todayHighlight: true
        });
        $(".input-group.date").datepicker({
            format: "yyyy-mm-dd",
            autoclose: true,
            todayHighlight: true
        });
    </script>
</body>

</html>