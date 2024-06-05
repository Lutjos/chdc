<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <link href="/assets/vendor/fullcalendar/css/fullcalendar.min.css" rel="stylesheet">
        <link href="/assets/css/style.css" rel="stylesheet">
        <!-- Scripts -->
        @vite(['resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles
    </head>
    <body class="">
        <div id="preloader">
            <div class="sk-three-bounce">
                <div class="sk-child sk-bounce1"></div>
                <div class="sk-child sk-bounce2"></div>
                <div class="sk-child sk-bounce3"></div>
            </div>
        </div>
        <div id="main-wrapper">

                <!--**********************************
                        Nav header start
                    ***********************************-->
               <x-navheader />
                <!--**********************************
                        Nav header end
                    ***********************************-->

                <!--**********************************
                        Header start
                    ***********************************-->
              <x-sidebar />
                <!--**********************************
                        Header end ti-comment-alt
                    ***********************************-->

                <!--**********************************
                        Sidebar start
                    ***********************************-->
                <div class="quixnav">
                    <div class="quixnav-scroll">
                        <ul class="metismenu" id="menu">
                            <li class="nav-label first">Main Menu</li>
                            <!-- <li><a href="index.html"><i class="icon icon-single-04"></i><span class="nav-text">Dashboard</span></a>
                                </li> -->
                            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                                        class="icon icon-single-04"></i><span class="nav-text">Dashboard</span></a>
                                <ul aria-expanded="false">
                                    <li><a href="./index.html">Dashboard 1</a></li>
                                    <li><a href="./index2.html">Dashboard 2</a></li>
                                </ul>
                            </li>

                            <li class="nav-label">Apps</li>
                            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                                        class="icon icon-app-store"></i><span class="nav-text">Apps</span></a>
                                <ul aria-expanded="false">
                                    <li><a href="./app-profile.html">Profile</a></li>
                                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Email</a>
                                        <ul aria-expanded="false">
                                            <li><a href="./email-compose.html">Compose</a></li>
                                            <li><a href="./email-inbox.html">Inbox</a></li>
                                            <li><a href="./email-read.html">Read</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="./app-calender.html">Calendar</a></li>
                                </ul>
                            </li>
                            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                                        class="icon icon-chart-bar-33"></i><span class="nav-text">Charts</span></a>
                                <ul aria-expanded="false">
                                    <li><a href="./chart-flot.html">Flot</a></li>
                                    <li><a href="./chart-morris.html">Morris</a></li>
                                    <li><a href="./chart-chartjs.html">Chartjs</a></li>
                                    <li><a href="./chart-chartist.html">Chartist</a></li>
                                    <li><a href="./chart-sparkline.html">Sparkline</a></li>
                                    <li><a href="./chart-peity.html">Peity</a></li>
                                </ul>
                            </li>
                            <li class="nav-label">Components</li>
                            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                                        class="icon icon-world-2"></i><span class="nav-text">Bootstrap</span></a>
                                <ul aria-expanded="false">
                                    <li><a href="./ui-accordion.html">Accordion</a></li>
                                    <li><a href="./ui-alert.html">Alert</a></li>
                                    <li><a href="./ui-badge.html">Badge</a></li>
                                    <li><a href="./ui-button.html">Button</a></li>
                                    <li><a href="./ui-modal.html">Modal</a></li>
                                    <li><a href="./ui-button-group.html">Button Group</a></li>
                                    <li><a href="./ui-list-group.html">List Group</a></li>
                                    <li><a href="./ui-media-object.html">Media Object</a></li>
                                    <li><a href="./ui-card.html">Cards</a></li>
                                    <li><a href="./ui-carousel.html">Carousel</a></li>
                                    <li><a href="./ui-dropdown.html">Dropdown</a></li>
                                    <li><a href="./ui-popover.html">Popover</a></li>
                                    <li><a href="./ui-progressbar.html">Progressbar</a></li>
                                    <li><a href="./ui-tab.html">Tab</a></li>
                                    <li><a href="./ui-typography.html">Typography</a></li>
                                    <li><a href="./ui-pagination.html">Pagination</a></li>
                                    <li><a href="./ui-grid.html">Grid</a></li>

                                </ul>
                            </li>

                            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                                        class="icon icon-plug"></i><span class="nav-text">Plugins</span></a>
                                <ul aria-expanded="false">
                                    <li><a href="./uc-select2.html">Select 2</a></li>
                                    <li><a href="./uc-nestable.html">Nestedable</a></li>
                                    <li><a href="./uc-noui-slider.html">Noui Slider</a></li>
                                    <li><a href="./uc-sweetalert.html">Sweet Alert</a></li>
                                    <li><a href="./uc-toastr.html">Toastr</a></li>
                                    <li><a href="./map-jqvmap.html">Jqv Map</a></li>
                                </ul>
                            </li>
                            <li><a href="widget-basic.html" aria-expanded="false"><i class="icon icon-globe-2"></i><span
                                        class="nav-text">Widget</span></a></li>
                            <li class="nav-label">Forms</li>
                            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                                        class="icon icon-form"></i><span class="nav-text">Forms</span></a>
                                <ul aria-expanded="false">
                                    <li><a href="./form-element.html">Form Elements</a></li>
                                    <li><a href="./form-wizard.html">Wizard</a></li>
                                    <li><a href="./form-editor-summernote.html">Summernote</a></li>
                                    <li><a href="form-pickers.html">Pickers</a></li>
                                    <li><a href="form-validation-jquery.html">Jquery Validate</a></li>
                                </ul>
                            </li>
                            <li class="nav-label">Table</li>
                            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                                        class="icon icon-layout-25"></i><span class="nav-text">Table</span></a>
                                <ul aria-expanded="false">
                                    <li><a href="table-bootstrap-basic.html">Bootstrap</a></li>
                                    <li><a href="table-datatable-basic.html">Datatable</a></li>
                                </ul>
                            </li>

                            <li class="nav-label">Extra</li>
                            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                                        class="icon icon-single-copy-06"></i><span class="nav-text">Pages</span></a>
                                <ul aria-expanded="false">
                                    <li><a href="./page-register.html">Register</a></li>
                                    <li><a href="./page-login.html">Login</a></li>
                                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Error</a>
                                        <ul aria-expanded="false">
                                            <li><a href="./page-error-400.html">Error 400</a></li>
                                            <li><a href="./page-error-403.html">Error 403</a></li>
                                            <li><a href="./page-error-404.html">Error 404</a></li>
                                            <li><a href="./page-error-500.html">Error 500</a></li>
                                            <li><a href="./page-error-503.html">Error 503</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="./page-lock-screen.html">Lock Screen</a></li>
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
                    <div class="container-fluid">

                        {{ $slot }}

                    </div>
                </div>
                <!--**********************************
                        Content body end
                    ***********************************-->


                <!--**********************************
                        Footer start
                    ***********************************-->
                <div class="footer">
                    <div class="copyright">
                        <p>Copyright © Designed &amp; Developed by <a href="#" target="_blank">Quixkit</a> 2019</p>
                    </div>
                </div>
                <!--**********************************
                        Footer end
                    ***********************************-->




            </div>




        @stack('modals')
        <!-- Required vendors -->
        <script src="/assets/vendor/global/global.min.js"></script>
        <script src="/assets/js/quixnav-init.js"></script>
        <script src="/assets/js/custom.min.js"></script>
        <!--removeIf(production)-->
        <!-- Demo scripts -->
        <script src="/assets/js/styleSwitcher.js"></script>



        <script src="/assets/vendor/jqueryui/js/jquery-ui.min.js"></script>
        <script src="/assets/vendor/moment/moment.min.js"></script>

        <script src="/assets/vendor/fullcalendar/js/fullcalendar.min.js"></script>
        <script src="/assets/js/plugins-init/fullcalendar-init.js"></script>

        @livewireScripts
    </body>
</html>
