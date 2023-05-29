
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from salreo.dexignzone.com/xhtml/index-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 26 May 2023 15:34:39 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="robots" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Salreo : Crypto Trading UI Admin  Bootstrap 5 Template" >
    <meta property="og:title" content="Salreo : Crypto Trading UI Admin  Bootstrap 5 Template" >
    <meta property="og:description" content="Salreo : Crypto Trading UI Admin  Bootstrap 5 Template" >
    <meta property="og:image" content="social-image.png" >
    <meta name="format-detection" content="telephone=no">
    <!-- PAGE TITLE HERE -->
    <title>Dashboard | {{ env('APP_NAME') }}</title>
    <!-- FAVICONS ICON -->
    <link rel="shortcut icon" type="image/png" href="images/favicon.png" >
    <link href="{{ asset('client/vendor/wow-master/css/libs/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('client/vendor/bootstrap-select/dist/css/bootstrap-select.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('client/vendor/bootstrap-select-country/css/bootstrap-select-country.min.css') }}">
    <link rel="stylesheet" href="{{ asset('client/vendor/jquery-nice-select/css/nice-select.css') }}">
    <!--swiper-slider-->
    <link rel="stylesheet" href="{{ asset('client/vendor/swiper/css/swiper-bundle.min.css') }}">
    <link href="{{ asset('client/vendor/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css') }}" rel="stylesheet">
    <!-- Style css -->
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
    <link href="{{ asset('client/css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/fontawesome.min.css" integrity="sha512-P9vJUXK+LyvAzj8otTOKzdfF1F3UYVl13+F8Fof8/2QNb8Twd6Vb+VD52I7+87tex9UXxnzPgWA3rH96RExA7A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
{{--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />--}}
    <style>
        [data-nav-headerbg="color_2"][data-theme-version="dark"], [data-nav-headerbg="color_2"] {
            --nav-headbg: #d02a2b;
        }
        .deznav {
            width: var(--width);
            padding-bottom: 0;
            height: calc(100% - 4.5rem);
            position: absolute;
            top: 5rem;
            padding-top: 0;
            z-index: 6;
            background-color: #d02a2b;
            border-top: none;
            transition: all .2s ease;
            box-shadow: 0rem 0.9375rem 1.875rem 0rem rgba(0, 0, 0, 0.02);
        }
        .btn-primary {
            background-color: #fd5353;
            border: 0px;
        }
        .btn:hover {
            background-color: #0b0a0a;
            color: white;
        }
        .page-titles .breadcrumb li.active {
            color: #d02a2b;
            font-size: 1rem;
        }
        .page-titles .breadcrumb .breadcrumb-item + .breadcrumb-item:before {
            content: "\f105";
            font-family: 'Font Awesome 6 Free';
            font-weight: 600;
            position: absolute;
            font-size: 14px;
            color: #d02a2b;
            margin-left: -20px;
        }
        .form-check-input:checked[type="radio"]:after {
            content: "";
            height: 0.688rem;
            width: 0.688rem;
            background-color: #fd5353;
            position: absolute;
            top: 0.188rem;
            left: 0.188rem;
            border-radius: 50%;
        }
        .dropdown-menu .dropdown-item.active, .dropdown-menu .dropdown-item:active {
            color: #fd5353;
            background: var(--rgba-primary-1);
        }
        .table-responsive thead {
            background-color: #fd5353;
        }
        .pagination-primary .page-item.active .page-link {
            background: #fd5353;
            border-color: #fd5353;
        }
    </style>
<body class="dark-mode">

<!--*******************
    Preloader start
********************-->
<div id="preloader">
    <div class="loader"></div>
</div>
<!--*******************
    Preloader end
********************-->
<!--**********************************
    Main wrapper start
***********************************-->
<div id="main-wrapper" class="show">

    <!--**********************************
        Nav header start
    ***********************************-->
    <div class="nav-header">
        <a href="index.html" class="brand-logo">
            <svg  class="logo-abbr" width="40" height="40" viewBox="0 0 576 672" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M4.00292 165C-30.9998 505 180 618 288.003 672C289.669 671.183 291.364 670.354 293.088 669.511C396.895 618.73 602.494 518.153 572.003 166L288.003 0L4.00292 165ZM63.0234 202.7C35.6872 467.9 203.473 559.88 287.82 602C288.895 601.474 289.986 600.94 291.094 600.399C372.093 560.798 539.498 478.953 515.617 203.48L287.82 74L63.0234 202.7Z" fill="white"/>
                <path d="M499 392L235 238L289 204L514 336L499 392Z" fill="white"/>
                <path d="M499 392L235 238L289 204L514 336L499 392Z" stroke="white"/>
                <path d="M59 278L336 434L290 476L44 334L59 278Z" fill="white"/>
                <path d="M59 278L336 434L290 476L44 334L59 278Z" stroke="white"/>
            </svg>
            <div class="brand-title">
                <h1 class="mb-0">{{ env('APP_NAME') }}</h1>
            </div>

        </a>
        <div class="nav-control">
            <div class="hamburger">
                <span class="line"></span><span class="line"></span><span class="line"></span>
                <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="22" y="11" width="4" height="4" rx="2" fill="#2A353A"/>
                    <rect x="11" width="4" height="4" rx="2" fill="#2A353A"/>
                    <rect x="22" width="4" height="4" rx="2" fill="#2A353A"/>
                    <rect x="11" y="11" width="4" height="4" rx="2" fill="#2A353A"/>
                    <rect x="11" y="22" width="4" height="4" rx="2" fill="#2A353A"/>
                    <rect width="4" height="4" rx="2" fill="#2A353A"/>
                    <rect y="11" width="4" height="4" rx="2" fill="#2A353A"/>
                    <rect x="22" y="22" width="4" height="4" rx="2" fill="#2A353A"/>
                    <rect y="22" width="4" height="4" rx="2" fill="#2A353A"/>
                </svg>
            </div>
        </div>
    </div>
    <!--**********************************
        Nav header end
    ***********************************-->


    <!--**********************************
        Header start
    ***********************************-->
    <div class="header">
        <div class="header-content">
            <nav class="navbar navbar-expand">
                <div class="collapse navbar-collapse justify-content-between">
                    <div class="header-left">
                        <div class="header-title">
                            <h3 class="mb-0">Dashboard</h3>
                        </div>
                    </div>
                    <ul class="navbar-nav header-right">

                        <li class="nav-item">
                            <div class="dropdown header-profile2">
                                <a class="nav-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <div class="header-info2 d-flex align-items-center">
                                        <div class="d-flex align-items-center sidebar-info">
                                            <div>
                                                <h4 class="mb-0">{{ auth()->user()->name }}</h4>
                                                <span class="d-block text-end badge bg-primary-dark">Investor</span>
                                            </div>
                                        </div>
                                        <img src="{{ asset('img/avatar.png') }}" alt="">
                                    </div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end" style="">
                                    <a href="app-profile.html" class="dropdown-item ai-icon ">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="svg-main-icon">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <polygon points="0 0 24 0 24 24 0 24"/>
                                                <path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
                                                <path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" fill="var(--primary)" fill-rule="nonzero"/>
                                            </g>
                                        </svg>
                                        <span class="ms-2">Profile </span>
                                    </a>
                                    <a href="email-inbox.html" class="dropdown-item ai-icon ">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="svg-main-icon">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" >
                                                <rect x="0" y="0" width="24" height="24"/>
                                                <path d="M21,12.0829584 C20.6747915,12.0283988 20.3407122,12 20,12 C16.6862915,12 14,14.6862915 14,18 C14,18.3407122 14.0283988,18.6747915 14.0829584,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,8 C3,6.8954305 3.8954305,6 5,6 L19,6 C20.1045695,6 21,6.8954305 21,8 L21,12.0829584 Z M18.1444251,7.83964668 L12,11.1481833 L5.85557487,7.83964668 C5.4908718,7.6432681 5.03602525,7.77972206 4.83964668,8.14442513 C4.6432681,8.5091282 4.77972206,8.96397475 5.14442513,9.16035332 L11.6444251,12.6603533 C11.8664074,12.7798822 12.1335926,12.7798822 12.3555749,12.6603533 L18.8555749,9.16035332 C19.2202779,8.96397475 19.3567319,8.5091282 19.1603533,8.14442513 C18.9639747,7.77972206 18.5091282,7.6432681 18.1444251,7.83964668 Z" fill="#000000"/>
                                                <circle fill="var(--primary)" opacity="0.3" cx="19.5" cy="17.5" r="2.5"/>
                                            </g>
                                        </svg>
                                        <span class="ms-2">Notification </span>
                                    </a>
                                    <a href="javascript:void(0);" class="dropdown-item ai-icon ">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="svg-main-icon">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24"/>
                                                <path d="M18.6225,9.75 L18.75,9.75 C19.9926407,9.75 21,10.7573593 21,12 C21,13.2426407 19.9926407,14.25 18.75,14.25 L18.6854912,14.249994 C18.4911876,14.250769 18.3158978,14.366855 18.2393549,14.5454486 C18.1556809,14.7351461 18.1942911,14.948087 18.3278301,15.0846699 L18.372535,15.129375 C18.7950334,15.5514036 19.03243,16.1240792 19.03243,16.72125 C19.03243,17.3184208 18.7950334,17.8910964 18.373125,18.312535 C17.9510964,18.7350334 17.3784208,18.97243 16.78125,18.97243 C16.1840792,18.97243 15.6114036,18.7350334 15.1896699,18.3128301 L15.1505513,18.2736469 C15.008087,18.1342911 14.7951461,18.0956809 14.6054486,18.1793549 C14.426855,18.2558978 14.310769,18.4311876 14.31,18.6225 L14.31,18.75 C14.31,19.9926407 13.3026407,21 12.06,21 C10.8173593,21 9.81,19.9926407 9.81,18.75 C9.80552409,18.4999185 9.67898539,18.3229986 9.44717599,18.2361469 C9.26485393,18.1556809 9.05191298,18.1942911 8.91533009,18.3278301 L8.870625,18.372535 C8.44859642,18.7950334 7.87592081,19.03243 7.27875,19.03243 C6.68157919,19.03243 6.10890358,18.7950334 5.68746499,18.373125 C5.26496665,17.9510964 5.02757002,17.3784208 5.02757002,16.78125 C5.02757002,16.1840792 5.26496665,15.6114036 5.68716991,15.1896699 L5.72635306,15.1505513 C5.86570889,15.008087 5.90431906,14.7951461 5.82064513,14.6054486 C5.74410223,14.426855 5.56881236,14.310769 5.3775,14.31 L5.25,14.31 C4.00735931,14.31 3,13.3026407 3,12.06 C3,10.8173593 4.00735931,9.81 5.25,9.81 C5.50008154,9.80552409 5.67700139,9.67898539 5.76385306,9.44717599 C5.84431906,9.26485393 5.80570889,9.05191298 5.67216991,8.91533009 L5.62746499,8.870625 C5.20496665,8.44859642 4.96757002,7.87592081 4.96757002,7.27875 C4.96757002,6.68157919 5.20496665,6.10890358 5.626875,5.68746499 C6.04890358,5.26496665 6.62157919,5.02757002 7.21875,5.02757002 C7.81592081,5.02757002 8.38859642,5.26496665 8.81033009,5.68716991 L8.84944872,5.72635306 C8.99191298,5.86570889 9.20485393,5.90431906 9.38717599,5.82385306 L9.49484664,5.80114977 C9.65041313,5.71688974 9.7492905,5.55401473 9.75,5.3775 L9.75,5.25 C9.75,4.00735931 10.7573593,3 12,3 C13.2426407,3 14.25,4.00735931 14.25,5.25 L14.249994,5.31450877 C14.250769,5.50881236 14.366855,5.68410223 14.552824,5.76385306 C14.7351461,5.84431906 14.948087,5.80570889 15.0846699,5.67216991 L15.129375,5.62746499 C15.5514036,5.20496665 16.1240792,4.96757002 16.72125,4.96757002 C17.3184208,4.96757002 17.8910964,5.20496665 18.312535,5.626875 C18.7350334,6.04890358 18.97243,6.62157919 18.97243,7.21875 C18.97243,7.81592081 18.7350334,8.38859642 18.3128301,8.81033009 L18.2736469,8.84944872 C18.1342911,8.99191298 18.0956809,9.20485393 18.1761469,9.38717599 L18.1988502,9.49484664 C18.2831103,9.65041313 18.4459853,9.7492905 18.6225,9.75 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
                                                <path d="M12,15 C13.6568542,15 15,13.6568542 15,12 C15,10.3431458 13.6568542,9 12,9 C10.3431458,9 9,10.3431458 9,12 C9,13.6568542 10.3431458,15 12,15 Z" fill="#000000"/>
                                            </g>
                                        </svg>
                                        <span class="ms-2">Settings </span>
                                    </a>
                                    <a href="page-login.html" class="dropdown-item ai-icon">
                                        <svg class="ms-2" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="var(--primary)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
                                        <span class="ms-2">Logout </span>
                                    </a>
                                </div>
                            </div>
                        </li>

                    </ul>
                </div>
            </nav>
        </div>

    </div>
    <!--**********************************
    Header end ti-comment-alt
***********************************-->

    <!--**********************************
        Sidebar start
    ***********************************-->
    <div class="deznav">
        <div class="deznav-scroll">
            <ul class="metismenu" id="menu">
                <li>
                    <a class="" href="{{ route('user.dashboard') }}" >
                        <div class="menu-icon">
                            <svg id="icon-home" width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M16.3077 20.8538H5.69266C3.181 20.8538 1.146 18.8097 1.146 16.298V9.50548C1.146 8.25882 1.916 6.69132 2.906 5.92132L7.84683 2.07132C9.33183 0.916317 11.706 0.861317 13.246 1.94298L18.911 5.91215C20.0018 6.67298 20.8543 8.30465 20.8543 9.63382V16.3072C20.8543 18.8097 18.8193 20.8538 16.3077 20.8538ZM8.69016 3.15298L3.74933 7.00298C3.0985 7.51632 2.521 8.68048 2.521 9.50548V16.298C2.521 18.0488 3.94183 19.4788 5.69266 19.4788H16.3077C18.0585 19.4788 19.4793 18.058 19.4793 16.3072V9.63382C19.4793 8.75382 18.8468 7.53465 18.1227 7.03965L12.4577 3.07048C11.4127 2.33715 9.68933 2.37382 8.69016 3.15298Z" fill="#9C99FF"/>
                                <path d="M11 17.1875C10.6242 17.1875 10.3125 16.8758 10.3125 16.5V13.75C10.3125 13.3742 10.6242 13.0625 11 13.0625C11.3758 13.0625 11.6875 13.3742 11.6875 13.75V16.5C11.6875 16.8758 11.3758 17.1875 11 17.1875Z" fill="#9C99FF"/>
                            </svg>
                        </div>
                        <span class="nav-text">Dashboard</span>
                    </a>
                </li>
                <li><a class="" href="{{ route('user.deposit') }}" >
                        <div class="menu-icon">
                            <svg enable-background="new 0 0 512 512" height="512px" id="Layer_1" version="1.1" viewBox="0 0 512 512" width="512px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M256,73.089c-100.864,0-182.911,82.058-182.911,182.917S155.136,438.911,256,438.911  c100.859,0,182.911-82.046,182.911-182.905S356.86,73.089,256,73.089z M256,410.059c-84.951,0-154.06-69.108-154.06-154.054  c0-84.956,69.109-154.065,154.06-154.065c84.951,0,154.06,69.109,154.06,154.065C410.06,340.951,340.951,410.059,256,410.059z"/><path d="M227.076,220.157c0-11.572,16.925-13.548,31.606-13.548c13.837,0,32.744,6.485,48.553,14.681l3.098-31.895  c-7.906-4.52-26.247-9.884-44.877-11.005l4.515-32.461H239.77l4.521,32.461c-38.947,3.664-51.651,26.242-51.651,45.154  c0,47.697,88.898,37.547,88.898,66.888c0,11.017-10.434,14.959-28.785,14.959c-24.832,0-43.467-8.74-53.056-17.779l-4.803,35.848  c9.04,5.364,27.375,10.161,49.397,11.294l-4.521,31.329h30.201l-4.515-31.617c45.722-3.954,53.906-28.23,53.906-44.311  C319.363,233.428,227.076,247.532,227.076,220.157z"/>
                            </svg>
                        </div>
                        <span class="nav-text"> Deposit</span>
                    </a>
                </li>
                <li><a class="" href="{{ route('user.withdraw') }}" >
                        <div class="menu-icon">
                            <?xml version="1.0" ?><svg baseProfile="tiny" height="24px" id="Layer_1" version="1.2" viewBox="0 0 24 24" width="24px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g><path d="M12,21c-1.654,0-3-1.346-3-3v-4.764c-1.143,1.024-3.025,0.979-4.121-0.115c-1.17-1.169-1.17-3.073,0-4.242L12,1.758   l7.121,7.121c1.17,1.169,1.17,3.073,0,4.242c-1.094,1.095-2.979,1.14-4.121,0.115V18C15,19.654,13.654,21,12,21z M11,8.414V18   c0,0.551,0.448,1,1,1s1-0.449,1-1V8.414l3.293,3.293c0.379,0.378,1.035,0.378,1.414,0c0.391-0.391,0.391-1.023,0-1.414L12,4.586   l-5.707,5.707c-0.391,0.391-0.391,1.023,0,1.414c0.379,0.378,1.035,0.378,1.414,0L11,8.414z"/></g></svg>
                        </div>
                        <span class="nav-text"> Withdraw</span>
                    </a>
                </li>
                <li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
                        <div class="menu-icon">
                            <svg  id="icon-home1" width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M13.7502 20.8538H8.25016C3.27266 20.8538 1.146 18.7272 1.146 13.7497V8.24967C1.146 3.27217 3.27266 1.14551 8.25016 1.14551H13.7502C18.7277 1.14551 20.8543 3.27217 20.8543 8.24967V13.7497C20.8543 18.7272 18.7277 20.8538 13.7502 20.8538ZM8.25016 2.52051C4.02433 2.52051 2.521 4.02384 2.521 8.24967V13.7497C2.521 17.9755 4.02433 19.4788 8.25016 19.4788H13.7502C17.976 19.4788 19.4793 17.9755 19.4793 13.7497V8.24967C19.4793 4.02384 17.976 2.52051 13.7502 2.52051H8.25016Z" fill="#9C99FF"/>
                                <path d="M14.2817 17.6463C13.9059 17.6463 13.5942 17.3346 13.5942 16.9588V13.3838C13.5942 13.008 13.9059 12.6963 14.2817 12.6963C14.6576 12.6963 14.9692 13.008 14.9692 13.3838V16.9588C14.9692 17.3346 14.6576 17.6463 14.2817 17.6463Z" fill="#9C99FF"/>
                                <path d="M14.2817 7.51699C13.9059 7.51699 13.5942 7.20533 13.5942 6.82949V5.04199C13.5942 4.66616 13.9059 4.35449 14.2817 4.35449C14.6576 4.35449 14.9692 4.66616 14.9692 5.04199V6.82949C14.9692 7.20533 14.6576 7.51699 14.2817 7.51699Z" fill="#9C99FF"/>
                                <path d="M14.2818 12.2833C12.5859 12.2833 11.2109 10.9083 11.2109 9.21244C11.2109 7.5166 12.5859 6.1416 14.2818 6.1416C15.9776 6.1416 17.3526 7.5166 17.3526 9.21244C17.3526 10.9083 15.9684 12.2833 14.2818 12.2833ZM14.2818 7.5166C13.3468 7.5166 12.5859 8.27744 12.5859 9.21244C12.5859 10.1474 13.3468 10.9083 14.2818 10.9083C15.2168 10.9083 15.9776 10.1474 15.9776 9.21244C15.9776 8.27744 15.2076 7.5166 14.2818 7.5166Z" fill="#9C99FF"/>
                                <path d="M7.71826 17.6459C7.34243 17.6459 7.03076 17.3342 7.03076 16.9584V15.1709C7.03076 14.7951 7.34243 14.4834 7.71826 14.4834C8.0941 14.4834 8.40576 14.7951 8.40576 15.1709V16.9584C8.40576 17.3342 8.10326 17.6459 7.71826 17.6459Z" fill="#9C99FF"/>
                                <path d="M7.71826 9.30449C7.34243 9.30449 7.03076 8.99283 7.03076 8.61699V5.04199C7.03076 4.66616 7.34243 4.35449 7.71826 4.35449C8.0941 4.35449 8.40576 4.66616 8.40576 5.04199V8.61699C8.40576 8.99283 8.10326 9.30449 7.71826 9.30449Z" fill="#9C99FF"/>
                                <path d="M7.71829 15.8585C6.02246 15.8585 4.64746 14.4835 4.64746 12.7876C4.64746 11.0918 6.02246 9.7168 7.71829 9.7168C9.41413 9.7168 10.7891 11.0918 10.7891 12.7876C10.7891 14.4835 9.41413 15.8585 7.71829 15.8585ZM7.71829 11.0918C6.78329 11.0918 6.02246 11.8526 6.02246 12.7876C6.02246 13.7226 6.78329 14.4835 7.71829 14.4835C8.65329 14.4835 9.41413 13.7226 9.41413 12.7876C9.41413 11.8526 8.66246 11.0918 7.71829 11.0918Z" fill="#9C99FF"/>
                            </svg>
                        </div>
                        <span class="nav-text">Transactions</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="{{ route('user.deposit.transactions') }}">Deposits</a></li>
                        <li><a href="{{ route('user.withdraw.transactions') }}">Withdrawal</a></li>
                        <li><a href="user.html">Funding</a></li>
                        <li><a href="celandar.html">Trade History</a></li>
                    </ul>
                </li>
                <li>
                    <a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
                        <div class="menu-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" id="cms-icon" class="cms-svg" viewBox="0 0 60 60" width="22" height="22"><path d="M30,10A20,20,0,1,0,50,30,20.023,20.023,0,0,0,30,10Zm0,38A18,18,0,1,1,48,30,18.021,18.021,0,0,1,30,48Z"/><path d="M59.849,27.168a2.8,2.8,0,0,0-2.336-2.415l-3.183-.521a24.733,24.733,0,0,0-3.052-7.351l1.88-2.626A2.8,2.8,0,0,0,53.1,10.88a24.812,24.812,0,0,0-1.9-2.086A28.1,28.1,0,0,0,49.1,6.878a2.782,2.782,0,0,0-3.351-.039L43.119,8.722A24.733,24.733,0,0,0,35.768,5.67l-.521-3.182A2.8,2.8,0,0,0,32.819.149a26.3,26.3,0,0,0-5.651,0,2.8,2.8,0,0,0-2.415,2.336L24.232,5.67a24.733,24.733,0,0,0-7.351,3.052l-2.626-1.88a2.789,2.789,0,0,0-3.374.053A27.541,27.541,0,0,0,8.805,8.783a24.827,24.827,0,0,0-1.918,2.108,2.793,2.793,0,0,0-.048,3.36l1.883,2.63A24.733,24.733,0,0,0,5.67,24.232l-3.182.521A2.8,2.8,0,0,0,.149,27.181a26.715,26.715,0,0,0,0,5.654,2.8,2.8,0,0,0,2.336,2.412l3.183.521a24.733,24.733,0,0,0,3.052,7.351L6.851,45.734A2.8,2.8,0,0,0,6.9,49.12c.561.687,1.2,1.389,1.9,2.086A25.306,25.306,0,0,0,10.9,53.122a2.756,2.756,0,0,0,3.351.039l2.629-1.883a24.733,24.733,0,0,0,7.351,3.052l.521,3.182a2.8,2.8,0,0,0,2.428,2.339,26.687,26.687,0,0,0,5.651,0,2.8,2.8,0,0,0,2.415-2.336l.521-3.183a24.733,24.733,0,0,0,7.351-3.052l2.626,1.88a2.765,2.765,0,0,0,3.387-.063,25.238,25.238,0,0,0,2.074-1.888q1.047-1.047,1.916-2.108a2.789,2.789,0,0,0,.039-3.35l-1.883-2.63a24.733,24.733,0,0,0,3.052-7.351l3.182-.521a2.8,2.8,0,0,0,2.339-2.428,26.741,26.741,0,0,0,0-5.638ZM57.862,32.6a.81.81,0,0,1-.674.669l-3.85.631a1,1,0,0,0-.817.785A22.766,22.766,0,0,1,49.236,42.6a1,1,0,0,0,.023,1.13l2.287,3.2a.791.791,0,0,1,.01.926,25.934,25.934,0,0,1-1.765,1.938,23.493,23.493,0,0,1-1.915,1.746.789.789,0,0,1-.964,0l-3.179-2.275a1,1,0,0,0-1.13-.023,22.766,22.766,0,0,1-7.915,3.285,1,1,0,0,0-.785.817l-.631,3.851a.782.782,0,0,1-.654.671,24.514,24.514,0,0,1-5.223,0,.786.786,0,0,1-.667-.674l-.631-3.85a1,1,0,0,0-.785-.817A22.766,22.766,0,0,1,17.4,49.236a1,1,0,0,0-1.13.023l-3.182,2.278a.782.782,0,0,1-.928.028,22.89,22.89,0,0,1-1.949-1.774,25.814,25.814,0,0,1-1.746-1.915.8.8,0,0,1,0-.963l2.275-3.18a1,1,0,0,0,.023-1.13,22.766,22.766,0,0,1-3.285-7.915,1,1,0,0,0-.817-.785l-3.851-.631a.806.806,0,0,1-.671-.654,24.6,24.6,0,0,1,0-5.223.786.786,0,0,1,.674-.667l3.85-.631a1,1,0,0,0,.817-.785A22.766,22.766,0,0,1,10.764,17.4a1,1,0,0,0-.023-1.13L8.463,13.083a.8.8,0,0,1-.019-.937,22.471,22.471,0,0,1,1.765-1.938,25.613,25.613,0,0,1,1.915-1.746.8.8,0,0,1,.964,0l3.179,2.275a1,1,0,0,0,1.13.023,22.766,22.766,0,0,1,7.915-3.285,1,1,0,0,0,.785-.817l.631-3.851a.782.782,0,0,1,.654-.671,24.514,24.514,0,0,1,5.223,0,.786.786,0,0,1,.667.674l.631,3.85a1,1,0,0,0,.785.817A22.766,22.766,0,0,1,42.6,10.764a1,1,0,0,0,1.13-.023l3.182-2.278a.794.794,0,0,1,.94-.018A25.975,25.975,0,0,1,49.8,10.219a22.447,22.447,0,0,1,1.744,1.916.8.8,0,0,1-.013.952l-2.275,3.18a1,1,0,0,0-.023,1.13,22.766,22.766,0,0,1,3.285,7.915,1,1,0,0,0,.817.785l3.851.631a.786.786,0,0,1,.672.661,24.605,24.605,0,0,1,0,5.214Z"/><path d="M20,25a2,2,0,0,1,2,2,1,1,0,0,0,2,0,4,4,0,0,0-8,0v6a4,4,0,0,0,8,0,1,1,0,0,0-2,0,2,2,0,0,1-4,0V27A2,2,0,0,1,20,25Z"/><path d="M33.179,23.016a1,1,0,0,0-1.116.632L30,29.152l-2.063-5.5A1,1,0,0,0,26,24V36a1,1,0,0,0,2,0V29.515l1.063,2.837a1,1,0,0,0,1.874,0L32,29.515V36a1,1,0,0,0,2,0V24A1,1,0,0,0,33.179,23.016Z"/><path d="M36,27a4,4,0,0,0,4,4,2,2,0,1,1-2,2,1,1,0,0,0-2,0,4,4,0,1,0,4-4,2,2,0,1,1,2-2,1,1,0,0,0,2,0,4,4,0,0,0-8,0Z"/></svg>
                        </div>
                        <span class="nav-text">CMS</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="content.html">Content</a></li>
                        <li><a href="menu.html">Menu</a></li>
                        <li><a href="email-template.html">Email Template</a></li>
                        <li><a href="blog.html">Blog</a></li>

                    </ul>
                </li>
                <li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
                        <div class="menu-icon">
                            <svg id="icon-apps" width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M11 12.1921C10.8808 12.1921 10.7617 12.1646 10.6517 12.1004L2.5575 7.41627C2.23666 7.22377 2.1175 6.8021 2.31 6.4721C2.5025 6.1421 2.92416 6.03211 3.25416 6.22461L11 10.7071L18.7 6.25211C19.03 6.05961 19.4517 6.17877 19.6442 6.49961C19.8367 6.82961 19.7175 7.25127 19.3967 7.44377L11.3575 12.1004C11.2383 12.1554 11.1192 12.1921 11 12.1921Z" fill="#9C99FF"/>
                                <path d="M11 20.4968C10.6242 20.4968 10.3125 20.1851 10.3125 19.8093V11.4951C10.3125 11.1193 10.6242 10.8076 11 10.8076C11.3758 10.8076 11.6875 11.1193 11.6875 11.4951V19.8093C11.6875 20.1851 11.3758 20.4968 11 20.4968Z" fill="#9C99FF"/>
                                <path d="M11.0001 20.8538C10.1934 20.8538 9.39592 20.6797 8.76342 20.3313L3.86842 17.6088C2.53925 16.8755 1.50342 15.1063 1.50342 13.5847V8.40551C1.50342 6.88384 2.53925 5.12384 3.86842 4.38134L8.76342 1.66801C10.0193 0.971341 11.9809 0.971341 13.2368 1.66801L18.1318 4.39051C19.4609 5.12384 20.4968 6.89301 20.4968 8.41467V13.5938C20.4968 15.1155 19.4609 16.8755 18.1318 17.618L13.2368 20.3313C12.6043 20.6797 11.8068 20.8538 11.0001 20.8538ZM11.0001 2.52051C10.4226 2.52051 9.85425 2.63967 9.43258 2.86884L4.53758 5.59134C3.65758 6.07717 2.87842 7.39717 2.87842 8.40551V13.5847C2.87842 14.593 3.65758 15.913 4.53758 16.408L9.43258 19.1305C10.2668 19.598 11.7334 19.598 12.5676 19.1305L17.4626 16.408C18.3426 15.913 19.1218 14.6022 19.1218 13.5847V8.40551C19.1218 7.39717 18.3426 6.07717 17.4626 5.58217L12.5676 2.85967C12.1459 2.63967 11.5776 2.52051 11.0001 2.52051Z" fill="#9C99FF"/>
                            </svg>
                        </div>
                        <span class="nav-text">Apps</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="app-profile.html">Profile</a></li>
                        <li><a href="edit-profile.html">Edit Profile</a></li>
                        <li><a href="post-details.html">Post Details</a></li>
                        <li><a class="has-arrow" href="javascript:void(0);" aria-expanded="false">Email</a>
                            <ul aria-expanded="false">
                                <li><a href="email-compose.html">Compose</a></li>
                                <li><a href="email-inbox.html">Inbox</a></li>
                                <li><a href="email-read.html">Read</a></li>
                            </ul>
                        </li>
                        <li><a href="app-calender.html">Calendar</a></li>
                        <li><a class="has-arrow" href="javascript:void(0);" aria-expanded="false">Shop</a>
                            <ul aria-expanded="false">
                                <li><a href="ecom-product-grid.html">Product Grid</a></li>
                                <li><a href="ecom-product-list.html">Product List</a></li>
                                <li><a href="ecom-product-detail.html">Product Details</a></li>
                                <li><a href="ecom-product-order.html">Order</a></li>
                                <li><a href="ecom-checkout.html">Checkout</a></li>
                                <li><a href="ecom-invoice.html">Invoice</a></li>
                                <li><a href="ecom-customers.html">Customers</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>




            </ul>
            <div class="plus-box">
                <div class="media">
						<span>
							<svg width="22" height="29" viewBox="0 0 22 29" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M2.74982 1.40323C2.74982 2.17821 2.13421 2.80645 1.37482 2.80645C0.615425 2.80645 -0.000183105 2.17821 -0.000183105 1.40323C-0.000183105 0.628246 0.615425 0 1.37482 0C2.13421 0 2.74982 0.628246 2.74982 1.40323Z" fill="#FCFCFC"/>
								<path d="M9.16648 1.40323C9.16648 2.17821 8.55088 2.80645 7.79148 2.80645C7.03209 2.80645 6.41648 2.17821 6.41648 1.40323C6.41648 0.628246 7.03209 0 7.79148 0C8.55088 0 9.16648 0.628246 9.16648 1.40323Z" fill="#FCFCFC"/>
								<path d="M15.5832 1.40323C15.5832 2.17821 14.9675 2.80645 14.2082 2.80645C13.4488 2.80645 12.8332 2.17821 12.8332 1.40323C12.8332 0.628246 13.4488 0 14.2082 0C14.9675 0 15.5832 0.628246 15.5832 1.40323Z" fill="#FCFCFC"/>
								<path d="M21.9998 1.40323C21.9998 2.17821 21.3842 2.80645 20.6248 2.80645C19.8654 2.80645 19.2498 2.17821 19.2498 1.40323C19.2498 0.628246 19.8654 0 20.6248 0C21.3842 0 21.9998 0.628246 21.9998 1.40323Z" fill="#FCFCFC"/>
								<path d="M2.74982 7.95161C2.74982 8.72659 2.13421 9.35484 1.37482 9.35484C0.615425 9.35484 -0.000183105 8.72659 -0.000183105 7.95161C-0.000183105 7.17663 0.615425 6.54839 1.37482 6.54839C2.13421 6.54839 2.74982 7.17663 2.74982 7.95161Z" fill="#FCFCFC"/>
								<path d="M9.16648 7.95161C9.16648 8.72659 8.55088 9.35484 7.79148 9.35484C7.03209 9.35484 6.41648 8.72659 6.41648 7.95161C6.41648 7.17663 7.03209 6.54839 7.79148 6.54839C8.55088 6.54839 9.16648 7.17663 9.16648 7.95161Z" fill="#FCFCFC"/>
								<path d="M15.5832 7.95161C15.5832 8.72659 14.9675 9.35484 14.2082 9.35484C13.4488 9.35484 12.8332 8.72659 12.8332 7.95161C12.8332 7.17663 13.4488 6.54839 14.2082 6.54839C14.9675 6.54839 15.5832 7.17663 15.5832 7.95161Z" fill="#FCFCFC"/>
								<path d="M21.9998 7.95161C21.9998 8.72659 21.3842 9.35484 20.6248 9.35484C19.8654 9.35484 19.2498 8.72659 19.2498 7.95161C19.2498 7.17663 19.8654 6.54839 20.6248 6.54839C21.3842 6.54839 21.9998 7.17663 21.9998 7.95161Z" fill="#FCFCFC"/>
								<path d="M2.74982 14.5C2.74982 15.275 2.13421 15.9032 1.37482 15.9032C0.615425 15.9032 -0.000183105 15.275 -0.000183105 14.5C-0.000183105 13.725 0.615425 13.0968 1.37482 13.0968C2.13421 13.0968 2.74982 13.725 2.74982 14.5Z" fill="#FCFCFC"/>
								<path d="M9.16648 14.5C9.16648 15.275 8.55088 15.9032 7.79148 15.9032C7.03209 15.9032 6.41648 15.275 6.41648 14.5C6.41648 13.725 7.03209 13.0968 7.79148 13.0968C8.55088 13.0968 9.16648 13.725 9.16648 14.5Z" fill="#FCFCFC"/>
								<path d="M15.5832 14.5C15.5832 15.275 14.9675 15.9032 14.2082 15.9032C13.4488 15.9032 12.8332 15.275 12.8332 14.5C12.8332 13.725 13.4488 13.0968 14.2082 13.0968C14.9675 13.0968 15.5832 13.725 15.5832 14.5Z" fill="#FCFCFC"/>
								<path d="M21.9998 14.5C21.9998 15.275 21.3842 15.9032 20.6248 15.9032C19.8654 15.9032 19.2498 15.275 19.2498 14.5C19.2498 13.725 19.8654 13.0968 20.6248 13.0968C21.3842 13.0968 21.9998 13.725 21.9998 14.5Z" fill="#FCFCFC"/>
								<path d="M2.74982 21.0484C2.74982 21.8234 2.13421 22.4516 1.37482 22.4516C0.615425 22.4516 -0.000183105 21.8234 -0.000183105 21.0484C-0.000183105 20.2734 0.615425 19.6452 1.37482 19.6452C2.13421 19.6452 2.74982 20.2734 2.74982 21.0484Z" fill="#FCFCFC"/>
								<path d="M9.16648 21.0484C9.16648 21.8234 8.55088 22.4516 7.79148 22.4516C7.03209 22.4516 6.41648 21.8234 6.41648 21.0484C6.41648 20.2734 7.03209 19.6452 7.79148 19.6452C8.55088 19.6452 9.16648 20.2734 9.16648 21.0484Z" fill="#FCFCFC"/>
								<path d="M15.5832 21.0484C15.5832 21.8234 14.9675 22.4516 14.2082 22.4516C13.4488 22.4516 12.8332 21.8234 12.8332 21.0484C12.8332 20.2734 13.4488 19.6452 14.2082 19.6452C14.9675 19.6452 15.5832 20.2734 15.5832 21.0484Z" fill="#FCFCFC"/>
								<path d="M21.9998 21.0484C21.9998 21.8234 21.3842 22.4516 20.6248 22.4516C19.8654 22.4516 19.2498 21.8234 19.2498 21.0484C19.2498 20.2734 19.8654 19.6452 20.6248 19.6452C21.3842 19.6452 21.9998 20.2734 21.9998 21.0484Z" fill="#FCFCFC"/>
								<path d="M2.74982 27.5968C2.74982 28.3718 2.13421 29 1.37482 29C0.615425 29 -0.000183105 28.3718 -0.000183105 27.5968C-0.000183105 26.8218 0.615425 26.1935 1.37482 26.1935C2.13421 26.1935 2.74982 26.8218 2.74982 27.5968Z" fill="#FCFCFC"/>
								<path d="M9.16648 27.5968C9.16648 28.3718 8.55088 29 7.79148 29C7.03209 29 6.41648 28.3718 6.41648 27.5968C6.41648 26.8218 7.03209 26.1935 7.79148 26.1935C8.55088 26.1935 9.16648 26.8218 9.16648 27.5968Z" fill="#FCFCFC"/>
								<path d="M15.5832 27.5968C15.5832 28.3718 14.9675 29 14.2082 29C13.4488 29 12.8332 28.3718 12.8332 27.5968C12.8332 26.8218 13.4488 26.1935 14.2082 26.1935C14.9675 26.1935 15.5832 26.8218 15.5832 27.5968Z" fill="#FCFCFC"/>
								<path d="M21.9998 27.5968C21.9998 28.3718 21.3842 29 20.6248 29C19.8654 29 19.2498 28.3718 19.2498 27.5968C19.2498 26.8218 19.8654 26.1935 20.6248 26.1935C21.3842 26.1935 21.9998 26.8218 21.9998 27.5968Z" fill="#FCFCFC"/>
								</svg>
						</span>
                </div>
                <div class="info">
                    <h3 class="fs-20">Upgrade you <br>Account to Pro</h3>
                    <a href="javascript:void(0);" class="btn bg-white btn-sm">Upgrade</a>
                </div>
            </div>
        </div>
    </div>
    <!--**********************************
        Sidebar end
    ***********************************-->


    <!--****
    Wallet Sidebar
    ****-->

    <div class="wallet-bar-close"></div>
    <!--**********************************
        Content body start
    ***********************************-->
        @yield('content')

    <!--**********************************
        Content body end
    ***********************************-->
    <!--**********************************
            Footer start
        ***********************************-->
    <div class="footer">
        <div class="copyright">
            <p>Copyright © {{ env('APP_NAME') }}
                {{ Date('Y') }}</p>
        </div>
    </div>
    <!--**********************************
        Footer end
    ***********************************-->

    <!--**********************************
       Support ticket button start
    ***********************************-->

    <!--**********************************
       Support ticket button end
    ***********************************-->


</div>
<!--**********************************
    Main wrapper end
***********************************-->
<!--**********************************
		Modal
***********************************-->


<!--Modal2-->



<!--**********************************
    Modal
***********************************-->
<!--**********************************
    Scripts
***********************************-->
<!-- Required vendors -->
<script src="{{ asset('client/vendor/global/global.min.js') }}"></script>
<script src="{{ asset('client/vendor/chart.js/Chart.bundle.min.js') }}"></script>
<script src="{{ asset('client/vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
<!-- Apex Chart -->
<script src="{{ asset('client/vendor/apexchart/apexchart.js') }}"></script>
<!-- Chart piety plugin files -->
<script src="{{ asset('client/vendor/peity/jquery.peity.min.js') }}"></script>
<script src="{{ asset('client/vendor/jquery-nice-select/js/jquery.nice-select.min.js') }}"></script>
<!--swiper-slider-->
<script src="{{ asset('client/vendor/swiper/js/swiper-bundle.min.js') }}"></script>

<!-- Date-picker -->
<script src="{{ asset('client/vendor/bootstrap-datetimepicker/js/moment.js') }}"></script>
<script src="{{ asset('client/vendor/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js') }}"></script>

<!-- Dashboard 1 -->
<script src="{{ asset('client/js/dashboard/dashboard-1.js') }}"></script>
<script src="{{ asset('client/vendor/wow-master/dist/wow.min.js') }}"></script>
<script src="{{ asset('client/vendor/bootstrap-datetimepicker/js/moment.js') }}"></script>
<script src="{{ asset('client/vendor/bootstrap-select-country/js/bootstrap-select-country.min.js') }}"></script>

<script src="{{ asset('client/js/deznav-2-init.js') }}"></script>
<script src="{{ asset('client/js/custom.min.js') }}"></script>
<script src="{{ asset('client/js/demo-2.js') }}"></script>
{{--<script src="{{ asset('client/js/styleSwitcher.js') }}"></script>--}}
<script>
    $(function () {
        $('#datetimepicker').datetimepicker({
            inline: true,
        });
    });

    $(document).ready(function(){
        $(".booking-calender .fa.fa-clock-o").removeClass(this);
        $(".booking-calender .fa.fa-clock-o").addClass('fa-clock');
    });


</script>
</body>

<!-- Mirrored from salreo.dexignzone.com/xhtml/index-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 26 May 2023 15:44:46 GMT -->
</html>
