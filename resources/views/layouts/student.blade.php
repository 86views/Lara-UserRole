<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>Zinzer - Responsive Bootstrap 4 Admin Dashboard</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="ThemeDesign" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
       

        <link rel="icon" type="image/png" href="{{ asset('zinzer') }}/images/favicon.ico">


        <link href="{{ asset('zinzer') }}/plugins/ sweet-alert2/sweetalert2.css" 
        rel="stylesheet" type="text/css" />

        <link href="{{ asset('zinzer') }}/plugins/RWD-Table-Patterns/dist/css/rwd-table.min.css" 
        rel="stylesheet" type="text/css"  media="screen">
        
        <link href="{{ asset('zinzer') }}/plugins/datatables/dataTables.bootstrap4.min.css" 
        rel="stylesheet" type="text/css" />


        <link href="{{ asset('zinzer') }}/plugins/datatables/buttons.bootstrap4.min.css"
         rel="stylesheet"  type="text/css" />

        <link href="{{ asset('zinzer') }}/plugins/datatables/responsive.bootstrap4.min.css"
         rel="stylesheet" type="text/css" />


        <link href="{{ asset('zinzer') }}/plugins/morris/morris.css" rel="stylesheet"> 

        <link href="{{ asset('zinzer') }}/css/bootstrap.min.css" rel="stylesheet"  type="text/css">
        <link href="{{ asset('zinzer') }}/css/icons.css" rel="stylesheet"  type="text/css">
       
        <link href="{{ asset('zinzer') }}/css/style.css" rel="stylesheet"  type="text/css">
        

        @vite(['resources/css/app.css', 'resources/js/app.js'])

    </head>


    <body class="fixed-left">

        @include('layouts.navigation.preloader')
        <!-- Loader -->
        

        <!-- Begin page -->
        <div id="wrapper">

            <!-- ========== Left Sidebar Start ========== -->
                @include('layouts.navigation.studentLeftBar')
            <!-- Left Sidebar End -->

            <!-- Start right Content here -->

            <div class="content-page">
                <!-- Start content -->
                <div class="content">

                    <!-- Top Bar Start -->
                    @include('layouts.navigation.topBar')
                    <!-- Top Bar End -->

                    <div class="page-content-wrapper ">
                        {{ $slot }}
                    </div> <!-- Page content Wrapper -->

                </div> <!-- content -->

                <footer class="footer">
                    <script>
                        document.write(new Date().getFullYear())
                      </script>
                    <span class="d-none d-md-inline-block"> - Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesdesign.</span>
                </footer>

            </div>
            <!-- End Right content here -->

        </div>
        <!-- END wrapper -->
       


        {{-- <script src="{{ asset('material') }}/js/core/jquery.min.js"></script>
        <script src="{{ asset('material') }}/js/core/popper.min.js"></script> --}}



        <script src="{{ asset('zinzer') }}/js/jquery.min.js"></script>
        <script src="{{ asset('zinzer') }}/js/bootstrap.bundle.min.js"></script>
        <script src="{{ asset('zinzer') }}/js/modernizr.min.js"></script>
        <script src="{{ asset('zinzer') }}/js/detect.js"></script>
        <script src="{{ asset('zinzer') }}/js/fastclick.js"></script>
        <script src="{{ asset('zinzer') }}/js/jquery.slimscroll.js"></script>
        <script src="{{ asset('zinzer') }}/js/jquery.blockUI.js"></script>
        <script src="{{ asset('zinzer') }}/js/waves.js"></script>
        <script src="{{ asset('zinzer') }}/js/jquery.nicescroll.js"></script>
        <script src="{{ asset('zinzer') }}/js/jquery.scrollTo.min.js"></script>



     

        <!--Morris Chart-->
        <script src="{{ asset('zinzer') }}/plugins/morris/morris.min.js"></script>
        <script src="{{ asset('zinzer') }}/plugins/raphael/raphael.min.js"></script>



      

        <!-- dashboard js -->
        <script src="{{ asset('zinzer') }}/pages/dashboard.int.js"></script>
        {{-- <script src="assets/pages/dashboard.int.js"></script>         --}}

        <!-- App js -->

            <!-- Required datatable js -->
        <script src="{{ asset('zinzer') }}/plugins/RWD-Table-Patterns/dist/js/rwd-table.min.js"></script>  

        <script src="{{ asset('zinzer') }}/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="{{ asset('zinzer') }}/plugins/datatables/dataTables.bootstrap4.min.js"></script>

        <!-- Buttons examples -->
        <script src="{{ asset('zinzer') }}/plugins/datatables/dataTables.buttons.min.js"></script>
        <script src="{{ asset('zinzer') }}/plugins/datatables/buttons.bootstrap4.min.js"></script>
        <script src="{{ asset('zinzer') }}/plugins/datatables/jszip.min.js"></script>
        <script src="{{ asset('zinzer') }}/plugins/datatables/pdfmake.min.js"></script>
        <script src="{{ asset('zinzer') }}/plugins/datatables/vfs_fonts.js"></script>
        <script src="{{ asset('zinzer') }}/plugins/datatables/buttons.html5.min.js"></script>
        <script src="{{ asset('zinzer') }}/plugins/datatables/buttons.print.min.js"></script>
        <script src="{{ asset('zinzer') }}/plugins/datatables/buttons.colVis.min.js"></script>


       
         <!-- Responsive examples -->
         <script src="{{ asset('zinzer') }}/plugins/datatables/dataTables.responsive.min.js"></script>
         <script src="{{ asset('zinzer') }}/plugins/datatables/responsive.bootstrap4.min.js"></script>
         


           <!-- Sweet-Alert  -->
         <script src="{{ asset('zinzer') }}/plugins/sweet-alert2/sweetalert2.min.js"></script>
         <script src="{{ asset('zinzer') }}/pages/sweet-alert.init.js"></script>

         <!-- Datatable init js -->
         <script src="{{ asset('zinzer') }}/pages/datatables.init.js"></script>
        


        <script src="{{ asset('zinzer') }}/js/app.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" 
        integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" 
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        @stack('js')


        <script>
            $(function() {
                $('.table-responsive').responsiveTable({
                    addDisplayAllBtn: 'btn btn-secondary'
                });
            });
        </script>
        
        


    </body>
</html>