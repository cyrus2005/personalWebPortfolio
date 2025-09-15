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
6. **Important**: Update the `.cpanel.yml` file to use your actual cPanel username:
   - Edit the file and change `/home/cyruswilburn/public_html/` to `/home/YOURUSERNAME/public_html/`
7. The `.cpanel.yml` file will automatically deploy all files when you push changes

### Deployment Process
After cloning the repository:
1. **Automatic Deployment (Push)**: When you push changes to GitHub, they automatically deploy to your website
2. **Manual Deployment**: Use the "Deploy HEAD Commit" button in cPanel Git Version Control
3. **Update from Remote**: Use "Update from Remote" to pull latest changes from GitHub

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

### cPanel Git Deployment Not Working
1. **Check .cpanel.yml file**: Make sure it's in the root directory and properly formatted
2. **Verify repository requirements**:
   - Valid `.cpanel.yml` file exists
   - No uncommitted changes
   - Clean working tree
3. **Check deployment path**: The `$HOME/public_html/` should work automatically
4. **Try manual deployment**: Use "Deploy HEAD Commit" button in cPanel
5. **Check cPanel logs**: Look for deployment error messages
6. **Verify file permissions**: Make sure cPanel can write to your directory

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