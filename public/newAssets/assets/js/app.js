$(window).on("scroll", function () {
  if ($(window).scrollTop() > 50) {
    $(".light-nav").removeClass("navbar-light").addClass("navbar-dark");

    $(".top-navbar-div").css("background-color", "rgba(55, 31, 85, 0.896)");
    $(".top-navbar-div").css("padding-top", "10px");
    $(".top-navbar-div").css("padding-bottom", "10px");
    $(".navbar-collapse").removeClass("navbar-collapse-light");
    $(".top-navbar-light li a").css("color", "white");
    $(".header-select-dark").css("color", "white");
    $(".header-select-dark").css(
      "background-image",
      "url(\"data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' width='18' height='10' viewBox='0 0 18 10' fill='none'><path d='M17 1L9 9L1 1' stroke='white' stroke-opacity='0.8' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'/></svg>\")"
    );
    $(".light-logo").show();
    $(".dark-logo").hide();
  } else {
    $(".light-nav").removeClass("navbar-dark").addClass("navbar-light");
    $(".top-navbar-div").css("background-color", "transparent");
    $(".top-navbar-div").css("padding-top", "18px");
    $(".top-navbar-div").css("padding-bottom", "18px");
    $(".top-navbar-light li a").css("color", "#2C2C2C");
    $(".header-select-dark").css("color", "#2C2C2C");
    $(".header-select-dark").css(
      "background-image",
      "url(\"data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' width='18' height='10' viewBox='0 0 18 10' fill='none'><path d='M17 1L9 9L1 1' stroke='black' stroke-opacity='0.8' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'/></svg>\")"
    );
    $(".light-logo").hide();
    $(".dark-logo").show();
  }
});
$(".navbar-toggler").on("click", function () {
  $(".top-navbar-div").toggleClass("top-navbar-div-bg");
});


$(document).ready(function () {
  // Initially, hide all subject-detail-cards
  $(".subject-detail-card").hide();

  // Trigger a click event on the .english-btn button
  $(".english-btn").click();
  $(".english-tutor").show();
  // Add click event handler for all subject buttons
  $(".subject-card").click(function () {
    // Remove active-subject class from all buttons
    $(".subject-card").removeClass("active-subject");
    // Add active-subject class to the clicked button
    $(this).addClass("active-subject");

    // Hide all detail cards
    $(".subject-detail-card").hide();

    // Show the corresponding detail card
    const targetClass = $(this).data("target"); // Get the data-target attribute
    $(`.${targetClass}`).show(); // Show the detail card based on data-target attribute
  });
});

$(document).ready(function () {
  // Function to handle dropdown button text updates
  function setupDropdown(dropdownId) {
    var dropdownMenu = $("#" + dropdownId + " + ul.dropdown-menu");
    dropdownMenu.find("a.dropdown-item").click(function (event) {
      // Prevent the default action (e.g., following the href)
      event.preventDefault();

      // Update the button text with the selected item's text
      var selectedItemText = $(this).text();
      $("#" + dropdownId).text(selectedItemText);
    });
  }

  // Set up each dropdown
  setupDropdown("languageDropdown");
  setupDropdown("priceDropdown");
  setupDropdown("countryDropdown");
  setupDropdown("availabilityDropdown");
  setupDropdown("btn-1");
  setupDropdown("lan-curr");
  setupDropdown("drop-btn-1");
  setupDropdown("drop-btn-2");
  setupDropdown("drop-btn-3");
  setupDropdown("drop-btn-4");
});

const faqs = document.querySelectorAll(".faq");

faqs.forEach((faq) => {
  const question = faq.querySelector(".question"); // Select the question div
  const h3 = question.querySelector("h3"); // Select the h3 element within the question div
  const answer = faq.querySelector(".answer");
  let isH3Black = false;

  question.addEventListener("click", () => {
    faq.classList.toggle("active");

    // Toggle the color of the h3 element
    if (isH3Black) {
      h3.style.color = "#2c2c2ccc"; // Change the color back to #FF6C0B
    } else {
      h3.style.color = "#FF6C0B"; // Change the color to black
    }

    isH3Black = !isH3Black; // Toggle the color state

    // Toggle the answer visibility
    if (faq.classList.contains("active")) {
      answer.style.maxHeight = answer.scrollHeight + "px";
    } else {
      answer.style.maxHeight = null;
    }
  });
});
