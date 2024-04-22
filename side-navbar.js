document.addEventListener('DOMContentLoaded', () => {
  const navLinks = document.querySelectorAll('.side-nav a');
  const sections = document.querySelectorAll('section[id]');
  const toggleNav = document.getElementById('toggle-nav');
  const sideNav = document.querySelector('.side-nav');
  const navItems = document.querySelectorAll('.mobile-nav .nav-item');

  const toggleSideNav = () => {
    sideNav.classList.toggle('closed');
    sideNav.classList.toggle('original');
    sideNav.classList.remove('hover');
    sideNav.style.pointerEvents = 'none';

    setTimeout(() => {
      sideNav.style.pointerEvents = 'auto';
    }, 300);
  };

  const handleHoverNav = (isHovered) => {
    sideNav.classList.remove('closed', 'original', 'hover');
    if (isHovered) {
      sideNav.classList.add('hover');
    } else {
      sideNav.classList.add('original');
    }
  };

  const updateActiveNav = () => {
    let current = "";
  
    sections.forEach((section) => {
      const sectionTop = section.offsetTop;
      const sectionHeight = section.clientHeight;
      const windowHeight = window.innerHeight;
  
      if (window.pageYOffset >= sectionTop - windowHeight / 2 && window.pageYOffset < sectionTop + sectionHeight - windowHeight / 2) {
        current = section.getAttribute("id");
      }
    });
  
    navLinks.forEach((link) => {
      link.classList.remove("active");
      if (link.getAttribute('href').substring(1) === current) {
        link.classList.add("active");
      }
    });
  };
  

  window.addEventListener('scroll', updateActiveNav);

  toggleNav.addEventListener('click', (event) => {
    event.stopPropagation();
    toggleSideNav();
  });

  navItems.forEach(function(navItem) {
    navItem.addEventListener('click', function() {
      navItems.forEach(function(item) {
        item.classList.remove('active');
      });
      this.classList.add('active');
    });
  });

  sideNav.addEventListener('mouseover', () => handleHoverNav(true));
  sideNav.addEventListener('mouseout', () => handleHoverNav(false));

  const homeLink = document.querySelector('.side-nav .home');
  homeLink.classList.add('active');

  navLinks.forEach(link => {
    link.addEventListener('click', (event) => {
      event.preventDefault();

      const currentActiveLink = document.querySelector('.side-nav a.active');
      if (currentActiveLink) {
        currentActiveLink.classList.remove('active');
      }

      link.classList.add('active');

      const targetId = link.getAttribute('href').substring(1);
      const targetSection = document.getElementById(targetId);
      if (targetSection) {
        targetSection.scrollIntoView({ behavior: 'smooth' });
      }
    });
  });

  // Initially update the active navigation link on page load
  updateActiveNav();
});
