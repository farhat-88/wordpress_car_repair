    <!--Footer section-->
    <div class="footer p-2">
                 <p class="mb-0 text-center">Copyright 2019 All Right Reserved By Farhat Zehra</p>
           </div>


      <!-- Optional JavaScript; choose one of the two! -->

      <!-- Option 1: Bootstrap Bundle with Popper -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
      <!--jQuery-->
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
      <script>
            $(document).ready(function(){

                  $(".btn-color").click(function(){
                        $(".new-row").css("display","flex");
                        $(".btn-color").attr('disabled', true);
                  });
    
                  $('.items').slick({
                        dots: true,
                        infinite: true,
                        speed: 800,
                        autoplay: true,
                        autoplaySpeed: 2000,
                        slidesToShow: 2,
                        slidesToScroll: 2,
                        responsive: [
                        {
                              breakpoint: 1024,
                              settings: {
                              slidesToShow: 1,
                              slidesToScroll: 1,
                              infinite: true,
                              dots: true
                              }
                        },
                        {
                              breakpoint: 600,
                              settings: {
                              slidesToShow: 1,
                              slidesToScroll: 1
                              }
                        },
                        {
                              breakpoint: 480,
                              settings: {
                              slidesToShow: 1,
                              slidesToScroll: 1
                              }
                        }

                        ]
                  })
            })
      </script>
     </body>
</html>