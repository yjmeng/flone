<!doctype html>
<html lang="en">
<?include 'head.html';?>
<? $current_file_name = basename(__FILE__); ?>
<style>
    .mapouter{text-align:right;height:100%;width:100%;}
    .gmap_canvas {overflow:hidden;background:none!important;height:100%;width:70%;margin-left:15%;margin-top:100px}
    .contact_canvas {overflow:hidden;background:none!important;height:100%;width:70%;margin-left:15%;}
    .form-group{padding:0px;margin-bottom: 6px;margin-left:20px;}
</style>
<body>
    <?include 'navigator.php';?>
    <!-- Main Container -->
    <div class="container-fluid-kamn">
        <div class="row">
            <!-- <iframe width="100%" height="450px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3618.727010735933!2d91.837871!3d24.907291700000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2s!4v1404919738144"></iframe> -->
            <div class="mapouter">
                <div class="gmap_canvas">
                    <iframe id="gmap_canvas" width="100%" height="450px" src="https://maps.google.com/maps?q=Mazeras%20Courts&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                </div>
            </div>
            <br />
        </div>
        <div class="row contact_canvas">
            <div class="col-lg-5">
                <h4>Find us at:</h4>
                <p class="block-author"> Flone Initiative - A Non-Profit Organization</p>
                <p>P.O. Box 569 - 00900.Kiambu, Kenya.</p>
                <p>Phone: (254) 748 223 040.</p>
                <em class="block-author">Email: info@floneinitiative.org</em> <br>
                <br>
                <p class="lead">Social Link</p><hr>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <a href="#"><img src="../assets/img/social-icons/btn_skype.png" alt="Skype"></a>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <a href="https://web.facebook.com/FloneInitiative/" onclick="openRequestedPopup(this.href); return false;">
                    <img src="../assets/img/social-icons/btn_facebook.png" alt="Facebook"></a>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-3 col-xs-12">
                    <a href="https://twitter.com/FloNeInitiative" onclick="openRequestedPopup(this.href); return false;">
                    <img src="../assets/img/social-icons/btn_twitter.png" alt="Twitter"></a>
                </div>
                <br>
            </div>
            <div class="col-lg-5">
                <div class="feedback-form">
                    <div id="contact-response"></div>
                    <form action="http://templates.designorbital.com/baleen/contact.php" method="post" id="contact-form">
                        <fieldset>
                            <div class="form-group form-group-fullname">
                                <label class="control-label" for="fullname">NAME *</label>
                                <input type="text" class="form-control" name="fullname" id="fullname" placeholder="Enter Your Name">
                            </div>
                            <div class="form-group form-group-email">
                                <label class="control-label" for="email">E-MAIL *</label>
                                <input type="text" class="form-control" name="email" id="email" placeholder="Enter Your E-Mail">
                            </div>
                            <div class="form-group form-group-message">
                                <label class="control-label" for="message">MESSAGE *</label>
                                <textarea class="form-control" name="message" id="message" rows="3"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </fieldset>
                    </form>
                </div> 
            </div>
        </div>
    </div>    
    <!--End Main Container -->
    <?include 'footer.html';?>
</body>
</html>
