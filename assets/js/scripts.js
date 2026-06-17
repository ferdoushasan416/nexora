jQuery(document).ready(function($){ 
  
// Mobile Menu Function Start //
  $('.menu-trigger').click(function() {
    $('.hamburger-menu-wrapper').addClass('isOpen');
  });

  $('.menu-close').click(function() {
    $('.hamburger-menu-wrapper').removeClass('isOpen');
  });
// Mobile Menu Function End //


// Button Toggle javascript //
const buttons = document.querySelectorAll('.pricing__toggle-btn');

buttons.forEach(button => {
    button.addEventListener('click', () => {

        // Remove active class from all buttons
        buttons.forEach(btn => btn.classList.remove('is-active'));

        // Add active class to clicked button
        button.classList.add('is-active');
    });
});


  
});   

