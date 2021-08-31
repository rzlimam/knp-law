<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
    
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    
        <meta name="description" content="">
        <meta name="author" content="">
    
        <title>Kisworo & Partners</title>
    
        <!-- Standard Favicon -->
        <link rel="icon" type="image/x-icon" href="/images//knp-logo.png" />
        
        <!-- For iPhone 4 Retina display: -->
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/images//apple-touch-icon-114x114-precomposed.png">
        
        <!-- For iPad: -->
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/images//apple-touch-icon-72x72-precomposed.png">
        
        <!-- For iPhone: -->
        <link rel="apple-touch-icon-precomposed" href="/images//apple-touch-icon-57x57-precomposed.png">	
        
        <!-- Library - Loader CSS -->
        <link rel="stylesheet" type="text/css" href="/libraries/loader/loaders.min.css">
    
        <!-- Library - Google Font Familys -->
        <link href='https://fonts.googleapis.com/css?family=PT+Sans:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Philosopher:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=EB+Garamond' rel='stylesheet' type='text/css'>
        
        <!-- Library - Bootstrap v3.3.5 -->
        <link rel="stylesheet" type="text/css" href="/libraries/bootstrap/bootstrap.min.css">
        
        <!-- Font Icons -->
        <link rel="stylesheet" type="text/css" href="/libraries/fonts/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="/libraries/fonts/elegant-icons.css">
    
        <!-- Library - OWL Carousel V.2.0 beta -->
        <link rel="stylesheet" type="text/css" href="/libraries/owl-carousel/owl.carousel.css">
        <link rel="stylesheet" type="text/css" href="/libraries/owl-carousel/owl.theme.css">
        
        <!-- Library - Animate CSS -->
        <link rel="stylesheet" type="text/css" href="/libraries/animate/animate.min.css">
    
        <!-- Custom - Common CSS -->
        <link rel="stylesheet" type="text/css" href="/css/plugins.css">
        <link rel="stylesheet" type="text/css" href="/css/navigation-menu.css">
    
        <!-- Custom - Theme CSS -->
        <link rel="stylesheet" type="text/css" href="/style.css">
        <link rel="stylesheet" type="text/css" href="/css/shortcodes.css">
        
        <!--[if lt IE 9]>
            <script src="js/html5/respond.min.js"></script>
        <![endif]-->
    </head>

<body data-offset="200" data-spy="scroll" data-target=".ow-navigation">

    @include('partials.navbar')

    <div class="main-container">
        @yield('container')
    </div>

    @include('partials.footer')

    <script src="/js/jquery.min.js"></script>

	<!-- Library - Modernizer -->
	<script src="/libraries/modernizr/modernizr.js"></script>
	
	<!-- Library - Bootstrap v3.3.5 -->
	<script src="/libraries/bootstrap/bootstrap.min.js"></script><!-- Bootstrap JS File v3.3.5 -->

	<!-- jQuery Easing v1.3 -->
	<script src="/js/jquery.easing.min.js"></script>

	<!-- Library - jQuery.appear -->
	<script src="/libraries/appear/jquery.appear.js"></script>
	
	<!-- Library - OWL Carousel V.2.0 beta -->
	<script src="/libraries/owl-carousel/owl.carousel.min.js"></script>
	
	<!-- jQuery For Number Counter -->
	<script src="/libraries/number/jquery.animateNumber.min.js"></script>
	
	<!-- Library - Isotope Portfolio Filter -->
	<script src="/libraries/isotope/isotope.pkgd.min.js"></script>
	
	<!-- Library - Google Map API -->
	<script src="/https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
	
	<!-- Library - Theme JS -->
	<script src="/js/functions.js"></script>

</body>

</html>