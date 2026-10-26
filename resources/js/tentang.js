/**
 * Tentang - Count Animation
 */
document.addEventListener("DOMContentLoaded", () => {
    const countElements = document.querySelectorAll("[data-count-value]");
    
    if ("IntersectionObserver" in window) {
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
});
