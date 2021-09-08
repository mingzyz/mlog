console.clear();

//  chart
function Chart__init() {
  const labels = [
    'HTML',
    'CSS',
    'JS(JQUERY)',
    'ILLUSTRATOR',
    'PHOTOSHOP',
    'FIGMA',
  ];
  const data = {
    labels: labels,
    datasets: [{
      axis: 'y',
      barThickness: 30,
      label: 'My SKILLS',
      data: [90, 90, 80, 70, 100, 80],
      fill: false,
      backgroundColor: [
        'rgba(255, 99, 132, 0.2)',
        'rgba(255, 159, 64, 0.2)',
        'rgba(255, 205, 86, 0.2)',
        'rgba(75, 192, 192, 0.2)',
        'rgba(54, 162, 235, 0.2)',
        'rgba(153, 102, 255, 0.2)',
        'rgba(201, 203, 207, 0.2)'
      ],
      borderColor: [
        'rgb(255, 99, 132)',
        'rgb(255, 159, 64)',
        'rgb(255, 205, 86)',
        'rgb(75, 192, 192)',
        'rgb(54, 162, 235)',
        'rgb(153, 102, 255)',
        'rgb(201, 203, 207)'
      ],
      borderWidth: 1
    }]
  };

  const config = {
    type: 'bar',
    data,
    options: {
      indexAxis: 'y',
    }
  };

  var myChart = new Chart(
    document.getElementById('myChart'),
    config
  );
}

Chart__init();

/* -------------s: about me------------- */
//  fullpage
function Fullpage__init() {
  new fullpage('#fullpage', {
    sectionsColor: ['#F8F8F8'],
    anchors: ['aboutme-main', 'aboutme', 'myskils', 'more'],
  });

  const $current = $('.section.fp-section.active');
  $current.removeClass('active');
  setTimeout(function() {
    $current.addClass('active');
  });
}

Fullpage__init();

//  mask
  var mouseX, mouseY;
  var ww = $( window ).width();
  var wh = $( window ).height();
  var traX, traY;
  $(document).mousemove(function(e){
    mouseX = e.pageX;
    mouseY = e.pageY;
    traX = ((4 * mouseX) / 570) + 40;
    traY = ((4 * mouseY) / 570) + 50;
    // console.log(traX);
    $(".mask").css({"background-position": traX + "%" + traY + "%"});
  });

/* -------------e: about me------------- */

/* -------------s: portfolio------------- */
//  swiper slider
const swiper = new Swiper('.slide-box .swiper-container', {
  loop: true,
  slidesPerView: 4,
  spaceBetween: 30,
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  }
});
/* -------------e: portfolio------------- */

/* -------------s: modal------------- */
//  modal
$(".open-modal").click(function() {
  $(".modal-mail-send").addClass("active");
});

$(".close-modal").click(function() {
  $(".modal-mail-send").removeClass("active");
})

// bubbly button
var animateButton = function(e) {

  e.preventDefault;
  e.target.classList.remove('animate');
  
  e.target.classList.add('animate');
  setTimeout(function(){
    e.target.classList.remove('animate');
  },700);
};

var bubblyButtons = document.getElementsByClassName("bubbly-button");

for (var i = 0; i < bubblyButtons.length; i++) {
  bubblyButtons[i].addEventListener('click', animateButton, false);
}
/* -------------e: modal------------- */

/* -------------s: shortcut------------- */
const swiper2 = new Swiper('.sc-slide-box .swiper', {
  slidesPerView: 4.3,
  spaceBetween: 10,
  scrollbar: {
    el: '.swiper-scrollbar',
  },
});
/* -------------e: shortcut------------- */

/* -------------s: home------------- */
// particles
particlesJS("particles-js", {
  "particles": {
    "number": {
      "value": 20,
      "density": {
        "enable": true,
        "value_area": 800
      }
    },
    "color": {
      "value": "#ffffff"
    },
    "shape": {
      "type": "circle",
      "stroke": {
        "width": 0,
        "color": "#000000"
      },
      "polygon": {
        "nb_sides": 5
      },
      "image": {
        "src": "img/github.svg",
        "width": 100,
        "height": 100
      }
    },
    "opacity": {
      "value": 1,
      "random": true,
      "anim": {
        "enable": true,
        "speed": 1,
        "opacity_min": 0,
        "sync": false
      }
    },
    "size": {
      "value": 10,
      "random": true,
      "anim": {
        "enable": false,
        "speed": 4,
        "size_min": 0.3,
        "sync": false
      }
    },
    "line_linked": {
      "enable": false,
      "distance": 94.69771699587272,
      "color": "#ffffff",
      "opacity": 0.4,
      "width": 0
    },
    "move": {
      "enable": true,
      "speed": 2,
      "direction": "top-right",
      "random": true,
      "straight": false,
      "out_mode": "out",
      "bounce": false,
      "attract": {
        "enable": false,
        "rotateX": 600,
        "rotateY": 600
      }
    }
  },
  "interactivity": {
    "detect_on": "canvas",
    "events": {
      "onhover": {
        "enable": true,
        "mode": "bubble"
      },
      "onclick": {
        "enable": true,
        "mode": "push"
      },
      "resize": true
    },
    "modes": {
      "grab": {
        "distance": 400,
        "line_linked": {
          "opacity": 1
        }
      },
      "bubble": {
        "distance": 250,
        "size": 0,
        "duration": 2,
        "opacity": 0,
        "speed": 3
      },
      "repulse": {
        "distance": 400,
        "duration": 0.4
      },
      "push": {
        "particles_nb": 4
      },
      "remove": {
        "particles_nb": 2
      }
    }
  },
  "retina_detect": true
});

/* -------------e: home------------- */

