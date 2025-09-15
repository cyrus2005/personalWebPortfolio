# AI PROMPT: Ambassadors for Jesus Christ Motorcycle Ministry Website Redesign

## PROJECT OVERVIEW
Create a professional, badass motorcycle ministry website for "Ambassadors for Jesus Christ" - a Houston-based motorcycle ministry. The site should be built with PHP, HTML, and CSS to run on XAMPP localhost initially, but be ready for GoDaddy hosting later.

## CURRENT WEBSITE STRUCTURE (REPLICATE AND IMPROVE)

### 1. HERO SECTION
- **Layout**: Text on left, logo on right
- **Background**: Dark gradient (black to gray to red)
- **Title**: "AMBASSADORS FOR JESUS CHRIST" with white gradient text effect
- **Subtitle**: "MOTORCYCLE MINISTRY" in red
- **Mission Text**: "The Ambassadors for JESUS CHRIST Motorcycle Ministry provides an excellent opportunity to make a difference in the biker world while doing what you love to do and enjoying the fellowship of Christians committed to the LORD and to one another. Our goal is to share the love of JESUS CHRIST with a lost and hurting world."
- **Logo**: mmLogo.png positioned on the right
- **Background Element**: Static motorcycleSticker.png (subtle, no animation)

### 2. OUR MISSION SECTION
- **Background**: Light gray (#f8f9fa)
- **Content**: Same mission text as hero
- **Styling**: Clean, readable text with subtle shadows

### 3. ABOUT US SECTION
- **Background**: White with light gray gradient
- **Definition**: "am·bas·sa·dor (noun)" in red, italic
- **Content**: "An ambassador is someone authorized to act on behalf of a higher authority; they serve as a representative. The common usage today is a person who represents their country to a foreign government. The Ambassadors for JESUS CHRIST Motorcycle Ministry was founded by Pastor Hollywood Joe Guebara of Houston, Texas in 1997."

### 4. GROUP PHOTO SECTION
- **Title**: "OUR AMBASSADORS"
- **Layout**: Large photo placeholder on left, text on right
- **Placeholder**: Dashed red border with camera icon and upload instructions
- **Text**: "Meet Our Brotherhood" with description about ministry members
- **Responsive**: Stacks on mobile

### 5. FOUNDER'S VISION SECTION
- **Background**: Dark gradient (gray to black)
- **Title**: "FOUNDER'S VISION"
- **Three Vision Points**: 
  - "I'm a Christian"
  - "I'm a Messenger" 
  - "I'm a Biker"
- **Quote**: "Thru my Faith, with my Message and on my Motorcycle, I will ride those Highways and Byways looking for that Biker that will hear my Message and discover his faith in Jesus Christ. And when that happens, he becomes my brother. And as Brothers when we go out and follow the same system we create a brotherhood. I call that Brotherhood the Ambassadors for Jesus Christ. - Hollywood Joe (Founder of Ambassadors for Jesus Christ MM)"
- **Styling**: Subtle, not overly flashy

### 6. CALL TO ACTION SECTION
- **Background**: Red gradient
- **Title**: "JOIN THE BROTHERHOOD"
- **Buttons**: View Gallery, Upcoming Events, Access (discreet), Follow on Facebook

## GALLERY PAGE REQUIREMENTS
- **Featured Section**: Show 3 most recent photos prominently
- **Scrollable Rows**: Horizontal scrolling for both featured and categorized photos
- **Categories**: Organize remaining photos into tabs (Events, Rides, Meetings, etc.)
- **Custom Scrollbars**: Red-themed scrollbars with scroll hints
- **Database Integration**: Pull from gallery_images table
- **Responsive**: Mobile-friendly horizontal scrolling

## EVENTS PAGE REQUIREMENTS
- **Simple Design**: Just "Coming Soon" message
- **Minimal Content**: No detailed event information
- **Facebook Link**: Follow on Facebook for updates
- **Clean Layout**: Professional, not cluttered

## LOGIN/ACCESS PAGE REQUIREMENTS
- **Discreet Design**: Looks like simple access portal
- **Title**: "Access" (not "Member Login")
- **Credentials Display**: Show "admin / admin" on page
- **Minimal Content**: No member benefits or promotional text
- **Admin Focus**: Redirects to gallery admin dashboard

## ADMIN DASHBOARD REQUIREMENTS
- **Title**: "Gallery Admin"
- **Focus**: Photo management for database
- **Statistics**: Total images, featured images, categories
- **Quick Actions**: Import photos, manage gallery, view gallery
- **Recent Images**: Show recently added photos
- **Category Stats**: Breakdown by photo categories

## TECHNICAL REQUIREMENTS

### PHP Structure
- **Database**: MySQL with PDO
- **Tables**: members, events, gallery_images, announcements, contact_messages
- **Admin System**: Simple admin authentication
- **Photo Import**: Script to import from mediaGallery folder
- **Responsive**: Mobile-first design

### CSS Requirements
- **Fonts**: Oswald (headings), Open Sans (body), Playfair Display (quotes)
- **Color Scheme**: Black, red (#dc143c), white, light gray
- **Effects**: Subtle shadows, gradients, hover effects
- **Animations**: Smooth transitions, no distracting effects
- **Custom Scrollbars**: Red-themed for gallery

### File Structure
```
/
├── index.php (home page)
├── gallery.php (photo gallery)
├── events.php (upcoming events)
├── login.php (admin access)
├── admin/
│   ├── index.php (gallery admin)
│   └── import_photos.php
├── includes/
│   ├── header.php
│   └── footer.php
├── config/
│   └── database.php
├── mediaGallery/ (44 photos)
├── mediaStickers/
│   ├── mmLogo.png (main logo)
│   └── motorcycleSticker.png (background element)
└── styles.css
```

## IMPROVEMENTS TO MAKE

### 1. Enhanced Visual Design
- **Advanced CSS Tricks**: 
  - Parallax scrolling effects (subtle)
  - Glass morphism elements
  - Advanced gradient combinations
  - Micro-interactions on hover
  - Smooth page transitions
  - Loading animations
- **Typography**: Better font pairing and hierarchy
- **Spacing**: Perfect spacing and alignment
- **Color Harmony**: Enhanced color palette with better contrast

### 2. User Experience
- **Smooth Animations**: Page transitions and element animations
- **Interactive Elements**: Hover effects, button animations
- **Loading States**: Skeleton loading for images
- **Error Handling**: Better error messages and fallbacks
- **Accessibility**: ARIA labels, keyboard navigation

### 3. Performance
- **Image Optimization**: Lazy loading, WebP support
- **CSS Optimization**: Minification, critical CSS
- **JavaScript**: Minimal, efficient interactions
- **Caching**: Browser caching strategies

### 4. Advanced Features
- **Photo Gallery**: 
  - Lightbox/modal for full-size images
  - Image filtering and search
  - Smooth transitions between images
  - Touch/swipe support for mobile
- **Admin Panel**:
  - Drag-and-drop photo upload
  - Real-time preview
  - Batch operations
  - Image editing tools

### 5. Mobile Experience
- **Touch Gestures**: Swipe navigation for gallery
- **Responsive Images**: Proper sizing for all devices
- **Mobile Menu**: Hamburger menu with smooth animation
- **Touch Targets**: Properly sized buttons and links

## SPECIFIC CSS TRICKS TO IMPLEMENT
1. **CSS Grid and Flexbox**: Advanced layouts
2. **CSS Custom Properties**: Dynamic theming
3. **CSS Animations**: Keyframe animations for loading
4. **CSS Filters**: Image effects and overlays
5. **CSS Transforms**: 3D effects and rotations
6. **CSS Masks**: Creative text and image effects
7. **CSS Clipping**: Unique shapes and layouts
8. **CSS Backdrop Filters**: Glass effects
9. **CSS Scroll Snap**: Smooth scrolling sections
10. **CSS Container Queries**: Advanced responsive design

## HOSTING CONSIDERATIONS
- **GoDaddy Ready**: Ensure all paths work with shared hosting
- **Database**: MySQL compatible
- **PHP Version**: Compatible with GoDaddy's PHP version
- **File Permissions**: Proper .htaccess configuration
- **Security**: Input sanitization, SQL injection prevention

## FINAL NOTES
- **Badass Aesthetic**: Professional motorcycle club vibe
- **Christian Ministry**: Respectful, faith-based content
- **Modern Design**: Contemporary web design trends
- **Performance**: Fast loading, smooth interactions
- **Maintainable**: Clean, well-documented code
- **Scalable**: Easy to add new features and content

Create the most impressive, professional motorcycle ministry website that combines modern web design with the badass aesthetic of a motorcycle club while maintaining the respectful tone of a Christian ministry. Make it a website that would make any biker proud to be part of this brotherhood.
