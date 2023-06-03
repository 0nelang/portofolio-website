<!doctype html>
<html lang="en">

<head>
        <title>Maha - Personal CV/Resume Template | Home 1 </title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="Maha Personal cv/resume template for professional and personal website." />
        <meta name="keywords" content="creative, cv, designer,  online cv, online resume, powerful portfolio, professional, professional resume, responsive, resume, vcard " />
        <meta name="developer" content="Md. Siful Islam">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        @include("layout.maincss")
    </head>
    <body class="dark-vertion black-bg">
        <!-- Start Loader -->
        <div class="section-loader">
            <div class="loader">
                <div></div>
                <div></div>
            </div>
        </div>
        <!-- End Loader -->

        <!--
        ===================
           NAVIGATION
        ===================
        -->
        @include('layout.navmain')

        @yield('content')

        <!--
        ===================
           FOOTER 1
        ===================
        -->
        @include('layout.footmain')

    <!--
    ==============
    * JS Files *
    ==============
    -->

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    @include("layout.mainjs")
</body>

</html>
