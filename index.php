<!DOCTYPE html>
<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    
    <!-- DataTable Editor CSS -->
    <link rel="stylesheet" type="text/css" href="css/datatables.css">
    <!-- Metro 4 -->
    <link rel="stylesheet" href="vendors/metro4/css/metro-all.min.css">
    <link rel="stylesheet" href="vendors/metro4/css/metro-icons.css">
    <link rel="stylesheet" href="css/index.css">

    <title>Pandora - Admin template build with Metro 4</title>
    <script>
        window.on_page_functions = [];
    </script>
</head>


<body class="m4-cloak h-vh-100">
<div data-role="navview" data-toggle="#paneToggle" data-expand="xl" data-compact="lg" data-active-state="true">
    <div class="navview-pane">
        <div class="bg-cyan d-flex flex-align-center">
            <button class="pull-button m-0 bg-darkCyan-hover">
                <span class="mif-menu fg-white"></span>
            </button>
            <h2 class="text-light m-0 fg-white pl-7" style="line-height: 52px">Pandora</h2>
        </div>

        <div class="suggest-box">
            <div class="data-box">
                <img src="images/jek_vorobey.jpg" class="avatar">
                <div class="ml-4 avatar-title flex-column">
                    <a href="#" class="d-block fg-white text-medium no-decor"><span class="reduce-1">Jack Sparrow</span></a>
                    <p class="m-0"><span class="fg-green mr-2">&#x25cf;</span><span class="text-small">online</span></p>
                </div>
            </div>
            <img src="images/jek_vorobey.jpg" class="avatar holder ml-2">
        </div>

        <div class="suggest-box">
            <input type="text" data-role="input" data-clear-button="false" data-search-button="true">
            <button class="holder">
                <span class="mif-search fg-white"></span>
            </button>
        </div>

        <ul class="navview-menu mt-4" id="side-menu">
            <li class="item-header">MAIN NAVIGATION</li>
            <li>
                <a href="#" class="dropdown-toggle">
                    <span class="icon"><span class="mif-versions"></span></span>
                    <span class="caption">Sample Pages</span>
                </a>
                <ul class="navview-menu stay-open" data-role="dropdown">
                    <li class="item-header">Pages</li>
                    <li>
                        <a href="index.php">
                            <span class="icon"><span class="mif-lock"></span></span>
                            <span class="caption">Index</span>
                        </a>
                        <a href="#sample1">
                            <span class="icon"><span class="mif-lock"></span></span>
                            <span class="caption">Metro Editor</span>
                        </a>
                        <a href="#orderchart">
                            <span class="icon"><span class="mif-lock"></span></span>
                            <span class="caption">Chart Demo</span>
                        </a>
                        <a href="#orderimp">
                            <span class="icon"><span class="mif-lock"></span></span>
                            <span class="caption">Order Chart</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="item-header">Documentation</li>
            <li>
                <a href="https://metroui.org.ua/intro.html">
                    <span class="icon"><span class="mif-brightness-auto fg-red"></span></span>
                    <span class="caption">Metro 4</span>
                </a>
            </li>
        </ul>

        <div class="w-100 text-center text-small data-box p-2 border-top bd-grayMouse" style="position: absolute; bottom: 0">
            <div>&copy; 2019 <a href="mailto:sergey@pimenov.com.ua" class="text-muted fg-white-hover no-decor">Sergey Pimenov</a></div>
            <div>Created with <a href="https://metroui.org.ua" class="text-muted fg-white-hover no-decor">Metro 4</a></div>
        </div>
    </div>

    <div class="navview-content h-100">
        <div data-role="appbar" class="pos-absolute bg-darkCyan fg-white">

            <a href="#" class="app-bar-item d-block d-none-lg" id="paneToggle"><span class="mif-menu"></span></a>
            <div class="app-bar-container ml-auto">
                <a href="#" class="app-bar-item">
                    <span class="mif-envelop"></span>
                    <span class="badge bg-green fg-white mt-2 mr-1">4</span>
                </a>
                <a href="#" class="app-bar-item">
                    <span class="mif-bell"></span>
                    <span class="badge bg-orange fg-white mt-2 mr-1">10</span>
                </a>
                <a href="#" class="app-bar-item">
                    <span class="mif-flag"></span>
                    <span class="badge bg-red fg-white mt-2 mr-1">9</span>
                </a>
                <div class="app-bar-container">
                    <a href="#" class="app-bar-item">
                        <img src="images/jek_vorobey.jpg" class="avatar">
                        <span class="ml-2 app-bar-name">Jack Sparrow</span>
                    </a>
                    <div class="user-block shadow-1" data-role="collapse" data-collapsed="true">
                        <div class="bg-darkCyan fg-white p-2 text-center">
                            <img src="images/jek_vorobey.jpg" class="avatar">
                            <div class="h4 mb-0">Jack Sparrow</div>
                            <div>Pirate captain</div>
                        </div>
                        <div class="bg-white d-flex flex-justify-between flex-equal-items p-2">
                            <button class="button flat-button">Followers</button>
                            <button class="button flat-button">Sales</button>
                            <button class="button flat-button">Friends</button>
                        </div>
                        <div class="bg-white d-flex flex-justify-between flex-equal-items p-2 bg-light">
                            <button class="button mr-1">Profile</button>
                            <button class="button ml-1">Sign out</button>
                        </div>
                    </div>
                </div>
                <a href="#" class="app-bar-item">
                    <span class="mif-cogs"></span>
                </a>
            </div>
        </div>

        <div id="content-wrapper" class="content-inner h-100" style="overflow-y: auto">
                
        </div>
    </div>
</div>


    <!-- jQuery first, then Metro UI JS -->
    <script src="vendors/jquery/jquery-3.4.1.min.js"></script>
    <script src="js/jquery.dataTables.js"></script>
    <script src="vendors/chartjs/Chart.bundle.min.js"></script>
    <script src="vendors/qrcode/qrcode.min.js"></script>
    <script src="vendors/jsbarcode/JsBarcode.all.min.js"></script>
    <script src="vendors/ckeditor/ckeditor.js"></script>
    <script src="vendors/metro4/js/metro.min.js"></script>
    <script src="js/index.js"></script>

    <!--
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <script src="js/jquery.dataTables.min.js"></script>
        <script src="js/dataTables.bootstrap.min.js"></script>      
        <link rel="stylesheet" href="css/dataTables.bootstrap.min.css" />
        <script src="js/ajax.js"></script>  
    -->
</body>
</html>