document.addEventListener('DOMContentLoaded', () => {

    /* ============================================================
       SLIDESHOW
    ============================================================ */
    let slideIndex = 0;
    const slides = document.getElementsByClassName('slide');
    let slideInterval;

    function showSlide(n) {
        for (let i = 0; i < slides.length; i++) {
            slides[i].style.display = 'none';
        }
        slides[n].style.display = 'block';
    }

    function plusSlides(n) {
        clearInterval(slideInterval); // stop auto transition
        slideIndex += n;
        if (slideIndex >= slides.length) slideIndex = 0;
        if (slideIndex < 0) slideIndex = slides.length - 1;
        showSlide(slideIndex);
        startSlideShow(); // restart auto transition
    }

    function startSlideShow() {
        slideInterval = setInterval(() => {
            slideIndex++;
            if (slideIndex >= slides.length) slideIndex = 0;
            showSlide(slideIndex);
        }, 5000); // every 5 seconds
    }

    if (slides.length > 0) {
        showSlide(slideIndex);
        startSlideShow();
    }

    // Expose plusSlides globally since it's likely called from inline onclick="" in HTML
    window.plusSlides = plusSlides;


    /* ============================================================
       NAVIGATION TABS (ABOUT PAGE)
    ============================================================ */
    const navButtons = document.querySelectorAll('.nav-button');
    const tabIndicator = document.querySelector('.tab-indicator');
    const tabContents = document.querySelectorAll('.tab-content');

    function showTab(tabId) {
        tabContents.forEach(content => content.classList.remove('active'));
        const activeTab = document.getElementById(tabId);
        if (activeTab) {
            activeTab.classList.add('active');
        }
    }

    navButtons.forEach((button) => {
        button.addEventListener('click', function () {
            navButtons.forEach(btn => btn.classList.remove('active'));
            this.classList.add('active');

            const offsetLeft = this.offsetLeft;
            const buttonWidth = this.offsetWidth;

            if (tabIndicator) {
                tabIndicator.style.left = offsetLeft + 'px';
                tabIndicator.style.width = buttonWidth + 'px';
            }

            const tabId = this.getAttribute('data-tab');
            showTab(tabId);
        });

        // Set initial state: Find the active button and show its tab content
        if (button.classList.contains('active')) {
            if (tabIndicator) {
                tabIndicator.style.left = button.offsetLeft + 'px';
                tabIndicator.style.width = button.offsetWidth + 'px';
            }
            showTab(button.getAttribute('data-tab'));
        }
    });


    /* ============================================================
       GALLERY LIGHTBOX
    ============================================================ */
    function openLightbox(imageSrc) {
        const lightbox = document.getElementById('lightbox');
        const lightboxImage = document.getElementById('lightbox-image');
        if (!lightbox || !lightboxImage) return;
        lightboxImage.src = imageSrc;
        lightbox.style.display = 'flex';
    }

    function closeLightbox() {
        const lightbox = document.getElementById('lightbox');
        if (!lightbox) return;
        lightbox.style.display = 'none';
    }

    // Expose globally since these are likely called from inline onclick="" in HTML
    window.openLightbox = openLightbox;
    window.closeLightbox = closeLightbox;


    /* ============================================================
       HAMBURGER MENU
    ============================================================ */
    const openMenuBtn = document.querySelector('#open-menu-btn');
    const closeMenuBtn = document.querySelector('#close-menu-btn');
    const navMenu = document.querySelector('.nav__menu');

    // Only target top-level nav links that are NOT a dropdown trigger
    const topLevelNavLinks = document.querySelectorAll('.nav__menu > li > a:not(.dropbtn)');

    function closeMobileMenu() {
        if (navMenu) navMenu.style.display = 'none';
        if (openMenuBtn) openMenuBtn.style.display = 'inline-block';
        if (closeMenuBtn) closeMenuBtn.style.display = 'none';
        // Ensure any open dropdowns are closed too
        document.querySelectorAll('.dropdown-content').forEach(content => content.classList.remove('show'));
        document.querySelectorAll('.dropbtn').forEach(btn => btn.classList.remove('active'));
    }

    function openMobileMenu() {
        if (navMenu) navMenu.style.display = 'flex';
        if (closeMenuBtn) closeMenuBtn.style.display = 'inline-block';
        if (openMenuBtn) openMenuBtn.style.display = 'none';
        // Close dropdowns when opening the mobile menu fresh
        document.querySelectorAll('.dropdown-content').forEach(content => content.classList.remove('show'));
        document.querySelectorAll('.dropbtn').forEach(btn => btn.classList.remove('active'));
    }

    if (openMenuBtn && navMenu) {
        openMenuBtn.addEventListener('click', openMobileMenu);
    }

    if (closeMenuBtn && navMenu) {
        closeMenuBtn.addEventListener('click', closeMobileMenu);
    }

    // Close the mobile menu when a top-level non-dropdown link is clicked
    topLevelNavLinks.forEach(link => {
        link.addEventListener('click', closeMobileMenu);
    });


    /* ============================================================
       DROPDOWNS
    ============================================================ */
    const dropdowns = document.querySelectorAll('.dropdown');

    dropdowns.forEach(dropdown => {
        const dropbtn = dropdown.querySelector('.dropbtn');
        const dropdownContent = dropdown.querySelector('.dropdown-content');

        if (!dropbtn || !dropdownContent) return;

        dropbtn.addEventListener('click', function (event) {
            event.preventDefault();
            event.stopPropagation();

            // Close other open dropdowns
            dropdowns.forEach(otherDropdown => {
                const otherContent = otherDropdown.querySelector('.dropdown-content');
                if (otherContent && otherContent !== dropdownContent && otherContent.classList.contains('show')) {
                    otherContent.classList.remove('show');
                    otherDropdown.querySelector('.dropbtn').classList.remove('active');
                }
            });

            dropdownContent.classList.toggle('show');
            dropbtn.classList.toggle('active');
        });

        // Close dropdown if user clicks outside
        window.addEventListener('click', function (event) {
            if (!dropdown.contains(event.target)) {
                dropdownContent.classList.remove('show');
                dropbtn.classList.remove('active');
            }
        });
    });


    /* ============================================================
       NEWSLETTER & EVENTS DATA FETCHING
       (assumes fetchNewslettersForPage() and fetchCalendarEvents()
       are defined elsewhere on the page)
    ============================================================ */
    if (typeof fetchNewslettersForPage === 'function') {
        fetchNewslettersForPage();
    }
    if (typeof fetchCalendarEvents === 'function') {
        fetchCalendarEvents();
    }


    /* ============================================================
       SCROLL-TRIGGERED TITLE ANIMATIONS
    ============================================================ */
    const observerOptions = {
        root: null,
        rootMargin: '0px',
        threshold: 0.2
    };

    const observer = new IntersectionObserver((entries, obs) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const element = entry.target;

                if (element.classList.contains('fade-zoom-in')) {
                    element.classList.add('animate-fadeInZoom');
                } else if (element.classList.contains('fade-in')) {
                    element.classList.add('animate-fadeIn');
                } else {
                    element.classList.add('animate-slideInFromTop');
                }

                obs.unobserve(element);
            }
        });
    }, observerOptions);

    // Core Values section
    const coreValuesTitle = document.querySelector('.core-values-section .landing-title');
    if (coreValuesTitle) {
        observer.observe(coreValuesTitle);
    }

    // Page2 section titles
    const page2Titles = document.querySelectorAll('.Page2 .landing-title');
    page2Titles.forEach(title => observer.observe(title));

    const themeArticles = document.querySelectorAll('.Page2 .theme');
    themeArticles.forEach(article => observer.observe(article));

});
