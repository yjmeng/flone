<!doctype html>
<html lang="en">
<?include 'head.html';?>
<? $current_file_name = basename(__FILE__); ?>
<body>
    <?include 'navigator.php';?>
    <div class="container">   
        <div class="page-row">
            <div id="aboutBtns" class="services-group side-left col-sm-4 col-md-4">
                <h3 class="lead">  About us : </h3><hr>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a id="btn1" class="nav-link active" href="#" onclick="loadDetails('aboutBtns','aboutDetails','about/whower.html','btn1');">
                        Who we are
                        </a>
                    </li>
                    <li class="nav-item">
                        <a id="btn2" class="nav-link" href="#" onclick="loadDetails('aboutBtns','aboutDetails','about/history.html','btn2');">History</a>
                    </li>
                    <li class="nav-item">
                        <a id="btn3" class="nav-link" href="#" onclick="loadDetails('aboutBtns','aboutDetails','about/team.html','btn3');">Team</a>
                    </li>
                </ul>
            </div>
            <div class="side-right col-sm-8 col-md-8" id="aboutDetails">
                <?include 'about/whower.html';?>
            </div>  
        </div>    
    </div>  
    <?include 'footer.html';?>
</body>
</html>