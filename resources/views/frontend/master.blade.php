<!DOCTYPE html>
<html lang="en">


@include('frontend.body.header')

@yield('content')

<!-----------------------------
          Footer Section 
    ------------------------------->
<footer class="footer-section">
  <div class="footer-top">
    <div class="container">
      <div class="row g-5">
        <div class="col-md-4 col-7 pe-0">
          <div class="contact-info text-dark">
            <h3 class="footer-title">Contact</h3>
            <p><i class="fas fa-envelope"></i><a href="mailto:contact@5dots.sa"><span
                  class="ps-3">contact@5dots.sa</span></a>
            </p>
            <p><i class="fas fa-phone"></i><span class="ps-3">+00 1234567890</span></p>
            <p><i class="fas fa-map-marker-alt"></i></i><span class="ps-3">123, Al-khubar city, Dammam, KSA</span>
            </p>
          </div>
        </div>

        <div class="col-md-2 col-5 ps-0">
          <div class="contact-info">
            <h3 class="footer-title">Qucik Link</h3>
            <ul>
              <li><a href="">Home</a></li>
              <li><a href="">Our Services</a></li>
              <li><a href="">Contact Us</a></li>
              <li><a href="">Join Us</a></li>
              <li><a href="">Login</a></li>
            </ul>
          </div>
        </div>

        <div class="col-md-4 col-7">
          <div class="contact-info">
            <h3 class="footer-title">Company</h3>
            <h2 class="logo">Five Dots</h2>
            <p class="py-3">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Maiores iusto quam fugit
              expedita
              dignissimos laborum, in at iure accusantium, voluptas voluptate sint recusandae suscipit, delectus neque
              odit ad molestiae nam?</p>

            <a class="btn btn-outline-secondary" href="#">Join As Designer</a>
          </div>
        </div>

        <div class="col-md-2 col-5 ps-0">
          <div class="contact-info">
            <h3 class="footer-title">Legal</h3>
            <ul>
              <li><a href="">Privacy Policy</a></li>
              <li><a href="">Terms & Conditions </a></li>
            </ul>

            <p>Social Link:</p>
            <ul class="d-flex social-icon">
              <li><a href=""><i class="fab fa-twitter"></i></a></li>
              <li><a href=""><i class="fab fa-instagram"></i></a></li>
              <li><a href=""><i class="fab fa-linkedin-in"></i></a></li>
            </ul>

          </div>
        </div>

      </div>
    </div>
  </div>

  <div class="footer-bottom">
    <p class="text-center">Copyright &copy
      <script type="text/javascript"> document.write(new Date().getFullYear());</script> [5dots.sa] All
      rights reserved.
    </p>
  </div>
</footer>


<!-- Bootstrap Js Link -->

<script type="text/javascript" src="{{ asset('/frontend/assets/') }}/js/jquery-3.6.0.min.js"></script>

<script type="text/javascript" src="{{ asset('/frontend/assets/') }}/js/bootstrap.bundle.min.js"></script>

<!-- Price Range -->
@yield('footer_js')

<!-- Select 2 -->
<script src="{{ asset('/frontend/assets/') }}/js/select2.min.js"></script>

<!-- Nice Select -->
<script src="{{ asset('/frontend/assets/') }}/js/jquery.nice-select.min.js"></script>

<!-- HS Menu -->
<script src="{{ asset('/frontend/assets/') }}/js/jquery.hsmenu.min.js"></script>
<!-- Owl carousel  -->
<script src="{{ asset('/frontend/assets/') }}/js/owl.carousel.min.js"></script>
<script src="{{ asset('/frontend/assets/') }}/js/wow.min.js"></script>
<!-- Slick Slider -->
<script src="{{ asset('/frontend/assets/') }}/js/slick.min.js"></script>
<!-- Custom Js Link -->
<script src="{{ asset('/frontend/assets/') }}/js/custome.js"></script>
</body>

</html>