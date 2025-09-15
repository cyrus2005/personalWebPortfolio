# Ambassadors for Jesus Christ - Motorcycle Ministry Website

A professional, modern website for the Ambassadors for Jesus Christ Motorcycle Ministry based in Houston, Texas.

## Features

- **Modern Design**: Badass motorcycle club aesthetic with Christian ministry respect
- **Responsive Layout**: Mobile-first design that works on all devices
- **Photo Gallery**: Horizontal scrolling gallery with categories and lightbox
- **Admin Dashboard**: Photo management and import functionality
- **Events Page**: Coming soon page with Facebook integration
- **Member Access**: Discreet admin login system

## Setup Instructions

### 1. Prerequisites
- XAMPP installed and running
- PHP 7.4 or higher
- MySQL 5.7 or higher

### 2. Database Setup
1. Start XAMPP (Apache and MySQL)
2. Open your browser and go to: `http://localhost/mmambassadors/setup_database.php`
3. This will create the database and all necessary tables

### 3. File Structure
```
/mmambassadors/
├── index.php (home page)
├── gallery.php (photo gallery)
├── events.php (upcoming events)
├── login.php (admin access)
├── setup_database.php (database setup)
├── admin/
│   ├── index.php (gallery admin)
│   └── import_photos.php
├── includes/
│   ├── header.php
│   └── footer.php
├── config/
│   └── database.php
├── mediaGallery/ (place your photos here)
├── mediaStickers/
│   ├── mmLogo.png (main logo)
│   └── motorcycleSticker.png (background element)
├── styles.css
├── script.js
└── README.md
```

### 4. Adding Photos
1. Place your photos in the `mediaGallery/` folder
2. Go to `http://localhost/mmambassadors/login.php`
3. Login with: `admin` / `admin`
4. Click "Import Photos" to add them to the database

### 5. Customization
- **Logo**: Replace `mediaStickers/mmLogo.png` with your logo
- **Background**: Replace `mediaStickers/motorcycleSticker.png` with your background element
- **Colors**: Edit the CSS variables in `styles.css` to match your brand
- **Content**: Update text content in the PHP files

## Pages

### Home Page (`index.php`)
- Hero section with mission statement
- About us section
- Group photo placeholder
- Founder's vision
- Call to action buttons

### Gallery (`gallery.php`)
- Featured photos section
- Category-based filtering
- Horizontal scrolling
- Lightbox modal for full-size viewing

### Events (`events.php`)
- Coming soon message
- Facebook integration

### Admin Access (`login.php`)
- Simple login form
- Default credentials: admin/admin

### Admin Dashboard (`admin/index.php`)
- Photo statistics
- Quick actions
- Recent images
- Category breakdown

## Technical Details

- **Backend**: PHP with PDO for database operations
- **Frontend**: HTML5, CSS3, JavaScript
- **Database**: MySQL with proper indexing
- **Responsive**: Mobile-first CSS Grid and Flexbox
- **Performance**: Lazy loading, optimized images, smooth animations

## Browser Support

- Chrome 60+
- Firefox 60+
- Safari 12+
- Edge 79+

## Security Features

- SQL injection prevention with PDO prepared statements
- Input sanitization
- Session management
- Password hashing

## Deployment to GoDaddy

1. Upload all files to your GoDaddy hosting
2. Create MySQL database in GoDaddy control panel
3. Update database credentials in `config/database.php`
4. Import the database structure
5. Upload photos to `mediaGallery/` folder
6. Run the import script to add photos to database

## Support

For technical support or customization requests, please contact the development team.

---

**Ambassadors for Jesus Christ Motorcycle Ministry**  
Houston, Texas  
*Riding for the Lord since 1997*
