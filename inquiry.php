<? include("template.php");
    function main() {
?>

<!--==================== BREADCUMB SECTION START HERE ====================-->
<div class="hs_indx_title_main_wrapper">
    <div class="hs_title_img_overlay"></div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 full_width">
                <div class="hs_indx_title_left_wrapper">
                    <h1>Inquiry</h1>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 full_width">
                <div class="hs_indx_title_right_wrapper">
                    <ul>
                        <li><a href="<?=BASE_URL;?>">Home</a> &nbsp;&nbsp;&nbsp;> </li>
                        <li>Inquiry</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--==================== BREADCUMB SECTION END HERE ====================-->


<div class="hs_contact_tittle_main_wrapper footer-inq contact">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="hs_about_heading_main_wrapper">
                    <div class="hs_about_heading_wrapper">
                        <h2>Have A <span>Question?</span></h2>
                        <h4><span></span></h4>
                        <p>Inquiry For All Type Of Problems In Your Life</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12"></div>
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                <div class="hs_contact_indx_form_main_wrapper info">
                    <div class="row">
                        <form action="#!">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="hs_kd_six_sec_input_wrapper">
                                    <input type="text" id="Name" name="Name" class="require" placeholder="Name">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="hs_kd_six_sec_input_wrapper">
                                    <input type="email" id="email" name="email" class="require" placeholder="Email">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="hs_kd_six_sec_input_wrapper">
                                    <input type="text" id="Mobile" name="Mobile" class="require" placeholder="Mobile">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="hs_kd_six_sec_input_wrapper">
                                    <input type="text" id="Services" name="Services" class="require" placeholder="Services">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="hs_kd_six_sec_input_wrapper">
                                    <textarea rows="4" class="require" id="Message" name="Message" placeholder="Message"></textarea>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="hs_contact_indx_form_btn">
                                    <ul>
                                        <li>
                                            <button type="button" class="hs_btn_hover submitForm">Send a Message</button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12"></div>
        </div>
    </div>
</div>



<? } ?>