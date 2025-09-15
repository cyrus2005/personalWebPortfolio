# GoDaddy Hosting Setup Guide
## Ambassadors for Jesus Christ Motorcycle Ministry Website

### Prerequisites
- ✅ GoDaddy hosting account (you already have this)
- ✅ Domain name (you already have this)
- ✅ Website files ready for upload
- ✅ Database access (MySQL)

---

## Step 1: Prepare Your Files for Upload

### 1.1 Create a ZIP file of your website
1. **Select all files** in your `C:\xampp\htdocs\mmambassadors` folder
2. **Right-click** → **Send to** → **Compressed (zipped) folder**
3. **Rename** the ZIP file to `mmambassadors-website.zip`

### 1.2 Files to Upload
Make sure these files are included in your ZIP:
- `index.php` (homepage)
- `gallery.php` (photo gallery)
- `events.php` (events page)
- `prayer.php` (prayer requests)
- `login.php` (admin access)
- `admin/` folder (admin dashboard)
- `includes/` folder (header/footer)
- `config/` folder (database config)
- `styles.css` (main stylesheet)
- `script.js` (JavaScript)
- `mediaGallery/` folder (photos)
- `mediaStickers/` folder (logos/stickers)
- `eventImages/` folder (event photos)

---

## Step 2: Access GoDaddy cPanel

### 2.1 Login to GoDaddy
1. Go to **godaddy.com**
2. Click **Sign In** (top right)
3. Enter your **Username/Email** and **Password**

### 2.2 Access Hosting Control Panel
1. Go to **My Products** → **Web Hosting**
2. Find your hosting plan and click **Manage**
3. Click **cPanel** (or **Plesk** if that's what you have)

---

## Step 3: Upload Your Website Files

### 3.1 Using File Manager (Recommended)
1. In cPanel, find **File Manager**
2. Navigate to **public_html** folder
3. **Delete any default files** (index.html, etc.)
4. Click **Upload** button
5. Select your `mmambassadors-website.zip` file
6. Wait for upload to complete
7. **Right-click** the ZIP file → **Extract**
8. **Delete** the ZIP file after extraction

### 3.2 Using FTP (Alternative)
1. Download **FileZilla** (free FTP client)
2. In cPanel, go to **FTP Accounts**
3. Create a new FTP account or use your main account
4. Use FileZilla to connect:
   - **Host**: ftp.yourdomain.com
   - **Username**: your FTP username
   - **Password**: your FTP password
   - **Port**: 21
5. Upload all files to `/public_html/` folder

---

## Step 4: Set Up MySQL Database

### 4.1 Create Database
1. In cPanel, find **MySQL Databases**
2. Create a new database named `mmambassadors`
3. Note down the **database name** (usually `username_mmambassadors`)

### 4.2 Create Database User
1. In **MySQL Databases** section
2. Create a new user:
   - **Username**: `mmambassadors_user`
   - **Password**: Create a strong password (save this!)
3. **Add user to database** with **ALL PRIVILEGES**

### 4.3 Update Database Configuration
1. Edit `config/database.php` on your server
2. Update the database connection details:

```php
<?php
class Database {
    private $host = "localhost";
    private $db_name = "your_username_mmambassadors";  // Replace with your actual database name
    private $username = "your_username_mmambassadors_user";  // Replace with your actual username
    private $password = "your_database_password";  // Replace with your actual password
    private $conn;
    
    public function getConnection() {
        $this->conn = null;
        
        try {
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, 
                                $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $exception) {
            echo "Connection error: " . $exception->getMessage();
        }
        
        return $this->conn;
    }
}
?>
```

---

## Step 5: Set Up Database Tables

### 5.1 Access phpMyAdmin
1. In cPanel, find **phpMyAdmin**
2. Click to open it
3. Select your `mmambassadors` database

### 5.2 Import Database Structure
1. Click **Import** tab
2. Upload the `setup_database.php` file OR manually create tables:

```sql
-- Create gallery_images table
CREATE TABLE `gallery_images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `filename` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `category` varchar(100) DEFAULT 'general',
  `created_at` timestamp DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Create events table
CREATE TABLE `events` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `description` text,
  `event_date` datetime NOT NULL,
  `location` varchar(255) DEFAULT NULL,
  `status` enum('upcoming','ongoing','completed','cancelled') DEFAULT 'upcoming',
  `photo_filename` varchar(255) DEFAULT NULL,
  `created_at` timestamp DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Create prayer_requests table
CREATE TABLE `prayer_requests` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `request` text NOT NULL,
  `status` enum('pending','prayed_for','answered','private') DEFAULT 'pending',
  `is_public` tinyint(1) DEFAULT 0,
  `created_at` timestamp DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
```

---

## Step 6: Enable HTTPS (SSL Certificate)

### 6.1 Free SSL with Let's Encrypt (Recommended)
1. In cPanel, find **SSL/TLS**
2. Click **Let's Encrypt**
3. Select your domain
4. Click **Issue** to get free SSL certificate
5. Wait for certificate to be issued (usually 5-10 minutes)

### 6.2 Force HTTPS Redirect
1. In cPanel, find **File Manager**
2. Navigate to `public_html` folder
3. Create/edit `.htaccess` file:

```apache
# Force HTTPS
RewriteEngine On
RewriteCond %{HTTPS} off
RewriteRule ^(.*)$ https://%{HTTP_HOST}%{REQUEST_URI} [L,R=301]

# Security headers
Header always set X-Content-Type-Options nosniff
Header always set X-Frame-Options DENY
Header always set X-XSS-Protection "1; mode=block"

# Cache static files
<IfModule mod_expires.c>
    ExpiresActive On
    ExpiresByType image/jpg "access plus 1 month"
    ExpiresByType image/jpeg "access plus 1 month"
    ExpiresByType image/gif "access plus 1 month"
    ExpiresByType image/png "access plus 1 month"
    ExpiresByType text/css "access plus 1 month"
    ExpiresByType application/pdf "access plus 1 month"
    ExpiresByType text/javascript "access plus 1 month"
    ExpiresByType application/javascript "access plus 1 month"
</IfModule>
```

---

## Step 7: Test Your Website

### 7.1 Basic Functionality Test
1. Visit `https://yourdomain.com`
2. Check all pages load correctly:
   - Homepage
   - Gallery
   - Events
   - Prayer Requests
   - Admin Login

### 7.2 Admin Panel Test
1. Go to `https://yourdomain.com/login.php`
2. Login with admin credentials
3. Test adding events
4. Test prayer request management
5. Test photo uploads

### 7.3 Database Test
1. Add a test event through admin panel
2. Submit a test prayer request
3. Verify data appears in phpMyAdmin

---

## Step 8: Security Considerations

### 8.1 Change Default Passwords
1. **Admin Login**: Change default admin password
2. **Database**: Use strong, unique passwords
3. **FTP**: Use strong FTP passwords

### 8.2 File Permissions
1. Set `config/` folder to **755**
2. Set `mediaGallery/` folder to **755**
3. Set `eventImages/` folder to **755**
4. Set PHP files to **644**

### 8.3 Regular Backups
1. **Database**: Export regularly via phpMyAdmin
2. **Files**: Download via File Manager or FTP
3. **Automated**: Set up GoDaddy's backup service

---

## Step 9: Performance Optimization

### 9.1 Enable Caching
1. In cPanel, find **Caching**
2. Enable **OPcache** for PHP
3. Enable **Browser Caching**

### 9.2 Image Optimization
1. Compress images before upload
2. Use WebP format when possible
3. Implement lazy loading (already included)

---

## Troubleshooting Common Issues

### Issue: Website shows "Database Connection Error"
**Solution**: Check database credentials in `config/database.php`

### Issue: Images not displaying
**Solution**: Check file permissions and paths

### Issue: Admin panel not working
**Solution**: Verify database tables are created correctly

### Issue: HTTPS not working
**Solution**: Wait 24 hours for SSL certificate to propagate

### Issue: 500 Internal Server Error
**Solution**: Check `.htaccess` file syntax and file permissions

---

## GoDaddy Support Resources

- **Knowledge Base**: https://www.godaddy.com/help
- **Community Forums**: https://www.godaddy.com/community
- **24/7 Support**: Available in your GoDaddy account

---

## Final Checklist

- [ ] Website files uploaded to public_html
- [ ] Database created and configured
- [ ] Database tables created
- [ ] SSL certificate installed
- [ ] HTTPS redirect working
- [ ] All pages loading correctly
- [ ] Admin panel functional
- [ ] File permissions set correctly
- [ ] Backups configured

---

## Contact Information

If you need help with any of these steps, the GoDaddy support team is available 24/7 through your hosting control panel.

**Your website will be live at**: `https://yourdomain.com`

**Admin panel**: `https://yourdomain.com/login.php`

---

*This guide was created specifically for the Ambassadors for Jesus Christ Motorcycle Ministry website.*
