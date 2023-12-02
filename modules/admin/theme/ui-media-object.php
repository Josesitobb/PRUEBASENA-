<?php
session_start();
$varsesion=$_SESSION['username'];

if($varsesion == null || $varsesion=''){
    echo 'USTED INICIE SESION';
    die();
}


echo $_SESSION['username'];
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Quixlab - Bootstrap Admin Dashboard Template by Themefisher.com</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <!-- Custom Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    
    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <div class="brand-logo">
                <a href="index.php">
                    <b class="logo-abbr"><img src="images/logo.png" alt=""> </b>
                    <span class="logo-compact"><img src="./images/logo-compact.png" alt=""></span>
                    <span class="brand-title">
                        <img src="images/logo-text.png" alt="">
                    </span>
                </a>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">    
            <div class="header-content clearfix">
                
                <div class="nav-control">
                    <div class="hamburger">
                        <span class="toggle-icon"><i class="icon-menu"></i></span>
                    </div>
                </div>
                <div class="header-left">
                    <div class="input-group icons">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-transparent border-0 pr-2 pr-sm-3" id="basic-addon1"><i class="mdi mdi-magnify"></i></span>
                        </div>
                        <input type="search" class="form-control" placeholder="Search Dashboard" aria-label="Search Dashboard">
                        <div class="drop-down   d-md-none">
							<form action="#">
								<input type="text" class="form-control" placeholder="Search">
							</form>
                        </div>
                    </div>
                </div>
                <div class="header-right">
                    <ul class="clearfix">
                        <li class="icons dropdown">
                            <a href="javascript:void(0)">
                                <i class="mdi mdi-email-outline"></i>
                                <span class="badge gradient-1 badge-pill badge-primary">3</span>
                            </a>
                            <div class="drop-down animated fadeIn dropdown-menu">
                                <div class="dropdown-content-heading d-flex justify-content-between">
                                    <span class="">3 New Messages</span>  
                                    
                                </div>
                                <div class="dropdown-content-body">
                                    <ul>
                                        <li class="notification-unread">
                                            <a href="javascript:void()">
                                                <img class="float-left mr-3 avatar-img" src="images/avatar/1.jpg" alt="">
                                                <div class="notification-content">
                                                    <div class="notification-heading">Saiful Islam</div>
                                                    <div class="notification-timestamp">08 Hours ago</div>
                                                    <div class="notification-text">Hi Teddy, Just wanted to let you ...</div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="notification-unread">
                                            <a href="javascript:void()">
                                                <img class="float-left mr-3 avatar-img" src="images/avatar/2.jpg" alt="">
                                                <div class="notification-content">
                                                    <div class="notification-heading">Adam Smith</div>
                                                    <div class="notification-timestamp">08 Hours ago</div>
                                                    <div class="notification-text">Can you do me a favour?</div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void()">
                                                <img class="float-left mr-3 avatar-img" src="images/avatar/3.jpg" alt="">
                                                <div class="notification-content">
                                                    <div class="notification-heading">Barak Obama</div>
                                                    <div class="notification-timestamp">08 Hours ago</div>
                                                    <div class="notification-text">Hi Teddy, Just wanted to let you ...</div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void()">
                                                <img class="float-left mr-3 avatar-img" src="images/avatar/4.jpg" alt="">
                                                <div class="notification-content">
                                                    <div class="notification-heading">Hilari Clinton</div>
                                                    <div class="notification-timestamp">08 Hours ago</div>
                                                    <div class="notification-text">Hello</div>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                    
                                </div>
                            </div>
                        </li>
                        <li class="icons dropdown">
                            <a href="javascript:void(0)">
                                <i class="mdi mdi-bell-outline"></i>
                                <span class="badge badge-pill gradient-2 badge-primary">3</span>
                            </a>
                            <div class="drop-down animated fadeIn dropdown-menu dropdown-notfication">
                                <div class="dropdown-content-heading d-flex justify-content-between">
                                    <span class="">2 New Notifications</span>  
                                    
                                </div>
                                <div class="dropdown-content-body">
                                    <ul>
                                        <li>
                                            <a href="javascript:void()">
                                                <span class="mr-3 avatar-icon bg-success-lighten-2"><i class="icon-present"></i></span>
                                                <div class="notification-content">
                                                    <h6 class="notification-heading">Events near you</h6>
                                                    <span class="notification-text">Within next 5 days</span> 
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void()">
                                                <span class="mr-3 avatar-icon bg-danger-lighten-2"><i class="icon-present"></i></span>
                                                <div class="notification-content">
                                                    <h6 class="notification-heading">Event Started</h6>
                                                    <span class="notification-text">One hour ago</span> 
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void()">
                                                <span class="mr-3 avatar-icon bg-success-lighten-2"><i class="icon-present"></i></span>
                                                <div class="notification-content">
                                                    <h6 class="notification-heading">Event Ended Successfully</h6>
                                                    <span class="notification-text">One hour ago</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void()">
                                                <span class="mr-3 avatar-icon bg-danger-lighten-2"><i class="icon-present"></i></span>
                                                <div class="notification-content">
                                                    <h6 class="notification-heading">Events to Join</h6>
                                                    <span class="notification-text">After two days</span> 
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                    
                                </div>
                            </div>
                        </li>
                        <li class="icons dropdown d-none d-md-flex">
                            <a href="javascript:void(0)" class="log-user"  data-toggle="dropdown">
                                <span>English</span>  <i class="fa fa-angle-down f-s-14" aria-hidden="true"></i>
                            </a>
                            <div class="drop-down dropdown-language animated fadeIn  dropdown-menu">
                                <div class="dropdown-content-body">
                                    <ul>
                                        <li><a href="javascript:void()">English</a></li>
                                        <li><a href="javascript:void()">Dutch</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="icons dropdown">
                            <div class="user-img c-pointer position-relative"   data-toggle="dropdown">
                                <span class="activity active"></span>
                                <img src="images/user/1.png" height="40" width="40" alt="">
                            </div>
                            <div class="drop-down dropdown-profile   dropdown-menu">
                                <div class="dropdown-content-body">
                                    <ul>
                                        <li>
                                            <a href="app-profile.php"><i class="icon-user"></i> <span>Profile</span></a>
                                        </li>
                                        <li>
                                            <a href="email-inbox.php"><i class="icon-envelope-open"></i> <span>Inbox</span> <div class="badge gradient-3 badge-pill badge-primary">3</div></a>
                                        </li>
                                        
                                        <hr class="my-2">
                                        <li>
                                            <a href="page-lock.php"><i class="icon-lock"></i> <span>Lock Screen</span></a>
                                        </li>
                                        <li><a href="page-login.php"><i class="icon-key"></i> <span>Logout</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="nk-sidebar">           
            <div class="nk-nav-scroll">
                <ul class="metismenu" id="menu">
                    <li class="nav-label">Dashboard</li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-speedometer menu-icon"></i><span class="nav-text">Dashboard</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="./index.php">Home 1</a></li>
                            <!-- <li><a href="./index-2.php">Home 2</a></li> -->
                        </ul>
                    </li>
                    <li class="mega-menu mega-menu-sm">
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-globe-alt menu-icon"></i><span class="nav-text">Layouts</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="./layout-blank.php">Blank</a></li>
                            <li><a href="./layout-one-column.php">One Column</a></li>
                            <li><a href="./layout-two-column.php">Two column</a></li>
                            <li><a href="./layout-compact-nav.php">Compact Nav</a></li>
                            <li><a href="./layout-vertical.php">Vertical</a></li>
                            <li><a href="./layout-horizontal.php">Horizontal</a></li>
                            <li><a href="./layout-boxed.php">Boxed</a></li>
                            <li><a href="./layout-wide.php">Wide</a></li>
                            
                            
                            <li><a href="./layout-fixed-header.php">Fixed Header</a></li>
                            <li><a href="layout-fixed-sidebar.php">Fixed Sidebar</a></li>
                        </ul>
                    </li>
                    <li class="nav-label">Apps</li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-envelope menu-icon"></i> <span class="nav-text">Email</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="./email-inbox.php">Inbox</a></li>
                            <li><a href="./email-read.php">Read</a></li>
                            <li><a href="./email-compose.php">Compose</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-screen-tablet menu-icon"></i><span class="nav-text">Apps</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="./app-profile.php">Profile</a></li>
                            <li><a href="./app-calender.php">Calender</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-graph menu-icon"></i> <span class="nav-text">Charts</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="./chart-flot.php">Flot</a></li>
                            <li><a href="./chart-morris.php">Morris</a></li>
                            <li><a href="./chart-chartjs.php">Chartjs</a></li>
                            <li><a href="./chart-chartist.php">Chartist</a></li>
                            <li><a href="./chart-sparkline.php">Sparkline</a></li>
                            <li><a href="./chart-peity.php">Peity</a></li>
                        </ul>
                    </li>
                    <li class="nav-label">UI Components</li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-grid menu-icon"></i><span class="nav-text">UI Components</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="./ui-accordion.php">Accordion</a></li>
                            <li><a href="./ui-alert.php">Alert</a></li>
                            <li><a href="./ui-badge.php">Badge</a></li>
                            <li><a href="./ui-button.php">Button</a></li>
                            <li><a href="./ui-button-group.php">Button Group</a></li>
                            <li><a href="./ui-cards.php">Cards</a></li>
                            <li><a href="./ui-carousel.php">Carousel</a></li>
                            <li><a href="./ui-dropdown.php">Dropdown</a></li>
                            <li><a href="./ui-list-group.php">List Group</a></li>
                            <li><a href="./ui-media-object.php">Media Object</a></li>
                            <li><a href="./ui-modal.php">Modal</a></li>
                            <li><a href="./ui-pagination.php">Pagination</a></li>
                            <li><a href="./ui-popover.php">Popover</a></li>
                            <li><a href="./ui-progressbar.php">Progressbar</a></li>
                            <li><a href="./ui-tab.php">Tab</a></li>
                            <li><a href="./ui-typography.php">Typography</a></li>
                        <!-- </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-layers menu-icon"></i><span class="nav-text">Components</span>
                        </a>
                        <ul aria-expanded="false"> -->
                            <li><a href="./uc-nestedable.php">Nestedable</a></li>
                            <li><a href="./uc-noui-slider.php">Noui Slider</a></li>
                            <li><a href="./uc-sweetalert.php">Sweet Alert</a></li>
                            <li><a href="./uc-toastr.php">Toastr</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="widgets.php" aria-expanded="false">
                            <i class="icon-badge menu-icon"></i><span class="nav-text">Widget</span>
                        </a>
                    </li>
                    <li class="nav-label">Forms</li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-note menu-icon"></i><span class="nav-text">Forms</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="./form-basic.php">Basic Form</a></li>
                            <li><a href="./form-validation.php">Form Validation</a></li>
                            <li><a href="./form-step.php">Step Form</a></li>
                            <li><a href="./form-editor.php">Editor</a></li>
                            <li><a href="./form-picker.php">Picker</a></li>
                        </ul>
                    </li>
                    <li class="nav-label">Table</li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-menu menu-icon"></i><span class="nav-text">Table</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="./table-basic.php" aria-expanded="false">Basic Table</a></li>
                            <li><a href="./table-datatable.php" aria-expanded="false">Data Table</a></li>
                        </ul>
                    </li>
                    <li class="nav-label">Pages</li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-notebook menu-icon"></i><span class="nav-text">Pages</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="./page-login.php">Login</a></li>
                            <li><a href="./page-register.php">Register</a></li>
                            <li><a href="./page-lock.php">Lock Screen</a></li>
                            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Error</a>
                                <ul aria-expanded="false">
                                    <li><a href="./page-error-404.php">Error 404</a></li>
                                    <li><a href="./page-error-403.php">Error 403</a></li>
                                    <li><a href="./page-error-400.php">Error 400</a></li>
                                    <li><a href="./page-error-500.php">Error 500</a></li>
                                    <li><a href="./page-error-503.php">Error 503</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">

            <div class="row page-titles mx-0">
                <div class="col p-md-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Home</a></li>
                    </ol>
                </div>
            </div>
            <!-- row -->

            <div class="container-fluid">
                <!-- row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Media Object</h4>
                                <div class="bootstrap-media">
                                    <div class="media">
                                        <img class="mr-3 img-fluid" src="images/avatar/1.jpg" alt="Generic placeholder image">
                                        <div class="media-body">
                                            <h5 class="mt-0">Media heading</h5>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi
                                            vulputate fringilla. Donec lacinia congue felis in faucibus.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Nesting</h4>
                                <div class="bootstrap-media">
                                    <div class="media">
                                        <img class="mr-3" src="images/avatar/1.jpg" alt="Generic placeholder image">
                                        <div class="media-body">
                                            <h5 class="mt-0">Media heading</h5>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi
                                            vulputate fringilla. Donec lacinia congue felis in faucibus.
                                            <div class="media mt-3">
                                                <a class="pr-3" href="#">
                                                    <img src="images/avatar/1.jpg" alt="Generic placeholder image">
                                                </a>
                                                <div class="media-body">
                                                    <h5 class="mt-0">Media heading</h5>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc
                                                    ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Align Top</h4>
                                <div class="bootstrap-media">
                                    <div class="media">
                                        <img class="align-self-start mr-3" src="images/avatar/1.jpg" alt="Generic placeholder image">
                                        <div class="media-body">
                                            <h5 class="mt-0">Top-aligned media</h5>
                                            <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla.
                                                Donec lacinia congue felis in faucibus.</p>
                                            <p>Donec sed odio dui. Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Align Center</h4>
                                <div class="bootstrap-media">
                                    <div class="media">
                                        <img class="align-self-center mr-3" src="images/avatar/1.jpg" alt="Generic placeholder image">
                                        <div class="media-body">
                                            <h5 class="mt-0">Center-aligned media</h5>
                                            <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla.
                                                Donec lacinia congue felis in faucibus.</p>
                                            <p class="mb-0">Donec sed odio dui. Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Align Bottom</h4>
                                <div class="bootstrap-media">
                                    <div class="media">
                                        <img class="align-self-end mr-3" src="images/avatar/1.jpg" alt="Generic placeholder image">
                                        <div class="media-body">
                                            <h5 class="mt-0">Bottom-aligned media</h5>
                                            <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla.
                                                Donec lacinia congue felis in faucibus.</p>
                                            <p class="mb-0">Donec sed odio dui. Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Order</h4>
                                <div class="bootstrap-media">
                                    <div class="media">
                                        <div class="media-body">
                                            <h5 class="mt-0 mb-1">Media object</h5>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi
                                            vulputate fringilla. Donec lacinia congue felis in faucibus.</div>
                                        <img class="ml-3" src="images/avatar/1.jpg" alt="Generic placeholder image">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Media list</h4>
                                <div class="bootstrap-media">
                                    <ul class="list-unstyled">
                                        <li class="media">
                                            <img class="mr-3" src="images/avatar/1.jpg" alt="Generic placeholder image">
                                            <div class="media-body">
                                                <h5 class="mt-0 mb-1">List-based media object</h5>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum
                                                nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus. vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</div>
                                        </li>
                                        <li class="media my-4">
                                            <img class="mr-3" src="images/avatar/1.jpg" alt="Generic placeholder image">
                                            <div class="media-body">
                                                <h5 class="mt-0 mb-1">List-based media object</h5>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum
                                                nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus. vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</div>
                                        </li>
                                        <li class="media">
                                            <img class="mr-3" src="images/avatar/1.jpg" alt="Generic placeholder image">
                                            <div class="media-body">
                                                <h5 class="mt-0 mb-1">List-based media object</h5>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum
                                                nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus. vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Custom Media 1</h4>
                                <div class="custom-media-object-1">
                                    <div class="media border-bottom-1 p-t-15"><i class="align-self-start mr-3 cc BTC f-s-30"></i>
                                        <div class="media-body">
                                            <div class="row">
                                                <div class="col-lg-5">
                                                    <h5>Deal Number 96584</h5>
                                                    <p>Cras sit amet</p>
                                                </div>
                                                <div class="col-lg-2">
                                                    <p class="text-muted f-s-14">Buying</p>
                                                </div>
                                                <div class="col-lg-5 text-right">
                                                    <h5 class="text-muted"><i class="color-danger ti-minus m-r-5"></i> 985654 <span class="BTC m-l-10">BTC</span></h5>
                                                    <p class="f-s-13 text-muted">13.12.2018 <span class="m-l-10">12:20</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="media border-bottom-1 p-t-15"><i class="align-self-start mr-3 cc LTC f-s-30"></i>
                                        <div class="media-body">
                                            <div class="row">
                                                <div class="col-lg-5">
                                                    <h5>Deal Number 52145</h5>
                                                    <p>Cras sit amet</p>
                                                </div>
                                                <div class="col-lg-2">
                                                    <p class="text-muted f-s-14">Selling</p>
                                                </div>
                                                <div class="col-lg-5 text-right">
                                                    <h5 class="text-muted"><i class="color-danger ti-minus m-r-5"></i> 45625 <span class="LTC m-l-10">LTC</span></h5>
                                                    <p class="f-s-13 text-muted">13.12.2018 <span class="m-l-10">12:20</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="media border-bottom-1 p-t-15"><i class="align-self-start mr-3 cc XRP f-s-30"></i>
                                        <div class="media-body">
                                            <div class="row">
                                                <div class="col-lg-5">
                                                    <h5>Deal Number 96584</h5>
                                                    <p>Cras sit amet</p>
                                                </div>
                                                <div class="col-lg-2">
                                                    <p class="text-muted f-s-14">Buying</p>
                                                </div>
                                                <div class="col-lg-5 text-right">
                                                    <h5 class="text-muted"><i class="color-danger ti-minus m-r-5"></i> 985654 <span class="XRP m-l-10">XRP</span></h5>
                                                    <p class="f-s-13 text-muted">13.12.2018 <span class="m-l-10">12:20</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="media p-t-15"><i class="align-self-start mr-3 cc NEO f-s-30"></i>
                                        <div class="media-body">
                                            <div class="row">
                                                <div class="col-lg-5">
                                                    <h5>Deal Number 52145</h5>
                                                    <p>Cras sit amet</p>
                                                </div>
                                                <div class="col-lg-2">
                                                    <p class="text-muted f-s-14">Selling</p>
                                                </div>
                                                <div class="col-lg-5 text-right">
                                                    <h5 class="text-muted"><i class="color-danger ti-minus m-r-5"></i> 45625 <span class="NEO m-l-10">NEO</span></h5>
                                                    <p class="f-s-13 text-muted">13.12.2018 <span class="m-l-10">12:20</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Custom Media 2</h4>
                                <div class="custom-media-object-2">
                                    <div class="media border-bottom-1 p-t-15">
                                        <img class="mr-3 rounded-circle" src="images/avatar/1.jpg" alt="">
                                        <div class="media-body">
                                            <div class="row">
                                                <div class="col-lg-5">
                                                    <h5>John Tomas</h5>
                                                    <p>tomas@example.com</p>
                                                </div>
                                                <div class="col-lg-2">
                                                    <p class="text-muted f-s-14">10 Deals</p>
                                                </div>
                                                <div class="col-lg-5 text-right">
                                                    <h5 class="text-muted"><i class="cc BTC m-r-5"></i> <span class="BTC m-l-10">Send BTC</span></h5>
                                                    <p class="f-s-13 text-muted">Last 10 min ago</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="media border-bottom-1 p-t-15">
                                        <img class="mr-3 rounded-circle" src="images/avatar/2.jpg" alt="">
                                        <div class="media-body">
                                            <div class="row">
                                                <div class="col-lg-5">
                                                    <h5>Elora Smith</h5>
                                                    <p>elorasmith@example.com</p>
                                                </div>
                                                <div class="col-lg-2">
                                                    <p class="text-muted f-s-14">8 Deals</p>
                                                </div>
                                                <div class="col-lg-5 text-right">
                                                    <h5 class="text-muted"><i class="cc LTC m-r-5"></i> <span class="LTC m-l-10">Send LTC</span></h5>
                                                    <p class="f-s-13 text-muted">Last 20 min ago</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="media border-bottom-1 p-t-15">
                                        <img class="mr-3 rounded-circle" src="images/avatar/3.jpg" alt="">
                                        <div class="media-body">
                                            <div class="row">
                                                <div class="col-lg-5">
                                                    <h5>John Abraham</h5>
                                                    <p>abraham@example.com</p>
                                                </div>
                                                <div class="col-lg-2">
                                                    <p class="text-muted f-s-14">3 Deals</p>
                                                </div>
                                                <div class="col-lg-5 text-right">
                                                    <h5 class="text-muted"><i class="cc BTC m-r-5"></i> <span class="BTC m-l-10">Send BTC</span></h5>
                                                    <p class="f-s-13 text-muted">Last 10 min ago</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="media p-t-15">
                                        <img class="mr-3 rounded-circle" src="images/avatar/1.jpg" alt="">
                                        <div class="media-body">
                                            <div class="row">
                                                <div class="col-lg-5">
                                                    <h5>John Abraham</h5>
                                                    <p>abraham@example.com</p>
                                                </div>
                                                <div class="col-lg-2">
                                                    <p class="text-muted f-s-14">3 Deals</p>
                                                </div>
                                                <div class="col-lg-5 text-right">
                                                    <h5 class="text-muted"><i class="cc BTC m-r-5"></i> <span class="BTC m-l-10">Send BTC</span></h5>
                                                    <p class="f-s-13 text-muted">Last 10 min ago</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #/ container -->
        </div>
        <!--**********************************
            Content body end
        ***********************************-->
        
        
        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright &copy; Designed & Developed by <a href="https://themeforest.net/user/quixlab">Quixlab</a> 2018</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <script src="plugins/common/common.min.js"></script>
    <script src="js/custom.min.js"></script>
    <script src="js/settings.js"></script>
    <script src="js/gleek.js"></script>
    <script src="js/styleSwitcher.js"></script>

</body>

</html>