@extends('dashboard.layout.app')
@section('content')

<div class="content-body" style="min-height: 1059px;">
    <!-- row -->
    <div class="container-fluid">
        <!-- Row -->
        <div class="row">
            <div class="col-xl-12">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="page-titles">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item ps-0"><a href="#">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Crypto</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>

                <div class="row wow fadeInUp main-card" data-wow-delay="0.7s" style="visibility: visible; animation-delay: 0.7s; animation-name: fadeInUp;">
                    <!--column-->
                    <div class="col-xxl-7 col-xl-9">
                        <div class="row">
                            <div class="col-xl-12 wow fadeInUp" data-wow-delay="1.5s" style="visibility: visible; animation-delay: 1.5s; animation-name: fadeInUp;">
                                <div class="card market_chart">
                                    <div class="card-header border-0 align-items-start flex-wrap pb-0">
                                        <div>
                                            <h2 class="heading">Market Chart</h2>
                                            <div class="market-data">
                                                <div class="income data">
                                                    <span>This Month</span>
                                                    <h4>$29.999.00</h4>
                                                </div>
                                                <div class="price data">
                                                    <span>Price</span>
                                                    <h4>480 <sub>- 0,5%</sub></h4>
                                                </div>
                                                <div class="rate data">
                                                    <span>Rate</span>
                                                    <h4>-0.0662%/hr</h4>
                                                </div>
                                                <div class="volume data">
                                                    <span>volume</span>
                                                    <h4>175k</h4>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <div class="dropdown bootstrap-select image-select default-select dashboard-select me-sm-4 me-2"><select class="image-select default-select dashboard-select me-sm-4 me-2" aria-label="Default">
                                                    <option selected="">This Month</option>
                                                    <option value="1">Weeks</option>
                                                    <option value="2">Today</option>
                                                </select><button type="button" tabindex="-1" class="btn dropdown-toggle btn-light" data-bs-toggle="dropdown" role="combobox" aria-owns="bs-select-1" aria-haspopup="listbox" aria-expanded="false" title="This Month"><div class="filter-option"><div class="filter-option-inner"><div class="filter-option-inner-inner">This Month</div></div> </div></button><div class="dropdown-menu "><div class="inner show" role="listbox" id="bs-select-1" tabindex="-1"><ul class="dropdown-menu inner show" role="presentation"></ul></div></div></div>
                                            <div class="dropdown">
                                                <a href="javascript:void(0);" class="btn-link btn sharp tp-btn btn-primary pill" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M8.47908 4.58333C8.47908 3.19 9.60659 2.0625 10.9999 2.0625C12.3933 2.0625 13.5208 3.19 13.5208 4.58333C13.5208 5.97667 12.3933 7.10417 10.9999 7.10417C9.60658 7.10417 8.47908 5.97667 8.47908 4.58333ZM12.1458 4.58333C12.1458 3.95083 11.6324 3.4375 10.9999 3.4375C10.3674 3.4375 9.85408 3.95083 9.85408 4.58333C9.85408 5.21583 10.3674 5.72917 10.9999 5.72917C11.6324 5.72917 12.1458 5.21583 12.1458 4.58333Z" fill="#252289"></path>
                                                        <path d="M8.47908 17.4163C8.47908 16.023 9.60659 14.8955 10.9999 14.8955C12.3933 14.8955 13.5208 16.023 13.5208 17.4163C13.5208 18.8097 12.3933 19.9372 10.9999 19.9372C9.60658 19.9372 8.47908 18.8097 8.47908 17.4163ZM12.1458 17.4163C12.1458 16.7838 11.6324 16.2705 10.9999 16.2705C10.3674 16.2705 9.85408 16.7838 9.85408 17.4163C9.85408 18.0488 10.3674 18.5622 10.9999 18.5622C11.6324 18.5622 12.1458 18.0488 12.1458 17.4163Z" fill="#252289"></path>
                                                        <path d="M8.47908 11.0003C8.47908 9.60699 9.60659 8.47949 10.9999 8.47949C12.3933 8.47949 13.5208 9.60699 13.5208 11.0003C13.5208 12.3937 12.3933 13.5212 10.9999 13.5212C9.60658 13.5212 8.47908 12.3937 8.47908 11.0003ZM12.1458 11.0003C12.1458 10.3678 11.6324 9.85449 10.9999 9.85449C10.3674 9.85449 9.85408 10.3678 9.85408 11.0003C9.85408 11.6328 10.3674 12.1462 10.9999 12.1462C11.6324 12.1462 12.1458 11.6328 12.1458 11.0003Z" fill="#252289"></path>
                                                    </svg>

                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                                    <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body custome-tooltip pt-0" style="position: relative;">
                                        <div id="activity1" style="min-height: 385px;"><div id="apexcharts1zs9p7pu" class="apexcharts-canvas apexcharts1zs9p7pu apexcharts-theme-light" style="width: 1103px; height: 370px;"><svg id="SvgjsSvg1140" width="1103" height="370" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1142" class="apexcharts-inner apexcharts-graphical" transform="translate(57.8984375, 30)"><defs id="SvgjsDefs1141"><clipPath id="gridRectMask1zs9p7pu"><rect id="SvgjsRect1148" width="1028.64453125" height="302.11199999999997" x="-3.5" y="-1.5" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="gridRectMarkerMask1zs9p7pu"><rect id="SvgjsRect1149" width="1057.64453125" height="335.11199999999997" x="-18" y="-18" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><linearGradient id="SvgjsLinearGradient1167" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop1168" stop-opacity="0.4" stop-color="var(--secondary)" offset="0"></stop><stop id="SvgjsStop1169" stop-opacity="0.25" stop-color="var(--secondary)" offset="0.006"></stop><stop id="SvgjsStop1170" stop-opacity="0" stop-color="var(--secondary)" offset="1"></stop></linearGradient><linearGradient id="SvgjsLinearGradient1176" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop1177" stop-opacity="0.4" stop-color="var(--primary)" offset="0"></stop><stop id="SvgjsStop1178" stop-opacity="0.25" stop-color="var(--primary)" offset="0.5"></stop><stop id="SvgjsStop1179" stop-opacity="0" stop-color="#ffffff" offset="1"></stop></linearGradient></defs><line id="SvgjsLine1147" x1="0" y1="0" x2="0" y2="299.11199999999997" stroke="#b6b6b6" stroke-dasharray="3" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="299.11199999999997" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line><g id="SvgjsG1182" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1183" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"><text id="SvgjsText1185" font-family="Poppins" x="0" y="328.11199999999997" text-anchor="middle" dominant-baseline="auto" font-size="14px" font-weight="100" fill="#3e4954" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Poppins;"><tspan id="SvgjsTspan1186">Mon</tspan><title>Mon</title></text><text id="SvgjsText1188" font-family="Poppins" x="170.27408854166669" y="328.11199999999997" text-anchor="middle" dominant-baseline="auto" font-size="14px" font-weight="100" fill="#3e4954" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Poppins;"><tspan id="SvgjsTspan1189">Tue</tspan><title>Tue</title></text><text id="SvgjsText1191" font-family="Poppins" x="340.5481770833333" y="328.11199999999997" text-anchor="middle" dominant-baseline="auto" font-size="14px" font-weight="100" fill="#3e4954" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Poppins;"><tspan id="SvgjsTspan1192">Wed</tspan><title>Wed</title></text><text id="SvgjsText1194" font-family="Poppins" x="510.82226562499994" y="328.11199999999997" text-anchor="middle" dominant-baseline="auto" font-size="14px" font-weight="100" fill="#3e4954" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Poppins;"><tspan id="SvgjsTspan1195">Thu</tspan><title>Thu</title></text><text id="SvgjsText1197" font-family="Poppins" x="681.0963541666665" y="328.11199999999997" text-anchor="middle" dominant-baseline="auto" font-size="14px" font-weight="100" fill="#3e4954" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Poppins;"><tspan id="SvgjsTspan1198">Fri</tspan><title>Fri</title></text><text id="SvgjsText1200" font-family="Poppins" x="851.3704427083331" y="328.11199999999997" text-anchor="middle" dominant-baseline="auto" font-size="14px" font-weight="100" fill="#3e4954" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Poppins;"><tspan id="SvgjsTspan1201">Sat</tspan><title>Sat</title></text><text id="SvgjsText1203" font-family="Poppins" x="1021.6445312499999" y="328.11199999999997" text-anchor="middle" dominant-baseline="auto" font-size="14px" font-weight="100" fill="#3e4954" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Poppins;"><tspan id="SvgjsTspan1204">Sun</tspan><title>Sun</title></text></g></g><g id="SvgjsG1221" class="apexcharts-grid"><g id="SvgjsG1222" class="apexcharts-gridlines-horizontal"><line id="SvgjsLine1238" x1="0" y1="0" x2="1021.64453125" y2="0" stroke="#e1dede" stroke-dasharray="8" class="apexcharts-gridline"></line><line id="SvgjsLine1239" x1="0" y1="49.852" x2="1021.64453125" y2="49.852" stroke="#e1dede" stroke-dasharray="8" class="apexcharts-gridline"></line><line id="SvgjsLine1240" x1="0" y1="99.704" x2="1021.64453125" y2="99.704" stroke="#e1dede" stroke-dasharray="8" class="apexcharts-gridline"></line><line id="SvgjsLine1241" x1="0" y1="149.55599999999998" x2="1021.64453125" y2="149.55599999999998" stroke="#e1dede" stroke-dasharray="8" class="apexcharts-gridline"></line><line id="SvgjsLine1242" x1="0" y1="199.408" x2="1021.64453125" y2="199.408" stroke="#e1dede" stroke-dasharray="8" class="apexcharts-gridline"></line><line id="SvgjsLine1243" x1="0" y1="249.26" x2="1021.64453125" y2="249.26" stroke="#e1dede" stroke-dasharray="8" class="apexcharts-gridline"></line><line id="SvgjsLine1244" x1="0" y1="299.11199999999997" x2="1021.64453125" y2="299.11199999999997" stroke="#e1dede" stroke-dasharray="8" class="apexcharts-gridline"></line></g><g id="SvgjsG1223" class="apexcharts-gridlines-vertical"><line id="SvgjsLine1224" x1="0" y1="0" x2="0" y2="299.11199999999997" stroke="#e1dede" stroke-dasharray="8" class="apexcharts-gridline"></line><line id="SvgjsLine1226" x1="170.27408854166666" y1="0" x2="170.27408854166666" y2="299.11199999999997" stroke="#e1dede" stroke-dasharray="8" class="apexcharts-gridline"></line><line id="SvgjsLine1228" x1="340.5481770833333" y1="0" x2="340.5481770833333" y2="299.11199999999997" stroke="#e1dede" stroke-dasharray="8" class="apexcharts-gridline"></line><line id="SvgjsLine1230" x1="510.822265625" y1="0" x2="510.822265625" y2="299.11199999999997" stroke="#e1dede" stroke-dasharray="8" class="apexcharts-gridline"></line><line id="SvgjsLine1232" x1="681.0963541666666" y1="0" x2="681.0963541666666" y2="299.11199999999997" stroke="#e1dede" stroke-dasharray="8" class="apexcharts-gridline"></line><line id="SvgjsLine1234" x1="851.3704427083333" y1="0" x2="851.3704427083333" y2="299.11199999999997" stroke="#e1dede" stroke-dasharray="8" class="apexcharts-gridline"></line><line id="SvgjsLine1236" x1="1021.6445312499999" y1="0" x2="1021.6445312499999" y2="299.11199999999997" stroke="#e1dede" stroke-dasharray="8" class="apexcharts-gridline"></line></g><line id="SvgjsLine1225" x1="0" y1="300.11199999999997" x2="0" y2="306.11199999999997" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1227" x1="170.27408854166666" y1="300.11199999999997" x2="170.27408854166666" y2="306.11199999999997" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1229" x1="340.5481770833333" y1="300.11199999999997" x2="340.5481770833333" y2="306.11199999999997" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1231" x1="510.822265625" y1="300.11199999999997" x2="510.822265625" y2="306.11199999999997" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1233" x1="681.0963541666666" y1="300.11199999999997" x2="681.0963541666666" y2="306.11199999999997" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1235" x1="851.3704427083333" y1="300.11199999999997" x2="851.3704427083333" y2="306.11199999999997" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1237" x1="1021.6445312499999" y1="300.11199999999997" x2="1021.6445312499999" y2="306.11199999999997" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1246" x1="0" y1="299.11199999999997" x2="1021.64453125" y2="299.11199999999997" stroke="transparent" stroke-dasharray="0"></line><line id="SvgjsLine1245" x1="0" y1="1" x2="0" y2="299.11199999999997" stroke="transparent" stroke-dasharray="0"></line></g><g id="SvgjsG1150" class="apexcharts-area-series apexcharts-plot-series"><g id="SvgjsG1151" class="apexcharts-series" seriesName="" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath1171" d="M 0 299.11199999999997L 0 66.46933333333334L 170.27408854166669 166.17333333333332L 340.54817708333337 99.70400000000001L 510.822265625 207.71666666666664L 681.0963541666667 41.54333333333335L 851.3704427083334 199.408L 1021.64453125 91.39533333333333L 1021.64453125 299.11199999999997M 1021.64453125 91.39533333333333z" fill="url(#SvgjsLinearGradient1167)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMask1zs9p7pu)" pathTo="M 0 299.11199999999997L 0 66.46933333333334L 170.27408854166669 166.17333333333332L 340.54817708333337 99.70400000000001L 510.822265625 207.71666666666664L 681.0963541666667 41.54333333333335L 851.3704427083334 199.408L 1021.64453125 91.39533333333333L 1021.64453125 299.11199999999997M 1021.64453125 91.39533333333333z" pathFrom="M -1 299.11199999999997L -1 299.11199999999997L 170.27408854166669 299.11199999999997L 340.54817708333337 299.11199999999997L 510.822265625 299.11199999999997L 681.0963541666667 299.11199999999997L 851.3704427083334 299.11199999999997L 1021.64453125 299.11199999999997"></path><path id="SvgjsPath1172" d="M 0 66.46933333333334L 170.27408854166669 166.17333333333332L 340.54817708333337 99.70400000000001L 510.822265625 207.71666666666664L 681.0963541666667 41.54333333333335L 851.3704427083334 199.408L 1021.64453125 91.39533333333333" fill="none" fill-opacity="1" stroke="var(--secondary)" stroke-opacity="1" stroke-linecap="butt" stroke-width="3" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMask1zs9p7pu)" pathTo="M 0 66.46933333333334L 170.27408854166669 166.17333333333332L 340.54817708333337 99.70400000000001L 510.822265625 207.71666666666664L 681.0963541666667 41.54333333333335L 851.3704427083334 199.408L 1021.64453125 91.39533333333333" pathFrom="M -1 299.11199999999997L -1 299.11199999999997L 170.27408854166669 299.11199999999997L 340.54817708333337 299.11199999999997L 510.822265625 299.11199999999997L 681.0963541666667 299.11199999999997L 851.3704427083334 299.11199999999997L 1021.64453125 299.11199999999997"></path><g id="SvgjsG1152" class="apexcharts-series-markers-wrap" data:realIndex="0"><g id="SvgjsG1154" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMask1zs9p7pu)"><circle id="SvgjsCircle1155" r="8" cx="0" cy="66.46933333333334" class="apexcharts-marker no-pointer-events w5tm505jz" stroke="#ffffff" fill="#2a353a" fill-opacity="1" stroke-width="4" stroke-opacity="0.9" rel="0" j="0" index="0" default-marker-size="8"></circle><circle id="SvgjsCircle1156" r="8" cx="170.27408854166669" cy="166.17333333333332" class="apexcharts-marker no-pointer-events w2fcnuloif" stroke="#ffffff" fill="#2a353a" fill-opacity="1" stroke-width="4" stroke-opacity="0.9" rel="1" j="1" index="0" default-marker-size="8"></circle></g><g id="SvgjsG1157" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMask1zs9p7pu)"><circle id="SvgjsCircle1158" r="8" cx="340.54817708333337" cy="99.70400000000001" class="apexcharts-marker no-pointer-events wtv1tr48b" stroke="#ffffff" fill="#2a353a" fill-opacity="1" stroke-width="4" stroke-opacity="0.9" rel="2" j="2" index="0" default-marker-size="8"></circle></g><g id="SvgjsG1159" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMask1zs9p7pu)"><circle id="SvgjsCircle1160" r="8" cx="510.822265625" cy="207.71666666666664" class="apexcharts-marker no-pointer-events wiv44ac5rf" stroke="#ffffff" fill="#2a353a" fill-opacity="1" stroke-width="4" stroke-opacity="0.9" rel="3" j="3" index="0" default-marker-size="8"></circle></g><g id="SvgjsG1161" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMask1zs9p7pu)"><circle id="SvgjsCircle1162" r="8" cx="681.0963541666667" cy="41.54333333333335" class="apexcharts-marker no-pointer-events wsw04udo4" stroke="#ffffff" fill="#2a353a" fill-opacity="1" stroke-width="4" stroke-opacity="0.9" rel="4" j="4" index="0" default-marker-size="8"></circle></g><g id="SvgjsG1163" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMask1zs9p7pu)"><circle id="SvgjsCircle1164" r="8" cx="851.3704427083334" cy="199.408" class="apexcharts-marker no-pointer-events wczd5s5oy" stroke="#ffffff" fill="#2a353a" fill-opacity="1" stroke-width="4" stroke-opacity="0.9" rel="5" j="5" index="0" default-marker-size="8"></circle></g><g id="SvgjsG1165" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMask1zs9p7pu)"><circle id="SvgjsCircle1166" r="8" cx="1021.64453125" cy="91.39533333333333" class="apexcharts-marker no-pointer-events w9hbeuema" stroke="#ffffff" fill="#2a353a" fill-opacity="1" stroke-width="4" stroke-opacity="0.9" rel="6" j="6" index="0" default-marker-size="8"></circle></g></g></g><g id="SvgjsG1173" class="apexcharts-series" seriesName="" data:longestSeries="true" rel="2" data:realIndex="1"><path id="SvgjsPath1180" d="M 0 299.11199999999997L 0 216.02533333333332L 170.27408854166669 199.408L 340.54817708333337 249.26L 510.822265625 99.70400000000001L 681.0963541666667 99.70400000000001L 851.3704427083334 166.17333333333332L 1021.64453125 66.46933333333334L 1021.64453125 299.11199999999997M 1021.64453125 66.46933333333334z" fill="url(#SvgjsLinearGradient1176)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="1" clip-path="url(#gridRectMask1zs9p7pu)" pathTo="M 0 299.11199999999997L 0 216.02533333333332L 170.27408854166669 199.408L 340.54817708333337 249.26L 510.822265625 99.70400000000001L 681.0963541666667 99.70400000000001L 851.3704427083334 166.17333333333332L 1021.64453125 66.46933333333334L 1021.64453125 299.11199999999997M 1021.64453125 66.46933333333334z" pathFrom="M -1 299.11199999999997L -1 299.11199999999997L 170.27408854166669 299.11199999999997L 340.54817708333337 299.11199999999997L 510.822265625 299.11199999999997L 681.0963541666667 299.11199999999997L 851.3704427083334 299.11199999999997L 1021.64453125 299.11199999999997"></path><path id="SvgjsPath1181" d="M 0 216.02533333333332L 170.27408854166669 199.408L 340.54817708333337 249.26L 510.822265625 99.70400000000001L 681.0963541666667 99.70400000000001L 851.3704427083334 166.17333333333332L 1021.64453125 66.46933333333334" fill="none" fill-opacity="1" stroke="var(--primary)" stroke-opacity="1" stroke-linecap="butt" stroke-width="3" stroke-dasharray="0" class="apexcharts-area" index="1" clip-path="url(#gridRectMask1zs9p7pu)" pathTo="M 0 216.02533333333332L 170.27408854166669 199.408L 340.54817708333337 249.26L 510.822265625 99.70400000000001L 681.0963541666667 99.70400000000001L 851.3704427083334 166.17333333333332L 1021.64453125 66.46933333333334" pathFrom="M -1 299.11199999999997L -1 299.11199999999997L 170.27408854166669 299.11199999999997L 340.54817708333337 299.11199999999997L 510.822265625 299.11199999999997L 681.0963541666667 299.11199999999997L 851.3704427083334 299.11199999999997L 1021.64453125 299.11199999999997"></path><g id="SvgjsG1174" class="apexcharts-series-markers-wrap" data:realIndex="1"></g></g><g id="SvgjsG1153" class="apexcharts-datalabels" data:realIndex="0"></g><g id="SvgjsG1175" class="apexcharts-datalabels" data:realIndex="1"></g></g><line id="SvgjsLine1247" x1="0" y1="0" x2="1021.64453125" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1248" x1="0" y1="0" x2="1021.64453125" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1249" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1250" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1251" class="apexcharts-point-annotations"></g></g><rect id="SvgjsRect1146" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect><g id="SvgjsG1205" class="apexcharts-yaxis" rel="0" transform="translate(11.8984375, 0)"><g id="SvgjsG1206" class="apexcharts-yaxis-texts-g"><text id="SvgjsText1207" font-family="Poppins" x="20" y="31.6" text-anchor="end" dominant-baseline="auto" font-size="14px" font-weight="100" fill="#666666" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Poppins;"><tspan id="SvgjsTspan1208">1800</tspan></text><text id="SvgjsText1209" font-family="Poppins" x="20" y="81.452" text-anchor="end" dominant-baseline="auto" font-size="14px" font-weight="100" fill="#666666" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Poppins;"><tspan id="SvgjsTspan1210">1500</tspan></text><text id="SvgjsText1211" font-family="Poppins" x="20" y="131.304" text-anchor="end" dominant-baseline="auto" font-size="14px" font-weight="100" fill="#666666" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Poppins;"><tspan id="SvgjsTspan1212">1200</tspan></text><text id="SvgjsText1213" font-family="Poppins" x="20" y="181.156" text-anchor="end" dominant-baseline="auto" font-size="14px" font-weight="100" fill="#666666" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Poppins;"><tspan id="SvgjsTspan1214">900</tspan></text><text id="SvgjsText1215" font-family="Poppins" x="20" y="231.008" text-anchor="end" dominant-baseline="auto" font-size="14px" font-weight="100" fill="#666666" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Poppins;"><tspan id="SvgjsTspan1216">600</tspan></text><text id="SvgjsText1217" font-family="Poppins" x="20" y="280.86" text-anchor="end" dominant-baseline="auto" font-size="14px" font-weight="100" fill="#666666" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Poppins;"><tspan id="SvgjsTspan1218">300</tspan></text><text id="SvgjsText1219" font-family="Poppins" x="20" y="330.712" text-anchor="end" dominant-baseline="auto" font-size="14px" font-weight="100" fill="#666666" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Poppins;"><tspan id="SvgjsTspan1220">0</tspan></text></g></g><g id="SvgjsG1143" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend" style="max-height: 185px;"></div><div class="apexcharts-tooltip apexcharts-theme-light"><div class="apexcharts-tooltip-title" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div><div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: var(--secondary);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group" style="order: 2;"><span class="apexcharts-tooltip-marker" style="background-color: var(--primary);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light"><div class="apexcharts-xaxistooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div></div></div>
                                        <div class="resize-triggers"><div class="expand-trigger"><div style="width: 1164px; height: 416px;"></div></div><div class="contract-trigger"></div></div></div>
                                </div>
                            </div>
                            <!--/column-->
                        </div>
                        <!--/row-->
                    </div>
                    <!--/column-->
                    <!--column-->
                    <div class="col-xxl-5 col-xl-3">
                        <!--row-->
                        <div class="row">
                            <!--column-->
                            <div class="col-xl-12 col-lg-6">
                                <div class="card market-previews">
                                    <div class="card-header border-0 pb-0">
                                        <div>
                                            <h2 class="heading">Market Previews</h2>
                                        </div>
                                    </div>
                                    <div class="card-body pt-0 px-0">
                                        <div class="previews-info">
                                            <div class="pre-icon">
														<span class="icon-box bg-success me-2">
															<svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path d="M15.5 13.7222H7.72226C7.44585 13.7236 7.17885 13.6219 6.9734 13.437C6.76794 13.2521 6.63878 12.9972 6.61115 12.7222L6.9667 9.05553L10.2445 8.16664C10.5392 8.08707 10.7902 7.8937 10.9423 7.62907C11.0944 7.36443 11.1352 7.05021 11.0556 6.75553C10.976 6.46084 10.7827 6.20983 10.518 6.05772C10.2534 5.90561 9.93916 5.86485 9.64448 5.94442L7.21115 6.6333L7.72226 1.61108C7.75173 1.3164 7.66292 1.02208 7.47539 0.792865C7.28785 0.563654 7.01694 0.418329 6.72226 0.38886C6.42757 0.359392 6.13325 0.448194 5.90404 0.63573C5.67483 0.823266 5.5295 1.09418 5.50004 1.38886L4.91115 7.3333L1.8667 8.16664C1.57202 8.20642 1.30521 8.36164 1.12496 8.59814C0.944719 8.83464 0.865809 9.13306 0.905592 9.42775C0.945374 9.72243 1.10059 9.98925 1.33709 10.1695C1.5736 10.3497 1.87202 10.4286 2.1667 10.3889C2.26605 10.405 2.36736 10.405 2.4667 10.3889L4.68893 9.75553L4.38892 12.6111C4.38892 13.4951 4.74011 14.343 5.36523 14.9681C5.99036 15.5932 6.8382 15.9444 7.72226 15.9444H15.5C15.7947 15.9444 16.0773 15.8274 16.2857 15.619C16.4941 15.4106 16.6111 15.128 16.6111 14.8333C16.6111 14.5386 16.4941 14.256 16.2857 14.0476C16.0773 13.8393 15.7947 13.7222 15.5 13.7222Z" fill="#FCFCFC"></path>
															</svg>
														</span>
                                                <div>
                                                    <h6>LTC/Year</h6>
                                                    <span>March</span>
                                                </div>
                                            </div>
                                            <div class="count">
                                                <h6>120.45</h6>
                                                <span>1,24%</span>
                                            </div>
                                        </div>
                                        <div class="previews-info yellow">
                                            <div class="pre-icon">
														<span class="icon-box bg-warning me-2">
															<svg width="17" height="21" viewBox="0 0 17 21" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path d="M13.2472 9.15687C13.6996 8.48871 13.9615 7.70994 14.0047 6.90419C14.0479 6.09844 13.8707 5.29615 13.4924 4.58346C13.114 3.87078 12.5486 3.27462 11.857 2.85901C11.1653 2.4434 10.3735 2.22404 9.56662 2.22448V1.11337C9.56662 0.818684 9.44956 0.536069 9.24119 0.327695C9.03281 0.119321 8.7502 0.0022583 8.45551 0.0022583C8.16083 0.0022583 7.87821 0.119321 7.66984 0.327695C7.46146 0.536069 7.3444 0.818684 7.3444 1.11337V2.22448H5.12218V1.11337C5.12218 0.818684 5.00512 0.536069 4.79674 0.327695C4.58837 0.119321 4.30575 0.0022583 4.01107 0.0022583C3.71638 0.0022583 3.43377 0.119321 3.22539 0.327695C3.01702 0.536069 2.89996 0.818684 2.89996 1.11337V2.22448H1.78885C1.49416 2.22448 1.21154 2.34154 1.00317 2.54992C0.794797 2.75829 0.677734 3.04091 0.677734 3.33559C0.677734 3.63028 0.794797 3.91289 1.00317 4.12127C1.21154 4.32964 1.49416 4.4467 1.78885 4.4467H2.89996V15.5578H1.78885C1.49416 15.5578 1.21154 15.6749 1.00317 15.8833C0.794797 16.0916 0.677734 16.3742 0.677734 16.6689C0.677734 16.9636 0.794797 17.2462 1.00317 17.4546C1.21154 17.663 1.49416 17.78 1.78885 17.78H2.89996V18.8911C2.89996 19.1858 3.01702 19.4684 3.22539 19.6768C3.43377 19.8852 3.71638 20.0023 4.01107 20.0023C4.30575 20.0023 4.58837 19.8852 4.79674 19.6768C5.00512 19.4684 5.12218 19.1858 5.12218 18.8911V17.78H7.3444V18.8911C7.3444 19.1858 7.46146 19.4684 7.66984 19.6768C7.87821 19.8852 8.16083 20.0023 8.45551 20.0023C8.7502 20.0023 9.03281 19.8852 9.24119 19.6768C9.44956 19.4684 9.56662 19.1858 9.56662 18.8911V17.78H11.7888C12.8383 17.7828 13.8548 17.413 14.6572 16.7367C15.4597 16.0603 15.9962 15.1211 16.1712 14.0863C16.3462 13.0515 16.1484 11.9882 15.613 11.0855C15.0776 10.1829 14.2393 9.49948 13.2472 9.15693V9.15687ZM5.12218 4.4467H9.56662C10.156 4.4467 10.7212 4.68083 11.138 5.09758C11.5547 5.51432 11.7888 6.07956 11.7888 6.66893C11.7888 7.2583 11.5547 7.82353 11.138 8.24027C10.7212 8.65702 10.156 8.89115 9.56662 8.89115H5.12218V4.4467ZM11.7888 15.5578H5.12218V11.1134H11.7888C12.3782 11.1134 12.9434 11.3475 13.3602 11.7642C13.7769 12.181 14.0111 12.7462 14.0111 13.3356C14.0111 13.925 13.7769 14.4902 13.3602 14.9069C12.9434 15.3237 12.3782 15.5578 11.7888 15.5578Z" fill="#FCFCFC"></path>
															</svg>
														</span>
                                                <div>
                                                    <h6>BTC/Year</h6>
                                                    <span>January</span>
                                                </div>
                                            </div>
                                            <div class="count">
                                                <h6>120.45</h6>
                                                <span>1,24%</span>
                                            </div>
                                        </div>
                                        <div class="previews-info blue">
                                            <div class="pre-icon">
														<span class="icon-box bg-primary me-2">
															<svg width="16" height="24" viewBox="0 0 16 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path d="M15.1119 12.24C15.1219 12.1603 15.1219 12.0797 15.1119 12C15.1212 11.9233 15.1212 11.8457 15.1119 11.7689C15.1134 11.7393 15.1134 11.7096 15.1119 11.68C15.0979 11.6399 15.08 11.6012 15.0586 11.5645L8.83639 0.897799C8.81109 0.846041 8.77467 0.800512 8.72973 0.764466C8.64641 0.672805 8.54486 0.599569 8.43159 0.549453C8.31831 0.499338 8.19582 0.47345 8.07195 0.47345C7.94808 0.47345 7.82559 0.499338 7.71231 0.549453C7.59904 0.599569 7.49749 0.672805 7.41417 0.764466C7.36923 0.800512 7.33281 0.846041 7.30751 0.897799L1.08528 11.5645C1.06386 11.6012 1.046 11.6399 1.03195 11.68C1.03047 11.7096 1.03047 11.7393 1.03195 11.7689C0.973936 11.8389 0.926059 11.9167 0.889728 12C0.880507 12.0768 0.880507 12.1544 0.889728 12.2311C0.888246 12.2607 0.888246 12.2904 0.889728 12.32C0.90378 12.3602 0.921639 12.3988 0.943061 12.4356L7.16528 23.1022C7.24399 23.2349 7.35585 23.3448 7.48988 23.4211C7.62391 23.4974 7.77549 23.5375 7.92973 23.5375C8.08396 23.5375 8.23554 23.4974 8.36957 23.4211C8.5036 23.3448 8.61547 23.2349 8.69417 23.1022L14.9164 12.4356C14.9378 12.3988 14.9557 12.3602 14.9697 12.32C15.0195 12.2978 15.0671 12.271 15.1119 12.24ZM4.03639 12L7.11195 10.6845V13.3511L4.03639 12ZM7.11195 8.74669L3.90306 10.1245L7.11195 4.62224V8.74669ZM8.88973 10.6845L11.9653 12L8.88973 13.3156V10.6845ZM8.88973 8.74669V4.62224L12.0986 10.1245L8.88973 8.74669ZM8.00084 20.8889L3.90306 13.8578L7.65417 15.4667C7.76384 15.5131 7.88173 15.5371 8.00084 15.5371C8.11994 15.5371 8.23783 15.5131 8.34751 15.4667L12.0986 13.8578L8.00084 20.8889Z" fill="#FCFCFC"></path>
															</svg>
														</span>
                                                <div>
                                                    <h6>LTC/Year</h6>
                                                    <span>January</span>
                                                </div>
                                            </div>
                                            <div class="count">
                                                <h6>120.45</h6>
                                                <span>-2,24%</span>
                                            </div>
                                        </div>
                                        <div class="previews-info">
                                            <div class="pre-icon">
														<span class="icon-box bg-secondary me-2">
															<svg width="21" height="22" viewBox="0 0 21 22" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path d="M15.8893 12.6666C15.4127 12.6738 14.9402 12.7563 14.4893 12.9111L12.8893 11L14.4893 9.08887C14.9402 9.24363 15.4127 9.32613 15.8893 9.33331C16.9087 9.33828 17.8988 8.99266 18.6937 8.35439C19.4886 7.71613 20.0399 6.82401 20.2552 5.8276C20.4705 4.83118 20.3367 3.79104 19.8763 2.88154C19.4158 1.97203 18.6567 1.24845 17.7262 0.832085C16.7957 0.415724 15.7504 0.331894 14.7654 0.594648C13.7804 0.857402 12.9157 1.45077 12.3163 2.27528C11.7168 3.09978 11.4189 4.10531 11.4727 5.12331C11.5265 6.1413 11.9285 7.10987 12.6115 7.86665L10.9226 9.88887H9.06709C8.79666 8.84147 8.15351 7.92866 7.2582 7.32153C6.36289 6.71441 5.27689 6.45465 4.20376 6.59096C3.13063 6.72726 2.14406 7.25027 1.42896 8.06194C0.713861 8.87362 0.319336 9.91823 0.319336 11C0.319336 12.0817 0.713861 13.1263 1.42896 13.938C2.14406 14.7497 3.13063 15.2727 4.20376 15.409C5.27689 15.5453 6.36289 15.2856 7.2582 14.6784C8.15351 14.0713 8.79666 13.1585 9.06709 12.1111H10.9226L12.6115 14.1333C11.9285 14.8901 11.5265 15.8587 11.4727 16.8767C11.4189 17.8946 11.7168 18.9002 12.3163 19.7247C12.9157 20.5492 13.7804 21.1426 14.7654 21.4053C15.7504 21.6681 16.7957 21.5842 17.7262 21.1679C18.6567 20.7515 19.4158 20.0279 19.8763 19.1184C20.3367 18.2089 20.4705 17.1688 20.2552 16.1724C20.0399 15.1759 19.4886 14.2838 18.6937 13.6456C17.8988 13.0073 16.9087 12.6617 15.8893 12.6666ZM4.77821 13.2222C4.33869 13.2222 3.90905 13.0919 3.54361 12.8477C3.17816 12.6035 2.89334 12.2564 2.72514 11.8504C2.55695 11.4443 2.51294 10.9975 2.59868 10.5664C2.68443 10.1354 2.89607 9.73942 3.20686 9.42863C3.51764 9.11785 3.9136 8.9062 4.34467 8.82046C4.77574 8.73471 5.22256 8.77872 5.62861 8.94691C6.03467 9.11511 6.38174 9.39994 6.62592 9.76538C6.8701 10.1308 7.00043 10.5605 7.00043 11C7.00043 11.5893 6.7663 12.1546 6.34955 12.5713C5.93281 12.9881 5.36758 13.2222 4.77821 13.2222ZM15.8893 2.66665C16.3288 2.66665 16.7585 2.79698 17.1239 3.04116C17.4894 3.28534 17.7742 3.6324 17.9424 4.03846C18.1106 4.44452 18.1546 4.89133 18.0688 5.3224C17.9831 5.75347 17.7714 6.14943 17.4607 6.46022C17.1499 6.771 16.7539 6.98265 16.3229 7.06839C15.8918 7.15414 15.445 7.11013 15.0389 6.94193C14.6329 6.77374 14.2858 6.48891 14.0416 6.12347C13.7974 5.75803 13.6671 5.32838 13.6671 4.88887C13.6671 4.2995 13.9012 3.73427 14.318 3.31752C14.7347 2.90077 15.2999 2.66665 15.8893 2.66665ZM15.8893 19.3333C15.4498 19.3333 15.0202 19.203 14.6547 18.9588C14.2893 18.7146 14.0044 18.3676 13.8363 17.9615C13.6681 17.5554 13.624 17.1086 13.7098 16.6776C13.7955 16.2465 14.0072 15.8505 14.318 15.5397C14.6288 15.229 15.0247 15.0173 15.4558 14.9316C15.8869 14.8458 16.3337 14.8898 16.7397 15.058C17.1458 15.2262 17.4928 15.511 17.737 15.8765C17.9812 16.2419 18.1115 16.6716 18.1115 17.1111C18.1115 17.7005 17.8774 18.2657 17.4607 18.6824C17.0439 19.0992 16.4787 19.3333 15.8893 19.3333Z" fill="#FCFCFC"></path>
															</svg>
														</span>
                                                <div>
                                                    <h6>LTC/Year</h6>
                                                    <span>January</span>
                                                </div>
                                            </div>
                                            <div class="count">
                                                <h6>120.45</h6>
                                                <span>-2,24%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/column-->
                            <!--column-->
                            <div class="col-xl-12 col-lg-6">
                                <div class="card exchange">
                                    <div class="card-header d-block border-0">
                                        <h2 class="heading">Exchange</h2>
                                        <div class="balance">
                                            <div class="header-content">
                                                <h6> Balance</h6>
                                                <span>12/24</span>
                                            </div>
                                            <h4 class="count">$ 12.568,60</h4>
                                        </div>
                                    </div>
                                    <div class="card-body pt-0">
                                        <div class="selling">
                                            <h4>Sell</h4>
                                            <div class="form_exchange">
                                                <div class="input_exchange">
                                                    <input type="text" class="input-select" placeholder="Sell">
                                                </div>
                                                <div class="crypto-select">
                                                    <div class="dropdown bootstrap-select image-select default-select dashboard-select"><select class="image-select default-select dashboard-select" aria-label="Default">
                                                            <option selected="">Year</option>
                                                            <option value="1">Weeks</option>
                                                            <option value="2">Today</option>
                                                        </select><button type="button" tabindex="-1" class="btn dropdown-toggle btn-light" data-bs-toggle="dropdown" role="combobox" aria-owns="bs-select-2" aria-haspopup="listbox" aria-expanded="false" title="Year"><div class="filter-option"><div class="filter-option-inner"><div class="filter-option-inner-inner">Year</div></div> </div></button><div class="dropdown-menu "><div class="inner show" role="listbox" id="bs-select-2" tabindex="-1"><ul class="dropdown-menu inner show" role="presentation"></ul></div></div></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="selling">
                                            <h4>Buy</h4>
                                            <div class="form_exchange">
                                                <div class="input_exchange">
                                                    <input type="text" class="input-select" placeholder="Buy">
                                                </div>
                                                <div class="crypto-select">
                                                    <div class="dropdown bootstrap-select image-select default-select dashboard-select"><select class="image-select default-select dashboard-select" aria-label="Default">
                                                            <option selected="">Year</option>
                                                            <option value="1">Weeks</option>
                                                            <option value="2">Today</option>
                                                        </select><button type="button" tabindex="-1" class="btn dropdown-toggle btn-light" data-bs-toggle="dropdown" role="combobox" aria-owns="bs-select-3" aria-haspopup="listbox" aria-expanded="false" title="Year"><div class="filter-option"><div class="filter-option-inner"><div class="filter-option-inner-inner">Year</div></div> </div></button><div class="dropdown-menu "><div class="inner show" role="listbox" id="bs-select-3" tabindex="-1"><ul class="dropdown-menu inner show" role="presentation"></ul></div></div></div>
                                                </div>
                                            </div>
                                        </div>
                                        <button class="btn btn-primary w-100 mt-3">Confirm</button>
                                    </div>
                                </div>
                            </div>
                            <!--/column-->
                        </div>
                        <!--/row-->
                    </div>
                    <!--/column-->
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
