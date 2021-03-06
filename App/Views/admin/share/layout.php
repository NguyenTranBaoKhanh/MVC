<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= PUBLIC_URL . "/admin" ?>/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="<?= PUBLIC_URL . "/admin" ?>/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?= PUBLIC_URL . "/admin" ?>/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="<?= PUBLIC_URL . "/admin" ?>/plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= PUBLIC_URL . "/admin" ?>/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="<?= PUBLIC_URL . "/admin" ?>/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="<?= PUBLIC_URL . "/admin" ?>/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="<?= PUBLIC_URL . "/admin" ?>/plugins/summernote/summernote-bs4.min.css">



    <!-- DataTables -->
    <link rel="stylesheet" href="<?= PUBLIC_URL . "/admin" ?>/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= PUBLIC_URL . "/admin" ?>/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= PUBLIC_URL . "/admin" ?>/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
</head>

<body>

    <?php require_once(VIEW . DS . "admin/share/sidebar.php") ?>

    <?php require_once(VIEW . DS . "admin/share/header.php") ?>

    <div class="content-wrapper">
        <?php require_once(VIEW .  $view . ".php") ?>
    </div>

    <?php require_once(VIEW . DS . "admin/share/footer.php") ?>



    <!-- jQuery -->
    <script src="<?= PUBLIC_URL . "/admin" ?>/plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="<?= PUBLIC_URL . "/admin" ?>/plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?= PUBLIC_URL . "/admin" ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- overlayScrollbars -->
    <script src="<?= PUBLIC_URL . "/admin" ?>/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?= PUBLIC_URL . "/admin" ?>/dist/js/adminlte.js"></script>


    <!-- DataTables  & Plugins -->
    <script src="<?= PUBLIC_URL . "/admin" ?>/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?= PUBLIC_URL . "/admin" ?>/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="<?= PUBLIC_URL . "/admin" ?>/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?= PUBLIC_URL . "/admin" ?>/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="<?= PUBLIC_URL . "/admin" ?>/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="<?= PUBLIC_URL . "/admin" ?>/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="<?= PUBLIC_URL . "/admin" ?>/plugins/jszip/jszip.min.js"></script>
    <script src="<?= PUBLIC_URL . "/admin" ?>/plugins/pdfmake/pdfmake.min.js"></script>
    <script src="<?= PUBLIC_URL . "/admin" ?>/plugins/pdfmake/vfs_fonts.js"></script>
    <script src="<?= PUBLIC_URL . "/admin" ?>/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="<?= PUBLIC_URL . "/admin" ?>/plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="<?= PUBLIC_URL . "/admin" ?>/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

    <!-- Page specific script -->
    <script>
        $(function() {
            $('#myTable').DataTable({
                "paging": true,//phan trang
                "lengthChange": true,//do dai trang
                "searching": true,//search input
                "ordering": true,//sap xep
                "info": true,
                "autoWidth": false,
                "responsive": true,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#myTable_wrapper .col-md-6:eq(0)');
        });
    </script>
</body>

</html>