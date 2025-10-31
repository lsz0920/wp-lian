jQuery(function($) {
  $(".line-btn").hide();
  $(window).on("scroll", function() {
    if ($(this).scrollTop() > 100) {
      $(".line-btn").fadeIn("fast");
    } else {
      $(".line-btn").fadeOut("fast");
    }
    scrollHeight = $(document).height();
    scrollPosition = $(window).height() + $(window).scrollTop();
    footHeight = $("footer").innerHeight();
    if (scrollHeight - scrollPosition <= footHeight) {
      $(".line-btn").css({
        "position": "absolute",
        "bottom": footHeight + 10
      });
    } else {
      $(".line-btn").css({
        "position": "fixed",
        "bottom": "10px"
      });
    }
  });
  $('.line-btn').click(function() {
    $('body,html').animate({
      scrollTop: 0
    }, 400);
    return false;
  });
});

// menu js
$(document).ready(function() {
  $('.l-hd-inn-menu').on('click', function() {
    $('.l-hd-inn-menu').toggleClass('active');
    $('.l-hd-inn-nav').toggleClass('show');
    $('body').toggleClass('noscroll');
  });
})

$(document).ready(function() {
  if (window.matchMedia('(max-width: 768px)').matches) {
  	var height=$(".ft-sns-fixed").height();
  	$("footer").css("margin-bottom", height);
  } else {}
});
///// Menu for submenu--list
$(document).ready(function() {

  $(".sub-parent").each(function() {
    $(this).on('click', function() {
      $(this).toggleClass('open');
      $(this).children('.submenu--list').slideToggle();
      $(this).siblings().children('.submenu--list').slideUp();
    });
  })
})

/* ----------------------------------------
モーダル
---------------------------------------- */
jQuery(function(){
  jQuery('.js-menu-toggle').on('click', function () {
      const postId = jQuery(this).data('id');
      console.log(postId);

      const postIds = '.modal-menu-post-' + postId;
      console.log(postIds);
      jQuery('.modal-menu').removeClass('open');
      
      jQuery('.modal-menu__bg').toggleClass('open');
      jQuery(postIds).toggleClass('open');
      jQuery('#body').toggleClass('open');
  });
});

jQuery(function(){
  jQuery('.js-menu-toggle2').on('click', function () {
      const postId = jQuery(this).data('id');
      console.log(postId);

      const postIds = '.modal-menu-post-' + postId;
      console.log(postIds);
      
      jQuery('.modal-menu').removeClass('open');

      jQuery(postIds).toggleClass('open');
  });
});
