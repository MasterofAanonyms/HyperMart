let current = 0;
const slides = document.querySelectorAll('.slide');
const dots = document.querySelectorAll('.dot');

function showSlide(index) {
    // Handle wrap-around
    if (index >= slides.length) {
        current = 0;
    } else if (index < 0) {
        current = slides.length - 1;
    } else {
        current = index;
    }

    // Update slides
    slides.forEach(slide => slide.classList.remove('active'));
    slides[current].classList.add('active');

    // Update dots
    dots.forEach(dot => dot.classList.remove('active'));
    if (dots[current]) {
        dots[current].classList.add('active');
    }
}

function moveSlide(step) {
    showSlide(current + step);
}

function currentSlide(index) {
    showSlide(index);
}

// Auto-advance
setInterval(() => moveSlide(1), 6000);

const mobileMenuBtn = document.querySelector('.lg\\:hidden'); // Selects the hamburger button
const mobileMenuOverlay = document.getElementById('mobile-menu-overlay');
const mobileMenuDrawer = document.getElementById('mobile-menu-drawer');
const closeMobileMenuBtn = document.getElementById('close-mobile-menu');

function toggleMobileMenu() {
    const isHidden = mobileMenuOverlay.classList.contains('hidden');

    if (isHidden) {
        // Open menu
        mobileMenuOverlay.classList.remove('hidden');
        // Small delay to allow display:block to apply before opacity transition
        setTimeout(() => {
            mobileMenuOverlay.classList.remove('opacity-0');
            mobileMenuDrawer.classList.remove('-translate-x-full');
        }, 10);
        document.body.style.overflow = 'hidden'; // Prevent background scrolling
    } else {
        // Close menu
        mobileMenuOverlay.classList.add('opacity-0');
        mobileMenuDrawer.classList.add('-translate-x-full');

        // Wait for transition to finish before hiding
        setTimeout(() => {
            mobileMenuOverlay.classList.add('hidden');
        }, 300);
        document.body.style.overflow = '';
    }
}

if (mobileMenuBtn) {
    mobileMenuBtn.onclick = toggleMobileMenu;
}

if (closeMobileMenuBtn) {
    closeMobileMenuBtn.onclick = toggleMobileMenu;
}

if (mobileMenuOverlay) {
    mobileMenuOverlay.onclick = toggleMobileMenu;
}

// Dropdown Logic
const userMenuBtn = document.getElementById('user-menu-btn');
const userDropdown = document.getElementById('user-dropdown');
const notiMenuBtn = document.getElementById('noti-menu-btn');
const notiDropdown = document.getElementById('noti-dropdown');
const categoryMenuBtn = document.getElementById('category-menu-btn');
const categoryDropdown = document.getElementById('category-dropdown');

function toggleDropdown(btn, dropdown) {
    if (!dropdown) return;
    const isHidden = dropdown.classList.contains('hidden');

    // Close all other dropdowns first
    document.querySelectorAll('.dropdown-container div[id$="-dropdown"]').forEach(el => {
        if (el !== dropdown) el.classList.add('hidden');
    });

    if (isHidden) {
        dropdown.classList.remove('hidden');

        // Position Category Dropdown as fixed to escape overflow container
        if (dropdown.id === 'category-dropdown') {
            const rect = btn.getBoundingClientRect();
            dropdown.style.position = 'fixed';
            dropdown.style.top = rect.bottom + 'px';
            dropdown.style.left = rect.left + 'px';
            dropdown.style.width = '14rem'; // w-56
        }
    } else {
        dropdown.classList.add('hidden');
    }
}

// Close dropdowns on resize to prevent position mismatch
window.addEventListener('resize', () => {
    document.querySelectorAll('.dropdown-container div[id$="-dropdown"]').forEach(el => {
        el.classList.add('hidden');
    });
});

if (userMenuBtn) {
    userMenuBtn.addEventListener('click', (e) => {
        e.stopPropagation();
        toggleDropdown(userMenuBtn, userDropdown);
    });
}

if (notiMenuBtn) {
    notiMenuBtn.addEventListener('click', (e) => {
        e.stopPropagation();
        toggleDropdown(notiMenuBtn, notiDropdown);
    });
}

if (categoryMenuBtn) {
    categoryMenuBtn.addEventListener('click', (e) => {
        e.stopPropagation();
        toggleDropdown(categoryMenuBtn, categoryDropdown);
    });
}

// Close dropdowns when clicking outside
document.addEventListener('click', (e) => {
    if (!e.target.closest('.dropdown-container')) {
        document.querySelectorAll('.dropdown-container div[id$="-dropdown"]').forEach(el => {
            el.classList.add('hidden');
        });
    }
});

// Mobile Accordion Logic
const mobileUserBtn = document.getElementById('mobile-user-btn');
const mobileUserMenu = document.getElementById('mobile-user-menu');
const mobileNotiBtn = document.getElementById('mobile-noti-btn');
const mobileNotiMenu = document.getElementById('mobile-noti-menu');

function toggleAccordion(btn, menu) {
    const isHidden = menu.classList.contains('hidden');
    if (isHidden) {
        menu.classList.remove('hidden');
        btn.querySelector('svg:last-child').style.transform = 'rotate(180deg)';
    } else {
        menu.classList.add('hidden');
        btn.querySelector('svg:last-child').style.transform = 'rotate(0deg)';
    }
}

if (mobileUserBtn && mobileUserMenu) {
    mobileUserBtn.onclick = () => toggleAccordion(mobileUserBtn, mobileUserMenu);
}

if (mobileNotiBtn && mobileNotiMenu) {
    mobileNotiBtn.onclick = () => toggleAccordion(mobileNotiBtn, mobileNotiMenu);
}

// Category Navigation Scrolling
document.addEventListener('DOMContentLoaded', () => {
    const categoryList = document.querySelector('.category-list');
    const prevBtn = document.querySelector('.nav-btn.prev');
    const nextBtn = document.querySelector('.nav-btn.next');

    if (categoryList && prevBtn && nextBtn) {
        nextBtn.addEventListener('click', () => {
            categoryList.scrollBy({ left: 200, behavior: 'smooth' });
        });

        prevBtn.addEventListener('click', () => {
            categoryList.scrollBy({ left: -200, behavior: 'smooth' });
        });
    }
});

// Back to Top Button
const backToTopBtn = document.createElement('button');
backToTopBtn.id = 'back-to-top';
backToTopBtn.innerHTML = '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" style="width: 24px; height: 24px;"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 15.75l7.5-7.5 7.5 7.5" /></svg>';
document.body.appendChild(backToTopBtn);

window.addEventListener('scroll', () => {
    if (window.scrollY > 300) {
        backToTopBtn.classList.add('show');
    } else {
        backToTopBtn.classList.remove('show');
    }
});

backToTopBtn.addEventListener('click', () => {
    window.scrollTo({ top: 0, behavior: 'smooth' });
});

// Scroll Reveal Animation
const revealElements = document.querySelectorAll('.reveal');

const revealObserver = new IntersectionObserver((entries, observer) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('active');
            observer.unobserve(entry.target);
        }
    });
}, { threshold: 0.15 });

revealElements.forEach(el => revealObserver.observe(el));