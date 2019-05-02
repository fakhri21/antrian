<?php
$uri_one = $this->uri->segment(1);
$uri_two = $this->uri->segment(2);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="">

    <title>DocApp <?php echo" - ". $title;?></title>

    <!-- VENDOR CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/vendor/font-awesome/css/font-awesome.min.css">

    <link rel="stylesheet" href="<?php echo base_url() ?>assets/vendor/chartist/css/chartist.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/vendor/toastr/toastr.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/vendor/jquery-datatable/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/vendor/jquery-datatable/fixedeader/dataTables.fixedcolumns.bootstrap4.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/vendor/jquery-datatable/fixedeader/dataTables.fixedheader.bootstrap4.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/vendor/sweetalert/sweetalert.css"/>
    <!-- MAIN CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/main.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/color_skins.css">
    <!--<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/datatables.min.css">-->

    <link rel="stylesheet" href="<?php echo base_url() ?>assets/vendor/fullcalendar/fullcalendar.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/inbox.css">
    <?php if($this->uri->segment(1)=="antrian" || $this->uri->segment(2)=="locked"){ ?>
        <style type="text/css">
            .auth-main:after{
                content:'';
                position:absolute;
                right:0;
                top:0;
                width:100%;
                height:100%;
                z-index:-2;
                background:url(<?php echo base_url() ?>assets/images/auth_bg.jpg) no-repeat top left fixed;
            }
        </style>
    <?php } ?>
  </head>
        <body <?php if($uri_one!='antrian' && $uri_one!='failure') { ?>class="theme-cyan"<?php } ?> id="body" <?php if($uri_one=="antrian"){?>onload="JavaScript:AutoRefresh(2000);"<?php } ?>>
    <div id="wrapper">
    <?php
    if($uri_one !='antrian' && $uri_one !='failure' && $title !='404 Error Not Found'){
    require_once(APPPATH.'views/component/topbar.php'); ?>

    <div id="left-sidebar" class="sidebar">
        <div class="sidebar-scroll">
            <?php require_once(APPPATH.'views/component/user_account.php'); ?>
            <div class="tab-content p-l-0 p-r-0" style="padding-top:0;">
                <div class="tab-pane active" >
                    <nav class="sidebar-nav">
                    <?php require_once(APPPATH.'views/component/navbar.php'); ?>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <?php } echo $_config_content; ?>
    </div>

	<!-- Javascript -->
    <script src='https://code.responsivevoice.org/responsivevoice.js'></script>
    <script src="<?php echo base_url() ?>assets/js/jquery.js"></script>
    <script src="<?php echo base_url() ?>assets/bundles/libscripts.bundle.js"></script>
    <script src="<?php echo base_url() ?>assets/bundles/datatablescripts.bundle.js"></script>
    <!--<script src="<?php echo base_url() ?>assets/vendor/jquery-datatable/buttons/dataTables.buttons.min.js"></script>
    <script src="<?php echo base_url() ?>assets/vendor/jquery-datatable/buttons/buttons.bootstrap4.min.js"></script>
    <script src="<?php echo base_url() ?>assets/vendor/jquery-datatable/buttons/buttons.colVis.min.js"></script>
    <script src="<?php echo base_url() ?>assets/vendor/jquery-datatable/buttons/buttons.html5.min.js"></script>
    <script src="<?php echo base_url() ?>assets/vendor/jquery-datatable/buttons/buttons.print.min.js"></script>-->

    <script src="<?php echo base_url() ?>assets/vendor/sweetalert/sweetalert.min.js"></script>
    <script src="<?php echo base_url() ?>assets/bundles/vendorscripts.bundle.js"></script>

    <!--<script src="<?php echo base_url() ?>assets/bundles/chartist.bundle.js"></script>
    <script src="<?php echo base_url() ?>assets/bundles/knob.bundle.js"></script> 
    <script src="<?php echo base_url() ?>assets/bundles/flotscripts.bundle.js"></script> 
    <script src="<?php echo base_url() ?>assets/vendor/toastr/toastr.js"></script>
    <script src="<?php echo base_url() ?>assets/vendor/flot-charts/jquery.flot.selection.js"></script>
    <script src="<?php echo base_url() ?>assets/js/pages/charts/morris.js"></script>
    <script src="<?php echo base_url() ?>assets/bundles/morrisscripts.bundle.js"></script>-->

    <script src="<?php echo base_url() ?>assets/bundles/mainscripts.bundle.js"></script>
    <!--<script src="<?php echo base_url() ?>assets/js/pages/tables/jquery-datatable.js"></script>-->

    <script src="<?php echo base_url() ?>assets/bundles/fullcalendarscripts.bundle.js"></script><!--/ calender javascripts --> 
    <script src="<?php echo base_url() ?>assets/vendor/fullcalendar/fullcalendar.js"></script><!--/ calender javascripts --> 

    <?php require_once(APPPATH.'views/component/message.php');
    require_once(APPPATH.'views/js/custom.php');
    
    require_once(APPPATH.'views/js/'.$uri_one.'.php');
    ?>
    
  </body>
</html>