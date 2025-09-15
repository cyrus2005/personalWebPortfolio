# FileZilla Setup Guide for MM Ambassadors Website

## 🚀 **Quick Setup for Real Images**

### **Step 1: Download FileZilla**
1. Go to https://filezilla-project.org/
2. Download FileZilla Client (free)
3. Install it on your computer

### **Step 2: Connect to Local Server**
1. Open FileZilla
2. **Host**: `localhost` or `127.0.0.1`
3. **Username**: `root` (or leave blank)
4. **Password**: (leave blank)
5. **Port**: `21` (or leave default)
6. Click **Quickconnect**

### **Step 3: Navigate to Website Folder**
1. In the **Remote site** panel (right side), navigate to:
   ```
   /htdocs/mmambassadors/
   ```
2. You should see folders like:
   - `mediaGallery/` (this is where photos go)
   - `admin/`
   - `includes/`
   - etc.

### **Step 4: Upload Your Photos**
1. In the **Local site** panel (left side), navigate to your photos folder
2. Select the photos you want to upload
3. Drag and drop them into the `mediaGallery/` folder on the right
4. Wait for upload to complete

### **Step 5: Update Database**
1. Go to: http://localhost/mmambassadors/sync_media_folder.php
2. This will add your new photos to the database
3. View gallery: http://localhost/mmambassadors/gallery.php

## 📁 **File Structure**
```
mmambassadors/
├── mediaGallery/          ← Upload photos here
│   ├── your_photo1.jpg
│   ├── your_photo2.jpg
│   └── ...
├── admin/                 ← Admin panel
├── includes/              ← Website files
└── styles.css            ← Styling
```

## 🖼️ **Supported Image Formats**
- JPG/JPEG
- PNG
- GIF
- WebP

## 📏 **Recommended Image Sizes**
- **Width**: 800-1200px
- **Height**: 600-900px
- **File Size**: Under 2MB each

## 🔧 **Troubleshooting**

### **If images don't show:**
1. Check file permissions (should be 644)
2. Make sure images are in `mediaGallery/` folder
3. Run the sync script: `sync_media_folder.php`
4. Check file names (no spaces, use underscores)

### **If FileZilla won't connect:**
1. Make sure XAMPP is running
2. Try using `127.0.0.1` instead of `localhost`
3. Check if FTP is enabled in XAMPP

## 🎯 **Quick Upload Process**
1. **FileZilla**: Upload photos to `mediaGallery/`
2. **Browser**: Go to `sync_media_folder.php`
3. **Gallery**: View at `gallery.php`
4. **Admin**: Manage at `admin/index.php`

## 💡 **Pro Tips**
- Upload multiple photos at once
- Use descriptive filenames
- Keep originals as backup
- Use the admin drag-and-drop for future uploads
