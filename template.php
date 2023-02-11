<?	error_reporting(0); 
	session_start();
    DEFINE ('BASE_URL','https://www.astrologerpankaj.com');
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <? include("meta-tag.php"); ?>    

    <!-- srart theme style -->
    <link rel="stylesheet" type="text/css" href="css/animate.css" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="css/font-awesome.css" />
    <link rel="stylesheet" type="text/css" href="css/fonts.css" />
    <link rel="stylesheet" type="text/css" href="css/flaticon.css" />
	<link rel="stylesheet" type="text/css" href="css/sign_flaticon.css" />
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.css" />
    <link rel="stylesheet" type="text/css" href="css/owl.theme.default.css" />
    <link rel="stylesheet" type="text/css" href="css/magnific-popup.css" />
    <link rel="stylesheet" type="text/css" href="css/reset.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" type="text/css" href="css/responsive.css" />
    <link rel="stylesheet" type="text/css" href="css/custom.css" />

    <!-- favicon links -->
    <link rel="shortcut icon" type="image/png" href="images/favicon.png" />

    <?  if(basename($_SERVER['PHP_SELF'])=='photo-gallery.php')
	{ ?>
        <!-- Add jQuery library -->
        <script type="text/javascript" src="fancybox-2.1.7/lib/jquery-1.10.2.min.js"></script>

        <!-- Add mousewheel plugin (this is optional) -->
        <script type="text/javascript" src="fancybox-2.1.7/lib/jquery.mousewheel.pack.js?v=3.1.3"></script>

        <!-- Add fancyBox main JS and CSS files -->
        <script type="text/javascript" src="fancybox-2.1.7/source/jquery.fancybox.pack.js?v=2.1.5"></script>
        <link rel="stylesheet" type="text/css" href="fancybox-2.1.7/source/jquery.fancybox.css?v=2.1.5" media="screen" />

        <!-- Add Button helper (this is optional) -->
        <link rel="stylesheet" type="text/css" href="fancybox-2.1.7/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" />
        <script type="text/javascript" src="fancybox-2.1.7/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>

        <!-- Add Thumbnail helper (this is optional) -->
        <link rel="stylesheet" type="text/css" href="fancybox-2.1.7/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" />
        <script type="text/javascript" src="fancybox-2.1.7/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>

        <!-- Add Media helper (this is optional) -->
        <script type="text/javascript" src="fancybox-2.1.7/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>

        <script type="text/javascript">
            $(document).ready(function() {
                /*
                *  Simple image gallery. Uses default settings
                */

                $('.fancybox').fancybox();

                /*
                *  Different effects
                */

                // Change title type, overlay closing speed
                $(".fancybox-effects-a").fancybox({
                    helpers: {
                        title : {
                            type : 'outside'
                        },
                        overlay : {
                            speedOut : 0
                        }
                    }
                });

                // Disable opening and closing animations, change title type
                $(".fancybox-effects-b").fancybox({
                    openEffect  : 'none',
                    closeEffect	: 'none',

                    helpers : {
                        title : {
                            type : 'over'
                        }
                    }
                });

                // Set custom style, close if clicked, change title type and overlay color
                $(".fancybox-effects-c").fancybox({
                    wrapCSS    : 'fancybox-custom',
                    closeClick : true,

                    openEffect : 'none',

                    helpers : {
                        title : {
                            type : 'inside'
                        },
                        overlay : {
                            css : {
                                'background' : 'rgba(238,238,238,0.85)'
                            }
                        }
                    }
                });

                // Remove padding, set opening and closing animations, close if clicked and disable overlay
                $(".fancybox-effects-d").fancybox({
                    padding: 0,

                    openEffect : 'elastic',
                    openSpeed  : 150,

                    closeEffect : 'elastic',
                    closeSpeed  : 150,

                    closeClick : true,

                    helpers : {
                        overlay : null
                    }
                });

                /*
                *  Button helper. Disable animations, hide close button, change title type and content
                */

                $('.fancybox-buttons').fancybox({
                    openEffect  : 'none',
                    closeEffect : 'none',

                    prevEffect : 'none',
                    nextEffect : 'none',

                    closeBtn  : false,

                    helpers : {
                        title : {
                            type : 'inside'
                        },
                        buttons	: {}
                    },

                    afterLoad : function() {
                        this.title = 'Image ' + (this.index + 1) + ' of ' + this.group.length + (this.title ? ' - ' + this.title : '');
                    }
                });


                /*
                *  Thumbnail helper. Disable animations, hide close button, arrows and slide to next gallery item if clicked
                */

                $('.fancybox-thumbs').fancybox({
                    prevEffect : 'none',
                    nextEffect : 'none',

                    closeBtn  : false,
                    arrows    : false,
                    nextClick : true,

                    helpers : {
                        thumbs : {
                            width  : 50,
                            height : 50
                        }
                    }
                });

                /*
                *  Media helper. Group items, disable animations, hide arrows, enable media and button helpers.
                */
                $('.fancybox-media')
                    .attr('rel', 'media-gallery')
                    .fancybox({
                        openEffect : 'none',
                        closeEffect : 'none',
                        prevEffect : 'none',
                        nextEffect : 'none',

                        arrows : false,
                        helpers : {
                            media : {},
                            buttons : {}
                        }
                    });

                /*
                *  Open manually
                */

                $("#fancybox-manual-a").click(function() {
                    $.fancybox.open('1_b.jpg');
                });

                $("#fancybox-manual-b").click(function() {
                    $.fancybox.open({
                        href : 'iframe.html',
                        type : 'iframe',
                        padding : 5
                    });
                });

                $("#fancybox-manual-c").click(function() {
                    $.fancybox.open([
                        {
                            href : '1_b.jpg',
                            title : 'My title'
                        }, {
                            href : '2_b.jpg',
                            title : '2nd title'
                        }, {
                            href : '3_b.jpg'
                        }
                    ], {
                        helpers : {
                            thumbs : {
                                width: 75,
                                height: 50
                            }
                        }
                    });
                });


            });
        </script>
        <style type="text/css">
            .fancybox-custom .fancybox-skin {
                box-shadow: 0 0 50px #222;
            }
        </style>

    <? } ?>

</head>

<body>   

    <!--==================== Header Section Start Here ====================-->
    <div class="hs_top_header_main_Wrapper">
        <div class="container-fluid">
            <div class="middle-area">
                <!-- <div class="hs_header_logo_left hidden-xs"> -->
                <div class="hs_header_logo_left">
                    <div class="hs_logo_wrapper">
                        <a href="<?=BASE_URL;?>"><img src="images/logo.png" class="img-responsive" alt="logo" title="Logo"/></a>
                    </div>
                </div>
                <div class="hs_header_logo_right">
                    <div class="hs_btn_wrapper hidden-xs">
                        <ul><li><a href="tel:+917600223531" class="hs_btn_hover">Talk to Astrologer</a></li></ul>
                    </div>
                    <div class="hs_header_add_wrapper hidden-xs hidden-sm">
                        <div class="hs_header_add_icon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="hs_header_add_icon_cont">
                            <h5>Call Us</h5>
                            <p><a href="tel:+917600223531">+91 76002 23531</a></p>
                        </div>
                    </div>
                    <div class="hs_header_add_wrapper hidden-xs hidden-sm">
                        <div class="hs_header_add_icon">
                            <i class="fa fa-envelope"></i>
                        </div>
                        <div class="hs_header_add_icon_cont">
                            <h5>Email Us</h5>
                            <p><a href="mailto:info@astrologerpankaj.com">info@astrologerpankaj.com</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="hs_navigation_header_wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <nav class="hs_main_menu hidden-xs">
                        <? include("topmenu.php"); ?>
                    </nav>
                    <header class="mobail_menu visible-xs">
                        <div class="container-fluid">
                            <div class="row middle-area">
                                <div class="col-xs-6 col-sm-6">
                                    <div class="hs_btn_wrapper">
                                        <ul>
                                            <li><a href="tel:+917600223531" class="hs_btn_hover">Talk to Astrologer</a></li>
                                        </ul>
                                    </div>
                                    <div class="hs_logo hidden-xs">
                                        <a href="<?=BASE_URL;?>"><img src="images/logo.png" alt="Logo" title="Logo"></a>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6">
                                    <div class="cd-dropdown-wrapper">
                                        <a class="house_toggle" href="#0">
                                            <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="511.63px" height="511.631px" viewBox="0 0 511.63 511.631" style="enable-background:new 0 0 511.63 511.631;" xml:space="preserve">
                                                <g>
                                                    <g>
                                                        <path d="M493.356,274.088H18.274c-4.952,0-9.233,1.811-12.851,5.428C1.809,283.129,0,287.417,0,292.362v36.545
                                                            c0,4.948,1.809,9.236,5.424,12.847c3.621,3.617,7.904,5.432,12.851,5.432h475.082c4.944,0,9.232-1.814,12.85-5.432
                                                            c3.614-3.61,5.425-7.898,5.425-12.847v-36.545c0-4.945-1.811-9.233-5.425-12.847C502.588,275.895,498.3,274.088,493.356,274.088z"
                                                            />
                                                        <path d="M493.356,383.721H18.274c-4.952,0-9.233,1.81-12.851,5.427C1.809,392.762,0,397.046,0,401.994v36.546
                                                            c0,4.948,1.809,9.232,5.424,12.854c3.621,3.61,7.904,5.421,12.851,5.421h475.082c4.944,0,9.232-1.811,12.85-5.421
                                                            c3.614-3.621,5.425-7.905,5.425-12.854v-36.546c0-4.948-1.811-9.232-5.425-12.847C502.588,385.53,498.3,383.721,493.356,383.721z"
                                                            />
                                                        <path d="M506.206,60.241c-3.617-3.612-7.905-5.424-12.85-5.424H18.274c-4.952,0-9.233,1.812-12.851,5.424
                                                            C1.809,63.858,0,68.143,0,73.091v36.547c0,4.948,1.809,9.229,5.424,12.847c3.621,3.616,7.904,5.424,12.851,5.424h475.082
                                                            c4.944,0,9.232-1.809,12.85-5.424c3.614-3.617,5.425-7.898,5.425-12.847V73.091C511.63,68.143,509.82,63.861,506.206,60.241z"/>
                                                        <path d="M493.356,164.456H18.274c-4.952,0-9.233,1.807-12.851,5.424C1.809,173.495,0,177.778,0,182.727v36.547
                                                            c0,4.947,1.809,9.233,5.424,12.845c3.621,3.617,7.904,5.429,12.851,5.429h475.082c4.944,0,9.232-1.812,12.85-5.429
                                                            c3.614-3.612,5.425-7.898,5.425-12.845v-36.547c0-4.952-1.811-9.231-5.425-12.847C502.588,166.263,498.3,164.456,493.356,164.456z
                                                            "/>
                                                    </g>
                                                </g>
                                                <g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
                                            </svg>
                                        </a>
                                        <nav class="cd-dropdown">
                                            <a href="#0" class="cd-close">Close</a>
                                            <? include("mobilemenu.php"); ?>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </header>
                </div>
            </div>
        </div>
    </div>
    <!--==================== Header Section End Here ====================-->

    <? main(); ?>

    <?  if(basename($_SERVER['PHP_SELF'])!='inquiry.php')
	{ ?>
    <!--==================== Contact Us Section Start Here ====================-->
    <div class="hs_contact_tittle_main_wrapper footer-inq contact">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="hs_about_heading_main_wrapper">
                        <div class="hs_about_heading_wrapper">
                            <h2>IN JUST ONE PHONE CALL <span>CAN SOLVE YOUR LIFE ISSUES...</span></h2>
                            <h4><span></span></h4>
                            <p>Inquiry For All Type Of Problems In Your Life</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="info">	
                        <div class="address">
                            <i class="fa fa-location-arrow"></i>
                            <h4>Location:</h4>
                            <p>Ahmedabad, Gujarat, India.</p>
                        </div>
                        <div class="email">
                            <i class="fa fa-envelope"></i>
                            <h4>Email:</h4>
                            <p><a href="mailto:info@astrologerpankaj.com">info@astrologerpankaj.com</a></p>
                        </div>
                        <div class="phone">
                            <i class="fa fa-phone"></i>
                            <h4>Call:</h4>
                            <p><a href="tel:+917600223531">+91 76002 23531</a></p>
                        </div>
                        <div class="phone">
                            <i class="fa fa-whatsapp"></i>
                            <h4>Whatsapp:</h4>
                            <p><a href="tel:+917600223531">+91 76002 23531</a></p>
                        </div>
                    </div>
                </div>
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
            </div>
        </div>
    </div>
    <!--==================== Contact Us Section End Here ====================-->
    <? } ?>

    <!--==================== Footer Section Start Here ====================-->
    <div class="hs_footer_main_wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="hs_footer_logo_wrapper">
                        <img src="images/logo.png" alt="footer_logo" class="img-responsive img-thumbnail" />
                        <ul>
                            <li>
                                <a href="#">
                                    <i class="fa fa-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-instagram"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://api.whatsapp.com/send?phone=+917600223531&amp;text=hello" target="_blank">
                                    <i class="fa fa-whatsapp"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                    <div class="hs_footer_help_wrapper">
                        <h2>Quick <span>Link</span></h2>
                        <div class="footer-list">
                            <ul>
                                <li><a href="<?=BASE_URL;?>">Home </a></li>
                                <li><a href="aboutus">About Us </a></li>
                                <li><a href="photo-gallery">Photo Gallery </a></li>
                                <li><a href="video-gallery">Video Gallery </a></li>
                                <li><a href="inquiry">Inquiry </a></li>
                                <li><a href="contactus">Contact Us </a></li>
                                <li><a href="privacy-policy">Privacy Policy </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <div class="hs_footer_help_wrapper">
                        <h2>Our <span>Services</span></h2>
                        <div class="footer-list">
                            <ul>
                                <li><a href="horoscope-reading">Horoscope Reading</a></li>
                                <li><a href="face-reading">Face Reading</a></li>
                                <li><a href="best-astrologer-in-india">Best Astrologer in India</a></li>
                                <li><a href="best-tantrik-baba-in-india">Best Tantrik Baba in India</a></li>
                                <li><a href="husband-wife-dispute">Husband Wife Dispute</a></li>
                                <li><a href="divorce-problem-solution">Divorce Problem Solution</a></li>
                                <li><a href="family-dispute-resolution">Family Dispute Resolution</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <div class="hs_footer_help_wrapper">
                        <h2>Love <span>Problems</span></h2>
                        <div class="footer-list">
                            <ul>
                                <li><a href="love-problem-solution">Love Problem Solution</a></li>
                                <li><a href="love-breakup-solution">Love Breakup Solution</a></li>
                                <li><a href="love-problem-specialist">Love Problem Specialist</a></li>
                                <li><a href="love-astrologer">Love Astrologer</a></li>
                                <li><a href="relationship-problem">Relationship Problem</a></li>
                                <li><a href="get-your-ex-love-back">Get Your Ex Love Back</a></li>
                                <li><a href="love-marriage-astrology">Love Marriage Astrology</a></li>
                                <li><a href="marriage-problem">Marriage Problem</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="hs_bottom_footer_main_wrapper">
        <a href="javascript:" id="return-to-top"><i class="fa fa-angle-up"></i></a>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="footer_bottom_cont_wrapper">
                        <p>Copyright &copy; <?=date('Y');?> ASTROLOGER PANKAJ | All Rights Reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--==================== Footer Section End Here  ====================-->

    <div class="phone quick-alo-phone">
        <a href="tel:+917600223531">
            <div class="quick-alo-ph-circle"></div>
            <div class="quick-alo-ph-circle-fill"></div>
            <div class="quick-alo-ph-img-circle"></div>
        </a>
    </div>

    <a href="https://api.whatsapp.com/send?phone=+917600223531&amp;text=hello" id="hovit" target="_blank">
        <img src="images/stikyw.png" alt="" style="" />
    </a>

    <!--main js file start-->
    <?  if(basename($_SERVER['PHP_SELF'])!='photo-gallery.php')
	{ ?>
        <script src="js/jquery_min.js"></script>
    <? } ?>
    
    <script src="js/bootstrap.js"></script>
    <script src="js/modernizr.js"></script>
    <script src="js/jquery.menu-aim.js"></script>
    <script src="js/parallax.min.js"></script>
    <script src="js/owl.carousel.js"></script>
    <script src="js/jquery.shuffle.min.js"></script>
    <script src="js/jquery.countTo.js"></script>
    <script src="js/jquery.inview.min.js"></script>
    <script src="js/jquery.magnific-popup.js"></script>
    <script src="js/custom.js"></script>
    <!--main js file end-->

    

</body>

</html>



        