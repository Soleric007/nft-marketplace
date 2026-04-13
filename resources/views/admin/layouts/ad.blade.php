<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg"
    data-sidebar-image="none" data-preloader="disable">

<head>

    <meta charset="utf-8" />
    <title>Dashboard | NFT - Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="/admin/assets/images/favicon.ico">

    <!-- jsvectormap css -->
    <link href="/admin/assets/libs/jsvectormap/css/jsvectormap.min.css" rel="stylesheet" type="text/css" />

    <!--Swiper slider css-->
    <link href="/admin/assets/libs/swiper/swiper-bundle.min.css" rel="stylesheet" type="text/css" />

    <!-- Layout config Js -->
    <script src="/admin/assets/js/layout.js"></script>
    <!-- Bootstrap Css -->
    <link href="/admin/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="/admin/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="/admin/assets/css/app.min.css" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="/admin/assets/css/custom.min.css" rel="stylesheet" type="text/css" />


    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"
        integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="/admin/assets/css/icon-font-fix.css" rel="stylesheet" type="text/css" />


</head>

<body>
    @include('sweetalert::alert')


    <!-- Begin page -->
    <div id="layout-wrapper">

        @include('admin.sections.header')

        <!-- ========== App Menu ========== -->
        @include('admin.sections.sidebar')
        <!-- Left Sidebar End -->
        <!-- Vertical Overlay-->
        <div class="vertical-overlay"></div>

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->

        {{ $slot }}
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->



    <!--start back-to-top-->
    <button onclick="topFunction()" class="btn btn-danger btn-icon" id="back-to-top">
        <i class="ri-arrow-up-line"></i>
    </button>
    <!--end back-to-top-->



    <!-- JAVASCRIPT -->
    <script src="/admin/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/admin/assets/libs/simplebar/simplebar.min.js"></script>
    <script src="/admin/assets/libs/node-waves/waves.min.js"></script>
    <script src="/admin/assets/libs/feather-icons/feather.min.js"></script>
    <script src="/admin/assets/js/pages/plugins/lord-icon-2.1.0.js"></script>
    <script src="/admin/assets/js/plugins.js"></script>

    <!-- apexcharts -->
    <script src="/admin/assets/libs/apexcharts/apexcharts.min.js"></script>

    <!-- Vector map-->
    <script src="/admin/assets/libs/jsvectormap/js/jsvectormap.min.js"></script>
    <script src="/admin/assets/libs/jsvectormap/maps/world-merc.js"></script>

    <!--Swiper slider js-->
    <script src="/admin/assets/libs/swiper/swiper-bundle.min.js"></script>

    <!-- Dashboard init -->
    <script src="/admin/assets/js/pages/dashboard-ecommerce.init.js"></script>

    <!-- App js -->
    <script src="/admin/assets/js/app.js"></script>
    <!-- Include SweetAlert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        @if(session('success'))
            Swal.fire({
                title: "Success!",
                text: "{{ session('success') }}",
                icon: "success",
                confirmButtonText: "OK"
            });
        @endif

        @if(session('error'))
            Swal.fire({
                title: "Error!",
                text: "{{ session('error') }}",
                icon: "error",
                confirmButtonText: "OK"
            });
        @endif
    </script>
</body>

</html>
