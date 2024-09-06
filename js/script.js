$(function () {
  "use strict";

  // date js
  function formatDate(date) {
    const options = {
      year: 'numeric',
      month: 'long',
      day: 'numeric'
    };
    return date.toLocaleDateString(undefined, options);
  }

  function displayDate() {
    const today = new Date();
    const formattedDate = formatDate(today);
    document.querySelector('#date').textContent = `Today - ${formattedDate}`;
  }

  // Call the function to display the date
  displayDate();


  // Time js
  function startTime(elementId) {
    const today = new Date();
    let h = today.getHours();
    let m = today.getMinutes();
    let s = today.getSeconds();
    m = checkTime(m);
    s = checkTime(s);

    // Determine AM or PM
    const ampm = h >= 12 ? "PM" : "AM";

    // Convert 24-hour format to 12-hour format
    h = h % 12 || 12;

    const element = document.getElementById(elementId);
    if (element) {
      element.innerHTML = h + ":" + m + ":" + s + " " + ampm;
    }

    setTimeout(function () {
      startTime(elementId);
    }, 1000);
  }

  function checkTime(i) {
    if (i < 10) {
      i = "0" + i;
    }
    return i;
  }

  startTime('time');
  startTime('mobile_time');


  // sub sidebar menu
  $('.sub-sidebar-child-menu ul').hide();
  $(".sub-sidebar-child-menu a").click(function () {
    $(this).parent(".sub-sidebar-child-menu").children("ul").slideToggle("100");
    $(this).find(".right").toggleClass("fa-caret-up fa-caret-down");
  });


  // back to top js
  var btn = $("#button");

  $(window).scroll(function () {
    btn.toggleClass("show", $(window).scrollTop() > 300);
  });

  btn.click(function (e) {
    e.preventDefault();
    if (navigator.userAgent.toLowerCase().indexOf("firefox") > -1) {
      $("html").animate({
          scrollTop: 0,
        },
        700
      );
    } else {
      $("html, body").animate({
          scrollTop: 0,
        },
        0
      );
    }
  });


  /* Odometer Active js */
  $('.odometer').appear(function (e) {
    var odo = $(".odometer");
    odo.each(function () {
      var countNumber = $(this).attr("data-count");
      $(this).html(countNumber);
    });
  });


  // sidebar menu js
  const mainMenuItems = document.querySelectorAll('.main_menu li');

  mainMenuItems.forEach((menuItem) => {
    menuItem.addEventListener('click', (event) => {
      // event.preventDefault();
    });
  });

  mainMenuItems.forEach((menuItem) => {
    menuItem.addEventListener('mouseover', (event) => {
      event.preventDefault();
      mainMenuItems.forEach((item) => {
        item.classList.remove('active');
      });
      menuItem.classList.add('active');
    });
  });

  //  popup image js
  $('.parent-container').magnificPopup({
    delegate: 'a',
    type: 'image',
    gallery: {
      enabled: true
    },
  });

  // mobile menu js
  $('.mobile__menu').click(function () {
    $('.mobile-menu-main').addClass('show-mobile-menu')
  })
  $('.close-m-menu i').click(function () {
    $('.mobile-menu-main').removeClass('show-mobile-menu')
  })
  $('.mobile__menu').click(function () {
    $('.mobile-menu-overlay').addClass('show-mobile-menu-overlay')
  })
  $('.mobile__menu').click(function () {
    $('.mobile-menu-overlay').addClass('show-mobile-menu-overlay')
  })
  $('.close-m-menu i').click(function () {
    $('.mobile-menu-overlay').removeClass('show-mobile-menu-overlay')
  })
  $('.mobile-menu-overlay').click(function () {
    $('.mobile-menu-overlay').removeClass('show-mobile-menu-overlay')
  })
  $('.mobile-menu-overlay').click(function () {
    $('.mobile-menu-main').removeClass('show-mobile-menu')
  })


  // this is for sidebar mobile menu

  $('.sub-menu ul').hide();
  $(".sub-menu a").click(function (e) {
    e.preventDefault();

    // Close all open sub-menus except the one being clicked
    $(".sub-menu ul").not($(this).parent(".sub-menu").children("ul")).slideUp("100");
    $(".sub-menu a").not(this).removeClass("active");
    $(".sub-menu a .arrow i").not($(this).find(".arrow i")).removeClass("fa-angle-up").addClass("fa-angle-down");

    // Toggle the visibility of the clicked sub-menu
    $(this).parent(".sub-menu").children("ul").slideToggle("100");

    // Toggle the up/down arrow icon class for the clicked menu item
    $(this).toggleClass("active");
    $(this).find(".arrow i").toggleClass("fa-angle-up fa-angle-down");
  });

  /* wow Active js */
  var wow = new WOW({
    boxClass: 'wow',
    animateClass: 'animated',
    offset: 0,
    mobile: false,
    live: true
  });
  wow.init();


  // task date picker
  $("#datepicker1").datepicker({
    changeMonth: true,
    changeYear: true,
    numberOfMonths: 1,
  });
  $("#datepicker2").datepicker({
    changeMonth: true,
    changeYear: true,
    numberOfMonths: 1,
  });
  $("#datepicker3").datepicker({
    changeMonth: true,
    changeYear: true,
    numberOfMonths: 1,
  });
  $("#datepicker4").datepicker({
    changeMonth: true,
    changeYear: true,
    numberOfMonths: 1,
  });

  // select 2 js
  $(".js-select2").select2({
    closeOnSelect: true
  });
});