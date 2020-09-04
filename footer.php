<?php
    global $myplugin;
    $optionTheme  = $myplugin->themeSettings->getSettings();
?>
<a href="#" class="cta-footer">
    <div>
        <h2>Get a free quote for your project. Click here.</h2>
    </div>
</a>
<footer id="footer" class="footer-dark">
        <div class="main-footer">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-3 show-on-mobile widget-footer">
                        <div class="widget-container">
                            <h4 class="footer-header">About us</h4>
                            <div class="textwidget">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-3 hide-on-mobile widget-footer">
                        <div class="widget-container">
                            <h4 class="footer-header">About us</h4>
                            <div class="menu-about-us-container">
                                <ul id="menu-about-us" class="menu">
                                    <li id="menu-item-8584" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-8584"><a href="https://www.demo.themicart.com/interico-wp/about-us/">About us</a></li>
                                    <li id="menu-item-8566" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-8566"><a href="https://www.demo.themicart.com/interico-wp/about-us/our-team/">Our team</a></li>
                                    <li id="menu-item-10774" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-10774"><a href="https://www.demo.themicart.com/interico-wp/testimonials/">Testimonials</a></li>
                                    <li id="menu-item-8565" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-8565"><a href="https://www.demo.themicart.com/interico-wp/about-us/left-sidebar-page/">Left sidebar page</a></li>
                                    <li id="menu-item-8567" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-8567"><a href="https://www.demo.themicart.com/interico-wp/about-us/right-sidebar-page/">Right sidebar page</a></li>
                                    <li id="menu-item-10773" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-10773"><a href="https://www.demo.themicart.com/interico-wp/shortcodes/">Shortcodes</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-3 hide-on-mobile widget-footer">
                        <div class="widget-container">
                            <h4 class="footer-header">Services</h4>
                            <div class="menu-services-container">
                                <ul id="menu-services" class="menu">
                                    <li id="menu-item-10781" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-10781"><a href="https://www.demo.themicart.com/interico-wp/services/architecture/">Architecture</a></li>
                                    <li id="menu-item-10782" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-10782"><a href="https://www.demo.themicart.com/interico-wp/services/decorating/">Decorating</a></li>
                                    <li id="menu-item-10783" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-10783"><a href="https://www.demo.themicart.com/interico-wp/services/floor-planning/">Floor Planning</a></li>
                                    <li id="menu-item-10784" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-10784"><a href="https://www.demo.themicart.com/interico-wp/services/interior-design/">Interior Design</a></li>
                                    <li id="menu-item-10785" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-10785"><a href="https://www.demo.themicart.com/interico-wp/services/led-lighting/">LED Lighting</a></li>
                                    <li id="menu-item-10786" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-10786"><a href="https://www.demo.themicart.com/interico-wp/services/lighting-installation/">Lighting Installation</a></li>
                                    <li id="menu-item-8561" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-8561"><a href="https://www.demo.themicart.com/interico-wp/services/">All Services</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-3 show-on-mobile widget-footer">
                        <div class="widget-container">
                            <h4 class="footer-header">Contact us</h4>
                            <div class="textwidget">
                                Phone: +1 (378) 400-1234
                                <hr>
                                Email: contact@interico.com
                                <hr>
                                Address: 114 Margaret Street, Canada
                                <hr>
                                <a href="#" class="btn btn-primary arrow-right"><span>Contact us</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <div class="container-fluid" id="footer-bot">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="footer-logo-box">
                        <img id="footer-logo" src="<?php echo !empty($optionTheme['awe_footer_logo']) ? esc_url($optionTheme['awe_footer_logo']) : '' ?>" alt="Interico">
                        <span class="copyright-text"><?php echo !empty($optionTheme['awe_footer_copyright']) ? $optionTheme['awe_footer_copyright'] : '' ?></span>
                    </div>
                </div>
                <div class="col-md-6">
                    <ul class="social">
                        <li><a target="_blank" href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<?php wp_footer() ?>
<script type='text/javascript'>
    var wpcf7 = {
        "apiSettings":{
            "root":"https:\/\/www.demo.themicart.com\/interico-wp\/wp-json\/contact-form-7\/v1","namespace":"contact-form-7\/v1"
        }
    };
</script>
<script type='text/javascript'>
    var panelsStyles = {
        "fullContainer":"body"
    };
</script>
<script type="text/javascript">
    document.body.className = document.body.className.replace("siteorigin-panels-before-js","");
</script>
</body>
</html>