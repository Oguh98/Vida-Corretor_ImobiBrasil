function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}

function myFunction() {
  var x = document.getElementById("myForm");
  var y = document.getElementById("fundo__form")
  if (x.style.display === "flex") {
    x.style.display = "none";
    y.style.display="none"    
  } else {
    x.style.display = "flex";
    y.style.display = "flex"  
  }
};

$(function() {
  $(".header__togglemobile").click(function() {
      $('.header__nav').toggleClass("mobile");
  });

  /* STICKY NAV */
  $(document).on('scroll', function() {
      if($(window).scrollTop() >= 400) {
          $('header').addClass('fixed');
      }
      else {
          $('header').removeClass('fixed');
      }
  });
  /* END STICKY NAV */

  $('.main__carousel').slick({
    arrows: false,
    autoplay: true
  });

  $('.imagens__slider').slick({
    slidesToShow: 5,
    infinite: true,
    arrows: false,
    dots: true,
    autoplay: true,
    responsive: [
      {
        breakpoint: 991,
        settings: {
          slidesToShow: 4,
        }
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 1,
          centerMode: true
        }
      }
    ]
  });

  lightbox.option({
    'resizeDuration': 0,
    'fadeDuration': 0,
    'imageFadeDuration': 100,
    'disableScrolling': true
  });

 

});