
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
                                    <a href="{{ route('user.profile') }}" class="dropdown-item ai-icon ">
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
                        <div class="menu-icon mr-3">
                            <img width="22" height="22" src="{{ asset('img/history.png') }}" alt="">
                        </div>&nbsp;&nbsp;
                        <span class="nav-text">Transactions</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="{{ route('user.deposit.transactions') }}">Deposits</a></li>
                        <li><a href="{{ route('user.withdraw.transactions') }}">Withdrawal</a></li>
                        <li><a href="{{ route('user.fundingHistory') }}">Funding</a></li>
                        <li><a href="celandar.html">Trade History</a></li>
                    </ul>
                </li>
                <li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
                        <div class="menu-icon mr-3">
                            <img width="22" height="22" src="{{ asset('img/trade.png') }}" alt="">
                        </div>&nbsp;&nbsp;
                        <span class="nav-text">Trade Room</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="{{ route('user.deposit.transactions') }}">Deposits</a></li>
                        <li><a href="{{ route('user.withdraw.transactions') }}">Withdrawal</a></li>
                        <li><a href="{{ route('user.fundingHistory') }}">Funding</a></li>
                        <li><a href="celandar.html">Trade History</a></li>
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
