<!DOCTYPE html>
<html lang="en">


@include("partials.head")

<body id="page-top">

    <div id="wrapper">
        @include("components.admin.sidebar")
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                @include("components.admin.navbar")
                <div class="container-fluid">
                    @yield("container-fluid")
                </div>

                @yield("content")

            </div>
            @include("components.admin.footer")


            <a class="scroll-to-top rounded" href="#page-top">
                <i class="fas fa-angle-up"></i>
            </a>

            @include("components.admin.logout-modal")


            @include("partials.vendor-scripts")
            @vite("resources/js/sb-admin-2.min.js")

            <!-- <script src=" js/demo/chart-area-demo.js"></script>
            <script src="js/demo/chart-pie-demo.js"></script> -->

</body>

</html>