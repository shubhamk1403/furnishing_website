<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name=viewport content="width=device-width, initial-scale=1, maximum-scale=1" />
  <meta name=description content>
  <meta name=author content>
  <title>Kurl-On | Best brand for Mattress, Pillow, Sofa, Furniture, Home Furnishing &amp; Foam in India</title>
  <link rel="icon" href="http://kurlon.com/media/favicon/default/favicon.ico" type="image/x-icon">
  <link href=css/style.css rel=stylesheet type=text/css>
  <link href=css/bootstrap.min.css rel=stylesheet type=text/css>
  <link href=css/responsive.css rel=stylesheet type=text/css>
  <link href=css/font-awesome.min.css rel=stylesheet type=text/css>
  <link href=css/effects/set2.css rel=stylesheet type=text/css>
  <link href=css/effects/normalize.css rel=stylesheet type=text/css>
  <link href=css/effects/component.css rel=stylesheet type=text/css>
  <link rel="stylesheet" href="css/style1.css">
  <link rel="stylesheet" type="text/css" href="http://kurlon.com/media/css/catalog_category_view.7016ad85f1829ca1ecbd2224b6a92b26.1527679644.default.css" media="all">

      <style>
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
<main role=main-home-wrapper class=container>
  <div class="row">
      <section class="col-md-9">
          <article role=pge-title-content>
            <header>
              <h2><span>Delete Items</span></h2>
            </header>
          </article>
      </section>
      <div class=clearfix></div>
  </div>
  <div class="row"  style="font-family: 'Montserrat', sans-serif;">
    <div class="thumbnails-pan">
      <?php
          include('getallproducts.php');  
      ?>
    </div>
  </div>
    <div class=row>
        <section class="col-md-9">
            <article role=pge-title-content>
              <header>
                <h2><span>Add Items</span>Click on the pencil below to enter.</h2>
              </header>
            </article>
        </section>
        <div class=clearfix></div>
          <div class='form-overlay'></div>
          <center>
          <div class='icon fa fa-pencil' style="position: relative; margin-top: 50px;" id='form-container'>
          <span class='icon fa fa-close' id='form-close'></span>
          <div id='form-content' style="text-align: center;font-family: 'Montserrat', sans-serif;padding-bottom: 20px;">
            <div id='form-head'>
                  <h1 class='pre'>Get in touch</h1>
                  <p class='pre'>Good choice...</p>
                  <h1 class='post'>Thanks!</h1>
                  <p class='post'>I'll be in touch ASAP</p>
                </div>
            <form action="addproduct.php" method="POST" enctype="multipart/form-data" style="font-size: 20px;">
              <input class='input name' name='product_name' placeholder='Product Name' type='text' required>
              <input class='input name' name='product_description' placeholder='Product Description' type='text' required>
              <select class='input select' name='product_type' required>
                <option value=""></option>
                <option value="sofa">Sofa</option>
                <option value="mattress">Mattress</option>
                <option value="pillows">Pillows</option>
                <option value="furnishing">Furnishing</option>
                <option value="furniture">Furniture</option>
              </select>
              <input class='input name' type="file" style="font-size: 18px;" accept="image/*" name="fileToUpload" required>
              <input class='input submit' type='submit' value='Enter Product'>
            </form>
          </div>
        </div>
      </center>
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
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="js/index.js"></script>
    <script src=js/nav.js type=text/javascript></script>
    <script src=js/custom.js type=text/javascript></script>
    <script src=js/effects/masonry.pkgd.min.js type=text/javascript></script>
    <script src=js/effects/imagesloaded.js type=text/javascript></script>
    <script src=js/effects/classie.js type=text/javascript></script>
    <script src=js/effects/modernizr.custom.js></script>
    <script src=js/html5shiv.js type=text/javascript></script>
</body>
</html>
