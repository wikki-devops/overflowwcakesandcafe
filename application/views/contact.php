<?php $this->load->view('widget/breadcums'); ?>
<div class="space">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 own-css" style="padding: 0px 80px;">
                <div class="contact-map">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15629.032466441759!2d78.1625152!3d11.6761106!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3babf10882c65a75%3A0xa81e10d969d0e9a1!2sOverFloww%20Cakes%26Cafe!5e0!3m2!1sen!2sin!4v1711539052827!5m2!1sen!2sin"
                        width="400" height="400" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 own-css" style="padding: 0px 80px;">
                <div class="contact-map">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15629.049958140648!2d78.12706158715821!3d11.6758003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3babf13b43be3d61%3A0x37b51f63ae21d713!2sOverFloww%20Cakes%26Cafe!5e0!3m2!1sen!2sin!4v1713782877022!5m2!1sen!2sin"
                        width="400" height="400" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="" data-sec-pos="bottom-half">
    <div class="container">
        <div class="row gy-4">
            <div class="col-lg-4">
                <div class="contact-info">
                    <div class="contact-info_icon"><i class="fal fa-phone"></i></div>
                    <h4 class="contact-info_title box-title">Phone</h4>
                    <p><span class="contact-info_text"><a href="tel:+91 9994713337">+91 99947 13337</a></span></p>
                    <p><span class="contact-info_text"><a href="tel:+91 9994083900">+91 99940 83900</a></span></p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="contact-info">
                    <div class="contact-info_icon"><i class="fal fa-location-dot"></i></div>
                    <h4 class="contact-info_title box-title">Location</h4>
                    <p>
                        <span class="contact-info_text">
                            No 5, Murugan Kovil, Mandapam,<br>Fairlands, Salem - 636016
                        </span>
                    </p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="contact-info">
                    <div class="contact-info_icon"><i class="fal fa-location-dot"></i></div>
                    <h4 class="contact-info_title box-title">Location</h4>
                    <p>
                        <span class="contact-info_text">
                            No 55, Kannankurichi Main Rd,<br>Hasthampatti, Salem - 636007.
                        </span>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="space bg-smoke2" id="contactFormSec">
    <div class="container space" style="padding-top: 120px !important">
        <form action="" method="POST" class="contact-form ajax-contact">
            <h3 class="form-title">For Bulk Order</h3>
            <div class="row">
                <div class="form-group col-md-6"><input type="text" class="form-control" name="name" id="name"
                        placeholder="Your Name" /> <i class="fal fa-user"></i></div>
                <div class="form-group col-md-6"><input type="email" class="form-control" name="email" id="email"
                        placeholder="Email Address" /> <i class="fal fa-envelope"></i></div>
                <div class="form-group col-md-6"><input type="tel" class="form-control" name="number" id="number"
                        placeholder="Phone Number" /> <i class="fal fa-phone"></i></div>
                <div class="form-group col-md-6">
                    <select name="subject" id="subject" class="form-select">
                        <option value="" disabled="disabled" selected="selected" hidden>Select Service</option>
                        <option value="Reservation For Birthday">Reservation For Birthday</option>
                        <option value="Book A Table">Book A Table</option>
                        <option value="Food Pre-order">Food Pre-order</option>
                        <option value="Request a Quote">Request a Quote</option>
                    </select>
                    <i class="fal fa-chevron-down"></i>
                </div>
                <div class="form-group col-12"><textarea name="message" id="message" cols="30" rows="3"
                        class="form-control" placeholder="Your Message"></textarea> <i class="fal fa-comment"></i></div>
                <div class="form-btn text-center col-12"><button class="th-btn">Submit Message</button></div>
            </div>
            <p class="form-messages mb-0 mt-3"></p>
        </form>
    </div>
    <?php $this->load->view('widget/cta');?>
</section>