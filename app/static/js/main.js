/* ══════════════════════════════════════════════════════════════
   Third Planet Foundation — Main JS
   ══════════════════════════════════════════════════════════════ */

const reducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

document.addEventListener('DOMContentLoaded', () => {
    // ── Sticky header ──────────────────────────────────────────
    const header = document.getElementById('site-header');
    if (header) {
        window.addEventListener('scroll', () => {
            header.classList.toggle('scrolled', window.scrollY > 50);
        }, { passive: true });
    }

    // ── Mobile nav toggle ──────────────────────────────────────
    const navToggle = document.getElementById('nav-toggle');
    const mainNav = document.getElementById('main-nav');
    if (navToggle && mainNav) {
        navToggle.addEventListener('click', () => {
            mainNav.classList.toggle('open');
            navToggle.classList.toggle('active');
        });

        // Close on outside click
        document.addEventListener('click', (e) => {
            if (!mainNav.contains(e.target) && !navToggle.contains(e.target)) {
                mainNav.classList.remove('open');
                navToggle.classList.remove('active');
            }
        });

        // Mobile dropdown toggle
        document.querySelectorAll('.has-dropdown > a').forEach(link => {
            link.addEventListener('click', (e) => {
                if (window.innerWidth <= 768) {
                    e.preventDefault();
                    link.parentElement.classList.toggle('open');
                }
            });
        });
    }

    // ── Back to top ────────────────────────────────────────────
    const backToTop = document.getElementById('back-to-top');
    if (backToTop) {
        window.addEventListener('scroll', () => {
            backToTop.classList.toggle('visible', window.scrollY > 400);
        }, { passive: true });
        backToTop.addEventListener('click', () => {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
    }

    // ── Hero crossfade carousel ────────────────────────────────
    const heroBg = document.getElementById('hero-bg');
    if (heroBg && !reducedMotion) {
        let images;
        try { images = JSON.parse(heroBg.dataset.images); } catch (_) {}
        if (images && images.length > 1) {
            // Preload all carousel images
            images.slice(1).forEach(src => { const img = new Image(); img.src = src; });
            let idx = 0;
            setInterval(() => {
                idx = (idx + 1) % images.length;
                heroBg.style.opacity = '0';
                setTimeout(() => {
                    heroBg.style.backgroundImage = `url('${images[idx]}')`;
                    heroBg.style.opacity = '0.45';
                }, 900);
            }, 6000);
        }
    }

    // ── Scroll-reveal animation ────────────────────────────────
    const fadeEls = document.querySelectorAll('.fade-in, .fade-in-left, .fade-in-right, .fade-in-scale');
    if (fadeEls.length && 'IntersectionObserver' in window) {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.12 });

        fadeEls.forEach(el => observer.observe(el));
    }

    // ── Gallery filter ─────────────────────────────────────────
    const filterBtns = document.querySelectorAll('.filter-btn');
    const galleryItems = document.querySelectorAll('.gallery-item');

    filterBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            const filter = btn.dataset.filter;

            filterBtns.forEach(b => b.classList.remove('active'));
            btn.classList.add('active');

            galleryItems.forEach(item => {
                if (filter === 'all' || item.dataset.category === filter) {
                    item.style.display = '';
                    item.style.animation = 'fadeInUp 0.4s ease forwards';
                } else {
                    item.style.display = 'none';
                }
            });
        });
    });

    // ── Counter animation (RAF + ease-out cubic) ───────────────

    /**
     * Formats a counter value for display.
     * Numbers >= 1,000,000 are abbreviated to "1M", "2M", etc. to avoid
     * locale-specific grouping bugs (e.g. Indian locale outputs "10,00,000").
     * All other numbers use en-US locale for consistent comma-grouping.
     */
    function formatCounterValue(value) {
        if (value >= 1000000) {
            // Show whole millions; decimals only when animating through sub-million
            const millions = value / 1000000;
            return (Number.isInteger(millions) ? millions : millions.toFixed(1)) + 'M';
        }
        return value.toLocaleString('en-US');
    }

    const counters = document.querySelectorAll('[data-count]');
    if (counters.length && 'IntersectionObserver' in window) {
        const counterObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (!entry.isIntersecting) return;
                const el = entry.target;
                const target = parseInt(el.dataset.count, 10);
                const suffix = el.dataset.suffix || '';

                // Respect reduced motion — show final value immediately
                if (reducedMotion) {
                    el.textContent = formatCounterValue(target) + suffix;
                    counterObserver.unobserve(el);
                    return;
                }

                const baseDuration = 1800;
                const magnitude = Math.log10(Math.max(target, 1));
                const duration = Math.min(baseDuration + (magnitude - 2) * 600, 4000);
                const start = performance.now();

                function tick(now) {
                    const elapsed = now - start;
                    const progress = Math.min(elapsed / duration, 1);
                    // Ease-out cubic: decelerates toward the end
                    const eased = 1 - Math.pow(1 - progress, 3);
                    const current = Math.floor(eased * target);
                    el.textContent = formatCounterValue(current) + suffix;
                    if (progress < 1) requestAnimationFrame(tick);
                }
                requestAnimationFrame(tick);
                counterObserver.unobserve(el);
            });
        }, { threshold: 0.4 });

        counters.forEach(el => counterObserver.observe(el));
    }

    // ── FAQ Accordion ──────────────────────────────────────────
    document.querySelectorAll('.faq-question').forEach(q => {
        q.addEventListener('click', () => {
            const item = q.closest('.faq-item');
            item.classList.toggle('open');
        });
    });

    // ── Presence Tabs ────────────────────────────────────────────
    const tabBtns = document.querySelectorAll('.presence-tab-btn');
    const tabPanels = document.querySelectorAll('.presence-tab-panel');

    tabBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            const tab = btn.dataset.tab;

            tabBtns.forEach(b => b.classList.remove('active'));
            btn.classList.add('active');

            tabPanels.forEach(panel => {
                panel.classList.remove('active');
                if (panel.id === 'tab-' + tab) {
                    panel.classList.add('active');
                }
            });
        });
    });

    // ── Contact form loading state ─────────────────────────────
    const contactForm = document.querySelector('form[action="/contact"]');
    if (contactForm) {
        const submitBtn = contactForm.querySelector('button[type="submit"]');
        contactForm.addEventListener('submit', () => {
            if (submitBtn) {
                submitBtn.disabled = true;
                submitBtn.innerHTML = '<i class="fa fa-circle-o-notch fa-spin"></i> Sending…';
            }
        });
    }

    // ── Mobile sticky CTA — hide when footer is in view ────────
    const stickyCta = document.getElementById('sticky-cta');
    const siteFooter = document.querySelector('.site-footer');
    if (stickyCta && siteFooter && 'IntersectionObserver' in window) {
        const footerObserver = new IntersectionObserver(
            ([entry]) => stickyCta.classList.toggle('hidden', entry.isIntersecting),
            { threshold: 0 }
        );
        footerObserver.observe(siteFooter);
    }
});
