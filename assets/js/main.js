const menuButton = document.getElementById("menu-button");
const mobileMenu = document.getElementById("mobile-menu");
const mobileMenuOverlay = document.getElementById("mobile-menu-overlay");
const closeButton = document.getElementById("close-menu");
const links = document.querySelectorAll(".link");
menuButton == null ? void 0 : menuButton.addEventListener("click", () => {
  mobileMenu.classList.remove("-translate-x-full");
  mobileMenu.classList.add("translate-x-0");
  mobileMenuOverlay.classList.remove("hidden");
});
const closeMenu = () => {
  mobileMenu.classList.add("-translate-x-full");
  mobileMenu.classList.remove("translate-x-0");
  mobileMenuOverlay.classList.add("hidden");
};
closeButton == null ? void 0 : closeButton.addEventListener("click", closeMenu);
mobileMenuOverlay == null ? void 0 : mobileMenuOverlay.addEventListener("click", closeMenu);
links == null ? void 0 : links.forEach((link) => link.addEventListener("click", closeMenu));
document.addEventListener("DOMContentLoaded", function() {
  var _a, _b;
  initHeroFeatures();
  const navLinks = document.querySelectorAll(".nav-link");
  const mobileNavLinks = document.querySelectorAll(".mobile-nav-link");
  const footerLinks = document.querySelectorAll(".footer-link");
  const sections = document.querySelectorAll("section");
  const navbar = document.querySelector("nav");
  const navbarHeight = navbar ? navbar.offsetHeight + 20 : 100;
  function initHeroFeatures() {
    initTypewriter();
    initCounters();
    initHeroScrolling();
    initHeroObserver();
    initServicesSection();
  }
  function initServicesSection() {
    const servicesSection = document.querySelector(".services-section");
    if (!servicesSection)
      return;
    const servicesObserver = new IntersectionObserver((entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          entry.target.classList.add("in-view");
          initServiceCards();
        }
      });
    }, {
      threshold: 0.1,
      rootMargin: "0px 0px -100px 0px"
    });
    servicesObserver.observe(servicesSection);
  }
  function initServiceCards() {
    const serviceCards = document.querySelectorAll(".service-card");
    serviceCards.forEach((card, index) => {
      setTimeout(() => {
        card.style.animationPlayState = "running";
        addCardInteractions(card);
      }, index * 150);
    });
  }
  function addCardInteractions(card) {
    const iconContainer = card.querySelector(".service-icon-container");
    const features = card.querySelectorAll(".service-features li");
    card.addEventListener("mouseenter", () => {
      if (iconContainer) {
        iconContainer.style.transform = "scale(1.1) rotate(5deg)";
      }
      features.forEach((feature, index) => {
        setTimeout(() => {
          feature.style.transform = "translateX(5px)";
          feature.style.color = 'theme("colors.primary.600")';
        }, index * 100);
      });
    });
    card.addEventListener("mouseleave", () => {
      if (iconContainer) {
        iconContainer.style.transform = "";
      }
      features.forEach((feature) => {
        feature.style.transform = "";
        feature.style.color = "";
      });
    });
    card.addEventListener("mousemove", (e) => {
      const rect = card.getBoundingClientRect();
      const x = e.clientX - rect.left;
      const y = e.clientY - rect.top;
      const centerX = rect.width / 2;
      const centerY = rect.height / 2;
      const rotateX = (y - centerY) / 10;
      const rotateY = (centerX - x) / 10;
      const cardInner = card.querySelector(".service-card-inner");
      if (cardInner) {
        cardInner.style.transform = `
          translateY(-8px) 
          rotateX(${rotateX}deg) 
          rotateY(${rotateY}deg)
        `;
      }
    });
    card.addEventListener("mouseleave", () => {
      const cardInner = card.querySelector(".service-card-inner");
      if (cardInner) {
        cardInner.style.transform = "";
      }
    });
  }
  function initTypewriter() {
    const typewriterElement = document.querySelector(".typewriter-text");
    if (!typewriterElement)
      return;
    const text = typewriterElement.getAttribute("data-text");
    if (!text)
      return;
    typewriterElement.textContent = "";
    let i = 0;
    function typeWriter() {
      if (i < text.length) {
        typewriterElement.textContent += text.charAt(i);
        i++;
        setTimeout(typeWriter, 50);
      } else {
        setTimeout(() => {
          typewriterElement.style.borderRight = "none";
        }, 1e3);
      }
    }
    setTimeout(typeWriter, 1e3);
  }
  function initCounters() {
    const counters = document.querySelectorAll(".stat-number");
    const observerOptions = {
      threshold: 0.5,
      rootMargin: "0px 0px -100px 0px"
    };
    const counterObserver = new IntersectionObserver((entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          animateCounter2(entry.target);
          counterObserver.unobserve(entry.target);
        }
      });
    }, observerOptions);
    counters.forEach((counter) => {
      counterObserver.observe(counter);
    });
  }
  function animateCounter2(element) {
    const target = parseInt(element.getAttribute("data-count"));
    const duration = 2e3;
    const step = target / (duration / 16);
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
    const scrollIndicator = document.querySelector(".scroll-indicator");
    if (scrollIndicator) {
      scrollIndicator.addEventListener("click", () => {
        const nextSection = document.querySelector(".hero-elegant").nextElementSibling;
        if (nextSection) {
          nextSection.scrollIntoView({
            behavior: "smooth",
            block: "start"
          });
        }
      });
    }
  }
  function initHeroObserver() {
    const heroElements = document.querySelectorAll('.hero-elegant [class*="animate-"]');
    const observerOptions = {
      threshold: 0.1,
      rootMargin: "0px 0px -50px 0px"
    };
    const heroObserver = new IntersectionObserver((entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          entry.target.style.animationPlayState = "running";
        }
      });
    }, observerOptions);
    heroElements.forEach((element) => {
      element.style.animationPlayState = "paused";
      heroObserver.observe(element);
    });
  }
  const serviceLinks = document.querySelectorAll(".service-link");
  function removeActiveClasses() {
    navLinks.forEach((link) => link.classList.remove("active"));
    mobileNavLinks.forEach((link) => link.classList.remove("active-mob-nav"));
  }
  function isHomePage() {
    return window.location.pathname === "/linkYouMarketing/wordpress/" || window.location.pathname === "/index.php";
  }
  serviceLinks.forEach((link) => {
    link.addEventListener("click", function(e) {
      console.log("Service link clicked");
      const targetId = this.getAttribute("href").substring(1);
      if (!isHomePage()) {
        window.location.href = "/linkYouMarketing/wordpress/#" + targetId;
        return;
      }
    });
  });
  navLinks.forEach((link) => {
    link.addEventListener("click", function(e) {
      if (isHomePage() && this.getAttribute("href").includes("#")) {
        e.preventDefault();
      }
      const targetId = this.getAttribute("href").substring(1);
      const targetSection = document.getElementById(targetId);
      if (!isHomePage() && this.getAttribute("href").includes("#")) {
        window.location.href = "/linkYouMarketing/wordpress/#" + targetId;
        return;
      }
      if (targetSection) {
        removeActiveClasses();
        this.classList.add("active");
        window.scrollTo({
          top: targetSection.offsetTop - navbarHeight,
          behavior: "smooth"
        });
      }
    });
  });
  footerLinks.forEach((link) => {
    link.addEventListener("click", function(e) {
      if (isHomePage() && this.getAttribute("href").includes("#")) {
        e.preventDefault();
      }
      const targetId = this.getAttribute("href").substring(1);
      const targetSection = document.getElementById(targetId);
      if (!isHomePage() && this.getAttribute("href").includes("#")) {
        window.location.href = "/linkYouMarketing/wordpress/#" + targetId;
        return;
      }
      if (targetSection) {
        const isMobile = window.innerWidth <= 768;
        const offset = isMobile ? navbarHeight + 50 : navbarHeight;
        window.scrollTo({
          top: targetSection.offsetTop - offset,
          behavior: "smooth"
        });
      }
    });
  });
  mobileNavLinks.forEach((link) => {
    link.addEventListener("click", function(e) {
      if (isHomePage() && this.getAttribute("href").includes("#")) {
        e.preventDefault();
      }
      const targetId = this.getAttribute("href").substring(1);
      const targetSection = document.getElementById(targetId);
      if (!isHomePage() && this.getAttribute("href").includes("#")) {
        window.location.href = "/linkYouMarketing/wordpress/#" + targetId;
        return;
      }
      if (targetSection) {
        removeActiveClasses();
        this.classList.add("active-mob-nav");
        window.scrollTo({
          top: targetSection.offsetTop - (navbarHeight + 30),
          // Extra padding for mobile
          behavior: "smooth"
        });
        closeMenu();
      }
    });
  });
  function setActiveNav() {
    var _a2, _b2;
    if (!isHomePage()) {
      return;
    }
    const isMobile = window.innerWidth <= 768;
    const offset = isMobile ? navbarHeight + 50 : navbarHeight;
    const scrollPosition = window.scrollY + offset + 5;
    let currentSectionId = null;
    sections.forEach((section) => {
      const sectionTop = section.offsetTop;
      const sectionHeight = section.offsetHeight;
      const sectionId = section.getAttribute("id");
      if (scrollPosition >= sectionTop && scrollPosition < sectionTop + sectionHeight) {
        currentSectionId = sectionId;
      }
    });
    if (currentSectionId) {
      removeActiveClasses();
      (_a2 = document.querySelector(`a[href="#${currentSectionId}"]`)) == null ? void 0 : _a2.classList.add("active");
      (_b2 = document.querySelector(`a[href="#${currentSectionId}"].mobile-nav-link`)) == null ? void 0 : _b2.classList.add("active-mob-nav");
    }
  }
  if (isHomePage()) {
    removeActiveClasses();
    (_a = document.querySelector(`a[href="#hero"]`)) == null ? void 0 : _a.classList.add("active");
    (_b = document.querySelector(`a[href="#hero"]`)) == null ? void 0 : _b.classList.add("active-mob-nav");
  }
  window.addEventListener("scroll", setActiveNav);
  initContactSection();
  initFooter();
  initContactFooterObservers();
});
function initContactSection() {
  const contactForm = document.querySelector(".contact-form");
  if (contactForm) {
    contactForm.addEventListener("submit", handleContactFormSubmit);
  }
  const contactCards = document.querySelectorAll(".contact-card");
  contactCards.forEach((card, index) => {
    card.style.animationDelay = `${index * 0.2}s`;
    card.addEventListener("mouseenter", () => {
      card.style.transform = "perspective(1000px) translateY(-8px) rotateX(7deg)";
    });
    card.addEventListener("mouseleave", () => {
      card.style.transform = "perspective(1000px) translateY(0px) rotateX(0deg)";
    });
  });
  const socialLinks = document.querySelectorAll(".social-link");
  socialLinks.forEach((link, index) => {
    link.style.animationDelay = `${0.5 + index * 0.1}s`;
  });
}
function initFooter() {
  const newsletterForm = document.querySelector(".newsletter-form");
  if (newsletterForm) {
    newsletterForm.addEventListener("submit", handleNewsletterSubmit);
  }
  const backToTopBtn = document.querySelector(".back-to-top");
  if (backToTopBtn) {
    backToTopBtn.addEventListener("click", scrollToTop);
    window.addEventListener("scroll", () => {
      if (window.scrollY > 300) {
        backToTopBtn.style.opacity = "1";
        backToTopBtn.style.transform = "translateY(0)";
        backToTopBtn.style.pointerEvents = "auto";
      } else {
        backToTopBtn.style.opacity = "0";
        backToTopBtn.style.transform = "translateY(20px)";
        backToTopBtn.style.pointerEvents = "none";
      }
    });
  }
  const footerLinks = document.querySelectorAll(".footer-link");
  footerLinks.forEach((link) => {
    link.addEventListener("mouseenter", () => {
      link.style.transform = "translateX(8px)";
      link.style.color = "rgb(59 130 246)";
    });
    link.addEventListener("mouseleave", () => {
      link.style.transform = "translateX(0)";
      link.style.color = "";
    });
  });
}
function handleContactFormSubmit(e) {
  e.preventDefault();
  const submitBtn = e.target.querySelector(".submit-btn");
  const originalText = submitBtn.textContent;
  submitBtn.textContent = "Sending...";
  submitBtn.disabled = true;
  submitBtn.style.transform = "scale(0.98)";
  setTimeout(() => {
    const formData = new FormData(e.target);
    const data = Object.fromEntries(formData.entries());
    console.log("Contact form data:", data);
    submitBtn.textContent = "✓ Message Sent!";
    submitBtn.classList.remove("bg-primary-600", "hover:bg-primary-700");
    submitBtn.classList.add("bg-success-600", "hover:bg-success-700");
    submitBtn.style.transform = "scale(1)";
    submitBtn.style.animation = "pulse 0.5s ease-in-out";
    e.target.reset();
    setTimeout(() => {
      submitBtn.textContent = originalText;
      submitBtn.disabled = false;
      submitBtn.classList.remove("bg-success-600", "hover:bg-success-700");
      submitBtn.classList.add("bg-primary-600", "hover:bg-primary-700");
      submitBtn.style.animation = "";
    }, 3e3);
  }, 2e3);
}
function handleNewsletterSubmit(e) {
  e.preventDefault();
  const submitBtn = e.target.querySelector(".newsletter-btn");
  const originalText = submitBtn.textContent;
  submitBtn.textContent = "Subscribing...";
  submitBtn.disabled = true;
  setTimeout(() => {
    const email = e.target.querySelector('input[type="email"]').value;
    console.log("Newsletter subscription:", email);
    submitBtn.textContent = "✓ Subscribed!";
    submitBtn.classList.remove("bg-primary-600", "hover:bg-primary-700");
    submitBtn.classList.add("bg-success-600", "hover:bg-success-700");
    e.target.reset();
    setTimeout(() => {
      submitBtn.textContent = originalText;
      submitBtn.disabled = false;
      submitBtn.classList.remove("bg-success-600", "hover:bg-success-700");
      submitBtn.classList.add("bg-primary-600", "hover:bg-primary-700");
    }, 3e3);
  }, 1500);
}
function scrollToTop() {
  window.scrollTo({
    top: 0,
    behavior: "smooth"
  });
}
function initContactFooterObservers() {
  const observerOptions = {
    threshold: 0.1,
    rootMargin: "-50px 0px"
  };
  const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        entry.target.classList.add("in-view");
        if (entry.target.classList.contains("contact-section")) {
          initContactAnimations();
        }
        if (entry.target.classList.contains("footer-main")) {
          initFooterAnimations();
        }
      }
    });
  }, observerOptions);
  const contactSection = document.querySelector(".contact-section");
  const footerSection = document.querySelector(".footer-main");
  if (contactSection)
    observer.observe(contactSection);
  if (footerSection)
    observer.observe(footerSection);
}
function initContactAnimations() {
  const contactCards = document.querySelectorAll(".contact-card");
  contactCards.forEach((card, index) => {
    setTimeout(() => {
      card.classList.add("animate-fade-in-up");
      card.style.opacity = "1";
      card.style.transform = "translateY(0)";
    }, index * 200);
  });
  const socialLinks = document.querySelectorAll(".social-link");
  socialLinks.forEach((link, index) => {
    setTimeout(() => {
      link.classList.add("animate-bounce-in");
      link.style.opacity = "1";
      link.style.transform = "scale(1)";
    }, 600 + index * 100);
  });
  const contactForm = document.querySelector(".contact-form");
  if (contactForm) {
    setTimeout(() => {
      contactForm.style.opacity = "1";
      contactForm.style.transform = "translateY(0)";
    }, 400);
  }
}
function initFooterAnimations() {
  const footerSections = document.querySelectorAll(".footer-section");
  footerSections.forEach((section, index) => {
    setTimeout(() => {
      section.style.opacity = "1";
      section.style.transform = "translateY(0)";
    }, index * 150);
  });
  const footerStats = document.querySelectorAll(".footer-main .stat-number");
  footerStats.forEach((stat, index) => {
    setTimeout(() => {
      animateCounter(stat);
    }, index * 200);
  });
  const achievementCards = document.querySelectorAll(".achievement-card");
  achievementCards.forEach((card, index) => {
    setTimeout(() => {
      card.style.opacity = "1";
      card.style.transform = "scale(1)";
    }, 800 + index * 100);
  });
}
document.addEventListener("DOMContentLoaded", function() {
  const initTestimonials = () => {
    const testimonialsSection = document.querySelector(".testimonials-section");
    if (!testimonialsSection)
      return;
    const counters = testimonialsSection.querySelectorAll(".stat-number");
    let hasAnimated = false;
    const animateTestimonialCounters = () => {
      if (hasAnimated)
        return;
      hasAnimated = true;
      counters.forEach((counter) => {
        const target = parseInt(counter.getAttribute("data-count"));
        const duration = 2e3;
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
    const carousel = testimonialsSection.querySelector(".testimonials-carousel");
    if (carousel) {
      const track = carousel.querySelector(".testimonials-track");
      const slides = carousel.querySelectorAll(".testimonial-slide");
      const prevBtn = testimonialsSection.querySelector(".carousel-prev");
      const nextBtn = testimonialsSection.querySelector(".carousel-next");
      const indicators = testimonialsSection.querySelectorAll(".carousel-indicator");
      const currentSlideSpan = testimonialsSection.querySelector(".current-slide");
      let currentSlide = 0;
      const totalSlides = slides.length;
      const updateCarousel = () => {
        if (!track || !slides.length)
          return;
        track.style.transform = `translateX(-${currentSlide * 100}%)`;
        indicators.forEach((indicator, index) => {
          indicator.classList.toggle("bg-primary-600", index === currentSlide);
          indicator.classList.toggle("w-8", index === currentSlide);
          indicator.classList.toggle("bg-neutral-300", index !== currentSlide);
        });
        if (currentSlideSpan) {
          currentSlideSpan.textContent = currentSlide + 1;
        }
        if (prevBtn)
          prevBtn.disabled = currentSlide === 0;
        if (nextBtn)
          nextBtn.disabled = currentSlide === totalSlides - 1;
        if (prevBtn) {
          prevBtn.style.opacity = currentSlide === 0 ? "0.5" : "1";
          prevBtn.style.cursor = currentSlide === 0 ? "not-allowed" : "pointer";
        }
        if (nextBtn) {
          nextBtn.style.opacity = currentSlide === totalSlides - 1 ? "0.5" : "1";
          nextBtn.style.cursor = currentSlide === totalSlides - 1 ? "not-allowed" : "pointer";
        }
      };
      prevBtn == null ? void 0 : prevBtn.addEventListener("click", () => {
        if (currentSlide > 0) {
          currentSlide--;
          updateCarousel();
        }
      });
      nextBtn == null ? void 0 : nextBtn.addEventListener("click", () => {
        if (currentSlide < totalSlides - 1) {
          currentSlide++;
          updateCarousel();
        }
      });
      indicators.forEach((indicator, index) => {
        indicator.addEventListener("click", () => {
          currentSlide = index;
          updateCarousel();
        });
      });
      let startX = 0;
      let isDragging = false;
      track == null ? void 0 : track.addEventListener("touchstart", (e) => {
        startX = e.touches[0].clientX;
        isDragging = true;
      });
      track == null ? void 0 : track.addEventListener("touchmove", (e) => {
        if (!isDragging)
          return;
        e.preventDefault();
      });
      track == null ? void 0 : track.addEventListener("touchend", (e) => {
        if (!isDragging)
          return;
        isDragging = false;
        const endX = e.changedTouches[0].clientX;
        const diffX = startX - endX;
        if (Math.abs(diffX) > 50) {
          if (diffX > 0 && currentSlide < totalSlides - 1) {
            currentSlide++;
          } else if (diffX < 0 && currentSlide > 0) {
            currentSlide--;
          }
          updateCarousel();
        }
      });
      updateCarousel();
      let autoPlayInterval;
      const startAutoPlay = () => {
        autoPlayInterval = setInterval(() => {
          if (currentSlide < totalSlides - 1) {
            currentSlide++;
          } else {
            currentSlide = 0;
          }
          updateCarousel();
        }, 6e3);
      };
      const stopAutoPlay = () => {
        if (autoPlayInterval) {
          clearInterval(autoPlayInterval);
        }
      };
      startAutoPlay();
      carousel.addEventListener("mouseenter", stopAutoPlay);
      carousel.addEventListener("mouseleave", startAutoPlay);
    }
    const observer = new IntersectionObserver((entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          entry.target.classList.add("in-view");
          if (entry.target === testimonialsSection) {
            setTimeout(animateTestimonialCounters, 500);
          }
        }
      });
    }, { threshold: 0.1 });
    observer.observe(testimonialsSection);
    const testimonialCards = testimonialsSection.querySelectorAll(".testimonial-card");
    testimonialCards.forEach((card, index) => {
      setTimeout(() => {
        card.style.opacity = "1";
        card.style.transform = "translateY(0)";
      }, index * 150);
      card.addEventListener("mouseenter", () => {
        card.style.transform = "translateY(-12px) scale(1.02)";
        card.style.boxShadow = "0 25px 50px rgba(59, 130, 246, 0.15), 0 0 30px rgba(59, 130, 246, 0.1)";
        const stars = card.querySelectorAll(".rating svg");
        stars.forEach((star, starIndex) => {
          setTimeout(() => {
            star.style.transform = "scale(1.1) rotate(5deg)";
          }, starIndex * 50);
        });
      });
      card.addEventListener("mouseleave", () => {
        card.style.transform = "translateY(0) scale(1)";
        card.style.boxShadow = "";
        const stars = card.querySelectorAll(".rating svg");
        stars.forEach((star) => {
          star.style.transform = "";
        });
      });
    });
    const quoteSymbols = testimonialsSection.querySelectorAll(".quote-left, .quote-right");
    quoteSymbols.forEach((quote) => {
      quote.style.animation = "quoteFloat 6s ease-in-out infinite";
    });
  };
  initTestimonials();
  if (document.querySelector(".study-canada-page")) {
    document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
      anchor.addEventListener("click", function(e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute("href"));
        if (target) {
          target.scrollIntoView({
            behavior: "smooth",
            block: "start"
          });
        }
      });
    });
    const observerOptions = {
      threshold: 0.1,
      rootMargin: "0px 0px -50px 0px"
    };
    const observer = new IntersectionObserver((entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          entry.target.style.animationPlayState = "running";
          entry.target.classList.add("animate-visible");
        }
      });
    }, observerOptions);
    document.querySelectorAll(".animate-fade-up").forEach((el) => {
      el.style.animationPlayState = "paused";
      observer.observe(el);
    });
    document.querySelectorAll(".benefit-card, .college-card").forEach((card) => {
      card.addEventListener("mouseenter", function() {
        this.style.transform = "translateY(-8px)";
        this.style.transition = "all 0.3s ease";
      });
      card.addEventListener("mouseleave", function() {
        this.style.transform = "translateY(0)";
      });
    });
    window.addEventListener("scroll", function() {
      const scrolled = window.pageYOffset;
      const parallax = document.querySelectorAll(".maple-leaf");
      parallax.forEach((leaf, index) => {
        const speed = 0.5 + index * 0.1;
        const yPos = -(scrolled * speed);
        leaf.style.transform = `translateY(${yPos}px) rotate(${scrolled * 0.1}deg)`;
      });
    });
    document.querySelectorAll(".btn-primary, .btn-secondary").forEach((button) => {
      button.addEventListener("click", function(e) {
        const ripple = document.createElement("span");
        ripple.style.position = "absolute";
        ripple.style.borderRadius = "50%";
        ripple.style.background = "rgba(255, 255, 255, 0.6)";
        ripple.style.transform = "scale(0)";
        ripple.style.animation = "ripple 0.6s linear";
        ripple.style.left = e.clientX - this.offsetLeft + "px";
        ripple.style.top = e.clientY - this.offsetTop + "px";
        this.style.position = "relative";
        this.style.overflow = "hidden";
        this.appendChild(ripple);
        setTimeout(() => {
          ripple.remove();
        }, 600);
      });
    });
    const style = document.createElement("style");
    style.textContent = `
        @keyframes ripple {
            to {
                transform: scale(4);
                opacity: 0;
            }
        }
    `;
    document.head.appendChild(style);
    const processSteps = document.querySelectorAll(".step-number");
    const processObserver = new IntersectionObserver((entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          entry.target.style.transform = "scale(1.1)";
          setTimeout(() => {
            entry.target.style.transform = "scale(1)";
          }, 300);
        }
      });
    }, { threshold: 0.7 });
    processSteps.forEach((step) => {
      step.style.transition = "transform 0.3s ease";
      processObserver.observe(step);
    });
    document.querySelectorAll(".college-card").forEach((card) => {
      const programs = card.querySelector(".programs");
      card.addEventListener("mouseenter", function() {
        if (programs) {
          programs.style.maxHeight = programs.scrollHeight + "px";
          programs.style.transition = "max-height 0.3s ease";
        }
      });
      card.addEventListener("mouseleave", function() {
        if (programs) {
          programs.style.maxHeight = "";
        }
      });
    });
  }
});
//# sourceMappingURL=main.js.map
