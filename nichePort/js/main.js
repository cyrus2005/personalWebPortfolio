// Generic Collision Shop - Main JavaScript

document.addEventListener('DOMContentLoaded', function() {
    // Initialize interactive car model
    initCarModel();
    
    // Initialize forms
    initForms();
    
    // Initialize animations
    initAnimations();
    
    // Initialize mobile menu
    initMobileMenu();
});

// Interactive Car Model
function initCarModel() {
    const carModel = document.getElementById('carModel');
    const damageAreas = document.getElementById('damageAreas');
    const damageTypeInput = document.getElementById('damageType');
    
    if (!carModel || !damageAreas) return;
    
    // Define damage areas with their positions and labels
    const damageAreaData = [
        { id: 'front-bumper', label: 'Front Bumper', x: 20, y: 30 },
        { id: 'front-left-fender', label: 'Front Left Fender', x: 15, y: 45 },
        { id: 'front-right-fender', label: 'Front Right Fender', x: 85, y: 45 },
        { id: 'front-left-door', label: 'Front Left Door', x: 20, y: 60 },
        { id: 'front-right-door', label: 'Front Right Door', x: 80, y: 60 },
        { id: 'rear-left-door', label: 'Rear Left Door', x: 25, y: 75 },
        { id: 'rear-right-door', label: 'Rear Right Door', x: 75, y: 75 },
        { id: 'rear-left-quarter', label: 'Rear Left Quarter Panel', x: 15, y: 85 },
        { id: 'rear-right-quarter', label: 'Rear Right Quarter Panel', x: 85, y: 85 },
        { id: 'rear-bumper', label: 'Rear Bumper', x: 50, y: 90 },
        { id: 'hood', label: 'Hood', x: 50, y: 25 },
        { id: 'trunk', label: 'Trunk', x: 50, y: 80 },
        { id: 'roof', label: 'Roof', x: 50, y: 40 },
        { id: 'windshield', label: 'Windshield', x: 50, y: 35 },
        { id: 'rear-window', label: 'Rear Window', x: 50, y: 75 }
    ];
    
    // Create damage area buttons
    damageAreaData.forEach(area => {
        const damageArea = document.createElement('div');
        damageArea.className = 'damage-area';
        damageArea.id = area.id;
        damageArea.style.left = area.x + '%';
        damageArea.style.top = area.y + '%';
        damageArea.textContent = '•';
        damageArea.title = area.label;
        
        damageArea.addEventListener('click', function() {
            // Remove selected class from all areas
            document.querySelectorAll('.damage-area').forEach(area => {
                area.classList.remove('selected');
            });
            
            // Add selected class to clicked area
            this.classList.add('selected');
            
            // Update damage type input
            if (damageTypeInput) {
                damageTypeInput.value = area.label;
            }
        });
        
        damageAreas.appendChild(damageArea);
    });
}

// Form Handling
function initForms() {
    // Quick Quote Form
    const quickQuoteForm = document.getElementById('quickQuoteForm');
    if (quickQuoteForm) {
        quickQuoteForm.addEventListener('submit', handleQuickQuote);
    }
    
    // Contact Form
    const contactForm = document.getElementById('contactForm');
    if (contactForm) {
        contactForm.addEventListener('submit', handleContactForm);
    }
}

// Handle Quick Quote Form Submission
function handleQuickQuote(e) {
    e.preventDefault();
    
    const formData = new FormData(e.target);
    const data = Object.fromEntries(formData);
    
    // Validate required fields
    if (!data.damageType || data.damageType.trim() === '') {
        alert('Please select a damage area by clicking on the car model.');
        return;
    }
    
    // Show loading state
    const submitBtn = e.target.querySelector('button[type="submit"]');
    const originalText = submitBtn.textContent;
    submitBtn.textContent = 'Submitting...';
    submitBtn.disabled = true;
    
    // Submit form data
    fetch('includes/submit_quote.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify(data)
    })
    .then(response => response.json())
    .then(result => {
        if (result.success) {
            alert('Thank you! Your estimate request has been submitted. We will contact you within 24 hours.');
            e.target.reset();
            // Reset damage area selection
            document.querySelectorAll('.damage-area').forEach(area => {
                area.classList.remove('selected');
            });
            document.getElementById('damageType').value = '';
        } else {
            alert('Sorry, there was an error submitting your request. Please try again or call us at (270) 801-9780.');
        }
    })
    .catch(error => {
        console.error('Error:', error);
        alert('Sorry, there was an error submitting your request. Please try again or call us at (270) 801-9780.');
    })
    .finally(() => {
        // Reset button state
        submitBtn.textContent = originalText;
        submitBtn.disabled = false;
    });
}

// Handle Contact Form Submission
function handleContactForm(e) {
    e.preventDefault();
    
    const formData = new FormData(e.target);
    const data = Object.fromEntries(formData);
    
    // Show loading state
    const submitBtn = e.target.querySelector('button[type="submit"]');
    const originalText = submitBtn.textContent;
    submitBtn.textContent = 'Sending...';
    submitBtn.disabled = true;
    
    // Submit form data
    fetch('includes/submit_contact.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify(data)
    })
    .then(response => response.json())
    .then(result => {
        if (result.success) {
            alert('Thank you for your message! We will get back to you soon.');
            e.target.reset();
        } else {
            alert('Sorry, there was an error sending your message. Please try again or call us at (270) 801-9780.');
        }
    })
    .catch(error => {
        console.error('Error:', error);
        alert('Sorry, there was an error sending your message. Please try again or call us at (270) 801-9780.');
    })
    .finally(() => {
        // Reset button state
        submitBtn.textContent = originalText;
        submitBtn.disabled = false;
    });
}

// Animations
function initAnimations() {
    // Fade in animation for elements
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };
    
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
            }
        });
    }, observerOptions);
    
    // Observe elements with fade-in class
    document.querySelectorAll('.feature-card, .service-card, .gallery-item').forEach(el => {
        el.classList.add('fade-in');
        observer.observe(el);
    });
}

// Mobile Menu
function initMobileMenu() {
    // Create mobile menu button
    const navContainer = document.querySelector('.nav-container');
    if (!navContainer) return;
    
    const mobileMenuBtn = document.createElement('button');
    mobileMenuBtn.className = 'mobile-menu-btn';
    mobileMenuBtn.innerHTML = '☰';
    mobileMenuBtn.style.cssText = `
        display: none;
        background: none;
        border: none;
        font-size: 1.5rem;
        color: var(--primary-navy);
        cursor: pointer;
    `;
    
    // Add mobile menu button to nav
    navContainer.appendChild(mobileMenuBtn);
    
    // Toggle mobile menu
    mobileMenuBtn.addEventListener('click', function() {
        const navMenu = document.querySelector('.nav-menu');
        if (navMenu) {
            navMenu.classList.toggle('mobile-open');
        }
    });
    
    // Mobile menu styles
    const style = document.createElement('style');
    style.textContent = `
        @media (max-width: 768px) {
            .mobile-menu-btn {
                display: block !important;
            }
            .nav-menu {
                position: absolute;
                top: 100%;
                left: 0;
                right: 0;
                background: var(--white);
                box-shadow: var(--shadow);
                flex-direction: column;
                padding: 1rem;
                display: none;
            }
            .nav-menu.mobile-open {
                display: flex !important;
            }
            .nav-menu li {
                margin: 0.5rem 0;
            }
        }
    `;
    document.head.appendChild(style);
}

// Utility Functions
function showNotification(message, type = 'info') {
    const notification = document.createElement('div');
    notification.className = `notification notification-${type}`;
    notification.textContent = message;
    notification.style.cssText = `
        position: fixed;
        top: 20px;
        right: 20px;
        background: var(--accent-blue);
        color: var(--white);
        padding: 1rem 1.5rem;
        border-radius: 0.5rem;
        box-shadow: var(--shadow-lg);
        z-index: 10000;
        animation: slideIn 0.3s ease;
    `;
    
    document.body.appendChild(notification);
    
    // Remove notification after 5 seconds
    setTimeout(() => {
        notification.style.animation = 'slideOut 0.3s ease';
        setTimeout(() => {
            document.body.removeChild(notification);
        }, 300);
    }, 5000);
}

// Add CSS for animations
const animationCSS = `
    @keyframes slideIn {
        from { transform: translateX(100%); opacity: 0; }
        to { transform: translateX(0); opacity: 1; }
    }
    @keyframes slideOut {
        from { transform: translateX(0); opacity: 1; }
        to { transform: translateX(100%); opacity: 0; }
    }
`;

const styleSheet = document.createElement('style');
styleSheet.textContent = animationCSS;
document.head.appendChild(styleSheet);

// Smooth scrolling for anchor links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            target.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        }
    });
});

// Phone number click tracking
document.querySelectorAll('a[href^="tel:"]').forEach(link => {
    link.addEventListener('click', function() {
        // Track phone clicks for analytics
        console.log('Phone number clicked:', this.href);
    });
});

// Form validation
function validateForm(form) {
    const requiredFields = form.querySelectorAll('[required]');
    let isValid = true;
    
    requiredFields.forEach(field => {
        if (!field.value.trim()) {
            field.style.borderColor = 'var(--warning-red)';
            isValid = false;
        } else {
            field.style.borderColor = '#e2e8f0';
        }
    });
    
    return isValid;
}

// Add form validation to all forms
document.querySelectorAll('form').forEach(form => {
    form.addEventListener('submit', function(e) {
        if (!validateForm(this)) {
            e.preventDefault();
            showNotification('Please fill in all required fields.', 'error');
        }
    });
});
