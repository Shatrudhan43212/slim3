<?php include('layouts/header.php'); ?>

<!--innerbannerSection-->
<div class="clearfix"></div>
<!--comprehn-->
<section class="billingSection billingPG">
    <div class="container cuScontainer">
        <div class="row">
            <div class="billingmainBox">
                <div class="billingForm">
                    <div class="col-md-12 billTopTxt">
                        <h2>Your Report Has Been Prepared</h2>
                        <div class="sprtr"></div>
                        <p class="mt-20">Simply Complete Your Order For Full Access</p>
                        <ul>
                            <li>Credit Card Payment Only</li>
                            <li>You will be billed $23.95 USD for 3 months starting today. You can cancel at anytime.</li>
                            <li>Charges will appear on your statement as “dmvreported.com”</li>
                        </ul>
                        <p><span>Refund Policy</span>
                            If you want a refund, please contact customer service.</p>
                        <p><span>Privacy Policy</span>
                            We value your privacy. We will never let any third party know that you were interested in information about this property. Your secret is safe with us.</p>
                        <hr>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <label>First Name</label>
                        <input type="text" name="First Name">
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <label>Last Name</label>
                        <input type="text" name="Last Name">
                    </div>
                    <div class="col-md-12">
                        <label>Email</label>
                        <input type="text" name="Email">
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <label>Address</label>
                        <input type="text" name="Address">
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <label>Address 2</label>
                        <input type="text" name="Address">
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-md-6 col-sm-6">
                        <label>State</label>
                        <select name="" id="">
                            <option value="">Select State</option>
                        </select>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <label>Zip</label>
                        <input type="text" name="Zip">
                    </div>
                    <div class="col-md-12 col-sm-12">
                        <label>Country</label>
                        <select name="" id="">
                            <option value="">Select Country</option>
                        </select>

                        <div class="sprtr spBlck"></div>
                    </div>
                    <h4>Credit Card Information</h4>
                    <div class="clearfix"></div>
                    <div class="col-md-12">
                        <div class="cardNum"><label>Card Number</label>
                            <p class="hidden-xs">(Please do not use spaces or hyphens)</p>
                        </div>
                        <input type="text" name="First Name">
                        <div class="cardNum hidden-sm hidden-md hidden-lg">
                            <p>(Please do not use spaces or hyphens)</p>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-md-6 col-sm-6">
                        <label>Card type</label>
                        <select name="" id="">
                            <option value="">Select card type</option>
                        </select>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <label>&nbsp;</label>
                        <img src="<?= $baseUrl; ?>assets_new/images/cards.png" class="pull-left cardIMG">
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-md-4 col-sm-4 col-xs-6">
                        <label>Expiry date</label>
                        <select name="" id="">
                            <option value="">Month</option>
                        </select>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-6">
                        <label>&nbsp;</label>
                        <select name="" id="">
                            <option value="">Year</option>
                        </select>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <label>CVV <img src="<?= $baseUrl; ?>assets_new/images/cvvicon.jpg" class="cvvIcon"></label>
                        <input type="text" name="First Name" placeholder="CVV">
                    </div>
                    <div class="clearfix"></div>
                    <div class="clearfix"></div>
                    <div class="col-md-12">
                        <p>When you enter your email address and click on “Send Me My Report!” that will be considered a legally binding online signature. This means you give us permission to bill you according to our terms of service.</p>
                        <label class="check ">I have read and understood the <a href="#">Terms of service</a>
                            <input type="checkbox" checked="checked" name="is_name">
                            <span class="checkmark"></span>
                        </label>
                    </div>
                    <div class="clearfix"></div>
                    <button type="button">Send me my report</button>
                </div>
                <div class="billingSmryBox">
                    <div class="orderSumBox">
                        <h3>Order Summary</h3>
                        <div class="priceBx">
                            <p>Subtotal</p>
                            <p><b>$23.95/month</b></p>
                        </div>
                        <hr>
                        <div class="priceBx">
                            <p>Total</p>
                            <p><b>$23.95/month</b></p>
                        </div>
                        <h4>1-855-935-6179</h4>
                        <h6>Call Customer Assistance</h6>
                    </div>
                    <div class="reportBox">
                        <h3>Your Report Could Include</h3>
                        <ul>
                            <li>Driving Records</li>
                            <li>Driving Information</li>
                            <li>Government Records</li>
                            <li>Driving History</li>
                            <li>Public Records</li>
                            <li>Background History</li>
                            <li>Historical Records</li>
                            <li>State Records</li>
                            <li>Federal Records</li>
                        </ul>
                    </div>
                    <div class="reportBox">
                        <h3>Refunds</h3>
                        <p>If for any reason you think you deserve a refund, our customer service department will be glad to help.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--comprehn-->

<?php include('layouts/footer.php'); ?>