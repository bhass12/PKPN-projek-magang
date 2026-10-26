/**
 * Beranda - Interactions & Scroll Reveal
 */
document.addEventListener("DOMContentLoaded", () => {
    const reduced = window.matchMedia("(prefers-reduced-motion: reduce)").matches;

    // Count-up animation for metrics
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
                        const current = Math.floor(target * easeOutQuad);
                        entry.target.textContent = current;
                        
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
            rootMargin: "0px 0px -40px 0px"
        });
        
        countElements.forEach(el => countObserver.observe(el));
    }
    
    // Smooth reveal on scroll
    const reveals = document.querySelectorAll(".ecosystem-card, .dest-showcase-card, .institutional-box, .pub-cta-card");
    
    if ("IntersectionObserver" in window) {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = "1";
                    entry.target.style.transform = "translateY(0)";
                    observer.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.12,
            rootMargin: "0px 0px -40px 0px"
        });

        reveals.forEach(el => {
            el.style.opacity = "0";
            el.style.transform = "translateY(16px)";
            el.style.transition = "opacity 0.5s cubic-bezier(0.16, 1, 0.3, 1), transform 0.5s cubic-bezier(0.16, 1, 0.3, 1)";
            observer.observe(el);
        });
    }

    // Footer: single authored scroll entrance
    const footer = document.querySelector(".footer-modern");
    if (footer) {
        footer.classList.add("is-hidden");

        if ("IntersectionObserver" in window) {
            const footerObserver = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add("footer-visible");
                        footerObserver.unobserve(entry.target);
                    }
                });
            }, {
                threshold: 0.05,
                rootMargin: "0px 0px -48px 0px"
            });

            footerObserver.observe(footer);
        }
    }
});