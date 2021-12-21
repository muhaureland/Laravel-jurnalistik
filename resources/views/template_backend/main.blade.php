<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
<title>jurnalistik &mdash; @yield('title')</title>

<!-- General CSS Files -->
<link rel="stylesheet" href="{{ asset('assets_backend/modules/bootstrap/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets_backend/modules/fontawesome/css/all.min.css') }}">

<!-- CSS Libraries -->

<!-- Template CSS -->
<link rel="stylesheet" href="{{ asset('assets_backend/css/style.css') }}">
<link rel="stylesheet" href="{{ asset('assets_backend/css/components.css') }}">
<!-- Start GA -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
<script>
window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}
gtag('js', new Date());

gtag('config', 'UA-94034622-3');
</script>
<!-- /END GA --></head>

<body>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            <div class="navbar-bg"></div>   
            @include('template_backend.navbar')
            @include('template_backend.sidebar')
            <!-- Main Content -->
            <div class="main-content">
                <section class="section">
                    @yield('container')
                </section>
            </div>
            @include('template_backend.footer')
        </div>
    </div>

<!-- General JS Scripts -->
<script src="{{ asset('assets_backend/modules/jquery.min.js') }}"></script>
<script src="{{ asset('assets_backend/modules/popper.js') }}"></script>
<script src="{{ asset('assets_backend/modules/tooltip.js') }}"></script>
<script src="{{ asset('assets_backend/modules/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets_backend/modules/nicescroll/jquery.nicescroll.min.js') }}"></script>
<script src="{{ asset('assets_backend/modules/moment.min.js') }}"></script>
<script src="{{ asset('assets_backend/js/stisla.js') }}"></script>

<!-- Template JS File -->
<script src="{{ asset('assets_backend/js/scripts.js') }}"></script>
<script src="{{ asset('assets_backend/js/custom.js') }}"></script>
</body>
</html>