const burger = document.querySelector('.burger');
const navLinks = document.querySelector('.nav-links');

burger.addEventListener('click', () => {
  navLinks.classList.toggle('nav-active');
});

// JavaScript to handle navigation link clicks
const navLinksList = document.querySelectorAll('.nav-links li');
navLinksList.forEach(link => {
  link.addEventListener('click', () => {
    // Close the navigation menu for small screens
    if (window.innerWidth <= 768) {
      navLinks.classList.remove('nav-active');
    }
  });
});

// JavaScript to handle scrolling and highlight active link
const sections = document.querySelectorAll('section');
window.addEventListener('scroll', () => {
  let current = '';
  sections.forEach(section => {
    const sectionTop = section.offsetTop;
    const sectionHeight = section.clientHeight;
    if (pageYOffset >= sectionTop - sectionHeight / 3) {
      current = section.getAttribute('id');
    }
  });

  // Remove the active class from all navigation links
  navLinksList.forEach(item => item.firstElementChild.classList.remove('active'));

  // Add the active class to the link whose href matches the current section ID
  navLinksList.forEach(link => {
    if (link.firstElementChild.getAttribute('href').slice(1) === current) {
      link.firstElementChild.classList.add('active');
    }
  });
});
