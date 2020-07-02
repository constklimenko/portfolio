<script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="js/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="slick/slick.min.js"></script>



    <script src="js/simple-mailer.js"></script>

    <script>
        $(document).ready(function() {
            $('.about__slider__in').slick({
                slidesToShow: 1,
                autoplay: true,
                autoplaySpeed: 6000,
                slidesToScroll: 1,
                infinite: true,
                arrows: true,
                prevArrow: '.about__arrow-left',
                nextArrow: '.about__arrow-right',
                fade: true,
                lazyLoad: 'ondemand',

            });
        });
    </script>

    <script>
        /* Scroll to Block 
                                           ===================  */
        $(document).ready(function() {

                $(".scroll").on("click", "a", function(event) {
                    event.preventDefault();
                    

                    if ($(this).parent(".nav") == undefined) {
                       
                        document.location.href = $(this).attr('href');
                        document.querySelector('.nav__bottom').classList.toggle('m-hide');
                    } else {
                      

                        if ($(this).attr('href').indexOf("#") == 0) {

                            
                            document.body.classList.toggle('body-not-sticky');
                           
                            window.scrollTo(0,0); document.body.classList.toggle('body-not-sticky');
                            var id = $(this).attr('href'),          top = $(id).offset().top;     
                          
                            $('body,html').animate({
                                scrollTop: top
                            }, 1000);

                        } else {
                            document.location.href = $(this).attr('href');
                        }
                    }

                });
            }



        );
    </script>


</body>
</html>
