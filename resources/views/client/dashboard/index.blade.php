<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="Tooplate">

        <title>Waso Strategy - Bootstrap 5 HTML Template</title>

        <!-- CSS FILES -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        
        <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">

        <link href="../waso/css/bootstrap.min.css" rel="stylesheet">

        <link href="../waso/css/bootstrap-icons.css" rel="stylesheet">

        <link href="../waso/css/magnific-popup.css" rel="stylesheet">

        <link href="../waso/css/tooplate-waso-strategy.css" rel="stylesheet">
        
<!--

Tooplate 2130 Waso Strategy

https://www.tooplate.com/view/2130-waso-strategy

Free Bootstrap 5 HTML Template

-->

    </head>
    
    <body id="section_1">

        <header class="site-header">
            @include('client.layout.topbar')
        </header>
            @include('client.layout.header')
        <main>
           @yield('client_content')

          

        </main>

        <footer class="site-footer">
            @include('client.layout.footer')
        </footer>

        <!-- JAVASCRIPT FILES -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.sticky.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/magnific-popup-options.js"></script>
        <script src="js/click-scroll.js"></script>
        <script src="js/custom.js"></script>

    </body>
</html>