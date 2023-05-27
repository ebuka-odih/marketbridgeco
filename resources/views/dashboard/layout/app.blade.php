
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

</head>
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
<div id="main-wrapper" class="wallet-open active show">

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
                <h1 class="mb-0">Salreo</h1>
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
        Chat box start
    ***********************************-->
    <div class="chatbox">
        <div class="chatbox-close"></div>
        <div class="custom-tab-1">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" href="#notes">Notes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" href="#alerts">Alerts</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" data-bs-toggle="tab" href="#chat">Chat</a>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane fade active show" id="chat" role="tabpanel">
                    <div class="card mb-sm-3 mb-md-0 contacts_card dz-chat-user-box">
                        <div class="card-header chat-list-header text-center">
                            <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#chat_model"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect fill="#000000" x="4" y="11" width="16" height="2" rx="1"/><rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-270.000000) translate(-12.000000, -12.000000) " x="4" y="11" width="16" height="2" rx="1"/></g></svg></a>
                            <div>
                                <h6 class="mb-1">Chat List</h6>
                                <p class="mb-0">Show All</p>
                            </div>
                            <a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg></a>
                        </div>
                        <div class="card-body contacts_body p-0 dz-scroll  " id="DLAB_W_Contacts_Body">
                            <ul class="contacts">
                                <li class="name-first-letter">A</li>
                                <li class="active dz-chat-user">
                                    <div class="d-flex bd-highlight">
                                        <div class="img_cont">
                                            <img src="images/avatar/1.jpg" class="rounded-circle user_img" alt="">
                                            <span class="online_icon"></span>
                                        </div>
                                        <div class="user_info">
                                            <span>Archie Parker</span>
                                            <p>Kalid is online</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="dz-chat-user">
                                    <div class="d-flex bd-highlight">
                                        <div class="img_cont">
                                            <img src="images/avatar/2.jpg" class="rounded-circle user_img" alt="">
                                            <span class="online_icon offline"></span>
                                        </div>
                                        <div class="user_info">
                                            <span>Alfie Mason</span>
                                            <p>Taherah left 7 mins ago</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="dz-chat-user">
                                    <div class="d-flex bd-highlight">
                                        <div class="img_cont">
                                            <img src="images/avatar/3.jpg" class="rounded-circle user_img" alt="">
                                            <span class="online_icon"></span>
                                        </div>
                                        <div class="user_info">
                                            <span>AharlieKane</span>
                                            <p>Sami is online</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="dz-chat-user">
                                    <div class="d-flex bd-highlight">
                                        <div class="img_cont">
                                            <img src="images/avatar/4.jpg" class="rounded-circle user_img" alt="">
                                            <span class="online_icon offline"></span>
                                        </div>
                                        <div class="user_info">
                                            <span>Athan Jacoby</span>
                                            <p>Nargis left 30 mins ago</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="name-first-letter">B</li>
                                <li class="dz-chat-user">
                                    <div class="d-flex bd-highlight">
                                        <div class="img_cont">
                                            <img src="images/avatar/5.jpg" class="rounded-circle user_img" alt="">
                                            <span class="online_icon offline"></span>
                                        </div>
                                        <div class="user_info">
                                            <span>Bashid Samim</span>
                                            <p>Rashid left 50 mins ago</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="dz-chat-user">
                                    <div class="d-flex bd-highlight">
                                        <div class="img_cont">
                                            <img src="images/avatar/1.jpg" class="rounded-circle user_img" alt="">
                                            <span class="online_icon"></span>
                                        </div>
                                        <div class="user_info">
                                            <span>Breddie Ronan</span>
                                            <p>Kalid is online</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="dz-chat-user">
                                    <div class="d-flex bd-highlight">
                                        <div class="img_cont">
                                            <img src="images/avatar/2.jpg" class="rounded-circle user_img" alt="">
                                            <span class="online_icon offline"></span>
                                        </div>
                                        <div class="user_info">
                                            <span>Ceorge Carson</span>
                                            <p>Taherah left 7 mins ago</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="name-first-letter">D</li>
                                <li class="dz-chat-user">
                                    <div class="d-flex bd-highlight">
                                        <div class="img_cont">
                                            <img src="images/avatar/3.jpg" class="rounded-circle user_img" alt="">
                                            <span class="online_icon"></span>
                                        </div>
                                        <div class="user_info">
                                            <span>Darry Parker</span>
                                            <p>Sami is online</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="dz-chat-user">
                                    <div class="d-flex bd-highlight">
                                        <div class="img_cont">
                                            <img src="images/avatar/4.jpg" class="rounded-circle user_img" alt="">
                                            <span class="online_icon offline"></span>
                                        </div>
                                        <div class="user_info">
                                            <span>Denry Hunter</span>
                                            <p>Nargis left 30 mins ago</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="name-first-letter">J</li>
                                <li class="dz-chat-user">
                                    <div class="d-flex bd-highlight">
                                        <div class="img_cont">
                                            <img src="images/avatar/5.jpg" class="rounded-circle user_img" alt="">
                                            <span class="online_icon offline"></span>
                                        </div>
                                        <div class="user_info">
                                            <span>Jack Ronan</span>
                                            <p>Rashid left 50 mins ago</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="dz-chat-user">
                                    <div class="d-flex bd-highlight">
                                        <div class="img_cont">
                                            <img src="images/avatar/1.jpg" class="rounded-circle user_img" alt="">
                                            <span class="online_icon"></span>
                                        </div>
                                        <div class="user_info">
                                            <span>Jacob Tucker</span>
                                            <p>Kalid is online</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="dz-chat-user">
                                    <div class="d-flex bd-highlight">
                                        <div class="img_cont">
                                            <img src="images/avatar/2.jpg" class="rounded-circle user_img" alt="">
                                            <span class="online_icon offline"></span>
                                        </div>
                                        <div class="user_info">
                                            <span>James Logan</span>
                                            <p>Taherah left 7 mins ago</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="dz-chat-user">
                                    <div class="d-flex bd-highlight">
                                        <div class="img_cont">
                                            <img src="images/avatar/3.jpg" class="rounded-circle user_img" alt="">
                                            <span class="online_icon"></span>
                                        </div>
                                        <div class="user_info">
                                            <span>Joshua Weston</span>
                                            <p>Sami is online</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="name-first-letter">O</li>
                                <li class="dz-chat-user">
                                    <div class="d-flex bd-highlight">
                                        <div class="img_cont">
                                            <img src="images/avatar/4.jpg" class="rounded-circle user_img" alt="">
                                            <span class="online_icon offline"></span>
                                        </div>
                                        <div class="user_info">
                                            <span>Oliver Acker</span>
                                            <p>Nargis left 30 mins ago</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="dz-chat-user">
                                    <div class="d-flex bd-highlight">
                                        <div class="img_cont">
                                            <img src="images/avatar/5.jpg" class="rounded-circle user_img" alt="">
                                            <span class="online_icon offline"></span>
                                        </div>
                                        <div class="user_info">
                                            <span>Oscar Weston</span>
                                            <p>Rashid left 50 mins ago</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="card chat dz-chat-history-box d-none">
                        <div class="card-header chat-list-header text-center">
                            <a href="javascript:void(0);" class="dz-chat-history-back">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><polygon points="0 0 24 0 24 24 0 24"/><rect fill="#000000" opacity="0.3" transform="translate(15.000000, 12.000000) scale(-1, 1) rotate(-90.000000) translate(-15.000000, -12.000000) " x="14" y="7" width="2" height="10" rx="1"/><path d="M3.7071045,15.7071045 C3.3165802,16.0976288 2.68341522,16.0976288 2.29289093,15.7071045 C1.90236664,15.3165802 1.90236664,14.6834152 2.29289093,14.2928909 L8.29289093,8.29289093 C8.67146987,7.914312 9.28105631,7.90106637 9.67572234,8.26284357 L15.6757223,13.7628436 C16.0828413,14.136036 16.1103443,14.7686034 15.7371519,15.1757223 C15.3639594,15.5828413 14.7313921,15.6103443 14.3242731,15.2371519 L9.03007346,10.3841355 L3.7071045,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(9.000001, 11.999997) scale(-1, -1) rotate(90.000000) translate(-9.000001, -11.999997) "/></g></svg>
                            </a>
                            <div>
                                <h6 class="mb-1">Chat with Khelesh</h6>
                                <p class="mb-0 text-success">Online</p>
                            </div>
                            <div class="dropdown">
                                <a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24"/>
                                            <circle fill="#000000" cx="5" cy="12" r="2"/>
                                            <circle fill="#000000" cx="12" cy="12" r="2"/>
                                            <circle fill="#000000" cx="19" cy="12" r="2"/>
                                        </g>
                                    </svg>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li class="dropdown-item"><i class="fa fa-user-circle text-primary me-2"></i> View profile</li>
                                    <li class="dropdown-item"><i class="fa fa-users text-primary me-2"></i> Add to btn-close friends</li>
                                    <li class="dropdown-item"><i class="fa fa-plus text-primary me-2"></i> Add to group</li>
                                    <li class="dropdown-item"><i class="fa fa-ban text-primary me-2"></i> Block</li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body msg_card_body dz-scroll" id="DLAB_W_Contacts_Body3">
                            <div class="d-flex justify-content-start mb-4">
                                <div class="img_cont_msg">
                                    <img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="">
                                </div>
                                <div class="msg_cotainer">
                                    Hi, how are you samim?
                                    <span class="msg_time">8:40 AM, Today</span>
                                </div>
                            </div>
                            <div class="d-flex justify-content-end mb-4">
                                <div class="msg_cotainer_send">
                                    Hi Khalid i am good tnx how about you?
                                    <span class="msg_time_send">8:55 AM, Today</span>
                                </div>
                                <div class="img_cont_msg">
                                    <img src="images/avatar/2.jpg" class="rounded-circle user_img_msg" alt="">
                                </div>
                            </div>
                            <div class="d-flex justify-content-start mb-4">
                                <div class="img_cont_msg">
                                    <img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="">
                                </div>
                                <div class="msg_cotainer">
                                    I am good too, thank you for your chat template
                                    <span class="msg_time">9:00 AM, Today</span>
                                </div>
                            </div>
                            <div class="d-flex justify-content-end mb-4">
                                <div class="msg_cotainer_send">
                                    You are welcome
                                    <span class="msg_time_send">9:05 AM, Today</span>
                                </div>
                                <div class="img_cont_msg">
                                    <img src="images/avatar/2.jpg" class="rounded-circle user_img_msg" alt="">
                                </div>
                            </div>
                            <div class="d-flex justify-content-start mb-4">
                                <div class="img_cont_msg">
                                    <img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="">
                                </div>
                                <div class="msg_cotainer">
                                    I am looking for your next templates
                                    <span class="msg_time">9:07 AM, Today</span>
                                </div>
                            </div>
                            <div class="d-flex justify-content-end mb-4">
                                <div class="msg_cotainer_send">
                                    Ok, thank you have a good day
                                    <span class="msg_time_send">9:10 AM, Today</span>
                                </div>
                                <div class="img_cont_msg">
                                    <img src="images/avatar/2.jpg" class="rounded-circle user_img_msg" alt="">
                                </div>
                            </div>
                            <div class="d-flex justify-content-start mb-4">
                                <div class="img_cont_msg">
                                    <img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="">
                                </div>
                                <div class="msg_cotainer">
                                    Bye, see you
                                    <span class="msg_time">9:12 AM, Today</span>
                                </div>
                            </div>
                            <div class="d-flex justify-content-start mb-4">
                                <div class="img_cont_msg">
                                    <img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="">
                                </div>
                                <div class="msg_cotainer">
                                    Hi, how are you samim?
                                    <span class="msg_time">8:40 AM, Today</span>
                                </div>
                            </div>
                            <div class="d-flex justify-content-end mb-4">
                                <div class="msg_cotainer_send">
                                    Hi Khalid i am good tnx how about you?
                                    <span class="msg_time_send">8:55 AM, Today</span>
                                </div>
                                <div class="img_cont_msg">
                                    <img src="images/avatar/2.jpg" class="rounded-circle user_img_msg" alt="">
                                </div>
                            </div>
                            <div class="d-flex justify-content-start mb-4">
                                <div class="img_cont_msg">
                                    <img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="">
                                </div>
                                <div class="msg_cotainer">
                                    I am good too, thank you for your chat template
                                    <span class="msg_time">9:00 AM, Today</span>
                                </div>
                            </div>
                            <div class="d-flex justify-content-end mb-4">
                                <div class="msg_cotainer_send">
                                    You are welcome
                                    <span class="msg_time_send">9:05 AM, Today</span>
                                </div>
                                <div class="img_cont_msg">
                                    <img src="images/avatar/2.jpg" class="rounded-circle user_img_msg" alt="">
                                </div>
                            </div>
                            <div class="d-flex justify-content-start mb-4">
                                <div class="img_cont_msg">
                                    <img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="">
                                </div>
                                <div class="msg_cotainer">
                                    I am looking for your next templates
                                    <span class="msg_time">9:07 AM, Today</span>
                                </div>
                            </div>
                            <div class="d-flex justify-content-end mb-4">
                                <div class="msg_cotainer_send">
                                    Ok, thank you have a good day
                                    <span class="msg_time_send">9:10 AM, Today</span>
                                </div>
                                <div class="img_cont_msg">
                                    <img src="images/avatar/2.jpg" class="rounded-circle user_img_msg" alt="">
                                </div>
                            </div>
                            <div class="d-flex justify-content-start mb-4">
                                <div class="img_cont_msg">
                                    <img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="">
                                </div>
                                <div class="msg_cotainer">
                                    Bye, see you
                                    <span class="msg_time">9:12 AM, Today</span>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer type_msg">
                            <div class="input-group">
                                <textarea class="form-control" placeholder="Type your message..."></textarea>
                                <div class="input-group-append">
                                    <button type="button" class="btn btn-primary"><i class="fa fa-location-arrow"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="alerts" role="tabpanel">
                    <div class="card mb-sm-3 mb-md-0 contacts_card">
                        <div class="card-header chat-list-header text-center">
                            <a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg></a>
                            <div>
                                <h6 class="mb-1">Notications</h6>
                                <p class="mb-0">Show All</p>
                            </div>
                            <a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/><path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero"/></g></svg></a>
                        </div>
                        <div class="card-body contacts_body p-0 dz-scroll" id="DLAB_W_Contacts_Body1">
                            <ul class="contacts">
                                <li class="name-first-letter">SEVER STATUS</li>
                                <li class="active">
                                    <div class="d-flex bd-highlight">
                                        <div class="img_cont primary">KK</div>
                                        <div class="user_info">
                                            <span>David Nester Birthday</span>
                                            <p class="text-primary">Today</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="name-first-letter">SOCIAL</li>
                                <li>
                                    <div class="d-flex bd-highlight">
                                        <div class="img_cont success">RU</div>
                                        <div class="user_info">
                                            <span>Perfection Simplified</span>
                                            <p>Jame Smith commented on your status</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="name-first-letter">SEVER STATUS</li>
                                <li>
                                    <div class="d-flex bd-highlight">
                                        <div class="img_cont primary">AU</div>
                                        <div class="user_info">
                                            <span>AharlieKane</span>
                                            <p>Sami is online</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex bd-highlight">
                                        <div class="img_cont info">MO</div>
                                        <div class="user_info">
                                            <span>Athan Jacoby</span>
                                            <p>Nargis left 30 mins ago</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="card-footer"></div>
                    </div>
                </div>
                <div class="tab-pane fade" id="notes">
                    <div class="card mb-sm-3 mb-md-0 note_card">
                        <div class="card-header chat-list-header text-center">
                            <a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect fill="#000000" x="4" y="11" width="16" height="2" rx="1"/><rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-270.000000) translate(-12.000000, -12.000000) " x="4" y="11" width="16" height="2" rx="1"/></g></svg></a>
                            <div>
                                <h6 class="mb-1">Notes</h6>
                                <p class="mb-0">Add New Nots</p>
                            </div>
                            <a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/><path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero"/></g></svg></a>
                        </div>
                        <div class="card-body contacts_body p-0 dz-scroll" id="DLAB_W_Contacts_Body2">
                            <ul class="contacts">
                                <li class="active">
                                    <div class="d-flex bd-highlight">
                                        <div class="user_info">
                                            <span>New order placed..</span>
                                            <p>10 Aug 2020</p>
                                        </div>
                                        <div class="ms-auto">
                                            <a href="javascript:void(0);" class="btn btn-primary btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
                                            <a href="javascript:void(0);" class="btn btn-danger btn-xs sharp"><i class="fa fa-trash"></i></a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex bd-highlight">
                                        <div class="user_info">
                                            <span>Youtube, a video-sharing website..</span>
                                            <p>10 Aug 2020</p>
                                        </div>
                                        <div class="ms-auto">
                                            <a href="javascript:void(0);" class="btn btn-primary btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
                                            <a href="javascript:void(0);" class="btn btn-danger btn-xs sharp"><i class="fa fa-trash"></i></a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex bd-highlight">
                                        <div class="user_info">
                                            <span>john just buy your product..</span>
                                            <p>10 Aug 2020</p>
                                        </div>
                                        <div class="ms-auto">
                                            <a href="javascript:void(0);" class="btn btn-primary btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
                                            <a href="javascript:void(0);" class="btn btn-danger btn-xs sharp"><i class="fa fa-trash"></i></a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex bd-highlight">
                                        <div class="user_info">
                                            <span>Athan Jacoby</span>
                                            <p>10 Aug 2020</p>
                                        </div>
                                        <div class="ms-auto">
                                            <a href="javascript:void(0);" class="btn btn-primary btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
                                            <a href="javascript:void(0);" class="btn btn-danger btn-xs sharp"><i class="fa fa-trash"></i></a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--**********************************
        Chat box End
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
                            <div class="input-group search-area me-3">
                                <input type="text" class="form-control" placeholder="Search">
                                <span class="input-group-text"><a href="javascript:void(0)">
									<svg class="me-3 mb-1 user-search" width="15" height="15" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M8.625 16.3125C4.3875 16.3125 0.9375 12.8625 0.9375 8.625C0.9375 4.3875 4.3875 0.9375 8.625 0.9375C12.8625 0.9375 16.3125 4.3875 16.3125 8.625C16.3125 12.8625 12.8625 16.3125 8.625 16.3125ZM8.625 2.0625C5.0025 2.0625 2.0625 5.01 2.0625 8.625C2.0625 12.24 5.0025 15.1875 8.625 15.1875C12.2475 15.1875 15.1875 12.24 15.1875 8.625C15.1875 5.01 12.2475 2.0625 8.625 2.0625Z" fill="#2696FD"/>
										<path d="M16.5001 17.0626C16.3576 17.0626 16.2151 17.0101 16.1026 16.8976L14.6026 15.3976C14.3851 15.1801 14.3851 14.8201 14.6026 14.6026C14.8201 14.3851 15.1801 14.3851 15.3976 14.6026L16.8976 16.1026C17.1151 16.3201 17.1151 16.6801 16.8976 16.8976C16.7851 17.0101 16.6426 17.0626 16.5001 17.0626Z" fill="var(--primary)"/>
									</svg>
									</a></span>
                            </div>
                        </li>
                        <li class="nav-item dropdown notification_dropdown">
                            <a class="nav-link " href="javascript:void(0);" data-bs-toggle="dropdown">
                                <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M11 14.4375C9.1025 14.4375 7.5625 12.8975 7.5625 11C7.5625 9.1025 9.1025 7.5625 11 7.5625C12.8975 7.5625 14.4375 9.1025 14.4375 11C14.4375 12.8975 12.8975 14.4375 11 14.4375ZM11 8.9375C9.86333 8.9375 8.9375 9.86333 8.9375 11C8.9375 12.1367 9.86333 13.0625 11 13.0625C12.1367 13.0625 13.0625 12.1367 13.0625 11C13.0625 9.86333 12.1367 8.9375 11 8.9375Z" fill="var(--primary)"/>
                                    <path d="M13.9424 20.3408C13.7499 20.3408 13.5574 20.3133 13.3649 20.2674C12.7966 20.1116 12.3199 19.7541 12.0174 19.2499L11.9074 19.0666C11.3666 18.1316 10.6241 18.1316 10.0833 19.0666L9.98242 19.2408C9.67992 19.7541 9.20325 20.1208 8.63492 20.2674C8.05742 20.4233 7.46158 20.3408 6.95742 20.0383L5.38075 19.1308C4.82158 18.8099 4.41825 18.2874 4.24409 17.6549C4.07909 17.0224 4.16158 16.3716 4.48242 15.8124C4.74825 15.3449 4.82159 14.9233 4.66575 14.6574C4.50992 14.3916 4.11575 14.2358 3.57492 14.2358C2.23659 14.2358 1.14575 13.1449 1.14575 11.8066V10.1933C1.14575 8.85494 2.23659 7.7641 3.57492 7.7641C4.11575 7.7641 4.50992 7.60827 4.66575 7.34244C4.82159 7.0766 4.75742 6.65494 4.48242 6.18744C4.16158 5.62827 4.07909 4.96827 4.24409 4.34494C4.40909 3.71244 4.81242 3.18994 5.38075 2.8691L6.96658 1.9616C8.00242 1.34744 9.36825 1.70494 9.99158 2.7591L10.1016 2.94244C10.6424 3.87744 11.3849 3.87744 11.9258 2.94244L12.0266 2.76827C12.6499 1.70494 14.0158 1.34744 15.0608 1.97077L16.6374 2.87827C17.1966 3.1991 17.5999 3.7216 17.7741 4.3541C17.9391 4.9866 17.8566 5.63744 17.5357 6.1966C17.2699 6.6641 17.1966 7.08577 17.3524 7.3516C17.5083 7.61744 17.9024 7.77327 18.4433 7.77327C19.7816 7.77327 20.8724 8.8641 20.8724 10.2024V11.8158C20.8724 13.1541 19.7816 14.2449 18.4433 14.2449C17.9024 14.2449 17.5083 14.4008 17.3524 14.6666C17.1966 14.9324 17.2607 15.3541 17.5357 15.8216C17.8566 16.3808 17.9482 17.0408 17.7741 17.6641C17.6091 18.2966 17.2057 18.8191 16.6374 19.1399L15.0516 20.0474C14.7033 20.2399 14.3274 20.3408 13.9424 20.3408ZM10.9999 16.9491C11.8158 16.9491 12.5766 17.4624 13.0991 18.3699L13.1999 18.5441C13.3099 18.7366 13.4933 18.8741 13.7133 18.9291C13.9333 18.9841 14.1533 18.9566 14.3366 18.8466L15.9224 17.9299C16.1608 17.7924 16.3441 17.5633 16.4174 17.2883C16.4908 17.0133 16.4541 16.7291 16.3166 16.4908C15.7941 15.5924 15.7299 14.6666 16.1333 13.9608C16.5366 13.2549 17.3708 12.8516 18.4158 12.8516C19.0024 12.8516 19.4699 12.3841 19.4699 11.7974V10.1841C19.4699 9.6066 19.0024 9.12994 18.4158 9.12994C17.3708 9.12994 16.5366 8.7266 16.1333 8.02077C15.7299 7.31494 15.7941 6.3891 16.3166 5.49077C16.4541 5.25244 16.4908 4.96827 16.4174 4.69327C16.3441 4.41827 16.1699 4.19827 15.9316 4.0516L14.3458 3.1441C13.9516 2.90577 13.4291 3.04327 13.1908 3.4466L13.0899 3.62077C12.5674 4.52827 11.8066 5.0416 10.9908 5.0416C10.1749 5.0416 9.41408 4.52827 8.89158 3.62077L8.79075 3.43744C8.56158 3.05244 8.04825 2.91494 7.65408 3.1441L6.06825 4.06077C5.82992 4.19827 5.64658 4.42744 5.57325 4.70244C5.49992 4.97744 5.53658 5.2616 5.67408 5.49994C6.19658 6.39827 6.26075 7.3241 5.85742 8.02994C5.45408 8.73577 4.61992 9.1391 3.57492 9.1391C2.98825 9.1391 2.52075 9.6066 2.52075 10.1933V11.8066C2.52075 12.3841 2.98825 12.8608 3.57492 12.8608C4.61992 12.8608 5.45408 13.2641 5.85742 13.9699C6.26075 14.6758 6.19658 15.6016 5.67408 16.4999C5.53658 16.7383 5.49992 17.0224 5.57325 17.2974C5.64658 17.5724 5.82075 17.7924 6.05908 17.9391L7.64492 18.8466C7.83742 18.9658 8.06658 18.9933 8.27742 18.9383C8.49742 18.8833 8.68075 18.7366 8.79992 18.5441L8.90075 18.3699C9.42325 17.4716 10.1841 16.9491 10.9999 16.9491Z" fill="var(--primary)"/>
                                </svg>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <div id="DZ_W_TimeLine02" class="widget-timeline dz-scroll style-1  p-3 height370">
                                    <ul class="timeline">
                                        <li>
                                            <div class="timeline-badge primary"></div>
                                            <a class="timeline-panel text-muted" href="javascript:void(0);">
                                                <span>10 minutes ago</span>
                                                <h6 class="mb-0">Youtube, a video-sharing website, goes live <strong class="text-primary">$500</strong>.</h6>
                                            </a>
                                        </li>
                                        <li>
                                            <div class="timeline-badge info">
                                            </div>
                                            <a class="timeline-panel text-muted" href="javascript:void(0);">
                                                <span>20 minutes ago</span>
                                                <h6 class="mb-0">New order placed <strong class="text-info">#XF-2356.</strong></h6>
                                                <p class="mb-0">Quisque a consequat ante Sit amet magna at volutapt...</p>
                                            </a>
                                        </li>
                                        <li>
                                            <div class="timeline-badge danger">
                                            </div>
                                            <a class="timeline-panel text-muted" href="javascript:void(0);">
                                                <span>30 minutes ago</span>
                                                <h6 class="mb-0">john just buy your product <strong class="text-warning">Sell $250</strong></h6>
                                            </a>
                                        </li>
                                        <li>
                                            <div class="timeline-badge success">
                                            </div>
                                            <a class="timeline-panel text-muted" href="javascript:void(0);">
                                                <span>15 minutes ago</span>
                                                <h6 class="mb-0">StumbleUpon is acquired by eBay. </h6>
                                            </a>
                                        </li>
                                        <li>
                                            <div class="timeline-badge warning">
                                            </div>
                                            <a class="timeline-panel text-muted" href="javascript:void(0);">
                                                <span>20 minutes ago</span>
                                                <h6 class="mb-0">Mashable, a news website and blog, goes live.</h6>
                                            </a>
                                        </li>
                                        <li>
                                            <div class="timeline-badge dark">
                                            </div>
                                            <a class="timeline-panel text-muted" href="javascript:void(0);">
                                                <span>20 minutes ago</span>
                                                <h6 class="mb-0">Mashable, a news website and blog, goes live.</h6>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown notification_dropdown">
                            <a class="nav-link bell-icon " href="javascript:void(0);" role="button" data-bs-toggle="dropdown">
                                <svg class="bell-animi" width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M11.0183 18.8193C8.88246 18.8193 6.74663 18.4801 4.72079 17.8018C3.95079 17.5359 3.36413 16.9951 3.10746 16.2893C2.84163 15.5834 2.93329 14.8043 3.35496 14.1076L4.40913 12.3568C4.62913 11.9901 4.83079 11.2568 4.83079 10.8259V8.17676C4.83079 4.76676 7.6083 1.98926 11.0183 1.98926C14.4283 1.98926 17.2058 4.76676 17.2058 8.17676V10.8259C17.2058 11.2476 17.4075 11.9901 17.6275 12.3659L18.6725 14.1076C19.0666 14.7676 19.14 15.5651 18.8741 16.2893C18.6083 17.0134 18.0308 17.5634 17.3066 17.8018C15.29 18.4801 13.1541 18.8193 11.0183 18.8193ZM11.0183 3.36426C8.36913 3.36426 6.20579 5.51842 6.20579 8.17676V10.8259C6.20579 11.4951 5.93079 12.4851 5.59163 13.0626L4.53746 14.8134C4.33579 15.1526 4.28079 15.5101 4.39996 15.8126C4.50996 16.1243 4.78496 16.3626 5.16079 16.4909C8.99246 17.7743 13.0533 17.7743 16.885 16.4909C17.215 16.3809 17.4716 16.1334 17.5908 15.8034C17.71 15.4734 17.6825 15.1159 17.4991 14.8134L16.445 13.0626C16.0966 12.4668 15.8308 11.4859 15.8308 10.8168V8.17676C15.8308 5.51842 13.6766 3.36426 11.0183 3.36426Z" fill="var(--primary)"/>
                                    <path d="M12.7232 3.61203C12.6591 3.61203 12.5949 3.60286 12.5307 3.58453C12.2649 3.5112 12.0082 3.4562 11.7607 3.41953C10.9816 3.3187 10.2299 3.3737 9.52407 3.58453C9.2674 3.66703 8.9924 3.58453 8.81823 3.39203C8.64407 3.19953 8.58907 2.92453 8.6899 2.67703C9.06573 1.71453 9.9824 1.08203 11.0274 1.08203C12.0724 1.08203 12.9891 1.70536 13.3649 2.67703C13.4566 2.92453 13.4107 3.19953 13.2366 3.39203C13.0991 3.5387 12.9066 3.61203 12.7232 3.61203Z" fill="var(--primary)"/>
                                    <path d="M11.0183 20.9092C10.1108 20.9092 9.23081 20.5425 8.58914 19.9008C7.94748 19.2592 7.58081 18.3792 7.58081 17.4717H8.95581C8.95581 18.0125 9.17581 18.5442 9.56081 18.9292C9.94581 19.3142 10.4775 19.5342 11.0183 19.5342C12.155 19.5342 13.0808 18.6083 13.0808 17.4717H14.4558C14.4558 19.3692 12.9158 20.9092 11.0183 20.9092Z" fill="var(--primary)"/>
                                </svg>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end of-visible">
                                <div class="dropdown-header">
                                    <h4 class="title mb-0">Notification</h4>
                                    <a href="javascript:void(0);" class="d-none"><i class="flaticon-381-settings-6"></i></a>
                                </div>
                                <div id="DZ_W_Notification1" class="widget-media dz-scroll p-3" style="height:380px;">
                                    <ul class="timeline">
                                        <li>
                                            <div class="timeline-panel">
                                                <div class="media me-2">
                                                    <img alt="image" width="50" src="images/avatar/1.jpg">
                                                </div>
                                                <div class="media-body">
                                                    <h6 class="mb-1">Dr sultads Send you Photo</h6>
                                                    <small class="d-block">29 July 2020 - 02:26 PM</small>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="timeline-panel">
                                                <div class="media me-2 media-info">
                                                    KG
                                                </div>
                                                <div class="media-body">
                                                    <h6 class="mb-1">Resport created successfully</h6>
                                                    <small class="d-block">29 July 2020 - 02:26 PM</small>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="timeline-panel">
                                                <div class="media me-2 media-success">
                                                    <i class="fa fa-home"></i>
                                                </div>
                                                <div class="media-body">
                                                    <h6 class="mb-1">Reminder : Treatment Time!</h6>
                                                    <small class="d-block">29 July 2020 - 02:26 PM</small>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="timeline-panel">
                                                <div class="media me-2">
                                                    <img alt="image" width="50" src="images/avatar/1.jpg">
                                                </div>
                                                <div class="media-body">
                                                    <h6 class="mb-1">Dr sultads Send you Photo</h6>
                                                    <small class="d-block">29 July 2020 - 02:26 PM</small>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="timeline-panel">
                                                <div class="media me-2 media-danger">
                                                    KG
                                                </div>
                                                <div class="media-body">
                                                    <h6 class="mb-1">Resport created successfully</h6>
                                                    <small class="d-block">29 July 2020 - 02:26 PM</small>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="timeline-panel">
                                                <div class="media me-2 media-primary">
                                                    <i class="fa fa-home"></i>
                                                </div>
                                                <div class="media-body">
                                                    <h6 class="mb-1">Reminder : Treatment Time!</h6>
                                                    <small class="d-block">29 July 2020 - 02:26 PM</small>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <a class="all-notification" href="javascript:void(0);">See all notifications <i class="ti-arrow-end"></i></a>
                            </div>
                        </li>
                        <li class="nav-item dropdown notification_dropdown">
                            <a class="nav-link bell-link" href="javascript:void(0);">
                                <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15.5833 19.4788H6.41659C3.07075 19.4788 1.14575 17.5538 1.14575 14.208V7.79134C1.14575 4.44551 3.07075 2.52051 6.41659 2.52051H15.5833C18.9291 2.52051 20.8541 4.44551 20.8541 7.79134V14.208C20.8541 17.5538 18.9291 19.4788 15.5833 19.4788ZM6.41659 3.89551C3.79492 3.89551 2.52075 5.16967 2.52075 7.79134V14.208C2.52075 16.8297 3.79492 18.1038 6.41659 18.1038H15.5833C18.2049 18.1038 19.4791 16.8297 19.4791 14.208V7.79134C19.4791 5.16967 18.2049 3.89551 15.5833 3.89551H6.41659Z" fill="var(--primary)"/>
                                    <path d="M10.9999 11.797C10.2299 11.797 9.45071 11.5587 8.85488 11.0728L5.98571 8.78115C5.69238 8.54282 5.63738 8.11198 5.87571 7.81865C6.11405 7.52532 6.54488 7.47032 6.83822 7.70865L9.70737 10.0003C10.404 10.5595 11.5865 10.5595 12.2832 10.0003L15.1524 7.70865C15.4457 7.47032 15.8857 7.51615 16.1149 7.81865C16.3532 8.11198 16.3074 8.55199 16.0049 8.78115L13.1357 11.0728C12.549 11.5587 11.7699 11.797 10.9999 11.797Z" fill="var(--primary)"/>
                                </svg>
                            </a>
                        </li>
                        <li class="nav-item">
                            <div class="dropdown header-profile2">
                                <a class="nav-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <div class="header-info2 d-flex align-items-center">
                                        <div class="d-flex align-items-center sidebar-info">
                                            <div>
                                                <h4 class="mb-0">Nella Vita</h4>
                                                <span class="d-block text-end">Admin</span>
                                            </div>
                                        </div>
                                        <img src="images/user.jpg" alt="">
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
                                    <a href="chat.html" class="dropdown-item ai-icon ">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="svg-main-icon">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24"/>
                                                <path d="M21.9999843,15.009808 L22.0249378,15 L22.0249378,19.5857864 C22.0249378,20.1380712 21.5772226,20.5857864 21.0249378,20.5857864 C20.7597213,20.5857864 20.5053674,20.4804296 20.317831,20.2928932 L18.0249378,18 L5,18 C3.34314575,18 2,16.6568542 2,15 L2,6 C2,4.34314575 3.34314575,3 5,3 L19,3 C20.6568542,3 22,4.34314575 22,6 L22,15 C22,15.0032706 21.9999948,15.0065399 21.9999843,15.009808 Z M6.16794971,10.5547002 C7.67758127,12.8191475 9.64566871,14 12,14 C14.3543313,14 16.3224187,12.8191475 17.8320503,10.5547002 C18.1384028,10.0951715 18.0142289,9.47430216 17.5547002,9.16794971 C17.0951715,8.86159725 16.4743022,8.98577112 16.1679497,9.4452998 C15.0109146,11.1808525 13.6456687,12 12,12 C10.3543313,12 8.9890854,11.1808525 7.83205029,9.4452998 C7.52569784,8.98577112 6.90482849,8.86159725 6.4452998,9.16794971 C5.98577112,9.47430216 5.86159725,10.0951715 6.16794971,10.5547002 Z" fill="var(--primary)"/>
                                            </g>
                                        </svg>
                                        <span class="ms-2">Message </span>
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
                        <li class="nav-item dropdown notification_dropdown">
                            <a class="nav-link  menu-wallet wallet-arrow  ms-3 me-0" href="javascript:void(0);">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" style="transform: rotate(180deg);">
                                    <path d="M14.4301 18.8201C14.2401 18.8201 14.0501 18.7501 13.9001 18.6001C13.6101 18.3101 13.6101 17.8301 13.9001 17.5401L19.4401 12.0001L13.9001 6.46012C13.6101 6.17012 13.6101 5.69012 13.9001 5.40012C14.1901 5.11012 14.6701 5.11012 14.9601 5.40012L21.0301 11.4701C21.3201 11.7601 21.3201 12.2401 21.0301 12.5301L14.9601 18.6001C14.8101 18.7501 14.6201 18.8201 14.4301 18.8201Z" fill="white"/>
                                    <path d="M20.33 12.75H3.5C3.09 12.75 2.75 12.41 2.75 12C2.75 11.59 3.09 11.25 3.5 11.25H20.33C20.74 11.25 21.08 11.59 21.08 12C21.08 12.41 20.74 12.75 20.33 12.75Z" fill="white"/>
                                </svg>

                            </a>
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
                <li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
                        <div class="menu-icon">
                            <svg id="icon-home" width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M16.3077 20.8538H5.69266C3.181 20.8538 1.146 18.8097 1.146 16.298V9.50548C1.146 8.25882 1.916 6.69132 2.906 5.92132L7.84683 2.07132C9.33183 0.916317 11.706 0.861317 13.246 1.94298L18.911 5.91215C20.0018 6.67298 20.8543 8.30465 20.8543 9.63382V16.3072C20.8543 18.8097 18.8193 20.8538 16.3077 20.8538ZM8.69016 3.15298L3.74933 7.00298C3.0985 7.51632 2.521 8.68048 2.521 9.50548V16.298C2.521 18.0488 3.94183 19.4788 5.69266 19.4788H16.3077C18.0585 19.4788 19.4793 18.058 19.4793 16.3072V9.63382C19.4793 8.75382 18.8468 7.53465 18.1227 7.03965L12.4577 3.07048C11.4127 2.33715 9.68933 2.37382 8.69016 3.15298Z" fill="#9C99FF"/>
                                <path d="M11 17.1875C10.6242 17.1875 10.3125 16.8758 10.3125 16.5V13.75C10.3125 13.3742 10.6242 13.0625 11 13.0625C11.3758 13.0625 11.6875 13.3742 11.6875 13.75V16.5C11.6875 16.8758 11.3758 17.1875 11 17.1875Z" fill="#9C99FF"/>
                            </svg>
                        </div>
                        <span class="nav-text">Dashboard</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="index.html">Dashboard Light</a></li>
                        <li><a href="index-2.html">Dashboard Dark</a></li>
                        <li><a href="index-3.html">Dashboard 2</a></li>
                        <li><a href="banking.html">Banking</a></li>
                        <li><a href="ticketing.html">Ticketing</a></li>
                        <li><a href="crypto.html">Crypto</a></li>
                        <li><a href="invoice.html">Invoice</a></li>
                        <li><a href="contact.html">Contact</a></li>
                        <li><a href="kanban.html">Kanban</a></li>
                    </ul>

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
                        <span class="nav-text">File Manager</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="file-manager.html">File Manager</a></li>
                        <li><a href="user.html">User</a></li>
                        <li><a href="celandar.html">Calendar</a></li>
                        <li><a href="to-do-list.html">To Do List</a></li>
                        <li><a href="chat.html">Chat</a></li>
                        <li><a href="activity.html">Activity</a></li>
                    </ul>
                </li>
                <li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
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
                <li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
                        <div class="menu-icon">
                            <svg id="icon-chart"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" width="22" height="22" stroke-width="3"><g id="_17_Pie_Chart" data-name="17 Pie Chart"><path d="M4.648,44.321C-3.759,25.663,9.471,3.466,29.933,2.083A1.017,1.017,0,0,1,31,3.08V29.8a1,1,0,0,1-.5.866L6.06,44.776A1.016,1.016,0,0,1,4.648,44.321ZM29,4.17C10.893,6.094-.809,25.566,6.036,42.48L29,29.223Zm1.5,26.5L6.06,44.776a.922.922,0,0,1-1.412-.456M32,62A29.881,29.881,0,0,1,6.6,47.963a1.015,1.015,0,0,1,.346-1.4L31,32.684a1,1,0,0,1,1,0l24.78,14.31a1.015,1.015,0,0,1,.336,1.414A29.94,29.94,0,0,1,32,62ZM8.867,47.767a27.995,27.995,0,0,0,45.98.42L31.5,34.7ZM57.73,45.236,33.5,31.246a1,1,0,0,1-.5-.866V3.08a1.017,1.017,0,0,1,1.067-1C54.714,3.479,67.988,26.091,59.134,44.8A.968.968,0,0,1,57.73,45.236ZM35,29.8,57.772,42.951C65.015,25.99,53.3,6.114,35,4.17Z" fill="#9C99FF"/></g></svg>
                        </div>
                        <span class="nav-text">Charts</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="chart-flot.html">Flot</a></li>
                        <li><a href="chart-morris.html">Morris</a></li>
                        <li><a href="chart-chartjs.html">Chartjs</a></li>
                        <li><a href="chart-chartist.html">Chartist</a></li>
                        <li><a href="chart-sparkline.html">Sparkline</a></li>
                        <li><a href="chart-peity.html">Peity</a></li>
                    </ul>
                </li>
                <li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
                        <div class="menu-icon">
                            <svg  id="icon-bootstrap" width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M5.50026 20.8544C5.22526 20.8544 4.93193 20.827 4.6386 20.772C4.48276 20.7353 4.34526 20.6986 4.20776 20.6619C4.05193 20.6161 3.90525 20.5611 3.76775 20.5061C3.73108 20.4969 3.70361 20.4786 3.67611 20.4694C3.35527 20.3044 3.08026 20.1395 2.83276 19.9561C2.81443 19.947 2.80527 19.9286 2.78694 19.9194C2.64944 19.8094 2.52109 19.6995 2.40193 19.5711C2.27359 19.4336 2.18192 19.3236 2.08109 19.2136C1.87025 18.9386 1.69609 18.6636 1.54026 18.3428C1.52192 18.3153 1.51278 18.2786 1.50361 18.2419C1.44861 18.1136 1.40276 17.9853 1.36609 17.8478C1.31109 17.6553 1.27442 17.5269 1.24692 17.3894C1.18275 17.0686 1.15527 16.7844 1.15527 16.5094V4.13444C1.15527 2.38361 2.38361 1.15527 4.13444 1.15527H6.88444C8.63527 1.15527 9.86361 2.38361 9.86361 4.13444V16.5003C9.86361 17.6369 9.4236 18.7186 8.6261 19.5344C8.47944 19.6811 8.36942 19.7819 8.26859 19.8644C7.97526 20.1211 7.59944 20.3503 7.1961 20.5153C7.10444 20.552 6.99443 20.5978 6.87526 20.6436C6.4261 20.7811 5.9586 20.8544 5.50026 20.8544ZM4.34526 19.2503C4.43692 19.2869 4.52861 19.3145 4.62027 19.342C4.72111 19.3695 4.82193 19.3969 4.92276 19.4244C5.42693 19.5161 5.96777 19.4886 6.39861 19.342C6.46278 19.3145 6.55442 19.2869 6.63692 19.2503C6.93026 19.1311 7.16859 18.9845 7.37942 18.8103C7.47109 18.737 7.53527 18.6728 7.59944 18.6178C8.17694 18.0219 8.47943 17.2886 8.47943 16.5094V4.13444C8.47943 3.14444 7.86527 2.53027 6.87526 2.53027H4.12526C3.13526 2.53027 2.5211 3.14444 2.5211 4.13444V16.5003C2.5211 16.6928 2.53944 16.8944 2.58527 17.1053C2.6036 17.1878 2.63109 17.2886 2.65859 17.3986C2.69526 17.4994 2.72277 17.5819 2.75944 17.6736C2.77777 17.7011 2.78692 17.7286 2.79609 17.7469C2.80525 17.7653 2.81442 17.7928 2.82359 17.8111C2.93359 18.0128 3.04361 18.1869 3.16278 18.3428C3.22694 18.4161 3.30944 18.5078 3.39194 18.5994C3.49278 18.7094 3.57526 18.7736 3.66693 18.8469C3.6761 18.8561 3.69444 18.8653 3.70361 18.8744C3.85027 18.9844 4.01526 19.0853 4.20776 19.1861C4.22609 19.1953 4.24443 19.1953 4.26276 19.2044C4.28109 19.2136 4.30859 19.2319 4.34526 19.2503Z" fill="#9C99FF"/>
                                <path d="M17.875 20.8544H5.5C5.12417 20.8544 4.8125 20.5428 4.8125 20.1669C4.8125 19.7911 5.12417 19.4794 5.5 19.4794C5.82083 19.4794 6.13251 19.4336 6.39834 19.342C6.46251 19.3145 6.55416 19.2869 6.63666 19.2503C6.92999 19.1311 7.16832 18.9844 7.37916 18.8103C7.47082 18.7369 7.53501 18.6728 7.59917 18.6178L13.8692 12.3569C13.9975 12.2286 14.1717 12.1553 14.355 12.1553H17.875C19.6258 12.1553 20.8542 13.3836 20.8542 15.1344V17.8844C20.8542 19.6261 19.6258 20.8544 17.875 20.8544ZM8.67166 19.4794H17.875C18.865 19.4794 19.4792 18.8653 19.4792 17.8753V15.1253C19.4792 14.1353 18.865 13.5211 17.875 13.5211H14.6392L8.67166 19.4794Z" fill="#9C99FF"/>
                                <path d="M4.40902 20.6894C4.34486 20.6894 4.2807 20.6802 4.21653 20.6619C3.5382 20.4602 2.91487 20.0844 2.41987 19.5802C1.92487 19.0944 1.54903 18.471 1.34736 17.7927C1.23736 17.426 1.43903 17.0502 1.80569 16.9402C2.17236 16.8302 2.5482 17.0319 2.66736 17.3894C2.9607 18.3244 3.69402 19.0577 4.62902 19.351C4.98652 19.461 5.1882 19.846 5.0782 20.2127C4.97737 20.4969 4.70236 20.6894 4.40902 20.6894Z" fill="#9C99FF"/>
                                <path d="M8.12148 19.7444C7.94731 19.7444 7.77315 19.6803 7.63565 19.5428C7.36982 19.277 7.36067 18.8461 7.6265 18.5711C8.1765 18.0119 8.47899 17.2694 8.47899 16.4903V7.63528C8.47899 7.45195 8.55233 7.27778 8.68066 7.14945L11.1648 4.66527C12.3657 3.46444 14.1807 3.46444 15.3815 4.66527L17.3248 6.60862C18.5623 7.84612 18.5623 9.58777 17.3248 10.8253L8.60734 19.5336C8.46984 19.6803 8.29565 19.7444 8.12148 19.7444ZM9.85399 7.9286V16.3528L16.3532 9.86277C17.0498 9.16611 17.0498 8.29528 16.3532 7.58944L14.4098 5.64611C13.7223 4.95861 12.824 4.95861 12.1365 5.64611L9.85399 7.9286Z" fill="#9C99FF"/>
                                <path d="M5.49967 18.1038C4.61967 18.1038 3.89551 17.3797 3.89551 16.4997C3.89551 15.6197 4.61967 14.8955 5.49967 14.8955C6.37967 14.8955 7.10384 15.6197 7.10384 16.4997C7.10384 17.3797 6.37967 18.1038 5.49967 18.1038ZM5.49967 16.2705C5.37134 16.2705 5.27051 16.3713 5.27051 16.4997C5.27051 16.7563 5.72884 16.7563 5.72884 16.4997C5.72884 16.3713 5.62801 16.2705 5.49967 16.2705Z" fill="#9C99FF"/>
                            </svg>
                        </div>
                        <span class="nav-text">Bootstrap</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="ui-accordion.html">Accordion</a></li>
                        <li><a href="ui-alert.html">Alert</a></li>
                        <li><a href="ui-badge.html">Badge</a></li>
                        <li><a href="ui-button.html">Button</a></li>
                        <li><a href="ui-modal.html">Modal</a></li>
                        <li><a href="ui-button-group.html">Button Group</a></li>
                        <li><a href="ui-list-group.html">List Group</a></li>
                        <li><a href="ui-card.html">Cards</a></li>
                        <li><a href="ui-carousel.html">Carousel</a></li>
                        <li><a href="ui-dropdown.html">Dropdown</a></li>
                        <li><a href="ui-popover.html">Popover</a></li>
                        <li><a href="ui-progressbar.html">Progressbar</a></li>
                        <li><a href="ui-tab.html">Tab</a></li>
                        <li><a href="ui-typography.html">Typography</a></li>
                        <li><a href="ui-pagination.html">Pagination</a></li>
                        <li><a href="ui-grid.html">Grid</a></li>

                    </ul>
                </li>
                <li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
                        <div class="menu-icon">
                            <svg id="icon-forms" width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M11.0001 16.3905C10.7709 16.3905 10.5326 16.308 10.3492 16.143L7.98425 14.0713C7.09508 13.2921 6.97591 11.9538 7.71841 11.028C8.47008 10.093 9.80841 9.9188 10.7709 10.643L11.0001 10.8171L11.2384 10.6338C12.2009 9.90963 13.5392 10.0838 14.2909 11.0188C15.0334 11.9446 14.9142 13.283 14.0251 14.0621L11.6601 16.1338C11.4676 16.308 11.2292 16.3905 11.0001 16.3905ZM8.88258 13.0355L11.0001 14.8871L13.1176 13.0355C13.4567 12.7421 13.5026 12.238 13.2184 11.8896C12.9342 11.5321 12.4301 11.468 12.0634 11.743L11.4126 12.2288C11.1651 12.4121 10.8351 12.4121 10.5876 12.2288L9.93675 11.743C9.57925 11.468 9.06591 11.5321 8.78175 11.8896C8.50675 12.238 8.55258 12.7421 8.88258 13.0355Z" fill="#9C99FF"/>
                                <path d="M15.5835 20.8538H6.41683C2.37433 20.8538 1.146 19.6255 1.146 15.583V6.41634C1.146 2.37384 2.37433 1.14551 6.41683 1.14551H7.79183C9.396 1.14551 9.90016 1.66801 10.5418 2.52051L11.9168 4.35384C12.2193 4.75717 12.2652 4.81217 12.8335 4.81217H15.5835C19.626 4.81217 20.8543 6.04051 20.8543 10.083V15.583C20.8543 19.6255 19.626 20.8538 15.5835 20.8538ZM6.41683 2.52051C3.13516 2.52051 2.521 3.14384 2.521 6.41634V15.583C2.521 18.8555 3.13516 19.4788 6.41683 19.4788H15.5835C18.8652 19.4788 19.4793 18.8555 19.4793 15.583V10.083C19.4793 6.81051 18.8652 6.18717 15.5835 6.18717H12.8335C11.6602 6.18717 11.2752 5.78384 10.8168 5.17884L9.44183 3.34551C8.96516 2.71301 8.8185 2.52051 7.79183 2.52051H6.41683V2.52051Z" fill="#9C99FF"/>
                            </svg>
                        </div>
                        <span class="nav-text">Plugins</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="uc-select2.html">Select 2</a></li>
                        <li><a href="uc-nestable.html">Nestedable</a></li>
                        <li><a href="uc-noui-slider.html">Noui Slider</a></li>
                        <li><a href="uc-sweetalert.html">Sweet Alert</a></li>
                        <li><a href="uc-toastr.html">Toastr</a></li>
                        <li><a href="map-jqvmap.html">Jqv Map</a></li>
                        <li><a href="uc-lightgallery.html">Light Gallery</a></li>
                    </ul>
                </li>
                <li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
                        <div class="menu-icon">
                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M6.41683 9.85433H4.5835C2.36516 9.85433 1.146 8.63516 1.146 6.41683V4.5835C1.146 2.36516 2.36516 1.146 4.5835 1.146H6.41683C8.63516 1.146 9.85433 2.36516 9.85433 4.5835V6.41683C9.85433 8.63516 8.63516 9.85433 6.41683 9.85433ZM4.5835 2.521C3.13516 2.521 2.521 3.13516 2.521 4.5835V6.41683C2.521 7.86516 3.13516 8.47933 4.5835 8.47933H6.41683C7.86516 8.47933 8.47933 7.86516 8.47933 6.41683V4.5835C8.47933 3.13516 7.86516 2.521 6.41683 2.521H4.5835Z" fill="#9C99FF"/>
                                <path d="M17.4168 9.85433H15.5835C13.3652 9.85433 12.146 8.63516 12.146 6.41683V4.5835C12.146 2.36516 13.3652 1.146 15.5835 1.146H17.4168C19.6352 1.146 20.8543 2.36516 20.8543 4.5835V6.41683C20.8543 8.63516 19.6352 9.85433 17.4168 9.85433ZM15.5835 2.521C14.1352 2.521 13.521 3.13516 13.521 4.5835V6.41683C13.521 7.86516 14.1352 8.47933 15.5835 8.47933H17.4168C18.8652 8.47933 19.4793 7.86516 19.4793 6.41683V4.5835C19.4793 3.13516 18.8652 2.521 17.4168 2.521H15.5835Z" fill="#9C99FF"/>
                                <path d="M17.4168 20.8543H15.5835C13.3652 20.8543 12.146 19.6352 12.146 17.4168V15.5835C12.146 13.3652 13.3652 12.146 15.5835 12.146H17.4168C19.6352 12.146 20.8543 13.3652 20.8543 15.5835V17.4168C20.8543 19.6352 19.6352 20.8543 17.4168 20.8543ZM15.5835 13.521C14.1352 13.521 13.521 14.1352 13.521 15.5835V17.4168C13.521 18.8652 14.1352 19.4793 15.5835 19.4793H17.4168C18.8652 19.4793 19.4793 18.8652 19.4793 17.4168V15.5835C19.4793 14.1352 18.8652 13.521 17.4168 13.521H15.5835Z" fill="#9C99FF"/>
                                <path d="M6.41683 20.8543H4.5835C2.36516 20.8543 1.146 19.6352 1.146 17.4168V15.5835C1.146 13.3652 2.36516 12.146 4.5835 12.146H6.41683C8.63516 12.146 9.85433 13.3652 9.85433 15.5835V17.4168C9.85433 19.6352 8.63516 20.8543 6.41683 20.8543ZM4.5835 13.521C3.13516 13.521 2.521 14.1352 2.521 15.5835V17.4168C2.521 18.8652 3.13516 19.4793 4.5835 19.4793H6.41683C7.86516 19.4793 8.47933 18.8652 8.47933 17.4168V15.5835C8.47933 14.1352 7.86516 13.521 6.41683 13.521H4.5835Z" fill="#9C99FF"/>
                            </svg>
                        </div>
                        <span class="nav-text">Widget</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="widget-chart.html">Chart</a></li>
                        <li><a href="widget-card.html">Card</a></li>
                        <li><a href="widget-list.html">List</a></li>
                    </ul>
                </li>
                <li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
                        <div class="menu-icon">
                            <svg id="Layer_1" height="22" viewBox="0 0 512 512" width="22" xmlns="http://www.w3.org/2000/svg" data-name="Layer 1"><path d="m383.7 108.665-105.652-106.305a8 8 0 0 0 -5.674-2.36h-231.374a33.038 33.038 0 0 0 -33 33v446a33.038 33.038 0 0 0 33 33h312.029a33.038 33.038 0 0 0 33-33v-156.2l104.287-104.289a46.879 46.879 0 1 0 -66.3-66.3l-37.99 37.99v-75.9a8 8 0 0 0 -2.326-5.636zm14.74 91.751 43.671 43.671-153.1 153.1-43.671-43.671zm22.064-22.065 43.671 43.671-10.751 10.751-43.668-43.673zm-182.396 190.549 35.36 35.361-44.128 8.228zm46.219-337.525 69.9 70.327h-69.9zm85.702 447.625a17.019 17.019 0 0 1 -17 17h-312.029a17.019 17.019 0 0 1 -17-17v-446a17.019 17.019 0 0 1 17-17h227.327v93.7a8 8 0 0 0 8 8h93.7v88.5l-142.889 142.893a8 8 0 0 0 -2.186 4.079l-13.634 67.779a8 8 0 0 0 9.309 9.442l68.619-12.793a8 8 0 0 0 4.191-2.207l76.592-76.593zm108.971-315.474a30.994 30.994 0 0 1 0 43.671l-3.512 3.512-43.67-43.671 3.511-3.512a30.915 30.915 0 0 1 43.671 0zm-276.96 211.481a8 8 0 0 1 -8 8h-124.903a8 8 0 0 1 0-16h124.9a8 8 0 0 1 8.003 8zm-140.9-69.72a8 8 0 0 1 8-8h165.035a8 8 0 0 1 0 16h-165.038a8 8 0 0 1 -8-8zm0-69.72a8 8 0 0 1 8-8h255.752a8 8 0 1 1 0 16h-255.755a8 8 0 0 1 -8-8zm0-69.719a8 8 0 0 1 8-8h255.752a8 8 0 0 1 0 16h-255.755a8 8 0 0 1 -8-8zm0-69.72a8 8 0 0 1 8-8h169.352a8 8 0 0 1 0 16h-169.355a8 8 0 0 1 -8-8z" fill="#9C99FF"/></svg>
                        </div>
                        <span class="nav-text">Forms</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="form-element.html">Form Elements</a></li>
                        <li><a href="form-wizard.html">Wizard</a></li>
                        <li><a href="form-ckeditor.html">CkEditor</a></li>
                        <li><a href="form-pickers.html">Pickers</a></li>
                        <li><a href="form-validation.html">Form Validate</a></li>
                    </ul>
                </li>
                <li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
                        <div class="menu-icon">
                            <svg id="icon-table" width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M13.7502 11.8711H7.3335C6.95766 11.8711 6.646 11.5594 6.646 11.1836C6.646 10.8078 6.95766 10.4961 7.3335 10.4961H13.7502C14.126 10.4961 14.4377 10.8078 14.4377 11.1836C14.4377 11.5594 14.126 11.8711 13.7502 11.8711Z" fill="#9C99FF"/>
                                <path d="M11.3485 15.5371H7.3335C6.95766 15.5371 6.646 15.2254 6.646 14.8496C6.646 14.4738 6.95766 14.1621 7.3335 14.1621H11.3485C11.7243 14.1621 12.036 14.4738 12.036 14.8496C12.036 15.2254 11.7243 15.5371 11.3485 15.5371Z" fill="#9C99FF"/>
                                <path d="M12.8335 6.18717H9.16683C8.28683 6.18717 6.646 6.18717 6.646 3.66634C6.646 1.14551 8.28683 1.14551 9.16683 1.14551H12.8335C13.7135 1.14551 15.3543 1.14551 15.3543 3.66634C15.3543 4.54634 15.3543 6.18717 12.8335 6.18717ZM9.16683 2.52051C8.25933 2.52051 8.021 2.52051 8.021 3.66634C8.021 4.81217 8.25933 4.81217 9.16683 4.81217H12.8335C13.9793 4.81217 13.9793 4.57384 13.9793 3.66634C13.9793 2.52051 13.741 2.52051 12.8335 2.52051H9.16683Z" fill="#9C99FF"/>
                                <path d="M13.75 20.8545H8.25C3.09833 20.8545 2.0625 18.4895 2.0625 14.6671V9.16705C2.0625 4.98705 3.575 3.19955 7.29667 3.00705C7.66333 2.98872 8.0025 3.27289 8.02083 3.65789C8.03917 4.04288 7.74583 4.35455 7.37 4.37288C4.76667 4.51955 3.4375 5.29872 3.4375 9.16705V14.6671C3.4375 18.0587 4.10667 19.4795 8.25 19.4795H13.75C17.8933 19.4795 18.5625 18.0587 18.5625 14.6671V9.16705C18.5625 5.29872 17.2333 4.51955 14.63 4.37288C14.2542 4.35455 13.9608 4.02455 13.9792 3.64872C13.9975 3.27289 14.3275 2.97955 14.7033 2.99789C18.425 3.19955 19.9375 4.98705 19.9375 9.15788V14.6579C19.9375 18.4895 18.9017 20.8545 13.75 20.8545Z" fill="#9C99FF"/>
                            </svg>
                        </div>
                        <span class="nav-text">Table</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="table-bootstrap-basic.html">Bootstrap</a></li>
                        <li><a href="table-datatable-basic.html">Datatable</a></li>
                    </ul>
                </li>
                <li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
                        <div class="menu-icon">
                            <svg  id="icon-pages" width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M13.7502 20.8538H8.25016C3.27266 20.8538 1.146 18.7272 1.146 13.7497V8.24967C1.146 3.27217 3.27266 1.14551 8.25016 1.14551H13.7502C18.7277 1.14551 20.8543 3.27217 20.8543 8.24967V13.7497C20.8543 18.7272 18.7277 20.8538 13.7502 20.8538ZM8.25016 2.52051C4.02433 2.52051 2.521 4.02384 2.521 8.24967V13.7497C2.521 17.9755 4.02433 19.4788 8.25016 19.4788H13.7502C17.976 19.4788 19.4793 17.9755 19.4793 13.7497V8.24967C19.4793 4.02384 17.976 2.52051 13.7502 2.52051H8.25016Z" fill="#9C99FF"/>
                                <path d="M20.1668 9.85449H1.8335C1.45766 9.85449 1.146 9.54283 1.146 9.16699C1.146 8.79116 1.45766 8.47949 1.8335 8.47949H20.1668C20.5427 8.47949 20.8543 8.79116 20.8543 9.16699C20.8543 9.54283 20.5427 9.85449 20.1668 9.85449Z" fill="#9C99FF"/>
                                <path d="M11 20.8545C10.6242 20.8545 10.3125 20.5428 10.3125 20.167V9.16699C10.3125 8.79116 10.6242 8.47949 11 8.47949C11.3758 8.47949 11.6875 8.79116 11.6875 9.16699V20.167C11.6875 20.5428 11.3758 20.8545 11 20.8545Z" fill="#9C99FF"/>
                            </svg>
                        </div>
                        <span class="nav-text">Pages</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="page-login.html">Login</a></li>
                        <li><a href="page-register.html">Register</a></li>
                        <li><a class="has-arrow" href="javascript:void(0);" aria-expanded="false">Error</a>
                            <ul aria-expanded="false">
                                <li><a href="page-error-400.html">Error 400</a></li>
                                <li><a href="page-error-403.html">Error 403</a></li>
                                <li><a href="page-error-404.html">Error 404</a></li>
                                <li><a href="page-error-500.html">Error 500</a></li>
                                <li><a href="page-error-503.html">Error 503</a></li>
                            </ul>
                        </li>
                        <li><a href="page-lock-screen.html">Lock Screen</a></li>
                        <li><a href="empty-page.html">Empty Page</a></li>
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
    <div class="wallet-bar wow fadeInRight dz-scroll active" id="wallet-bar" data-wow-delay="0.7s">
        <div class="row ">
            <!--column-->
            <div class="col-xl-12">
                <div class="card bg-transparent contacts mb-0">
                    <div class="card-body pb-2">
                        <div id="pieChart"></div>
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <svg class="me-2" width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="14" height="14" rx="3" fill="#13C28F"/>
                            </svg><span>Income</span>
                            <h6 class="ms-auto font-w700 mb-0">30%</h6>
                        </div>
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <svg class="me-2" width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="14" height="14" rx="3" fill="#FD5353"/>
                            </svg>
                            <span>Expense</span>
                            <h6 class="ms-auto font-w700 mb-0">40%</h6>
                        </div>
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <svg class="me-2" width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="14" height="14" rx="3" fill="#EEEEEE"/>
                            </svg>
                            <span>Unknown</span>
                            <h6 class="ms-auto font-w700 mb-0">50%</h6>
                        </div>
                    </div>
                    <div class="card order remove-radius mb-0">
                        <div class="card-body ">
                            <div class="d-flex align-items-center justify-content-between">
                                <div>
                                    <span class="text-primary">Orders</span>
                                    <h3 class="font-w600 mb-0">2,76k</h3>
                                </div>
                                <div class="order-svg">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M18.32 12.7504H15C12.51 12.7504 11.25 11.3404 11.25 8.55045V5.68045C11.25 4.66045 11.37 3.20045 12.43 2.40045C13.32 1.74045 14.6 1.69045 16.49 2.24045C18.97 2.96045 21.04 5.03045 21.76 7.51045C22.31 9.39045 22.26 10.6804 21.6 11.5604C20.8 12.6304 19.34 12.7504 18.32 12.7504ZM14.28 3.36045C13.87 3.36045 13.55 3.44045 13.34 3.60045C12.95 3.89045 12.76 4.57045 12.76 5.68045V8.56045C12.76 10.8004 13.62 11.2604 15.01 11.2604H18.33C19.43 11.2604 20.11 11.0704 20.41 10.6804C20.76 10.2204 20.73 9.30045 20.34 7.95045C19.76 5.98045 18.06 4.27045 16.09 3.70045C15.35 3.47045 14.75 3.36045 14.28 3.36045Z" fill="#2696FD"/>
                                        <path d="M11.0699 22.7503C10.5399 22.7503 9.99988 22.7103 9.45988 22.6203C5.36988 21.9603 2.03988 18.6403 1.37988 14.5503C0.529883 9.29032 3.91988 4.33032 9.10988 3.27032C9.51988 3.19032 9.90988 3.45032 9.99988 3.85032C10.0799 4.26032 9.81988 4.65032 9.41988 4.74032C5.02988 5.64032 2.14988 9.84032 2.87988 14.3103C3.43988 17.7703 6.24988 20.5803 9.70988 21.1403C14.1999 21.8603 18.3899 18.9703 19.2799 14.5603C19.3599 14.1503 19.7599 13.8903 20.1599 13.9703C20.5699 14.0503 20.8299 14.4503 20.7499 14.8503C19.7999 19.5203 15.7199 22.7503 11.0699 22.7503Z" fill="#2696FD"/>
                                    </svg>
                                </div>
                            </div>
                            <div id="NewCustomers"></div>

                        </div>
                    </div>
                    <div class="card mb-0">
                        <div class="card-body pb-2">
                            <div class="d-flex align-items-start justify-content-between">
                                <div>
                                    <span class="text-success">Profit</span>
                                    <h3 class="font-w600 mb-0">70,232k</h3>
                                </div>
                                <div class="trad-svg">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M21 22.75H3C2.59 22.75 2.25 22.41 2.25 22C2.25 21.59 2.59 21.25 3 21.25H21C21.41 21.25 21.75 21.59 21.75 22C21.75 22.41 21.41 22.75 21 22.75Z" fill="#28BE9D"/>
                                        <path d="M5.59998 19.7499H4C3.04 19.7499 2.25 18.9599 2.25 17.9999V9.37988C2.25 8.41988 3.04 7.62988 4 7.62988H5.59998C6.55998 7.62988 7.34998 8.41988 7.34998 9.37988V17.9999C7.34998 18.9599 6.55998 19.7499 5.59998 19.7499ZM4 9.11987C3.86 9.11987 3.75 9.22987 3.75 9.36987V17.9999C3.75 18.1399 3.86 18.2499 4 18.2499H5.59998C5.73998 18.2499 5.84998 18.1399 5.84998 17.9999V9.37988C5.84998 9.23988 5.73998 9.12988 5.59998 9.12988H4V9.11987Z" fill="#28BE9D"/>
                                        <path d="M12.8002 19.7504H11.2002C10.2402 19.7504 9.4502 18.9604 9.4502 18.0004V6.19043C9.4502 5.23043 10.2402 4.44043 11.2002 4.44043H12.8002C13.7602 4.44043 14.5502 5.23043 14.5502 6.19043V18.0004C14.5502 18.9604 13.7602 19.7504 12.8002 19.7504ZM11.2002 5.94043C11.0602 5.94043 10.9502 6.05043 10.9502 6.19043V18.0004C10.9502 18.1404 11.0602 18.2504 11.2002 18.2504H12.8002C12.9402 18.2504 13.0502 18.1404 13.0502 18.0004V6.19043C13.0502 6.05043 12.9402 5.94043 12.8002 5.94043H11.2002Z" fill="#28BE9D"/>
                                        <path d="M19.9999 19.75H18.3999C17.4399 19.75 16.6499 18.96 16.6499 18V3C16.6499 2.04 17.4399 1.25 18.3999 1.25H19.9999C20.9599 1.25 21.7499 2.04 21.7499 3V18C21.7499 18.96 20.9599 19.75 19.9999 19.75ZM18.3999 2.75C18.2599 2.75 18.1499 2.86 18.1499 3V18C18.1499 18.14 18.2599 18.25 18.3999 18.25H19.9999C20.1399 18.25 20.2499 18.14 20.2499 18V3C20.2499 2.86 20.1399 2.75 19.9999 2.75H18.3999Z" fill="#28BE9D"/>
                                    </svg>
                                </div>
                            </div>
                            <div id="columnChart"></div>
                        </div>
                    </div>
                    <div class="card order remove-radius mb-0">
                        <div class="card-body">
                            <div>
                                <h3 class="fs-20 mb-0">Others</h3>
                                <p>Lorem Ipsum is simply dummy text.</p>
                            </div>
                            <div class="d-flex align-items-start pb-3 dz-border">
                                <div>
                                    <svg class="me-3" width="49" height="49" viewBox="0 0 49 49" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M46 25C46 37.1503 36.1503 47 24 47C11.8497 47 2 37.1503 2 25C2 12.8497 11.8497 3 24 3C36.1503 3 46 12.8497 46 25ZM4.2 25C4.2 35.9352 13.0648 44.8 24 44.8C34.9352 44.8 43.8 35.9352 43.8 25C43.8 14.0648 34.9352 5.2 24 5.2C13.0648 5.2 4.2 14.0648 4.2 25Z" fill="#E3E3E3"/>
                                        <path d="M24.5 0C27.7174 3.8367e-08 30.9033 0.633711 33.8757 1.86495C36.8482 3.09619 39.5491 4.90085 41.8241 7.17589C44.0992 9.45092 45.9038 12.1518 47.135 15.1243C48.3663 18.0967 49 21.2826 49 24.5H41.65C41.65 22.2478 41.2064 20.0177 40.3445 17.937C39.4827 15.8562 38.2194 13.9656 36.6269 12.3731C35.0344 10.7806 33.1438 9.51733 31.063 8.65547C28.9823 7.7936 26.7522 7.35 24.5 7.35V0Z" fill="#27AE60"/>
                                    </svg>
                                </div>
                                <div class="">
                                    <h5 class="mb-0">Installment</h5>
                                    <span>$5,412</span>
                                </div>
                            </div>
                            <div class="d-flex align-items-center py-3 dz-border">
                                <div>
                                    <svg class="me-3" width="49" height="49" viewBox="0 0 49 49" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M46 24C46 36.1503 36.1503 46 24 46C11.8497 46 2 36.1503 2 24C2 11.8497 11.8497 2 24 2C36.1503 2 46 11.8497 46 24ZM4.2 24C4.2 34.9352 13.0648 43.8 24 43.8C34.9352 43.8 43.8 34.9352 43.8 24C43.8 13.0648 34.9352 4.2 24 4.2C13.0648 4.2 4.2 13.0648 4.2 24Z" fill="#E3E3E3"/>
                                        <path d="M24.5 0C28.8412 5.17688e-08 33.1045 1.15351 36.8535 3.34247C40.6025 5.53143 43.7025 8.67723 45.8363 12.4579C47.9701 16.2385 49.061 20.5183 48.9974 24.859C48.9338 29.1998 47.7179 33.4457 45.4742 37.1622C43.2306 40.8787 40.0397 43.9323 36.2281 46.0105C32.4166 48.0886 28.1214 49.1167 23.782 48.9895C19.4426 48.8623 15.215 47.5843 11.5318 45.2864C7.84854 42.9885 4.84203 39.7532 2.81996 35.9117L9.32397 32.4882C10.7394 35.1773 12.844 37.442 15.4222 39.0505C18.0005 40.659 20.9598 41.5536 23.9974 41.6426C27.035 41.7317 30.0416 41.012 32.7097 39.5573C35.3778 38.1026 37.6114 35.9651 39.182 33.3636C40.7525 30.762 41.6036 27.7899 41.6482 24.7513C41.6927 21.7128 40.9291 18.717 39.4354 16.0705C37.9418 13.4241 35.7717 11.222 33.1475 9.68973C30.5232 8.15746 27.5389 7.35 24.5 7.35V0Z" fill="#FD5353"/>
                                    </svg>
                                </div>
                                <div class="">
                                    <h5 class="mb-0">Investment</h5>
                                    <span>$3,784</span>
                                </div>

                            </div>
                            <div class="d-flex align-items-center pt-3">
                                <div>
                                    <svg class="me-3" width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M47 25C47 37.1503 37.1503 47 25 47C12.8497 47 3 37.1503 3 25C3 12.8497 12.8497 3 25 3C37.1503 3 47 12.8497 47 25ZM5.2 25C5.2 35.9352 14.0648 44.8 25 44.8C35.9352 44.8 44.8 35.9352 44.8 25C44.8 14.0648 35.9352 5.2 25 5.2C14.0648 5.2 5.2 14.0648 5.2 25Z" fill="#E3E3E3"/>
                                        <path d="M25 0C29.5182 5.38793e-08 33.952 1.22446 37.8299 3.54319C41.7077 5.86191 44.8847 9.18822 47.023 13.1684C49.1613 17.1486 50.181 21.6339 49.9737 26.1474C49.7663 30.6608 48.3396 35.0337 45.8454 38.8011L39.5918 34.6608C41.3377 32.0236 42.3364 28.9626 42.4816 25.8032C42.6267 22.6437 41.9129 19.504 40.4161 16.7179C38.9193 13.9318 36.6954 11.6033 33.9809 9.98023C31.2664 8.35712 28.1628 7.5 25 7.5V0Z" fill="#FF9F00"/>
                                    </svg>
                                </div>
                                <div class="">
                                    <h5 class="mb-0">Property</h5>
                                    <span>$3,784</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
            <p>Copyright © Designed &amp; Developed by <a href="https://dexignzone.com/" target="_blank">DexignZone</a> 2023</p>
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
<script src="{{ asset('client/js/styleSwitcher.js') }}"></script>
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
