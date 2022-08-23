<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Head Link -->
    @include('backend.includes.head')

    <!-- CSS Link -->
    @include('backend.includes.css')
</head>

<body>

    <!-- ########## START: LEFT PANEL ########## -->
    @include('backend.includes.leftbar')
    <!-- ########## END: LEFT PANEL ########## -->


    <!-- ########## START: HEAD PANEL ########## -->
    @include('backend.includes.topbar')
    <!-- ########## END: HEAD PANEL ########## -->


    <!-- ########## START: RIGHT PANEL ########## -->
    @include('backend.includes.rightbar')
    <!-- ########## END: RIGHT PANEL ########## --->


    <!-- ########## START: MAIN PANEL ########## -->
    <div class="br-mainpanel">
        <div class="br-pagetitle">
            <i class="icon ion-ios-home-outline"></i>
            <div>
                <h4>Dashboard</h4>
                <p class="mg-b-0">Do bigger things with Bracket plus, the responsive bootstrap 4 admin template.</p>
            </div>
        </div>

        <div class="br-pagebody">
            <div class="row row-sm">
                @yield('imran')
            </div><!-- row -->

        </div><!-- br-pagebody -->

        <!-- ########## FOOTER SECTION ######### -->
        @include('backend.includes.footer')

    </div><!-- br-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->

    <!-- ############ JS LINK ########## -->
    @include('backend.includes.script')

</body>

</html>