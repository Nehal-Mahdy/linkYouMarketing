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
  const navLinks = document.querySelectorAll(".nav-link");
  const mobileNavLinks = document.querySelectorAll(".mobile-nav-link");
  const footerLinks = document.querySelectorAll(".footer-link");
  const sections = document.querySelectorAll("section");
  const navbar = document.querySelector("nav");
  const navbarHeight = navbar ? navbar.offsetHeight + 20 : 100;
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
  initPortfolioFunctionality();
});
function initPortfolioFunctionality() {
  const filterButtons = document.querySelectorAll(".filter-btn");
  const portfolioCards = document.querySelectorAll(".portfolio-card");
  if (filterButtons.length > 0 && portfolioCards.length > 0) {
    filterButtons.forEach((button) => {
      button.addEventListener("click", function() {
        const filter = this.getAttribute("data-filter");
        filterButtons.forEach((btn) => btn.classList.remove("active"));
        this.classList.add("active");
        portfolioCards.forEach((card) => {
          if (filter === "all" || card.classList.contains(filter)) {
            card.classList.remove("hidden");
            card.style.display = "block";
          } else {
            card.classList.add("hidden");
            card.style.display = "none";
          }
        });
      });
    });
  }
  function animateCounter(element) {
    const target = parseInt(element.getAttribute("data-target"));
    const duration = 2e3;
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
  const observerOptions = {
    threshold: 0.1,
    rootMargin: "0px 0px -50px 0px"
  };
  const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        entry.target.style.animationPlayState = "running";
        if (entry.target.classList.contains("stats-counter")) {
          animateCounter(entry.target);
        }
      }
    });
  }, observerOptions);
  document.querySelectorAll('[class*="animate-"]').forEach((el) => {
    if (el.style.animationPlayState !== "running") {
      el.style.animationPlayState = "paused";
      observer.observe(el);
    }
  });
  document.querySelectorAll(".stats-counter").forEach((el) => {
    observer.observe(el);
  });
}
function initTestimonialCarousel() {
  const carousel = document.querySelector(".testimonials-carousel");
  if (!carousel)
    return;
  const track = carousel.querySelector(".testimonials-track");
  const prevBtn = document.querySelector(".carousel-prev");
  const nextBtn = document.querySelector(".carousel-next");
  const indicators = document.querySelectorAll(".carousel-indicator");
  const totalSlides = parseInt(carousel.dataset.total);
  let currentPage = 0;
  function updateCarousel() {
    const translateX = -currentPage * 100;
    track.style.transform = `translateX(${translateX}%)`;
    indicators.forEach((indicator, index) => {
      indicator.classList.remove("active", "bg-[#3773C9]");
      indicator.classList.add("bg-gray-300");
      if (index === currentPage) {
        indicator.classList.add("active", "bg-[#3773C9]");
        indicator.classList.remove("bg-gray-300");
      }
    });
    if (prevBtn) {
      prevBtn.style.opacity = currentPage === 0 ? "0.5" : "1";
      prevBtn.style.pointerEvents = currentPage === 0 ? "none" : "auto";
    }
    if (nextBtn) {
      nextBtn.style.opacity = currentPage === totalSlides - 1 ? "0.5" : "1";
      nextBtn.style.pointerEvents = currentPage === totalSlides - 1 ? "none" : "auto";
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
  if (nextBtn)
    nextBtn.addEventListener("click", nextSlide);
  if (prevBtn)
    prevBtn.addEventListener("click", prevSlide);
  indicators.forEach((indicator, index) => {
    indicator.addEventListener("click", () => goToSlide(index));
  });
  let autoPlayInterval;
  function startAutoPlay() {
    autoPlayInterval = setInterval(() => {
      if (currentPage < totalSlides - 1) {
        nextSlide();
      } else {
        currentPage = 0;
        updateCarousel();
      }
    }, 5e3);
  }
  function stopAutoPlay() {
    clearInterval(autoPlayInterval);
  }
  startAutoPlay();
  if (carousel) {
    carousel.addEventListener("mouseenter", stopAutoPlay);
    carousel.addEventListener("mouseleave", startAutoPlay);
  }
  window.addEventListener("resize", () => {
    if (currentPage >= totalSlides) {
      currentPage = totalSlides - 1;
    }
    updateCarousel();
  });
  let startX = 0;
  let isDragging = false;
  if (track) {
    track.addEventListener("touchstart", (e) => {
      startX = e.touches[0].clientX;
      isDragging = true;
      stopAutoPlay();
    });
    track.addEventListener("touchmove", (e) => {
      if (!isDragging)
        return;
      e.preventDefault();
    });
    track.addEventListener("touchend", (e) => {
      if (!isDragging)
        return;
      const endX = e.changedTouches[0].clientX;
      const diff = startX - endX;
      if (Math.abs(diff) > 50) {
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
  document.addEventListener("keydown", (e) => {
    if (carousel && carousel.querySelector(":hover")) {
      if (e.key === "ArrowLeft") {
        prevSlide();
      } else if (e.key === "ArrowRight") {
        nextSlide();
      }
    }
  });
  updateCarousel();
}
initPortfolioFunctionality();
initTestimonialCarousel();
//# sourceMappingURL=main.js.map
