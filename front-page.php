<?php get_header(); ?>
 <!-- Navbar Section -->
    <header class="navbar">
      <div class="container">
        <div class="logo" id="mainLogo">
       <img 
  src="<?php echo get_template_directory_uri(); ?>/assets/logo-blue.png" 
  id="mainLogo" 
  alt="Novel Office Logo" 
  loading="lazy"
/>

        </div>
        <!-- Hamburger Icon -->
        <div class="hamburger" id="hamburger"></div>
        <div class="links" id="navLinks">
          <div class="menu">
            <ul>
              <li><a href="#">Home</a></li>
              <li><a href="#">Solutions</a></li>
              <li><a href="#">Locations</a></li>
              <li><a href="#">Investments</a></li>
              <li><a href="#">Contact Us</a></li>
              <li><a href="#">More</a></li>
            </ul>
          </div>
        </div>
      </div>

      <main id="hero-section" class="hero-section">
       <img 
  id="heroImage" 
  src="<?php echo get_template_directory_uri(); ?>/assets/hero-bg.png" 
  alt="Hero Office" 
  loading="lazy"
/>

        <h1 class="hero-text">OFFICES<br />WITH<br />NOVEL</h1>
        <p class="scroll-indicator">Scroll to know more</p>
      </main>
    </header>

    <!-- Features Section -->
    <section class="features-section animate-on-scroll">
      <div class="features-container">
        <div class="feature-card feature-card-1">
          <h3>HASSLE - FREE & FASTEST !</h3>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
            eiusmod tempor incididunt ut labore et dolore magna aliqua.
          </p>
        </div>

        <div class="feature-card feature-card-2">
          <h3>CUSTOMIZABLE LAYOUTS</h3>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
            eiusmod tempor incididunt ut labore et dolore magna aliqua.
          </p>
        </div>

        <div class="feature-card feature-card-3">
          <h3>FULLY FURNISHED</h3>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
            eiusmod tempor incididunt ut labore et dolore magna aliqua.
          </p>
        </div>

        <div class="feature-card feature-card-4">
          <h3>MANAGED 24X7</h3>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
            eiusmod tempor incididunt ut labore et dolore magna aliqua.
          </p>
        </div>
      </div>
    </section>

    <!-- Trusted-Companies-Section -->
    <section class="next-section">
      <div class="container-trusted">
        <div class="trusted-companies">
          <h1 class="title">Trusted by<br />Leading Companies</h1>
          <p class="description">
            We are proud to be the trusted partner of businesses across
            industries. Join the many clients who rely on us for a productive
            and inspiring workspace.
          </p>
        </div>
        <div class="logos">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/trusted-comp-logo/Group 256.svg" alt="stellapps" />
<img src="<?php echo get_template_directory_uri(); ?>/assets/trusted-comp-logo/Group 257.svg" alt="Joules to Watts" />
<img src="<?php echo get_template_directory_uri(); ?>/assets/trusted-comp-logo/Group 258.png" alt="Flatworld Solutions" />

          <img src="<?php echo get_template_directory_uri(); ?>/assets/trusted-comp-logo/Group 259.svg" alt="Hitachi" />
<img src="<?php echo get_template_directory_uri(); ?>/assets/trusted-comp-logo/Group 260.svg" alt="Indiamart" />
<img src="<?php echo get_template_directory_uri(); ?>/assets/trusted-comp-logo/Group 261.svg" alt="Nasscom" />
<img src="<?php echo get_template_directory_uri(); ?>/assets/trusted-comp-logo/Group 262.png" alt="Unacademy" />

          <img src="<?php echo get_template_directory_uri(); ?>/assets/trusted-comp-logo/Group 263.svg" alt="OLX Autos" />
<img src="<?php echo get_template_directory_uri(); ?>/assets/trusted-comp-logo/Group 264.svg" alt="CarDekho" />
<img src="<?php echo get_template_directory_uri(); ?>/assets/trusted-comp-logo/Group 265.svg" alt="Qatar Airways" />
<img src="<?php echo get_template_directory_uri(); ?>/assets/trusted-comp-logo/Group 266.svg" alt="AirAsia" />
<img src="<?php echo get_template_directory_uri(); ?>/assets/trusted-comp-logo/Pepe-Jeans-Logo 1.svg" alt="Pepe Jeans" />

        </div>
      </div>
    </section>
    <!-- Best-Office-Spaces-Section -->
    <section class="next-section">
      <div class="spacer"></div>
      <section class="pin-section">
        <div class="office-spaces" id="pinnedBlock">
          <div class="best-office-container">
            <h1 class="main-heading">
              Want to know<br />where the Best<br />Office Spaces are?
            </h1>
          </div>

          <!-- Image animation -->
          <div class="image-container">
           <img
  src="<?php echo get_template_directory_uri(); ?>/assets/office-images/Frame 427319300.png"
  class="reveal-image img-1"
  alt="Office space 1"
  loading="lazy"
/>
<img
  src="<?php echo get_template_directory_uri(); ?>/assets/office-images/Frame 427319296.png"
  class="reveal-image img-2"
  alt="Office space 2"
  loading="lazy"
/>
<img
  src="<?php echo get_template_directory_uri(); ?>/assets/office-images/Frame 427319302 1.svg"
  class="reveal-image img-3"
  alt="Office space 3"
  loading="lazy"
/>

          </div>

          <!-- Bubbles -->
          <div class="question-bubble bubble-1 left-arrow">
            Coworking spaces available in Novel Office?
          </div>
          <div class="question-bubble bubble-2 right-arrow">
            Best office space with 24X7 service?
          </div>
          <div class="question-bubble bubble-3 left-arrow">
            What is the best office space in Bangalore?
          </div>
          <div class="question-bubble bubble-4 right-arrow">
            Where is the best coworking space in Bangalore?
          </div>
        </div>

        <!-- Animation steps -->
        <div class="step" data-index="0"></div>
        <div class="step" data-index="1"></div>
        <div class="step" data-index="2"></div>
      </section>
      <div class="spacer"></div>
    </section>

    <!-- All-Office-Image-Layout -->
    <section class="next-section">
      <div
        class="container-alloffice animate-on-scroll"
        aria-label="Six office images overlapping with location names"
      >
        <div
          class="cards card1"
          role="group"
          aria-labelledby="title1 subtitle1"
        >
          <img
  src="<?php echo get_template_directory_uri(); ?>/assets/office-images/Frame 427319296 1.png"
  alt="Modern office shelves with decorative objects and plants in Queens Road, Bangalore office"
  loading="lazy"
/>
          <div class="info">
            <div id="title1" class="card-title">NOVEL OFFICE QUEENS</div>
            <div id="subtitle1" class="subtitle">Queens Road, Bangalore</div>
          </div>
        </div>

        <div
          class="cards card2"
          role="group"
          aria-labelledby="title2 subtitle2"
        >
          <img
  src="<?php echo get_template_directory_uri(); ?>/assets/office-images/Frame 427319296.png"
  alt="Workspace ceiling with grid lights and panels in Whitefield, Bangalore workhub office"
  loading="lazy"
/>
          <div class="info">
            <div id="title2" class="card-title">NOVEL OFFICE WORKHUB</div>
            <div id="subtitle2" class="subtitle">Whitefield, Bangalore</div>
          </div>
        </div>

        <div
          class="cards card3"
          role="group"
          aria-labelledby="title3 subtitle3"
        >
          <img
  src="<?php echo get_template_directory_uri(); ?>/assets/office-images/Frame 427319297.svg"
  alt="Office interior with green blue seating and black chairs in HSR Layout, Bangalore tech park"
  loading="lazy"
/>
          <div class="info">
            <div id="title3" class="card-title">NOVEL TEC</div>
            <div id="subtitle3" class="subtitle">HSR Layout, Bangalore</div>
          </div>
        </div>

        <div
          class="cards card4"
          role="group"
          aria-labelledby="title4 subtitle4"
        >
          <img
  src="<?php echo get_template_directory_uri(); ?>/assets/office-images/Frame 427319300.png"
  alt="Modern office workspace in Marathahalli, Bangalore tech park"
  loading="lazy"
/>
          <div class="info">
            <div id="title4" class="card-title">NOVEL MSR TECH PARK</div>
            <div id="subtitle4" class="subtitle">Marathahalli, Bangalore</div>
          </div>
        </div>

        <div
          class="cards card5"
          role="group"
          aria-labelledby="title5 subtitle5"
        >
          <img
  src="<?php echo get_template_directory_uri(); ?>/assets/office-images/Frame 427319302 1.svg"
  alt="Bright modern office desks with computers and red chairs on MG Road, Bangalore"
  loading="lazy"
/>
          <div class="info">
            <div id="title5" class="card-title">NOVEL OFFICE CENTRAL</div>
            <div id="subtitle5" class="subtitle">MG Road, Bangalore</div>
          </div>
        </div>

        <div
          class="cards card6"
          role="group"
          aria-labelledby="title6 subtitle6"
        >
          <img
  src="<?php echo get_template_directory_uri(); ?>/assets/office-images/sdfsdfsdf 1.svg"
  alt="Office workspace with black chairs and brown wood desk in Whitefield, Bangalore"
  loading="lazy"
/>

          <div class="info">
            <div id="title6" class="card-title">NOVEL BRIC</div>
            <div id="subtitle6" class="subtitle">Whitefield, Bangalore</div>
          </div>
        </div>
      </div>
    </section>
    <!-- Gallery-Section -->
    <section class="next-section">
      <section class="gallery animate-on-scroll">
        <div class="gallery-sentinel"></div>
        <h2>Best Rental office Space in Bangalore</h2>
        <p>
          We provide value-for-money services with top-notch amenities, 24/7 IT
          support and security service along with options from fully furnished
          to co-working and managed offices on rent-in various prime locations
          in Bangalore.
        </p>
        <div class="buttons">
          <button>Explore Locations</button>
          <button>Explore Gallery</button>
        </div>
        <div class="gallery-cards">
          <div class="gallery-card">
            <img
             src="<?php echo get_template_directory_uri(); ?>/assets/office-images/sdfsdfsdf 1.svg"
              alt="Novel Office Queens"
               loading="lazy"
            />
            <div class="card-overlay">
              <div class="card-text">
                <h4>NOVEL OFFICE QUEENS</h4>
                <p>Queens Road, Bangalore</p>
                <span class="view-text">View →</span>
              </div>
            </div>
          </div>

          <div class="gallery-card offset">
            <img
              src="<?php echo get_template_directory_uri(); ?>/assets/office-images/Frame 427319296 1.png"
              alt="Novel Office Central"
               loading="lazy"
            />
            <div class="card-overlay">
              <div class="card-text">
                <h4>Novel Office Central</h4>
                <p>MG Road, Bangalore</p>
                <span class="view-text">View →</span>
              </div>
            </div>
          </div>

          <div class="gallery-card">
            <img
           src="<?php echo get_template_directory_uri(); ?>/assets/office-images/Frame 427319296.png"
              alt="Novel MSR Tech Park"
               loading="lazy"
            />
            <div class="card-overlay">
              <div class="card-text">
                <h4>Novel MSR Tech Park</h4>
                <p>Marathahalli, Bangalore</p>
                <span class="view-text">View →</span>
              </div>
            </div>
          </div>

          <div class="gallery-card offset">
            <img
            src="<?php echo get_template_directory_uri(); ?>/assets/office-images/Frame 427319297.svg"
              alt="Novel Brigade Tech Park"
               loading="lazy"
            />
            <div class="card-overlay">
              <div class="card-text">
                <h4>NOVEL BRIGADE TECH PARK</h4>
                <p>Whitefield, Bangalore</p>
                <span class="view-text">View →</span>
              </div>
            </div>
          </div>

          <div class="gallery-card">
            <img
            src="<?php echo get_template_directory_uri(); ?>/assets/office-images/Frame 427319300.png"
              alt="Novel Office Workhub"
               loading="lazy"
            />
            <div class="card-overlay">
              <div class="card-text">
                <h4>NOVEL OFFICE WORKHUB</h4>
                <p>Whitefield, Bangalore</p>
                <span class="view-text">View →</span>
              </div>
            </div>
          </div>
        </div>
      </section>
    </section>

<script>
  document.addEventListener("DOMContentLoaded", function () {
    const logo = document.getElementById("mainLogo");
    if (!logo) {
      console.warn("Logo element not found!");
      return;
    }

    const originalLogo = logo.getAttribute("src");
    const scrollLogo = logo.getAttribute("data-scroll-logo");

    window.addEventListener("scroll", function () {
      if (window.scrollY > 50) {
        logo.setAttribute("src", scrollLogo);
      } else {
        logo.setAttribute("src", originalLogo);
      }
    });
  });


  // const cards = document.querySelectorAll('.card');
  // function revealCards() {
  //   cards.forEach(card => {
  //     const rect = card.getBoundingClientRect();
  //     if (rect.top < window.innerHeight * 0.85) {
  //       card.style.opacity = '1';
  //       card.style.transform = 'translateY(0)';
  //     }
  //   });
  // }

  // window.addEventListener('scroll', revealCards);
  // window.addEventListener('load', revealCards);

  document.addEventListener('DOMContentLoaded', () => {
    const navbar = document.querySelector('.navbar');
    const heroSection = document.getElementById('hero-section');
    const contentBoxesSection = document.getElementById('content-boxes');
    const scrollThreshold = 100; // Pixels from top to trigger animation

    function handleScroll() {
        if (window.scrollY > scrollThreshold) {
            document.body.classList.add('scrolled');
            // If you want more granular control or staggered animations:
            // contentBoxesSection.querySelectorAll('.content-box').forEach((box, index) => {
            //     box.style.transitionDelay = `${index * 0.1}s`;
            //     box.classList.add('active'); // Add a class to trigger opacity/transform
            // });
        } else {
            document.body.classList.remove('scrolled');
            // contentBoxesSection.querySelectorAll('.content-box').forEach(box => {
            //     box.classList.remove('active');
            // });
        }
    }

    // Optional: Debounce the scroll event for performance
    let scrollTimeout;
    window.addEventListener('scroll', () => {
        clearTimeout(scrollTimeout);
        scrollTimeout = setTimeout(handleScroll, 10); // Adjust delay as needed
    });

    // Initial check in case the page loads already scrolled
    handleScroll();
});
</script>

<?php get_footer(); ?>
