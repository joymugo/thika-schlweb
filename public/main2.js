let slideIndex = 0;
let slides = document.getElementsByClassName("slide");
let slideInterval;

// Show the current slide
function showSlide(n) {
  for (let i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slides[n].style.display = "block";
}

// Change slide by +1 or -1
function plusSlides(n) {
  clearInterval(slideInterval); // stop auto transition
  slideIndex += n;
  if (slideIndex >= slides.length) slideIndex = 0;
  if (slideIndex < 0) slideIndex = slides.length - 1;
  showSlide(slideIndex);
  startSlideShow(); // restart auto transition
}

// Start the slideshow
function startSlideShow() {
  slideInterval = setInterval(() => {
    slideIndex++;
    if (slideIndex >= slides.length) slideIndex = 0;
    showSlide(slideIndex);
  }, 5000); // every 5 seconds
}

// Initialize
window.addEventListener("load", () => {
  if (slides.length > 0) {
    showSlide(slideIndex);
    startSlideShow();
  }
});

//SCRIPT FOR NAVIGATION TABS IN ABOUT PAGE
        document.addEventListener('DOMContentLoaded', function() {
            const navButtons = document.querySelectorAll('.nav-button');
            const tabIndicator = document.querySelector('.tab-indicator');
            const tabContents = document.querySelectorAll('.tab-content');

            function showTab(tabId) {
                tabContents.forEach(content => {
                    content.classList.remove('active');
                });
                const activeTab = document.getElementById(tabId);
                if (activeTab) {
                    activeTab.classList.add('active');
                }
            }

            navButtons.forEach((button, index) => {
                button.addEventListener('click', function() {
                    // Remove active class from all buttons
                    navButtons.forEach(btn => btn.classList.remove('active'));
                    // Add active class to the clicked button
                    this.classList.add('active');

                    // Calculate the left position and width of the indicator
                    let offsetLeft = this.offsetLeft;
                    let buttonWidth = this.offsetWidth;

                    tabIndicator.style.left = offsetLeft + 'px';
                    tabIndicator.style.width = buttonWidth + 'px';

                    // Show the corresponding tab content
                    const tabId = this.getAttribute('data-tab');
                    showTab(tabId);
                });

                // Set initial state: Find the active button and show its tab content
                if (button.classList.contains('active')) {
                    tabIndicator.style.left = button.offsetLeft + 'px';
                    tabIndicator.style.width = button.offsetWidth + 'px';
                    showTab(button.getAttribute('data-tab'));
                }
            });
        });


//START OF GALLERY
function openLightbox(imageSrc) {
  const lightbox = document.getElementById('lightbox');
  const lightboxImage = document.getElementById('lightbox-image');
  lightboxImage.src = imageSrc;
  lightbox.style.display = 'flex';
}

function closeLightbox() {
  const lightbox = document.getElementById('lightbox');
  lightbox.style.display = 'none';
}
//END OF GALLERY

// HAMBURGER MENU
const openMenuBtn = document.querySelector('#open-menu-btn');
const closeMenuBtn = document.querySelector('#close-menu-btn');
const navMenu = document.querySelector('.nav__menu');
// Exclude links that are part of a dropdown (specifically the dropbtn itself and nested dropdown-content links)
const navLinks = document.querySelectorAll('.nav__menu > li:not(.dropdown) > a'); // Select direct child <a> of <li> that are NOT dropdowns

// If you also want to exclude the actual dropdown content links from closing the main menu:
// const navLinks = document.querySelectorAll('.nav__menu a:not(.dropbtn), .nav__menu .dropdown-content a'); // This might be trickier to combine.

// Let's stick with the simpler exclusion first, for the primary issue:
// Only target direct top-level navigation links that are NOT part of a dropdown
// This will prevent clicking the dropdown *trigger* from closing the main menu.
const topLevelNavLinks = document.querySelectorAll('.nav__menu > li > a:not(.dropbtn)');


if (openMenuBtn) {
    openMenuBtn.addEventListener('click', () => {
        navMenu.style.display = 'flex';
        if (closeMenuBtn) {
            closeMenuBtn.style.display = 'inline-block';
            openMenuBtn.style.display = 'none';
        }
        // When opening mobile menu, ensure dropdowns are closed
        document.querySelectorAll('.dropdown-content').forEach(content => content.classList.remove('show'));
        document.querySelectorAll('.dropbtn').forEach(btn => btn.classList.remove('active'));
    });
}

if (closeMenuBtn) {
    closeMenuBtn.addEventListener('click', () => {
        navMenu.style.display = 'none';
        openMenuBtn.style.display = 'inline-block';
        closeMenuBtn.style.display = 'none';
        // When closing mobile menu, ensure dropdowns are closed
        document.querySelectorAll('.dropdown-content').forEach(content => content.classList.remove('show'));
        document.querySelectorAll('.dropbtn').forEach(btn => btn.classList.remove('active'));
    });
}

// Close the menu when a TOP-LEVEL non-dropdown link is clicked
topLevelNavLinks.forEach(link => {
    link.addEventListener('click', () => {
        navMenu.style.display = 'none';
        if (closeMenuBtn) {
            closeMenuBtn.style.display = 'none';
            openMenuBtn.style.display = 'inline-block';
        }
        // Ensure dropdowns are also closed if a main link is clicked
        document.querySelectorAll('.dropdown-content').forEach(content => content.classList.remove('show'));
        document.querySelectorAll('.dropbtn').forEach(btn => btn.classList.remove('active'));
    });
});

// --- START: New Newsletter & Events API Integration ---
// ... (Your existing fetchNewsletters, displayNewsletters, fetchCalendarEvents, displayCalendarEvents functions) ...
// --- END: New Newsletter & Events API Integration ---


document.addEventListener('DOMContentLoaded', function() {
    // ... (Your existing dropdown JavaScript code here) ...
    const dropdowns = document.querySelectorAll('.dropdown');

    dropdowns.forEach(dropdown => {
        const dropbtn = dropdown.querySelector('.dropbtn');
        const dropdownContent = dropdown.querySelector('.dropdown-content');

        // Toggle dropdown on click
        dropbtn.addEventListener('click', function(event) {
            event.preventDefault();
            event.stopPropagation(); // VERY IMPORTANT HERE

            // Close other open dropdowns
            dropdowns.forEach(otherDropdown => {
                const otherDropdownContent = otherDropdown.querySelector('.dropdown-content');
                if (otherDropdownContent !== dropdownContent && otherDropdownContent.classList.contains('show')) {
                    otherDropdownContent.classList.remove('show');
                    otherDropdown.querySelector('.dropbtn').classList.remove('active');
                }
            });

            dropdownContent.classList.toggle('show');
            dropbtn.classList.toggle('active');
        });

        // Close dropdown if user clicks outside
        window.addEventListener('click', function(event) {
            if (!dropdown.contains(event.target)) {
                dropdownContent.classList.remove('show');
                dropbtn.classList.remove('active');
            }
        });
    });

    // Call your data fetching functions here, as they are part of DOMContentLoaded
    fetchNewslettersForPage();
    fetchCalendarEvents();
});



//ANIMATIC EFFECT OF TITLES//
document.addEventListener('DOMContentLoaded', () => {

    const observerOptions = {
        root: null, // the viewport
        rootMargin: '0px',
        threshold: 0.2 // Trigger when 20% of the element is visible
    };

    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const element = entry.target;

                // Determine which animation to apply based on element's specific class or context
                if (element.classList.contains('fade-zoom-in')) {
                    element.classList.add('animate-fadeInZoom');
                } else if (element.classList.contains('fade-in')) {
                    element.classList.add('animate-fadeIn');
                } else {
                    // Default animation for elements without a specific type
                    element.classList.add('animate-slideInFromTop');
                }

                observer.unobserve(element); // Stop observing once it animates
            }
        });
    }, observerOptions);

    // --- Observe elements in the 'Core Values' section ---
    const coreValuesTitle = document.querySelector('.core-values-section .landing-title');
    if (coreValuesTitle) {
        observer.observe(coreValuesTitle);
    }

    // --- Observe elements in the 'Page2' section ---

    // For the main title and paragraph in Page2
    // Using querySelectorAll to get both the h2 and p with landing-title
    const page2Titles = document.querySelectorAll('.Page2 .landing-title');
    page2Titles.forEach(title => {
        if (title) { // Ensure the element exists
            observer.observe(title);
        }
    });
    const themeArticles = document.querySelectorAll('.Page2 .theme');
    themeArticles.forEach((article, index) => {

        observer.observe(article); // Observe each article
    });

});




//START OF USING JAVASCRIPT TO FETCH THE REQUEST FROM OUR LARAVEL APP FOR EVENTS
//USE FETCH API
async function fetchAndDisplayEvents() {
    try {
        const response = await fetch('https://admin.kanjurisenoirschool.sc.ke/api/events');
        // Check if the response was successful
        if (!response.ok) {
            throw new Error(`HTTP error! status: ${response.status}`);
        }
        const events = await response.json();
        displayEvents(events);
    } catch (error) {
        console.error('There was a problem fetching the events:', error);
        // Display a user-friendly error message on the page
        const container = document.getElementById('event-list-homepage');
        container.innerHTML = '<p>Sorry, we could not load the events at this time.</p>';
    }
}

    
// DYNAMICALLY DISPLAYING THE FETCHED EVENTS DATA
function displayEvents(events) {
    const eventsContainer = document.getElementById('dynamic-events-container');
    const heading = document.getElementById('dynamic-events-heading');
    
    // Clear content from the new container
    eventsContainer.innerHTML = '';
    
    // Check if there are any events and update the heading text
    if (events.length === 0) {
        heading.innerText = 'No Upcoming Events';
        eventsContainer.innerHTML = '<p>There are no events scheduled at this time.</p>';
        return;
    } else {
        heading.innerText = 'Upcoming/Ongoing Events';
    }

    // Create a new <ul> element
    const eventList = document.createElement('ul');
    eventList.className = 'events-list-simple';
    
    // Loop through each event in the array and create the HTML elements
    events.forEach(event => {
        // Create a new <li> element
        const eventItem = document.createElement('li');
        eventItem.className = 'event-list-item';
        
        // Use the event data to create a single paragraph of text
        const startDate = new Date(event.start_time);
        const eventInfo = `
            <strong>${event.title}</strong> held at <strong>${event.location},</strong><br>
            Description: <strong>${event.description},</strong>
            On ${startDate.toLocaleDateString('en-US', { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' })} at 
            <strong>${startDate.toLocaleTimeString([], { hour: '2-digit', minute: '2-digit' })}</strong>
            </div>
        `;
        
        eventItem.innerHTML = eventInfo;
        
        // Append the list item to the list
        eventList.appendChild(eventItem);
    });

    // Append the final list to the container
    eventsContainer.appendChild(eventList);
}

//CALLING FUNCTIONS WHENEVER THE PAGE LOADS 
document.addEventListener('DOMContentLoaded', async () => {
    const events = await fetchAndDisplayEvents();
    if (events) {
        displayEvents(events);
    }
});


// FETCH AND DISPLAY SECTION FOR THE NEWSLETTERS
const newsletterApiUrl = 'https://admin.kanjurisenoirschool.sc.ke/api/newsletters';
let allNewsletters = []; // This will store the data from the API

async function fetchAndRenderNewsletters() {
    const contentContainer = document.getElementById('newsletter-dynamic-content');
    contentContainer.innerHTML = '<h2>Loading Newsletters...</h2>';

    try {
        const response = await fetch(newsletterApiUrl);
        if (!response.ok) {
            throw new Error(`HTTP error! Status: ${response.status}`);
        }
        const data = await response.json();
        
        // Correctly access the data array from the API response
        allNewsletters = data.data;

        // Initial render: display all newsletters
        renderNewsletters(allNewsletters);

    } catch (error) {
        console.error('There was a problem fetching the newsletters:', error);
        contentContainer.innerHTML = '<h2>Error Loading Newsletters</h2><p>Could not load newsletters. Please try again later.</p>';
    }
}

function renderNewsletters(newslettersToDisplay) {
    const contentContainer = document.getElementById('newsletter-dynamic-content');
    contentContainer.innerHTML = ''; // Clear container before rendering
    
    if (newslettersToDisplay.length > 0) {
        newslettersToDisplay.forEach(newsletter => {
            const date = new Date(newsletter.published_at);
            const formattedDate = date.toLocaleDateString('en-US', { year: 'numeric', month: 'long', day: 'numeric' });
            
            const newsletterElement = document.createElement('div');
            newsletterElement.className = 'newsletter-item';
            
            const newsletterHtml = `
                <h2>${newsletter.title}</h2>
                <div class="file-info">Published: ${formattedDate}</div>
                <p>${newsletter.description}</p>
                <a href="https://admin.kanjurisenoirschool.sc.ke/storage/${newsletter.pdf_url}" class="download-button" download>
                    Download PDF
                </a>
            `;
            
            newsletterElement.innerHTML = newsletterHtml;
            contentContainer.appendChild(newsletterElement);
        });
    } else {
        contentContainer.innerHTML = '<h2>No Newsletters Found</h2><p>No newsletters match the selected filter.</p>';
    }
}

// Add filtering logic
document.getElementById('newsletter-filter').addEventListener('change', (event) => {
    const filterValue = event.target.value;
    let filteredNewsletters = [];

    if (filterValue === 'all') {
        filteredNewsletters = allNewsletters;
    } else {
        // Filter based on a 'class' property in your API data.
        filteredNewsletters = allNewsletters.filter(newsletter => {
            // Standardize the comparison by converting to lowercase
            return newsletter.class.toLowerCase() === filterValue.toLowerCase();
        });
    }
    
    renderNewsletters(filteredNewsletters);
});

// Initial call to fetch data when the page loads
document.addEventListener('DOMContentLoaded', fetchAndRenderNewsletters);