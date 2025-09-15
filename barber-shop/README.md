
# Blade & Fade Barbers - Professional Barber Shop Website

A modern, responsive website designed specifically for "Blade & Fade Barbers" targeting men aged 20-35. Built with PHP, MySQL, HTML5, CSS3, and JavaScript.

## 🚀 Features

### Core Functionality
- **Responsive Design**: Mobile-first approach optimized for all devices
- **Modern UI/UX**: Dark theme with gold accents appealing to young men
- **Email Collection**: Newsletter subscription system with database storage
- **Contact Forms**: Professional contact and booking forms
- **Appointment Booking**: Online booking system with availability checking
- **Service Showcase**: Detailed service listings with pricing

### Technical Features
- **PHP Backend**: Secure form handling and data processing
- **MySQL Database**: Structured data storage for emails, bookings, and contacts
- **AJAX Forms**: Smooth form submissions without page reloads
- **Security**: Input validation, SQL injection prevention, and XSS protection
- **SEO Optimized**: Meta tags, semantic HTML, and performance optimized

## 📁 Project Structure

```
C:\xampp\htdocs\barber-shop/
├── index.php                 # Main homepage
├── book.php                  # Booking page
├── .htaccess                 # Apache configuration
├── README.md                 # This file
├── config/
│   ├── database.php          # Database connection (XAMPP configured)
│   └── config.php            # Site configuration
├── includes/
│   ├── functions.php         # Utility functions
│   ├── newsletter_handler.php # Newsletter subscription handler
│   ├── contact_handler.php   # Contact form handler
│   ├── booking_handler.php   # Booking form handler
│   ├── contact.php           # Contact form include
│   └── subscribe.php         # Newsletter subscription include
├── database/
│   └── schema.sql            # Database schema for phpMyAdmin import
├── assets/
│   ├── css/
│   │   └── style.css         # Main stylesheet with warm luxury color palette
│   └── js/
│       └── script.js         # JavaScript functionality
├── media/
│   ├── ClipperLogo.png       # Main logo with clippers and name (navigation)
│   ├── NameLogo.png          # Name-only logo (footer)
│   ├── fadeCut.jpg           # Fade cut example image
│   ├── beardtrim.jfif        # Beard trim example image
│   ├── classicCut.jfif       # Classic cut example image
│   ├── hotShave.jfif         # Hot shave example image
│   └── completeLook.jpg      # Complete look example image
├── admin/
│   ├── index.php             # Admin dashboard
│   └── export.php            # Data export functionality
└── logs/                     # Application logs (auto-created)
```

## 🛠️ Installation & Setup

### Prerequisites
- **XAMPP**: Download and install XAMPP from https://www.apachefriends.org/
- **PHP**: Version 7.4 or higher (included with XAMPP)
- **MySQL**: Version 5.7 or higher (included with XAMPP)
- **Web Browser**: Modern browser with JavaScript enabled

### Step 1: XAMPP Setup
1. Download and install XAMPP from https://www.apachefriends.org/
2. Start XAMPP Control Panel
3. Start **Apache** and **MySQL** services
4. Extract the project files to `C:\xampp\htdocs\barber-shop\` (or your XAMPP htdocs directory)

### Step 2: Database Setup with phpMyAdmin
1. Open your web browser and go to `http://localhost/phpmyadmin`
2. Click on "New" to create a new database
3. Name the database `blade_fade_barbers`
4. Select "utf8mb4_unicode_ci" as the collation
5. Click "Create"
6. Select the `blade_fade_barbers` database from the left sidebar
7. Click on the "Import" tab
8. Click "Choose File" and select `database/schema.sql` from your project folder
9. Click "Go" to import the database schema

### Step 3: Database Configuration
The database credentials are already configured for XAMPP in `config/database.php`:
```php
define('DB_HOST', 'localhost');
define('DB_NAME', 'blade_fade_barbers');
define('DB_USER', 'root');
define('DB_PASS', ''); // Empty password for XAMPP default
```

### Step 4: Configuration
1. Update `config/config.php` with your business information:
   - Business name, address, phone number
   - Email settings
   - Social media links
   - Service pricing and descriptions

2. Update contact information in `index.php`:
   - Business address
   - Phone number
   - Email address
   - Business hours

### Step 5: Access Your Website
1. Open your web browser
2. Navigate to `http://localhost/barber-shop`
3. The website should load with the Blade & Fade Barbers homepage

### Step 6: Test Installation
1. Test the contact form and newsletter subscription
2. Check that the booking modal opens correctly
3. Verify that data is being saved to the database by checking phpMyAdmin

## 🎨 Customization

### Colors and Branding
The website uses a clean, professional color palette optimized for mobile viewing with CSS custom properties for easy customization. Edit `assets/css/style.css`:

```css
:root {
    /* Primary Colors */
    --black: #000000;           /* Main text and accents */
    --white: #ffffff;           /* Background and contrast */
    --maroon: #8b0000;          /* Secondary accent color */
    
    /* Supporting Colors */
    --light-gray: #f5f5f5;      /* Light backgrounds */
    --medium-gray: #666666;     /* Secondary text */
    --dark-gray: #333333;       /* Dark accents */
    --text-primary: #000000;    /* Main text color */
    --text-secondary: #666666;  /* Secondary text color */
}
```

#### 🎨 Simplified Professional Palette
- **Black**: #000000 (Main text, accents, and primary brand color)
- **White**: #ffffff (Clean backgrounds and contrast)
- **Maroon**: #8b0000 (Secondary accent and call-to-action)

This palette provides excellent contrast and readability on mobile devices while maintaining a professional, masculine aesthetic perfect for a barber shop.

### Logo Integration
The website includes two professional logos:
- **ClipperLogo.png**: Main logo with clippers and business name - used in navigation header
- **NameLogo.png**: Name-only logo - used in footer section

Both logos are optimized for:
- **High resolution display** on all devices
- **Mobile responsiveness** with appropriate sizing
- **Professional appearance** that matches the brand aesthetic

### Services and Pricing
Update services in `config/config.php`:

```php
define('SERVICES', [
    'your-service' => [
        'name' => 'Your Service Name',
        'price' => 35.00,
        'duration' => 30,
        'description' => 'Service description'
    ],
    // ... add more services
]);
```

### Business Information
Update business details in `config/config.php`:

```php
define('BUSINESS_NAME', 'Your Business Name');
define('BUSINESS_PHONE', '(555) 123-4567');
define('BUSINESS_ADDRESS', 'Your Business Address');
```

## 📧 Email Configuration

### SMTP Setup (Optional)
To enable email notifications, configure SMTP in `config/config.php`:

```php
define('SMTP_HOST', 'smtp.gmail.com');
define('SMTP_PORT', 587);
define('SMTP_USERNAME', 'your-email@gmail.com');
define('SMTP_PASSWORD', 'your-app-password');
```

### Email Templates
Email templates are generated dynamically in the PHP handlers. Customize the HTML templates in:
- `includes/newsletter_handler.php`
- `includes/contact_handler.php`
- `includes/booking_handler.php`

## 🔒 Security Features

### Built-in Security
- **Input Validation**: All form inputs are sanitized and validated
- **SQL Injection Prevention**: Prepared statements used throughout
- **XSS Protection**: HTML entities encoding for user input
- **CSRF Protection**: Form tokens (can be added)
- **File Access Control**: `.htaccess` protects sensitive directories

### Security Recommendations
1. **Change Default Passwords**: Update all default credentials
2. **Enable HTTPS**: Use SSL certificates for production
3. **Regular Updates**: Keep PHP and MySQL updated
4. **Backup Database**: Regular database backups
5. **Monitor Logs**: Check `logs/` directory for suspicious activity

## 📱 Mobile Responsiveness

The website is fully responsive with mobile-first design principles:
- **Mobile-First Design**: Optimized primarily for mobile devices where most users will view the site
- **Touch-Friendly Interface**: Large buttons (minimum 44px) and touch targets for easy interaction
- **Clean Navigation**: Simplified navigation with hamburger menu for mobile
- **Optimized Typography**: Readable font sizes and line heights for small screens
- **Fast Loading**: Optimized images and CSS for quick mobile loading
- **High Contrast**: Strong color contrast for excellent readability on mobile screens
- **Cross-Browser Compatibility**: Works seamlessly on all modern mobile browsers

## 🚀 Performance Optimization

### Built-in Optimizations
- **CSS Minification**: Compressed stylesheets
- **Image Optimization**: WebP format support
- **Caching Headers**: Browser caching for static files
- **Gzip Compression**: Compressed file delivery

### Additional Optimizations
1. **CDN Integration**: Use a CDN for static assets
2. **Image Compression**: Optimize images before upload
3. **Database Indexing**: Ensure proper database indexes
4. **PHP OpCache**: Enable PHP OpCache for better performance

## 📊 Analytics and Tracking

### Built-in Tracking
- **Form Submissions**: Track newsletter signups and contact forms
- **Booking Analytics**: Monitor appointment bookings
- **Error Logging**: Application errors logged to files

### Google Analytics Integration
Add your Google Analytics tracking code to `index.php` in the `<head>` section:

```html
<!-- Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=GA_MEASUREMENT_ID"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'GA_MEASUREMENT_ID');
</script>
```

## 🛠️ Maintenance

### Regular Tasks
1. **Database Backups**: Weekly database backups
2. **Log Monitoring**: Check error logs regularly
3. **Security Updates**: Keep PHP and MySQL updated
4. **Content Updates**: Update services, pricing, and information

### Troubleshooting

#### Common Issues

**XAMPP Specific Issues:**
1. **Apache/MySQL Won't Start**: 
   - Check if ports 80 and 3306 are already in use
   - Run XAMPP as Administrator
   - Check Windows Firewall settings

2. **Database Connection Error**: 
   - Ensure MySQL service is running in XAMPP Control Panel
   - Check database credentials in `config/database.php` (should be root with empty password)
   - Verify database `blade_fade_barbers` exists in phpMyAdmin

3. **Website Not Loading**: 
   - Ensure Apache service is running in XAMPP Control Panel
   - Check that files are in `C:\xampp\htdocs\barber-shop\`
   - Try accessing `http://localhost/barber-shop`

4. **phpMyAdmin Access Issues**: 
   - Go to `http://localhost/phpmyadmin`
   - If it doesn't load, restart Apache service in XAMPP

**General Issues:**
1. **Forms Not Working**: Verify file permissions and PHP configuration
2. **Styling Issues**: Clear browser cache and check CSS file paths
3. **Email Not Sending**: Configure SMTP settings or check server mail configuration

#### Debug Mode
Enable debug mode in `config/config.php`:
```php
define('DEBUG_MODE', true);
```

## 📞 Support

### Documentation
- This README file
- Inline code comments
- PHP documentation for custom functions

### Contact Information
For technical support or customization requests, contact:
- **Email**: info@bladeandfade.com
- **Phone**: (555) 123-4567

## 📄 License

This project is created for Blade & Fade Barbers. All rights reserved.

## 🔄 Version History

### Version 1.0.0 (Current)
- Initial release
- Complete website with all core features
- Responsive design
- Email collection system
- Booking functionality
- Contact forms
- Modern UI/UX design

---

**Built with ❤️ for Blade & Fade Barbers**

*Professional grooming services for the modern gentleman*