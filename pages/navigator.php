<!-- Header -->    
<nav id="navbar-section" class="navbar navbar-default navbar-static-top navbar-sticky" role="navigation">
    <div class="container">
    
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand wow fadeInDownBig" href="../index.php"><img class="office-logo" src="../assets/img/slider/logo.jpg" alt="Office"></a>      
        </div>
    
        <div id="navbar-spy" class="collapse navbar-collapse navbar-responsive-collapse">
            <ul class="nav navbar-nav pull-right">
                <? if (strpos($current_file_name, 'index') !== false) {echo '<li class="active">';}else{echo '<li>';}?>
                    <a href="../index.php">Home</a>
                </li>
                <? if (strpos($current_file_name, 'about') !== false) {echo '<li class="active">';}else{echo '<li>';}?>
                    <a href="../pages/about.php">About us</a>
                </li>
                <? if (strpos($current_file_name, 'projects') !== false) {echo '<li class="active">';}else{echo '<li>';}?>
                    <a href="index.html">Projects</a>
                </li>
                <? if (strpos($current_file_name, 'impacts') !== false) {echo '<li class="active">';}else{echo '<li>';}?>
                    <a href="blog.html">Impacts</a>
                </li>
                <? if (strpos($current_file_name, 'blog') !== false) {echo '<li class="active">';}else{echo '<li>';}?>
                    <a href="blog.html">Blog</a>
                </li>
                <? if (strpos($current_file_name, 'contact') !== false) {echo '<li class="active">';}else{echo '<li>';}?>
                    <a href="../pages/contact.php"><span>Contact</span></a>
                </li>
                <? if (strpos($current_file_name, 'partners') !== false) {echo '<li class="active">';}else{echo '<li>';}?>
                    <a href="../pages/team.php">Partners</a>
                </li>
                <? if (strpos($current_file_name, 'donation') !== false) {echo '<li class="active">';}else{echo '<li>';}?>
                <li>
                    <!-- <a href="https://www.classy.org/give/68569/#!/donation/checkout" onclick="openRequestedPopup(this.href); return false;"><span>Donation</span></a> -->
                    <a href="../pages/donation.php">Donation</a>
                </li>
            </ul>         
        </div>
        <!-- <? 
            $current_file_name = "../pages/" + basename(__FILE__);
            $html = file_get_contents($current_file_name);
            $dom = new DOMDocument();
            $dom->loadHTML( $html );
            $xpath = new DOMXPath( $dom );
            $hrefs = $xpath->evaluate( "/html/body//a" );
            for( $i = 0; $i < $hrefs->length; $i ++ ) {
                $href = $hrefs->item( $i );
                $url = $href->getAttribute( 'href' );
                echo $url;
            }
        ?> -->
    </div>
</nav>
<!-- End Header -->
</html>