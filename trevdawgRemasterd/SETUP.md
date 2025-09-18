# Setup Guide - Trevor's Real Estate Website

## Quick Start

### 1. Database Setup
1. Open phpMyAdmin in your browser (usually `http://localhost/phpmyadmin`)
2. Create a new database called `trevor_real_estate`
3. Import the `database.sql` file to set up tables and sample data
4. Update database credentials in `config.php` if needed

### 2. File Permissions
Make sure these directories are writable:
- `logs/` (for activity logs)
- `cache/` (for rate limiting)

### 3. Access the Website
- Open your browser and go to `http://localhost/trevdawgRemasterd`
- The website should load with all features working

## Features Included

### ✅ Responsive Design
- Mobile-first approach
- Works perfectly on all devices
- Touch-friendly navigation
- Optimized images and performance

### ✅ Contact Form
- High-converting design
- Real-time validation
- Database storage
- Email notifications
- Rate limiting protection

### ✅ Professional Styling
- Muted sand beige, black, and gray color scheme
- Modern typography (Playfair Display + Inter)
- Smooth animations and transitions
- Accessibility features

### ✅ Performance Optimized
- Lazy loading images
- Debounced scroll events
- Optimized CSS and JavaScript
- Mobile touch gestures

## Testing Checklist

### Desktop Testing
- [ ] Navigation works smoothly
- [ ] All sections display correctly
- [ ] Contact form submits successfully
- [ ] Testimonials slider functions
- [ ] Hover effects work properly

### Mobile Testing
- [ ] Hamburger menu opens/closes
- [ ] Touch scrolling is smooth
- [ ] Contact form is easy to use
- [ ] Images load properly
- [ ] Text is readable without zooming

### Performance Testing
- [ ] Page loads quickly
- [ ] Images are optimized
- [ ] No JavaScript errors in console
- [ ] Smooth animations
- [ ] Mobile-friendly interactions

## Customization

### Colors
Edit the CSS variables in `styles.css`:
```css
:root {
    --sand-beige: #f5f1eb;
    --black: #2c2c2c;
    --accent: #d4af37;
}
```

### Content
- Update contact information in `config.php`
- Modify testimonials in the database
- Add/remove properties in the database
- Update social media links

### Images
- Replace images in the `media/` folder
- Update image references in HTML files
- Optimize images for web (recommended: WebP format)

## Troubleshooting

### Common Issues

**Database Connection Error**
- Check XAMPP is running
- Verify database credentials in `config.php`
- Ensure database exists and tables are created

**Contact Form Not Working**
- Check PHP error logs
- Verify email configuration
- Test database connection

**Images Not Loading**
- Check file paths are correct
- Ensure images exist in `media/` folder
- Verify file permissions

**Mobile Issues**
- Clear browser cache
- Test on different devices
- Check viewport meta tag

## Performance Tips

1. **Optimize Images**: Use WebP format and compress images
2. **Enable Gzip**: Configure Apache to compress files
3. **Use CDN**: Consider using a CDN for static assets
4. **Cache Headers**: Set appropriate cache headers
5. **Minify CSS/JS**: Minify files for production

## Security Notes

- Change default database credentials
- Update encryption key in `config.php`
- Enable HTTPS in production
- Regular security updates
- Backup database regularly

## Support

For issues or questions:
1. Check the troubleshooting section
2. Review PHP error logs
3. Test in different browsers
4. Verify XAMPP configuration

---

**Note**: This website is optimized for both desktop and mobile devices with a focus on conversion and user experience.
