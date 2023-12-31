<section id="contact" class="parallax-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <div class="contact-form">
                    <div class="wow fadeInUp section-title" data-wow-delay="0.2s">
                        <h1 class="color-white">Say hello..</h1>
                    </div>
                    <div id="contact-form">
                    <form id="message" action="/store_message" method="POST" enctype="multipart/form-data">
                    @csrf
                            <div class="wow fadeInUp" data-wow-delay="1s">
                                <input name="name" type="text" class="form-control" id="name" placeholder="Your Name">
                            </div>
                            <div class="wow fadeInUp" data-wow-delay="1.2s">
                                <input name="email" type="email" class="form-control" id="email" placeholder="Your Email">
                            </div>
                            <div class="wow fadeInUp" data-wow-delay="1.4s">
                                <textarea name="message" rows="5" class="form-control" id="message" placeholder="Write your message..."></textarea>
                            </div>
                            <div class="wow fadeInUp col-md-6 col-sm-8" data-wow-delay="1.6s">
                                <input name="submit" type="submit" class="form-control" id="submit" value="Send">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="background-image contact-img"></div>
            </div>
            <div class="bg-dark col-md-3 col-sm-6">
                <div class="contact-thumb">
                    <div class="wow fadeInUp contact-info" data-wow-delay="0.6s">
                        <h3 class="color-white">Address</h3>
                        <p>Kampala Uganda</p>
                    </div>
                    <div class="wow fadeInUp contact-info" data-wow-delay="0.8s">
                        <h3 class="color-white">Contact.</h3>
                        <p><i class="fa fa-phone"></i> +256 701611496</p>
                        <p><i class="fa fa-envelope-o"></i> <a href="mailto:hello@company.co">nantegeleticialule@gmail.com</a></p>
                        <p><i class="fa fa-globe"></i> <a href="#">Shyne Designs</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
