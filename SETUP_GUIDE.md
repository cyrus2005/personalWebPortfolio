# Setup Guide - Cyrus Wilburn Portfolio

## Quick Setup for cPanel Hosting

### 1. Upload Files
1. Upload all files to your cPanel `public_html` directory
2. Maintain the file structure as shown in the repository

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

## Deployment Methods

### Method 1: cPanel Git Integration (Recommended)
1. In cPanel, go to "Git Version Control"
2. Click "Clone a Repository"
3. Enter: `https://github.com/cyrus2005/personalPortfolioCyrus.git`
4. Choose `public_html` as directory
5. Click "Clone"
6. The `.cpanel.yml` file will automatically deploy all files to `public_html`

### Method 2: File Manager Upload
1. Download the repository as ZIP
2. Upload to cPanel File Manager
3. Extract in `public_html` directory

### Method 3: FTP Upload
1. Use FTP client (FileZilla, WinSCP)
2. Upload all files to `public_html`
3. Set proper permissions

## Post-Deployment Checklist

- [ ] SSL certificate installed
- [ ] Contact form working and sending emails
- [ ] All portfolio links working
- [ ] Mobile responsiveness tested
- [ ] Images loading correctly
- [ ] File permissions set correctly
- [ ] Email address updated in contact handler

## Troubleshooting

### Contact Form Not Working
1. Check PHP mail configuration
2. Verify email address in `contact_handler.php`
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
- **Phone**: (270) 801-9780
- **Email**: cyrus@cyruswilburn.dev

Your professional portfolio website is now ready to attract clients and showcase your web development skills!