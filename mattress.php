<!DOCTYPE HTML>
<html>

<head>
    <meta name=viewport content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta charset=utf-8>
    <meta name=description content>
    <meta name=author content>
    <title>Kurl-On | Best brand for Mattress, Pillow, Sofa, Furniture, Home Furnishing &amp; Foam in India</title>
    <link rel="icon" href="http://kurlon.com/media/favicon/default/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="http://kurlon.com/media/css/catalog_category_view.7016ad85f1829ca1ecbd2224b6a92b26.1527679644.default.css" media="all">
    <link href=css/style.css rel=stylesheet type=text/css>
    <link href=css/bootstrap.min.css rel=stylesheet type=text/css>
    <link href=css/responsive.css rel=stylesheet type=text/css>
    <link href=css/fonts.css rel=stylesheet type=text/css>
    <link href=css/font-awesome.min.css rel=stylesheet type=text/css>
    <link href=css/effects/normalize.css rel=stylesheet type=text/css>
    <link href=css/effects/component.css rel=stylesheet type=text/css>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300" rel="stylesheet">
    <style>
    body{
        margin-top: 90px;
    }
        #navbar {
            margin: 0px;
          overflow: hidden;
          background-color: #333;
          z-index: 1000;
        }

        #navbar a {
          float: left;
          display: block;
          color: #f2f2f2;
          text-align: center;
          padding: 14px 16px;
          text-decoration: none;
          font-size: 17px;
        }

        #navbar a:hover {
          background-color: #ddd;
          color: black;
        }

        #navbar a.active {
          background-color: #4CAF50;
          color: white;
        }

        .content {
          padding: 16px;
        }

        .sticky {
          position: fixed;
          top: 0;
          width: 100%;
        }

        .sticky + .content {
          padding-top: 60px;
        }
        </style>
</head>

<body>
    <div role="header" id="navbar">
        <div class=container>
            <h1>
                <a href=index.php title="Kurl-On"><img src=images/logo.png title="Kurl-On" alt="Kurl-On"/></a>
                <center>
                <a href="index.php">Home</a>
                <a href=about.php title=About>About</a>
                <a href=contact.php class=nav-active title=Contact>Contact</a>
                <a href=mattress.php title=Mattress>Mattress</a>
                <a href=sofa.php title=Sofa>Sofa</a>
                <a href=pillows.php title=About>Pillows</a>
                <a href=furnishing.php title=Furnishing>Furnishing</a>
                <a href=furniture.php title=Furniture>Furniture</a>
            </center>
            </h1>
            
        </div>
    </div>
    <div class="img-responsive"> 
        <img style="width: 1345px;" src="images/mattress/banner_mattress.jpg">
    </div>
    <main role=main-inner-wrapper class=container>
        <div class="row"  style="font-family: 'Montserrat', sans-serif;">
            <div style="text-align:center;padding: 40px;font-size: 50px;">
                Categories
            </div>
                <ul class="grid-lod effect-2" id=grid  style="font-size: 30px;">
                    <li class="col-md-3">
                        <section class=blog-content>
                            <a href=blog-details.html>
                                <figure>
                                    <label style="color: #f44256; font-size: 15px">SPRING</label>
                                    <img src=images/mattress/1.jpg alt class="img-responsive" />
                                </figure>
                            </a>
                            <article style="font-size: 15px;">
                                Kurl-on's spring mattresses are made of "A" grade Carbon & Manganese alloy high-tensile springs. It provides formidable body support and ensures zero disturbance from any movement.
                            </article>
                        </section>
                    </li>
                    <li class="col-md-3">
                        <section class=blog-content>
                            <a href=blog-details.html>
                                <figure>
                                    <label style="color: #f44256; font-size: 15px">FOAM</label>
                                    <img src=images/mattress/2.jpg alt class="img-responsive" />
                                </figure>
                            </a>
                            <article style="font-size: 15px;">
                                Kurl-on's foam mattress is soft, firm & durable for maximum support to the body. The mattress conforms to the shape of the body to ensure complete pressure distribution.
                            </article>
                        </section>
                    </li>
                    <li class="col-md-3">
                        <section class=blog-content>
                            <a href=blog-details.html>
                                <figure>
                                    <label style="color: #f44256; font-size: 15px">COIR</label>
                                    <img src=images/mattress/3.jpg alt class="img-responsive" />
                                </figure>
                            </a>
                            <article style="font-size: 15px;">
                                Kurl-on's coir mattresses use bonded foam at the core. The fibre controls the temperature, provides the required firmness & support to every part of the body.
                            </article>
                        </section>
                    </li>
                    <li class="col-md-3">
                        <section class=blog-content>
                            <a href=blog-details.html>
                                <figure>
                                    <label style="color: #f44256; font-size: 15px">THERAPEUTIC</label>
                                    <img src=images/mattress/4.jpg alt class="img-responsive" />
                                </figure>
                            </a>
                            <article style="font-size: 15px;">
                                Kurl-on’s therapeutic mattresses are scientifically developed to meet the ergonomic requirement of the human body & offer absolute comfort and rest.
                            </article>
                        </section>
                    </li>
                </ul>
            </div>
            <div class="row"  style="font-family: 'Montserrat', sans-serif;">
            <div style="text-align:center;padding: 40px;font-size: 50px;">
                Products
            </div>
                <div class="thumbnails-pan">
                    <?php
                        include('getmattress.php');  
                    ?>
                </div>
            </div>
    </main>
        <footer>
            <div class="footer-container">
                <div class="foot1">
                    <div class="foot-logo">
                        <img src="http://kurlon.com/skin/frontend/Webenza/Kurlon/images/logo-white.png">
                    </div>
                </div>
                <div class="foot2">
                    <h5>Corporate Office</h5>
                    <ul>
                        <li>N-3O1, North Block,</li>
                        <li>Manipal Centre, 47,</li>
                        <li>Dickenson Road, Bangalore</li>
                        <li>Karnataka - 560042</li>
                    </ul>
                </div>
                <div class="foot3">
                    <h5>Contact Us</h5>
                    <ul>
                        <li style="text-transform: inherit;"><a style="text-transform: inherit;" href="mailto:customercare@kurlon.com">customercare@kurlon.com</a></li>
                        <li><a href="tel:18004250404">1800 425 0404</a></li>
                        <li><a href="/business-requirements">Bulk Order/ Enquiry Form</a></li>
                        <li><a href="/service-form">Customer Service Form</a></li>
                        <li><a href="https://www.o3-app.com/43/public_forms/261" target="_blank">Complaint Registration</a></li>
                    </ul>
                </div>
                <div class="foot4">
                    <h5>Flagship Showroom</h5>
                    <ul class="ul-showroom">
                        <li><a href="http://khk.kurlon.com/" target="_blank">Kurl-on Home Komforts</a></li>
                        <li><a href="/kurlon-matress-xpress">Kurl-on Mattress Xpress</a></li>
                        <li><a href="/kurlon-korner">Kurl-on Korner</a></li>
                    </ul>
                </div>
                <div class="foot5">
                    <h5>Our Locations</h5>
                    <ul>
                        <li><a href="/factory-list">Factory List</a></li>
                        <li><a href="/locate-us">Locate Us</a></li>
                        <li><a href="/investors">Investors</a></li>
                    </ul>
                </div>
                <div class="foot6">
                    <h5>Follow us on</h5>
                    <div class="foot6-top">
                        <ul>
                            <li><a href="https://www.facebook.com/Kurlon" target="_blank"><img title="facebook" alt="facebook" src="http://kurlon.com/skin/frontend/Webenza/Kurlon/images/social1.png"></a></li>
                            <li><a href="https://www.youtube.com/channel/UCxKBDZJcuTrpuvWZNuRpbIw" target="_blank"><img title="youtube" alt="youtube" src="http://kurlon.com/skin/frontend/Webenza/Kurlon/images/social2.png"></a></li>
                            <li><a href="https://twitter.com/KurlonLimited" target="_blank"><img title="twitter" alt="twitter" src="http://kurlon.com/skin/frontend/Webenza/Kurlon/images/social3.png"></a></li>
                            <li><a href="https://www.linkedin.com/company/864539/" target="_blank"><img title="linkedin" alt="linkedin" src="http://kurlon.com/skin/frontend/Webenza/Kurlon/images/social6.png"></a></li>
                            <li><a href="https://www.instagram.com/kurlon_limited/" target="_blank"><img title="instagram" alt="instagram" src="http://kurlon.com/skin/frontend/Webenza/Kurlon/images/instagramicon.png"></a></li>
                            <li>
                        </ul>
                    </div>
                    <div class="foot6-bottom">
                        <ul>
                            <li><a href="http://kurlon.com/privacy-policy">Privacy Policy</a></li>
                            <li><a href="http://kurlon.com/site-map">Site Map</a></li>
                        </ul>
                    </div>
                </div>
                <address style="display:none;">© 2018 Kurlon. All Rights Reserved.</address>
                <div class="clear"></div>
            </div>
        </footer>
        <script>
            var navbar = document.getElementById("navbar");
            var sticky = navbar.offsetTop;
            navbar.classList.add("sticky");
    </script>
    <script src=js/jquery.min.js type=text/javascript></script>
    <script src=js/nav.js type=text/javascript></script>
    <script src=js/custom.js type=text/javascript></script>
    <script src=js/bootstrap.min.js type=text/javascript></script>
    <script src=js/effects/masonry.pkgd.min.js type=text/javascript></script>
    <script src=js/effects/imagesloaded.js type=text/javascript></script>
    <script src=js/effects/classie.js type=text/javascript></script>
    <script src=js/effects/AnimOnScroll.js type=text/javascript></script>
    <script src=js/effects/modernizr.custom.js></script>
    <script src=js/html5shiv.js type=text/javascript></script>
</body>

</html>