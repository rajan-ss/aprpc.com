$(document).ready(function () {
  /* smooth scroll*/
  var winWidth = $(window).width()
  $(' a.js-has-smooth[href*="#"]:not([href="#"])').click(function () {
    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
      var target = $(this.hash)
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']')
      if (target.length) {
        if (winWidth > 991) {
          $('html, body').animate(
            {
              scrollTop: target.offset().top - 50,
            },
            1000
          )
        } else {
          $('html, body').animate(
            {
              scrollTop: target.offset().top,
            },
            1000
          )
        }
        return false
      }
    }
  })

  // accordion
  $('.accordion .accordion-item .accordionBtn').click(function (e) {
    const currAccordionItem = $(this).closest('.accordion-item')
    $('.accordion .accordion-item').not(currAccordionItem).removeClass('itemActive')
    $('.accordion .accordion-item .accordionBtn').not($(this)).removeClass('active')
    $('.accordion .accordion-item .accordionBody').not(currAccordionItem.find('.accordionBody')).slideUp()
    currAccordionItem.toggleClass('itemActive')
    $(this).toggleClass('active')
    currAccordionItem.find('.accordionBody').slideToggle()
  })

  // Section {Our Services} Slider
  var swiper = new Swiper('.services-slider', {
    slidesPerView: 1,
    loop: true,
    // centeredSlides: true,
    spaceBetween: 30,
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    breakpoints: {
      640: {
        slidesPerView: 1,
        spaceBetween: 15,
      },
      768: {
        slidesPerView: 2,
        spaceBetween: 30,
      },
      1024: {
        slidesPerView: 3,
        spaceBetween: 44,
      },
    },
  })
  // Section {Testimonials} Slider
  var swiper1 = new Swiper('.testimonials-slider', {
    slidesPerView: 1,
    loop: true,
    // centeredSlides: true,
    spaceBetween: 30,
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    breakpoints: {
      1024: {
        slidesPerView: 2,
        spaceBetween: 43,
      },
    },
  })
  // New script for stick footer
  //sticky-footer
  function stickyFooter() {
    let stickyFooter = $('.sticky-footer')
    let stickyFooterHeight = stickyFooter.innerHeight()
    let siteFooter = $('.site-footer')
    siteFooter.css('margin-bottom', stickyFooterHeight)
  }
  stickyFooter()

  let debounceTimeout
  $(window).on('resize', function () {
    clearTimeout(debounceTimeout)
    debounceTimeout = setTimeout(function () {
      stickyFooter()
    }, 250)
  })

  // Read More Btn
  function SliderReadMore() {
    $('.swiper-slide .slide-read-more-button').on('click', function () {
      var $box = $(this).closest('.swiper-slide').find('.slide-read-more')
      var $button = $(this).closest('.slide-read-more-button')
      $button.toggleClass('read-more')
      $box.toggleClass('read-more')
      const height = $box.find('.truncate-div').height()
      console.log(height)
      if ($box.hasClass('read-more')) {
        $box.css({
          height: height + 'px',
        })
      } else {
        $box.css({
          height: '200px',
        })
      }
    })
  }
  SliderReadMore()

  // $('.slide-read-more-button').click(function () {
  //   $('.slide-read-more').slideToggle()
  //   if ($('.slide-read-more-button').text() == 'Read more') {
  //     $(this).text('Read less')
  //   } else {
  //     $(this).text('Read more')
  //   }
  // })
})
