<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1">
    <base href="../" />

    <title>Dashboard 3 - Ace Admin</title>

    <!-- include common vendor stylesheets & fontawesome -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.1/css/fontawesome.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.1/css/regular.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.1/css/brands.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.1/css/solid.min.css">



    <!-- include vendor stylesheets used in "Dashboard 3" page. see "/views//pages/partials/dashboard-3/@vendor-stylesheets.hbs" -->


    <!-- include fonts -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600&display=swap">



    <!-- ace.css -->
    <link rel="stylesheet" type="text/css" href="./dist/css/ace.min.css">


    <!-- favicon -->
    <link rel="icon" type="image/png" href="./assets/favicon.png" />

    <!-- "Dashboard 3" page styles, specific to this page for demo only -->
    <link rel="stylesheet" type="text/css" href="./dist/css/ace-themes.min.css">

</head>

<body>
    <div class="body-container">
        <div class="main-container">

            <div id="sidebar" class="sidebar sidebar-white sidebar-fixed sidebar-backdrop expandable" data-swipe="true" data-dismiss="true">
                <div class="sidebar-inner">

                    <!-- .navbar-brand inside sidebar, only show in desktop view -->
                    <div class="d-none d-xl-flex sidebar-section-item m-0 fadeable-left fadeable-top">
                        <div class="fadeinable">
                            <div class="py-2 mx-1 border-b-1 brc-secondary-l3" id="sidebar-header-brand1">
                                <a class="navbar-brand text-140">
                                    <i class="fa fa-leaf text-success-m2"></i>
                                </a>
                            </div>
                        </div>

                        <div class="fadeable w-100 ">
                            <div class="py-2 text-center mx-3 border-b-1 brc-secondary-l3" id="sidebar-header-brand2">

                                <a class="navbar-brand ml-n2 text-140 text-grey-d2" href="#">
                                    <i class="fa fa-leaf mr-1 text-success-m2 text-105"></i>
                                    ACE <span>App</span>
                                </a>

                            </div>
                        </div>
                    </div><!-- /.sidebar-section-item  -->


                    <div class="pt-2 flex-grow-1 ace-scroll" data-ace-scroll="{}">
                        <!-- some part of sidebar header (brand) is outside scrollable area ^ -->
                        <div class="sidebar-section-item fadeable-left fadeable-top">
                            <div class="fadeinable">
                                <img alt="Natalie's Photo" src="assets/images/avatars/avatar3.png" width="48" class="p-2px border-2 brc-primary-tp2 radius-round" />
                            </div>

                            <div class="fadeable hideable">

                                <div class="py-2 d-flex flex-column align-items-center">
                                    <div>
                                        <img alt="Natalie's Photo" src="assets/images/avatars/avatar3.png" class="p-2px border-2 brc-primary-tp2 radius-round" />
                                    </div>

                                    <div class="text-center mt-1" id="id-user-info">
                                        <a href="#id-user-menu" class="d-style pos-rel collapsed text-blue-d2 accordion-toggle no-underline bgc-h-primary-l2 px-1 py-2px" data-toggle="collapse" aria-expanded="false">
                                            <span class="text-95 font-bolder">Natalie Kidman</span>
                                            <i class="fa fa-caret-down text-90 d-collapsed"></i>
                                            <i class="fa fa-caret-up text-90 d-n-collapsed"></i>
                                        </a>
                                        <div class="text-muted text-85">Marketing</div>
                                    </div><!-- /#id-user-info -->

                                    <div class="collapse" id="id-user-menu">
                                        <div class="mt-3">
                                            <a href="#" class="btn btn-light-blue btn-brc-white btn-h-light-blue radius-round py-2 px-1 border-2 shadow-sm">
                                                <i class="fa fa-envelope w-4 text-110 text-blue-d1"></i>
                                            </a>

                                            <a href="#" class="btn btn-light-blue btn-brc-white btn-h-light-blue radius-round py-2 px-1 border-2 shadow-sm">
                                                <i class="fa fa-users w-4 text-110 text-blue-d1"></i>
                                            </a>

                                            <a href="#" class="btn btn-light-blue btn-brc-white btn-h-light-blue radius-round py-2 px-1 border-2 shadow-sm">
                                                <i class="fa fa-star w-4 text-110 text-blue-d1"></i>
                                            </a>
                                        </div>
                                    </div><!-- /.collapse -->
                                </div>

                            </div>
                        </div>
                        <!-- optional `nav` tag -->
                        <nav aria-label="Main">
                            <ul class="nav flex-column mt-2 has-active-border">

                                <li class="nav-item">

                                    <a href="html/dashboard.html" class="nav-link">
                                        <i class="nav-icon fa fa-tachometer-alt nav-icon-round bgc-primary-tp1"></i>
                                        <span class="nav-text fadeable">
                                            <span>Dashboard</span>
                                        </span>


                                    </a>

                                    <b class="sub-arrow"></b>

                                </li>


                                <li class="nav-item active open">

                                    <a href="#" class="nav-link dropdown-toggle">
                                        <i class="nav-icon fa fa-cube nav-icon-round bgc-orange-tp1"></i>
                                        <span class="nav-text fadeable">
                                            <span>Layouts</span>
                                        </span>

                                        <b class="caret fa fa-angle-left rt-n90"></b>

                                        <!-- or you can use custom icons. first add `d-style` to 'A' -->
                                        <!--
                    	 	<b class="caret d-n-collapsed fa fa-minus text-80"></b>
                    	 	<b class="caret d-collapsed fa fa-plus text-80"></b>
                    	 -->
                                    </a>

                                    <div class="hideable submenu collapse show">
                                        <ul class="submenu-inner">

                                            <li class="nav-item">

                                                <a href="html/dashboard-2.html" class="nav-link">

                                                    <span class="nav-text">
                                                        <span>Dashboard 2</span>
                                                    </span>


                                                </a>


                                            </li>


                                            <li class="nav-item active">

                                                <a href="html/dashboard-3.html" class="nav-link">

                                                    <span class="nav-text">
                                                        <span>Dashboard 3</span>
                                                    </span>


                                                </a>


                                            </li>


                                            <li class="nav-item">

                                                <a href="html/dashboard-4.html" class="nav-link">

                                                    <span class="nav-text">
                                                        <span>Dashboard 4</span>
                                                    </span>


                                                </a>


                                            </li>


                                            <li class="nav-item">

                                                <a href="html/horizontal.html" class="nav-link">

                                                    <span class="nav-text">
                                                        <span>Horizontal Menu</span>
                                                    </span>


                                                </a>


                                            </li>


                                            <li class="nav-item">

                                                <a href="html/two-menus-1.html" class="nav-link">

                                                    <span class="nav-text">
                                                        <span>Two Menus</span>
                                                    </span>


                                                </a>


                                            </li>


                                            <li class="nav-item">

                                                <a href="html/landing-page-1.html" class="nav-link">

                                                    <span class="nav-text">
                                                        <span>Landing Page 1</span>
                                                    </span>


                                                </a>


                                            </li>


                                            <li class="nav-item">

                                                <a href="html/landing-page-2.html" class="nav-link">

                                                    <span class="nav-text">
                                                        <span>Landing Page 2</span>
                                                    </span>


                                                </a>


                                            </li>


                                            <li class="nav-item">

                                                <a href="html/coming-soon.html" class="nav-link">

                                                    <span class="nav-text">
                                                        <span>Coming Soon</span>
                                                    </span>


                                                </a>


                                            </li>

                                        </ul>
                                    </div>

                                    <b class="sub-arrow"></b>

                                </li>


                                <li class="nav-item">

                                    <a href="#" class="nav-link dropdown-toggle collapsed">
                                        <i class="nav-icon fa fa-desktop nav-icon-round bgc-green-tp1"></i>
                                        <span class="nav-text fadeable">
                                            <span>UI Elements</span>
                                        </span>

                                        <b class="caret fa fa-angle-left rt-n90"></b>

                                        <!-- or you can use custom icons. first add `d-style` to 'A' -->
                                        <!--
                    	 	<b class="caret d-n-collapsed fa fa-minus text-80"></b>
                    	 	<b class="caret d-collapsed fa fa-plus text-80"></b>
                    	 -->
                                    </a>

                                    <div class="hideable submenu collapse">
                                        <ul class="submenu-inner">

                                            <li class="nav-item">

                                                <a href="html/buttons.html" class="nav-link">

                                                    <span class="nav-text">
                                                        <span>Buttons</span>
                                                    </span>


                                                </a>


                                            </li>


                                            <li class="nav-item">

                                                <a href="html/button-groups.html" class="nav-link">

                                                    <span class="nav-text">
                                                        <span>Button Groups</span>
                                                    </span>


                                                </a>


                                            </li>


                                            <li class="nav-item">

                                                <a href="html/alerts.html" class="nav-link">

                                                    <span class="nav-text">
                                                        <span>Alerts</span>
                                                    </span>


                                                </a>


                                            </li>


                                            <li class="nav-item">

                                                <a href="html/modals.html" class="nav-link">

                                                    <span class="nav-text">
                                                        <span>Modals</span>
                                                    </span>


                                                </a>


                                            </li>


                                            <li class="nav-item">

                                                <a href="html/asides.html" class="nav-link">

                                                    <span class="nav-text">
                                                        <span>Asides</span>
                                                    </span>


                                                </a>


                                            </li>


                                            <li class="nav-item">

                                                <a href="html/tabs.html" class="nav-link">

                                                    <span class="nav-text">
                                                        <span>Tabs</span>
                                                    </span>


                                                </a>


                                            </li>


                                            <li class="nav-item">

                                                <a href="html/accordions.html" class="nav-link">

                                                    <span class="nav-text">
                                                        <span>Accordions</span>
                                                    </span>


                                                </a>


                                            </li>


                                            <li class="nav-item">

                                                <a href="html/tooltips.html" class="nav-link">

                                                    <span class="nav-text">
                                                        <span>Tooltips &amp; Popovers</span>
                                                    </span>


                                                </a>


                                            </li>


                                            <li class="nav-item">

                                                <a href="html/badges.html" class="nav-link">

                                                    <span class="nav-text">
                                                        <span>Badges</span>
                                                    </span>


                                                </a>


                                            </li>


                                            <li class="nav-item">

                                                <a href="html/pagination.html" class="nav-link">

                                                    <span class="nav-text">
                                                        <span>Pagination</span>
                                                    </span>


                                                </a>


                                            </li>


                                            <li class="nav-item">

                                                <a href="html/dropdowns.html" class="nav-link">

                                                    <span class="nav-text">
                                                        <span>Dropdowns</span>
                                                    </span>


                                                </a>


                                            </li>


                                            <li class="nav-item">

                                                <a href="html/icons.html" class="nav-link">

                                                    <span class="nav-text">
                                                        <span>Icons</span>
                                                    </span>


                                                </a>


                                            </li>


                                            <li class="nav-item">

                                                <a href="html/typography.html" class="nav-link">

                                                    <span class="nav-text">
                                                        <span>Typography</span>
                                                    </span>


                                                </a>


                                            </li>


                                            <li class="nav-item">

                                                <a href="html/charts.html" class="nav-link">

                                                    <span class="nav-text">
                                                        <span>Charts</span>
                                                    </span>


                                                </a>


                                            </li>


                                            <li class="nav-item">

                                                <a href="html/treeview.html" class="nav-link">

                                                    <span class="nav-text">
                                                        <span>Treeview</span>
                                                    </span>


                                                </a>


                                            </li>


                                            <li class="nav-item">

                                                <a href="#" class="nav-link dropdown-toggle collapsed">

                                                    <span class="nav-text">
                                                        <span>Nested Links</span>
                                                    </span>

                                                    <b class="caret fa fa-angle-left rt-n90"></b>

                                                    <!-- or you can use custom icons. first add `d-style` to 'A' -->
                                                    <!--
                    				 	<b class="caret d-n-collapsed fa fa-minus text-80"></b>
                    				 	<b class="caret d-collapsed fa fa-plus text-80"></b>
                    				 -->
                                                </a>

                                                <div class=" submenu collapse">
                                                    <ul class="submenu-inner">

                                                        <li class="nav-item">

                                                            <a href="#" class="nav-link dropdown-toggle collapsed">
                                                                <i class="nav-icon fa fa-caret-right text-blue-l2 mr-2"></i>
                                                                <span class="nav-text">
                                                                    <span>Third Level Menu</span>
                                                                </span>

                                                                <b class="caret fa fa-angle-left rt-n90"></b>

                                                                <!-- or you can use custom icons. first add `d-style` to 'A' -->
                                                                <!--
                    							 	<b class="caret d-n-collapsed fa fa-minus text-80"></b>
                    							 	<b class="caret d-collapsed fa fa-plus text-80"></b>
                    							 -->
                                                            </a>

                                                            <div class=" submenu collapse">
                                                                <ul class="submenu-inner">

                                                                    <li class="nav-item">

                                                                        <a href="#" class="nav-link dropdown-toggle collapsed">
                                                                            <i class="nav-icon fa fa-leaf text-success-l2 text-90 mr-2"></i>
                                                                            <span class="nav-text">
                                                                                <span>Fourth Level</span>
                                                                            </span>

                                                                            <b class="caret fa fa-angle-left rt-n90"></b>

                                                                            <!-- or you can use custom icons. first add `d-style` to 'A' -->
                                                                            <!--
                    										 	<b class="caret d-n-collapsed fa fa-minus text-80"></b>
                    										 	<b class="caret d-collapsed fa fa-plus text-80"></b>
                    										 -->
                                                                        </a>

                                                                        <div class=" submenu collapse">
                                                                            <ul class="submenu-inner">

                                                                                <li class="nav-item">

                                                                                    <a href="#" class="nav-link">
                                                                                        <i class="nav-icon fa fa-stop text-warning-l1 text-80 mx-2"></i>
                                                                                        <span class="nav-text">
                                                                                            <span>5th Level</span>
                                                                                        </span>


                                                                                    </a>


                                                                                </li>


                                                                                <li class="nav-item">

                                                                                    <a href="#" class="nav-link">
                                                                                        <i class="nav-icon fa fa-stop text-warning-l1 text-80 mx-2"></i>
                                                                                        <span class="nav-text">
                                                                                            <span>5th Level</span>
                                                                                        </span>


                                                                                    </a>


                                                                                </li>

                                                                            </ul>
                                                                        </div>

                                                                        <b class="sub-arrow"></b>

                                                                    </li>

                                                                </ul>
                                                            </div>

                                                            <b class="sub-arrow"></b>

                                                        </li>

                                                    </ul>
                                                </div>

                                                <b class="sub-arrow"></b>

                                            </li>

                                        </ul>
                                    </div>

                                    <b class="sub-arrow"></b>

                                </li>


                                <li class="nav-item">

                                    <a href="#" class="nav-link dropdown-toggle collapsed">
                                        <i class="nav-icon fa fa-table nav-icon-round bgc-purple-tp1"></i>
                                        <span class="nav-text fadeable">
                                            <span>Tables</span>
                                        </span>

                                        <b class="caret fa fa-angle-left rt-n90"></b>

                                        <!-- or you can use custom icons. first add `d-style` to 'A' -->
                                        <!--
                    	 	<b class="caret d-n-collapsed fa fa-minus text-80"></b>
                    	 	<b class="caret d-collapsed fa fa-plus text-80"></b>
                    	 -->
                                    </a>

                                    <div class="hideable submenu collapse">
                                        <ul class="submenu-inner">

                                            <li class="nav-item">

                                                <a href="html/table-basic.html" class="nav-link">

                                                    <span class="nav-text">
                                                        <span>Basic Tables</span>
                                                    </span>


                                                </a>


                                            </li>


                                            <li class="nav-item">

                                                <a href="html/table-datatables.html" class="nav-link">

                                                    <span class="nav-text">
                                                        <span>DataTables</span>
                                                    </span>


                                                </a>


                                            </li>


                                            <li class="nav-item">

                                                <a href="html/table-bootstrap.html" class="nav-link">

                                                    <span class="nav-text">
                                                        <span>Bootstrap Table</span>
                                                    </span>


                                                </a>


                                            </li>


                                            <li class="nav-item">

                                                <a href="html/table-jqgrid.html" class="nav-link">

                                                    <span class="nav-text">
                                                        <span>jqGrid</span>
                                                    </span>


                                                </a>


                                            </li>

                                        </ul>
                                    </div>

                                    <b class="sub-arrow"></b>

                                </li>


                                <li class="nav-item">

                                    <a href="#" class="nav-link dropdown-toggle collapsed">
                                        <i class="nav-icon fa fa-edit nav-icon-round bgc-red-tp1"></i>
                                        <span class="nav-text fadeable">
                                            <span>Forms</span>
                                        </span>

                                        <b class="caret fa fa-angle-left rt-n90"></b>

                                        <!-- or you can use custom icons. first add `d-style` to 'A' -->
                                        <!--
                    	 	<b class="caret d-n-collapsed fa fa-minus text-80"></b>
                    	 	<b class="caret d-collapsed fa fa-plus text-80"></b>
                    	 -->
                                    </a>

                                    <div class="hideable submenu collapse">
                                        <ul class="submenu-inner">

                                            <li class="nav-item">

                                                <a href="html/form-basic.html" class="nav-link">

                                                    <span class="nav-text">
                                                        <span>Basic Elements</span>
                                                    </span>


                                                </a>


                                            </li>


                                            <li class="nav-item">

                                                <a href="html/form-more.html" class="nav-link">

                                                    <span class="nav-text">
                                                        <span>More Elements</span>
                                                    </span>


                                                </a>


                                            </li>


                                            <li class="nav-item">

                                                <a href="html/form-wizard.html" class="nav-link">

                                                    <span class="nav-text">
                                                        <span>Wizard &amp; Validation</span>
                                                    </span>


                                                </a>


                                            </li>


                                            <li class="nav-item">

                                                <a href="html/form-upload.html" class="nav-link">

                                                    <span class="nav-text">
                                                        <span>File Upload</span>
                                                    </span>


                                                </a>


                                            </li>


                                            <li class="nav-item">

                                                <a href="html/form-wysiwyg.html" class="nav-link">

                                                    <span class="nav-text">
                                                        <span>Wysiwyg &amp; Markdown</span>
                                                    </span>


                                                </a>


                                            </li>

                                        </ul>
                                    </div>

                                    <b class="sub-arrow"></b>

                                </li>


                                <li class="nav-item">

                                    <a href="html/cards.html" class="nav-link">
                                        <i class="nav-icon far fa-window-restore nav-icon-round bgc-info-tp1"></i>
                                        <span class="nav-text fadeable">
                                            <span>Cards</span>
                                        </span>


                                    </a>

                                    <b class="sub-arrow"></b>

                                </li>


                                <li class="nav-item">

                                    <a href="html/calendar.html" class="nav-link">
                                        <i class="nav-icon far fa-calendar-alt nav-icon-round bgc-pink-tp1"></i>
                                        <span class="nav-text fadeable">
                                            <span>Calendar</span>
                                            <span class="badge px-1 " title="2 Urgent Events"><i class='fas fa-exclamation-triangle text-140 text-danger-m1'></i></span>
                                        </span>


                                    </a>

                                    <b class="sub-arrow"></b>

                                </li>


                                <li class="nav-item">

                                    <a href="html/gallery.html" class="nav-link">
                                        <i class="nav-icon far fa-image nav-icon-round bgc-secondary-tp1"></i>
                                        <span class="nav-text fadeable">
                                            <span>Gallery</span>
                                        </span>


                                    </a>

                                    <b class="sub-arrow"></b>

                                </li>


                                <li class="nav-item">

                                    <a href="#" class="nav-link dropdown-toggle collapsed">
                                        <i class="nav-icon fa fa-tag nav-icon-round bgc-brown-tp1"></i>
                                        <span class="nav-text fadeable">
                                            <span>More Pages</span>
                                            <span class="badge badge-primary radius-2px text-90 ml-1 mr-2px badge-sm ">5</span>
                                        </span>

                                        <b class="caret fa fa-angle-left rt-n90"></b>

                                        <!-- or you can use custom icons. first add `d-style` to 'A' -->
                                        <!--
                    	 	<b class="caret d-n-collapsed fa fa-minus text-80"></b>
                    	 	<b class="caret d-collapsed fa fa-plus text-80"></b>
                    	 -->
                                    </a>

                                    <div class="hideable submenu collapse">
                                        <ul class="submenu-inner">

                                            <li class="nav-item">

                                                <a href="html/page-profile.html" class="nav-link">

                                                    <span class="nav-text">
                                                        <span>Profile</span>
                                                    </span>


                                                </a>


                                            </li>


                                            <li class="nav-item">

                                                <a href="html/page-login.html" class="nav-link">

                                                    <span class="nav-text">
                                                        <span>Login</span>
                                                    </span>


                                                </a>


                                            </li>


                                            <li class="nav-item">

                                                <a href="html/page-pricing.html" class="nav-link">

                                                    <span class="nav-text">
                                                        <span>Pricing</span>
                                                    </span>


                                                </a>


                                            </li>


                                            <li class="nav-item">

                                                <a href="html/page-invoice.html" class="nav-link">

                                                    <span class="nav-text">
                                                        <span>Invoice</span>
                                                    </span>


                                                </a>


                                            </li>


                                            <li class="nav-item">

                                                <a href="html/page-inbox.html" class="nav-link">

                                                    <span class="nav-text">
                                                        <span>Inbox</span>
                                                    </span>


                                                </a>


                                            </li>


                                            <li class="nav-item">

                                                <a href="html/page-search.html" class="nav-link">

                                                    <span class="nav-text">
                                                        <span>Search Results</span>
                                                    </span>


                                                </a>


                                            </li>


                                            <li class="nav-item">

                                                <a href="html/page-error.html" class="nav-link">

                                                    <span class="nav-text">
                                                        <span>Error</span>
                                                    </span>


                                                </a>


                                            </li>


                                            <li class="nav-item">

                                                <a href="html/starter.html" class="nav-link">

                                                    <span class="nav-text">
                                                        <span>Starter</span>
                                                    </span>


                                                </a>


                                            </li>

                                        </ul>
                                    </div>

                                    <b class="sub-arrow"></b>

                                </li>

                            </ul>
                        </nav>

                    </div><!-- /.ace-scroll -->


                    <div class="sidebar-section">
                        <div class="sidebar-section-item fadeable-left fadeable-top">
                            <div class="fadeinable">
                                <button type="button" class="btn btn-primary btn-bold radius-1">
                                    <i class="fa fa-cloud"></i>
                                </button>
                            </div>

                            <div id="sidebar-footer" class="fadeable text-center border-t-1 brc-secondary-l3 w-95">
                                <div class="py-2">
                                    <button type="button" class="btn btn-primary px-5 btn-bold radius-1">
                                        Upgrade
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div role="main" class="main-content">
                <nav class="navbar navbar-sm navbar-expand-lg navbar-fixed navbar-white2">
                    <div class="navbar-inner">


                        <div class="d-flex h-100 justify-content-xl-between align-items-center">

                            <button type="button" class="btn btn-burger burger-arrowed static collapsed ml-2 d-flex d-xl-none" data-toggle-mobile="sidebar" data-target="#sidebar" aria-controls="sidebar" aria-expanded="false" aria-label="Toggle sidebar">
                                <span class="bars text-grey-m2"></span>
                            </button><!-- mobile sidebar toggler button -->

                            <a class="navbar-brand d-xl-none mx-1 text-grey-d3 text-130" href="#">
                                <i class="fa fa-leaf mr-2px text-success-m2"></i>
                                ACE
                                <span class="d-none d-sm-inline-block">App</span>
                            </a>

                            <button type="button" class="btn text-grey-m2 btn-burger align-self-center mx-2 d-none d-xl-flex btn-h-light-primary" data-toggle="sidebar" data-target="#sidebar" aria-controls="sidebar" aria-expanded="true" aria-label="Toggle sidebar">
                                <span class="bars"></span>
                            </button><!-- sidebar toggler button -->

                        </div>


                        <div class="navbar-content">
                            <div class="dropdown dd-backdrop dd-backdrop-none-md">
                                <button type="button" id="id-nav-post-btn" class="btn btn-outline-primary btn-bold btn-sm mx-2 px-2 px-lg-3 radius-round dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-plus mr-lg-1"></i>
                                    <span class="d-none d-lg-inline">Create Post</span>
                                </button>

                                <div class="dropdown-menu dropdown-menu-right dropdown-animated brc-primary-m3 radius-2 py-2 py-md-0 dd-slide-up dd-slide-none-md">
                                    <div class="dropdown-inner">
                                        <div class="dropdown-header d-md-none">Choose post type:</div>
                                        <a class="dropdown-item btn btn-outline-grey btn-h-light-primary btn-a-light-primary" href="#">
                                            <i class="fa fa-circle text-primary-m2 text-75 mr-1"></i>
                                            Category 1
                                        </a>

                                        <a class="dropdown-item btn btn-outline-grey btn-h-light-success btn-a-light-success" href="#">
                                            <i class="fa fa-circle text-success-m2 text-75 mr-1"></i>
                                            Category 2
                                        </a>

                                        <a class="dropdown-item btn btn-outline-grey btn-h-light-purple btn-a-light-purple" href="#">
                                            <i class="fa fa-circle text-purple-m2 text-75 mr-1"></i>
                                            Category 3
                                        </a>
                                    </div>
                                </div>
                            </div>


                            <!-- #navbarSearch toggler -->
                            <button class="navbar-toggler h-75" type="button" data-toggle="collapse" data-target="#navbarSearch" aria-controls="navbarSearch" aria-expanded="false" aria-label="Toggle navbar search">
                                <i class="fa fa-search text-grey-m2 text-90"></i>
                            </button>

                            <!-- searchbox -->
                            <div class="collapse navbar-collapse navbar-backdrop" id="navbarSearch">
                                <form class="d-flex align-items-center ml-lg-3" data-submit="dismiss">
                                    <i class="fa fa-search text-blue-m1 mr-n3 d-none d-lg-block pb-2px"></i>
                                    <input type="text" class="navbar-input py-3 py-lg-1 px-3 pl-lg-4 w-100 autofocus" placeholder="SEARCH ..." aria-label="Search" />
                                </form>
                            </div>
                        </div><!-- .navbar-content -->


                        <!-- #navbarMenu toggler -->
                        <button class="navbar-toggler ml-1 mr-2 px-1" type="button" data-toggle="collapse" data-target="#navbarMenu" aria-controls="navbarMenu" aria-expanded="false" aria-label="Toggle navbar menu">
                            <img class="mx-0 radius-round border-2 brc-primary-tp3 p-1px" src="assets/image/avatar/avatar3.jpg" width="36" alt="Natalie's Photo">
                        </button>


                        <div class="navbar-menu collapse navbar-collapse navbar-backdrop" id="navbarMenu">

                            <div class="navbar-nav">
                                <ul class="nav has-active-border">

                                    <li class="nav-item dropdown dropdown-mega">
                                        <a class="nav-link dropdown-toggle mr-1px" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                            <i class="fa fa-list-alt mr-2 d-lg-none"></i>
                                            Mega
                                            <i class="caret fa fa-angle-down d-none d-lg-block"></i>
                                            <i class="caret fa fa-angle-left d-block d-lg-none"></i>
                                        </a>
                                        <div class="p-0 dropdown-menu dropdown-animated brc-primary-m3 border-b-2 ml-1 mr-1px w-auto bgc-default-l4">
                                            <div class="d-flex flex-column">

                                                <div class="row mx-0">

                                                    <div class="col-lg-4 col-12 p-2 p-lg-3 p-xl-4 d-flex flex-column align-items-center">
                                                        <div class="w-100 mb-3">
                                                            <h5 class="col-lg-9 mx-auto text-dark-m2 px-0">
                                                                <i class="fa fa-clipboard-check mr-1 text-purple-m1"></i>
                                                                Current Tasks
                                                            </h5>
                                                        </div>

                                                        <div class="col-lg-9 list-group px-0 border-1 brc-default-l2 radius-1 shadow-md">
                                                            <a href="#" class="border-0 bgc-h-primary-l4 list-group-item list-group-item-action">
                                                                <i class="fab fa-facebook text-blue-m1 text-110 mr-2"></i>
                                                                Cras justo odio
                                                            </a>
                                                            <a href="#" class="border-0 bgc-h-primary-l4 list-group-item list-group-item-action text-primary">
                                                                <i class="fa fa-user text-success-m1 text-110 mr-2"></i>
                                                                Dapibus ac facilisis in
                                                            </a>
                                                            <a href="#" class="border-0 bgc-h-primary-l4 list-group-item list-group-item-action">
                                                                <i class="fa fa-clock text-purple-m1 text-110 mr-2"></i>
                                                                Morbi leo risus
                                                            </a>
                                                            <a href="#" class="border-0 list-group-item list-group-item-action bgc-success-l2">
                                                                <i class="fa fa-check text-orange-d1 text-110 mr-2"></i>
                                                                Porta ac consectetur
                                                                <span class="ml-2 badge badge-primary badge-pill badge-lg">14</span>
                                                            </a>
                                                            <a href="#" class="border-0 list-group-item list-group-item-action disabled">Vestibulum at eros</a>
                                                        </div>
                                                    </div><!-- .col:mega tasks -->



                                                    <div class="bgc-white col-lg-4 col-12 p-4">
                                                        <h5 class="text-dark-m2">
                                                            <i class="fas fa-bullhorn mr-1 text-primary-m1"></i>
                                                            Notifications
                                                        </h5>

                                                        <div class="mt-3">
                                                            <div class="media mt-2 px-3 pt-1 border-l-2 brc-purple-m2">
                                                                <div class="bgc-purple radius-1 mr-3 p-3">
                                                                    <i class="fa fa-user text-white text-150"></i>
                                                                </div>
                                                                <div class="media-body pb-0 mb-0 text-90 text-grey-m1">
                                                                    <div class="text-grey-d2 font-bolder">@username1</div>
                                                                    Donec id elit non mi porta gravida at eget metus. Fusce dapibus...
                                                                </div>
                                                            </div>

                                                            <hr />

                                                            <div class="media mt-2 px-3 pt-1 border-l-2 brc-warning-m2">
                                                                <div class="bgc-warning radius-1 mr-3 p-3">
                                                                    <i class="fa fa-user text-white text-150"></i>
                                                                </div>
                                                                <div class="media-body pb-0 mb-0 text-90 text-grey-m1">
                                                                    <div class="text-grey-d2 font-bolder">@username2</div>
                                                                    Fusce dapibus, tellus ac cursus commodo, tortor mauris...
                                                                </div>
                                                            </div>

                                                            <hr />

                                                            <div class="media mt-2 px-3 pt-1 border-l-2 brc-success-m2">
                                                                <div class="bgc-success radius-1 mr-3 p-3">
                                                                    <i class="fa fa-user text-white text-150"></i>
                                                                </div>
                                                                <div class="media-body pb-0 mb-0 text-90 text-grey-m1">
                                                                    <div class="text-grey-d2 font-bolder">@username3</div>
                                                                    Tortor mauris condimentum nibh, fusce dapibus...
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div><!-- .col:mega notifications -->


                                                    <div class="col-lg-4 col-12 p-4 dropdown-clickable">
                                                        <h5 class="text-dark-m2">
                                                            <i class="fa fa-envelope mr-1 text-green-m1"></i>
                                                            Contact Us
                                                        </h5>

                                                        <form class="my-3">
                                                            <div class="form-group mb-2">
                                                                <input placeholder="Name" type="text" class="form-control border-l-2" />
                                                            </div>

                                                            <div class="form-group mb-2">
                                                                <input placeholder="Email" type="text" class="form-control border-l-2" />
                                                            </div>

                                                            <div class="form-group mb-4">
                                                                <textarea class="form-control brc-primary-m2 border-l-2 text-grey-d1" rows="3" placeholder="Your message..."></textarea>
                                                            </div>

                                                            <div class="text-center">
                                                                <button type="reset" class="btn px-3 btn-secondary btn-bold tex1t-110">
                                                                    Reset
                                                                </button>

                                                                <button data-dismiss="dropdown" type="button" class="btn btn-outline-primary btn-bgc-white px-3 btn-bold btn-text-slide-x" style="width: 8rem;">
                                                                    Submit<i class="btn-text-2  move-right fa fa-arrow-right text-120 align-text-bottom ml-1"></i>
                                                                </button>
                                                            </div>
                                                        </form>
                                                    </div><!-- .col:mega contact -->

                                                </div><!-- .row: mega -->



                                                <!-- Big Action Buttons -->
                                                <div class="order-first order-lg-last ">
                                                    <hr class="d-none d-lg-block brc-default-l1 my-0" /><!-- border above buttons in desktop mode -->

                                                    <div class="row mx-0 bgc-primary-l4">
                                                        <div class="col-lg-8 offset-lg-2 d-flex justify-content-center py-4 d-flex">

                                                            <button class="mx-2px btn btn-sm btn-app btn-outline-warning btn-h-outline-warning btn-a-outline-warning radius-1 border-2">
                                                                <i class="fa fa-cog text-190 d-block mb-2 h-4"></i>
                                                                <span class="text-muted">Settings</span>
                                                            </button>

                                                            <button class="mx-2px btn btn-sm btn-app btn-outline-info btn-h-outline-info radius-1 border-2">
                                                                <i class="fa fa-edit text-190 d-block mb-2 h-4"></i>
                                                                Edit
                                                                <span class="position-tr text-danger-m2 text-130 mr-1">*</span>
                                                            </button>

                                                            <button class="mx-2px btn btn-sm btn-app btn-dark radius-1">
                                                                <i class="fa fa-lock text-150 d-block mb-2 h-4"></i>
                                                                Lock
                                                            </button>

                                                        </div>
                                                    </div><!-- .row:megamenu big buttons -->

                                                    <hr class="d-lg-none brc-default-l1 mt-0" /><!-- border below buttons in mobile mode -->
                                                </div>


                                            </div>
                                        </div>
                                    </li>


                                    <li class="nav-item dropdown dropdown-mega">
                                        <a class="nav-link dropdown-toggle pl-lg-3 pr-lg-4" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                                            <i class="fa fa-bell text-110 icon-animated-bell mr-lg-2"></i>
                                            <span class="d-inline-block d-lg-none ml-2">Notifications</span>
                                            <span id="id-navbar-badge1" class="badge badge-info radius-round text-75">3</span>

                                            <i class="caret fa fa-angle-left d-block d-lg-none"></i>
                                        </a>

                                        <div class="shadow dropdown-menu dropdown-animated dropdown-sm p-0 brc-primary-m3 border-b-2 bgc-white">
                                            <ul class="nav nav-tabs nav-tabs-simple w-100 nav-justified dropdown-clickable border-b-1 brc-secondary-l2" role="tablist">
                                                <li class="nav-item">
                                                    <a class="d-style px-0 mx-0 py-3 nav-link active text-600 brc-blue-m1 text-dark-tp5 bgc-h-blue-l4" data-toggle="tab" href="#navbar-notif-tab-1" role="tab">
                                                        <span class="d-active text-blue-d1 text-105">Notifications</span>
                                                        <span class="d-n-active">Notifications</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="d-style px-0 mx-0 py-3 nav-link text-600 brc-purple-m1 text-dark-tp5 bgc-h-purple-l4" data-toggle="tab" href="#navbar-notif-tab-2" role="tab">
                                                        <span class="d-active text-purple-d1 text-105">Messages</span>
                                                        <span class="d-n-active">Messages</span>
                                                    </a>
                                                </li>
                                            </ul><!-- .nav-tabs -->


                                            <div class="tab-content tab-sliding p-0">

                                                <div class="tab-pane mh-none show active px-md-1 pt-1" id="navbar-notif-tab-1" role="tabpanel">

                                                    <a href="#" class="mb-0 border-0 list-group-item list-group-item-action btn-h-lighter-secondary">
                                                        <i class="fab fa-twitter bgc-blue-tp1 text-white text-110 mr-15 p-2 radius-1"></i>
                                                        <span class="text-muted">Followers</span>
                                                        <span class="float-right badge badge-danger radius-round text-80">- 4</span>
                                                    </a>
                                                    <a href="#" class="mb-0 border-0 list-group-item list-group-item-action btn-h-lighter-secondary">
                                                        <i class="fa fa-comment bgc-pink-tp1 text-white text-110 mr-15 p-2 radius-1"></i>
                                                        <span class="text-muted">New Comments</span>
                                                        <span class="float-right badge badge-info radius-round text-80">+12</span>
                                                    </a>
                                                    <a href="#" class="mb-0 border-0 list-group-item list-group-item-action btn-h-lighter-secondary">
                                                        <i class="fa fa-shopping-cart bgc-success-tp1 text-white text-110 mr-15 p-2 radius-1"></i>
                                                        <span class="text-muted">New Orders</span>
                                                        <span class="float-right badge badge-success radius-round text-80">+8</span>
                                                    </a>
                                                    <a href="#" class="mb-0 border-0 list-group-item list-group-item-action btn-h-lighter-secondary">
                                                        <i class="far fa-clock bgc-purple-tp1 text-white text-110 mr-15 p-2 radius-1"></i>
                                                        <span class="text-muted">Finished processing data!</span>
                                                    </a>

                                                    <hr class="mt-1 mb-1px brc-secondary-l2" />
                                                    <a href="#" class="mb-0 py-3 border-0 list-group-item text-blue text-uppercase text-center text-85 font-bolder">
                                                        See All Notifications
                                                        <i class="ml-2 fa fa-arrow-right text-muted"></i>
                                                    </a>

                                                </div><!-- .tab-pane : notifications -->


                                                <div class="tab-pane mh-none pl-md-2" id="navbar-notif-tab-2" role="tabpanel">
                                                    <div data-ace-scroll='{"ignore": "mobile", "height": 300, "smooth":true}'>
                                                        <a href="#" class="d-flex mb-0 border-0 list-group-item list-group-item-action btn-h-lighter-secondary">
                                                            <img alt="Alex's avatar" src="assets/image/avatar/avatar.png" width="48" class="align-self-start border-2 brc-primary-m3 p-1px mr-2 radius-round" />
                                                            <div>
                                                                <span class="text-primary-m1 font-bolder">Alex:</span>
                                                                <span class="text-grey text-90">Ciao sociis natoque penatibus et auctor ...</span>
                                                                <br />
                                                                <span class="text-grey-m1 text-85">
                                                                    <i class="far fa-clock"></i>
                                                                    a moment ago
                                                                </span>
                                                            </div>
                                                        </a>
                                                        <hr class="my-1px brc-grey-l3" />
                                                        <a href="#" class="d-flex mb-0 border-0 list-group-item list-group-item-action btn-h-lighter-secondary">
                                                            <img alt="Susan's avatar" src="assets/image/avatar/avatar3.png" width="48" class="align-self-start border-2 brc-primary-m3 p-1px mr-2 radius-round" />
                                                            <div>
                                                                <span class="text-primary-m1 font-bolder">Susan:</span>
                                                                <span class="text-grey text-90">Vestibulum id ligula porta felis euismod ...</span>
                                                                <br />
                                                                <span class="text-grey-m1 text-85">
                                                                    <i class="far fa-clock"></i>
                                                                    20 minutes ago
                                                                </span>
                                                            </div>
                                                        </a>
                                                        <hr class="my-1px brc-grey-l3" />
                                                        <a href="#" class="d-flex mb-0 border-0 list-group-item list-group-item-action btn-h-lighter-secondary">
                                                            <img alt="Bob's avatar" src="assets/image/avatar/avatar4.png" width="48" class="align-self-start border-2 brc-primary-m3 p-1px mr-2 radius-round" />
                                                            <div>
                                                                <span class="text-primary-m1 font-bolder">Bob:</span>
                                                                <span class="text-grey text-90">Nullam quis risus eget urna mollis ornare ...</span>
                                                                <br />
                                                                <span class="text-grey-m1 text-85">
                                                                    <i class="far fa-clock"></i>
                                                                    3:15 pm
                                                                </span>
                                                            </div>
                                                        </a>
                                                        <hr class="my-1px brc-grey-l3" />
                                                        <a href="#" class="d-flex mb-0 border-0 list-group-item list-group-item-action btn-h-lighter-secondary">
                                                            <img alt="Kate's avatar" src="assets/image/avatar/avatar2.png" width="48" class="align-self-start border-2 brc-primary-m3 p-1px mr-2 radius-round" />
                                                            <div>
                                                                <span class="text-primary-m1 font-bolder">Kate:</span>
                                                                <span class="text-grey text-90">Ciao sociis natoque eget urna mollis ornare ...</span>
                                                                <br />
                                                                <span class="text-grey-m1 text-85">
                                                                    <i class="far fa-clock"></i>
                                                                    1:33 pm
                                                                </span>
                                                            </div>
                                                        </a>
                                                        <hr class="my-1px brc-grey-l3" />
                                                        <a href="#" class="d-flex mb-0 border-0 list-group-item list-group-item-action btn-h-lighter-secondary">
                                                            <img alt="Fred's avatar" src="assets/image/avatar/avatar5.png" width="48" class="align-self-start border-2 brc-primary-m3 p-1px mr-2 radius-round" />
                                                            <div>
                                                                <span class="text-primary-m1 font-bolder">Fred:</span>
                                                                <span class="text-grey text-90">Vestibulum id penatibus et auctor ...</span>
                                                                <br />
                                                                <span class="text-grey-m1 text-85">
                                                                    <i class="far fa-clock"></i>
                                                                    10:09 am
                                                                </span>
                                                            </div>
                                                        </a>

                                                    </div><!-- ace-scroll -->

                                                    <hr class="my-1px brc-secondary-l2 border-double" />
                                                    <a href="html/page-inbox.html" class="mb-0 py-3 border-0 list-group-item text-purple text-uppercase text-center text-85 font-bolder">
                                                        See All Messages
                                                        <i class="ml-2 fa fa-arrow-right text-muted"></i>
                                                    </a>
                                                </div><!-- .tab-pane : messages -->

                                            </div>
                                        </div>
                                    </li>

                                </ul>
                            </div>

                        </div>



                    </div>
                </nav>
                <div class="page-content container">
                    <div class="page-header border-0 pb-3">
                        <h1 class="text-dark-m3 pb-0 mb-1 text-130">
                            Overview &amp; Stats
                        </h1>

                        <div class="page-tools">
                            <div class="action-buttons text-nowrap">
                                <a class="btn bgc-white btn-light-secondary mx-0" href="#" data-toggle="tooltip" title="Details">
                                    <i class="fa fa-search-plus text-blue-d1"></i>
                                </a>
                                <a class="btn bgc-white btn-light-secondary mx-0" href="#" data-toggle="tooltip" title="Print">
                                    <i class="fa fa-print text-purple-d1"></i>
                                </a>
                                <a class="btn bgc-white btn-light-secondary mx-0" href="#" data-toggle="tooltip" title="Remove">
                                    <i class="fa fa-trash text-danger"></i>
                                </a>
                            </div>
                        </div>
                    </div>





                    <!-- stat boxes -->
                    <div class="row px-2">
                        <div class="col-12 col-sm-6 col-md-3 px-2 mb-1 mb-md-0">

                            <div class="bcard d-flex flex-column text-center px-2 py-3 h-100">
                                <div class="mb-1">
                                    <span class="d-inline-block bgc-success-l2 p-3 radius-round">
                                        <i class="fab fa-twitter text-success-m1 text-180 w-4"></i>
                                    </span>
                                </div>

                                <div class="mt-1">
                                    <div class="text-secondary-d3 text-180">
                                        132
                                    </div>
                                    <div class="text-dark-tp4 text-110">
                                        new followers
                                    </div>
                                </div>

                                <div class="text-blue-m1 font-bolder position-tr m-2">
                                    6%
                                    <i class="fas fa-caret-up text-120"></i>
                                </div>
                            </div>

                        </div>




                        <div class="col-12 col-sm-6 col-md-3 px-2 mb-1 mb-md-0">

                            <div class="bcard d-flex flex-column text-center px-2 py-3 h-100">
                                <div class="mb-1">
                                    <span class="d-inline-block bgc-pink-l3 p-3 radius-round">
                                        <i class="fa fa-shopping-cart text-pink-m2 text-170 w-4"></i>
                                    </span>
                                </div>

                                <div class="mt-1">
                                    <div class="text-secondary-d3 text-180">
                                        46
                                    </div>
                                    <div class="text-dark-tp4 text-110">
                                        new orders
                                    </div>
                                </div>

                                <div class="text-orange-d2 pr-1 font-bolder position-tr m-2">
                                    1%
                                    <i class="fa fa-caret-down text-120"></i>
                                </div>
                            </div>

                        </div>




                        <div class="col-12 col-sm-6 col-md-3 px-2 mb-1 mb-md-0">

                            <div class="bcard d-flex flex-column text-center px-2 py-3 h-100">
                                <div class="flex-grow-1">
                                    <div class="text-secondary-d3 text-180">
                                        6,205
                                    </div>
                                    <div class="text-dark-tp4 text-110">
                                        page views
                                    </div>
                                </div>

                                <div class="text-blue-m1 font-bolder position-tr m-2">
                                    9%
                                    <i class="fa fa-caret-up text-120"></i>
                                </div>

                                <div class="mt-2 w-100">
                                    <canvas id="linechart-1" style="height: 60px; width: 100%;" class="ml-n1"></canvas>
                                </div>
                            </div>

                        </div>




                        <div class="col-12 col-sm-6 col-md-3 px-2 mb-1 mb-md-0">

                            <div class="bcard d-flex flex-column text-center px-2 py-3 h-100">
                                <div class="text-secondary-d2 text-110 text-nowrap">
                                    Traffic Sources
                                </div>

                                <div class="m-auto pt-2 w-75">
                                    <canvas id="piechart-1"></canvas>
                                </div>
                            </div>

                        </div>
                    </div>





                    <div class="mt-3 mt-lg-4">
                        <div class="card bcard pt-1 pt-lg-2">
                            <div class="card-header brc-primary-l3">
                                <h5 class="card-title pl-1 text-120">
                                    Latest Members
                                </h5>

                                <div class="card-toolbar align-self-center no-border">
                                    <button type="button" class="btn border-2 btn-outline-default btn-sm">
                                        View All
                                    </button>
                                </div>

                                <div class="card-toolbar align-self-center">
                                    <a href="#" data-action="toggle" class="card-toolbar-btn text-grey text-110">
                                        <i class="fa fa-chevron-up"></i>
                                    </a>
                                </div>
                            </div>


                            <div class="card-body p-0 border-0">
                                <div class="table-responsive-md">
                                    <table class="table table-striped-primary table-borderless border-0 mb-0">
                                        <tbody>
                                            <tr></tr>
                                            <tr>
                                                <td class="text-secondary-d2 pl-2 pl-lg-4">
                                                    <img alt="Bob Doe's avatar" src="assets/image/avatar/avatar1.jpg" class="radius-round border-2 p-2px brc-default-m1 mr-2 w-5 h-5" />
                                                    Bob Doe
                                                </td>

                                                <td class="text-secondary text-85 font-bolder">
                                                    Moderator
                                                </td>

                                                <td class="text-grey-m1 text-85">
                                                    London
                                                </td>

                                                <td class="text-85">
                                                    <i class="fa fa-star text-orange-m2"></i>
                                                    <i class="fa fa-star text-orange-m2"></i>
                                                    <i class="fa fa-star text-orange-m2"></i>
                                                </td>

                                                <td class="font-bolder text-80 text-right pr-2 pr-lg-3">
                                                    <span class="badge bgc-green text-white-tp1">Approved</span>


                                                </td>

                                                <td class="px-2 px-lg-3 text-right" style="width:40px;">
                                                    <label>
                                                        <input type="checkbox" class="ace-switch" checked />
                                                    </label>


                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-secondary-d2 pl-2 pl-lg-4">
                                                    <img alt="Maria Doe's avatar" src="assets/image/avatar/avatar4.jpg" class="radius-round border-2 p-2px brc-default-m1 mr-2 w-5 h-5" />
                                                    Maria Doe
                                                </td>

                                                <td class="text-secondary text-85 font-bolder">
                                                    Customer
                                                </td>

                                                <td class="text-grey-m1 text-85">
                                                    Dubai
                                                </td>

                                                <td class="text-85">
                                                    <i class="fa fa-star text-orange-m2"></i>
                                                    <i class="fa fa-star text-orange-m2"></i>
                                                    <i class="fa fa-star text-orange-m2"></i>
                                                </td>

                                                <td class="font-bolder text-80 text-right pr-2 pr-lg-3">
                                                    <span class="badge bgc-green text-white-tp1">Approved</span>


                                                </td>

                                                <td class="px-2 px-lg-3 text-right" style="width:40px;">
                                                    <label>
                                                        <input type="checkbox" class="ace-switch" checked />
                                                    </label>


                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-secondary-d2 pl-2 pl-lg-4">
                                                    <span class="d-inline-block text-center mr-2 pt-2 w-5 h-5 radius-round bgc-primary-l2 text-primary font-bolder text-90">
                                                        <span>JS</span>
                                                    </span>
                                                    John Smith
                                                </td>

                                                <td class="text-secondary text-85 font-bolder">
                                                    Customer
                                                </td>

                                                <td class="text-grey-m1 text-85">
                                                    Istanbul
                                                </td>

                                                <td class="text-85">
                                                    <i class="fa fa-star text-orange-m2"></i>
                                                    <i class="fa fa-star text-orange-m2"></i>
                                                    <i class="fa fa-star text-orange-m2"></i>
                                                </td>

                                                <td class="font-bolder text-80 text-right pr-2 pr-lg-3">

                                                    <span class="badge bgc-default text-white-tp1">Pending</span>

                                                </td>

                                                <td class="px-2 px-lg-3 text-right" style="width:40px;">

                                                    <label>
                                                        <input type="checkbox" class="ace-switch" />
                                                    </label>

                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-secondary-d2 pl-2 pl-lg-4">
                                                    <img alt="Jim Doe's avatar" src="assets/image/avatar/avatar6.jpg" class="radius-round border-2 p-2px brc-default-m1 mr-2 w-5 h-5" />
                                                    Jim Doe
                                                </td>

                                                <td class="text-secondary text-85 font-bolder">
                                                    Tester
                                                </td>

                                                <td class="text-grey-m1 text-85">
                                                    Unknown
                                                </td>

                                                <td class="text-85">
                                                    <i class="fa fa-star text-orange-m2"></i>
                                                    <i class="fa fa-star text-orange-m2"></i>
                                                    <i class="fa fa-star text-orange-m2"></i>
                                                </td>

                                                <td class="font-bolder text-80 text-right pr-2 pr-lg-3">


                                                    <span class="badge bgc-red text-white-tp1">Banned</span>
                                                </td>

                                                <td class="px-2 px-lg-3 text-right" style="width:40px;">


                                                    <a href="#" class="action-btn text-danger-m1 mr-1"><i class="fa fa-trash-alt text-125"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-secondary-d2 pl-2 pl-lg-4">
                                                    <img alt="Alex's avatar" src="assets/image/avatar/avatar2.png" class="radius-round border-2 p-2px brc-default-m1 mr-2 w-5 h-5" />
                                                    Alex
                                                </td>

                                                <td class="text-secondary text-85 font-bolder">
                                                    Moderator
                                                </td>

                                                <td class="text-grey-m1 text-85">
                                                    Santiago
                                                </td>

                                                <td class="text-85">
                                                    <i class="fa fa-star text-orange-m2"></i>
                                                    <i class="fa fa-star text-orange-m2"></i>
                                                    <i class="fa fa-star text-orange-m2"></i>
                                                </td>

                                                <td class="font-bolder text-80 text-right pr-2 pr-lg-3">

                                                    <span class="badge bgc-default text-white-tp1">Pending</span>

                                                </td>

                                                <td class="px-2 px-lg-3 text-right" style="width:40px;">

                                                    <label>
                                                        <input type="checkbox" class="ace-switch" />
                                                    </label>

                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-secondary-d2 pl-2 pl-lg-4">
                                                    <img alt="Susan's avatar" src="assets/image/avatar/avatar5.jpg" class="radius-round border-2 p-2px brc-default-m1 mr-2 w-5 h-5" />
                                                    Susan
                                                </td>

                                                <td class="text-secondary text-85 font-bolder">
                                                    Customer
                                                </td>

                                                <td class="text-grey-m1 text-85">
                                                    Los Angeles
                                                </td>

                                                <td class="text-85">
                                                    <i class="fa fa-star text-orange-m2"></i>
                                                    <i class="fa fa-star text-orange-m2"></i>
                                                    <i class="fa fa-star text-orange-m2"></i>
                                                </td>

                                                <td class="font-bolder text-80 text-right pr-2 pr-lg-3">
                                                    <span class="badge bgc-green text-white-tp1">Approved</span>


                                                </td>

                                                <td class="px-2 px-lg-3 text-right" style="width:40px;">
                                                    <label>
                                                        <input type="checkbox" class="ace-switch" checked />
                                                    </label>


                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div><!-- /.table-responsive-md -->

                            </div><!-- /.card-body -->
                        </div><!-- /.card -->
                    </div>





                    <div class="row mt-2 mt-lg-4 pt-2">
                        <div class="col-12 col-lg-8">
                            <div class="card bcard h-100">
                                <div class="border-t-3 w-100 brc-info-m1 radius-t-1"></div><!-- the colored line on top of stats -->

                                <div class="card-header">
                                    <h5 class="card-title text-grey-d1 pl-1">
                                        More Stats
                                    </h5>
                                </div>

                                <div class="card-body h-98 d-flex flex-column justify-content-center py-2 py-md-3 px-0 px-md-4">
                                    <canvas id="saleschart" class="mx-n1 mx-md-0"></canvas>
                                </div>
                            </div>
                        </div>


                        <div class="col-12 col-lg-4 mt-3 mt-lg-0">
                            <div class="card bcard h-100">
                                <div class="border-t-3 w-100 brc-success-m1 radius-t-1"></div>

                                <div class="card-header border-0">
                                    <h5 class="card-title text-grey-d1 pl-1">
                                        Activity Feed
                                        <span class="badge btn-light-success text-success float-right font-bolder">
                                            +3
                                        </span>
                                    </h5>
                                </div>

                                <div class="card-body p-3 d-flex flex-column h-100">
                                    <div class="flex-grow-1">

                                        <div class="mb-2 text-grey-m1 text-95">
                                            <div class="d-flex align-items-start">
                                                <span class="d-inline-block w-5 h-5 text-center pt-2 radius-round mr-2px bgc-primary-l3 text-primary-d1 font-bolder text-90">
                                                    <span>
                                                        SD
                                                    </span>
                                                </span>

                                                <div class="mx-2 text-grey-d1">
                                                    <div class="text-600 text-blue-d1">
                                                        Susan Dalek
                                                    </div>
                                                    Uploaded a new photo
                                                </div>

                                                <span class="text-90 text-secondary-m1 ml-auto text-nowrap">
                                                    3 min ago
                                                </span>
                                            </div>
                                        </div>

                                        <hr class="brc-grey-l3" />
                                        <div class="mb-2 text-grey-m1 text-95">
                                            <div class="d-flex align-items-start">
                                                <img alt="River Song's avatar" src="assets/image/avatar/avatar3.png" class="border-2 brc-success-m2 radius-round p-1px w-5 h-5 mr-2px" />

                                                <div class="mx-2 text-grey-d1">
                                                    <div class="text-600 text-blue-d1">
                                                        River Song
                                                    </div>
                                                    Reviewed a product
                                                </div>

                                                <span class="text-90 text-secondary-m1 ml-auto text-nowrap">
                                                    4 min ago
                                                </span>
                                            </div>
                                        </div>

                                        <hr class="brc-grey-l3" />
                                        <div class="mb-2 text-grey-m1 text-95">
                                            <div class="d-flex align-items-start">
                                                <img alt="Jack Alien's avatar" src="assets/image/avatar/avatar4.png" class="border-2 brc-success-m2 radius-round p-1px w-5 h-5 mr-2px" />

                                                <div class="mx-2 text-grey-d1">
                                                    <div class="text-600 text-blue-d1">
                                                        Jack Alien
                                                    </div>
                                                    Won a trophy
                                                </div>

                                                <span class="text-90 text-secondary-m1 ml-auto text-nowrap">
                                                    20 min ago
                                                </span>
                                            </div>
                                        </div>

                                        <hr class="brc-grey-l3" />
                                        <div class="mb-2 text-grey-m1 text-95">
                                            <div class="d-flex align-items-start">
                                                <img alt="Robin Hood's avatar" src="assets/image/avatar/avatar5.png" class="border-2 brc-success-m2 radius-round p-1px w-5 h-5 mr-2px" />

                                                <div class="mx-2 text-grey-d1">
                                                    <div class="text-600 text-blue-d1">
                                                        Robin Hood
                                                    </div>
                                                    Upgraded his membership plan
                                                </div>

                                                <span class="text-90 text-secondary-m1 ml-auto text-nowrap">
                                                    1 hour ago
                                                </span>
                                            </div>
                                        </div>



                                    </div>

                                    <div class="mt-2 px-4 border-t-1 brc-default-l3 pt-3">
                                        <button type="button" class="btn btn-block btn-sm border-2 btn-lighter-default btn-h-light-primary btn-a-light-primary">
                                            View All
                                        </button>
                                    </div>
                                </div><!-- /.card-body -->
                            </div><!-- /.card -->
                        </div>
                    </div>
                </div>

                <footer class="footer">
                    <div class="footer-inner">
                        <div class="h-100 pt-3 border-t-1 brc-secondary-l3 bgc-white">
                            <span class="text-primary-m2 font-bolder text-120">Ace</span>
                            <span class="text-muted">Application &copy; 2020</span>

                            <span class="mx-3 action-buttons">
                                <a href="#" class="text-blue-m3 text-140"><i class="fab fa-twitter-square"></i></a>
                                <a href="#" class="text-blue-d1 text-140"><i class="fab fa-facebook"></i></a>
                                <a href="#" class="text-orange text-140"><i class="fa fa-rss-square"></i></a>
                            </span>
                        </div>
                    </div><!-- .footer-inner -->
                </footer>

                <div class="footer-tools">
                    <a href="#" class="btn-scroll-up btn btn-white brc-black-tp7 px-25 py-2 text-95 border-2 radius-round mb-2 mr-2">
                        <i class="fa fa-angle-double-up w-2 h-2"></i>
                    </a>
                </div>
            </div>

            <div id="id-ace-settings-modal" class="my-1 my-lg-2 modal modal-nb ace-aside aside-right aside-offset aside-below-nav" data-backdrop="false" tabindex="-1" role="dialog" aria-hidden="true">

                <div class="modal-dialog" role="document">
                    <div class="modal-content w-auto flex-grow-1 pb-1px radius-0 radius-l-2 border-y-2 border-l-1 brc-default-m3 bgc-white-tp1 shadow">

                        <div class="modal-header p-0 radius-0 mx-3">
                            <h4 class="modal-title text-primary-d1 text-140 pt-2 pl-1">Demo Settings</h4>

                            <button type="button" class="close m-0 mr-n2" data-dismiss="modal" aria-label="Close">
                                <i class="fa fa-times text-70" aria-hidden="true"></i>
                            </button>
                        </div>

                        <div class="modal-body mx-md-2" data-ace-scroll='{"smooth": true, "lock": true}'>
                            <form autocomplete="off">
                                <div class="d-flex flex-column flex-md-row justify-content-md-between align-items-md-center">
                                    <h5 class="text-default-d2">
                                        Zoom
                                    </h5>

                                    <div class="btn-group btn-group-toggle align-self-end" data-toggle="buttons">
                                        <label class="btn btn-sm btn-lighter-grey btn-h-light-primary btn-a-primary">
                                            90%
                                            <input type="radio" name="zoom-level" value="90" />
                                        </label>

                                        <label class="btn btn-sm btn-lighter-grey btn-h-light-primary btn-a-primary active">
                                            100%
                                            <input type="radio" name="zoom-level" value="none" checked />
                                        </label>

                                        <label class="btn btn-sm btn-lighter-grey btn-h-light-primary btn-a-primary">
                                            110%
                                            <input type="radio" name="zoom-level" value="110" />
                                        </label>

                                        <label class="btn btn-sm btn-lighter-grey btn-h-light-primary btn-a-primary">
                                            120%
                                            <input type="radio" name="zoom-level" value="120" />
                                        </label>
                                    </div>
                                </div>


                                <hr class="border-double my-md-3" />


                                <h5 class="text-purple-d1">
                                    Themes
                                </h5>

                                <div id="auto-match-div" class="bgc-secondary-l4 py-1 radius-1 mb-3 border-1 radius-1 border-l-3 brc-secondary-m4">
                                    <label class="mt-1 pr-2 d-flex align-items-center" for="id-auto-match">
                                        <input type="checkbox" class="input-lg mx-15" id="id-auto-match" checked />

                                        <span class="pl-0 text-secondary-d1 text-90 font-bolder">
                                            Match sidebar & navbar themes
                                        </span>
                                    </label>
                                </div>


                                <div class="d-flex flex-column flex-md-row justify-content-md-between align-items-md-center mt-3">
                                    <h6 class="text-95 pl-1 text-grey-d1">Sidebar</h6>

                                    <div class="btn-group btn-group-toggle align-self-end flex-wrap px-0  col-10 col-sm-7" data-toggle="buttons">
                                        <label class="btn btn-sm btn-light-default btn-text-default btn-bgc-white btn-a-default btn-h-default">
                                            Dark
                                            <input type="radio" name="sidebar-theme" value="dark" />
                                        </label>

                                        <label class="btn btn-sm btn-light-default btn-text-default btn-bgc-white btn-a-default btn-h-default">
                                            Light
                                            <input type="radio" name="sidebar-theme" value="light" />
                                        </label>
                                    </div>
                                </div>



                                <div>
                                    <div class="d-none bgc-secondary-l1 radius-1 px-1 mb-3 mt-1 text-center" id="id-sidebar-themes-dark">
                                        <div class="btn-group btn-group-toggle align-self-end flex-wrap justify-content-center w-75 mx-auto align-items-center my-2 flex-equal-sm" data-toggle="buttons">
                                            <label class="btn btn-xs sidebar-color border-0 sidebar-dark d-style active m-1px">
                                                <i class="fa fa-check text-white v-active"></i>
                                                <input type="radio" name="sidebar-dark" value="dark" checked />
                                            </label>

                                            <label class="btn btn-xs sidebar-color border-0 sidebar-dark2 d-style m-1px">
                                                <i class="fa fa-check text-white v-active"></i>
                                                <input type="radio" name="sidebar-dark" value="dark2" />
                                            </label>

                                            <label class="btn btn-xs sidebar-color border-0 sidebar-darkblue d-style m-1px">
                                                <i class="fa fa-check text-white v-active"></i>
                                                <input type="radio" name="sidebar-dark" value="darkblue" />
                                            </label>

                                            <label class="btn btn-xs sidebar-color border-0 sidebar-darkslategrey d-style m-1px">
                                                <i class="fa fa-check text-white v-active"></i>
                                                <input type="radio" name="sidebar-dark" value="darkslategrey" />
                                            </label>

                                            <label class="btn btn-xs sidebar-color border-0 sidebar-cadetblue d-style m-1px">
                                                <i class="fa fa-check text-white v-active"></i>
                                                <input type="radio" name="sidebar-dark" value="cadetblue" />
                                            </label>

                                            <label class="btn btn-xs sidebar-color border-0 sidebar-plum d-style my-1px m-1px">
                                                <i class="fa fa-check text-white v-active"></i>
                                                <input type="radio" name="sidebar-dark" value="plum" />
                                            </label>

                                            <label class="btn btn-xs sidebar-color border-0 sidebar-darkslateblue d-style m-1px">
                                                <i class="fa fa-check text-white v-active"></i>
                                                <input type="radio" name="sidebar-dark" value="darkslateblue" />
                                            </label>

                                            <label class="btn btn-xs sidebar-color border-0 sidebar-purple d-style m-1px">
                                                <i class="fa fa-check text-white v-active"></i>
                                                <input type="radio" name="sidebar-dark" value="purple" />
                                            </label>

                                            <label class="btn btn-xs sidebar-color border-0 sidebar-steelblue d-style m-1px">
                                                <i class="fa fa-check text-white v-active"></i>
                                                <input type="radio" name="sidebar-dark" value="steelblue" />
                                            </label>

                                            <label class="btn btn-xs sidebar-color border-0 sidebar-blue d-style m-1px">
                                                <i class="fa fa-check text-white v-active"></i>
                                                <input type="radio" name="sidebar-dark" value="blue" />
                                            </label>

                                            <label class="btn btn-xs sidebar-color border-0 sidebar-teal d-style m-1px d-none">
                                                <i class="fa fa-check text-white v-active"></i>
                                                <input type="radio" name="sidebar-dark" value="teal" />
                                            </label>

                                            <label class="btn btn-xs sidebar-color border-0 sidebar-green d-style m-1px">
                                                <i class="fa fa-check text-white v-active"></i>
                                                <input type="radio" name="sidebar-dark" value="green" />
                                            </label>

                                            <label class="btn btn-xs sidebar-color border-0 sidebar-darkcrimson d-style m-1px">
                                                <i class="fa fa-check text-white v-active"></i>
                                                <input type="radio" name="sidebar-dark" value="darkcrimson" />
                                            </label>

                                            <label class="btn btn-xs sidebar-color border-0 sidebar-gradient1 d-style m-1px">
                                                <i class="fa fa-check text-white v-active"></i>
                                                <input type="radio" name="sidebar-dark" value="gradient1" />
                                            </label>

                                            <label class="btn btn-xs sidebar-color border-0 sidebar-gradient2 d-style m-1px">
                                                <i class="fa fa-check text-white v-active"></i>
                                                <input type="radio" name="sidebar-dark" value="gradient2" />
                                            </label>

                                            <label class="btn btn-xs sidebar-color border-0 sidebar-gradient3 d-style m-1px">
                                                <i class="fa fa-check text-white v-active"></i>
                                                <input type="radio" name="sidebar-dark" value="gradient3" />
                                            </label>

                                            <label class="btn btn-xs sidebar-color border-0 sidebar-gradient4 d-style m-1px">
                                                <i class="fa fa-check text-white v-active"></i>
                                                <input type="radio" name="sidebar-dark" value="gradient4" />
                                            </label>

                                            <!--
                      <label class="btn btn-xs sidebar-color border-0 sidebar-gradient5 d-style m-1px d-none">
                        <i class="fa fa-check text-white v-active"></i>
                        <input type="radio" name="sidebar-dark" value="gradient5"  />
                      </label>
                      -->

                                        </div>
                                    </div><!-- #id-sidebar-themes-dark -->


                                    <div class="d-none" id="id-sidebar-themes-light">
                                        <div class="bgc-secondary-tp2 radius-1 py-1 px-1 mb-3 mt-1 text-center">
                                            <div class="d-flex btn-group btn-group-toggle align-self-end flex-wrap justify-content-center mx-auto align-items-center my-2 flex-equal-sm" data-toggle="buttons">

                                                <label class="active btn btn-xs border-0 sidebar-white2 d-style m-1px">
                                                    <i class="fa fa-check text-muted v-active"></i>
                                                    <input type="radio" name="sidebar-light" value="white" checked />
                                                </label>

                                                <label class="btn btn-xs border-0 sidebar-white2 d-style m-1px d-none">
                                                    <i class="fa fa-check text-muted v-active"></i>
                                                    <input type="radio" name="sidebar-light" value="white2" />
                                                </label>

                                                <label class="btn btn-xs border-0 sidebar-white3 d-style m-1px">
                                                    <i class="fa fa-check text-muted v-active"></i>
                                                    <input type="radio" name="sidebar-light" value="white3" />
                                                </label>

                                                <label class="btn btn-xs border-0 sidebar-white4 d-style m-1px">
                                                    <i class="fa fa-check text-muted v-active"></i>
                                                    <input type="radio" name="sidebar-light" value="white4" />
                                                </label>

                                                <label class="btn btn-xs border-0 sidebar-light d-style m-1px">
                                                    <i class="fa fa-check text-muted v-active"></i>
                                                    <input type="radio" name="sidebar-light" value="light" />
                                                </label>

                                                <label class="btn btn-xs border-0 sidebar-lightblue d-style m-1px">
                                                    <i class="fa fa-check text-muted v-active"></i>
                                                    <input type="radio" name="sidebar-light" value="lightblue" />
                                                </label>

                                                <label class="btn btn-xs border-0 sidebar-lightblue2 d-style m-1px">
                                                    <i class="fa fa-check text-muted v-active"></i>
                                                    <input type="radio" name="sidebar-light" value="lightblue2" />
                                                </label>

                                                <label class="btn btn-xs border-0 sidebar-lightpurple d-style m-1px">
                                                    <i class="fa fa-check text-muted v-active"></i>
                                                    <input type="radio" name="sidebar-light" value="lightpurple" />
                                                </label>


                                            </div>
                                        </div>
                                    </div><!-- #id-sidebar-themes-light -->

                                </div>

                                <hr class="border-dotted" />

                                <div class="d-flex flex-column flex-md-row justify-content-md-between align-items-md-center">
                                    <h6 class="text-95 pl-1 text-grey-d1">Navbar</h6>

                                    <div id="navbar-themes-show" class="btn-group btn-group-toggle align-self-end flex-wrap px-0 col-10 col-sm-7" data-toggle="buttons">
                                        <label class="btn btn-sm btn-light-green btn-text-green btn-bgc-white btn-a-green btn-h-green">
                                            Light
                                            <input type="radio" name="navbar-theme" value="light" />
                                        </label>

                                        <label class="btn btn-sm btn-light-green btn-text-green btn-bgc-white btn-a-green btn-h-green">
                                            Dark
                                            <input type="radio" name="navbar-theme" value="dark" />
                                        </label>
                                    </div>

                                    <div id="navbar-themes-show-msg" class="d-none text-95 px-3 py-15 bgc-secondary-l3 border-1 brc-secondary-m4 border-dotted ml-3 radius-1">
                                        Navbar themes can be viewed in<br /> <span>Dashboard <a class="btn-h-dark no-underline px-2px" href="html/dashboard.html">1</a> & <a class="btn-h-dark no-underline px-2px" href="html/dashboard-4.html">4</a></span>
                                    </div>

                                </div>

                                <div>
                                    <div class="d-none bgc-secondary-l1 radius-1 px-1 mb-3 mt-1 text-center" id="id-navbar-themes-dark">
                                        <div class="btn-group btn-group-toggle align-self-end flex-wrap justify-content-center w-75 mx-auto align-items-center my-2 flex-equal-sm" data-toggle="buttons">

                                            <label class="btn btn-xs border-0 navbar-blue d-style active m-1px">
                                                <i class="fa fa-check text-white v-active"></i>
                                                <input type="radio" name="navbar-dark" value="blue" checked />
                                            </label>

                                            <label class="btn btn-xs border-0 navbar-darkblue d-style m-1px">
                                                <i class="fa fa-check text-white v-active"></i>
                                                <input type="radio" name="navbar-dark" value="darkblue" />
                                            </label>

                                            <label class="btn btn-xs border-0 navbar-teal d-style m-1px">
                                                <i class="fa fa-check text-white v-active"></i>
                                                <input type="radio" name="navbar-dark" value="teal" />
                                            </label>

                                            <label class="btn btn-xs border-0 navbar-green d-style m-1px">
                                                <i class="fa fa-check text-white v-active"></i>
                                                <input type="radio" name="navbar-dark" value="green" />
                                            </label>

                                            <label class="btn btn-xs border-0 navbar-cadetblue d-style m-1px">
                                                <i class="fa fa-check text-white v-active"></i>
                                                <input type="radio" name="navbar-dark" value="cadetblue" />
                                            </label>



                                            <label class="btn btn-xs border-0 navbar-plum d-style m-1px">
                                                <i class="fa fa-check text-white v-active"></i>
                                                <input type="radio" name="navbar-dark" value="plum" />
                                            </label>

                                            <label class="btn btn-xs border-0 navbar-purple d-style m-1px">
                                                <i class="fa fa-check text-white v-active"></i>
                                                <input type="radio" name="navbar-dark" value="purple" />
                                            </label>

                                            <label class="btn btn-xs border-0 navbar-orange d-style m-1px">
                                                <i class="fa fa-check text-white v-active"></i>
                                                <input type="radio" name="navbar-dark" value="orange" />
                                            </label>


                                            <label class="btn btn-xs border-0 navbar-brown d-style m-1px">
                                                <i class="fa fa-check text-white v-active"></i>
                                                <input type="radio" name="navbar-dark" value="brown" />
                                            </label>

                                            <label class="btn btn-xs border-0 navbar-darkgreen d-style m-1px">
                                                <i class="fa fa-check text-white v-active"></i>
                                                <input type="radio" name="navbar-dark" value="darkgreen" />
                                            </label>

                                            <label class="btn btn-xs border-0 navbar-skyblue d-style m-1px">
                                                <i class="fa fa-check text-white v-active"></i>
                                                <input type="radio" name="navbar-dark" value="skyblue" />
                                            </label>

                                            <label class="btn btn-xs border-0 navbar-secondary d-style m-1px">
                                                <i class="fa fa-check text-white v-active"></i>
                                                <input type="radio" name="navbar-dark" value="secondary" />
                                            </label>

                                        </div>
                                    </div><!-- #id-navbar-themes-dark -->

                                    <div class="d-none" id="id-navbar-themes-light">
                                        <div class="bgc-secondary-tp2 radius-1 py-1 px-1 mb-3 mt-1 text-center">
                                            <div class="btn-group btn-group-toggle align-self-end flex-wrap justify-content-center w-75 mx-auto align-items-center my-2 flex-equal-sm" data-toggle="buttons">

                                                <label class="active btn btn-xs border-0 navbar-white d-style m-1px">
                                                    <i class="fa fa-check text-muted v-active"></i>
                                                    <input type="radio" name="navbar-light" value="white" checked />
                                                </label>

                                                <label class="btn btn-xs border-0 navbar-white2 d-style m-1px">
                                                    <i class="fa fa-check text-muted v-active"></i>
                                                    <input type="radio" name="navbar-light" value="white2" />
                                                </label>

                                                <label class="btn btn-xs border-0 navbar-lightblue d-style m-1px">
                                                    <i class="fa fa-check text-muted v-active"></i>
                                                    <input type="radio" name="navbar-light" value="lightblue" />
                                                </label>

                                                <label class="btn btn-xs border-0 navbar-lightpurple d-style m-1px">
                                                    <i class="fa fa-check text-muted v-active"></i>
                                                    <input type="radio" name="navbar-light" value="lightpurple" />
                                                </label>

                                                <label class="btn btn-xs border-0 navbar-lightgreen d-style m-1px">
                                                    <i class="fa fa-check text-muted v-active"></i>
                                                    <input type="radio" name="navbar-light" value="lightgreen" />
                                                </label>

                                                <label class="btn btn-xs border-0 navbar-lightgrey d-style m-1px">
                                                    <i class="fa fa-check text-muted v-active"></i>
                                                    <input type="radio" name="navbar-light" value="lightgrey" />
                                                </label>

                                                <!--
                        <label class="btn btn-xs border-0 navbar-lightyellow d-style m-1px">
                          <i class="fa fa-check text-muted v-active"></i>
                          <input type="radio" name="navbar-light" value="lightyellow"  />
                        </label>
        
                        <label class="btn btn-xs border-0 navbar-khaki d-style m-1px">
                          <i class="fa fa-check text-muted v-active"></i>
                          <input type="radio" name="navbar-light" value="khaki"  />
                        </label>
                        -->

                                            </div>
                                        </div>

                                    </div><!-- #id-navbar-themes-light -->

                                </div>


                                <hr class="border-dotted" />


                                <div class="text-95">
                                    <h5 class="text-success">Layout</h5>

                                    <div class="mt-3 d-flex justify-content-between align-items-center">
                                        <label for="id-navbar-fixed" class="pl-1 text-grey-d1">Fixed Navbar</label>
                                        <input type="checkbox" class="ace-switch" id="id-navbar-fixed" checked />
                                    </div>

                                    <div class="mt-2 d-flex justify-content-between align-items-center">
                                        <label for="id-sidebar-fixed" class="pl-1 text-grey-d1">Fixed Sidebar</label>
                                        <input type="checkbox" class="ace-switch" id="id-sidebar-fixed" checked />
                                    </div>

                                    <div class="mt-2 d-flex justify-content-between align-items-center">
                                        <label for="id-footer-fixed" class="pl-1 text-grey-d1">Fixed Footer</label>
                                        <input type="checkbox" class="ace-switch" id="id-footer-fixed" />
                                    </div>

                                    <div class="mt-2 d-none d-xl-flex flex-column flex-md-row justify-content-md-between align-items-md-center">
                                        <div class="pl-1 text-grey-d1">Boxed Layout</div>

                                        <div class="w-50 btn-group btn-group-toggle flex-row flex-wrap fl1ex-md-nowrap" data-toggle="buttons">
                                            <label class="btn btn-sm btn-light-primary btn-bgc-white btn-text-primary btn-h-primary btn-a-primary">
                                                None
                                                <input type="radio" name="boxed-layout" value="none" />
                                            </label>

                                            <label class="btn btn-sm btn-light-primary btn-bgc-white btn-text-primary btn-h-primary btn-a-primary">
                                                All
                                                <input type="radio" name="boxed-layout" value="all" />
                                            </label>

                                            <label class="btn btn-sm btn-light-primary btn-bgc-white btn-text-primary btn-h-primary btn-a-primary">
                                                Not Navbar
                                                <input type="radio" name="boxed-layout" value="not-navbar" />
                                            </label>

                                            <label class="btn btn-sm btn-light-primary btn-bgc-white btn-text-primary btn-h-primary btn-a-primary active">
                                                Only Content
                                                <input type="radio" name="boxed-layout" value="only-content" checked />
                                            </label>
                                        </div>
                                    </div>

                                    <div id="id-body-bg" class="collapse">
                                        <div class="mt-3 d-none d-xl-flex flex-column flex-md-row justify-content-md-between align-items-md-center">
                                            <h6 class="text-95 pl-1 text-grey-d1">Body Background:</h6>

                                            <div class="btn-group btn-group-toggle align-self-end" data-toggle="buttons">
                                                <label class="btn btn-sm btn-outline-purple active  mb-1">
                                                    None
                                                    <input type="radio" name="body-theme" value="auto" checked />
                                                </label>

                                                <label class="btn btn-sm btn-outline-purple mb-1">
                                                    Image 1
                                                    <input type="radio" name="body-theme" value="img1" />
                                                </label>

                                                <label class="btn btn-sm btn-outline-purple mb-1">
                                                    Image 2
                                                    <input type="radio" name="body-theme" value="img2" />
                                                </label>
                                            </div>
                                        </div>
                                    </div>



                                    <hr class="border-dotted my-2" />

                                    <div class="mt-1 d-flex justify-content-between align-items-center">
                                        <label for="id-rtl" class="pl-1 text-grey-d1">RTL (right to left)</label>

                                        <input type="checkbox" class="ace-switch" id="id-rtl" />
                                    </div>


                                </div>

                                <hr class="border-double my-md-4" />

                                <div class="d-flex flex-column flex-md-row justify-content-md-between align-items-md-center">
                                    <h5 class="text-info">Font</h5>

                                    <div class="align-self-end w-75">
                                        <select id="id-change-font" class="ace-select radius-round w-100 text-grey brc-h-info-m2">
                                            <option value="lato">Lato</option>
                                            <option value="manrope">Manrope</option>
                                            <option value="montserrat">Montserrat</option>
                                            <option value="noto-sans">Noto Sans</option>
                                            <option value="open-sans" selected>Open Sans</option>
                                            <option value="poppins">Poppins</option>
                                            <option value="raleway">Raleway</option>
                                            <option value="roboto" class="text-primary-d2 text-600">Roboto (popular)</option>
                                            <option value="">----</option>
                                            <option value="markazi">Markazi (for RTL languages)</option>
                                        </select>
                                    </div>
                                </div>


                                <hr class="border-double my-md-4" />

                                <div class="text-95">
                                    <h5 class="text-orange-d2 ml-n2px">Sidebar</h5>
                                    <!--
                  <div class="mt-3 d-none d-xl-flex justify-content-between align-items-center">
                      <label for="id-sidebar-compact" class="pl-1 text-grey-d2">Compact</label>
        
                      <div class="custom-control custom-switch d-inline-block">
                        <input type="checkbox" class="custom-control-input" id="id-sidebar-compact"  />
                        <label class="custom-control-label" for="id-sidebar-compact"></label>
                      </div>
                  </div>
                  -->

                                    <div class="mt-2 d-none d-xl-flex justify-content-between align-items-center">
                                        <div class="pl-1 text-grey-d1">Collapsed Mode</div>

                                        <div class="btn-group btn-group-toggle flex-row" data-toggle="buttons">
                                            <label class="btn btn-sm btn-outline-red active">
                                                Expand
                                                <input type="radio" name="sidebar-collapsed" value="expandable" checked />
                                            </label>

                                            <label class="btn btn-sm btn-outline-red">
                                                Popup
                                                <input type="radio" name="sidebar-collapsed" value="hoverable" />
                                            </label>

                                            <label class="btn btn-sm btn-outline-red">
                                                Hide
                                                <input type="radio" name="sidebar-collapsed" value="hideable" />
                                            </label>
                                        </div>
                                    </div>

                                    <div class="mt-3 d-none d-xl-flex justify-content-between align-items-center">
                                        <label for="id-sidebar-hover" class="pl-1 text-grey-d1">Submenu on Hover</label>

                                        <label>
                                            <input type="checkbox" class="ace-switch" id="id-sidebar-hover" />
                                        </label>
                                    </div>

                                    <div class="mt-2 d-flex d-xl-none justify-content-between align-items-center">
                                        <label for="id-push-content" class="pl-1 text-grey-d1">Push Content</label>

                                        <label>
                                            <input type="checkbox" class="ace-switch" id="id-push-content" />
                                        </label>
                                    </div>

                                </div>

                                <div class="my-1"></div>
                            </form>
                        </div>

                        <div class="modal-footer d-none justify-content-center">
                            <button type="button" class="btn btn-default" data-dismiss="modal">
                                <i class="fa fa-times mr-1"></i>
                                Close
                            </button>
                            <button type="button" class="btn btn-info">
                                <i class="fa fa-check mr-1"></i>
                                Keep changes
                            </button>
                        </div>

                    </div><!-- .modal-content -->

                    <div class="aside-header align-self-start mt-1 mt-lg-5 text-right d-style">
                        <button type="button" class="btn btn-orange btn-lg shadow-sm pl-2 radius-l-2 f-n-hover py-1 py-md-2" data-toggle="modal" data-target="#id-ace-settings-modal">
                            <i class="fa fa-cog text-110 ml-1"></i>
                        </button>
                    </div>
                </div><!-- .modal-dialog -->
            </div><!-- .modal-aside -->
        </div>
    </div>

    <!-- include common vendor scripts used in demo pages -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"></script>



    <!-- include vendor scripts used in "Dashboard 3" page. see "/views//pages/partials/dashboard-3/@vendor-scripts.hbs" -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"></script>



    <!-- include ace.js -->
    <script src="./dist/js/ace.min.js"></script>



    <!-- demo.js is only for Ace's demo and you shouldn't use it -->
    <script src="./app/browser/demo.min.js"></script>



    <!-- "Dashboard 3" page script to enable its demo functionality -->
    <script>
        jQuery(function($) {

            window.currentLayout = 2

            $('#navbar-themes-show-msg').removeClass('d-none')
            $('#navbar-themes-show, #auto-match-div').addClass('d-none')
            $('#id-auto-match').prop('checked', false)
            $('input[value="not-navbar"]').parent().addClass('d-none')



            // Enable tooltips
            $('.page-tools .btn').tooltip({
                container: 'body',
                template: '<div class="tooltip" role="tooltip"><div class="arrow brc-secondary-d2"></div><div class="tooltip-inner text-600 text-110 pb-2 bgc-secondary-d2"></div></div>',
                trigger: 'hover',
                placement: 'top'
            })

            //////////////////////////////////////////////

            var _animate = !AceApp.Util.isReducedMotion()


            // The small pageview chart inside infoboxes
            new Chart(document.getElementById("linechart-1"), {
                type: 'bar',
                data: {
                    labels: ["Jan", "Feb", "Mar", "Apr", "May", "June", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                    datasets: [{
                        type: 'line',
                        label: '',

                        data: [107, 122, 136, 112, 139, 120, 134, 128, 108, 122, 119, 125],

                        spanGaps: true,

                        lineTension: 0,
                        backgroundColor: 'transparent',
                        borderColor: 'rgba(93, 170, 201, 0.75)',
                        borderWidth: 2,

                        fill: true,
                        backgroundColor: 'rgba(89, 182, 218, 0.25)',

                        pointRadius: 5,
                        pointBorderColor: 'transparent',
                        pointBackgroundColor: 'transparent',
                        pointBorderWidth: 5,

                        pointHoverBackgroundColor: 'rgb(93, 170, 201)',
                        pointHoverBorderColor: 'rgb(93, 170, 201)'
                    }]
                },
                options: {
                    responsive: true,
                    animation: {
                        duration: _animate ? 1000 : false
                    },
                    legend: {
                        display: false
                    },
                    scales: {
                        yAxes: [{
                            ticks: {
                                display: false,
                                min: 80, // minimum value
                                max: 200 // maximum value
                            },
                            gridLines: {
                                display: false,
                                drawBorder: false
                            }
                        }],

                        xAxes: [{
                            barThickness: 4,
                            gridLines: {
                                display: false,
                                drawBorder: false
                            },
                            ticks: {
                                display: false //this will remove only the label
                            }
                        }, ]
                    },

                    tooltips: {
                        // Disable the on-canvas tooltip, because canvas area is small and tooltips will be cut (clipped)
                        enabled: false,

                        //use bootstrap tooltip instead
                        custom: function(tooltipModel) {
                            var title = '';
                            var canvas = this._chart.canvas;

                            if (tooltipModel.body) {
                                title = tooltipModel.title[0] + ': ' + Number(tooltipModel.body[0].lines[0]).toLocaleString();
                            }
                            canvas.setAttribute('data-original-title', title); //will be used by bootstrap tooltip

                            $(canvas)
                                .tooltip({
                                    placement: 'bottom',
                                    template: '<div class="tooltip" role="tooltip"><div class="bgc-info-d2 tooltip-inner font-bolder text-110"></div></div>'
                                })
                                .tooltip('show')
                                .on('hidden.bs.tooltip', function() {
                                    canvas.setAttribute('data-original-title', ''); //so that when mouse is back over canvas's blank area, no tooltip is shown
                                });

                        }
                    } //tooltips
                }
            })



            // small pie chart
            new Chart(document.getElementById('piechart-1'), {
                type: 'doughnut',
                data: {
                    datasets: [{
                        label: 'Traffic Sources',
                        data: [38.7, 24.5, 8.2, 18.6, 10],
                        backgroundColor: [
                            "#ea5d6a",
                            "#718ff1",
                            "#12d18f",
                            "#ff7124",
                            "#ffc688",
                        ],
                    }],
                    labels: [
                        'social networks',
                        'search engines',
                        'ad campaigns',
                        'direct traffic',
                        'other'
                    ]
                },

                options: {
                    responsive: true,

                    cutoutPercentage: 50,
                    legend: {
                        display: false
                    },
                    animation: {
                        // animateScale: true,
                        animateRotate: true,
                        duration: _animate ? 1000 : false
                    },
                    tooltips: {
                        enabled: true,
                        cornerRadius: 0,
                        bodyFontColor: '#fff',
                        bodyFontSize: 14,
                        fontStyle: 'bold',

                        backgroundColor: 'rgba(34, 34, 34, 0.73)',
                        borderWidth: 0,

                        caretSize: 5,

                        xPadding: 12,
                        yPadding: 12,

                        callbacks: {
                            label: function(tooltipItem, data) {
                                var label = data.labels[tooltipItem.index]
                                return ' ' + label + ": " + data.datasets[tooltipItem.datasetIndex].data[tooltipItem.index]
                            }
                        }
                    }
                }
            })


            ////////////////////////////////////////

            // the big (More Stats) chart 
            var canvas = document.getElementById("saleschart")
            var ctx = canvas.getContext("2d")

            /*** Gradient ***/
            var gradient1 = ctx.createLinearGradient(0, 0, 0, 300)
            gradient1.addColorStop(0, 'rgba(89, 182, 218, 0.3)')
            gradient1.addColorStop(1, 'rgba(89, 182, 218, 0)')

            var gradient2 = ctx.createLinearGradient(0, 0, 0, 250)
            gradient2.addColorStop(0, 'rgba(112, 187, 112, 0.4)')
            gradient2.addColorStop(1, 'rgba(112, 187, 112, 0)')

            var gradients = [];
            gradients.push(gradient1, gradient2)


            var chartOptions1 = {
                lineTenstion: 0.3,
                borderWidth: 2,
                pointRadius: 2
            }

            new Chart(ctx, {
                type: 'line',
                data: {
                    labels: ["Jan", "Feb", "Mar", "Apr", "May", "June", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                    datasets: [{
                            label: "Twitter",
                            data: [150, 320, 250, 300, 450, 380, 360, 490, 480, 790, 720, 910],

                            borderColor: 'rgba(89, 182, 218, 0.7)',
                            pointBorderColor: 'rgba(89, 182, 218, 0.67)',

                            fill: true,
                            backgroundColor: gradients[0],
                            pointBackgroundColor: '#FFF',

                            borderWidth: chartOptions1.borderWidth,
                            pointRadius: chartOptions1.pointRadius,
                            lineTension: chartOptions1.lineTension,
                        },
                        {
                            label: "Facebook",
                            data: [600, 700, 520, 450, 580, 650, 720, 850, 650, 500, 350, 400],

                            borderColor: 'rgba(112, 187, 112, 0.7)',
                            pointBorderColor: 'rgba(112, 187, 112, 0.67)',

                            fill: true,
                            backgroundColor: gradients[1],
                            pointBackgroundColor: '#FFF',

                            borderWidth: chartOptions1.borderWidth,
                            pointRadius: chartOptions1.pointRadius,
                            lineTension: chartOptions1.lineTension,
                        }
                    ]
                },
                options: {
                    responsive: true,
                    animation: {
                        duration: _animate ? 1000 : false
                    },

                    datasetStrokeWidth: 3,
                    pointDotStrokeWidth: 4,

                    tooltips: {
                        enabled: true,
                        cornerRadius: 0,

                        titleFontColor: 'rgba(0, 0, 0, 0.8)',
                        titleFontSize: 16,
                        titleFontStyle: 'normal',

                        bodyFontColor: 'rgba(0, 0, 0, 0.8)',
                        bodyFontSize: 14,
                        fontFamily: 'Open Sans',

                        backgroundColor: 'rgba(255, 255, 255, 0.73)',
                        borderWidth: 2,
                        borderColor: 'rgba(254, 224, 116, 0.73)',

                        caretSize: 5,

                        xPadding: 12,
                        yPadding: 12,

                    },

                    scales: {
                        yAxes: [{
                            ticks: {
                                fontFamily: "Open Sans",
                                fontColor: "#85808e",
                                fontStyle: "bolder",
                                fontSize: "13",
                                beginAtZero: false,
                                maxTicksLimit: 3,
                                padding: 16
                            },
                            gridLines: {
                                drawTicks: false,
                                display: false
                            }
                        }],
                        xAxes: [{
                            gridLines: {
                                zeroLineColor: "transparent"
                            },
                            ticks: {
                                fontFamily: "Open Sans",
                                fontColor: "#85808e",
                                fontSize: "14",
                                padding: 12
                            }
                        }]
                    },

                    legend: {
                        display: true,
                        position: 'top'
                    }
                }
            })

        })
    </script>
</body>

</html>