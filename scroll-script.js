window.onscroll = () => {
    const sections = document.querySelectorAll('section');
    const sideNavLinks = document.querySelectorAll('.side-nav-link');
    let currentSectionId = '';

    sections.forEach(section => {
        const top = window.scrollY;
        const offset = section.offsetTop;
        const height = section.clientHeight;
        const id = section.getAttribute('id');

        let sectionHeightWithPadding = height + 110; // Adjust padding as needed

        // Check if the middle of the section is in view
        if (top + window.innerHeight / 1 >= offset && top + window.innerHeight / 1.3 <= offset + sectionHeightWithPadding) {
            currentSectionId = id;
            // Increase the height of the section when its corresponding image is active
            sectionHeightWithPadding += 150; // Adjust the additional height as needed
        }
    });

    sideNavLinks.forEach(link => {
        link.classList.remove('active');
    });

    const currentActiveLink = document.querySelector('.upper nav a.active');
    if (currentActiveLink) {
        currentActiveLink.classList.remove('active');
    }

    if (currentSectionId) {
        const currentLink = document.querySelector('.upper nav a[href="#' + currentSectionId + '"]');
        if (currentLink) {
            currentLink.classList.add('active');
        }
    }
};
