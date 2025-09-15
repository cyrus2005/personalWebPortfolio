// Mobile Navigation Toggle
document.addEventListener('DOMContentLoaded', function() {
    const hamburger = document.getElementById('hamburger');
    const navMenu = document.getElementById('nav-menu');
    
    if (hamburger && navMenu) {
        hamburger.addEventListener('click', function() {
            navMenu.classList.toggle('active');
            hamburger.classList.toggle('active');
        });
        
        // Close menu when clicking on a link
        const navLinks = document.querySelectorAll('.nav-link');
        navLinks.forEach(link => {
            link.addEventListener('click', () => {
                navMenu.classList.remove('active');
                hamburger.classList.remove('active');
            });
        });
    }
});

// Gallery Functionality
document.addEventListener('DOMContentLoaded', function() {
    // Gallery scroll functionality
    const galleryScrolls = document.querySelectorAll('.gallery-scroll');
    
    galleryScrolls.forEach(scroll => {
        let isDown = false;
        let startX;
        let scrollLeft;
        
        scroll.addEventListener('mousedown', (e) => {
            isDown = true;
            scroll.classList.add('active');
            startX = e.pageX - scroll.offsetLeft;
            scrollLeft = scroll.scrollLeft;
        });
        
        scroll.addEventListener('mouseleave', () => {
            isDown = false;
            scroll.classList.remove('active');
        });
        
        scroll.addEventListener('mouseup', () => {
            isDown = false;
            scroll.classList.remove('active');
        });
        
        scroll.addEventListener('mousemove', (e) => {
            if (!isDown) return;
            e.preventDefault();
            const x = e.pageX - scroll.offsetLeft;
            const walk = (x - startX) * 2;
            scroll.scrollLeft = scrollLeft - walk;
        });
        
        // Touch support for mobile
        let touchStartX = 0;
        let touchScrollLeft = 0;
        
        scroll.addEventListener('touchstart', (e) => {
            touchStartX = e.touches[0].pageX - scroll.offsetLeft;
            touchScrollLeft = scroll.scrollLeft;
        });
        
        scroll.addEventListener('touchmove', (e) => {
            if (!touchStartX) return;
            const touchX = e.touches[0].pageX - scroll.offsetLeft;
            const walk = (touchX - touchStartX) * 2;
            scroll.scrollLeft = touchScrollLeft - walk;
        });
        
        scroll.addEventListener('touchend', () => {
            touchStartX = 0;
        });
    });
    
    // Category filtering
    const tabButtons = document.querySelectorAll('.tab-button');
    const galleryItems = document.querySelectorAll('.gallery-item[data-category]');
    
    tabButtons.forEach(button => {
        button.addEventListener('click', () => {
            // Remove active class from all buttons
            tabButtons.forEach(btn => btn.classList.remove('active'));
            // Add active class to clicked button
            button.classList.add('active');
            
            const category = button.getAttribute('data-category');
            
            galleryItems.forEach(item => {
                if (category === 'all' || item.getAttribute('data-category') === category) {
                    item.style.display = 'block';
                    item.classList.add('fade-in-up');
                } else {
                    item.style.display = 'none';
                }
            });
        });
    });
    
    // Image modal functionality
    const galleryImages = document.querySelectorAll('.gallery-image');
    const modal = document.getElementById('imageModal');
    const modalImage = document.querySelector('.modal-image');
    const modalTitle = document.querySelector('.modal-title');
    const modalDescription = document.querySelector('.modal-description');
    const closeModal = document.querySelector('.close-modal');
    
    galleryImages.forEach(image => {
        image.addEventListener('click', () => {
            modal.style.display = 'block';
            modalImage.src = image.src;
            modalImage.alt = image.alt;
            
            const overlay = image.parentElement.querySelector('.image-overlay');
            if (overlay) {
                const title = overlay.querySelector('h3');
                const description = overlay.querySelector('p');
                
                if (title) modalTitle.textContent = title.textContent;
                if (description) modalDescription.textContent = description.textContent;
            }
            
            document.body.style.overflow = 'hidden';
        });
    });
    
    if (closeModal) {
        closeModal.addEventListener('click', () => {
            modal.style.display = 'none';
            document.body.style.overflow = 'auto';
        });
    }
    
    // Close modal when clicking outside
    if (modal) {
        modal.addEventListener('click', (e) => {
            if (e.target === modal) {
                modal.style.display = 'none';
                document.body.style.overflow = 'auto';
            }
        });
    }
    
    // Close modal with Escape key
    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape' && modal && modal.style.display === 'block') {
            modal.style.display = 'none';
            document.body.style.overflow = 'auto';
        }
    });
});

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

// Parallax effect for hero section
window.addEventListener('scroll', () => {
    const scrolled = window.pageYOffset;
    const heroSticker = document.querySelector('.hero-sticker');
    
    if (heroSticker) {
        const rate = scrolled * -0.5;
        heroSticker.style.transform = `translateY(${rate}px)`;
    }
});

// Intersection Observer for fade-in animations
const observerOptions = {
    threshold: 0.1,
    rootMargin: '0px 0px -50px 0px'
};

const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('fade-in-up');
        }
    });
}, observerOptions);

// Observe elements for animation
document.addEventListener('DOMContentLoaded', () => {
    const animatedElements = document.querySelectorAll('.stat-card, .action-card, .gallery-item, .vision-point');
    animatedElements.forEach(el => observer.observe(el));
});

// Form validation and enhancement
document.addEventListener('DOMContentLoaded', () => {
    const forms = document.querySelectorAll('form');
    
    forms.forEach(form => {
        form.addEventListener('submit', (e) => {
            const requiredFields = form.querySelectorAll('[required]');
            let isValid = true;
            
            requiredFields.forEach(field => {
                if (!field.value.trim()) {
                    isValid = false;
                    field.style.borderColor = '#dc143c';
                } else {
                    field.style.borderColor = '';
                }
            });
            
            if (!isValid) {
                e.preventDefault();
                alert('Please fill in all required fields.');
            }
        });
    });
});

// Loading states for buttons
document.addEventListener('DOMContentLoaded', () => {
    const buttons = document.querySelectorAll('button[type="submit"], .cta-button, .import-button');
    
    buttons.forEach(button => {
        button.addEventListener('click', function() {
            if (this.type === 'submit' || this.classList.contains('import-button')) {
                this.style.opacity = '0.7';
                this.style.pointerEvents = 'none';
                
                const originalText = this.innerHTML;
                this.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Processing...';
                
                // Reset after 3 seconds (adjust based on your needs)
                setTimeout(() => {
                    this.style.opacity = '1';
                    this.style.pointerEvents = 'auto';
                    this.innerHTML = originalText;
                }, 3000);
            }
        });
    });
});

// Image lazy loading
document.addEventListener('DOMContentLoaded', () => {
    const images = document.querySelectorAll('img[loading="lazy"]');
    
    if ('IntersectionObserver' in window) {
        const imageObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const img = entry.target;
                    img.src = img.src;
                    img.classList.remove('lazy');
                    imageObserver.unobserve(img);
                }
            });
        });
        
        images.forEach(img => imageObserver.observe(img));
    }
});

// Custom scrollbar enhancement
document.addEventListener('DOMContentLoaded', () => {
    const scrollContainers = document.querySelectorAll('.gallery-scroll');
    
    scrollContainers.forEach(container => {
        // Add scroll indicators
        const scrollHint = container.parentElement.querySelector('.scroll-hint');
        if (scrollHint) {
            container.addEventListener('scroll', () => {
                const isAtStart = container.scrollLeft === 0;
                const isAtEnd = container.scrollLeft >= container.scrollWidth - container.clientWidth;
                
                if (isAtStart) {
                    scrollHint.querySelector('.fa-chevron-left').style.opacity = '0.3';
                } else {
                    scrollHint.querySelector('.fa-chevron-left').style.opacity = '1';
                }
                
                if (isAtEnd) {
                    scrollHint.querySelector('.fa-chevron-right').style.opacity = '0.3';
                } else {
                    scrollHint.querySelector('.fa-chevron-right').style.opacity = '1';
                }
            });
        }
    });
});

// Keyboard navigation for gallery
document.addEventListener('keydown', (e) => {
    const modal = document.getElementById('imageModal');
    if (modal && modal.style.display === 'block') {
        const currentImage = modal.querySelector('.modal-image');
        const allImages = Array.from(document.querySelectorAll('.gallery-image'));
        const currentIndex = allImages.findIndex(img => img.src === currentImage.src);
        
        if (e.key === 'ArrowLeft' && currentIndex > 0) {
            allImages[currentIndex - 1].click();
        } else if (e.key === 'ArrowRight' && currentIndex < allImages.length - 1) {
            allImages[currentIndex + 1].click();
        }
    }
});

// Performance optimization: Debounce scroll events
function debounce(func, wait) {
    let timeout;
    return function executedFunction(...args) {
        const later = () => {
            clearTimeout(timeout);
            func(...args);
        };
        clearTimeout(timeout);
        timeout = setTimeout(later, wait);
    };
}

// Apply debouncing to scroll events
const debouncedScrollHandler = debounce(() => {
    // Your scroll handling code here
}, 10);

window.addEventListener('scroll', debouncedScrollHandler);
