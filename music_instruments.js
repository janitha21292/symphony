document.addEventListener('DOMContentLoaded', () => {
    // Smooth Scrolling for Nav Links
    const links = document.querySelectorAll('.nav-links a');

    links.forEach(link => {
        link.addEventListener('click', (e) => {
            if (link.getAttribute('href').startsWith('#')) {
                e.preventDefault();
                const targetID = link.getAttribute('href');
                const targetSection = document.querySelector(targetID);

                if (targetSection) {
                    window.scrollTo({
                        top: targetSection.offsetTop - 80,
                        behavior: 'smooth'
                    });
                }
            }
        });
    });

    // Scroll Reveal for Category Cards
    const observerOptions = {
        threshold: 0.1
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
            }
        });
    }, observerOptions);

    const cards = document.querySelectorAll('.category-card');
    cards.forEach(card => {
        card.style.opacity = '0';
        card.style.transform = 'translateY(30px)';
        card.style.transition = 'all 0.6s cubic-bezier(0.16, 1, 0.3, 1)';
        observer.observe(card);
    });

    // Hero Parallax Effect
    window.addEventListener('scroll', () => {
        const scrolled = window.pageYOffset;
        const hero = document.querySelector('.hero');
        if (hero) {
            hero.style.backgroundPositionY = (scrolled * 0.5) + 'px';
        }
    });

    // Navigation Background Change on Scroll
    window.addEventListener('scroll', () => {
        const nav = document.querySelector('nav');
        if (window.scrollY > 100) {
            nav.style.background = 'rgba(10, 10, 11, 0.95)';
            nav.style.padding = '1rem 5%';
        } else {
            nav.style.background = 'rgba(10, 10, 11, 0.8)';
            nav.style.padding = '1.5rem 5%';
        }
    });

    // Profile Reveal on Scroll
    const profileObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
            }
        });
    }, { threshold: 0.2 });

    document.querySelectorAll('.instrument-profile').forEach(profile => {
        profileObserver.observe(profile);
    });

    // Timeline Animations
    const timelineObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
            }
        });
    }, { threshold: 0.1 });

    document.querySelectorAll('.timeline-item').forEach(item => {
        timelineObserver.observe(item);
    });

    // Contact Form Handling (Simulated)
    const contactForm = document.getElementById('contact-form');
    if (contactForm) {
        contactForm.addEventListener('submit', (e) => {
            e.preventDefault();
            const btn = contactForm.querySelector('.submit-btn');
            const originalText = btn.innerText;

            btn.innerText = 'Sending...';
            btn.style.opacity = '0.7';
            btn.disabled = true;

            setTimeout(() => {
                btn.innerText = 'Message Sent!';
                btn.style.background = '#28a745';
                btn.style.color = 'white';

                setTimeout(() => {
                    contactForm.reset();
                    btn.innerText = originalText;
                    btn.style.background = 'var(--primary-gold)';
                    btn.style.color = 'black';
                    btn.style.opacity = '1';
                    btn.disabled = false;
                }, 3000);
            }, 1500);
        });
    }
});
