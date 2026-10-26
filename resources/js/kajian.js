/**
 * Kajian — count-up, reveal on scroll, filter katalog.
 */
document.addEventListener("DOMContentLoaded", () => {
    const reduced = window.matchMedia("(prefers-reduced-motion: reduce)").matches;

    /* ---------- Count-up untuk statistik repositori (sama seperti data-count-value) ---------- */
    const countElements = document.querySelectorAll("[data-count-value]");

    const setCount = (el, target) => {
        el.dataset.animated = "true";
        el.textContent = target;
    };

    if (reduced) {
        countElements.forEach(el => setCount(el, el.dataset.countValue));
    } else if ("IntersectionObserver" in window) {
        const countObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting && !entry.target.dataset.animated) {
                    entry.target.dataset.animated = "true";
                    const target = parseInt(entry.target.dataset.countValue, 10);
                    const duration = 1200;
                    const start = performance.now();

                    const animate = (now) => {
                        const progress = Math.min((now - start) / duration, 1);
                        const easeOutQuad = 1 - (1 - progress) * (1 - progress);
                        entry.target.textContent = Math.floor(target * easeOutQuad);

                        if (progress < 1) {
                            requestAnimationFrame(animate);
                        } else {
                            entry.target.textContent = target;
                        }
                    };

                    requestAnimationFrame(animate);
                    countObserver.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.5,
            rootMargin: "0px 0px -40px 0px",
        });

        countElements.forEach(el => countObserver.observe(el));
    } else {
        countElements.forEach(el => setCount(el, el.dataset.countValue));
    }

    /* ---------- Reveal on scroll (angka sama dengan beranda: 16px / 0.5s) ---------- */
    const reveals = document.querySelectorAll(".kj-reveal");

    if (!reduced && "IntersectionObserver" in window) {
        const delays = { d1: 60, d2: 120, d3: 180, d4: 240, d5: 300 };

        const reveal = (el) => {
            const offset = Object.entries(delays).find(([cls]) => el.classList.contains(cls));
            if (offset) el.style.transitionDelay = offset[1] + "ms";
            el.style.opacity = "1";
            el.style.transform = "translateY(0)";
            setTimeout(() => {
                el.style.transitionDelay = "0s";
            }, offset ? 900 : 0);
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    reveal(entry.target);
                    observer.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.12,
            rootMargin: "0px 0px -40px 0px",
        });

        reveals.forEach((el) => {
            el.style.opacity = "0";
            el.style.transform = "translateY(16px)";
            el.style.transition =
                "opacity 0.5s cubic-bezier(0.16, 1, 0.3, 1), transform 0.5s cubic-bezier(0.16, 1, 0.3, 1)";
            observer.observe(el);
        });
    } else {
        reveals.forEach((el) => {
            el.style.opacity = "1";
        });
    }

    /* ---------- Filter katalog: pencarian + kategori ---------- */
    const searchInput = document.getElementById("kajian-search-input");
    const chips = document.querySelectorAll(".kj-chip");
    const cards = document.querySelectorAll(".kj-card");
    const emptyMsg = document.getElementById("no-results-msg");
    const resetBtn = document.getElementById("reset-filter-btn");

    let currentFilter = "all";
    let searchQuery = "";

    function applyFilter() {
        let visibleCount = 0;

        cards.forEach((card) => {
            const category = (card.getAttribute("data-category") || "").toLowerCase();
            const title = card.querySelector(".kj-card-title").textContent.toLowerCase();
            const excerpt = card.querySelector(".kj-card-desc").textContent.toLowerCase();

            const matchesCategory = currentFilter === "all" || category === currentFilter;
            const matchesSearch =
                searchQuery === "" || title.includes(searchQuery) || excerpt.includes(searchQuery);

            if (matchesCategory && matchesSearch) {
                card.classList.remove("is-filtered-out");
                visibleCount++;
            } else {
                card.classList.add("is-filtered-out");
            }
        });

        emptyMsg.hidden = visibleCount !== 0;
    }

    chips.forEach((chip) => {
        chip.addEventListener("click", () => {
            chips.forEach((c) => {
                c.classList.toggle("is-active", c === chip);
                c.setAttribute("aria-pressed", c === chip ? "true" : "false");
            });
            currentFilter = chip.getAttribute("data-filter");
            applyFilter();
        });
    });

    if (searchInput) {
        searchInput.addEventListener("input", (e) => {
            searchQuery = e.target.value.trim().toLowerCase();
            applyFilter();
        });
    }

    if (resetBtn) {
        resetBtn.addEventListener("click", () => {
            if (searchInput) searchInput.value = "";
            searchQuery = "";
            currentFilter = "all";
            chips.forEach((c) => {
                c.classList.toggle("is-active", c.getAttribute("data-filter") === "all");
                c.setAttribute("aria-pressed", c.getAttribute("data-filter") === "all" ? "true" : "false");
            });
            applyFilter();
        });
    }
});
