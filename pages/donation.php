<!doctype html>
<html lang="en">
<?include 'head.html';?>
<? $current_file_name = basename(__FILE__); ?>
<body>
    <?include 'navigator.php';?>
    <div class="container">   
        <div class="page-row">
            <div id="aboutBtns" class="services-group side-left col-sm-4 col-md-4">
                <h3 class="lead">  Ready to support us?</h3><hr>
                <ul id="tabBtns" class="nav flex-column">
                    <li class="nav-item">
                        <a id="btn1" class="nav-link active" href="#" onclick="loadTabs('tabBtns','btn1','click1','tabBtns2');">Bank Transfer</a>
                    </li>
                    <li class="nav-item">
                        <a id="btn2" class="nav-link" href="#" onclick="loadTabs('tabBtns','btn2','click2','tabBtns2');">Mpesa</a>
                    </li>
                    <li class="nav-item">
                        <a id="btn3" class="nav-link" href="#" onclick="loadTabs('tabBtns','btn3','click3','tabBtns2');">Online Donate</a>
                    </li>
                    <li class="nav-item">
                        <a id="btn4" class="nav-link" href="#" onclick="loadTabs('tabBtns','btn4','click4','tabBtns2');">Donation Boxes</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-6">
                <div class="panel with-nav-tabs panel-default">
                    <div class="panel-heading">
                        <ul id="tabBtns2" class="nav nav-tabs">
                            <li><a id="click1" href="#tab1" data-toggle="tab" onfocus="loadTabs('tabBtns','btn1','click1','tabBtns2');">Bank Transfer</a></li>
                            <li><a id="click2" href="#tab2" data-toggle="tab" onfocus="loadTabs('tabBtns','btn2','click2','tabBtns2');">Mpesa</a></li>
                            <li><a id="click3" href="#tab3" data-toggle="tab" onfocus="loadTabs('tabBtns','btn3','click3','tabBtns2');">Online Donate</a></li>
                            <li><a id="click4" href="#tab4" data-toggle="tab" onfocus="loadTabs('tabBtns','btn4','click4','tabBtns2');">Donation Boxes</a></li>
                        </ul>
                    </div>
                    <div class="panel-body">
                        <div class="tab-content">
                            <div class="tab-pane fade in active" id="tab1">
                                <h3><span class="color-success">DIRECT BANK TRANSFER</span></h3>
                                <ul>
                                    <li>Flone Initiative Trust</li>
                                    <li>A/C NO: <strong>0100003602324</strong></li>
                                    <li>Branch: International Life House</li>
                                    <li>Branch code: <strong>31008</strong></li>
                                    <li>Swift code: <strong>SBICKENX</strong></li>
                                </ul>
                            </div>
                            <div class="tab-pane fade" id="tab2">
                                <h3><span class="color-success">FOR MPESA DONATIONS</span></h3>
                                <ol>
                                    <li>Go to the Safaricom Menu on your phone</li>
                                    <li>Select Mpesa</li>
                                    <li>Select Pay Bill</li>
                                    <li>Select Enter Business Number,</li>
                                    <li>Type the Business Number: <strong>961700</strong> and press OK</li>
                                    <li>Select Enter Account Number</li>
                                    <li>Type the Account Number:<strong> 00520</strong></li>
                                    <li>Enter the amount you wish to donate</li>
                                    <li>Enter your PIN </li>
                                    <li>CONFIRM all details then SEND!</li>
                                    <li>You will receive a text message confirming that Flone Initiative has received the
                                    amount.</li>
                                </ol>
                            </div>
                            <div class="tab-pane fade" id="tab3">
                                <a href="https://www.classy.org/give/68569/#!/donation/checkout" target="_blank">
                                We are a fiscally sponsored project of The Zawadisha Fund, a 501(c)3 tax-exempt organization. Your donation is tax-deductible within the guidelines of U.S. law. To claim a donation as a deduction on your U.S. taxes, please keep your email donation receipt as your official record. We'll send it to you upon successful completion of your donation.
                                </a>
                            </div>
                            <div class="tab-pane fade" id="tab4">
                                <h3><span class="color-success">TAKE ACTION INDIVIDUALLY, OR JOIN FORCES WITH FAMILY, FRIENDS AND COLLEAGUES</span></h3>
                                There are many more ways to support Flone Initiative in an individual way. For instance with charity runs, bazaars, or by asking for donations at your birthday party. 
                                You may also put up Flone donation boxes in your office. Or possibly your company could sponsor Flone Initiative. 
                                Whatever your idea or your plan might be, please get in touch with us via <span class="color-mail"><a href="mailto:donations@floneinitiative.org">donations@floneinitiative.org</a></span>.
                                For any inquiries, clarifications or questions, kindly contact our finance or donations department via 
                                <span class="color-mail"><a href="mailto:finance@floneinitiative.org ">finance@floneinitiative.org </a></span> or <span class="color-mail"><a href="mailto:finance@floneinitiative.org ">finance@floneinitiative.org </a></span>respectively.
                                Flone Initiative keeps a transparent record of all donations made and provides an annual report to donors. 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>  
    <?include 'footer.html';?>
</body>
</html>