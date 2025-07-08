// main menu / mobile menu
const menuButton = document.getElementById('menu-button');
const mobileMenu = document.getElementById('mobile-menu');
const mobileMenuOverlay = document.getElementById('mobile-menu-overlay');
const closeButton = document.getElementById('close-menu');
const links = document.querySelectorAll('.link');

menuButton?.addEventListener('click', () => {
  mobileMenu.classList.remove('-translate-x-full');
  mobileMenu.classList.add('translate-x-0');
  mobileMenuOverlay.classList.remove('hidden');
});

const closeMenu = () => {
  mobileMenu.classList.add('-translate-x-full');
  mobileMenu.classList.remove('translate-x-0');
  mobileMenuOverlay.classList.add('hidden');
};

closeButton?.addEventListener('click', closeMenu);
mobileMenuOverlay?.addEventListener('click', closeMenu);
links?.forEach((link) => link.addEventListener('click', closeMenu));

document.addEventListener('DOMContentLoaded', function () {
  const navLinks = document.querySelectorAll('.nav-link');
  const mobileNavLinks = document.querySelectorAll('.mobile-nav-link'); // Added for mobile
  const footerLinks = document.querySelectorAll('.footer-link'); // Added for footer
  const sections = document.querySelectorAll('section');
  const navbar = document.querySelector('nav');
  const navbarHeight = navbar ? navbar.offsetHeight + 20 : 100; // Extra padding

  const serviceLinks =document.querySelectorAll('.service-link');
  // Function to remove 'active' from all links (both mobile and desktop)
  function removeActiveClasses() {
    navLinks.forEach((link) => link.classList.remove('active'));
    mobileNavLinks.forEach((link) => link.classList.remove('active-mob-nav'));
  }
 function isHomePage() {
    return window.location.pathname === '/linkYouMarketing/wordpress/' || window.location.pathname === '/index.php'; 
  }

  // smooth scrolling on click for service links
  serviceLinks.forEach((link) => {
    
    link.addEventListener('click', function (e) {
      console.log("Service link clicked"); // Debugging line
      
      const targetId = this.getAttribute('href').substring(1);
      if (!isHomePage()) {
        window.location.href = '/linkYouMarketing/wordpress/' + '#' + targetId;
        return;
      }
     
    });
  });

  // Smooth scrolling on click for desktop navigation
  navLinks.forEach((link) => {
    link.addEventListener('click', function (e) {
      
if (isHomePage() && this.getAttribute('href').includes('#')) {

  e.preventDefault(); 
      }
      
      const targetId = this.getAttribute('href').substring(1);
      const targetSection = document.getElementById(targetId);
      if (!isHomePage() && this.getAttribute('href').includes('#')) {
    window.location.href = '/linkYouMarketing/wordpress/' + '#' + targetId;
      return;
  }
      
      if (targetSection) {
        removeActiveClasses();
        this.classList.add('active');

        // Smooth scroll with offset
        window.scrollTo({
          top: targetSection.offsetTop - navbarHeight,
          behavior: 'smooth',
        });
      }
    });
  });

  //    // Smooth scrolling on click for footer links (if needed)
  footerLinks.forEach((link) => {
    link.addEventListener('click', function (e) {
if (isHomePage() && this.getAttribute('href').includes('#')) {

  e.preventDefault(); 
      }
            const targetId = this.getAttribute('href').substring(1);
      const targetSection = document.getElementById(targetId);
  if (!isHomePage() && this.getAttribute('href').includes('#')) {
    window.location.href = '/linkYouMarketing/wordpress/' + '#' + targetId;
      return;
  }
      if (targetSection) {
        const isMobile = window.innerWidth <= 768; // Adjust breakpoint as needed
        const offset = isMobile ? navbarHeight + 50 : navbarHeight;

        window.scrollTo({
          top: targetSection.offsetTop - offset,
          behavior: 'smooth',
        });
      }
    });
  });
  // Smooth scrolling on click for mobile navigation (same as desktop)
  mobileNavLinks.forEach((link) => {
    link.addEventListener('click', function (e) {
if (isHomePage() && this.getAttribute('href').includes('#')) {

  e.preventDefault(); 
      }
      const targetId = this.getAttribute('href').substring(1);
      const targetSection = document.getElementById(targetId);
  if (!isHomePage() && this.getAttribute('href').includes('#')) {
    window.location.href = '/linkYouMarketing/wordpress/' + '#' + targetId;
      return;
  }
      if (targetSection) {
        //   console.log("Mobile link clicked"); // Debugging line
        removeActiveClasses();
        this.classList.add('active-mob-nav');

        // console.log(this);
        // Smooth scroll with offset
        window.scrollTo({
          top: targetSection.offsetTop - (navbarHeight + 30), // Extra padding for mobile
          behavior: 'smooth',
        });

        // Close mobile menu
        closeMenu();
      }
    });
  });

  // Detect scroll and highlight active menu item (both desktop and mobile)
  function setActiveNav() {
     if (!isHomePage()) {
       return; // Skip if not on the home page
    }
    const isMobile = window.innerWidth <= 768;
    const offset = isMobile ? navbarHeight + 50 : navbarHeight; // Match scroll offset in clicks
    const scrollPosition = window.scrollY + offset + 5; // Small buffer to avoid edge misfires

    let currentSectionId = null;

    sections.forEach((section) => {
      const sectionTop = section.offsetTop;
      const sectionHeight = section.offsetHeight;
      const sectionId = section.getAttribute('id');

      if (
        scrollPosition >= sectionTop &&
        scrollPosition < sectionTop + sectionHeight
      ) {
        currentSectionId = sectionId;
      }
    });

    if (currentSectionId) {
      removeActiveClasses();
      document
        .querySelector(`a[href="#${currentSectionId}"]`)
        ?.classList.add('active');
      document
        .querySelector(`a[href="#${currentSectionId}"].mobile-nav-link`)
        ?.classList.add('active-mob-nav');
    }
  }

  // Ensure "الرئيسية" is active by default
  if (isHomePage()) {
      removeActiveClasses();

    document.querySelector(`a[href="#hero"]`)?.classList.add('active');
    document.querySelector(`a[href="#hero"]`)?.classList.add('active-mob-nav');
  }

  window.addEventListener('scroll', setActiveNav);
  
  // Initialize Portfolio Functionality
  initPortfolioFunctionality();
});

// Portfolio Filtering and Animations
function initPortfolioFunctionality() {
  // Portfolio Filtering
  const filterButtons = document.querySelectorAll('.filter-btn');
  const portfolioCards = document.querySelectorAll('.portfolio-card');
  
  if (filterButtons.length > 0 && portfolioCards.length > 0) {
    filterButtons.forEach(button => {
      button.addEventListener('click', function() {
        const filter = this.getAttribute('data-filter');
        
        // Update active button
        filterButtons.forEach(btn => btn.classList.remove('active'));
        this.classList.add('active');
        
        // Filter portfolio items
        portfolioCards.forEach(card => {
          if (filter === 'all' || card.classList.contains(filter)) {
            card.classList.remove('hidden');
            card.style.display = 'block';
          } else {
            card.classList.add('hidden');
            card.style.display = 'none';
          }
        });
      });
    });
  }
  
  // Stats Counter Animation
  function animateCounter(element) {
    const target = parseInt(element.getAttribute('data-target'));
    const duration = 2000;
    const step = target / (duration / 16);
    let current = 0;
    
    const timer = setInterval(() => {
      current += step;
      if (current >= target) {
        current = target;
        clearInterval(timer);
      }
      element.textContent = Math.floor(current);
    }, 16);
  }
  
  // Intersection Observer for animations
  const observerOptions = {
    threshold: 0.1,
    rootMargin: '0px 0px -50px 0px'
  };
  
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.style.animationPlayState = 'running';
        
        // Animate counters when they come into view
        if (entry.target.classList.contains('stats-counter')) {
          animateCounter(entry.target);
        }
      }
    });
  }, observerOptions);
  
  // Observe animated elements
  document.querySelectorAll('[class*="animate-"]').forEach(el => {
    if (el.style.animationPlayState !== 'running') {
      el.style.animationPlayState = 'paused';
      observer.observe(el);
    }
  });
  
  // Observe stats counters
  document.querySelectorAll('.stats-counter').forEach(el => {
    observer.observe(el);
  });
}

// ===== TESTIMONIAL CAROUSEL FUNCTIONALITY =====
  function initTestimonialCarousel() {
    const carousel = document.querySelector('.testimonials-carousel');
    if (!carousel) return;

    const track = carousel.querySelector('.testimonials-track');
    const prevBtn = document.querySelector('.carousel-prev');
    const nextBtn = document.querySelector('.carousel-next');
    const indicators = document.querySelectorAll('.carousel-indicator');
    
    const totalSlides = parseInt(carousel.dataset.total);
    
    let currentPage = 0;

    function updateCarousel() {
      const translateX = -currentPage * 100;
      track.style.transform = `translateX(${translateX}%)`;
      
      // Update indicators
      indicators.forEach((indicator, index) => {
        indicator.classList.remove('active', 'bg-[#3773C9]');
        indicator.classList.add('bg-gray-300');
        if (index === currentPage) {
          indicator.classList.add('active', 'bg-[#3773C9]');
          indicator.classList.remove('bg-gray-300');
        }
      });
      
      // Update button states
      if (prevBtn) {
        prevBtn.style.opacity = currentPage === 0 ? '0.5' : '1';
        prevBtn.style.pointerEvents = currentPage === 0 ? 'none' : 'auto';
      }
      if (nextBtn) {
        nextBtn.style.opacity = currentPage === totalSlides - 1 ? '0.5' : '1';
        nextBtn.style.pointerEvents = currentPage === totalSlides - 1 ? 'none' : 'auto';
      }
    }

    function nextSlide() {
      if (currentPage < totalSlides - 1) {
        currentPage++;
        updateCarousel();
      }
    }

    function prevSlide() {
      if (currentPage > 0) {
        currentPage--;
        updateCarousel();
      }
    }

    function goToSlide(page) {
      currentPage = page;
      updateCarousel();
    }

    // Event listeners
    if (nextBtn) nextBtn.addEventListener('click', nextSlide);
    if (prevBtn) prevBtn.addEventListener('click', prevSlide);
    
    indicators.forEach((indicator, index) => {
      indicator.addEventListener('click', () => goToSlide(index));
    });

    // Auto-play functionality (optional)
    let autoPlayInterval;
    
    function startAutoPlay() {
      autoPlayInterval = setInterval(() => {
        if (currentPage < totalSlides - 1) {
          nextSlide();
        } else {
          currentPage = 0;
          updateCarousel();
        }
      }, 5000); // Change slide every 5 seconds
    }

    function stopAutoPlay() {
      clearInterval(autoPlayInterval);
    }

    // Start auto-play
    startAutoPlay();

    // Pause auto-play on hover
    if (carousel) {
      carousel.addEventListener('mouseenter', stopAutoPlay);
      carousel.addEventListener('mouseleave', startAutoPlay);
    }

    // Handle window resize
    window.addEventListener('resize', () => {
      if (currentPage >= totalSlides) {
        currentPage = totalSlides - 1;
      }
      updateCarousel();
    });

    // Touch/swipe support for mobile
    let startX = 0;
    let isDragging = false;

    if (track) {
      track.addEventListener('touchstart', (e) => {
        startX = e.touches[0].clientX;
        isDragging = true;
        stopAutoPlay();
      });

      track.addEventListener('touchmove', (e) => {
        if (!isDragging) return;
        e.preventDefault();
      });

      track.addEventListener('touchend', (e) => {
        if (!isDragging) return;
        
        const endX = e.changedTouches[0].clientX;
        const diff = startX - endX;
        
        if (Math.abs(diff) > 50) { // Minimum swipe distance
          if (diff > 0) {
            nextSlide();
          } else {
            prevSlide();
          }
        }
        
        isDragging = false;
        startAutoPlay();
      });
    }

    // Keyboard navigation
    document.addEventListener('keydown', (e) => {
      if (carousel && carousel.querySelector(':hover')) {
        if (e.key === 'ArrowLeft') {
          prevSlide();
        } else if (e.key === 'ArrowRight') {
          nextSlide();
        }
      }
    });

    // Initialize
    updateCarousel();
  }

initPortfolioFunctionality();
initTestimonialCarousel();


