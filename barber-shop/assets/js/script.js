// Blade & Fade Barbers - Interactive JavaScript

document.addEventListener('DOMContentLoaded', function() {
    // Initialize all functionality
    initNavigation();
    initSmoothScrolling();
    initForms();
    initModal();
    initAnimations();
    initMobileMenu();
});

// Navigation functionality
function initNavigation() {
    const navbar = document.querySelector('.navbar');
    const navLinks = document.querySelectorAll('.nav-link');
    
    // Add scroll effect to navbar - disabled to keep white background
    // window.addEventListener('scroll', function() {
    //     if (window.scrollY > 100) {
    //         navbar.style.background = 'rgba(255, 255, 255, 0.98)';
    //         navbar.style.boxShadow = '0 2px 20px rgba(0, 0, 0, 0.15)';
    //     } else {
    //         navbar.style.background = 'rgba(255, 255, 255, 1)';
    //         navbar.style.boxShadow = '0 2px 20px rgba(0,0,0,0.15)';
    //     }
    // });
    
    // Update active nav link based on scroll position
    window.addEventListener('scroll', updateActiveNavLink);
    
    // Set initial active link
    updateActiveNavLink();
}

function updateActiveNavLink() {
    const sections = document.querySelectorAll('section[id]');
    const navLinks = document.querySelectorAll('.nav-link');
    
    let current = '';
    sections.forEach(section => {
        const sectionTop = section.offsetTop - 100;
        const sectionHeight = section.offsetHeight;
        if (window.scrollY >= sectionTop && window.scrollY < sectionTop + sectionHeight) {
            current = section.getAttribute('id');
        }
    });
    
    navLinks.forEach(link => {
        link.classList.remove('active');
        if (link.getAttribute('href') === `#${current}`) {
            link.classList.add('active');
        }
    });
}

// Smooth scrolling for navigation links
function initSmoothScrolling() {
    const navLinks = document.querySelectorAll('a[href^="#"]');
    
    navLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            
            const targetId = this.getAttribute('href');
            const targetSection = document.querySelector(targetId);
            
            if (targetSection) {
                const offsetTop = targetSection.offsetTop - 70; // Account for fixed navbar
                
                window.scrollTo({
                    top: offsetTop,
                    behavior: 'smooth'
                });
            }
        });
    });
}

// Form handling
function initForms() {
    // Newsletter form
    const newsletterForm = document.getElementById('newsletterForm');
    if (newsletterForm) {
        newsletterForm.addEventListener('submit', handleNewsletterSubmit);
    }
    
    // Contact form
    const contactForm = document.getElementById('contactForm');
    if (contactForm) {
        contactForm.addEventListener('submit', handleContactSubmit);
    }
    
    // Booking form
    const bookingForm = document.getElementById('bookingForm');
    if (bookingForm) {
        bookingForm.addEventListener('submit', handleBookingSubmit);
    }
}

function handleNewsletterSubmit(e) {
    e.preventDefault();
    
    const form = e.target;
    const formData = new FormData(form);
    const submitBtn = form.querySelector('button[type="submit"]');
    
    // Show loading state
    showLoading(submitBtn);
    
    fetch('includes/newsletter_handler.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        hideLoading(submitBtn);
        
        if (data.success) {
            showMessage('success', data.message);
            form.reset();
        } else {
            showMessage('error', data.message);
        }
    })
    .catch(error => {
        hideLoading(submitBtn);
        showMessage('error', 'An error occurred. Please try again.');
        console.error('Error:', error);
    });
}

function handleContactSubmit(e) {
    e.preventDefault();
    
    const form = e.target;
    const formData = new FormData(form);
    const submitBtn = form.querySelector('button[type="submit"]');
    
    // Show loading state
    showLoading(submitBtn);
    
    fetch('includes/contact_handler.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        hideLoading(submitBtn);
        
        if (data.success) {
            showMessage('success', data.message);
            form.reset();
        } else {
            showMessage('error', data.message);
        }
    })
    .catch(error => {
        hideLoading(submitBtn);
        showMessage('error', 'An error occurred. Please try again.');
        console.error('Error:', error);
    });
}

function handleBookingSubmit(e) {
    e.preventDefault();
    
    const form = e.target;
    const formData = new FormData(form);
    const submitBtn = form.querySelector('button[type="submit"]');
    
    // Show loading state
    showLoading(submitBtn);
    
    fetch('includes/booking_handler.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        hideLoading(submitBtn);
        
        if (data.success) {
            showMessage('success', data.message);
            form.reset();
            closeModal();
        } else {
            showMessage('error', data.message);
        }
    })
    .catch(error => {
        hideLoading(submitBtn);
        showMessage('error', 'An error occurred. Please try again.');
        console.error('Error:', error);
    });
}

// Modal functionality
function initModal() {
    const modal = document.getElementById('bookingModal');
    const bookButtons = document.querySelectorAll('.book-btn, a[href="#book"]');
    const closeBtn = document.querySelector('.close');
    
    // Open modal
    bookButtons.forEach(btn => {
        btn.addEventListener('click', function(e) {
            e.preventDefault();
            openModal();
        });
    });
    
    // Close modal
    if (closeBtn) {
        closeBtn.addEventListener('click', closeModal);
    }
    
    // Close modal when clicking outside
    if (modal) {
        modal.addEventListener('click', function(e) {
            if (e.target === modal) {
                closeModal();
            }
        });
    }
    
    // Close modal with Escape key
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && modal.style.display === 'block') {
            closeModal();
        }
    });
}

function openModal() {
    const modal = document.getElementById('bookingModal');
    if (modal) {
        modal.style.display = 'block';
        document.body.style.overflow = 'hidden';
        
        // Set minimum date to today
        const dateInput = modal.querySelector('input[name="date"]');
        if (dateInput) {
            const today = new Date().toISOString().split('T')[0];
            dateInput.setAttribute('min', today);
        }
    }
}

// Global function for onclick attributes
function openBookingModal() {
    openModal();
}

function closeModal() {
    const modal = document.getElementById('bookingModal');
    if (modal) {
        modal.style.display = 'none';
        document.body.style.overflow = 'auto';
    }
}

// Mobile menu functionality
function initMobileMenu() {
    const hamburger = document.querySelector('.hamburger');
    const navMenu = document.querySelector('.nav-menu');
    
    if (hamburger && navMenu) {
        hamburger.addEventListener('click', function() {
            hamburger.classList.toggle('active');
            navMenu.classList.toggle('active');
        });
        
        // Close menu when clicking on a link
        const navLinks = document.querySelectorAll('.nav-link');
        navLinks.forEach(link => {
            link.addEventListener('click', function() {
                hamburger.classList.remove('active');
                navMenu.classList.remove('active');
            });
        });
    }
}

// Animation on scroll
function initAnimations() {
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };
    
    const observer = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('fade-in-up');
            }
        });
    }, observerOptions);
    
    // Observe elements for animation
    const animateElements = document.querySelectorAll('.service-card, .gallery-item, .contact-item, .stat');
    animateElements.forEach(el => {
        observer.observe(el);
    });
}

// Utility functions
function showLoading(button) {
    button.disabled = true;
    button.classList.add('loading');
    button.textContent = 'Loading...';
}

function hideLoading(button) {
    button.disabled = false;
    button.classList.remove('loading');
    button.textContent = button.getAttribute('data-original-text') || 'Submit';
}

function showMessage(type, message) {
    // Remove existing messages
    const existingMessages = document.querySelectorAll('.message');
    existingMessages.forEach(msg => msg.remove());
    
    // Create new message
    const messageDiv = document.createElement('div');
    messageDiv.className = `message ${type}`;
    messageDiv.textContent = message;
    
    // Insert message at the top of the page
    const body = document.body;
    body.insertBefore(messageDiv, body.firstChild);
    
    // Auto-remove message after 5 seconds
    setTimeout(() => {
        messageDiv.remove();
    }, 5000);
    
    // Scroll to top to show message
    window.scrollTo({
        top: 0,
        behavior: 'smooth'
    });
}

// Gallery lightbox functionality (for future use)
function initGallery() {
    const galleryItems = document.querySelectorAll('.gallery-item');
    
    galleryItems.forEach(item => {
        item.addEventListener('click', function() {
            // Future implementation for lightbox
            console.log('Gallery item clicked');
        });
    });
}

// Service card hover effects
function initServiceCards() {
    const serviceCards = document.querySelectorAll('.service-card');
    
    serviceCards.forEach(card => {
        card.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-10px)';
        });
        
        card.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0)';
        });
    });
}

// Initialize additional features
document.addEventListener('DOMContentLoaded', function() {
    initGallery();
    initServiceCards();
});

// Form validation helpers
function validateEmail(email) {
    const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return re.test(email);
}

function validatePhone(phone) {
    const re = /^[\+]?[1-9][\d]{0,15}$/;
    return re.test(phone.replace(/[\s\-\(\)]/g, ''));
}

// Add real-time validation to forms
document.addEventListener('DOMContentLoaded', function() {
    const emailInputs = document.querySelectorAll('input[type="email"]');
    const phoneInputs = document.querySelectorAll('input[type="tel"]');
    
    emailInputs.forEach(input => {
        input.addEventListener('blur', function() {
            if (this.value && !validateEmail(this.value)) {
                this.style.borderColor = '#dc3545';
            } else {
                this.style.borderColor = '';
            }
        });
    });
    
    phoneInputs.forEach(input => {
        input.addEventListener('blur', function() {
            if (this.value && !validatePhone(this.value)) {
                this.style.borderColor = '#dc3545';
            } else {
                this.style.borderColor = '';
            }
        });
    });
});

// Smooth reveal animation for hero section
document.addEventListener('DOMContentLoaded', function() {
    const heroContent = document.querySelector('.hero-content');
    const heroImage = document.querySelector('.hero-image');
    
    if (heroContent) {
        setTimeout(() => {
            heroContent.classList.add('fade-in-up');
        }, 300);
    }
    
    if (heroImage) {
        setTimeout(() => {
            heroImage.classList.add('fade-in');
        }, 600);
    }
});

// Parallax effect for hero section - disabled for video
// window.addEventListener('scroll', function() {
//     const scrolled = window.pageYOffset;
//     const heroImage = document.querySelector('.hero-image');
//     
//     if (heroImage && scrolled < window.innerHeight) {
//         heroImage.style.transform = `translateY(${scrolled * 0.5}px)`;
//     }
// });

// Add click tracking for analytics (placeholder)
function trackClick(element, action) {
    // Future implementation for analytics
    console.log(`Tracked: ${action} on ${element}`);
}

// Add event listeners for tracking
document.addEventListener('DOMContentLoaded', function() {
    const trackableElements = document.querySelectorAll('.book-btn, .service-card, .nav-link');
    
    trackableElements.forEach(element => {
        element.addEventListener('click', function() {
            const action = this.classList.contains('book-btn') ? 'booking_click' : 
                          this.classList.contains('service-card') ? 'service_view' : 'navigation_click';
            trackClick(this, action);
        });
    });
});