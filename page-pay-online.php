<?php
get_header();
?>
    <!--section-->
    <div class="section mt-0">
        <div class="breadcrumbs-wrap">
            <div class="container">
                <div class="breadcrumbs">
                    <a href="<?php echo home_url(); ?>">Home</a>
                    <span>Pay Online</span>
                </div>
            </div>
        </div>
    </div>
    <!--//section-->
    <!--section-->
    <div class="section page-content-first">
        <div class="container">
            <div class="title-wrap text-center position-relative">
                <div class="h-sub theme-color">Pay Your Bill</div>
                <h1>Pay Online</h1>
                <div class="h-decor"></div>
                <div class="title-button-right"><a href="#" class="btn"><i class="icon-right-arrow"></i><span><img src="images/paypal-logo.png" alt="">&nbsp;payment</span><i class="icon-right-arrow"></i></a></div>
            </div>
            <div class="text-center max-730 mx-auto">
                <p>Online Payment for Patients. For your convenience MedLab now offers the ability to make a secure payment online. Fill out the form below to pay your MedLab bill online.</p>
            </div>
            <div class="form-container">
                <form action="#">
                    <div class="form-row">
                        <div class="col">
                            <input type="text" class="form-control" name="form-invoice" placeholder="Invoice #">
                        </div>
                    </div>
                    <h5>Personal Information</h5>
                    <div class="form-row">
                        <div class="col">
                            <input type="text" class="form-control" name="form-name" placeholder="First and Last name">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-sm"><input type="text" class="form-control" name="form-email" placeholder="Billing e-mail"></div>
                        <div class="col-sm"><input type="text" class="form-control" name="form-phone" placeholder="Billing phone"></div>
                    </div>
                    <h5>Cardholder Address</h5>
                    <div class="form-row">
                        <div class="col">
                            <input type="text" class="form-control" name="form-address" placeholder="Street Address">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-sm"><input type="text" class="form-control" name="form-city" placeholder="City"></div>
                        <div class="col-sm"><input type="text" class="form-control" name="form-zip" placeholder="ZIP / Postal Code"></div>
                        <div class="col-sm">
                            <div class="selectWrapper">
                                <select name="form-country" class="form-control">
                                    <option selected="selected">United States</option>
                                    <option>Canada</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <h5>Payment Information</h5>
                    <div class="form-row">
                        <div class="col">
                            <input type="text" class="form-control" name="form-amount" placeholder="Amount">
                        </div>
                    </div>
                    <div class="form-row form-row-info">
                        <div class="col col-td-1">Convenience Fee:</div>
                        <div class="col col-td-2">0.00 $</div>
                        <div class="col col-td-3">(A 3% convenience fee will be added to your payment amount)</div>
                    </div>
                    <div class="form-row form-row-info">
                        <div class="col col-td-1">Total:</div>
                        <div class="col col-td-2">0.00 $</div>
                    </div>
                    <div class="form-row">
                        <div class="col input-with-image-wrap w1">
                            <input type="text" class="form-control" name="form-card" placeholder="Credit card number">
                            <div class="input-images"><img src="images/content/input-cards-01.png" alt=""></div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-sm">
                            <div class="selectWrapper">
                                <select name="form-month" class="form-control">
                                    <option selected="selected" disabled>Month</option>
                                    <option value='1'>January</option>
                                    <option value='2'>February</option>
                                    <option value='3'>March</option>
                                    <option value='4'>April</option>
                                    <option value='5'>May</option>
                                    <option value='6'>June</option>
                                    <option value='7'>July</option>
                                    <option value='8'>August</option>
                                    <option value='9'>September</option>
                                    <option value='10'>October</option>
                                    <option value='11'>November</option>
                                    <option value='12'>December</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm">
                            <div class="selectWrapper">
                                <select name="form-day" class="form-control">
                                    <option selected="selected" disabled>Day</option>
                                    <option value='1'>1</option>
                                    <option value='2'>2</option>
                                    <option value='3'>3</option>
                                    <option value='4'>4</option>
                                    <option value='5'>5</option>
                                    <option value='6'>6</option>
                                    <option value='7'>7</option>
                                    <option value='8'>8</option>
                                    <option value='9'>9</option>
                                    <option value='10'>10</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm input-with-image-wrap w2">
                            <input type="text" class="form-control" name="form-credit" placeholder="Credit card number">
                            <div class="input-images"><img src="images/content/input-cards-02.png" alt=""></div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <input type="text" class="form-control" name="form-holder" placeholder="Card holder name">
                        </div>
                    </div>
                    <div class="text-sm-center mt-15">
                        <label class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input">
                            <span class="custom-control-indicator"></span>
                            <span class="custom-control-description">I agree to have my information stored for the purposes of confirming my bill payment. I understand that none of my sensitive card information will be stored.</span>
                        </label>
                    </div>
                    <div class="text-center mt-2 mt-lg-4">
                        <button type="submit" class="btn"><i class="icon-right-arrow"></i><span>Submit</span><i class="icon-right-arrow"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--//section -->
<?php

get_footer();