@extends('Layout.app')
@section('content')
    <section class="Social_Media" id="Contact_me">
        <div class="Social_Media_header text-center pt-5">
            <h1>Connect With Me In Social Media</h1>
            <p>
                Here I Show All My Social Media Links, You Can Follow Me <br /> On All Social Media
            </p>
        </div>
        <div class="Social_Media_slyder container pt-5">
            <div class="owl-carousel owl-theme">
                <div class="item row gx-5 py-5">
                    <a href="https://www.facebook.com/koushiknag.shuvo" class="col-12 col-md-4 d-flex align-items-center">
                        <img class="img-fluid" src="./images/icon/f.svg" alt="p1" srcset="" />
                        <h5 class="d-flex">
                            Facebook <i class="bx bx-right-arrow-alt"></i>
                        </h5>
                    </a>
                    <p>Contact With Me On Facebook Send Me Massage Anytime</p>
                </div>
                <div class="item row gx-5 py-5">
                    <a href="https://www.facebook.com/koushiknag.shuvo" class="col-12 col-md-4 d-flex align-items-center">
                        <img class="img-fluid" src="./images/icon/ma.svg" alt="p1" srcset="" />
                        <h5 class="d-flex">
                            Messenger <i class="bx bx-right-arrow-alt"></i>
                        </h5>
                    </a>
                    <p>You can Send Me Massage on Messenger Anytime</p>
                </div>
                <div class="item row gx-5 py-5">
                    <a href="https://www.linkedin.com/in/koushik-nag-shuvo-bb46a4196/"
                        class="col-12 col-md-4 d-flex align-items-center">
                        <img class="img-fluid" src="./images/icon/in.svg" alt="p1" srcset="" />
                        <h5 class="d-flex">
                            Linkedin <i class="bx bx-right-arrow-alt"></i>
                        </h5>
                    </a>
                    <p>Contact With Me On linkedin Send Me Massage Anytime</p>
                </div>
                <div class="item row gx-5 py-5">
                    <a href="" class="col-12 col-md-4 d-flex align-items-center">
                        <img class="img-fluid" src="./images/icon/w.svg" alt="p1" srcset="" />
                        <h5 class="d-flex">
                            Whatsapp <i class="bx bx-right-arrow-alt"></i>
                        </h5>
                    </a>
                    <p>You can Send Me Massage on Whatsapp Anytime</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Social Media Secton End -->
    <!--  Contact Form  Section Start-->

    <section class="Contact_me container pt-5">
        <div class="Contact_Form_header text-center pt-5">
            <h1>Wanna Discuss Your Project With Me</h1>
            <p>
                If You Have Any Question Or Want To Contact Me, <br> You Can Contact Me Here
            </p>
        </div>
        <div class="Contact_Form_slyder container py-5 my-5">
            <div class="row">
                <div class="col-12 col-md-6">
                    <p id="map"><iframe id="googleMap"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.752891584819!2d90.37338351478422!3d23.756189784586603!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8aca568828b%3A0xe190915b6958a57!2sDhanmondi%2027%20No%20Bus%20Stop!5e0!3m2!1sen!2sbd!4v1648838883772!5m2!1sen!2sbd"
                            width="600" height="400" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe></p>
                </div>
                <div class="col-12 col-md-6">
                    <div class="Contact_Form_slyder_Right">
                        <form action="">
                            <div class="form-group">
                                <!-- <label for="">Name</label> -->
                                <input type="text" class="form-control" id="toName" placeholder="Enter your Name " />
                            </div>
                            <div class="form-group">
                                <!-- <label for="">Email</label> -->
                                <input type="email" class="form-control" id="formName" placeholder="Enter your Email " />
                            </div>
                            <div class="form-group">
                                <!-- <label for="">Message</label> -->
                                <textarea class="form-control" id="msg" rows="3" placeholder="Write your message "></textarea>
                            </div>
                            <button type="submit" id="SendMail" class="btn btn-primary" onclick="sendMail()">
                                Send Message
                            </button>
                        </form>
                    </div>
                </div>
    </section>
@endsection
