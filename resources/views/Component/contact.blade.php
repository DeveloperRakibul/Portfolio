
<!-- ======= Contact Section ======= -->
<section id="contact" class="paralax-mf footer-paralax bg-image sect-mt4 route" style="background-image: url(assets/img/overlay-bg.jpg)"  <div class="overlay-mf"></div>
<div class="container">

    <div class="row">
        <div class="col-sm-12">
            <div class="contact-mf">
                <div id="contact" class="box-shadow-full">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="title-box-2">

                                <h5 class="title-left">
                                    Send Message Us
                                </h5>

                            </div>
                            <div>
                                <form action="{{route('contact.store')}}" method="POST" role="form" class="php-email-form">  <!--role="form" class="php-email-form" -->
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-12 mb-3">
                                            <div class="form-group">
                                                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                                            </div>
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <div class="form-group">
                                                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                                            </div>
                                        </div>
                                            <div class="col-md-12 mb-3">
                                            <div class="form-group">
                                                <input type="integer" class="form-control" name="phone" id="number" placeholder="Whatsapp Number" required>
                                            </div>
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                                            </div>
                                        </div>

                                         <div class="col-md-12 text-center my-3">
                                            <div class="loading">Loading</div>
                                            <div class="error-message">Failed To Send Message!</div>
                                            <div name="sent" class="sent-message">Your message has been sent. Thank you!</div>
                                        </div>


                                        <div style="margin-top: 20px;" class="col-md-12 text-center">
                                            <button type="submit" class="button button-a button-big button-rouded">Send Message</button>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="title-box-2 pt-4 pt-md-0">
                                <h5 class="title-left">
                                   <a href="#Home"> Learn With Rakib</a>
                                </h5>
                            </div>
                            <div class="more-info">
                                <p style="color:dodgerblue; font-weight:400" class="lead">
                                    Hello! Are You Looking For a proficient Web developer? brings a dynamic blend of creativity and precision to every project?
                                    With expertise in PHP programming? I specialize in crafting seamless and visually appealing web solutions.
                                    From intricate coding challenges to user-friendly interfaces. I am passionate about transforming digital concepts into engaging experiences.
                                    Committed to staying at the forefront of technology trends. I strive to deliver cutting-edge solutions that elevate online presence.
                                    Let's collaborate to turn your ideas into captivating web realities.

                                </p>
                                <ul style="color:deepskyblue;" class="list-ico">
                                    <li><span class="bi bi-geo-alt"></span> <a href="https://maps.app.goo.gl/BAq9AYz4hYCpzAV2A" target="_blank">Gouripur-2270, Mymensingh, Bangladesh</a> </li>
                                    <li><span class="bi bi-phone"></span> <a href="#contact" >(+88) 01618-805636</a></li>
                                    <li><span  class="bi bi-envelope"> </span> <a href="https://shorturl.at/bnMW5" target="_blank"> mail.w3web@gmail.com </a> </li>
                                </ul>
                            </div>
                            <div class="socials">
                                <a href="https://www.facebook.com/FRRABBY93"target="_blank" class="fa fa-facebook"></a>
                                <a href="https://twitter.com/rakib2270gp" target="_blank" class="fa fa-twitter"></a>
                                <a href="https://www.linkedin.com/in/rakibul-islam-b326082a1/" target="_blank" class="fa fa-linkedin"></a>
                                <a href="https://www.youtube.com/channel/UCWUIqb3qgiNoM1W0F32pUKg" target="_blank" class="fa fa-youtube"></a>
                                <a href="https://www.instagram.com/13.rakib/" target="_blank" class="fa fa-instagram"></a>
                                <a href="https://github.com/rakib2270" target="_blank" class="fa fa-github"></a>
                                <!-- <a href="#" class="fa fa-telegram"></a>
                                <a href="#" class="fa fa-skype"></a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


<!--
if (isset($_POST['send'])) {
  $name=$_POST['name'];
    $email=$_POST['email'];
    $subject=$_POST['subject'];
    $msg=$_POST['message'];

    $message='Name:<br>'.$name.'<br>'.'<hr>Email:<br>'.$email.'<br><hr>Message:<br>'.$msg;

    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'rakib2270gp@gmail.com'; //host email
    $mail->Password = 'mmvvorynnwlxretm';// app password of your host email
    $mail->Port = 465;
    $mail->SMTPSecure = 'ssl';
    $mail->isHTML(true);
    $mail->setFrom($email, $name);//Sender's Email and Name
    $mail->addAddress('rakib2270gp@gmail.com','From Contact'); //Receiver's Email and Name
    $mail->addAddress('rh458184@gmail.com', 'Hlw'); //Receiver's Email and Name
    $mail->Subject = ("$subject");
    $mail->Body = $message;
    $mail->send();

    if ($mail) {
    echo "<script>";
    echo "alert('Email Sent Successfully')";
    echo "</script>";
}else {
    echo "Email sending failed: " . $mail->ErrorInfo;
}

} -->



    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d463884.3930113939!2d90.11400733514607!3d24.723556102405393!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x37564fbe84f6cbe1%3A0x9fdd8aa3d42ccc3e!2sMymensingh%20District!5e0!3m2!1sen!2sbd!4v1701713527032!5m2!1sen!2sbd" width="1300" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
     <br> <br>
</div>
</section>

<!-- End Contact Section -->
