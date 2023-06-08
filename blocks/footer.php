<footer class="footer">
  <div class="footer_img">
    <!-- <img src="../../resource/footer.png" alt="" /> -->
  </div>
  <div class="container">
    <div class="footer_info col-3">
      <div class="footer_info-logo">
        <img src="../resource/logo-saas.png" alt="" />
      </div>
      <div class="footer_info-add">
        <div class="footer_info-add-title">
          <img src="../resource/home-icon-white.png" alt="" />
          <h5>Head Office:</h5>
        </div>
        <p>
          SAV8 - 14.11 & 14.12 The Sun Avenue, 28 Mai Chi Tho Phuong An Phu,
          TP. Thu Duc, TPHCM
        </p>
      </div>
      <div class="footer_info-mailing">
        <div class="footer_info-mailing-title">
          <img src="../resource/contact-mail.png" alt="" />
          <h5>General Email:</h5>
        </div>
        <a href="mailto:docs@saavn.com">docs@saavn.com</a>
      </div>
    </div>

    <div class="footer__about col-4">
      <h5>CÔNG TY CỔ PHẦN <br> SEA AND AIR SERVICES <br> VIỆT NAM</h5>
      <div class="footer_about-section row">
        <div class="footer_about-section1">
          <ul>
            <li><a href="">Our Investor</a></li>
            <li><a href="">Recent Project</a></li>
            <li><a href="">Code Of Conduct</a></li>
            <li><a href="">Latest News</a></li>
            <li><a href="">Job/Career</a></li>
          </ul>
        </div>
        <div class="footer_about-section2">
          <ul>
            <li><a href="">Service Provider</a></li>
            <li><a href="">Our Responsibility</a></li>
            <li><a href="">Our Company</a></li>
            <li><a href="">Testimonials</a></li>
            <li><a href="">Contact Info</a></li>
          </ul>
        </div>
      </div>
    </div>

    <div class="footer-subscribe col-5">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Subscribe for latest newsletter</h5>
          <form action="../getdata/subscribe-newsletter_form.php" method="POST">
            <div class="mb-3">
              <input type="text" class="form-control" id="name" placeholder="Name" name="name" />
            </div>
            <div class="mb-3">
              <input type="email" class="form-control" id="email" name="email" placeholder="Email" />
            </div>
            <button type="submit" class="btn w-100">
              SUBSCRIBE NOW
              <span><img src="../resource/arrow-right-white.png" alt="" /></span>
            </button>
            <div class="call">
              <p>CALL US:</p>
              <a href="tel:02873001439">028 73001439</a>
            </div>
          </form>
        </div>
        <div class="card_call-icon">
          <img src="../resource/footer-phone-call.png" alt="" />
        </div>
        <!-- <div class="card_call-icon"></div> -->
      </div>
      <div class="footer_subcribe-img"></div>

      <script>
      function validateForm() {
        // reset error messages
        document.getElementById('nameError').textContent = '';
        document.getElementById('emailError').textContent = '';

        // get form input values
        var name = document.getElementById('name').value;
        var email = document.getElementById('email').value;

        // validate name
        if (name.trim() === '') {
          document.getElementById('nameError').textContent = 'Please enter your name.';
          return false;
        }

        // validate email
        var emailRegex = /^\S+@\S+\.\S+$/;
        if (!emailRegex.test(email)) {
          document.getElementById('emailError').textContent = 'Please enter a valid email address.';
          return false;
        }

        return true;
      }
      </script>
    </div>
  </div>
</footer>
<div class="footer_copyright">
  Copyright 2023. All rights reserved, Designed by BMWeb
</div>