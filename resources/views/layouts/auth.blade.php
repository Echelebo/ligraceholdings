<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=0.8, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="https://altsfolio.org/trust/img/favicon.png" type="image/x-icon">
    <title>{{ $page_title }} | altsfolio.org</title>
    <link rel="stylesheet" href="https://altsfolio.org/trust/vendor/font-awesome-4.7.0/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="https://altsfolio.org/trust/vendor/bootstrap-4.1.1/css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="https://altsfolio.org/trust/css/light_adminux.css" type="text/css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <!-- /GetButton.io widget-->
    <script type="text/javascript">
        (function() {
            var options = {
                whatsapp: "+", // WhatsApp number
                call_to_action: "Contact us!", // Call to action
                position: "left", // Position may be "right" or "left"
            };
            var proto = document.location.protocol,
                host = "getbutton.io",
                url = proto + "//static." + host;
            var s = document.createElement("script");
            s.type = "text/javascript";
            s.async = true;
            s.src = url + "/widget-send-button/js/init.js";
            s.onload = function() {
                WhWidgetSendButton.init(host, proto, options);
            };
            var x = document.getElementsByTagName("script")[0];
            x.parentNode.insertBefore(s, x);
        })();
    </script>
    <!-- /GetButton.io widget -->

</head>

<body oncut="return false" class="menuclose menuclose-right" style="background:gray">
    <!-- <figure class="background"> <img src="img/login_bg.jpg" alt="evolutemining"> </figure> -->

    <figure class="background">
        <video autoplay muted="muted" loop id="myVideo">
            <source src="https://altsfolio.org/trust/bg.mp4" type="video/mp4">
        </video>
    </figure>

    <style>
        #myVideo {
            position: fixed;
            right: 0;
            bottom: 0;
            min-width: 100%;
            min-height: 100%;
            z-index: -1;
        }
    </style>




    <!-- Page Loader -->
    <!--
<div class="loader_wrapper inner align-items-center text-center">
  <div class="load7 load-wrapper">
    <div class="loading_img"></div>
    <div class="loader"> Loading... </div>
    <div class="clearfix"></div>
  </div>
</div>-->
    <!-- Page Loader Ends -->

    <header class="navbar-fixed">
        <nav class="navbar navbar-toggleable-md sign-in-header">
            <div class="sidebar-left"> <a class="navbar-brand" href="#"><img style="width:21%;height:11%" src="https://altsfolio.org/trust/altlog-removebg-preview.png" alt=""></a>

                <div class="col"></div>
                <div class="sidebar-right pull-right">
                    <ul class="navbar-nav  justify-content-end">
                        <li style="margin:4px"><a href="#" class="btn btn-link text-white"></a></li>
                        <li style="margin:4px"><a href="/" style="background:#0080DB;color:white" class="btn btn-primary">Home</a></li>
                        <li style="margin:4px"><a href="/login" style="background:#0080DB;color:white" class="btn btn-primary">Login</a></li>
                        <li style="margin:4px">


                            <div id="google_translate_element"></div>

                            <script type="text/javascript">
                                function googleTranslateElementInit() {
                                    new google.translate.TranslateElement({
                                        pageLanguage: 'en'
                                    }, 'google_translate_element');
                                }
                            </script>

                            <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

                        </li>
                    </ul>
                </div>
        </nav>
    </header>
    <div class="wrapper-content-sign-in p-0">


        <div class="col-md-8 offset-md-8 text-left side_signing_full">

            <!-- register starts -->

            @yield('contents')






            <script src="https://altsfolio.org/trust/js/jquery-2.1.1.min.js" type="text/javascript"></script>
            <script src="https://altsfolio.org/trust/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
            <script src="https://altsfolio.org/trust/vendor/bootstrap4beta/js/bootstrap.min.js" type="text/javascript"></script>
            <script src="https://altsfolio.org/trust/vendor/cookie/jquery.cookie.js" type="text/javascript"></script>
            <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
            <script src="https://altsfolio.org/trust/js/ie10-viewport-bug-workaround.js"></script>


            <script>
                "use strict";
                $('input[type="checkbox"]').on('change', function() {
                    $(this).parent().toggleClass("active")
                    $(this).closest(".media").toggleClass("active");
                });
                $(window).on("load", function() {
                    /* loading screen */
                    $(".loader_wrapper").fadeOut("slow");
                });
            </script>



            <script>
                let dPwd = false;

                function vPwd() {
                    let gPwd = $("#pwd");
                    if (dPwd === false) {
                        $("#eye").removeClass("fa-eye-slash")
                        $("#eye").addClass("fa-eye")
                        gPwd.attr("type", "text");
                        dPwd = true;
                    } else if (dPwd === true) {
                        $("#eye").removeClass("fa-eye")
                        $("#eye").addClass("fa-eye-slash")
                        gPwd.attr("type", "password");
                        dPwd = false;
                    }
                }
            </script>
            <script>
                // $(document).ready(function(){
                // $("body").bind("cut copy paste",function(e){
                //   e.preventDefault();
                // })
                // $("body").on("contextmenu",function(e){
                //   return false;
                // });
                // })
            </script>





</body>

</html>