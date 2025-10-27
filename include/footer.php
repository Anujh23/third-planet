<!-- Footer Section Start Here -->
<footer id="footer" class="second-footer" style="padding:30px 0 0 0; margin-bottom:0;">
    <div class="container">
        <div class="row">

            <!-- Quick Links Column -->
            <div class="col-xs-12 col-sm-2 footer-nav">
                <h6 style="color:#000000; font-size:14px; margin-bottom:15px; font-weight:600; text-transform:uppercase;">Quick Links</h6>
                <nav>
                    <ul style="font-size:13px; line-height:2;">
                        <li><a href="<?=$urlroot;?>aboutus.php" style="color:#e8e8e8; transition:color 0.3s;">About Us</a></li>
                        <li><a href="<?=$urlroot;?>our-presence.php" style="color:#e8e8e8; transition:color 0.3s;">Our Presence</a></li>
                        <li><a href="<?=$urlroot;?>#our-partners" style="color:#e8e8e8; transition:color 0.3s;">Partners</a></li>
                        <li><a href="<?=$urlroot;?>contactus.php" style="color:#e8e8e8; transition:color 0.3s;">Contact Us</a></li>
                    </ul>
                </nav>
            </div>

            <!-- Contact Info Column -->
            <div class="col-xs-12 col-sm-4">
                <h6 style="color:#000000; font-size:14px; margin-bottom:15px; font-weight:600; text-transform:uppercase;">Contact Us</h6>
                <p style="margin-bottom:12px; font-size:13px; line-height:1.6; color:#fff;">
                    <strong style="color:#fff; font-size:14px;">Third Planet Foundation</strong>
                </p>
                <p style="margin-bottom:10px; font-size:13px; line-height:1.6; color:#e8e8e8;">
                    <i class="fa fa-map-marker" style="margin-right:10px; color:#000000; width:15px; display:inline-block;"></i>
                    Centrum Mall Office No.2, 1st Floor Sultanpur, Mg Road New Delhi 110030, India
                </p>
                <p style="margin-bottom:10px; font-size:13px; color:#e8e8e8;">
                    <i class="fa fa-phone" style="margin-right:10px; color:#000000; width:15px; display:inline-block;"></i>
                    <?=$socialdata['googleplus'];?>
                </p>
                <p style="margin-bottom:10px; font-size:13px; color:#e8e8e8;">
                    <i class="fa fa-envelope" style="margin-right:10px; color:#000000; width:15px; display:inline-block;"></i>
                    <a href="mailto:<?=$socialdata['email'];?>" style="color:#fff; text-decoration:none; border-bottom:1px solid #f7941d;"><?=$socialdata['email'];?></a>
                </p>
            </div>

            <!-- MAP location -->
            <div class="col-xs-12 col-sm-6">
                <h6 style="color:#000000; font-size:14px; margin-bottom:15px; font-weight:600;">OUR LOCATION</h6>
                <div style="position:relative; overflow:hidden; border-radius:8px; box-shadow:0 2px 8px rgba(0,0,0,0.15);">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3502.5053991670646!2d77.15700521506834!3d28.49786381479867!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d1e5cac5fed13%3A0xf56206e6c5cfa99f!2sThe%20Centrum%20Mall%20Office%20No.2%2C%201st%20Floor%20Sultanpur%2C%20Mg%20Road%2C%20New%20Delhi%2C%20Delhi%20110030%2C%20India!5e0!3m2!1sen!2sin!4v1685471000000!5m2!1sen!2sin" 
                        width="100%" 
                        height="180" 
                        style="border:0; display:block;" 
                        allowfullscreen="" 
                        loading="lazy" 
                        referrerpolicy="no-referrer-when-downgrade"
                        tabindex="0">
                    </iframe>
                </div>
            </div>

        </div>
    </div>

	<div class="copyright" style="padding:12px 0 !important; margin:0 !important; margin-top:20px !important;">
        <div class="container">
            <div class="row">
                <div class="col-xs-6">
                    <span style="color:#FFF; font-size:13px;">&copy; <?=date('Y');?> Third Planet Foundation All Rights Reserved.</span>
                </div>
                <div class="col-xs-6" style="text-align:right;">
                    <span style="font-size:13px;"><a style="color:#ffffff;" href="<?=$urlroot;?>terms-conditions.php">Terms Conditions</a>&nbsp;&nbsp;</span>
                    <span style="font-size:13px;"><a style="color:#ffffff;" href="<?=$urlroot;?>disclaimer.php">Disclaimer</a>&nbsp;&nbsp;</span>
                    <span style="font-size:13px;"><a style="color:#ffffff;" href="<?=$urlroot;?>privacy-policy.php">Privacy Policy</a></span>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer Section End Here -->

<!-- Join Now Form Popup -->
<!-- <div class="modal join-now-form">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <header class="page-header"><h2>Become a <strong>Volunteer</strong></h2></header>
            </div>
            <div class="modal-body">
                <form role="form">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="form-group col-xs-12 col-sm-6">
                                <label for="name-join">Name<span>*</span></label>
                                <input type="text" class="form-control" id="name-join">
                            </div>
                            <div class="form-group col-xs-12 col-sm-6">
                                <label for="last-name-join">Last Name<span>*</span></label>
                                <input type="text" class="form-control" id="last-name-join">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="form-group col-xs-12 col-sm-6">
                                <label for="email-join">Email<span>*</span></label>
                                <input type="text" class="form-control" id="email-join">
                            </div>
                            <div class="form-group col-xs-12 col-sm-6">
                                <label for="phone-join">Phone<span>*</span></label>
                                <input type="text" class="form-control" id="phone-join">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="form-group col-xs-12 col-sm-6">
                                <label for="zip-code-join">ZIP code<span>*</span></label>
                                <input type="password" class="form-control" id="zip-code-join">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="form-group col-xs-12">
                                <label for="message-join">Why you join volunteer<span>*</span></label>
                                <textarea class="form-control" id="message-join"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="form-group col-xs-12">
                                <button type="button" class="btn btn-default pull-right">Submit</button>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="form-group col-xs-12">
                                <p class="forms-notes">Note: Note for volunteer form</p>
                            </div>
                        </div>
                    </div>
                </form>
            </div> -->
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>
<!-- Join Now Form Popup End -->

<!-- Donation Form Popup -->
<!-- <div class="modal donate-form">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <header class="page-header"><h2>You are donating to. <strong>Example Causes name</strong></h2></header>
            </div>
            <div class="modal-body">
                <form role="form">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="form-group col-xs-12 col-sm-6">
                                <label>How much would you like to donate?</label>
                                <div class="choose-pricing">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-default active">$12</button>
                                        <button type="button" class="btn btn-default">$22</button>
                                        <button type="button" class="btn btn-default">$32</button>
                                        <input type="text" placeholder="Custom" class="inpt-first form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row display">
                        <div class="col-xs-12">
                            <div class="form-group col-xs-12 col-sm-6">
                                <div class="dropdown">
                                    <button class="btn btn-width dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown">
                                        <small>Donation Type</small><span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                        <li><a role="menuitem" tabindex="-1" href="#">Every Monthly (Recurring)</a></li>
                                        <li><a role="menuitem" tabindex="-1" href="#">One Time Donation</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-12">
                            <div class="form-group col-xs-12 col-sm-6">
                                <label for="name">Name<span>*</span></label>
                                <input type="text" class="form-control" id="name">
                            </div>
                            <div class="form-group col-xs-12 col-sm-6">
                                <label for="last-name">Last Name<span>*</span></label>
                                <input type="text" class="form-control" id="last-name">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-12">
                            <div class="form-group col-xs-12 col-sm-6">
                                <label for="email">Email<span>*</span></label>
                                <input type="text" class="form-control" id="email">
                            </div>
                            <div class="form-group col-xs-12 col-sm-6">
                                <label for="phone">Phone<span>*</span></label>
                                <input type="text" class="form-control" id="phone">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-12">
                            <div class="form-group col-xs-12 col-sm-6">
                                <label for="message">Address<span>*</span></label>
                                <textarea class="form-control" id="message"></textarea>
                            </div>
                            <div class="form-group col-xs-12 col-sm-6">
                                <label for="add-note">Additional Note</label>
                                <textarea class="form-control" id="add-note"></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-12">
                            <div class="form-group col-xs-12">
                                <input type="submit" value="DONATE" class="btn btn-default pull-right">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-12">
                            <div class="form-group col-xs-12">
                                <p class="forms-notes">Note: Lorem ipsum dolor sit amet</p>
                            </div>
                        </div>
                    </div>
                </form>
            </div> -->
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>
<!-- Donation Form Popup End -->

<!-- Scripts -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.easing.min.js"></script>
<script src="assets/revolution-slider/js/jquery.themepunch.plugins.min.js"></script>
<script src="assets/revolution-slider/js/jquery.themepunch.revolution.js"></script>
<script src="assets/js/jquery.flexslider.js"></script>
<script src="assets/js/site.js"></script>
</body>
</html>
