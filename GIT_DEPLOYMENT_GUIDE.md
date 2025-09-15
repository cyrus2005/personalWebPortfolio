# Git Deployment Guide for cPanel (Namecheap)

## Method 1: cPanel Git Integration (Recommended)

### Step 1: Check if your hosting supports Git
1. Log into your cPanel
2. Look for "Git Version Control" in the Software section
3. If you see it, you can use this method

### Step 2: Create Git Repository in cPanel
1. In cPanel, click "Git Version Control"
2. Click "Create" to create a new repository
3. Name it "portfolio" or "cyruswilburn-portfolio"
4. Choose "Clone a Repository" and enter your GitHub URL (if you push to GitHub first)
5. Or choose "Create a New Repository" and we'll push to it later

### Step 3: Push Your Code to GitHub (Optional but Recommended)
```bash
# Create a GitHub repository first, then:
git remote add origin https://github.com/yourusername/cyruswilburn-portfolio.git
git branch -M main
git push -u origin main
```

### Step 4: Clone to cPanel (if using GitHub)
1. In cPanel Git Version Control
2. Click "Clone" 
3. Enter your GitHub repository URL
4. Choose the directory (usually public_html or a subdomain)

## Method 2: Direct Upload via File Manager

### Step 1: Create a ZIP file
```bash
# In your project directory
git archive --format=zip --output=portfolio.zip HEAD
```

### Step 2: Upload via cPanel File Manager
1. Log into cPanel
2. Open "File Manager"
3. Navigate to public_html
4. Upload the portfolio.zip file
5. Extract it in public_html

## Method 3: FTP/SFTP Upload

### Step 1: Get FTP credentials from cPanel
1. In cPanel, go to "FTP Accounts"
2. Create a new FTP account or use the main account
3. Note down the FTP server, username, and password

### Step 2: Use Git with FTP
```bash
# Install git-ftp if you don't have it
# Windows: Download from https://git-ftp.github.io/git-ftp/
# Or use: npm install -g git-ftp

# Configure git-ftp
git config git-ftp.url ftp://yourdomain.com
git config git-ftp.user your-ftp-username
git config git-ftp.password your-ftp-password

# Upload all files
git ftp push
```

## Method 4: Manual Git Clone (Advanced)

### Step 1: SSH Access (if available)
1. Enable SSH in cPanel
2. Get SSH credentials
3. Use terminal/command prompt:

```bash
# SSH into your server
ssh username@yourdomain.com

# Navigate to public_html
cd public_html

# Clone your repository
git clone https://github.com/yourusername/cyruswilburn-portfolio.git .

# Set up permissions
chmod 755 logs/
chmod 644 includes/contact_handler.php
```

## Recommended Workflow

### 1. Push to GitHub First
```bash
# Create GitHub repository, then:
git remote add origin https://github.com/yourusername/cyruswilburn-portfolio.git
git branch -M main
git push -u origin main
```

### 2. Use cPanel Git Integration
1. In cPanel, go to "Git Version Control"
2. Click "Create" → "Clone a Repository"
3. Enter your GitHub URL
4. Choose public_html as the directory
5. Click "Create"

### 3. Set up Auto-Deploy (Optional)
1. In cPanel Git Version Control
2. Click on your repository
3. Enable "Auto Deploy" if available
4. This will automatically pull changes when you push to GitHub

## Post-Deployment Setup

### 1. Set File Permissions
```bash
# Via cPanel File Manager or SSH:
chmod 755 logs/
chmod 644 includes/contact_handler.php
chmod 644 .htaccess
```

### 2. Configure Email
1. Edit `includes/contact_handler.php`
2. Update the email address on line 15:
```php
$to = 'your-email@yourdomain.com';
```

### 3. Test the Website
1. Visit your domain
2. Test the contact form
3. Check all portfolio links
4. Verify mobile responsiveness

## Updating Your Website

### Method 1: Via cPanel Git
1. Make changes locally
2. Commit and push to GitHub:
```bash
git add .
git commit -m "Update portfolio"
git push origin main
```
3. In cPanel Git Version Control, click "Pull" on your repository

### Method 2: Direct Upload
1. Make changes locally
2. Create new ZIP file
3. Upload via File Manager
4. Extract and overwrite files

## Troubleshooting

### Git Not Available in cPanel
- Use Method 2 (ZIP upload) or Method 3 (FTP)
- Contact Namecheap support to enable Git

### Permission Issues
```bash
# Set correct permissions
chmod 755 logs/
chmod 644 includes/contact_handler.php
chmod 644 assets/css/style.css
chmod 644 assets/js/script.js
```

### Contact Form Not Working
1. Check PHP mail configuration
2. Verify email address in contact_handler.php
3. Test with a simple PHP mail script

### Images Not Loading
1. Check file paths in HTML
2. Verify image files exist
3. Check file permissions

## Quick Start Commands

```bash
# Initialize Git (already done)
git init
git add .
git commit -m "Initial commit"

# Push to GitHub (create repo first)
git remote add origin https://github.com/yourusername/cyruswilburn-portfolio.git
git branch -M main
git push -u origin main

# For future updates
git add .
git commit -m "Update description"
git push origin main
```

## File Structure After Deployment
```
public_html/
├── index.php                 # Main portfolio page
├── assets/
│   ├── css/style.css
│   ├── js/script.js
│   └── images/
├── includes/
│   └── contact_handler.php
├── logs/                     # Contact form logs
├── nicheport2/              # Auto repair website
├── barber-shop/             # Barbershop website
├── small-cafe/              # Cafe website
├── .htaccess                # Security & performance
├── robots.txt               # SEO
└── README.md
```

Your professional portfolio website is now ready to deploy! Choose the method that works best with your hosting setup.
