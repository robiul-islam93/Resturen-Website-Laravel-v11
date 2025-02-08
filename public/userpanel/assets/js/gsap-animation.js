document.addEventListener("DOMContentLoaded", () => {
    // Register ScrollTrigger plugin
    gsap.registerPlugin(ScrollTrigger);

    // Animate each offer-card as it comes into view
    gsap.from(".offer-card", {
      scrollTrigger: {
        trigger: ".offers-section",
        start: "top 80%", // Trigger animation when section is 80% into the viewport
        toggleActions: "play none none none", // Play the animation on entry
      },
      opacity: 0, // Start with transparency
      y: 50, // Start slightly below its position
      duration: 1, // Animation duration
      stagger: 0.3, // Delay between each card animation
      ease: "power3.out", // Easing for smooth animation
    });

    // Animate the heading
    gsap.from(".offers-section h2", {
      scrollTrigger: {
        trigger: ".offers-section",
        start: "top 90%", // Trigger animation slightly earlier
      },
      opacity: 0, // Start with transparency
      y: -30, // Start slightly above its position
      duration: 0.8, // Animation duration
      ease: "power3.out", // Easing for smooth animation
    });
  });




//   kitchen page animation start

document.addEventListener("DOMContentLoaded", function () {
    gsap.from(".section-title", {
      opacity: 0,
      y: -50,
      duration: 1,
      stagger: 0.3,
      ease: "power2.out"
    });

    gsap.from(".card", {
      opacity: 0,
      scale: 0.8,
      duration: 1,
      stagger: 0.2,
      ease: "power3.out",
      scrollTrigger: {
        trigger: ".image-grid",
        start: "top 80%",
        toggleActions: "play none none none"
      }
    });

    gsap.from(".video-card", {
      opacity: 0,
      y: 50,
      duration: 1,
      stagger: 0.2,
      ease: "power3.out",
      scrollTrigger: {
        trigger: ".video-grid",
        start: "top 80%",
        toggleActions: "play none none none"
      }
    });

    document.querySelectorAll(".card").forEach((card) => {
      card.addEventListener("mouseenter", () => {
        gsap.to(card, { scale: 1.05, duration: 0.3, ease: "power1.out" });
      });
      card.addEventListener("mouseleave", () => {
        gsap.to(card, { scale: 1, duration: 0.3, ease: "power1.out" });
      });
    });

    document.querySelectorAll(".video-card").forEach((videoCard) => {
      videoCard.addEventListener("mouseenter", () => {
        gsap.to(videoCard, { scale: 1.05, duration: 0.3, ease: "power1.out" });
      });
      videoCard.addEventListener("mouseleave", () => {
        gsap.to(videoCard, { scale: 1, duration: 0.3, ease: "power1.out" });
      });
    });
  });



//   kitchen page animation end


// about us page animation start


document.addEventListener("DOMContentLoaded", function () {
    gsap.from(".story-content h2", {
      opacity: 0,
      y: -50,
      duration: 1,
      ease: "power2.out"
    });

    gsap.from(".story-content p", {
      opacity: 0,
      y: 30,
      duration: 1,
      stagger: 0.3,
      ease: "power3.out",
      scrollTrigger: {
        trigger: ".story-content",
        start: "top 80%",
        toggleActions: "play none none none"
      }
    });

    gsap.from(".story-image img", {
      opacity: 0,
      x: 50,
      duration: 1,
      ease: "power3.out",
      scrollTrigger: {
        trigger: ".story-image",
        start: "top 80%",
        toggleActions: "play none none none"
      }
    });
  });




  document.addEventListener("DOMContentLoaded", function () {
    gsap.from(".section-title", {
      opacity: 0,
      y: -30,
      duration: 0.8,
      ease: "power2.out"
    });

    gsap.from(".team-card", {
      opacity: 0,
      scale: 0.9,
      duration: 0.6,
      stagger: 0.2,
      ease: "power3.out",
      scrollTrigger: {
        trigger: ".team-grid",
        start: "top 85%",
        toggleActions: "play none none none"
      }
    });

    document.querySelectorAll(".team-card").forEach((card) => {
      card.addEventListener("mouseenter", () => {
        gsap.to(card, { scale: 1.08, duration: 0.2, ease: "power1.out" });
      });
      card.addEventListener("mouseleave", () => {
        gsap.to(card, { scale: 1, duration: 0.2, ease: "power1.out" });
      });
    });
  });


// about us page animation end

// blog page animation css start

gsap.registerPlugin(ScrollTrigger);

// blog-hero-page animation
gsap.from('.blog-hero-page-content', {
    opacity: 0,
    y: 100,
    duration: 1.8,
    ease: "power4.out"
});

// Cards animation
gsap.utils.toArray('.blog-card').forEach((card, i) => {
    gsap.from(card, {
        scrollTrigger: {
            trigger: card,
            start: "top bottom-=100",
            toggleActions: "play none none reverse"
        },
        opacity: 0,
        y: 50,
        duration: 1,
        delay: i * 0.1
    });
});




document.addEventListener("DOMContentLoaded", function () {
  gsap.from(".section-title", {
    opacity: 0,
    y: -30,
    duration: 0.8,
    ease: "power2.out"
  });

  gsap.from(".featured-item", {
    opacity: 0,
    y: 50,
    duration: 0.8,
    stagger: 0.2,
    ease: "power2.out",
    scrollTrigger: {
      trigger: ".featured-grid",
      start: "top 90%",
      toggleActions: "play none none none"
    }
  });

  document.querySelectorAll(".team-card").forEach((card) => {
    card.addEventListener("mouseenter", () => {
      gsap.to(card, { scale: 1.08, duration: 0.2, ease: "power1.out" });
    });
    card.addEventListener("mouseleave", () => {
      gsap.to(card, { scale: 1, duration: 0.2, ease: "power1.out" });
    });
  });
});


// blog page animation css end
