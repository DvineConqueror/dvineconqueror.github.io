document.addEventListener('DOMContentLoaded', () => {
  const navLinks = document.querySelectorAll('.side-nav a');
  const sections = document.querySelectorAll('section[id]');
  const toggleNav = document.getElementById('toggle-nav');
  const sideNav = document.querySelector('.side-nav');

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

  toggleNav.addEventListener('click', (event) => {
    event.stopPropagation();
    toggleSideNav();
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
});
