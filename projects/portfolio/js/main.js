document.addEventListener('DOMContentLoaded', () => {
    // Mobile Menu Toggle logic for Sidebar
    const mobileMenuBtn = document.getElementById('mobile-menu-btn');
    const mobileMenuClose = document.getElementById('mobile-menu-close');
    const mobileMenuOverlay = document.getElementById('mobile-menu-overlay');
    const mobileMenu = document.getElementById('mobile-menu');
    const mobileLinks = mobileMenu?.querySelectorAll('a');

    const openMenu = () => {
        mobileMenu.classList.remove('-translate-x-full');
        mobileMenuOverlay.classList.remove('opacity-0', 'pointer-events-none');
        document.body.style.overflow = 'hidden'; // Prevent scrolling
    };

    const closeMenu = () => {
        mobileMenu.classList.add('-translate-x-full');
        mobileMenuOverlay.classList.add('opacity-0', 'pointer-events-none');
        document.body.style.overflow = '';
    };

    if (mobileMenuBtn && mobileMenu) {
        mobileMenuBtn.addEventListener('click', openMenu);
        mobileMenuClose?.addEventListener('click', closeMenu);
        mobileMenuOverlay?.addEventListener('click', closeMenu);

        // Close mobile menu on link click
        mobileLinks?.forEach(link => {
            link.addEventListener('click', closeMenu);
        });
    }

    // Navbar Scroll Effect & Back To Top Button
    const header = document.getElementById('header');
    const backToTopBtn = document.getElementById('backToTop');

    window.addEventListener('scroll', () => {
        if (header) {
            if (window.scrollY > 50) {
                header.classList.add('shadow-md', 'dark:shadow-soft-dark', 'py-2');
                header.classList.remove('py-4');
            } else {
                header.classList.remove('shadow-md', 'dark:shadow-soft-dark', 'py-2');
                header.classList.add('py-4');
            }
        }

        if (backToTopBtn) {
            if (window.scrollY > 500) {
                backToTopBtn.classList.add('show');
            } else {
                backToTopBtn.classList.remove('show');
            }
        }
    });

    if (backToTopBtn) {
        backToTopBtn.addEventListener('click', () => {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    }

    // Active Navbar Link Highlighting
    const sections = document.querySelectorAll('section');
    const navLinksDesktop = document.querySelectorAll('.nav-link');
    
    window.addEventListener('scroll', () => {
        let current = '';
        sections.forEach(section => {
            const sectionTop = section.offsetTop;
            if (scrollY >= (sectionTop - 200)) {
                current = section.getAttribute('id');
            }
        });

        navLinksDesktop.forEach(link => {
            link.classList.remove('text-primary-600', 'dark:text-primary-500');
            link.classList.add('text-gray-600', 'dark:text-gray-300');
            if (link.getAttribute('href') === `#${current}`) {
                link.classList.remove('text-gray-600', 'dark:text-gray-300');
                link.classList.add('text-primary-600', 'dark:text-primary-500');
            }
        });
    });

    // Contact Form Handling
    const contactForm = document.getElementById('contactForm');
    if (contactForm) {
        contactForm.addEventListener('submit', async (e) => {
            e.preventDefault();
            
            const submitBtn = document.getElementById('submitBtn');
            const submitBtnText = submitBtn.querySelector('span');
            const formStatus = document.getElementById('form-status');
            
            // Get form values
            const formData = {
                name: document.getElementById('contact-name').value,
                email: document.getElementById('contact-email').value,
                message: document.getElementById('contact-message').value
            };
            
            // Visual loading state
            submitBtn.disabled = true;
            submitBtn.classList.add('opacity-75', 'cursor-not-allowed');
            submitBtnText.textContent = 'Sending...';
            formStatus.classList.add('hidden');
            formStatus.classList.remove('bg-green-100', 'text-green-800', 'bg-red-100', 'text-red-800', 'dark:bg-green-900/30', 'dark:text-green-400', 'dark:bg-red-900/30', 'dark:text-red-400');
            
            try {
                const response = await fetch('contact.php', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                    },
                    body: JSON.stringify(formData)
                });
                
                const result = await response.json();
                
                formStatus.classList.remove('hidden');
                if (response.ok && result.status === 'success') {
                    formStatus.textContent = result.message;
                    formStatus.classList.add('bg-green-100', 'text-green-800', 'dark:bg-green-900/30', 'dark:text-green-400');
                    contactForm.reset();
                } else {
                    throw new Error(result.message || 'Something went wrong');
                }
            } catch (error) {
                formStatus.classList.remove('hidden');
                formStatus.textContent = error.message || 'Failed to send message. Please try again.';
                formStatus.classList.add('bg-red-100', 'text-red-800', 'dark:bg-red-900/30', 'dark:text-red-400');
            } finally {
                // Restore button state
                submitBtn.disabled = false;
                submitBtn.classList.remove('opacity-75', 'cursor-not-allowed');
                submitBtnText.textContent = 'Send Message';
            }
        });
    }
});
