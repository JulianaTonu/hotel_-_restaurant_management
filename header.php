<!DOCTYPE html>
<html>

<meta http-equiv="content-type" content="text/html;charset=UTF-8"/><!-- /Added by HTTrack -->
<head>
    <title>Hotel & Restaurant Management System</title>
    <!--meta-->
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <meta name="format-detection" content="telephone=no"/>
    <meta name="keywords" content="Medic, Medical Center"/>
    <meta name="description" content="Health Medical Clinic Template"/>
    <!--style-->
    <link href='../../../fonts.googleapis.com/css70b0.css?family=PT+Sans' rel='stylesheet' type='text/css'>
    <link href='../../../fonts.googleapis.com/cssc3e8.css?family=Volkhov:400italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="style/reset.css"/>
    <link rel="stylesheet" type="text/css" href="style/superfish.css"/>
    <link rel="stylesheet" type="text/css" href="style/fancybox/jquery.fancybox.css"/>
    <link rel="stylesheet" type="text/css" href="style/jquery.qtip.css"/>
    <link rel="stylesheet" type="text/css" href="style/jquery-ui.custom.css"/>
    <link rel="stylesheet" type="text/css" href="style/style.css"/>
    <link rel="stylesheet" type="text/css" href="style/responsive.css"/>
    <link rel="stylesheet" type="text/css" href="style/animations.css"/>
    <link rel="shortcut icon" href="images/gov.png"/>
</head>
<style>
    .more {
        float: initial;
        color: #3156A3;
        line-height: normal;
    }
    .home_box {
        float: left;
        width: 270px;
        height: initial;
        padding: 21px 30px 30px;
        z-index: 2;
    }
    .slider li {
        float: left;
        height: 550px;
        background-position: top center;
        background-repeat: no-repeat;
    }
    .sf-menu li a, .sf-menu li a:visited {
        font-family: 'arial';
        color: #888;
        border: 1px solid #FFF;
        padding: 11px;
    }

    .slider_navigation .slider_control a {
        display: none;
        height: 41px;
        font-size: 11px;
        padding: 0;
        color: #FFF;
        line-height: 160%;
    }

    .footer_container {
        background-color: #eef2f2;
    }

    .home_box.light_blue {
        background-color: orange;
    }

    .home_box.blue {
        background-color: orchid;
    }
    .home_box.dark_blue {
        background-color: darkcyan;
    }

    .footer a {
        color: #9f5f5f;
    }
    .header_left {
        float: left;
        width: 240px;
    }
    .sf-menu li a, .sf-menu li a:visited {
        font-family: 'arial';
        color: #888;
        border: 1px solid #FFF;
        padding: 11px;
        padding-top: 21px;
    }
</style>
<body>
<div class="site_container">
    <div class="header_container">
        <div style=" background-color: purple; padding: 5px; text-align: right; height: 20px; padding-top: 10px !important; padding-right: 18% !important;">
            <!--<span style=" padding: 2px; color: white; float: left; font-weight: bold">জেলা প্রশাসন, ঢাকা</span>-->
            <span style="border: 1px solid white; padding: 2px; color: white; margin: 2px; font-weight: bold">Language</span>
            <span  style="border: 1px solid white; padding: 2px; color: white; margin: 2px; font-weight: bold">Sign In/Register</span>
        </div>
        <div class="header clearfix">
            <div class="header_left">
                <a href="index.php" title="Hotel & Restaurant Management System">
                    <img src="images/gov.png" style="width: 55px" alt="logo"/>
                    <span class="logo"  style="font-size: 18px; font-weight: bold">H&RMS </span> <br/>
                    <span class="" style="font-size: 14px; font-weight: bold; float: left;">জেলা প্রশাসন, ঢাকা </span>
                    <span class="logo" style="font-size: 14px; font-weight: bold">ঐতিহ্যে প্রাচীন, সেবায় অগ্ৰগামী</span>

                </a>
            </div>
            <ul class="sf-menu header_right">
                <li class="">
                    <a href="index.php" title="HOME">
                        HOME
                    </a>
                </li>
                <li class="">
                    <a href="#" title="Review">
                        Review
                    </a>
                </li>
                <li class="submenu">
                    <a href="#" title="Registration & License">
                        Registration & License
                    </a>
                    <ul>
                        <li>
                            <a href="docList.php" title="Document Check List">
                                Document Check List
                            </a>
                        </li>
                        <li>
                            <a href="fees.php" title="Fees">
                                Fees
                            </a>
                        </li>
                        <li>
                            <a  href="#" title="Application Form (Apply Online)">
                                Application Form (Apply Online)
                            </a>
                        </li>
                        <li>
                            <a  href="renewal.php" title="Renewal">
                                Renewal
                            </a>
                        </li>
                        <li>
                            <a  href="ownership.php" title="Ownership Transfer">
                                Ownership Transfer
                            </a>
                        </li>
                        <li>
                            <a  href="hrf.php" title="H&R Info">
                                H&R Info
                            </a>
                        </li>
                        <li>
                            <a  href="shebarInfo.php" title="Service Details (Hotel/Resorts)">
                                Service Details (Hotel/Resorts)
                            </a>
                        </li>
                        <li>
                            <a  href="shebarInfoRestora.php" title=" Service Details (Restaurant)">
                                Service Details (Restaurant)
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="#" title="Smart Guest Registration">
                        Smart Guest Registration
                    </a>
                    <ul>
                        <li>
                            <a href="#" title="NID/Passport OCR">
                                NID/Passport OCR
                            </a>
                        </li>
                        <li>
                            <a href="#" title="Biometic Enrollment">
                                Biometic Enrollment
                            </a>
                        </li>
                    </ul>
                </li>

                <li>
                    <input type="text" name="search" class="search_input"  style="height: 15px; margin-top: 10px; border: 1px solid #EEEEEE; padding: 10px;" placeholder="Search...." value="" />
                </li>
                <li><img src="images/logodc.png" style="width: 71px" alt="logo"/></li>
            </ul>

            <div class="mobile_menu">
                <select>
                    <option value="index.php" >HOME</option>
                    <option value="#" selected='selected'>Review</option>
                    <option value="#" selected='selected'>Registration & License</option>
                    <option value="#" selected='selected'>Smart Guest Registration</option>

                </select>
            </div>
        </div>
    </div>