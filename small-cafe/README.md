# Brew & Bite - Houston's Coziest Cafe

A modern, responsive website for Brew & Bite cafe featuring a clean design with light green and white color scheme, urban typography, and interactive elements.

## 🚀 Features

- **Responsive Design**: Works perfectly on desktop, tablet, and mobile devices
- **Modern UI/UX**: Clean, professional design with smooth animations
- **Interactive Elements**: Hover effects, smooth scrolling, and mobile navigation
- **Performance Optimized**: Fast loading with optimized images and code
- **SEO Friendly**: Semantic HTML structure and meta tags
- **Accessibility**: Keyboard navigation and screen reader friendly

## 🎨 Design Elements

- **Color Scheme**: Light green (#90EE90) and white with dark green accents
- **Typography**: Urbanist font family for a modern, urban feel
- **Layout**: Grid-based responsive design
- **Animations**: Smooth transitions and scroll-triggered animations

## 📁 Project Structure

```
small-cafe/
├── index.html          # Main HTML file
├── styles.css          # CSS styles and responsive design
├── script.js           # JavaScript for interactivity
├── README.md           # Project documentation
└── media/              # Image assets
    ├── cafeMenu.png    # Menu image
    ├── coffeeSticker.png # Coffee cup sticker
    ├── sandwhichSticker.png # Sandwich sticker
    └── ...             # Other logo and branding files
```

## 🛠️ Setup Instructions

### Prerequisites
- XAMPP installed on your system
- Web browser (Chrome, Firefox, Safari, or Edge)

### Installation Steps

1. **Start XAMPP**
   - Open XAMPP Control Panel
   - Start Apache service
   - Ensure Apache is running (green status)

2. **Place Project Files**
   - Copy the entire `small-cafe` folder to your XAMPP htdocs directory
   - Default path: `C:\xampp\htdocs\small-cafe\`

3. **Access the Website**
   - Open your web browser
   - Navigate to: `http://localhost/small-cafe/`
   - The website should load with all features working

### Alternative Setup (Without XAMPP)

If you prefer not to use XAMPP, you can run the website directly:

1. **Using Python (if installed)**
   ```bash
   cd small-cafe
   python -m http.server 8000
   ```
   Then visit: `http://localhost:8000`

2. **Using Node.js (if installed)**
   ```bash
   cd small-cafe
   npx http-server
   ```
   Then visit the provided local URL

3. **Direct File Opening**
   - Simply double-click `index.html` to open in your browser
   - Note: Some features may not work due to CORS restrictions

## 📱 Sections Overview

### 🏠 Home
- Hero section with welcome message
- Animated coffee and sandwich stickers
- Call-to-action button

### ☕ Menu
- Visual menu display with cafeMenu.png
- Coffee and drink listings with prices
- Sandwich options with descriptions

### ℹ️ About
- Cafe story and mission
- Key features and values
- Local sourcing information

### ⭐ Reviews
- Customer testimonials
- Star ratings
- Social proof section

### 📍 Contact
- Houston address (1234 Main Street, Houston, TX 77002)
- Business hours
- Contact information
- Location details

## 🎯 Customization

### Colors
Edit the CSS variables in `styles.css`:
```css
:root {
    --primary-green: #90EE90;
    --light-green: #F0FFF0;
    --dark-green: #228B22;
    --white: #ffffff;
}
```

### Content
- Update menu items and prices in `index.html`
- Modify contact information in the contact section
- Add or change customer reviews
- Update business hours and address

### Images
- Replace images in the `media/` folder
- Update image references in HTML
- Maintain aspect ratios for best display

## 🔧 Technical Details

### Technologies Used
- **HTML5**: Semantic markup and structure
- **CSS3**: Modern styling with Grid and Flexbox
- **JavaScript (ES6+)**: Interactive features and animations
- **Google Fonts**: Urbanist font family

### Browser Support
- Chrome 60+
- Firefox 55+
- Safari 12+
- Edge 79+

### Performance Features
- Optimized images
- Debounced scroll events
- Lazy loading animations
- Efficient CSS animations

## 🐛 Troubleshooting

### Common Issues

1. **Images not loading**
   - Check file paths in HTML
   - Ensure images are in the `media/` folder
   - Verify file names match exactly

2. **XAMPP not working**
   - Check if Apache is running
   - Verify port 80 is not in use
   - Try restarting XAMPP services

3. **Mobile menu not working**
   - Check JavaScript console for errors
   - Ensure script.js is properly linked
   - Verify hamburger menu HTML structure

4. **Fonts not loading**
   - Check internet connection
   - Verify Google Fonts link in HTML head
   - Try refreshing the page

### Getting Help
- Check browser developer tools (F12) for console errors
- Verify all files are in the correct locations
- Ensure XAMPP Apache service is running

## 📄 License

This project is created for Brew & Bite cafe. All rights reserved.

## 🤝 Contributing

This is a custom website for Brew & Bite cafe. For modifications or updates, please contact the development team.

---

**Brew & Bite** - Where every cup tells a story and every bite satisfies your soul! ☕🥪
