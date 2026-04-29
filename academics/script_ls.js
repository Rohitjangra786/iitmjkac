
document.addEventListener('DOMContentLoaded', function() {
  var dropdowns = document.querySelectorAll('.dropdown');

  dropdowns.forEach(function(dropdown) {
      var dropdownContent = dropdown.querySelector('.sem1-content');

      dropdown.addEventListener('click', function() {
          dropdownContent.classList.toggle('show');
      });
  });
});

  document.addEventListener('DOMContentLoaded', function() {
    var dropdown = document.querySelector('.dropdown1');
    var dropdownContent = document.querySelector('.sem2-content');
    dropdownContent.style.display = 'none';
    dropdown.addEventListener('click', function () {
      dropdownContent.style.display = dropdownContent.style.display === 'none' ? 'block' : 'none';
    });
  });

  document.addEventListener('DOMContentLoaded', function() {
    var dropdown = document.querySelector('.dropdown2');
    var dropdownContent = document.querySelector('.sem3-content');
    dropdownContent.style.display = 'none';
    dropdown.addEventListener('click', function () {
      dropdownContent.style.display = dropdownContent.style.display === 'none' ? 'block' : 'none';
    });
  });

  document.addEventListener('DOMContentLoaded', function() {
    var dropdown = document.querySelector('.dropdown3');
    var dropdownContent = document.querySelector('.sem4-content');
    dropdownContent.style.display = 'none';
    dropdown.addEventListener('click', function () {
      dropdownContent.style.display = dropdownContent.style.display === 'none' ? 'block' : 'none';
    });
  });

  document.addEventListener('DOMContentLoaded', function() {
    var dropdown = document.querySelector('.dropdown4');
    var dropdownContent = document.querySelector('.sem5-content');
    dropdownContent.style.display = 'none';
    dropdown.addEventListener('click', function () {
      dropdownContent.style.display = dropdownContent.style.display === 'none' ? 'block' : 'none';
    });
  });

  document.addEventListener('DOMContentLoaded', function() {
    var dropdown = document.querySelector('.dropdown5');
    var dropdownContent = document.querySelector('.sem6-content');
    dropdownContent.style.display = 'none';
    dropdown.addEventListener('click', function () {
      dropdownContent.style.display = dropdownContent.style.display === 'none' ? 'block' : 'none';
    });
  });




  
  // Home button
  // JavaScript code to toggle the visibility of content-wrap

  const homeButton = document.querySelector('.home-button');
  const contentWrap = document.querySelector('.content-wrap');

  homeButton.addEventListener('click', function() {
    contentWrap.style.display = 'none'; // Hide content-wrap when home button is clicked
  });

  const semesterLinks = document.querySelectorAll('.sem1-content');
  semesterLinks.forEach(function(link) {
    link.addEventListener('click', function() {
      contentWrap.style.display = 'block'; // Show content-wrap when a semester link is clicked
    });
  });


  //sem2
  const homeButtonSem2 = document.querySelector('.home-button');
const contentWrapSem2 = document.querySelector('.content-wrap');

homeButtonSem2.addEventListener('click', function() {
  contentWrapSem2.style.display = 'none'; // Hide content-wrap when home button is clicked
});

const semesterLinksSem2 = document.querySelectorAll('.sem2-content a');
semesterLinksSem2.forEach(function(link) {
  link.addEventListener('click', function() {
    contentWrapSem2.style.display = 'block'; // Show content-wrap when a semester link is clicked
  });
});

//sem3
const homeButtonSem3 = document.querySelector('.home-button');
const contentWrapSem3 = document.querySelector('.content-wrap');

homeButtonSem3.addEventListener('click', function() {
  contentWrapSem3.style.display = 'none'; // Hide content-wrap when home button is clicked
});

const semesterLinksSem3 = document.querySelectorAll('.sem3-content a');
semesterLinksSem3.forEach(function(link) {
  link.addEventListener('click', function() {
    contentWrapSem2.style.display = 'block'; // Show content-wrap when a semester link is clicked
  });
});
