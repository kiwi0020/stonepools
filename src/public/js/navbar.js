$(document).ready(function(){
            let header = $('header');
            let menu = $('nav > ul')
            let hamburger = $('.hamburger');

            $(window).scroll(function(){
                if($(this).scrollTop() > 200){
                    header.css('background-color', 'white');
                    if($(window).width() > 700){
                        $('header li a').css('color', '#343A40');
                    }
                    header.css("height", "80px");
                } else {
                    header.css('background-color', 'transparent');
                    if($(window).width() > 700){
                        $('header li a').css('color', '#F8F9FA');
                    }
                    header.css("height", "100px");
                }
            })

            function navigationAction(){
                if($(window).innerWidth() <= 960){
                    menu.css("right", "-400px");
                    hamburger.off("click").click(function(){
                        if($(".hamburger > input[type='checkbox']").is(":checked")){
                            menu.animate({
                                "right": 0
                            });
                        } else {
                            menu.animate({
                                "right": -400
                            });
                        }
                    });
                } else {
                    menu.css("right", "0");
                }
            }

            navigationAction();

            $(window).resize(function(){
                navigationAction();
            });
        })