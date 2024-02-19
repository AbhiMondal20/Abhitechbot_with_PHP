<?php include('header.php'); ?>
<div class="about-section" style="padding-top: 150px;">
    <div class="section-heading-middle">
        <div class="sub-heading d-flex align-items-center mx-auto">
            <img src="assets/img/orangeDot.png" alt="orange-dot Abhitechbot - A Full Stack Developer" />
            <p>Contact</p>
        </div>
        <h2 class="white-color line-height-3 h2 text-uppercase text-center" >
        Contact Us
        </h2>
    </div>
</div>

<!-- Contact -->
<section id="contact" class="home-four-contact m-4">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="home-contact-wrapper">
                    <div class="home-contact-info-container row align-items-center">
                        <div class="col-12 col-md-6 home-two-contact-info-col">
                            <div class="section-heading">
                                
                                <h2 class="black-color line-height-3 h2">
                                    Need help? Get in touch now!
                                </h2>
                            </div>
                            <div class="row row-mobile-margin gy-3 gy-sm-0 row-mobile-margin mt-50">
                                <div class="col-12 d-flex align-items-center">
                                    <div class="mr-10">
                                        <div class="light-orange-bg-icon">
                                            <i class="fa-solid fa-phone-volume orange-color h4"></i>
                                        </div>
                                    </div>
                                    <div class="about-years-experience">
                                        <p class="fw-400 secondary-black p">Phone</p>
                                        <h4 class="fw-500 black-color h4">
                                            <a href="tel:+918101202074">+91 8101202074</a>
                                        </h4>
                                    </div>
                                </div>
                                <div class="col-12 d-flex align-items-center row-mobile-margin mt-35">
                                    <div class="mr-10">
                                        <div class="light-orange-bg-icon">
                                            <i class="fa-solid fa-envelope orange-color h4"></i>
                                        </div>
                                    </div>
                                    <div class="about-years-experience">
                                        <p class="fw-400 secondary-black p">Email</p>
                                        <h4 class="fw-500 black-color h4">
                                            <a href="mailto:abhitechbot@gmail.com">
                                                abhitechbot@gmail.com
                                            </a>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 row-mobile-margin">
                            <form method="POST" >
                                <div class="row g-4">
                                    <div class="col-12 col-sm-6">
                                        <input type="textAlignLast: " class="form-control home-four-contact-input" name="name"
                                            placeholder="Name" required />
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <input type="email" class="form-control home-four-contact-input" name="email" placeholder="Email" required />
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <input type="tel" class="form-control home-four-contact-input"
                                        placeholder="Phone" name="phone" required />
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <input type="date" class="form-control home-four-contact-input"
                                        name="date" required />
                                    </div>
                                    <div class="col-12">
                                        <textarea class="form-control home-four-contact-input home-four-textarea" name="message"
                                            placeholder="Message" required></textarea>
                                    </div>
                                    <div class="col-12">
                                        <div class="col-12">
                                            <button type="submit" name="save" class="btn orange-btn btn_effect">
                                                <span class="position-relative z-1">
                                                    Send Me Message
                                                </span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php

if(isset($_POST['save'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $date = $_POST['date'];
    $message = $_POST['message'];
    $apiToken = '6492864058:AAFWCX6IEGZXMl1t85dkepdnUBMOv9cHiwI';

    // --bot chat id
    // $chatId = '1486093575';

    // -- Group Chat Id
    $chatId = '-4072179115';
    $apiUrl = "https://api.telegram.org/bot$apiToken/sendMessage";
    $data = array(
      'chat_id' => $chatId,
      'Name:' . $name . "\n Email: " . $email . "\n Mobile: " . $phone . "\n Date: " . $date . "\n  Message: " . $message,
    );
    $ch = curl_init($apiUrl);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    if (curl_errno($ch)) {
      echo 'cURL error: ' . curl_error($ch);
    } else {
      $result = json_decode($response, true);
      if ($result['ok']) {
        // echo 'Message sent successfully!';
      } else {
        // echo 'Error: ' . $result['description'];
      }
    }
    curl_close($ch);
}
include('footer.php'); ?>