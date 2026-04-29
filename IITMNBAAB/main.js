document.addEventListener("DOMContentLoaded", function() {
    // Get the current page's URL
    var currentPageUrl = window.location.href;
    console.log("Current Page URL:", currentPageUrl);

    // Remove the current page's link from the Quick Access menu
    var quickAccessLinks = document.querySelectorAll('.quick-access li');
    quickAccessLinks.forEach(function(link) {
        var linkHref = link.querySelector('a').getAttribute('href');
        console.log("Link Href:", linkHref);
        if (linkHref === currentPageUrl) {
            console.log("Hiding link to current page:", linkHref);
            link.style.display = 'none';
        }
    });
});


// Function to update symbol based on screen size
function updateSymbols() {
    const screenWidth = window.innerWidth;
  
    // Example condition for screen size breakpoints
    if (screenWidth < 1400) {
      document.getElementById('symbol-placeholder1').innerHTML = '&#9660;'; 
      document.getElementById('symbol-placeholder2').innerHTML = '&#9660;'; 
      document.getElementById('symbol-placeholder3').innerHTML = '&#9660;'; 
      document.getElementById('symbol-placeholder4').innerHTML = '&#9660;';
    } else {
      document.getElementById('symbol-placeholder1').innerHTML = 'library_books'; 
      document.getElementById('symbol-placeholder2').innerHTML = 'library_books'; 
      document.getElementById('symbol-placeholder3').innerHTML = 'library_books';
      document.getElementById('symbol-placeholder4').innerHTML = 'library_books'; 
    }
  }
  
  // Initial call to set the symbol based on current screen size
  updateSymbols();
  
  // Event listener for screen size changes (e.g., window resize)
  window.addEventListener('resize', updateSymbols);
  

const hamburger = document.querySelector(".hamburger");
const navMenu = document.querySelector(".nav-menu");

hamburger.addEventListener("click", mobileMenu);

function mobileMenu() {
  hamburger.classList.toggle("active");
  navMenu.classList.toggle("active");
}
const navLink = document.querySelectorAll(".nav-link");

navLink.forEach((n) => n.addEventListener("click", closeMenu));

function closeMenu() {
  hamburger.classList.remove("active");
  navMenu.classList.remove("active");
}

