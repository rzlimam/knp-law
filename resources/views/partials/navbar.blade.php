<div class="middle-header container-fluid no-padding">
    <!-- Container -->
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-6 text-left col-xs-6">
                <div class="location">
                    <h3>
                        <img src="images/icon/location-ic.png" alt="Location"/>
                        Our Location
                    </h3>
                    <p> Jl. Inspeksi Kalimalang No. 36B, Setiadarma, Tambun Selatan, Kabupaten Bekasi,
                        Jawa Barat – 17510
                    </p>
                </div>					
            </div>
            <div class="col-md-4 col-sm-4 logo-block mobile-hide">
                <a href="/" class="image-logo" title="Logo"><img src="images/knp-logo.jpeg" alt="Logo" style="width:150px"/></a>
                <h4>Kisworo And Partners</h4>
                <span>Law Frim Group</span>
            </div>
            <div class="col-md-4 col-sm-6 text-right col-xs-6">							
                <div class="phone">
                    <h3>
                        <img src="images/icon/consultation-ic.png" alt="consultation"/>
                        <span>Consultation</span>
                    </h3>
                    <p>Call Us - 0821-5850-0065</p>
                </div>
            </div>
        </div>
    </div><!-- Container -->
</div><!-- Logo Block /- -->
    <!-- Navigation -->
    <nav class="navbar ow-navigation">
        <div class="container">
            <div class="row">
                <div id="loginpanel" class="desktop-hide">
                    <div class="right" id="toggle">
                        <a id="slideit" href="#slidepanel"><i class="fo-icons fa fa-inbox"></i></a>
                        <a id="closeit" href="#slidepanel"><i class="fo-icons fa fa-close"></i></a>
                    </div>
                </div>
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand text-logo desktop-hide" href="#">Master Law</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li class="{{ ($title === 'Home') ? 'active' : '' }}"><a href="/">Home</a></li>
                        <li class="{{ ($title === 'About Us') ? 'active' : '' }}"><a href="/about">About Us</a></li>
                        <li class="{{ ($title === 'Services') ? 'active' : '' }}"><a href="/services">Services</a></li>
                        <li class="{{ ($title === '') ? 'active' : '' }}"><a href="#">Our Team</a></li>
                        <li class="{{ ($title === '') ? 'active' : '' }}"><a href="#">Blog</a></li>
                        <li class="{{ ($title === 'Contact Us') ? 'active' : '' }}"><a href="/contact-us">Contact</a></li>
                    </ul>						
                </div>
            </div>
        </div>
    </nav>