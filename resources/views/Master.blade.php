<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- stylesheets -->

    <link rel="stylesheet" href="style.css">

    <!-- cdns -->


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css" rel="stylesheet" />


    <!-- fonts from here -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap');
    </style>


</head>

<body>


    <main>

        <div class="page1">

            <nav>
                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="">contact us</a></li>
                    <li><a href="">picture gallery</a></li>
                    <li><a href="">video gallery</a></li>
                    <li><a href="">become member</a></li>
                </ul>

                <div class="logo"></div>
                <div class="navRight">
                    <div class="login">
                        Login
                    </div>
                    <div class="button">
                        <div class="line"></div>
                        <div class="line"></div>
                        <div class="line"></div>
                    </div>
                </div>

            </nav>

            

            <section>
                @yield("Login")
            </section>




        <!-- // footer -->

        <section class="footer">
            <div class="footer-row">
              <div class="footer-col">
                <h4>Info</h4>
                <ul class="links">
                  <li><a href="#">About Us</a></li>
                  <li><a href="#">Compressions</a></li>
                  <li><a href="#">Customers</a></li>
                  <li><a href="#">Service</a></li>
                  <li><a href="#">Collection</a></li>
                </ul>
              </div>
              <div class="footer-col">
                <h4>Explore</h4>
                <ul class="links">
                  <li><a href="#">Free Designs</a></li>
                  <li><a href="#">Latest Designs</a></li>
                  <li><a href="#">Themes</a></li>
                  <li><a href="#">Popular Designs</a></li>
                  <li><a href="#">Art Skills</a></li>
                  <li><a href="#">New Uploads</a></li>
                </ul>
              </div>
              <div class="footer-col">
                <h4>Legal</h4>
                <ul class="links">
                  <li><a href="#">Customer Agreement</a></li>
                  <li><a href="#">Privacy Policy</a></li>
                  <li><a href="#">GDPR</a></li>
                  <li><a href="#">Security</a></li>
                  <li><a href="#">Testimonials</a></li>
                  <li><a href="#">Media Kit</a></li>
                </ul>
              </div>
              <div class="footer-col">
                <h4>Newsletter</h4>
                <p>
                  Subscribe to our newsletter for a weekly dose
                  of news, updates, helpful tips, and
                  exclusive offers.
                </p>
                <form action="#">
                  <input type="text" placeholder="Your email" required>
                  <button type="submit">SUBSCRIBE</button>
                </form>
                <div class="icons">
                  <i class="fa-brands fa-facebook-f"></i>
                  <i class="fa-brands fa-twitter"></i>
                  <i class="fa-brands fa-linkedin"></i>
                  <i class="fa-brands fa-github"></i>
                </div>
              </div>
            </div>
          </section>


    </main>

    <!-- scripts -->

    <script src="script.js"></script>
</body>

</html>