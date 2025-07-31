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
  
  // Hero Section Interactive Features
  initHeroFeatures();
  
  // Existing navigation code
  const navLinks = document.querySelectorAll('.nav-link');
  const mobileNavLinks = document.querySelectorAll('.mobile-nav-link'); // Added for mobile
  const footerLinks = document.querySelectorAll('.footer-link'); // Added for footer
  const sections = document.querySelectorAll('section');
  const navbar = document.querySelector('nav');
  const navbarHeight = navbar ? navbar.offsetHeight + 20 : 100; // Extra padding

  function initHeroFeatures() {
    // Typewriter Effect
    initTypewriter();
    
    // Counter Animation
    initCounters();
    
    // Smooth Scroll for Hero CTA
    initHeroScrolling();
    
    // Advanced Intersection Observer for Hero
    initHeroObserver();
    
    // Initialize Services Section
    initServicesSection();
  }

  function initServicesSection() {
    // Services Section Intersection Observer
    const servicesSection = document.querySelector('.services-section');
    if (!servicesSection) return;

    const servicesObserver = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('in-view');
          initServiceCards();
        }
      });
    }, {
      threshold: 0.1,
      rootMargin: '0px 0px -100px 0px'
    });

    servicesObserver.observe(servicesSection);
  }

  function initServiceCards() {
    const serviceCards = document.querySelectorAll('.service-card');
    
    // Staggered animation for service cards
    serviceCards.forEach((card, index) => {
      setTimeout(() => {
        card.style.animationPlayState = 'running';
        
        // Add hover enhancement
        addCardInteractions(card);
      }, index * 150);
    });
  }

  function addCardInteractions(card) {
    const iconContainer = card.querySelector('.service-icon-container');
    const features = card.querySelectorAll('.service-features li');
    
    // Enhanced hover effects
    card.addEventListener('mouseenter', () => {
      // Animate icon
      if (iconContainer) {
        iconContainer.style.transform = 'scale(1.1) rotate(5deg)';
      }
      
      // Stagger feature animations
      features.forEach((feature, index) => {
        setTimeout(() => {
          feature.style.transform = 'translateX(5px)';
          feature.style.color = 'theme("colors.primary.600")';
        }, index * 100);
      });
    });

    card.addEventListener('mouseleave', () => {
      // Reset animations
      if (iconContainer) {
        iconContainer.style.transform = '';
      }
      
      features.forEach(feature => {
        feature.style.transform = '';
        feature.style.color = '';
      });
    });

    // Add 3D tilt effect
    card.addEventListener('mousemove', (e) => {
      const rect = card.getBoundingClientRect();
      const x = e.clientX - rect.left;
      const y = e.clientY - rect.top;
      
      const centerX = rect.width / 2;
      const centerY = rect.height / 2;
      
      const rotateX = (y - centerY) / 10;
      const rotateY = (centerX - x) / 10;
      
      const cardInner = card.querySelector('.service-card-inner');
      if (cardInner) {
        cardInner.style.transform = `
          translateY(-8px) 
          rotateX(${rotateX}deg) 
          rotateY(${rotateY}deg)
        `;
      }
    });

    card.addEventListener('mouseleave', () => {
      const cardInner = card.querySelector('.service-card-inner');
      if (cardInner) {
        cardInner.style.transform = '';
      }
    });
  }

  function initTypewriter() {
    const typewriterElement = document.querySelector('.typewriter-text');
    if (!typewriterElement) return;

    const text = typewriterElement.getAttribute('data-text');
    if (!text) return;

    typewriterElement.textContent = '';
    let i = 0;
    
    function typeWriter() {
      if (i < text.length) {
        typewriterElement.textContent += text.charAt(i);
        i++;
        setTimeout(typeWriter, 50); // Adjust speed here
      } else {
        // Remove blinking cursor when done
        setTimeout(() => {
          typewriterElement.style.borderRight = 'none';
        }, 1000);
      }
    }
    
    // Start typewriter after a delay
    setTimeout(typeWriter, 1000);
  }

  function initCounters() {
    const counters = document.querySelectorAll('.stat-number');
    const observerOptions = {
      threshold: 0.5,
      rootMargin: '0px 0px -100px 0px'
    };

    const counterObserver = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          animateCounter(entry.target);
          counterObserver.unobserve(entry.target);
        }
      });
    }, observerOptions);

    counters.forEach(counter => {
      counterObserver.observe(counter);
    });
  }

  function animateCounter(element) {
    const target = parseInt(element.getAttribute('data-count'));
    const duration = 2000; // 2 seconds
    const step = target / (duration / 16); // 60fps
    let current = 0;

    const timer = setInterval(() => {
      current += step;
      if (current >= target) {
        element.textContent = target.toLocaleString();
        clearInterval(timer);
      } else {
        element.textContent = Math.floor(current).toLocaleString();
      }
    }, 16);
  }

  function initHeroScrolling() {
    const scrollIndicator = document.querySelector('.scroll-indicator');
    if (scrollIndicator) {
      scrollIndicator.addEventListener('click', () => {
        const nextSection = document.querySelector('.hero-elegant').nextElementSibling;
        if (nextSection) {
          nextSection.scrollIntoView({ 
            behavior: 'smooth',
            block: 'start'
          });
        }
      });
    }
  }

  function initHeroObserver() {
    const heroElements = document.querySelectorAll('.hero-elegant [class*="animate-"]');
    
    const observerOptions = {
      threshold: 0.1,
      rootMargin: '0px 0px -50px 0px'
    };

    const heroObserver = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.style.animationPlayState = 'running';
        }
      });
    }, observerOptions);

    heroElements.forEach(element => {
      element.style.animationPlayState = 'paused';
      heroObserver.observe(element);
    });
  }

  const serviceLinks = document.querySelectorAll('.service-link');
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

  if (isHomePage()) {
    removeActiveClasses();

    document.querySelector(`a[href="#hero"]`)?.classList.add('active');
    document.querySelector(`a[href="#hero"]`)?.classList.add('active-mob-nav');
  }

  window.addEventListener('scroll', setActiveNav);

  // Initialize Contact Section
  initContactSection();
  
  // Initialize Footer
  initFooter();
  
  // Initialize Contact and Footer Observers
  initContactFooterObservers();

  // Initialize Portfolio Functionality
});

// Contact Section Initialization
function initContactSection() {
  // Contact form handling
  const contactForm = document.querySelector('.contact-form');
  if (contactForm) {
    contactForm.addEventListener('submit', handleContactFormSubmit);
  }
  
  // Contact card hover effects
  const contactCards = document.querySelectorAll('.contact-card');
  contactCards.forEach((card, index) => {
    card.style.animationDelay = `${index * 0.2}s`;
    
    // Add enhanced hover effect
    card.addEventListener('mouseenter', () => {
      card.style.transform = 'perspective(1000px) translateY(-8px) rotateX(7deg)';
    });
    
    card.addEventListener('mouseleave', () => {
      card.style.transform = 'perspective(1000px) translateY(0px) rotateX(0deg)';
    });
  });
  
  // Social links animations
  const socialLinks = document.querySelectorAll('.social-link');
  socialLinks.forEach((link, index) => {
    link.style.animationDelay = `${0.5 + index * 0.1}s`;
  });
}

// Footer Initialization
function initFooter() {
  // Newsletter form handling
  const newsletterForm = document.querySelector('.newsletter-form');
  if (newsletterForm) {
    newsletterForm.addEventListener('submit', handleNewsletterSubmit);
  }
  
  // Back to top functionality
  const backToTopBtn = document.querySelector('.back-to-top');
  if (backToTopBtn) {
    backToTopBtn.addEventListener('click', scrollToTop);
    
    // Show/hide based on scroll position
    window.addEventListener('scroll', () => {
      if (window.scrollY > 300) {
        backToTopBtn.style.opacity = '1';
        backToTopBtn.style.transform = 'translateY(0)';
        backToTopBtn.style.pointerEvents = 'auto';
      } else {
        backToTopBtn.style.opacity = '0';
        backToTopBtn.style.transform = 'translateY(20px)';
        backToTopBtn.style.pointerEvents = 'none';
      }
    });
  }
  
  // Footer link hover effects
  const footerLinks = document.querySelectorAll('.footer-link');
  footerLinks.forEach(link => {
    link.addEventListener('mouseenter', () => {
      link.style.transform = 'translateX(8px)';
      link.style.color = 'rgb(59 130 246)'; // blue-500
    });
    
    link.addEventListener('mouseleave', () => {
      link.style.transform = 'translateX(0)';
      link.style.color = '';
    });
  });
}

// Contact Form Submit Handler
function handleContactFormSubmit(e) {
  e.preventDefault();
  
  const submitBtn = e.target.querySelector('.submit-btn');
  const originalText = submitBtn.textContent;
  
  // Show loading state
  submitBtn.textContent = 'Sending...';
  submitBtn.disabled = true;
  submitBtn.style.transform = 'scale(0.98)';
  
  // Simulate form processing
  setTimeout(() => {
    // Get form data
    const formData = new FormData(e.target);
    const data = Object.fromEntries(formData.entries());
    
    // Here you would typically send the data to your server
    console.log('Contact form data:', data);
    
    // Show success state
    submitBtn.textContent = '✓ Message Sent!';
    submitBtn.classList.remove('bg-primary-600', 'hover:bg-primary-700');
    submitBtn.classList.add('bg-success-600', 'hover:bg-success-700');
    submitBtn.style.transform = 'scale(1)';
    
    // Add success animation
    submitBtn.style.animation = 'pulse 0.5s ease-in-out';
    
    // Reset form
    e.target.reset();
    
    // Reset button after delay
    setTimeout(() => {
      submitBtn.textContent = originalText;
      submitBtn.disabled = false;
      submitBtn.classList.remove('bg-success-600', 'hover:bg-success-700');
      submitBtn.classList.add('bg-primary-600', 'hover:bg-primary-700');
      submitBtn.style.animation = '';
    }, 3000);
  }, 2000);
}

// Newsletter Submit Handler
function handleNewsletterSubmit(e) {
  e.preventDefault();
  
  const submitBtn = e.target.querySelector('.newsletter-btn');
  const originalText = submitBtn.textContent;
  
  // Show loading state
  submitBtn.textContent = 'Subscribing...';
  submitBtn.disabled = true;
  
  // Simulate newsletter subscription
  setTimeout(() => {
    const email = e.target.querySelector('input[type="email"]').value;
    console.log('Newsletter subscription:', email);
    
    // Show success state
    submitBtn.textContent = '✓ Subscribed!';
    submitBtn.classList.remove('bg-primary-600', 'hover:bg-primary-700');
    submitBtn.classList.add('bg-success-600', 'hover:bg-success-700');
    
    // Reset form
    e.target.reset();
    
    // Reset button after delay
    setTimeout(() => {
      submitBtn.textContent = originalText;
      submitBtn.disabled = false;
      submitBtn.classList.remove('bg-success-600', 'hover:bg-success-700');
      submitBtn.classList.add('bg-primary-600', 'hover:bg-primary-700');
    }, 3000);
  }, 1500);
}

// Scroll to Top Function
function scrollToTop() {
  window.scrollTo({
    top: 0,
    behavior: 'smooth'
  });
}

// Contact and Footer Intersection Observers
function initContactFooterObservers() {
  const observerOptions = {
    threshold: 0.1,
    rootMargin: '-50px 0px'
  };
  
  const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        entry.target.classList.add('in-view');
        
        // Special handling for contact section
        if (entry.target.classList.contains('contact-section')) {
          initContactAnimations();
        }
        
        // Special handling for footer
        if (entry.target.classList.contains('footer-main')) {
          initFooterAnimations();
        }
      }
    });
  }, observerOptions);
  
  // Observe contact and footer sections
  const contactSection = document.querySelector('.contact-section');
  const footerSection = document.querySelector('.footer-main');
  
  if (contactSection) observer.observe(contactSection);
  if (footerSection) observer.observe(footerSection);
}

// Contact Section Animations
function initContactAnimations() {
  const contactCards = document.querySelectorAll('.contact-card');
  contactCards.forEach((card, index) => {
    setTimeout(() => {
      card.classList.add('animate-fade-in-up');
      card.style.opacity = '1';
      card.style.transform = 'translateY(0)';
    }, index * 200);
  });
  
  const socialLinks = document.querySelectorAll('.social-link');
  socialLinks.forEach((link, index) => {
    setTimeout(() => {
      link.classList.add('animate-bounce-in');
      link.style.opacity = '1';
      link.style.transform = 'scale(1)';
    }, 600 + index * 100);
  });
  
  // Animate contact form
  const contactForm = document.querySelector('.contact-form');
  if (contactForm) {
    setTimeout(() => {
      contactForm.style.opacity = '1';
      contactForm.style.transform = 'translateY(0)';
    }, 400);
  }
}

// Footer Animations
function initFooterAnimations() {
  const footerSections = document.querySelectorAll('.footer-section');
  footerSections.forEach((section, index) => {
    setTimeout(() => {
      section.style.opacity = '1';
      section.style.transform = 'translateY(0)';
    }, index * 150);
  });
  
  // Animate footer stats with counter effect
  const footerStats = document.querySelectorAll('.footer-main .stat-number');
  footerStats.forEach((stat, index) => {
    setTimeout(() => {
      animateCounter(stat);
    }, index * 200);
  });
  
  // Animate achievement cards
  const achievementCards = document.querySelectorAll('.achievement-card');
  achievementCards.forEach((card, index) => {
    setTimeout(() => {
      card.style.opacity = '1';
      card.style.transform = 'scale(1)';
    }, 800 + index * 100);
  });
}

// Testimonials Section Functionality
document.addEventListener('DOMContentLoaded', function() {
  const initTestimonials = () => {
    const testimonialsSection = document.querySelector('.testimonials-section');
    if (!testimonialsSection) return;

    // Counter Animation for testimonials stats
    const counters = testimonialsSection.querySelectorAll('.stat-number');
    let hasAnimated = false;
    
    const animateTestimonialCounters = () => {
      if (hasAnimated) return;
      hasAnimated = true;
      
      counters.forEach(counter => {
        const target = parseInt(counter.getAttribute('data-count'));
        const duration = 2000;
        const step = target / (duration / 16);
        let current = 0;

        const timer = setInterval(() => {
          current += step;
          if (current >= target) {
            counter.textContent = target.toLocaleString();
            clearInterval(timer);
          } else {
            counter.textContent = Math.floor(current).toLocaleString();
          }
        }, 16);
      });
    };

    // Carousel Functionality
    const carousel = testimonialsSection.querySelector('.testimonials-carousel');
    if (carousel) {
      const track = carousel.querySelector('.testimonials-track');
      const slides = carousel.querySelectorAll('.testimonial-slide');
      const prevBtn = testimonialsSection.querySelector('.carousel-prev');
      const nextBtn = testimonialsSection.querySelector('.carousel-next');
      const indicators = testimonialsSection.querySelectorAll('.carousel-indicator');
      const currentSlideSpan = testimonialsSection.querySelector('.current-slide');
      
      let currentSlide = 0;
      const totalSlides = slides.length;

      const updateCarousel = () => {
        if (!track || !slides.length) return;
        
        track.style.transform = `translateX(-${currentSlide * 100}%)`;
        
        // Update indicators
        indicators.forEach((indicator, index) => {
          indicator.classList.toggle('bg-primary-600', index === currentSlide);
          indicator.classList.toggle('w-8', index === currentSlide);
          indicator.classList.toggle('bg-neutral-300', index !== currentSlide);
        });
        
        // Update current slide number
        if (currentSlideSpan) {
          currentSlideSpan.textContent = currentSlide + 1;
        }
        
        // Update button states
        if (prevBtn) prevBtn.disabled = currentSlide === 0;
        if (nextBtn) nextBtn.disabled = currentSlide === totalSlides - 1;
        
        // Add visual feedback for disabled buttons
        if (prevBtn) {
          prevBtn.style.opacity = currentSlide === 0 ? '0.5' : '1';
          prevBtn.style.cursor = currentSlide === 0 ? 'not-allowed' : 'pointer';
        }
        if (nextBtn) {
          nextBtn.style.opacity = currentSlide === totalSlides - 1 ? '0.5' : '1';
          nextBtn.style.cursor = currentSlide === totalSlides - 1 ? 'not-allowed' : 'pointer';
        }
      };

      // Navigation buttons
      prevBtn?.addEventListener('click', () => {
        if (currentSlide > 0) {
          currentSlide--;
          updateCarousel();
        }
      });

      nextBtn?.addEventListener('click', () => {
        if (currentSlide < totalSlides - 1) {
          currentSlide++;
          updateCarousel();
        }
      });

      // Indicator buttons
      indicators.forEach((indicator, index) => {
        indicator.addEventListener('click', () => {
          currentSlide = index;
          updateCarousel();
        });
      });

      // Touch/swipe support for mobile
      let startX = 0;
      let isDragging = false;

      track?.addEventListener('touchstart', (e) => {
        startX = e.touches[0].clientX;
        isDragging = true;
      });

      track?.addEventListener('touchmove', (e) => {
        if (!isDragging) return;
        e.preventDefault();
      });

      track?.addEventListener('touchend', (e) => {
        if (!isDragging) return;
        isDragging = false;
        
        const endX = e.changedTouches[0].clientX;
        const diffX = startX - endX;
        
        if (Math.abs(diffX) > 50) { // Minimum swipe distance
          if (diffX > 0 && currentSlide < totalSlides - 1) {
            currentSlide++;
          } else if (diffX < 0 && currentSlide > 0) {
            currentSlide--;
          }
          updateCarousel();
        }
      });

      // Initialize carousel
      updateCarousel();

      // Auto-play carousel (optional)
      let autoPlayInterval;
      const startAutoPlay = () => {
        autoPlayInterval = setInterval(() => {
          if (currentSlide < totalSlides - 1) {
            currentSlide++;
          } else {
            currentSlide = 0;
          }
          updateCarousel();
        }, 6000); // Change slide every 6 seconds
      };

      const stopAutoPlay = () => {
        if (autoPlayInterval) {
          clearInterval(autoPlayInterval);
        }
      };

      // Start auto-play
      startAutoPlay();

      // Pause auto-play on hover
      carousel.addEventListener('mouseenter', stopAutoPlay);
      carousel.addEventListener('mouseleave', startAutoPlay);
    }

    // Intersection Observer for animations
    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('in-view');
          
          // Start counter animation when section is visible
          if (entry.target === testimonialsSection) {
            setTimeout(animateTestimonialCounters, 500);
          }
        }
      });
    }, { threshold: 0.1 });

    observer.observe(testimonialsSection);

    // Enhanced card hover effects
    const testimonialCards = testimonialsSection.querySelectorAll('.testimonial-card');
    testimonialCards.forEach((card, index) => {
      // Staggered entrance animation
      setTimeout(() => {
        card.style.opacity = '1';
        card.style.transform = 'translateY(0)';
      }, index * 150);

      // Enhanced hover interactions
      card.addEventListener('mouseenter', () => {
        card.style.transform = 'translateY(-12px) scale(1.02)';
        card.style.boxShadow = '0 25px 50px rgba(59, 130, 246, 0.15), 0 0 30px rgba(59, 130, 246, 0.1)';
        
        // Animate rating stars
        const stars = card.querySelectorAll('.rating svg');
        stars.forEach((star, starIndex) => {
          setTimeout(() => {
            star.style.transform = 'scale(1.1) rotate(5deg)';
          }, starIndex * 50);
        });
      });
      
      card.addEventListener('mouseleave', () => {
        card.style.transform = 'translateY(0) scale(1)';
        card.style.boxShadow = '';
        
        // Reset rating stars
        const stars = card.querySelectorAll('.rating svg');
        stars.forEach(star => {
          star.style.transform = '';
        });
      });
    });

    // Add floating animation to quote symbols
    const quoteSymbols = testimonialsSection.querySelectorAll('.quote-left, .quote-right');
    quoteSymbols.forEach(quote => {
      quote.style.animation = 'quoteFloat 6s ease-in-out infinite';
    });
  };

  // Initialize testimonials
  initTestimonials();

  // Study in Canada Page Functionality
  if (document.querySelector('.study-canada-page')) {
    
    // Smooth scrolling for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });

    // Intersection Observer for animations
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.animationPlayState = 'running';
                entry.target.classList.add('animate-visible');
            }
        });
    }, observerOptions);

    // Observe all animated elements
    document.querySelectorAll('.animate-fade-up').forEach(el => {
        el.style.animationPlayState = 'paused';
        observer.observe(el);
    });

    // Enhanced hover effects for benefit and college cards
    document.querySelectorAll('.benefit-card, .college-card').forEach(card => {
        card.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-8px)';
            this.style.transition = 'all 0.3s ease';
        });
        
        card.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0)';
        });
    });

    // Parallax effect for maple leaves
    window.addEventListener('scroll', function() {
        const scrolled = window.pageYOffset;
        const parallax = document.querySelectorAll('.maple-leaf');
        
        parallax.forEach((leaf, index) => {
            const speed = 0.5 + (index * 0.1);
            const yPos = -(scrolled * speed);
            leaf.style.transform = `translateY(${yPos}px) rotate(${scrolled * 0.1}deg)`;
        });
    });

    // Button click tracking and enhanced interactions
    document.querySelectorAll('.btn-primary, .btn-secondary').forEach(button => {
        button.addEventListener('click', function(e) {
            // Create ripple effect
            const ripple = document.createElement('span');
            ripple.style.position = 'absolute';
            ripple.style.borderRadius = '50%';
            ripple.style.background = 'rgba(255, 255, 255, 0.6)';
            ripple.style.transform = 'scale(0)';
            ripple.style.animation = 'ripple 0.6s linear';
            ripple.style.left = (e.clientX - this.offsetLeft) + 'px';
            ripple.style.top = (e.clientY - this.offsetTop) + 'px';
            
            this.style.position = 'relative';
            this.style.overflow = 'hidden';
            this.appendChild(ripple);
            
            setTimeout(() => {
                ripple.remove();
            }, 600);
        });
    });

    // Add CSS for ripple animation
    const style = document.createElement('style');
    style.textContent = `
        @keyframes ripple {
            to {
                transform: scale(4);
                opacity: 0;
            }
        }
    `;
    document.head.appendChild(style);

    // Process steps counter animation
    const processSteps = document.querySelectorAll('.step-number');
    const processObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.transform = 'scale(1.1)';
                setTimeout(() => {
                    entry.target.style.transform = 'scale(1)';
                }, 300);
            }
        });
    }, { threshold: 0.7 });

    processSteps.forEach(step => {
        step.style.transition = 'transform 0.3s ease';
        processObserver.observe(step);
    });

    // College card enhanced interactions
    document.querySelectorAll('.college-card').forEach(card => {
        const programs = card.querySelector('.programs');
        
        card.addEventListener('mouseenter', function() {
            if (programs) {
                programs.style.maxHeight = programs.scrollHeight + 'px';
                programs.style.transition = 'max-height 0.3s ease';
            }
        });
        
        card.addEventListener('mouseleave', function() {
            if (programs) {
                programs.style.maxHeight = '';
            }
        });
    });
  }
});