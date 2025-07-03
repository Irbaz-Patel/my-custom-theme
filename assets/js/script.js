document.addEventListener("DOMContentLoaded", function () {
  const hamburger = document.getElementById("hamburger");
  const navLinks = document.getElementById("navLinks");

  hamburger.addEventListener("click", () => {
    navLinks.classList.toggle("active");
    hamburger.classList.toggle("active"); // Toggle icon
  });

  // Optional: Close menu when a nav link is clicked
  document.querySelectorAll(".links a").forEach((link) => {
    link.addEventListener("click", () => {
      navLinks.classList.remove("active");
      hamburger.classList.remove("active");
    });
  });
});
window.addEventListener("scroll", function () {
  const navbarContainer = document.querySelector(".container");
  if (window.scrollY > 10) {
    navbarContainer.classList.add("scrolled");
  } else {
    navbarContainer.classList.remove("scrolled");
  }
});

const heroImage = document.getElementById("heroImage");
const scrollIndicator = document.querySelector(".scroll-indicator");

const heroSection = document.getElementById("hero-section");
const featuresSection = document.querySelector(".features-section");
const nextSections = document.querySelectorAll(".next-section");

const updateHeroImage = () => {
  const heroRect = heroSection.getBoundingClientRect();
  const featuresRect = featuresSection.getBoundingClientRect();
  const windowHeight = window.innerHeight;

  // 👇 Hide scroll-indicator as soon as user starts scrolling
  if (window.scrollY > 10) {
    scrollIndicator.classList.add("hide");
  } else {
    scrollIndicator.classList.remove("hide");
  }

  // 👇 Hero section visible → full image
  if (heroRect.top < windowHeight && heroRect.bottom > 0) {
    heroImage.classList.remove("shrink", "hidden");
  }

  // 👇 When 30% of features section enters → shrink
  if (featuresRect.top < windowHeight * 0.7 && featuresRect.bottom > 0) {
    heroImage.classList.add("shrink");
    heroImage.classList.remove("hidden");
  }

  // 👇 Hide image when user scrolls far down
  if (featuresRect.bottom < 0) {
    heroImage.classList.add("hidden");
    heroImage.classList.remove("shrink");
  }
};

// Attach scroll listener
window.addEventListener("scroll", updateHeroImage);

document.addEventListener("DOMContentLoaded", function () {
  // Scroll animation observer for general sections
  const observerOptions = {
    threshold: 0.1,
    rootMargin: "0px 0px -50px 0px",
  };

  const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        entry.target.classList.add("visible");
      }
    });
  }, observerOptions);

  // Observe all sections with animate-on-scroll class
  document.querySelectorAll(".animate-on-scroll").forEach((section) => {
    observer.observe(section);
  });
  const cardObserver = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      const cards = entry.target.querySelectorAll(".cards");

      if (entry.isIntersecting) {
        // Show cards when section comes into view
        cards.forEach((card, index) => {
          setTimeout(() => {
            card.classList.add("card-visible");
          }, index * 100);
        });
      } else {
        // Hide cards when section leaves viewport (reverse animation)
        cards.forEach((card) => {
          card.classList.remove("card-visible");
        });
      }
    });
  }, observerOptions);

  const officeLayoutSection = document.querySelector(".container-alloffice");
  if (officeLayoutSection) {
    cardObserver.observe(officeLayoutSection);
  }

  // Best Office Spaces Pinning Animation
  const pinSection = document.querySelector(".pin-section");
  const officeSpaces = document.querySelector(".office-spaces");
  const images = document.querySelectorAll(".reveal-image");
  const bubbles = document.querySelectorAll(".question-bubble");

  if (pinSection && officeSpaces) {
    let isPinned = false;
    let currentImageIndex = 0;

    function handleScroll() {
      const rect = pinSection.getBoundingClientRect();
      const sectionHeight = pinSection.offsetHeight;
      const windowHeight = window.innerHeight;

      // Pin when section reaches top
      if (rect.top <= 0 && rect.bottom > windowHeight) {
        if (!isPinned) {
          isPinned = true;
          officeSpaces.classList.add("pinned");

          // Show bubbles when pinned
          bubbles.forEach((bubble, index) => {
            setTimeout(() => {
              bubble.classList.add("visible");
            }, index * 200);
          });
        }

        // Calculate progress through the pinned section
        const progress = Math.abs(rect.top) / (sectionHeight - windowHeight);
        const clampedProgress = Math.max(0, Math.min(1, progress));

        // Update image index based on scroll progress
        const newImageIndex = Math.floor(clampedProgress * images.length);
        const targetIndex = Math.min(newImageIndex, images.length - 1);

        if (targetIndex !== currentImageIndex) {
          currentImageIndex = targetIndex;
          updateImages();
        }
      } else {
        if (isPinned) {
          isPinned = false;
          officeSpaces.classList.remove("pinned");

          // Hide bubbles when not pinned
          bubbles.forEach((bubble) => {
            bubble.classList.remove("visible");
          });
        }
        if (rect.top > 0 || rect.bottom < windowHeight) {
          currentImageIndex = -1;
          updateImages();
        }
      }
    }

    function updateImages() {
      images.forEach((img, index) => {
        if (index <= currentImageIndex) {
          img.classList.add("visible");
        } else {
          img.classList.remove("visible");
        }
      });
    }

    // Throttle scroll events for better performance
    let ticking = false;
    function throttledScrollHandler() {
      if (!ticking) {
        requestAnimationFrame(() => {
          handleScroll();
          ticking = false;
        });
        ticking = true;
      }
    }

    window.addEventListener("scroll", throttledScrollHandler);

    // Initial call to set up correct state
    handleScroll();
  }
  const galleryCards = document.querySelectorAll(".gallery-card");

  galleryCards.forEach((card) => {
    card.addEventListener("mouseenter", () => {
      if (window.innerWidth > 768) {
        card.style.transform = card.classList.contains("offset")
          ? "translateY(70px) scale(1.05)"
          : "translateY(0) scale(1.05)";
      }
    });

    card.addEventListener("mouseleave", () => {
      if (window.innerWidth > 768) {
        card.style.transform = card.classList.contains("offset")
          ? "translateY(70px) scale(1)"
          : "translateY(0) scale(1)";
      }
    });
  });

  // Smooth scroll for navigation links
  document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
    anchor.addEventListener("click", function (e) {
      e.preventDefault();
      const target = document.querySelector(this.getAttribute("href"));
      if (target) {
        target.scrollIntoView({
          behavior: "smooth",
          block: "start",
        });
      }
    });
  });

  // Add floating animation to question bubbles when visible
  function addFloatingAnimation() {
    const style = document.createElement("style");
    style.textContent = `
            .question-bubble.visible {
                animation: float 6s ease-in-out infinite;
            }
            
            @keyframes float {
                0%, 100% {
                    transform: translateY(0px);
                }
                50% {
                    transform: translateY(-10px);
                }
            }
            
            .bubble-1.visible { animation-delay: 0s; }
            .bubble-2.visible { animation-delay: 1.5s; }
            .bubble-3.visible { animation-delay: 3s; }
            .bubble-4.visible { animation-delay: 4.5s; }
        `;
    document.head.appendChild(style);
  }

  addFloatingAnimation();
});

document.addEventListener("DOMContentLoaded", function () {
  const observer = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          entry.target.classList.add("visible");
          observer.unobserve(entry.target); // animate only once
        }
      });
    },
    {
      threshold: 0.2, // Trigger when 20% is visible
    }
  );

  const container = document.querySelector(".container-trusted");
  if (container) {
    observer.observe(container);
  }
});
