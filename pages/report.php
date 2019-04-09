<!doctype html>
<html lang="en">
<?include 'head.html';?>
<? $current_file_name = basename(__FILE__); ?>
<body>
<?include 'navigator.php';?>
<div class="container">
    <div class="page-row">
        <div id="reportBtns" class="services-group side-left col-sm-4 col-md-4">
            <h3 class="lead">  Reports : </h3><hr>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a id="btn2" class="nav-link active" href="#" onclick="loadDetails('reportBtns','reportDetails','reports/all.php','btn2');">All Reports</a>
                </li>
                <li class="nav-item">
                    <a id="btn1" class="nav-link" href="#" onclick="loadDetails('reportBtns','reportDetails','reports/submit.php','btn1');">
                    Report Submit
                    </a>
                </li>
            </ul>
        </div>
        <div class="side-right col-sm-8 col-md-8" id="reportDetails">
        <iframe height="595px" width="950px" frameborder="0" 
	        src="http://floneinitiative.org/ushahidi/reports2" name="rightFrame" id="rightFrame" title="rightFrame">
        </iframe>
        </div>  
    </div>    
</div>
<?include 'footer.html';?>
</body>
</html>