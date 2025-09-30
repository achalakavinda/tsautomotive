@extends('layout.web')

@section('content')
    <!-- Start Contact -->
    <section>
        <div class="cs_height_120 cs_height_lg_80"></div>
        <div class="container">
            <div class="row cs_gap_y_50">
                <div class="col-lg-6">
                    <div class="cs_contact_desc">
                        <h3 class="cs_fs_24 cs_mb_33">Contact Information</h3>
                        <div class="cs_contact_info_grid">
                            <div class="cs_iconbox cs_style_5">
                                <div class="cs_iconbox_icon cs_center cs_accent_bg_light cs_heading_color">
                                    <i class="fa-solid fa-phone-volume"></i>
                                </div>
                                <div class="cs_iconbox_info">
                                    <h3 class="cs_fs_18 cs_semibold cs_mb_2">Phone Number :</h3>
                                    <a href="tel:+61 (452) 497 997">+61 (452) 497 997</a><br>
                                </div>
                            </div>
                            <div class="cs_iconbox cs_style_5">
                                <div class="cs_iconbox_icon cs_center cs_accent_bg_light cs_heading_color">
                                    <i class="fa-solid fa-envelope"></i>
                                </div>
                                <div class="cs_iconbox_info">
                                    <h3 class="cs_fs_18 cs_semibold cs_mb_2">Email Address :</h3>
                                    <a href="mailTo:tsautomotive8@gmail.com">tsautomotive8@gmail.com</a><br>
                                </div>
                            </div>
                            <div class="cs_iconbox cs_style_5">
                                <div class="cs_iconbox_icon cs_center cs_accent_bg_light cs_heading_color">
                                    <i class="fa-solid fa-location-dot"></i>
                                </div>
                                <div class="cs_iconbox_info">
                                    <h3 class="cs_fs_18 cs_semibold cs_mb_2">Our Address :</h3>
                                    <p class="mb-0">UNIT 4/15 Denninup Way, <br> Malaga WA 6090</p>
                                </div>
                            </div>
                            <div class="cs_iconbox cs_style_5">
                                <div class="cs_iconbox_icon cs_center cs_accent_bg_light cs_heading_color">
                                    <i class="fa-solid fa-clock"></i>
                                </div>
                                <div class="cs_iconbox_info">
                                    <h3 class="cs_fs_18 cs_semibold cs_mb_2">Working Time :</h3>
                                    <p class="mb-0">Monday to Friday :</p>
                                    <p class="mb-0">09 Am - 05PM</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cs_height_44 cs_height_lg_30"></div>
                    <div class="cs_social_desc">
                        <h3 class="cs_fs_24 cs_semibold cs_mb_10">Follow The Social Media:</h3>
                        <p class="cs_mb_22">Algae can quickly take over a Car Repair if not addressed promptly. Learn
                            effective.</p>
                        <div class="cs_social_btns cs_style_1">
                            <a href="#" class="cs_center cs_accent_bg_light"><i
                                    class="fa-brands fa-facebook-f"></i></a>
                            <a href="#" class="cs_center cs_accent_bg_light"><i
                                    class="fa-brands fa-x-twitter"></i></a>
                            <a href="#" class="cs_center cs_accent_bg_light"><i class="fa-brands fa-whatsapp"></i></a>
                            <a href="#" class="cs_center cs_accent_bg_light"><i
                                    class="fa-brands fa-instagram"></i></a>
                            <a href="#" class="cs_center cs_accent_bg_light"><i
                                    class="fa-brands fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="cs_form_wrapper cs_style_1 cs_accent_bg_light">
                        <h3 class="cs_fs_24 cs_mb_33">Send Message</h3>
                        <form class="row cs_row_gap_30 cs_gap_y_30" method="POST" action="{{ route('lead.contact') }}">
                            @csrf
                            <div class="col-sm-6">
                                <input type="text" name="first_name" placeholder="Your Name"
                                    class="cs_form_field cs_white_bg" required>
                            </div>
                            <div class="col-sm-6">
                                <input type="email" name="email" placeholder="Email Address"
                                    class="cs_form_field cs_white_bg" required>
                            </div>
                            <div class="col-sm-12">
                                <input type="text" name="subject" placeholder="Subject"
                                    class="cs_form_field cs_white_bg">
                            </div>
                            <div class="col-sm-12">
                                <textarea name="message" rows="5" placeholder="Message" class="cs_form_field cs_white_bg"></textarea>
                            </div>
                            <div class="col-sm-12">
                                <button type="submit" class="cs_btn cs_style_1 cs_radius_5">
                                    <span>Send Message</span>
                                    <span><i class="fa-solid fa-arrow-right-long"></i></span>
                                </button>
                            </div>
                        </form>

                    </div>
                </div>


            </div>
        </div>
        <div class="cs_height_120 cs_height_lg_80"></div>
    </section>
    <!-- End Contact -->

    <!-- Start Navigation Map -->
    <div class="cs_navigation_map wow fadeInUp">
        <iframe
            src="https://www.google.com/maps/embed?pb=!3m2!1e3!4b1!4m6!3m5!1s0x2a32b1e69e8f3aa7:0xf96b78ba7d7e650f!8m2!3d-31.8513488!4d115.8871307!16s%2Fg%2F11m_lmbb3c?entry=ttu&g_ep=EgoyMDI0MTEyNC4xIKXMDSoASAFQAw%3D%3D"
            allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <!-- End Navigation Map -->
@endsection
