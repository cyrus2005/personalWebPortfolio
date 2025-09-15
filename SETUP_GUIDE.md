# Cyrus Wilburn Portfolio - Setup Guide

## Quick Setup for cPanel Hosting

### 1. Upload Files
1. Upload all files to your cPanel public_html directory
2. Ensure the file structure is maintained:
   ```
   public_html/
   ├── index.php
   ├── assets/
   ├── includes/
   ├── logs/
   ├── nicheport2/
   ├── barber-shop/
   ├── small-cafe/
   └── .htaccess
   ```

### 2. Set Permissions
Set the following directory permissions:
- `logs/` - 755 (readable/writable by owner)
- `includes/` - 644 (readable by all)

### 3. Configure Email
1. Open `includes/contact_handler.php`
2. Update the email address on line 15:
   ```php
   $to = 'your-email@yourdomain.com'; // Replace with your email
   ```

### 4. Test Contact Form
1. Visit your website
2. Fill out the contact form
3. Check that you receive the email notification
4. Verify the client receives an auto-reply

### 5. Update Contact Information
In `index.php`, update:
- Phone number: (270) 801-9780
- Email: cyrus@cyruswilburn.dev
- Any other personal information

### 6. Add Real Portfolio Images
Replace the placeholder images in `assets/images/` with actual screenshots:
- `nicheport-preview.jpg` - Screenshot of NichePort website
- `barber-preview.jpg` - Screenshot of barbershop website
- `cafe-preview.jpg` - Screenshot of cafe website
- `ambassadors-preview.jpg` - Screenshot of ministry website

### 7. SSL Certificate (Recommended)
1. Install SSL certificate in cPanel
2. Uncomment the HTTPS redirect lines in `.htaccess`:
   ```apache
   RewriteCond %{HTTPS} off
   RewriteRule ^(.*)$ https://%{HTTP_HOST}%{REQUEST_URI} [L,R=301]
   ```

### 8. Domain Configuration
1. Point your domain to the hosting
2. Update any DNS settings as needed
3. Test the website on the live domain

## Features Included

### ✅ Professional Design
- Modern, clean layout
- Mobile-responsive design
- Professional color scheme
- High-converting layout

### ✅ Portfolio Showcase
- Featured projects section
- Live website links
- Technology tags
- Project descriptions

### ✅ Contact System
- Multiple contact methods (call, text, form)
- Professional contact form
- Email notifications
- Auto-reply system
- Spam protection

### ✅ SEO Optimization
- Meta tags and descriptions
- Structured data
- Mobile-first design
- Fast loading
- Clean URLs

### ✅ Security Features
- Input validation and sanitization
- Rate limiting
- Spam protection
- Security headers
- File protection

## Customization Options

### Colors
Update CSS variables in `assets/css/style.css`:
```css
:root {
    --primary-blue: #2563eb;
    --accent-orange: #f59e0b;
    /* Update these colors as needed */
}
```

### Content
- Update services in the services section
- Modify portfolio projects
- Change testimonials and reviews
- Update about section

### Contact Information
- Phone: (270) 801-9780
- Email: cyrus@cyruswilburn.dev
- Update throughout the site

## Troubleshooting

### Contact Form Not Working
1. Check PHP mail configuration
2. Verify email address in contact_handler.php
3. Check logs directory permissions
4. Test with a simple PHP mail script

### Images Not Loading
1. Check file paths in HTML
2. Verify image files exist
3. Check file permissions
4. Ensure correct file extensions

### Mobile Issues
1. Test on actual devices
2. Check viewport meta tag
3. Verify responsive CSS
4. Test touch interactions

## Support

For technical support or customization requests:
- Phone: (270) 801-9780
- Email: cyrus@cyruswilburn.dev

## Performance Tips

1. **Optimize Images**: Compress images before uploading
2. **Enable Caching**: Use browser caching headers
3. **Minify CSS/JS**: Compress files for faster loading
4. **Use CDN**: Consider a content delivery network
5. **Monitor Performance**: Use tools like Google PageSpeed Insights

## Security Checklist

- [ ] SSL certificate installed
- [ ] Contact form protected against spam
- [ ] Sensitive files protected
- [ ] Regular backups scheduled
- [ ] Security headers enabled
- [ ] File permissions set correctly

## Maintenance

### Regular Tasks
- Monitor contact form submissions
- Check for broken links
- Update portfolio projects
- Review and respond to inquiries
- Backup website files

### Monthly Tasks
- Review website analytics
- Update content as needed
- Check for security updates
- Test all functionality
- Review contact form logs

Your professional portfolio website is now ready to attract clients and showcase your web development skills!
