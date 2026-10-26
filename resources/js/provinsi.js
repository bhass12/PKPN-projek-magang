document.addEventListener("DOMContentLoaded", function () {

    const container = document.getElementById("provinceContainer");
    const loadMoreBtn = document.getElementById("loadMoreBtn");

    let allCards = Array.from(
        container.querySelectorAll(".province-card")
    );

    let isExpanded = false;


    /* ========================================
       ACAK CARD SAAT HALAMAN DI-REFRESH
    ======================================== */

    function shuffleCards() {

        // Fisher-Yates Shuffle
        for (let i = allCards.length - 1; i > 0; i--) {

            const randomIndex = Math.floor(Math.random() * (i + 1));

            [
                allCards[i],
                allCards[randomIndex]
            ] = [
                allCards[randomIndex],
                allCards[i]
            ];
        }


        // Masukkan kembali card ke container
        allCards.forEach(function (card) {
            container.appendChild(card);
        });


        // Sembunyikan semua card
        allCards.forEach(function (card) {
            card.style.display = "none";
        });


        // Tampilkan 8 card pertama
        allCards.slice(0, 8).forEach(function (card) {
            card.style.display = "block";
        });
    }


    /* Jalankan saat halaman pertama kali dibuka */
    shuffleCards();


    /* ========================================
       LIHAT LEBIH BANYAK
    ======================================== */

    loadMoreBtn.addEventListener("click", function () {

        isExpanded = !isExpanded;

        const buttonText =
            loadMoreBtn.querySelector("span:first-child");


        if (isExpanded) {

            // Tampilkan semua card
            allCards.forEach(function (card) {
                card.style.display = "block";
            });

            buttonText.textContent =
                "Tampilkan Lebih Sedikit";

            loadMoreBtn.classList.add("active");

        } else {

            // Sembunyikan semua card
            allCards.forEach(function (card) {
                card.style.display = "none";
            });

            // Tampilkan kembali 8 card pertama
            allCards.slice(0, 8).forEach(function (card) {
                card.style.display = "block";
            });

            buttonText.textContent =
                "Lihat Lebih Banyak";

            loadMoreBtn.classList.remove("active");

            // Scroll kembali ke section
            document.querySelector(".province-section")
                .scrollIntoView({
                    behavior: "smooth",
                    block: "start"
                });
        }

    });

});



/* ========================================
   COUNT UP ANIMATION
======================================== */

document.addEventListener("DOMContentLoaded", function () {

    const counters = document.querySelectorAll(".count-up");

    const duration = 1800;


    function animateCounter(counter) {

        const target = parseInt(
            counter.getAttribute("data-target")
        );

        let startTime = null;


        function updateCounter(currentTime) {

            if (!startTime) {
                startTime = currentTime;
            }

            const elapsed = currentTime - startTime;

            const progress = Math.min(
                elapsed / duration,
                1
            );


            /*
             * Ease Out
             * Membuat animasi lebih smooth
             */
            const easeOut =
                1 - Math.pow(1 - progress, 3);


            const currentValue =
                Math.floor(target * easeOut);


            counter.textContent =
                currentValue.toLocaleString("id-ID");


            if (progress < 1) {

                requestAnimationFrame(updateCounter);

            } else {

                counter.textContent =
                    target.toLocaleString("id-ID");

            }
        }


        requestAnimationFrame(updateCounter);
    }


    /* ========================================
       INTERSECTION OBSERVER
    ======================================== */

    const observer = new IntersectionObserver(
        function (entries, observer) {

            entries.forEach(function (entry) {

                if (entry.isIntersecting) {

                    animateCounter(entry.target);

                    /*
                     * Hanya jalankan sekali
                     */
                    observer.unobserve(entry.target);
                }

            });

        },
        {
            threshold: 0.5
        }
    );


    counters.forEach(function (counter) {

        observer.observe(counter);

    });

});




const slides = document.querySelectorAll(".slide");
const dots = document.querySelectorAll(".dot");

const nextButton = document.getElementById("next");
const prevButton = document.getElementById("prev");
const progress = document.getElementById("progress");

let currentSlide = 0;

const slideDuration = 4000;
let autoplay;


/* =========================
   SHOW SLIDE
========================== */

function showSlide(index) {

  slides.forEach((slide) => {
    slide.classList.remove("active");
  });

  dots.forEach((dot) => {
    dot.classList.remove("active");
  });

  slides[index].classList.add("active");
  dots[index].classList.add("active");

  currentSlide = index;

  resetProgress();
}


/* =========================
   NEXT SLIDE
========================== */

function nextSlide() {

  const next =
    (currentSlide + 1) % slides.length;

  showSlide(next);

}


/* =========================
   PREVIOUS SLIDE
========================== */

function previousSlide() {

  const previous =
    (currentSlide - 1 + slides.length)
    % slides.length;

  showSlide(previous);

}


/* =========================
   AUTOPLAY
========================== */

function startAutoplay() {

  clearInterval(autoplay);

  autoplay = setInterval(() => {

    nextSlide();

  }, slideDuration);

}


/* =========================
   PROGRESS BAR
========================== */

function resetProgress() {

  progress.style.transition = "none";
  progress.style.width = "0%";

  requestAnimationFrame(() => {

    requestAnimationFrame(() => {

      progress.style.transition =
        `width ${slideDuration}ms linear`;

      progress.style.width = "100%";

    });

  });

}


/* =========================
   NEXT BUTTON
========================== */

nextButton.addEventListener("click", () => {

  nextSlide();

  startAutoplay();

});


/* =========================
   PREVIOUS BUTTON
========================== */

prevButton.addEventListener("click", () => {

  previousSlide();

  startAutoplay();

});


/* =========================
   DOT NAVIGATION
========================== */

dots.forEach((dot, index) => {

  dot.addEventListener("click", () => {

    showSlide(index);

    startAutoplay();

  });

});


/* =========================
   START
========================== */

showSlide(0);

startAutoplay();