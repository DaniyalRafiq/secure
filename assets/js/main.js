// client Slick Slider

$(".client-slider").slick({
  dots: false,
  infinite: true,
  autoplay: true,
  arrows: false,
  autoplaySpeed: 0,
  speed: 7000,
  cssEase: "linear",
  slidesToShow: 5,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
        infinite: true,
        dots: false,
        arrows: false,
      },
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
      },
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
      },
    },
  ],
});

// customers slider

$(".customers-slider").slick({
  // centerMode: true,
  dots: false,
  arrows: false,
  // centerPadding: '70px',
  autoplay: true,
  autoplaySpeed: 1000,
  speed: 7000,
  slidesToShow: 2,
  responsive: [
    {
      breakpoint: 768,
      settings: {
        arrows: false,
        dots: false,
        autoplay: true,
        // centerMode: true,
        // centerPadding: '10px',
        slidesToShow: 1,
      },
    },
    {
      breakpoint: 480,
      settings: {
        arrows: false,
        // centerMode: true,
        dots: false,
        autoplay: true,
        // centerPadding: '10px',
        slidesToShow: 1,
      },
    },
  ],
});

// Get Quote Form validation

(function () {
  "use strict";
  var forms = document.querySelectorAll(".needs-validation");
  // Loop over them and prevent submission
  Array.prototype.slice.call(forms).forEach(function (form) {
    form.addEventListener(
      "submit",
      function (event) {
        if (!form.checkValidity()) {
          event.preventDefault();
          event.stopPropagation();
        }

        form.classList.add("was-validated");
      },
      false,
    );
  });
})();

$(document).ready(function () {
  $(".navdesktop").hover(
    function () {
      $(this).addClass("show");
      $(this).find(".dropdown-navdesktop").first().addClass("show");
    },
    function () {
      $(this).removeClass("show");
      $(this).find(".dropdown-navdesktop").first().removeClass("show");
    },
  );
});

// Sticky header

window.addEventListener("scroll", function () {
  var header = document.querySelector("header");
  header.classList.toggle("sticky", window.scrollY > 0);
});

// end Sticky header

document.addEventListener("DOMContentLoaded", () => {
  const counters = document.querySelectorAll(".counter-number");
  const animationDuration = 1500;

  const formatNumber = (num, decimals) => {
    return num.toLocaleString("en-US", {
      minimumFractionDigits: decimals,
      maximumFractionDigits: decimals,
    });
  };

  const runCounterAnimation = (counterElement) => {
    const target = +counterElement.getAttribute("data-count");
    const decimals = +counterElement.getAttribute("data-decimals");
    const suffix = counterElement.getAttribute("data-suffix") || "";
    let startTime = null;

    const updateCount = (currentTime) => {
      if (!startTime) startTime = currentTime;
      const progress = currentTime - startTime;
      let currentValue = Math.min(
        (progress / animationDuration) * target,
        target,
      );

      counterElement.innerText = formatNumber(currentValue, decimals) + suffix;

      if (progress < animationDuration) {
        requestAnimationFrame(updateCount);
      } else {
        counterElement.innerText = formatNumber(target, decimals) + suffix;
      }
    };

    requestAnimationFrame(updateCount);
  };

  const observer = new IntersectionObserver(
    (entries, observer) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          runCounterAnimation(entry.target);
          observer.unobserve(entry.target);
        }
      });
    },
    { threshold: 0.1 },
  );

  counters.forEach((counter) => observer.observe(counter));
});

document.addEventListener("DOMContentLoaded", () => {
  const counters = document.querySelectorAll(".ser-01 .counter-number");
  const animationDuration = 1500;

  const formatNumber = (num, decimals) => {
    return num.toLocaleString("en-US", {
      minimumFractionDigits: decimals,
      maximumFractionDigits: decimals,
    });
  };

  const runCounterAnimation = (counterElement) => {
    const target = +counterElement.getAttribute("data-count");
    const decimals = +counterElement.getAttribute("data-decimals");
    const suffix = counterElement.getAttribute("data-suffix") || "";
    let startTime = null;

    const updateCount = (currentTime) => {
      if (!startTime) startTime = currentTime;
      const progress = currentTime - startTime;
      let currentValue = Math.min(
        (progress / animationDuration) * target,
        target,
      );

      counterElement.innerText = formatNumber(currentValue, decimals) + suffix;

      if (progress < animationDuration) {
        requestAnimationFrame(updateCount);
      } else {
        counterElement.innerText = formatNumber(target, decimals) + suffix;
      }
    };

    requestAnimationFrame(updateCount);
  };

  const observer = new IntersectionObserver(
    (entries, observer) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          runCounterAnimation(entry.target);
          observer.unobserve(entry.target);
        }
      });
    },
    { threshold: 0.1 },
  );

  counters.forEach((counter) => observer.observe(counter));
});

document.addEventListener("DOMContentLoaded", () => {
  const videoCards = document.querySelectorAll(".video-testimonial-card");

  videoCards.forEach((card) => {
    const video = card.querySelector("video");

    if (!video) return;

    // Toggle video state on click
    card.addEventListener("click", () => {
      // Pause all other videos currently playing
      videoCards.forEach((otherCard) => {
        if (otherCard !== card) {
          const otherVideo = otherCard.querySelector("video");
          if (otherVideo && !otherVideo.paused) {
            otherVideo.pause();
          }
        }
      });

      if (video.paused) {
        video.play();
      } else {
        video.pause();
      }
    });

    // Listen for play/pause events directly on video to handle state UI
    video.addEventListener("play", () => {
      card.classList.add("is-playing");
    });

    video.addEventListener("pause", () => {
      card.classList.remove("is-playing");
    });

    video.addEventListener("ended", () => {
      card.classList.remove("is-playing");
    });
  });
});
document.addEventListener("DOMContentLoaded", () => {
  const faqItems = document.querySelectorAll(".faq-item");

  const updateCollapseHeight = (item, expand) => {
    const collapse = item.querySelector(".faq-collapse");
    if (!collapse) return;

    if (expand) {
      item.classList.add("active");
      collapse.style.maxHeight = collapse.scrollHeight + "px";
    } else {
      item.classList.remove("active");
      collapse.style.maxHeight = "0px";
    }
  };

  // Initialize state on page load for the active item
  faqItems.forEach((item) => {
    if (item.classList.contains("active")) {
      updateCollapseHeight(item, true);
    }
  });

  faqItems.forEach((item) => {
    const btn = item.querySelector(".faq-header-btn");

    btn.addEventListener("click", () => {
      const isActive = item.classList.contains("active");

      // Close all items first (Single Open Behavior)
      faqItems.forEach((otherItem) => {
        updateCollapseHeight(otherItem, false);
      });

      // If clicked item was not active, open it
      if (!isActive) {
        updateCollapseHeight(item, true);
      }
    });
  });
});

document.addEventListener("DOMContentLoaded", () => {
  const form = document.querySelector(".needs-validation");

  if (!form) return;

  form.addEventListener(
    "submit",
    (event) => {
      if (!form.checkValidity()) {
        event.preventDefault();
        event.stopPropagation();
      }

      form.classList.add("was-validated");
    },
    false,
  );
});
