<?php
  session_start();
  include "./db.php";
  include "./partials/header.php";
  include "./partials/nav.php";
  ?>

  <!-- Contact start -->
  <div class="container-fluid" id="contactus">
  <div class="container">
    <h2 class="text-center text-uppercase font-weight-bold conth2">Contact For Any Queries</h2>

    <div class="container pt-5 mt-5">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30554.466555514955!2d96.13982573657954!3d16.811053841053262!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c1eca8da00badf%3A0xddcffcdec96b413!2sBahan%20Township%2C%20Yangon!5e0!3m2!1sen!2smm!4v1663418469795!5m2!1sen!2smm" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

    <div class="row pt-5 pb-5 mb-5 mt-5">
      <div class="col-lg-5 col-sm-6 pt-5">
        <div class="contact-info">
            <div class="d-flex">
              <div class="pe-2">
                <img src="./img/others/home.png"/>
              </div>
              <div>
                <p>No ( 3 ), Chan Mya Yate Mon Street, Bahan Township, Yangon, Myanmar</p>
              </div>
            </div>
            <div class="d-flex">
              <div class="pe-3">
                <img src="./img/others/phone.png"/>
              </div>
              <div>
                <p>+95 9742110221, 01 211 4321</p>
              </div>
            </div>
            <div class="d-flex">
              <div class="pe-3">
                <img src="./img/others/email.png"/>
              </div>
              <div>
                <p>info@educaremm.com</p>
              </div>
            </div>
          </div>
      </div>

      <div class="col-lg-7 col-sm-6 pt-4">
          <form action="#" id="form">
            <div class="row">
              <div class="col">
                <div class="form-group">
                <label for="usr"></label>
                <input type="text" class="form-control" id="usr" placeholder="Your Name*" name="username">
              </div>
              <div class="form-group">
                <label for="email"></label>
                <input type="email" class="form-control" id="email" placeholder="Your Email*" name="email">
              </div>
              <div class="form-group">
                <label for="subject"></label>
                <input type="subject" class="form-control" id="subject" placeholder="Subject*" name="email">
              </div>
              </div>
              <div class="col">
                <div class="form-group">
                <label for="comment"></label>
                <textarea class="form-control" rows="5" id="comment" placeholder="Your Message*" name="text" style="resize: none;"></textarea>
                </div>
              </div>
            </div>
              <button type="submit" class="text-white" id="submitbut">Send Message</button>
          </form>
      </div>
    </div>
  </div>
  </div>
<!-- Contact end -->

<?php
include "./partials/footer.php"
?>