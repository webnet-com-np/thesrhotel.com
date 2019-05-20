<?php
if (!defined("FOOTER_LOADED")):
define("FOOTER_LOADED" , TRUE);

?>
<div class="footer-nav">
    <div class="container">

        <div class="row footer-copyright-wrapper">
            <div class="col-xs-12">
                <a href="#wrapper" class="go-top">
                    <span class="glyphicon glyphicon-menu-up" aria-hidden="true"></span>
                </a>
                <strong class="logo "><a href=""><img src="{{BASE_URL}}/assets/images/footer-logo.png" alt="Hotel"></a></strong>

                <!-- footer navigation -->
                <nav class="f-nav col-md-4 col-sm-4 col-xs-6">
                    <ul class="nav navbar-left">
                        <li><a href="/">HOME</a></li>
                        <li><a href="/about-us/">ABOUT US</a></li>
                        <li><a href="/">rooms</a></li>
                        <li><a href="/conference-room/">conference room</a>
                        </li>
                        <li><a href="/next-inline/">next inline</a></li>
                        <li><a href="/restaurant/">restaurant</a></li>
                        <li><a href="/contact/">contact</a></li>
                    </ul>

                </nav>
                <div class="col-md-4 col-sm-4 col-xs-6">

                    <div class="sr-hotel-address">
                        <div class="address-detail icon-location">
                            <span class="address-info">Shankar Tower,Drivertole,<br>Tilottama-1,  Rupandehi,Nepal</span>
                        </div>
                        <div class="contact-detail icon-phone">
                            <a href="tel:071561263">
                                <span class="contact-info">+977-71-561263/ 561264, <br>+977 9851118056,9857032539</span></a>
                        </div>
                        <div class="mail-detail icon-paperplane">
                            <a href="mailto:thesrhotel@gmail.com"><span class="mail-info">thesrhotel@gmail.com</span></a>
                        </div>

                    </div>
                </div>
                <div class="newsletter-form col-md-4 col-sm-4 col-xs-6">
                    <h3>Newsletter</h3>
                    <input type="email" placeholder="Your email">
                    <button class="btn btn-default">Subscribe</button>
                    <div class="social-media">
                        <ul class="list-inline social-networks">
                            <li><a href="#"><span class="icon-facebook"></span></a>
                            </li>
                            <li>
                                <a href="#"><span class="icon-twitter"></span></a>
                            </li>
                            <li>
                                <a href="#"><span class="icon-youtube"></span></a>
                            </li>
                            <li><a href="#"><span class="icon-instagram"></span></a>
                            </li>
                            <li>
                                <a href="#"><span class="icon-google"></span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<footer id="footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <p>&copy;
                    <a href="#" class="">The SR hotel</a>. All rights reserved. Designed by
                    <a href="https://webnet.com.np" class="webnet-color">Web Networks</a>
                </p>
            </div>

        </div>
    </div>
</footer>
<?php  endif;?>
