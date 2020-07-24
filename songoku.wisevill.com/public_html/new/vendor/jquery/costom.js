 $('.m-main-btn').on('click', function(){
      var $acti = $(this);
      if($acti.is('.on')){
        $acti.removeClass('on').next().slideUp(400);
        $acti.find('i').removeClass('rotate');
        return false;
      }
        $('.m-main-btn').removeClass('on').next().slideUp(400);
        $('.m-main-btn').find('i').removeClass('rotate');
        $acti.addClass('on').next().slideDown(400);
        $acti.find('i').addClass('rotate');
    });

    $('.m-navbar i').click(function(){
      $('.m-back').show();
      $('.m-menu').animate({marginRight:'0'},500);
    });
    $('.close-menu').click(function(){
      $('.m-back').hide();
      $('.m-menu').animate({marginRight:'-290px'},500);
    });

    $('.menu li').on('mouseover', function(){
      $(this).find('.sub').stop(true).slideDown(400);
    }).on('mouseleave',function(){
      $(this).find('.sub').stop(true).slideUp(400);
    });


    $(".top-btn").hide();
    $(function () {
      $(window).scroll(function () {
     if ($(this).scrollTop() > 100) {
      $('.top-btn').fadeIn();
     } else {
      $('.top-btn').fadeOut();
     }
    });

    $('.top-btn a').click(function () {
      $('body,html').animate({
        scrollTop: 0
      }, 800);
    return false;
      });
    });

    $('.count').each(function () {
      $(this).prop('Counter', 0).animate({
        Counter: $(this).text()
      }, {
        duration: 1500,
        easing: 'swing',
        step: function (now) {
          $(this).text(Math.ceil(now).toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
        }
      });
    });