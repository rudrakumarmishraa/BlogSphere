<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BlogSphere</title>
    <link rel="shortcut icon" type="image/x-icon" href="https://img.icons8.com/arcade/64/blog.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/owl.carousel@2.3.4/dist/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.7/css/swiper.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.3/toastr.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>
    <style>
        /* ========================================= */
        /* 		   		General Styling	 			 */
        /* ========================================= */
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&family=Open+Sans:wght@300;400;500;600;700;800&family=Roboto:wght@100;300;400;500;700;900&display=swap');

        * {
            margin: 0;
            padding: 0;
            border: 0;
            outline: 0;
            font-size: 100%;
            background: transparent;
            box-sizing: border-box;
            user-select: none;
        }

        ol,
        ul {
            list-style: none;
        }

        :focus {
            outline: 0;
        }

        .clear {
            clear: both;
            line-height: 0;
            font-size: 0;
        }

        .clearfix:after {
            clear: both;
            content: '.';
            display: block;
            visibility: hidden;
            height: 0;
        }

        .clearfix:after .test {
            color: red;
        }

        .clearfix {
            display: inline-block;
        }

        * html .clearfix {
            height: 1%;
        }

        .clearfix {
            display: block;
        }

        header,
        nav,
        section,
        article,
        aside,
        footer {
            display: block;
        }

        * {
            margin: 0;
            padding: 0;
        }

        body {
            margin: 0;
            padding: 0;
            font-size: 24px;
            font-family: 'Montserrat', sans-serif;
            overflow-x: hidden;
        }

        /* Preloader */
        .loading {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: #000;
            z-index: 9999;
        }

        .loading-text {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            margin: auto;
            text-align: center;
            width: 100%;
            height: 100px;
            line-height: 100px;
        }

        .loading-text span {
            display: inline-block;
            margin: 0 5px;
            color: #fff;
            font-family: 'Quattrocento Sans', sans-serif;
        }

        .loading-text span:nth-child(1) {
            -webkit-filter: blur(0px);
            filter: blur(0px);
            -webkit-animation: blur-text 1.5s 0s infinite linear alternate;
            animation: blur-text 1.5s 0s infinite linear alternate;
        }

        .loading-text span:nth-child(2) {
            -webkit-filter: blur(0px);
            filter: blur(0px);
            -webkit-animation: blur-text 1.5s 0.2s infinite linear alternate;
            animation: blur-text 1.5s 0.2s infinite linear alternate;
        }

        .loading-text span:nth-child(3) {
            -webkit-filter: blur(0px);
            filter: blur(0px);
            -webkit-animation: blur-text 1.5s 0.4s infinite linear alternate;
            animation: blur-text 1.5s 0.4s infinite linear alternate;
        }

        .loading-text span:nth-child(4) {
            -webkit-filter: blur(0px);
            filter: blur(0px);
            -webkit-animation: blur-text 1.5s 0.6s infinite linear alternate;
            animation: blur-text 1.5s 0.6s infinite linear alternate;
        }

        .loading-text span:nth-child(5) {
            -webkit-filter: blur(0px);
            filter: blur(0px);
            -webkit-animation: blur-text 1.5s 0.8s infinite linear alternate;
            animation: blur-text 1.5s 0.8s infinite linear alternate;
        }

        .loading-text span:nth-child(6) {
            -webkit-filter: blur(0px);
            filter: blur(0px);
            -webkit-animation: blur-text 1.5s 1s infinite linear alternate;
            animation: blur-text 1.5s 1s infinite linear alternate;
        }

        .loading-text span:nth-child(7) {
            -webkit-filter: blur(0px);
            filter: blur(0px);
            -webkit-animation: blur-text 1.5s 1.2s infinite linear alternate;
            animation: blur-text 1.5s 1.2s infinite linear alternate;
        }

        @-webkit-keyframes blur-text {
            0% {
                -webkit-filter: blur(0px);
                filter: blur(0px);
            }

            100% {
                -webkit-filter: blur(4px);
                filter: blur(4px);
            }
        }

        @keyframes blur-text {
            0% {
                -webkit-filter: blur(0px);
                filter: blur(0px);
            }

            100% {
                -webkit-filter: blur(4px);
                filter: blur(4px);
            }
        }

        /* End Preloader */
        h1 {
            font-size: 42px;
            font-weight: 600;
            line-height: 58px;
            margin-bottom: 20px;
            color: #202020;
            font-weight: 400;
            font-family: 'Montserrat', sans-serif;
        }

        h2 {
            font-size: 30px;
            font-weight: 700;
            line-height: 40px;
            margin-bottom: 20px;
            color: #202020;
            font-family: 'Montserrat', sans-serif;
        }

        h3 {
            font-size: 24px;
            font-weight: 600;
            line-height: 38px;
            margin-bottom: 30px;
            color: #202020;
            font-family: 'Montserrat', sans-serif;
        }

        h4 {
            font-size: 20px;
            font-weight: 600;
            line-height: 38px;
            margin-bottom: 20px;
            color: #202020;
            font-family: 'Montserrat', sans-serif;
        }

        h5 {
            font-size: 18px;
            font-weight: 600;
            line-height: 32px;
            margin-bottom: 20px;
            color: #202020;
            font-family: 'Montserrat', sans-serif;
        }

        h6 {
            font-size: 16px;
            font-weight: 600;
            line-height: 28px;
            margin-bottom: 20px;
            color: #202020;
            font-family: 'Montserrat', sans-serif;
        }

        img {
            max-width: 100%;
        }

        hr {
            border: 0.5px solid #F1F0F0;
        }

        p {
            font-size: 14px;
            font-weight: 400;
            font-family: 'Open Sans', sans-serif;
            line-height: 24px;
            margin-bottom: 20px;
            color: #767676;
        }

        ul {
            margin: 0;
            padding: 0;
        }

        ul li {
            font-size: 16px;
            font-family: 'Open Sans', sans-serif;
            font-weight: 400;
            margin-bottom: 15px;
            line-height: 30px;
            color: #202020;
            padding-left: 40px;
            position: relative;
        }

        ul li:before {
            content: '';
            position: absolute;
            left: 0;
            margin-top: 1px;
            width: 15px;
            height: 4px;
            background: #212529;
            border-radius: 50px;
            top: 12px;
        }

        ol {
            margin: 0;
            counter-reset: i;
            position: relative;
        }

        ol li {
            font-size: 16px;
            font-family: 'Open Sans', sans-serif;
            font-weight: 400;
            margin-bottom: 15px;
            line-height: 24px;
            color: #202020;
            padding-left: 40px;
            position: relative;
        }

        ol li:before {
            content: " ";
            counter-increment: i;
            content: counter(i) ".";
            position: absolute;
            left: 0;
            color: #212529;
            margin-top: 1px;
        }

        a {
            color: #212529;
            font-family: 'Open Sans', sans-serif;
            text-decoration: none;
        }

        a:hover {
            text-decoration: none;
            color: #202020;
            transition: all 0.4s ease;
        }

        section {
            position: relative;
        }

        input[type=text],
        input[type=email],
        input[type=number],
        input[type=password],
        input[type=search],
        input[type=tel],
        textarea,
        select {
            font-size: 14px;
            font-family: 'Roboto', sans-serif;
            font-weight: 300;
            background-color: #fff;
            border: 1px solid #eceaea;
            padding: 10px 25px;
            width: 100%;
            color: #202020;
            margin-bottom: 15px;
        }

        input[type=text]:focus,
        input[type=email]:focus,
        input[type=number]:focus,
        input[type=password]:focus,
        input[type=search]:focus,
        input[type=tel]:focus,
        textarea:focus,
        select:focus {
            border-color: #212529;
            transition: all 0.5s ease;
        }

        select {
            padding: 12px 25px;
        }

        textarea {
            resize: vertical;
        }

        blockquote {
            font-size: 14px;
            font-family: 'Roboto', sans-serif;
            font-weight: 300;
            background-color: #FAF8F8;
            margin-bottom: 15px;
            border-left: 4px solid;
            border-color: #212529;
            padding: 30px 70px 30px 70px;
            line-height: 24px;
            color: #202020;
            margin-bottom: 20px;
            font-style: italic;
            position: relative;
        }

        @media only screen and (max-width: 640px) {
            blockquote {
                padding: 30px 25px 30px 70px;
            }
        }

        @media only screen and (max-width: 480px) {
            blockquote {
                padding: 32px 20px;
            }
        }

        blockquote:before {
            content: '\f10d';
            font-family: fontawesome;
            position: absolute;
            left: 14px;
            font-size: 45px;
            top: 23px;
            color: #e7e6e6;
        }

        @media only screen and (max-width: 480px) {
            blockquote:before {
                opacity: 0.2;
            }
        }

        blockquote span {
            position: relative;
            padding-left: 20px;
        }

        blockquote span:before {
            content: '';
            width: 12px;
            height: 1px;
            background: #202020;
            position: absolute;
            left: 0;
            top: 50%;
            margin-top: -2px;
        }

        @media only screen and (min-width: 520px) and (max-width: 620px) {
            .container {
                width: 480px;
            }
        }

        /* ============================= */
        /*           Fancy Box           */
        /* ============================= */
        .fancybox-next span,
        .fancybox-prev span {
            background-image: none !important;
            width: 44px !important;
            height: 44px !important;
            line-height: 44px !important;
            text-align: center;
        }

        .fancybox-next span:before,
        .fancybox-prev span:before {
            content: '';
            position: absolute;
            font-family: 'FontAwesome';
            left: 0px;
            top: 0px;
            font-size: 12px;
            width: 44px !important;
            height: 44px !important;
            line-height: 44px !important;
            background-color: rgba(28, 28, 28, 0.4) !important;
            color: #ffffff;
            visibility: visible;
            transition: all 300ms ease;
            -webkit-transition: all 300ms ease;
            -ms-transition: all 300ms ease;
            -o-transition: all 300ms ease;
            -moz-transition: all 300ms ease;
        }

        .fancybox-next span:before {
            content: '\f178';
        }

        .fancybox-prev span:before {
            content: '\f177';
        }

        .fancybox-next:hover span:before,
        .fancybox-prev:hover span:before {
            background: #212529 !important;
            color: #FFFFFF;
        }

        .fancybox-type-image .fancybox-close {
            right: 0px;
            top: 0px;
            width: 45px;
            height: 45px;
            background: url(../images/icon-cross.png) center center no-repeat;
            background-color: #202020 !important;
        }

        .fancybox-type-image .fancybox-close:hover {
            background-color: #000000 !important;
        }

        .fancybox-type-image .fancybox-skin {
            padding: 0px !important;
        }

        .section_heading {
            margin-top: 0;
            background: #212529;
            position: relative;
            display: inline-block;
        }

        .section_heading:before {
            background: #212529;
            bottom: -12px;
            content: "";
            height: 2px;
            left: 0;
            position: absolute;
            width: 36px;
        }

        /* =========== Footer Social Icons =========== */
        .social_icons {
            font-size: 14px;
            line-height: 55px;
            text-align: center;
        }

        @media only screen and (max-width: 767px) {
            .social_icons {
                float: none;
                width: 100%;
            }
        }

        .social_icons a {
            width: 25px;
            height: 25px;
            line-height: 25px !important;
            position: relative;
            margin: 0 6px;
            text-align: center;
            display: inline-block;
            color: #212529;
            -webkit-transition: all 0.27s cubic-bezier(0.3, 0.1, 0.58, 1);
            -moz-transition: all 0.27s cubic-bezier(0.3, 0.1, 0.58, 1);
            -o-transition: all 0.27s cubic-bezier(0.3, 0.1, 0.58, 1);
            -ms-transition: all 0.27s cubic-bezier(0.3, 0.1, 0.58, 1);
            transition: all 0.27s cubic-bezier(0.3, 0.1, 0.58, 1);
        }

        .social_icons a i,
        .social_icons a span {
            position: relative;
            top: 0;
            left: 0;
        }

        .social_icons a:hover {
            color: #212529;
        }

        .social_icons a:hover:before {
            background: #212529;
        }

        .blog_heading_border {
            position: relative;
        }

        .blog_heading_border:before {
            content: "";
            background: #212529;
            bottom: -18px;
            display: block;
            height: 2px;
            margin-bottom: 6px;
            position: absolute;
            width: 18px;
        }

        .mt_reply {
            line-height: 12px;
            font-size: 12px;
        }

        .mt_btn_color,
        .mt_btn_white,
        input[type="submit"] {
            padding: 10px 30px;
            background: #212529;
            font-size: 16px;
            border-radius: 50px;
            margin-bottom: 10px;
            display: inline-block;
            color: #FFFFFF;
            text-decoration: none;
            font-family: 'Montserrat', sans-serif;
            font-weight: 500;
            position: relative;
            -webkit-box-shadow: 0px 7px 30px -2px rgba(33, 37, 41, 0.3);
            -moz-box-shadow: 0px 7px 30px -2px rgba(33, 37, 41, 0.3);
            box-shadow: 0px 7px 30px -2px rgba(33, 37, 41, 0.3);
        }

        @media only screen and (max-width: 640px) {

            .mt_btn_color,
            .mt_btn_white,
            input[type="submit"] {
                font-size: 14px;
                padding: 10px 19px;
            }
        }

        .mt_btn_color:hover,
        .mt_btn_color:focus,
        .mt_btn_white:hover,
        .mt_btn_white:focus,
        input[type="submit"]:hover,
        input[type="submit"]:focus {
            color: #FFFFFF;
            background: #212529;
            transition: all 0.5s ease;
            text-shadow: initial;
            text-decoration: none;
        }

        .mt_btn_white {
            background: #FFFFFF;
            color: #212529;
            font-weight: 600;
            border: 1px solid;
            border-color: #212529;
        }

        .mt_btn_white:hover,
        .mt_btn_white:focus {
            color: #FFFFFF;
            background: #212529;
            transition: all 0.5s ease;
            text-shadow: initial;
            text-decoration: none;
        }

        #content {
            margin-bottom: 60px;
        }

        .mt_error {
            margin-top: 10px;
            margin-bottom: 20px;
            padding: 13px 20px;
            text-align: center;
            background: rgba(228, 25, 25, 0.75);
            color: #fff;
            font-size: 14px;
        }

        .toast-message {
            font-size: 14px;
        }

        .mt_load {
            display: none;
            position: absolute;
            top: 11px;
            right: -35px;
            margin-left: 14px;
        }

        .mt_load span {
            margin: 0 auto;
            position: relative;
            text-indent: -9999em;
            border-top: 2px solid;
            border-right: 2px solid;
            border-bottom: 2px solid;
            border-color: #212529;
            border-left: 2px solid #FFFFFF;
            -webkit-transform: translateZ(0);
            -ms-transform: translateZ(0);
            transform: translateZ(0);
            -webkit-animation: load8 1.1s infinite linear;
            animation: load8 1.1s infinite linear;
            border-radius: 50%;
            width: 26px;
            height: 26px;
            display: inline-block;
        }

        .mt_load:after {
            border-radius: 50%;
            width: 26px;
            height: 26px;
        }

        @-webkit-keyframes load8 {
            0% {
                -webkit-transform: rotate(0deg);
                transform: rotate(0deg);
            }

            100% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }

        @keyframes load8 {
            0% {
                -webkit-transform: rotate(0deg);
                transform: rotate(0deg);
            }

            100% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }

        /* ========================================= */
        /* 		   			LAYOUT 					 */
        /* ========================================= */
        /* ====================== */
        /*         Header         */
        /* ====================== */
        #rt_header nav #navigation .navbar.navbar-default.reveal-menu-home.sticky-nav,
        #rt_header nav #navigation .sticky-nav-white {
            padding: 10px;
            background-color: white;
            transition: background 0.5s ease-in-out 0s, padding 0.5s ease-in-out 0s;
            -webkit-transition: background 0.5s ease-in-out 0s, padding 0.5s ease-in-out 0s;
            -moz-transition: background 0.5s ease-in-out 0s, padding 0.5s ease-in-out 0s;
            -o-transition: background 0.5s ease-in-out 0s, padding 0.5s ease-in-out 0s;
            -ms-transition: background 0.5s ease-in-out 0s, padding 0.5s ease-in-out 0s;
            -webkit-box-shadow: 0 1px 5px 0 rgba(0, 0, 0, 0.52);
            -moz-box-shadow: 0 1px 5px 0 rgba(0, 0, 0, 0.52);
            -o-box-shadow: 0 1px 5px 0 rgba(0, 0, 0, 0.52);
            -ms-box-shadow: 0 1px 5px 0 rgba(0, 0, 0, 0.52);
            box-shadow: 0 1px 5px 0 rgba(0, 0, 0, 0.52);
        }

        #rt_header nav #navigation .navbar.navbar-default.reveal-menu-home.sticky-nav .logo a img,
        #rt_header nav #navigation .sticky-nav-white .logo a img {
            margin-top: 2px;
            width: 130px;
        }

        @media only screen and (max-width: 360px) {

            #rt_header nav #navigation .navbar.navbar-default.reveal-menu-home.sticky-nav .logo a img,
            #rt_header nav #navigation .sticky-nav-white .logo a img {
                margin-top: 10px;
                width: 150px;
            }
        }

        #rt_header nav #navigation .sticky-nav-white {
            background-color: #FFFFFF !important;
        }

        #rt_header nav #navigation .sticky-nav-white ul.nav.navbar-nav li a {
            color: #444444 !important;
        }

        #rt_header nav #navigation .reveal-menu-home {
            background-color: transparent;
        }

        #rt_header nav #navigation .reveal-menu-home ul.nav.navbar-nav li a {
            color: #444444 !important;
        }

        #rt_header nav #navigation .reveal-menu-home .logo a img {
            margin-top: 2px;
            width: 130px;
        }

        @media only screen and (max-width: 360px) {
            #rt_header nav #navigation .reveal-menu-home .logo a img {
                margin-top: 10px;
                width: 150px;
            }
        }

        @media only screen and (min-width: 768px) and (max-width: 991px) {
            #rt_header nav #navigation .reveal-menu-home .navbar-right {
                float: none;
                margin: 0 auto;
                width: 97%;
            }
        }

        #rt_header nav #navigation .reveal-menu-white {
            background: #FFFFFF !important;
            padding: 15px !important;
            position: static !important;
            margin-bottom: 0;
            -webkit-box-shadow: 0 1px 2px 0 rgba(204, 204, 204, 0.3);
            -moz-box-shadow: 0 1px 2px 0 rgba(204, 204, 204, 0.3);
            -o-box-shadow: 0 1px 2px 0 rgba(204, 204, 204, 0.3);
            -ms-box-shadow: 0 1px 2px 0 rgba(204, 204, 204, 0.3);
            box-shadow: 0 1px 2px 0 rgba(204, 204, 204, 0.3);
        }

        #rt_header nav #navigation .reveal-menu-white .menushow .menu-btn .button_container .top,
        #rt_header nav #navigation .reveal-menu-white .menushow .menu-btn .button_container .bottom,
        #rt_header nav #navigation .reveal-menu-white .button_container span {
            background: #202020;
        }

        @media only screen and (max-width: 991px) {

            #rt_header nav #navigation .reveal-menu-white .menushow .menu-btn .button_container .top,
            #rt_header nav #navigation .reveal-menu-white .menushow .menu-btn .button_container .bottom,
            #rt_header nav #navigation .reveal-menu-white .button_container span {
                background: #FFFFFF;
            }
        }

        #rt_header nav #navigation .reveal-menu-white ul.nav.navbar-nav li a {
            color: #444444 !important;
        }

        #rt_header nav #navigation .reveal-menu-white .logo a img {
            margin-top: 2px;
            width: 130px;
        }

        @media only screen and (max-width: 360px) {
            #rt_header nav #navigation .reveal-menu-white .logo a img {
                margin-top: 10px;
                width: 150px;
            }
        }

        @media only screen and (min-width: 768px) and (max-width: 991px) {
            #rt_header nav #navigation .reveal-menu-white .navbar-right {
                float: none;
                margin: 0 auto;
                width: 97%;
            }
        }

        #rt_header nav #navigation .reveal-menu-blog {
            background: #FFFFFF !important;
            padding: 15px !important;
            -webkit-box-shadow: 0 1px 5px 0 rgba(0, 0, 0, 0.2);
            -moz-box-shadow: 0 1px 5px 0 rgba(0, 0, 0, 0.2);
            -o-box-shadow: 0 1px 5px 0 rgba(0, 0, 0, 0.2);
            -ms-box-shadow: 0 1px 5px 0 rgba(0, 0, 0, 0.2);
            box-shadow: 0 1px 5px 0 rgba(0, 0, 0, 0.2);
        }

        @media only screen and (min-width: 768px) and (max-width: 991px) {
            #rt_header nav #navigation .reveal-menu-blog .navbar-right {
                float: none !important;
                margin: 0 auto;
                width: 97%;
            }
        }

        #rt_header nav #navigation .reveal-menu-blog ul.nav.navbar-nav li a {
            color: #444444 !important;
        }

        #rt_header nav #navigation .navbar.navbar-default {
            padding: 25px 0;
            border-bottom: 0;
        }

        @media only screen and (max-width: 767px) {
            #rt_header nav #navigation .navbar.navbar-default .navbar-toggle {
                border-color: #444444;
                background-color: #444444;
            }

            #rt_header nav #navigation .navbar.navbar-default .navbar-toggle:hover {
                border-color: #FFFFFF;
                background-color: #FFFFFF;
            }

            #rt_header nav #navigation .navbar.navbar-default .navbar-toggle:hover .icon-bar {
                background-color: #444444;
            }
        }

        @media only screen and (max-width: 767px) {
            #rt_header nav #navigation .navbar.navbar-default .navbar-toggle {
                margin-top: 18px;
            }
        }

        @media only screen and (max-width: 767px) {
            #rt_header nav #navigation .navbar.navbar-default .navbar-toggle .icon-bar {
                background-color: #FFFFFF;
            }
        }

        @media only screen and (min-width: 768px) and (max-width: 991px) {
            #rt_header nav #navigation .navbar.navbar-default .navbar-header {
                float: none;
                margin-bottom: 15px;
                margin-top: 15px;
                text-align: center;
            }
        }

        @media only screen and (max-width: 767px) {
            #rt_header nav #navigation .navbar.navbar-default .navbar-collapse {
                background: #FFFFFF;
                border: none;
                margin-top: 15px;
                max-height: 415px;
            }
        }

        @media only screen and (max-width: 640px) {
            #rt_header nav #navigation .navbar.navbar-default .navbar-collapse {
                max-height: 225px;
            }
        }

        #rt_header nav #navigation .navbar.navbar-default .navbar-collapse ul.nav.navbar-nav li {
            padding: 0;
            margin-bottom: 0;
            margin-left: 20px;
        }

        @media only screen and (min-width: 991px) and (max-width: 1200px) {
            #rt_header nav #navigation .navbar.navbar-default .navbar-collapse ul.nav.navbar-nav li {
                margin-left: 10px;
            }
        }

        @media only screen and (min-width: 768px) and (max-width: 991px) {
            #rt_header nav #navigation .navbar.navbar-default .navbar-collapse ul.nav.navbar-nav li {
                margin-bottom: 0;
                margin-left: 12px;
                padding: 0;
            }
        }

        @media only screen and (max-width: 767px) {
            #rt_header nav #navigation .navbar.navbar-default .navbar-collapse ul.nav.navbar-nav li {
                margin: 0 15px;
                border-bottom: 1px solid #444444;
            }
        }

        #rt_header nav #navigation .navbar.navbar-default .navbar-collapse ul.nav.navbar-nav li:before {
            display: none;
        }

        @media only screen and (min-width: 768px) and (max-width: 991px) {
            #rt_header nav #navigation .navbar.navbar-default .navbar-collapse ul.nav.navbar-nav li:first-child {
                margin-left: 0;
            }
        }

        @media only screen and (max-width: 767px) {
            #rt_header nav #navigation .navbar.navbar-default .navbar-collapse ul.nav.navbar-nav li:last-child {
                border-bottom: none;
            }
        }

        #rt_header nav #navigation .navbar.navbar-default .navbar-collapse ul.nav.navbar-nav li a {
            font-size: 15px;
            font-family: 'Roboto', sans-serif;
            font-weight: 400;
            color: #FFFFFF;
            padding: 0;
            line-height: 43px;
            position: relative;
            letter-spacing: 1px;
            background: transparent;
        }

        @media only screen and (min-width: 991px) and (max-width: 1200px) {
            #rt_header nav #navigation .navbar.navbar-default .navbar-collapse ul.nav.navbar-nav li a {
                font-size: 13px;
            }
        }

        #rt_header nav #navigation .navbar.navbar-default .navbar-collapse ul.nav.navbar-nav li a:focus:before,
        #rt_header nav #navigation .navbar.navbar-default .navbar-collapse ul.nav.navbar-nav li a:hover:before {
            transform: scaleX(1);
            -webkit-transform: scaleX(1);
            -moz-transform: scaleX(1);
            -o-transform: scaleX(1);
            -ms-transform: scaleX(1);
            transform-origin: left top 0;
            -webkit-transform-origin: left top 0;
            -moz-transform-origin: left top 0;
            -o-transform-origin: left top 0;
            -ms-transform-origin: left top 0;
        }

        #rt_header nav #navigation .navbar.navbar-default .navbar-collapse ul.nav.navbar-nav li a:before {
            background-color: #444444;
            content: "";
            height: 1px;
            left: 0;
            position: absolute;
            top: 43px;
            transform: scaleX(0);
            -webkit-transform: scaleX(0);
            -moz-transform: scaleX(0);
            -o-transform: scaleX(0);
            -ms-transform: scaleX(0);
            transform-origin: right top 0;
            -webkit-transform-origin: right top 0;
            -moz-transform-origin: right top 0;
            -o-transform-origin: right top 0;
            -ms-transform-origin: right top 0;
            transition: transform 0.3s cubic-bezier(0.165, 0.84, 0.44, 1) 0s, -webkit-transform 0.3s cubic-bezier(0.165, 0.84, 0.44, 1) 0s;
            -moz-transition: transform 0.3s cubic-bezier(0.165, 0.84, 0.44, 1) 0s;
            -o-transition: transform 0.3s cubic-bezier(0.165, 0.84, 0.44, 1) 0s;
            -ms-transition: transform 0.3s cubic-bezier(0.165, 0.84, 0.44, 1) 0s;
            width: 100%;
        }

        #rt_header nav #navigation .navbar.navbar-default .navbar-collapse ul.nav.navbar-nav li.active a {
            background: none;
            border-bottom: 1px solid #444444;
        }

        @media only screen and (max-width: 767px) {
            #rt_header nav #navigation .navbar.navbar-default .navbar-collapse ul.nav.navbar-nav li.active a {
                border-bottom: none;
            }
        }

        #rt_header nav #navigation .navbar.navbar-default .navbar-collapse .dropdown a:before {
            display: none;
        }

        #rt_header nav #navigation .navbar.navbar-default .navbar-collapse .dropdown .dropdown-menu {
            border-radius: 5px !important;
            overflow: hidden;
            padding: 0;
            border-color: #f9f9f9;
        }

        #rt_header nav #navigation .navbar.navbar-default .navbar-collapse .dropdown .dropdown-menu li {
            margin-left: 0 !important;
            padding: 0 15px !important;
        }

        #rt_header nav #navigation .navbar.navbar-default .navbar-collapse .dropdown .dropdown-menu li:hover {
            background: #f9f9f9;
        }

        #rt_header nav #navigation .navbar.navbar-default .navbar-collapse .dropdown .dropdown-menu li a:before {
            display: none;
        }

        /* =========================== */
        /*         End Header          */
        /* =========================== */
        /* ====================== */
        /*         Banner         */
        /* ====================== */
        #mt_banner {
            overflow: hidden;
            background-size: cover;
            background-repeat: no-repeat;
            position: relative;
            width: 100%;
            background-attachment: fixed;
            background-color: #fcfcfc;
        }

        @media only screen and (max-width: 991px) {
            #mt_banner {
                background-size: auto 749px;
                background-attachment: initial;
                background-position: 70% 0;
            }
        }

        #mt_banner .bg_home {
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
            left: 0;
            z-index: -9999;
        }

        #mt_banner .static {
            position: static;
        }

        #mt_banner .relative {
            position: relative;
        }

        #mt_banner .banner-wrapper {
            position: absolute;
            top: 35%;
            z-index: 18;
            width: 100%;
            margin: -20px auto 0;
        }

        #mt_banner .banner-caption {
            color: #FFFFFF;
            margin: 0 auto;
            padding: 15px;
            text-align: left;
        }

        #mt_banner .banner-caption .mt_btn_color {
            background: #FFFFFF;
            color: #444444;
        }

        #mt_banner .banner-caption h1 {
            font-size: 65px;
            margin: 0 auto;
            font-weight: 900;
            color: #FFFFFF;
            line-height: 75px;
        }

        @media only screen and (max-width: 991px) {
            #mt_banner .banner-caption h1 {
                font-size: 45px;
                line-height: 52px;
            }
        }

        @media only screen and (max-width: 480px) {
            #mt_banner .banner-caption h1 {
                font-size: 24px;
                line-height: 32px;
            }
        }

        @media only screen and (max-width: 360px) {
            #mt_banner .banner-caption h1 {
                font-size: 18px;
            }
        }

        #mt_banner .banner-caption h1 span {
            font-weight: 900;
            color: #FFFFFF;
            display: block;
        }

        #mt_banner .banner-caption p {
            text-align: left;
            font-size: 36px;
            margin: 15px 0 22px 0px;
            color: #FFFFFF !important;
        }

        @media only screen and (max-width: 991px) {
            #mt_banner .banner-caption p {
                font-size: 24px;
                margin: 15px 0 5px;
            }
        }

        @media only screen and (max-width: 480px) {
            #mt_banner .banner-caption p {
                font-size: 18px;
            }
        }

        #mt_banner .banner-caption .banner_down {
            border-radius: 50%;
            font-size: 36px;
            height: 50px;
            margin-top: 20px;
            padding: 0;
            text-align: center;
            width: 50px;
        }

        #mt_general_banner {
            padding: 145px 0 100px 0;
        }

        @media only screen and (max-width: 767px) {
            #mt_general_banner {
                padding: 110px 0 50px;
            }
        }

        #mt_general_banner .banner-caption {
            width: 50%;
        }

        @media only screen and (max-width: 767px) {
            #mt_general_banner .banner-caption {
                width: 100%;
            }
        }

        #mt_general_banner .banner-caption h1 {
            font-size: 40px;
            font-weight: 300;
            margin: 0;
            text-transform: uppercase;
        }

        @media only screen and (max-width: 767px) {
            #mt_general_banner .banner-caption h1 {
                font-size: 32px;
            }
        }

        @media only screen and (max-width: 480px) {
            #mt_general_banner .banner-caption h1 {
                font-size: 24px;
            }
        }

        #mt_general_banner .banner-caption p {
            margin: 0;
        }

        #mt_banner_simple {
            position: relative;
            padding: 100px 0 0;
        }

        #mt_banner_simple .banner-caption {
            margin: 0 auto;
            text-align: center;
            width: 60%;
            padding: 0 15px;
        }

        @media only screen and (max-width: 991px) {
            #mt_banner_simple .banner-caption {
                width: 100%;
            }
        }

        #mt_banner_simple .banner-caption h2 {
            font-size: 37px;
            font-weight: 300;
            line-height: 50px;
        }

        @media only screen and (max-width: 767px) {
            #mt_banner_simple .banner-caption h2 {
                font-size: 26px;
                line-height: 38px;
            }
        }

        #mt_banner_slider {
            position: relative;
            height: 400px;
        }

        #mt_banner_slider .banner_caption_text {
            margin: 165px auto 0;
            text-align: center;
            width: 60%;
            padding: 0 15px;
        }

        @media only screen and (max-width: 991px) {
            #mt_banner_slider .banner_caption_text {
                width: 100%;
            }
        }

        #mt_banner_slider .banner_caption_text h2 {
            font-size: 50px;
            font-weight: 600;
            line-height: 50px;
            margin-bottom: 15px;
        }

        @media only screen and (max-width: 767px) {
            #mt_banner_slider .banner_caption_text h2 {
                font-size: 26px;
                line-height: 38px;
            }
        }

        #mt_banner_slider .banner_caption_text a {
            font-size: 16px;
        }

        #mt_banner_border {
            position: relative;
            padding: 200px 0;
            overflow: hidden;
            background-size: cover;
            background-repeat: no-repeat;
            position: relative;
            width: 100%;
            background-color: #fcfcfc;
        }

        #mt_banner_border .banner-caption {
            left: 50%;
            padding: 0 15px;
            position: absolute;
            text-align: center;
            top: 50%;
            transform: translate(-50%, -50%);
            width: 60%;
            border: 8px solid #fff;
        }

        @media only screen and (max-width: 991px) {
            #mt_banner_border .banner-caption {
                width: 100%;
            }
        }

        #mt_banner_border .banner-caption h2 {
            font-size: 37px;
            font-weight: 600;
            line-height: 50px;
        }

        @media only screen and (max-width: 767px) {
            #mt_banner_border .banner-caption h2 {
                font-size: 26px;
                line-height: 38px;
            }
        }

        #mt_banner_static_header {
            position: relative;
            height: 430px;
            overflow: hidden;
            background-size: cover;
            background-repeat: no-repeat;
            position: relative;
            width: 100%;
            background-color: #fcfcfc;
        }

        #mt_banner_static_header .banner-caption {
            left: 50%;
            padding: 0 15px;
            position: absolute;
            text-align: center;
            top: 50%;
            transform: translate(-50%, -50%);
            width: 60%;
        }

        @media only screen and (max-width: 991px) {
            #mt_banner_static_header .banner-caption {
                width: 100%;
            }
        }

        #mt_banner_static_header .banner-caption h2 {
            font-size: 37px;
            font-weight: 600;
            line-height: 50px;
        }

        @media only screen and (max-width: 767px) {
            #mt_banner_static_header .banner-caption h2 {
                font-size: 26px;
                line-height: 38px;
            }
        }

        /* Slider Section */
        .swiper-container {
            height: 100%;
            margin: 60px;
        }

        .swiper-slide {
            overflow: hidden;
        }

        .slide-inner {
            position: absolute;
            width: 100%;
            height: 100%;
            left: 0;
            top: 0;
            background-size: cover;
            background-position: center;
        }

        .swiper-button-next.swiper-button-white,
        .swiper-container-rtl .swiper-button-prev.swiper-button-white,
        .swiper-button-prev.swiper-button-white,
        .swiper-container-rtl .swiper-button-next.swiper-button-white {
            background-image: none !important;
        }

        .swiper-button-next.swiper-button-white:before,
        .swiper-container-rtl .swiper-button-prev.swiper-button-white:before,
        .swiper-button-prev.swiper-button-white:before,
        .swiper-container-rtl .swiper-button-next.swiper-button-white:before {
            content: '\f3d6';
            font-family: 'Ionicons';
            font-size: 45px;
            position: absolute;
            right: 25px;
            color: #212529;
        }

        .swiper-button-prev.swiper-button-white:before,
        .swiper-container-rtl .swiper-button-next.swiper-button-white:before {
            content: '\f3d5';
            left: 25px;
        }

        /* ========================== */
        /*         End Banner         */
        /* ========================== */
        /*===================================== */
        /*           Portfolio Section           */
        /* ===================================== */
        #mt_portfolio {
            padding: 100px 0;
        }

        @media only screen and (max-width: 640px) {
            #mt_portfolio {
                padding: 60px 0;
            }
        }

        @media only screen and (max-width: 640px) {
            #mt_portfolio h2 {
                margin-bottom: 30px;
            }
        }

        #mt_portfolio .portfolio_grid {
            width: calc(33.3333333% - 25px);
            height: auto;
            margin: 12px;
            float: left;
            position: relative;
            max-height: 800px;
            overflow: hidden;
        }

        @media only screen and (max-width: 767px) {
            #mt_portfolio .portfolio_grid {
                padding: 0 15px;
                width: 97%;
            }
        }

        @media only screen and (max-width: 480px) {
            #mt_portfolio .portfolio_grid {
                width: 95%;
            }
        }

        #mt_portfolio li:after {
            display: none;
        }

        #mt_portfolio li:before {
            display: none;
        }

        #mt_portfolio .mt_filter {
            font-family: 'Roboto Condensed', sans-serif;
            font-weight: 300;
            margin-bottom: 20px;
        }

        #mt_portfolio .mt_filter ul li {
            margin-right: 15px;
            padding: 0;
            margin-bottom: 17px;
        }

        @media only screen and (max-width: 640px) {
            #mt_portfolio .mt_filter ul li {
                margin-bottom: 0;
            }
        }

        #mt_portfolio .mt_filter ul li a {
            color: #666666;
            font-size: 14px;
            text-decoration: none;
            text-transform: uppercase;
        }

        #mt_portfolio .mt_filter ul li a:hover:before {
            transform: scaleX(1);
            -webkit-transform: scaleX(1);
            -moz-transform: scaleX(1);
            -o-transform: scaleX(1);
            -ms-transform: scaleX(1);
            transform-origin: left top 0;
            -webkit-transform-origin: left top 0;
            -moz-transform-origin: left top 0;
            -o-transform-origin: left top 0;
            -ms-transform-origin: left top 0;
        }

        #mt_portfolio .mt_filter ul li a:before {
            background-color: #212529;
            content: "";
            height: 0.5px;
            left: 0;
            position: absolute;
            top: 25px;
            transform: scaleX(0);
            -webkit-transform: scaleX(0);
            -moz-transform: scaleX(0);
            -o-transform: scaleX(0);
            -ms-transform: scaleX(0);
            transform-origin: right top 0;
            -webkit-transform-origin: right top 0;
            -moz-transform-origin: right top 0;
            -o-transform-origin: right top 0;
            -ms-transform-origin: right top 0;
            transition: transform 0.3s cubic-bezier(0.165, 0.84, 0.44, 1) 0s, -webkit-transform 0.3s cubic-bezier(0.165, 0.84, 0.44, 1) 0s;
            -moz-transition: transform 0.3s cubic-bezier(0.165, 0.84, 0.44, 1) 0s;
            -o-transition: transform 0.3s cubic-bezier(0.165, 0.84, 0.44, 1) 0s;
            -ms-transition: transform 0.3s cubic-bezier(0.165, 0.84, 0.44, 1) 0s;
            width: 99%;
        }

        #mt_portfolio .mt_filter li a.active {
            border-bottom: 0.5px solid #212529;
        }

        #mt_portfolio .portfolio_row {
            margin-top: 30px;
        }

        #mt_portfolio .portfolio_hover * {
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            -webkit-transition: all 0.25s ease;
            transition: all 0.25s ease;
        }

        #mt_portfolio .portfolio_hover:before {
            position: absolute;
            top: 10px;
            bottom: 10px;
            left: 10px;
            right: 10px;
            top: 100%;
            content: '';
            background-color: #212529;
            -webkit-transition: all 0.25s ease;
            transition: all 0.25s ease;
            -webkit-transition-delay: 0.25s;
            transition-delay: 0.25s;
        }

        @media only screen and (max-width: 767px) {
            #mt_portfolio .portfolio_hover:before {
                right: 25px;
                left: 25px;
            }
        }

        #mt_portfolio .portfolio_hover img {
            vertical-align: top;
            max-width: 100%;
            backface-visibility: hidden;
        }

        #mt_portfolio .portfolio_hover figcaption {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            z-index: 1;
            align-items: center;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        #mt_portfolio .portfolio_hover h3,
        #mt_portfolio .portfolio_hover h5 {
            margin: 0;
            opacity: 0;
            letter-spacing: 1px;
        }

        #mt_portfolio .portfolio_hover h3 {
            -webkit-transform: translateY(-100%);
            transform: translateY(-100%);
            text-transform: uppercase;
            font-weight: 600;
            font-size: 18px;
            color: #FFFFFF;
            -webkit-transition-delay: 0.05s;
            transition-delay: 0.05s;
            margin-bottom: 5px;
        }

        @media only screen and (max-width: 767px) {
            #mt_portfolio .portfolio_hover h3 {
                font-size: 16px;
            }
        }

        #mt_portfolio .portfolio_hover h5 {
            font-weight: normal;
            padding: 3px 10px;
            -webkit-transform: translateY(-100%);
            transform: translateY(-100%);
            -webkit-transition-delay: 0s;
            transition-delay: 0s;
        }

        #mt_portfolio .portfolio_hover .open_img h5 {
            background: #FFFFFF;
            border-radius: 50%;
            color: #212529;
            display: block;
            height: 40px;
            text-align: center;
            width: 40px;
        }

        #mt_portfolio .portfolio_hover:hover:before,
        #mt_portfolio .portfolio_hover.hover:before {
            top: 10px;
            -webkit-transition-delay: 0s;
            transition-delay: 0s;
        }

        #mt_portfolio .portfolio_hover:hover h3,
        #mt_portfolio .portfolio_hover.hover h3,
        #mt_portfolio .portfolio_hover:hover h5,
        #mt_portfolio .portfolio_hover.hover h5 {
            -webkit-transform: translateY(0);
            transform: translateY(0);
            opacity: 1;
        }

        #mt_portfolio .portfolio_hover:hover h3,
        #mt_portfolio .portfolio_hover.hover h3 {
            -webkit-transition-delay: 0.3s;
            transition-delay: 0.3s;
        }

        #mt_portfolio .portfolio_hover:hover h5,
        #mt_portfolio .portfolio_hover.hover h5 {
            -webkit-transition-delay: 0.2s;
            transition-delay: 0.2s;
        }

        #mt_portfolio.portfolio_col_2 {
            padding-top: 0 !important;
        }

        #mt_portfolio.portfolio_col_2 .portfolio_grid {
            width: calc(50% - 25px);
            margin: 10px;
        }

        @media only screen and (max-width: 767px) {
            #mt_portfolio.portfolio_col_2 .portfolio_grid {
                padding: 0 15px;
                width: 97% !important;
            }
        }

        @media only screen and (max-width: 480px) {
            #mt_portfolio.portfolio_col_2 .portfolio_grid {
                width: 95%;
            }
        }

        #mt_portfolio.portfolio_col_4 {
            padding-top: 0 !important;
        }

        #mt_portfolio.portfolio_col_4 .portfolio_grid {
            width: calc(25% - 0px);
            margin: 0;
        }

        @media only screen and (max-width: 767px) {
            #mt_portfolio.portfolio_col_4 .portfolio_grid {
                padding: 0 15px;
                width: 97% !important;
            }
        }

        @media only screen and (max-width: 480px) {
            #mt_portfolio.portfolio_col_4 .portfolio_grid {
                width: 95%;
            }
        }

        /* ========================================= */
        /*           End Portfolio Section           */
        /* ========================================= */
        /*============================= */
        /*          Newsletter          */
        /* =============================*/
        #mt_newsletter {
            padding: 100px 0;
            position: relative;
            background: #fcfcfc;
        }

        #mt_newsletter .started_heading h1 {
            color: #212529;
            font-weight: 700;
            font-size: 70px;
            line-height: 75px;
            text-align: left;
            margin-top: 0;
        }

        @media only screen and (max-width: 991px) {
            #mt_newsletter .started_heading h1 {
                font-size: 50px;
                line-height: 50px;
            }
        }

        @media only screen and (max-width: 767px) {
            #mt_newsletter .started_heading h1 {
                font-size: 32px;
                line-height: 36px;
                margin-bottom: 5px;
            }
        }

        @media only screen and (max-width: 480px) {
            #mt_newsletter .started_heading h1 {
                font-size: 22px;
                line-height: 22px;
            }
        }

        #mt_newsletter .started_heading p {
            text-align: left;
        }

        #mt_newsletter .newsletter_form {
            margin-top: 20px;
        }

        #mt_newsletter .newsletter_form input[type="email"] {
            border-color: #eceaea;
            border-radius: 0;
        }

        #mt_newsletter .newsletter_form .mt_btn_color {
            background: #212529;
            border-radius: 0;
            box-shadow: none;
        }

        #mt_newsletter .newsletter_form .mt_btn_color:hover {
            background: #212529;
            transition: all ease 0.5s;
        }

        /* ================================== */
        /*          End Newsletter            */
        /* ================================== */
        /* ====================== */
        /*         Contact        */
        /* ====================== */
        #mt_contact_section {
            margin-top: 0;
            padding: 0 0 120px 0;
        }

        #mt_contact_section .no_padding {
            padding-left: 0 !important;
            padding-right: 0 !important;
        }

        #mt_contact_section .mt_address {
            font-size: 32px;
            margin-bottom: 25px;
        }

        @media only screen and (max-width: 767px) {
            #mt_contact_section .mt_address {
                font-size: 24px;
                margin-bottom: 5px;
            }
        }

        @media only screen and (max-width: 480px) {
            #mt_contact_section .mt_address {
                font-size: 18px;
            }
        }

        #mt_contact_section .mt_phone {
            font-size: 22px;
        }

        @media only screen and (max-width: 480px) {
            #mt_contact_section .mt_phone {
                font-size: 18px;
            }
        }

        #mt_contact_section .mt_phone span {
            font-size: 18px;
            margin-right: 15px;
        }

        @media only screen and (max-width: 480px) {
            #mt_contact_section .mt_phone span {
                font-size: 14px;
            }
        }

        @media only screen and (max-width: 767px) {
            #mt_contact_section .contact_form {
                margin-top: 35px;
            }
        }

        #mt_contact_section .contact_form h3 {
            font-size: 26px;
            font-weight: 400;
            margin-top: 0;
        }

        @media only screen and (max-width: 480px) {
            #mt_contact_section .contact_form h3 {
                font-size: 22px;
                margin-bottom: 15px;
            }
        }

        /* =========================== */
        /*         End Contact         */
        /* =========================== */
        /* ====================== */
        /*         Footer         */
        /* ====================== */
        #mt_footer {
            padding: 6px 0;
            background: #FFFFFF;
            -webkit-box-shadow: 0px 8px 47px 2px #cccccc;
            -moz-box-shadow: 0px 8px 47px 2px #cccccc;
            box-shadow: 0px 8px 47px 2px #cccccc;
            /* =========== Copyright =========== */
        }

        @media only screen and (max-width: 767px) {
            #mt_footer .col-sm-6 {
                float: left;
                width: 100%;
            }
        }

        #mt_footer .copyright p {
            font-size: 14px;
            color: #444444;
            letter-spacing: 1px;
            font-weight: 300;
            font-family: 'Montserrat', sans-serif;
            margin-bottom: 0;
            line-height: 55px;
        }

        @media only screen and (max-width: 767px) {
            #mt_footer .copyright p {
                text-align: center;
            }
        }

        /* =========================== */
        /*         End Footer          */
        /* =========================== */
        /* ========================================= */
        /* 		   			About Page   			 */
        /* ========================================= */
        /* ============================ */
        /*            About             */
        /* ============================ */
        /* About Me */
        #mt_about_me {
            padding: 0 0 100px 0;
            position: relative;
        }

        @media only screen and (max-width: 640px) {
            #mt_about_me {
                padding: 60px 0;
            }
        }

        @media only screen and (max-width: 640px) {
            #mt_about_me h2 {
                margin-bottom: 30px;
            }
        }

        #mt_about_me .mt_about_me h3 {
            margin-top: 0;
        }

        @media only screen and (max-width: 480px) {
            #mt_about_me .mt_about_me h3 {
                font-size: 20px;
            }
        }

        #mt_about_me .mt_about_me p {
            margin-bottom: 20px;
        }

        @media only screen and (max-width: 640px) {
            #mt_about_me .mt_about_me {
                margin-bottom: 30px;
            }
        }

        #mt_about_me .mt_skills {
            margin-bottom: 60px;
        }

        #mt_about_me .mt_skills h3 {
            font-size: 18px;
            font-weight: 500;
        }

        #mt_about_me .about_img {
            text-align: left;
        }

        @media only screen and (max-width: 767px) {
            #mt_about_me .about_img {
                margin-top: 30px;
                text-align: center;
            }
        }

        @media only screen and (max-width: 640px) {
            #mt_about_me .about_img {
                margin-top: 0;
            }
        }

        #mt_about_me .about_img img {
            border-radius: 8px;
            width: 85%;
        }

        @media only screen and (max-width: 767px) {
            #mt_about_me .about_img img {
                width: 45%;
            }
        }

        @media only screen and (max-width: 640px) {
            #mt_about_me .about_img img {
                width: 100%;
            }
        }

        /* Experience Section */
        #mt_experience_sec {
            padding: 100px 0;
            background: #fcfcfc;
        }

        @media only screen and (max-width: 480px) {
            #mt_experience_sec h3 {
                font-size: 20px;
            }
        }

        #mt_experience_sec .mt_skill-progress {
            margin-top: 20px;
        }

        #mt_experience_sec .mt_skill-progress .mt_skill-bar {
            margin-bottom: 28px;
        }

        #mt_experience_sec .mt_skill-progress .mt_skill-bar .progress-mark span,
        #mt_experience_sec .mt_skill-progress .mt_skill-bar .progress-title-holder {
            color: #5e5e5e;
            font-family: Montserrat, sans-serif;
            font-weight: 600;
            margin: 0 0 15px;
        }

        #mt_experience_sec .mt_skill-progress .mt_skill-bar .progress-title-holder {
            position: relative;
            font-size: 14px;
            text-transform: uppercase;
            margin-bottom: 5px;
        }

        #mt_experience_sec .mt_skill-progress .mt_skill-bar .progress-title {
            z-index: 100;
        }

        #mt_experience_sec .mt_skill-progress .mt_skill-bar .progress-wrapper {
            width: 100%;
            z-index: 10;
        }

        #mt_experience_sec .mt_skill-progress .mt_skill-bar .progress-mark {
            position: absolute;
            bottom: 0;
            transform: translateX(-50%);
            -ms-transform: translateX(-50%);
            -webkit-transform: translateX(-50%);
        }

        #mt_experience_sec .mt_skill-progress .mt_skill-bar .progress-content,
        #mt_experience_sec .mt_skill-progress .mt_skill-bar .progress-outter {
            height: 4px;
            border-radius: 3px;
        }

        #mt_experience_sec .mt_skill-progress .mt_skill-bar .progress-outter {
            background-color: #c8c8c8;
        }

        #mt_experience_sec .mt_skill-progress .mt_skill-bar .progress-content {
            background-color: #484848;
            width: 0%;
        }

        #mt_experience_sec .mt_work_postion h4 {
            color: #444;
            font-size: 16px;
            font-weight: 500;
            margin: 0;
        }

        #mt_experience_sec .mt_work_postion p {
            margin-bottom: 15px;
        }

        /* Client Section */
        #mt_client {
            padding: 50px 0;
        }

        #mt_client .owl-carousel {
            padding: 50px 0;
        }

        #mt_client .owl-carousel .owl-item img {
            -webkit-filter: grayscale(100%);
            /* Safari 6.0 - 9.0 */
            filter: grayscale(100%);
        }

        #mt_client .owl-carousel .owl-item img:hover {
            -webkit-filter: grayscale(0);
            /* Safari 6.0 - 9.0 */
            filter: grayscale(0);
            transition: all 0.5s ease;
        }

        #mt_client h3 {
            font-size: 32px;
            line-height: 35px;
            margin-bottom: 0;
            font-weight: 500;
        }

        /* About Us */
        #mt_company_info {
            padding-bottom: 100px;
        }

        #mt_company_info .about_company h3 {
            margin-top: 0;
        }

        /* ================================= */
        /*         		End About            */
        /* ================================= */
        /* ====================== */
        /*         	Team          */
        /* ====================== */
        #mt_team {
            padding: 100px 0;
            position: relative;
        }

        #mt_team .owl-dots {
            text-align: center;
            margin-top: 30px;
        }

        #mt_team .owl-dots .owl-dot.active {
            background: #212529 none repeat scroll 0 0;
            border-radius: 5px;
            height: 5px;
            transition: all 0.5s ease 0s;
            width: 20px;
        }

        #mt_team .owl-dots .owl-dot {
            border: 1px solid #212529;
            border-radius: 5px;
            display: inline-block;
            height: 5px;
            margin-right: 12px;
            width: 20px;
        }

        @media only screen and (max-width: 449px) {
            #mt_team .item {
                margin: 0 auto;
                width: 290px;
            }
        }

        #mt_team .team_member {
            background: #fff none repeat scroll 0 0;
            border-radius: 10px;
            margin-bottom: 20px;
            padding: 30px 15px;
            position: relative;
            text-align: center;
            -webkit-box-shadow: 3px 4px 9px -6px #cccccc;
            -moz-box-shadow: 3px 4px 9px -6px #cccccc;
            box-shadow: 3px 4px 9px -6px #cccccc;
            border: 1px solid #f9f9f9;
        }

        #mt_team .team_member img {
            border-radius: 50%;
            margin: 0 auto 15px;
            width: auto;
        }

        #mt_team .team_member .member_name {
            margin-bottom: 20px;
        }

        #mt_team .team_member .member_name h3 {
            margin-bottom: 2px;
            margin-top: 0;
        }

        @media only screen and (max-width: 640px) {
            #mt_team .team_member .member_name h3 {
                font-size: 18px;
            }
        }

        #mt_team .team_member .member_name span {
            display: block;
            font-size: 12px;
            color: #666666;
            font-family: 'Roboto', sans-serif;
            font-weight: 300;
        }

        #mt_team .team_member ul li {
            display: inline-block;
            padding-left: 5px;
        }

        #mt_team .team_member ul li:before {
            display: none;
        }

        #mt_team .team_member ul li:hover {
            background-color: #FFFFFF;
            border-color: #FFFFFF;
            transition: all 0.5s ease;
        }

        #mt_team .team_member ul li i {
            color: #212529;
            display: inline-block;
            line-height: 30px;
        }

        @media only screen and (max-width: 1200px) {
            #mt_team .team_member ul li i {
                line-height: 20px;
                font-size: 11px;
            }
        }

        @media only screen and (max-width: 991px) {
            #mt_team .team_member ul li i {
                line-height: 30px;
                font-size: 18px;
            }
        }

        #mt_team .team_member ul li i:hover {
            color: #212529;
        }

        /* =========================== */
        /*         	End Team           */
        /* =========================== */
        /* ====================== */
        /*      Testimonials      */
        /* ====================== */
        #mt_testimonial {
            padding: 100px 0;
            background: #f9f9f9;
        }

        @media only screen and (max-width: 640px) {
            #mt_testimonial {
                padding: 60px 0;
            }
        }

        @media only screen and (max-width: 640px) {
            #mt_testimonial h2 {
                margin-bottom: 30px;
            }
        }

        #mt_testimonial .owl-dots {
            text-align: center;
            margin-top: 30px;
        }

        @media only screen and (max-width: 640px) {
            #mt_testimonial .owl-dots {
                margin-top: 10px;
            }
        }

        #mt_testimonial .owl-dots .owl-dot.active {
            background: #212529 none repeat scroll 0 0;
            border-radius: 5px;
            height: 5px;
            transition: all 0.5s ease 0s;
            width: 20px;
        }

        #mt_testimonial .owl-dots .owl-dot {
            border: 1px solid #212529;
            border-radius: 5px;
            display: inline-block;
            height: 5px;
            margin-right: 12px;
            width: 20px;
        }

        #mt_testimonial .testimonial_main {
            background: #FFFFFF;
            padding: 65px 25px;
            margin: 0 0 8px 0px;
            padding-bottom: 25px;
            float: left;
            border-radius: 8px;
            width: 100%;
        }

        @media only screen and (max-width: 640px) {
            #mt_testimonial .testimonial_main {
                text-align: center;
                margin: 0 0 8px;
            }
        }

        #mt_testimonial .testimonial_main p {
            margin-bottom: 6px !important;
            position: relative;
        }

        #mt_testimonial .testimonial_main p:before {
            content: "\f10d";
            font-family: fontawesome;
            font-size: 50px;
            left: -30px;
            opacity: 0.2;
            position: absolute;
            top: -30px;
            color: #ccc;
        }

        @media only screen and (max-width: 640px) {
            #mt_testimonial .testimonial_main p {
                font-size: 14px;
                line-height: 22px;
            }
        }

        #mt_testimonial .testimonial_main em {
            font-size: 16px;
            font-weight: 500;
            letter-spacing: 1px;
            color: #212529;
        }

        #mt_testimonial .testimonial_main span {
            display: block;
            font-size: 12px;
            margin-top: -4px;
        }

        /* =========================== */
        /*      End Testimonials       */
        /* =========================== */
        /* ====================== */
        /*        Services        */
        /* ====================== */
        #mt_services {
            padding: 100px 0;
            background: #f9f9f9;
        }

        @media only screen and (max-width: 640px) {
            #mt_services {
                padding: 60px 0;
            }
        }

        @media only screen and (max-width: 640px) {
            #mt_services h2 {
                margin-bottom: 30px;
            }
        }

        #mt_services h3 {
            margin-top: 0;
            margin-bottom: 0;
        }

        @media only screen and (max-width: 480px) {
            #mt_services h3 {
                font-size: 20px;
            }
        }

        #mt_services .box {
            padding: 15px 30px;
            background: #FFFFFF;
            margin-top: 30px;
            transition: all 0.5s ease;
            -webkit-transition: all 0.5s ease;
            -moz-transition: all 0.5s ease;
            -o-transition: all 0.5s ease;
            -ms-transition: all 0.5s ease;
            -webkit-box-shadow: 0 3px 9px -2px #d0cece;
            -moz-box-shadow: 0 3px 9px -2px #d0cece;
            box-shadow: 0 3px 9px -2px #d0cece;
        }

        @media only screen and (min-width: 768px) and (max-width: 991px) {
            #mt_services .box {
                margin-bottom: 30px;
            }
        }

        #mt_services .box:hover {
            -webkit-box-shadow: 0 5px 25px 0 rgba(5, 5, 5, 0.2);
            -moz-box-shadow: 0 5px 25px 0 rgba(5, 5, 5, 0.2);
            -o-box-shadow: 0 5px 25px 0 rgba(5, 5, 5, 0.2);
            -ms-box-shadow: 0 5px 25px 0 rgba(5, 5, 5, 0.2);
            box-shadow: 0 5px 25px 0 rgba(5, 5, 5, 0.2);
            transition: all 0.5s ease;
            -webkit-transition: all 0.5s ease;
            -moz-transition: all 0.5s ease;
            -o-transition: all 0.5s ease;
            -ms-transition: all 0.5s ease;
        }

        #mt_services .box .icon {
            text-align: center;
            margin: 20px 0;
        }

        #mt_services .box .icon i {
            font-size: 50px;
            color: #212529;
        }

        #mt_services .box h3 {
            margin-bottom: 23px;
            margin-top: 0;
            text-align: center;
            color: #444444;
            font-size: 18px;
            font-weight: 400;
        }

        #mt_services .box p {
            margin-bottom: 30px;
            text-align: left;
        }

        /* ========================== */
        /*        End Services        */
        /* ========================== */
        /* ===================================== */
        /* 		   	Portfolio Detail  	 	  	 */
        /* ===================================== */
        /*=========================================== */
        /*           Portfolio Detail Section          */
        /* =========================================== */
        #portfolio_details {
            padding: 100px 0;
        }

        #portfolio_details .portfolio_description h2 {
            margin-top: 0;
            margin-bottom: 15px;
            color: #444444;
            font-weight: 700;
        }

        #portfolio_details .portfolio_description p {
            font-weight: 300;
            line-height: 28px;
        }

        #portfolio_details .portfolio_sidebar {
            float: left;
            width: 100%;
        }

        #portfolio_details .portfolio_sidebar .mt_portfolio_title {
            font-size: 45px;
            line-height: 60px;
            margin-top: 0;
            margin-bottom: 30px;
        }

        @media only screen and (max-width: 991px) {
            #portfolio_details .portfolio_sidebar .mt_portfolio_title {
                font-size: 36px;
                line-height: 45px;
            }
        }

        #portfolio_details .portfolio_sidebar .mt_sidebar_tx {
            float: left;
            width: 100%;
            font-size: 14px;
            font-weight: 600;
        }

        #portfolio_details .portfolio_sidebar .mt_sidebar_tx span {
            margin-left: 5px;
            font-weight: 200;
        }

        @media only screen and (max-width: 991px) {
            #portfolio_details .portfolio_sidebar .mt_sidebar_tx {
                width: 100%;
            }
        }

        #portfolio_details .portfolio_sidebar p {
            margin-bottom: 11px;
            font-size: 14px;
        }

        #portfolio_details .portfolio_sidebar li {
            float: left;
            margin-right: 25px;
            color: #818181;
            line-height: 28px;
            padding-left: 0;
            margin-bottom: 8px;
        }

        #portfolio_details .portfolio_sidebar li:before {
            display: none;
        }

        #portfolio_details .portfolio_sidebar li:after {
            display: none;
        }

        #portfolio_details .portfolio_sidebar a {
            color: #818181;
            text-decoration: none;
            font-size: 14px;
        }

        #portfolio_details .portfolio_sidebar a:hover {
            text-decoration: underline;
        }

        #portfolio_gallery .project_gallery .owl-carousel .owl-item {
            position: relative;
            background-color: transparent;
            cursor: url(../images/cursor-light.html), move;
            -moz-cursor: url(../images/cursor-light.html), move;
            -webkit-cursor: url(../images/cursor-light.html), move;
            -o-cursor: url(../images/cursor-light.html), move;
            -ms-cursor: url(../images/cursor-light.html), move;
            overflow: hidden;
        }

        #portfolio_gallery .project_gallery .owl-carousel img {
            height: auto;
            opacity: 0.4;
            width: 100%;
        }

        #portfolio_gallery .project_gallery .owl-item.active.center img {
            display: block;
            opacity: 1;
            -moz-transform: scale(1);
            -webkit-transform: scale(1);
            -o-transform: scale(1);
            -ms-transform: scale(1);
            transform: scale(1);
            -webkit-box-shadow: 7px 6px 24px 0px #cccccc;
            -moz-box-shadow: 7px 6px 24px 0px #cccccc;
            box-shadow: 7px 6px 24px 0px #cccccc;
        }

        #portfolio_gallery .project_gallery .item,
        #portfolio_gallery .project_gallery .item img {
            transition: all 0.35s ease-in-out 0s;
            -moz-transition: all 0.35s ease-in-out 0s;
            -webkit-transition: all 0.35s ease-in-out 0s;
            -o-transition: all 0.35s ease-in-out 0s;
            -ms-transition: all 0.35s ease-in-out 0s;
        }

        #portfolio_gallery .project_gallery .owl-carousel .owl-item,
        #portfolio_gallery .project_gallery .owl-carousel .owl-wrapper {
            backface-visibility: hidden;
            transform: initial;
        }

        #portfolio_gallery .project_gallery .owl-nav {
            display: none;
        }

        #portfolio_gallery .project_gallery .portfolio_hover {
            margin-bottom: 30px;
            position: relative;
            overflow: hidden;
        }

        @media only screen and (max-width: 991px) {
            #portfolio_gallery .project_gallery .portfolio_hover img {
                width: 100%;
            }
        }

        #portfolio_gallery .project_gallery .portfolio_hover .fancybox i {
            position: absolute;
            top: 50%;
            color: #fff;
            z-index: 2;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 32px;
            border-radius: 50%;
            width: 55px;
            height: 55px;
            line-height: 55px;
            text-align: center;
            background: rgba(255, 255, 255, 0.1);
            opacity: 0;
            -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
            -webkit-transition: all 0.4s ease-in-out;
            transition: all 0.4s ease-in-out;
        }

        #portfolio_gallery .project_gallery .portfolio_hover:before {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            content: "";
            background: rgba(0, 0, 0, 0.4);
            opacity: 0;
            -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
            -webkit-transition: all 0.4s ease-in-out;
            transition: all 0.4s ease-in-out;
            z-index: 2;
        }

        #portfolio_gallery .project_gallery .portfolio_hover:hover img {
            transform: scale(1.1, 1.1);
            -webkit-transform: scale(1.1, 1.1);
            -moz-transform: scale(1.1, 1.1);
            -o-transform: scale(1.1, 1.1);
            -ms-transform: scale(1.1, 1.1);
            transition: all 0.3s ease 0s;
            -webkit-transition: all 0.3s ease 0s;
            -moz-transition: all 0.3s ease 0s;
            -o-transition: all 0.3s ease 0s;
            -ms-transition: all 0.3s ease 0s;
        }

        #portfolio_gallery .project_gallery .portfolio_hover:hover:before {
            opacity: 1;
            -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";
        }

        #portfolio_gallery .project_gallery .portfolio_hover:hover .fancybox i {
            opacity: 1;
            -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";
        }

        #portfolio_gallery .portfolio_pagination {
            float: left;
            padding-bottom: 65px;
            width: 100%;
            padding-top: 50px;
        }

        @media only screen and (max-width: 360px) {
            #portfolio_gallery .portfolio_pagination .col-md-5.col-xs-5 {
                width: 40% !important;
            }
        }

        @media only screen and (max-width: 360px) {
            #portfolio_gallery .portfolio_pagination .col-xs-2 {
                width: 16% !important;
            }
        }

        #portfolio_gallery .portfolio_pagination .prev_post a {
            text-decoration: none;
        }

        @media only screen and (max-width: 360px) {
            #portfolio_gallery .portfolio_pagination .prev_post a {
                text-align: center;
            }
        }

        #portfolio_gallery .portfolio_pagination .prev_post .left_icon {
            display: inline-block;
            float: left;
            margin-right: 18px;
        }

        @media only screen and (max-width: 480px) {
            #portfolio_gallery .portfolio_pagination .prev_post .left_icon {
                margin-right: 9px;
            }
        }

        @media only screen and (max-width: 360px) {
            #portfolio_gallery .portfolio_pagination .prev_post .left_icon {
                margin-right: 0;
            }
        }

        #portfolio_gallery .portfolio_pagination .prev_post .left_icon i {
            font-size: 42px;
        }

        @media only screen and (max-width: 480px) {
            #portfolio_gallery .portfolio_pagination .prev_post .left_icon i {
                font-size: 28px;
                line-height: 55px;
            }
        }

        #portfolio_gallery .portfolio_pagination .prev_post .prev_txt {
            margin-left: 25px;
        }

        @media only screen and (max-width: 480px) {
            #portfolio_gallery .portfolio_pagination .prev_post .prev_txt {
                margin-left: 0;
            }
        }

        #portfolio_gallery .portfolio_pagination .prev_post .prev_txt em {
            font-style: normal;
            font-weight: 300;
        }

        @media only screen and (max-width: 480px) {
            #portfolio_gallery .portfolio_pagination .prev_post .prev_txt em {
                font-size: 20px;
                font-style: normal;
                font-weight: 300;
            }
        }

        @media only screen and (max-width: 360px) {
            #portfolio_gallery .portfolio_pagination .prev_post .prev_txt em {
                font-size: 14px;
            }
        }

        #portfolio_gallery .portfolio_pagination .prev_post .prev_txt p {
            font-size: 13px;
            line-height: 19px;
        }

        @media only screen and (max-width: 480px) {
            #portfolio_gallery .portfolio_pagination .prev_post .prev_txt p {
                font-size: 11px;
                line-height: 19px;
            }
        }

        @media only screen and (max-width: 360px) {
            #portfolio_gallery .portfolio_pagination .prev_post .prev_txt p {
                font-size: 10px;
            }
        }

        #portfolio_gallery .portfolio_pagination .next a {
            text-align: right;
            text-decoration: none;
        }

        #portfolio_gallery .portfolio_pagination .next .next_icon {
            display: inline-block;
            float: right;
            margin-left: 18px;
        }

        @media only screen and (max-width: 480px) {
            #portfolio_gallery .portfolio_pagination .next .next_icon {
                margin-left: 9px;
            }
        }

        @media only screen and (max-width: 360px) {
            #portfolio_gallery .portfolio_pagination .next .next_icon {
                margin-left: 0;
            }
        }

        #portfolio_gallery .portfolio_pagination .next .next_icon i {
            font-size: 42px;
        }

        @media only screen and (max-width: 480px) {
            #portfolio_gallery .portfolio_pagination .next .next_icon i {
                font-size: 28px;
                line-height: 55px;
            }
        }

        #portfolio_gallery .portfolio_pagination .next .nxt_txt {
            margin-right: 25px;
            text-align: right;
        }

        @media only screen and (max-width: 480px) {
            #portfolio_gallery .portfolio_pagination .next .nxt_txt {
                margin-left: 0;
            }
        }

        @media only screen and (max-width: 360px) {
            #portfolio_gallery .portfolio_pagination .next .nxt_txt {
                margin-right: 0;
                text-align: center;
            }
        }

        #portfolio_gallery .portfolio_pagination .next .nxt_txt em {
            font-style: normal;
            font-weight: 300;
            text-align: right;
        }

        @media only screen and (max-width: 480px) {
            #portfolio_gallery .portfolio_pagination .next .nxt_txt em {
                font-size: 20px;
                font-style: normal;
                font-weight: 300;
            }
        }

        @media only screen and (max-width: 360px) {
            #portfolio_gallery .portfolio_pagination .next .nxt_txt em {
                font-size: 14px;
            }
        }

        #portfolio_gallery .portfolio_pagination .next .nxt_txt p {
            font-size: 13px;
            line-height: 19px;
        }

        @media only screen and (max-width: 480px) {
            #portfolio_gallery .portfolio_pagination .next .nxt_txt p {
                font-size: 11px;
                line-height: 19px;
            }
        }

        @media only screen and (max-width: 360px) {
            #portfolio_gallery .portfolio_pagination .next .nxt_txt p {
                font-size: 10px;
            }
        }

        #portfolio_gallery .portfolio_pagination .all_portfolio {
            text-align: center;
        }

        #portfolio_gallery .portfolio_pagination .all_portfolio i {
            line-height: 70px;
        }

        @media only screen and (max-width: 480px) {
            #portfolio_gallery .portfolio_pagination .all_portfolio i {
                font-size: 20px;
            }
        }

        #mt_banner_static_header.portfolio_banner {
            color: #212529;
            text-align: left;
            padding: 100px 0;
            height: auto;
        }

        @media only screen and (max-width: 767px) {
            #mt_banner_static_header.portfolio_banner {
                padding: 50px 0;
            }
        }

        #mt_banner_static_header.portfolio_banner .banner-caption {
            padding: 0 15px;
            position: static;
            text-align: left;
            -webkit-transform: initial;
            -moz-transform: initial;
            -ms-transform: initial;
            -o-transform: initial;
            transform: initial;
            width: 60%;
        }

        @media only screen and (max-width: 767px) {
            #mt_banner_static_header.portfolio_banner .banner-caption {
                width: 100%;
            }
        }

        #mt_banner_static_header.portfolio_banner .banner-caption h2 {
            color: #212529 !important;
            font-size: 55px;
            line-height: 65px;
        }

        @media only screen and (max-width: 991px) {
            #mt_banner_static_header.portfolio_banner .banner-caption h2 {
                font-size: 36px;
            }
        }

        @media only screen and (max-width: 767px) {
            #mt_banner_static_header.portfolio_banner .banner-caption h2 {
                font-size: 26px;
            }
        }

        @media only screen and (max-width: 640px) {
            #mt_banner_static_header.portfolio_banner .banner-caption h2 {
                font-size: 20px;
            }
        }

        @media only screen and (max-width: 480px) {
            #mt_banner_static_header.portfolio_banner .banner-caption h2 {
                line-height: 26px;
            }
        }

        #portfolio_detail {
            padding-top: 100px;
        }

        @media only screen and (max-width: 767px) {
            #portfolio_detail {
                padding: 100px 15px 0;
            }
        }

        @media only screen and (max-width: 360px) {
            #portfolio_detail .col-md-5.col-xs-5 {
                width: 40% !important;
            }
        }

        @media only screen and (max-width: 360px) {
            #portfolio_detail .portfolio_pagination .col-xs-2 {
                width: 16% !important;
            }
        }

        #portfolio_detail .portfolio_description {
            padding-left: 20px;
        }

        @media only screen and (max-width: 767px) {
            #portfolio_detail .portfolio_description {
                padding-left: 0;
            }
        }

        #portfolio_detail .portfolio_description h1 {
            margin-top: 0;
            margin-bottom: 15px;
            color: #444444;
            font-weight: 700;
        }

        @media only screen and (min-width: 768px) and (max-width: 991px) {
            #portfolio_detail .portfolio_description h1 {
                font-size: 22px;
                line-height: 27px;
            }
        }

        @media only screen and (max-width: 767px) {
            #portfolio_detail .portfolio_description h1 {
                font-size: 30px;
            }
        }

        @media only screen and (min-width: 480px) and (max-width: 640px) {
            #portfolio_detail .portfolio_description h1 {
                font-size: 24px;
                line-height: 27px;
                margin-bottom: 10px;
                margin-top: 16px;
            }
        }

        @media only screen and (max-width: 479px) {
            #portfolio_detail .portfolio_description h1 {
                font-size: 20px;
                line-height: 20px;
                margin-bottom: 8px;
                margin-top: 16px;
            }
        }

        #portfolio_detail .portfolio_description p {
            font-weight: 300;
            line-height: 28px;
        }

        #portfolio_detail .portfolio_description .portfolio_other_detail {
            padding: 0 0 15px 0;
            float: left;
            width: 100%;
        }

        #portfolio_detail .portfolio_description .portfolio_other_detail .mt_sidebar_tx {
            float: left;
            width: 100%;
            font-size: 14px;
        }

        #portfolio_detail .portfolio_description .portfolio_other_detail .mt_sidebar_tx span {
            margin-left: 5px;
        }

        @media only screen and (max-width: 991px) {
            #portfolio_detail .portfolio_description .portfolio_other_detail .mt_sidebar_tx {
                width: 100%;
            }
        }

        #portfolio_detail .portfolio_description .portfolio_other_detail p {
            margin-bottom: 11px;
            font-size: 14px;
        }

        #portfolio_detail .portfolio_description .portfolio_other_detail li {
            float: left;
            width: 100%;
            color: #818181;
            line-height: 28px;
            padding-left: 0;
            margin-bottom: 8px;
        }

        #portfolio_detail .portfolio_description .portfolio_other_detail li:before {
            display: none;
        }

        #portfolio_detail .portfolio_description .portfolio_other_detail li:after {
            display: none;
        }

        #portfolio_detail .portfolio_description .portfolio_other_detail a {
            color: #818181;
            text-decoration: none;
            font-size: 14px;
        }

        #portfolio_detail .portfolio_description .portfolio_other_detail a:hover {
            text-decoration: underline;
        }

        #portfolio_detail .portfolio_gallery {
            padding: 6px 0 60px 0;
        }

        @media only screen and (max-width: 767px) {
            #portfolio_detail .portfolio_gallery {
                padding-bottom: 20px;
            }
        }

        #portfolio_detail .portfolio_gallery h2 {
            margin-top: 0;
            color: #444444;
            font-weight: 700;
            margin-bottom: 70px;
        }

        @media only screen and (max-width: 991px) {
            #portfolio_detail .portfolio_gallery h2 {
                margin-bottom: 38px;
            }
        }

        #portfolio_detail .portfolio_gallery .owl-prev,
        #portfolio_detail .portfolio_gallery .owl-next {
            background: #444444;
            height: 50px;
            line-height: 45px;
            position: absolute;
            text-align: center;
            top: 50%;
            transform: translate(0px, -50%);
            width: 50px;
        }

        @media only screen and (max-width: 767px) {

            #portfolio_detail .portfolio_gallery .owl-prev,
            #portfolio_detail .portfolio_gallery .owl-next {
                height: 30px;
                width: 30px;
                line-height: 25px;
            }
        }

        #portfolio_detail .portfolio_gallery .owl-prev img,
        #portfolio_detail .portfolio_gallery .owl-next img {
            width: 55%;
        }

        #portfolio_detail .portfolio_gallery .owl-next {
            right: 0;
        }

        #portfolio_detail .portfolio_gallery .portfolio_hover {
            margin-bottom: 30px;
            position: relative;
            overflow: hidden;
        }

        @media only screen and (max-width: 991px) {
            #portfolio_detail .portfolio_gallery .portfolio_hover {
                margin-bottom: 0;
            }
        }

        @media only screen and (max-width: 991px) {
            #portfolio_detail .portfolio_gallery .portfolio_hover img {
                width: 100%;
            }
        }

        #portfolio_detail .portfolio_gallery .portfolio_hover .fancybox i {
            position: absolute;
            top: 50%;
            color: #fff;
            z-index: 2;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 32px;
            border-radius: 50%;
            width: 55px;
            height: 55px;
            line-height: 55px;
            text-align: center;
            background: rgba(255, 255, 255, 0.1);
            opacity: 0;
            -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
            -webkit-transition: all 0.4s ease-in-out;
            transition: all 0.4s ease-in-out;
        }

        #portfolio_detail .portfolio_gallery .portfolio_hover:before {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            content: "";
            background: #212529;
            opacity: 0;
            -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
            -webkit-transition: all 0.4s ease-in-out;
            transition: all 0.4s ease-in-out;
            z-index: 2;
        }

        #portfolio_detail .portfolio_gallery .portfolio_hover:hover img {
            transform: scale(1.1, 1.1);
            -webkit-transform: scale(1.1, 1.1);
            -moz-transform: scale(1.1, 1.1);
            -o-transform: scale(1.1, 1.1);
            -ms-transform: scale(1.1, 1.1);
            transition: all 0.3s ease 0s;
            -webkit-transition: all 0.3s ease 0s;
            -moz-transition: all 0.3s ease 0s;
            -o-transition: all 0.3s ease 0s;
            -ms-transition: all 0.3s ease 0s;
        }

        #portfolio_detail .portfolio_gallery .portfolio_hover:hover:before {
            opacity: 0.6;
            -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";
        }

        #portfolio_detail .portfolio_gallery .portfolio_hover:hover .fancybox i {
            opacity: 1;
            -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";
        }

        #portfolio_detail .portfolio_pagination {
            float: left;
            padding-bottom: 65px;
            width: 100%;
            padding-top: 50px;
        }

        @media only screen and (min-width: 479px) and (max-width: 767px) {
            #portfolio_detail .portfolio_pagination {
                margin-top: 50px;
            }
        }

        @media only screen and (max-width: 360px) {

            #portfolio_detail .portfolio_pagination .col-md-5,
            #portfolio_detail .portfolio_pagination .col-xs-2 {
                width: 100%;
            }
        }

        #portfolio_detail .portfolio_pagination .prev_post a {
            text-decoration: none;
        }

        @media only screen and (max-width: 360px) {
            #portfolio_detail .portfolio_pagination .prev_post a {
                text-align: center;
            }
        }

        #portfolio_detail .portfolio_pagination .prev_post .left_icon {
            display: inline-block;
            float: left;
            margin-right: 18px;
        }

        @media only screen and (max-width: 480px) {
            #portfolio_detail .portfolio_pagination .prev_post .left_icon {
                margin-right: 9px;
            }
        }

        @media only screen and (max-width: 360px) {
            #portfolio_detail .portfolio_pagination .prev_post .left_icon {
                margin-right: 0;
            }
        }

        #portfolio_detail .portfolio_pagination .prev_post .left_icon i {
            font-size: 42px;
        }

        @media only screen and (max-width: 480px) {
            #portfolio_detail .portfolio_pagination .prev_post .left_icon i {
                font-size: 28px;
                line-height: 55px;
            }
        }

        #portfolio_detail .portfolio_pagination .prev_post .prev_txt {
            margin-left: 25px;
        }

        @media only screen and (max-width: 480px) {
            #portfolio_detail .portfolio_pagination .prev_post .prev_txt {
                margin-left: 0;
            }
        }

        #portfolio_detail .portfolio_pagination .prev_post .prev_txt em {
            font-style: normal;
            font-weight: 300;
        }

        @media only screen and (max-width: 480px) {
            #portfolio_detail .portfolio_pagination .prev_post .prev_txt em {
                font-size: 20px;
                font-style: normal;
                font-weight: 300;
            }
        }

        @media only screen and (max-width: 360px) {
            #portfolio_detail .portfolio_pagination .prev_post .prev_txt em {
                font-size: 14px;
            }
        }

        #portfolio_detail .portfolio_pagination .prev_post .prev_txt p {
            font-size: 13px;
            line-height: 19px;
        }

        @media only screen and (max-width: 480px) {
            #portfolio_detail .portfolio_pagination .prev_post .prev_txt p {
                font-size: 11px;
                line-height: 19px;
            }
        }

        @media only screen and (max-width: 360px) {
            #portfolio_detail .portfolio_pagination .prev_post .prev_txt p {
                font-size: 10px;
            }
        }

        #portfolio_detail .portfolio_pagination .next a {
            text-align: right;
            text-decoration: none;
        }

        #portfolio_detail .portfolio_pagination .next .next_icon {
            display: inline-block;
            float: right;
            margin-left: 18px;
        }

        @media only screen and (max-width: 480px) {
            #portfolio_detail .portfolio_pagination .next .next_icon {
                margin-left: 9px;
            }
        }

        @media only screen and (max-width: 360px) {
            #portfolio_detail .portfolio_pagination .next .next_icon {
                margin-left: 0;
            }
        }

        #portfolio_detail .portfolio_pagination .next .next_icon i {
            font-size: 42px;
        }

        @media only screen and (max-width: 480px) {
            #portfolio_detail .portfolio_pagination .next .next_icon i {
                font-size: 28px;
                line-height: 55px;
            }
        }

        #portfolio_detail .portfolio_pagination .next .nxt_txt {
            margin-right: 25px;
            text-align: right;
        }

        @media only screen and (max-width: 480px) {
            #portfolio_detail .portfolio_pagination .next .nxt_txt {
                margin-left: 0;
            }
        }

        @media only screen and (max-width: 360px) {
            #portfolio_detail .portfolio_pagination .next .nxt_txt {
                margin-right: 0;
                text-align: center;
            }
        }

        #portfolio_detail .portfolio_pagination .next .nxt_txt em {
            font-style: normal;
            font-weight: 300;
            text-align: right;
        }

        @media only screen and (max-width: 480px) {
            #portfolio_detail .portfolio_pagination .next .nxt_txt em {
                font-size: 20px;
                font-style: normal;
                font-weight: 300;
            }
        }

        @media only screen and (max-width: 360px) {
            #portfolio_detail .portfolio_pagination .next .nxt_txt em {
                font-size: 14px;
            }
        }

        #portfolio_detail .portfolio_pagination .next .nxt_txt p {
            font-size: 13px;
            line-height: 19px;
        }

        @media only screen and (max-width: 480px) {
            #portfolio_detail .portfolio_pagination .next .nxt_txt p {
                font-size: 11px;
                line-height: 19px;
            }
        }

        @media only screen and (max-width: 360px) {
            #portfolio_detail .portfolio_pagination .next .nxt_txt p {
                font-size: 10px;
            }
        }

        #portfolio_detail .portfolio_pagination .all_portfolio {
            text-align: center;
        }

        #portfolio_detail .portfolio_pagination .all_portfolio i {
            line-height: 70px;
        }

        @media only screen and (max-width: 480px) {
            #portfolio_detail .portfolio_pagination .all_portfolio i {
                font-size: 20px;
            }
        }

        .mt_portfolio_detail .portfolio_gallery {
            padding: 0 !important;
        }

        .mt_portfolio_detail .portfolio_description {
            padding-left: 0 !important;
        }

        .mt_portfolio_detail .col-sm-8 {
            padding: 0 !important;
        }

        /* ================================================ */
        /*           End Portfolio Detail Section           */
        /* ================================================ */
        /* ===================================== */
        /* 		   	    Pricing Page  	 	  	 */
        /* ===================================== */
        /* ====================== */
        /*        Pricing         */
        /* ====================== */
        #mt_pricing {
            padding: 100px 0;
        }

        @media only screen and (max-width: 640px) {
            #mt_pricing {
                padding: 60px 0;
            }
        }

        #mt_pricing h2 {
            margin-bottom: 100px;
        }

        @media only screen and (max-width: 640px) {
            #mt_pricing h2 {
                margin-bottom: 30px;
            }
        }

        #mt_pricing .col-md-4 {
            padding: 0;
        }

        @media only screen and (max-width: 767px) {
            #mt_pricing .col-md-4 {
                padding: 0 15px;
            }
        }

        #mt_pricing .main_pricing_conatiner.highlight_pricing {
            margin-top: -30px;
            padding-bottom: 55px;
        }

        @media only screen and (max-width: 767px) {
            #mt_pricing .main_pricing_conatiner.highlight_pricing {
                margin-top: 0;
            }
        }

        #mt_pricing .main_pricing_conatiner.highlight_pricing:hover a {
            color: #f9f9f9;
            background-color: #f9f9f9;
            transition: all 0.5s ease;
            text-shadow: initial;
            -ms-box-shadow: -1px 4px 36px 0 rgba(204, 204, 204, 0.61);
            -o-box-shadow: -1px 4px 36px 0 rgba(204, 204, 204, 0.61);
            -webkit-box-shadow: -1px 4px 36px 0 rgba(204, 204, 204, 0.61);
            -moz-box-shadow: -1px 4px 36px 0 rgba(204, 204, 204, 0.61);
            box-shadow: -1px 4px 36px 0 rgba(204, 204, 204, 0.61);
        }

        #mt_pricing .main_pricing_conatiner.highlight_pricing .choose_plan_btn {
            text-align: center;
            padding-bottom: 40px;
        }

        #mt_pricing .main_pricing_conatiner.highlight_pricing .choose_plan_btn .mt_btn_grey {
            height: 55px;
            line-height: 55px;
            padding: 0;
            text-align: center;
            width: 55px;
            -webkit-box-shadow: 2px 2px 5px 0 rgba(204, 204, 204, 0.61);
            -moz-box-shadow: 2px 2px 5px 0 rgba(204, 204, 204, 0.61);
            -o-box-shadow: 2px 2px 5px 0 rgba(204, 204, 204, 0.61);
            -ms-box-shadow: 2px 2px 5px 0 rgba(204, 204, 204, 0.61);
            box-shadow: 2px 2px 5px 0 rgba(204, 204, 204, 0.61);
        }

        #mt_pricing .main_pricing_conatiner.highlight_pricing .choose_plan_btn .mt_btn_grey i {
            font-size: 45px;
        }

        #mt_pricing .main_pricing_conatiner {
            background: #FFFFFF none repeat scroll 0 0;
            overflow: hidden;
            -webkit-box-shadow: 2px 2px 5px 0 rgba(204, 204, 204, 0.61);
            -moz-box-shadow: 2px 2px 5px 0 rgba(204, 204, 204, 0.61);
            -o-box-shadow: 2px 2px 5px 0 rgba(204, 204, 204, 0.61);
            -ms-box-shadow: 2px 2px 5px 0 rgba(204, 204, 204, 0.61);
            box-shadow: 2px 2px 5px 0 rgba(204, 204, 204, 0.61);
        }

        @media only screen and (max-width: 991px) {
            #mt_pricing .main_pricing_conatiner {
                margin-bottom: 40px;
            }
        }

        #mt_pricing .main_pricing_conatiner:hover a {
            color: #f9f9f9;
            background-color: #444444 !important;
            transition: all 0.5s ease;
            text-shadow: initial;
            -ms-box-shadow: -1px 4px 36px 0 rgba(204, 204, 204, 0.61);
            -o-box-shadow: -1px 4px 36px 0 rgba(204, 204, 204, 0.61);
            -webkit-box-shadow: -1px 4px 36px 0 rgba(204, 204, 204, 0.61);
            -moz-box-shadow: -1px 4px 36px 0 rgba(204, 204, 204, 0.61);
            box-shadow: -1px 4px 36px 0 rgba(204, 204, 204, 0.61);
        }

        #mt_pricing .main_pricing_conatiner .price {
            padding: 35px 0 0;
            text-align: center;
            position: relative;
        }

        #mt_pricing .main_pricing_conatiner .price h2 {
            font-family: montserrat;
            font-weight: 500;
            margin-bottom: 5px;
            color: #212529;
        }

        @media only screen and (max-width: 480px) {
            #mt_pricing .main_pricing_conatiner .price h2 {
                font-size: 24px;
                margin-bottom: 0;
                margin-top: 0;
            }
        }

        #mt_pricing .main_pricing_conatiner .price h2 .price_icon {
            display: block;
            margin-bottom: 6px;
        }

        #mt_pricing .main_pricing_conatiner .price h2 .price_icon i {
            color: #212529;
            font-size: 65px;
        }

        #mt_pricing .main_pricing_conatiner .price .price_tag {
            font-family: montserrat;
            font-size: 48px;
            font-weight: 500;
            color: #212529;
            position: relative;
        }

        @media only screen and (max-width: 480px) {
            #mt_pricing .main_pricing_conatiner .price .price_tag {
                font-size: 40px;
            }
        }

        #mt_pricing .main_pricing_conatiner .price .price_tag .currency {
            font-size: 28px;
            left: -18px;
            position: absolute;
        }

        #mt_pricing .main_pricing_conatiner .price .per_month {
            font-family: open sans;
            font-size: 14px;
            font-weight: 100;
            letter-spacing: 2px;
            text-transform: uppercase;
            color: #212529;
        }

        #mt_pricing .main_pricing_conatiner .price_listing {
            padding: 25px 40px 8px;
        }

        @media only screen and (max-width: 480px) {
            #mt_pricing .main_pricing_conatiner .price_listing {
                padding: 70px 0 25px 20px;
            }
        }

        #mt_pricing .main_pricing_conatiner .choose_plan_btn {
            text-align: center;
            padding-bottom: 40px;
        }

        #mt_pricing .main_pricing_conatiner .choose_plan_btn .mt_btn_white {
            background: #f9f9f9;
            height: 55px;
            line-height: 55px;
            padding: 0;
            text-align: center;
            width: 55px;
            border-color: #f9f9f9 !important;
            -webkit-box-shadow: 2px 2px 5px 0 rgba(204, 204, 204, 0.61);
            -moz-box-shadow: 2px 2px 5px 0 rgba(204, 204, 204, 0.61);
            -o-box-shadow: 2px 2px 5px 0 rgba(204, 204, 204, 0.61);
            -ms-box-shadow: 2px 2px 5px 0 rgba(204, 204, 204, 0.61);
            box-shadow: 2px 2px 5px 0 rgba(204, 204, 204, 0.61);
        }

        #mt_pricing .main_pricing_conatiner .choose_plan_btn .mt_btn_white i {
            font-size: 45px;
        }

        #pricing_plan {
            padding: 100px 0;
        }

        @media only screen and (max-width: 640px) {
            #pricing_plan {
                padding: 60px 0;
            }
        }

        @media only screen and (max-width: 640px) {
            #pricing_plan h2 {
                margin-bottom: 30px;
            }
        }

        #pricing_plan .main_pricing_conatiner.highlight_pricing {
            -ms-box-shadow: -1px 4px 36px 0 rgba(204, 204, 204, 0.61);
            -o-box-shadow: -1px 4px 36px 0 rgba(204, 204, 204, 0.61);
            -webkit-box-shadow: -1px 4px 36px 0 rgba(204, 204, 204, 0.61);
            -moz-box-shadow: -1px 4px 36px 0 rgba(204, 204, 204, 0.61);
            box-shadow: -1px 4px 36px 0 rgba(204, 204, 204, 0.61);
        }

        #pricing_plan .main_pricing_conatiner.highlight_pricing:hover a {
            border: 1px solid #444444;
            color: #f9f9f9;
            background-color: #f9f9f9;
            transition: all 0.5s ease;
            text-shadow: initial;
            -ms-box-shadow: -1px 4px 36px 0 rgba(204, 204, 204, 0.61);
            -o-box-shadow: -1px 4px 36px 0 rgba(204, 204, 204, 0.61);
            -webkit-box-shadow: -1px 4px 36px 0 rgba(204, 204, 204, 0.61);
            -moz-box-shadow: -1px 4px 36px 0 rgba(204, 204, 204, 0.61);
            box-shadow: -1px 4px 36px 0 rgba(204, 204, 204, 0.61);
        }

        #pricing_plan .main_pricing_conatiner.highlight_pricing .price {
            background: #444444;
        }

        #pricing_plan .main_pricing_conatiner.highlight_pricing .price h2 {
            color: #FFFFFF;
        }

        #pricing_plan .main_pricing_conatiner.highlight_pricing .price .price_tag {
            color: #FFFFFF;
        }

        #pricing_plan .main_pricing_conatiner.highlight_pricing .price .per_month {
            color: #FFFFFF;
        }

        #pricing_plan .main_pricing_conatiner.highlight_pricing .choose_plan_btn {
            text-align: center;
            padding-bottom: 40px;
        }

        #pricing_plan .main_pricing_conatiner.highlight_pricing .choose_plan_btn .mt_btn_color {
            height: 55px;
            line-height: 55px;
            padding: 0;
            text-align: center;
            width: 55px;
            -webkit-box-shadow: 2px 2px 5px 0 rgba(204, 204, 204, 0.61);
            -moz-box-shadow: 2px 2px 5px 0 rgba(204, 204, 204, 0.61);
            -o-box-shadow: 2px 2px 5px 0 rgba(204, 204, 204, 0.61);
            -ms-box-shadow: 2px 2px 5px 0 rgba(204, 204, 204, 0.61);
            box-shadow: 2px 2px 5px 0 rgba(204, 204, 204, 0.61);
        }

        #pricing_plan .main_pricing_conatiner.highlight_pricing .choose_plan_btn .mt_btn_color i {
            font-size: 45px;
        }

        #pricing_plan .main_pricing_conatiner {
            background: #FFFFFF none repeat scroll 0 0;
            overflow: hidden;
            -webkit-box-shadow: 2px 2px 5px 0 rgba(204, 204, 204, 0.61);
            -moz-box-shadow: 2px 2px 5px 0 rgba(204, 204, 204, 0.61);
            -o-box-shadow: 2px 2px 5px 0 rgba(204, 204, 204, 0.61);
            -ms-box-shadow: 2px 2px 5px 0 rgba(204, 204, 204, 0.61);
            box-shadow: 2px 2px 5px 0 rgba(204, 204, 204, 0.61);
            border-radius: 10px;
        }

        @media only screen and (max-width: 991px) {
            #pricing_plan .main_pricing_conatiner {
                margin-bottom: 40px;
            }
        }

        #pricing_plan .main_pricing_conatiner:hover a {
            border: 1px solid #444444;
            color: #f9f9f9;
            background-color: #444444 !important;
            transition: all 0.5s ease;
            text-shadow: initial;
            -ms-box-shadow: -1px 4px 36px 0 rgba(204, 204, 204, 0.61);
            -o-box-shadow: -1px 4px 36px 0 rgba(204, 204, 204, 0.61);
            -webkit-box-shadow: -1px 4px 36px 0 rgba(204, 204, 204, 0.61);
            -moz-box-shadow: -1px 4px 36px 0 rgba(204, 204, 204, 0.61);
            box-shadow: -1px 4px 36px 0 rgba(204, 204, 204, 0.61);
        }

        #pricing_plan .main_pricing_conatiner .price {
            background: #f9f9f9 none repeat scroll 0 0;
            padding: 35px 0 50px;
            text-align: center;
            position: relative;
        }

        #pricing_plan .main_pricing_conatiner .price h2 {
            font-family: montserrat;
            font-weight: 200;
            margin-bottom: 5px;
        }

        @media only screen and (max-width: 480px) {
            #pricing_plan .main_pricing_conatiner .price h2 {
                font-size: 24px;
                margin-bottom: 0;
                margin-top: 0;
            }
        }

        #pricing_plan .main_pricing_conatiner .price .price_tag {
            font-family: montserrat;
            font-size: 48px;
            font-weight: 500;
            color: #666666;
        }

        @media only screen and (max-width: 480px) {
            #pricing_plan .main_pricing_conatiner .price .price_tag {
                font-size: 40px;
            }
        }

        #pricing_plan .main_pricing_conatiner .price .per_month {
            font-family: open sans;
            font-size: 14px;
            font-weight: 100;
            letter-spacing: 2px;
            text-transform: uppercase;
            color: #666666;
        }

        #pricing_plan .main_pricing_conatiner .price_listing {
            padding: 25px 40px 8px;
        }

        @media only screen and (max-width: 480px) {
            #pricing_plan .main_pricing_conatiner .price_listing {
                padding: 70px 0 25px 20px;
            }
        }

        #pricing_plan .main_pricing_conatiner .choose_plan_btn {
            text-align: center;
            padding-bottom: 40px;
        }

        #pricing_plan .main_pricing_conatiner .choose_plan_btn .mt_btn_white {
            background: #f9f9f9;
            height: 55px;
            line-height: 55px;
            padding: 0;
            text-align: center;
            width: 55px;
            border-color: #f9f9f9;
            -webkit-box-shadow: 2px 2px 5px 0 rgba(204, 204, 204, 0.61);
            -moz-box-shadow: 2px 2px 5px 0 rgba(204, 204, 204, 0.61);
            -o-box-shadow: 2px 2px 5px 0 rgba(204, 204, 204, 0.61);
            -ms-box-shadow: 2px 2px 5px 0 rgba(204, 204, 204, 0.61);
            box-shadow: 2px 2px 5px 0 rgba(204, 204, 204, 0.61);
        }

        #pricing_plan .main_pricing_conatiner .choose_plan_btn .mt_btn_white i {
            font-size: 45px;
        }

        /* =========================== */
        /*        End Pricing          */
        /* =========================== */
        /* ========================================= */
        /* 		   			  Blog      	 	  	 */
        /* ========================================= */
        /* ============================= */
        /*          Blog Section         */
        /* ============================= */
        #mt_blog {
            padding: 100px 0 200px 0;
        }

        #mt_blog .blog-post_wrapper {
            -webkit-box-shadow: 2px 2px 5px 0 rgba(204, 204, 204, 0.61);
            -moz-box-shadow: 2px 2px 5px 0 rgba(204, 204, 204, 0.61);
            -o-box-shadow: 2px 2px 5px 0 rgba(204, 204, 204, 0.61);
            -ms-box-shadow: 2px 2px 5px 0 rgba(204, 204, 204, 0.61);
            box-shadow: 2px 2px 5px 0 rgba(204, 204, 204, 0.61);
            border-radius: 15px;
            overflow: hidden;
        }

        #mt_blog .section_heading {
            margin-bottom: 60px;
        }

        #mt_blog .grid-item {
            margin-bottom: 38px;
        }

        #mt_blog .blog-post-image .img {
            overflow: hidden;
        }

        #mt_blog .blog-post-image .img img {
            max-width: 100%;
            min-width: 100%;
        }

        #mt_blog .post-detail_container {
            position: relative;
        }

        #mt_blog .post-detail_container .post-content {
            background-color: #FFFFFF;
            padding: 15px 15px;
        }

        #mt_blog .post-detail_container .post-content .post-title {
            font-size: 21px;
            line-height: 24px;
            margin-bottom: 2px;
            margin-top: 0;
        }

        #mt_blog .post-detail_container .post-content .post-title a {
            text-decoration: none;
            color: #1a1a1a;
            display: block;
        }

        #mt_blog .post-detail_container .post-content .post-title a:hover,
        #mt_blog .post-detail_container .post-content .post-title a:focus {
            text-decoration: none;
            transition: 0.4s all ease;
        }

        #mt_blog .post-detail_container .post-content .post-metadata {
            padding-left: 2px;
        }

        #mt_blog .post-detail_container .post-content .post-metadata li {
            font-size: 12px;
            line-height: 20px;
            color: #555555;
            padding-right: 3px;
            padding-left: 3px;
        }

        #mt_blog .post-detail_container .post-content .post-metadata li:before,
        #mt_blog .post-detail_container .post-content .post-metadata li:after {
            display: none !important;
        }

        #mt_blog .post-detail_container .post-content .post-metadata li a {
            font-size: 12px;
            line-height: 20px;
            color: #555555;
            text-decoration: none;
        }

        #mt_blog .post-detail_container .post-content p.post-excerpt {
            color: #444444;
            font-size: 14px;
            line-height: 22px;
        }

        #mt_blog .post-detail_container .post-content .view_detail {
            text-align: center;
        }

        #mt_blog .mt_btn_white {
            margin-top: 50px;
        }

        /* ================================ */
        /*         End Blog Section         */
        /* ================================ */
        /* ============================= */
        /*          Blog Single          */
        /* ============================= */
        #blog_main_sec {
            padding: 100px 0px 65px;
            position: relative;
        }

        #blog_main_sec .post_img {
            margin-bottom: 30px;
        }

        #blog_main_sec .post_img img {
            width: 100%;
        }

        #blog_main_sec .post_title h3 {
            font-weight: 500;
            margin-bottom: 10px;
        }

        @media only screen and (max-width: 767px) {
            #blog_main_sec .post_title h3 {
                line-height: 35px;
            }
        }

        #blog_main_sec .post_title ul li:before {
            display: none;
        }

        #blog_main_sec .author_box {
            background: #FAF8F8;
            overflow: hidden;
            padding: 20px;
            margin-bottom: 30px;
        }

        #blog_main_sec .author_box .author_img {
            float: left;
            width: 22%;
        }

        #blog_main_sec .author_box .author_img img {
            margin-bottom: 10px;
            width: 100%;
            border-radius: 10px;
        }

        #blog_main_sec .author_box .author_bio {
            float: left;
            margin-left: 3%;
            width: 75%;
        }

        #blog_main_sec .author_box .author_bio h5 {
            margin-top: 0;
        }

        #blog_main_sec .author_box .author_bio p {
            margin-bottom: 10px;
        }

        #blog_main_sec .author_box .author_bio ul li {
            display: inline-block;
            padding-left: 0;
            padding-right: 15px;
            margin-bottom: 0;
        }

        #blog_main_sec .author_box .author_bio ul li:before {
            display: none;
        }

        #blog_main_sec .author_box .author_bio ul li a {
            color: #444444;
            font-size: 17px;
        }

        #blog_main_sec .author_box .author_bio ul li a:hover {
            color: #212529;
            transition: all 0.4s ease;
        }

        #blog_main_sec #comments {
            margin-top: 60px;
            margin-bottom: 70px;
        }

        #blog_main_sec #comments .single-post_heading {
            font-size: 20px;
            text-transform: capitalize;
            color: #212529;
        }

        #blog_main_sec #comments .comment-body .mt_btn_color {
            padding: 2px 18px;
            font-size: 12px;
        }

        #blog_main_sec #comments .comments-lists:before {
            display: none;
        }

        #blog_main_sec #comments .comments-lists .comment {
            position: relative;
            list-style: none;
            padding-left: 118px;
            padding-top: 1px;
            min-height: 100px;
            border-bottom: 1px solid #f9f9f9;
            margin-top: 35px;
        }

        #blog_main_sec #comments .comments-lists .comment:last-child {
            border-bottom: 0px;
        }

        #blog_main_sec #comments .comments-lists .comment .activity_rounded {
            display: inline-block;
            position: absolute;
            top: 0;
            left: 0;
        }

        #blog_main_sec #comments .comments-lists .comment .activity_rounded img {
            width: 80px;
            height: 80px;
            border-radius: 5px;
            -webkit-box-shadow: 6px 6px 11px 0 rgba(204, 204, 204, 0.61);
            -moz-box-shadow: 6px 6px 11px 0 rgba(204, 204, 204, 0.61);
            -o-box-shadow: 6px 6px 11px 0 rgba(204, 204, 204, 0.61);
            -ms-box-shadow: 6px 6px 11px 0 rgba(204, 204, 204, 0.61);
            box-shadow: 6px 6px 11px 0 rgba(204, 204, 204, 0.61);
        }

        #blog_main_sec #comments .comments-lists .comment h4 {
            font-size: 15px;
            color: #444444;
            margin-top: 3px;
            text-transform: capitalize;
        }

        #blog_main_sec #comments .comments-lists .comment p {
            font-size: 14px;
            color: #777777;
            line-height: 24px;
        }

        #blog_main_sec #comments .comments-lists .comment small.date-posted {
            color: #666666;
            font-size: 12px;
            margin-left: 12px;
        }

        #blog_main_sec #comments .comments-lists .comment .comment-body {
            padding-bottom: 18px;
        }

        #blog_main_sec #comments .comments-lists .comment .comment-body .mt_btn_grey {
            padding: 0px 25px;
            font-size: 12px;
            margin-bottom: 10px;
            display: inline-block;
        }

        #blog_main_sec #comments .comments-lists .comment .children {
            overflow: hidden;
            list-style: none;
            padding-left: 0px;
            list-style: none;
        }

        #blog_main_sec #comments .comments-lists .comment .children .comment {
            position: relative;
            /*padding-left: 118px;*/
            border-top: 1px solid #f9f9f9;
            border-bottom: 0px;
            margin-top: 0px;
        }

        #blog_main_sec #comments .comments-lists .comment .children .comment:before {
            display: none;
        }

        #blog_main_sec #comments .comments-lists .comment .children .comment .activity_rounded {
            margin-top: 25px;
        }

        #blog_main_sec #comments .comments-lists .comment .children .comment .comment-body {
            border: none;
            margin-top: 25px;
        }

        #blog_main_sec #comments .leave_comment h3 {
            font-size: 20px;
            color: #444444;
            text-transform: capitalize;
        }

        #blog_main_sec #comments .leave_comment .form-group .form-control {
            height: 40px;
        }

        #blog_main_sec #comments .leave_comment .form-group input[type="text"],
        #blog_main_sec #comments .leave_comment .form-group input[type="email"] {
            border: 1px solid #eceaea;
            border-radius: 50px;
            box-shadow: none;
            font-size: 16px;
            color: #1a1a1a;
            padding: 10px 25px;
            margin-bottom: 20px;
        }

        #blog_main_sec #comments .leave_comment .form-group input[type="text"]:hover,
        #blog_main_sec #comments .leave_comment .form-group input[type="text"]:focus,
        #blog_main_sec #comments .leave_comment .form-group input[type="email"]:hover,
        #blog_main_sec #comments .leave_comment .form-group input[type="email"]:focus {
            border: 1px solid #212529;
        }

        #blog_main_sec #comments .leave_comment textarea {
            resize: vertical;
            min-height: 180px;
            border: none;
            border: 1px solid #eceaea;
            border-radius: 8px;
            box-shadow: none;
            font-size: 16px;
            color: #1a1a1a;
            padding: 10px 25px;
            margin-bottom: 20px;
        }

        #blog_main_sec #comments .leave_comment textarea:hover,
        #blog_main_sec #comments .leave_comment textarea:focus {
            border: 1px solid #212529;
        }

        aside .widget {
            background-color: #fff;
            margin-bottom: 50px;
        }

        aside .widget h3 {
            margin-bottom: 30px;
            background: #212529;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        aside .widget ul {
            padding: 0px;
            overflow: hidden;
            list-style: none;
            margin-bottom: 0px;
        }

        aside .widget ul li {
            margin-bottom: 12px;
            font-size: 16px;
            font-weight: 400;
            padding-left: 0;
        }

        aside .widget ul li:before {
            display: none;
        }

        aside .widget ul li span.categoryCount {
            float: right;
        }

        aside .widget ul li a {
            font-size: 16px;
            font-weight: 400;
            color: #444444;
            text-decoration: none;
        }

        aside .widget .search-form input[type=text] {
            width: 100%;
            font-size: 20px;
            padding-left: 10px;
            padding-right: 40px;
            font-weight: 300;
            background-image: url(../images/search-icon.png);
            background-repeat: no-repeat;
            background-position: right 17px center;
            background-position-x: 98%;
            background-position-y: 50%;
        }

        aside .widget_recent_entries ul {
            overflow: hidden;
        }

        aside .widget_recent_entries ul li {
            position: relative;
            padding-left: 90px;
            float: left;
        }

        aside .widget_recent_entries ul li:before {
            display: none;
        }

        aside .widget_recent_entries ul li h4 {
            margin-bottom: 3px;
            line-height: 16px;
            margin-top: 0;
        }

        aside .widget_recent_entries ul li h4 a {
            color: #444444;
            line-height: 20px;
        }

        aside .widget_recent_entries ul li h4 a:hover {
            color: #212529;
            transition: all ease 0.4s;
        }

        aside .widget_recent_entries ul li span {
            color: #666666;
            font-size: 14px;
        }

        aside .widget_recent_entries ul li p {
            color: #666666;
            font-size: 14px;
        }

        aside .widget_recent_entries ul li img {
            position: absolute;
            top: 2px;
            left: 0;
            width: 79px;
            border-radius: 50%;
        }

        aside .widget_recent_entries ul li a {
            font-size: 16px;
            display: block;
            text-decoration: none;
        }

        aside .widget_tag_cloud ul {
            overflow: hidden;
        }

        aside .widget_tag_cloud ul li {
            display: inline-block;
            margin-right: 3px;
            margin-bottom: 4px;
        }

        aside .widget_tag_cloud ul li a {
            background-color: #FAF8F8;
            font-size: 14px;
            text-transform: capitalize;
            text-decoration: none;
            color: #444444;
            padding: 4px 12px;
            font-weight: 400;
            border-radius: 3px;
        }

        aside .widget_tag_cloud ul li a:hover,
        aside .widget_tag_cloud ul li a:focus {
            color: #FFFFFF;
            background: #212529;
        }

        /* ================================= */
        /*          End Blog Single          */
        /* ================================= */
        /* ============================= */
        /*          Blog Listing         */
        /* ============================= */
        #blog_single_main_sec {
            padding: 100px 0px 65px;
            position: relative;
        }

        #blog_single_main_sec .section_title h2 {
            color: #ffffff;
        }

        #blog_single_main_sec .section_title p {
            color: #dddddd;
        }

        #blog_single_main_sec .blog-post_wrapper {
            -webkit-box-shadow: 2px 2px 5px 0 rgba(204, 204, 204, 0.61);
            -moz-box-shadow: 2px 2px 5px 0 rgba(204, 204, 204, 0.61);
            -o-box-shadow: 2px 2px 5px 0 rgba(204, 204, 204, 0.61);
            -ms-box-shadow: 2px 2px 5px 0 rgba(204, 204, 204, 0.61);
            box-shadow: 2px 2px 5px 0 rgba(204, 204, 204, 0.61);
            border-radius: 10px;
            overflow: hidden;
        }

        #blog_single_main_sec .blog-post_wrapper:hover .img img {
            transform: scale(1.1, 1.1);
            -webkit-transform: scale(1.1, 1.1);
            -moz-transform: scale(1.1, 1.1);
            -o-transform: scale(1.1, 1.1);
            -ms-transform: scale(1.1, 1.1);
            transition: all 0.3s ease 0s;
            -webkit-transition: all 0.3s ease 0s;
            -moz-transition: all 0.3s ease 0s;
            -o-transition: all 0.3s ease 0s;
            -ms-transition: all 0.3s ease 0s;
        }

        #blog_single_main_sec .grid-item {
            margin-bottom: 38px;
        }

        #blog_single_main_sec .blog-post-image .img {
            overflow: hidden;
        }

        #blog_single_main_sec .blog-post-image .img img {
            max-width: 100%;
            min-width: 100%;
        }

        #blog_single_main_sec .author_img {
            margin-bottom: 0;
            margin-top: -59px;
            position: relative;
            z-index: 99;
            border-radius: 50%;
            -webkit-box-shadow: 2px 2px 5px 0 rgba(204, 204, 204, 0.61);
            -moz-box-shadow: 2px 2px 5px 0 rgba(204, 204, 204, 0.61);
            -o-box-shadow: 2px 2px 5px 0 rgba(204, 204, 204, 0.61);
            -ms-box-shadow: 2px 2px 5px 0 rgba(204, 204, 204, 0.61);
        }

        @media only screen and (max-width: 991px) {
            #blog_single_main_sec .author_img {
                margin-bottom: 31px;
            }
        }

        #blog_single_main_sec .post-detail_container {
            position: relative;
        }

        #blog_single_main_sec .post-detail_container .post-content {
            background-color: #fff;
            padding: 15px 15px;
        }

        #blog_single_main_sec .post-detail_container .post-content ul li:before,
        #blog_single_main_sec .post-detail_container .post-content ul li:after {
            display: none !important;
        }

        #blog_single_main_sec .post-detail_container .post-content .post-title {
            font-size: 21px;
            line-height: 24px;
            margin-bottom: 2px;
            margin-top: 0;
        }

        #blog_single_main_sec .post-detail_container .post-content .post-title a {
            text-decoration: none;
            color: #1a1a1a;
            display: block;
        }

        #blog_single_main_sec .post-detail_container .post-content .post-title a:hover,
        #blog_single_main_sec .post-detail_container .post-content .post-title a:focus {
            text-decoration: none;
            color: #666666;
            transition: 0.4s all ease;
        }

        #blog_single_main_sec .post-detail_container .post-content .post-metadata {
            padding-left: 2px;
        }

        #blog_single_main_sec .post-detail_container .post-content .post-metadata li {
            font-size: 12px;
            line-height: 20px;
            color: #555555;
            padding-right: 3px;
            padding-left: 3px;
        }

        #blog_single_main_sec .post-detail_container .post-content .post-metadata li:before {
            display: none !important;
        }

        #blog_single_main_sec .post-detail_container .post-content .post-metadata li a {
            font-size: 12px;
            line-height: 20px;
            color: #555555;
            text-decoration: none;
        }

        #blog_single_main_sec .post-detail_container .post-content .post-metadata li a:hover,
        #blog_single_main_sec .post-detail_container .post-content .post-metadata li a:focus {
            color: #666666;
        }

        #blog_single_main_sec .post-detail_container .post-content p.post-excerpt {
            color: #444444;
            font-size: 14px;
            line-height: 22px;
        }

        #blog_single_main_sec .post-detail_container .post-content a.read-more {
            padding: 10px 30px;
            border: 1px solid #666666;
            font-size: 14px;
            border-radius: 0 5px 0 5px;
            margin-bottom: 10px;
            display: inline-block;
            color: #666666;
        }

        #blog_single_main_sec .post-detail_container .post-content a.read-more:hover {
            background: #666666;
            color: #FFFFFF;
            transition: all 0.5s ease;
        }

        #blog_single_main_sec .post-cards_row {
            margin-top: 70px;
        }

        #blog_single_main_sec .post-cards_row a.all-posts-btn {
            margin-top: 20px;
            margin-bottom: 10px;
        }

        #blog_single_main_sec .post-cards_row #blog-items .item {
            padding: 0px 15px;
        }

        #blog_single_main_sec .pagination {
            margin-bottom: 68px;
            margin-top: 30px;
        }

        #blog_single_main_sec .pagination li {
            padding-left: 0;
            padding-bottom: 0;
        }

        #blog_single_main_sec .pagination li:before,
        #blog_single_main_sec .pagination li:after {
            display: none !important;
        }

        #blog_single_main_sec .pagination li a {
            border-radius: 50%;
            height: 40px;
            line-height: 40px;
            margin-right: 9px;
            padding: 0;
            text-align: center;
            width: 40px;
            color: #444444;
            font-size: 12px;
            border-color: #212529;
        }

        #blog_single_main_sec .pagination li a:hover,
        #blog_single_main_sec .pagination li a:focus {
            background: #212529;
            color: #FFFFFF;
            border-color: #212529;
        }

        #blog_single_main_sec .pagination .prev a,
        #blog_single_main_sec .pagination .next a {
            border-radius: 50px;
            width: 100px;
        }

        #blog_single_main_sec .pagination li.active a {
            background: #212529;
            color: #FFFFFF;
            border-color: #212529;
        }

        #blog_main_sec {
            padding: 100px 0px 65px;
            background-color: #fff;
            position: relative;
        }

        #blog_main_sec .post_item {
            margin-bottom: 32px;
        }

        @media only screen and (min-width: 480px) and (max-width: 991px) {
            #blog_main_sec aside .widget.widget_recent_entries ul li h4 {
                margin-top: 20px;
            }
        }

        #blog_main_sec .pagination {
            margin-bottom: 68px;
            margin-top: 30px;
        }

        #blog_main_sec .pagination li {
            padding-left: 0;
            padding-bottom: 0;
        }

        #blog_main_sec .pagination li:before,
        #blog_main_sec .pagination li:after {
            display: none !important;
        }

        #blog_main_sec .pagination li a {
            border-radius: 50%;
            height: 40px;
            line-height: 40px;
            margin-right: 9px;
            padding: 0;
            text-align: center;
            width: 40px;
            color: #444444;
            font-size: 12px;
            border-color: #bfbfbf;
        }

        @media only screen and (max-width: 767px) {
            #blog_main_sec .pagination li a {
                margin-bottom: 15px;
            }
        }

        #blog_main_sec .pagination li a:hover,
        #blog_main_sec .pagination li a:focus {
            background-color: #212529;
            color: #FFFFFF;
            border-color: #212529;
        }

        #blog_main_sec .pagination .prev a,
        #blog_main_sec .pagination .next a {
            border-radius: 50px;
            width: 100px;
        }

        #blog_main_sec .pagination li.active a {
            background: #212529 !important;
            border-color: #212529 !important;
            color: #FFFFFF;
        }

        /* ================================== */
        /*          End Blog Listing          */
        /* ================================== */


        /* ================================== */
        /*          Start cb-slider           */
        /* ================================== */


        .cb-slideshow li:before {
            display: none
        }

        .fa_bg_slider {
            position: relative;
            overflow: hidden
        }

        .cb-slideshow li {
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
            left: 0;
            color: transparent;
            background-size: cover;
            background-position: 50% 50%;
            background-repeat: none;
            opacity: 0;
            z-index: -1;
            -webkit-backface-visibility: hidden;
            -webkit-animation: imageAnimation 36s linear infinite 0s;
            -moz-animation: imageAnimation 36s linear infinite 0s;
            -o-animation: imageAnimation 36s linear infinite 0s;
            -ms-animation: imageAnimation 36s linear infinite 0s;
            animation: imageAnimation 36s linear infinite 0s
        }

        .cb-slideshow li:nth-child(2) {
            -webkit-animation-delay: 6s;
            -moz-animation-delay: 6s;
            -o-animation-delay: 6s;
            -ms-animation-delay: 6s;
            animation-delay: 6s
        }

        .cb-slideshow li:nth-child(3) {
            -webkit-animation-delay: 12s;
            -moz-animation-delay: 12s;
            -o-animation-delay: 12s;
            -ms-animation-delay: 12s;
            animation-delay: 12s
        }

        .cb-slideshow li:nth-child(4) {
            -webkit-animation-delay: 18s;
            -moz-animation-delay: 18s;
            -o-animation-delay: 18s;
            -ms-animation-delay: 18s;
            animation-delay: 18s
        }

        .cb-slideshow li:nth-child(5) {
            -webkit-animation-delay: 24s;
            -moz-animation-delay: 24s;
            -o-animation-delay: 24s;
            -ms-animation-delay: 24s;
            animation-delay: 24s
        }

        .cb-slideshow li:nth-child(6) {
            -webkit-animation-delay: 30s;
            -moz-animation-delay: 30s;
            -o-animation-delay: 30s;
            -ms-animation-delay: 30s;
            animation-delay: 30s
        }

        .cb-slideshow li:nth-child(7) {
            -webkit-animation-delay: 36s;
            -moz-animation-delay: 36s;
            -o-animation-delay: 36s;
            -ms-animation-delay: 36s;
            animation-delay: 36s
        }

        .cb-slideshow li:nth-child(8) {
            -webkit-animation-delay: 42s;
            -moz-animation-delay: 42s;
            -o-animation-delay: 42s;
            -ms-animation-delay: 42s;
            animation-delay: 42s
        }

        .cb-slideshow li:nth-child(9) {
            -webkit-animation-delay: 48s;
            -moz-animation-delay: 48s;
            -o-animation-delay: 48s;
            -ms-animation-delay: 48s;
            animation-delay: 48s
        }

        .cb-slideshow li:nth-child(10) {
            -webkit-animation-delay: 54s;
            -moz-animation-delay: 54s;
            -o-animation-delay: 54s;
            -ms-animation-delay: 54s;
            animation-delay: 54s
        }

        .cb-slideshow li:nth-child(11) {
            -webkit-animation-delay: 60s;
            -moz-animation-delay: 60s;
            -o-animation-delay: 60s;
            -ms-animation-delay: 60s;
            animation-delay: 60s
        }

        .cb-slideshow li:nth-child(12) {
            -webkit-animation-delay: 66s;
            -moz-animation-delay: 66s;
            -o-animation-delay: 66s;
            -ms-animation-delay: 66s;
            animation-delay: 66s
        }

        @-webkit-keyframes imageAnimation {
            0% {
                opacity: 0;
                -webkit-animation-timing-function: ease-in
            }

            8% {
                opacity: 1;
                -webkit-transform: scale(1.05);
                -webkit-animation-timing-function: ease-out
            }

            17% {
                opacity: 1;
                -webkit-transform: scale(1.1)
            }

            25% {
                opacity: 0;
                -webkit-transform: scale(1.1)
            }

            100% {
                opacity: 0
            }
        }

        @-moz-keyframes imageAnimation {
            0% {
                opacity: 0;
                -moz-animation-timing-function: ease-in
            }

            8% {
                opacity: 1;
                -moz-transform: scale(1.05);
                -moz-animation-timing-function: ease-out
            }

            17% {
                opacity: 1;
                -moz-transform: scale(1.1)
            }

            25% {
                opacity: 0;
                -moz-transform: scale(1.1)
            }

            100% {
                opacity: 0
            }
        }

        @-o-keyframes imageAnimation {
            0% {
                opacity: 0;
                -o-animation-timing-function: ease-in
            }

            8% {
                opacity: 1;
                -o-transform: scale(1.05);
                -o-animation-timing-function: ease-out
            }

            17% {
                opacity: 1;
                -o-transform: scale(1.1)
            }

            25% {
                opacity: 0;
                -o-transform: scale(1.1)
            }

            100% {
                opacity: 0
            }
        }

        @-ms-keyframes imageAnimation {

            17%,
            8% {
                opacity: 1
            }

            17%,
            25% {
                -ms-transform: scale(1.1)
            }

            0%,
            100%,
            25% {
                opacity: 0
            }

            0% {
                -ms-animation-timing-function: ease-in
            }

            8% {
                -ms-transform: scale(1.05);
                -ms-animation-timing-function: ease-out
            }
        }

        @keyframes imageAnimation {
            0% {
                opacity: 0;
                animation-timing-function: ease-in
            }

            8% {
                opacity: 1;
                transform: scale(1.05);
                animation-timing-function: ease-out
            }

            17% {
                opacity: 1;
                transform: scale(1.1)
            }

            25% {
                opacity: 0;
                transform: scale(1.1)
            }

            100% {
                opacity: 0
            }
        }

        @-webkit-keyframes titleAnimation {
            0% {
                opacity: 0;
                -webkit-transform: translateY(200px)
            }

            8% {
                opacity: 1;
                -webkit-transform: translateY(0)
            }

            17% {
                opacity: 1;
                -webkit-transform: scale(1)
            }

            100%,
            19% {
                opacity: 0
            }

            25% {
                opacity: 0;
                -webkit-transform: scale(10)
            }
        }

        @-moz-keyframes titleAnimation {
            0% {
                opacity: 0;
                -moz-transform: translateY(200px)
            }

            8% {
                opacity: 1;
                -moz-transform: translateY(0)
            }

            17% {
                opacity: 1;
                -moz-transform: scale(1)
            }

            100%,
            19% {
                opacity: 0
            }

            25% {
                opacity: 0;
                -moz-transform: scale(10)
            }
        }

        @-o-keyframes titleAnimation {
            0% {
                opacity: 0;
                -o-transform: translateY(200px)
            }

            8% {
                opacity: 1;
                -o-transform: translateY(0)
            }

            17% {
                opacity: 1;
                -o-transform: scale(1)
            }

            100%,
            19% {
                opacity: 0
            }

            25% {
                opacity: 0;
                -o-transform: scale(10)
            }
        }

        @-ms-keyframes titleAnimation {

            17%,
            8% {
                opacity: 1
            }

            0%,
            100%,
            19%,
            25% {
                opacity: 0
            }

            0% {
                -ms-transform: translateY(200px)
            }

            8% {
                -ms-transform: translateY(0)
            }

            17% {
                -ms-transform: scale(1)
            }

            25% {
                -webkit-transform: scale(10)
            }
        }

        @keyframes titleAnimation {
            0% {
                opacity: 0;
                transform: translateY(200px)
            }

            8% {
                opacity: 1;
                transform: translateY(0)
            }

            17% {
                opacity: 1;
                transform: scale(1)
            }

            100%,
            19% {
                opacity: 0
            }

            25% {
                opacity: 0;
                transform: scale(10)
            }
        }

        .no-cssanimations .cb-slideshow li {
            opacity: 1
        }


        /* ================================== */
        /*          End cb-slider             */
        /* ================================== */


        /* ================================== */
        /*          Start Et-Line             */
        /* ================================== */

        @font-face {
            font-family: 'et-line';
            src: url('../fonts/et-line.eot');
            font-weight: normal;
            font-style: normal;
        }

        /* Use the following CSS code if you want to use data attributes for inserting your icons */
        [data-icon]:before {
            font-family: 'et-line';
            content: attr(data-icon);
            speak: none;
            font-weight: normal;
            font-variant: normal;
            text-transform: none;
            line-height: 1;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            display: inline-block;
        }

        .icon-mobile,
        .icon-laptop,
        .icon-desktop,
        .icon-tablet,
        .icon-phone,
        .icon-document,
        .icon-documents,
        .icon-search,
        .icon-clipboard,
        .icon-newspaper,
        .icon-notebook,
        .icon-book-open,
        .icon-browser,
        .icon-calendar,
        .icon-presentation,
        .icon-picture,
        .icon-pictures,
        .icon-video,
        .icon-camera,
        .icon-printer,
        .icon-toolbox,
        .icon-briefcase,
        .icon-wallet,
        .icon-gift,
        .icon-bargraph,
        .icon-grid,
        .icon-expand,
        .icon-focus,
        .icon-edit,
        .icon-adjustments,
        .icon-ribbon,
        .icon-hourglass,
        .icon-lock,
        .icon-megaphone,
        .icon-shield,
        .icon-trophy,
        .icon-flag,
        .icon-map,
        .icon-puzzle,
        .icon-basket,
        .icon-envelope,
        .icon-streetsign,
        .icon-telescope,
        .icon-gears,
        .icon-key,
        .icon-paperclip,
        .icon-attachment,
        .icon-pricetags,
        .icon-lightbulb,
        .icon-layers,
        .icon-pencil,
        .icon-tools,
        .icon-tools-2,
        .icon-scissors,
        .icon-paintbrush,
        .icon-magnifying-glass,
        .icon-circle-compass,
        .icon-linegraph,
        .icon-mic,
        .icon-strategy,
        .icon-beaker,
        .icon-caution,
        .icon-recycle,
        .icon-anchor,
        .icon-profile-male,
        .icon-profile-female,
        .icon-bike,
        .icon-wine,
        .icon-hotairballoon,
        .icon-globe,
        .icon-genius,
        .icon-map-pin,
        .icon-dial,
        .icon-chat,
        .icon-heart,
        .icon-cloud,
        .icon-upload,
        .icon-download,
        .icon-target,
        .icon-hazardous,
        .icon-piechart,
        .icon-speedometer,
        .icon-global,
        .icon-compass,
        .icon-lifesaver,
        .icon-clock,
        .icon-aperture,
        .icon-quote,
        .icon-scope,
        .icon-alarmclock,
        .icon-refresh,
        .icon-happy,
        .icon-sad,
        .icon-facebook,
        .icon-twitter,
        .icon-googleplus,
        .icon-rss,
        .icon-tumblr,
        .icon-linkedin,
        .icon-dribbble {
            font-family: 'et-line';
            speak: none;
            font-style: normal;
            font-weight: normal;
            font-variant: normal;
            text-transform: none;
            line-height: 1;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            display: inline-block;
        }

        .icon-mobile:before {
            content: "\e000";
        }

        .icon-laptop:before {
            content: "\e001";
        }

        .icon-desktop:before {
            content: "\e002";
        }

        .icon-tablet:before {
            content: "\e003";
        }

        .icon-phone:before {
            content: "\e004";
        }

        .icon-document:before {
            content: "\e005";
        }

        .icon-documents:before {
            content: "\e006";
        }

        .icon-search:before {
            content: "\e007";
        }

        .icon-clipboard:before {
            content: "\e008";
        }

        .icon-newspaper:before {
            content: "\e009";
        }

        .icon-notebook:before {
            content: "\e00a";
        }

        .icon-book-open:before {
            content: "\e00b";
        }

        .icon-browser:before {
            content: "\e00c";
        }

        .icon-calendar:before {
            content: "\e00d";
        }

        .icon-presentation:before {
            content: "\e00e";
        }

        .icon-picture:before {
            content: "\e00f";
        }

        .icon-pictures:before {
            content: "\e010";
        }

        .icon-video:before {
            content: "\e011";
        }

        .icon-camera:before {
            content: "\e012";
        }

        .icon-printer:before {
            content: "\e013";
        }

        .icon-toolbox:before {
            content: "\e014";
        }

        .icon-briefcase:before {
            content: "\e015";
        }

        .icon-wallet:before {
            content: "\e016";
        }

        .icon-gift:before {
            content: "\e017";
        }

        .icon-bargraph:before {
            content: "\e018";
        }

        .icon-grid:before {
            content: "\e019";
        }

        .icon-expand:before {
            content: "\e01a";
        }

        .icon-focus:before {
            content: "\e01b";
        }

        .icon-edit:before {
            content: "\e01c";
        }

        .icon-adjustments:before {
            content: "\e01d";
        }

        .icon-ribbon:before {
            content: "\e01e";
        }

        .icon-hourglass:before {
            content: "\e01f";
        }

        .icon-lock:before {
            content: "\e020";
        }

        .icon-megaphone:before {
            content: "\e021";
        }

        .icon-shield:before {
            content: "\e022";
        }

        .icon-trophy:before {
            content: "\e023";
        }

        .icon-flag:before {
            content: "\e024";
        }

        .icon-map:before {
            content: "\e025";
        }

        .icon-puzzle:before {
            content: "\e026";
        }

        .icon-basket:before {
            content: "\e027";
        }

        .icon-envelope:before {
            content: "\e028";
        }

        .icon-streetsign:before {
            content: "\e029";
        }

        .icon-telescope:before {
            content: "\e02a";
        }

        .icon-gears:before {
            content: "\e02b";
        }

        .icon-key:before {
            content: "\e02c";
        }

        .icon-paperclip:before {
            content: "\e02d";
        }

        .icon-attachment:before {
            content: "\e02e";
        }

        .icon-pricetags:before {
            content: "\e02f";
        }

        .icon-lightbulb:before {
            content: "\e030";
        }

        .icon-layers:before {
            content: "\e031";
        }

        .icon-pencil:before {
            content: "\e032";
        }

        .icon-tools:before {
            content: "\e033";
        }

        .icon-tools-2:before {
            content: "\e034";
        }

        .icon-scissors:before {
            content: "\e035";
        }

        .icon-paintbrush:before {
            content: "\e036";
        }

        .icon-magnifying-glass:before {
            content: "\e037";
        }

        .icon-circle-compass:before {
            content: "\e038";
        }

        .icon-linegraph:before {
            content: "\e039";
        }

        .icon-mic:before {
            content: "\e03a";
        }

        .icon-strategy:before {
            content: "\e03b";
        }

        .icon-beaker:before {
            content: "\e03c";
        }

        .icon-caution:before {
            content: "\e03d";
        }

        .icon-recycle:before {
            content: "\e03e";
        }

        .icon-anchor:before {
            content: "\e03f";
        }

        .icon-profile-male:before {
            content: "\e040";
        }

        .icon-profile-female:before {
            content: "\e041";
        }

        .icon-bike:before {
            content: "\e042";
        }

        .icon-wine:before {
            content: "\e043";
        }

        .icon-hotairballoon:before {
            content: "\e044";
        }

        .icon-globe:before {
            content: "\e045";
        }

        .icon-genius:before {
            content: "\e046";
        }

        .icon-map-pin:before {
            content: "\e047";
        }

        .icon-dial:before {
            content: "\e048";
        }

        .icon-chat:before {
            content: "\e049";
        }

        .icon-heart:before {
            content: "\e04a";
        }

        .icon-cloud:before {
            content: "\e04b";
        }

        .icon-upload:before {
            content: "\e04c";
        }

        .icon-download:before {
            content: "\e04d";
        }

        .icon-target:before {
            content: "\e04e";
        }

        .icon-hazardous:before {
            content: "\e04f";
        }

        .icon-piechart:before {
            content: "\e050";
        }

        .icon-speedometer:before {
            content: "\e051";
        }

        .icon-global:before {
            content: "\e052";
        }

        .icon-compass:before {
            content: "\e053";
        }

        .icon-lifesaver:before {
            content: "\e054";
        }

        .icon-clock:before {
            content: "\e055";
        }

        .icon-aperture:before {
            content: "\e056";
        }

        .icon-quote:before {
            content: "\e057";
        }

        .icon-scope:before {
            content: "\e058";
        }

        .icon-alarmclock:before {
            content: "\e059";
        }

        .icon-refresh:before {
            content: "\e05a";
        }

        .icon-happy:before {
            content: "\e05b";
        }

        .icon-sad:before {
            content: "\e05c";
        }

        .icon-facebook:before {
            content: "\e05d";
        }

        .icon-twitter:before {
            content: "\e05e";
        }

        .icon-googleplus:before {
            content: "\e05f";
        }

        .icon-rss:before {
            content: "\e060";
        }

        .icon-tumblr:before {
            content: "\e061";
        }

        .icon-linkedin:before {
            content: "\e062";
        }

        .icon-dribbble:before {
            content: "\e063";
        }

        /* ================================== */
        /*          End Et-Line              */
        /* ================================== */



        /* ================================== */
        /*          Start YTPlayer            */
        /* ================================== */

        .mb_YTPBar,
        .mb_YTPBar span.mb_YTPUrl a {
            color: #fff
        }

        @font-face {
            font-family: ytpregular;
            src: url(font/ytp-regular.html)
        }

        @font-face {
            font-family: ytpregular;
            src: url(data:application/x-font-woff;charset=utf-8;base64,d09GRgABAAAAAA5sABEAAAAAFCAAAQAAAAAAAAAAAAAAAAAAAAAAAAAAAABGRlRNAAABgAAAABwAAAAcZ9iuNUdERUYAAAGcAAAAHQAAACAAdAAET1MvMgAAAbwAAABJAAAAYHUMUrFjbWFwAAACCAAAAKkAAAGKn5XycWN2dCAAAAK0AAAANgAAADYNLQohZnBnbQAAAuwAAAGxAAACZVO0L6dnYXNwAAAEoAAAAAgAAAAIAAAAEGdseWYAAASoAAAGVQAAB4jz86dSaGVhZAAACwAAAAAzAAAANgbKONpoaGVhAAALNAAAACAAAAAkESQLXGhtdHgAAAtUAAAAVAAAARxOmwVwbG9jYQAAC6gAAAAjAAAAkFoEXRRtYXhwAAALzAAAACAAAAAgAWoB625hbWUAAAvsAAAA+wAAAeok3Eb+cG9zdAAADOgAAADAAAABN99tv1lwcmVwAAANqAAAALkAAAFY3I6ikndlYmYAAA5kAAAABgAAAAbHMlGnAAAAAQAAAADMPaLPAAAAAM3Nk7QAAAAAzc13sXjaY2BkYGDgA2IJBhBgYmAEQjcgZgHzGAAHTAB5AAAAeNpjYGbZwDiBgZWBhdWY5SwDA8MsCM10liGNKQ3IB0rBASMDEgj1DvdjcGDgfcDAlvYPqJJVldEZpoZVkuUZkFJgYAQAUUULewAAAHjaY2BgYGaAYBkGRgYQaAHyGMF8FoYMIC3GIAAUYQOyeBkUGKIYqhgWKHAp6CvEP2D4/x+sAyTuyJAIFGeAizP+//r/8f/D//f+n/HA8oHo/WcKblDzsQBGoOkwSUYmIMGErgDiRLyAhZWNnYOTi5uHl49fQFBIWERUTFxCUkpaRhYiLyevoKikrKKqpq6hqaWto6unb2BoZGxiambOQF1gQZYuAIQnH4IAAAAAAAAAAAABegEnAHEAswC9AOAA5QD+ARcBIwBdAHIBtgBcAGAAZgByAI8AogErAbIAUwBEBREAAHjaXVG7TltBEN0NDwOBxNggOdoUs5mQxnuhBQnE1Y1iZDuF5QhpN3KRi3EBH0CBRA3arxmgoaRImwYhF0h8Qj4hEjNriKI0Ozuzc86ZM0vKkap36WvPU+ckkMLdBs02/U5ItbMA96Tr642MtIMHWmxm9Mp1+/4LBpvRlDtqAOU9bykPGU07gVq0p/7R/AqG+/wf8zsYtDTT9NQ6CekhBOabcUuD7xnNussP+oLV4WIwMKSYpuIuP6ZS/rc052rLsLWR0byDMxH5yTRAU2ttBJr+1CHV83EUS5DLprE2mJiy/iQTwYXJdFVTtcz42sFdsrPoYIMqzYEH2MNWeQweDg8mFNK3JMosDRH2YqvECBGTHAo55dzJ/qRA+UgSxrxJSjvjhrUGxpHXwKA2T7P/PJtNbW8dwvhZHMF3vxlLOvjIhtoYEWI7YimACURCRlX5hhrPvSwG5FL7z0CUgOXxj3+dCLTu2EQ8l7V1DjFWCHp+29zyy4q7VrnOi0J3b6pqqNIpzftezr7HA54eC8NBY8Gbz/v+SoH6PCyuNGgOBEN6N3r/orXqiKu8Fz6yJ9O/sVoAAAAAAQAB//8AD3jaTZVrbBxXFcfvufNe72Nmdx77tmfHO2N76117784OTr154YAbR7RQuUQhttoSuXZKFQVKKYqgiFJAgkpIkVClIn8opSomjXY3VHHTFldEIYpay1hR+ID4Bha27FoIEQGpd8Idu4lY7c6eOfee//2f3+zeizAaQwif4iYRgwRUbgGqjLYFNvVxtcVzfxltM5iGqMUEaS5ItwU+vTPahiBPFFMpmoo5hnv8XnjFn+Um7/xmjF1GCLHoPf+fgsUVEYcSKIcGkYbaWYxKLZ3bgGa50qpACQ0NeyYoYILaDTqpurUK2FZBUYlJY8ukEc0egLpbo+kY8O/BQcx2dvwP2Fh6/Q+Gl19fyroubHmer7rpjHllPZ/NKB+tp2/4/TzxSx0zo/74uUY29vJZOEHIfng4lzz7cjyXzn/jJwqCwCOLdj2iPSP3F/hUAHF3v+Cviee5DIqhJDLRACLoPGpHECq1M7Sd5iDZ/W6zQW8mu9Ecql7SI6xYaiOpnxCydwPNWqWJ/tSSjY1mqtqU5ZYNpWal2pJiGy0XSi1bVuKX1Fyh1GuMoJYeUeJvy/GEVbTpfTOjHJRVzUim0tlcwekbKD1QrgR5M97OV8nIyMjQsKPUEKWGNEVFFBwqEs/yHMEVFMM1PIc4FhiWQVxHcxjD0zzXEkgbmHe5G1eA9T955453xd+B9tbpi6vj10+fvj6+evH0Fju7vPDU5szVY8euzmw+tXABv7kEov/v33WOv+v/C8LG9M2xD19/EquzCyuHVuY6R25Obz35+odw4NDKwuzWHAK86q9x21wKYYQkjFeZ3M5f/TUmw6Qo12P+38Wf0zEZpVABlVANfQu1owHXXMD1AdIyQhvNgeou2b1LAuhAkVwyExRps/ppAE230qrTX1MrEVXil5W4qlm9thMAMpR2MtVHAbXMnBJvZ8oVGjdZ5XK6u6cwNExqdNJ9dnm4D+8eIeYeM7hH0b3H9bcQuczdeH75ef+TxTveO/5tuDK2Mrs5d+HmzQtzm7MrbP6ZqxMrrz2+vf34aysTV5+5iN9YhMi51W93Tiz5/wFp+ujy/MntGXx+dfrjqflrO788Ob989MaMP716+Nr8FOpCjbvnw032BUrm82gKfQc10SJaAwwZGINHEUrksaEndI3XCppBavWaU7Nrda/u7QfPsnmBF1ReK4NjCxbkgVRJdW/MdmiyjHkhCgKvGkrNq+uGngPLUDXVioJTcGxONWguENOIYmkq1lQqaDu2q1AqKi6qRh6CN0uqhlkn1WIwt1Z3FTqH6lt2kWLkqZpQ2F1H4D3X1CzFUkCp1R8EVaeKGr3mgXpyd3OKZTcgioMi3qImqA2FaFSYrkHd7BYESnSMdqAx1HNgg/6pG0Bo95RAGehqoNAuaRHR90wGdXyJtkAJ1DxSDVQCfS8ocui+EohqagNjFroniyLAOYbBgvSQxuXxiUSCGQXReJBnjafhbf6xBs8P9ZclLLJdTJfdL3bLRsgd50Nf52P7JIWjInYqFuZhUGErucF0Qj/zNJtPGArDz7EYFi0chvSpw8C/mJRgRVLfgrEf7RvowhyjJ3JPfPlX/h8N/6fZryX7bh/pJsPj4QLX9Ra89NL3QQkljmOqnognU6HcxKkoI/JsaJ8cDcfCqZAMC2cfFeSoHu+WFEmWzIQqx8PVmCThSFqPKqLIsgxJx0QYZt1iocjgfrPbjIoiltkXxzxTlE5FVTL1zb7YmTOSzXGiEBU0ZgHzXexjd9HklDtTc2P7iR4/Wmqk/jGhfZXjZW1bYFVp3y01G+ocrh/K9VST3+05OUsaEnAYGKZRfWIpDQaXT2Ej2/vCl1S5nNe7jHq5eCAlM7rOpFx8PP1Zf/NzCUdkpXjUhHmdfdi/Xv31D6WccPAIDjNMmPnBzC+ErAipZzPf++LkQyGRhTDEpCNkbmLpz8892zmE3+8swq1YODIqf2Z7lO8RdJHn7RS8kpY6r0qhAg7xXIHnhViu+zBDbhcx16UOfGVgaGkoXe6LhwS+h7NgSa+vR7ESZvPyq6VUqN+SC0ZSTPm3oETGoxGIh/p60w3naIyJ/Gywf9CMnnAemR3524hT5DErxOwBhR55COMw3e+u0T0tOEsR0JMx+NBHftD/AJ+D/f7v/TW+9t+P+Bo9e/7vNYz+By6FsKkAAAB42mNgZGBgYGRwbI8IWhzPb/OVQZ6DAQTOni3fCKP/+/x7yrOBNRTI5WBgAokCAG3mDbAAeNpjYGRgYFX9t5eBgeftf5//WTwbGIAiKMAdAJycBph42mN6w+DCwcDAAMIsZ8D0HhBNLIap52D478fBwHQRyvbBpZ7nLYMtKeZjt5OJhxT1TKsYGFhDETTjcSAG0gyPoRgozigIpL0hNEiOBcgFAEBoNC142mNgYNCBwjoccALDBEY9RhsgPIMMmZcRhHtIhkcA9pQspAAAAQAAAEcBVAALAAAAAAACAAEAAgAWAAABAACTAAAAAHjalZCxTgJBFEXPApJoYYgF9VZUSIAFTdDCnmiIgsTKsASQuGiCu0YaCr4OfomKOzsTCHRmMzPn3blz38sCFyzJ4uXOgbKWZY+8KssZLqk7zkp9cJyjSOT4jD9WjvPSt46vKHoFx2txyfGGqnfPO18kyohSGjBjJPqRFmqPmWolWkZ9o0uHZ/EkfTNgTo0KVX017ujRps+TyDqvT7xW9U/UV1Vz9ZryrQn8o8QOL1JsdVA/5IwZpv7f/YsKTW50O1PqpzKNZyw1UnKov2c9dbkD7c1/zdhXFSrNdIz3HbuaJFH1KM9CZyDN3N3SoiFupfP66mbOYAd8k0EGAHjabc05TwJhHITxZ0BBBc/P4IkI7y4sh0dBsosHKiqHeLUiiTE0FH56Xdl/6TS/ZIoZUszzM+ad/3IOSilNmm122GWPfQ4ocEiRI0qUcXj4VKgSUKNOgybHnHDKGSER7Xjjgkuu6HDNDbd0ueOeB3r0GTDkkRFPPPPCK29a0KIyympJy1pRTnmtak3r2tCmtjLjz+/ph5edfU2cc2Fiy/3px4Xpmb5ZMatmYNbMutkwm2Yr0W8nBnOj+OcXVDk0PnjaRc67DoJAEAVQFuT9fqsJCSZ2+w12QkNjrCCx9w+sbSy19DsGK/9Ob3RZujk3k7nzZp8bsbvSkXXoR8Yew9gavN9QNHSUHTFch4oMfuoV0uqGNL4nv25emq3yHzzADwVcwOsFHMCtBWzAWQlYgJ0ImIA1rRmAeRbQAWM6vQD04A9GgXglRBo4Kh+19gJGYDgzBqOnZALGO8kUTLaSGZhWkjmYrSULMA8kS7CYi5ZgKTlQxr/W1F5aAAAAAAFRp8cxAAA=)format('woff'), url(font/ytp-regular.ttf)format('truetype');
            font-weight: 400;
            font-style: normal
        }

        .mb_YTPlayer:focus {
            outline: 0
        }

        .mbYTP_wrapper {
            display: block;
            transform: translateZ(0)translate3d(0, 0, 0);
            transform-style: preserve-3d;
            perspective: 1000;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
            box-sizing: border-box
        }

        .mb_YTPlayer .loading {
            position: absolute;
            top: 10px;
            right: 10px;
            font-size: 12px;
            color: #fff;
            background: rgba(0, 0, 0, .51);
            text-align: center;
            padding: 2px 4px;
            border-radius: 5px;
            font-family: "Droid Sans", sans-serif;
            -webkit-animation: fade .1s infinite alternate;
            animation: fade .1s infinite alternate
        }

        @-webkit-keyframes fade {
            0% {
                opacity: .5
            }

            100% {
                opacity: 1
            }
        }

        @keyframes fade {
            0% {
                opacity: .5
            }

            100% {
                opacity: 1
            }
        }

        .fullscreen {
            display: block !important;
            position: fixed !important;
            width: 100% !important;
            height: 100% !important;
            top: 0 !important;
            left: 0 !important;
            margin: 0 !important;
            border: none !important;
            opacity: 1 !important
        }

        .mbYTP_wrapper iframe {
            max-width: 4000px !important
        }

        .inline_YTPlayer {
            margin-bottom: 20px;
            vertical-align: top;
            position: relative;
            left: 0;
            overflow: hidden;
            border-radius: 4px;
            box-shadow: 0 0 5px rgba(0, 0, 0, .7);
            background: rgba(0, 0, 0, .5)
        }

        .inline_YTPlayer img {
            border: none !important;
            margin: 0 !important;
            padding: 0 !important;
            transform: none !important
        }

        .mb_YTPBar,
        .mb_YTPBar .buttonBar {
            box-sizing: border-box;
            left: 0;
            padding: 5px;
            width: 100%
        }

        .mb_YTPBar .ytpicon {
            font-size: 20px;
            font-family: ytpregular
        }

        .mb_YTPBar .mb_YTPUrl.ytpicon {
            font-size: 30px
        }

        .mb_YTPBar {
            transition: opacity .5s;
            display: block;
            height: 10px;
            background: #333;
            position: fixed;
            bottom: 0;
            text-align: left;
            z-index: 1000;
            font: 14px/16px sans-serif;
            opacity: .1
        }

        .mb_YTPBar.visible,
        .mb_YTPBar:hover {
            opacity: 1
        }

        .mb_YTPBar .buttonBar {
            transition: all .5s;
            background: 0 0;
            font: 12px/14px Calibri;
            position: absolute;
            top: -30px
        }

        .mb_YTPBar:hover .buttonBar {
            background: rgba(0, 0, 0, .4)
        }

        .mb_YTPBar span {
            display: inline-block;
            font: 16px/20px Calibri, sans-serif;
            position: relative;
            width: 30px;
            height: 25px;
            vertical-align: middle
        }

        .mb_YTPBar span.mb_YTPTime {
            width: 130px
        }

        .mb_YTPBar span.mb_OnlyYT,
        .mb_YTPBar span.mb_YTPUrl {
            position: absolute;
            width: auto;
            display: block;
            top: 6px;
            right: 10px;
            cursor: pointer
        }

        .mb_YTPBar span.mb_YTPUrl img {
            width: 60px
        }

        .mb_YTPBar span.mb_OnlyYT {
            left: 300px;
            right: auto
        }

        .mb_YTPBar span.mb_OnlyYT img {
            width: 25px
        }

        .mb_YTPBar .mb_YTPMuteUnmute,
        .mb_YTPBar .mb_YTPPlaypause,
        .mb_YTPlayer .mb_YTPBar .mb_YTPPlaypause img {
            cursor: pointer
        }

        .mb_YTPBar .mb_YTPProgress {
            height: 10px;
            width: 100%;
            background: #222;
            bottom: 0;
            left: 0
        }

        .mb_YTPBar .mb_YTPLoaded {
            height: 10px;
            width: 0;
            background: #444;
            left: 0
        }

        .mb_YTPBar .mb_YTPseekbar {
            height: 10px;
            width: 0;
            background: #000;
            bottom: 0;
            left: 0;
            box-shadow: rgba(82, 82, 82, .47)1px 1px 3px
        }

        .mb_YTPBar .YTPOverlay {
            backface-visibility: hidden;
            -webkit-backface-visibility: hidden;
            -webkit-transform-style: "flat";
            box-sizing: border-box
        }

        .YTPOverlay.raster {
            background: url(images/raster.png)
        }

        .YTPOverlay.raster.retina {
            background: url(images/raster@2x.png)
        }

        .YTPOverlay.raster-dot {
            background: url(images/raster_dot.png)
        }

        .YTPOverlay.raster-dot.retina {
            background: url(images/raster_dot@2x.png)
        }

        .mb_YTPBar .simpleSlider {
            position: relative;
            width: 100px;
            height: 10px;
            border: 1px solid #fff;
            overflow: hidden;
            box-sizing: border-box;
            margin-right: 10px;
            cursor: pointer !important;
            border-radius: 3px
        }

        .mb_YTPBar.compact .simpleSlider {
            width: 40px
        }

        .mb_YTPBar .simpleSlider.muted {
            opacity: .3
        }

        .mb_YTPBar .level {
            position: absolute;
            left: 0;
            bottom: 0;
            background-color: #fff;
            box-sizing: border-box
        }

        .mb_YTPBar .level.horizontal {
            height: 100%;
            width: 0
        }

        .mb_YTPBar .level.vertical {
            height: auto;
            width: 100%
        }
        /* ================================== */
        /*          End YTPlayer              */
        /* ================================== */
    </style>
</head>
<body>
<div class="loading">
    <div class="loading-text">
        <span class="loading-text-words">L</span>
        <span class="loading-text-words">O</span>
        <span class="loading-text-words">A</span>
        <span class="loading-text-words">D</span>
        <span class="loading-text-words">I</span>
        <span class="loading-text-words">N</span>
        <span class="loading-text-words">G</span>
    </div>
</div>
<div id="home"></div>
<header id="rt_header">
    <nav>
        <div class="navbar-wrapper" id="navigation">
            <div class="navbar navbar-default navbar-fixed-top reveal-menu-home" role="navigation">
                <div class="container nav-container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse"
                                    data-target=".navbar-collapse">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <div class="logo" style="font-weight: 800;">
                                    <a href="index.php">BlogSphere</a>
                                </div>
                            </div>
                            <div class="navbar-collapse collapse">
                                <ul class="nav navbar-nav navbar-right">
                                    <li><a href="index.php">Home</a></li>
                                    <li><a href="aboutus.php">About Us</a></li>
                                    <li><a href="portfolio.php">Portfolio</a></li>
                                    <li><a href="blogs.php">Blogs</a></li>
                                    <li><a href="contact.php">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "blogswebsite";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>