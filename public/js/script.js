(function($) {

	"use strict";



    /*------------------------------------------
        = FUNCTIONS
    -------------------------------------------*/
    // Check ie and version
    function isIE () {
        var myNav = navigator.userAgent.toLowerCase();
        return (myNav.indexOf('msie') != -1) ? parseInt(myNav.split('msie')[1], 10) : false;
    }


    // Toggle mobile navigation
    function toggleMobileNavigation() {
        var navbar = $("#navbar");
        var openBtn = $(".navbar-header .open-btn");
        var closeBtn = $("#navbar .close-navbar");

        openBtn.on("click", function() {
            if (!navbar.hasClass("slideInn")) {
                navbar.addClass("slideInn");
            }
            return false;
        })

        closeBtn.on("click", function() {
            if (navbar.hasClass("slideInn")) {
                navbar.removeClass("slideInn");
            }
            return false;            
        })
    }

    toggleMobileNavigation();


    // Add class for small navigation
    function addClassForSmallNav() {
        var windowWidth = window.innerWidth,
            mainNav = $("#navbar > ul");
        
        if (windowWidth < 992) {
            mainNav.addClass("small-nav");
        } else {
            mainNav.removeClass("small-nav");
        }
    }


    // Functionality for dropdown open close ect
    function smallNavFunctinality() {
        if ($(".small-nav").length) {
            var navigation = $(".small-nav");

            var subMenuLink = navigation.find(".sub-menu > a");
            var subSubMenuLink = navigation.find(".sub-sub-menu > a");
            var subMenu = subMenuLink.siblings("ul");
            var subSubMenu = subSubMenuLink.next("ul");

            subMenu.hide();
            subSubMenu.hide();

            subMenuLink.on("click", function(e) {
                var $this = $(this);
                e.preventDefault();
                $this.siblings().slideToggle();
                e.stopImmediatePropagation();
            });

            subSubMenuLink.on("click", function(f) {
                var $this = $(this);
                f.preventDefault();
                $this.siblings().slideToggle();
                f.stopImmediatePropagation();
            });
        }
    }


    // Parallax background
    function bgParallax() {
        if ($(".parallax").length) {
            $(".parallax").each(function() {
                var height = $(this).position().top;
                var resize     = height - $(window).scrollTop();
                var doParallax = -(resize/5);
                var positionValue   = doParallax + "px";
                var img = $(this).data("bg-image");

                $(this).css({
                    backgroundImage: "url(" + img + ")",
                    backgroundPosition: "50%" + positionValue,
                    backgroundSize: "cover"
                });
            });
        }
    }

    bgParallax();


    // function for setting two coloumn height equial
    function setTwoColEqHeight($col1, $col2) {
        var firstCol = $col1,
            secondCol = $col2,
            firstColHeight = $col1.innerHeight(),
            secondColHeight = $col2.innerHeight();

        if (firstColHeight > secondColHeight) {
            secondCol.css({
                "height": firstColHeight + 1 + "px"
            })
        } else {
            firstCol.css({
                "height": secondColHeight + 1 + "px"
            })
        }
    }


    /*------------------------------------------
        = STICKY MENU
    -------------------------------------------*/
    function stickyMenu() {
        if ($(".site-header").length || $(".site-header-style2").length || $(".site-header-style3").length) {

            var headerStyle1 = $(".site-header"),
                headerStyle2 = $(".site-header-style2"),
                headerStyle3 = $(".site-header-style3"),
                navigation = $("header .navigation"),
                scroll = $(window).scrollTop(),
                headerStyle1Height = headerStyle1.find(".navigation").height(),
                headerStyle2Height = headerStyle2.find(".navigation").height(),
                top = 400,
                body = $("body");

            if (headerStyle1.length && (scroll > top)) {
                navigation.addClass("sticky");
                body.css({
                    "padding-top": headerStyle1Height + "px"
                });
            } else if (headerStyle2.length && (scroll > top)) {
                navigation.addClass("sticky2");
                body.css({
                    "padding-top": headerStyle2Height + "px"
                });
            }  else if (headerStyle3.length && (scroll > top)) {
                navigation.addClass("sticky3");
            }  else {
                navigation.removeClass("sticky");
                navigation.removeClass("sticky2");
                navigation.removeClass("sticky3");
                body.css({
                    "padding-top": 0
                });
            }
        }
    }


    /*------------------------------------------
        = WOW ANIMATION SETTING
    -------------------------------------------*/
    var wow = new WOW({
        boxClass:     'wow',      // default
        animateClass: 'animated', // default
        offset:       0,          // default
        mobile:       true,       // default
        live:         true        // default
    });


    /*------------------------------------------
        = HIDE PRELOADER
    -------------------------------------------*/
    function preloader() {
        if($('.preloader').length) {
            $('.preloader').delay(100).fadeOut(500, function() {

                //active wow
                wow.init();

                $(window).on("scroll", function() {
                    stickyMenu();
                });
            });
        }
    }


    /*------------------------------------------
        = ACTIVE POPUP IMAGE
    -------------------------------------------*/  
    if ($(".fancybox").length) {
        $(".fancybox").fancybox({
            openEffect  : "elastic",
            closeEffect : "elastic",
            wrapCSS     : "project-fancybox-title-style"
        });
    }


    /*------------------------------------------
        = POPUP VIDEO
    -------------------------------------------*/  
    if ($(".video-btn").length) {
        $(".video-btn").on("click", function(){
            $.fancybox({
                href: this.href,
                type: $(this).data("type"),
                'title'         : this.title,
                helpers     : {  
                    title : { type : 'inside' },
                    media : {}
                },

                beforeShow : function(){
                    $(".fancybox-wrap").addClass("gallery-fancybox");
                }
            });
            return false
        });    
    }


    /*------------------------------------------
        = ACTIVE GALLERY POPUP IMAGE
    -------------------------------------------*/  
    if ($(".popup-gallery").length) {
        $('.popup-gallery').magnificPopup({
            delegate: 'a',
            type: 'image',

            gallery: {
              enabled: true
            },

            zoom: {
                enabled: true,

                duration: 300,
                easing: 'ease-in-out',
                opener: function(openerElement) {
                    return openerElement.is('img') ? openerElement : openerElement.find('img');
                }
            }
        });    
    }


    /*------------------------------------------
        = FUNCTION FOR SORTING GALLERY
    -------------------------------------------*/
    function sortingGrids() {
        if ($(".sortable-grids .grids-filters").length) {
            var $container = $('.grids-container');
            $container.isotope({
                filter:'*',
                animationOptions: {
                    duration: 750,
                    easing: 'linear',
                    queue: false,
                }
            });

            $(".grids-filters li a").on("click", function() {
                $('.grids-filters li .current').removeClass('current');
                $(this).addClass('current');
                var selector = $(this).attr('data-filter');
                $container.isotope({
                    filter:selector,
                    animationOptions: {
                        duration: 750,
                        easing: 'linear',
                        queue: false,
                    }
                });
                return false;
            });
        }
    }

    sortingGrids(); 


    /*------------------------------------------
        = BOOTSTRAP SELECT FOR LANGUAGE SELECT
    -------------------------------------------*/
    if ($('.selectpicker').length) {
        $('.selectpicker').selectpicker({
            size: 4
        });
    }


    /*------------------------------------------
        = REVULATION SLIDER FOR HERO SLIDER
    -------------------------------------------*/
    function mainSlider() {
        if ($('.tp-banner').length) {
            $('.tp-banner').revolution({
                delay:9000,
                startwidth:1170,
                startheight: 800,
                hideThumbs:10,
                fullWidth:"on",
                forceFullWidth:"on",
                onHoverStop:"off",
                navigationType:"none",
                navigationStyle:"preview4",
                spinner:"off",
                hideTimerBar:"on"
            });
        }
    }

    mainSlider();


    /*-------------------------------------------------------
        = FEATURED BLOG IMAGE SETTGING FOR BETTER VIEW
    -----------------------------------------------------*/
    if ($(".featured").length) {
        var grid = $(".featured .grid");

        grid.each(function() {
            var $this = $(this);
            var imgHolder = $this.find(".img-holder");
            var imgSrc = $this.find("img").attr("src");

            imgHolder.css({
                backgroundImage: "url("+ imgSrc +")",
                backgroundSize: "cover",
                backgroundPosition: "center center"
            })
        })
    } 


    /*------------------------------------------
        = FAN FACT COUNT
    -------------------------------------------*/
    if ($(".start-count").length) {
        $('.counter').appear();
        $(document.body).on('appear', '.counter', function(e) {
            var $this = $(this),
            countTo = $this.attr('data-count');

            $({ countNum: $this.text()}).animate({
                countNum: countTo
            }, {
                duration: 3000,
                easing:'linear',
                step: function() {
                    $this.text(Math.floor(this.countNum));
                },
                complete: function() {
                    $this.text(this.countNum);
                }
            });
        });
    } 


    /*------------------------------------------
        = PROGRESS BAR
    -------------------------------------------*/
    function progressBar() {
        if ($(".progress-bar").length) {
            var $progress_bar = $('.progress-bar');
            $progress_bar.appear();
            $(document.body).on('appear', '.progress-bar', function() {
                var current_item = $(this);
                if (!current_item.hasClass('appeared')) {
                    var percent = current_item.data('percent');
                    current_item.append('<span>' + percent + '%' + '</span>').css('width', percent + '%').addClass('appeared');
                }
                
            });
        };
    }

    progressBar();


    /*------------------------------------------
        = HOME PAGE ABOUT SECTION SLIDER
    -------------------------------------------*/
    if ($(".about-us-slider").length) {
        $(".about-us-slider").owlCarousel({
            autoplay:true,
            smartSpeed:300,
            items:1,
            loop:true,
            margin:0,
            dots:false,
            center:true,
            autoplayHoverPause:true,
            nav: true,
            navText: ["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"]
        });
    }


    /*------------------------------------------
        = TESTIMONIALS SLIDER
    -------------------------------------------*/
    if ($(".testimonials-slider").length) {
        $(".testimonials-slider").owlCarousel({
            autoplay:true,
            mouseDrag: false,
            smartSpeed:300,
            margin: 30,
            loop:true,
            dots:false,
            autoplayHoverPause:true,
            nav: true,
            navText: ["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
            responsive: {
                0 : {
                    items: 1
                },

                992 : {
                    items: 2
                }
            }
        });
    }


    /*------------------------------------------
        = TESTIMONIALS SLIDER STYLE TWO
    -------------------------------------------*/
    if ($(".testimonials-slider-style2").length) {
        $(".testimonials-slider-style2").owlCarousel({
            autoplay:true,
            items: 1,
            mouseDrag: false,
            smartSpeed:300,
            margin: 30,
            loop:true,
            dots:false,
            autoplayHoverPause:true,
            nav: true,
            navText: ["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"]
        });
    }


    /*------------------------------------------
        = HOME PAGE CONTACT FORM AND MAP SWITCHER  
    -------------------------------------------*/
    function concactStyleSwitcher() {
        if ($(".contact-section-wrapper .contact-switcher").length) {
            var btns = $(".contact-switcher .button"),
                mapSection = $(".contact-section-wrapper .map-wrapper"),
                contactSection = $(".contact-section-wrapper .contact-block");

            contactSection.addClass("hide-content");
            mapSection.find(".overlay").addClass("hide-content");

            btns.on("click", function() {
                var $this = $(this);
                if (!$this.hasClass("active")) {
                    $this.addClass("active");
                    $this.parent().siblings().find(".button").removeClass("active");

                    if ($this.attr("data-style") === mapSection.attr("data-style")) {
                        mapSection.removeClass("hide-content");
                        mapSection.find(".overlay").addClass("hide-content");
                        contactSection.addClass("hide-content");

                    } else if (($this.attr("data-style") === contactSection.attr("data-style"))) {
                        contactSection.removeClass("hide-content");
                        mapSection.find(".overlay").removeClass("hide-content");
                    }
                }

                return false; 
            });
        }
    }

    concactStyleSwitcher();


    /*------------------------------------------
        = ABOUT COMPANY SLIDER
    -------------------------------------------*/
    if ($(".about-company-slider").length) {
        $(".about-company-slider").owlCarousel({
            autoplay:true,
            items: 1,
            mouseDrag: false,
            smartSpeed:300,
            margin: 30,
            loop:true,
            dots:false,
            autoplayHoverPause:true,
            nav: true,
            navText: ["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"]
        });
    }


    /*------------------------------------------
        = TEAM SLIDER
    -------------------------------------------*/
    if ($(".team-slider").length) {
        $(".team-slider").owlCarousel({
            autoplay:true,
            mouseDrag: false,
            smartSpeed:300,
            margin: 30,
            loop:true,
            autoplayHoverPause:true,
            responsive: {
                0 : {
                    items: 1
                },

                451 : {
                    items: 2
                },

                992 : {
                    items: 3
                }
            }
        });
    }


    /*------------------------------------------
        = TESTIMONIALS SLIDER
    -------------------------------------------*/
    if ($(".partner-slider").length) {
        $(".partner-slider").owlCarousel({
            autoplay:true,
            items: 5,
            smartSpeed:300,
            loop:true,
            dots:false,
            responsive: {
                0 : {
                    items: 1
                },

                350 : {
                    items: 2
                },

                500 : {
                    items: 3
                },

                991 : {
                    items: 5
                }
            }
        });
    }


    /*------------------------------------------
        = ABOUT PAGE ABOUT COMPANY SLIDER
    -------------------------------------------*/
    if ($(".about-company-s2-slider").length) {
        $(".about-company-s2-slider").owlCarousel({
            autoplay:true,
            smartSpeed:300,
            items:1,
            loop:true,
            margin:0,
        });
    }


    /*------------------------------------------
        = SERVICE SINGLE PAGE SLIDER
    -------------------------------------------*/
    if ($(".service-single-slider").length) {
        $(".service-single-slider").owlCarousel({
            autoplay:true,
            smartSpeed:300,
            loop:true,
            margin:30,
            responsive: {
                0 : {
                    items: 2
                },

                992 : {
                    items: 2
                }
            }

        });
    }


    /*------------------------------------------
        = CHART
    -------------------------------------------*/
    function caseStudyChart() {
        if ($("#chart").length) {

            var $chart = $("#chart");
            $chart.appear();

            $(document.body).on('appear', '#chart', function() {
                var current_item = $(this);
                
                if (!current_item.hasClass('appeared')) {
                    current_item.addClass('appeared');

                    var ctx = $("#chart");
                    var lineChart = new Chart(ctx, {
                        type: "line",
                        data: {
                            labels: ["May", "June", "July", "Aug", "Sep"],
                            datasets: [
                                {
                                    label: "Other Clients",
                                    data: [2000, 3500, 2900, 3800, 3000],
                                    backgroundColor: "rgba(236,233,233, 0.5)",
                                    borderColor: "#7da2f5",
                                    borderWidth: 2,
                                    lineTension: 0,
                                    pointRadius: 4,
                                    pointBorderColor: "#7da2f5",
                                    pointBackgroundColor: "#fff"

                                },

                                {
                                    label: "Our clients",
                                    data: [3000, 5000,4000, 5500, 4000],
                                    backgroundColor: "rgba(254,245,231, 0.5)",
                                    borderColor: "#f6b34a",
                                    borderWidth: 2,
                                    lineTension: 0,
                                    pointRadius: 4,
                                    pointBorderColor: "#f6b34a",
                                    pointBackgroundColor: "#fff"

                                },
                            ]
                        },
                        options: {
                            maintainAspectRatio: false,
                            animation: {
                                duration: 2500,
                            }
                        }
                    });
                }                
            });
        }
    }

    caseStudyChart();


    /*------------------------------------------
        = CAREER PAGE JOB SLIDER
    -------------------------------------------*/
    if ($(".recent-job-slider").length) {
        $(".recent-job-slider").owlCarousel({
            smartSpeed:300,
            items:1
        });
    }


    /*------------------------------------------
        = CAREER VACANCY PAGE FILE UPLOAD
    -------------------------------------------*/
    function uploadFile() {
        if ($(".careers-vacancy-page .inputfile").length) {
            var inputs = $(".inputfile");
            Array.prototype.forEach.call(inputs, function(input) {
                var label    = input.nextElementSibling,
                    labelVal = label.innerHTML;

                inputs.on("change", function(e) {
                    var fileName = '';
                    var $this = $(this);

                    if( $this.files && $this.files.length > 1 ) {
                        fileName = ( $this.arrt("data-multiple-caption") || "" ).replace("{count}", $this.files.length );
                    } else {
                        fileName = e.target.value.split("\\").pop();
                    }

                    if( fileName ) {
                        label.querySelector("span").innerHTML = fileName;
                    } else {
                        label.innerHTML = labelVal;
                    }
                })
            });
        }
    }

    uploadFile();


    /*------------------------------------------
        = GOOGLE MAP
    -------------------------------------------*/  
    function map() {

        var myLatLng = new google.maps.LatLng(36.169941,-115.139830);
        var mapProp = {
            center: myLatLng,
            zoom: 11,
            scrollwheel: false,
            mapTypeId: google.maps.MapTypeId.ROAD
        };

        var map = new google.maps.Map(document.getElementById("map"),mapProp);
        var marker = new google.maps.Marker({
            position: myLatLng,
            icon:'images/map-marker.png'
        });

        marker.setMap(map);

        map.set('styles',

            [
                {
                    "featureType": "administrative",
                    "elementType": "labels.text.fill",
                    "stylers": [
                        {
                            "color": "#444444"
                        }
                    ]
                },
                {
                    "featureType": "landscape",
                    "elementType": "all",
                    "stylers": [
                        {
                            "color": "#f2f2f2"
                        }
                    ]
                },
                {
                    "featureType": "poi",
                    "elementType": "all",
                    "stylers": [
                        {
                            "visibility": "off"
                        }
                    ]
                },
                {
                    "featureType": "road",
                    "elementType": "all",
                    "stylers": [
                        {
                            "saturation": -100
                        },
                        {
                            "lightness": 45
                        }
                    ]
                },
                {
                    "featureType": "road.highway",
                    "elementType": "all",
                    "stylers": [
                        {
                            "visibility": "simplified"
                        }
                    ]
                },
                {
                    "featureType": "road.arterial",
                    "elementType": "labels.icon",
                    "stylers": [
                        {
                            "visibility": "off"
                        }
                    ]
                },
                {
                    "featureType": "transit",
                    "elementType": "all",
                    "stylers": [
                        {
                            "visibility": "off"
                        }
                    ]
                },
                {
                    "featureType": "water",
                    "elementType": "all",
                    "stylers": [
                        {
                            "color": "#06223e"
                        },
                        {
                            "visibility": "on"
                        }
                    ]
                }
            ]
        );
    }; 


    /*------------------------------------------
        = CONTACT FORM SUBMISSION
    -------------------------------------------*/  
    if ($("#contact-form").length) {
        $("#contact-form").validate({
            rules: {
                name: {
                    required: true,
                    minlength: 2
                },
                email: "required",
                
                topic: {
                    required: true
                }

            },

            messages: {
                name: "Please enter your name",
                email: "Please enter your email",
                topic: "Select your consult topic",
            },

            submitHandler: function (form) {
                $("#loader").css("display", "inline-block");
                $.ajax({
                    type: "POST",
                    url: "mail.php",
                    data: $(form).serialize(),
                    success: function () {
                        $( "#loader").hide();
                        $( "#success").slideDown( "slow" );
                        setTimeout(function() {
                        $( "#success").slideUp( "slow" );
                        }, 3000);
                        form.reset();
                    },
                    error: function() {
                        $( "#loader").hide();
                        $( "#error").slideDown( "slow" );
                        setTimeout(function() {
                        $( "#error").slideUp( "slow" );
                        }, 3000);
                    }
                });
                
                return false; // required to block normal submit since you used ajax
            }

        });
    }


    /*------------------------------------------
        = STYLE SWITCHER
    -------------------------------------------*/  
    // HTML FOR COLOR SWITCHER
    var switcherHtml = '<div class="style-switcher-box"> <div class="switcher-inner"><h5>Style Switcher</h5> <div class="main-list"> <div class="list"> <span class="list-title">Skin color</span> <div class="sublist"> <ul class="color-chager"> <li class="color-default"><img src="images/switcher-color/img-1.jpg" alt></li> <li class="color-style1"><img src="images/switcher-color/img-2.jpg" alt></li> <li class="color-style2"><img src="images/switcher-color/img-3.jpg" alt></li> <li class="color-style3"><img src="images/switcher-color/img-4.jpg" alt></li> </ul> </div> </div> <div class="list layout"> <span class="list-title">Layout</span> <div class="sublist"> <ul class="layout-sw"> <li>Full width</li> <li class="box">Box</li> </ul> </div> </div> </div> <p><span>Note: </span> This template is build with SASS. The skin color is only demo. You can change the color scheme as your like. </p> </div> <button class="toggle-btn"><i class="fa fa-cog"></i></button> </div>';
    var blankStyleInject = '<link href="css/blank-color.css" rel="stylesheet" title="switchstyle">';
    var htmlHead = $("head");

   //     $("body").append(switcherHtml);
    //    htmlHead.append(blankStyleInject);


    function styleSwitcher() {
        if ($(".style-switcher-box").length) {
            var switcherHolder = $(".style-switcher-box"),
                btn = switcherHolder.find(".toggle-btn"),
                colorChangerBtn = $(".style-switcher-box .color-chager li"),
                layoutChangerBtn = $(".style-switcher-box .layout-sw li"),
                links = document.getElementsByTagName("link");
            var body = $("body");

            for (var i = 0; i <= links.length; i++){
                var title = links[i].getAttribute("title");
                if ( title == "switchstyle") {
                    var targetLink = links[i];
                    var href = links[i].getAttribute("href");
                    break;
                }
            }


            btn.on("click", function() {
                switcherHolder.toggleClass("toggle-switcherbox");

            })

            colorChangerBtn.on("click", function() {
                var $this = $(this);
                var styleFileName = $this.attr("class");
                targetLink.href = "css/" + styleFileName + ".css";
            });

            layoutChangerBtn.on("click", function(e) {
                var $this = $(this);
                if ( $this.hasClass("box") ) {
                    body.addClass("box-layout");
                } else {
                    body.removeClass("box-layout");
                }
            })
        }
    }

   // styleSwitcher();




    /*==========================================================================
        WHEN DOCUMENT LOADING 
    ==========================================================================*/
        $(window).on('load', function() {

            preloader();

            addClassForSmallNav();

            smallNavFunctinality();

            sortingGrids();

            if ($(".map").length) {
                map();
            }

            // Set FAQ section's two col equal height
            if ($(".faq").length) {
                setTwoColEqHeight($(".faq .left-col"), $(".faq .right-col"));
            }

            // Set About page mission section two col equal height
            if ($(".about-company-s2 .mission .details").length) {
                setTwoColEqHeight($(".about-company-s2 .mission .details .left-col"), $(".about-company-s2 .mission .details .right-col"));
            }

        });



    /*==========================================================================
        WHEN WINDOW SCROLL
    ==========================================================================*/
    $(window).on("scroll", function() {

        bgParallax();

    });

    
    /*==========================================================================
        WHEN WINDOW RESIZE
    ==========================================================================*/
    $(window).on("resize", function() {

        addClassForSmallNav();

        smallNavFunctinality();

    });



})(window.jQuery);
