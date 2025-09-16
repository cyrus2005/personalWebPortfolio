/**
 * Elite Collision Repair - Ultimate Conversion Optimization JavaScript
 * Advanced conversion tracking, user experience enhancements, and performance optimizations
 */

(function() {
    'use strict';

    // Configuration
    const CONFIG = {
        phoneNumber: '2708019780',
        responseTime: '15 minutes',
        conversionGoals: {
            quoteForm: 'quote_submission',
            phoneCall: 'phone_call',
            emailContact: 'email_contact'
        },
        tracking: {
            enabled: true,
            debug: false
        }
    };

    // Utility Functions
    const Utils = {
        // Format phone number for display
        formatPhone: (phone) => {
            const cleaned = phone.replace(/\D/g, '');
            return cleaned.replace(/(\d{3})(\d{3})(\d{4})/, '($1) $2-$3');
        },

        // Clean phone number for storage
        cleanPhone: (phone) => {
            return phone.replace(/\D/g, '');
        },

        // Validate email
        validateEmail: (email) => {
            const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return re.test(email);
        },

        // Validate phone
        validatePhone: (phone) => {
            const cleaned = Utils.cleanPhone(phone);
            return cleaned.length === 10;
        },

        // Debounce function
        debounce: (func, wait) => {
            let timeout;
            return function executedFunction(...args) {
                const later = () => {
                    clearTimeout(timeout);
                    func(...args);
                };
                clearTimeout(timeout);
                timeout = setTimeout(later, wait);
            };
        },

        // Throttle function
        throttle: (func, limit) => {
            let inThrottle;
            return function() {
                const args = arguments;
                const context = this;
                if (!inThrottle) {
                    func.apply(context, args);
                    inThrottle = true;
                    setTimeout(() => inThrottle = false, limit);
                }
            };
        }
    };

    // Conversion Tracking
    const ConversionTracker = {
        track: (event, data = {}) => {
            if (!CONFIG.tracking.enabled) return;
            
            const eventData = {
                event: event,
                timestamp: new Date().toISOString(),
                url: window.location.href,
                userAgent: navigator.userAgent,
                ...data
            };

            if (CONFIG.tracking.debug) {
                console.log('Conversion Event:', eventData);
            }

            // Send to analytics (implement your preferred analytics service)
            if (typeof gtag !== 'undefined') {
                gtag('event', event, {
                    event_category: 'conversion',
                    event_label: data.label || '',
                    value: data.value || 0
                });
            }

            // Store in localStorage for offline tracking
            const storedEvents = JSON.parse(localStorage.getItem('conversion_events') || '[]');
            storedEvents.push(eventData);
            localStorage.setItem('conversion_events', JSON.stringify(storedEvents.slice(-100))); // Keep last 100 events
        },

        trackQuoteForm: (formData) => {
            ConversionTracker.track(CONFIG.conversionGoals.quoteForm, {
                label: 'quote_form_submission',
                value: 1,
                formData: {
                    hasName: !!formData.customerName,
                    hasPhone: !!formData.customerPhone,
                    hasEmail: !!formData.customerEmail,
                    hasVehicleInfo: !!(formData.vehicleYear && formData.vehicleMake && formData.vehicleModel),
                    damageType: formData.damageType
                }
            });
        },

        trackPhoneCall: () => {
            ConversionTracker.track(CONFIG.conversionGoals.phoneCall, {
                label: 'phone_call_click',
                value: 1
            });
        },

        trackEmailContact: () => {
            ConversionTracker.track(CONFIG.conversionGoals.emailContact, {
                label: 'email_contact_click',
                value: 1
            });
        }
    };

    // User Experience Enhancements
    const UXEnhancements = {
        init: () => {
            UXEnhancements.setupScrollEffects();
            UXEnhancements.setupFormEnhancements();
            UXEnhancements.setupMobileMenu();
            UXEnhancements.setupSmoothScrolling();
            UXEnhancements.setupLazyLoading();
            UXEnhancements.setupExitIntent();
            UXEnhancements.setupUrgencyTimer();
        },

        setupScrollEffects: () => {
            const header = document.getElementById('header');
            let lastScrollY = window.scrollY;
            let ticking = false;

            const updateHeader = () => {
                if (window.scrollY > 100) {
                    header.classList.add('scrolled');
                } else {
                    header.classList.remove('scrolled');
                }
                lastScrollY = window.scrollY;
                ticking = false;
            };

            const requestTick = () => {
                if (!ticking) {
                    requestAnimationFrame(updateHeader);
                    ticking = true;
                }
            };

            window.addEventListener('scroll', requestTick, { passive: true });
        },

        setupFormEnhancements: () => {
            const forms = document.querySelectorAll('form');
            forms.forEach(form => {
                UXEnhancements.enhanceForm(form);
            });
        },

        enhanceForm: (form) => {
            // Real-time validation
            const inputs = form.querySelectorAll('input, textarea, select');
            inputs.forEach(input => {
                input.addEventListener('blur', () => {
                    UXEnhancements.validateField(input);
                });

                input.addEventListener('input', Utils.debounce(() => {
                    UXEnhancements.validateField(input);
                }, 300));
            });

            // Form submission
            form.addEventListener('submit', (e) => {
                e.preventDefault();
                UXEnhancements.handleFormSubmission(form);
            });

            // Phone number formatting
            const phoneInputs = form.querySelectorAll('input[type="tel"]');
            phoneInputs.forEach(input => {
                input.addEventListener('input', (e) => {
                    const cleaned = Utils.cleanPhone(e.target.value);
                    if (cleaned.length <= 10) {
                        e.target.value = Utils.formatPhone(cleaned);
                    }
                });
            });
        },

        validateField: (field) => {
            const value = field.value.trim();
            let isValid = true;
            let message = '';

            // Remove existing validation classes
            field.classList.remove('valid', 'invalid');
            const existingMessage = field.parentNode.querySelector('.validation-message');
            if (existingMessage) {
                existingMessage.remove();
            }

            // Required field validation
            if (field.hasAttribute('required') && !value) {
                isValid = false;
                message = 'This field is required';
            }

            // Email validation
            if (field.type === 'email' && value && !Utils.validateEmail(value)) {
                isValid = false;
                message = 'Please enter a valid email address';
            }

            // Phone validation
            if (field.type === 'tel' && value && !Utils.validatePhone(value)) {
                isValid = false;
                message = 'Please enter a valid phone number';
            }

            // Apply validation styling
            if (value) {
                field.classList.add(isValid ? 'valid' : 'invalid');
                
                if (!isValid) {
                    const errorDiv = document.createElement('div');
                    errorDiv.className = 'validation-message';
                    errorDiv.textContent = message;
                    errorDiv.style.color = '#E74C3C';
                    errorDiv.style.fontSize = '0.8rem';
                    errorDiv.style.marginTop = '0.25rem';
                    field.parentNode.appendChild(errorDiv);
                }
            }

            return isValid;
        },

        handleFormSubmission: (form) => {
            const formData = new FormData(form);
            const data = Object.fromEntries(formData.entries());
            
            // Validate all fields
            const inputs = form.querySelectorAll('input[required], textarea[required], select[required]');
            let allValid = true;
            
            inputs.forEach(input => {
                if (!UXEnhancements.validateField(input)) {
                    allValid = false;
                }
            });

            if (!allValid) {
                // Scroll to first invalid field
                const firstInvalid = form.querySelector('.invalid');
                if (firstInvalid) {
                    firstInvalid.scrollIntoView({ behavior: 'smooth', block: 'center' });
                    firstInvalid.focus();
                }
                return;
            }

            // Show loading state
            const submitBtn = form.querySelector('button[type="submit"]');
            const originalContent = submitBtn.innerHTML;
            submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i><span>Processing...</span>';
            submitBtn.disabled = true;

            // Track conversion
            ConversionTracker.trackQuoteForm(data);

            // Simulate form processing
            setTimeout(() => {
                // Show success message
                UXEnhancements.showSuccessMessage(form);
                
                // Reset form
                form.reset();
                submitBtn.innerHTML = originalContent;
                submitBtn.disabled = false;
                
                // Track successful submission
                ConversionTracker.track('quote_form_success', {
                    label: 'successful_quote_submission',
                    value: 1
                });
            }, 2000);
        },

        showSuccessMessage: (form) => {
            const successDiv = document.createElement('div');
            successDiv.className = 'success-message';
            successDiv.innerHTML = `
                <div style="background: #27AE60; color: white; padding: 1rem; border-radius: 0.5rem; margin: 1rem 0; text-align: center;">
                    <i class="fas fa-check-circle" style="font-size: 1.5rem; margin-bottom: 0.5rem;"></i>
                    <h3 style="margin: 0 0 0.5rem 0;">Thank You!</h3>
                    <p style="margin: 0;">Your quote request has been submitted successfully. We will contact you within ${CONFIG.responseTime}.</p>
                </div>
            `;
            
            form.parentNode.insertBefore(successDiv, form);
            
            // Remove success message after 5 seconds
            setTimeout(() => {
                successDiv.remove();
            }, 5000);
        },

        setupMobileMenu: () => {
            const mobileMenuToggle = document.getElementById('mobileMenuToggle');
            const navMenu = document.getElementById('navMenu');
            
            if (mobileMenuToggle && navMenu) {
                mobileMenuToggle.addEventListener('click', () => {
                    navMenu.classList.toggle('active');
                    mobileMenuToggle.classList.toggle('active');
                });

                // Close menu when clicking on links
                navMenu.addEventListener('click', (e) => {
                    if (e.target.tagName === 'A') {
                        navMenu.classList.remove('active');
                        mobileMenuToggle.classList.remove('active');
                    }
                });

                // Close menu when clicking outside
                document.addEventListener('click', (e) => {
                    if (!navMenu.contains(e.target) && !mobileMenuToggle.contains(e.target)) {
                        navMenu.classList.remove('active');
                        mobileMenuToggle.classList.remove('active');
                    }
                });
            }
        },

        setupSmoothScrolling: () => {
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    e.preventDefault();
                    const target = document.querySelector(this.getAttribute('href'));
                    if (target) {
                        const headerHeight = document.getElementById('header').offsetHeight;
                        const targetPosition = target.offsetTop - headerHeight - 20;
                        
                        window.scrollTo({
                            top: targetPosition,
                            behavior: 'smooth'
                        });
                    }
                });
            });
        },

        setupLazyLoading: () => {
            if ('IntersectionObserver' in window) {
                const imageObserver = new IntersectionObserver((entries, observer) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            const img = entry.target;
                            img.src = img.dataset.src;
                            img.classList.remove('lazy');
                            observer.unobserve(img);
                        }
                    });
                });

                document.querySelectorAll('img[data-src]').forEach(img => {
                    imageObserver.observe(img);
                });
            }
        },

        setupExitIntent: () => {
            let exitIntentShown = false;
            
            document.addEventListener('mouseleave', (e) => {
                if (e.clientY <= 0 && !exitIntentShown) {
                    exitIntentShown = true;
                    UXEnhancements.showExitIntent();
                }
            });
        },

        showExitIntent: () => {
            const exitIntentDiv = document.createElement('div');
            exitIntentDiv.className = 'exit-intent-popup';
            exitIntentDiv.innerHTML = `
                <div style="position: fixed; top: 0; left: 0; right: 0; bottom: 0; background: rgba(0,0,0,0.8); z-index: 10000; display: flex; align-items: center; justify-content: center;">
                    <div style="background: white; padding: 2rem; border-radius: 1rem; max-width: 500px; margin: 1rem; text-align: center; position: relative;">
                        <button onclick="this.parentElement.parentElement.remove()" style="position: absolute; top: 1rem; right: 1rem; background: none; border: none; font-size: 1.5rem; cursor: pointer;">&times;</button>
                        <h3 style="color: #2C3E50; margin-bottom: 1rem;">Wait! Don't Leave Yet!</h3>
                        <p style="color: #7F8C8D; margin-bottom: 1.5rem;">Get your FREE quote in just 15 minutes. No obligation, no spam, just honest pricing.</p>
                        <a href="#quote-section" class="cta-button primary" style="text-decoration: none;">
                            <i class="fas fa-calculator"></i>
                            <span>Get My Free Quote</span>
                        </a>
                    </div>
                </div>
            `;
            
            document.body.appendChild(exitIntentDiv);
            
            // Track exit intent
            ConversionTracker.track('exit_intent_popup', {
                label: 'exit_intent_shown',
                value: 1
            });
        },

        setupUrgencyTimer: () => {
            const urgencyElements = document.querySelectorAll('.scarcity-indicator');
            if (urgencyElements.length === 0) return;

            // Simulate urgency with a countdown
            let timeLeft = 300; // 5 minutes in seconds
            
            const updateTimer = () => {
                const minutes = Math.floor(timeLeft / 60);
                const seconds = timeLeft % 60;
                
                urgencyElements.forEach(element => {
                    element.textContent = `Only ${minutes}:${seconds.toString().padStart(2, '0')} left for this offer!`;
                });
                
                if (timeLeft > 0) {
                    timeLeft--;
                    setTimeout(updateTimer, 1000);
                } else {
                    urgencyElements.forEach(element => {
                        element.textContent = 'Offer expired! Call now for special pricing.';
                    });
                }
            };
            
            updateTimer();
        }
    };

    // Performance Optimizations
    const Performance = {
        init: () => {
            Performance.setupImageOptimization();
            Performance.setupResourceHints();
            Performance.setupCriticalCSS();
        },

        setupImageOptimization: () => {
            // Add loading="lazy" to images below the fold
            const images = document.querySelectorAll('img:not([loading])');
            images.forEach((img, index) => {
                if (index > 2) { // Skip first 3 images (likely above fold)
                    img.setAttribute('loading', 'lazy');
                }
            });
        },

        setupResourceHints: () => {
            // Preload critical resources
            const criticalResources = [
                'https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&family=Inter:wght@300;400;500;600;700&display=swap',
                'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css'
            ];

            criticalResources.forEach(resource => {
                const link = document.createElement('link');
                link.rel = 'preload';
                link.href = resource;
                link.as = 'style';
                document.head.appendChild(link);
            });
        },

        setupCriticalCSS: () => {
            // Inline critical CSS for above-the-fold content
            const criticalCSS = `
                .header { position: fixed; top: 0; left: 0; right: 0; z-index: 1000; }
                .hero { min-height: 100vh; display: flex; align-items: center; }
                .cta-button { display: inline-flex; align-items: center; padding: 1rem 2rem; }
            `;
            
            const style = document.createElement('style');
            style.textContent = criticalCSS;
            document.head.insertBefore(style, document.head.firstChild);
        }
    };

    // Analytics and Tracking
    const Analytics = {
        init: () => {
            Analytics.setupScrollTracking();
            Analytics.setupClickTracking();
            Analytics.setupFormTracking();
            Analytics.setupTimeOnPage();
        },

        setupScrollTracking: () => {
            let maxScroll = 0;
            const scrollMilestones = [25, 50, 75, 90, 100];
            
            const trackScroll = Utils.throttle(() => {
                const scrollPercent = Math.round((window.scrollY / (document.body.scrollHeight - window.innerHeight)) * 100);
                
                if (scrollPercent > maxScroll) {
                    maxScroll = scrollPercent;
                    
                    scrollMilestones.forEach(milestone => {
                        if (scrollPercent >= milestone && maxScroll < milestone + 10) {
                            ConversionTracker.track('scroll_depth', {
                                label: `${milestone}%_scroll`,
                                value: milestone
                            });
                        }
                    });
                }
            }, 1000);
            
            window.addEventListener('scroll', scrollTracking, { passive: true });
        },

        setupClickTracking: () => {
            document.addEventListener('click', (e) => {
                const target = e.target.closest('a, button');
                if (!target) return;
                
                const trackingData = {
                    element: target.tagName.toLowerCase(),
                    text: target.textContent.trim().substring(0, 50),
                    href: target.href || '',
                    className: target.className
                };
                
                ConversionTracker.track('click', trackingData);
                
                // Track specific conversion actions
                if (target.href && target.href.includes('tel:')) {
                    ConversionTracker.trackPhoneCall();
                } else if (target.href && target.href.includes('mailto:')) {
                    ConversionTracker.trackEmailContact();
                }
            });
        },

        setupFormTracking: () => {
            document.querySelectorAll('form').forEach(form => {
                form.addEventListener('submit', () => {
                    ConversionTracker.track('form_submit', {
                        formId: form.id || 'unnamed_form',
                        formAction: form.action || 'no_action'
                    });
                });
            });
        },

        setupTimeOnPage: () => {
            const startTime = Date.now();
            
            window.addEventListener('beforeunload', () => {
                const timeOnPage = Math.round((Date.now() - startTime) / 1000);
                ConversionTracker.track('time_on_page', {
                    label: 'page_exit',
                    value: timeOnPage
                });
            });
        }
    };

    // Initialize everything when DOM is ready
    document.addEventListener('DOMContentLoaded', () => {
        UXEnhancements.init();
        Performance.init();
        Analytics.init();
        
        // Track page view
        ConversionTracker.track('page_view', {
            label: window.location.pathname,
            value: 1
        });
    });

    // Expose utilities globally for debugging
    window.EliteCollision = {
        Utils,
        ConversionTracker,
        CONFIG
    };

})();
