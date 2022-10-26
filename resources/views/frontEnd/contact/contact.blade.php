@extends('frontEnd.master')

@section('title')
    Contact Us
@endsection

@section('content')
    <!--Breadcrumb Banner Area Start-->
    <div class="breadcrumb-banner-area pt-94 pb-85 bg-3">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb-text">
                        <h2 class="text-center">Contact Us</h2>
                        <div class="breadcrumb-bar">
                            <ul class="breadcrumb text-center m-0">
                                <li><a href="index.html">Home</a></li>
                                <li>Contact Us</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End of Breadcrumb Banner Area-->
    <!--Start of Google Map-->
    <div class="map-conact-form-area fix ptb-130 ptb-sm-60">
        <div class="container">
            <div class="google-map-area">
                <!--  Map Section -->
                <div id="contacts" class="map-area">
                    <div id="googleMap">
                        <iframe style="width:100%; height:485px;" src="https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d29218.54933561594!2d90.38173928800269!3d23.736013149731747!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e6!4m5!1s0x3755b8acae265acf%3A0xb8960af792228384!2sDhanmondi%2027%2C%20Dhaka%201205!3m2!1d23.756151!2d90.375233!4m3!3m2!1d23.716210999999998!2d90.418854!5e0!3m2!1sen!2sbd!4v1666619802960!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
        <!--Start of Contact Form And info-->
        <div class="container">
            <div class="gray-bg">
                <div class="row g-0 mt-5">
                    <div class="col-md-4">
                        <div class="contact-info-wrapper d-flex justify-content-center flex-column light-gray-bg">
                            <div class="contact-info-box">
                                <div class="contact-info text-center">
                                    <div class="single-contact-info">
                                        <div class="single-contact-icon">
                                            <i class="zmdi zmdi-email"></i>
                                        </div>
                                        <div class="single-contact-text">
                                            <span class="block">info@example.com</span>
                                            <span class="block">info@example.com</span>
                                        </div>
                                    </div>
                                    <div class="single-contact-info">
                                        <div class="single-contact-icon">
                                            <i class="zmdi zmdi-phone"></i>
                                        </div>
                                        <div class="single-contact-text">
                                            <span class="block">+012 345 678 102 </span>
                                            <span class="block">+013 345 628 112 </span>
                                        </div>
                                    </div>
                                    <div class="single-contact-info">
                                        <div class="single-contact-icon">
                                            <i class="zmdi zmdi-pin"></i>
                                        </div>
                                        <div class="single-contact-text">
                                            <span class="block">House 09, Road 32, Mohammadpur,</span>
                                            <span class="block">Dhaka-1200, UK</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="followus">
                                    <h4>Follow Us</h4>
                                    <div class="social-links">
                                        <a href="#"><i class="zmdi zmdi-facebook"></i></a>
                                        <a href="#"><i class="zmdi zmdi-rss"></i></a>
                                        <a href="#"><i class="zmdi zmdi-google-plus"></i></a>
                                        <a href="#"><i class="zmdi zmdi-pinterest"></i></a>
                                        <a href="#"><i class="zmdi zmdi-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="contact-form">
                            <div class="contact-form-wrapper">
                                <h4>Get In Touch</h4>
                                <form id="contact-form" action="https://htmldemo.net/jobhere/jobhere-v1/mail.php" method="post">
                                    <div class="row">
                                        <div class="col-6">
                                            <input type="text" name="name" id="name" class="pl-20" placeholder="Name">
                                        </div>
                                        <div class="col-6">
                                            <input type="text" name="email" id="email" class="pl-20" placeholder="Email">
                                        </div>
                                        <div class="col-12">
                                            <input type="text" name="text" id="sub" class="pl-20" placeholder="Subject">
                                        </div>
                                        <div class="col-12">
                                            <textarea name="message" id="message" cols="30" rows="10" placeholder="Message" class="mb-10"></textarea>
                                        </div>
                                        <p class="form-messege"></p>
                                        <div class="col-12">
                                            <button type="submit" class="button submit-btn">SUBMIT</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End of Google Map-->
    <!--End of Contact Form ANd info-->
@endsection
