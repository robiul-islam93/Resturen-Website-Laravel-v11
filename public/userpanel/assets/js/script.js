// Resturent Tab Menu Script Start 


document.addEventListener('DOMContentLoaded', function () {
  const tabButtons = document.querySelectorAll('.tab-button');
  const foodItems = document.querySelectorAll('.food-item');

  tabButtons.forEach(button => {
      button.addEventListener('click', function () {
          const tab = this.getAttribute('data-tab');

          // Remove active class from all buttons
          tabButtons.forEach(btn => btn.classList.remove('active'));

          // Add active class to clicked button
          this.classList.add('active');

          // Show or hide food items based on category
          foodItems.forEach(item => {
              if (tab === 'all' || item.getAttribute('data-category') === tab) {
                  item.style.display = 'block';
              } else {
                  item.style.display = 'none';
              }
          });
      });
  });
});


// Resturent Tab Menu Script End 




// Hero Slider Js Start 
var options = {
  accessibility: true,
  prevNextButtons: true,
  pageDots: true,
  setGallerySize: false,
  arrowShape: {
      x0: 10,
      x1: 60,
      y1: 50,
      x2: 60,
      y2: 45,
      x3: 15
  }
};

var $carousel = $('[data-carousel]').flickity(options);
var $slideContent = $('.slide-content');
var flkty = $carousel.data('flickity');
var selectedSlide = flkty.selectedElement;

flkty.on('settle', function(index) {
  selectedSlide = flkty.selectedElement;
});

flkty.on('change', function(index) {
  $slideContent.eq(index).removeClass('mask');

  setTimeout(function() {
      $slideContent.addClass('mask');
  }, 500);
});

flkty.on('dragStart', function(event) {
  var index = 0;
  selectedSlide = flkty.selectedElement;

  if (event.layerX > 0) { // direction right
      index = $(selectedSlide).index() + 1;
  } else { // direction left
      index = $(selectedSlide).index() - 1;
  }

  $slideContent.eq(index).removeClass('mask');
});

setTimeout(function() {
  $slideContent.addClass('mask');
}, 500);

// Hero Slider Js End  




const lightbox = GLightbox({
    selector: '.glightbox',
    type: 'video',
    source: 'youtube', // or 'vimeo' if using a Vimeo link
    width: 900,
    autoplayVideos: true,
  });

  // Include Flatpickr Initialization

  document.addEventListener("DOMContentLoaded", function () {
    flatpickr("#custom-datepicker", {
      dateFormat: "Y-m-d", // Format: YYYY-MM-DD
      minDate: "today", // Prevent past dates
      maxDate: new Date().fp_incr(365), // Allow dates up to one year ahead
      disableMobile: true, // Force desktop view on mobile
      allowInput: false, // Disable manual typing
    });
  });

  
  
  
// Tab Start..................

$(document).ready(function () {
  // Set the default state for "All Food" on page load
  const tabContainer = $(".our_dishes");

  // Ensure all food items are active on page load
  tabContainer.find(".tab-content").addClass("active");
  tabContainer.find(".tab-btn[data-tab='allfood']").addClass("active");

  // Handle tab button click events
  $(".tab-btn").click(function (e) {
    e.preventDefault(); // Prevent page reload

    const tabNumber = $(this).data("tab");

    // Remove active class from all buttons
    tabContainer.find(".tab-btn").removeClass("active");

    // Hide all tab content
    tabContainer.find(".tab-content").removeClass("active");

    // Add active class to the selected button
    $(this).addClass("active");

    if (tabNumber === "allfood") {
      // Show all food items
      tabContainer.find(".tab-content").addClass("active");
    } else {
      // Show the selected tab content
      tabContainer.find(`#${tabNumber}`).addClass("active");
    }
  });
});

// Tab Start..................
// Get the modal and the image element
var modal = document.getElementById("imageModal");
var modalImg = document.getElementById("modalImage");
var closeBtn = document.getElementsByClassName("close")[0];

// Get all the view icons (the ones that open the modal)
var viewIcons = document.querySelectorAll(".view_icon a");

// Add event listeners to each view icon
viewIcons.forEach(function (icon) {
  icon.addEventListener("click", function (e) {
    e.preventDefault();
    // Get the image src from the clicked icon
    var imgSrc = this.closest(".dishes_card").querySelector("img").src;
    // Set the image source in the modal
    modalImg.src = imgSrc;
    // Show the modal
    modal.style.display = "block";
  });
});

// Close the modal when the user clicks the "x" button
closeBtn.onclick = function () {
  modal.style.display = "none";
};

// Close the modal when the user clicks anywhere outside of the modal
window.onclick = function (event) {
  if (event.target === modal) {
    modal.style.display = "none";
  }
};




const profiles = document.querySelectorAll(".customer-profiles .profile");
const contents = document.querySelectorAll(".customer-content .content");
const prevButton = document.querySelector(".navigation .prev");
const nextButton = document.querySelector(".navigation .next");
let currentCustomer = 0;

function updateSlider(index) {
  profiles.forEach((profile) => profile.classList.remove("active"));
  contents.forEach((content) => content.classList.remove("active"));

  profiles[index].classList.add("active");
  contents[index].classList.add("active");
}

profiles.forEach((profile, index) => {
  profile.addEventListener("click", () => {
    currentCustomer = index;
    updateSlider(currentCustomer);
  });
});

prevButton.addEventListener("click", () => {
  currentCustomer =
    (currentCustomer - 1 + profiles.length) % profiles.length;
  updateSlider(currentCustomer);
});

nextButton.addEventListener("click", () => {
  currentCustomer = (currentCustomer + 1) % profiles.length;
  updateSlider(currentCustomer);
});






//  Back to Top Button js start

document.addEventListener('DOMContentLoaded', function() {
    const backToTopButton = document.getElementById('backToTop');
    const firstSectionHeight = document.querySelector('.customer-section').offsetHeight;

    window.addEventListener('scroll', function() {
        if (window.scrollY > firstSectionHeight) {
            backToTopButton.style.display = 'block';
        } else {
            backToTopButton.style.display = 'none';
        }
    });

    backToTopButton.addEventListener('click', function() {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });
});
//  Back to Top Button js end

/* Special Offer section js */

document.querySelectorAll('.menu-item').forEach(item => {
    item.addEventListener('mouseenter', () => {
        item.style.backgroundColor = '#fde8dc';
    });
    item.addEventListener('mouseleave', () => {
        item.style.backgroundColor = 'transparent';
    });
});
